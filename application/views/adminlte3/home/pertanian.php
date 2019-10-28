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
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo"><b>Kelola Pertanian</b></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">

            <ul class="navbar-nav">
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Jumlah data pertanian pada Sistem</p>
                  <h3 class="card-title"><?php echo $pertanianCount[0]->count; ?>
                    <small>DATA</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i>
                    <a>Data pertanian Sistem Informasi Statistik</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

<div class="collapse navbar-collapse justify-content-end">
    </div>
        <div class="card card-info">
          <div class="card-header">
   <div class="col-lg-3 col-md-6 col-sm-6">


           <button type="button" data-toggle="modal" data-target="#tambah-data  " class="btn btn-info" class="glyphicon glyphicon-repeat">Tambah Data Pertanian</button>
         
            <a href="<?php echo base_url('staf/laporan_pertanian'); ?>" class="form-control btn btn-danger"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Cetak PDF</a>
          </div> 
 </div>

             <br>
             <br>
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr class="text-black">
                  <th style="text-align: center;">No.</th>
  
                  <th style="text-align: center;">Nama Desa</th>
                  <th style="text-align: center;">Luas Panen</th>
                  <th style="text-align: center;">Rata-rata Produksi</th>
                  <th style="text-align: center;">Produksi</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                $no=1;
                foreach ($dataPertanian as $dataPertanian)
                  : ?>
                <tr>
                  <td style="text-align: center;"><?php echo $no++; ?></td>

                  <td style="text-align: center;"><?php echo $dataPertanian-> nama_desa; ?></td>
                  <td style="text-align: center;"><?php echo $dataPertanian -> luas_panen; ?></td>
                  <td style="text-align: center;"><?php echo $dataPertanian -> rata_rata_produksi; ?></td>
                  <td style="text-align: center;"><?php echo $dataPertanian -> produksi; ?></td>
                  <td style="text-align: center;">
                    <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>staf/pertanian/edit_pertanian/<?php echo $dataPertanian->id_panen ?>">Edit</a>
<a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Eaa<?php echo $dataPertanian->id_panen ?>"><font color="white">Delete</font></a>
						  		  <div  aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Eaa<?php echo $dataPertanian->id_panen ?>" class="modal fade" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
 <h4 class="modal-title" id="myModalLabel">Hapus File</h4>                       
					   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                       
						
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'staf/pertanian/hapus_pertanian/'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							             <input type="hidden" name="id_panen" value="<?php echo $dataPertanian->id_panen;?>"/>
              <?php 
			  $id_desa = $dataPertanian->id_desa;
					  		$get3 =$this->db->get_where("tb_desa",array("id_desa" =>$id_desa))->row();
					 
					  	$c = $get3->nama_desa;
						?>
                            <p>Apakah Anda yakin mau menghapus data desa <b><font color="green"><?php echo $c ?> </font>  ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
                 <?php										
										echo anchor(site_url('staf/pertanian/hapus_pertanian/' . $dataPertanian
										->id_panen), '<i class="fa fa-trash" ></i>', array('data-toggle' => 'tooltip', 'title' => 'hapus data', 'class' => 'btn btn-danger btn-sm'));
										
										                
				?>
                    </div>
                    </form>
                </div>
            </div>
        </div>                
                  
				  </td>
                    <?php endforeach ?>
                  </tbody>
                </table>
   
        </div>
      </div>
    </div>
  </div>

<!-- Modal Tambah 1-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Kelola Tanah Bengkok</h4>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('staf/pertanian/tambah_aksi')?>" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">


          <div class="form-group">
            <label class="col-lg-6 col-sm-2 control-label" for="privilege" style="color: #0f3975">Desa</label>
            <div class="col-lg-12">
             <select class="form-control" name="id_desa" placeholder="Masukan Privilege" required>
              <option value="1">Glintang</option>
              <option value="2">Jatisari</option>
              <option value="3">Canden</option>
              <option value="4">Senting</option>
              <option value="5">Tempursari</option>
              <option value="6">Sandi</option>
              <option value="7">Demangan</option>
              <option value="8">Kepoh</option>
              <option value="9">Jagoan</option>
              <option value="10">Babadan</option>
              <option value="11">Tawengan</option>
              <option value="12">Catur</option>
              <option value="13">Taglik</option>
              <option value="14">Troboso</option>
              <option value="15">Cermo</option>
              <option value="16">Nglembu</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-6 col-sm-2 control-label" for="username" style="color: #0f3975">Luas Panen</label>
          <div class="col-lg-12">
            <input type="number" step="any" class="form-control" name="luas_panen" placeholder="Masukan Bengkok Sawah" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-6 col-sm-2 control-label" for="username" style="color: #0f3975">Rata</label>
          <div class="col-lg-12">
            <input type="number" step="any" class="form-control" name="rata_rata_produksi" placeholder="Masukan Bengkok Lahan Kering" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-6 col-sm-2 control-label" for="username" style="color: #0f3975">Produksi</label>
          <div class="col-lg-12">
            <input type="number" step="any" class="form-control" name="produksi" placeholder="Masukan Kas Sawah" required>
          </div>
        </div>
       
        
        <div class="modal-footer">
          <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
        </div>
      </div>
    </div>

  </form>
</div>
</div>
</div>
</div>
<!-- END Modal Tambah -->
