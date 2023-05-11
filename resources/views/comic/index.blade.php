<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Comics</title>
</head>
<body>
    <div class="container my-5">
        <a href="{{ route('comics.create')}}" class="btn btn-primary">Aggiungi comics</a>
        <h1 class="text-center">Comics</h1>
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-3 p-2">
                <a href="{{ route('comics.show',$comic->id)}}">
                    <div class="card h-100">
                        <img src="{{ $comic->thumb }}" class="card-img-top img-fluid h-75" >
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <div class="d-flex justify-content-between">
                                <p class="card-text">{{ $comic->series}}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>