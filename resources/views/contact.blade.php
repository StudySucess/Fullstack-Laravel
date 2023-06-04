@extends('layouts.app')

@section('css')
    {{ asset('css/contact.css') }}
@endsection

@section('content')
	<main class="discussion-container">
        <div class="faq-section">
            <h1>Frequently Asked Questions</h1>
            <ul class="faq-list">
                <li>
                    <div class="question">
                        <span class="question-text">Wat is een algoritme?</span>
                        <span class="toggle-icon">▼</span>
                    </div>
                    <div class="answer">
                        <p>Een algoritme is een stapsgewijze procedure of een reeks instructies die worden gevolgd om een specifiek probleem op te lossen of een taak uit te voeren. 
                            Het is als een recept dat beschrijft hoe je een bepaald resultaat kunt bereiken.</p>
                    </div>
                </li>
                <li>
                    <div class="question">
                        <span class="question-text">Wat is het verschil tussen software en hardware?</span>
                        <span class="toggle-icon">▼</span>
                    </div>
                    <div class="answer">
                        <p>Software verwijst naar de verzameling programma's, gegevens en instructies die op een computer worden uitgevoerd, terwijl hardware de fysieke componenten van een computer of elektronisch apparaat omvat, 
                            zoals de processor, geheugenmodules, harde schijf en het toetsenbord.</p>
                    </div>
                </li>
                <li>
                    <div class="question">
                        <span class="question-text">Wat is het verschil tussen een compiler en een interpreter</span>
                        <span class="toggle-icon">▼</span>
                    </div>
                    <div class="answer">
                        <p>Een compiler en een interpreter zijn beide softwaretools die worden gebruikt om broncode om te zetten in uitvoerbare instructies, maar ze werken op verschillende manieren. 
                            Een compiler vertaalt de volledige broncode naar een uitvoerbaar bestand voordat het programma wordt uitgevoerd. Het produceert vaak efficiëntere code, maar vereist een aparte compilatiestap voordat het programma kan worden uitgevoerd. 
                            Een interpreter daarentegen vertaalt de broncode regel voor regel tijdens de uitvoering. Het voert de instructies direct uit zonder een apart compilatieproces, maar kan over het algemeen minder efficiënte uitvoering bieden in vergelijking met een compiler.</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="discussion-section">
            <h1>Contact</h1>
            <form>
                <label for="name" class="input-label">Naam: <input type="text" id="name" class="input-field"></label>
            
                <label for="email" class="input-label">E-mailadres: <input type="email" id="email" class="input-field"></label>
            
                <label for="message" class="input-label">Bericht: <textarea id="message" class="message-field"></textarea></label>
            
                <button type="submit" class="submit-btn">Verzenden</button>
            </form>  
        </div> 
	</main>
	<script src="{{ asset('contact.js') }}"></script>
@endsection