<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>laravel-dc-comics</title>
        @vite('resources/js/app.js')
    </head>

    <body>
        <div class="container text-center m-5">
            <h1>Welcome</h1>
            <a href="/comics">Go to comics list</a>
        </div>
    </body>
</html>
