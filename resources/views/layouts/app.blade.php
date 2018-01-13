<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ekaruz Task') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">    
</head>
<body>
    
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">    
      <a class="navbar-brand" href= "{{ url('/') }}"        
       >{{ config('app.name', 'Ekaruz Task') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          
        </ul>
        <ul class="navbar-nav right">
            <!-- Authentication Links -->
            @guest
					<li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">Login</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="www.example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:30px; height:30px; position:absolute; top:10px; left:-30px; border-radius:50%" class="hidden-sm-down">
                    {{ Auth::user()->username }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{ url('/profile') }}">User Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </a>
                    
                    </div>
                </li>
            @endguest
		</ul>
      </div>      
    </nav>

    @yield('content')
    
