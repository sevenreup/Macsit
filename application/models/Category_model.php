<?php
	class Category_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_categories($slug = FALSE, $limit = 4, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($slug === FALSE){
				$this->db->order_by('name');
				$query = $this->db->get('categories');
				return $query->result_array();
			}

			$query = $this->db->get_where('categories', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_category($category_image){

			$data = array(
				'name' => $this->input->post('name'),
				'user_id' => $this->session->userdata('user_id'),
				'category_image' => $category_image
			);

			return $this->db->insert('categories', $data);
		}

		public function get_category($id){
			$query = $this->db->get_where('categories', array('id' => $id));
			return $query->row();
		}

		public function delete_category($id){
			$image_file_name = $this->db->select('category_image')->get_where('categories', array('id' => $id))->row()->category_image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\categories\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory
			$this->db->where('id', $id);
			$this->db->delete('categories');
			return true;
		}
		public function get_categories_by_user($id, $offset = 0, $limit = 0)
		{
			if($limit){
				$this->db->limit($limit, $offset);
			}
			$this->db->order_by('categories.id', 'DESC');
			$this->db->join('users', 'users.id = categories.user_id');
				$query = $this->db->get_where('categories', array('user_id' => $id));
			return $query->result_array();
		}
	}