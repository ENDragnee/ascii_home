@extends('layouts.admin')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
    <div class="grid grid-cols-2 gap-6">
        <a href="{{ route('admin.portfolios.create') }}" class="block p-6 bg-white rounded shadow hover:shadow-lg transition">
            <h2 class="text-xl font-bold text-blue-600">+ Add New Project</h2>
            <p class="text-gray-600">Create a new entry for your portfolio.</p>
        </a>
        <a href="{{ route('admin.media.index') }}" class="block p-6 bg-white rounded shadow hover:shadow-lg transition">
            <h2 class="text-xl font-bold text-indigo-600">Media Library</h2>
            <p class="text-gray-600">Upload and manage images and videos.</p>
        </a>
    </div>
@endsection
