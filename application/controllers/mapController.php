<?php

	class mapController extends CI_Controller{
	    
		function index(){
		
			$data = array();
				
			$data['content'] = 'mapView';
			$this->load->view('templates/template', $data);
		
		
		}
		function searchView(){
			
			$this->load->helper('url');

		    // ensure user is signed in
		    if ($this->session->userdata('is_logged_in')) {
			    echo "you're logged in";

		    }else{
		    
				$data = array();
					
				$data['content'] = 'searchView';
				$this->load->view('templates/template', $data);
			}
			
		
		}
		function search(){
			/*
				search the database for locations
			*/
			
		}
		function POI(){
			/*
				show points of interest
			*/
			
		}
		
		function suggestaspotView(){
		
			$data['content'] = 'sasView';
			$this->load->view('templates/template', $data);			
		
		}
		function suggestaspot(){
			$this->load->model('mapModel');
			$query = $this->mapModel->suggestaspot();
			
			
			redirect('index.php/mapController');

			
		}
		
		

	}
?>