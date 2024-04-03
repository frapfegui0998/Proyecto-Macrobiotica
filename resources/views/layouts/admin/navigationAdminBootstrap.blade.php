<nav x-data="{ open: false }" class="navbar navbar-expand-lg navbar-light bg-white border-bottom border-gray-100">
    <div class="container-fluid">
        <button @click="open = !open" class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </li>

                @role('admin')
                    <li class="nav-item">
                        <x-nav-link :href="route('admin.index')" :active="request()->routeIs('admin')">
                            {{ __('Admin') }}
                        </x-nav-link>
                    </li>
                @endrole
            </ul>
        </div>

        <div class="d-flex align-items-center">
            <x-dropdown align="end">
                <x-slot name="trigger">
                    <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</nav>
