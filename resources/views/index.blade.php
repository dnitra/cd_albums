<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CD ALBUMS</title>
    @vite('resources/css/app.scss')
    @vite('resources/js/app.js')
</head>

<body>

    <h1 class="cd-albums__heading">CD ALBUMS OVERVIEW</h1>


    <h2>List of albums:</h2>
    @if (isset($albums))
        <ul class="cd-albums__list">


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
