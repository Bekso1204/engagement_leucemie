@extends('template')
@section('content')

<h1>Liste des membres du bureau</h1>
    <a href="{{ route('bureau.create') }}" class="btn btn-primary">Créer un nouveau bureau</a>
    <a href="{{ route('fonction.create') }}" class="btn btn-primary">Créer une nouvelle fonction</a>
    <a href="{{ route('fonction.index') }}" class="btn btn-primary">Gérer les fonctions</a>
    
<table class="table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Photo</th>
            <th>Fonctions</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bureaux as $bureau)
            <tr>
                <td>{{ $bureau->nom }}</td>
                <td>{{ $bureau->prenom }}</td>
                <td><img src="{{ asset('storage/'.$bureau->photo) }}" alt="Photo" style="height: 50px; width:75px;"</td>
                <td>
                        <ul>
                            @foreach($bureau->fonctions as $fonction)
                                <li>{{ $fonction->libelle }}</li>
                            @endforeach
                        </ul>
                </td>
                <td>
                    <a href="{{ route('bureau.edit', $bureau->id) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('bureau.destroy', $bureau->id) }}" method="POST" style="display: inline-block;">
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
