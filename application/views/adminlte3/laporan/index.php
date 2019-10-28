  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" class="fa fa-edit">Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Home / Laporan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section> 
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <!-- Custom Tabs -->
          <div class="card card-info card-outline">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">Cetak Laporan</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="box-header">
<!--                 <div class="col-md-12" style="padding: 1;">
                  <a href="<?php echo base_url('superadmin/laporan/laporan_excel') ?>" class="form-control btn btn-success"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data to Excel</a>
                </div> -->

                <div class="col-md-12" style="padding: 1;">
                  <a href="<?php echo base_url('superadmin/laporanpdf'); ?>" class="form-control btn btn-danger"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data to PDF</a>
                </div>
                <br>
              </div>

<!-- Main content Nilai Max-->
                  <?php $max_k1 = print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $this->M_users->select_max('pend'))), 'nilai'); ?>
                  <?php $max_k2 = print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $this->M_users->select_max('peng_kerja'))), 'nilai'); ?>
                  <?php $max_k6 = print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $this->M_users->select_max('micro'))), 'nilai'); ?>
                  <?php $max_k7 = print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $this->M_users->select_max('test_it'))), 'nilai'); ?>
                  <?php $max_k8 = print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $this->M_users->select_max('alquran_arab'))), 'nilai'); ?>
                  <?php $max_k9 = print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $this->M_users->select_max('tpa_psi'))), 'nilai'); ?>
                  <?php $max_k10 = print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $this->M_users->select_max('moral'))), 'nilai'); ?>

<!-- Main content Nilai Min-->
                   
                  <?php $min_k3 = print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $this->M_users->select_min('kesehatan'))), 'nilai'); ?>
                  <?php $min_k4 = print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $this->M_users->select_min('usia'))), 'nilai'); ?>
                  <?php $min_k5 = print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $this->M_users->select_min('alamat'))), 'nilai'); ?>

<!--   <section class="content">
               <?php
               $no = 1;
               foreach ($listpelamar as $data_matriks) 
                { ?>
                  <tr>

                    <td><?php $no++; ?></td>
                    <td class="text-info"><?php $data_matriks -> id_user; ?></td>
                    <td><?php print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->pend)), 'nilai')/$max_k1; ?></td>
                    <td><?php print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->peng_kerja  )), 'nilai')/$max_k1; ?></td>
                    <td><?php print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->micro )), 'nilai')/$max_k1; ?></td>
                    <td><?php print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->test_it  )), 'nilai')/$max_k1; ?></td>
                    <td><?php print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->alquran_arab )), 'nilai')/$max_k1; ?></td>
                    <td><?php print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->tpa_psi  )), 'nilai')/$max_k1; ?></td>
                    <td><?php print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->moral  )), 'nilai')/$max_k1; ?></td>
                  </td>
<!--                 </tr>
              <?php } ?>
            </tbody>

          </table> -->

</div>
<!-- /.row -->
<!-- END CUSTOM TABS -->    
<!-- <section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-info">
        <div class="card-header d-flex p-0">
          <h3 class="card-title p-3">Nilai Min / Nilai (Cost)</h3>
          <ul class="nav nav-pills ml-auto p-2">
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr class="text-black">
                  <th class="col-sm-0">No.</th>
                  <th class="col-sm-0">Id User</th>
                  <th class="col-sm-0">Pendidikan Terakhir (K1)</th>
                    <th class="col-sm-0">Pengalaman Kerja Formal/Informal (K2)</th>
                    <th class="col-sm-0">Kesehatan (K3)</th>
                    <th class="col-sm-0">Usia (K4)</th>
                    <th class="col-sm-0">Alamat (K5)</th>
                 <!--  <th class="col-sm-0">Micro Teaching (K6)</th>
                  <th class="col-sm-0">Test IT (K7)</th>
                  <th class="col-sm-0">Alquran & Arab (K8)</th>
                  <th class="col-sm-0">TPA & Psikologi (K9)</th>
                  <th class="col-sm-0">Moral & Perilaku (K10)</th>
                </tr> -->
   <!--            </thead>

              <tbody> -->
               <?php
               $no = 1;
               foreach ($listpelamar as $data_matriks) 
                { ?>
                  <tr>

                    <td><?php $no++; ?></td>
                    <td class="text-info"><?php $data_matriks -> id_user; ?></td>
                  <td><?php print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->kesehatan)), 'nilai')/$max_k1; ?></td>
                  <td><?php print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->usia )), 'nilai')/$max_k1; ?></td>
                  <td><?php print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->alamat)), 'nilai')/$max_k1; ?></td>
                </td>
             <!--  </tr>
            <?php } ?>
          </tbody>

        </table>
      </section> -->

<section class="content">
        <div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card card-info">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">Hasil Akhir Normalisasi</h3>
                <ul class="nav nav-pills ml-auto p-2">
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <table id="example35" class="table table-bordered table-striped">
                    <thead>
                      <tr class="text-black">
                        <th class="col-sm-0">No.</th>
                        <th class="col-sm-0">Id User</th>
                        <th class="col-sm-0">Pendidikan Terakhir (K1)</th>
                        <th class="col-sm-0">Pengalaman Kerja (K2)</th>
                        <th class="col-sm-0">Kesehatan (K3)</th>
                        <th class="col-sm-0">Usia (K4)</th>
                        <th class="col-sm-0">Alamat (K5)</th>
                        <th class="col-sm-0">Micro Teaching (K6)</th>
                        <th class="col-sm-0">Test IT (K7)</th>
                        <th class="col-sm-0">Alquran & Arab (K8)</th>
                        <th class="col-sm-0">TPA & Psikologi (K9)</th>
                        <th class="col-sm-0">Moral & Perilaku (K10)</th>
                      </tr>
                    </thead>

                    <tbody>
                     <?php
                     $no = 1;
                     foreach ($listpelamar as $data_matriks) 
                      { ?>
                        <tr>

                          <td><?php echo $no++; ?></td>
                          <td class="text-info"><?php echo $data_matriks -> id_user; ?></td>
                          <td><?php echo print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->pend)), 'nilai')/$max_k1; ?></td>
                          <td><?php echo print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->peng_kerja  )), 'nilai')/$max_k2; ?></td>
                          <td><?php $var = print_data ('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->kesehatan)), 'nilai'); echo $min_k3/$var; ?></td>
                          <td><?php $var = print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->usia )), 'nilai'); echo $min_k4/$var ; ?></td>
                          <td><?php $var = print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->alamat)), 'nilai'); echo $min_k5/$var; ?></td>
                          <td><?php echo print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->micro )), 'nilai')/$max_k6; ?></td>
                          <td><?php echo print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->test_it  )), 'nilai')/$max_k7; ?></td>
                          <td><?php echo print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->alquran_arab )), 'nilai')/$max_k8; ?></td>
                          <td><?php echo print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->tpa_psi  )), 'nilai')/$max_k9; ?></td>
                          <td><?php echo print_data('get_where', array('data_kriteria', array('kode_kriteria'=> $data_matriks->moral  )), 'nilai')/$max_k10; ?></td>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>

                </table>
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->

          </div>
          <!-- ./card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->    </section>


      <section class="content">
        <div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card card-info">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">Hasil Akhir Perangkingan</h3>
                <ul class="nav nav-pills ml-auto p-2">
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <table id="example33" class="table table-bordered table-striped">
                    <thead>
                      <tr class="text-black">
                        <th class="col-sm-0">Id</th>
                        <th class="col-sm-0">Nama Pelamar</th>
                        <th class="col-sm-0">(K1)</th>
                        <th class="col-sm-0">(K2)</th>
                        <th class="col-sm-0">(K3)</th>
                        <th class="col-sm-0">(K4)</th>
                        <th class="col-sm-0">(K5)</th>
                        <th class="col-sm-0">(K6)</th>
                        <th class="col-sm-0">(K7)</th>
                        <th class="col-sm-0">(K8)</th>
                        <th class="col-sm-0">(K9)</th>
                        <th class="col-sm-0">(K10)</th>
                        <th class="col-sm-0">Total</th>
                        <th class="col-sm-0">Kelayakan</th>
                        <th class="col-sm-0">Rangking</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php $n=1;
                      foreach ($list as $key)
                        : ?>
                      <tr>
                        <td class="text-info"><?= $key->id_user ?></td>
                        <td><?= $key->nama ?></td>
                        <td><?= $key->nilai_k1 ?></td>
                        <td><?= $key->nilai_k2 ?></td>
                        <td><?= $key->nilai_k3 ?></td>
                        <td><?= $key->nilai_k4 ?></td>
                        <td><?= $key->nilai_k5 ?></td>
                        <td><?= $key->nilai_k6 ?></td>
                        <td><?= $key->nilai_k7 ?></td>
                        <td><?= $key->nilai_k8 ?></td>
                        <td><?= $key->nilai_k9 ?></td>
                        <td><?= $key->nilai_k10 ?></td>
                        <td><?= $key->total ?></td>
                        <td class="text-center"><?= ($key->total>85?'Layak':'Tidak layak') ?></td>
                        <td class="text-center"><?= $n++ ?></td></tr>
                      <?php endforeach ?>
                    </tbody>

                  </table>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->

            </div>
            <!-- ./card -->
          </div>
          <!-- /.col -->
        </div>
        </div>
        <!-- /.row -->
        <!-- END CUSTOM TABS -->    </section>
      </div>
      <!-- /.content-wrapper -->
