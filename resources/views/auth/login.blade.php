@extends('layouts.connection')
@section('title')
    Log in
@endsection

@section('content')
    <h1>{{ __('Login') }}</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

            {{-- <input type="text" id="nameInput" name="username" placeholder="{{ __('Email Address') }}"> --}}
            
            <input id="email" type="email" placeholder="{{ __('Email Address') }}" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            {{-- <span class="error"></span> --}}
            

            {{-- <input type="password" id="passInput" name="password" placeholder="{{ __('Password') }}"> --}}

        <input id="password" type="password" placeholder="{{ __('Password') }}" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror        

            {{-- <span class="error"></span> --}}

        {{-- <span class="error"></span> --}}
        
        <div class="extra">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">{{ __('Remember Me') }}</label>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forgot">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif


        </div>
        <input type="submit" value="Login" class="submit">

    </form>
    <p class="signOption">New to StudySuccesHub? <a id="link" href="{{ route('register') }}">Sign up</a></p>
@endsection