<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/db7501469c.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" integrity="sha512-HXXR0l2yMwHDrDyxJbrMD9eLvPe3z3qL3PPeozNTsiHJEENxx8DH2CxmV05iwG0dwoz5n4gQZQyYLUNt1Wdgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Engagement Leucémie</title>
</head>

<body>
  <nav class="navbar bg-light navbar1">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{asset('img/logo_engagement_leucemie.png')}}" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
      </a>
      <div class="contact">
        <i class="fa-solid fa-location-dot"></i> 56 Chemin des Montarmots, 25000 BESANCON | <i class="fa-solid fa-envelope"></i> engagementleucemie@gmail.com
      </div>
      <div class="reseaux-sociaux">
        <a target="_blank" href="https://twitter.com/FLeucemie"><i class="fa-brands fa-x-twitter"></i></a>
        <a target="_blank" href="https://www.tiktok.com/@engagementleucemie"><i class="fa-brands fa-tiktok"></i></a>
        <a target="_blank" href="https://www.facebook.com/EngagementLeucemie/"><i class="fa-brands fa-facebook-f"></i></a>
        <a target="_blank" href="https://www.instagram.com/engagementleucemie/"><i class="fa-brands fa-instagram"></i></a>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar2">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{asset('img/engagement_leucemie.png')}}" alt="Logo" width="80" height="35" class="d-inline-block align-text-top">
      </a>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('actions')}}">Actions</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Don de moelle osseuse
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="">Qu'est ce que c'est ?</a></li>
              <li><a class="dropdown-item" href="">Pourquoi 18-35 ans ?</a></li>
              <li><a class="dropdown-item" href="{{route('temoignages')}}">Témoignages</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Association
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('presentation.show')}}">Présentation</a></li>
              <li><a class="dropdown-item" href="{{route('partenaires')}}">Partenaires</a></li>
              <li><a class="dropdown-item" href="">Adhérer</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Actualités</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact.show')}}">Contact</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn">Devenir donneur</button>
    </div>
  </nav>
  @yield('content')

  <!-- Footer 2 - Bootstrap Brain Component -->
  <footer class="footer">

    <!-- Widgets - Bootstrap Brain Component -->
    <section class="bg-light py-4 py-md-5 py-xl-8 border-top border-light">
      <div class="container overflow-hidden">
        <div class="row gy-4 gy-lg-0 justify-content-xl-between">
          <div class="col-12 col-md-4 col-lg-3 col-xl-2">
            <div class="widget">
              <a href="#!">
                <img src="{{ url('img/logo.png') }}" alt="Logo Engagement Leucémie" width="200" height="190">
              </a>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-3 col-xl-2 coordonnees">
            <div class="widget">
              <h4 class="widget-title mb-4">Coordonnées</h4>
              <address class="mb-4"><i class="fa-solid fa-location-dot"></i> 56 Chemin des Montarmots, 25000 BESANCON</address>
              <p class="mb-0">
                <i class="fa-solid fa-envelope"></i> engagementleucemie@gmail.com
              </p>
            </div>
          </div>
          <div class="col-12 col-md-4 col-lg-3 col-xl-2 reseaux">
            <div class="widget">
              <ul class="list-unstyled">
                <li class="mb-2">
                  <a target="_blank" href="https://twitter.com/FLeucemie"><i class="fa-brands fa-x-twitter"></i></a>
                </li>
                <li class="mb-2">
                  <a target="_blank" href="https://www.tiktok.com/@engagementleucemie"><i class="fa-brands fa-tiktok"></i></a>
                </li>
                <li class="mb-2">
                  <a target="_blank" href="https://www.facebook.com/EngagementLeucemie/"><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li class="mb-2">
                  <a target="_blank" href="https://www.instagram.com/engagementleucemie/"><i class="fa-brands fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </footer>
</body>

</html>