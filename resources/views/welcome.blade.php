<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GameCoding</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <script :src='./resource/js/app.js'></script>
    </head>
    <body>
        <app-root></app-root>
    </body>
</html>

</div>
    </body>
    <script src="{{ mix('/js/app.js') }}"></script>
</html>
