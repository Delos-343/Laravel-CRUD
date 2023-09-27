@extends('layouts.app')

@section('content')
    <div class="container">
        <h1></h1>
        <form action="">
            @csrf
            <div>
                <label for=""></label>
                <input type="text">
            </div>
            <div>
                <label for=""></label>
                <input type="text">
            </div>
            <div>
                <label for=""></label>
                <input type="text">
            </div>
            <div>
                <label for=""></label>
                <textarea name="content">
            </div>
            <div>
                <button type="submit"></button>
            </div>
        </form>
    </div>
@endsection
