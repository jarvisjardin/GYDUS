<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
</head>

<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3Vx13Q8MwO4Dsi14Mp__6N1mOmVsbT30&sensor=true">
    </script>

<body>
	<section>
		<br><br><br><br>
		<h3 id="logCheckHead">This section represents the area that only logged in members can access.</h3>
		
		
		
		


		
		<section class="searchView hide" id="searchViewdisplay">
	<section class="findLocation alert alert-info">
		<h3 class="h3-findlocationtitle">Find Location</h3>
		<section class="findLocation-Close">
<!-- 		onClick="location='<?php echo base_url();?>index.php/mapController/'" -->
			<button class="gydus-findL-btn btn  btn-danger pull-right clearfix" id="findLbtnX" type="button" >X</button>

		</section><!-- end of findLocation Close-->
	</section><!-- end of findlocation-->
		<section class="searchkeyword">
			<form class="form-search">
				<section class="gydus-kw-append input-append">
					<input type="text" class="gydus-kw-search span2" placeholder="Search keyword or classroom">
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
				<a href="#" class="btn btn-large btn-block  ">Suggest a Spot</a>

			</section><!-- end of suggest spot btn-->
			<br>
			<section class="viewLocationbtn">
			<button class="btn btn-large btn-block btn-success" type="button">View Location</button>

			</section><!-- end of view location btn-->
		
		</section><!-- end of find location btns-->
	</section><!-- end of searchView-->
		
		
		
		<!---------------------------------------------------
		
		
		
		 Account Settings Menu
		 
		 
		 
		 ---------------------------------------------------->
		
		<!-- this is going to have a class of hide -->
		
		<section class="acctMenu">
			<section class="acctSettings alert alert-info">
				<h3 class="accountSettingsHead">Account Settings</h3>
			</section><!-- end of acctSettings-->
			
			<section class="logOutacctSettings alert alert-error">
				<h3 class="logOutaccountSettingsHead">Sign Out</h3>
			</section><!-- end of logoutacctSettings-->
		
		</section><!--- end of acctMenu--->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

<!-- 		<h4><?php echo anchor('index.php/userController/logout', 'Account Settings'); ?></h4> -->
		<h4>Account Settings link</h4>
		<h4 class="map-view-fL btn btn-large btn-block btn-info" id="map-viewFLbtn">Find Location</h4>
<!-- 		<?php echo anchor('index.php/mapController/searchView', 'Find Location'); ?> -->
		<h4><?php echo anchor('index.php/mapController/suggestaspotView', 'Suggest A Spot'); ?></h4>

	</section>
	
	<section class="map-spot">
		    <div id="map_canvas" style="width:100%; height:100%"></div>

	</section>
</body>
</html>	