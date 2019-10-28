<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pertanian extends CI_Model {
	
	public function tampil2() {
		$sql = " SELECT * FROM `tb_panen_produksi " ;
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function tampil() {
		$this->db->select('tb_panen_produksi.*, tb_desa.*');
		$this->db->from('tb_panen_produksi');
		$this->db->join('tb_desa', 'tb_panen_produksi.id_desa = tb_desa.id_desa');
		return $this->db->get()->result();
	}

	public function get_pertanian_count() {
		$data = $this->db->query('select count(*) as count from tb_panen_produksi');	
		return $data->result();
	}

	public function hapus_pertanian ($id_panen){
		$hasil=$this->db->query("DELETE FROM tb_panen_produksi WHERE id_panen='$id_panen'");
		return $hasil;
	}

	public function input_data2($data,$table){
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

