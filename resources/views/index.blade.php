<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CD ALBUMS</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />

    @vite('resources/css/app.scss')
</head>

<body>

    <h1>CD ALBUMS OVERVIEW</h1>


    <h2>List of albums:</h2>
    @if (isset($albums))
        <ul class="cd-albums">


            @foreach ($albums as $album)
                <a href="{{ action('AlbumController@show', $album->id) }}">
                    <li>{{ $album->title }}</li>
                </a>
            @endforeach
        </ul>

        {{ $albums->links() }}
    @else
        <h3>No albums loaded</h3>
    @endif



</body>

</html>
