@extends('layouts.app')

@section('css')
    {{ asset('css/classes.css') }}
@endsection

@section('content')
    <h1>Je cursussen</h1>
    <div class="courseContainer">
        @foreach($vakken as $vak)
            <div class="course" onclick="window.location.href='{{ route('courses.show', $vak->name) }}'">
                <h3>{{ $vak->name }}</h3>
                <h4>Academiejaar 2022-2023</h4>
                <p>{{ $vak->naam_docent }}</p>
            </div>
        @endforeach
    </div>
@endsection
