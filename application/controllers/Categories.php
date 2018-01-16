<?php
	class Categories extends CI_Controller{
		public function index($offset = 0){
			$data['title'] = 'Categories';
			$config['base_url'] = base_url() . 'categories/index/';
			$config['total_rows'] = $this->db->count_all('posts');
			$config['per_page'] = 20;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-link');

			// Init Pagination
			$this->pagination->initialize($config);

			$data['m_category'] = $this->category_model->get_categories(FALSE, $config['per_page'], $offset);
			$data['categories'] = $this->category_model->get_categories();

			$this->load->view('templates/header');
			$this->load->view('categories/index', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			
			$data['title'] = 'Create Category';
			$data['categories'] = $this->category_model->get_categories();

			$this->form_validation->set_rules('name', 'Name', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('categories/create', $data);
				$this->load->view('templates/footer');
			} else {
				// upload categoly image
				$config['upload_path'] = './assets/images/categories';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$category_image = 'noimage.jpg';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$category_image = $_FILES['userfile']['name'];
				}
				// end
				$this->category_model->create_category($category_image);

				// Set message
				$this->session->set_flashdata('category_created', 'Your category has been created');

				redirect('categories');
			}
		}

		public function posts($id){
			$data['title'] = $this->category_model->get_category($id)->name;

			$data['posts'] = $this->post_model->get_posts_by_category($id);
			$data['categories'] = $this->category_model->get_categories();

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}

		public function delete($id){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->category_model->delete_category($id);

			// Set message
			$this->session->set_flashdata('category_deleted', 'Your category has been deleted');

			redirect('categories');
		}
	}