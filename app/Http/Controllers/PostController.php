<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create() {
        return view('createPost');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'post_type' => 'required',
            'post_course' => 'required',
            'post_category' => 'required',
            'post_title' => 'required|min:3',
            'post_text' => 'required|min:10',
        ]);

        $post = new Post;
        $post->post_type = $validated['post_type'];
        $post->post_course = $validated['post_course'];
        $post->post_category = $validated['post_category'];
        $post->post_title = $validated['post_title'];
        $post->post_text = $validated['post_text'];

        // Handle file uploads
        if ($request->hasFile('post_upload')) {
            $files = $request->file('post_upload');
            $uploadedFiles = [];

            foreach ($files as $file) {
                if ($file->isValid()) {
                    $filename = $file->getClientOriginalName();
                    $file->storeAs('your_upload_folder', $filename);
                    $uploadedFiles[] = $filename;
                }
            }

            $post->post_upload = $uploadedFiles;
        }

        $post->save();

        return redirect()->back()->with('success', 'Post created successfully.');
    }

    public function show() {
        $posts = Post::all();
        return view('showPost', compact('posts'));
    }
    
        
}
