		<?php
		defined('BASEPATH') OR exit('No direct script access allowed');

		class Pertanahan extends CI_Controller {

			public function __construct() 
			{
				parent::__construct();
				$this->load->model('M_home');
				$this->load->model('M_users');
				$this->load->model('M_pertanahan');
				if (empty($this->session->userdata('status')) || $this->session->userdata('status') !== "LogedIn") {
					return redirect('logout');
				} else {
					if (!empty($this->session->userdata('userdata')->privilege) && $this->session->userdata('userdata')->privilege !== 'staf') 
					{
						return redirect('logout');		
					}
				}
			}
			public function index()
			{
				$data = [
					'active_controller' => 'home',
					'active_function' => 'pertanahan',
					'sidebar' => 'sidebar_staf_bagian',
				];
				$data['dataTanahbengkok'] = $this->M_pertanahan->tampil();
				$data['dataTanahkering'] = $this->M_pertanahan->luas_tanah_kering();
				$data['dataTanahsawah'] = $this->M_pertanahan->luas_tanah_sawah();
				$data['dataLuaswilayah'] = $this->M_pertanahan->luas_wilayah();
				$data['bengkokCount'] = $this->M_pertanahan->bengkokCount();
				$data['wilayahCount'] = $this->M_pertanahan->wilayahCount();
				$data['tanahkeringCount'] = $this->M_pertanahan->tanahkeringCount();
				$data['tanahsawahCount'] = $this->M_pertanahan->tanahsawahCount();

				// echo 'pake index';
				$this->load->view('adminlte3/global/template', $data);
			}



			public function hapus_bengkok($id_tanah_bengkok){ //fungsi delete
		    $this->load->model('M_pertanahan'); //load model
		    $this->M_pertanahan->hapus_bengkok($id_tanah_bengkok); //ngacir ke fungsi delTransaksi
			$this->session->set_flashdata('hapus', 'data telah dihapus');
		    redirect('staf/pertanahan'); //redirect
		}	

			public function hapus_tanah_sawah($id_luas_wilayah){ //fungsi delete
		    $this->load->model('M_pertanahan'); //load model
		    $this->M_pertanahan->hapus_luas_wilayah($id_luas_wilayah); //ngacir ke fungsi delTransaksi
		    $this->session->set_flashdata('hapus', 'data telah dihapus');
			redirect('staf/pertanahan'); //redirect
		}	

			public function hapus_tanah_kering($id_tanah_kering){ //fungsi delete
		    $this->load->model('M_pertanahan'); //load model
		    $this->M_pertanahan->hapus_tanah_kering($id_tanah_kering); //ngacir ke fungsi delTransaksi
		    $this->session->set_flashdata('hapus', 'data telah dihapus');
			redirect('staf/pertanahan'); //redirect
		}	

			public function hapus_luas_wilayah($id_tanah_sawah){ //fungsi delete
		    $this->load->model('M_pertanahan'); //load model
		    $this->M_pertanahan->hapus_tanah_sawah($id_tanah_sawah); //ngacir ke fungsi delTransaksi
$this->session->set_flashdata('hapus', 'data telah dihapus');		   
		   redirect('staf/pertanahan'); //redirect
		}	

		public function tambah(){
			$this->load->view('staf/pertanahan');
		}

		public function tambah_aksi(){

			$id_tanah_bengkok = $this->input->post('id_tanah_bengkok');
			$id_desa = $this->input->post('id_desa');

			$bengkok_sawah = $this->input->post('bengkok_sawah');
			$bengkok_lahan_kering = $this->input->post('bengkok_lahan_kering');
			$kas_sawah = $this->input->post('kas_sawah');
			$kas_lahan_kering = $this->input->post('kas_lahan_kering');
			$tahun = $this->input->post('tahun');
		 $this->db->select('id_tanah_bengkok');
    $this->db->from('tb_tanah_bengkok');
    $this->db->where('id_desa', $id_desa);
    $this->db->where('tahun', $tahun);
   

    $query = $this->db->get();
    $num = $query->num_rows();
    if ($num > 0) 	
	{			

					$this->session->set_flashdata('notifa', ' data desa tersebut sudah ada!');
				return redirect('staf/pertanahan');
					  }
					  else{
			$data = array(
				'id_tanah_bengkok' => $id_tanah_bengkok,
				'id_desa' => $id_desa,
				'bengkok_sawah' => $bengkok_sawah,
				'bengkok_lahan_kering' => $bengkok_lahan_kering,
				'kas_sawah' => $kas_sawah,
				'kas_lahan_kering' => $kas_lahan_kering,
				'tahun' => $tahun,
			);
			$this->M_pertanahan->input_data($data,'tb_tanah_bengkok');
			$this->session->set_flashdata('tambah', 'data telah ditambah');
			redirect('staf/pertanahan');
		}
		}

		public function tambah_aksi_luas(){
			$id_luas_wilayah = $this->input->post('id_luas_wilayah');
			$id_desa = $this->input->post('id_desa');
			$luas_wilayah = $this->input->post('luas_wilayah');
			$tanah_sawah = $this->input->post('tanah_sawah');
			$tanah_kering = $this->input->post('tanah_kering');
			$tahun = $this->input->post('tahun');
		 $this->db->select('id_luas_wilayah');
    $this->db->from('tb_luas_wilayah');
    $this->db->where('id_desa', $id_desa);
    $this->db->where('tahun', $tahun);
   

    $query = $this->db->get();
    $num = $query->num_rows();
    if ($num > 0) 	
	{			

					$this->session->set_flashdata('notifa', ' data desa tersebut sudah ada!');
				return redirect('staf/pertanahan');
					  }
					  else{
			$data = array(
				'id_luas_wilayah' => $id_luas_wilayah,
				'id_desa' => $id_desa,
				'luas_wilayah' => $luas_wilayah,
				'tanah_sawah' => $tanah_sawah,
				'tanah_kering' => $tanah_kering,
				'tahun' => $tahun
			);
			$this->M_pertanahan->input_data_luas($data,'tb_luas_wilayah');
			$this->session->set_flashdata('tambah', 'data telah ditambah');
			redirect('staf/pertanahan');
		}}

		public function tambah_aksi_kering(){
			$id_tanah_kering = $this->input->post('id_tanah_kering');
			$id_desa = $this->input->post('id_desa');
			$perkarangan_bangunan = $this->input->post('perkarangan_bangunan');
			$tegal_kebun = $this->input->post('tegal_kebun');
			$padang_gembala = $this->input->post('padang_gembala');
			$tambak_kolam = $this->input->post('tambak_kolam');
			$hutan_negara = $this->input->post('hutan_negara');
			$perkebunan_negara = $this->input->post('perkebunan_negara');
			$lainnya = $this->input->post('lainnya');
			$jumlah = $this->input->post('jumlah');
		 $this->db->select('id_tanah_kering');
    $this->db->from('tb_luas_tanah_kering');
    $this->db->where('id_desa', $id_desa);
   

    $query = $this->db->get();
    $num = $query->num_rows();
    if ($num > 0) 	
	{			

					$this->session->set_flashdata('notifa', ' data desa tersebut sudah ada!');
				return redirect('staf/pertanahan');
					  }
					  else{
			$data = array(
				'id_tanah_kering' => $id_tanah_kering,
				'id_desa' => $id_desa,
				'perkarangan_bangunan' => $perkarangan_bangunan,
				'tegal_kebun' => $tegal_kebun,
				'padang_gembala' => $padang_gembala,
				'tambak_kolam' => $tambak_kolam,
				'hutan_negara' => $hutan_negara,
				'perkebunan_negara' => $perkebunan_negara,
				'lainnya' => $lainnya,
				'jumlah' => $jumlah
			);
			$this->M_pertanahan->input_data_kering($data,'tb_luas_tanah_kering');
			$this->session->set_flashdata('tambah', 'data telah ditambah');
			redirect('staf/pertanahan');
		}}

		public function tambah_aksi_sawah(){
			$id_tanah_sawah = $this->input->post('id_tanah_sawah');
			$id_desa = $this->input->post('id_desa');
			$irigasi_teknis = $this->input->post('irigasi_teknis');
			$irigasi_setengah_teknis = $this->input->post('irigasi_setengah_teknis');
			$irigasi_sederhana = $this->input->post('irigasi_sederhana');
			$hujan_tadah = $this->input->post('hujan_tadah');
			$jumlah = $this->input->post('jumlah');
		 $this->db->select('id_tanah_sawah');
    $this->db->from('tb_luas_tanah_sawah');
    $this->db->where('id_desa', $id_desa);
   

    $query = $this->db->get();
    $num = $query->num_rows();
    if ($num > 0) 	
	{			

					$this->session->set_flashdata('notifa', ' data desa tersebut sudah ada!');
				return redirect('staf/pertanahan');
					  }
					  else{
			$data = array(
				'id_tanah_sawah' => $id_tanah_sawah,
				'id_desa' => $id_desa,
				'irigasi_teknis' => $irigasi_teknis,
				'irigasi_setengah_teknis' => $irigasi_setengah_teknis,
				'irigasi_sederhana' => $irigasi_sederhana,
				'hujan_tadah' => $hujan_tadah,
				'jumlah' => $jumlah
				
			);
			$this->M_pertanahan->input_data_sawah($data,'tb_luas_tanah_sawah');
					$this->session->set_flashdata('tambah', 'data tanah telah ditambah');
			redirect('staf/pertanahan');
		}
		}
		public function edit_bengkok($id_tanah_bengkok)
			{

				$where = array('id_tanah_bengkok' => $id_tanah_bengkok);

				$data = [
					'active_controller' => 'edit_staf',
					'active_function' => 'edit_bengkok',
					'sidebar' => 'sidebar_staf_bagian',
				];

				$data['tb_tanah_bengkok'] = $this->M_pertanahan->edit_data_bengkok($where, 'tb_tanah_bengkok')->result();

				$this->load->view('adminlte3/global/template', $data);
			}	

			public function update_bengkok(){
				$id_tanah_bengkok = $this->input->post('id_tanah_bengkok');
				$id_desa = $this->input->post('id_desa');
				$bengkok_sawah = $this->input->post('bengkok_sawah');
				$bengkok_lahan_kering = $this->input->post('bengkok_lahan_kering');
				$kas_sawah = $this->input->post('kas_sawah');
				$kas_lahan_kering = $this->input->post('kas_lahan_kering');
				$tahun = $this->input->post('tahun');


				$data = array(
		
					'bengkok_sawah' => $bengkok_sawah,
					'bengkok_lahan_kering' => $bengkok_lahan_kering,
					'kas_sawah' => $kas_sawah,
					'kas_lahan_kering' => $kas_lahan_kering,
				

				);

				$where = array(
					'id_tanah_bengkok' => $id_tanah_bengkok
				);

				$this->M_pertanahan->update_data_bengkok($where,$data,'tb_tanah_bengkok');
				$this->session->set_flashdata('edit', 'data tanah telah diubah');
				redirect('staf/pertanahan');
			}

			public function edit_luas($id_luas_wilayah)
			{

				$where = array('id_luas_wilayah' => $id_luas_wilayah);

				$data = [
					'active_controller' => 'edit_staf',
					'active_function' => 'edit_luas',
					'sidebar' => 'sidebar_staf_bagian',
				];

				$data['tb_luas_wilayah'] = $this->M_pertanahan->edit_data_luas($where, 'tb_luas_wilayah')->result();

				$this->load->view('adminlte3/global/template', $data);
			}	

			public function update_luas(){
				$id_luas_wilayah = $this->input->post('id_luas_wilayah');
				$id_desa = $this->input->post('id_desa');
				$luas_wilayah = $this->input->post('luas_wilayah');
				$tanah_sawah = $this->input->post('tanah_sawah');
				$tanah_kering = $this->input->post('tanah_kering');
				$tahun = $this->input->post('tahun');


				$data = array(
				
					'luas_wilayah' => $luas_wilayah,
					'tanah_sawah' => $tanah_sawah,
					'tanah_kering' => $tanah_kering,
					

				);

				$where = array(
					'id_luas_wilayah' => $id_luas_wilayah
				);

				$this->M_pertanahan->update_data_luas($where,$data,'tb_luas_wilayah');
				$this->session->set_flashdata('edit', 'data tanah telah diubah');
				redirect('staf/pertanahan');
			}

			public function edit_kering($id_tanah_kering)
			{

				$where = array('id_tanah_kering' => $id_tanah_kering);

				$data = [
					'active_controller' => 'edit_staf',
					'active_function' => 'edit_kering',
					'sidebar' => 'sidebar_staf_bagian',
				];

				$data['tb_luas_tanah_kering'] = $this->M_pertanahan->edit_data_kering($where, 'tb_luas_tanah_kering')->result();

				$this->load->view('adminlte3/global/template', $data);
			}	

			public function update_kering(){
				$id_tanah_kering = $this->input->post('id_tanah_kering');
				$id_desa = $this->input->post('id_desa');
				$id_desa = $this->input->post('id_desa');
				$perkarangan_bangunan = $this->input->post('perkarangan_bangunan');
				$tegal_kebun = $this->input->post('tegal_kebun');
				$padang_gembala = $this->input->post('padang_gembala');
				$tambak_kolam = $this->input->post('tambak_kolam');
				$hutan_negara = $this->input->post('hutan_negara');
				$perkebunan_negara = $this->input->post('perkebunan_negara');
				$lainnya = $this->input->post('lainnya');
				$jumlah = $this->input->post('jumlah');


				$data = array(
					
					'perkarangan_bangunan' => $perkarangan_bangunan,
					'tegal_kebun' => $tegal_kebun,
					'padang_gembala' => $padang_gembala,
					'tambak_kolam' => $tambak_kolam,
					'hutan_negara' => $hutan_negara,
					'perkebunan_negara' => $perkebunan_negara,
					'lainnya' => $lainnya,
					'jumlah' => $jumlah

				);

				$where = array(
					'id_tanah_kering' => $id_tanah_kering
				);

				$this->M_pertanahan->update_data_kering($where,$data,'tb_luas_tanah_kering');
				$this->session->set_flashdata('edit', 'data tanah telah diubah');
				redirect('staf/pertanahan');
			}

			public function edit_sawah($id_tanah_sawah)
			{

				$where = array('id_tanah_sawah' => $id_tanah_sawah);

				$data = [
					'active_controller' => 'edit_staf',
					'active_function' => 'edit_sawah',
					'sidebar' => 'sidebar_staf_bagian',
				];

				$data['tb_luas_tanah_sawah'] = $this->M_pertanahan->edit_data_sawah($where, 'tb_luas_tanah_sawah')->result();

				$this->load->view('adminlte3/global/template', $data);
			}	

			public function update_sawah(){
				$id_tanah_sawah = $this->input->post('id_tanah_sawah');
				$id_desa = $this->input->post('id_desa');
				$irigasi_teknis = $this->input->post('irigasi_teknis');
				$irigasi_setengah_teknis = $this->input->post('irigasi_setengah_teknis');
				$irigasi_sederhana = $this->input->post('irigasi_sederhana');
				$hujan_tadah = $this->input->post('hujan_tadah');
				$jumlah = $this->input->post('jumlah');


				$data = array(
				
					'irigasi_teknis' => $irigasi_teknis,
					'irigasi_setengah_teknis' => $irigasi_setengah_teknis,
					'irigasi_sederhana' => $irigasi_sederhana,
					'hujan_tadah' => $hujan_tadah,
					'jumlah' => $jumlah

				);

				$where = array(
					'id_tanah_sawah' => $id_tanah_sawah
				);

				$this->M_pertanahan->update_data_sawah($where,$data,'tb_luas_tanah_sawah');
				$this->session->set_flashdata('edit', 'data tanah telah diubah');
				redirect('staf/pertanahan');
			}
	}
