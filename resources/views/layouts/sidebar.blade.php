<aside class="main-sidebar sidebar-ligth elevation-4">
    <a href="{{ url('/') }}" class="brand-link bg-primary">
        <img src="/assets/img/perpustakaan.jpg" alt="AdminLTE Logo" class="brand-image img-circle">
        <span class="brand-text font-weight-light">Sistem Perpustakaan</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link {{ $activeMenu == 'dashboard' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/category') }}" class="nav-link {{ $activeMenu == 'category' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Categori Buku</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/buku') }}" class="nav-link {{ $activeMenu == 'buku' ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-book"></i>
                        <p>Buku</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-regular fa-handshake"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <style>
        .nav-link.active {
            background-color: transparent !important;
            color: #007bff !important;
        }

        .nav-link.active:hover {
            color: #0056b3 !important;
            background-color: transparent !important;
        }
    </style>

</aside>
