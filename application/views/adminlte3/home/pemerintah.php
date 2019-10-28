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
            <a class="navbar-brand" href="#pablo"><b>Kelola Pemerintahan Desa</b></a>
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
                  <p class="card-category">Jumlah Data Pemerintahan Desa</p>
                  <h3 class="card-title"><?php echo $desaCount[0]->count; ?>
                    <small>Data</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i>
                    <a>Jumlah Data Pemerintahan Desa</a>
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
           <button type="button" data-toggle="modal" data-target="#tambah-data" class="btn btn-info" class="glyphicon glyphicon-repeat">Tambah Data Pemerintahan Desa</button>
          
          
            <a href="<?php echo base_url('staf/laporan_pemerintahan'); ?>" class="form-control btn btn-danger"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Cetak PDF</a>
     
          </div>
		  </div>
          <br>

            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr class="text-black">
                  <th style="text-align: center;">No.</th>

                  <th style="text-align: center;">Nama Desa</th>
                  <th style="text-align: center;">Dukuh</th>
                  <th style="text-align: center;">Dusun</th>
                  <th style="text-align: center;">RW</th>
                  <th style="text-align: center;">RT</th>
                  <th style="text-align: center;">Tahun</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                $no=1;
                foreach ($dataDesa as $dataDesa)
                  : ?>
                <tr>
                  <td style="text-align: center;"><?php echo $no++; ?></td>
                  
                  <td style="text-align: center;"><?php echo $dataDesa -> nama_desa; ?></td>
                  <td style="text-align: center;"><?php echo $dataDesa -> dukuh; ?></td>
                  <td style="text-align: center;"><?php echo $dataDesa -> dusun; ?></td>
                  <td style="text-align: center;"><?php echo $dataDesa -> rw; ?></td>
                  <td style="text-align: center;"><?php echo $dataDesa -> rt; ?></td>
                  <td style="text-align: center;"><?php echo $dataDesa -> tahun; ?></td>
                  <td style="text-align: center;">
                    <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>staf/pemerintah/edit_desa/<?php echo $dataDesa->id_desa ?>">Edit</a>
                    
<a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Eaa<?php echo $dataDesa->id_pembagian_desa ?>"><font color="white">Delete</font></a>
						  		  <div  aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Eaa<?php echo $dataDesa->id_pembagian_desa ?>" class="modal fade" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
 <h4 class="modal-title" id="myModalLabel">Hapus File</h4>                       
					   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                       
						
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'staf/pemerintah/hapus_desa/'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							             <input type="hidden" name="id_pembagian_desa" value="<?php echo $dataDesa->id_pembagian_desa;?>"/>
              <?php 
			  $id_desa = $dataDesa->id_desa;
					  		$get3 =$this->db->get_where("tb_desa",array("id_desa" =>$id_desa))->row();
					 
					  	$c = $get3->nama_desa;
						?>
                            <p>Apakah Anda yakin mau menghapus data desa <b><font color="green"><?php echo $c ?> </font>  ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
                 <?php										
										echo anchor(site_url('staf/pemerintah/hapus_desa/' . $dataDesa
										->id_pembagian_desa), '<i class="fa fa-trash" ></i>', array('data-toggle' => 'tooltip', 'title' => 'hapus data', 'class' => 'btn btn-danger btn-sm'));
										
										                
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

<!-- Modal Tambah -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Kelola Administrasi Wilayah</h4>
                  </div>
                  <form class="form-horizontal" action="<?php echo base_url('staf/pemerintah/tambah_aksi')?>" method="post" enctype="multipart/form-data" role="form">
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
                      <label class="col-lg-2 col-sm-2 control-label" for="username" style="color: #0f3975">Dukuh</label>
                      <div class="col-lg-12">
                        <input type="number" class="form-control" name="dukuh" placeholder="Masukan Dukuh" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 col-sm-2 control-label" for="username" style="color: #0f3975">Dusun</label>
                      <div class="col-lg-12">
                        <input type="number" class="form-control" name="dusun" placeholder="Masukan Dusun" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 col-sm-2 control-label" for="username" style="color: #0f3975">RW</label>
                      <div class="col-lg-12">
                        <input type="number" class="form-control" name="rw" placeholder="Masukan RW" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 col-sm-2 control-label" for="username" style="color: #0f3975">RT</label>
                      <div class="col-lg-12">
                        <input type="number" class="form-control" name="rt" placeholder="Masukan RT" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 col-sm-2 control-label" for="username" style="color: #0f3975">Tahun</label>
                      <div class="col-lg-12">
                        <input type="number" class="form-control" name="tahun" placeholder="Masukan Tahun" required>
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