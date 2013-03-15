<?php
	// connect to the "tests" database
	$conn = new mysqli('localhost', 'root', 'root', 'Gydus');
	
	// check connection
	if (mysqli_connect_errno()) {
	  exit('Connect failed: '. mysqli_connect_error());
	}
	
	// SELECT sql query
	$sql = "SELECT * FROM `Overlays`"; 
	
	// perform the query and store the result
	$result = $conn->query($sql);
	
	// if the $result contains at least one row
	if ($result->num_rows > 0) {
	  // output data of each row from $result
	  $qArray = array();
	  while($row = $result->fetch_assoc()) {
	    array_push($qArray, $row);
	   // echo '<br /> id: '. $row['id']. ' - name: '. $row['name']. ' - pass: '. $row['pass'];
	  }
	  
	  echo json_encode($qArray);
	}
	else {
	  echo 'There`s and error brah';
	}
	
	$conn->close();	  
?>