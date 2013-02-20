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
				redirect('index.php/mapController');
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
					
				$this->load->model('userModel');
				
				if($this->userModel->create_member())
				{
					redirect('index.php/mapController');

				}
				else
				{
					redirect('index.php/marketingController/index');
				
				}
			
			
		}
		
		function logout()
		{
			$this->session->sess_destroy();
		
			$data['content'] = 'marketingView';
			$this->load->view('templates/template', $data);		
			
		}

}
?>