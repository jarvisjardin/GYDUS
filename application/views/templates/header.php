<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>GYDUS</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!--  Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS concatenated and minified via ant build script-->

	<link rel="stylesheet" href="<?php echo base_url();?>/webroot/css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url();?>/webroot/css/bootstrap.css" type="text/css" media="screen" />
<!-- 	<link href="/webroot/css/bootstrap-responsive.css" rel="stylesheet"> -->

		<!-- end CSS-->
		
	<script type="text/javascript" src="https://raw.github.com/snaptortoise/konami-js/master/konami.js"></script>
<!--	<script type="text/javascript" src="<?php echo base_url();?>/webroot/js/harlemshake.js"></script> -->
	<script src="http://files.time2hack.com/time2hack.harlem.shake.min.js" type="text/javascript"></script>
	

</head>
<body class="landing">

	<section id='hs' class='hide'></section>
	


	<!-- Parent container for the page, load your core templates into this div -->
	<?php $this->load->helper('url');
			
			if ($this->session->userdata('is_logged_in')) { ?>
					
				<!-- NAVIGATION -->
	        <section class="navbar  navbar-fixed-top ">
	        	<section class="navbar-inner dark-header">

<!-- GYDUS LOGO -->
				<section class="logo" id="logo">

		        		<a id='gydusHeader' class="brand gydus-logo" data-toggle="dropdown" href="#"><img src="<?php echo base_url();?>/webroot/img/logo_smaller-01.png" alt="Gydus" /></a>


		        		<ul class="gydusSetDrop dropdown-menu">
		        			<li class="gydusContactHead"><a href="<?php echo base_url();?>index.php/userController/contact_us"><h3>Contact Us</h3></a></li>
		        			<li class="gydusDevCornerHead"><a href="<?php echo base_url();?>index.php/userController/dev_corner"><h3>Developers Corner</h3></a></li>
		        			<li class="gydusTermsHead"><a href="#"><h3>Terms and Conditions</h3></a></li>
		        		
		        		</ul><!-- end of dropdown-menu-->
		        		
					</section><!-- end of logo -->					
					
<!--  SIGN IN LINK -->					
					<section class="gydus-signin-nav pull-right">
					
						<a class="brand signin nav-signin" data-toggle="dropdown" href="#"><span class="dbName"><?php echo $userData['name'];?></span></a>
						
						<ul class="gydusUserDrop dropdown-menu">
							<li class="accountSettingsHead "><a href="<?php echo base_url();?>index.php/userController/account_setting"><h3>Account Settings</h3></a></li>
							<li class="logOutaccountSettingsHead btn-danger"><a href="<?php echo base_url();?>index.php/userController/logout"><h3>Sign Out</h3></a></li>
							
							
							
							
							
						</ul><!-- end of dropdown-menu-->
					</section><!-- end of gydus signin nav-->
	        	</section> <!-- close navbar-inner dark-header -->
	        </section><!-- end of navbar navbar-fixed-top -->
	        
	        
				
				<? }else{ ?> 
				
				<!-- NAVIGATION -->
	        <section class="navbar  navbar-fixed-top ">
	        	<section class="navbar-inner dark-header">

<!-- GYDUS LOGO -->
			
					<section class="logo" id="logo">
		        		<a class="brand gydus-logo" href="#"><img src="<?php echo base_url();?>/webroot/img/logo.png" alt="Gydus" /></a>
					</section><!-- end of logo -->
					
					
<!--  SIGN IN LINK -->					
					<section class="gydus-signin-nav pull-right">
					
						<a class="brand signin nav-signin" href="<?php echo base_url();?>index.php/userController/login">Sign In</a>
					</section><!-- end of gydus signin nav-->
	        	</section> <!-- close navbar-inner dark-header
				
				<? } ?>
			

	
	
 -->
	        </section><!-- end of navbar navbar-fixed-top -->
        
<!--  end of header -->

			