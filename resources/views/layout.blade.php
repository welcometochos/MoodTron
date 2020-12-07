<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MoodTron</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>                  
        <nav class="navbar fixed-top navbar-expand-lg navbar-light">
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

        <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>