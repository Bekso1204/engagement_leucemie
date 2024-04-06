@extends('template')
@section('content')
<h1>Photos de l'action {{$action->titre}}</h1>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-sm" id="myTable">
        <thead>
            <tr>
                <th>
                    Photo
                </th>
                
                <th>
                    Titre
                </th>
                <th>
                    Legende
                </th>
                <th>
                    Principale ou Secondaire ?
                </th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody class="table-body">
            <tr>
                @foreach($pictures as $picture)
            <tr>
                <td>
                <img src="\back_office/public/storage/{{ $picture->photo }}" alt="{{ $picture['legende'] }}" 
                    height="25%" width="25%"/>
                </td>
                <td>{{ $picture['titre'] }}</td>
                <td>{{ $picture['legende'] }} </td>
                <td>{{ $picture['is_main'] ? 'Principale' : 'Secondaire' }}</td>

                <td>
                    <a href="{{ route('action.editPicture', [$action['id'], $picture['id']])}}" class="btn btn-primary">Modifier</a>

                </td>

                <td>
                    @if (!$picture->is_main)
                    <form action="{{ route('action.destroyPicture', [$action['id'], $picture['id']]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection