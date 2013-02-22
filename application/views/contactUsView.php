<section class="gydus-register">
<h1 class="gydus-register-headertxt">Contact Us</h1>

<form action="<?php echo base_url();?>index.php/userController/send_email"  method="post" class="form-horizontal gydus-form-horizontal ">


		<!-- NAME OF SPOT-->
		<section class="control-group">
              <label class="control-label" for="inputName">Name of Spot</label>
              <section class="controls">
                <input type="text" class="gydus-reg-name-input" name="reginputName"  id="reg-inputName reginputName" placeholder="Name of Spot">
              </section>
              
             <!-- EMAIL-->

            <section class="control-group">
              <label class="control-label" for="inputEmail">How do we reach you?</label>
              <section class="controls">
                <input type="text" class="gydus-reg-email-input" name="reginputEmail" id="reg-inputEmail reginputEmail" placeholder="Email you can be reached at">
              </section>
            </section>


        <!-- SUBJECT-->
				<section class="dropdownSubject">
                    <select class="subjectSelect" id="subjectSelect" name="subjectSelect">
                        <option>SUBJECT</option>
                        <option>Suggested Spot not located</option>
                        <option>Report Bugs</option>
                        <option>Account Issues</option>
                        <option>Other</option>
                    </select>
                </section>
                <!-- end fo dropdownBuildings-->

		<section class="control-group">
              <section class="controls">
	              <textarea rows="3" id="gydusContactMes" name="gydusContactMes" placeholder="Drop us a messege"></textarea>             
	               </section>
            </section>            
            
            
            <section class="control-group">
              <section class="controls">
                
                <button class="btn btn-success" type="submit" class="btn">SIGN UP</button>
              </section>
            </section>
          </form>
<button class="btn btn-block btn-warning" type="button"  onClick="location='<?php echo base_url();?>'">Go back Home</button>

          </section><!-- end of Gydus Login-->