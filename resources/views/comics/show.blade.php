<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dettaglio {{ $comic->title }}</title>
</head>
<body>
    <h2>{{ $comic->title }}</h2>

    <div>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </div>
    <p>{{ $comic->description }}</p>
    <p>{{ $comic->series }}</p>
    <p>{{ $comic->sale_date }}</p>

    <div>
        <a href="{{route('comics.edit', $comic->id)}}">EDIT</a>
    </div>
</body>
</html>
