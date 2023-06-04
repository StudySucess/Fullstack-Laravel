@extends('layouts.app')

@section('css')
	{{ asset('css/createPost.css') }}
@endsection

@section('content')
	<div class="post-box">
		<h3>Een nieuwe post aanmaken</h3>
		<form class="flexContainer">
			<div class="selections">
				<div>
					<label for="post-type">Soort post</label><br>
					<select id="post-type">
						<option disabled selected value="d">-- Kies soort post --
						</option>
						<option>Vraag</option>
						<option>Samenvatting</option>
						<option>Cheatsheet</option>
						<option>Stage-ervaring</option>
						<option>Andere</option>
					</select>
				</div>
				<div>
					<label for="post-course">Vak</label><br>
					<select id="post-course">
						<option disabled selected value>-- Kies een vak --</option>
						<option>IT-essentials</option>
						<option>Java Advanced</option>
						<option>Java Frameworks</option>
						<option>OSFundamentals</option>
						<option></option>
					</select>
				</div>
				<div>
					<label for="post-category">Categorie - <i>Optioneel</i></label><br>
					<select id="post-category">
						<option selected value>-- Kies een categorie --</option>
						<option>IT</option>
						<option>Taal</option>
						<option>Technologie</option>
						<option>Ingenieur</option>
					</select>
				</div>
			</div>



			<input type="text" id="post-title" name="post-title" placeholder="Titel">

			<textarea id="post-desc" name="post-text" placeholder="Beschrijving" rows="5"></textarea>
			<div>
				<label for="post-upload">Bijlage(n)</label><br>
				<input id="post-upload" type="file">
			</div>

			<input type="submit" value="Post">
		</form>
	</div>
@endsection