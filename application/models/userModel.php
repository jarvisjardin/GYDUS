<?
class userModel extends CI_Model{

/* #-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#


							LOGIN


#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-# */	
		
	function validate()
	{
		$this->db->where('email', $this->input->post('user_email'));//check to see if the email the user typed is the same in the database
		$this->db->where('password',md5($this->input->post('user_pass')));//check to see if the password the user typed is the same in the database
		
		// creating a variable called query, and telling the database to get the user
		$query = $this->db->get('Users');
		
		if($query->num_rows == 1)// if the credientals exsist
		{
			return $query; //return the data
		}// end of if
		
	}// end of validate
/* #-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#


							REGISTER


#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-# */	
	
	function validateRegister()
	{	
		$this->db->where('email', $this->input->post('user_email'));//check to see if the email the user typed is the same in the database
		
		// creating a variable called query, and telling the database to get the user
		$query = $this->db->get('Users');
		
		if($query->num_rows == 1)// if the credientals exsist
		{
			return $query;
		}// end of if
		
	}// end of validate register
	
	function create_member()
	{
		// taking all of the users information, putting them into an array 
		$new_member_data = array(
			'name' => $this->input->post('name'),// set db name = name input value
			'email' => $this->input->post('user_email'), // set db email = email input value		
			'password' => md5($this->input->post('user_pass'))	// set db password = password input value					
		);
		
		$insert = $this->db->insert('Users', $new_member_data);// insert the array into the database table called Users
		
		$query = $this->db->get_where('Users', array('name' => $this->input->post('name')));

		return $query;
	}// end of create_member
	
	
/* #-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#


						UPDATING ACCOUNT


#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-# */		
	
	
	
		function validateUpdateMember()
	{	
		$this->db->where('email', $this->input->post('user_email'));//check to see if the email the user typed is the same in the database
		$this->db->where('name', $this->input->post('user_name'));//check to see if the username the user typed is the same in the database
		
		// creating a variable called query, and telling the database to get the user
		$query = $this->db->get('Users');
		
		if($query->num_rows == 1)// if the credientals exsist
		{
			return $query;
		}//end of if
		
	}//end of validateUpdateMember
	
	function update_member($userdata){
		
		//if the form is not blank, update the users information based on what they entered in the form, if not, then keep the same info
		if($this->input->post('user_name') != ''){$updateName = $this->input->post('user_name');}else{$updateName = $userdata['name'];};	//username
		if($this->input->post('user_email') != ''){$updateEmail = $this->input->post('user_email');}else{$updateEmail = $userdata['email'];}; //email	
		if($this->input->post('user_pass') != ''){$updatePass = md5($this->input->post('user_pass'));}else{$updatePass = $userdata['pass'];}; //password	
		
		//take all the updated information from the forms putting them in an array					
		$update_member_data = array(
			'name' => $updateName, // set db name = updated name
			'email' => $updateEmail, // set db email = updated email
			'password' => $updatePass // set db password = updated password
		);
		
		$this->db->where('id', $userdata['id']); // finding the id of that user
		$this->db->update('Users', $update_member_data); // updating the user information with the information from the array
		
		$query = $this->db->get_where('Users', array('id'=>$userdata['id']));// getting the users information
		return $query;

	}// end of update_member

			
		
} //END OF USER MODEL 
?>