<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     // return view('index');
    //     // Ambil semua post yang sudah published, urutkan dari yang terbaru
    //     $posts = Post::where('published', true)
    //         ->orderBy('published_at', 'desc')
    //         ->orderBy('created_at', 'desc')
    //         ->paginate(9);

    //     return view('posts.index', compact('posts'));
    // }
    public function index()
{
    $posts = Post::where('published', true)
        ->orderBy('published_at', 'desc')
        ->paginate(9);

    return view('posts.index', compact('posts'));
}

    public function show($id)
    {
        $post = Post::findOrFail($id);
        
        // Increment view counter
        $post->increment('views');
        
        // Ambil 3 related posts (same category)
        $relatedPosts = Post::where('category', $post->category)
            ->where('id', '!=', $post->id)
            ->where('published', true)
            ->limit(3)
            ->get();

        return view('posts.show', compact('post', 'relatedPosts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}