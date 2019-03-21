<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gamers | Manufacturers</title>
</head>
<body>
<header>
    <p>Gamers</p>
</header>
<main>
    <h1>Manufacturers</h1>
    <p>Paragraph</p>
    <ul>
        @foreach($manufacturers as $manufacturer)
            <li><b>{{ $manufacturer->id}}</b> {{$manufacturer->name}}</li>
        @endforeach
    </ul>
</main>
</body>

</html>