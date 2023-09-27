@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-semibold mb-4">
        Create Post
    </h1>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="name" class="block font-medium">
                Name
            </label>
            <input type="text" name="name" id="name" class="form-input w-full" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block font-medium">
                Email
            </label>
            <input type="email" name="email" id="email" class="form-input w-full" required>
        </div>
        <div class="mb-4">
            <label for="title" class="block font-medium">
                Title
            </label>
            <input type="text" name="title" id="title" class="form-input w-full" required>
        </div>
        <div class="mb-4">
            <label for="image" class="block font-medium">
                Image
            </label>
            <input type="file" name="image" id="image" class="form-input w-full" required>
        </div>
        <div class="mb-4">
            <label for="content" class="block font-medium">
                Content
            </label>
            <textarea name="content" id="content" class="form-textarea w-full" required></textarea>
        </div>
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Post
            </button>
        </div>
    </form>
</div>
@endsection
