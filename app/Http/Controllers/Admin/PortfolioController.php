<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::where('user_id', auth()->id())->latest()->get();

        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolios.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'project_url' => 'nullable|url',
            'image' => 'nullable|image|max:5120', // Optional direct upload
        ]);

        $imageUrl = null;

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $disk = 'backblaze'; // or 'public'
            $path = $request->file('image')->store('portfolio_images', $disk);
            $imageUrl = Storage::disk($disk)->url($path);
        }

        Portfolio::create([
            'user_id' => auth()->id(),
            'project_name' => $validated['project_name'],
            'description' => $validated['description'],
            'project_url' => $validated['project_url'],
            'image_url' => $imageUrl,
        ]);

        return redirect()->route('admin.portfolios.index')->with('success', 'Project created!');
    }
}
