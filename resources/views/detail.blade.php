<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Album detail</title>

    @vite('resources/css/app.scss')
</head>

<body>
    <header class="album-header">
        <nav>
            <a href="{{ action('AlbumController@index') }}">Home</a>
        </nav>
    </header>
    <div class="album-detail">
        <h1>{{ $album->title }}</h1>
        <div class="album-detail__content">

            <img src="{{ $album->img_url }}" alt="{{ $album->title }}">
            <div class="album-detail__info">
                <div>
                    <h2>Interpreter: </h2>
                    <span>{{ $album->interpreter->name }}</span>
                </div>
                <div>
                    <h2>Rating: </h2>
                    <span>{{ $album->rating }}/10</span>
                </div>
                <div>
                    <h2>Genre: </h2><span>{{ $album->genre->name }}</span>
                </div>
                <div>
                    <h2>Year released: </h2><span>{{ $album->year_released }}</span>
                </div>
                <div>
                    <h2>Price:</h2> <span>{{ $album->price }} CZK</span>
                </div>
                <button class="album-detail__print-button" onclick=window.print()>Print</button>
            </div>
        </div>
    </div>


</body>

</html>
