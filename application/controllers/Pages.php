<?php
	class Pages extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			if( $page === 'home'){
				$offset = 0;
				$data['title'] = 'Home';
				$data['events'] = $this->about_model->get_events(FALSE, 4, $offset);
				$data['recent_posts'] = $this->post_model->get_posts(FALSE, 3, $offset);
				$data['services'] = $this->about_model->get_service(6, $offset);
			}
			$data['title'] = ucfirst($page);

			$data['categories'] = $this->category_model->get_categories();

			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}