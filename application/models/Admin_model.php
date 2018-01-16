<?php
	class Admin_model extends CI_Model{
		
		public function __construct()
		{
			$this->load->database();
		}
		
		public function get_users($id = 0)
		{
			$query = $this->db->get_where('users', array('admini_id' => $id));
			return $query->result_array();
		}
		
		public function get_unused_position($id = 0.1)
		{
			$query = $this->db->get_where('position', array('user_id' => $id));
			return $query->result_array();
		}
		
		public function get_user($slug = FALSE, $limit = FALSE, $offset = FALSE)
		{
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($slug === FALSE){
				$this->db->order_by('users.id', 'DESC');
				//$this->db->join('posts', 'posts.user_id = users.id');
				//$this->db->join('users', 'users.id = posts.user_id');
				$query = $this->db->get('users');
				return $query->result_array();
			}

			$query = $this->db->get_where('users', array('slug' => $slug));
			return $query->row_array();
		}
		
		public function create_position($admin = 1, $post_image)
		{
			$pos_slug = url_title($this->input->post('name'));
			$priv = array(
				'admini_id' => $admin
			);
			$data = array(
				'user_id' => $this->input->post('user_id'),
				'position_name' => $this->input->post('name'),
				'duties' => $this->input->post('duties'),
				'more_info' => $this->input->post('info'),
				'pos_slug' => $pos_slug,
				'post_image' => $post_image
			);
			
			$this->db->where('id',  $this->input->post('user_id'));
			$this->db->update('users', $priv);
			return $this->db->insert('position', $data);
		}
		
		public function create_services($service_img)
		{
			$slug = url_title($this->input->post('name'));
			
			$data = array(
				'name' => $this->input->post('name'),
				'overview' => $this->input->post('overview'),
				'info' => $this->input->post('info'),
				'slug' => $slug,
				'icon' => $this->input->post('icon'),
				'service_img' => $service_img
			);
			return $this->db->insert('services', $data);
		}
		public function create_event($event_img)
		{
			$slug = url_title($this->input->post('title'));
			
			$data = array(
				'event_title' => $this->input->post('title'),
				'event_place' => $this->input->post('place'),
				'event_date' => $this->input->post('date'),
				'event_body' => $this->input->post('body'),
				'event_slug' => $slug,
				'event_img' => $event_img
			);
			return $this->db->insert('event', $data);
		}
		
		public function update_position($post_image)
		{
			$admin = 1;
			$priv = array(
				'admini_id' => $admin
			);
			$this->admin_model->delete_image($this->input->post('id'));
			$this->db->where('id',  $this->input->post('user_id'));
			$this->db->update('users', $priv);
			
			//$pos_slug = url_title($this->input->post('name'));
			
				$data = array(
				'user_id' => $this->input->post('user_id'),
				'position_name' => $this->input->post('position'),
				'duties' => $this->input->post('duties'),
				'more_info' => $this->input->post('info'),
				'pos_slug' => $this->input->post('slug'),
				'post_image' => $post_image
			);
			$this->db->where('position_id', $this->input->post('id'));
			return $this->db->update('position', $data);
		}
		
		public function delete_image($position_id)
		{
			$image_file_name = $this->db->select('post_image')->get_where('position', array('position_id' => $position_id))->row()->post_image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\users\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd);
			return true;
		}
		
		public function get_member($pos_slug = FALSE)
		{
			$query = $this->db->get_where('position', array('pos_slug' => $pos_slug));
			return $query->row_array();
		}
		
		public function check_name_exists($name)
		{
			$query = $this->db->get_where('position', array('position_name' => $name));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}
		
	}
?>