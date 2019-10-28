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
              <a class="navbar-brand" href="#pablo"><b>Administrator User</b></a>
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
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">content_copy</i>
                    </div>
                    <p class="card-category">User</p>
                    <h3 class="card-title"><?php echo $userCount[0]->count; ?>
                    <small>Orang</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i>
                    <a>User Sistem Informasi Statistik</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="collapse navbar-collapse justify-content-end">
          </div>
          <div class="card card-info">
            <div class="card-header">
         =

                <button type="button" data-toggle="modal" data-target="#tambah-data" class="btn btn-info" class="glyphicon glyphicon-repeat">Tambah User</button>
                </div>
				<br>
                <br>
                <table id="example3" class="table table-bordered table-striped">
                  <thead>
                    <tr class="text-black">
                      <th style="text-align: center;">No.</th>
                   
                      <th style="text-align: center;">Username</th>
                      <th style="text-align: center;">Privilege</th>
                      <th style="text-align: center;">Bagian</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php 
                    $no=1;
                    foreach ($dataUser as $dataUser)
                      : ?>
                    <tr>
                      <td style="text-align: center;"><?php echo $no++; ?></td>
            
                      <td style="text-align: center;"><?php echo $dataUser-> username; ?></td>
                      <td style="text-align: center;"><?php echo $dataUser -> privilege; ?></td>
                      <td style="text-align: center;"><?php echo $dataUser -> bagian; ?></td>
                      <td style="text-align: center;">
                        <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>admin/user/edit_user/<?php echo $dataUser->id_user ?>">Edit</a>
                         <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Eaa<?php echo $dataUser->id_user ?>"><font color="white">Delete</font></a>
						  		  <div  aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Eaa<?php echo $dataUser->id_user ?>" class="modal fade" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
 <h4 class="modal-title" id="myModalLabel">Hapus File</h4>                       
					   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                       
						
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/user/hapus_user/'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							             <input type="hidden" name="id_user" value="<?php echo $dataUser->id_user;?>"/>
              <?php 
			 
						?>
                            <p>Apakah Anda yakin mau menghapus user <b><font color="green"><?php echo $dataUser->username; ?> </font>  ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-navy btn-flat" data-dismiss="modal">Tutup</button>
                 <?php										
										echo anchor(site_url('admin/user/hapus_user/' . $dataUser
										->id_user), '<i class="fa fa-trash" ></i>', array('data-toggle' => 'tooltip', 'title' => 'hapus data', 'class' => 'btn btn-danger btn-sm'));
										
										                
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
              <a class="navbar-brand" href="#pablo"><b>Data User pada Sistem</b></a>
              <div class="card-body">
                <div class="tab-content">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr class="text-black">
                        <th style="text-align: center;">No.</th>
                        <th style="text-align: center;">Username</th>
                        <th style="text-align: center;">Nama</th>
                        <th style="text-align: center;">Golongan</th>
                        <th style="text-align: center;">Tempat Lahir</th>
                        <th style="text-align: center;">Tanggal lahir</th>
                        <th style="text-align: center;">Pendidikan</th>
                        <th style="text-align: center;">Jabatan</th>
                        <th style="text-align: center;">Jenis Kelamin</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($dataUserlengkap as $dataUserlengkap)
                        : ?>
                      <tr>
                        <td style="text-align: center;"><?php echo $no++; ?></td>
                        <td style="text-align: center;"><?php echo $dataUserlengkap -> username; ?></td>
                        <td style="text-align: center;"><?php echo $dataUserlengkap -> nama; ?></td>
                        <td style="text-align: center;"><?php echo $dataUserlengkap-> golongan; ?></td>
                        <td style="text-align: center;"><?php echo $dataUserlengkap-> tempat_lahir; ?></td>
                        <td style="text-align: center;"><?php echo $dataUserlengkap-> tanggal_lahir; ?></td>
                        <td style="text-align: center;"><?php echo $dataUserlengkap-> pendidikan; ?></td>
                        <td style="text-align: center;"><?php echo $dataUserlengkap-> privilege; ?></td>
                        <td style="text-align: center;"><?php echo $dataUserlengkap -> jenis_kelamin; ?></td>
                        
                      <?php endforeach ?>
                    </tbody>

                  </table>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->

            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Modal Tambah -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah User Pada Sistem</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url('admin/user/tambah_aksi')?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
              <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label" for="username" style="color: #0f3975">Username</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" name="username" placeholder="Masukan Username" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label" for="password" style="color: #0f3975">Password</label>
                <div class="col-lg-12">
                  <input type="password" class="form-control" name="password" placeholder="Masukan Password" required>
                </div>
              </div>   

              <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label" for="nip" style="color: #0f3975">NIP</label>
                <div class="col-lg-12">
                  <input type="number" class="form-control" name="nip" placeholder=" Masukan NIP" maxlength="18" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label" for="nama" style="color: #0f3975">Nama</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-6 col-sm-2 control-label" for="privilege" style="color: #0f3975">Pangkat Golongan</label>
                <div class="col-lg-12">
                 <select class="form-control" name="golongan" placeholder="Pilih Golongan" required>
                  <option value="Gol 1">Gol I</option>
                  <option value="Gol 2">Gol II</option>
                  <option value="Gol 3">Gol III</option>
                  <option value="Gol 4">Gol IV</option>
                </select>
              </div>

              <div class="form-group">
                <label class="col-lg-6 col-sm-2 control-label" for="nama" style="color: #0f3975">Tempat Lahir</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat Lahir" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-6 col-sm-2 control-label" for="nama" style="color: #0f3975">Tanggal Lahir</label>
                <div class="col-lg-12">
                  <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukan Nama" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-6 col-sm-2 control-label" for="privilege" style="color: #0f3975">Pangkat Golongan</label>
                <div class="col-lg-12">
                 <select class="form-control" name="pendidikan" placeholder="Pilih Pendidikan" required>
                  <option value="SMA"  >SMA</option>
                  <option value="D1" >D1</option>
                  <option value="D2">D2</option>
                  <option value="D3">D3</option>
                  <option value="S2">S2</option>
                </select>
              </div>

              

              <div class="form-group">
                <label class="col-lg-6 col-sm-2 control-label" for="privilege" style="color: #0f3975">Jenis Kelamin</label>
                <div class="col-lg-12">
                 <select class="form-control" name="jenis_kelamin" placeholder="Masukan Privilege" required>
                  <option value="L">Laki laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
              </div>

              <div class="form-group">
                <label class="col-lg-6 col-sm-2 control-label" for="privilege" style="color: #0f3975">Jabatan</label>
                <div class="col-lg-12">
                 <select class="form-control" name="privilege" placeholder="Masukan Privilege" required>
                  <option value="camat">Camat</option>
                  <option value="staf">Staf</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-10 col-sm-2 control-label" for="privilege" style="color: #0f3975" >Bagian / Unit Kerja</label>
              <label class="col-lg-12 col-sm-2 control-label" for="privilege" >Apabila Privileged Camat, tidak perlu memilih bagian</label>
              <div class="col-lg-12">
               <select class="form-control" name="bagian" placeholder="Masukan Privilege">
                <option value="camat">Pilih Bagian atau Unit Kerja</option>
                <option value="wilayah">Staf - Wilayah</option>
                <option value="pemerintah">Staf - Pemerintah</option>
                <option value="penduduk">Staf - Penduduk</option>
                <option value="pertanahan">Staf - Pertanahan</option>
                <option value="pertanian">Staf - Pertanian</option>
                <option value="listrik">Staf - Listrik</option>
              </select>
            </div>
          </div>
        </div>

    </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  <!-- END Modal Tambah -->
  </div>
