<head>
	<?php echo $map['js']; ?>
</head>

<section class="sasView">
 <h1 class="gydus-login-headertxt">Suggest A Spot</h1>
 <section class="alert alert-block hide" id="sasSuccess">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>Warning!</h4>
  Best check yo self, you're not...
</section>
 <section class="searchkeyword">
			<form action="<?php echo base_url();?>index.php/mapController/suggestaspot" method='post' class="form-search">
				<section class="gydus-kw-append input-append">
					<input type="text" class="gydus-kw-search" name='spot-name' placeholder="Name of Spot">
				</section><!-- end of input-append-->
				
				
				<section class="gydus-kw-append-desc control-group">
					<section class="controls">
						<textarea rows="3" class="gydus-kw-search-spotDesc" placeholder="Description of Spot"></textarea>             
	                </section>
	            </section>
				
 </section><!-- end of searchkeyword-->
 				<section>
 					<input type="text" name="sasLat" id="sasLat"><br>
 					<input type="text" name="sasLng" id="sasLng"><br>

 				</section>


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
            	  <input type="text" name="sasLat" id="sasLat"><br>
     	          <input type="text" name="sasLng" id="sasLng"><br>


              <section class="control-group">
              	<section class="viewLocationbtn controls">
                
               	 <button  class="btn btn-large btn-block btn-primary" id="sasBtnsubmit" type="buton" class="btn" onClick="location='<?php echo base_url();?>index.php/mapController/'">Suggest Location</button>
                </section><!-- end of viewlocaionbtn-->
                
                <section class="sasCancel">
                              <button  class="btn btn-large btn-block btn-danger" type="button" onClick="location='<?php echo base_url();?>index.php/mapController/'">CANCEL</button>
                </section><!-- end of sas cancel-->
            </section>
          </form>
          

          <h2 id='sasPrompt'>Position the Marker where you want it!</h2>
          </section><!-- end of Gydus Login --> 



<section id="mapSpot" class="map-spot">
		    <section id="map_canvas" class="mapCanvas pull-left" style="width:100%; height:100%">
			    <?php echo $map['html']; ?>
			</section>
			    

	</section>