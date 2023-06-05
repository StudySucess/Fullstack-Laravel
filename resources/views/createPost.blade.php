@extends('layouts.app')

@section('css')
	{{ asset('css/createPost.css') }}
@endsection

@section('content')
	<div class="post-box">
		<h3>Een nieuwe post aanmaken</h3>
		<form class="flexContainer" action="{{ route('store') }}">
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
                </div>
			</div>



			<input type="text" id="post-title" name="post_title" placeholder="Titel">

			<textarea id="post-desc" name="post_text" placeholder="Beschrijving" rows="5"></textarea>
			<div>
				<label for="post-upload">Bijlage(n)</label><br>
				<input id="post-upload" type="file" name="post_upload">
			</div>

			<input type="submit" value="Post">
		</form>
	</div>
@endsection