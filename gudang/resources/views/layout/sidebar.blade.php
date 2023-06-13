<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">       
        <div class="info">
            <h2 style="color:white">GUDANG</h2>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          @if( auth()->user()->role == 'staf' )
          <li class="nav-item">
            <a href="/homebarang" class="nav-link">
              <p>
                 STOK BARANG
              </p>
            </a>
          </li>
          
          @endif
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                PENDATAAN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>HISTORY</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/barang_masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BARANG MASUK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/barang_keluar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BARANG KELUAR</p>
                </a>
              </li>
            </ul>
          </li>

          @if( auth()->user()->role == 'admin' )
          <li class="nav-item">
            <a href="/homebarang" class="nav-link">
              <p>
                Barang 
              </p>
            </a>
          </li>
          
          <!-- <li class="nav-item">
            <a href="/newbarang" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tambah Data 
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="/homesuplier" class="nav-link">
              <p>
                Suplier 
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="/newsuplier" class="nav-link">
              <p>
               Tambah Suplier 
              </p>
            </a>
          </li>
          @endif
        </ul>
        <li class="nav-item">
            <a href="/logout" onClick="return confirm('Anda Yakin Akan Logout ?')" class="nav-link">
              <p>
                LOGOUT
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>