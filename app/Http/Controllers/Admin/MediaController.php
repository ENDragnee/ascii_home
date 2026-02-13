<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {
        // Show latest media first, filtered by the logged-in user
        $media = Media::where('user_id', Auth::id())
            ->latest()
            ->paginate(20);

        return view('admin.media.index', compact('media'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:10240', // 10MB Max
        ]);

        $file = $request->file('file');

        // Ensure this matches the disk name in config/filesystems.php
        $diskName = 'backblaze';

        try {
            // 1. Attempt to store the file
            // We use 'public' visibility so it can be accessed via URL later (if bucket allows)
            $path = $file->store('uploads', $diskName);

            // 2. Safety Check: If store() returns false, the upload failed silently.
            if ($path === false) {
                return back()->withErrors(['file' => 'The file could not be uploaded to the server. Check storage logs.']);
            }

            // 3. Get the Disk Instance
            /** @var \Illuminate\Contracts\Filesystem\Cloud $filesystem */
            $filesystem = Storage::disk($diskName);

            // 4. Generate the URL (This requires the upload to have succeeded)
            $url = $filesystem->url($path);

            // 5. Create Database Record
            Media::create([
                'user_id' => Auth::id(),
                'type' => explode('/', $file->getMimeType())[0] ?? 'image',
                'path' => $path,
                'url' => $url,
                'mime' => $file->getMimeType(),
                'size' => $file->getSize(),
            ]);

            return back()->with('success', 'File uploaded successfully.');

        } catch (\Exception $e) {
            // Log the actual error for debugging (e.g., AWS Credentials, Bucket Name issues)
            Log::error('Media Upload Failed: '.$e->getMessage());

            return back()->withErrors(['file' => 'Upload failed: '.$e->getMessage()]);
        }
    }

    public function destroy(Media $medium)
    {
        $diskName = 'backblaze';

        try {
            // 1. Delete from Storage (Backblaze)
            if (Storage::disk($diskName)->exists($medium->path)) {
                Storage::disk($diskName)->delete($medium->path);
            }

            // 2. Delete from Database
            $medium->delete();

            return back()->with('success', 'File deleted.');

        } catch (\Exception $e) {
            Log::error('Media Deletion Failed: '.$e->getMessage());

            return back()->withErrors(['file' => 'Could not delete file: '.$e->getMessage()]);
        }
    }
}
