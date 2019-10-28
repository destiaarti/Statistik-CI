	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Wilayah extends CI_Controller {

		public function __construct() 
		{
			parent::__construct();
			$this->load->model('M_home');
			$this->load->model('M_users');
			$this->load->model('M_admin_wilayah');
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
				'active_function' => 'wilayah',
				'sidebar' => 'sidebar_staf_bagian',
			];
			$data['wilayahCount'] = $this->M_admin_wilayah->get_wilayah_count();
			$data['dataWilayah'] = $this->M_admin_wilayah->tampil();
			// $data['userCount'] = $this->M_home->get_user_count();
			// $data['namaUser'] = $this->M_home->get_nama_kepsek();

			// echo 'pake index';
			$this->load->view('adminlte3/global/template', $data);
		}	

		public function hapus_wilayah($id_luas_wilayah){ //fungsi delete
		    $this->load->model('M_admin_wilayah'); //load model
		    $this->M_admin_wilayah->hapus_wilayah($id_luas_wilayah); //ngacir ke fungsi delTransaksi
			$this->session->set_flashdata('hapus', 'data wilayah telah dihapus');
		    redirect('staf/wilayah'); //redirect
		}


		public function tambah(){
			$this->load->view('staf/wilayah');
		}

		public function tambah_aksi(){
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
    if ($num > 0) {			

					$this->session->set_flashdata('notifa', ' data desa dengan tahun tersebut sudah ada!');
				return redirect('staf/wilayah');
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
			$this->M_admin_wilayah->input_data($data,'tb_luas_wilayah');
				$this->session->set_flashdata('tambah', 'data wilayah telah ditambah');
			redirect('staf/wilayah');
		}}


		public function edit_wilayah($id_luas_wilayah)
		{

			$where = array('id_luas_wilayah' => $id_luas_wilayah);
			
			$data = [
				'active_controller' => 'edit_staf',
				'active_function' => 'edit_wilayah',
				'sidebar' => 'sidebar_staf_bagian',
			];

			$data['tb_luas_wilayah'] = $this->M_admin_wilayah->edit_data($where, 'tb_luas_wilayah')->result();

			$this->load->view('adminlte3/global/template', $data);
		}	

		public function update_wilayah(){
			$id_luas_wilayah = $this->input->post('id_luas_wilayah');
			//$id_desa = $this->input->post('id_desa');
			$luas_wilayah = $this->input->post('luas_wilayah');
			$tanah_sawah = $this->input->post('tanah_sawah');
			$tanah_kering = $this->input->post('tanah_kering');
			$tahun = $this->input->post('tahun');

			$data = array(
			//	'id_desa' => $id_desa,
				'luas_wilayah' => $luas_wilayah,
				'tanah_sawah' => $tanah_sawah,
				'tanah_kering' => $tanah_kering,
				'tahun' => $tahun
			);

			$where = array(
				'id_luas_wilayah' => $id_luas_wilayah
			);

			$this->M_admin_wilayah->update_data($where,$data,'tb_luas_wilayah');
			$this->session->set_flashdata('edit', 'data wilayah telah diedit');
			redirect('staf/wilayah');
		}
	}
