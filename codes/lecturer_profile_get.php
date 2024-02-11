<?php
	
	$con = mysqli_connect("localhost", "root", "", "volunteeringDB");

	$query = "SELECT * FROM Event";
	$result = mysqli_query($con, $query);

	while($row = mysqli_fetch_array($result)){
		echo $row['event_name'];
		echo $row['event_date'];
		echo $row['event_time'];

	}
	
?>