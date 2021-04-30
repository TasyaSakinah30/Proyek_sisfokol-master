<!-- Sidebar user (optional) -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Muhammad Ridho R</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dasboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Penginputan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/inputPembayaran') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Pembayaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/inputNilaiUlangan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Nilai Ulangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/inputNilaiRaport') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Nilai Raport</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/inputPelanggaran') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Pelanggaran</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Penilaian
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/tampilRaport') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Raport</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/tampilNilaiUlangan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ulangan</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->