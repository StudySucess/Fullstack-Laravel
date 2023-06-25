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
        <form class="flexContainer" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="selections">
                <div>
                    <label for="post-type">Soort post</label><br>
                    <select id="post-type" name="type" class="@error('type') is-invalid @enderror">
                        <option disabled selected value="">-- Kies soort post --</option>
                        <option value="samenvatting">Samenvatting</option>
                        <option value="cheatsheet">Cheatsheet</option>
                        <option value="ander-studiemateriaal">Ander-studiemateriaal</option>
                        <option value="stage-ervaring">Stage-ervaring</option>
                        <option value="vraag">Vraag</option>
                    </select>
                    @error('type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="course-container">
                    <label for="post-course">Vak</label><br>
                    <select id="post-course" name="course" class="@error('course') is-invalid @enderror">
                        <option disabled selected value="">-- Kies een vak --</option>
                        @foreach($vakken as $vak)
                            <option value="{{ $vak->id }}">{{ $vak->name }}</option>
                        @endforeach
                    </select>
                    @error('course')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

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
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div>
                <input type="text" id="post-title" name="title" placeholder="Titel" class="@error('title') is-invalid @enderror">
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div>
                <textarea id="post-desc" name="text" placeholder="Beschrijving" rows="5" class="@error('text') is-invalid @enderror"></textarea>
                @error('text')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="upload-container">
                <label for="post-upload">Bijlage(n)</label><br>
                <input id="post-upload" type="file" name="upload" class="@error('upload') is-invalid @enderror" multiple>
                @error('text')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <input type="submit" value="Post">
            @csrf
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Initially hide the 'course' and 'upload' elements
    $('.course-container').hide();
    $('.upload-container').hide();

    // Show/hide elements based on the selected post type
    $('#post-type').change(function() {
        var selectedType = $(this).val();

        if (selectedType === 'vraag') {
            $('.course-container').show();
            $('.upload-container').hide();
        } else if (selectedType === 'samenvatting' || selectedType === 'cheatsheet' || selectedType === 'ander-studiemateriaal') {
            $('.course-container').show();
            $('.upload-container').show();
        } else if (selectedType === 'stage-ervaring') {
            $('.course-container').hide();
            $('.upload-container').hide();
        }
    });
});
</script>
@endsection