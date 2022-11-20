-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: November 03, 2022 at 03:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dash`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(230) NOT NULL,
  `adminuser` varchar(255) NOT NULL,
  `adminpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `adminuser`, `adminpassword`) VALUES
(1, 'Dashadmin', '009996ft666mgh56002');

----------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `ImagesID` int(11) NOT NULL,
  `ImageName` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ImagesID`, `ImageName`, `Description`) VALUES
(8, 'p1.png', 'ww'),
(9, 'p1.png', ''),
(10, 'p2.jpeg', ''),
(11, 'p3.jpg', ''),
(12, 'p2.jpeg', ''),
(13, 'p1.png', ''),
(14, 'p2.jpeg', ''),
(15, 'p2.jpeg', ''),
(16, 'p1.png', ''),
(17, 'p2.jpeg', ''),
(18, 'p3.jpg', ''),
(19, 'p1.png', ''),
(20, 'p2.jpeg', ''),
(21, 'p3.jpg', ''),
(22, 'p2.jpeg', '');

-- --------------------------------------------------------

--
-- Table structure for table `imagess`
--

CREATE TABLE `imagess` (
  `ImagesID` int(230) NOT NULL,
  `ImageName` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Rooms` varchar(255) NOT NULL,
  `Washroom` varchar(255) NOT NULL,
  `Home` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `ImagesID` int(230) NOT NULL,
  `ImageName` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Bedroom` varchar(255) NOT NULL,
  `Washroom` varchar(200) NOT NULL,
  `Enterprise` varchar(200) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Description` varchar(222) NOT NULL,
  `Contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`ImagesID`, `ImageName`, `Status`, `Price`, `Bedroom`, `Washroom`, `Enterprise`, `Location`, `Description`, `Contact`) VALUES
(1, 'p2.jpeg', '', '', '', '', '', '', '', ''),
(2, 'p1.png', '', '400', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `picz`
--

CREATE TABLE `picz` (
  `ImagesID` int(230) NOT NULL,
  `ImageName` varchar(255) NOT NULL,
  `Statuss` varchar(255) NOT NULL,
  `Pricee` decimal(10,2) DEFAULT NULL,
  `Bedroomm` varchar(255) NOT NULL,
  `Washroomm` varchar(200) NOT NULL,
  `Enterprisee` varchar(200) NOT NULL,
  `Locationn` varchar(200) NOT NULL,
  `Descriptionn` varchar(222) NOT NULL,
  `Contactt` varchar(255) NOT NULL,
  `videoss` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `picz`
--

INSERT INTO `picz` (`ImagesID`, `ImageName`, `Statuss`, `Pricee`, `Bedroomm`, `Washroomm`, `Enterprisee`, `Locationn`, `Descriptionn`, `Contactt`, `videoss`) VALUES
(42, 'prop1.jpeg', 'Rent', '459.00', '1', '1', 'Blue Rose', 'Madina', 'Near Madina police station', '0546708194', 'vid2.MP4'),
(43, 'prop2.jpeg', 'Rent', '350.00', '1', '1', 'Blue Rose', 'Dzorwulu', 'Near Dzorwulu police station', '054670819444', 'vid1.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(230) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`) VALUES
(1, 'bryt', 'bright.okrah@ashesi.edu.gh', '7b8b965ad4bca0e41ab51de7b31363a1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ImagesID`);

--
-- Indexes for table `imagess`
--
ALTER TABLE `imagess`
  ADD PRIMARY KEY (`ImagesID`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`ImagesID`);

--
-- Indexes for table `picz`
--
ALTER TABLE `picz`
  ADD PRIMARY KEY (`ImagesID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(230) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `ImagesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `imagess`
--
ALTER TABLE `imagess`
  MODIFY `ImagesID` int(230) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `ImagesID` int(230) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `picz`
--
ALTER TABLE `picz`
  MODIFY `ImagesID` int(230) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(230) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
