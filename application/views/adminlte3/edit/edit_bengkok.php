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
              foreach ($tb_tanah_bengkok as $data)
                : ?>

                <a class="navbar-brand" href="#pablo"><b>Ubah Data Tanah Bengkok</b></a>
                <div class="card-body">
                  <div class="tab-content">
                    <form class="form-horizontal" action="<?php echo site_url(). '/admin/pertanahan/update_bengkok'; ?>" role="form" method="post"> 
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">

                           <input type="text" class="form-control" name="id_tanah_bengkok" placeholder="ID Desa" value="<?php echo $data->id_tanah_bengkok ?>" readonly hidden>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Nama Desa</b></a>
                       <?php $id_desa = $data->id_desa;
					  		$get3 =$this->db->get_where("tb_desa",array("id_desa" =>$id_desa))->row();
					 
					  	$c = $get3->nama_desa;?>
                       <input type="text" class="form-control" name="id_desa" placeholder="ID Desa" value="<?php echo $c ?>" readonly>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Luas Bengkok Sawah</b></a>
                       <input type="text" class="form-control" name="bengkok_sawah" placeholder="Luas Wilayah Bengkok Sawah" value="<?php echo $data->bengkok_sawah ?>" required>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Luas Bengkok Lahan Kering</b></a>
                       <input type="text" class="form-control" name="bengkok_lahan_kering" placeholder="Luas Bengkok Lahan Kering" value="<?php echo $data->bengkok_lahan_kering ?>" required>
                       <br>
                      <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Luas Kas Sawah</b></a>
                       <input type="text" class="form-control" name="kas_sawah" placeholder="Luas Kas Sawah" value="<?php echo $data->kas_sawah ?>" required>
                       <br>
                     </div> 
                     <div class="col-lg-6 col-md-6 col-sm-6">
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Luas Tanah Kas Lahan Kering</b></a>
                       <input type="text" class="form-control" name="kas_lahan_kering" placeholder="Luas Tanah Kas Lahan Kering" value="<?php echo $data->kas_lahan_kering ?>" required>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Tahun</b></a>
                       <input type="text" class="form-control" name="tahun" placeholder="ID Desa" value="<?php echo $data->tahun ?>" required readonly>
                       <br>
                       <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                       <a class="btn btn-danger" href="<?php echo base_url() ?>admin/pertanahan">Batal</a>
                     </form>
                   <?php endforeach ?>
                 </section>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
