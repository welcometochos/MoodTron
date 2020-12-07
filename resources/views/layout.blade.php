<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MoodTron</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
    <body>                  
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <a class="navbar-brand brand" href="{{ url('/') }}"><strong>Mood</strong>Tron</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nav-space collapse navbar-collapse " id="navbarNavAltMarkup">
                <a class="nav-link navbar-item" href="/Blog">Blog</a>                               
                <a class="nav-link navbar-item" href="/Journal">Journal</a>
                <a class="nav-link navbar-item" href="/profile">Profile</a>
                <a class="nav-link navbar-item" href="/Aboutus">About us</a>       
            </div>
        </nav> 
        
        <div class="container">
            <header class="welcome right">
                
            </header> 

        </div>

        <div class="py-4">
            @yield('content')
        </div>
        

        <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>