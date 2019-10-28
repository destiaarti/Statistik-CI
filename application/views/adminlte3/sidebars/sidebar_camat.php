<?php   //privilege
     if(print_data('get_where', array('users', array('id_user'=>$this->session->userdata('id'))), 'privilege') == 'user') {
      $cetak = print_data('get_where', array('data_pelamar', array('id_user'=>$this->session->userdata('id'))), 'nama');
    } else {
      $cetak = print_data('get_where', array('data_admin', array('id_user'=>$this->session->userdata('id'))), 'nama');
} ?>


    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        <?php echo $cetak ; ?></a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>camat/home">
              <i class="material-icons" style="color:blue">dashboard</i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url() ?>camat/user">
              <i class="material-icons" style="color:red">person</i>
              <p>Administrator User</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url() ?>camat/kependudukan">
              <i class="material-icons" style="color:yellow">content_paste</i>
              <p>Kelola Kependudukan</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url() ?>camat/admin_wilayah">
              <i class="material-icons" style="color:green">library_books</i>
              <p>Kelola Administrasi Wilayah</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url() ?>camat/pertanian">
              <i class="material-icons" style="color:blue">bubble_chart</i>
              <p>Kelola Pertanian</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url() ?>camat/pln_pdam">
              <i class="material-icons" style="color:purple">location_ons</i>
              <p>Kelola Pengguna PLN PDAM</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url() ?>camat/pertanahan">
              <i class="material-icons" style="color:green">notifications</i>
              <p>Kelola Pertanahan</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url() ?>camat/desa">
              <i class="material-icons" style="color:orange">content_paste</i>
              <p>Kelola Desa</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url() ?>camat/about">
              <i class="material-icons" style="color:red">location_ons</i>
              <p>About</p>
            </a>
          </li>
        </ul>
      </div>
    </div>