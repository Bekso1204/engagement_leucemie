@extends('template')
@section('content')
<div class="page-temoignages">
    <div class="temoignages-header">
        <h1>Les prochaines actions</h1>
        <p>Ici retrouvez les trois prochaines actions</p>
    </div>
    <div class="container">
        @foreach($actions as $ligne)
        <div class="temoignage">
            <div class="img-container">
                @php
                $main_photo = $ligne->photos()->where('is_main', true)->first();
                @endphp
                <img src="../../../back_office/public/storage/{{$main_photo->photo}}" alt="">
            </div>
            <div class="contenu">
                <h2>{{$ligne->titre}}</h2>

                <h4>{{ date('d/m/Y', strtotime($ligne->date)) }} {{ date('H:i', strtotime($ligne->heure)) }}</h4>
                <a href="{{route('action', [$ligne->id])}}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
        <div class="temoignage">
            <div class="contenu">
                <h2>Voir plus</h2>
            <a href="{{route('actions')}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
                </svg>
            </a>
            </div>
        </div>
    </div>

    <div class="temoignages-header">
        <h1>Les dernières actualités</h1>
        <p>Dans cet espace vous retrouverez les dernières actualités publiées</p>
    </div>
    <div class="container">
        @foreach($actualites as $actu)
        <div class="temoignage">
            <div class="img-container">
                <img src="../../../back_office/public/storage/{{$actu->image}}" alt="Actualité {{$actu->titre}}">
            </div>
            <div class="contenu">
                <h2>{{$actu->titre}}</h2>
                @php
                $contenu = $actu->contenu;
                $mots = str_word_count($contenu, 1);
                $nbMots = implode(' ', array_slice($mots, 0, 11));
                @endphp
                <p>{{$nbMots}}...</p>
                <h4>{{ date('d/m/Y', strtotime($actu->date)) }}</h4>
                <a href="{{route('actualite', [$actu->id])}}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
        <div class="temoignage">
            <div class="contenu">
                <h2>Voir plus</h2>
            <a href="{{route('actualites')}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
                </svg>
            </a>
            </div>
        </div>
    </div>

    <div class="temoignages-header">
        <h1>Les derniers témoignages</h1>
        <p>Dans cet espace vous retrouverez les derniers témoignages publiés</p>
    </div>
    <div class="container">
        @foreach($temoignages as $ligne)
        <div class="temoignage">
            <div class="img-container">
                <img src="../../../back_office/public/storage/{{$ligne->image}}" alt="">
            </div>
            <div class="contenu">
                <h3><i class="fa-solid fa-user"></i>{{$ligne->prenom}}</h3>
                <h2>{{$ligne->titre}}</h2>
                @php
                $contenu = $ligne->contenu;
                $mots = str_word_count($contenu, 1);
                $nbMots = implode(' ', array_slice($mots, 0, 11));
                @endphp
                <p>{{$nbMots}}...</p>
                <h4>{{ date('d/m/Y', strtotime($ligne->date)) }}</h4>
                <a href="{{ route('temoignage',[$ligne["id"]]) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
        <div class="temoignage">
            <div class="contenu">
                <h2>Voir plus</h2>
            <a href="{{route('temoignages')}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
                </svg>
            </a>
            </div>
        </div>
    </div>
</div>
@endsection