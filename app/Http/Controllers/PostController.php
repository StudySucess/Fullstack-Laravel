<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


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
            'title' => 'required|min:3',
            'text' => 'required|min:10',
            'type' => 'required',
            'course' => 'required',
            'category' => 'nullable',
            'upload' => 'file'
        ]);

        $file = $request->file('post_upload');

        $post = new Post;
        $post->title = $validated['title'];
        $post->text = $validated['text'];
        $post->type = $validated['type'];
        $post->course = $validated['course'];
        $post->category = $validated['category'];
        $post->user_id = Auth::user()->id;

        if ($file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('post_files'), $filename);
            $post->post_upload = $filename;
        }

        $post->save();

        return redirect()->route('posts.show', $post->id)->with('Status', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);

        if ($post->user_id != Auth::user()->id) {
            abort(403);
        }

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|min:3',
            'text' => 'required|min:10',
            'type' => 'required',
            'course' => 'required',
            'category' => 'nullable',
            'upload' => 'file'
        ]);

        $file = $request->file('post_upload');

        $post->title = $validated['title'];
        $post->text = $validated['text'];
        $post->type = $validated['type'];
        $post->course = $validated['course'];
        $post->category = $validated['category'];
        $post->user_id = Auth::user()->id;

        if ($file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('post_files'), $filename);
            $post->post_upload = $filename;
        }

        $post->save();

        return redirect()->route('posts.show', $post->id)->with('status', 'Post successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $post = Post::findOrFail($id);
        if ($post->user_id != Auth::user()->id) {
            abort(403);
        }

        $post->delete();

        return redirect('posts')->with('status', 'Post deleted');
    }
}
