{{-- <link rel="stylesheet" href="{{('fontawesome-free-6.4.2-web/css/all.min.css')}}"> --}}
<link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
<style>
    .menu-item {
        display: block;
        padding: 0.5rem 1rem;
        margin-top: 0.5rem;
        font-size: 1rem;
        font-weight: 600;
        color: #000;
        border-radius: 0.25rem;
        transition: all 0.3s ease;
    }

    .menu-item:hover,
    .menu-item:focus {
        background-color: #f0f2f5;
        color: #000;
    }
</style>

<div @click.away="open = false"
    class="flex flex-col flex-shrink-0 w-full text-black bg-gray-800 md:w-64 dark-mode:text-gray-200 dark-mode:bg-gray-800"
    x-data="{ open: false }">
    <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4" style="background-color: #4267B2;">
        <a href="{{ route('admin.index') }}"
            class="text-lg font-semibold tracking-widest text-white uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
            Macrobiótica Vida Natural
        </a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            </svg>
        </button>
    </div>
    <nav :class="{ 'block': open, 'hidden': !open }" class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto"
        style="background-color: #f0f2f5;">
        <a class="menu-item {{ request()->is('admin') ? 'bg-blue-200' : 'bg-transparent' }}"
            href="{{ route('admin.index') }}">
            <i class="fas fa-home" style="margin-right: 8px;"></i> Inicio
        </a>
        <a class="menu-item {{ request()->is('admin/users*') ? 'bg-blue-200' : 'bg-transparent' }}"
            href="{{ route('admin.users.index') }}">
            <i class="fas fa-users" style="margin-right: 8px;"></i> Usuarios
        </a>
        <a class="menu-item {{ request()->is('admin/roles*') ? 'bg-blue-200' : 'bg-transparent' }}"
            href="{{ route('admin.roles.index') }}">
            <i class="fas fa-user-tag" style="margin-right: 8px;"></i> Roles
        </a>
        <a class="menu-item {{ request()->is('admin/permissions*') ? 'bg-blue-200' : 'bg-transparent' }}"
            href="{{ route('admin.permissions.index') }}">
            <i class="fas fa-key" style="margin-right: 8px;"></i> Permisos
        </a>
        <a class="menu-item {{ request()->is('admin/products*') ? 'bg-blue-200' : 'bg-transparent' }}"
            href="{{ route('admin.products.index') }}">
            <i class="fas fa-box-open" style="margin-right: 8px;"></i> Productos
        </a>

        <!-- ... Otros elementos de menú ... -->

        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open"
                x-bind:class="{ 'menu-item': true, 'bg-blue-200': open, 'bg-transparent': !open }">
                <i class="fas fa-user-cog" style="margin-right: 8px;"></i> <span> {{ Auth::user()->name }}</span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                    class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-700">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link a
                            class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            :href="route('logout')"
                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </div>

    </nav>
</div>
