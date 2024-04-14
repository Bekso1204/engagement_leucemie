@extends('template')
@section('content')

<h1>Ajouter une action</h1>
<form method="POST" action="{{ route('action.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" value="{{old('titre')}}">
        @error('titre')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="date" class="form-control" id="date" name="date" placeholder="Date" value="{{old('date')}}">
        @error('date')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="time" class="form-control" id="heure" name="heure" placeholder="Heure" value="{{old('heure')}}">
        @error('heure')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" value="{{old('adresse')}}">
        @error('adresse')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="code_postal" name="code_postal" placeholder="Code Postal" value="{{old('code_postal')}}">
        @error('code_postal')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" value="{{old('ville')}}">
        @error('ville')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="number" class="form-control" id="nb_inscrits" name="nb_inscrits" placeholder="Nombre d'inscrits" value="{{old('nb_inscrits')}}">
        @error('nb_inscrits')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="number" class="form-control" id="nb_sensibilises" name="nb_sensibilises" placeholder="Nombre de sensibilisés" value="{{old('nb_sensibilises')}}">
        @error('nb_sensibilises')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="checkbox" id="is_private" name="is_private" placeholder="Est privé" value="{{old('is_private')}}">
        <label for="private">Est privé</label>
        @error('is_private')
        {{$message}}
        @enderror
    </div>

    <div class="mb-3">
        <h3 for="photo_principale">Photo principale</h3>
        <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo principale">
        @error('photo')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="titre_photo" name="titre_photo" placeholder="Titre de la photo" value="{{old('titre_photo')}}">
        @error('titre_photo')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="legende_photo" name="legende_photo" placeholder="Legende de la photo" value="{{old('legende_photo')}}">
        @error('legende_photo')
        {{$message}}
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Ajouter</button>
</form>

@endsection