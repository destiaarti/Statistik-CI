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
			if (!empty($this->session->userdata('userdata')->privilege) && $this->session->userdata('userdata')->privilege !== 'camat') 
			{
				return redirect('logout');		
			}
		}
	}
	public function index()
	{
		$data = [
			'active_controller' => 'admin_wilayah',
			'active_function' => 'camat',
			'sidebar' => 'sidebar_camat',
		];
		$data['wilayahCount'] = $this->M_admin_wilayah->get_wilayah_count();
		$data['dataWilayah'] = $this->M_admin_wilayah->tampil();
		$data['userCount'] = $this->M_home->get_user_count();
		$data['namaUser'] = $this->M_home->get_nama_kepsek();

		// echo 'pake index';
		$this->load->view('adminlte3/global/template', $data);
	}	
}
