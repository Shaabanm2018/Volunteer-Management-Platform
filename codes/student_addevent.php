<?php
    // Retrieve the URL variables (using PHP).
    if(isset($_GET['student_id']))
        $student_id = $_GET['student_id'];
    else 
        $student_id = "";
?>

<!DOCTYPE html> 
<html>
    <head lang="en">
        <meta charset="utf-8">
        <title> Create Volunteering Event Form</title>
        <link rel="stylesheet" href="form.css">
    </head>
    <body>
        <header>
            <h1> <img src="mmulogo.png" alt="MMU logo" /></h1>
            <nav id="overlay"> 
                <ul>
                    <li><a href="MainPageStudent.php?student_id=<?php echo $student_id;?>">Home</a></li>
                    <li><a href="student_profile.php?student_id=<?php echo $student_id?>">Profile</a></li>
                    <li><a href="login_page.php">Log Out</a></li>
                </ul>
            </nav>
        </header>
        <article>
            <div>
            <form action="student_addevent_form.php" method ="post">
            <fieldset>
            	<legend><h4>Add Event</h4></legend>
                <label for="Events Name">Event Name (Maximum 100 Characters)</label>
                <input type="text" name="event_name" placeholder="Event Name">
                <br/>
                <label for="date">Date</label>
                <input type="date" name="date">
                <br/>
                <label for="event_starttime">Start Time (Hr:Min:Am/Pm)</label>
                <input type="time" name="event_starttime">
                <br/>
                <label for="event_endtime">End Time (Hr:Min:Am/Pm)</label>
                <input type="time" name="event_endtime">
                <br/>
                <label for="Event Location">Event Location</label>
                <input type="text" name="place" placeholder="Building, address">
                <br/>
                <label for="Events Details">Event Description (Maximum 500 Characters) </label><br>
                <textarea name="event_detail" name="event_detail" placeholder="Explain event detail" ></textarea>
                <br/>
                <label for="Organizer">Organizer</label>
                <input type="text" name="organizer">
                <br/>
                <label for="category">Event Category</label>
                <select name="category">
                    <option value="academic">Academic</option>
                    <option value="sports">Sports</option>
                    <option value="activisme">Activisme</option>
                    <option value="others">Others</option>
                </select>
                <br/>
                <label for="volunteer_pack">Volunteer Pack</label><br>
                <input type="checkbox" name="volunteerPack[]" value="food">Food and Beverages<br>
                <input type="checkbox" name="volunteerPack[]" value="tshirt">T-shirt<br>
                <input type="checkbox" name="volunteerPack[]" value="tag">Tags<br>
                <input type="checkbox" name="volunteerPack[]" value="certificate">Certificate<br>
                <input type="checkbox" name="volunteerPack[]" value="letter">Exemption Letter<br>
                <br>

                <label for="volunteer_amount">Volunteer Amount Need</label><br>
                <input type="number" name="volunteer_amount"><br>
                <label for="job_scope"> Volunteer Job Scope</label><br>
                <textarea name="job_scope" name="job_scope" placeholder="Describe what the volunteer will do"></textarea>
                <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">


                <input type="submit" value="Submit Request">
            </fieldset>
            </form>
        </div>
        </article>
        <footer>
            <p id="copyright">Copyright &copy; 2013 | Developed and Design by Siti Syahirah for Web Application Subject </p>
        </footer>
    </body>
</html>