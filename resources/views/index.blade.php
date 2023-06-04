@extends('layouts.app')

@section('css')
    {{ asset('css/index.css') }}
@endsection

@section('content')
    <div class="bgCover">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        {{ __('You are logged in!') }}
        <h1 class="welcomeMsg">

        </h1>
        <div class="intro">
            <h1>StudySuccesHub</h1>
            <p>Het portaal voor studenten om jouw studiemateriaal, vragen en ervaringen te delen met
                je medestudenten!
            </p>
        </div>
    </div>
@endsection