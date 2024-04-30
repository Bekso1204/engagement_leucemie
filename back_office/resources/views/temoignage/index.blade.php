@extends('template')
@section('content')
<h1>Témoignages</h1>

<a href="{{ route('temoignage.create') }}">
<button type="button" class="btn btn-success">Ajouter</button>
</a>

<p>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Titre</th>
        <th scope="col">Prénom</th>
        <th scope="col">Contenu</th>
        <th scope="col">Date</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($temoignages as $ligne)
      <tr>
        <th scope="row">{{$ligne->id}}</th>
        <td><div class="td-image"><img src="storage/{{$ligne->image}}" alt=""></div></td>
        <td>{{$ligne->titre}}</td>
        <td>{{$ligne->prenom}}</td>
        @php
            $contenu = $ligne->contenu;
            $mots = str_word_count($contenu, 1);
            $nbMots = implode(' ', array_slice($mots, 0, 5));
        @endphp
        <td>{{$nbMots}}...</td>
        <td>{{ date('d/m/Y', strtotime($ligne->date)) }}</td>
        <td class="actions">
            <form method="post" action="{{ route('temoignage.destroy',[$ligne->id])}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
            <a href="{{ route('temoignage.edit',[$ligne["id"]]) }}">
                <button type="button" class="btn btn-info">Modifier</button>
            </a>
            <a href="{{ route('temoignage.show',[$ligne["id"]]) }}">
                <button type="button" class="btn btn-light">Voir</button>
            </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection