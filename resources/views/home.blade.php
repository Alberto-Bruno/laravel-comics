<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | Home </title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">

    @vite('resources/js/app.js')
</head>

<body>
    <div class="info-header">
        <div class="container">
            <h6>DC POWER VISA</h6>
            <h6>ADDITIONAL DC SITES</h6>
        </div>
    </div>
    <header class="container">
        <figure class="logo">
            <a href="{{ url('/') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC"></a>
        </figure>
        <nav>
            <ul>
                <li><a href="{{ route('characters') }}">CHARACTERS</a></li>
                <li><a href="{{ route('comics') }}">COMICS</a></li>
                <li><a href="{{ route('movies') }}">MOVIES</a></li>
                <li><a href="{{ route('tv') }}">TV</a></li>
                <li><a href="{{ route('games') }}">GAMES</a></li>
                <li><a href="{{ route('collectiobles') }}">COLLECTIOBLES</a></li>
                <li><a href="{{ route('videos') }}">VIDEOS</a></li>
                <li><a href="{{ route('fans') }}">FANS</a></li>
                <li><a href="{{ route('news') }}">NEWS</a></li>
                <li><a href="{{ route('shop') }}">SHOP</a></li>
            </ul>
        </nav>
    </header>
    <div class="jumbo"></div>

    <main>
        <div class="bg-black">
            <div class="container">
                <div class="btn-top">
                    <button>Current Series</button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
