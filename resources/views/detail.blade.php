<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Album detail</title>

</head>
<body>
    
    <h1>{{ $detail[0]->title}}</h1>
    <img src="{{ $detail[0]->img_url}}" alt="{{ $detail[0]->title }}">
    <p><strong>Interpreter: </strong>{{ $detail[0]->interpreter->name }}</p>
    <p><strong>Rating: </strong>{{ $detail[0]->rating }}</p>
    <p><strong>Genre: </strong>{{ $detail[0]->genre->name }}</p>
    <p><strong>Year released: </strong>{{ $detail[0]->year_released }}</p>
    <p><strong>Price:</strong> {{ $detail[0]->price }} CZK</p>


</body>
</html>


