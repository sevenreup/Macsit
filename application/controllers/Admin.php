<?php
	class Admin extends CI_Controller{
		
		public function index($offset = 0)
		{
			if(!$this->session->userdata('admin')){
				redirect('users/login');
			}
			$data['title'] = 'Dashboard';
			
			$config['per_page'] = 5;

			$data['posts'] = $this->post_model->get_posts(FALSE, $config['per_page'], $offset);
			
			$data['categories'] = $this->category_model->get_categories(FALSE, $config['per_page'], $offset);
			$data['users'] = $this->admin_model->get_users();
			$data['admins'] = $this->admin_model->get_users(1);
			
			$this->load->view('templates/header');
			$this->load->view('admin/index', $data);
			$this->load->view('templates/footer');
		}
		
		public function user($slug = NULL)
		{
			if(!$this->session->userdata('admin')){
				redirect('users/login');
			}
			$data['user'] = $this->admin_model->get_user($slug);
			$user_id = $data['user']['id'];
			$data['categories'] = $this->category_model->get_categories();
			$data['m_category'] = $this->category_model->get_categories_by_user($data['user']['id'], 20, 0);
			$data['posts'] = $this->post_model->get_posts_by_user($data['user']['id'], 20, 0);

			if(empty($data['user'])){
				show_404();
			}

			$data['title'] = $data['user']['username'];
			
			$this->load->view('templates/header');
			$this->load->view('admin/user_view', $data);
			$this->load->view('templates/footer');
		}
		
		public function pages()
		{
			if(!$this->session->userdata('admin')){
				redirect('users/login');
			}
			
			$data['title'] = 'Edit page info';
			//$data['positions'] = $this->admin_model->get_positions();
			$data['positions'] = $this->about_model->get_member();
			$data['unused_pos'] =$this->admin_model->get_unused_position(0.1);
			$data['categories'] = $this->category_model->get_categories();

			$this->form_validation->set_rules('title', 'title', 'required|callback_check_name_exists');
			if($this->form_validation->run() === FALSE)
			{

			} else
			{
				// Upload Image
				$config['upload_path'] = './assets/images/events';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$event_img = 'noimage.jpg';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$event_img = $_FILES['userfile']['name'];
				}
				
				$this->admin_model->create_event($event_img);
				$this->session->set_flashdata('event_created', 'Your event has been created');

				redirect('admin');		
			}
			$this->load->view('templates/header');
			$this->load->view('admin/edit_pages', $data);
			$this->load->view('templates/footer');
		}
		
		public function create_position()
		{
			if(!$this->session->userdata('admin')){
				redirect('users/login');
			}
			
			$data['title'] = 'create position';
			$data['categories'] = $this->category_model->get_categories();
			$data['unused_pos'] =$this->admin_model->get_users();
			
			$this->form_validation->set_rules('name', 'Name', 'required|callback_check_name_exists');
			$this->form_validation->set_rules('duties', 'Duties', 'required');
			$this->form_validation->set_rules('info', 'Info', 'required');
			
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('admin/create_position', $data);
				$this->load->view('templates/footer');
			} else {
				$admin = 1;
				// Upload Image
				$config['upload_path'] = './assets/images/users';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$post_image = 'noimage.jpg';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$post_image = $_FILES['userfile']['name'];
				}
				
				$this->admin_model->create_position($admin, $post_image);
				$this->session->set_flashdata('position_created', 'Your position has been created');

				redirect('admin/pages');
			}
			
			
		}
		public function edit_position($pos_slug)
		{
			if(!$this->session->userdata('admin')){
				redirect('users/login');
			}
			
			$data['position'] = $this->admin_model->get_member($pos_slug);
			$data['users'] = $this->admin_model->get_users();
			
			if(empty($data['position'])){
				show_404();
			}
			//$data['users'] = $this->admin_model->get_user();
			$data['categories'] = $this->category_model->get_categories();
			$data['title'] = 'Edit position';
			
			$this->load->view('templates/header');
			$this->load->view('admin/edit_position', $data);
			$this->load->view('templates/footer');
		}
		
		public function update()
		{
			if(!$this->session->userdata('admin')){
				redirect('users/login');
			}
			$config['upload_path'] = './assets/images/users';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$post_image = 'noimage.jpg';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$post_image = $_FILES['userfile']['name'];
				}

			$this->admin_model->update_position($post_image);

			// flash messages
			$this->session->set_flashdata('position_updated', 'The position has been updated');

			redirect('admin/pages');
		}
		// check if position name exists
		public function check_name_exists($name)
		{
			$this->form_validation->set_message('check_name_exists', 'That position is arleady in use. Please choose a different one');
			if($this->admin_model->check_name_exists($name)){
				return true;
			} else {
				return false;
			}
		}
		
		public function create_services()
		{
			if(!$this->session->userdata('admin')){
				redirect('users/login');
			}
			
			$data['title'] = 'create services';
			$data['categories'] = $this->category_model->get_categories();
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('info', 'Info', 'required');
			
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('admin/create_service', $data);
				$this->load->view('templates/footer');
			} else {
				$config['upload_path'] = './assets/images/services';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$service_img = 'noimage.jpg';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$service_img = $_FILES['userfile']['name'];
				}
				
				
				$this->admin_model->create_services($service_img);
				$this->session->set_flashdata('position_created', 'Your position has been created');

				redirect('admin/pages');
			}
	}
		
		public function view_cat_post($offset = 0)
		{
			if(!$this->session->userdata('admin')){
				redirect('users/login');
			}
			$data['title'] = 'View all Post and Category';
			// Pagination Categories Config	
			$cat_config['base_url'] = base_url() . 'admin/view_cat_post/';
			$cat_config['total_rows'] = $this->db->count_all('categories');
			$cat_config['per_page'] = 5;
			$cat_config['uri_segment'] = 3;
			$cat_config['attributes'] = array('class' => 'pagination-link');
			
			$post_config['base_url'] = base_url() . 'admin/view_cat_post/';
			$post_config['total_rows'] = $this->db->count_all('categories');
			$post_config['per_page'] = 5;
			$post_config['uri_segment'] = 3;
			$post_config['attributes'] = array('class' => 'pagination-link');


			// Init Pagination
			$this->pagination->initialize($cat_config);
			$this->pagination->initialize($post_config);

			$data['posts'] = $this->post_model->get_posts(FALSE, $post_config['per_page'], $offset);
			
			$data['categories'] = $this->category_model->get_categories(FALSE, $cat_config['per_page'], $offset);
			$data['users'] = $this->admin_model->get_users();
			$data['admins'] = $this->admin_model->get_users(1);
			
			$this->load->view('templates/header');
			$this->load->view('admin/view_content', $data);
			$this->load->view('templates/footer');
		}
	}
?>