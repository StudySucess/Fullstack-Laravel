@extends('layouts.app')

@section('css')
	{{ asset('css/showPost.css') }}
@endsection

@section('content')
    <div class="post-container">
        <h1>All posts</h1>
        @foreach ($posts as $post)
            <div class="post">
                <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
                    <small>
                        Gepost door 
                        <a href="">
                            {{ $post->user->name }}
                            @if ($post->user->is_admin)
                                <i class="bi bi-person-fill-gear"></i>
                            @endif
                        </a> op {{ $post->created_at->format('d/m/Y \o\m H:i') }}
                    </small>                @if ($post->upload)
                    <p>Attachments:</p>
                    <ul>
                        <li>
                            <a href="{{ asset('post_files/' . $post->upload) }}" download>{{ $post->upload }}</a>
                        </li>
                    </ul>
                @endif
            </div>
        @endforeach
    </div>
@endsection
