<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_desa extends CI_Model {
	
	public function tampil() {
		$sql = " SELECT * FROM `tb_desa " ;
		$data = $this->db->query($sql);

		return $data->result();
	}


	//tampil 2
	public function tampil2() {
		$this->db->select('tb_pembagian_desa.*, tb_desa.*');
		$this->db->from('tb_pembagian_desa');
		$this->db->join('tb_desa', 'tb_pembagian_desa.id_desa = tb_desa.id_desa');
		return $this->db->get()->result();
	}

	public function desaCount() {
		$data = $this->db->query('select count(*) as count from tb_pembagian_desa');	
		return $data->result();
	}

	public function hapus_desa ($id_pembagian_desa){
		$hasil=$this->db->query("DELETE FROM tb_pembagian_desa WHERE id_pembagian_desa='$id_pembagian_desa'");
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