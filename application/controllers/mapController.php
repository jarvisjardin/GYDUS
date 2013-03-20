<?php

	class mapController extends CI_Controller{
	    
	    public $mapData;
	    public $center = '28.594461, -81.304002';		
	    
		function __construct(){
	        parent::__construct();
	    }
	    
		function index(){
			
			$this->load->library('googlemaps');

			$config['center'] =  $this->center;//'auto';
			$config['zoom'] = '18';
			//$config['minifyJS'] = TRUE;
			$config['$sensor'] = TRUE;
			$config['onclick'] = 'alert(\'You just clicked at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';

																	
			// styling the color of the map								
			$config['styles'] = array(
						array("name"=>"GydusColor", "definition"=>array(
						
						array("featureType"=>"all", "stylers"=>array(array("saturation"=>"-20"), array("hue"=>"#00ffe6"))),
						array("featureType"=>"landscape.man_made","stylers"=>array(array("saturation"=>"100"), array("hue"=>"#131ba5"))),
						array("featureType"=>"landscape.natural","stylers"=>array(array("saturation"=>"20"), array("hue"=>"#120b9b")))

						)),
						
			);
			
			$config['stylesAsMapTypes'] = false;
			$config['stylesAsMapTypesDefault'] = "GydusColor";
			
			$this->googlemaps->initialize($config);
		
			$data = array();
			$data['content'] = 'mapView';
			$data['map'] = $this->googlemaps->create_map();

			$this->load->helper('url');

			if ($this->session->userdata('is_logged_in')){	
				$data['userData'] = $this->session->all_userdata();
			};			
				

			$this->load->view('templates/template',$data);
		}	
		
		function overlays(){
		
		
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
			//	$config['minifyJS'] = TRUE;
				
				$this->googlemaps->initialize($config);
				
				
		/* 	Points of interest query return */
				
				if(gettype($query) == 'array'){

					foreach($query as $q) {

						foreach($q->result() as $p){

						 	if($p->categorey == 'Restroom'){

							 	$marker['icon'] = 'http://i1326.photobucket.com/albums/u657/GydusApp/Restroom_zpsa251fe0e.png';
						 	}else if($p->categorey == 'Food/Beverage'){

							 	$marker['icon'] = 'http://i1326.photobucket.com/albums/u657/GydusApp/FoodBeverage_zps777eb768.png';
						 	}

						 	$marker['title']= $p->name;
						 	$marker['position'] = $p->latitude.','.$p->longitude;

						 	$this->googlemaps->add_marker($marker);


					 	}

					 }
			/* Single room search query */
				 }else{

				 	foreach($query->result() as $q) {
					 	$marker['title']=$q->name;
					 	$marker['position'] = $q->latitude.','.$q->longitude;
					 	$marker['icon'] = 'http://i1326.photobucket.com/albums/u657/GydusApp/bulding_zpscbd143c7.png';
					 	$marker['infowindow_content'] = '<form action="../mapController/navigateViaMarker" method="post"><input name="buildingA" type="hidden" value="'.$q->building_name.'"><input name="roomA" type="hidden" value="1"><input name="buildingB" type="hidden" value="'.$q->building_name.'"><input name="roomB" type="hidden" value="'.$q->name.'"><button type="submit">GO TO HERE</button></form>';
					 	$this->googlemaps->add_marker($marker);



					} 
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
				$blah = $this->session->set_flashdata('message', 'Search Results Not Found.');
				redirect('index.php/mapController');
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
			$marker['ondragend'] = '$("#sasLng").val(event.latLng.lng());
									$("#sasLat").val(event.latLng.lat());
									$("#sasPrompt").text("Double Tap pin to give information. Or Tap and hold pin to desired location .");';
			$marker['animation'] = 'DROP';
			$marker['ondblclick']= "$('.sasView').slideDown(1500,function(){
										$('#sasPrompt').addClass('hide');
										$('.gydus-sas-back').addClass('hide');
									});";
			$marker['title'] = 'Drag Me';

			
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
			
			if($query){
				$blah = $this->session->set_flashdata('message', 'Thanks for suggest a spot, we?ll take it into consideration.');
				redirect('index.php/mapController');

			}else{
			
				redirect('index.php/mapController/suggestaspotView');
			}
			
		}
		
		function navigateViaMarker(){
			
			$this->load->model('mapModel');
			$query = $this->mapModel->get_DirectionsViaMarker();
			   
			if($query){
		  
			    $this->load->library('googlemaps');
	
				$config['center'] = '28.594461, -81.304002';
				$config['zoom'] = '18';
				$config['minifyJS'] = TRUE;
	
				$this->googlemaps->initialize($config);
				
				$q = $query->row();
				$d = $q->directions;
				
				$directions = explode(";", $d);

				$polyline = array();
				$polyline['points'] = $directions; 
				$polyline['$zIndex'] = 10;
				
				$this->googlemaps->add_polyline($polyline);
				
				$data = array();
				$data['content'] = 'mapView';
				$data['map'] = $this->googlemaps->create_map();
	
				$this->load->helper('url');
	
				if ($this->session->userdata('is_logged_in')){	
					$data['userData'] = $this->session->all_userdata();
				};
					
				$this->load->view('templates/template',$data);			

			}else{
				
				redirect('index.php/mapController');

			}
			
		}
		

	}
?>