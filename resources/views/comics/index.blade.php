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
        <div>
            <a href="{{route('comics.show' , $comic->id) }}"> {{ $comic->title }}</a>
            <a href="{{route('comics.confirm-delete' , $comic->id) }}">Elimina</a>


            {{-- <form method="POST" action="{{ route('comics.destroy', $comic->id)}}"> --}}
                @csrf
                @method('DELETE')
                {{-- <input type="submit" value="elimina"> --}}
            </form>
        </div>
    @endforeach
</body>
</html>
