
            <div class="main-panel">

              <!-- Navbar -->

              <!-- End Navbar -->
              <div>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="card card-outline card-info">
                        <div class="card-header">
                          <h3 class="card-title">
                            Sistem Informasi Statistik Desa 
                            
                          </h3>
                          <!-- tools box -->
                 
                          <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <img src="<?php echo base_url('uploads') ?>/header.jpg">
                      </div>

                    </div>
                  </div>
                </div>
                <br>

                <div class="content">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo" style="color: #000000"><b>Kelola Administrator User</b></a>
                    <div class="row">
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-stats">
                          <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                              <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Admin</p>
                            <h3 class="card-title"><?php echo $userCount[0]->count; ?>
                            <small>Orang</small>
                          </h3>
                        </div>
                        <div class="card-footer">
                          <div class="stats">
                            <i class="material-icons">date_range</i>
                            <a>Admin Sistem Informasi Statistik</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="content">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#pablo" style="color: #000000"><b>Kelola Kependudukan</b></a>
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
            </div>
            <br>
            <div class="content">
              <div class="container-fluid">
                <a class="navbar-brand" href="#pablo" style="color: #000000"><b>Kelola Administrasi Wilayah</b></a>
                <div class="row">


                  <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                          <i class="material-icons">content_copy</i>
                        </div>
                        <p class="card-category">Jumlah Data Administrasi pada Sistem</p>
                        <h3 class="card-title"><?php echo $wilayahCount[0]->count; ?>
                        <small>DATA</small>
                      </h3>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">date_range</i>
                        <a>Jumlah data Administrasi Wilayah</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="content">
              <div class="container-fluid">
                <a class="navbar-brand" href="#pablo" style="color: #000000"><b>Kelola Pertanian</b></a>
                <div class="row">
                 <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-primary card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">content_copy</i>
                      </div>
                      <p class="card-category">Jumlah Data Kependudukan pada Sistem</p>
                      <h3 class="card-title"><?php echo $pertanianCount[0]->count; ?>
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
            </div>
          </div>
          <br>
          <div class="content">
            <div class="container-fluid">
              <a class="navbar-brand" href="#pablo" style="color: #000000"><b>Kelola Pengguna PLN dan PDAM</b></a>
              <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">content_copy</i>
                    </div>
                    <p class="card-category">Jumlah Data Kependudukan pada Sistem</p>
                    <h3 class="card-title"><?php echo $pln_pdamCount[0]->count; ?>
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
          </div>
        </div>
        <br>
        <div class="content">
          <div class="container-fluid">
           <a class="navbar-brand" href="#pablo" style="color: #000000"><b>Kelola Pertanahan</b></a>
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
</div>
</div>
<br>
</div>
</div>
</div>
</div>
</div>
</div>
