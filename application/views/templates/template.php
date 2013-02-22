<?php 
	$this->load->helper('url');

	if ($this->session->userdata('is_logged_in'))
	{
		$this->load->view('templates/member_header', $name);

	}else{ 
	
	$this->load->view('templates/header');
	
	}?>

<?php 
	
	$this->load->view($content);
	
?>

<?php $this->load->view('templates/footer');?>

