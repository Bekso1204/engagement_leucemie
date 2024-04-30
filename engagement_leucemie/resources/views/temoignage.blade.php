@extends('template')
@section('content')
<div class="page-temoignage">
    <script>
        document.write('<a href="' + document.referrer + '"><i class="fa-solid fa-circle-arrow-left"></i></a>');
    </script>
    <div class="un-temoignage">
        <div class="img-container">
            <img src="../../../back_office/public/storage/{{$temoignage->image}}" alt="">
        </div>
        <div class="contenu">
            <h3><i class="fa-solid fa-user"></i>{{$temoignage->prenom}}</h3>
            <h2>{{$temoignage->titre}}</h2>
            <p>{{$temoignage->contenu}}</p>
            <h4>{{$temoignage->date}}</h4>
        </div>
    </div>
</div>
@endsection