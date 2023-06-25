@extends('layouts.app')

@section('css')
    {{ asset('css/createCourse.css') }}
@endsection

@extends('layouts.app')

@section('css')
    {{ asset('css/createPost.css') }}
@endsection

@section('content')
    <div class="course-box">

        <h3>Een nieuwe cursus aanmaken</h3>

        {{-- @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif --}}

        <form class="flexContainer" action="{{ route('posts.create') }}" method="POST">
            @csrf

            <div>
                <input type="text" id="course-name" name="name" placeholder="Cursusnaam">

                @error('name')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>

            <input type="submit" value="Cursus aanmaken">
        </form>

    </div>
@endsection
