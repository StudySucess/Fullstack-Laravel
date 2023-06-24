@extends('layouts.app')

@section('css')
    {{ asset('css/search.css') }}
@endsection

@section('content')
	<div class="">
		<div class="row">
            <div class="col filter-bar">
                <h4>Zoekresultaten verfijnen</h4>
                <hr>
                <div class="form-group">
                    <h5>Soort</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="type1">
                        <label class="form-check-label" for="type1">Samenvatting</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="type2">
                        <label class="form-check-label" for="type2">Cheatsheet</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="type3">
                        <label class="form-check-label" for="type3">Ander studiemateriaal</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="type4">
                        <label class="form-check-label" for="type4">Stage-ervaring</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="type5">
                        <label class="form-check-label" for="type5">Vraag</label>
                    </div>
                </div>

                <div class="form-group">
                    <h5>Vak</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="vak1">
                        <label class="form-check-label" for="vak1">It-essentials</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="vak2">
                        <label class="form-check-label" for="vak2">Java Frameworks</label>
                    </div>
                </div>

                <div class="form-group">
                    <h5>Categorie</h5>
                    <input type="text" class="form-control" placeholder="categorie">
                </div>

            </div>
            <div class="col p-5" style="box-sizing: border-box">
                <div class="search-bar input-group">
                    <input type="text" class="form-control" placeholder="Zoekterm">
                    <button class="btn btn-primary" type="button" id="button-addon1" data-mdb-ripple-color="dark">Zoeken</button>
                </div>
                
                <h2>5 resulaten voor "post"</h2>

                <div class="post-container">

                    @foreach (array('Post1', 'post2', 'post3', 'post4', 'post5') as $post)
                        <div class="card" style="margin-bottom: 20px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post }}</h5>
                                <p class="card-text">Post content goes here.</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
		</div>
	</div>
@endsection