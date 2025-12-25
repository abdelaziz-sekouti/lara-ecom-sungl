@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Create Category</h1>
                <a href="{{ route('admin.categories.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded transition duration-200">
                    Back to Categories
                </a>
            </div>

            <form method="POST" action="{{ route('admin.categories.store') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                           required>
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="slug" class="block text-gray-700 font-medium mb-2">Slug</label>
                    <input type="text" id="slug" name="slug" value="{{ old('slug') }}" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                           required>
                    @error('slug')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                    <textarea id="description" name="description" rows="4" 
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('admin.categories.index') }}" class="mr-3 bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded transition duration-200">
                        Cancel
                    </a>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded transition duration-200">
                        Create Category
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection