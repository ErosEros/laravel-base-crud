<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crea Comic</title>
</head>
<body>
    <form method="POST" action="{{ route('comics.store')}}" >
         @csrf

         <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
         </div>

         <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
         </div>

         <div>
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb">
         </div>

         <div>
            <input type="submit" value="Crea!">
         </div>

    </form>
</body>
</html>
