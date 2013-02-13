<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	class userController extends CI_Controller{
		
		function login()
		{	
			
			$data['content'] = 'loginView';
			$this->load->view('templates/template', $data);		
		}
		
		function check_member()
		{		
			$this->load->model('userModel');
			$query = $this->userModel->validate();
			
			if($query) // if the user's credentials validated...
			{
				$data = array(
					'user_email' => $this->input->post('user_email'),
					'is_logged_in' => true
				);
				$this->session->set_userdata($data);
				redirect('index.php/site/members_area');
			}
			else // incorrect username or password
			{
				redirect('index.php/marketingController/index');

			}
		}	
		
		function register()
		{
			$data['content'] = 'registerView';
			$this->load->view('templates/template', $data);
		}
		
		function create_member()
		{
			/*$this->load->library('form_validation');
			
			// field name, error message, validation rules
			$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
			
		
			if($this->form_validation->run() == FALSE)
			{
				redirect('index.php/marketingController');
			}
			
			else
			{*/			
				$this->load->model('userModel');
				
				if($query = $this->userModel->create_member())
				{
					$data['content'] = 'members_area';
					$this->load->view('templates/template', $data);
				}
				else
				{
					redirect('index.php/marketingController/index');
				
				}
			//}
			
		}
		
		function logout()
		{
			$this->session->sess_destroy();
		
			$data['content'] = 'marketingView';
			$this->load->view('templates/template', $data);		
			
		}

}
?>