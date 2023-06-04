<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	{{-- importeerd boostrap, voor standraard layout & dropdown script --}}
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])

	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="@yield('css')">
	<title>{{ config('app.name', 'Laravel') }}</title>
	
</head>
<body>
	<header class="header headerGradient">
		<a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" class="headerLogo"></a>
        <nav class="navigationItems">
            <li><a href="{{ url('overview') }}">Overzicht</a></li>
            <li>
                <a href="{{ url('classes') }}">Vakken</a>
                <a href=""><img src="{{ asset('images/header/dropdown-sel.svg') }}"></a>
            </li>
            <li><a href="{{ url('experiences') }}">Ervaringen</a></li>
            <li class="searchElement">
                <a href="{{ url('search') }}"><img></a>
                <input type="text" class="searchBar" placeholder="Zoek studiemateriaal / posts">
                <div class="searchSymbol"></div>
            </li>
            <li><a href="{{ url('about') }}">Over ons</a></li>
        </nav>
		<div class="connect">
			
			{{-- indien gebruiker niet ingelogd is (guest): --}}
			@guest
				@if (Route::has('login'))
					<li>
						<a href="{{ route('login') }}" class="loginBtn">{{ __('Login') }}</a>
					</li>
				@endif

				@if (Route::has('register'))
					<li>
						<a href="{{ route('register') }}" class="register">{{ __('Register') }}</a>
					</li>
				@endif

			{{-- indien gebruiker ingelogd is: --}}
			@else
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="dropdown-toggle username" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }}
					</a>

					{{-- user dropdown menu --}}
					<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</div>
				</li>
			@endguest
			<li></li>
		</div>
		
    </header>
	<main>

		{{-- de locatie waar dat de view-inhoud met naam 'content' verwacht voor in de view die deze template (app.blade.php) gebruiken (extends): --}}
		@yield('content')

	</main>
	<footer class="footer">
        <div class="inner-container1">
            <div class="footer-links">
                <ul>
                    <li><a href="{{ url('contact') }}">Contact</a></li> 
                    <li><a href="{{ url('about') }}" >Over ons</a></li>
                    <li><a href="https://login.ehb.be/login">Canvas</a></li>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <ul>
                    <li><a href="https://www.facebook.com/erasmushogeschool" target="_blank"><span class="icon-facebook2"></span></a></li>
                    <li><a href="https://www.youtube.com/user/ehbrussel" target="_blank"><span class="icon-youtube1"></span></a></li>
                    <li><a href="https://www.linkedin.com/school/erasmushogeschool-brussel/" target="_blank"><span class="icon-linkedin1"></span></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-contact">
		<p>Bel 02 523 37 37</p>
            <p>Mail info@ehb.be</p>
        </div>
        <div class="footer-copy">
            <p>&copy; StudySuccesHub2023</p>
        </div>
        <div class="collaboration">
            <p>Collaboration with Erasmushogeschool Brussel</p>
        </div>
    </footer>
</body>
</html>