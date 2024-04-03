<x-admin-layout>

    <!-- component -->
    <div class="flex items-center justify-center p-12">

        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">
            <div>Nombre de Usuario: {{ $user->name }}</div>
            <div>Correo electrónico: {{ $user->email }}</div>

            <!-- Roles -->
            <div>
                <h2 class="pt-10 block text-base font-bold text-[#07074D]">Roles del Usuario</h2>
                @if ($user->roles)
                    @foreach ($user->roles as $user_role)
                        <form method="POST"
                            action="{{ route('admin.users.roles.remove', [$user->id, $user_role->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">{{ $user_role->name }}</button>
                        </form>
                    @endforeach
                @endif

                <form action="{{ route('admin.users.roles', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    <div class="-mx-3 flex flex-wrap py-3">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="role" class="py-2 mb-3 block text-base font-medium text-[#07074D]">
                                    Asignar Rol
                                </label>
                                <select name="role" id="role"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('role')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                            <!--  -->

                        </div>
                    </div>
                    <div>
                        <a href="" class="px-4"><button type="submit"
                                class="group relative h-10 w-28 overflow-hidden rounded-2xl bg-gray-400 text-lg font-bold text-white">
                                Asignar
                                <div
                                    class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                                </div>
                            </button></a>
                    </div>
                </form>
            </div>

            <!-- Permisos -->
            <div>
                <h2 class="pt-10 block text-base font-bold text-[#07074D]">Permisos del Usuario</h2>
                @if ($user->permissions)
                    @foreach ($user->permissions as $user_permission)
                        <form method="POST"
                            action="{{ route('admin.users.permissions.revoke', [$user->id, $user_permission->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">{{ $user_permission->name }}</button>
                        </form>
                    @endforeach
                @endif

                <form action="{{ route('admin.users.permissions', ['user' => $user->id]) }}" method="POST">
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
                                class="group relative h-10 w-28 overflow-hidden rounded-2xl bg-gray-400 text-lg font-bold text-white">
                                Asignar
                                <div
                                    class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                                </div>
                            </button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-admin-layout>
