

<section class="sasView">
 <h1 class="gydus-login-headertxt">Suggest A Spot</h1>



<form action="<?php echo base_url();?>index.php/mapController/suggestaspot"  method="post"class="form-horizontal gydus-form-horizontal ">
            <section class="control-group">
              <section class="controls">
                <input type="text" class="gydus-login-email-input" name="spot-name" id="spot-name" placeholder="name">
              </section>
            </section>
            
             <section class="control-group">
              <section class="controls">
	              <textarea rows="3" placeholder="Description of Spot"></textarea>             
	               </section>
            </section>
              
              <section class="control-group">
              <section class="controls">
                
                <button  class="btn btn-primary" type="buton" class="btn">Suggest Location</button>
                <button  class="btn btn-danger" type="button" onClick="location='<?php echo base_url();?>index.php/mapController/'">CANCEL</button>
              </section>
            </section>
          </form>
          </section><!-- end of Gydus Login --> 
