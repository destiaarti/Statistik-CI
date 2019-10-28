		<?php
		defined('BASEPATH') OR exit('No direct script access allowed');

		class Listrik extends CI_Controller {

			public function __construct() 
			{
				parent::__construct();
				$this->load->model('M_home');
				$this->load->model('M_users');
				$this->load->model('M_pln_pdam');
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
					'active_function' => 'listrik',
					'sidebar' => 'sidebar_staf_bagian',
				];
				$data['datapln_pdam'] = $this->M_pln_pdam->tampil2();
				$data['pln_pdamCount'] = $this->M_pln_pdam->get_pln_pdam_count();

				// echo 'pake index';
				$this->load->view('adminlte3/global/template', $data);
			}	

		public function hapus_plnpdam($id_pln_pdam){ //fungsi delete
		    $this->load->model('M_pln_pdam'); //load model
		    $this->M_pln_pdam->hapus_plnpdam($id_pln_pdam); //ngacir ke fungsi delTransaksi
			$this->session->set_flashdata('hapus', 'data PLN PDAM telah dihapus');
		    redirect('staf/listrik'); //redirect
		}


		public function tambah(){
			$this->load->view('staf/listrik');
		}

		public function tambah_aksi(){

			$id_pln_pdam = $this->input->post('id_pln_pdam');
			$id_desa = $this->input->post('id_desa');
			$tahun = $this->input->post('tahun');

			$rumah_tangga = $this->input->post('rumah_tangga');
			$pelanggan_pln = $this->input->post('pelanggan_pln');
			$pelanggan_pdam = $this->input->post('pelanggan_pdam');
 $this->db->select('id_pln_pdam');
    $this->db->from('tb_pln_pdam');
    $this->db->where('id_desa', $id_desa);
    $this->db->where('tahun', $tahun);

    $query = $this->db->get();
    $num = $query->num_rows();
    if ($num > 0) {			

					$this->session->set_flashdata('notifa', ' data desa dengan tahun tersebut sudah ada!');
				return redirect('staf/listrik');
					  }
					  else{

			$data = array(
				'id_pln_pdam' => $id_pln_pdam,
				'id_desa' => $id_desa,
				'rumah_tangga' => $rumah_tangga,
				'pelanggan_pln' => $pelanggan_pln,
				'pelanggan_pdam' => $pelanggan_pdam,
			);
			$this->M_pln_pdam->input_data($data,'tb_pln_pdam');
			$this->session->set_flashdata('tambah', 'data PLN PDAM telah ditambah');
			redirect('staf/listrik');
		}}

		public function edit_plnpdam($id_pln_pdam)
			{

				$where = array('id_pln_pdam' => $id_pln_pdam);

				$data = [
					'active_controller' => 'edit_staf',
					'active_function' => 'edit_plnpdam',
					'sidebar' => 'sidebar_staf_bagian',
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
				$this->session->set_flashdata('edit', 'data PLN PDAM telah diedit');
				redirect('staf/listrik');
			}
		}
