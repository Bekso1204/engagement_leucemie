@extends('template')
@section('content')
<h1>Ajouter un partenaire</h1>
<form action="{{ route('partenaire.store')}}" method="post">
    <input type="text" name="nom_partenaire" id="nom_partenaire" placeholder="Nom du partenaire">
    </br>
    </br>
    <input type="text" name="logo_partenaire" id="logo_partenaire"  placeholder="Logo du partenaire">
    </br>
    </br>
    <select id="type_liens" name="type_liens">
        <option value="">Choisissez un type de lien</option>
        @foreach ($typeLiens as $type)
        <option value="{{ $type }}">{{ $type }}</option>
        @endforeach
    </select>
    <input type="text" name="libelle_lien" id="libelle_lien" placeholder="Libellé du lien">
    </br>
    </br>

    <button type="submit" class="btn btn-primary ">Ajouter</button>
</form>
@endsection