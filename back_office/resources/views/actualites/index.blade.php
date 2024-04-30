@extends('template')
@section('content')
<h1>Actualites</h1>
<a href="{{ route('actualite.create')}}" class="btn btn-primary">Ajouter une nouvelle actualité</a>

<div class="table-responsive">
    <table class="table table-bordered t
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody class="table-body">
            <tr>
                @foreach($actus as $actu)
            <tr>
                <td>{{ $actu['titre'] }} </td>
                <td>{{ date('d/m/Y', strtotime($actu->date)) }}</td>
                <td>{{ $actu['contenu'] }}</td>
                <td>
                    <img src="storage/{{$actu->image}}" alt="Actualite {{$actu->titre}}" style="height: 25%; width: 25%;">
                </td>
                <td>
                    <a href="{{ route('actualite.show', [$actu['id']])}}" class="btn btn-primary">Voir</a>
                </td>
                <td>
                    <a href="{{ route('actualite.edit', [$actu['id']])}}" class="btn btn-primary">Modifier</a>
                </td>
                <td>
                    <form action="{{ route('actualite.destroy', [$actu['id']]) }}" method="POST">
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
