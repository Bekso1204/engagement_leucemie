@extends('template')
@section('content')
<h1>Actions</h1>
<a href="{{ route('action.create')}}" class="btn btn-primary">Ajouter une nouvelle action</a>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-sm" id="myTable">
        <thead>
            <tr>
                <th>
                    Titre
                </th>
                <th>
                    Date Heure
                </th>
                <th>
                    Adresse CodePostal Ville
                </th>
                <th>
                    Nombre inscrits
                </th>
                <th>
                    Nombre sensibilisés
                </th>
                <th>
                    Est privé
                </th>
                <th>Voir</th>
                <th>Ajouter une photo</th>
                <th>Voir les photos</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody class="table-body">
            <tr>
                @foreach($actions as $action)
            <tr>
                <td>{{ $action['titre'] }} </td>
                <td>{{ date('d/m/Y', strtotime($action->date)) }} {{ date('H:i', strtotime($action->heure)) }}</td>
                <td>{{ $action['adresse'] }} {{ $action['code_postal'] }} {{ $action['ville'] }}</td>
                <td>{{ $action['nb_inscrits'] }} </td>
                <td>{{ $action['nb_sensibilises'] }} </td>
                <td>{{ $action['is_private'] ? 'oui' : 'non' }}</td>
                <td>
                    <a href="{{ route('action.show', [$action['id']])}}" class="btn btn-primary">Voir action {{$action->titre}}</a>
                </td>
                <td>
                    <a href="{{route('action.addPicture', [$action['id']])}}" class="btn btn-primary">Ajouter une photo secondaire</a>
                </td>
                <td>
                    <a href="{{route('action.showPictures', [$action['id']])}}" class="btn btn-primary ">Voir les photos</a>
                </td>
                <td>
                    <a href="{{ route('action.edit', [$action['id']])}}" class="btn btn-primary">Modifier</a>

                </td>

                <td>
                    <form action="{{ route('action.destroy', [$action['id']]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection