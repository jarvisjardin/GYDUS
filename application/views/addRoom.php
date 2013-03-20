<head>
<?php echo $map[ 'js']; ?>
</head>
<section class="sasView hide">
 <h1 class="gydus-login-headertxt">ADDROOM</h1>
 <section class="alert alert-block hide" id="sasSuccess">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>Warning!</h4>
  Best check yo self, you're not...
</section>
 <section class="searchkeyword">
			<form action="<?php echo base_url();?>index.php/mapController/addRoom" method='post' class="form-search">
				<section>
					<input type="text" class="gydus-kw-building" id="buildingName" autocomplete="off" name='spot-Building' placeholder="Building Num"><span class="checksasSpotname hide">√</span><span class="wrongsasSpotname hide">What Building</span>

				</section><!-- end of input-append-->
			
			
				<section class="gydus-kw-append input-append">
					<input type="text" class="gydus-kw-search" id="sasSpotname" autocomplete="off" name='spot-name' placeholder="Room Name"><span class="checksasSpotname hide">√</span><span class="wrongsasSpotname hide">Please enter a Spot Name</span>

				</section><!-- end of input-append-->
		
				
 </section><!-- end of searchkeyword-->
 				<section>
 					
 					<input type="hidden" name="sasLat" id="sasLat"><br>
 					<input type="hidden" name="sasLng" id="sasLng"><br>

 				</section>


              <section class="control-group">
              	<section class="viewLocationbtn controls">
                
               	 <button  class="btn btn-large btn-block btn-success" id="sasBtnsubmit" type="buton" class="btn" onClick="location='<?php echo base_url();?>index.php/mapController/addRoomView'">Suggest Location</button>
                </section><!-- end of viewlocaionbtn-->
                
                <section class="sasCancel">
                              <button  class="btn btn-large btn-block btn-warning" type="button" onClick="location='<?php echo base_url();?>index.php/mapController/'">CANCEL</button>
                </section><!-- end of sas cancel-->
            </section>
          </form>
          

          </section><!-- end of Gydus Login --> 

<section id="sasPrompt" class="alert alert-block">
<h3>Suggest a Spot</h3>
  <p>1.Tap and hold to drag pin</p><br>
  <p>2.Double Tap pin to give information</p>
</section>


<section id="mapSpot" class="map-spot">
		    <section id="map_canvas" class="mapCanvas pull-left" style="width:100%; height:100%">
			    <?php echo $map['html']; ?>
			</section>
			    

	</section>
	
	