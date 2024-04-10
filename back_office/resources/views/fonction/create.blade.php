@extends('template')

@section('content')
    <h1>Créer une nouvelle fonction</h1>

    <form method="POST" action="{{ route('fonction.store') }}">
        @csrf

        <div class="form-group">
            <label for="libelle">Libellé de la fonction :</label>
            <input type="text" name="libelle" id="libelle" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Créer la fonction</button>
    </form>
@endsection
