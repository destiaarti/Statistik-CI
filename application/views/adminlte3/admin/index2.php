  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User pada Sistem</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Home / Admin</li>
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
          <div class="box-body">
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">Admin</h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link  active" href="admin" >Admin</a></li>
                  <li class="nav-item"><a class="nav-link" href="pelamar" >User</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <button type="button" data-toggle="modal" data-target="#tambah-data" class="btn btn-info" class="glyphicon glyphicon-repeat">Tambah</button>
                  <br>
                  <br/>
                  <?php
                  if($this->session->flashdata('successDelete')){
                    echo
                    '<div class="alert alert-info">'.
                    $this->session->flashdata('successDelete').'</div>';
                  } ?>
                  <br>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr class="text-black">
                        <th class="col-sm-0">No.</th>
                        <th class="col-sm-0">NIP</th>
                        <th class="col-sm-0">Username</th>
                        <th class="col-sm-0">Nama</th>
                        <th class="col-sm-0">Password</th>
                        <th class="col-sm-0">Privilege</th>
                        <th style="text-align: center;">Aksi</th>
                      </tr>
                    </thead>

                    <tbody>
                     <?php
                     $no = 1;
                     foreach ($dataAdmin as $admin)
                      { ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $admin -> nip; ?></td>
                          <td><?php echo $admin -> username; ?></td>
                          <td><?php echo $admin -> nama; ?></td>
                          <td><?php echo $admin -> password; ?></td>
                          <td><?php echo $admin -> privilege; ?></td>
                          <td class="text-center" style="min-width:50px;">
                           <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>admin/admin/edit_admin/<?php echo $admin->id_user ?>">Ubah</a>
                           <?php if(!($admin -> privilege == "admin" or $admin -> privilege == "Admin")){ echo '<a class="btn btn-danger btn-sm" href="'.base_url().'admin/admin/delete_admin/'.$admin->id_user.'">Delete</a>
                           ';}?>
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
     </section>
     <!-- /.content -->

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
                <label class="col-lg-2 col-sm-2 control-label" for="nip">NIP</label>
                <div class="col-lg-12">
                  <input type="number" class="form-control" name="nip" placeholder=" Masukan NIP" maxlength="18" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label" for="username">Username</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" name="username" placeholder="Masukan Username" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label" for="nama">Nama</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label" for="password">Password</label>
                <div class="col-lg-12">
                  <input type="password" class="form-control" name="password" placeholder="Masukan Password" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label" for="privilege">Privilege</label>
                <div class="col-lg-12">
                 <select class="form-control" name="privilege" placeholder="Masukan Privilege" required>
                  <option value="admin">Admin</option>
                  <option value="kepsek">Kepala Sekolah</option>
                </select>
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
<!-- /.content-wrapper -->
