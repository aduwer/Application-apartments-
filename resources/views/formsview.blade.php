@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Formularze rezerwacyjne</title>
    <link href="{{ asset('css/forms.css') }}" rel="stylesheet">
    
    
</head>
<body>
    <div class ="containerall">
    <div class="container content">
    <div class="row">
    <div class="col-md-8 mb-5">
        <div class="row row-content">
            <div class="col-lg-12 text-center content">
                <h2 class="mt-5"> Z Twojego konta zostały wysłane następujące formularze zgłoszeniowe</h2>
            </div>
         </div> 
        
        <section class="py-5">
        @foreach($form as $forms)
        <div class="container">
        <p class="lead">Data wysłania: {{$forms->created_at}} </p>
         <p> <h5> {{$forms->wiadomosc}} </h5> </p>
        </div>
        <br>
        @endforeach
        </section>

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
      <div class="btn-default">
       <br>
        <a class="btn btn-primary" href="{{ url('/') }}" role="button">Przejdź do strony głównej</a>
        </div>
    </div>
</div> 
</div> 
    

<footer class="py-5 bg-dark position">
            <div class="container">
                <p class="m-0 text-center text-white">Jezioro Białe &copy; M&M HOUSE 2021</p>
            </div>
</footer>
</div>

</body>
</html>
@endsection