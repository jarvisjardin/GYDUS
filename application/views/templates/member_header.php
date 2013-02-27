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

		<!-- end CSS-->

</head>
<body class="landing">

	<!-- Parent container for the page, load your core templates into this div -->
	
<!-- NAVIGATION -->
	        <section class="navbar  navbar-fixed-top ">
	        	<section class="navbar-inner dark-header">

<!-- GYDUS LOGO -->
				<section class="logo" id="logo">
		        		<a class="brand gydus-logo" data-toggle="dropdown" href="#"><img src="<?php echo base_url();?>/webroot/img/logo.png" alt="Gydus" /></a>
		        		<ul class="gydusSetDrop dropdown-menu">
		        			<li class="gydusContactHead"><a href="<?php echo base_url();?>index.php/userController/contact_us"><h3>Contact Us</h3></a></li>
		        			<li class="gydusDevCornerHead"><a href="#"><h3>Developers Corner</h3></a></li>
		        			<li class="gydusTermsHead"><a href="#"><h3>Terms and Conditions</h3></a></li>
		        		
		        		</ul><!-- end of dropdown-menu-->
		        		
					</section><!-- end of logo -->					
					
<!--  SIGN IN LINK -->					
					<section class="gydus-signin-nav pull-right">
					
						<a class="brand signin nav-signin" data-toggle="dropdown" href="#"><?php echo $userData['name'];?></a>
						
						<ul class="gydusUserDrop dropdown-menu">
							<li class="accountSettingsHead "><a href="<?php echo base_url();?>index.php/userController/account_setting"><h3>Account Settings</h3></a></li>
							<li class="logOutaccountSettingsHead btn-danger"><a href="<?php echo base_url();?>index.php/userController/logout"><h3>Sign Out</h3></a></li>
							
							
							
							
							
						</ul><!-- end of dropdown-menu-->
					</section><!-- end of gydus signin nav-->
	        	</section> <!-- close navbar-inner dark-header -->
	        </section><!-- end of navbar navbar-fixed-top -->
	        
	        
        
<!--  end of header -->

			