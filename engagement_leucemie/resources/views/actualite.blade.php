@extends('template')
@section('content')
<div class="page-temoignages">
    <div class="temoignages-header">
        <div class="img-container">
            <img src="../../../back_office/public/storage/{{$actu->image}}" alt="{{$actu->image}}" class="" style="height: 250px; width: 250px;">
        </div>
        <h1>L'actualite {{$actu->titre}}</h1>
        <p>Dans cet espace, retrouvez les informations de l'actualite {{$actu->titre}}</p>
        <p>Publiée le {{ date('d/m/Y', strtotime($actu->date)) }}</p>
        <textarea disabled>
        {{$actu->contenu}}
        </textarea>
    </div>

</div>

@endsection

