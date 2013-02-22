<section class="gydus-register">
<h1 class="gydus-register-headertxt">Register Now</h1>

<form action="<?php echo base_url();?>index.php/userController/create_member"  method="post" class="form-horizontal gydus-form-horizontal ">
		<h1 class="gydus-accinfo-headertxt">ACCOUNT INFORMATION</h1>

		<!-- NAME-->
		<section class="control-group">
              <label class="control-label" for="inputName">Name</label>
              <section class="controls">
                <input type="text" class="gydus-reg-name-input" name="name"  id="reg-inputName" placeholder="Name">
              </section>



		<!-- EMAIL-->

            <section class="control-group">
              <label class="control-label" for="inputEmail">Email</label>
              <section class="controls">
                <input type="text" class="gydus-reg-email-input" name="user_email" id="reg-inputEmail" placeholder="Email">
              </section>
            </section>
            
            		<h1 class="gydus-password-headertxt">PASSWORD</h1>

            
            <!-- PASSWORD-->
            <section class="control-group">
              <label class="control-label" for="inputPassword">Password</label>
              <section class="controls">
                <input type="password" id="reg-inputPassword" name="user_pass" placeholder="Password">
              </section>
            </section>
     
            
            
            
            <section class="control-group">
              <section class="controls">
                
                <button class="btn btn-success" type="submit" class="btn">SIGN UP</button>
              </section>
            </section>
          </form>
          <button class="btn btn-large btn-block btn btn-success" type="button"  onClick="location='<?php echo base_url();?>'">Go back Home</button>

          </section><!-- end of Gydus Login-->