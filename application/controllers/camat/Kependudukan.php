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
			if (!empty($this->session->userdata('userdata')->privilege) && $this->session->userdata('userdata')->privilege !== 'camat') 
			{
				return redirect('logout');		
			}
		}
	}
	public function index()
	{
		$data = [
			'active_controller' => 'kependudukan',
			'active_function' => 'camat',
			'sidebar' => 'sidebar_camat',
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
}
