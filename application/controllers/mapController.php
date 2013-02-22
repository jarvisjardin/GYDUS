<?php

	class mapController extends CI_Controller{
	    
		function index(){
			
			$this->load->library('googlemaps');

			$config['center'] = '28.594461, -81.304002';
			$config['zoom'] = '18';
			$this->googlemaps->initialize($config);
			
			$FS3C = array();
			$FS3C['image'] = 'http://i1326.photobucket.com/albums/u657/GydusApp/FS3C_zps01d22c94.png';
			$FS3C['positionSW'] = '28.594256, -81.304249';
			$FS3C['positionNE'] = '28.594663, -81.303696';
			$this->googlemaps->add_ground_overlay($FS3C);
			
			$FS3B = array();
			$FS3B['image'] = 'http://i1326.photobucket.com/albums/u657/GydusApp/FS3B1_zps4ec72590.png';
			$FS3B['positionSW'] = '28.594906, -81.304305';
			$FS3B['positionNE'] = '28.595417, -81.303560';
			$this->googlemaps->add_ground_overlay($FS3B);
			
			$data = array();
				
			$data['content'] = 'mapView';
			$data['map'] = $this->googlemaps->create_map();

			
			$this->load->view('templates/template', $data);

		
		
		}
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
			
					
			$this->load->model('mapModel');
			$query = $this->mapModel->search();
			
			if($query){
				echo "Search Results: (", $query->num_rows(),')';
				echo "<br><hr>";
				foreach ($query->result() as $row)
				{	
				    echo "Name: ",$row->name;
				    echo '<br>';
				    echo "Building Id: ",$row->building_id;				  
				    echo '<br>';
				    echo "ID: ",$row->id;
				    echo '<hr>';

				};
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