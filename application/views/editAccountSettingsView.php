<section class="gydus-editAccSett">
<h1 class="gydus-register-headertxt">Edit Account </h1>

<form action="<?php echo base_url();?>index.php/userController/update_member" method="post" class="form-horizontal gydus-form-horizontal ">

		<!-- NAME-->
		<section class="control-group">
              <label class="control-label" for="inputName">Edit UserName</label>
              <section class="controls">
                <input type="text" class="gydus-reg-name-input" name="user_name"  id="reg-inputName" placeholder="<?php echo $this->session->userdata('name');?>">
              </section>



		<!-- EMAIL-->

            <section class="control-group">
              <label class="control-label" for="inputEmail">Edit Email</label>
              <section class="controls">
                <input type="text" class="gydus-reg-email-input" name="user_email" id="reg-inputEmail" placeholder="<?php echo $this->session->userdata('email');?>">
              </section>
            </section>
            
            		<h1 class="gydus-password-headertxt">Edit Password</h1>

            
            <!-- PASSWORD-->
            <section class="control-group">
              <label class="control-label" for="inputPassword">Password</label>
              <section class="controls">
                <input type="password" id="reg-inputPassword" name="user_pass" placeholder="<?php echo $this->session->userdata('password');?>">
              </section>
            </section>
     
            
            
            
          
                
                <button class="btn btn-block btn-large btn-success" type="submit" class="btn">Update Information</button>
                <button class="btn btn-block btn-large btn-danger" type="button" class="btn" onClick="location='<?php echo base_url();?>index.php/mapController/'">Cancel</button>

             
          </form>
          </section><!-- end of Gydus Login-->