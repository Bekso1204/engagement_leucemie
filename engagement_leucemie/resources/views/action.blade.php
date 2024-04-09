@extends('template')
@section('content')
<div class="page-temoignages">
    <div class="temoignages-header">
        <h1>L'action {{$action->titre}}</h1>
        <p>Dans cet espace, retrouvez les informations de l'action {{$action->titre}}</p>
    </div>
</div>

@foreach($action->photos()->where('is_main', false)->get() as $photo)
<img src="../../../back_office/public/storage/{{$photo->photo}}" titre="{{$photo->titre}}" alt="{{$photo->libelle}}" class="" style="height: 250px; width: 250px;">
@endforeach

@endsection