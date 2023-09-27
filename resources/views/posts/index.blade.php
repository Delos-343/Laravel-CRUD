@extends('layouts.app')

@section('content')
@vite('resources/css/app.css')
<div class="container h-screen mx-auto mt-8 flex justify-between items-center">
    <h1 class="text-3xl font-semibold tracking-wider text-white mb-8">
        Posts
    </h1>
    <a href="{{ route('posts.create') }}" class="text-gray-300 font-light tracking-widest hover:shadow-lg hover:text-blue-600 transition duration-300 ease-in-out transform hover:-translate-y-2 hover:underline">
        Create your first post
    </a>
    <ul class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
        @foreach($posts as $post)
            <li class="bg-opacity-50 bg-black rounded-lg p-4 text-white border border-gray-600 shadow-md hover:shadow-lg hover:bg-blue-600 transition duration-300 ease-in-out transform hover:-translate-y-2">
                <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                <p class="mt-2 text-gray-300">{{ $post->content }}</p>
            </li>
        @endforeach
    </ul>
</div>
@endsection
