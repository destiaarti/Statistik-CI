<?php //enkripsi ada di file register, M_admin, M_pelamar, M_users
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index()    
    {
    	$this->session->sess_destroy();
        $this->load->view('adminlte3/login');
    }
}