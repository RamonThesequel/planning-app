<nav class="main-nav-container w-40 h-screen absolute left-0 top-65 bg-slate-700 text-white border-t-1 border-sky-300">
    <div class="nav-container">
        <div class="nav-menu-item">
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
            </div>
        </div>
        <div class="nav-menu-item">
            <a href="{{ route('customer.index') }}" class="menu-item {{ request()->is('customer') ? 'border-l-4 border-indigo-500 pl-2' : '' }} pl-3">Klanten</a>
        </div>
        <div class="nav-menu-item">
            <a href="{{ route('task.index') }}" class="menu-item {{ request()->is('task') ? 'border-l-4 border-indigo-500 pl-2' : '' }} pl-3">Taken</a>
        </div>
    </div>
</nav>