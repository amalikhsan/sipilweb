<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="">{{ env('APP_NAME') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="">CE</a>
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
                    <span>Kelola Data Users</span>
                </a>
            </li>
            <li class="menu-header">Pengelolaan</li>
            <li class="{{ Route::is('datadosen*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('datadosen.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Kelola Data Dosen</span>
                </a>
            </li>
            <li class="{{ Route::is('dataalumni*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dataalumni.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Kelola Data Alumni</span>
                </a>
            </li>
            <li class="{{ Route::is('datablog*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('datablog.index') }}">
                    <i class="fas fa-blog"></i>
                    <span>Kelola Data Blog</span>
                </a>
            </li>
            <li class="{{ Route::is('dataevent*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dataevent.index') }}">
                    <i class="fas fa-calendar"></i>
                    <span>Kelola Data Agenda</span>
                </a>
            </li>
        @endcan
    </ul>
</aside>