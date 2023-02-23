<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics | Videos </title>

    @vite('resources/js/app.js')
</head>

<body>
    <header class="container">
        <figure class="logo">
            <a href="{{ url('/') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC"></a>
        </figure>
        <h1>Comics Videos</h1>
    </header>
</body>

</html>
