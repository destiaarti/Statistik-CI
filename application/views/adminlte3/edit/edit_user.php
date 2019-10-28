die(var_dump($data->id_desa));
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

      </nav>
      <!-- End Navbar -->
      <div class="container-fluid">

        <div class="card card-info">
          <div class="card-header">
            <section class="content">

              <?php 
              foreach ($users  as $data)
                : ?>

                <a class="navbar-brand" href="#pablo"><b>Ubah Administrasi wilayah</b></a>
                <div class="card-body">
                  <div class="tab-content">
                    <form class="form-horizontal" action="<?php echo site_url(). '/admin/user/update_user'; ?>" role="form" method="post"> 
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
   
                       <input type="text" class="form-control" name="id_user" placeholder="ID Desa" value="<?php echo $data->id_user ?>" readonly hidden>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Username</b></a>
                       <input type="text" class="form-control" name="username" placeholder="ID Desa" value="<?php echo $data->username ?>">
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Password</b></a>
                       <input type="password" class="form-control" name="password" placeholder="Luas Wilayah" value="<?php echo $data->password ?>" required>
                       <br>
                       <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Bagian</b></a>
                        <select class="form-control" name="bagian" placeholder="Masukan Jenis Mutasi" value="<?php echo $data->bagian ?>"  required>
						       <?php
							   $bagian = $data->bagian;
                                    if ($bagian =="wilayah"){
										echo '<option value="wilayah" selected>Wilayah</option>';
                        echo '<option value="pemerintah">Pemerintah</option>';
                        echo '<option value="penduduk">Penduduk</option>';
                        echo '<option value="pertanahan">Pertanahan</option>';
                        echo '<option value="pertanian">Pertanian</option>';
                        echo '<option value="listrik">Listrik</option>';
                             
                                    } 
          if ($bagian =="pemerintah"){
										echo '<option value="wilayah" >Wilayah</option>';
                        echo '<option value="pemerintah"selected>Pemerintah</option>';
                        echo '<option value="penduduk">Penduduk</option>';
                        echo '<option value="pertanahan">Pertanahan</option>';
                        echo '<option value="pertanian">Pertanian</option>';
                        echo '<option value="listrik">Listrik</option>';
                             
                                    }
          if ($bagian =="penduduk"){
										echo '<option value="wilayah" >Wilayah</option>';
                        echo '<option value="pemerintah">Pemerintah</option>';
                        echo '<option value="penduduk"selected>Penduduk</option>';
                        echo '<option value="pertanahan">Pertanahan</option>';
                        echo '<option value="pertanian">Pertanian</option>';
                        echo '<option value="listrik">Listrik</option>';
                             
                                    }			
          if ($bagian =="pertanahan"){
										echo '<option value="wilayah" >Wilayah</option>';
                        echo '<option value="pemerintah">Pemerintah</option>';
                        echo '<option value="penduduk">Penduduk</option>';
                        echo '<option value="pertanahan"selected>Pertanahan</option>';
                        echo '<option value="pertanian">Pertanian</option>';
                        echo '<option value="listrik">Listrik</option>';
                             
                                    }				
          if ($bagian =="pertanian"){
										echo '<option value="wilayah" >Wilayah</option>';
                        echo '<option value="pemerintah">Pemerintah</option>';
                        echo '<option value="penduduk">Penduduk</option>';
                        echo '<option value="pertanahan">Pertanahan</option>';
                        echo '<option value="pertanian"selected>Pertanian</option>';
                        echo '<option value="listrik">Listrik</option>';
                             
                                    }					
          if ($bagian =="listrik"){
										echo '<option value="wilayah" >Wilayah</option>';
                        echo '<option value="pemerintah">Pemerintah</option>';
                        echo '<option value="penduduk">Penduduk</option>';
                        echo '<option value="pertanahan">Pertanahan</option>';
                        echo '<option value="pertanian">Pertanian</option>';
                        echo '<option value="listrik"selected>Listrik</option>';
                             
                                    }									
			
                                    ?>       

                        
                      </select>
                       
					   <br>
					   
                       <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                       <a class="btn btn-danger" href="<?php echo base_url() ?>admin/admin_wilayah">Batal</a>
                     </form>
                   <?php endforeach ?>
                 </section>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>



                      
