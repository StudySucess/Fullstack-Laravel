@extends('layouts.app')

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
                        @foreach ($post->post_upload as $file)
                            <li>
                                <a href="{{ asset('your_upload_folder/' . $file) }}" download>{{ $file }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach
    </div>
@endsection
