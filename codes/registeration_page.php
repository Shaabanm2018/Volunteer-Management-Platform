<!DOCTYPE html>
<html>
  <head lang="en">
        <meta charset="utf-8">
        <title> Login MMU Volunteering Platform</title>
		<link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="registeration_page.css">
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
		
		
		
		<nav class= "field">
		
		<nav class = "login">
		<p> Registeration </p>
		</nav>
<form action="registeration_page.php" id = "myForm" method="post">
		<nav class="field2">
		<input type ="text" name="Name" class = "f2" placeholder ="  Name" /> </br>
		<input type ="text" name="Id" class = "f2" placeholder ="  Id" /> </br>
		
		<input type = "password" name="password" class= "f2" placeholder ="  Password" /> </br> 
		<input type = "radio" name = "Type" value ="Student" class = "f1" placeholder = "Student" > Student
	
<nav class = "b">
<input type = "submit" Value = "Register" name = "register" />
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
if(isset($_POST['register'])){
	header("Refresh: 0; url= registeration_page.php");
if(isset( $_POST['Id']))
$id = $_POST['Id'];
else $id = "";
if(isset( $_POST['Name']))
$name = $_POST['Name'];
else $name = "";
if(isset( $_POST['password']))
$password = $_POST['password'];
else $password = "";
if(isset( $_POST['Type']))
$type = $_POST['Type'];
else $type = "";


$link = mysqli_connect("localhost", "root", "", "volunteeringDB");
$q = "INSERT INTO User(Id, Name, Password, Type) VALUES('$id', '$name', '$password','$type')";

$q2 = "SELECT Id From User WHERE Id =  '".$id."' ";

$result = mysqli_query($link , $q2);

if(!($row = mysqli_fetch_array($result))){
	if(!(trim($id) == '' || trim($password) == '' || trim($name) == '' || trim($type) == '' )){
if(mysqli_query($link , $q) == true){
	header("Refresh: 0; url= registeration_page.php");
	echo "<script type='text/javascript'> window.alert('Account Created Successfully !');";
	header("Refresh: 0; url= registeration_page.php");
	echo 'window.location.href = "login_page.php";';
	echo "</script>";
	
}
else {
	header("Refresh: 0; url= registeration_page.php");
	echo "<script type='text/JavaScript'> alert('Please Check From Your Data !'); </script>";
	exit();
}
}
else {
	header("Refresh: 0; url= registeration_page.php");
	echo "<script type='text/JavaScript'> alert('Please Fill Up Required Fields !'); </script>";
	exit();
}
}
else {
	header("Refresh: 0; url= registeration_page.php");
	echo "<script type='text/JavaScript'> alert('Id has been used before !'); </script>";
	exit();
}
}
 ?>
 
 
 