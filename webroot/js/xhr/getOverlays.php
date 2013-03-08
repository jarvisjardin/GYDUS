<?php

	$host 	= "localhost";
	$db	= "Gydus";
	$user	= "root";
	$pass	= "root";
	
	$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	
	$sql = "SELECT * FROM Overlay";
	$q	 = $conn->query($sql) or die("failed!");
	
	$qArray = array()
	
	while($r = $q->fetch(PDO::FETCH_ASSOC)){
	 
	  array_push($qArray, $r);
	}

	echo json_encode(array('message'=>'overlays', 'result'=> $qArray);



 
//  $con = mysqli_connect($host,$user,$pass);
//  $dbs = mysqli_select_db($con, $databaseName);

  //$result = mysqli_query($con, "SELECT * FROM $tableName");          
  
 // $query = mysqli_fetch_($result);                          
  
  //echo json_encode($query);
  //var_dump($query)
  
?>