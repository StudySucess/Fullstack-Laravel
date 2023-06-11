@extends('layouts.app')

@section('css')
	{{ asset('css/createPost.css') }}
@endsection

@section('content')
	<div class="post-box">
        <small>
            Gepost door 
            <a href="">{{ $post->user->name }}</a>
             op {{ $post->created_at->format('d/m/Y \o\m H:i') }}
        </small>
        @if($post->user_id == Auth::user()?->id)
            <a href="{{ route('posts.edit', $post->id) }}" style="float: right">Post wijzigen</a>
        @endif

		<h3>{{ $post->title }}</h3>

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
            
            @if($post->user_id == Auth::user()?->id)
                <form method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" href="{{ route('posts.destroy', $post->id) }}" style="float: right" onclick="return confirm('Are you sure you want to delete this post, this action cannot be undone!');" class="btn btn-danger btn-sm">Post verwijderen</button>
                </form>
            @endif

            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            
            @endif

		</div>
	</div>
    @endsection