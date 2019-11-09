<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"><b>SI</b>PengiBar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block">
                    Hello, {{ ucfirst(Auth::user()->name) }} 
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="fas fa-edit"></i>
                        <p>
                            Input
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route("kurir.index") }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transaksi Baru</p>
                            </a>
                        </li>
            </ul>
            <li class="nav-item">
            <a href="widgets.html" class="nav-link">
              <i class="fas fa-map-marked-alt"></i>
              <p>
                 Wilayah
              </p>
            </a>
          </li>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="far fa-id-card"></i>
                        <p>
                            Kurir
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Kurir</p>
                            </a>
                        </li>
            </ul>
            <li class="nav-item">
            <a href="widgets.html" class="nav-link">
              <i class="fas fa-map-marked-alt"></i>
              <p>
                 Status Pengiriman
              </p>
            </a>
          </li>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
