@extends('template')
@section('content')

<h1>Modifier la fonction</h1>

<form method="POST" action="{{ route('fonction.update', $fonction->id) }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="libelle">Libellé :</label>
        <input type="text" name="libelle" id="libelle" class="form-control" value="{{ $fonction->libelle }}">
    </div>

    <button type="submit" class="btn btn-primary">Modifier la fonction</button>
</form>

@endsection
