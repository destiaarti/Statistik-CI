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
            <a class="navbar-brand" href="#pablo"><b>Kelola Kependudukans</b></a>
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
        <div class="card-body">
          <div class="tab-content">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr class="text-black">
                  <th style="text-align: center;">No.</th>
                
                  <th style="text-align: center;">Nama Desa</th>
                  <th style="text-align: center;">Laki - laki</th>
                  <th style="text-align: center;">Perempuan</th>
                  <th style="text-align: center;">Tahun</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                $no=1;
                foreach ($dataKependudukan as $dataKependudukan)
                  : ?>
                <tr>
                  <td style="text-align: center;"><?php echo $no++; ?></td>
            
                  <td style="text-align: center;"><?php echo $dataKependudukan -> nama_desa; ?></td>
                  <td style="text-align: center;"><?php echo $dataKependudukan-> laki_laki; ?></td>
                  <td style="text-align: center;"><?php echo $dataKependudukan -> perempuan; ?></td>
                  <td style="text-align: center;"><?php echo $dataKependudukan -> tahun; ?></td>
                  
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->

          
                <br>
                <a class="navbar-brand" href="#pablo"><b>Kelola Mutasi Kependudukan</b></a>
                <div class="card-body">
                  <div class="tab-content">
                    <table id="example3" class="table table-bordered table-striped">
                      <thead>
                        <tr class="text-black">
                          <th style="text-align: center;">No.</th>
                 
                          <th style="text-align: center;">Nama Desa</th>
                          <th style="text-align: center;">Jenis Mutasi</th>
                          <th style="text-align: center;">Jenis Kelamin</th>
                          <th style="text-align: center;">Jumlah</th>
                          <th style="text-align: center;">Tahun</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $no=1;
                        foreach ($dataMutasi as $dataMutasi)
                          : ?>
                        <tr>
                          <td style="text-align: center;"><?php echo $no++; ?></td>
                     
                          <td style="text-align: center;"><?php echo $dataMutasi -> nama_desa; ?></td>
                          <td style="text-align: center;"><?php echo $dataMutasi-> jenis_mutasi; ?></td>
                          <td style="text-align: center;"><?php echo $dataMutasi -> jenis_kelamin; ?></td>
                          <td style="text-align: center;"><?php echo $dataMutasi -> jumlah; ?></td>
                          <td style="text-align: center;"><?php echo $dataMutasi -> tahun; ?></td>
                         
                            <?php endforeach ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
