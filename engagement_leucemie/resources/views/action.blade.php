@extends('template')
@section('content')
<div class="page-temoignages">
    <div class="temoignages-header">
        @php
        $main = $action->photos()->where('is_main', true)->first();
        @endphp
        <img src="../../../back_office/public/storage/{{$main->photo}}" titre="{{$main->titre}}" alt="{{$main->libelle}}" class="" style="height: 250px; width: 250px;">
        <h1>L'action {{$action->titre}}</h1>
        <p>Dans cet espace, retrouvez les informations de l'action {{$action->titre}}</p>
        <p>Elle aura lieu le {{ date('d/m/Y', strtotime($action->date)) }} à {{ date('H:i', strtotime($action->heure)) }}</p>
        <p>Adresse de l'action : {{ $action['adresse'] }}, {{ $action['code_postal'] }}, {{ $action['ville'] }}</p>
        <p>{{ $action['nb_inscrits'] }} personnes sont inscrites</p>
    </div>
</div>
<div class="img_secondaire">
    @foreach($action->photos()->where('is_main', false)->get() as $photo)
    <img src="../../../back_office/public/storage/{{$photo->photo}}" titre="{{$photo->titre}}" alt="{{$photo->libelle}}" class="" style="height: 250px; width: 250px;">
    @endforeach
</div>

@endsection