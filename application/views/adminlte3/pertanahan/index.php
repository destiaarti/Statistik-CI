

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
                  <a class="navbar-brand" href="#pablo"><b>Kelola Pertanahan</b></a>
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
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                          <i class="material-icons">content_copy</i>
                        </div>
                        <p class="card-category">Jumlah Data Kelola Tanah Bengkok pada Sistem</p>
                        <h3 class="card-title"><?php echo $bengkokCount[0]->count; ?>
                        <small>DATA</small>
                      </h3>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">date_range</i>
                        <a>Jumlah Data Kelola Tanah Bengkok pada Sistem</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">content_copy</i>
                      </div>
                      <p class="card-category">Jumlah Data Luas Wilayah pada Sistem</p>
                      <h3 class="card-title"><?php echo $wilayahCount[0]->count; ?>
                      <small>DATA</small>
                    </h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">date_range</i>
                      <a>Jumlah Data Luas Wilayah pada Sistem</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">assignment</i>
                    </div>
                    <p class="card-category">Jumlah Data Luas Tanah Kering pada Sistem</p>
                    <h3 class="card-title"><?php echo $tanahkeringCount[0]->count; ?>
                    <small>DATA</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i>
                    <a>Jumlah Data Luas Tanah Kering pada Sistem</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Jumlah Data Luas Tanah Sawah pada Sistem</p>
                  <h3 class="card-title"><?php echo $tanahsawahCount[0]->count; ?>
                  <small>DATA</small>
                </h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons">assignment_ind</i>
                  <a>Jumlah Data Luas Tanah Sawah pada Sistem</a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="collapse navbar-collapse justify-content-end">
        </div>
        <div class="card card-info">
          <div class="card-header">
            <a class="navbar-brand" href="#pablo"><b>Kelola Tanah Bengkok</b></a>
         </div>
		 <br>
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr class="text-black">
                      <th style="text-align: center;">No.</th>
       
                      <th style="text-align: center;">Nama Desa</th>
                      <th style="text-align: center;">Bengkok Sawah</th>
                      <th style="text-align: center;">Bengkok Lahan Kering</th>
                      <th style="text-align: center;">Kas Sawah</th>
                      <th style="text-align: center;">Kas Lahan Kering</th>
                      <th style="text-align: center;">Tahun</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php 
                    $no=1;
                    foreach ($dataTanahbengkok as $dataTanahbengkok)
                      : ?>
                    <tr>
                      <td style="text-align: center;"><?php echo $no++; ?></td>
                      
                      <td style="text-align: center;"><?php echo $dataTanahbengkok -> nama_desa; ?></td>
                      <td style="text-align: center;"><?php echo $dataTanahbengkok-> bengkok_sawah; ?></td>
                      <td style="text-align: center;"><?php echo $dataTanahbengkok -> bengkok_lahan_kering; ?></td>
                      <td style="text-align: center;"><?php echo $dataTanahbengkok -> kas_sawah; ?></td>
                      <td style="text-align: center;"><?php echo $dataTanahbengkok -> kas_lahan_kering; ?></td>
                      <td style="text-align: center;"><?php echo $dataTanahbengkok -> tahun; ?></td>
                      <td style="text-align: center;">
                       <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>admin/pertanahan/edit_bengkok/<?php echo $dataTanahbengkok->id_tanah_bengkok ?>">Edit</a>
                       <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalHapus<?php echo $dataTanahbengkok->id_tanah_bengkok ?>"><font color="white">Delete</font></a>
						  		  <div  aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ModalHapus<?php echo $dataTanahbengkok->id_tanah_bengkok ?>" class="modal fade" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
 <h4 class="modal-title" id="myModalLabel">Hapus File</h4>                       
					   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                       
						
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/pertanahan/hapus_bengkok/'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							             <input type="hidden" name="id_pln_pdam" value="<?php echo $dataTanahbengkok->id_tanah_bengkok;?>"/>
              <?php 
			  $id_desa = $dataTanahbengkok->id_desa;
					  		$get3 =$this->db->get_where("tb_desa",array("id_desa" =>$id_desa))->row();
					 
					  	$c = $get3->nama_desa;
						?>
                            <p>Apakah Anda yakin mau menghapus data tanah desa <b><font color="green"><?php echo $c ?> </font> pada tahun <font color="brown"><?php echo $dataTanahbengkok->tahun?></font>   </b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
                 <?php										
										echo anchor(site_url('admin/pertanahan/hapus_bengkok/' . $dataTanahbengkok
										->id_tanah_bengkok), '<i class="fa fa-trash" ></i>', array('data-toggle' => 'tooltip', 'title' => 'hapus data', 'class' => 'btn btn-danger btn-sm'));
										
										                
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
     

           <br>
           <a class="navbar-brand" href="#pablo"><b>Kelola Luas Wilayah</b></a>
   <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="text-black">
                    <th style="text-align: center;">No.</th>
            
                    <th style="text-align: center;">Nama Desa</th>
                    <th style="text-align: center;">Luas Wilayah</th>
                    <th style="text-align: center;">Tanah Sawah</th>
                    <th style="text-align: center;">Tanah Kering</th>
                    <th style="text-align: center;">Tahun</th>
                    <th style="text-align: center;">Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php 
                  $no=1;
                  foreach ($dataLuaswilayah as $dataLuaswilayah)
                    : ?>
                  <tr>
                    <td style="text-align: center;"><?php echo $no++; ?></td>
               
                    <td style="text-align: center;"><?php echo $dataLuaswilayah -> nama_desa; ?></td>
                    <!-- 365000 -->
                    <td style="text-align: center;" id="demo"><?php echo $nilai = $dataLuaswilayah -> luas_wilayah; ?></td>
                    <!-- 365000 -->
                    <td style="text-align: center;"><?php echo $dataLuaswilayah-> tanah_sawah; ?></td>
                    <td style="text-align: center;"><?php echo $dataLuaswilayah -> tanah_kering; ?></td>
                    <td style="text-align: center;"><?php echo $dataLuaswilayah -> tahun; ?></td>
                    <td style="text-align: center;">
                      <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>admin/pertanahan/edit_luas/<?php echo $dataLuaswilayah->id_luas_wilayah ?>">Edit</a>
                      <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Hapus<?php echo $dataLuaswilayah->id_luas_wilayah ?>"><font color="white">Delete</font></a>
						  		  <div  aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Hapus<?php echo $dataLuaswilayah->id_luas_wilayah ?>" class="modal fade" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
 <h4 class="modal-title" id="myModalLabel">Hapus File</h4>                       
					   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                       
						
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/pertanahan/hapus_tanah_sawah/'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							             <input type="hidden" name="id_luas_wilayah" value="<?php echo $dataLuaswilayah->id_luas_wilayah;?>"/>
              <?php 
			  $id_desa = $dataLuaswilayah->id_desa;
					  		$get3 =$this->db->get_where("tb_desa",array("id_desa" =>$id_desa))->row();
					 
					  	$c = $get3->nama_desa;
						?>
                            <p>Apakah Anda yakin mau menghapus data tanah desa <b><font color="green"><?php echo $c ?> </font> pada tahun <font color="brown"><?php echo $dataLuaswilayah->tahun?></font>   </b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
                 <?php										
										echo anchor(site_url('admin/pertanahan/hapus_tanah_sawah/' . $dataLuaswilayah
										->id_luas_wilayah), '<i class="fa fa-trash" ></i>', array('data-toggle' => 'tooltip', 'title' => 'hapus data', 'class' => 'btn btn-danger btn-sm'));
										
										                
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
          

          <br>
          <a class="navbar-brand" href="#pablo"><b>Kelola Luas Tanah Kering</b></a>
<br>
              <table id="example3" class="table table-bordered table-striped">
                <thead>
                  <tr class="text-black">
                    <th style="text-align: center;">No.</th>
            
                    <th style="text-align: center;">Nama Desa</th>
                    <th style="text-align: center;">Pekarangan</th>
                    <th style="text-align: center;">Kebun</th>
                    <th style="text-align: center;">Padang</th>
                    <th style="text-align: center;">Tambak Kolam</th>
                    <th style="text-align: center;">Hutan</th>
                    <th style="text-align: center;">Perkebunan</th>
                    <th style="text-align: center;">Lainnya</th>
                    <th style="text-align: center;">Jumlah</th>
                    <th style="text-align: center;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  foreach ($dataTanahkering as $dataTanahkering)
                    : ?>
                  <tr>
                    <td style="text-align: center;"><?php echo $no++; ?></td>
                 
                    <td style="text-align: center;"><?php echo $dataTanahkering -> nama_desa; ?></td>
                    <td style="text-align: center;"><?php echo $dataTanahkering-> perkarangan_bangunan; ?></td>
                    <td style="text-align: center;"><?php echo $dataTanahkering -> tegal_kebun; ?></td>
                    <td style="text-align: center;"><?php echo $dataTanahkering -> padang_gembala; ?></td>
                    <td style="text-align: center;"><?php echo $dataTanahkering -> tambak_kolam; ?></td>
                    <td style="text-align: center;"><?php echo $dataTanahkering -> hutan_negara; ?></td>
                    <td style="text-align: center;"><?php echo $dataTanahkering -> perkebunan_negara; ?></td>
                    <td style="text-align: center;"><?php echo $dataTanahkering -> lainnya; ?></td>
                    <td style="text-align: center;"><?php echo $dataTanahkering -> jumlah; ?></td>
                    <td style="text-align: center;">
                      <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>admin/pertanahan/edit_kering/<?php echo $dataTanahkering->id_tanah_kering ?>">Edit</a>
                     <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Hps<?php echo $dataTanahkering->id_tanah_kering ?>"><font color="white">Delete</font></a>
						  		  <div  aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Hps<?php echo $dataTanahkering->id_tanah_kering ?>" class="modal fade" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
 <h4 class="modal-title" id="myModalLabel">Hapus File</h4>                       
					   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                       
						
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/pertanahan/hapus_tanah_kering/'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							             <input type="hidden" name="id_luas_wilayah" value="<?php echo $dataTanahkering->id_tanah_kering;?>"/>
              <?php 
			  $id_desa = $dataTanahkering->id_desa;
					  		$get3 =$this->db->get_where("tb_desa",array("id_desa" =>$id_desa))->row();
					 
					  	$c = $get3->nama_desa;
						?>
                            <p>Apakah Anda yakin mau menghapus data tanah desa <b><font color="green"><?php echo $c ?> </font>  ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
                 <?php										
										echo anchor(site_url('admin/pertanahan/hapus_tanah_kering//' . $dataTanahkering
										->id_tanah_kering), '<i class="fa fa-trash" ></i>', array('data-toggle' => 'tooltip', 'title' => 'hapus data', 'class' => 'btn btn-danger btn-sm'));
										
										                
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
        

          <br>
          <a class="navbar-brand" href="#pablo"><b>Kelola Luas Tanah Sawah</b></a>
       <br>
              <table id="example4" class="table table-bordered table-striped">
                <thead>
                  <tr class="text-black">
                    <th style="text-align: center;">No.</th>

                    <th style="text-align: center;">Nama Desa</th>
                    <th style="text-align: center;">Irigasi Teknis</th>
                    <th style="text-align: center;">Irigasi 1/2 teknis</th>
                    <th style="text-align: center;">Irigasi Sederhana</th>
                    <th style="text-align: center;">Hujan Tadah</th>
                    <th style="text-align: center;">Jumlah</th>
                    <th style="text-align: center;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  foreach ($dataTanahsawah as $dataTanahsawah)
                    : ?>
                  <tr>
                    <td style="text-align: center;"><?php echo $no++; ?></td>
           
                    <td style="text-align: center;"><?php echo $dataTanahsawah -> nama_desa; ?></td>
                    <td style="text-align: center;"><?php echo $dataTanahsawah-> irigasi_teknis; ?></td>
                    <td style="text-align: center;"><?php echo $dataTanahsawah -> irigasi_setengah_teknis; ?></td>
                    <td style="text-align: center;"><?php echo $dataTanahsawah -> irigasi_sederhana; ?></td>
                    <td style="text-align: center;"><?php echo $dataTanahsawah -> hujan_tadah; ?></td>
                    <td style="text-align: center;"><?php echo $dataTanahsawah -> jumlah; ?></td>
                    <td style="text-align: center;">
                      <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>admin/pertanahan/edit_sawah/<?php echo $dataTanahsawah->id_tanah_sawah ?>">Edit</a>
<a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Eaa<?php echo $dataTanahsawah->id_tanah_sawah ?>"><font color="white">Delete</font></a>
						  		  <div  aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Eaa<?php echo $dataTanahsawah->id_tanah_sawah ?>" class="modal fade" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
 <h4 class="modal-title" id="myModalLabel">Hapus File</h4>                       
					   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                       
						
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/pertanahan/hapus_luas_wilayah/'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							             <input type="hidden" name="id_tanah_sawah" value="<?php echo $dataTanahsawah->id_tanah_sawah;?>"/>
              <?php 
			  $id_desa = $dataTanahsawah->id_desa;
					  		$get3 =$this->db->get_where("tb_desa",array("id_desa" =>$id_desa))->row();
					 
					  	$c = $get3->nama_desa;
						?>
                            <p>Apakah Anda yakin mau menghapus data tanah desa <b><font color="green"><?php echo $c ?> </font>  ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
                 <?php										
										echo anchor(site_url('admin/pertanahan/hapus_luas_wilayah/' . $dataTanahsawah
										->id_tanah_sawah), '<i class="fa fa-trash" ></i>', array('data-toggle' => 'tooltip', 'title' => 'hapus data', 'class' => 'btn btn-danger btn-sm'));
										
										                
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
      </div>


    