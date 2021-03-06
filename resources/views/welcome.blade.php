<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Biblioteca FisCar</title>

        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style-home.css')}}" rel="stylesheet" type="text/css" /> 

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>
        <style>
        div.menu-div {
            position: fixed;
            left: 0px;
            right: 0px;
            height: 2em;
            top: 0px;
            z-index: 10000;
            background-color: #ffffff;
            border-bottom: 1px solid #333333;
        }
        div.menu-div > div {
            display: inline-block;
            padding: 2px 10px;
        }
        </style>
    </head>
    <body>
        {!! $TheBestNavBar->asDiv(['class' => 'menu-div']) !!}
        <div class="flex-center position-ref full-height" style="z-index: 1000" id="fundo">
            @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
            @endif
            <div class="content">
                <i class="fa fa-bank"></i>
                <div class="title m-b-md">
                    Biblioteca FisCar
                </div>
                <div class="links">
                    <a href="/books">
                        <i class="fa fa-info"> Livros</i>
                    </a>
                    <a href="#about">
                        <i class="fa fa-info"> Sobre</i>
                    </a>
                </div>
            </div>
        </div>
        <div class="position-ref full-height" id="about">
          <div style="margin-left: 1em;">
            <h1>Sobre</h1>
            <br />
            <p>
                Aqui contém informações sobre a biblioteca.
            </p>
          </div>
        </div>
        
    </body>
</html>
