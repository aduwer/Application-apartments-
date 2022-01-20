@extends('layouts.app')
@section('content')

<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>M&M HOUSE</title>
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
        <link href="{{ asset('css/usersdata.css') }}" rel="stylesheet">
        
    </head>

<body>
<div class="container content">
        <div class="row row-content">
            <div class="col-lg-12 text-center content">
                <h2 class="mt-5">Witaj {{ Auth::user()->name }} !</h2>
            </div>
        </div> 


<div class="row align-items-center my-5">
  <div class="col-lg-7">
  <p class="lead col-sm-7">Edytuj lub zaktualizuj swoje dane: </p>
  

    <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{ route('update') }}">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">
    <!-- @foreach($users as $user) -->

      <div class="form-group">
        <label for="name" class="col-sm-4 control-label">Imię i nazwisko:</label>
        <div class="col-sm-7">
          <input type="text" name="name" id="name" class="form-control" required placeholder="Podaj imię i nazwisko">
       </div>
      </div>

      <div class="form-group">
        <label for="email" class="col-sm-4 control-label">Adres email:</label>
        <div class="col-sm-7">
          <input type="email" name="email" id="email" class="form-control" required placeholder="Podaj adres email">
        </div>
      </div>

    <div class="form-group">
      <label for="password" class="col-sm-4 control-label">Hasło:</label>
      <div class="col-sm-7">
        <input type="password" name="password" id="password" class="form-control" required placeholder="Podaj swoje aktualne hasło">
      </div>
    </div>

    <div class="form-group col-lg-5">
      <button type="submit" class="btn btn-secondary ">Aktualizuj dane</button>
    </div>

    <!-- @endforeach -->
    </form>
    
    <form>
    <a class="form-group col-lg-4 btn btn-light bt-content" href="{{ route('destroyaccount') }}" onclick="return confirm('Czy na pewno chcesz trwale usunąć swoje konto?')">
    Usuń konto
    </a>
    </form>
  
    

  </div>

      <div class="col-lg-5">
        <p class="lead col-sm-7 password-content">Zmień hasło: </p> 
        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{ route('updatepassword') }}" >
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">
          <div class="form-group">
            <label for="actualpassword" class="col-sm-4 control-label">Aktualne hasło:</label>
            <div class="col-sm-10">
              <input type="password" name = "actualpassword" id="actualpassword" class="form-control" required placeholder="Podaj swoje aktualne hasło">
            </div>
          </div>

          <div class="form-group">
            <label for="newpassword" class="col-sm-4 control-label">Nowe hasło:</label>
            <div class="col-sm-10">
              <input type="password" name="newpassword" id="newpassword" class="form-control" required placeholder="Podaj nowe hasło">
          </div>
        </div>

          <div class="form-group">
            <label for="newpasswordagain" class="col-sm-6 control-label">Potwierdź nowe hasło:</label>
            <div class="col-sm-10">
              <input type="password" name="newpasswordagain" id="newpasswordagain" class="form-control" required placeholder="Potwierdź nowe hasło">
            </div>
          </div>
  
          <div class="form-group col-lg-5">
            <button type="submit" class="btn btn-secondary ">Zmień hasło</button>
          </div>
         </form>
      </div>
      
</div>
</div>

<footer class="py-5 bg-dark footer-position media">
    <div class="container">
      
      <p class="m-0 text-center text-white">Jezioro Białe &copy; M&M HOUSE 2021</p>
    </div>
</footer>


</body>
</html>
@endsection