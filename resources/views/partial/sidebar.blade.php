<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <span class="brand-text font-weight-light"><b>Kelompok 7</b></span>
    </a>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link">
                    <i class="nav-icon fas fa-times"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Posts
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Categories
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
