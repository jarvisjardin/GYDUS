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
				
				$row = $query->row_array();
								
				$userData = array(
					'name' => $row['name'],
					'email' => $row['email'],
					'is_logged_in' => TRUE
				);
				

				$this->session->set_userdata($userData);

				$data['content'] = 'mapView';
				$data['name'] = $userData['name'];

				$this->load->view('templates/template', $data);	
							
			
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
				$query = $this->userModel->create_member();
				
				$row = $query->row_array();

				
				$userData = array(
					'name' => $row['name'],
					'email' => $row['email'],
					'is_logged_in' => TRUE
				);
				

				$this->session->set_userdata($userData);

				$data['name'] = $userData['name'];
				$data['content'] = 'mapView';
				$this->load->view('templates/template', $data);

				
			
		}
		
		function logout()
		{
			$this->session->sess_destroy();
		
			
			$data['content'] = 'marketingView';
			$this->load->view('templates/template', $data);		
			
		}
		
		function account_settings(){
		
			$this->load->helper('url');

			$data['name'] = $this->session->userdata('name');
			$data['content'] = 'accountSettingsView';
			$this->load->view('templates/template', $data);		
	
		
		}
		
		
	


}
?>