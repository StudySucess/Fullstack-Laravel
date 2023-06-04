@extends('layouts.app')

@section('css')
    {{ asset('css/about.css') }}
@endsection

@section('content')
    <div class="About-section">
        <div class="inner-container">
            <h1>About Us</h1>
            <p class="text">Bij ons draait het allemaal om studenten.<br>
                Onze missie is om een online platform te creëren waar studenten elkaar kunnen ondersteunen, inspireren en versterken tijdens hun studie.<br>
                We willen studenten voorzien van de tools en kansen die ze nodig hebben om hun academische reis te verbeteren en te verrijken.<br>
                Ons doel is om een gemeenschap te creëren waar studenten samenkomen en kennis delen.<br>
                We geloven dat wanneer studenten samenwerken en elkaar helpen, ze in staat zullen zijn om te groeien, te begrijpen en uit te blinken in hun vakgebied.<br>
                We willen studenten aanmoedigen om hun expertise te delen, elkaar te ondersteunen en te leren van de ervaringen van hun medestudenten.
            </p>
            <a href="overview.php"class="readMoreBtn">Read More</a>

        </div>
    </div>
@endsection