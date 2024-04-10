@extends('template')
@section('content')
<h1>Modifier un lien</h1>
<form action="{{ route('lien.update', [$lien['id']]) }}" method="post">
    @csrf
    @method("PUT")
    <div class="liens">
        <select id="type_liens" name="type_liens">
            <option value="">Choisissez un type de lien</option>
            @foreach ($typeLiens as $type)
            <option value="{{ $type }}">{{ $type }}</option>
            @endforeach
        </select>
        @error('type_liens')
    {{$message}}
    @enderror
        <input type="url" name="libelle_lien" id="libelle_lien" value="{{$lien->libelle}}">
        @error('libelle_lien')
        {{$message}}
        @enderror
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary ">Ajouter</button>
</form>
@endsection