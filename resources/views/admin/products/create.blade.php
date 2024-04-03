<x-admin-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Agregar producto</title>
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
                font-size: 24px;
            }

            .btn-primary {
                background-color: #4267B2;
                border: none;
                padding: 15px 30px;
                font-size: 24px;
                color: #fff;
            }

            .btn-primary:hover {
                background-color: #4f4f4f;
            }
        </style>
    </head>

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left mb-2">
                        <h2>Agregar producto</h2>
                    </div>

                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('admin.products.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre del producto:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                            @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Descripción (Opcional):</strong>
                            <input type="text" name="description" class="form-control" placeholder="Descripción">
                            @error('email')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Imagen (Opcional):</strong>
                            <input type="text" name="image_url" class="form-control" placeholder="Imagen">
                            @error('email')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Precio:</strong>
                            <input type="number" name="price" class="form-control" placeholder="Precio" required>
                            @error('password')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            <input type="number" name="stock_quantity" class="form-control" placeholder="Cantidad"
                                required>
                            @error('password')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <a class="btn btn-primary" href="{{ route('admin.products.index') }}"> Regresar</a>
                    <button type="submit" class="btn btn-primary ml-3">Crear</button>
                </div>
            </form>
        </div>
    </body>

    </html>
</x-admin-layout>
