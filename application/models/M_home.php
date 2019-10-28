<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
	
	public function tampil() {
		$sql = " SELECT * FROM data_pelamar  where kondisi = 'Ya' " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function get_admin_count() {
		$data = $this->db->query('select count(*) as count from data_admin');	
		return $data->result();
	}

	public function get_user_count() {
		$data = $this->db->query('select count(*) as count from users');	
		return $data->result();
	}

	public function get_nama() {	
		$id_user = $_SESSION['userdata']->id_user;
		$data = $this->db->query('select nama from users where id_user=' . $id_user);	
		
		return $data->result();
	}

	public function get_nama_kepsek() {
		$id_user = $_SESSION['userdata']->id_user;
		$data = $this->db->query('select nama from data_admin where id_user=' . $id_user);	
		
		return $data->result();
	}

	public function get_nama_admin() {
		$id_user = $_SESSION['userdata']->id_user;
		$data = $this->db->query('select nama from data_admin where id_user=' . $id_user);	
		
		return $data->result();
	}

	public function get_nama_user() {
		$id_user = $_SESSION['userdata']->id_user;
		$data = $this->db->query('select nama from data_pelamar where id_user=' . $id_user);	
		
		return $data->result();
	}
}