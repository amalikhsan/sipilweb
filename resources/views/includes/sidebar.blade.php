<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href=""><img style="width: 50px; height: 50px;" src="{{ asset('assets/img/civil/logo-sipil.png') }}"
                alt="">
            {{ env('APP_NAME') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href=""></a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Main Menu</li>
        <li class="{{ Route::is('dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fire"></i>
                <span>Dashboard</span>
            </a>
        </li>

        @can('admin')
            <li class="menu-header">Administrator</li>
            <li class="{{ Route::is('user*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Manage Users</span>
                </a>
            </li>
            <li class="{{ Route::is('dosen*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dosen.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Manage Dosen</span>
                </a>
            </li>
            <li class="{{ Route::is('alumni*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('alumni.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Manage Alumni</span>
                </a>
            </li>
            <li class="{{ Route::is('blog*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('blog.index') }}">
                    <i class="fas fa-blog"></i>
                    <span>Manage Blog</span>
                </a>
            </li>
            <li class="{{ Route::is('agenda*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('agenda-index') }}">
                    <i class="fas fa-calendar"></i>
                    <span>Manage Agenda</span>
                </a>
            </li>
        @endcan
    </ul>
</aside>
