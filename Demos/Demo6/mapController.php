<?php

	class mapController extends CI_Controller{

		function map(){
		
			$data = array();
				
			$data['content'] = 'mapView';
			$this->load->view('templates/template', $data);
		
		
		}
	}
?>