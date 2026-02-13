@extends('layouts.admin')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Media Library</h1>

    <!-- Upload Section -->
    <div class="bg-white p-6 rounded shadow mb-8">
        <h3 class="font-bold text-lg mb-4">Upload New File</h3>
        <form action="{{ route('admin.media.store') }}" method="POST" enctype="multipart/form-data" class="flex gap-4">
            @csrf
            <input type="file" name="file" class="border p-2 rounded flex-1" required>
            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Upload</button>
        </form>
    </div>

    <!-- Media Grid -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @foreach($media as $item)
            <div class="bg-white p-2 rounded shadow relative group">
                @if($item->type == 'image' || $item->type == 'profile')
                    <img src="{{ $item->url }}" class="w-full h-32 object-cover rounded">
                @else
                    <div class="w-full h-32 bg-gray-200 flex items-center justify-center rounded">
                        <span class="text-gray-500">{{ $item->type }}</span>
                    </div>
                @endif

                <div class="mt-2 text-xs text-gray-500 truncate">{{ $item->mime }}</div>

                <!-- Delete Button -->
                <form action="{{ route('admin.media.destroy', $item->id) }}" method="POST" class="mt-2" onsubmit="return confirm('Delete this file?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 text-xs hover:underline">Delete</button>
                </form>

                <!-- Copy URL Helper -->
                <input type="text" value="{{ $item->url }}" class="w-full text-xs mt-1 border p-1" readonly onclick="this.select()">
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $media->links() }}
    </div>
@endsection
