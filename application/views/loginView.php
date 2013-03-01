

<section class="gydus-login">
 <h1 class="gydus-login-headertxt">Sign Into GYDUS</h1>



<form action="<?php echo base_url();?>index.php/userController/check_member"  method="post"class="form-horizontal gydus-form-horizontal ">
            <section class="control-group">
              <label class="control-label" for="inputEmail">Email</label>
              <section class="controls">
                <input type="text" class="gydus-login-email-input" name="user_email" id="login-inputEmail" placeholder="Email">
              </section>
            </section>
            <section class="control-group">
              <label class="control-label" for="inputPassword">Password</label>
              <section class="controls">
                <input type="password" id="login-inputPassword" name="user_pass" placeholder="Password">
              </section>
            </section>
            <section class="gydus-loginbtns">
              <section class="gydus-loginbtncontrols">
                 
                <button  class="btn btn-block btn-large btn-success" type="submit" class="btn">Sign in Now</button>
              </section>
            </section>
          </form>
<button class="btn btn-block btn-warning " type="button"  onClick="location='<?php echo base_url();?>'">Go back Home</button>

          </section><!-- end of Gydus Login --> 

