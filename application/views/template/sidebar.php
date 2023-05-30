  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('dashboard'); ?>" class="brand-link">
      <img src="<?php echo base_url('assets'); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SPK | BEASISWA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('user/user'); ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('mahasiswa/mahasiswa'); ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Mahasiswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('jenisbeasiswa/jenisbeasiswa'); ?>" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Data Jenis Beasiswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('jenisprestasi/jenisprestasi'); ?>" class="nav-link">
              <i class="nav-icon fas fa-award"></i>
              <p>
                Data Jenis Prestasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('thusulan/usulan'); ?>" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Data Tahun Usulan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('jurusan/jurusan'); ?>" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Data Jurusan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('prodi/prodi'); ?>" class="nav-link">
              <i class="nav-icon fas fa-chalkboard"></i>
              <p>
                Data Prodi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('prestasi/prestasi'); ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Prestasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('ipk/ipk'); ?>" class="nav-link">
              <i class="nav-icon fas fa-award"></i>
              <p>
                Data IPK
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('bobotkriteria/bobotkriteria'); ?>" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Data Bobot Kriteria
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('rekap/rekap'); ?>" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Rekap Beasiswa
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>