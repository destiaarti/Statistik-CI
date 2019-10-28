<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kependudukan extends CI_Model {
	
	public function tampil() {
		$this->db->select('tb_kependudukan.*, tb_desa.*');
		$this->db->from('tb_kependudukan');
		$this->db->join('tb_desa', 'tb_kependudukan.id_desa = tb_desa.id_desa');
		return $this->db->get()->result();
	}

	public function get_kependudukan_count() {
		$data = $this->db->query('select count(*) as count from tb_kependudukan');	
		return $data->result();
	}

	public function mutasi() {
		$this->db->select('tb_mutasi_kependudukan.*, tb_desa.*');
		$this->db->from('tb_mutasi_kependudukan');
		$this->db->join('tb_desa', 'tb_mutasi_kependudukan.id_desa = tb_desa.id_desa');
		return $this->db->get()->result();
	}

// 	public function hapus_kependudukan($id_desa){ //fungsi delete berdasarkan id
//     $this->db->where('id_desa',$id_desa); //pencocokan id, dimana id_transaksi == inputan $id_transaksi
//     $this->db->delete('tb_kependudukan'); //eksekusi
//     return;
// }

	public function hapus_kependudukan ($id_kependudukan){
		$hasil=$this->db->query("DELETE FROM tb_kependudukan WHERE id_kependudukan='$id_kependudukan'");
		return $hasil;
	}

	public function hapus_mutasi ($id_mutasi){
		$hasil=$this->db->query("DELETE FROM tb_mutasi_kependudukan WHERE id_mutasi='$id_mutasi'");
		return $hasil;
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function input_data_mutasi($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_data($where,$table){		
		return $this->db->get_where($table, $where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function edit_data_mutasi($where,$table){		
		return $this->db->get_where($table, $where);
	}

	public function update_data_mutasi($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function edit_data_umur($where,$table){		
		return $this->db->get_where($table, $where);
	}

	public function update_data_umur($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

