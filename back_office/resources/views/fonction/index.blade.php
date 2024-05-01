@extends('template')

@section('content')

<h1>Gérer les fonctions</h1>

<table class="table">
    <thead>
        <tr>
            <th>Libellé</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fonctions as $fonction)
            <tr>
                <td>{{ $fonction->libelle }}</td>
                <td>
                    <a href="{{ route('fonction.edit', $fonction->id) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('fonction.destroy', $fonction->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette fonction ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection