

<section class="gydus-login">
 <h1 class="gydus-login-headertxt">Sign Into GYDUS</h1>



<form action="<?php echo base_url();?>index.php/userController/check_member"  method="post"class="form-horizontal gydus-form-horizontal ">
            <section class="control-group gydus-form-error">
              <label class="control-label" for="inputEmail">Email</label>
              <section class="controls">
              	<section class="loginEmailError">
                <input type="text" class="gydus-login-email-input" name="user_email" id="login-inputEmail" placeholder="Email">
                   <p class="loginemailerr">invalid email</p>

              	</section><!--end of loginEmailError-->
              </section><!-- end of controls -->
            </section><!-- end of email-->
            <section class="control-group">
              <label class="control-label" for="inputPassword">Password</label>
              <section class="controls">
                 <section class="loginPwError">
                <input type="password" id="login-inputPassword" name="user_pass" placeholder="Password">
                <p class="loginpasserr">invalid password</p>
                 </section><!-- end of loginPwError -->
              </section><!-- end of controls-->
            </section><!-- end of password-->
            <section class="control-group">
              <section class="controls">
                
                <button  class="btn btn-success" type="submit" class="btn">Sign in Now</button>
              </section>
            </section>
          </form>
          </section><!-- end of Gydus Login --> 
