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
			if (!empty($this->session->userdata('userdata')->privilege) && $this->session->userdata('userdata')->privilege !== 'camat') 
			{
				return redirect('logout');		
			}
		}
	}

	public function index()
	{
		$data = [
			'active_controller' => 'user',
			'active_function' => 'camat',
			'sidebar' => 'sidebar_camat',
		];
		$data['dataUser'] 	= $this->M_user->tampil();
		$data['dataUserlengkap'] 	= $this->M_user->tampil2();
		$data['adminCount'] = $this->M_home->get_admin_count();
		$data['userCount'] = $this->M_home->get_user_count();
		$data['namaUser'] = $this->M_home->get_nama_kepsek();

		// echo 'pake index';
		$this->load->view('adminlte3/global/template', $data);
	}	

	public function delete_user($id = FALSE)
	{
		$this->load->model('M_users');
		// $del = $this->url->segment (5);
		//delete tabel admin

		$query = $this->db->query('DELETE FROM data_admin WHERE id_user ="'.$id.'"');
		$query = $this->db->query('DELETE FROM users WHERE id_user ="'.$id.'"');
		if($query){
			$this->session->set_flashdata('successDelete','Berhasil Menghapus');
		}else{
			$this->session->set_flashdata('successDelete','Gagal Menghapus');
		};
		redirect(base_url('admin/user'));
	}
}
