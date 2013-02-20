<?
class sasModel extends CI_Model{
		
	function suggestaspot(){
	
		$this->db->where('name', $this->input->post('spot_name'));
		$query = $this->db->get('SuggestASpot');
		
		if($query->num_rows == 1){
			
			/*
				get tally 
				create var for tally# +1
				update table	
			*/
		}else{
			
			/*
				create suggestion
			
			*/	
			
			$SuggestASpot_data = array(
				'name' => $this->input->post('spot_name'),
				'building_id' => $this->input->post('building_id'),			
				'latitude' => $this->input->post('spot_lat')	
				'longitude' => $this->input->post('spot_long')	
				// add the rest of the fields later. this is a just logic test					
			);
		
			$insert = $this->db->insert('SuggestASpot', $SuggestASpot_data);
			return $insert;
			
			}
		
	}
			
		
} 
?>