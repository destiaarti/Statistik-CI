		<?php
		defined('BASEPATH') OR exit('No direct script access allowed');

		class Kependudukan extends CI_Controller {

			public function __construct() 
			{
				parent::__construct();
				$this->load->model('M_user');
				$this->load->model('M_home');
				$this->load->model('M_users');
				$this->load->model('M_kependudukan');
				$this->load->model('M_kependudukan_umur');
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
					'active_controller' => 'kependudukan',
					'active_function' => 'index',
					'sidebar' => 'sidebar_admin',
				];
				$data['dataKependudukan'] 	= $this->M_kependudukan->tampil();
				$data['dataMutasi'] 	= $this->M_kependudukan->mutasi();
				$data['dataKependudukan_umur'] 	= $this->M_kependudukan_umur->tampil();
				$data['kependudukanCount'] = $this->M_kependudukan->get_kependudukan_count();
				$data['kependudukan_umurCount'] = $this->M_kependudukan_umur->get_kependudukan_umur_count();
				$data['mutasiCount'] = $this->M_kependudukan_umur->get_mutasi_count();

				$data['adminCount'] = $this->M_home->get_admin_count();
				$data['userCount'] = $this->M_home->get_user_count();
				$data['namaUser'] = $this->M_home->get_nama_kepsek();

				// echo 'pake index';
				$this->load->view('adminlte3/global/template', $data);
			}	

		public function hapus_kependudukan($id_kependudukan){ //fungsi delete
		    $this->load->model('M_kependudukan'); //load model
		    $this->M_kependudukan->hapus_kependudukan($id_kependudukan); //ngacir ke fungsi delTransaksi
				$this->session->set_flashdata('hapus', 'data penduduk telah dihapus');
		    redirect('admin/kependudukan'); //redirect
		}

		public function hapus_kep_umur($id_desa){ //fungsi delete
		    $this->load->model('M_kependudukan_umur'); //load model
		    $this->M_kependudukan_umur->hapus_kep_umur($id_desa); //ngacir ke fungsi delTransaksi
		    redirect('admin/kependudukan'); //redirect
		}

		public function hapus_mutasi($id_mutasi){ //fungsi delete
		    $this->load->model('M_kependudukan'); //load model
		    $this->M_kependudukan->hapus_mutasi($id_mutasi); //ngacir ke fungsi delTransaksi
				$this->session->set_flashdata('hapus', 'data mutasi telah dihapus');
		    redirect('admin/kependudukan'); //redirect
		}

		public function edit_kependudukan($id_kependudukan)
		{

			$where = array('id_kependudukan' => $id_kependudukan);

			$data = [
				'active_controller' => 'edit',
				'active_function' => 'edit_kependudukan',
				'sidebar' => 'sidebar_admin',
			];

			$data['tb_kependudukan'] = $this->M_kependudukan->edit_data($where, 'tb_kependudukan')->result();

			$this->load->view('adminlte3/global/template', $data);
		}	

		public function update_kependudukan(){
	$id_desa = $this->input->post('id_desa');
			$id_kependudukan = $this->input->post('id_kependudukan');
			$laki_laki = $this->input->post('laki_laki');
			$perempuan = $this->input->post('perempuan');
			$tahun = $this->input->post('tahun');

			$data = array(
				'laki_laki' => $laki_laki,
				'perempuan' => $perempuan,
				
			);

			$where = array(
				'id_kependudukan' => $id_kependudukan
			);

			$this->M_kependudukan->update_data($where,$data,'tb_kependudukan');
			$this->session->set_flashdata('edit', 'data penduduk telah diedit');
				
		redirect('admin/kependudukan');
		}

		public function edit_umur($id_desa)
		{

			$where = array('id_desa' => $id_desa);

			$data = [
				'active_controller' => 'edit',
				'active_function' => 'edit_kependudukan_umur',
				'sidebar' => 'sidebar_admin',
			];

			$data['tb_kependudukan_umur'] = $this->M_kependudukan_umur->edit_data_umur($where, 'tb_kependudukan_umur')->result();

			$this->load->view('adminlte3/global/template', $data);
		}	

		public function update_umur(){
			$id_desa = $this->input->post('id_desa');
			$umur = $this->input->post('umur');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$tahun = $this->input->post('tahun');

			$data = array(
				'umur' => $umur,
				'jenis_kelamin' => $jenis_kelamin,
				'tahun' => $tahun
			);

			$where = array(
				'id_desa' => $id_desa
			);

			$this->M_kependudukan_umur->update_data_umur($where,$data,'tb_kependudukan_umur');
			redirect('admin/kependudukan');
		}

		public function edit_mutasi($id_mutasi)
		{

			$where = array('id_mutasi' => $id_mutasi);

			$data = [
				'active_controller' => 'edit',
				'active_function' => 'edit_mutasi',
				'sidebar' => 'sidebar_admin',
			];

			$data['tb_mutasi_kependudukan'] = $this->M_kependudukan->edit_data_mutasi($where, 'tb_mutasi_kependudukan')->result();

			$this->load->view('adminlte3/global/template', $data);
		}	

		public function update_mutasi(){
	$id_mutasi = $this->input->post('id_mutasi');
			$id_desa = $this->input->post('id_desa');
			$jenis_mutasi = $this->input->post('jenis_mutasi');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$jumlah = $this->input->post('jumlah');
			$tahun = $this->input->post('tahun');

			$data = array(
		
	
				'jumlah' => $jumlah,
			
			);

			$where = array(
				'id_mutasi' => $id_mutasi
			);

			$this->M_kependudukan->update_data_mutasi($where,$data,'tb_mutasi_kependudukan');
			$this->session->set_flashdata('edit', 'data penduduk telah diedit');
			
					
			redirect('admin/kependudukan');
		}
		
		}