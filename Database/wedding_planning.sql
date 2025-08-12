-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 03:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding_planning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`firstName`, `lastName`, `Email`, `mobile`) VALUES
('Chathuki', 'Dayanada', 'it22298058@my.sliit.lk', '0773311731');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_foam`
--

CREATE TABLE `inquiry_foam` (
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phoneNo` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `time` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `venue` varchar(80) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry_foam`
--

INSERT INTO `inquiry_foam` (`name`, `email`, `phoneNo`, `Date`, `time`, `city`, `venue`, `description`) VALUES
('Chathuki Dayanada', 'it22298058@my.sliit.lk', '0773311731', '2023-10-04', '10:59', 'kuru', 'rr4r4r4e', 'rtryrtyrtytryry');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `name` varchar(60) NOT NULL,
  `payMethod` varchar(80) NOT NULL,
  `cardNo` int(50) NOT NULL,
  `exp_date` varchar(50) NOT NULL,
  `cvv` int(5) NOT NULL,
  `cardName` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`name`, `payMethod`, `cardNo`, `exp_date`, `cvv`, `cardName`) VALUES
('hhh', 'card', 5, '2023-11-09', 666, 'eretertert'),
('', '', 0, '', 0, ''),
('', '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `signup_form`
--

CREATE TABLE `signup_form` (
  `ID` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneNo` varchar(10) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup_form`
--

INSERT INTO `signup_form` (`ID`, `firstName`, `lastName`, `gender`, `dob`, `address`, `phoneNo`, `Email`, `password`, `confirmPassword`) VALUES
(5, 'Chathuki', 'Dayanada', '', '', 'fgfgfhfhghg', '0773311731', 'it22298058@my.sliit.lk', 'hhh', 'hhh'),
(6, 'Chathuki', 'Dayanada', 'male', '', 'fgfgfhfhghg', '0773311731', 'it22298058@my.sliit.lk', 'hhh', 'hhh'),
(8, 'sdsdss', 'tertrtr', 'female', '', '', '', '', '555', '555'),
(10, 'Chathuki', 'Dayanada', 'male', '2023-10-18', 'fgfgfhfhghg', '0773311731', 'it22298058@my.sliit.lk', 'uiui', 'uiui'),
(11, 'Chathuki', 'Dayanada', 'male', '2023-10-18', 'fgfgfhfhghg', '0773311731', 'it22298058@my.sliit.lk', 'uiui', 'uiui'),
(13, 'Chathuki', 'Dayanada', 'male', '2023-10-04', 'fgfgfhfhghg', '0773311731', 'it22298058@my.sliit.lk', '678', '678'),
(14, 'Chathuki', 'Dayanada', 'male', '2023-10-04', 'fgfgfhfhghg', '0773311731', 'it22298058@my.sliit.lk', '678', '678'),
(15, 'Chathuki', 'Dayanada', 'male', '2023-10-04', 'fgfgfhfhghg', '0773311731', 'it22298058@my.sliit.lk', '678', '678'),
(16, 'Chathuki', 'Dayanada', 'female', '2023-10-03', 'fgfgfhfhghg', '0773311731', 'it22298058@my.sliit.lk', '333', '333'),
(17, 'ffff', 'tttt', 'female', '', 'fdffggf', '6666666666', 'dfdfdfd', '111', '111');

-- --------------------------------------------------------

--
-- Table structure for table `signup_formvendor`
--

CREATE TABLE `signup_formvendor` (
  `Vendor_type` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneNo` varchar(10) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmPassword` varchar(20) NOT NULL,
  `Attach_photo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup_formvendor`
--

INSERT INTO `signup_formvendor` (`Vendor_type`, `firstName`, `lastName`, `gender`, `dob`, `address`, `phoneNo`, `Email`, `password`, `confirmPassword`, `Attach_photo`) VALUES
('florist', 'Chathuki', 'Dayanada', '', '', 'fgfgfhfhghg', '0773311731', 'it22298058@my.sliit.lk', 'ggg', 'ggg', 0),
('florist', 'Chathuki', 'Dayanada', 'male', '', 'fgfgfhfhghg', '0773311731', 'it22298058@my.sliit.lk', 'ggg', 'ggg', 0),
('beautician', '', '', '', '', '', '', '', '', '', 0),
('beautician', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `name` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `nic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`name`, `tel`, `email`, `nic`) VALUES
('ferre', '4545', 'gdfgdgd', '3454354'),
('Chathuki Dayanada', '0773311731', 'it22298058@my.sliit.lk', '22556565');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `VID` int(11) NOT NULL,
  `Vname` varchar(50) NOT NULL,
  `Vtype` varchar(50) NOT NULL,
  `phoneNo` varchar(10) NOT NULL,
  `Email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`VID`, `Vname`, `Vtype`, `phoneNo`, `Email`) VALUES
(151, 'Anushka Bandara', 'Beautician female', '0774455372', 'anushka@gmail.com'),
(152, 'Thanuja Dhananjaya', 'Beautician Male', '0754488372', 'dana@gmail.com'),
(153, 'Dhanudhka Senadeera', 'Photographer', '0764493372', 'danushkaSena@gmail.com'),
(154, 'Tanasha Perera', 'Florist', '0783293372', 'Tana@gmail.com'),
(155, 'Shenali Diaz', 'Cake designer', '0347893372', 'shenali@gmail.com'),
(156, 'Rumali Peiris', 'Card designer', '0883293372', 'Rumalipeiris@gmail.com'),
(157, 'Pole Wijesinghe', 'Travel and transport', '0553293372', 'PoelAnder@gmail.com'),
(158, 'V7 studio', 'Music band', '0983293372', 'V7ufbdj@gmail.com'),
(159, 'Dance Inspiration', 'Dancers', '0974793372', 'Danceinspi@gmail.com'),
(160, 'Vogue', 'Jewellers', '0113293372', 'VogueLanka@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup_form`
--
ALTER TABLE `signup_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`VID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup_form`
--
ALTER TABLE `signup_form`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `VID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
