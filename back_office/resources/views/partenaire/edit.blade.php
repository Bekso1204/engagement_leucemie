@extends('template')
@section('content')
<h1>Modifier un partenaire</h1>
<form action="{{ route('partenaire.update', [$partenaire['id']]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <input type="text" class="form-control" name="nom_partenaire" id="nom_partenaire" placeholder="Nom du partenaire"  
    value="{{$partenaire->nom}}" />
    </br>
    </br>
    <input type="file" class="form-control" id="logo_partenaire" name="logo_partenaire">
    </br>
    </br>

    <button type="submit" class="btn btn-primary ">Ajouter</button>
</form>
@endsection