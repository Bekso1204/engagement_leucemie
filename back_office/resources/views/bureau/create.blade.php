@extends('template')
@section('content')
    <h1>Créer un nouveau bureau</h1>

    <form method="POST" action="{{ route('bureau.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" class="form-control">
        </div>

        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" class="form-control">
        </div>

        <div class="form-group">
            <label for="photo">Photo :</label>
            <input type="file" name="photo" id="photo" class="form-control-file">
        </div>

        <div class="form-group">
            <label for="fonctions">Fonctions :</label>
            <select name="fonctions[]" id="fonctions" class="form-control" multiple>
                @foreach($fonctions as $fonction)
                    <option value="{{ $fonction->id }}">{{ $fonction->libelle }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Créer le bureau</button>
    </form>
@endsection