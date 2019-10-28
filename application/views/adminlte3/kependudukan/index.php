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
            <a class="navbar-brand" href="#pablo"><b>Kelola Kependudukan</b></a>
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
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Jumlah Data Kependudukan pada Sistem</p>
                  <h3 class="card-title"><?php echo $kependudukanCount[0]->count; ?>
                  <small>DATA</small>
                </h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons">date_range</i>
                  <a>Jumlah data Penduduk</a>
                </div>
              </div>
            </div>
          </div>


        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">account_balance_wallet</i>
              </div>
              <p class="card-category">Jumlah Data Mutasi Kependudukan pada Sistem</p>
              <h3 class="card-title"><?php echo $mutasiCount[0]->count; ?>
              <small>DATA</small>
            </h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">date_range</i>
              <a>Jumlah data mutasi Kependudukanr</a>
            </div>
          </div>
        </div>

      </div>
    </div>

  <div class="collapse navbar-collapse justify-content-end">
    </div>
    <div class="card card-info">
      <div class="card-header">
	  
        <a class="navbar-brand" href="#pablo"><b>Kelola Kependudukan</b></a>
		</br>
		
  <div class="col-lg-3 col-md-6 col-sm-6">
          
          </div> 
        </div>
        <br>  
        <br>
		  <div class="col-lg-11 col-md-12 col-sm-12">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr class="text-black">
                  <th style="text-align: center;">No.</th>
             
                  <th style="text-align: center;">Nama Desa</th>
                  <th style="text-align: center;">Laki - laki</th>
                  <th style="text-align: center;">Perempuan</th>
                  <th style="text-align: center;">Tahun</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                $no=1;
                foreach ($dataKependudukan as $dataKependudukan)
				{ ?>
                <tr>
                  <td style="text-align: center;"><?php echo $no++; ?></td>
              
                  <td style="text-align: center;"><?php echo $dataKependudukan -> nama_desa; ?></td>
             
                  <td style="text-align: center;"><?php echo $dataKependudukan-> laki_laki; ?></td>
                  <td style="text-align: center;"><?php echo $dataKependudukan -> perempuan; ?></td>
                  <td style="text-align: center;"><?php echo $dataKependudukan -> tahun; ?></td>
                  <td style="text-align: center;">
                    <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>admin/kependudukan/edit_kependudukan/<?php echo $dataKependudukan->id_kependudukan ?>">Edit</a>
                
					  <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalHapus<?php echo $dataKependudukan->id_kependudukan ?>"><font color="white">Delete</font></a>
			

     </div>
   
			  <div  aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ModalHapus<?php echo $dataKependudukan->id_kependudukan ?>" class="modal fade" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
 <h4 class="modal-title" id="myModalLabel">Hapus File</h4>                       
					   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                       
						
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/kependudukan/hapus_kependudukan/'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							             <input type="hidden" name="id_kependudukan" value="<?php echo $dataKependudukan->id_kependudukan;?>"/>
              <?php 
			  $id_desa = $dataKependudukan->id_desa;
					  		$get3 =$this->db->get_where("tb_desa",array("id_desa" =>$id_desa))->row();
					 
					  	$c = $get3->nama_desa;
						?>
                            <p>Apakah Anda yakin mau menghapus data penduduk desa <b><font color="green"><?php echo $c ?> </font> pada tahun <font color="brown"><?php echo $dataKependudukan->tahun?></font>   </b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
                 <?php										
										echo anchor(site_url('admin/kependudukan/hapus_kependudukan/' . $dataKependudukan
										->id_kependudukan), '<i class="fa fa-trash" ></i>', array('data-toggle' => 'tooltip', 'title' => 'hapus data', 'class' => 'btn btn-danger btn-sm'));
										
										                
				?>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    
          </td>     
  </td>

                    <?php } ?>
                  </tbody>
                </table>
				
         
			  <br>
                <a class="navbar-brand" href="#pablo"><b>Kelola Mutasi Kependudukan</b></a>
         <br>
            <div class="col-lg-3 col-md-6 col-sm-6">
	
        
         
          </div> 
        </div>
        <br>
        <br>
		   <div class="col-lg-11 col-md-12 col-sm-12">
                    <table id="example3" class="table table-bordered table-striped">
                      <thead>
                        <tr class="text-black">
                          <th style="text-align: center;">No.</th>
                      
                          <th style="text-align: center;">Nama Desa</th>
                          <th style="text-align: center;">Jenis Mutasi</th>
                          <th style="text-align: center;">Jenis Kelamin</th>
                          <th style="text-align: center;">Jumlah</th>
                          <th style="text-align: center;">Tahun</th>
                          <th style="text-align: center;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $no=1;
                        foreach ($dataMutasi as $dataMutasi)
						{ ?>
                        <tr>
                          <td style="text-align: center;"><?php echo $no++; ?></td>
 
                        
                          <td style="text-align: center;"><?php echo $dataMutasi -> nama_desa; ?></td>
                 
                          <td style="text-align: center;"><?php echo $dataMutasi-> jenis_mutasi; ?></td>
                          <td style="text-align: center;"><?php echo $dataMutasi -> jenis_kelamin; ?></td>
                          <td style="text-align: center;"><?php echo $dataMutasi -> jumlah; ?></td>
                          <td style="text-align: center;"><?php echo $dataMutasi -> tahun; ?></td>
                          <td style="text-align: center;">
                            <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>admin/kependudukan/edit_mutasi/<?php echo $dataMutasi->id_mutasi ?>">Edit</a>
                               <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Hapus1<?php echo $dataMutasi->id_mutasi ?>"><font color="white">Delete</font></a>	

     </div>
			  
	
              <!-- /.tab-content -->
         
			  <div  aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Hapus1<?php echo $dataMutasi->id_mutasi ?>" class="modal fade" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
 <h4 class="modal-title" id="myModalLabel">Hapus File</h4>                       
					   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                       
						
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/kependudukan/hapus_mutasi/'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							             <input type="hidden" name="id_mutasi" value="<?php echo $dataMutasi->id_mutasi;?>"/>
              <?php 
			  $id_desa = $dataMutasi->id_desa;
					  		$get3 =$this->db->get_where("tb_desa",array("id_desa" =>$id_desa))->row();
					 
					  	$c = $get3->nama_desa;
						?>
                            <p>Apakah Anda yakin mau menghapus data mutasi desa <b><font color="green"><?php echo $c ?> </font> pada tahun <font color="brown"><?php echo $dataMutasi->tahun?></font>   </b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
                 <?php										
										echo anchor(site_url('admin/kependudukan/hapus_mutasi/' . $dataMutasi
										->id_mutasi), '<i class="fa fa-trash" ></i>', array('data-toggle' => 'tooltip', 'title' => 'hapus data', 'class' => 'btn btn-danger btn-sm'));
										
										                
				?>
                    </div>
                    </form>
                </div>
            </div>
        </div>
		</td>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
              
			  </br>
              </div>
</div>
</div>
