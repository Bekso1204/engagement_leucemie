@extends('template')
@section('content')
<h1>Liens de {{$partenaire->nom}}</h1>
<a href="{{ route('lien.create')}}" class="btn btn-primary">Ajouter un nouveau lien</a>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-sm" id="myTable">
        <thead>
            <tr>
                <th>
                    Libelle
                </th>
                <th>
                    Icône
                </th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody class="table-body">
            <tr>
                @foreach($liens as $lien)
            <tr>
                <td>{{ $lien['libelle'] }} </td>
                <td>
                    <i class="{{ convertToIcon($lien->type) }}"></i>
                </td>
                <td>
                    <a href="{{ route('lien.edit', [$lien['id']])}}" class="btn btn-primary">Modifier</a>

                </td>

                <td>
                    <form action="{{ route('lien.destroy', [$lien['id']]) }}" method="POST">
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