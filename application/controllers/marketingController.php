<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class marketingController extends CI_Controller{

		function index(){
		
			$data = array();
				
			$data['content'] = 'marketingView';
			$this->load->view('templates/template', $data);
		
		
		}
	}
?>