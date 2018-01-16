<?php
	class User_model extends CI_Model{
		public function register($enc_password){
			$slug = url_title($this->input->post('username'));
			// User data array
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $enc_password,
                'birthday' => $this->input->post('birthday'),
				'slug' => $slug
			);

			// Insert user
			return $this->db->insert('users', $data);
		}

		// Log user in
		public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('users');

			if($result->num_rows() == 1){
				return $result->row(0)->id;
			} else {
				return false;
			}
		}
		public function get_email($username)
		{
			$this->db->where('username', $username);
			$result = $this->db->get('users');
			if($result->num_rows() == 1){
				return $result->row(0)->email;
			} else {
				return false;
			}
		}
		
		// Check username exists
		public function check_username_exists($username)
		{
			$query = $this->db->get_where('users', array('username' => $username));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		// Check email exists
		public function check_email_exists($email)
		{
			$query = $this->db->get_where('users', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}
		
		public function check_if_admin($username)
		{
			$this->db->where('username', $username);
			$result = $this->db->get('users');
			if($result->num_rows() == 1){
				return $result->row(7)->admini_id;
			} else {
				return false;
			}
		}
	}