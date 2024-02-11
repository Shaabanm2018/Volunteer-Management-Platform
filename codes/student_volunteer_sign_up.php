
<?php
    // Retrieve the URL variables (using PHP).
	if(isset($_GET['event_id']))
		$event_id = $_GET['event_id'];
	else 
        $event_id ="";
	if(isset ($_GET['event_name']))
        $event_name = $_GET['event_name'];
	else 
        $event_name= "";
    if(isset($_GET['student_id']))
        $student_id = $_GET['student_id'];
	else 
        $student_id = "";

    // echo $student_id;
    // echo $event_id;
    // echo $event_name;
?>

<!DOCTYPE html> 
<html>
    <head lang="en">
        <meta charset="utf-8">
        <title> Applying for Volunteering Form</title>
        <link rel="stylesheet" href="form.css">
    </head>
    <body>
        <header>
            <h1> <img src="mmulogo.png" alt="MMU logo" /></h1>
            <nav id="overlay"> 
                <ul>
                    <li><a href="MainPageStudent.php?student_id=<?php echo $student_id;?>">Home</a></li>
                    <li><a href="student_profile.php?student_id=<?php echo $student_id;?>">Profile</a></li>
                    <li><a href="login_page.php">Log Out</a></li>
                </ul>
            </nav>
        </header>
        <article>
            <div>
            <form action="student_volunteer_form.php" method ="post">
            <fieldset>
                <legend><h4>
                <?php echo "Sign up for {$event_name}" ?>
                </h4></legend>

                <label for="Name">Name</label>
                <input type="text" name="name" placeholder="Name">
                <br/>


                <label for="Age">Age</label>
                <input type="number" min="16" max="60" name="age">
                <br/>

                <label for="Gender">Gender</label><br/>
                <input type="radio" name="gender[]" value="Male"/>Male<br/>
               <input type="radio" name="gender[]" value="Female"/>Female<br/>
               <input type="radio" name="gender[]" value="Others"/>Others<br>
               <br/>

                <label for="faculty">Faculty</label>
                <select name="faculty" >
                    <option value="FOM">Faculty of Management</option>
                    <option value="FCI">Faculty Computer and Informatics</option>
                    <option value="FCM">Faculty of Creative Multimedia</option>
                    <option value="others">Others</option>
                </select>
                <br/>
                <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
                <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
                <input type="submit" value="Submit">
            </fieldset>
                
            </form>
        </div>
        </article>
        <footer>
            <p id="copyright">Copyright &copy; 2013 | Developed and Design by Siti Syahirah for Web Application Subject </p>
        </footer>
    </body>
</html>