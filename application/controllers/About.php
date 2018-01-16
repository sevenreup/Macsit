<?php

	class About extends CI_Controller
	{
		public function index()
		{
			$data['title'] = 'Title';
			$data['member_info'] = $this->about_model->get_member();
			//$id = $data['member_info']['user_id'];
			//$data['member'] = $this->about_model->get_users($id);
			$data['categories'] = $this->category_model->get_categories();
			
			$this->load->view('templates/header');
			$this->load->view('about/index', $data);
			$this->load->view('templates/footer');
		}
		public function position($pos_slug = false)
		{
			$data['title'] = 'member info';
			$data['member_info'] = $this->about_model->get_member($pos_slug);
			$data['categories'] = $this->category_model->get_categories();
			
			$this->load->view('templates/header');
			$this->load->view('about/users', $data);
			$this->load->view('templates/footer');
		}
		public function services()
		{
			$i = 1;
			$data['in'] = $i;
			$data['title'] = 'Services';
			$data['services'] = $this->about_model->get_service();
			$data['categories'] = $this->category_model->get_categories();
			
			$this->load->view('templates/header');
			$this->load->view('about/services', $data);
			$this->load->view('templates/footer');
		}
	}

?>