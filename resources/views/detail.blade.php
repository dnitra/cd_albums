<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Album detail</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    @vite('resources/css/app.scss')

</head>

<body>
    <a href="{{ url()->previous() }}">Go back</a>
    <div class="album-detail">
        <h1>{{ $detail[0]->title }}</h1>
        <div class="album-detail__content">

            <img src="{{ $detail[0]->img_url }}" alt="{{ $detail[0]->title }}">
            <div class="album-detail__info">
                <div>
                    <h2>Interpreter: </h2><span>{{ $detail[0]->interpreter->name }}</span>
                </div>
                <div>
                    <h2>Rating: </h2><span>{{ $detail[0]->rating }}/10</span>
                </div>
                <div>
                    <h2>Genre: </h2><span>{{ $detail[0]->genre->name }}</span>
                </div>
                <div>
                    <h2>Year released: </h2><span>{{ $detail[0]->year_released }}</span>
                </div>
                <div>
                    <h2>Price:</h2> <span>{{ $detail[0]->price }} CZK</span>
                </div>
                <button class="album-detail__print-button" onclick=window.print()>Print</button>
            </div>
        </div>
    </div>


</body>

</html>
