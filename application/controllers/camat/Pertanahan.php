<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanahan extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_pertanahan');
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
			'active_controller' => 'pertanahan',
			'active_function' => 'camat',
			'sidebar' => 'sidebar_camat',
		];
		$data['dataTanahbengkok'] = $this->M_pertanahan->tampil();
		$data['dataTanahkering'] = $this->M_pertanahan->luas_tanah_kering();
		$data['dataTanahsawah'] = $this->M_pertanahan->luas_tanah_sawah();
		$data['dataLuaswilayah'] = $this->M_pertanahan->luas_wilayah();
		$data['bengkokCount'] = $this->M_pertanahan->bengkokCount();
		$data['wilayahCount'] = $this->M_pertanahan->wilayahCount();
		$data['tanahkeringCount'] = $this->M_pertanahan->tanahkeringCount();
		$data['tanahsawahCount'] = $this->M_pertanahan->tanahsawahCount();

		// $data['userCount'] = $this->M_home->get_user_count();
		// $data['userCount2'] = $this->M_home->get_user_count2();
		// $data['namaUser'] = $this->M_home->get_nama_kepsek();

		// echo 'pake index';
		$this->load->view('adminlte3/global/template', $data);
	}	
}
