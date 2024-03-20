@extends('template')
@section('content')
<h1>Partenaires</h1>
    <a href="{{ route('partenaire.create')}}" class="btn btn-primary">Ajouter un nouveau partenaire</a>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-sm" id="myTable">
        <thead>
            <tr>
                <th>
                    Nom
                </th>
                <th>
                    Logo
                </th>
                <th>
                    Liens
                </th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody class="table-body">
            <tr>
                @foreach($partenaires as $partenaire)
            <tr>
                <td>{{ $partenaire['nom'] }} </td>
                <td>{{ $partenaire['logo'] }} </td>
                <td>
                <i class="{{ convertToIcon('tiktok') }}"></i>
                </td>
                <td>
                    <a href="{{ route('partenaire.edit', [$partenaire['id']])}}" class="btn btn-primary">Modifier</a>

                </td>

                <td>
                    <form action="{{ route('partenaire.destroy', [$partenaire['id']]) }}" method="POST">
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