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
            <a class="navbar-brand" href="#pablo"><b>Administrasi Wilayah</b></a>
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

        


    <div class="collapse navbar-collapse justify-content-end">
    </div>
        <div class="card card-info">
          <div class="card-header">
        <a class="navbar-brand" href="#pablo"><b>Kelola Administrasi wilayah</b></a>
        <div class="card-body">
          <div class="tab-content">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr class="text-black">
                  <th style="text-align: center;">No.</th>
          
                  <th style="text-align: center;">Nama Desa</th>
                  <th style="text-align: center;">Luas Wilayah</th>
                  <th style="text-align: center;">Tanah Sawah</th>
                  <th style="text-align: center;">Tanah Kering</th>
                  <th style="text-align: center;">Tahun</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                $no=1;
                foreach ($dataWilayah as $dataWilayah)
                  : ?>
                <tr>
                  <td style="text-align: center;"><?php echo $no++; ?></td>
             
                  <td style="text-align: center;"><?php echo $dataWilayah -> nama_desa; ?></td>
                  <td style="text-align: center;"><?php echo $dataWilayah-> luas_wilayah; ?></td>
                  <td style="text-align: center;"><?php echo $dataWilayah -> tanah_sawah; ?></td>
                  <td style="text-align: center;"><?php echo $dataWilayah -> tanah_kering; ?></td>
                  <td style="text-align: center;"><?php echo $dataWilayah -> tahun; ?></td>
                  
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
