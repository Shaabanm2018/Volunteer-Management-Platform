<?php

	$con = mysqli_connect("localhost", "root", "", "volunteeringDB");
	// Check connection
		if ($con->connect_error) {
			die("Connection failed: " . $con->connect_error);
		}
		echo "Connected successfully";
	if(isset($_GET['event_id']))
        $event_id = $_GET['event_id'];
    else 
        $event_id = "";
	if(isset($_GET['lecturer_id']))
        $lecturer_id = $_GET['lecturer_id'];
    else 
        $lecturer_id = "";
	
	
	$query = "UPDATE Event
		SET status = 'approved'
		WHERE id= '$event_id'";



	$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type='text/javascript'>
		alert("Form Approved!");
		var id = <?php echo $lecturer_id;?>;
		window.location.href = "MainPageLecturer.php?lecturer_id="+ id;
	</script>
</head>
<body>

</body>
</html>