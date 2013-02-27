<head>
	<?php echo $map['js']; ?>
</head>

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
            <section>
            	  <input type="hidden" name="sasLat" id="sasLat"><br>
     	          <input type="hidden" name="sasLng" id="sasLng"><br>

            </section>
              
              <section class="control-group">
              <section class="controls">
                
                <button  class="btn btn-primary" type="buton" class="btn">Suggest Location</button>
                <button  class="btn btn-danger" type="button" onClick="location='<?php echo base_url();?>index.php/mapController/'">CANCEL</button>
              </section>
            </section>
          </form>
          
          <h2 id='sasPrompt'>Position the Marker where you want it!</h2>
          </section><!-- end of Gydus Login --> 


<section id="mapSpot" class="map-spot">
		    <section id="map_canvas" class="mapCanvas pull-left" style="width:100%; height:100%">
			    <?php echo $map['html']; ?>
			</section>
			    

	</section>