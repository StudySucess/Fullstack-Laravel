@extends('layouts.connection')

@section('content')
    <h1>Create a new account</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <input id="name" type="text" name="name" placeholder="{{ __('Name') }}" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input id="email" type="email" name="email" placeholder="{{ __('Email Address') }}" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input id="password" type="password" name="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input id="password-confirm" type="password" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required autocomplete="new-password">

        <input type="submit" value="{{ __('Sign up') }}" class="submit" style="bottom: 80px">
    </form>
    <p class="signOption" style="bottom: 30px">Already have an account? <a id="link" href="{{ route('login') }}">Log in</a></p>
@endsection
