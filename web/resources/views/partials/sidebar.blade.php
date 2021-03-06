<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset("dist/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"><b>SI</b>PengiBar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset("storage/profile/".auth()->user()->filename) }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route("user") }}" class="d-block">
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
                            <a href="{{ route("transaksi.create") }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transaksi Baru</p>
                            </a>
                        </li>
            </ul>
            <li class="nav-item">
            <a href="{{ route("transaksi.index") }}" class="nav-link">
            <i class="far fa-credit-card"></i>
              <p>
                 Riwayat Transaksi
              </p>
            </a>
            <li class="nav-item">
            <a href="{{ route("wilayah.index") }}" class="nav-link">
              <i class="fas fa-map-marked-alt"></i>
              <p>
                 Wilayah
              </p>
            </a>
            <li class="nav-item">
            <a href="{{ route("barang.index") }}" class="nav-link">
                <i class="fas fa-cube"></i>
              <p>
                 Jenis Barang
              </p>
            </a>
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
                            <a href="{{ route("kurir.index") }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Kurir</p>
                            </a>
                        </li>
            </ul>
            <li class="nav-item">
            <a href=" {{ route("status.index") }}" class="nav-link">
                <i class="fas fa-truck"></i>
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