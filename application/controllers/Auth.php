<?php //enkripsi ada di file register, M_admin, M_pelamar, M_users
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_users');
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
	}
	public function cek_login()    
	{
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			return redirect('login');
            // echo 'salahbos';													
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$data = $this->M_users->tampil($username, $password);

			if ($data == false) {
				$this->session->set_flashdata('login_gagal','User atau password yang Anda masukkan salah!!');
				// $msg['login_fail'] = "username atau password salah";
				// $this->session->set_flashdata($smg);
				return redirect('login');
			} else {
				$session = [
					'userdata' => $data,
					'id'	=> $this->M_users->printId($this->input->post('username')),
					'status' => "LogedIn"
				];
				$this->session->set_userdata($session);
				// die(var_dump($this->session->userdata("userdata")->privilege));	
				if ($data->privilege == 'admin') {
					$redirectTo = 'admin/home';
				} elseif ($data->privilege == 'camat') {
					$redirectTo = 'camat/home';
				} elseif ($data->privilege == 'staf' && $data->bagian == 'wilayah') {
					$redirectTo = 'staf/wilayah';
				} elseif ($data->privilege == 'staf' && $data->bagian == 'pemerintah') {
					$redirectTo = 'staf/pemerintah';
				} elseif ($data->privilege == 'staf' && $data->bagian == 'penduduk') {
					$redirectTo = 'staf/penduduk';
				} elseif ($data->privilege == 'staf' && $data->bagian == 'pertanahan') {
					$redirectTo = 'staf/pertanahan';
				} elseif ($data->privilege == 'staf' && $data->bagian == 'pertanian') {
					$redirectTo = 'staf/pertanian';
				} elseif ($data->privilege == 'staf' && $data->bagian == 'listrik') {
					$redirectTo = 'staf/listrik';
				}
				redirect($redirectTo);
			}

			if (!empty($msg)) {
				$this->session->set_flashdata($msg);
			}
	        // $this->load->view('adminlte3/home');

		}
	}

	public function logout() {
		$this->session->unset_userdata('userdata');
		$this->session->unset_userdata('status');
		$this->session->sess_destroy();

		return redirect('login');
	}
}	