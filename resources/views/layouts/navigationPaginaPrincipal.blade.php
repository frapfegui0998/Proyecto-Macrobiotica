<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        /* Establecer color blanco para los enlaces del navbar */
        .navbar-nav li a {
            color: white;
        }

        /* Alinear la caja de búsqueda a la derecha */
        .navbar-form {
            flex: 1;
            /* Ocupar espacio restante */
            display: flex;
            justify-content: flex-end;
        }

        /* Establecer color blanco para la marca del navbar */
        .navbar-brand {
            color: white;
            margin-right: 20px;
            /* Añade un margen a la derecha de la marca */
        }

        .btn {
            color: gray;
            margin-right: 20px;
            /* Añade un margen a la derecha de la marca */
        }

        /* Quitar el margin-bottom del navbar */
        .navbar.bg-primary {
            margin-bottom: 0;
        }

        /* Estilo para el elemento de login al lado derecho */
        .navbar-right {
            padding-right: 20px;
            /* Agregar padding al lado derecho */
        }

        .btn-primary {
            background-color: #4267B2;     
        }
    </style>
</head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/656cf3c3ff45ca7d4786774e/1hgopgcob';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Macrobiótica Vida Natural</a>
        </div>
    </div>
</nav>
<div class="navbar navbar-default">
    <div class="container">
        <ul class="nav navbar-nav">
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('/contacto') }}">Contáctanos</a></li>
            <li><a href="{{ url('/acerca') }}">Acerca de Nosotros</a></li>
            <li><a href="{{ url('/productos') }}">Productos</a></li>
            <li style="font-weight: bold;">@role('admin') <a href="{{ url('admin/') }}">Panel administrativo</a> @endrole</li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @auth
                 <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li>
                        <button type="submit" class="btn btn-primary" style="margin-right: 15px; padding-top: 15px; background-color: #f8f8f8; border-color: #f8f8f8;" >
                            <i class="fas fa-sign-out-alt" style="color: gray"></i>
                        </button>
                    </li>
                </form>
            @else
                <li><a href="{{ url('/login') }}"><i class="fas fa-user"></i> <span
                            style="margin-right: 15px;">Login</span></a></li>
            @endauth
            
        </ul>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>
