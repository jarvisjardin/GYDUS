<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<title>untitled</title>
</head>
<body>

<section class="searchView">
	<section class="findLocation alert alert-info">
		<h3 class="h3-findlocationtitle">Find Location</h3>
		<section class="findLocation-Close">
		
			<button class="gydus-findL-btn btn  btn-danger pull-right clearfix" type="button" onClick="location='<?php echo base_url();?>index.php/mapController/'">X</button>

		</section><!-- end of findLocation Close-->
	</section><!-- end of findlocation-->
		<section class="searchkeyword">
			<form action="<?php echo base_url();?>index.php/mapController/search" method='post' class="form-search">
				<section class="gydus-kw-append input-append">
					<input type="text" class="gydus-kw-search span2" placeholder="Search keyword or classroom" id="searchLocation">
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
				<a href="#" class="btn btn-large btn-block  disabled">Suggest a Spot</a>

			</section><!-- end of suggest spot btn-->
			<br>
			<section class="viewLocationbtn">
			<button class="btn btn-large btn-block btn-success" type="submit">View Location</button>

			</section><!-- end of view location btn-->
		
		</section><!-- end of find location btns-->
	</form>
	</section><!-- end of searchView-->

</body>
</html>	