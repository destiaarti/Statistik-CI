<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pln_pdam extends CI_Model {
	


	//tampil 2
	public function tampil2() {
		$this->db->select('tb_pln_pdam.*, tb_desa.*');
		$this->db->from('tb_pln_pdam');
		$this->db->join('tb_desa', 'tb_pln_pdam.id_desa = tb_desa.id_desa');
		return $this->db->get()->result();
	}


	public function get_pln_pdam_count() {
		$data = $this->db->query('select count(*) as count from tb_pln_pdam');	
		return $data->result();
	}

	public function hapus_plnpdam ($id_pln_pdam){
		$hasil=$this->db->query("DELETE FROM tb_pln_pdam WHERE id_pln_pdam='$id_pln_pdam'");
		return $hasil;
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_data($where,$table){		
		return $this->db->get_where($table, $where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}