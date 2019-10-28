			<?php
			defined('BASEPATH') OR exit('No direct script access allowed');

			class Pln_pdam extends CI_Controller {

				public function __construct() 
				{
					parent::__construct();
					$this->load->model('M_user');
					$this->load->model('M_pln_pdam');
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
						'active_controller' => 'pln_pdam',
						'active_function' => 'index',
						'sidebar' => 'sidebar_admin',
					];
					$data['datapln_pdam'] = $this->M_pln_pdam->tampil2();
					$data['pln_pdamCount'] = $this->M_pln_pdam->get_pln_pdam_count();
					// $data['userCount2'] = $this->M_home->get_user_count2();
					// $data['namaUser'] = $this->M_home->get_nama_kepsek();

					// echo 'pake index';
					$this->load->view('adminlte3/global/template', $data);
				}	

			public function hapus_plnpdam($id_pln_pdam){ //fungsi delete
			    $this->load->model('M_pln_pdam'); //load model
			    $this->M_pln_pdam->hapus_plnpdam($id_pln_pdam); //ngacir ke fungsi delTransaksi
			    $this->session->set_flashdata('hapus', 'Data Berhasil dihapus');
			    redirect('admin/pln_pdam'); //redirect
			}


			public function edit_plnpdam($id_pln_pdam)
			{

				$where = array('id_pln_pdam' => $id_pln_pdam);

				$data = [
					'active_controller' => 'edit',
					'active_function' => 'edit_plnpdam',
					'sidebar' => 'sidebar_admin',
				];

				$data['tb_pln_pdam'] = $this->M_pln_pdam->edit_data($where, 'tb_pln_pdam')->result();

				$this->load->view('adminlte3/global/template', $data);
			}	

			public function update_plnpdam(){
				$id_desa = $this->input->post('id_desa');
				$id_pln_pdam = $this->input->post('id_pln_pdam');
				$rumah_tangga = $this->input->post('rumah_tangga');
				$pelanggan_pdam = $this->input->post('pelanggan_pdam');
				$pelanggan_pln = $this->input->post('pelanggan_pln');
				$tahun = $this->input->post('tahun');

				$data = array(
					'rumah_tangga' => $rumah_tangga,
					'pelanggan_pdam' => $pelanggan_pdam,
					'pelanggan_pln' => $pelanggan_pln,
		
				);

				$where = array(
					'id_pln_pdam' => $id_pln_pdam
				);

				$this->M_pln_pdam->update_data($where,$data,'tb_pln_pdam');
				    $this->session->set_flashdata('edit', 'Data Berhasil diedit');
				redirect('admin/pln_pdam');
			}
			}
