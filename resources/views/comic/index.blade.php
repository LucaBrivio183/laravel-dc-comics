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
    <div class="container">
        <h1 class="text-center">Comics</h1>
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-3 p-2">
                <div class="card h-100">
                    <img src="{{ $comic->thumb }}" class="card-img-top img-fluid h-75" >
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <div class="d-flex justify-content-between">
                            <p class="card-text">{{ $comic->series}}</p>
                            <p class="card-text">{{ $comic->price}}</p>
                        </div>
                        <a href="{{ route('comics.show',$comic->id)}}" class="btn btn-primary">details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>