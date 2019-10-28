<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	
	public function tampil() {
		$this->db->select('users.*, data_admin.*');
		$this->db->from('users');
		$this->db->join('data_admin', 'users.id_user = data_admin.id_user');
		return $this->db->get()->result();
	}

	//tampil 2
	public function tampil2() {
		$this->db->select('users.*, data_admin.*');
		$this->db->from('users');
		$this->db->join('data_admin', 'users.id_user = data_admin.id_user');
		return $this->db->get()->result();
	}

	public function hapus_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function tambah($data)
	{
		$data_table_user = [
			'username' => $data['username'],
			'password' => sha1($data['password']), // menggunakan enkripsi sha1
			'privilege' => $data['privilege'],
			'bagian' => $data['bagian'],
		];

		$this ->db->insert('users', $data_table_user);

		$id_user = $this->db->query('SELECT id_user FROM users ORDER BY id_user DESC LIMIT 1');
		//mengurutkan data terbesar/data terakhit
		$id_user = $id_user->result()[0]->id_user;
		
		$data_table_admin = [
			'id_user' => $id_user,
			'nip' => $data['nip'],
			'nama' => $data['nama'],
			'golongan' => $data['golongan'],
			'tempat_lahir' => $data['tempat_lahir'],
			'tanggal_lahir' => $data['tanggal_lahir'],
			'pendidikan' => $data['pendidikan'],
			'jenis_kelamin' => $data['jenis_kelamin']
		];

		$this ->db->insert('data_admin', $data_table_admin);
		return true;
	}

	public function edit_data($where,$table){		
		return $this->db->get_where($table, $where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

