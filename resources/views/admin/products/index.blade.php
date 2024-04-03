<x-admin-layout>
    <!-- component -->
    <head>
    <style>
            .btn-primary {
                background-color: #4267B2;
              
              
            }

            .container-form {
                border-radius: 5px;
                background-color: rgba(242, 242, 242, 0.8);
                padding: 80px;
                margin-top: 60px;

             }
    </style>
</head>
    <body class="antialiased font-sans bg-gray-200">
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div>
                    <h2 class="text-2xl font-semibold leading-tight">Productos</h2>
                </div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <a href="{{ route('admin.products.create') }}"><button
                                class="group relative h-10 w-28 overflow-hidden rounded-2xl bg-gray-400 text-lg font-bold text-white btn btn-primary">
                                Nuevo
                                <div
                                    class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                                </div>
                            </button></a>

                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Producto
                                    </th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">{{ $product->name }}</p>
                                            </td>

                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}"
                                                    class="text-gray-900 whitespace-no-wrap">Editar</a>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <form method="POST"
                                                    action="{{ route('admin.products.destroy', ['product' => $product->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-500">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </body>
</x-admin-layout>
