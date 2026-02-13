@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Add New Project</h1>
        <a href="{{ route('admin.portfolios.index') }}" class="text-blue-500 hover:underline">Back to List</a>
    </div>

    <div class="bg-white p-6 rounded shadow max-w-2xl">
        <form action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Project Name</label>
                <input type="text" name="project_name" class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Description</label>
                <textarea name="description" rows="4" class="w-full border p-2 rounded"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Project URL</label>
                <input type="url" name="project_url" placeholder="https://..." class="w-full border p-2 rounded">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2">Cover Image</label>
                <input type="file" name="image" class="w-full border p-2 rounded">
                <p class="text-sm text-gray-500 mt-1">Accepts JPG, PNG.</p>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Save Project</button>
        </form>
    </div>
@endsection
