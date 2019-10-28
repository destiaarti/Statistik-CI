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
              foreach ($tb_luas_tanah_sawah as $data)
                : ?>

                <a class="navbar-brand" href="#pablo"><b>Ubah Data Tanah Sawah</b></a>
                <div class="card-body">
                  <div class="tab-content">
                    <form class="form-horizontal" action="<?php echo site_url(). '/staf/pertanahan/update_sawah'; ?>" role="form" method="post"> 
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">

               
                       <input type="text" class="form-control" name="id_tanah_sawah" placeholder="ID Desa" value="<?php echo $data->id_tanah_sawah ?>" hidden>
                       <br>
                        <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Nama Desa</b></a>
                       <?php $id_desa = $data->id_desa;
					  		$get3 =$this->db->get_where("tb_desa",array("id_desa" =>$id_desa))->row();
					 
					  	$c = $get3->nama_desa;?>
						  <input type="text" class="form-control" name="id_desa" placeholder="ID Desa" value="<?php echo $c ?>" readonly>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Irigasi Teknis</b></a>
                       <input type="text" class="form-control" name="irigasi_teknis" placeholder="Irigasi Teknis" value="<?php echo $data->irigasi_teknis ?>" required>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Irigasi Setengah Teknis</b></a>
                       <input type="text" class="form-control" name="irigasi_setengah_teknis" placeholder="Irigasi Setengah Teknis" value="<?php echo $data->irigasi_setengah_teknis ?>" required>
                       <br>
                      <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Irigasi Sederhana</b></a>
                       <input type="text" class="form-control" name="irigasi_sederhana" placeholder="Irigasi Sederhana" value="<?php echo $data->irigasi_sederhana ?>" required>
                       <br>
                       
                     </div> 
                     <div class="col-lg-6 col-md-6 col-sm-6">
                       
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Hujan Tadah</b></a>
                       <input type="text" class="form-control" name="hujan_tadah" placeholder="Hujan Tadah" value="<?php echo $data->hujan_tadah ?>" required>
                       <br>
                        <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Jumlah</b></a>
                       <input type="text" class="form-control" name="jumlah" placeholder="Jumlah" value="<?php echo $data->jumlah ?>" required>
                       <br>
                       <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                       <a class="btn btn-danger" href="<?php echo base_url() ?>staf/pertanahan">Batal</a>
                     </form>
                   <?php endforeach ?>
                 </section>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
