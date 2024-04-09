@extends('template')
@section('content')
<h1>Ajouter un partenaire</h1>
<form action="{{ route('partenaire.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" class="form-control" name="nom_partenaire" id="nom_partenaire" placeholder="Nom du partenaire">
    @error('nom_partenaire')
    {{$message}}
    @enderror
    </br>
    </br>
    <input type="file" class="form-control" id="logo_partenaire" name="logo_partenaire">
    @error('logo_partenaire')
    {{$message}}
    @enderror
    </br>
    </br>
    <input type="url" class="form-control" name="lien_partenaire" id="lien_partenaire" placeholder="Lien du site web du partenaire">
    @error('lien_partenaire')
    {{$message}}
    @enderror
    </br>
    </br>

    <button type="submit" class="btn btn-primary ">Ajouter</button>
</form>
@endsection