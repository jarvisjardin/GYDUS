<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<?php echo $map['js']; ?>

</head>

<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3Vx13Q8MwO4Dsi14Mp__6N1mOmVsbT30&sensor=true">
    </script>

<body>
	<section>
		<br><br><br><br>
		
		
		
		


		
		<section class="searchView hide" id="searchViewdisplay">
	<section class="findLocation alert alert-info">
		<h3 class="h3-findlocationtitle">Find Location</h3>
		<section class="findLocation-Close">
<!-- 		onClick="location='<?php echo base_url();?>index.php/mapController/'" -->
			<button class="gydus-findL-btn btn  btn-danger pull-right clearfix" id="findLbtnX" type="button" >X</button>

		</section><!-- end of findLocation Close-->
	</section><!-- end of findlocation-->
		<section class="searchkeyword">
			<form action="<?php echo base_url();?>index.php/mapController/search" method='post' class="form-search">
				<section class="gydus-kw-append input-append">
					<input type="text" class="gydus-kw-search span2" name='searchLocation' placeholder="Search keyword or classroom">
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
		<label class="checkbox inline">
			<input type="checkbox" id="inlineCheckbox1" value="option1"> Patio
		</label>
		<label class="checkbox inline">
			<input type="checkbox" id="inlineCheckbox2" value="option2"> Food/Drink
		</label>
		<label class="checkbox inline">
			<input type="checkbox" id="inlineCheckbox3" value="option3"> Library
		</label>
		</section><!--end of poiselection -->
		
		<section class="poiSelectionTwo">
		<label class="checkbox inline bs">
			<input type="checkbox" id="inlineCheckbox3" value="option3"> Book Store
		</label>
		
		<label class="checkbox inline">
			<input type="checkbox" id="inlineCheckbox3" value="option3"> Restroom
		</label>
		<label class="checkbox inline">
			<input type="checkbox" id="inlineCheckbox3" value="option3"> Receptionist
		</label>
		</section><!-- end o poi selection-->
		
		<section class="findlocationBtns">
		
			<section class="suggestSpotbtn">
				<a href="<?php echo base_url();?>index.php/mapController/suggestaspotView" class="btn btn-large btn-block  ">Suggest a Spot</a>

			</section><!-- end of suggest spot btn-->
			<br>
			<section class="viewLocationbtn">
			<button class="btn btn-large btn-block btn-success" type="submit">View Location</button>

			</section><!-- end of view location btn-->
		
		</section><!-- end of find location btns-->
	</section><!-- end of searchView-->
		
		
		
				
		
		
		
		
		
		
		
		
		
		
		


		<h4 class="map-view-fL btn btn-large btn-block btn-info" id="map-viewFLbtn">Find Location</h4>

	</section>
	
	<section id="mapSpot" class="map-spot">
		    <section id="map_canvas" class="mapCanvas pull-left" style="width:100%; height:100%">
			    <?php echo $map['html']; ?>
			</section>
			    

	</section>
</body>
</html>	