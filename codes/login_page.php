<?php
include ('1.createdb.php');

 ?>

<!DOCTYPE html>
<html>
	<head lang="en">
        <meta charset="utf-8">
        <title> Login MMU Volunteering Platform</title>
		<link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="login_page.css">
		
    </head>
	<body>
		<nav class="h">
			<h1> </h1>
		</nav>
			  
		<nav class ="h1">
			  
			<h2> </h2>
		</nav>
					    
		<nav class = "logo">
			<h1> <img src="login_images/mmulogo.png" alt="MMU logo" /></h1>
		</nav>
		
		<nav class = "login">
			<p> Login </p>
		</nav>
		
		<form action="login_page.php" id = "myForm" method="post">
		<nav class="field2">
			<input type ="text" name="Id1" class = "f2" placeholder ="  Id" /> </br>
			<input type = "password" name="password1" class= "f2" placeholder ="  password" /> </br>
			<nav class = "b">
				<a href ="registeration_page.php" class = "b"> Create New Account </a>
			</nav>
			<nav class = "d">
				<input type = "submit" Value = "LOG IN" name = "login" />
			</nav>
	
		</nav>
		</form>

		<script>
		if ( window.history.replaceState ) {
		  window.history.replaceState( null, null, window.location.href );
		}

		document.getElementById("myForm").reset();
		</script>
		
		<footer>
			<nav class = "footer1">
				<p  class = "footerItem copyright" id="copyright">Copyright &copy; 2013 Multimedia University</p>
				<div class = "footerItem">
					<p>General Enquiries: 017-668-2803</p>
					<p>  IT Hotline No : 03-8312 5777 (C) | 06-252 4777 (M)</p>
					<p> After Office Hours (for classroom support) : 013-622 2196 </p>
				</div>
				<p class = "tr1"> </p>
				<p class = "tr">Email : 1151304220@student.mmu.edu.my </p>

			</nav>
	 
	 
	</footer>
</body>
</html>



<?php 

if(isset($_POST['login'])){
	header("Refresh: 0; url= login_page.php");
if(isset($_POST['Id1']))
$insertedId = $_POST['Id1'];
else 
	$insertedId = "noe";

if(isset($_POST['password1']))
$insertedpassword = $_POST['password1'];
else 
	$insertedpassword = " ";
$r = "SELECT Type From User WHERE Id =  '".$insertedId."' AND Password = '".$insertedpassword."' ";


$link = mysqli_connect("localhost", "root", "", "volunteeringDB");

$q = "SELECT Id, Password, Type From User WHERE Id =  '".$insertedId."' AND Password = '".$insertedpassword."' ";

$result = mysqli_query($link , $q);
$rr = mysqli_query($link, $r);


if($row = mysqli_fetch_array($result)&&(!( $insertedId == "noe"))){
	$com = mysqli_fetch_array($rr);
	if($com["Type"]  == 'Student'){
	echo "<script type='text/javascript'>";
	echo "var id = '$insertedId';";
	echo "window.location.href = 'MainPageStudent.php?student_id='+ id;";
	echo "</script>";
	}
	else {
	echo "<script type='text/javascript'>";
	echo "var id = '$insertedId';";
	echo "window.location.href = 'MainPageLecturer.php?lecturer_id='+ id;";
	echo "</script>";
	}
	
}
else {
	header("Refresh: 0; url= login_page.php");
	echo "<script type='text/JavaScript'> alert('Please Check From Your Id or Password!'); </script>";
	
exit();
}

}
?>








