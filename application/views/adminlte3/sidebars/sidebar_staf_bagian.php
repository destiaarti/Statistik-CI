<!-- <?php   //privilege
     if(print_data('get_where', array('users', array('id_user'=>$this->session->userdata('id'))), 'privilege') == 'user') {
      $cetak = print_data('get_where', array('data_pelamar', array('id_user'=>$this->session->userdata('id'))), 'nama');
    } else {
      $cetak = print_data('get_where', array('data_admin', array('id_user'=>$this->session->userdata('id'))), 'nama');
} ?> -->

<?php 
    $cetak = print_data('get_where', array('users', array('id_user'=>$this->session->userdata('id'))), 'privilege');
 ?>
<?php 
    $cetak2 = print_data('get_where', array('users', array('id_user'=>$this->session->userdata('id'))), 'bagian');
 ?>

    <div class="logo">
      <a href="" class="simple-text logo-normal">
        <?php echo $cetak ; ?>
          <?php echo $cetak2 ; ?>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="material-icons">dashboard</i>
              <p>Home Kelola <?php echo $cetak2 ; ?></p>
            </a>
          </li>

        </ul>
      </div>
    </div>