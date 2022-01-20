@extends('layouts.app')

@section('content')

<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ERROR') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Wprowadzone nowe hasła nie są takie same!') }}
                    <div class="btn-default">
                        <br>
                        <a class="btn btn-primary" href="{{ url('/data') }}" role="button">Wróć do edycji danych</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="py-5 bg-dark footer-content">
            <div class="container">
                <p class="m-0 text-center text-white">Jezioro Białe &copy; M&M HOUSE 2021</p>
            </div>
</footer>
</body>
@endsection
