<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	
	public function tampil() {

		$this->db->join('data_admin', 'users.id_user = data_admin.id_user');	
		$data = $this->db->get('users');

		return $data->result();
	}

	public function tambah($data)
	{
		$data_table_user = [
			'username' => $data['username'],
			'password' => sha1($data['password']), // menggunakan enkripsi sha1
			'privilege' => $data['privilege'],
		];

		$this ->db->insert('users', $data_table_user);

		$id_user = $this->db->query('SELECT id_user FROM users ORDER BY id_user DESC LIMIT 1');
		//mengurutkan data terbesar/data terakhit
		$id_user = $id_user->result()[0]->id_user;
		
		$data_table_admin = [
			'nip' => $data['nip'],
			'id_user' => $id_user,
			'nama' => $data['nama']
		];

		$this ->db->insert('data_admin', $data_table_admin);
		return true;
	}

	public function get($id) {
		$user_data = $this->db->query('SELECT * FROM users where id_user=' . $id);
		$user_data = $user_data->result()[0];
		$admin_data = $this->db->query('SELECT * FROM data_admin where id_user=' . $id);
		$admin_data = $admin_data->result()[0];

		$data = [
			'user_data' => $user_data,
			'admin_data' => $admin_data,
		];

		return $data;
	}

	public function edit($data) { //edit data admin
		$id_user = $data['id_user'];
		if ($data['password'] == NULL) { //digunakan jika password tidak diiisi
			$data_table_user = [
				'username' => $data['username'],
				'privilege' => $data['privilege'],
			];
		} else {
			$data_table_user = [  //digunakan jika password diisi
			'username' => $data['username'],
			'password' => sha1($data['password']),
			'privilege' => $data['privilege'],
		];
	}

		$this->db->where('id_user', $id_user); //where id user
    	$this->db->update('users', $data_table_user); //update di tabel user

    	$id_admin = $this->db->query('SELECT id FROM data_admin where id_user=' . $id_user);
    	$id_admin = $id_admin->result()[0]->id;
    	
    	$data_table_admin = [
    		'nip' => $data['nip'],
    		'nama' => $data['nama']
    	];

		$this->db->where('id', $id_admin); //where id admin
    	$this->db->update('data_admin', $data_table_admin); //update di tabel admin
    	return true;
    }
}
