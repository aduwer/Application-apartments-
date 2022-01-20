@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel = "shortcut icon" href ="miniatury/logo.png">

  <title>M&M HOUSE</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/small-business.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.css')}}">
  <script src="{{ asset('js/jquery.min.js')}}"></script>
  <script src="{{ asset('js/lightbox.js')}}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('photo/logopoprawka.png')}}" alt="M&M HOUSE"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item active">
            <a class="nav-link" href="#apartamenty"> <h5>Apartamenty</h5>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontakt"><h5>Kontakt</h5></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#info"><h5>O nas</h5></a>
          </li> -->
          
            @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}"> <h5>Moje konto</h5></a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"> <h5>Zaloguj się</h5></a>
                    </li>
                    @endauth
        
            @endif
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container photo-content">

    <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Apartament I</h1>
  
    <hr class="mt-2 mb-5">
  
    <div class="row text-center text-lg-left">
  
      <div class="col-lg-3 col-md-4 col-6">
        <a href="pierwszy/1.JPG" data-lightbox="obraz" data-title="Obraz 1" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('pierwszy/1.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="pierwszy/2.JPG" data-lightbox="obraz" data-title="Obraz 2" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('pierwszy/2.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="pierwszy/3.JPG" data-lightbox="obraz" data-title="Obraz 3" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('pierwszy/3.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="pierwszy/4.JPG" data-lightbox="obraz" data-title="Obraz 4" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('pierwszy/4.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="pierwszy/5.JPG" data-lightbox="obraz" data-title="Obraz 5" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('pierwszy/5.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="pierwszy/6.JPG" data-lightbox="obraz" data-title="Obraz 6" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('pierwszy/6.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="pierwszy/7.JPG" data-lightbox="obraz" data-title="Obraz 7" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('pierwszy/7.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="pierwszy/8.JPG" data-lightbox="obraz" data-title="Obraz 8" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('pierwszy/8.JPG')}}" alt="">
            </a>
      </div>
    </div>
  
  </div>

  <div class="container">

    <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Apartament II</h1>
  
    <hr class="mt-2 mb-5">
  
    <div class="row text-center text-lg-left">
  
      <div class="col-lg-3 col-md-4 col-6">
        <a href="drugi/1.JPG" data-lightbox="obraz" data-title="Obraz 1" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('drugi/1.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="drugi/2.JPG" data-lightbox="obraz" data-title="Obraz 2" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('drugi/2.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="drugi/3.JPG" data-lightbox="obraz" data-title="Obraz 3" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('drugi/3.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="drugi/4.JPG" data-lightbox="obraz" data-title="Obraz 4" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('drugi/4.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="drugi/5.JPG" data-lightbox="obraz" data-title="Obraz 5" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('drugi/5.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="drugi/6.JPG" data-lightbox="obraz" data-title="Obraz 6" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('drugi/6.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="drugi/7.JPG" data-lightbox="obraz" data-title="Obraz 7" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('drugi/7.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="drugi/8.JPG" data-lightbox="obraz" data-title="Obraz 8" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('drugi/8.JPG')}}" alt="">
            </a>
      </div>
    </div>
  
  </div>

  <div class="container">

    <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Apartament III</h1>
  
    <hr class="mt-2 mb-5">
  
    <div class="row text-center text-lg-left">
  
      <div class="col-lg-3 col-md-4 col-6">
        <a href="trzeci/1.JPG" data-lightbox="obraz" data-title="Obraz 1" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('trzeci/1.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="trzeci/2.JPG" data-lightbox="obraz" data-title="Obraz 2" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('trzeci/2.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="trzeci/3.JPG" data-lightbox="obraz" data-title="Obraz 3" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('trzeci/3.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="trzeci/4.JPG" data-lightbox="obraz" data-title="Obraz 4" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('trzeci/4.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="trzeci/5.JPG" data-lightbox="obraz" data-title="Obraz 5" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('trzeci/5.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="trzeci/6.JPG" data-lightbox="obraz" data-title="Obraz 6" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('trzeci/6.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="trzeci/7.JPG" data-lightbox="obraz" data-title="Obraz 7" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('trzeci/7.JPG')}}" alt="">
            </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="trzeci/8.JPG" data-lightbox="obraz" data-title="Obraz 8" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{ asset('trzeci/8.JPG')}}" alt="">
            </a>
      </div>
    </div>
  
  </div>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Jezioro Białe &copy; M&M HOUSE 2021</p>
    </div>
    <!-- /.container -->
  </footer>


</body>

</html>
@endsection
