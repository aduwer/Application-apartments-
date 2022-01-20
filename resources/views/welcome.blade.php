<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel = "shortcut icon" href ="miniatury/logo.png">

  <meta property="og:title" content="M&M HOUSE - Apartamenty Jezioro Białe" />
  <meta property="og:url" content="https://jb-mmhouse.pl" />
  <meta property="og:type" content="website"/>
  <meta property="og:image" content="https://jb-mmhouse.pl/ogolne/5.JPG" >
  

  <title>M&M HOUSE</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/small-business.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
  <script src="{{ asset('js/jquery.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>


</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('photo/logopoprawka.png')}}" alt="M&M HOUSE"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#apartamenty"> <h5>Apartamenty</h5>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontakt"><h5>Kontakt</h5></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#info"><h5>O nas</h5></a>
          </li>
          
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

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" data-interval="1000">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('photo/1.JPG')}}" alt="Zdjecie 1">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('photo/2.JPG')}}" alt="Zdjecie 2" >
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('photo/3.JPG')}}" alt="Zdjecie 3" >
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('photo/4.JPG')}}" alt="Zdjecie 4" >
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('photo/5.JPG')}}" alt="Zdjecie 5" >
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('photo/6.JPG')}}" alt="Zdjecie 6" >
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('photo/7.JPG')}}" alt="Zdjecie 7" >
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="container" id="apartamenty">

    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('photo/mini.JPG')}}" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light">Apartamenty do wynajęcia</h1>
        <p>Prezentowane przez nas apartamenty posiadają powierzchnię około 60m², w skład której wchodzą dwie sypialnie oraz salon z aneksem kuchennym. Każdy apartament jest klimatyzowany i posiada własną łazienkę, telewizor, w pełni wyposażony aneks kuchenny z lodówką, zmywarką, czajnikiem i płytą indukcyjną. </p>
        @auth
        <a class="btn btn-primary" href="{{url('/photos') }}">Więcej zdjęć</a>
        @endauth
        @guest
        <a class="btn btn-info" href="{{ route('login') }}">Zaloguj się by zobaczyć więcej zdjęć</a>
        @endguest
      </div>
      <!-- /.col-md-4 -->
    </div>

  </div>  
  

  <div class="masthead" id="kontakt">
    
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <h1 class="font-weight-light">Zabookuj swój apartament już dziś! </h1> <br/>
          
          <p class="lead">Napisz do nas!</p>
          <form role="form" action="{{ route('store') }}" id="form-form" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          
            
              <input type="text" name="imie" id="name" size="60" pattern="^[A-ZŁŻ]+[a-ząćęłńóśżź]{2,20}$" placeholder="Imię" required> <br/>
              <br/>
              <input type="text" name="nazwisko" id="surname" size="60" pattern="[A-ZĘÓŁŚĄŻŹĆŃ]{1}[a-zęółśążźćń]{1,}" placeholder="Nazwisko" required> <br/>
              <br/>
              <input type="email" name="email" size="60" id="email" placeholder="Adres email" required> <br/>
              <br/>
              <input type="text" name="telefon" size="60" id="phonenumber" placeholder="Numer telefonu" pattern="(^[0-9]{9}$)" title="Prosze podac numer telefonu, skladajacy sie 9 cyfr" required> <br/>
              <br/>
              <div class="form-group {{ $errors->has('wiadomosc')?'has-error':''}}" id="roles_box">
              <textarea name="wiadomosc" rows="4" cols="63" id="message" placeholder="Treść wiadomości" minlength="30" maxlength="300" required></textarea>
              </div>
              <br/>
             
          @auth 
          <input type="submit" value="Wyślij *" class="btn btn-primary">
          @endauth

          @guest
          <a class="btn btn-info" href="{{ route('login') }}">Zaloguj się, aby zarezerwować apartament</a>
          @endguest
          
          </form>
          @auth
         <h4 class="lead"> * Wyrażam zgodę na przetwarzanie moich danych osobowych </h4>
         @endauth
          <br/>
        
      
     
      <p class="lead"><br/> lub zadzwoń <br/> 501 039 059 <br/> 602 781 049</p>
          
      </div>
      </div>
    </div>
   </div>

   <div class="container" id="info">
   <div class="row">
    <div class="col-md-8 mb-5">
      <br/>
      <h2>O nas</h2>
      <hr>
      <p>Znajdujemy się w Okunince w spokojnej okolicy, blisko centrum, około 500m od głównej plaży. Oferujemy 3 apartamenty wyposażone w klimatyzację oraz WiFi. Każdy apartament jest przeznaczony dla maksymalnie 6 osób. Cena dotyczy wynajmu całego apartamentu (niezależnie od liczby osób) i wynosi 450 zł za dobę. Do każdego apartamentu przynależą po 2 miejsca parkingowe. </p>
      <p class="lead">Regulamin: <br/> </p>
      <p> 
        - Doba hotelowa rozpoczyna się o godzinie 14, a kończy o godzinie 10. <br>
        - Przy rezerwacji obowiązuje zadatek 1000 zł na konto. Resztę zapłaty za pobyt pobieramy zaraz po zakwaterowaniu przelewem internetowym lub w gotówce. Przy zakwaterowaniu również pobieramy zwrotną kaucję zabezpieczającą w wysokości 400 zł. <br>
        - W sezonie letnim rezerwacja minimum 5 noclegów. <br>
        - Brak możliwości wynajmu na 1 noc oraz na wieczór kawalerski/panieński itp. <br>
        - Zwierzęta nie są akceptowane. <br>
        - Rezerwacja apartamentu jest równoznaczna z akceptacją powyższego regulaminu. <br>
        </p>
      
    </div>
    <div class="col-md-4 mb-5">
      <br/>
      <h2>Znajdź nas</h2>
      <hr>
      <address>
        <strong>M&M HOUSE</strong>
        <br>Adres: Okuninka V-1F
        <br>Kod pocztowy: 22-200 Okuninka
        
        <br>
      </address>
      <address>
        <abbr title="Phone">Telefon: </abbr>
        501 039 059 lub 602 781 049
        <br>
        <abbr title="Email">Email: </abbr>
        <a href="mailto:#">jb.mmhouse@gmail.com</a> <br/>
        <a href = "https://www.facebook.com/MM-HOUSE-Okuninka-100561251727371/"><img src = "{{ asset('photo/facebook.png')}}" alt="Facebook"></a>
      </address>
    </div>
  </div>
  </div>


  <div class="maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3563.4004992193295!2d23.536263859878495!3d51.502571014509556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4723c3575ff55dcb%3A0x13ea969cf099d853!2sM%26M%20HOUSE!5e0!3m2!1spl!2spl!4v1595593790213!5m2!1spl!2spl" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>


  
  <footer class="py-5 bg-dark">
    <div class="container">
      
      <p class="m-0 text-center text-white">Jezioro Białe &copy; M&M HOUSE 2021</p>
    </div>
  </footer>

</body>

</html>
