@extends('layouts.app')

@section('css')
	{{ asset('css/createPost.css') }}
@endsection

@section('content')
	<div class="post-box">
        <small>
            Gepost door 
            <a href="">
                {{ $post->user->name }}
                @if ($post->user->is_admin)
                    <i class="bi bi-person-fill-gear"></i>
                @endif
            </a> op {{ $post->created_at->format('d/m/Y \o\m H:i') }}
        </small>
		<h3>{{ $post->title }}</h3>
        
        @if($post->user_id == Auth::user()?->id)
            <a href="{{ route('posts.edit', $post->id) }}" style="float: right">Post wijzigen</a>
        @endauth
        
		<div class="flexContainer">
            
			<div class="selections">

                <div>
                    <span class="badge rounded-pill text-bg-primary">{{ $post->type }}</span>
                </div>

                <div>
                    <span class="badge rounded-pill text-bg-info">{{ $post->course }}</span>
                </div>

                <div>
                    <span class="badge rounded-pill text-bg-secondary">{{ $post->category }}</span>
                </div>

			</div>

			<p>{{ $post->text }}</p>

            @if ($post->upload)
                <div>
                    <p>Bijlage(n):</p>
                    <ul>
                        <li>
                            <a href="{{ asset('post_files/' . $post->upload) }}" download>{{ $post->upload }}</a>
                        </li>
                    </ul>
                </div>
            @endif
            
            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
		</div>
	</div>
    @endsection