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
                    <label for="post-type">Soort post</label><br>
                    <select id="post-type" name="type">
                        <option disabled selected value="">-- Kies soort post --</option>
                        <option value="vraag">Vraag</option>
                        <option value="samenvatting">Samenvatting</option>
                        <option value="cheatsheet">Cheatsheet</option>
                        <option value="stage-ervaring">Stage-ervaring</option>
                        <option value="andere">Andere</option>
                    </select>
                    @error('type')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div>
                    <label for="post-course">Vak</label><br>
                    <select id="post-course" name="course">
                        <option disabled selected value="">-- Kies een vak --</option>
                        <option value="it-essentials">IT-essentials</option>
                        <option value="java-advanced">Java Advanced</option>
                        <option value="java-frameworks">Java Frameworks</option>
                        <option value="os-fundamentals">OSFundamentals</option>
                    </select>
                    @error('course')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div>
                    <label for="post-category">Categorie - <i>Optioneel</i></label><br>
                    <select id="post-category" name="category">
                        <option value="">-- Kies een categorie --</option>
                        <option value="it">IT</option>
                        <option value="taal">Taal</option>
                        <option value="technologie">Technologie</option>
                        <option value="ingenieur">Ingenieur</option>
                    </select>
                    @error('category')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
			</div>
            
            <div>
                <input type="text" id="post-title" name="title" placeholder="Titel" value="{{ $post->title }}">

                @error('title')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>

            <div>
                <textarea id="post-desc" name="text" placeholder="Beschrijving" rows="5">{{ $post->text }}</textarea>

                @error('text')
                    <strong>{{ $message }}</strong>
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