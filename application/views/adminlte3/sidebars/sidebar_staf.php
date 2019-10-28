<?php   //privilege
     if(print_data('get_where', array('users', array('id_user'=>$this->session->userdata('id'))), 'privilege') == 'user') {
      $cetak = print_data('get_where', array('data_pelamar', array('id_user'=>$this->session->userdata('id'))), 'nama');
    } else {
      $cetak = print_data('get_where', array('data_admin', array('id_user'=>$this->session->userdata('id'))), 'nama');
} ?>


    <div class="logo">
      <a href="" class="simple-text logo-normal">
        <?php echo $cetak ; ?></a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>staf/home">
              <i class="material-icons">dashboard</i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php print base_url('material/'); ?>examples/user.html">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php print base_url('material/'); ?>examples/tables.html">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php print base_url('material/'); ?>examples/typography.html">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php print base_url('material/'); ?>examples/icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php print base_url('material/'); ?>examples/map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php print base_url('material/'); ?>examples/notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>

        </ul>
      </div>
    </div>