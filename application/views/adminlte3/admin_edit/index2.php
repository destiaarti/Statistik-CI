  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Home / Edit Data Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->

    <!-- Modal edit -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h4 class="card-title">Edit Data Admin</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url('admin/admin/edit')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                  <div class="form-group">
                    <input type="hidden" name="id_user" value="<?php echo($user['admin_data']->id_user) ?>">
                    <label class="col-lg-2 col-sm-2 control-label">NIP</label>
                    <div class="col-lg-12">
                      <input type="text" class="form-control" name="nip" placeholder="nip" value="<?php echo($user['admin_data']->nip) ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">Username</label>
                    <div class="col-lg-12">
                      <input type="text" class="form-control" name="username" placeholder="Masukan Username" value="<?php echo($user['user_data']->username) ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">Nama</label>
                    <div class="col-lg-12">
                      <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" value="<?php echo($user['admin_data']->nama) ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">Password</label>
                    <div class="col-lg-12">
                      <input type="password" class="form-control" name="password" placeholder="Masukan Password" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">Privilege</label>
                    <div class="col-lg-12">
                      <input type="text" class="form-control" name="privilege" placeholder="Masukan Privilege" value="<?php print_r($user['user_data']->privilege) ?>" required>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                  <a class="btn btn-danger" href="<?php echo base_url() ?>admin/admin">Batal</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- END Modal edit -->

    </div>
    <!-- /.content-wrapper -->
