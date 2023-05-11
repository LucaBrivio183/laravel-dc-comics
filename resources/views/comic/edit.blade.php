<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Edit comics</title>
</head>
<body>
    <div class="container my-5">
        <a href="{{ route('comics.index')}}" class="btn btn-primary">Torna all'elenco</a>
        <h1 class="text-center">Modifiche per: {{ $comic->title }}</h1>
        <form action="{{ route('comics.update',$comic) }}" method="POST">
            @csrf
            @method('PUT')
            {{-- title --}}
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title}}">
            </div>
            {{-- description --}}
            <div class="mb-3">
                <label for="description" class="form-label"></label>
                <textarea class="form-control" id="description" name="description">{{ $comic->description }}</textarea>
            </div>
            {{-- thumb --}}
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
            {{-- price --}}
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
            </div>
            {{-- series --}}
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>
            {{-- sale_date --}}
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            {{-- type --}}
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <select class="form-select" id="type" name="type">
                    {{-- <option {{ empty($comic->type) ? 'selected' : null }}>Scegli il tipo</option> --}}
                    <option value="comic-book"{{ $comic->type === 'comic book' ? 'selected' : null }}>comic book</option>
                    <option value="graphic-novel" {{ $comic->type === 'graphic novel' ? 'selected' : null }}>graphic novel</option>
                </select>
            </div>
            {{-- artists --}}
            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <input type="text" class="form-control" id="artists" name="artists" value="{{ $comic->artists }}">
            </div>
            {{-- writers --}}
            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <input type="text" class="form-control" id="writers" name="writers" value="{{ $comic->writers }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>   
    </div>
</body>
</html>