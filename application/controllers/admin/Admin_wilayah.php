		<?php
		defined('BASEPATH') OR exit('No direct script access allowed');

		class Admin_wilayah extends CI_Controller {

			public function __construct() 
			{
				parent::__construct();
				$this->load->model('M_user');
				$this->load->model('M_home');
				$this->load->model('M_users');
				$this->load->model('M_admin_wilayah');
				if (empty($this->session->userdata('status')) || $this->session->userdata('status') !== "LogedIn") {
					return redirect('logout');
				} else {
					if (!empty($this->session->userdata('userdata')->privilege) && $this->session->userdata('userdata')->privilege !== 'admin') 
					{
						return redirect('logout');		
					}
				}
			}
			public function index()
			{
				$data = [
					'active_controller' => 'admin_wilayah',
					'active_function' => 'index',
					'sidebar' => 'sidebar_admin',
				];
				$data['wilayahCount'] = $this->M_admin_wilayah->get_wilayah_count();
				$data['dataWilayah'] = $this->M_admin_wilayah->tampil();
				$data['userCount'] = $this->M_home->get_user_count();
				$data['namaUser'] = $this->M_home->get_nama_kepsek();

				// echo 'pake index';
				$this->load->view('adminlte3/global/template', $data);
			}	

			public function hapus_wilayah($id_luas_wilayah){ //fungsi delete
		    $this->load->model('M_admin_wilayah'); //load model
		    $this->M_admin_wilayah->hapus_wilayah($id_luas_wilayah); //ngacir ke fungsi delTransaksi
		    $this->session->set_flashdata('hapus', 'Data berhasil dihapus');
		    redirect('admin/admin_wilayah'); //redirect
		}

		

		public function edit_wilayah($id_luas_wilayah)
		{

			$where = array('id_luas_wilayah' => $id_luas_wilayah);
			
			$data = [
				'active_controller' => 'edit',
				'active_function' => 'edit_wilayah',
				'sidebar' => 'sidebar_admin',
			];

			$data['tb_luas_wilayah'] = $this->M_admin_wilayah->edit_data($where, 'tb_luas_wilayah')->result();

			$this->load->view('adminlte3/global/template', $data);
		}	

		public function update_wilayah(){
			$id_desa = $this->input->post('id_desa');
			$id_luas_wilayah = $this->input->post('id_luas_wilayah');
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

			$this->M_admin_wilayah->update_data($where,$data,'tb_luas_wilayah');
			$this->session->set_flashdata('edit', 'data wilayah telah diedit');
			redirect('admin/admin_wilayah');
		}

		public function tambah(){
			$this->load->view('staf/wilayah');
		}

		public function tambah_aksi(){
			$id_desa = $this->input->post('id_desa');
			$luas_wilayah = $this->input->post('luas_wilayah');
			$tanah_sawah = $this->input->post('tanah_sawah');
			$tanah_kering = $this->input->post('tanah_kering');
			$tahun = $this->input->post('tahun');

			$data = array(
				'id_desa' => $id_desa,
				'luas_wilayah' => $luas_wilayah,
				'tanah_sawah' => $tanah_sawah,
				'tanah_kering' => $tanah_kering,
				'tahun' => $tahun
			);
			$this->M_admin_wilayah->input_data($data,'tb_luas_wilayah');
					
			redirect('staf/wilayah');
		}
	}


	