		<?php
		defined('BASEPATH') OR exit('No direct script access allowed');

		class Pertanian extends CI_Controller {

			public function __construct() 
			{
				parent::__construct();
				$this->load->model('M_user');
				$this->load->model('M_pertanian');
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
					'active_controller' => 'pertanian',
					'active_function' => 'index',
					'sidebar' => 'sidebar_admin',
				];
				$data['dataPertanian'] = $this->M_pertanian->tampil();
				$data['pertanianCount'] = $this->M_pertanian->get_pertanian_count();
				// $data['userCount2'] = $this->M_home->get_user_count2();
				// $data['namaUser'] = $this->M_home->get_nama_kepsek();

				// echo 'pake index';
				$this->load->view('adminlte3/global/template', $data);
			}	


		public function hapus_pertanian($id_panen){ //fungsi delete
		    $this->load->model('M_pertanian'); //load model
		    $this->M_pertanian->hapus_pertanian($id_panen); //ngacir ke fungsi delTransaksi
		    $this->session->set_flashdata('hapus', 'Data Berhasil dihapus');
		    redirect('admin/pertanian'); //redirect
		}

		public function edit_pertanian($id_panen)
		{

			$where = array('id_panen' => $id_panen);

			$data = [
				'active_controller' => 'edit',
				'active_function' => 'edit_pertanian',
				'sidebar' => 'sidebar_admin',
			];

			$data['tb_panen_produksi'] = $this->M_pertanian->edit_data($where, 'tb_panen_produksi')->result();

			$this->load->view('adminlte3/global/template', $data);
		}	

		public function update_pertanian(){
			$id_desa = $this->input->post('id_desa');
			$id_panen = $this->input->post('id_panen');
			$luas_panen = $this->input->post('luas_panen');
			$rata_rata_produksi = $this->input->post('rata_rata_produksi');
			$produksi = $this->input->post('produksi');
			

			$data = array(
				'luas_panen' => $luas_panen,
				'rata_rata_produksi' => $rata_rata_produksi,
				'produksi' => $produksi
				
			);

			$where = array(
				'id_panen' => $id_panen
			);

			$this->M_pertanian->update_data($where,$data,'tb_panen_produksi');
			 $this->session->set_flashdata('edit', 'Data berhasil diedit');
			redirect('admin/pertanian');
		}
		}
