@extends('template')
@section('content')

<form method="POST" action="{{ route('temoignage.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <input type="file" class="form-control" id="image_temoignage" name="image_temoignage" name="image_temoignage" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" value="{{old('titre')}}" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" value="{{old('prenom')}}" required>
    </div>
    <div class="mb-3">
        <input type="date" class="form-control" id="date" name="date" placeholder="Date" value="{{old('date')}}" required>
    </div>
    <div class="mb-3">
        <textarea class="form-control" id="contenu" rows="10" name="contenu" placeholder="Contenu" value="{{old('contenu')}}" required>{{old('contenu')}}</textarea>
    </div>
    <button type="submit" class="btn btn-success" >Ajouter</button>
</form>

@endsection