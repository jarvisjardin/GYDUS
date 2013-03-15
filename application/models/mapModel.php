<?
class mapModel extends CI_Model{
		
	function __construct(){
        parent::__construct();
    }
	
	function suggestaspot(){
		if($this->input->post('sasLat') == '' || $this->input->post('spot-name') == ''  ){
			
			return false;
		}else{
	
		
			$this->db->where('name', $this->input->post('spot-name'));
			$query = $this->db->get('SuggestASpot');
			

			
			if($query->num_rows == 1){ // it exists
				
				/*
					get tally 
					create var for tally# +1
					update table	
				*/
				
				$query = $this->db->get_where('SuggestASpot', array('name' => $this->input->post('spot-name')));
	
				
				foreach ($query->result() as $row)
				{
				      $t = ($row->tally) + 1;
				     
				}
				
				
				$this->db->where('name', $this->input->post('spot-name'));
				$this->db->update('SuggestASpot', array('tally' => $t)); 
				
				
				return true;			
				
	
			}else{  //make one
				
				/*
					create suggestion
				
				*/	
				
				$startTally = '1';
				
				$SuggestASpot_data = array(
					'name' => $this->input->post('spot-name'),
					'tally' => $startTally,
					'longitude' => $this->input->post('sasLng'),
					'latitude' => $this->input->post('sasLat')
	
					);
					 /*,
					'building_id' => $this->input->post('building_id'),			
					'latitude' => $this->input->post('spot_lat')	
					'longitude' => $this->input->post('spot_long')	*/
					// add the rest of the fields later. this is a just logic test					
				
			
				$insert = $this->db->insert('SuggestASpot', $SuggestASpot_data);
				
				return true;
				
			}
		}
	}//ends of suggest a spot function
	
	function search(){

		if($this->input->get('searchLocation')!=''){
		 
			$this->db->where('name',$this->input->get('searchLocation'));
			$query = $this->db->get('Buildings'); //Change this to rooms later
			
			if($query->num_rows() > 0)
			{
			
				return $query;
				//echo gettype($query);
			}else
			{
				
				return false;
				
			}
			
		}else{
			$qArray = array();
			
			if(isset($_GET['points'])){
				$points = $_GET['points'];

			}
			
			  if(empty($points))   {
				return false;			    
			  
			  }else{
			  
			  	foreach($points as $p){
			  	
				  	$this->db->where('categorey',$p);
			        $query = $this->db->get('PointsOfInterest'); //Change this to rooms later
			        
			        
			        if($query->num_rows() > 0){
			       
						array_push($qArray, $query);						     
						
			        }else{
				        
				        return false;
			        };
			        
				 }
				//echo gettype($qu);

				 return $qArray;
			  }

		}
		
	}	
	
	public function getOverlays(){
			
			$db = new \PDO("mysql:hostname=127.0.0.1;port=8889;dbname=Gydus", "root", "root");
			$sqlst = "Select * from Overlays";
			$st = $db->prepare($sqlst);
			$results = $st->execute();
			$resultData = $st->fetchAll(); //get all responses
			if($st->rowCount() > 0){ //if the record exists than 
				//there is a record
				return $resultData;
			}else{
				return 'no record';
			}
		}//close get campuses	
		
	function get_Directions(){
	
		/*
if($formA_Building == $formB_Building){
			
			// directtions from room to room in same building
			
			
		}else{
			
			//directions from room to building exit,"walk from building A to BuildingB, exit to room 
		 
			
		}
*/
	
		
		$formA_Building = 'FS3B';
		$formA_Room = '131';
		$formB_Building = 'FS3C';
		$formB_Room = '110';
		
		$this->db->where('buildingA',$formA_Building);
		$this->db->where('buildingB',$formB_Building);
		$this->db->where('pointA',$formA_Room);
		$this->db->where('pointB',$formB_Room);
		
		$query = $this->db->get('Navigation'); 
		
		if($query){
			
			return $query;
		}else{
			$this->db->where('buildingB',$formA_Building);
			$this->db->where('buildingA',$formB_Building);
			$this->db->where('pointB',$formA_Room);
			$this->db->where('pointA',$formB_Room);
			
			$query = $this->db->get('Navigation'); 
			
			if($query){
				
				return $query;
			}else{
				
				return FALSE;
			}	
		}
		

		
	}
			
		
} 
?>