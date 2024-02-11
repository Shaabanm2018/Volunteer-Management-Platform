<?php
	$event_name = $_POST['event_name'];
	$date = $_POST['date'];
	$event_starttime = $_POST['event_starttime'];
	$event_endtime = $_POST['event_endtime'];
	$place = $_POST['place'];
	$event_detail = $_POST['event_detail'];
	$organizer = $_POST['organizer'];
	$category = $_POST['category'];

	$DataArr = array();
	foreach ($_POST['volunteerPack'] as $key => $value) {
    	array_push($DataArr, $value);
	}
	$volunteerPackArr = implode(",", $DataArr);


	$volunteer_amount = $_POST['volunteer_amount'];
	$job_scope = $_POST['job_scope'];
	$status = 'approved';
	$lecturer_id = $_POST['lecturer_id'];


	$con = mysqli_connect("localhost", "root", "", "volunteeringDB");
	
	// Check connection
	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	}
	echo "Connected successfully";


	$query = "INSERT INTO Event
		(event_name, event_date, event_starttime,
		event_endtime, place, event_detail,organizer,
		category,volunteerPack,volunteer_amount,job_scope, status) 
		VALUES ('$event_name','$date', '$event_starttime',
		'$event_endtime', '$place', '$event_detail', '$organizer',
		'$category','$volunteerPackArr',$volunteer_amount,'$job_scope',
		'$status')";
	
	$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php echo $lecturer_id;?>;
	<script type='text/javascript'>
		alert("Form Submitted!");
		var id = <?php echo $lecturer_id;?>;
		window.location.href = "MainPageLecturer.php?lecturer_id="+ id;
	</script>
</head>
<body>

</body>
</html>
	
