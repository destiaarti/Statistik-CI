<style type="text/css">
span  {
  display: inline-block;
  width: 180px;
}
.card-body label::before  {
  content: ': ';
}
.hadeh {
  width: 60%;
}
</style>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">View Data Diri</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">View Data Diri</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <?php foreach ($detail as $key): ?>
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">View Data Pelamar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                
                <div class="row">
                  <div class="col-sm-6">
                    <div>
                      <span>ID Pelamar</span>
                      <label><?= $key->id_user ?></label>
                    </div>
                    <div>
                      <span>Nama Pelamar</span>
                      <label><?= $key->nama ?></label>
                    </div>
                    <div>
                      <div>
                        <span>Jenis Kelamin</span>
                        <label><?= print_data('get_where', array('data_tambahan', array('id_pelamar'=>$key->id_user)), 'jenis_kelamin') ?></label>
                      </div>
                      <div>
                        <span>No Telpon</span>
                        <label><?= print_data('get_where', array('data_tambahan', array('id_pelamar'=>$key->id_user)), 'no_telp') ?></label>
                      </div>
                      <span>Pendidikan terkahir</span>
                      <label><?= print_data('get_where', array('data_kriteria', array('kode_kriteria'=>$key->pend)), 'nilai_kriteria')  ?></label>
                    </div>
                    <div>
                      <span>Masa Kerja</span>
                      <label><?= print_data('get_where', array('data_kriteria', array('kode_kriteria'=>$key->peng_kerja)), 'nilai_kriteria')  ?></label>
                    </div>
                    <div>
                      <span>Kesehatan</span>
                      <label><?= print_data('get_where', array('data_kriteria', array('kode_kriteria'=>$key->kesehatan)), 'nilai_kriteria')  ?></label>
                    </div>
                    <div>
                      <span>Usia</span>
                      <label><?= print_data('get_where', array('data_tambahan', array('id_pelamar'=>$key->id_user)), 'umur_asli') ?></label>
                    </div>
                    <div>
                      <span>Alamat</span>
                      <label><?= print_data('get_where', array('data_tambahan', array('id_pelamar'=>$key->id_user)), 'alamat_lengkap') ?></label>
                    </div>
                    <div>
                      <span>Universitas</span>
                      <label><?= print_data('get_where', array('data_tambahan', array('id_pelamar'=>$key->id_user)), 'univ') ?></label>
                    </div>
                    <div>
                      <span>Pengalaman Kerja</span>
                      <label><?= print_data('get_where', array('data_tambahan', array('id_pelamar'=>$key->id_user)), 'tempat_kerja') ?></label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <span>PAS FOTO :</span>
                    <img src="<?php echo base_url('uploads') ?>/<?= print_data('get_where', array('data_tambahan', array('id_pelamar'=>$key->id_user)), 'foto') ?>" class="img-responsive hadeh" alt="Responsive image">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>
<!-- /.content-wrapper -->
