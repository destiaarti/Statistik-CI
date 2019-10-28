<?php //enkripsi ada di file register, M_admin, M_pelamar, M_users
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model {
	
	public function tampil($username, $password) {
		$this->db->select('users.*');
		$this->db->from('users');
		$this->db->where('users.username', $username);
		$this->db->where('users.password', sha1($password));	
		$data = $this->db->get();

		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			return false;
		}
	}

	public function printId($user)
	{
		$this->db->select('id_user');
		$this->db->from('users');
		$this->db->where('username', $user);
		$data = $this->db->get();

		foreach ($data->result() as $key) {
			return $key->id_user;
		}
	}

	public function get_all($table, $limit=0, $offset=0, $order_by='id', $asc='ASC')
	{
		$this->db->from($table);

		return $this->db->get();
	}
	
	public function tes() {
		$this->db->select('data_pelamar.*, data_tambahan.tempat_kerja, data_tambahan.alamat_lengkap, data_tambahan.umur_asli');
		$this->db->from('data_pelamar');
		$this->db->join('data_tambahan', 'data_tambahan.id_pelamar = data_pelamar.id_user');
		$this->db->like('data_pelamar.kondisi','Ya');
		$this->db->order_by('id','ASC');
		return $this->db->get()->result();
	}
	public function get_where($table, $data, $limit=0, $page=0, $order='id', $order_by='asc')
	{
		$this->db->from($table);
		$this->db->where($data);

		return $this->db->get();
	}
	public function add_field($table, $data)
	{
		if ($this->db->insert($table,$data)) {
			return TRUE;
		} else {
			return $this->db->error();	    	
		}
	}
	public function update_field($table,$data,$id)
	{
		if($this->db->update($table, $data, $id))
			return TRUE;
		else 
			return $this->db->error();
	}
	public function select_max($kolom)
	{
		$this->db->select_min($kolom, 'kolom'); //digunakan untuk 
		$this->db->like('data_pelamar.kondisi','Ya');
		$query = $this->db->get('data_pelamar')->result(); 
		foreach ($query as $key) {
			return $key->kolom;
		}
	}
	public function select_min($kolom)
	{
		$this->db->select_max($kolom, 'kolom');
		$this->db->like('data_pelamar.kondisi','Ya');
		$query = $this->db->get('data_pelamar')->result(); // Produces: SELECT MAX(age) as member_age FROM members
		foreach ($query as $key) {
			return $key->kolom;
		}
	}
	public function rangking() {
		$this->db->select('id_user, nama, pend as k1, peng_kerja as k2, kesehatan as k3, usia as k4, alamat as k5, micro as k6, test_it as k7, alquran_arab as k8, tpa_psi as k9, moral as k10,
			(SELECT min(pend) FROM data_pelamar) as m_pend, 
			(SELECT min(peng_kerja) FROM data_pelamar) as m_kerja, 
			(SELECT max(kesehatan) FROM data_pelamar) as m_kes, 
			(SELECT max(usia) FROM data_pelamar) as m_usia, 
			(SELECT max(alamat) FROM data_pelamar) as m_alamat, 
			(SELECT min(micro) FROM data_pelamar) as m_micro, 
			(SELECT min(test_it) FROM data_pelamar) as m_test, 
			(SELECT min(alquran_arab) FROM data_pelamar) as m_alq, 
			(SELECT min(tpa_psi) FROM data_pelamar) as m_tpa, 
			(SELECT min(pend) FROM data_pelamar) as m_moral, 
			(SELECT nilai FROM data_kriteria WHERE kode_kriteria=k1)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_pend)*15 as nilai_k1, 
			(SELECT nilai FROM data_kriteria WHERE kode_kriteria=k2)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_kerja)*5 as nilai_k2 , 
			(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_kes)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=k3)*15 as nilai_k3 , 
			(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_usia)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=k4)*10 as nilai_k4 , 
			(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_alamat)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=k5)*5 as nilai_k5 , 
			(SELECT nilai FROM data_kriteria WHERE kode_kriteria=k6)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_micro)*5 as nilai_k6 , 
			(SELECT nilai FROM data_kriteria WHERE kode_kriteria=k7)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_test)*10 as nilai_k7 , 
			(SELECT nilai FROM data_kriteria WHERE kode_kriteria=k8)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_alq)*15 as nilai_k8 , 
			(SELECT nilai FROM data_kriteria WHERE kode_kriteria=k9)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_tpa)*10 as nilai_k9 , 
			(SELECT nilai FROM data_kriteria WHERE kode_kriteria=k10)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_moral)*10 as nilai_k10, 
			((SELECT nilai FROM data_kriteria WHERE kode_kriteria=k1)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_pend)*15)+((SELECT nilai FROM data_kriteria WHERE kode_kriteria=k2)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_kerja)*5)+((SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_kes)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=k3)*15)+((SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_usia)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=k4)*10)+((SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_alamat)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=k5)*5)+((SELECT nilai FROM data_kriteria WHERE kode_kriteria=k6)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_micro)*5)+((SELECT nilai FROM data_kriteria WHERE kode_kriteria=k7)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_test)*10)+((SELECT nilai FROM data_kriteria WHERE kode_kriteria=k8)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_alq)*15 )+((SELECT nilai FROM data_kriteria WHERE kode_kriteria=k9)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_tpa)*10)+((SELECT nilai FROM data_kriteria WHERE kode_kriteria=k10)/(SELECT nilai FROM data_kriteria WHERE kode_kriteria=m_moral)*10) as total');
		$this->db->from('data_pelamar');
		$this->db->like('data_pelamar.kondisi','Ya');
		$this->db->order_by('total', 'DESC'); 
		return $this->db->get();
	}
	// public function filter($tahun, $periode) {
	// 	if($periode == 1) {
	// 		$per = '1 AND 6';
	// 	} else {
	// 		$per = '7 AND 12';
	// 	}
	// 	return $this->db->query('SELECT data_pelamar.*, data_tambahan.tempat_kerja, data_tambahan.alamat_lengkap, data_tambahan.umur_asli FROM `data_pelamar` INNER JOIN data_tambahan on data_tambahan.id_pelamar=data_pelamar.id_user WHERE year(tanggal)='.$tahun.' AND month(tanggal) BETWEEN '.$per.'')->result();
	// }

	// public function filter_nilai($tahun, $periode) {
	// 	if($periode == 1) {
	// 		$per = '1 AND 6';
	// 	} else {
	// 		$per = '7 AND 12';
	// 	}
	// 	return $this->db->query('SELECT data_matriks.*, data_pelamar.tanggal FROM `data_matriks` INNER JOIN data_pelamar on data_matriks.id_pelamar=data_pelamar.id_user WHERE year(tanggal)='.$tahun.' AND month(tanggal) BETWEEN '.$per.'')->result();
	// }
}