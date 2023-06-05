<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create() {
        return view('createPost');
    }

    public function store(Request $request) {
        $validated =$request->validate([
            'post_title'    => 'required|min:3',
            'post_text'     => 'required|min:10',
            'post_type'     => 'required',
            'post_course'   => 'required',
            'post_category' => 'required',
        ]);
    
    $post = new Post;
    $post->post_title = $validated['post_title'];
    $post->post_text = $validated['post_text'];
    $post->post_type = $validated['post_type'];
    $post->post_course = $validated['post_course'];
    $post->post_category = $validated['post_category'];
    }
}
