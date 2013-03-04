<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class marketingController extends CI_Controller{

		function index(){
			$this->load->helper('url');

			if ($this->session->userdata('is_logged_in')){
				
				redirect("index.php/mapController");
							
			}else{
		
				$data = array();
					
				$data['content'] = 'marketingView';
				$this->load->view('templates/template', $data);
			}
		
		}
	}
?>