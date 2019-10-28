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
              foreach ($tb_luas_tanah_kering as $data)
                : ?>

                <a class="navbar-brand" href="#pablo"><b>Ubah Data Tanah Kering</b></a>
                <div class="card-body">
                  <div class="tab-content">
                    <form class="form-horizontal" action="<?php echo site_url(). '/staf/pertanahan/update_kering'; ?>" role="form" method="post"> 
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">

                      
                       <input type="text" class="form-control" name="id_tanah_kering" placeholder="ID Desa" value="<?php echo $data->id_tanah_kering ?>" hidden>
                       <br>
                        <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Nama Desa</b></a>
                     <?php $id_desa = $data->id_desa;
					  		$get3 =$this->db->get_where("tb_desa",array("id_desa" =>$id_desa))->row();
					 
					  	$c = $get3->nama_desa;?>
						  <input type="text" class="form-control" name="id_desa" placeholder="ID Desa" value="<?php echo $c ?>" readonly>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Luas Perkarangan Bangunan</b></a>
                       <input type="text" class="form-control" name="perkarangan_bangunan" placeholder="Luas Perkarangan Bangunan" value="<?php echo $data->perkarangan_bangunan ?>" required>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Luas Tegal Kebun</b></a>
                       <input type="text" class="form-control" name="tegal_kebun" placeholder="Luas Tegal Kebun" value="<?php echo $data->tegal_kebun ?>" required>
                       <br>
                      <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Luas Padang Gembala</b></a>
                       <input type="text" class="form-control" name="padang_gembala" placeholder="Luas Padang Gembala" value="<?php echo $data->padang_gembala ?>" required>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Luas Tambak Kolam</b></a>
                       <input type="text" class="form-control" name="tambak_kolam" placeholder="Luas Tambak Kolam" value="<?php echo $data->tambak_kolam ?>" required>
                       <br>
                     </div> 
                     <div class="col-lg-6 col-md-6 col-sm-6">
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Luas Hutan Negara</b></a>
                       <input type="text" class="form-control" name="hutan_negara" placeholder="Luas Hutan Negara" value="<?php echo $data->hutan_negara ?>" required>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Luas Perkebunan Negara</b></a>
                       <input type="text" class="form-control" name="perkebunan_negara" placeholder="Luas Perkebunan Negara" value="<?php echo $data->perkebunan_negara ?>" required>
                       <br>
                        <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Lainnya</b></a>
                       <input type="text" class="form-control" name="lainnya" placeholder="Lainnya" value="<?php echo $data->lainnya ?>" required>
                       <br>
                        <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Jumlah</b></a>
                       <input type="text" class="form-control" name="jumlah" placeholder="Jumlah" value="<?php echo $data->jumlah ?>" required>
                       <br>
                       <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                       <a class="btn btn-danger" href="<?php echo base_url() ?>staf/pertanahan/">Batal</a>
                     </form>
                   <?php endforeach ?>
                 </section>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
