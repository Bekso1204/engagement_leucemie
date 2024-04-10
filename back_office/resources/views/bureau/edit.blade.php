@extends('template')
@section('content')

<h1>Modifier le bureau</h1>

<form method="POST" action="{{ route('bureau.update', $bureau->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" class="form-control" value="{{ $bureau->nom }}">
    </div>

    <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" class="form-control" value="{{ $bureau->prenom }}">
    </div>

    <div class="form-group">
        <label for="photo">Photo :</label>
        <input type="file" name="photo" id="photo" class="form-control-file">
        @if ($bureau->photo)
            <img src="{{ asset('storage/'.$bureau->photo) }}" alt="Photo actuelle" style="height: 50px; width:75px;">
        @endif
    </div>

    <div class="form-group">
    <label for="fonctions">Fonctions :</label>
    <select name="fonctions[]" id="fonctions" class="form-control" multiple>
        @foreach($fonctions as $fonction)
            <option value="{{ $fonction->id }}" {{ $bureau->fonctions->contains($fonction->id) ? 'selected' : '' }}>
                {{ $fonction->libelle }}
            </option>
        @endforeach
    </select>
    </div>

    <button type="submit" class="btn btn-primary">Modifier le bureau</button>
</form>

@endsection
