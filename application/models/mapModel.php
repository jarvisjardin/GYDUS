<?
class mapModel extends CI_Model{
		
	function __construct()
    {
        parent::__construct();
    }
	
	function suggestaspot(){
	
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
		
	}//ends of suggest a spot function
	
	function search(){

		
		$this->db->where('name',$this->input->post('searchLocation'));
		$query = $this->db->get('Buildings'); //Change this to rooms later
		
		if($query->num_rows() > 0)
		{
		
			return $query;
		}else
		{
			
			return false;
			
		}
			
		
		
	}	
	function get_Directions(){
		
	}
			
		
} 
?>