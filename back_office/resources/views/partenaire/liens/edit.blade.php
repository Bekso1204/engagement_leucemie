@extends('template')
@section('content')
<h1>Modifier un lien</h1>
<form action="{{ route('lien.update', [$lien['id']]) }}" method="post">
    @csrf
    @method("PUT")
    <div class="liens">
        <select id="type_liens" name="type_liens" required>
            <option value="">Choisissez un type de lien</option>
            @foreach ($typeLiens as $type)
            <option value="{{ $type }}">{{ $type }}</option>
            @endforeach
        </select>
        <input type="url" name="libelle_lien" id="libelle_lien" value="{{$lien->libelle}}" required>
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary ">Ajouter</button>
</form>
@endsection