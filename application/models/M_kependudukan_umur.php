<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kependudukan_umur extends CI_Model {
	
	public function tampil() {
		$this->db->select('tb_kependudukan_umur.*, tb_desa.*');
		$this->db->from('tb_kependudukan_umur');
		$this->db->join('tb_desa', 'tb_kependudukan_umur.id_desa = tb_desa.id_desa');
		return $this->db->get()->result();
	}

	public function get_kependudukan_umur_count() {
		$data = $this->db->query('select count(*) as count from tb_kependudukan_umur');	
		return $data->result();
	}


	public function get_mutasi_count() {
		$data = $this->db->query('select count(*) as count from tb_mutasi_kependudukan');	
		return $data->result();
	}

	public function hapus_kep_umur ($id_desa){
		$hasil=$this->db->query("DELETE FROM tb_kependudukan_umur WHERE id_desa='$id_desa'");
		return $hasil;
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_data_umur($where,$table){		
		return $this->db->get_where($table, $where);
	}

	public function update_data_umur($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}