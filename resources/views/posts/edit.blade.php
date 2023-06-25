@extends('layouts.app')

@section('css')
	{{ asset('css/createPost.css') }}
@endsection

@section('content')
	<div class="post-box">
		<h3>Je post bewerken</h3>

		<form class="flexContainer" action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

			<div class="selections">
                <div>
                    <label for="post-category">Categorie - <i>Optioneel</i></label><br>
                    <select id="post-category" name="category">
                        <option value="">-- Kies een categorie --</option>
                        <option value="it">IT</option>
                        <option value="taal">Design</option>
                        <option value="technologie">Technologie</option>
                        <option value="ingenieur">Programmeren</option>
                    </select>
                    @error('category')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
			</div>
            
            <div>
                <input type="text" id="post-title" name="title" placeholder="Titel" value="{{ $post->title }}">

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div>
                <textarea id="post-desc" name="text" placeholder="Beschrijving" rows="5">{{ $post->text }}</textarea>

                @error('text')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
                
            <div>
                <label for="post-upload">Bijlage(n)</label><br>
                <input id="post-upload" type="file" name="upload" multiple>
            </div>
                
			<input type="submit" value="Wijzigen toepassen">
            @csrf
		</form>
	</div>
    @endsection