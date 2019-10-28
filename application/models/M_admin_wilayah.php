<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin_wilayah extends CI_Model {
	
	public function tampil2() {
		$sql = " SELECT * FROM `tb_luas_wilayah " ;
		$data = $this->db->query($sql);

		return $data->result();
	}


//tampil 2
	public function tampil() {
		$this->db->select('tb_luas_wilayah.*, tb_desa.*');
		$this->db->from('tb_luas_wilayah');
		$this->db->join('tb_desa', 'tb_luas_wilayah.id_desa = tb_desa.id_desa');
		return $this->db->get()->result();
	}


	public function get_wilayah_count() {
		$data = $this->db->query('select count(*) as count from tb_luas_wilayah');	
		return $data->result();
	}

	public function hapus_wilayah ($id_luas_wilayah){
		$hasil=$this->db->query("DELETE FROM tb_luas_wilayah WHERE id_luas_wilayah='$id_luas_wilayah'");
		return $hasil;
	}

//
	public function edit_data($where,$table){		
		return $this->db->get_where($table, $where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}


