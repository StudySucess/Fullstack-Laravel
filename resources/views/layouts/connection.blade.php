<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <main>
        <div class="headDisplay">

            <a href="index.php"><img class="logo" src="{{ url('images/logo-complete.png') }}"></a>

            <div class="registerTab">
                
                @yield('content');

            </div>
        </div>
    </main>
</body>

</div>