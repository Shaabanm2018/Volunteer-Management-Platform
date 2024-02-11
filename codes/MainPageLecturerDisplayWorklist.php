<?php
    // Retrieve the URL variables (using PHP).
   if(isset($_GET['lecturer_id']))
        $lecturer_id = $_GET['lecturer_id'];
    else 
        $lecturer_id = "";
?>

<?php

$link = mysqli_connect("localhost", "root", "", "volunteeringDB");
$q = "SELECT * FROM Event";
$result1 = mysqli_query($link , $q);
$result2 = mysqli_query($link , $q);
$result3 = mysqli_query($link , $q);
 ?>
 
<!DOCTYOPE html>
<html>
<head lang = "en">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Platform</title>
	<link rel="stylesheet" href="MainPage.css">
	<link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="try2.css"><link rel="stylesheet" href="try.css">
	
</head>
<body>
	<header>
	<div class="logo"><a href="#">
		<img src="images/mmulogo.png" alt="" />
	</a>
	</div>
	<nav>
		<ul>
			<li><a href="MainPageLecturer.php?lecturer_id=<?php echo $lecturer_id;?>"> Home </a></li>
			<li><a> View Events</a>
				<ul>
					<li><a href="#"> Academic </a></li>
					<li><a href="#"> Sports </a></li>
					<li><a href="#"> Activisme </a></li>
				</ul>
			</li>
			<li><a href="lecturer_profile.php?lecturer_id=<?php echo $lecturer_id?>"> My Profile</a></li>
			<li><a href="lecturer_form.php"> Create Event</a></li>
			<li><a href="MainPageLecturerDisplayWorklist.php?lecturer_id=<?php echo $lecturer_id?>"> Worklist</a></li>

			<li class="login"><a href="login_page.php"> Log Out </a>
			</li>				
		</ul>
	</nav>	
	</header>		

	<section class="event">
		<h1>EVENTS LIST</h1>
		<h2 id="2nd-title">Gain a new experience by becoming volunteer now !</h2>
	


		<form method ="post">
		<h3><a href="#">Sports</a></h3>
		<?php 
		while($rows= mysqli_fetch_array($result3)){
			if($rows['category'] == 'sports' && $rows['status'] == 'pending'){
			$event_id =  $rows['id'];
			$event_name =  $rows['event_name'];
			echo " <div class=\"right\"><a href=\"lecturer_approve.php?lecturer_id=$lecturer_id&event_id=$event_id&event_name=$event_name\"> ";
			echo "<figure>";
			echo "<img src=\"images/".$rows['photo']." \" alt=\"\" />";
			echo "<figcaption>".$rows['event_name']."</figcaption>";
			echo "</figure>";
			echo "<p class=\"text\">";
			echo $rows['event_detail'];
			echo "</p>";
			echo" <p class=\"level\">";
			echo "Date :".$rows['event_date']." <br/>";
			echo "Time : ".$rows['event_starttime']." - ".$rows['event_endtime']." <br/>";
			echo "</p>";
			
			echo "</a>";
			echo"<a href=\"student_volunteer_sign_up.php\">  <input type=\"submit\" value=\"Approve!\" name=\"join1\" class=\"join\"> </a>";
			// echo "<input type=\"submit\" value=\"JOIN NOW!\" name=\"join1\" class=\"join\">";
			echo "</div>";
			}
		}
		?>
		
				<h3><a href="#">ACADEMIC</a></h3>
		<?php 
		while($rows= mysqli_fetch_array($result1)){
			if($rows['category'] == 'academic' && $rows['status'] == 'pending'){
			$event_id =  $rows['id'];
			$event_name =  $rows['event_name'];
			echo " <div class=\"right\"><a href=\"lecturer_approve.php?lecturer_id=$lecturer_id&event_id=$event_id&event_name=$event_name\"> ";
			echo "<figure>";
			echo "<img src=\"images/".$rows['photo']." \" alt=\"\" />";
			echo "<figcaption>".$rows['event_name']."</figcaption>";
			echo "</figure>";
			echo "<p class=\"text\">";
			echo $rows['event_detail'];
			echo "</p>";
			echo" <p class=\"level\">";
			echo "Date :".$rows['event_date']." <br/>";
			echo "Time : ".$rows['event_starttime']." - ".$rows['event_endtime']." <br/>";
			echo "</p>";
		
			echo "</a>";
			echo"<a href=\"student_volunteer_sign_up.php\">  <input type=\"submit\" value=\"Approve!\" name=\"join1\" class=\"join\"> </a>";
			// echo "<input type=\"submit\" value=\"JOIN NOW!\" name=\"join1\">";
			echo "</div>";
			}
		}
		?>
				<h3><a href="#"> Activisme</a></h3>
		<?php 
		while($rows= mysqli_fetch_array($result2)){
			if($rows['category'] == 'activisme' && $rows['status'] == 'pending'){
			$event_id =  $rows['id'];
			$event_name =  $rows['event_name'];
			echo " <div class=\"right\"><a href=\"lecturer_approve.php?lecturer_id=$lecturer_id&event_id=$event_id&event_name=$event_name\">";
			echo "<figure>";
			echo "<img src=\"images/".$rows['photo']." \" alt=\"\" />";
			echo "<figcaption>".$rows['event_name']."</figcaption>";
			echo "</figure>";
			echo "<p class=\"text\">";
			echo $rows['event_detail'];
			echo "</p>";
			echo" <p class=\"level\">";
			echo "Date :".$rows['event_date']." <br/>";
			echo "Time : ".$rows['event_starttime']." - ".$rows['event_endtime']." <br/>";
			echo "</p>";
			
			echo "</a>";
			echo"<a href=\"student_volunteer_sign_up.php\">  <input type=\"submit\" value=\"Approve!\" name=\"join1\" class=\"join\"> </a>";
			// echo "<input type=\"submit\" value=\"<a href='#R'>\" name=\"join1\" class=\"join\">";
			echo "</div>";
			}
		}
		?>
		</form>

		</section>	
</body>

</html>

