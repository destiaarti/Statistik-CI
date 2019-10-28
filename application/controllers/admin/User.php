<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_home');
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
			'active_controller' => 'user',
			'active_function' => 'index',
			'sidebar' => 'sidebar_admin',
		];
		$data['dataUser'] 	= $this->M_user->tampil();
		$data['dataUserlengkap'] 	= $this->M_user->tampil2();
		$data['adminCount'] = $this->M_home->get_admin_count();
		$data['userCount'] = $this->M_home->get_user_count();
		$data['namaUser'] = $this->M_home->get_nama_kepsek();

		// echo 'pake index';
		$this->load->view('adminlte3/global/template', $data);
	}	

	public function hapus_user($id_user){ //fungsi delete
		$where = array('id_user' => $id_user);
		$this->M_user->hapus_user($where,'users');
		$this->M_user->hapus_user($where,'data_admin');
		    $this->session->set_flashdata('hapus', 'data telah dihapus');
	    redirect('admin/user'); //redirect
	}

	public function tambah(){
		$this->load->view('staf/user');
	}

	public function tambah_aksi()
	{
		$this->load->model('M_user', 'model_user', TRUE);
		$data = [
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'privilege' => $this->input->post('privilege'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'bagian' => $this->input->post('bagian'),
			'golongan' => $this->input->post('golongan'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'pendidikan' => $this->input->post('pendidikan'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
		];
       // $checking_insert = $this->M_admin->tambah($input_data_admin, $input_data_users);
		$checking_insert = $this->M_user->tambah($data);
		if($checking_insert)
		{
       	//sukses
		    $this->session->set_flashdata('tambah', 'data telah ditambah');
			redirect(base_url('admin/user'));
		}
		else
		{
       	//gagal
		$this->session->set_flashdata('notifa', ' data user tersebut sudah ada!');
			redirect(base_url('admin/user'));
		}

	}

	public function edit_user($id_user)
		{

			$where = array('id_user' => $id_user);
			
			$data = [
				'active_controller' => 'edit',
				'active_function' => 'edit_user',
				'sidebar' => 'sidebar_admin',
			];

			$data['users'] = $this->M_user->edit_data($where, 'users')->result();

			$this->load->view('adminlte3/global/template', $data);
		}


	public function update_user(){
			$id_user = $this->input->post('id_user');

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$bagian = $this->input->post('bagian');

			$data = array(
				'username' => $username,
				'password' => sha1($password),
				'bagian' => $bagian,
			);

			$where = array(
				'id_user' => $id_user
			);

			$this->M_user->update_data($where,$data,'users');
			$this->session->set_flashdata('edit', 'data telah diedit');
			redirect('admin/user');
		}	
}


	

			
