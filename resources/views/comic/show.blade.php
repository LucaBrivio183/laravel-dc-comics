<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $comic->title }}</title>
        @vite('resources/js/app.js')
    </head>

    <body>
        <div class="container text-center my-5">
            <a href="{{ route('comics.index')}}" class="btn btn-primary">Torna all'elenco</a>
            <h1>{{ $comic->title }}</h1>
            <img src="{{ $comic->thumb }}" alt="">
            <p>{{ $comic->description }}</p>
            <p><b>Writers: </b>{{ $comic->writers }}</p>
            <p><b>Artists: </b>{{ $comic->artists }}</p>
        </div>
    </body>
</html>