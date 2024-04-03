<x-admin-layout>
    <!-- component -->
    <head>
    <style>
         .btn-primary {
                background-color: #4267B2;
              
              
            }

    </style>
</head>
    <body class="antialiased font-sans bg-gray-200">
        <div class="container mx-auto px-4 sm:px-8">
            <!-- WARNING -->
            @if (session('message'))
                <div class="max-w-full mx-auto">
                    <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
                        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <span class="font-medium">Alerta!</span> {{ session('message') }}
                        </div>
                    </div>
                </div>
            @endif

            <div class="py-8">
                <div>
                    <h2 class="text-2xl font-semibold leading-tight">Roles</h2>
                </div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <a href="{{ route('admin.roles.create') }}"><button
                                class="group relative h-10 w-28 overflow-hidden rounded-2xl bg-gray-400 text-lg font-bold text-white btn btn-primary">
                                Nuevo Rol
                                <div
                                    class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                                </div>
                            </button></a>

                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Rol
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $role->name }}</p>
                                        </td>

                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <a href="{{ route('admin.roles.edit', ['role' => $role->id]) }}"
                                                class="text-gray-900 whitespace-no-wrap">Editar</a>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <form method="POST"
                                                action="{{ route('admin.roles.destroy', ['role' => $role->id]) }}">
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
