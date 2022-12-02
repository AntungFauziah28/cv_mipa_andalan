 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('AdminLTE/dist')}}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Accounting Website</span>
    </a>

    <!-- Sidebar -->
    

      <!-- SidebarSearch Form -->
      
      <!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                
               
              <!-- Home -->
              <li class="nav-header"></li>
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt" style="color: white"></i>
              <p style="color: white">
                Home
              </p>
            </a>
          </li>

          <li class="nav-header">USER</li>
              <!-- Data User -->
               <li class="nav-item" >
            <a href="pages/widgets.html" class="nav-link">
                <i class="fa fa-user nav-icon" style="color: white"></i>
               <p style="color: white">
                  Data User
              </p>
            </a>
          </li>


          <!-- Data Master  -->
          <li class="nav-header">MASTER</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-folder-open" style="color: white"></i>
              <p style="color: white">
               Data Master 
                <i class="fas fa-angle-left right" style="color: white"></i>
              </p>
            </a>

            <!-- Data Item atau barang -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fa fa-thin fa-box nav-icon"></i>
                  <p>Item</p>
                </a>
              </li>

              <!-- Data Customer  -->
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                <i class="fa fa-users nav-icon"></i>
                  <p>Customer</p>
                </a>
              </li>

              <!-- Data Supplier -->
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                <i class="fa fa-people-carry-box nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>

              <!-- Data Akun dalam Akuntansi -->
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Akun</p>
                </a>
              </li>

              <!-- Data Pajak -->
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pajak</p>
                </a>
              </li>

              <!-- Data Staff Penjualan -->
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Staff Penjualan</p>
                </a>
              </li>
            </ul>
          </li>
          
          <!-- Data Transaksi Penjualan -->
          <li class="nav-header">PENJUALAN</li>
          <li class="nav-item">
            <a href="#" class="nav-link" style="color: white">
              <i class="nav-icon fas fa-tree" style="color: white"></i>
              <p>
                Transaksi Penjualan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <!-- Data Estimasi atau Pemesanan -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estimasi</p>
                </a>
              </li>

              <!-- Data Tagihan atau Faktur Penjualan -->
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Faktur Masuk</p>
                </a>
              </li>

              <!-- Data Pembayaran Penjualan -->
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembayaran Penjualan</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Data Transaksi Pembelian -->
          <li class="nav-header">PEMBELIAN</li>

          <!-- Transaksi Pembelian -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table" style="color: white"></i>
              <p style="color: white">
                Transaksi Pembelian
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <!-- Pemesanan Pembelian -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemesanan</p>
                </a>
              </li>

              <!-- Faktur Keluar atau Tagihan Pesanan dalam Pembelian -->
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Faktur Keluar</p>
                </a>
              </li>

              <!-- Pembayaran Pembelian -->
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembayaran Pembelian</p>
                </a>
              </li>

            </ul>
          </li>

          <!-- Data Laporan -->
          <li class="nav-header">LAPORAN</li>

          <li class="nav-item">

            <!-- Jurnal Umum -->
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope" style="color: white"></i>
              <p style="color: white">
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <!-- Jurnal Umum -->
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jurnal Umum</p>
                </a>
              </li>
              <!-- Laporan Penjualan -->
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Penjualan</p>
                </a>
              </li>
              
              <!-- Laporan Pembelian -->
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Pembelian</p>
                </a>
              </li>
              
              <!-- Laporan Stok Barang -->
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Stok Barang</p>
                </a>
              </li>

            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>