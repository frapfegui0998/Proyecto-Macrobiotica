{{-- <link rel="stylesheet" href="{{('fontawesome-free-6.4.2-web/css/all.min.css')}}"> --}}
<link rel="stylesheet" href="{{asset('fontawesome-free-6.4.2-web/css/all.min.css')}}">
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

<div @click.away="open = false" class="flex flex-col flex-shrink-0 w-full text-black bg-gray-800 md:w-64 dark-mode:text-gray-200 dark-mode:bg-gray-800" x-data="{ open: false }">
    <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4" style="background-color: #4267B2;">
        <a href="{{ url('/') }}" class="text-lg font-semibold tracking-widest text-white uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
            Macrobiótica Vida Natural
        </a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            </svg>
        </button>
    </div>
    <nav :class="{ 'block': open, 'hidden': !open }" class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto" style="background-color: #f0f2f5;">
        <a href="{{ url('/productos') }}" class="menu-item bg-blue-200">
            <i class="fa fa-search" style="margin-right: 8px;"></i>Buscar Productos
        </a>
    
        <a href="{{ url('/cart') }}" class="menu-item bg-blue-200">
            <i class="fa fa-shopping-cart" style="margin-right: 8px;"></i>Carrito
        </a>
        
        <a href="{{ url('/login') }}" class="menu-item bg-blue-200">
            <i class="fas fa-user-tag" style="margin-right: 8px;"></i>Login
        </a>
    </nav>
</div>
