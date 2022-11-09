<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista-Comics</title>
</head>
<body>

    @foreach ($comics as $comic )
    <a href="{{route('comics.show' , $comic->id) }}"> {{ $comics->title }} </a>

    @endforeach
</body>
</html>
