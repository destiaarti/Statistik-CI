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
              foreach ($users  as $data)
                : ?>

                <a class="navbar-brand" href="#pablo"><b>Ubah Administrasi wilayah</b></a>
                <div class="card-body">
                  <div class="tab-content">
                    <form class="form-horizontal" action="<?php echo site_url(). '/admin/user/update_user'; ?>" role="form" method="post"> 
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">

                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>ID Desa</b></a>
                       <input type="text" class="form-control" name="gaji" placeholder="ID Desa" value="<?php echo $data->username ?>" readonly>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Luas Wilayah</b></a>
                       <input type="text" class="form-control" name="gaji" placeholder="Luas Wilayah" value="<?php echo $data->luas_wilayah ?>" required>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Tanah Sawah</b></a>
                       <input type="text" class="form-control" name="gaji" placeholder="ID Desa" value="<?php echo $data->tanah_sawah ?>" required>
                       <br>

                     </div> 
                     <div class="col-lg-6 col-md-6 col-sm-6">
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Tanah Kering</b></a>
                       <input type="text" class="form-control" name="gaji" placeholder="ID Desa" value="<?php echo $data->tanah_kering ?>" required>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Tahun</b></a>
                       <input type="text" class="form-control" name="gaji" placeholder="ID Desa" value="<?php echo $data->tahun ?>" required>
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
