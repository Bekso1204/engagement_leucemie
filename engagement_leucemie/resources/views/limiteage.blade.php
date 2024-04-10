@extends('template')

@section('content')

<div class="limite-age">

<h1>Pourquoi une limite d'âge ?</h1>

<!-- Titre Pourquoi une limite d'âge 18 - 35 ans -->
<div class="">

    <p>

        L'âge de recrutement pour s'inscrire sur le registre DVMO en France a été modifié le 1er janvier 2021 (18 à moins de 36 ans au lieu de 18 à 51 ans).
    </p>
</div>

<!-- Vidéo -->
<div class="videos">
<iframe
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
</div>
<!-- Tableau -->
<table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">Groupes</th>
      <th scope="col">Limites d'âge</th>
      <th scope="col">Site Internet</th>
      <th scope="col">Nombre d'inscrits</th>
      <th scope="col">Date de création</th>
      <th scope="col">Entité Légale</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">National Marrow
        Donor Program/Be
        The Match
        (Etats Unis)</th>
      <td>18-44 ans</td>
      <td><a href="https://bethematch.org/">www.bethematch.org</td>
      <td>9 112 718</td>
      <td>1986</td>
      <td>Association à but non lucratif</td>
    </tr>
    <tr>
      <th scope="row">Gift of Life
        (Etats Unis)</th>
      <td>18-60 ans <br> <br>L'inscription est à la charge du donneur s'il a plus de 35 ans (60 $ pour couvrir le coût du test)</td>
      <td><a href="https://www.giftoflife.org/">www.giftoflife.org </td>
      <td>363 383</td>
      <td>1991</td>
      <td>Association à but non lucratif</td>

    </tr>
    <tr>
      <th scope="row">DKMS US
        (Etats Unis)</th>
      <td>18-55 ans</td>
      <td><a href="https://www.dkms.org/">https://www.dkms.org/</td>
      <td>1 145 299</td>
      <td>2004</td>
      <td>Association à but non lucratif</td>

    </tr>
    <tr>
        <th scope="row"> Registre de donneurs de moelle osseuse de la Fondation Josep
            Carreras [REDMO)
            (Espagne)</th>
        <td>18-40 ans (L'âge limite est de 40 ans depuis 2018)</td>
        <td><a href="https://fcarreras.org/">www.fcarreras.org</td>
        <td>431 703</td>
        <td>1991</td>
        <td>Fondation/Association à but non lucratif
        </td>
      </tr>

      <tr>
        <th scope="row">Registre Italien de
            Donneurs de Moelle
            Osseuse (Italie)</th>
      <td>18-35 ans</td>
      <td><a href="https://ibmdr.galliera.it/">www.ibmdr.galliera.it</td>
      <td>460 902</td>
      <td>1989</td>
      <td>Créé par les hôpitaux Galliera di Genova, Il a obtenu une reconnaissance national en 2001 (loi du 6 mars) et est <u>financé par le service national de
        santé italien</u></td>
      </tr>
      <tr>
        <th scope="row">DKMS (Allemagne)</th>
        <td>11-55 ans</td>
        <td><a href="https://www.dkms.de/">www.dkms.de</td>
        <td>9 322 899</td>
        <td>1991</td>
        <td>Association a but non lucratif</td>
      </tr>
      <tr>
        <th scope="row">Anthony Nolan
            (Royaume Uni)</th>
      <td>16-30 ans</td>
      <td><a href="https://www.anthonynolan.org/">www.anthonynolan.org</td>
      <td>836 291</td>
      <td>1974</td>
      <td>Association à but non lucratif
    </td>
      </tr>
      <tr>
        <th scope="row">British Bone Marrow
            Registry [BBMR]
            (Royaume Uni)</th>
      <td>17-40 ans</td>
      <td><a href="https://www.bbmr.co.uk/">www.bbmr.co.uk</td>
      <td>375 651</td>
      <td>1987</td>
      <td>Agence publique faisant partie du du NHS
        Blood & Transplant</td>
      </tr>
      <tr>
        <th scope="row">Weish Bone Marrow
            Donor Registry</th>
        <td>17-30ans</td>
        <td><a href="https://www.welsh-blood.org.uk/donating-bone-marrow/">https://www.welsh/:blood.erg.uk/giving:blood/bone-marrow-donor:registry/
            </td>
        <td>72 133</td>
        <td>1990</td>
        <td>Asence publiaue faisant partie du Weish Blood Service, lui-même appartenant au
            Velindre University NHS Trust</td>
      </tr>
      <tr>
        <th scope="row">DKMS UK (Royaume
            Uni)</th>
        <td>11-55 ans</td>
        <td><a href="https://www.dkms.org.uk/">https://www.dkms.org.uk/</td>
        <td>783 348</td>
        <td>2013</td>
        <td>Association à but non lucratif</td>
      </tr>
      <tr>
        <th scope="row">DKMS Polska
            (Pologne)</th>
        <td>18-55 ans</td>
        <td><a href="https://www.dkms.pl/">https://www.dkms.pl/</td>
        <td>1 660 808</td>
        <td>2009</td>
        <td>Association à but non lucratif</td>
      </tr>

  </tbody>
</table>

<!-- Titre Quel est l'argumentaire -->
<h1>Quel est l'argumentaire développé par <u>l'Agence de Biomédecine ?</u></h1>
<!-- Titre Paragraphe -->
<div class="Argumentaires"> 01
Pourquoi l’âge limite d’inscription sur le registre des donneurs volontaires de moelle osseuse est passé de 50 ans à 35 ans révolus ?
</div>

<!-- Titre Paragraphe -->
<div class="Argumentaires"> 02
Lors de la recherche d’un donneur de moelle osseuse pour un malade, le premier critère est la parfaite compatibilité HLA entre le donneur et le receveur. L’âge du donneur prévaut-il sur cette compatibilité ?
</div>

<!-- Titre Paragraphe -->
<div class="Argumentaires"> 03
Alors que depuis des années l'on dit que la compatibilité est extrêmement rare, pourquoi ne pas inscrire aussi les plus de 35 ans pour offrir plus de chances de greffes ?
</div>

<!-- Mettre les titres en vert foncé -->
</div>

<div class="cards">
<div class="card">

    <div class="body">
      <div class="numargum"> 01
      </div>
      <p class="argtext">
        <li class="argtext">  Plus de 70 % des donneurs prélevés ont moins de 35 ans. </li>

        <li class="argtext">  Les moins de 35 ans, et idéalement les hommes, présentent un meilleur profil de donneurs (car les greffons de moelle osseuse sont plus riches en cellules souches et permettent donc aux patients une prise de greffe plus rapide).</li>

        <li class="argtext">  Un donneur est contacté en médiane 8 ans après son inscription. Sachant qu'un donneur peut être prélevé jusqu'à ses 60 ans révolus, plus un donneur s'inscrit jeune, plus il reste longtemps sur le registre et plus il a de chance d'être sollicité. </li>
      </p>
       <div class="footercard">

     </div>
  </div></div>

  <div class="card">

    <div class="body">
      <div class="numargum">02
      </div>
      <p class="argtext">

        Non. La compatibilité HLA reste le premier et principal critère dans le choix du donneur. Et c'est pour cette raison qu'il est important également d'inscrire des jeunes donneurs qui apportent une diversité génétique au registre français. Cependant, l’âge puis le sexe sont également des critères importants dans le choix du donneur, lorsqu’un choix est possible entre plusieurs profils.</p>
       <div class="footercard">

     </div>
  </div></div>

  <div class="card">

    <div class="body">
      <div class="numargum"> 03
      </div>
      <p class="argtext">
        La probabilité moyenne d’identifier un donneur de moelle osseuse compatible en situation non apparentée varie énormément selon la fréquence des typage HLA (Human Leucocyte Antigen) des patients pour lesquelles une indication de greffe a été posée. La probabilité d'identifier un donneur compatible est en général de une chance sur mille, pour ceux possèdant une histoire génétique plus complexe cela passe à une chance sur dix-millions.

        Il est nécessaire qu’un donneur présente exactement les mêmes caractéristiques HLA qu’un patient existant dans les registres. Cette diversité peut cependant être trouvée au sein de populations jeunes.
    </p>
       <div class="footercard">



  </div>
     </div>
  </div></div>
</div>


@endsection
