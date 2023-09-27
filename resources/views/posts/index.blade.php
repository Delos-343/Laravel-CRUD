@extends('layouts.app')

@section('content')
@vite('resources/css/app.css')
<div class="container h-screen mx-auto mt-8">
    <h1 class="text-3xl font-semibold tracking-wider text-white mb-4">
        Posts
    </h1>
    <a href="{{ route('posts.create') }}" class="text-gray-300 font-light tracking-widest hover:shadow-lg hover:text-blue-600 transition duration-300 ease-in-out transform hover:translate-y-4 hover:-translate-x-8 hover:underline">
        > Create your first post
    </a>
    <ul class="grid grid-cols-1 gap-4 mt-8 md:grid-cols-2 lg:grid-cols-3">
    @foreach($posts as $post)
        <li class="bg-opacity-50 bg-black rounded-lg p-4 text-white border border-gray-600 shadow-md hover:shadow-lg hover:bg-blue-600 transition duration-300 ease-in-out transform hover:-translate-y-2">
            <div class="flex w-full space-x-4">
                <img src={{ $post->image }} alt="User" width="36" height="36">
                <h2 class="text-xl mt-2 font-semibold">{{ $post->title }}</h2>
            </div>
            <p class="mt-4 text-gray-300 text-sm font-light">{{ $post->content }}</p>
            <p class="mt-8 text-gray-300 text-xs font-extralight">{{ $post->email }}</p>
            
            <!-- Delete Button -->
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="mt-4">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-8 rounded-md hover:shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1">Delete</button>
            </form>
        </li>
    @endforeach
    </ul>
</div>
@endsection
