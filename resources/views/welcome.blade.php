<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GameCoding</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" text="text/css" media="screen" href="{{ asset('css/app.css') }}">

    </head>
    <body>
    <div id="app">
        <app-root></app-root>
    </div>
    </body>
    <!-- Styles -->
    <script src="{{ mix('/js/app.js') }}"></script>
</html>

