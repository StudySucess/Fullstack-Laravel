<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    public function create()
    {
        return view('createPost');
    }

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


    public function show()
    {
        $posts = Post::all();
        return view('showPost', compact('posts'));
    }    
}
