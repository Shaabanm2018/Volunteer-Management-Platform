
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

	$student_id = $_POST['student_id'];
	// $student_id = (int)$student_id;
	

	$con = mysqli_connect("localhost", "root", "", "volunteeringDB");
	
	// // Check connection
	// if ($con->connect_error) {
	//     die("Connection failed: " . $con->connect_error);
	// }
	// echo "Connected successfully";


	$query = "INSERT INTO StudentProfile(id, name, age, gender, faculty, EventId) 
	VALUES ('$student_id','$name','$age', '$gender','$faculty', '$event_id,')";
	
	mysqli_query($con, $query);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type='text/javascript'>
		alert("Form Submitted!");
		var id = <?php echo $student_id;?>;
		window.location.href = "MainPageStudent.php?student_id="+ id;
	</script>
</head>
<body>

</body>
</html>