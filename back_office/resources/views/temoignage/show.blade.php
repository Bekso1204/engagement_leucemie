@extends('template')
@section('content')

<form method="POST" action="{{ route('temoignage.update',[$temoignage->id])}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="td-image"><img src="../../public/storage/{{$temoignage->image}}" alt=""></div>
    <br>
    <div class="mb-3">
        <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" value="{{$temoignage->titre}}" disabled>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" value="{{$temoignage->prenom}}" disabled>
    </div>
    <div class="mb-3">
        <input type="date" class="form-control" id="date" name="date" placeholder="Date" value="{{$temoignage->date}}" disabled>
    </div>
    <div class="mb-3">
        <textarea class="form-control" id="contenu" rows="10" name="contenu" value="{{$temoignage->contenu}}" disabled>{{$temoignage->contenu}}</textarea>
    </div>
</form>

@endsection