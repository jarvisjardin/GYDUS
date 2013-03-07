<section class="gydus-terms-titlebtn">
				<button class="contactusbutton btn btn-large btn-block btn-info" type="button" onClick="location='<?php echo base_url();?>index.php/mapController/'">Back to Map</button>
				
</section>
<section class="gydus-contactus">
<h1 class="gydus-register-headertxt">Contact Us</h1>

<form action="<?php echo base_url();?>index.php/userController/send_email"  method="post" class="form-horizontal gydus-form-horizontal ">


		<!-- NAME OF SPOT-->
		<section class="gyduscontact control-group">
              <label class="control-label" for="inputName">Name of Spot</label>
              <section class="controls">
                <input type="text" class="gydus-reg-name-input" name="reginputName"  id="reg-inputName reginputName" placeholder="Name of Spot">
              </section>
              
             <!-- EMAIL-->

            <section class="gyduscontact control-group">
              <label class="control-label" for="inputEmail">Your Email</label>
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

		<section class="gyduscontact control-group">
              <section class="controls">
	              <textarea rows="3" id="gydusContactMes" name="gydusContactMes" placeholder="Drop us a messege"></textarea>             
	               </section>
            </section>            
            
            
            <section class="control-group">
              <section class="controls">
                
                <button class="btn btn-success" type="submit" class="btn">SUBMIT</button>
              </section>
            </section>
          </form>

          </section><!-- end of Gydus Login-->