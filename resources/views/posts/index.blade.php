@extends('layouts.app')

@section('css')
	{{ asset('css/showPost.css') }}
@endsection

@section('content')
    <div class="post-container">
        <h1>All Posts</h1>
        @foreach ($posts as $post)
            <div class="post">
                <h2>{{ $post->post_title }}</h2>
                <p>{{ $post->post_text }}</p>
                @if ($post->post_upload)
                    <p>Attachments:</p>
                    <ul>
                        <li>
                            <a href="{{ asset('post_files/' . $post->post_upload) }}" download>{{ $post->post_upload }}</a>
                        </li>
                    </ul>
                @endif
            </div>
        @endforeach
    </div>
@endsection
