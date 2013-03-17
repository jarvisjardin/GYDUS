<section class="gydus-register">
<h1 class="gydus-register-headertxt" >Register Now</h1>

<form action="<?php echo base_url();?>index.php/userController/create_member"  method="post" class="form-horizontal gydus-form-horizontal ">
		<h1 class="gydus-accinfo-headertxt">ACCOUNT INFORMATION</h1>
<span><?php if($this->session->flashdata('message')) {
						echo '<section id="regServVal" class=" message alert alert-block alert-danger">
';
						echo ''.$this->session->flashdata('message').'';


						echo'</section>';
						}?></span>

		<!-- NAME-->
		<section class="control-group">
              <label class="control-label" id="testme" for="inputName">Username</label>
              <section class="controls">
                <input type="text" class="gydus-reg-name-input" name="name"  id="reg-inputName" placeholder="Username"><span class="checkuser hide">√</span><span class="wronguser hide">Username must be at least 4 letters</span>
              </section>



		<!-- EMAIL-->

            <section class="gregE-control-group control-group">
              <label class="control-label" for="inputEmail">Email</label>
              <section class="controls">
                <input type="text" class="gydus-reg-email-input" name="user_email" id="reg-inputEmail" placeholder="Email"><span class="checkemail hide">√</span><span class="wrongemail hide">Email must follow email@mail.com</span>
              </section>
            </section>
            
            		<h1 class="gydus-password-headertxt">PASSWORD</h1>

            
            <!-- PASSWORD-->
            <section class="control-group">
              <label class="control-label" for="inputPassword">Password</label>
              <section class="controls">
                <input type="password" id="reg-inputPassword" name="user_pass" placeholder="Password"><span class="checkpass hide">√</span><span class="wrongpass hide">Password must be at least 5 characters</span>
              </section>
            </section>
     
            
            
            
            
                
                <button class=" btn btn-block btn-large btn-success" type="submit" class="btn">SIGN UP</button>
             
          </form>
<button class="btn btn-block btn-warning" type="button"  onClick="location='<?php echo base_url();?>'">Go back Home</button>

          </section><!-- end of Gydus Login-->
          
          
          	
