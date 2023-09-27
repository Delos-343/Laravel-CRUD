<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'title' => 'required|string',
            'image' => 'required|image',
            'content' => 'required|string',
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        Post::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'title' => $data['title'],
            'image' => $data['image'],
            'content' => $data['content'],
        ]);

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }

}
