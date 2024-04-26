@extends('template')
@section('content')
<h1>Adhérants</h1>

<p>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Adresse mail</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($adherents as $ligne)
      <tr>
        <th scope="row">{{$ligne->id}}</th>
        <td>{{$ligne->nom}}</td>
        <td>{{$ligne->prenom}}</td>
        <td>{{$ligne->email}}</td>
        <td class="actions">
            <form method="post" action="{{ route('adherant.destroy',[$ligne->id])}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection