-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 12:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_localbody`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_birth`
--

CREATE TABLE `tbl_birth` (
  `id` int(110) NOT NULL,
  `applicantname` varchar(100) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `childname` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  `timeofbirth` time(6) NOT NULL,
  `placeofbirth` varchar(100) NOT NULL,
  `childsex` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` text NOT NULL,
  `zipcode` int(100) NOT NULL,
  `phonenumber` int(100) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `copytype` varchar(100) NOT NULL,
  `declaration` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_birth`
--

INSERT INTO `tbl_birth` (`id`, `applicantname`, `relationship`, `childname`, `dateofbirth`, `timeofbirth`, `placeofbirth`, `childsex`, `mothername`, `fathername`, `city`, `state`, `zipcode`, `phonenumber`, `emailaddress`, `copytype`, `declaration`, `status`, `user_id`) VALUES
(1, 'Mahesh', ' Father', 'Adi Mahesh', '2002-07-08', '02:52:00.000000', 'Peumbavoor', 'male', 'Girija Mahesh', 'Mahesh', 'Vallam', 'Ernakulam', 0, 2147483647, 'mahesh@gmail.com', 'informational', 'on', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_death`
--

CREATE TABLE `tbl_death` (
  `id` int(110) NOT NULL,
  `applicantname` varchar(100) NOT NULL,
  `relationshiptodeceased` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneno` int(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `deceasedname` varchar(100) NOT NULL,
  `dateofdeath` date NOT NULL,
  `ageattimeofdeath` int(100) NOT NULL,
  `gender` text NOT NULL,
  `purpose` varchar(1000) NOT NULL,
  `declaration` varchar(1000) NOT NULL,
  `status` int(50) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(110) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `user_type` varchar(110) NOT NULL DEFAULT 'Tax not paid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `uname`, `password`, `category`, `user_type`) VALUES
(1, 'Presidents', '12345', 'admin', ''),
(9, 'Rajan', '123', 'member', ' '),
(12, 'Valsan', '123', 'staff', ' '),
(13, 'Adhithyan', '123', 'user', 'Tax paid');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_marriage`
--

CREATE TABLE `tbl_marriage` (
  `id` int(110) NOT NULL,
  `bride_name` varchar(100) NOT NULL,
  `groom_name` varchar(100) NOT NULL,
  `bride_dob` date NOT NULL,
  `groom_dob` date NOT NULL,
  `contactnumber` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bride_nationality` varchar(100) NOT NULL,
  `groom_nationality` varchar(100) NOT NULL,
  `marriage_date` date NOT NULL,
  `marriage_location` varchar(100) NOT NULL,
  `marriage_type` varchar(100) NOT NULL,
  `witness1_name` varchar(100) NOT NULL,
  `witness1_address` varchar(100) NOT NULL,
  `witness2_name` varchar(50) NOT NULL,
  `witness2_address` varchar(50) NOT NULL,
  `additional_info` varchar(1000) NOT NULL,
  `status` int(50) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(110) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `qualifications` varchar(100) NOT NULL,
  `mobno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `wardno` varchar(111) NOT NULL,
  `wardname` varchar(100) NOT NULL,
  `maritialstatus` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `name`, `age`, `qualifications`, `mobno`, `email`, `wardno`, `wardname`, `maritialstatus`, `gender`, `password`) VALUES
(2, 'Rajan', 51, 'SSLC', '9638527412', 'rajan@gmail.com', 'Ward 1', 'Angadi', 'maritialstatus', 'gender', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `id` int(110) NOT NULL,
  `event` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`id`, `event`, `description`) VALUES
(1, 'Poli Vaccination Camps', 'This is gonna held at Govt Hss Thonnikkara');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE `tbl_reg` (
  `id` int(110) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `wardno` varchar(50) NOT NULL,
  `taluk` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reg`
--

INSERT INTO `tbl_reg` (`id`, `name`, `email`, `age`, `wardno`, `taluk`, `password`) VALUES
(2, 'Shinys', 'shiny@gmail.com', '35', 'Ward 1', 'aluva', '123'),
(6, 'Adhithyasn', 'adhi@gmail.com', '21', 'Ward 1', 'aluva', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `id` int(110) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `qualifications` varchar(50) NOT NULL,
  `mobno` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `wardno` varchar(50) NOT NULL,
  `wardname` varchar(50) NOT NULL,
  `maritialstatus` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id`, `name`, `age`, `qualifications`, `mobno`, `email`, `wardno`, `wardname`, `maritialstatus`, `gender`, `password`) VALUES
(2, 'Valsan', '35', 'Plus two', '7418529632', 'valsan@gmail.com', 'Ward 1', 'Angadi', 'maritialstatus', 'gender', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taluk`
--

CREATE TABLE `tbl_taluk` (
  `id` int(50) NOT NULL,
  `taluk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_taluk`
--

INSERT INTO `tbl_taluk` (`id`, `taluk`) VALUES
(1, 'aluva'),
(2, 'Ernakulam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wardname`
--

CREATE TABLE `tbl_wardname` (
  `id` int(50) NOT NULL,
  `wardname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wardname`
--

INSERT INTO `tbl_wardname` (`id`, `wardname`) VALUES
(1, 'Angadi'),
(2, 'Thonnikkara');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wardno`
--

CREATE TABLE `tbl_wardno` (
  `id` int(50) NOT NULL,
  `wardno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wardno`
--

INSERT INTO `tbl_wardno` (`id`, `wardno`) VALUES
(1, 'Ward 1'),
(2, 'Ward 2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_waste`
--

CREATE TABLE `tbl_waste` (
  `id` int(110) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `wardno` varchar(50) NOT NULL,
  `wastetype` varchar(50) NOT NULL,
  `status` int(110) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_waste`
--

INSERT INTO `tbl_waste` (`id`, `name`, `email`, `address`, `phoneno`, `wardno`, `wastetype`, `status`, `user_id`) VALUES
(1, 'Adhi', 'adhi@gmail.com', 'Malieckal house', '963852741', 'Ward 2', 'Food waste', 2, 4),
(2, 'adi', 'adi@gmail.com', 'dtfyguhjk', '741852963', 'Ward 1', 'Food waste', 2, 13),
(3, 'pppppppppp', 'ppp@gmail.com', 'pppppppppp', '7411236547', 'Ward 2', 'Plastics', 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wastetype`
--

CREATE TABLE `tbl_wastetype` (
  `id` int(50) NOT NULL,
  `wastetype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wastetype`
--

INSERT INTO `tbl_wastetype` (`id`, `wastetype`) VALUES
(1, 'Plastics'),
(2, 'Food waste');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_birth`
--
ALTER TABLE `tbl_birth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_death`
--
ALTER TABLE `tbl_death`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_marriage`
--
ALTER TABLE `tbl_marriage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_taluk`
--
ALTER TABLE `tbl_taluk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_wardname`
--
ALTER TABLE `tbl_wardname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_wardno`
--
ALTER TABLE `tbl_wardno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_waste`
--
ALTER TABLE `tbl_waste`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_wastetype`
--
ALTER TABLE `tbl_wastetype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_birth`
--
ALTER TABLE `tbl_birth`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_death`
--
ALTER TABLE `tbl_death`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_marriage`
--
ALTER TABLE `tbl_marriage`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_taluk`
--
ALTER TABLE `tbl_taluk`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_wardname`
--
ALTER TABLE `tbl_wardname`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_wardno`
--
ALTER TABLE `tbl_wardno`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_waste`
--
ALTER TABLE `tbl_waste`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_wastetype`
--
ALTER TABLE `tbl_wastetype`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
