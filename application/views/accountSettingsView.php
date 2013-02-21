

<section class="accountSettingsView">
 <h1 class="gydus-login-headertxt">Account Settings</h1>
 <h4 class="currentAccinfo">This is your account information currently registered with us</h4>



<form class="form-horizontal gydus-form-horizontal ">
            <section class="control-group">
              <section class="gydus-controls controls">
                            <label class="control-label" for="inputEmail">Username</label>

              <input class="gydus-login-email-input input-xlarge" id="disabledInput" type="text" placeholder="" disabled value="<?php echo $this->session->userdata('name');?>">
<!--                 <input type="text" class="gydus-login-email-input" name="spot-name" id="spot-name" placeholder="name"> -->
              </section>
            </section>
            
             <section class="control-group">
              <section class="controls">
                                          <label class="control-label" for="inputEmail">Email</label>

              <input class="gydus-login-email-input input-xlarge" id="disabledInput" type="text" placeholder="" disabled value="<?php echo $this->session->userdata('email');?>">
	               </section>
            </section>
              
              <section class="control-group">
              <section class="controls">
                
                <button  class="btn btn-primary" type="button" onClick="location='<?php echo base_url();?>index.php/userController/edit_account_settings'">Edit Account</button>

             
                <section class="acct-cancel">
                <button  class="btn btn-danger" type="button" onClick="location='<?php echo base_url();?>index.php/mapController/'">CANCEL</button>
                </section><!--end of acct-cancel-->
              </section>
            </section>
          </form>
          </section><!-- end of Gydus Login --> 
