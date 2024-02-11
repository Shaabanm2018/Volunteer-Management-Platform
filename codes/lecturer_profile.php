<?php    
// Retrieve the URL variables (using PHP).
    $lecturer_id = $_GET['lecturer_id'];
?>

<?php

    $con = mysqli_connect("localhost", "root", "", "volunteeringDB");
    $query = "SELECT * FROM LecturerProfile";
    $result1 = mysqli_query($con , $query);
    $result2 = mysqli_query($con , $query);

?>
<?php

    $con = mysqli_connect("localhost", "root", "", "volunteeringDB");
    $query = "SELECT * FROM Event";
    $event_result = mysqli_query($con , $query);

?>

<!DOCTYPE html>
<html>
<head lang="en">
        <meta charset="utf-8">
        <title> Lecturer Profile</title>
        <link rel="stylesheet" href="lecturer_profile_new.css">
    </head>
<body>
	<header>
        <h1> <img src="images/mmulogo.png" alt="MMU logo" /></h1>
        <nav id="overlay"> 
            <ul>
                <li><a href="MainPageLecturer.php?lecturer_id=<?php echo $lecturer_id;?>">Home</a></li>
                <li><a href="login_page.php">Log Out</a></li>
            </ul>
        </nav>
    </header>
	
	<article >
		<h1> Profile </h1>
			<div class="profiledata">
				<?php 
				while($rows= mysqli_fetch_array($result1)){
					//display profile based on student id
					if ($rows['id']==$lecturer_id){
						echo "Name: ".$rows['name']."<br>";
						echo "Age: ".$rows['age']."<br>";
						echo "Gender: ".$rows['gender']."<br>";
						echo "Faculty: ".$rows['faculty']."<br><br>";
					}
				}
				?>
			</div>
			
			<div class ="approved">
				<h2><u>Signed Up Event</h2>
				<?php 

        while($rows= mysqli_fetch_array($result2)){

            //display profile based on lec id
            if ($rows['id']==$lecturer_id){
                // $EventId_arr = explode (",", $rows['EventId']); 
                $integerIDs = array_map('intval', explode(',', $rows['EventId']));
                // print_r($integerIDs);
                
                while($event_rows= mysqli_fetch_array($event_result)){
                    foreach($integerIDs as $value){
                        if($value == $event_rows['id']){
                            echo "<details>";
                            echo "<summary>".$event_rows['event_name']."</summary>";
                            echo "<div>";
                            echo "<img src=\"images/".$event_rows['photo']." \" alt=\"\" />";
                            // echo "Event Name: ".$event_rows['event_name']."<br>";
                            echo "<p>Event Date: ".$event_rows['event_date']."</p>";
                            echo "<p>Start Date: ".$event_rows['event_starttime']."</p>";
                            echo "<p>End Date: ".$event_rows['event_endtime']."</p>";
                            echo "<p>Location: ".$event_rows['place']."</p>";
                            echo "<p>Event Details: ".$event_rows['event_detail']."</p>";
                            echo "<p>Event Organizer: ".$event_rows['organizer']."</p>";
                            echo "<p>Category: ".$event_rows['category']."</p>";
                            echo "<p>Job Scope: ".$event_rows['job_scope']."</p>";
                            echo "<div>";
                            echo "</details>";

                        }
                    }
                    
                }
                // echo "EventID: ".$rows['EventId']."<br>";

            }
        }
    ?>
			</div>
			
	</article>
    <footer>
        <p id="copyright">Copyright &copy; 2013 | Developed and Design by Siti Syahirah for Web Application Subject </p>
    </footer>
</body>
</html>