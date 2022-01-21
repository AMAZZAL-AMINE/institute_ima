<?php

use App\Models\Formation;

$formation = Formation::where("id", 1)->first();
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app">
    <div class="ima_navbar">
      <div class="navLogo"><a href="/"><img src="/images/logo.png" alt="Ima Logo"></a></div>
      <div class="navList">
        <div class="closenavbar"><i class="bi bi-x"></i></div>
        <ul>
          <li><a class="@yield('isactiveone')" href="/">Accueil</a></li>
          <li><a class="@yield('isactivetwo')" href="{{ route('about.us') }}">Qui Nous Sommes</a></li>
          <li><a class="@yield('isactivetree')" href="{{ route('list.formations',$formation->slug ?? "")  }}">Lise Des Formation</a></li>
          <li><a class="@yield('isactivephor')" href="{{ route("contact.us") }}">Contact-Nous</a></li>
          {{-- <li><a class="@yield('isactivefive')" href="{{ route("blog") }}">Blog</a></li> --}}
          @if(Auth::Check())
          <!--  -->
          @else
          <li><a class="@yield('isactiveseven')" href="{{ route("login") }}">Login</a></li>
          @endif
         @if (Auth::check() && auth()->user()->is_admin_lite === "yes")
           <li class="buttonSinscrire"><a href="{{ route("admin.dashboard") }}"><i class="bi bi-card-heading"></i> Admin</a></li> 
         @else
         <li class="buttonSinscrire"><a href="{{ route("student.inscription") }}"><i class="bi bi-card-heading"></i> Inscription</a></li>
         @endif
        </ul>
      </div>
      <div class="navshowresposivelist"> <i class="bi bi-list"></i> </div>
    </div>

    <main class="py-4">
      @yield('content')

    </main>
  </div>

  <style>
    .whatssapiconbottom {
      position: fixed;
      bottom: 50px;
      left: 50px;
      z-index: 999;
      font-size: 30px;
      text-decoration: none;
      background-color: white;
      padding: 10px;
      border-radius: 5px;
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .whatssapiconbottom span {
      color: black;
      font-weight: bold;
      font-size: 25px;
    }

    .whatssapiconbottom .bi {
      color: #61d60e;
      border-radius: 50%;
      min-width: 200px !important;


    }
  </style>

  <a class="whatssapiconbottom" target="_blank" href="https://web.whatsapp.com/send?phone=212661-586669&text=hello">
    <i class="bi bi-whatsapp"></i> <span>Avez-vous besoin d'aide?</span>
  </a>





  <!-- Footer -->
  <footer style="background-color: #313690; " class="text-center text-lg-start  text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block text-white">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4   text-white text-decoration-none">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="" class="me-4 text-white text-decoration-none">
          <i class="bi bi-twitter"></i>
        </a>
        <a href="" class="me-4 text-white text-decoration-none">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="" class="me-4 text-white text-decoration-none">
          <i class="bi bi-linkedin"></i>
        </a>
        <a href="" class="me-4 text-white text-decoration-none">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-white text-decoration-none">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-white">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>INSTITUTE IMA
            </h6>
            <p>
              INSTITUT IMA STF de L'education et de formation professionnelle de
              renommée est fondé en 2016 par des lauréats de l’université
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 text-white">
              Pages
            </h6>
            <p>
              <a href="/" class="text-white">Accueil</a>
            </p>
            <p>
              <a href="{{ route('about.us') }}" class=" text-white">A propos De Nous</a>
            </p>
            <p>
              <a href="#!" class=" text-white">Lise Des Formation</a>
            </p>
            <p>
              <a href="#!" class=" text-white">Contact-Nous</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-white">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 text-white">
              Contact
            </h6>
            <p><i class="fas fa-home me-3 "></i> Av. Abdellah Guenoun, Agadir 80000</p>
            <p>
              <i class="fas fa-envelope me-3 text-white"></i>
                iphecinstitut@gmail.com
            </p>
            <p><i class="fas fa-phone me-3 text-white"></i> +212 626-400022</p>
            <p><i class="fas fa-print me-3 text-white"></i> 05282-39873</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center text-white p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © <?php echo date("Y");  ?> Copyright:
      <a class="text-white " href="/">institute-ima.ma</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="{{ asset('/js/script.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>