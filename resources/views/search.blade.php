@extends('layouts.app')

@section('css')
    {{ asset('css/search.css') }}
@endsection

@section('content')
		<div class="row">
            <form action="{{ route('search') }}" method="GET">

                <div class="col filter-bar" style="display: inline-block; ">
                    
                    <h4>Zoekresultaten verfijnen</h4>
                    <hr>
                    {{-- post type --}}
                    <div class="form-group">
                        <h5>Soort</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="types[]" value="samenvatting" id="type1">
                            <label class="form-check-label" for="type1">Samenvatting</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="types[]" value="cheatsheet" id="type2">
                            <label class="form-check-label" for="type2">Cheatsheet</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="types[]" value="ander-studiemateriaal" id="type3">
                            <label class="form-check-label" for="type3">Ander studiemateriaal</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="types[]" value="stage-ervaring" id="type4">
                            <label class="form-check-label" for="type4">Stage-ervaring</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="types[]" value="vraag" id="type5">
                            <label class="form-check-label" for="type5">Vraag</label>
                        </div>
                    </div>

                    {{-- post course --}}
                    <div class="form-group">
                        <h5>Vak</h5>
                        @foreach ($courses as $course)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="course[]" id="vak{{ $course->id }}" value="{{ $course->id }}">
                                <label class="form-check-label" for="vak{{ $course->id }}">{{ $course->name }}</label>
                            </div>
                        @endforeach
                    </div>

                    <div class="form-group">
                        <h5>Categorie</h5>
                        <input type="text" class="form-control" placeholder="categorie">
                    </div>

                </div>
                <div class="col p-5 inline-block" style="display: inline-block; box-sizing: border-box; width: 800px">
                    {{-- search term --}}
                    <div class="search-bar input-group">
                        <input type="text" name="searchterm" class="form-control" placeholder="Vul een zoekterm in">
                        <button class="btn btn-primary" type="submit" id="button-addon1" data-mdb-ripple-color="dark">Zoeken</button>
                    </div>
                    <h2>{{ $posts->count() }} resulaten @if (!empty($searchTerm)) voor "{{ $searchTerm }}" @endif </h2>

                    <div class="post-container">

                        @foreach ($posts as $post)
                            <div class="card" style="margin-bottom: 20px">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h5>
                                    <p class="card-text">{{ $post->text }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </form>
		</div>
@endsection