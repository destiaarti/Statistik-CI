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
			if (!empty($this->session->userdata('userdata')->privilege) && $this->session->userdata('userdata')->privilege !== 'camat') 
			{
				return redirect('logout');		
			}
		}
	}
	public function index()
	{
		$data = [
			'active_controller' => 'desa',
			'active_function' => 'camat',
			'sidebar' => 'sidebar_camat',
		];
		$data['dataDesa'] = $this->M_desa->tampil2();
		// $data['userCount'] = $this->M_home->get_user_count();
		// $data['userCount2'] = $this->M_home->get_user_count2();
		// $data['namaUser'] = $this->M_home->get_nama_kepsek();

		// echo 'pake index';
		$this->load->view('adminlte3/global/template', $data);
	}	
}
