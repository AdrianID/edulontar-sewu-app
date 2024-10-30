<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:posts',
            'content' => 'required',
            'featured_image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('featured_image')) {
            $validatedData['featured_image'] = $request->file('featured_image')->store('posts', 'public');
        }

        Posts::create($validatedData);
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show(Posts $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Posts $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Posts $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:posts,slug,' . $post->id,
            'content' => 'required',
            'featured_image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('featured_image')) {
            $validatedData['featured_image'] = $request->file('featured_image')->store('posts', 'public');
        }

        $post->update($validatedData);
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Posts $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
