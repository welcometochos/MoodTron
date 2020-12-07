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
        <div class="py-4">
            @yield('content')
        </div>
        

        <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>