@extends('template')
@section('content')

<form method="POST" action="{{ route('action.update', [$action['id']])}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" value="{{$action->titre}}" >
        @error('titre')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="date" class="form-control" id="date" name="date" placeholder="Date" value="{{$action->date}}" >
        @error('date')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="time" class="form-control" id="heure" name="heure" placeholder="Heure" value="{{ date('H:i', strtotime($action->heure))}}" >
        @error('heure')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" value="{{$action->adresse}}" >
        @error('adresse')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="code_postal" name="code_postal" placeholder="Code Postal" value="{{$action->code_postal}}" >
        @error('code_postal')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" value="{{$action->ville}}" >
        @error('ville')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="number" class="form-control" id="nb_inscrits" name="nb_inscrits" placeholder="Nombre d'inscrits" value="{{$action->nb_inscrits}}" >
        @error('nb_inscrits')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="number" class="form-control" id="nb_sensibilises" name="nb_sensibilises" placeholder="Nombre de sensibilisés" value="{{$action->nb_sensibilises}}" >
        @error('nb_sensibilises')
        {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <input type="checkbox" id="is_private" name="is_private" placeholder="Est privé" value="{{$action->is_private}}">
        <label for="private">Est privé</label>
        @error('is_private')
        {{$message}}
        @enderror
    </div>

    <button type="submit" class="btn btn-success" >Ajouter</button>
</form>

@endsection