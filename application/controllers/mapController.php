<?php

	class mapController extends CI_Controller{
	    
	    public $mapData;
	    
		function __construct()
	    {
	        parent::__construct();
	    }
	    
		function index(){
			
			$this->load->library('googlemaps');

			$config['center'] = '28.594461, -81.304002';
			$config['zoom'] = '18';
			$config['minifyJS'] = TRUE;
			$this->googlemaps->initialize($config);
			
		
			/*$FS3C = array();
			$FS3C['image'] = 'http://i1326.photobucket.com/albums/u657/GydusApp/FS3C_zps01d22c94.png';
			$FS3C['positionSW'] = '28.594256, -81.304249';
			$FS3C['positionNE'] = '28.594663, -81.303696';
			$this->googlemaps->add_ground_overlay($FS3C);
			
			$FS3B = array();
			$FS3B['image'] = 'http://i1326.photobucket.com/albums/u657/GydusApp/FS3B1_zps4ec72590.png';
			$FS3B['positionSW'] = '28.594906, -81.304305';
			$FS3B['positionNE'] = '28.595417, -81.303560';
			$this->googlemaps->add_ground_overlay($FS3B);
			*/
			
		
		
			$data = array();
			$data['content'] = 'mapView';
			$data['map'] = $this->googlemaps->create_map();

			$this->load->helper('url');

			if ($this->session->userdata('is_logged_in')){	
				$data['userData'] = $this->session->all_userdata();
			};			
				

			$this->load->view('templates/template',$data);
		}	
		
		/*this function doesn't do anything yet*/
		function searchView(){
			
			$this->load->helper('url');

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
			
			$this->load->library('googlemaps');
		
			$this->load->model('mapModel');
			$query = $this->mapModel->search();
			
			$marker = array();

						
			if($query){
							    
			   $this->load->library('googlemaps');

				$config['center'] = '28.594461, -81.304002';
				$config['zoom'] = '18';
				$config['minifyJS'] = TRUE;

				$this->googlemaps->initialize($config);
				
				
				foreach ($query->result() as $coordinate) {
				 	$marker = array();
				 	$marker['position'] = $coordinate->latitude.','.$coordinate->longitude;
				 	$this->googlemaps->add_marker($marker);
				 }
					
				$data = array();
				$data['content'] = 'mapView';
				$data['map'] = $this->googlemaps->create_map();
	
				$this->load->helper('url');
	
				if ($this->session->userdata('is_logged_in')){	
					$data['userData'] = $this->session->all_userdata();
				};			
					
	
				$this->load->view('templates/template',$data);			 			   
		
			}else{
				
				echo "No Results";
			}
					
		}
		function POI(){
			/*
				show points of interest
			*/
			
		}
		
		function suggestaspotView(){
			
			$sasPos;
			
			$this->load->library('googlemaps');

			$config['center'] = '28.594461, -81.304002';
			$config['zoom'] = '18';
			$config['minifyJS'] = TRUE;
			$this->googlemaps->initialize($config);
			
			$marker = array();
			$marker['position'] = '28.594461, -81.304002';
			$marker['draggable'] = true;
			$marker['ondragend'] = '$("#sasLng").val(event.latLng.lng());$("#sasLat").val(event.latLng.lat());$("#sasPrompt").text("Perfect! Make sure thats where you want it.");';
			$marker['animation'] = 'DROP';
			$this->googlemaps->add_marker($marker);
			
			$this->load->helper('url');

			if ($this->session->userdata('is_logged_in')){	
				$data['userData'] = $this->session->all_userdata();
			};			
				
			$data = array();
			$data['map'] = $this->googlemaps->create_map();
			$data['content'] = 'sasView';
			
			$this->load->helper('url');
			
			if ($this->session->userdata('is_logged_in')){	
				$data['userData'] = $this->session->all_userdata();
			};	
						
			$this->load->view('templates/template', $data);	
					
		
		}
		function suggestaspot(){
			$this->load->model('mapModel');
			$query = $this->mapModel->suggestaspot();
			
			
			
			
			redirect('index.php/mapController');

			
		}
		
		

	}
?>