@extends('layouts.app')

@section('content')
@vite('resources/css/app.css')
<div class="container mx-auto mt-8">
    <h1 class="text-3xl font-semibold tracking-wider text-white mb-8">
        Create Post
    </h1>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="bg-opacity-50 bg-black rounded-sm px-6 py-8 max-w-full text-white border border-gray-600 shadow-md hover:shadow-lg hover:bg-blue-600 transition duration-300 ease-in-out transform hover:-translate-y-2">
            <div class="mb-4">
                <label for="name" class="block text-white font-medium mb-2">
                    Name
                </label>
                <input type="text" name="name" id="name" class="form-input w-full bg-transparent pl-2 py-2 text-white border-b-2 border-gray-500" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-white font-medium mb-2">
                    Email
                </label>
                <input type="email" name="email" id="email" class="form-input w-full bg-transparent pl-2 py-2 text-white border-b-2 border-gray-500" required>
            </div>
            <div class="mb-4">
                <label for="title" class="block text-white font-medium mb-2">
                    Title
                </label>
                <input type="text" name="title" id="title" class="form-input w-full bg-transparent pl-2 py-2 text-white border-b-2 border-gray-500" required>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-white font-medium mb-2">
                    Image
                </label>
                <input type="url" name="image" id="image" class="form-input w-full bg-transparent pl-2 py-2 text-white border-b-2 border-gray-500" required>
            </div>            
            <div class="mb-4">
                <label for="content" class="block text-white font-medium mb-2">
                    Content
                </label>
                <textarea name="content" id="content" class="form-textarea w-full bg-transparent pl-2 py-2 text-white border-b-2 border-gray-500" required></textarea>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-8 rounded-md hover:shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1">
                    Post
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
