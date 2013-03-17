<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class userController extends CI_Controller
{
/* #-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#


							LOGIN


#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-# */	

	function login()
	{	
		
		$data['content'] = 'loginView';// destination Login view
		$this->load->view('templates/template', $data);	//load the login view	
	}// end of login
		
	function check_member()
	{		
		$this->load->model('userModel');//loading the userModel
		$query = $this->userModel->validate();// calling the validate function in userModel
		
		if($query) // if the user's credentials validated...
		{
			$row = $query->row_array();// variable for grabbing the whole row in the database
			
			// taking the users information from the database				
			$userData = array(
				'id' => $row['id'],//id =  db row id
				'name' => $row['name'],//name =  db row name
				'email' => $row['email'],// email = db row email
				'pass' => $row['password'],// pass = db row password
				'is_logged_in' => TRUE // making the user logged in
			);
			

			$this->session->set_userdata($userData);//starting a session and passing the users information into the session

			redirect('index.php/mapController/index');// send them to the mapController index
						
		
		}else{ // incorrect username or password
						$loginVal = $this->session->set_flashdata('message', 'Email or Password is incorrect');// displaying error message

				redirect('index.php/userController/login');// keep them on the login view

					
		}// end of else
	}// end of check_member
	
	
/* #-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#


							REGISTER


#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-# */	
	
	
	function register()
	{
		$data['content'] = 'registerView';//destination registerView

		$this->load->view('templates/template', $data);// loading the register view
	}// end of register
	
	function create_member()
	{
				
			$this->load->model('userModel');//loading the userModel
			$query = $this->userModel->validateRegister();// calling teh Validate Register function
			
			if($query)//if the username alreayd exsists
			{
				$egisterVal = $this->session->set_flashdata('message', 'Email already exsists');// display error message

				redirect('index.php/userController/register');// reloads the page
				
			}else{// if it doesnt then create the member
				$query = $this->userModel->create_member();// calling the Create Member function from userModel
			
				$row = $query->row_array();// variable for grabbing the whole row in the database

				// taking the users information from the database
				$userData = array(
					'id' => $row['id'], //id =  db row id
					'name' => $row['name'],// name = db row name
					'email' => $row['email'],// email = db row email
					'pass' => $row['password'],// pass = db row password
					'is_logged_in' => TRUE // making the user logged in
				);
			

			$this->session->set_userdata($userData);//starting a session and passing the users information into the session
			
			redirect('index.php/mapController/index');//send the user to the mapControllers index


				
			}// end of else	
	}// end of create_member
	

/* #-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#


							LOGOUT


#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-# */	
	
	function logout()
	{
		$this->session->sess_destroy();// killing the session
	
		
		$data['content'] = 'marketingView';//destination marketingView
		$this->load->view('templates/template', $data);// loading the marketing view	
		
	}// end of logout

/* #-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#


							EDIT ACCOUNT


#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-# */
	
	
	function account_setting(){
	
		$this->load->helper('url');// loading the helper to work with urls

		//if the user is logged in
		if ($this->session->userdata('is_logged_in')){	
			$data['userData'] = $this->session->all_userdata();// get all the users information
		};	
		$data['content'] = 'accountSettingsView';// destination accountSettings View
		$this->load->view('templates/template', $data);// loading the accountSettings View

	
	}// end of account settings
	
	function edit_account_settings(){
	
		$this->load->helper('url');// loading the helper to work with urls
		
		// if the user is logged in
		if ($this->session->userdata('is_logged_in')){	
			$data['userData'] = $this->session->all_userdata();// get all the users information
		};	
		$data['content'] = 'editAccountSettingsView';//destination edit account settings view
		$this->load->view('templates/template', $data);// loading edit account settings view
	}// end of edit account settings
	
	
	function update_member(){
	
		$this->load->helper('url');// loading the helper to work with urls
		$data = $this->session->all_userdata();// get all the users information
	
		$this->load->model('userModel');//load the userModel
		$query = $this->userModel->validateUpdateMember();//calling validateUpdateMember function
		
		if($query)//if the email and username is the same already
		{
			$updateAccVal = $this->session->set_flashdata('message', 'Cant update account to the same information');// display error message

				redirect('index.php/userController/edit_account_settings');// reload the page
			
		}else{// update the credientials
		$query = $this->userModel->update_member($data);//calling validateUpdateMember function and passing the updated information into it
			$row = $query->row_array();// variable for grabbing the whole row in the database

			
			$userData = array(
				'id' => $row['id'],
				'name' => $row['name'],
				'email' => $row['email'],
				'pass' => $row['password'],
				'is_logged_in' => TRUE
			);
			
			$editaccsucc = $this->session->set_flashdata('word', 'Your account has been successfully updated');// displaying success message
			$this->session->set_userdata($userData);//update the current session with the new information
			
			redirect('index.php/userController/account_setting');//send them back to the account settings page
			
		}//end of else
	}// end of update member


/* #-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#


							CONTACT US


#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-# */	
	function contact_us(){
	
		$this->load->helper('url');// loading the helper to work with urls

		if ($this->session->userdata('is_logged_in')){ // if the user is logged in
				$data['userData'] = $this->session->all_userdata(); // get all the users information
		};	
		$data['content'] = 'contactUsView';// destination contactUsView
		$this->load->view('templates/template', $data);// loading the contactUsView
	}// end of contact us
	
	
	function send_email()
	{
		

			/* These are the variable that tell the subject of the email and where the email will be sent.*/
			$emailSubject = $_POST['subjectSelect'];
			$mailto = 'gydusapp@gmail.com';

			/* These will gather what the user has typed into the fieled. */
			$nameField = $_POST['reginputName'];
			$messField = $_POST['gydusContactMes'];
			$emailField = $_POST['reginputEmail'];
			

			/* This takes the information and lines it up the way you want it to be sent in the email. */
			$body = "
				<br><hr><br>
				Name: $nameField <br>
				Email: $emailField <br>
			";

			$headers = "From: $emailField\r\n"; // This takes the email and displays it as who this email is from.
			$headers.= "Content-type: text/html\r\n"; // This tells the server to turn the coding into the text.
			$success = mail($mailto, $emailSubject, $body, $headers); // This tells the server what to send.
			
			if ($success)
			{
				$this->load->helper('url');
				$data['content'] = 'emailSentView';
				$this->load->view('templates/template', $data);	

				echo 'message sent';
			}else{
			
				echo "error, did not send";	
			}// end of else
		
	}//end of send email
/* #-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#


					 DEVELOPERS CORNER


#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-# */		
	function dev_corner(){

		$this->load->helper('url');// loading the helper to work with urls
	
		if ($this->session->userdata('is_logged_in')){	// if the user is logged in
				$data['userData'] = $this->session->all_userdata(); // get all the users information
		};	
		$data['content'] = 'developersCorner';// destination developersCorner
		$this->load->view('templates/template', $data);	// loading the developersCorner	


	}//end of dev_corner
	

/* #-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#


					TERMS AND CONDITIONS


#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-# */	
	
		function terms(){

		$this->load->helper('url');// loading the helper to work with urls
	
		if ($this->session->userdata('is_logged_in')){	// if the user is logged in
				$data['userData'] = $this->session->all_userdata();// get all the users information
		};	
		$data['content'] = 'termsCondView';// destination termsCondView
		$this->load->view('templates/template', $data);// loading the termsCondView


	}//end of terms

	
	

}// end of USER CONTROLLER