@extends('template')
@section('content')
<div class="page-temoignages">
    <div class="temoignages-header">
        <h1>L'action {{$action->titre}}</h1>
        <p>Dans cet espace, retrouvez les informations de l'action {{$action->titre}}</p>
    </div>
</div>

<div class="pic-ctn">

    @foreach($action->photos()->where('is_main', false)->get() as $photo)
    <img src="../../../back_office/public/storage/{{$photo->photo}}" alt="" class="" style="height: 250px; width: 250px;">
    @endforeach
</div>

<style>
    html,
    body {
        margin: 0;
        padding: 0;
    }

    .pic-ctn {
        width: 100vw;
        height: 200px;
    }

    @keyframes display {
        0% {
            transform: translateX(200px);
            opacity: 0;
        }

        10% {
            transform: translateX(0);
            opacity: 1;
        }

        20% {
            transform: translateX(0);
            opacity: 1;
        }

        30% {
            transform: translateX(-200px);
            opacity: 0;
        }

        100% {
            transform: translateX(-200px);
            opacity: 0;
        }
    }

    .pic-ctn {
        position: relative;
        width: 100vw;
        height: 300px;
        margin-top: 15vh;
    }

    .pic-ctn>img {
        position: absolute;
        top: 0;
        left: calc(50% - 100px);
        opacity: 0;
        animation: display 10s infinite;
    }

    img:nth-child(2) {
        animation-delay: 2s;
    }

    img:nth-child(3) {
        animation-delay: 4s;
    }

    img:nth-child(4) {
        animation-delay: 6s;
    }

    img:nth-child(5) {
        animation-delay: 8s;
    }
</style>
@endsection