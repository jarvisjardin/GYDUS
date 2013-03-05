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
			$config['$jsfile'] = '<? echo base_url() ?>."webroot/js/main.js"';
			$config['$disableStreetViewControl'] = TRUE;
			/*$config['onboundschanged'] = 'if (!centreGot) {
											var mapCentre = map.getCenter();
												marker_0.setOptions({
													position: new google.maps.LatLng(mapCentre.lat(),mapCentre.lng()) 
												});
											}
											centreGot = true;';*/
											
											
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
			$marker['ondragend'] = '$("#sasLng").val(event.latLng.lng());$("#sasLat").val(event.latLng.lat());$("#sasPrompt").text("Double Click pin to give information. Or drag pin to desired location .");';
			$marker['animation'] = 'DROP';
			$marker['ondblclick']= "$('.sasView').slideDown(1500,function(){
			
			$('#sasPrompt').addClass('hide');
			});";
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
		
		function navigate(){
			
			$this->load->model('mapModel');
			$query = $this->mapModel->get_Directions();
								    
			if($query){
		  
			    $this->load->library('googlemaps');
	
				$config['center'] = '28.594461, -81.304002';
				$config['zoom'] = '18';
				$config['minifyJS'] = TRUE;
	
				$this->googlemaps->initialize($config);
				
				$row = $query->row();
			
//				$pieces = explode("','", $dir);

				 //echo $row->directions;
				$polyline = array();
				$polyline['points'] = array('28.594416, -81.303782', '28.594413, -81.304147', '28.594475, -81.304270', '28.595078, -81.304286', '28.595023, -81.304056', '28.594983, -81.304056');
				$this->googlemaps->add_polyline($polyline); 
				
					
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