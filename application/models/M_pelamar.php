<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelamar extends CI_Model {

	public function tampil() {
		$this->db->join('data_pelamar', 'users.id_user = data_pelamar.id_user');
		$this->db->like('data_pelamar.kondisi','Ya');
		$data = $this->db->get('users');

		return $data->result();
	}
	public function tampil2() {
		$this->db->join('data_pelamar', 'users.id_user = data_pelamar.id_user');
		$this->db->like('data_pelamar.kondisi','Tidak');
		$data = $this->db->get('users');

		// die(var_dump($data->result()));

		return $data->result();
	}
	public function get($id) {
		$user_data = $this->db->query('SELECT * FROM users where id_user=' . $id);
		$user_data = $user_data->result()[0];
		$pelamar_data = $this->db->query('SELECT * FROM data_pelamar where id_user=' . $id);
		$pelamar_data = $pelamar_data->result()[0];

		$data = [
			'user_data' => $user_data,
			'pelamar_data' => $pelamar_data,
		];

		return $data;
	}

	public function edit($data) {
		$id_user = $data['id_user'];
		if ($data['password'] == NULL) {
			$data_table_user = [
				'username' => $data['username'],
				'privilege' => $data['privilege'],
			];
		} else {
			$data_table_user = [
				'username' => $data['username'],
				'password' => sha1($data['password']),
				'privilege' => $data['privilege'],
			];
		}

		$this->db->where('id_user', $id_user);
		$this->db->update('users', $data_table_user);

		$id_admin = $this->db->query('SELECT id FROM data_admin where id_user=' . $id_user);
		$id_admin = $id_admin->result()[0]->id;

		$data_table_admin = [
			'nip' => $data['nip'],
			'nama' => $data['nama']
		];

		$this->db->where('id', $id_admin);
		$this->db->update('data_admin', $data_table_admin);

		return true;
	}

	public function hapus ($data){
		$hasil=$this->db->query("DELETE FROM data_pelamar WHERE id_user='$id_user'");
		return $hasil;
	}

	public function delete_to_history($id_user = FALSE){
		$this->db->where('id_user', $id_user);
		return $this->db->update('data_pelamar', array('kondisi' => 'Tidak'));
	}
}
