<?php
// WAITING FOR MAIN PAGE TO PASS EVENT NAME
	$name = $_POST['name'];
	$age = $_POST['age'];
	
	$DataArr = array();
	foreach ($_POST['gender'] as $key => $value) {
    	array_push($DataArr, $value);
	}
	$gender = implode(",", $DataArr);

	$faculty = $_POST['faculty'];

	$event_id = $_POST['event_id'];

	$lecturer_id = $_POST['lecturer_id'];
	// $lecturer_id = (int)$lecturer_id;
	echo gettype($lecturer_id);

	$con = mysqli_connect("localhost", "root", "", "volunteeringDB");
	
	// // Check connection
	// if ($con->connect_error) {
	//     die("Connection failed: " . $con->connect_error);
	// }
	// echo "Connected successfully";


	$query = "INSERT INTO LecturerProfile(id, name, age, gender, faculty, EventId) 
	VALUES ('$lecturer_id','$name','$age', '$gender','$faculty', '$event_id,')";
	
	mysqli_query($con, $query);
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
	