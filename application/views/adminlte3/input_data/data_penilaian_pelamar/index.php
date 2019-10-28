<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Input Data</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Home</a></li>
            <li class="breadcrumb-item active">Data Penilaian Pelamar</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <!-- Custom Tabs -->
        <div class="card">
          <?php
            if($this->session->flashdata('inputsukses')){
              echo
              '<div class="alert alert-info">'.
              $this->session->flashdata('inputsukses').'</div>';
            } ?>
          <div class="card-header d-flex p-0">
            <h3 class="card-title p-3">Data Penilaian Pelamar</h3>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="text-black">
                    <th class="col-sm-0">No.</th>
                    <th class="col-sm-0">Id</th>
                    <th class="col-sm-0">Nama</th>
                    <th class="col-sm-0">Pendidikan Terakhir (K1)</th>
                    <th class="col-sm-0">Pengalaman Kerja (K2)</th>
                    <th class="col-sm-0">Kesehatan (K3)</th>
                    <th class="col-sm-0">Usia (K4)</th>
                    <th class="col-sm-0">Alamat (K5)</th>
                    <th style="text-align: center;">Aksi</th>
                  </tr>
                </thead>

                <tbody>
                 <?php
                 $no = 1;
                 foreach ($dataPenilaian as $data_pelamar) 
                  { ?>
                    <tr>

                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data_pelamar -> id_user; ?></td>
                      <td><?php echo $data_pelamar -> nama; ?></td>
                      <td class="text-center"><?php echo print_data('get_where', array('data_kriteria', array('kode_kriteria'=>$data_pelamar->pend)), 'nilai') ; ?></td>
                      <td class="text-center"><?php echo print_data('get_where', array('data_kriteria', array('kode_kriteria'=>$data_pelamar->peng_kerja)), 'nilai') ; ?></td>
                      <td  class="text-center"><?php echo print_data('get_where', array('data_kriteria', array('kode_kriteria'=>$data_pelamar->kesehatan)), 'nilai') ; ?></td>
                      <td  class="text-center"><?php echo print_data('get_where', array('data_kriteria', array('kode_kriteria'=>$data_pelamar->usia)), 'nilai') ; ?></td>
                      <td  class="text-center"><?php echo print_data('get_where', array('data_kriteria', array('kode_kriteria'=>$data_pelamar->alamat)), 'nilai') ; ?></td>
                <!-- <td><?php echo $data_pelamar -> pend; ?></td>
                <td><?php echo $data_pelamar -> peng_kerja; ?></td>
                <td><?php echo $data_pelamar -> kesehatan; ?></td>
                <td><?php echo $data_pelamar -> usia; ?></td>
                <td><?php echo $data_pelamar -> alamat; ?></td> -->
                <td class="text-center" style="min-width:200px;">
                  <button type="button" data-toggle="modal" data-target="#tambah-data" class="btn btn-success btn-sm xxx" class="glyphicon glyphicon-plus" data-whatever="@mdo" id="<?php echo $data_pelamar->id_user; ?>">Input Penilaian Pelamar</button>
                </td>
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
<!-- /.content -->

<!-- Modal Tambah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Input Data Penilaian Pelamar</h4>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('admin/data_penilaian_pelamar/tambah')?>" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">
          <div class="form-group">
           <input type="hidden" name="id_pelamar">
           <label class="col-lg-6 col-sm-6 control-label">Micro Teaching (K6)</label>
           <div>
            <label class="col-lg-6 col-sm-4 control-label">Isi Materi</label>
            <div class="col-lg-12">
             <input type="number" min="0" max="100" class="form-control" name="k6a" id="inputPassword3" placeholder="Nilai Isi Materi">
           </div>
         </div>
       </div>
       <div class="form-group">
        <label class="col-lg-6 col-sm-4 control-label">Media yang digunakan</label>
        <div class="col-sm-12">
          <input type="number" min="0" max="100" class="form-control" name="k6b" id="inputPassword3" placeholder="Nilai Media yang digunakan">
        </div>
      </div>
      <div class="form-group">
        <label class="col-lg-6 col-sm-4 control-label">Metode penyampaian Materi</label>
        <div class="col-sm-12">
          <input type="number" min="0" max="100" class="form-control" name="k6c" id="inputPassword3" placeholder="Nilai Metode penyampaian Materi">
        </div>
      </div>
      <br>
      <div class="form-group">
        <label class="col-lg-6 col-sm-6 control-label">TEST IT (K7)</label>
        <div>
          <label class="col-lg-6 col-sm-4 control-label">Pengoperasian Basic Komputer</label>
          <div class="col-lg-12">
            <input type="number" min="0" max="100" class="form-control" name="k7a" id="inputPassword3" placeholder="Nilai Isi Materi">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-lg-6 col-sm-4 control-label">[WORD] Membuat Bahan Ajar</label>
        <div class="col-sm-12">
          <input type="number" min="0" max="100" class="form-control" name="k7b" id="inputPassword3" placeholder="Nilai Media yang digunakan">
        </div>
      </div>
      <div class="form-group">
        <label class="col-lg-6 col-sm-4 control-label">[EXCEL] Melakukan simulasi perhitungan nilai</label>
        <div class="col-sm-12">
         <input type="number" min="0" max="100" class="form-control" name="k7c" id="inputPassword3" placeholder="Nilai Metode penyampaian Materi">
       </div>
     </div>
     <div class="form-group">
      <label class="col-lg-6 col-sm-4 control-label">[PPT] Membuat media pembelajaran di PPT</label>
      <div class="col-sm-12">
        <input type="number" min="0" max="100" class="form-control" name="k7d" id="inputPassword3" placeholder="Nilai Metode penyampaian Materi">
      </div>
    </div>
    <br>
    <div class="form-group">
      <label class="col-lg-6 col-sm-6 control-label">TEST ALQURAN DAN BAHASA ARAB (K8)</label>
      <div>
        <label class="col-lg-6 col-sm-4 control-label">Membaca Al Quran</label>
        <div class="col-lg-12">
          <input type="number" min="0" max="100" class="form-control" name="k8a" id="inputPassword3" placeholder="Nilai Isi Materi">
        </div>
      </div>  
    </div>
    <div class="form-group">
      <label class="col-lg-6 col-sm-4 control-label">Tajwid</label>
      <div class="col-sm-12">
        <input type="number" min="0" max="100" class="form-control" name="k8b" id="inputPassword3" placeholder="Nilai Media yang digunakan">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-6 col-sm-4 control-label">Berbicara dalam bahasa Arab</label>
      <div class="col-sm-12">
        <input type="number" min="0" max="100" class="form-control" name="k8c" id="inputPassword3" placeholder="Nilai Metode penyampaian Materi">
      </div>
    </div>
    <br>
    <div class="form-group">
      <label class="col-lg-8 col-sm-8 control-label">TEST POTENSIAL AKADEMIK ( TPA ) DAN TEST PSIKOLOGI (K9)</label>
      <div>
        <label class="col-lg-6 col-sm-4 control-label">TPA</label>
        <div class="col-lg-12">
          <input type="number" min="0" max="100" class="form-control" name="k9a" id="inputPassword3" placeholder="Nilai Isi Materi">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-6 col-sm-4 control-label">Test Psikologi</label>
      <div class="col-sm-12">
        <input type="number" min="0" max="100" class="form-control" name="k9b" id="inputPassword3" placeholder="Nilai Media yang digunakan">
      </div>
    </div>
    <br>
    <div class="form-group">
      <label class="col-lg-6 col-sm-6 control-label">Moral dan Perilaku (K10)</label>
      <div class="col-lg-12">
        <select class="form-control" name="k10">
          <option selected>----Masukan Nilai Moral dan Perilaku----</option>
          <?php foreach ($moral as $key): ?>
            <option value="<?= $key->kode_kriteria ?>"><?= $key->nilai_kriteria ?></option>
          <?php endforeach ?>
        </select>
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

</div>



