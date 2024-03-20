@extends('template')
@section('content')
<div class="page-temoignages">
    <div class="temoignages-header">
        <h1>Les témoignages</h1>
        <p>Dans cet espace vous retrouverez les témoignages de ceux qui ont surmonté la maladie</p>
    </div>
    <div class="container">
        @for($i = 0; $i < 6; $i++)
        <div class="temoignage">
            <div class="img-container">
                <img src="img/temoignage-placeholder.jpg" alt="">
            </div>
            <div class="contenu">
                <h2>NOM Prénom</h2>
                <p>DescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescription</p>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection