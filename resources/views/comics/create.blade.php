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
            <input type="url" name="thumb">
         </div>

         <div>
            <label for="price">Price</label>
            <input type="number" step=".01" name="price">
         </div>

         <div>
            <label for="series">Series</label>
            <input type="text" name="series">
         </div>

         <div>
            <label for="sale_date">Sale Date</label>
            <input type="date" name="sale_date">
         </div>

         <div>
            <label for="type">Type</label>
            <input type="text" name="type">
         </div>

         <div>
            <input type="submit" value="Crea!">
         </div>

    </form>
</body>
</html>
