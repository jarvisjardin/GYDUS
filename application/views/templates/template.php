<?php 
	$this->load->helper('url');

	if ($this->session->userdata('is_logged_in'))
	{
		$this->load->view('templates/header', $userData);
		

	}else{ 
	
	$this->load->view('templates/header');
	
	}

?>



<?php 
	
	
	$this->load->view($content);
		

	
?>


