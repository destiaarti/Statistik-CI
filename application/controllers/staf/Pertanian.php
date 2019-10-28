		<?php
		defined('BASEPATH') OR exit('No direct script access allowed');

		class Pertanian extends CI_Controller {

			public function __construct() 
			{
				parent::__construct();
				$this->load->model('M_home');
				$this->load->model('M_users');
				$this->load->model('M_pertanian');
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
					'active_function' => 'pertanian',
					'sidebar' => 'sidebar_staf_bagian',
				];
				$data['dataPertanian'] = $this->M_pertanian->tampil();
				$data['pertanianCount'] = $this->M_pertanian->get_pertanian_count();

				// echo 'pake index';
				$this->load->view('adminlte3/global/template', $data);
			}	

			public function hapus_pertanian($id_panen){ //fungsi delete
		    $this->load->model('M_pertanian'); //load model
		    $this->M_pertanian->hapus_pertanian($id_panen); //ngacir ke fungsi delTransaksi
				    $this->session->set_flashdata('hapus', 'data telah dihapus');
		    redirect('staf/pertanian'); //redirect
		}

		public function tambah(){
			$this->load->view('staf/pertanian');
		}

		public function tambah_aksi(){
			$id_panen = $this->input->post('id_panen');

			$id_desa = $this->input->post('id_desa');
			$luas_panen = $this->input->post('luas_panen');
			$rata_rata_produksi = $this->input->post('rata_rata_produksi');
			$produksi = $this->input->post('produksi');
	 $this->db->select('id_panen');
    $this->db->from('tb_panen_produksi');
    $this->db->where('id_desa', $id_desa);
    $query = $this->db->get();
    $num = $query->num_rows();
    if ($num > 0) 	
	{			

					$this->session->set_flashdata('notifa', ' data desa tersebut sudah ada!');
				return redirect('staf/pertanian');
					  }
					  else{
	
			$data = array(
				'id_panen' => $id_panen,
				'id_desa' => $id_desa,
				'luas_panen' => $luas_panen,
				'rata_rata_produksi' => $rata_rata_produksi,
				'produksi' => $produksi,
			);
			$this->M_pertanian->input_data2($data,'tb_panen_produksi');
				    $this->session->set_flashdata('tambah', 'data telah ditambah');
			redirect('staf/pertanian');
		}}


		public function edit_pertanian($id_panen){

			$where = array('id_panen' => $id_panen);

			$data = [
				'active_controller' => 'edit_staf',
				'active_function' => 'edit_pertanian',
				'sidebar' => 'sidebar_staf_bagian',
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
				    $this->session->set_flashdata('edit', 'data telah diedit');
			redirect('staf/pertanian');
		}
		}
