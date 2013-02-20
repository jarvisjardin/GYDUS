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
		<h3>This section represents the area that only logged in members can access.</h3>

		<h4><?php echo anchor('index.php/userController/logout', 'Logout'); ?></h4>
		<h4><?php echo anchor('index.php/mapController/searchView', 'Search'); ?></h4>
		<h4><?php echo anchor('index.php/mapController/suggestaspotView', 'Suggest A Spot'); ?></h4>

	</section>
	
	<section class="map-spot">
		    <div id="map_canvas" style="width:100%; height:100%"></div>

	</section>
</body>
</html>	