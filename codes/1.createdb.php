<?php

	$con = mysqli_connect("localhost", "root", "");


	$query = "CREATE DATABASE IF NOT EXISTS volunteeringDB";

	mysqli_query($con, $query);

	$con = mysqli_connect("localhost", "root", "", "volunteeringDB");	
	
	$q = "SELECT * FROM Event";
	$result = mysqli_query($con , $q);
	if($result == false){
	$query = "CREATE TABLE IF NOT EXISTS Event(
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				event_name VARCHAR(100) NOT NULL,
				event_date DATE NOT NULL,
				event_starttime TIME NOT NULL,
				event_endtime TIME NOT NULL,
				place VARCHAR(100) NOT NULL,
				event_detail VARCHAR(500) NOT NULL,
				organizer VARCHAR(30) NOT NULL,
				category VARCHAR(50) NOT NULL,
				volunteerPack VARCHAR(100) NOT NULL,
				volunteer_amount INT(3) NOT NULL,
				job_scope VARCHAR(500) NOT NULL,
				status VARCHAR(10) NOT NULL, photo VARCHAR(30) NOT NULL
				)";	
				
				mysqli_query($con, $query);
				
				// data: java workshop
	$query = "INSERT INTO Event(event_name, event_date, event_starttime, event_endtime, place, event_detail,organizer, category,volunteerPack,volunteer_amount,job_scope, status, photo) VALUES ('Java Seminar','2019-08-12', '09:00:00', '18:00:00', 'FCI', 'Become Java Seminar volunteer now!', 'IT Society','academic','food,tag,certificate,letter',10,'Help set up venue', 'approved','download.png')";

	mysqli_query($con, $query);

	// data: HTML5 Expert Class
	$query = "INSERT INTO Event(event_name, event_date, event_starttime, event_endtime, place, event_detail,organizer, category,volunteerPack,volunteer_amount,job_scope, status, photo) VALUES ('HTML5 Expert Class','2019-08-13', '09:00:00', '17:00:00', 'FCI', 'Become HTML5 Expert Class volunteer now!', 'IT Society','academic','food,tag,certificate,letter',5,'Help set up computers', 'approved','html.jpg')";
	
	mysqli_query($con, $query);

	// data: C++ Workshop
	$query = "INSERT INTO Event(event_name, event_date, event_starttime, event_endtime, place, event_detail,organizer, category,volunteerPack,volunteer_amount,job_scope, status, photo) VALUES ('C++ Workshop','2019-08-14', '09:00:00', '18:00:00', 'FCI', 'Become C++ Workshop volunteer now!', 'MMU','academic','food,tag,certificate,letter',10,'help the participants with their technical problems', 'approved','c++.png')";
	
	mysqli_query($con, $query);

	// data: C++ International Competition
	$query = "INSERT INTO Event(event_name, event_date, event_starttime, event_endtime, place, event_detail,organizer, category,volunteerPack,volunteer_amount,job_scope, status, photo) VALUES ('C++ International Competition','2019-08-15', '09:00:00', '18:00:00', 'FCI', 'Become C++ International Competition volunteer now!', 'MMU','academic','food,tshirt,tag,certificate,letter',30,'Usher, prepare f&b, help in registration', 'approved','c+.jpg')";
	
	mysqli_query($con, $query);

	// data: Bowling Tournament 2019
	$query = "INSERT INTO Event(event_name, event_date, event_starttime, event_endtime, place, event_detail,organizer, category,volunteerPack,volunteer_amount,job_scope, status, photo) VALUES ('Bowling Tournament 2019','2019-08-30', '09:00:00', '18:00:00', 'Sunway Pyramid Bowling Avenue', 'Become Bowling Tournament 2019 volunteer now!', 'MMU Sports Club','sports','food,tshirt,tag,certificate,letter',10,'Usher, prepare f&b, help in registration', 'approved','bowling.jpg')";
	
	mysqli_query($con, $query);

		// data: Charity Run Recruitment
	$query = "INSERT INTO Event(event_name, event_date, event_starttime, event_endtime, place, event_detail,organizer, category,volunteerPack,volunteer_amount,job_scope, status, photo) VALUES ('Charity Run Recruitment','2019-08-30', '09:00:00', '18:00:00', 'Bukit Jalil', 'Become Charity Run Recruitment volunteer now!', 'MMU Volunteering Club','sports','food,tshirt,tag,certificate,letter',30,'Usher, prepare f&b, help in registrations', 'approved','marahon.jpg')";
	
	mysqli_query($con, $query);

	// data: Plan, Manage, Eat, Healthy!
	$query = "INSERT INTO Event(event_name, event_date, event_starttime, event_endtime, place, event_detail,organizer, category,volunteerPack,volunteer_amount,job_scope, status, photo) VALUES ('Plan, Manage, Eat, Healthy!','2019-09-01', '09:00:00', '18:00:00', 'MMU Grand Hall', 'Become Plan, Manage, Eat, Healthy! volunteer now!', 'MMU Sports Club','sports','food,tshirt,tag,certificate,letter',10,'Usher, prepare f&b, help in registrations', 'approved','diet.jpg')";
	
	mysqli_query($con, $query);

	// data: Next Lee Chong Wei Searching Mission
	$query = "INSERT INTO Event(event_name, event_date, event_starttime, event_endtime, place, event_detail,organizer, category,volunteerPack,volunteer_amount,job_scope, status, photo) VALUES ('Next Lee Chong Wei Searching Mission','2019-09-01', '09:00:00', '18:00:00', 'MMU Grand Hall', 'Become Next Lee Chong Wei Searching Mission volunteer now!', 'MMU Sports Club','sports','food,tshirt,tag,certificate,letter',10,'Usher, prepare f&b, help in registrations', 'approved','badminton.jpg')";
	
	mysqli_query($con, $query);

	// data: Homeless Mission
	$query = "INSERT INTO Event(event_name, event_date, event_starttime, event_endtime, place, event_detail,organizer, category,volunteerPack,volunteer_amount,job_scope, status, photo) VALUES ('Homeless Mission','2019-09-03', '09:00:00', '18:00:00', 'KL Petaling Street', 'Become Homeless Mission volunteer now!', 'MMU Volunteering Club','activisme','food,tshirt,tag,certificate,letter',10,'help out', 'approved','images.jpg')";
	
	mysqli_query($con, $query);

	// data: Cambodia Humanitarian Mission
	$query = "INSERT INTO Event(event_name, event_date, event_starttime, event_endtime, place, event_detail,organizer, category,volunteerPack,volunteer_amount,job_scope, status, photo) VALUES ('Cambodia Humanitarian Mission','2019-09-04', '09:00:00', '18:00:00', 'KL Le Meridien Hotel', 'Become Cambodia Humanitarian Mission volunteer now!', 'MMU Volunteering Club','activisme','food,tshirt,tag,certificate,letter',10,'help out in preparing goodie bags', 'approved','download.jpg')";
	
	mysqli_query($con, $query);

	// data: Phillipines Humanitarian Mission
	$query = "INSERT INTO Event(event_name, event_date, event_starttime, event_endtime, place, event_detail,organizer, category,volunteerPack,volunteer_amount,job_scope, status, photo) VALUES ('Phillipines Humanitarian Mission','2019-09-05', '09:00:00', '18:00:00', 'KL Le Meridien Hotel', 'Become Phillipines Humanitarian Mission volunteer now!', 'MMU Volunteering Club','activisme','food,tshirt,tag,certificate,letter',10,'help out in preparing goodie bags', 'approved','lol.jpg')";
	
	mysqli_query($con, $query);

	// data: Mosque Building Charity Program
	$query = "INSERT INTO Event(event_name, event_date, event_starttime, event_endtime, place, event_detail,organizer, category,volunteerPack,volunteer_amount,job_scope, status, photo) VALUES ('Mosque Building Charity Program','2019-09-06', '09:00:00', '18:00:00', 'MMU Mosque', 'Become Mosque Building Charity Program volunteer now!', 'MMU Volunteering Club','activisme','food,tshirt,tag,certificate,letter',10,'help out in registration', 'approved','mosque.jpg')";
	
	mysqli_query($con, $query);
				
	}
	
    $q = "SELECT * FROM StudentProfile";
	$result = mysqli_query($con , $q);
	if($result == false){
	$query = "CREATE TABLE IF NOT EXISTS StudentProfile(
				id INT(30) PRIMARY KEY,
				name VARCHAR(50) NOT NULL,
				age INT(3) NOT NULL, 
				gender VARCHAR(7) NOT NULL, 
				faculty VARCHAR(50) NOT NULL, 
				EventId VARCHAR(30)
				)";	
	mysqli_query($con, $query);
	
	
		$query = "INSERT INTO StudentProfile(id, name, age, gender, faculty, EventId) VALUES 
			(110, 'Rafeel','21', 'male','FCI', '1,2,'),
			(1110, 'Amir','22', 'male','FOM', '2,6,1,'),
			(112233433, 'Amir','21', 'male','FCI', '5,4,2,'),
			(1150212234, 'Jac','20', 'female','FCI', '3,4,'),
			(1151304220, 'Shaaban ','20', 'male','FOM', '1,')";

	mysqli_query($con, $query);
	
	}

	// $query = "CREATE TABLE user(
	// 			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	// 			Id VARCHAR(30) NOT NULL,
	// 			age INT(3) NOT NULL, 
	// 			gender VARCHAR(7) NOT NULL, 
	// 			faculty VARCHAR(50) NOT NULL, 
	// 			EventId VARCHAR(30)
	// 			)";	
	// mysqli_query($con, $query);


		   $q = "SELECT * FROM User";
	$result = mysqli_query($con , $q);
	if($result == false){
	$query = "CREATE TABLE IF NOT EXISTS User(
				Id INT(30) PRIMARY KEY,
				Name VARCHAR(50) NOT NULL,
				Password VARCHAR(30) NOT NULL,
				Type VARCHAR(30) NOT NULL
				)";
	mysqli_query($con, $query);
	
	$query = "INSERT INTO `User` (`Id`, `Name`, `Password`, `Type`) VALUES
			('110', 'Rafeel', '1122', 'Student'),
			('1110', 'Amir', '1110', 'Student'),
			('112233433', 'Amir', '1124433', 'Student'),
			('11234', 'Amran', '11221', 'Lecturer'),
			('1150212234', 'Jac', '22112', 'Student'),
			('1151304220', 'Shaaban ', '11122', 'Student'),
			('1161302853', 'Shaira ', '11122', 'Lecturer');";
			
			mysqli_query($con, $query);
	}

	   $q = "SELECT * FROM LecturerProfile";
	$result = mysqli_query($con , $q);
	if($result == false){
		$query= "CREATE TABLE LecturerProfile(
		id INT(30) PRIMARY KEY,
		name VARCHAR(50) NOT NULL,
		age INT(3) NOT NULL, 
		gender VARCHAR(7) NOT NULL, 
		faculty VARCHAR(50) NOT NULL, 
		EventId VARCHAR(30)
			)";

	mysqli_query($con, $query);
	
	// $query= "INSERT INTO LecturerProfile
	// 		(id,name, age,gender,faculty,EventId)
	// 		VALUES (11234, 'Amran', 35,'male', 'FCI', '1,')";

	mysqli_query($con, $query);
	
	$query= "INSERT INTO LecturerProfile
			(id,name, age,gender,faculty,EventId)
			VALUES (1161302853, 'Shaira', 30,'female', 'FCI', '7,')";
			
	mysqli_query($con, $query);
	
	$query= "INSERT INTO LecturerProfile
			(id,name, age,gender,faculty,EventId)
			VALUES (123456, 'Syahirah', 40,'female', 'FCI', '5,')";
	
	mysqli_query($con, $query);
		
		
	}



	// $query = "CREATE TABLE Volunteer(
	// 			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	// 			name VARCHAR(50) NOT NULL,
	// 			age INT(3) NOT NULL, 
	// 			gender VARCHAR(7) NOT NULL, 
	// 			faculty VARCHAR(50) NOT NULL
	// 			)";	

	// mysqli_query($con, $query);

?>
