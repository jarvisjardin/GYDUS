<?
class userModel extends CI_Model{
		
	function validate()
	{
		$this->db->where('email', $this->input->post('user_email'));
		$this->db->where('password', $this->input->post('user_pass'));
		$query = $this->db->get('Users');
		
		if($query->num_rows == 1)
		{
			return true;
		}
		
	}
	
	function create_member()
	{
		
		$new_member_insert_data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('user_email'),			
			'password' => md5($this->input->post('user_pass'))						
		);
		
		$insert = $this->db->insert('Users', $new_member_insert_data);
		return $insert;
	}

			
		
} 
?>