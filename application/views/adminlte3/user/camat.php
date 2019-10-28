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
            <a class="navbar-brand" href="#pablo"><b>Data Login pada Sistem</b></a>

         <div class="card-body">
          <div class="tab-content">

              
            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <tr class="text-black">
                  <th style="text-align: center;">No.</th>
                  
                  <th style="text-align: center;">Username</th>
                  <th style="text-align: center;">Privilege</th>
                  <th style="text-align: center;">Bagian</th>
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
                  
                    <?php endforeach ?>
                  </tbody>

                </table>
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->

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
            <h4 class="modal-title">Tambah Data Admin</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url('admin/admin/tambah')?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="modal-body">
            <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label" for="username">Username</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" name="username" placeholder="Masukan Username" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label" for="password">Password</label>
                <div class="col-lg-12">
                  <input type="password" class="form-control" name="password" placeholder="Masukan Password" required>
                </div>
              </div>   

              <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label" for="nip">NIP</label>
                <div class="col-lg-12">
                  <input type="number" class="form-control" name="nip" placeholder=" Masukan NIP" maxlength="18" required>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label" for="nama">Nama</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-lg-6 col-sm-2 control-label" for="privilege">Pangkat Golongan</label>
                <div class="col-lg-12">
                 <select class="form-control" name="privilege" placeholder="Masukan Privilege" required>
                  <option value="admin">Admin</option>
                  <option value="kepsek">Kepala Sekolah</option>
                </select>
              </div>
    
              <div class="form-group">
                <label class="col-lg-6 col-sm-2 control-label" for="nama">Tempat Lahir</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Nama" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-6 col-sm-2 control-label" for="nama">Tanggal Lahir</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" name="tanggal_lahir" placeholder="Masukan Nama" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-6 col-sm-2 control-label" for="nama">Tanggal Lahir</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" name="tanggal_lahir" placeholder="Masukan Nama" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-6 col-sm-2 control-label" for="nama">Pendidikan</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" name="pendidikan" placeholder="Masukan Nama" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-6 col-sm-2 control-label" for="privilege">Jabatan</label>
                <div class="col-lg-12">
                 <select class="form-control" name="privilege" placeholder="Masukan Privilege" required>
                  <option value="admin">Admin</option>
                  <option value="kepsek">Kepala Sekolah</option>
                </select>
              </div>
              
              <div class="form-group">
                <label class="col-lg-6 col-sm-2 control-label" for="privilege">Jenis Kelamin</label>
                <div class="col-lg-12">
                 <select class="form-control" name="privilege" placeholder="Masukan Privilege" required>
                  <option value="admin">Laki laki</option>
                  <option value="kepsek">Perempuan</option>
                </select>
              </div>

              <div class="form-group">
                <label class="col-lg-6 col-sm-2 control-label" for="privilege">Privilege</label>
                <div class="col-lg-12">
                 <select class="form-control" name="privilege" placeholder="Masukan Privilege" required>
                  <option value="admin">Camat</option>
                  <option value="kepsek">Staf</option>
                </select>
              </div>
              </div>
            
              <div class="form-group">
                <label class="col-lg-6 col-sm-2 control-label" for="privilege">Bagian / Unit Kerja</label>
                <div class="col-lg-12">
                 <select class="form-control" name="privilege" placeholder="Masukan Privilege" required>
                  <option value="admin">Admin</option>
                  <option value="kepsek">Kepala Sekolah</option>
                </select>
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
