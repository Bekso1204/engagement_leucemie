@extends('template')
@section('content')

<form method="POST" action="{{ route('temoignage.update',[$temoignage->id])}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="td-image"><img src="../../storage/{{$temoignage->image}}" alt=""></div>
    <br>
    <div class="mb-3">
        <input type="file" class="form-control" id="image_temoignage" name="image_temoignage" name="image_temoignage" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" value="{{$temoignage->titre}}" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" value="{{$temoignage->prenom}}" required>
    </div>
    <div class="mb-3">
        <input type="date" class="form-control" id="date" name="date" placeholder="Date" value="{{$temoignage->date}}" required>
    </div>
    <div class="mb-3">
        <textarea class="form-control" id="contenu" rows="10" name="contenu" value="{{$temoignage->contenu}}" required>{{$temoignage->contenu}}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Modifier</button>
</form>

@endsection