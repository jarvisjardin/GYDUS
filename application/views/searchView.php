<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<title>untitled</title>
</head>
<body>
	<section class="findLocation alert alert-info">
		<h3 class="h3-findlocationtitle">Find Location</h3>
		<section class="findLocation-Close">
		
			<button class="gydus-findL-btn btn  btn-danger pull-right clearfix" type="button" onClick="location='<?php echo base_url();?>index.php/mapController/'">X</button>

		</section><!-- end of findLocation Close-->
	</section><!-- end of findlocation-->
		<section class="searchkeyword">
			<form class="form-search">
				<section class="input-append">
					<input type="text" class="span2 search-query">
						<button type="submit" class="btn">Search</button>
				</section><!-- end of input-append-->
		</section><!-- end of searchkeyword-->
		
		<section class="dropdownBuildings">
			<select multiple="multiple">
				<option>FS1</option>
				<option>FS2</option>
				<option>FS3</option>
				<option>FS4</option>

			</select>
		</section><!-- end fo dropdownBuildings-->
		
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
		
		<label class="checkbox inline">
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
				<a href="#" class="btn btn-large btn-block btn-primary disabled">Suggest a Spot</a>

			</section><!-- end of suggest spot btn-->
			<br>
			<section class="viewLocationbtn">
			<button class="btn btn-large btn-block btn-success" type="button">View Location</button>

			</section><!-- end of view location btn-->
		
		</section><!-- end of find location btns-->
	</section><!-- end of findlocation-->
</body>
</html>	