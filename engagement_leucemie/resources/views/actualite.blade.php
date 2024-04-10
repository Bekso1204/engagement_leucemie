@extends('template')
@section('content')
<div class="page-temoignages">
    <div class="temoignages-header">
        <h1>L'actualite {{$actu->titre}}</h1>
        <p>Dans cet espace, retrouvez les informations de l'actualite {{$actu->titre}}</p>
    </div>
</div>

<img src="../../../back_office/public/storage/{{$actu->image}}" alt="{{$actu->image}}" class="" style="height: 250px; width: 250px;">

@endsection