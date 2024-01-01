<li class="nav-main-item">
    <a class="nav-main-link" href="#">
        <i class="nav-main-link-icon si si-speedometer"></i>
        <span class="nav-main-link-name">Dashboard</span>
    </a>
</li>

<li class="nav-main-item {{ request()->is('backoffice/master-data*') ? 'open' : '' }}">
    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false"
        href="#">
        <i class="nav-main-link-icon si si-energy"></i>
        <span class="nav-main-link-name">Master Data</span>
    </a>
    <ul class="nav-main-submenu">
        <li class="nav-main-item">
            <a class="nav-main-link" href="{{ route('backoffice.master-data.kategori.index') }}">
                <span class="nav-main-link-name">Kategori</span>
            </a>
        </li>

    </ul>
</li>
