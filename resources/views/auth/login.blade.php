<!DOCTYPE html> <html lang="en">

<head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - Macrobiótica</title> <style>
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
        margin-top: 20px;
        /* Espacio superior */
        margin-bottom: 20px;
        /* Espacio inferior */
        font-size: 15px;
        }

        button:hover {
        background-color: #be8842;
        }

        .green-border-button {
        width: 86%;
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
            <!-- Session Status -->
            <x-auth-session-status :status="session('status')" />
            <div class="login-container">
                <div class="logo">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Mi Imagen">

                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Correo Eletrónico')" />
                        <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                            autocomplete="username" placeholder="ejemplo@ejemplo.com" />
                        <x-input-error :messages="$errors->get('email')" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Contraseña')" />
                        <x-text-input id="password" type="password" name="password" required
                            autocomplete="current-password" placeholder="********" />
                        <x-input-error :messages="$errors->get('password')" />
                    </div>

                    <!-- Forgot your Password? / Login-->
                    <div class="button-container">
                        @if (Route::has('password.request'))
                        <a class="forgot-password-link" href="{{ route('password.request') }}">{{ __('¿Olvidaste la contraseña?') }}</a>
                        @endif
                        <x-primary-button>
                            {{ __('Iniciar sesión') }}
                        </x-primary-button>
                    </div>

                    <!-- Register -->
                    <div class="green-border-button-container">
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="green-border-button ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Registrarse
                        </a>
                        @endif
                    </div>


                    <!-- Remember Me
                    <div>
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" name="remember">
                            <span>{{ __('Recuérdame') }}</span>
                        </label>
                    </div>
                    -->
                    
                </form>

        </body>

        </html>