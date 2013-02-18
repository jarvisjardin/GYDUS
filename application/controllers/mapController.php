<?php

	class mapController extends CI_Controller{

		function index(){
		
			$data = array();
				
			$data['content'] = 'mapView';
			$this->load->view('templates/template', $data);
		
		
		}
		function searchView(){
		
			$data = array();
				
			$data['content'] = 'searchView';
			$this->load->view('templates/template', $data);
		
		
		}

	}
?>