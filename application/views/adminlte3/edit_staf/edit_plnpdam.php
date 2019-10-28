
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
              foreach ($tb_pln_pdam as $data)
                : ?>

                <a class="navbar-brand" href="#pablo"><b>Ubah Data PLN & PDAM</b></a>
                <div class="card-body">
                  <div class="tab-content">
                    <form class="form-horizontal" action="<?php echo site_url(). '/staf/listrik/update_plnpdam'; ?>" role="form" method="post"> 
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
  <input type="text" class="form-control" name="id_pln_pdam" placeholder="ID Desa" value="<?php echo $data->id_pln_pdam ?>" readonly hidden>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Nama Desa</b></a>
					   <?php $id_desa = $data->id_desa;
					  		$get3 =$this->db->get_where("tb_desa",array("id_desa" =>$id_desa))->row();
					 
					  	$c = $get3->nama_desa;?>
                       <input type="text" class="form-control" name="id_desa" placeholder="ID Desa" value="<?php echo $c ?>" readonly>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Rumah Tangga</b></a>
                       <input type="text" class="form-control" name="rumah_tangga" placeholder="Jumlah Rumah Tangga" value="<?php echo $data->rumah_tangga ?>" required>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Pelanggan PLN</b></a>
                       <input type="text" class="form-control" name="pelanggan_pln" placeholder="Jumlah Pelanggan PLN" value="<?php echo $data->pelanggan_pln ?>" required>
                       <br>

                     </div> 
                     <div class="col-lg-6 col-md-6 col-sm-6">
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Pelanggan PDAM</b></a>
                       <input type="text" class="form-control" name="pelanggan_pdam" placeholder="ID Desa" value="<?php echo $data->pelanggan_pdam ?>" required>
                    <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Tahun</b></a>
                       <input type="text" class="form-control" name="tahun" placeholder="Tahun" value="<?php echo $data->tahun ?>" required readonly>
                       <br>
                       <br>
                       <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                       <a class="btn btn-danger" href="<?php echo base_url() ?>staf/listrik/">Batal</a>
                     </form>
                   <?php endforeach ?>
                 </section>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
