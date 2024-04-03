<x-admin-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Add Users Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                background-color: #4267B2;
            }

            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .form-group input {
                width: 100%;
                padding: 15px;
                /* Increase padding for larger size */
                font-size: 24px;
                /* Increase font size for larger text */
            }

            .btn-primary {
                background-color: #4267B2;
                border: none;
                padding: 15px 30px;
                /* Increase padding for larger button */
                font-size: 24px;
                /* Increase font size for larger text */
                color: #fff;
            }

            .btn-primary:hover {
                background-color: #4f4f4f;
                /* Darker green on hover */
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left mb-2">
                        <h2>Agregar usuario</h2>
                    </div>
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre de usuario:</strong>
                            <input type="text" name="name" class="form-control" placeholder="User Name">
                            @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Correo electrónico:</strong>
                            <input type="email" name="email" class="form-control" placeholder="User Email">
                            @error('email')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            <input type="text" name="password" class="form-control" placeholder="User Password">
                            @error('password')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <a class="btn btn-primary" href="{{ route('admin.users.index') }}"> Regresar</a>
                    <button type="submit" class="btn btn-primary ml-3">Crear</button>
                </div>
            </form>
        </div>
    </body>

    </html>
</x-admin-layout>
