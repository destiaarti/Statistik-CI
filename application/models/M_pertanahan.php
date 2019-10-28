<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pertanahan extends CI_Model {
	
	public function tampil() {
		$this->db->select('tb_tanah_bengkok.*, tb_desa.*');
		$this->db->from('tb_tanah_bengkok');
		$this->db->join('tb_desa', 'tb_tanah_bengkok.id_desa = tb_desa.id_desa');
		return $this->db->get()->result();
	}


	public function luas_wilayah() {
		$this->db->select('tb_luas_wilayah.*, tb_desa.*');
		$this->db->from('tb_luas_wilayah');
		$this->db->join('tb_desa', 'tb_luas_wilayah.id_desa = tb_desa.id_desa');
		return $this->db->get()->result();
	}

	public function luas_tanah_kering() {
		$this->db->select('tb_luas_tanah_kering.*, tb_desa.*');
		$this->db->from('tb_luas_tanah_kering');
		$this->db->join('tb_desa', 'tb_luas_tanah_kering.id_desa = tb_desa.id_desa');
		return $this->db->get()->result();
	}

	public function luas_tanah_sawah() {
		$this->db->select('tb_luas_tanah_sawah.*, tb_desa.*');
		$this->db->from('tb_luas_tanah_sawah');
		$this->db->join('tb_desa', 'tb_luas_tanah_sawah.id_desa = tb_desa.id_desa');
		return $this->db->get()->result();
	}


	public function bengkokCount() {
		$data = $this->db->query('select count(*) as count from tb_tanah_bengkok');	
		return $data->result();
	}

	public function wilayahCount() {
		$data = $this->db->query('select count(*) as count from tb_luas_wilayah');	
		return $data->result();
	}

	public function tanahkeringCount() {
		$data = $this->db->query('select count(*) as count from tb_luas_tanah_kering');	
		return $data->result();
	}

	public function tanahsawahCount() {
		$data = $this->db->query('select count(*) as count from tb_luas_tanah_sawah');	
		return $data->result();
	}

	public function hapus_bengkok ($id_tanah_bengkok){
		$hasil=$this->db->query("DELETE FROM tb_tanah_bengkok WHERE id_tanah_bengkok='$id_tanah_bengkok'");
		return $hasil;
	}

	public function hapus_luas_wilayah ($id_luas_wilayah){
		$hasil=$this->db->query("DELETE FROM tb_luas_wilayah WHERE id_luas_wilayah='$id_luas_wilayah'");
		return $hasil;
	}

	public function hapus_tanah_kering ($id_tanah_kering){
		$hasil=$this->db->query("DELETE FROM tb_luas_tanah_kering WHERE id_tanah_kering='$id_tanah_kering'");
		return $hasil;
	}

	public function hapus_tanah_sawah ($id_tanah_sawah){
		$hasil=$this->db->query("DELETE FROM tb_luas_tanah_sawah WHERE id_tanah_sawah='$id_tanah_sawah'");
		return $hasil;
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function input_data_luas($data,$table){
		$this->db->insert($table,$data);
	}

	public function input_data_kering($data,$table){
		$this->db->insert($table,$data);
	}

	public function input_data_sawah($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_data_bengkok($where,$table){		
		return $this->db->get_where($table, $where);
	}

	public function update_data_bengkok($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function edit_data_luas($where,$table){		
		return $this->db->get_where($table, $where);
	}

	public function update_data_luas($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function edit_data_kering($where,$table){		
		return $this->db->get_where($table, $where);
	}

	public function update_data_kering($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function edit_data_sawah($where,$table){		
		return $this->db->get_where($table, $where);
	}

	public function update_data_sawah($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}