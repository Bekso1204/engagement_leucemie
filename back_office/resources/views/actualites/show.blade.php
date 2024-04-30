@extends('template')
@section('content')

    <img src="../../public/storage/{{$actu->image}}" alt="Actualité {$actu->titre}}" style="height: 25%; width: 25%;">
    <br>
    <div class="mb-3">
        <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" value="{{$actu->titre}}" disabled>
    </div>
    <div class="mb-3">
        <input type="date" class="form-control" id="date" name="date" placeholder="Date" value="{{$actu->date}}" disabled>
    </div>
    <div class="mb-3">
        <textarea class="form-control" id="contenu" rows="10" name="contenu" value="{{$actu->contenu}}" disabled>{{$actu->contenu}}</textarea>
    </div>

@endsection