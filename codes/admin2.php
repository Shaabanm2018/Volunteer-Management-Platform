
 


<?php
 $id3 = $_GET['id3'];
 $l3 = $_GET['l3']; 
 $a3 = $_GET['a3']; 
 $e3 = $_GET['e3'];

 ?>
 
  <?php 

	$link = mysqli_connect("localhost", "root", "", "volunteeringDB");
	$q = "DELETE FROM StudentProfile WHERE id =$id3";
	 $result1 = mysqli_query($link , $q);
	 if($result1 == true){
		 echo "<script type='text/JavaScript'> alert('Porcess Completed Successfully! '); </script>";
	 }
	
?>

  <?php 

	$link = mysqli_connect("localhost", "root", "", "volunteeringDB");
	$q = "DELETE FROM LecturerProfile WHERE id =$l3";
	 $result1 = mysqli_query($link , $q);
	 if($result1 == true){
		 echo "<script type='text/JavaScript'> alert('Porcess Completed Successfully! '); </script>";
	 }
	
?>

  <?php 

	$link = mysqli_connect("localhost", "root", "", "volunteeringDB");
	$q = "DELETE FROM Admin WHERE id =$a3";
	 $result1 = mysqli_query($link , $q);
	 if($result1 == true){
		 echo "<script type='text/JavaScript'> alert('Porcess Completed Successfully! '); </script>";
	 }
	
?>
  <?php 

	$link = mysqli_connect("localhost", "root", "", "volunteeringDB");
	$q = "DELETE FROM Event WHERE id =$e3";
	 $result1 = mysqli_query($link , $q);
	 if($result1 == true){
		 echo "<script type='text/JavaScript'> alert('Porcess Completed Successfully! '); </script>";
	 }
	
?>


<?php
$link = mysqli_connect("localhost", "root", "", "volunteeringDB");
   $q = "SELECT * FROM StudentProfile";
   $result3 = mysqli_query($link , $q); 

   $q = "SELECT * FROM LecturerProfile";
   $result1 = mysqli_query($link , $q);
   
    $q = "SELECT * FROM Event";
   $result2 = mysqli_query($link , $q);
   
   $q = "SELECT * FROM Admin";
   $result4 = mysqli_query($link , $q);
   
   
 ?>
 
<!DOCTYPE html>
<html>
<head lang="en">
        <meta charset="utf-8">
        <title> Admin Page</title>
        
        <link rel="stylesheet" href="admin-reset.css">
		<link rel="stylesheet" href="admin.css">
		<link rel="stylesheet" href="admin2.css">
    </head>
<body>

	<header>
        <h1> <img src="mmulogo.png" alt="MMU logo" /></h1>
        <nav id="overlay">
            <ul>
                <li><a href="#homepage">Home</a></li>
                <li><a href="#profile_page">Profile</a></li>
                <li><a href="#homepage">Log Out</a></li>
            </ul>
        </nav>
    </header>


    <div class="split">
     

          <div class="delete">
              <h1>Delete Profiles</h1>
              <details id ="deletelecturer" >
                <summary>Delete Lecturer Profile</summary>
                <div class="DelLecProf">

                        <div class="DelLecDescr">
                         <?php 
                          while($rows= mysqli_fetch_array($result1)){
				 echo " <a href=\"admin.php?l2=".$rows['id']."\" > <input type=\"submit\" value = \" ".$rows['name']."\" name=\"join1\" class=\"join\" /> </a> </br>";
							  
						  }
						  ?>
                        </div>
                        
                </div>
              </details>

                <details id= "deletestudent">
                  <summary>Delete Student Profile</summary>
                  


                        <div class="DelLecDescr">
						<?php 
                          while($rows= mysqli_fetch_array($result3)){
				
							   echo " <a href=\"admin.php?id2=".$rows['id']."\" > <input type=\"submit\" value = \" ".$rows['name']."\" name=\"join1\" class=\"join\" /> </a> </br>";
						  }
						  ?>
                        </div>
                 
                </details>

                <details id= "deleteadmin">
                  <summary>Delete Admin Profile</summary>
                  <div class="DelAdminProf">
				                           <?php 
                          while($rows= mysqli_fetch_array($result4)){
							   echo " <a href=\"admin.php?a2=".$rows['id']."\" > <input type=\"submit\" value = \" ".$rows['name']."\" name=\"join1\" class=\"join\" /> </a> </br>";
							  
						  }
						  ?>


                          
                  </div>
                </details>

                <details id= "deleteevent">
                  <summary>Delete Event Profile</summary>
                  <div class="DelEvent">


                        <div class="DelEvDescr">
                         <?php 
                          while($rows= mysqli_fetch_array($result2)){
							   echo " <a href=\"admin.php?e2=".$rows['id']."\" > <input type=\"submit\" value = \" ".$rows['event_name']."\" name=\"join1\" class=\"join\" /> </a> </br>";
							  
						  }
						  ?>
                        </div>

                  </div>
                </details>
          </div>

          <footer id = "f">
              <p id="copyright">Copyright &copy; 2013 | Developed and Design by Mohamed Rafeeullah for Web Application Subject </p>
          </footer>

    </div>
	
</body>


</html>
