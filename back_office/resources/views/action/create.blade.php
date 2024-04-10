@extends('template')
@section('content')

<h1>Ajouter une action</h1>
<form method="POST" action="{{ route('action.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" value="{{old('titre')}}" required>
    </div>
    <div class="mb-3">
        <input type="date" class="form-control" id="date" name="date" placeholder="Date" value="{{old('date')}}" required>
    </div>
    <div class="mb-3">
        <input type="time" class="form-control" id="heure" name="heure" placeholder="Heure" value="{{old('heure')}}" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" value="{{old('adresse')}}" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="code_postal" name="code_postal" placeholder="Code Postal" value="{{old('code_postal')}}" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" value="{{old('ville')}}" required>
    </div>
    <div class="mb-3">
        <input type="number" class="form-control" id="nb_inscrits" name="nb_inscrits" placeholder="Nombre d'inscrits" value="{{old('nb_inscrits')}}" required>
    </div>
    <div class="mb-3">
        <input type="number" class="form-control" id="nb_sensibilises" name="nb_sensibilises" placeholder="Nombre de sensibilisés" value="{{old('nb_sensibilises')}}" required>
    </div>
    <div class="mb-3">
        <input type="checkbox" id="is_private" name="is_private" placeholder="Est privé" value="{{old('is_private')}}">
        <label for="private">Est privé</label>
    </div>

    <div class="mb-3">
    <h3 for="photo_principale">Photo principale</h3>
        <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo principale" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="titre_photo" name="titre_photo" placeholder="Titre de la photo" value="{{old('titre_photo')}}" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="legende_photo" name="legende_photo" placeholder="Legende de la photo" value="{{old('legende_photo')}}" required>
    </div>

    <button type="submit" class="btn btn-success" >Ajouter</button>
</form>

@endsection