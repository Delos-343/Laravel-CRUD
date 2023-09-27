@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-semibold mb-4">Posts</h1>
    <ul>
        @foreach($posts as $post)
            <li>
                <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
            </li>
        @endforeach
    </ul>
</div>
@endsection
