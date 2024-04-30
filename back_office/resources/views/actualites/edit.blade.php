@extends('template')
@section('content')

<form method="POST" action="{{ route('actualite.update',[$actu->id])}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <input type="file" class="form-control" id="image_actu" name="image_actu" name="image_actu" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="titre_actu" name="titre_actu" placeholder="Titre" value="{{$actu->titre}}" required>
    </div>
    <div class="mb-3">
        <input type="date" class="form-control" id="date_actu" name="date_actu" placeholder="Date" value="{{$actu->date}}" required>
    </div>
    <div class="mb-3">
        <textarea class="form-control" id="contenu_actu" rows="10" name="contenu_actu" placeholder="Contenu" value="{{$actu->contenu}}" required>{{$actu->contenu}}</textarea>
    </div>
    <button type="submit" class="btn btn-success" >Ajouter</button>
</form>

@endsection
