@extends('template')
@section('content')
<div class="page-temoignages">
    <div class="temoignages-header">
        <h1>Les actions</h1>
        <p>Dans cet espace vous retrouverez les actions futures et les actions passées</p>
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
    </div>
</div>
@endsection