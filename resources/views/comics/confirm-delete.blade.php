<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sei Sicuro???</title>
</head>
<body>
    <h1>Sei sicuro?</h1>

    <form method="POST" action="{{ route('comics.destroy', $comic->id)}}">
        @csrf
        @method('DELETE')
        <input type="submit" value="si">
    </form>
    <a href="{{route('comics.index')}}">NO</a>
</body>
</html>
