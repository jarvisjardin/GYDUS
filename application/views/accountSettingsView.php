

<section class="accountSettingsView">
 <h1 class="gydus-login-headertxt">Account Settings</h1>



 <h4 class="currentAccinfo">This is your account information currently registered with us</h4>



<form class="form-horizontal gydus-form-horizontal ">


<section class="gydus-kw-append input-append">
					<input type="text" class="gydus-kw-search-name" id="disabledInput" type="text" placeholder="" disabled value="<?php echo $this->session->userdata('name');?>">
					
					</section><!-- end of input-append-->
					
					
					<section class="gydus-kw-append-desc control-group">
					<section class="controls">
						<input type="text" class="gydus-kw-search-email" id="disabledInput" type="text" placeholder="" disabled value="<?php echo $this->session->userdata('email');?>">
        
	                </section>
	            </section>
					</section><!-- end of input-append-->

				

                         
              <section class="control-group">
              <section class="eAS-controls controls">
                 <span><?php if($this->session->flashdata('word')) {
						echo '<section id="editAccPromptsuccess" class=" message alert alert-block alert-success">
';
						echo ''.$this->session->flashdata('word').'';


						echo'</section>';
						}?></span>
                <button  class="btn btn-large btn-block btn-primary" type="button" onClick="location='<?php echo base_url();?>index.php/userController/edit_account_settings'">Edit Account</button>

             
                <section class="acct-cancel">
                <button  class="btn btn-large  btn-block btn-danger" type="button" onClick="location='<?php echo base_url();?>index.php/mapController/'">CANCEL</button>
                </section><!--end of acct-cancel-->
              </section>
            </section>
          </form>
          
          </section><!-- end of Gydus Login --> 
 						
						
						<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		
	<!-- main -->
	
		<script type="text/javascript" src="<?php echo base_url();?>/webroot/js/main.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/webroot/js/bootstrap.js"></script>
