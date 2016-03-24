-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2016 at 05:02 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travel_profiler`
--

-- --------------------------------------------------------

--
-- Table structure for table `adventure_tourism`
--

CREATE TABLE IF NOT EXISTS `adventure_tourism` (
`id` int(11) NOT NULL,
  `place` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adventure_tourism`
--

INSERT INTO `adventure_tourism` (`id`, `place`, `description`, `category`) VALUES
(1, 'Kitulgala', 'A sleepy little hamlet in the foothills of the central plains, with one of the main rivers of Sri Lanka “The Kelani” flowing through the town wide and snappy, boast as one of the best adventure venues in Sri Lanka. Kitulgala is more famous as the location of “The Bridge on the river Kwai” acclaimed for winning no less than 07 academy awards in 1957 directed by David Lean.', 'Adventure Tourism');

-- --------------------------------------------------------

--
-- Table structure for table `blank`
--

CREATE TABLE IF NOT EXISTS `blank` (
  `id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cultural_tourism`
--

CREATE TABLE IF NOT EXISTS `cultural_tourism` (
`id` int(11) NOT NULL,
  `place` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cultural_tourism`
--

INSERT INTO `cultural_tourism` (`id`, `place`, `description`, `category`) VALUES
(1, 'Anuradhapura', 'From enormous dagobas (dome-shaped structures) and remains of ancient buildings in the ruined cities of Anuradhapura and Polonnaruwa, to the awesome stairway to the temple at Dambulla and the sensual frescoes of heavenly maidens at the palace at the rock of Sigiriya, visitors can experience these World Heritage Sites within a compact area called the Cultural Triangle.', 'Cultural Tourism');

-- --------------------------------------------------------

--
-- Table structure for table `medical_or_health_tourism`
--

CREATE TABLE IF NOT EXISTS `medical_or_health_tourism` (
`id` int(11) NOT NULL,
  `place` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_or_health_tourism`
--

INSERT INTO `medical_or_health_tourism` (`id`, `place`, `description`, `category`) VALUES
(1, 'Medical Tourism', 'Description here', 'Medical or health tourism');

-- --------------------------------------------------------

--
-- Table structure for table `nature_tourism`
--

CREATE TABLE IF NOT EXISTS `nature_tourism` (
`id` int(11) NOT NULL,
  `place` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nature_tourism`
--

INSERT INTO `nature_tourism` (`id`, `place`, `description`, `category`) VALUES
(1, 'Wilpattu ', 'AOccupying about a 110km''s (425 sq mile) tract of shore line and jungle on the North west coast, around 180km (110 miles) north of Colombo and 50km (30 miles) west of Anuradhapura , Wilpattu is Sri Lanka''s largest national park and a refuge for Elephants, Leopards and sloth bears. ', 'Nature Tourism');

-- --------------------------------------------------------

--
-- Table structure for table `pleasure_tourism`
--

CREATE TABLE IF NOT EXISTS `pleasure_tourism` (
`id` int(11) NOT NULL,
  `place` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pleasure_tourism`
--

INSERT INTO `pleasure_tourism` (`id`, `place`, `description`, `category`) VALUES
(1, 'Pleasure Tourism', 'Description here', 'Pleasure Tourism');

-- --------------------------------------------------------

--
-- Table structure for table `recreation_tourism`
--

CREATE TABLE IF NOT EXISTS `recreation_tourism` (
`id` int(11) NOT NULL,
  `place` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recreation_tourism`
--

INSERT INTO `recreation_tourism` (`id`, `place`, `description`, `category`) VALUES
(2, 'Recreation Tourism', 'Description here', 'Recreation Tourism');

-- --------------------------------------------------------

--
-- Table structure for table `religious_tourism`
--

CREATE TABLE IF NOT EXISTS `religious_tourism` (
`id` int(11) NOT NULL,
  `place` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religious_tourism`
--

INSERT INTO `religious_tourism` (`id`, `place`, `description`, `category`) VALUES
(1, 'Temple of Tooth', 'Known as Dalda Maligawa is located in the city of Kandy. It is one of the most sacred Buddhist pilgrimage sites and houses the sacred tooth of Lord Buddha. The tooth was said to be taken from the flames of Buddha''s funeral pyre in 543 BC and was smuggled into Sri Lanka during the 4th century AD, hidden in the hair of princess.\r\n', 'Religious Tourism');

-- --------------------------------------------------------

--
-- Table structure for table `sports_tourism`
--

CREATE TABLE IF NOT EXISTS `sports_tourism` (
`id` int(11) NOT NULL,
  `place` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports_tourism`
--

INSERT INTO `sports_tourism` (`id`, `place`, `description`, `category`) VALUES
(1, 'Scuba Diving', 'One of the favourite recreational activities among tourists .There are several dive sites along Sri Lanka''s coastline, where scuba diving is mostly done , Hikkaduwa beach and Tangalla beach during Nivember to April and Nilaveli from April to September. While diving you will be able to be familiar with the vibrant, rich and breath-takingly beautiful coral reefs and fish\r\n', 'Sports Tourism');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `access_fb` varchar(20) NOT NULL,
  `fb_link` varchar(200) NOT NULL,
  `joined_date` varchar(20) NOT NULL,
  `user_category` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `country`, `gender`, `access_fb`, `fb_link`, `joined_date`, `user_category`) VALUES
(1, 'test_user', 'test@example.com', '123', 'Srilanka', 'Male', 'No', '', 'Feb 2015', 'adventures,safari'),
(7, 'nexify', 'admin@nexify.lk', '123456', 'Sri Lanka', 'Male', 'Yes', 'aaa', 'Feb 2016', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adventure_tourism`
--
ALTER TABLE `adventure_tourism`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cultural_tourism`
--
ALTER TABLE `cultural_tourism`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_or_health_tourism`
--
ALTER TABLE `medical_or_health_tourism`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nature_tourism`
--
ALTER TABLE `nature_tourism`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pleasure_tourism`
--
ALTER TABLE `pleasure_tourism`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recreation_tourism`
--
ALTER TABLE `recreation_tourism`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religious_tourism`
--
ALTER TABLE `religious_tourism`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports_tourism`
--
ALTER TABLE `sports_tourism`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adventure_tourism`
--
ALTER TABLE `adventure_tourism`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cultural_tourism`
--
ALTER TABLE `cultural_tourism`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `medical_or_health_tourism`
--
ALTER TABLE `medical_or_health_tourism`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nature_tourism`
--
ALTER TABLE `nature_tourism`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pleasure_tourism`
--
ALTER TABLE `pleasure_tourism`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `recreation_tourism`
--
ALTER TABLE `recreation_tourism`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `religious_tourism`
--
ALTER TABLE `religious_tourism`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sports_tourism`
--
ALTER TABLE `sports_tourism`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
