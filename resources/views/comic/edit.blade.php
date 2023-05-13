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
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $comic->title) }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }} </div>
                @enderror
            </div>
            {{-- description --}}
            <div class="mb-3">
                <label for="description" class="form-label"></label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $comic->description) }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }} </div>
                @enderror
            </div>
            {{-- thumb --}}
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }} </div>
                @enderror
            </div>
            {{-- price --}}
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $comic->price) }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }} </div>
                @enderror
            </div>
            {{-- series --}}
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series', $comic->series) }}">
                @error('series')
                    <div class="alert alert-danger">{{ $message }} </div>
                @enderror
            </div>
            {{-- sale_date --}}
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }} </div>
                @enderror
            </div>
            {{-- type --}}
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <select class="form-select" id="type" name="type">
                    {{-- <option {{ empty($comic->type) ? 'selected' : null }}>Scegli il tipo</option> --}}
                    <option value="comic-book"{{ old('type',$comic->type) === 'comic book' ? 'selected' : null }}>comic book</option>
                    <option value="graphic-novel" {{ old('type',$comic->type) === 'graphic novel' ? 'selected' : null }}>graphic novel</option>
                </select>
            </div>
            {{-- artists --}}
            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" value="{{ old('artists', $comic->artists) }}">
                @error('artists')
                    <div class="alert alert-danger">{{ $message }} </div>
                @enderror
            </div>
            {{-- writers --}}
            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" value="{{ old('writers', $comic->writers) }}">
                @error('writers')
                    <div class="alert alert-danger">{{ $message }} </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>   
    </div>
</body>
</html>