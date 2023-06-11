@extends('layouts.app')

@section('css')
	{{ asset('css/createPost.css') }}
@endsection

@section('content')
	<div class="post-box">
		<h3>Een nieuwe post aanmaken</h3>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
		<form class="flexContainer" action="{{ route('posts.create') }}" method="POST" enctype="multipart/form-data">
            
			<div class="selections">
                <div>
                    <label for="post-type">Soort post</label><br>
                    <select id="post-type" name="post_type">
                        <option disabled selected value="">-- Kies soort post --</option>
                        <option value="vraag">Vraag</option>
                        <option value="samenvatting">Samenvatting</option>
                        <option value="cheatsheet">Cheatsheet</option>
                        <option value="stage-ervaring">Stage-ervaring</option>
                        <option value="andere">Andere</option>
                    </select>
                    @error('post_type')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div>
                    <label for="post-course">Vak</label><br>
                    <select id="post-course" name="post_course">
                        <option disabled selected value="">-- Kies een vak --</option>
                        <option value="it-essentials">IT-essentials</option>
                        <option value="java-advanced">Java Advanced</option>
                        <option value="java-frameworks">Java Frameworks</option>
                        <option value="os-fundamentals">OSFundamentals</option>
                    </select>
                    @error('post_course')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div>
                    <label for="post-category">Categorie - <i>Optioneel</i></label><br>
                    <select id="post-category" name="post_category">
                        <option value="">-- Kies een categorie --</option>
                        <option value="it">IT</option>
                        <option value="taal">Taal</option>
                        <option value="technologie">Technologie</option>
                        <option value="ingenieur">Ingenieur</option>
                    </select>
                    @error('post_category')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
			</div>
            
            
            
			<input type="text" id="post-title" name="post_title" placeholder="Titel">
            @error('post_title')
            <strong>{{ $message }}</strong>
            @enderror
            
			<textarea id="post-desc" name="post_text" placeholder="Beschrijving" rows="5"></textarea>
            @error('post_text')
                <strong>{{ $message }}</strong>
            @enderror
                
                <div>
                    <label for="post-upload">Bijlage(n)</label><br>
                    <input id="post-upload" type="file" name="post_upload" multiple>
                </div>
                
			<input type="submit" value="Post">
            @csrf
		</form>
	</div>
    @endsection