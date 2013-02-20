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
				$userData = array(
					'user_email' => $this->input->post('user_email'),
					'is_logged_in' => TRUE
				);
				

				$this->session->set_userdata($userData);

				$data['content'] = 'mapView';
				
				$this->load->view('templates/member_template', $data);	
							
			
			}else{ // incorrect username or password
			
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
					$data['content'] = 'mapView';
					$this->load->view('templates/member_template', $data);

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