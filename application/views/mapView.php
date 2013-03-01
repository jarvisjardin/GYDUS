<!DOCTYPE html>
<head>
<?php echo $map[ 'js']; ?>
</head>


<body>
	<section>
		<br><br><br><br>
		
		
		<section class="searchView hide" id="searchViewdisplay">
			<section class="findLocation alert alert-info">
				<h3 class="h3-findlocationtitle">Find Location</h3>
		
				<section class="findLocation-Close">
					<button class="gydus-findL-btn btn  btn-danger pull-right clearfix" id="findLbtnX" type="button" >X</button>

				</section><!-- end of findLocation Close-->
			</section><!-- end of findlocation-->
			
			<section class="searchkeyword">
				<form action="<?php echo base_url();?>index.php/mapController/search" method='post' class="form-search">
					<section class="gydus-kw-append input-append">
						<input type="text" class="gydus-kw-search" name='searchLocation' placeholder="Search keyword or room">
					</section><!-- end of input-append-->
						<h3 class="searchOR">or</h3>
					</section><!-- end of searchkeyword-->
		
			<section class="dropdownBuildings">
				<select class="buildingSelect">
					<option>SELECT BUILDING</option>
					<option>FS1</option>
					<option>FS2</option>
					<option>FS3</option>
					<option>FS4</option>
				</select>
			</section><!-- end fo dropdownBuildings-->
		
			<section class="poiTitleSection alert alert-info">
				<h4 class="poiHeader ">Select Points of Interest</h4>
			</section>
			
			<section class="poiSelection">
				<label class="checkbox inline btn">
					<input type="checkbox" id="inlineCheckbox1" value="option1"> Patio
				</label>
				<label class="checkbox inline btn">
					<input type="checkbox" id="inlineCheckbox2" value="option2"> Food/beverage
				</label>
				<label class="checkbox inline btn">
					<input type="checkbox" id="inlineCheckbox3" value="option3"> Library
				</label>
			</section><!--end of poiselection -->
		
			<section class="poiSelectionTwo">
				<label class="checkbox inline btn">
					<input type="checkbox" id="inlineCheckbox3" value="option3"> BookStore
				</label>
			
				<label class="checkbox inline btn">
					<input type="checkbox" id="inlineCheckbox3" value="option3"> Restroom
				</label>
				<label class="checkbox inline btn">
					<input type="checkbox" id="inlineCheckbox3" value="option3"> Receptionist
				</label>
			</section><!-- end o poi selection-->
		
		<section class="findlocationBtns">
			<section class="suggestSpotbtn">
				<?php 
					$this->load->helper('url');

					if ($this->session->userdata('is_logged_in')){ ?>
					<a href="<?php echo base_url();?>index.php/mapController/suggestaspotView" class="btn btn-large btn-block">Suggest a Spot</a>		
				<?php }else{ ?>	
					<a href="<?php echo base_url();?>index.php/mapController/suggestaspotView" class="btn btn-large btn-block disabled">Suggest a Spot</a>
				<?php }; ?>	
			</section><!-- end of suggest spot btn-->
			<br>
			<section class="viewLocationbtn">
				<button class="btn btn-large btn-block btn-success" type="submit">View Location</button>
			</section><!-- end of view location btn-->
		</section><!-- end of find location btns-->
		</form>
	</section><!-- end of searchView-->
		
		
		


		<h4 class="map-view-fL btn btn-large btn-block btn-info" id="map-viewFLbtn">Find Location</h4>

	</section>
	

	
	<section id="mapSpot" class="map-spot">
		    <section id="map_canvas" class="mapCanvas pull-left" style="width:100%; height:100%">
			    <?php echo $map['html']; ?>
			</section>
			    

	</section>
	
	<?php $this->load->view('templates/footer'); ?>

</body>
</html>	