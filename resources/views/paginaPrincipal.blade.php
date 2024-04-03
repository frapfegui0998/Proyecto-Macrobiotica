<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Macrobiótica Vida Natural</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('images/macrobiotica.jpg') }}');
            background-size: cover;
            background-position: center center;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .carousel-container {
            max-width: 100%; 
            margin-top: 80px;
        }

    </style>

</head>    

<header class="font-sans antialiased">
    @include('layouts.navigationPaginaPrincipal')
</header>

<body>
    <div class="container mt-4">
        <div class="carousel-container px-3 px-md-4">
            @include('layouts.carousel')
        </div>
    </div>

</body>

</html>
