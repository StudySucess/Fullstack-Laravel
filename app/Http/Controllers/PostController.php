<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    //zorgen dat de niet ingelogde gebruiken alleen posts.index & posts.show kan bekijken:
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'post_type' => 'required',
            'post_course' => 'required',
            'post_title' => 'required|min:3',
            'post_text' => 'required|min:10',
            'post_upload' => 'file',
        ]);

        $file = $request->file('post_upload');

        $post = new Post;
        $post->post_type = $validated['post_type'];
        $post->post_course = $validated['post_course'];
        $post->post_title = $validated['post_title'];
        $post->post_text = $validated['post_text'];

        if ($file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('post_files'), $filename);
            $post->post_upload = $filename;
        }

        $post->save();

        return redirect()->back()->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

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
