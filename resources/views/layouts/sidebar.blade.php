<nav class="main-nav-container w-40 h-screen absolute left-0 top-65 bg-slate-700 text-white border-t-1 border-sky-300">
    <div class="nav-container py-2">
        <div class="nav-menu-item">
            <a href="{{ route('dashboard') }}" class="menu-item {{ request()->is('dashboard') ? 'border-l-4 border-indigo-500 pl-2' : '' }} pl-3">Dashboard</a>
        </div>
    </div>
    
    <div class="nav-container py-2">
        <div class="nav-menu-item">
            <a href="{{ route('customer.index') }}" class="menu-item {{ request()->is('customer') ? 'border-l-4 border-indigo-500 pl-2' : '' }} pl-3">Klanten</a>
        </div>
    </div>

    <div class="nav-container py-2">
        <div class="nav-main-wrapper">
            <div class="nav-menu-item">
                <a href="{{ route('task.index') }}" class="menu-item {{ request()->is('task') ? 'border-l-4 border-indigo-500 pl-2' : '' }} pl-3">Taken</a>
            </div>
        </div>
        <div class="nav-sub-wrapper">
            <div class="nav-menu-item">
                <a href="{{ route('task.create') }}" class="menu-item {{ request()->is('task.create') ? 'border-1-4 border-indigo-500 pl-2' : '' }} pl-3">Taak aanmaken</a>
            </div>
        </div>
    </div>
</nav>