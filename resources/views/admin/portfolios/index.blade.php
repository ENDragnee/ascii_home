@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">My Portfolios</h1>
        <a href="{{ route('admin.portfolios.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Add New Project
        </a>
    </div>

    @if($portfolios->isEmpty())
        <div class="bg-white p-8 rounded shadow text-center text-gray-500">
            You haven't added any projects yet.
        </div>
    @else
        <div class="bg-white rounded shadow overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-100 border-b">
                        <th class="p-4 font-semibold text-gray-700">Image</th>
                        <th class="p-4 font-semibold text-gray-700">Project Name</th>
                        <th class="p-4 font-semibold text-gray-700">URL</th>
                        <th class="p-4 font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($portfolios as $portfolio)
                        <tr class="hover:bg-gray-50">
                            <td class="p-4">
                                @if($portfolio->image_url)
                                    <img src="{{ $portfolio->image_url }}" alt="Project Image" class="h-12 w-12 object-cover rounded">
                                @else
                                    <div class="h-12 w-12 bg-gray-200 rounded flex items-center justify-center text-xs text-gray-500">No Img</div>
                                @endif
                            </td>
                            <td class="p-4 font-medium text-gray-900">
                                {{ $portfolio->project_name }}
                            </td>
                            <td class="p-4 text-blue-500">
                                @if($portfolio->project_url)
                                    <a href="{{ $portfolio->project_url }}" target="_blank" class="hover:underline">Visit Link</a>
                                @else
                                    <span class="text-gray-400">No Link</span>
                                @endif
                            </td>
                            <td class="p-4">
                                <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 text-sm font-semibold">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection
