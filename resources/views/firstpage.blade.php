<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MoodTron</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>                  
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand brand" href="{{ url('/') }}"><strong>Mood</strong>Tron</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @auth
            <div class="nav-space collapse navbar-collapse " id="navbarNavAltMarkup">
                <a class="nav-link navbar-item" href="/Blog">Blog</a>
                <a class="nav-link navbar-item" href="/profile">Profile</a>               
                <a class="nav-link navbar-item" href="/Journal">Journal</a>
                <a class="nav-link navbar-item" href="/Search">Search</a>
                <a class="nav-link navbar-item" href="/Aboutus">About us</a>       
            </div>
        </nav> 
        <img src="https://visualpharm.com/assets/825/Bot-595b40b65ba036ed117d3818.svg">
        <div class="container">
            <header class="welcome right">
                Welcome to MoodTron!
            </header> 

        </div>
        @endauth
        @guest
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @endguest
        </nav>
        <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>