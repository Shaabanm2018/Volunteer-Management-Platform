-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 05:44 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `volunteeringdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(6) UNSIGNED NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_date` date NOT NULL,
  `event_starttime` time NOT NULL,
  `event_endtime` time NOT NULL,
  `place` varchar(100) NOT NULL,
  `event_detail` varchar(500) NOT NULL,
  `organizer` varchar(30) NOT NULL,
  `category` varchar(50) NOT NULL,
  `volunteerPack` varchar(100) NOT NULL,
  `volunteer_amount` int(3) NOT NULL,
  `job_scope` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `event_date`, `event_starttime`, `event_endtime`, `place`, `event_detail`, `organizer`, `category`, `volunteerPack`, `volunteer_amount`, `job_scope`, `status`, `photo`) VALUES
(1, 'Java Seminar', '2019-08-12', '09:00:00', '18:00:00', 'FCI', 'Become Java Seminar volunteer now!', 'IT Society', 'academic', 'food,tag,certificate,letter', 10, 'Help set up venue', 'approved', 'download.png'),
(2, 'HTML5 Expert Class', '2019-08-13', '09:00:00', '17:00:00', 'FCI', 'Become HTML5 Expert Class volunteer now!', 'IT Society', 'academic', 'food,tag,certificate,letter', 5, 'Help set up computers', 'approved', 'html.jpg'),
(3, 'C++ Workshop', '2019-08-14', '09:00:00', '18:00:00', 'FCI', 'Become C++ Workshop volunteer now!', 'MMU', 'academic', 'food,tag,certificate,letter', 10, 'help the participants with their technical problems', 'approved', 'c++.png'),
(4, 'C++ International Competition', '2019-08-15', '09:00:00', '18:00:00', 'FCI', 'Become C++ International Competition volunteer now!', 'MMU', 'academic', 'food,tshirt,tag,certificate,letter', 30, 'Usher, prepare f&b, help in registration', 'approved', 'c+.jpg'),
(5, 'Bowling Tournament 2019', '2019-08-30', '09:00:00', '18:00:00', 'Sunway Pyramid Bowling Avenue', 'Become Bowling Tournament 2019 volunteer now!', 'MMU Sports Club', 'sports', 'food,tshirt,tag,certificate,letter', 10, 'Usher, prepare f&b, help in registration', 'approved', 'bowling.jpg'),
(6, 'Charity Run Recruitment', '2019-08-30', '09:00:00', '18:00:00', 'Bukit Jalil', 'Become Charity Run Recruitment volunteer now!', 'MMU Volunteering Club', 'sports', 'food,tshirt,tag,certificate,letter', 30, 'Usher, prepare f&b, help in registrations', 'approved', 'marahon.jpg'),
(7, 'Plan, Manage, Eat, Healthy!', '2019-09-01', '09:00:00', '18:00:00', 'MMU Grand Hall', 'Become Plan, Manage, Eat, Healthy! volunteer now!', 'MMU Sports Club', 'sports', 'food,tshirt,tag,certificate,letter', 10, 'Usher, prepare f&b, help in registrations', 'approved', 'diet.jpg'),
(8, 'Next Lee Chong Wei Searching Mission', '2019-09-01', '09:00:00', '18:00:00', 'MMU Grand Hall', 'Become Next Lee Chong Wei Searching Mission volunteer now!', 'MMU Sports Club', 'sports', 'food,tshirt,tag,certificate,letter', 10, 'Usher, prepare f&b, help in registrations', 'approved', 'badminton.jpg'),
(9, 'Homeless Mission', '2019-09-03', '09:00:00', '18:00:00', 'KL Petaling Street', 'Become Homeless Mission volunteer now!', 'MMU Volunteering Club', 'activisme', 'food,tshirt,tag,certificate,letter', 10, 'help out', 'approved', 'images.jpg'),
(10, 'Cambodia Humanitarian Mission', '2019-09-04', '09:00:00', '18:00:00', 'KL Le Meridien Hotel', 'Become Cambodia Humanitarian Mission volunteer now!', 'MMU Volunteering Club', 'activisme', 'food,tshirt,tag,certificate,letter', 10, 'help out in preparing goodie bags', 'approved', 'download.jpg'),
(11, 'Phillipines Humanitarian Mission', '2019-09-05', '09:00:00', '18:00:00', 'KL Le Meridien Hotel', 'Become Phillipines Humanitarian Mission volunteer now!', 'MMU Volunteering Club', 'activisme', 'food,tshirt,tag,certificate,letter', 10, 'help out in preparing goodie bags', 'approved', 'lol.jpg'),
(12, 'Mosque Building Charity Program', '2019-09-06', '09:00:00', '18:00:00', 'MMU Mosque', 'Become Mosque Building Charity Program volunteer now!', 'MMU Volunteering Club', 'activisme', 'food,tshirt,tag,certificate,letter', 10, 'help out in registration', 'approved', 'mosque.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lecturerprofile`
--

CREATE TABLE `lecturerprofile` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `EventId` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturerprofile`
--

INSERT INTO `lecturerprofile` (`id`, `name`, `age`, `gender`, `faculty`, `EventId`) VALUES
(123456, 'Syahirah', 40, 'female', 'FCI', '5,'),
(1161302853, 'Shaira', 30, 'female', 'FCI', '7,');

-- --------------------------------------------------------

--
-- Table structure for table `studentprofile`
--

CREATE TABLE `studentprofile` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `EventId` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentprofile`
--

INSERT INTO `studentprofile` (`id`, `name`, `age`, `gender`, `faculty`, `EventId`) VALUES
(110, 'Rafeel', 21, 'male', 'FCI', '1,2,'),
(1110, 'Amir', 22, 'male', 'FOM', '2,6,1,'),
(112233433, 'Amir', 21, 'male', 'FCI', '5,4,2,'),
(1150212234, 'Jac', 20, 'female', 'FCI', '3,4,'),
(1151304220, 'Shaaban ', 20, 'male', 'FOM', '1,');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Password`, `Type`) VALUES
(110, 'Rafeel', '1122', 'Student'),
(1110, 'Amir', '1110', 'Student'),
(11234, 'Amran', '11221', 'Lecturer'),
(112233433, 'Amir', '1124433', 'Student'),
(1150212234, 'Jac', '22112', 'Student'),
(1151304220, 'Shaaban ', '11122', 'Student'),
(1161302853, 'Shaira ', '11122', 'Lecturer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturerprofile`
--
ALTER TABLE `lecturerprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentprofile`
--
ALTER TABLE `studentprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
