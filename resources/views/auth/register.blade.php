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
              <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="login-container">
              <div class="logo">
                  <img src="{{ asset('images/logo.jpg') }}" alt="Mi Imagen">

              </div>
                  <!-- Name -->
                  <div>
                      <x-input-label for="name" :value="__('Nombre')" />
                      <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                      <x-input-error :messages="$errors->get('name')" class="mt-2" />
                  </div>

                  <!-- Email Address -->
                  <div class="mt-4">
                      <x-input-label for="email" :value="__('Correo electrónico')" />
                      <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>

                  <!-- Password -->
                  <div class="mt-4">
                      <x-input-label for="password" :value="__('Contraseña')" />

                      <x-text-input id="password" class="block mt-1 w-full"
                                      type="password"
                                      name="password"
                                      required autocomplete="new-password" />

                      <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>

                  <!-- Confirm Password -->
                  <div class="mt-4">
                      <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

                      <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                      type="password"
                                      name="password_confirmation" required autocomplete="new-password" />

                      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                  </div>

                  <div class="flex items-center justify-end mt-4 button-container"></div>
                  </br>   
                  <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}"><button type="button">
                          {{ __('Ya está registrado?') }}
                          </button></a>
                          </br>
                          </br>
                          
                      <x-primary-button class="green-border-button">
                          {{ __('Registrarse') }}
                      </x-primary-button>
                  </div>
              </form>
        </body>
        </html>