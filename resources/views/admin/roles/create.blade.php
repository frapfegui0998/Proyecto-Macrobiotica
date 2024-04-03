<x-admin-layout>

    <!-- component -->
    <div class="flex items-center justify-center p-12">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('admin.roles.store') }}" method="POST">
                @csrf
                <div class="-mx-3 flex flex-wrap py-5">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="name" class="py-2 mb-3 block text-base font-medium text-[#07074D]">
                                Nombre del Rol
                            </label>
                            <input type="text" name="name" id="name" placeholder="Rol"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        @error('name')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <a href="" class="px-4">
                        <button type="submit"
                            class="group relative h-12 w-32 overflow-hidden rounded-lg text-lg font-bold text-white" style= "background-color: #4267B2">
                            Crear
                            <div
                                class="absolute inset-0 h-full w-full scale-0 rounded-lg transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                            </div>
                        </button>
                    </a>
                </div>
            </form>
        </div>
    </div>

</x-admin-layout>
