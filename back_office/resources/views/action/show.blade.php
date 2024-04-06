@extends('template')
@section('content')

<h1>Action {{$action->titre}}</h1>
    <div class="mb-3">
        <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" value="{{$action->titre}}" disabled>
    </div>
    <div class="mb-3">
        <input type="date" class="form-control" id="date" name="date" placeholder="Date" value="{{$action->date}}" disabled>
    </div>
    <div class="mb-3">
        <input type="time" class="form-control" id="heure" name="heure" placeholder="Heure" value="{{$action->heure}}" disabled>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" value="{{$action->adresse}}" disabled>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="code_postal" name="code_postal" placeholder="Code Postal" value="{{$action->code_postal}}" disabled>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" value="{{$action->ville}}" disabled>
    </div>
    <div class="mb-3">
        <input type="number" class="form-control" id="nb_inscrits" name="nb_inscrits" placeholder="Nombre d'inscrits" value="{{$action->nb_inscrits}}" disabled>
    </div>
    <div class="mb-3">
        <input type="number" class="form-control" id="nb_sensibilises" name="nb_sensibilises" placeholder="Nombre de sensibilisés" value="{{$action->nb_sensibilises}}" disabled>
    </div>
    <div class="mb-3">
        <label for= "isPrivate" class = "form-check form-switch">{{ $action['is_private'] ? 'Est privé' : 'N\'est pas privé' }}</label>
    </div>
</form>

@endsection