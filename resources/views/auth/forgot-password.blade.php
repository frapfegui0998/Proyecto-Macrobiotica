<!DOCTYPE html> <html lang="en">

<head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - Macrobiótica</title> <style>
        body {
        font-family: Arial, sans-serif;
        background-image: url('{{ asset('images/manzanas.jpg') }}');
        background-size: cover;
        background-position: center center;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        }

        .mb-4.text-sm.text-gray-600 {
        margin-bottom: 20px; /* Agrega un margen inferior para separar de la sección siguiente */
        }
        
        .login-container {
        background-color: rgba(255, 255, 255, 0.7);
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        padding: 45px;
        width: 300px;
        text-align: left;
        }

        .logo {
        width: 100px;
        height: 100px;
        margin: 0 auto 20px;
        border-radius: 50%;
        overflow: hidden;
        }

        .logo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        }

        input {
        width: 90%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        }

        button {
        background-color: #ea921f;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        margin-top: 10px;
        /* Espacio superior */
        margin-bottom: 10px;
        /* Espacio inferior */
        font-size: 15px;
        }

        button:hover {
        background-color: #be8842;
        }

        .green-border-button {
        width: 100%;
        display: inline-block;
        padding: 10px 20px; /* Ajusta el espaciado según tus necesidades */
        background-color: white; /* Relleno blanco */
        border: 2px solid green; /* Borde verde */
        color: green; /* Color del texto */
        text-decoration: none; /* Quita la subraya por defecto de los enlaces */
        border-radius: 4px; /* Borde redondeado (ajustado para que sea similar al botón original) */
        transition: background-color 0.2s, color 0.2s; /* Efecto de transición al pasar el ratón */
        font-size: 15px; /* Tamaño de fuente igual al botón original */
        text-align: center;
        }

        .green-border-button:hover {
        background-color: green; /* Cambia el color de fondo al pasar el ratón */
        color: rgba(255, 255, 255, 0.7); /* Cambia el color del texto al pasar el ratón */
        }

        .forgot-password-link {
        font-size: 13px;
        }

        </style>
        </head>

        <body>
            <div class="login-container">
                <div class="logo">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Mi Imagen">

                </div>
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Correo Electronico')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <x-primary-button class="green-border-button">
                            {{ __('Enviar correo con link de recuperación') }}
                        </x-primary-button>
                    </div>
                </form>
        </body>
        </html>