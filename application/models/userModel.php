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
	function update_member($userdata){
		
		if($this->input->post('user_name') != ''){$updateName = $this->input->post('user_name');}else{$updateName = $userdata['name'];};	
		if($this->input->post('user_email') != ''){$updateEmail = $this->input->post('user_email');}else{$updateEmail = $userdata['email'];};	
		if($this->input->post('user_pass') != ''){$updatePass = md5($this->input->post('user_pass'));}else{$updatePass = $userdata['pass'];}; 						
		$update_member_data = array(
			'name' => $updateName,
			'email' => $updateEmail,		
			'password' => $updatePass
		);
		
		$this->db->where('id', $userdata['id']);
		$this->db->update('Users', $update_member_data); 
		
		$query = $this->db->get_where('Users', array('id'=>$userdata['id']));
		return $query;

	}

			
		
} 
?>