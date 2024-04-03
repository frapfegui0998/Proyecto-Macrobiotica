<x-admin-layout>

    <!-- component -->
    <div class="flex items-center justify-center p-12">

        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">


            <form action="{{ route('admin.roles.update', ['role' => $role->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="-mx-3 flex flex-wrap py-5">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="name" class="py-2 mb-3 block text-base font-medium text-[#07074D]">
                                Nuevo nombre del Rol
                            </label>
                            <input type="text" name="name" id="name" placeholder="Rol"
                                value="{{ $role->name }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        @error('name')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                        <!--  -->

                    </div>
                </div>
                <div>
                    <a href="" class="px-4"><button type="submit"
                            class="group relative h-10 w-28 overflow-hidden rounded-2xl text-lg font-bold text-white" style= "background-color: #4267B2">
                            Editar
                            <div
                                class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                            </div>
                        </button></a>
                </div>
            </form>

            <h2 class="pt-10 block text-base font-bold text-[#07074D]">Permisos del Rol</h2>
            @if ($role->permissions)
                @foreach ($role->permissions as $role_permission)
                    <form method="POST"
                        action="{{ route('admin.roles.permissions.revoke', [$role->id, $role_permission->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">{{ $role_permission->name }}</button>
                    </form>
                @endforeach
            @endif

            <form action="{{ route('admin.roles.permissions', ['role' => $role->id]) }}" method="POST">
                @csrf
                <div class="-mx-3 flex flex-wrap py-3">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="permission" class="py-2 mb-3 block text-base font-medium text-[#07074D]">
                                Asignar Permiso
                            </label>
                            <select name="permission" id="permission"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('permission')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <a href="" class="px-4"><button type="submit"
                            class="group relative h-10 w-28 overflow-hidden rounded-2xl text-lg font-bold text-white" style= "background-color: #4267B2">
                            Asignar
                            <div
                                class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                            </div>
                        </button></a>
                </div>
            </form>
        </div>
    </div>

</x-admin-layout>
