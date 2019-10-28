<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_home');
		$this->load->model('M_users');
		$this->load->model('M_kependudukan');
		$this->load->model('M_kependudukan_umur');
		$this->load->model('M_admin_wilayah');
		$this->load->model('M_pertanian');
		$this->load->model('M_pln_pdam');
		$this->load->model('M_pertanahan');
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
			'active_controller' => 'home',
			'active_function' => 'index',
			'sidebar' => 'sidebar_admin',
		];
		$data['adminCount'] = $this->M_home->get_admin_count();
		$data['userCount'] = $this->M_home->get_user_count();
		// $data['userCount2'] = $this->M_home->get_user_count2();
		$data['namaUser'] = $this->M_home->get_nama_kepsek();
			$data['dataKependudukan'] 	= $this->M_kependudukan->tampil();
		$data['dataMutasi'] 	= $this->M_kependudukan->mutasi();
		$data['dataKependudukan_umur'] 	= $this->M_kependudukan_umur->tampil();
		$data['kependudukanCount'] = $this->M_kependudukan->get_kependudukan_count();
		$data['kependudukan_umurCount'] = $this->M_kependudukan_umur->get_kependudukan_umur_count();
		$data['mutasiCount'] = $this->M_kependudukan_umur->get_mutasi_count();
		$data['wilayahCount'] = $this->M_admin_wilayah->get_wilayah_count();
		$data['pertanianCount'] = $this->M_pertanian->get_pertanian_count();
		$data['pln_pdamCount'] = $this->M_pln_pdam->get_pln_pdam_count();
		$data['bengkokCount'] = $this->M_pertanahan->bengkokCount();
		$data['wilayahCount'] = $this->M_pertanahan->wilayahCount();
		$data['tanahkeringCount'] = $this->M_pertanahan->tanahkeringCount();
		$data['tanahsawahCount'] = $this->M_pertanahan->tanahsawahCount();


		// echo 'pake index';
		$this->load->view('adminlte3/global/template', $data);
	}	
}
