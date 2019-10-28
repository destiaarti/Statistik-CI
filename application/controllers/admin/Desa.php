		<?php
		defined('BASEPATH') OR exit('No direct script access allowed');

		class Desa extends CI_Controller {

			public function __construct() 
			{
				parent::__construct();
				$this->load->model('M_user');
				$this->load->model('M_desa');
				$this->load->model('M_users');
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
					'active_controller' => 'desa',
					'active_function' => 'index',
					'sidebar' => 'sidebar_admin',
				];
				$data['dataDesa'] = $this->M_desa->tampil2();
				$data['desaCount'] = $this->M_desa->desaCount();
				// $data['userCount'] = $this->M_home->get_user_count();
				// $data['userCount2'] = $this->M_home->get_user_count2();
				// $data['namaUser'] = $this->M_home->get_nama_kepsek();

				// echo 'pake index';
				$this->load->view('adminlte3/global/template', $data);
			}

			public function hapus_desa($id_pembagian_desa){ //fungsi delete
		    $this->load->model('M_desa'); //load model
		    $this->M_desa->hapus_desa($id_pembagian_desa); //ngacir ke fungsi delTransaksi
		    $this->session->set_flashdata('hapus', 'Data Berhasil dihapus');
		    redirect('admin/desa'); //redirect
		}	

		public function edit_desa($id_pembagian_desa)
		{

			$where = array('id_pembagian_desa' => $id_pembagian_desa);

			$data = [
				'active_controller' => 'edit',
				'active_function' => 'edit_desa',
				'sidebar' => 'sidebar_admin',
			];

			$data['tb_pembagian_desa'] = $this->M_desa->edit_data($where, 'tb_pembagian_desa')->result();

			$this->load->view('adminlte3/global/template', $data);
		}	

		public function update_desa(){
			$id_desa = $this->input->post('id_desa');
			$id_pembagian_desa = $this->input->post('id_pembagian_desa');
			$dukuh = $this->input->post('dukuh');
			$dusun = $this->input->post('dusun');
			$rw = $this->input->post('rw');
			$rt = $this->input->post('rt');
			$tahun = $this->input->post('tahun');

			$data = array(
				'dukuh' => $dukuh,
				'dusun' => $dusun,
				'rw' => $rw,
				'rt' => $rt
			
			);

			$where = array(
				'id_pembagian_desa' => $id_pembagian_desa
			);

			$this->M_desa->update_data($where,$data,'tb_pembagian_desa');
				    $this->session->set_flashdata('edit', 'Data Berhasil diedit');
			redirect('admin/desa');
		}
		}
