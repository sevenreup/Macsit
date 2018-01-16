<?php

	class About_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}
		
		public function get_member_info()
		{
			$query = $this->db->get('position');
			return $query->result_array();
		}
		
		public function get_service($limit = FALSE, $offset = FALSE)
		{
			if($limit){
				$this->db->limit($limit, $offset);
			}
			$query = $this->db->get('services');
			return $query->result_array();
		}
		
		public function get_member($pos_slug = FALSE, $limit = FALSE, $offset = FALSE)
		{
			if($limit){
				$this->db->limit($limit, $offset);
			}

			if($pos_slug === FALSE){
				$this->db->order_by('position.position_id', 'DESC');
				$this->db->join('users', 'users.id = position.user_id');
				$query = $this->db->get('position');
				return $query->result_array();
			}
			$this->db->join('users', 'users.id = position.user_id');
			$query = $this->db->get_where('position', array('pos_slug' => $pos_slug));
			return $query->row_array();
		}
		
		public function get_users($id)
		{
			$query = $this->db->get_where('users', array('id' => $id));
			return $query->result_array();
		}
		
		public function get_events($slug = FALSE, $limit = FALSE, $offset = FALSE)
		{
			if($limit){
				$this->db->limit($limit, $offset);
			}
			
			if($slug === FALSE){
				$this->db->order_by('event.id', 'DESC');
				$query = $this->db->get('event');
				return $query->result_array();
			}
			$query = $this->db->get_where('event', array('event_slug' => $slug));
			return $query->row_array();
		}
	}
?>