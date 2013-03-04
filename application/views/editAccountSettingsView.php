<section class="gydus-editAccSett">
<h1 class="gydus-register-headertxt">Edit Account </h1>

<form action="<?php echo base_url();?>index.php/userController/update_member" method="post" class="form-horizontal gydus-form-horizontal ">


		<!-- NAME-->
		<section class="control-group">
              <label class="control-label" for="inputName">Edit UserName</label>
              <section class="controls">
                <input type="text" class="gydus-reg-name-input" name="user_name"  id="reg-inputName" placeholder="<?php echo $this->session->userdata('name');?>"><span class="checkuser hide">√</span><span class="wronguser hide">Username must be at least 4 letters</span>

              </section>



		<!-- EMAIL-->

            <section class="control-group">
              <label class="control-label" for="inputEmail">Edit Email</label>
              <section class="controls">
                <input type="text" class="gydus-reg-email-input" name="user_email" id="reg-inputEmail" placeholder="<?php echo $this->session->userdata('email');?>"><span class="checkemail hide">√</span><span class="wrongemail hide">Email must follow email@mail.com</span>

              </section>
            </section>
            
            		<h1 class="gydus-password-headertxt">Edit Password</h1>

            
            <!-- PASSWORD-->
            <section class="control-group">
              <label class="control-label" for="inputPassword">Password</label>
              <section class="controls">
                <input type="password" id="reg-inputPassword" name="user_pass" placeholder="<?php echo $this->session->userdata('password');?>"><span class="checkpass hide">√</span><span class="wrongpass hide">Password must be at least 5 characters</span>

              </section>
            </section>
     
            
            
            
          
                
                <button class="btn btn-block btn-large btn-success" id="updateInfobtn" type="submit" class="btn">Update Information</button>
                <button class="btn btn-block btn-large btn-danger" type="button" class="btn" onClick="location='<?php echo base_url();?>index.php/mapController/'">Cancel</button>

             
          </form>
          </section><!-- end of Gydus Login-->
          
          
          
          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		
	<!-- main -->
	
		<script type="text/javascript" src="<?php echo base_url();?>/webroot/js/main.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/webroot/js/bootstrap.js"></script>
