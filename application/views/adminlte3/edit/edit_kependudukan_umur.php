die(var_dump($data->id_desa));
<body class="">

  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
      -->
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">

      </nav>
      <!-- End Navbar -->
      <div class="container-fluid">

        <div class="card card-info">
          <div class="card-header">
            <section class="content">

              <?php 
              foreach ($tb_kependudukan_umur as $data)
                : ?>

              <a class="navbar-brand" href="#pablo"><b>Ubah Data Kependudukan Umur</b></a>
              <div class="card-body">
                <div class="tab-content">
                  <form class="form-horizontal" action="<?php echo site_url(). '/admin/kependudukan/update_umur'; ?>" role="form" method="post"> 
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">

                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>ID Desa</b></a>
                       <input type="text" class="form-control" name="id_desa" placeholder="ID Desa" value="<?php echo $data->id_desa ?>" readonly>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Umur</b></a>
                       <input type="text" class="form-control" name="umur" placeholder="Masukan Umur (misal 5-10)" value="<?php echo $data->umur ?>" required>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Jenis Kelamin</b></a>
                       <select class="form-control" name="jenis_kelamin" placeholder="Masukan Jenis Kelamin" value="<?php echo $data->jenis_kelamin ?>"  required>
                        <option value="L">Laki - laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                      <br>
                      <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Jumlah</b></a>
                      <input type="text" class="form-control" name="jumlah" placeholder="Jumlah" value="<?php echo $data->jumlah ?>" required>
                      <br>

                      <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                      <a class="btn btn-danger" href="<?php echo base_url() ?>admin/admin_wilayah">Batal</a>
                    </form>
                  <?php endforeach ?>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
