<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Macrobiótica Vida Natural</title>

    <style>
        .productos {
            display: flex;
            flex-wrap: wrap;
        }

        .card {
            margin-left: 3rem;
            margin-top: 1rem;
        }

        .card-title,
        .card-text {
            color: white;
            /* Cambia el color del texto a blanco */
            font-size: 14px;
            /* Ajusta el tamaño de la fuente según tus preferencias */
        }


        .btn.btn-primary {
            color: white;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('images/macrobiotica.jpg') }}');
            background-size: cover;
            background-position: center center;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<header class="font-sans antialiased">
    @include('layouts.navigationPaginaPrincipal')
</header>

<div class="login-container container mx-auto">
    <div class="productos mx-auto">
        @foreach ($products as $product)
            <div class="card">
                {{-- <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}"> --}}
                <img width="150px" height="150px" src="{{ asset($product->image_url) }}" class="card-img-top"
                    alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title" style="color: #4f4f4f; font-weight: bold;">{{ $product->name }}</h5>
                    <p class="card-text" style="color: #4f4f4f; font-weight: bold;">{{ $product->description }}</p>
                    <a href="{{ url('/contacto') }}" class="btn btn-primary">Consulte "Contáctanos"</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

</html>
