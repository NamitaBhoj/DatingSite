-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 03, 2021 at 05:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datingsite`
--
CREATE DATABASE IF NOT EXISTS `datingsite` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `datingsite`;

-- --------------------------------------------------------

--
-- Table structure for table `favoritelist`
--

DROP TABLE IF EXISTS `favoritelist`;
CREATE TABLE `favoritelist` (
  `ID` int(11) NOT NULL,
  `personID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favoritelist`
--

INSERT INTO `favoritelist` (`ID`, `personID`) VALUES
(6, 10),
(6, 8),
(13, 14),
(6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `feedimage`
--

DROP TABLE IF EXISTS `feedimage`;
CREATE TABLE `feedimage` (
  `ID` int(11) NOT NULL,
  `filePath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedimage`
--

INSERT INTO `feedimage` (`ID`, `filePath`) VALUES
(1, '0'),
(1, '0'),
(1, '0'),
(1, '0'),
(1, '0'),
(1, 'profileImages/1_01-12-2021-1638335952.jpg'),
(1, 'profileImages/1_01-12-2021-1638336585.jpg'),
(1, 'profileImages/1_01-12-2021-1638336589.jpg'),
(1, 'profileImages/1_01-12-2021-1638336684.jpg'),
(1, 'profileImages/1_01-12-2021-1638336684.jpg'),
(1, 'profileImages/1_01-12-2021-1638337084.jpg'),
(1, 'profileImages/1_01-12-2021-1638337084.jpg'),
(1, 'profileImages/1_01-12-2021-1638337094.jpg'),
(1, 'profileImages/1_01-12-2021-1638337094.jpg'),
(1, 'profileImages/1_01-12-2021-1638337102.jpg'),
(1, 'profileImages/1_01-12-2021-1638337102.jpg'),
(5, 'profileImages/5_01-12-2021-1638337287.jpg'),
(5, 'profileImages/5_01-12-2021-1638337287.jpg'),
(5, 'profileImages/5_01-12-2021-1638337293.jpg'),
(5, 'profileImages/5_01-12-2021-1638337293.jpg'),
(5, 'profileImages/5_01-12-2021-1638337299.jpg'),
(5, 'profileImages/5_01-12-2021-1638337299.jpg'),
(5, 'profileImages/5_01-12-2021-1638337310.jpg'),
(5, 'profileImages/5_01-12-2021-1638337310.jpg'),
(6, 'profileImages/6_01-12-2021-1638337767.jpg'),
(6, 'profileImages/6_01-12-2021-1638337767.jpg'),
(6, 'profileImages/6_01-12-2021-1638337809.jpg'),
(6, 'profileImages/6_01-12-2021-1638337809.jpg'),
(6, 'profileImages/6_01-12-2021-1638337818.jpg'),
(6, 'profileImages/6_01-12-2021-1638337818.jpg'),
(6, 'profileImages/6_01-12-2021-1638337830.jpg'),
(6, 'profileImages/6_01-12-2021-1638337830.jpg'),
(6, 'profileImages/6_01-12-2021-1638337842.jpg'),
(6, 'profileImages/6_01-12-2021-1638337842.jpg'),
(6, 'profileImages/6_01-12-2021-1638337859.jpg'),
(6, 'profileImages/6_01-12-2021-1638337859.jpg'),
(7, 'profileImages/7_01-12-2021-1638338051.jpg'),
(7, 'profileImages/7_01-12-2021-1638338051.jpg'),
(7, 'profileImages/7_01-12-2021-1638338063.jpg'),
(7, 'profileImages/7_01-12-2021-1638338063.jpg'),
(7, 'profileImages/7_01-12-2021-1638338072.jpg'),
(7, 'profileImages/7_01-12-2021-1638338072.jpg'),
(7, 'profileImages/7_01-12-2021-1638338080.jpg'),
(7, 'profileImages/7_01-12-2021-1638338080.jpg'),
(8, 'feedImages/8_01-12-2021-1638338842.jpg'),
(8, 'feedImages/8_01-12-2021-1638338857.jpg'),
(8, 'feedImages/8_01-12-2021-1638338865.jpg'),
(8, 'feedImages/8_01-12-2021-1638338891.jpg'),
(9, 'feedImages/9_01-12-2021-1638339192.jpg'),
(9, 'feedImages/9_01-12-2021-1638339200.jpg'),
(9, 'feedImages/9_01-12-2021-1638339210.jpg'),
(9, 'feedImages/9_01-12-2021-1638339225.jpg'),
(1, 'feedImages/1_01-12-2021-1638387354.jpg'),
(6, 'feedImages/6_02-12-2021-1638471914.jpg'),
(13, 'feedImages/13_03-12-2021-1638499122.jpg'),
(13, 'feedImages/13_03-12-2021-1638499144.jpg'),
(13, 'feedImages/13_03-12-2021-1638499155.jpg'),
(13, 'feedImages/13_03-12-2021-1638499166.jpg'),
(13, 'feedImages/13_03-12-2021-1638499178.jpg'),
(13, 'feedImages/13_03-12-2021-1638499191.jpg'),
(14, 'feedImages/14_03-12-2021-1638500424.jpg'),
(14, 'feedImages/14_03-12-2021-1638500432.jpg'),
(14, 'feedImages/14_03-12-2021-1638500439.jpg'),
(14, 'feedImages/14_03-12-2021-1638505940.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `ID` int(11) NOT NULL,
  `senderID` int(11) NOT NULL,
  `receiverID` int(11) NOT NULL,
  `text` text NOT NULL,
  `isRead` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `senderID`, `receiverID`, `text`, `isRead`, `date_time`) VALUES
(1, 1, 7, 'ji', 1, '2021-12-02 09:42:24'),
(2, 7, 1, 'hi', 1, '2021-12-02 07:14:46'),
(3, 1, 7, 'hello', 0, '2021-12-02 05:19:53'),
(4, 1, 7, 'hi', 0, '2021-12-01 05:19:53'),
(5, 7, 1, 'how are you?', 1, '2021-12-02 07:55:42'),
(6, 1, 8, 'hi', 1, '2021-12-02 21:54:13'),
(7, 1, 7, 'hi', 0, '2021-12-02 05:41:46'),
(8, 1, 8, 'javab aapne', 1, '2021-12-02 21:54:13'),
(9, 1, 7, 'hi', 0, '2021-12-02 09:54:10'),
(10, 6, 9, 'hi', 0, '2021-12-02 19:07:59'),
(11, 6, 8, 'hi', 1, '2021-12-02 21:53:54'),
(12, 6, 8, 'hi', 1, '2021-12-02 21:54:57'),
(13, 8, 6, 'hello', 1, '2021-12-02 21:55:09'),
(14, 6, 8, 'hi', 1, '2021-12-02 23:38:51'),
(15, 10, 8, 'hi', 1, '2021-12-02 23:27:11'),
(16, 8, 10, 'hi', 1, '2021-12-02 23:27:17'),
(17, 10, 8, 'hi', 1, '2021-12-02 23:38:59'),
(18, 8, 10, 'jhgfdsa', 0, '2021-12-02 23:39:06'),
(19, 8, 6, 'jbfsjefnsekf', 1, '2021-12-02 23:39:36'),
(20, 6, 9, 'how are you?', 0, '2021-12-03 00:39:31'),
(21, 14, 13, 'hi there!', 1, '2021-12-03 03:01:28'),
(22, 13, 14, 'hey!', 1, '2021-12-03 03:02:06'),
(23, 13, 14, 'how you been?', 1, '2021-12-03 03:02:06'),
(24, 13, 14, 'alfter long time!', 1, '2021-12-03 03:02:06'),
(25, 14, 13, 'good good!', 1, '2021-12-03 03:02:38'),
(26, 14, 13, 'i hope you are fine too!', 1, '2021-12-03 03:02:38'),
(27, 13, 14, 'yea I am! so tell Me how the life?', 1, '2021-12-03 03:03:15'),
(28, 13, 14, 'studing or doing job?', 1, '2021-12-03 03:03:15'),
(29, 14, 13, 'yah still doing my master\'s', 1, '2021-12-03 03:03:59'),
(30, 14, 13, 'what about you?', 1, '2021-12-03 03:03:59'),
(31, 13, 14, 'me? I am A doctor now!', 1, '2021-12-03 03:04:36'),
(32, 14, 13, 'ohhh great', 1, '2021-12-03 03:05:01'),
(33, 14, 13, 'bye!', 1, '2021-12-03 03:05:01'),
(34, 13, 14, 'see you soon!', 1, '2021-12-03 03:05:16'),
(35, 14, 9, 'hi', 0, '2021-12-03 04:30:09'),
(36, 14, 6, 'hi', 0, '2021-12-03 04:31:12');

-- --------------------------------------------------------

--
-- Table structure for table `profileimage`
--

DROP TABLE IF EXISTS `profileimage`;
CREATE TABLE `profileimage` (
  `uID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `filePath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profileimage`
--

INSERT INTO `profileimage` (`uID`, `ID`, `filePath`) VALUES
(1, 6, 'profileImages/6_profile.jpg'),
(2, 7, 'profileImages/7_profile.jpg'),
(3, 8, 'profileImages/8_profile.jpg'),
(4, 9, 'profileImages/9_profile.jpg'),
(5, 1, 'profileImages/1_profile.jpg'),
(7, 5, 'profileImages/5_profile.jpg'),
(9, 10, 'profileImages/10_profile.jpg'),
(10, 13, 'profileImages/13_profile.jpg'),
(11, 14, 'profileImages/14_profile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(65) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `city` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender_of_user` varchar(15) NOT NULL,
  `gender_preference` varchar(15) NOT NULL,
  `birth_date` date NOT NULL,
  `occupation` varchar(35) NOT NULL,
  `age` int(11) NOT NULL,
  `isPremium` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `firstName`, `last_name`, `email`, `contact_number`, `city`, `password`, `gender_of_user`, `gender_preference`, `birth_date`, `occupation`, `age`, `isPremium`) VALUES
(1, 'Phylys', 'Ciani', 'pciani0@fastcompany.com', '870-463-2706', 'Montreal', 'ECMsJInpLHy', 'Male', 'Female', '1996-10-16', 'Nurse', 25, 1),
(5, 'pooja', 'pate', 'pooja@gmail.com', '7990440330', 'Québec', 'pooja', 'Female', 'Male', '1997-11-18', 'American football player', 24, 0),
(6, 'Aleksand', 'Nisby', 'anisby1@linkedin.com', '2858569119', 'Québec', 'YwPd872u', 'Female', 'Male', '1990-02-15', 'Flight attendant', 31, 1),
(7, 'Staffard', 'Greenhouse', 'sgreenhouse2@europa.eu', '6784070271', 'Stangow', '2pSgZ7fDL7eJ', 'Male', 'Female', '1999-04-06', 'Fireman', 22, 0),
(8, 'Isobel', 'Pawlowicz', 'ipawlowicz4@sourceforge.net', '4898879731', 'Trard', 'rJZ0c2CHMr', 'Male', 'Female', '2000-01-15', 'Police officer', 21, 1),
(9, 'Sanford', 'Francesconi', 'sfrancesconi5@alibaba.com', '9796335911', 'Vlotledo', 'MYU5t3wgU1Fh', 'Female', 'Male', '2001-05-18', 'Dentist', 20, 0),
(10, 'philips', 'phon', 'philips@gmail.com', '7990440332', 'Gland', '123456', 'Male', 'Male', '1998-12-05', 'Accountant I', 22, 0),
(11, 'heena', 'montana', 'heena@gmail.com', '9987745556', 'Ancesas', '$2y$10$eqTjmM7C6Z2KG.gGnAD6NuYizFBMC0lHBaCXWgGvUB.', 'Female', 'Male', '1996-01-25', 'Cameraman', 25, 0),
(12, 'mike', 'montana', 'mike@gmail.com', '9987745556', 'Ancesas', '123', 'Male', 'Female', '1998-01-25', 'Cameraman', 23, 0),
(13, 'karan', 'Kapadia', 'karankapadia@gmail.com', '9898978990', 'Montréal', 'karan@123', 'Male', 'Female', '1997-10-21', 'Doctor', 24, 1),
(14, 'nickii', 'joh', 'nick@gmail.com', '9987745528', 'Montréal', '123nikki', 'Female', 'Male', '1996-12-15', 'Nurse', 24, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wink`
--

DROP TABLE IF EXISTS `wink`;
CREATE TABLE `wink` (
  `ID` int(11) NOT NULL,
  `senderID` int(11) NOT NULL,
  `reciverID` int(11) NOT NULL,
  `isRead` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wink`
--

INSERT INTO `wink` (`ID`, `senderID`, `reciverID`, `isRead`, `date_time`) VALUES
(51, 14, 13, 1, '2021-12-03 04:16:40'),
(52, 14, 13, 1, '2021-12-03 04:18:21'),
(53, 14, 13, 1, '2021-12-03 04:19:14'),
(54, 14, 13, 0, '2021-12-03 04:21:02'),
(55, 13, 7, 0, '2021-12-03 04:28:09'),
(56, 13, 5, 0, '2021-12-03 04:28:20'),
(57, 13, 8, 0, '2021-12-03 04:28:49'),
(58, 13, 1, 0, '2021-12-03 04:29:01'),
(59, 14, 5, 0, '2021-12-03 04:29:38'),
(60, 14, 9, 0, '2021-12-03 04:30:03'),
(61, 14, 6, 0, '2021-12-03 04:30:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `profileimage`
--
ALTER TABLE `profileimage`
  ADD PRIMARY KEY (`uID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wink`
--
ALTER TABLE `wink`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `profileimage`
--
ALTER TABLE `profileimage`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wink`
--
ALTER TABLE `wink`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
