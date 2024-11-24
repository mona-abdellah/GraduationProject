-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 10:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `troom` varchar(20) DEFAULT NULL,
  `nroom` int(50) DEFAULT NULL,
  `nbeds` int(20) DEFAULT NULL,
  `roomn` int(20) DEFAULT NULL,
  `meal` varchar(40) DEFAULT NULL,
  `n_adults` int(20) DEFAULT NULL,
  `n_children` int(20) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `payment` varchar(50) DEFAULT NULL,
  `card_num` int(20) DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `troom`, `nroom`, `nbeds`, `roomn`, `meal`, `n_adults`, `n_children`, `cin`, `cout`, `payment`, `card_num`, `expire_date`, `password`, `status`) VALUES
(58, 'mona', 'nsam90504@gmail.com', 1066915244, 'singel', NULL, NULL, 1003, 'breakfast-Dinner-drinks', 65486, 3212, '2023-06-29', '2023-06-26', 'visa', 529624896, '2023-06-28', '234', 'Pending'),
(61, 'df', 'jj@gmail.com', 41, 'suite', NULL, NULL, 1017, 'breakfast-Dinner-drinks', 5, 2, '2023-06-15', '2023-06-20', 'visa', 2, '2023-06-28', 'fsda', 'Pending'),
(62, 'lsklj', 'knsjkvbhjz', 0, 'none', 0, 0, 0, NULL, 0, 0, '0000-00-00', '0000-00-00', '', 0, '0000-00-00', NULL, ''),
(63, '', 'nsam90504@gmail.com', 0, 'singel', 0, 0, 0, 'breakfast-Dinner-drinks', 0, 0, '2023-06-29', '2023-06-26', '', 0, '0000-00-00', NULL, ''),
(64, '', 'nsam90504@gmail.com', 0, 'none', 0, 0, 0, 'breakfast-Dinner-drinks', 0, 0, '0000-00-00', '2023-06-26', '', 0, '0000-00-00', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `subject`) VALUES
(1, 'aya', 'ayashegata@gmail.com', 'wwwwwwwwwww'),
(2, 'aya', 'ayashegata@gmail.com', 'wwwwwwwwwww'),
(3, 'fareed', '', ''),
(4, 'aaaa', 'ahfljl@kfhgmail', 'uyuj'),
(5, ';;;;;;', 'nsam90504@gmail.com', 'kjknhkjn'),
(6, 'aya', 'nsam90504@gmail.com', 'wwwwwwwwwww'),
(7, 'kjncxz', 'nsam90504@gmail.com', 'dsaz');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `code` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `password`, `code`) VALUES
(1, 'aya', 'ayashegata@gmail.com', '12345', 0),
(2, 'aya', 'ayashegata@gmail.com', '12345', 0),
(3, 'g', 'v@v.v', '11111', 0),
(4, 'fsda', 'fds@gm.com', '22222', 0),
(5, 'fsda', 'fds@gm.com', '22222', 0),
(6, 'dsf', 'gds@f.c', 'fffff', 0),
(7, 'fdsa', 'jj@fgd.com', 'ooooo', 0),
(8, 'fdsa', 'jj@fgd.com', 'ooooo', 0),
(9, 'fsdgds', 'jkdsha@jlkgj.com', 'eeeee', NULL),
(10, 'rrrr', 'rrr@rr.rrr', 'rrrrr', NULL),
(11, 'samah', 'fas@gmail.com', '99999', NULL),
(12, 'nourhan', 'nsam90504@gmail.com', '88888', 302703),
(13, 'nour', 'nsam90504@gmail.com', '88888', 302703);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `staff_id` int(11) NOT NULL,
  `staff` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`staff_id`, `staff`) VALUES
(1, 'Manger'),
(2, 'Receptionist'),
(3, 'Cheif'),
(4, 'Cheif');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),
(2, 'Prasath', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id_meals` int(11) NOT NULL,
  `ordertype` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id_meals`, `ordertype`) VALUES
(1, 'Breakfast'),
(2, 'Lunch'),
(3, 'Dinner');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_guest` int(40) DEFAULT NULL,
  `id_meals` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_guest`, `id_meals`) VALUES
(1, 0, 0),
(2, 0, 0),
(3, 0, 0),
(4, 0, 3),
(6, 61, 2),
(7, 62, 0),
(8, 62, 0),
(9, 62, 1),
(10, 62, 1),
(11, 59, 1),
(12, 58, 2),
(13, 58, 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `roomnumber` int(100) DEFAULT NULL,
  `roomtype` varchar(100) DEFAULT NULL,
  `numr` int(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `roomprice` varchar(100) DEFAULT NULL,
  `numbeds` int(100) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `rserv` varchar(100) DEFAULT NULL,
  `servtype` varchar(100) DEFAULT NULL,
  `rserver` varchar(100) DEFAULT NULL,
  `servstatus` varchar(100) DEFAULT NULL,
  `servstart` date DEFAULT NULL,
  `servend` date DEFAULT NULL,
  `inorder` int(100) DEFAULT NULL,
  `unava` int(100) DEFAULT NULL,
  `ava` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `roomnumber`, `roomtype`, `numr`, `status`, `roomprice`, `numbeds`, `cin`, `cout`, `rserv`, `servtype`, `rserver`, `servstatus`, `servstart`, `servend`, `inorder`, `unava`, `ava`) VALUES
(45, 1015, 'double', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Clean Up', 'samah', 'Out of Serve', '2023-07-06', '2023-07-08', 1, 1, 98),
(47, 1015, 'double', NULL, 'unavailable', '33', NULL, '2023-07-07', '2023-07-07', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 98),
(48, 1014, 'single', NULL, 'available', '', NULL, '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(49, 1015, 'single', NULL, 'unavailable', '', NULL, '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(50, 0, 'single', NULL, 'available', '', NULL, '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(51, 0, 'single', NULL, 'available', '', NULL, '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staff` int(25) NOT NULL,
  `Country` text NOT NULL,
  `address` text NOT NULL,
  `phone` int(20) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `Twitter_Profile` text DEFAULT NULL,
  `Facebook_Profile` text DEFAULT NULL,
  `Instagram_Profile` text DEFAULT NULL,
  `Linkedin_Profile` text DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `number` int(11) NOT NULL,
  `salary` double NOT NULL,
  `card` int(11) NOT NULL,
  `code` int(6) NOT NULL,
  `date_join` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff`, `Country`, `address`, `phone`, `shift`, `fname`, `lname`, `about`, `email`, `Twitter_Profile`, `Facebook_Profile`, `Instagram_Profile`, `Linkedin_Profile`, `password`, `number`, `salary`, `card`, `code`, `date_join`) VALUES
(3, 1, 'roma', 'dksajbhsj', 928497385, 'Morning-5.00AM-10.00AM', 'mmmmmmm', 'kkkk', '', '', 'ndsjknjcbjd@jfj.com', 'kjg@fkk.com', 'fed@f.com', 'kfjdk@kgjk.com', '369', 1016011992, 100000, 123, 182199, NULL),
(4, 2, '0', '0', 0, 'Day-10.00AM-4.00PM', 'hhhh', 'ttt', '', 'fds@jfdk.com', NULL, NULL, NULL, NULL, '111', 5167555, 8678, 487, 123, NULL),
(6, 4, '0', '0', 0, 'Night-10.00PM-5.00PM', 'fff', 'llll', '', 'ghg@fgf.vom', NULL, NULL, NULL, NULL, '', 1235, 1234, 1354, 0, NULL),
(7, 1, '', '', 0, 'Night-10.00PM-5.00PM', 'nourhan', 'shehata', '', 'ayashegata@gmail.com', NULL, NULL, NULL, NULL, '111', 9623, 99963, 96, 108717, '2023-06-29'),
(8, 1, '', '', 0, 'Morning-5.00AM-10.00AM', 'aata', 'shehata', '', 'ayashegata@gmail.com', NULL, NULL, NULL, NULL, '111', 23456, 52, 3456, 108717, '2023-06-23'),
(9, 1, '', '', 0, 'Day-10.00AM-4.00PM', 'lllll', '', '', 'aya@gmail.com', NULL, NULL, NULL, NULL, '', 44444, 5555, 55555, 0, '2023-07-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id_meals`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff` (`staff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id_meals` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`staff`) REFERENCES `employees` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
