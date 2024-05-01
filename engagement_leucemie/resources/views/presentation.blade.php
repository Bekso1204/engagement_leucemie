@extends('template')
@section('content')

<!-- Edito du président -->


<section class="president-section">
    <h2>Edito du président</h2>
    <div class="president-content">
        <img src="https://static.wixstatic.com/media/5f4624_c9abcc6031c64987b61d9ada590cf464~mv2.jpg/v1/crop/x_0,y_64,w_897,h_897/fill/w_236,h_236,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/Alex%20CHOUFFE.jpg">
        <p><strong>"Aidé par nos fidèles partenaires, soutenus par nos ambassadeurs au grand coeur, nous concentrons tous nos efforts pour inciter à l'inscription sur le registre "Don Volontaire de Moelle Osseuse ". L'accompagnement des personnes porteuses de handicap est omniprésent dans notre histoire, nous continuons à participer aux grans événements comme l'Envolée Nordique ou la Transjurassienne.</strong></p>
    </div>
</section>

<section class="message-section">
    <div class="message-content">
        <p><strong>Nous multiplions les actions et mettons tout en œuvre pour obtenir des résultats probants.
        Depuis le 01 janvier 21, l'âge des personnes souhaitant s'inscrire sur le registre doit être compris entre 18 et 35 ans (révolus).
        Cette décision de l'Agence de Biomédecine, modifie profondément nos modes opératoires. Nous devons poursuivre et développer nos actions en direction de publics jeunes.
        Pour maintenir un niveau de recrutement permettant aux malades et à leur entourage de garder l'espoir et surtout de pouvoir bénéficier d'une greffe, nous avons grandement besoin de tous les acteurs proches de ces  jeunes âgés de 18 à 35 ans.<br>
        Nous comptons sur toutes et tous pour nous inviter dans les structures éducatives, les corps constitués, les entreprises, les associations, les manifestations sportives et culturelles... pour que nous puissions sensibiliser ce jeune public
        Ensemble, nous pouvons relever le défi.
        Merci de votre aide.</strong></p>
    </div>
</section>

<!-- Les membres du bureau et du conseil d’administration -->
<h2 class="titre-membre">Les membres du Bureau et du Conseil d'Administration</h2>
<section class="team">
@foreach ($bureaux as $bureau)
    <div class="member">
    <img src="../../../back_office/public/storage/{{$bureau->photo}}" alt="Photo de membre">
        <h3>{{ $bureau->nom }} {{ $bureau->prenom }}</h3>
        <p>Fonction :
            @foreach ($bureau->fonction as $fonction)
                {{ $fonction->libelle }}
            @endforeach
        </p>
    </div>
@endforeach
</section>


<!-- En dessous -->
<section class="link">
    <p>Consultez les comptes rendus des assemblées <a href="https://www.engagement-leucemie.com/ag">ici</a>.</p>
</section>

<style>
        .team {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .titre-membre{
            text-align: center;
        }
        .member {
            margin: 10px;
            text-align: center;
        }
        .member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
        .member h3 {
            font-size: 0.9rem;
        }
        .member p {
            font-size: 0.6rem;
        }
        .president-section h2{
            margin-top : 2rem;
            text-align: center;
        }
        .president-content {
            display: flex; /* Utiliser flexbox */
            align-items: center;
            text-align: left;    /* Aligner les éléments verticalement */
            width: 70%;
            margin: auto;
        }
        .president-content img{
            margin-right: 20px;
            border-radius: 50%;
        }
        .message-section {
            margin-bottom: 20px; /* Espace entre les sections */
        }
        .message-content{
            width: 70%;
            margin:auto;
            text-align: left;
        }

        .link {
            text-align: center;
        }
    </style>

@endsection