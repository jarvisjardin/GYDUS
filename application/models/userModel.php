<?
class userModel extends CI_Model{
		
	function validate()
	{
		$this->db->where('email', $this->input->post('user_email'));
		$this->db->where('password',md5($this->input->post('user_pass')));
		$query = $this->db->get('Users');
		
		if($query->num_rows == 1)
		{	
			
			return $query;
			
			
		}
		
	}
	
	function create_member()
	{
		$new_member_data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('user_email'),			
			'password' => md5($this->input->post('user_pass'))						
		);
		
		$insert = $this->db->insert('Users', $new_member_data);
		
		$query = $this->db->get_where('Users', array('name' => $this->input->post('name')));

		return $query;
	}
	

			
		
} 
?>