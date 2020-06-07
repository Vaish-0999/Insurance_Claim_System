-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2019 at 06:55 AM
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
-- Database: `insurance_claim_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `custreg`
--

CREATE TABLE `custreg` (
  `id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `middlename` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `designation` varchar(32) NOT NULL,
  `dob` date NOT NULL,
  `location` varchar(32) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `emailid` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custreg`
--

INSERT INTO `custreg` (`id`, `firstname`, `middlename`, `lastname`, `designation`, `dob`, `location`, `contactno`, `emailid`, `username`, `password`) VALUES
(1, 'megha', 'vilas', 'waje', 'student', '2019-10-02', 'pune', '354422122', 'megha@gmail.com', 'Megha@123', 'Megha@123'),
(2, 'pratik', 'sudhakar', 'khopade', 'student', '1999-12-03', 'pune', '8830205073', 'pkhopade12@gmail.com', 'Pratik1999', 'Pratik@123'),
(3, 'rutuja', 'sunil', 'surdi', 'student', '2000-06-24', 'pune', '6531452442', 'rutu@gmail.com', 'Rutuja24', 'Rutuja@123'),
(4, 'vaishnavi', 'vilas', 'more', 'student', '1999-06-09', 'pune', '9545288167', 'vaish@gmail.com', 'Vaish0999', 'V@ish0999'),
(5, 'Vinaya', 'abc', 'Borhude', 'student', '1999-10-10', 'pune', '4335543546', 'Vina@gmail.com', 'Vinaya123', 'V!naya123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `comment`) VALUES
(1, 'vaishnavi', 'vaish@gmail.com', 'very nice system,I liked  it'),
(2, 'megha', 'megha@123', 'It helped us alot'),
(4, 'megha', 'megha@123', 'It helped us alot');

-- --------------------------------------------------------

--
-- Table structure for table `insureg`
--

CREATE TABLE `insureg` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `contactno` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insureg`
--

INSERT INTO `insureg` (`id`, `username`, `password`, `email`, `contactno`) VALUES
(1, 'Insu123', 'Insu@123', 'insu@gmail.com', '234354353'),
(2, 'Megha', 'Megha@123', 'megha@gmail.com', '5462566654'),
(3, 'Rani12', 'Rani@123', 'rani@gmail.com', '454444'),
(4, 'In123', 'Insu@123', 'insu@gmail.com', '5425245'),
(5, 'ins1', 'Insu@1234', 'insu@gmail.com', '1254639875');

-- --------------------------------------------------------

--
-- Table structure for table `policereg`
--

CREATE TABLE `policereg` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policereg`
--

INSERT INTO `policereg` (`id`, `username`, `password`) VALUES
(1, 'V@ish09', 'V@ish0999'),
(2, 'A@bc', 'A@123'),
(3, 'police1', 'Police@123'),
(4, 'Police3', 'Police@3');

-- --------------------------------------------------------

--
-- Table structure for table `policereport`
--

CREATE TABLE `policereport` (
  `id` int(11) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `mname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `vrno` varchar(32) NOT NULL,
  `age` int(11) NOT NULL,
  `loc` varchar(32) NOT NULL,
  `lmark` varchar(32) NOT NULL,
  `weather` varchar(32) NOT NULL,
  `road` varchar(32) NOT NULL,
  `light` varchar(32) NOT NULL,
  `adate` date NOT NULL,
  `atime` time NOT NULL,
  `wfname` varchar(32) NOT NULL,
  `wmname` varchar(32) NOT NULL,
  `wlname` varchar(32) NOT NULL,
  `phoneno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policereport`
--

INSERT INTO `policereport` (`id`, `fname`, `mname`, `lname`, `vrno`, `age`, `loc`, `lmark`, `weather`, `road`, `light`, `adate`, `atime`, `wfname`, `wmname`, `wlname`, `phoneno`) VALUES
(1, 'Megha', 'Vilas', 'Waje', 'MH122806', 20, 'punestation', 'AISSMS', 'cloudy', 'wet', 'no light', '2019-10-02', '06:13:12', 'vaishnavi', 'vilas', 'more', '6546532234'),
(2, 'pratik', 'sudhakar', 'khopade', 'MH124567', 20, 'Esquare', 'GPP', 'cloudy', 'wet', 'nolight', '2019-10-04', '10:52:00', 'akshay', 'xyz', 'gangurde', '3213566323'),
(3, 'rutuja', 'sunil', 'surdi', 'MH129876', 20, 'punestation', 'AISSMS', 'cloudy', 'wet', 'nolight', '2019-10-08', '17:08:00', 'sachin', 'adhhf', 'thakka', '3356536635'),
(8, 'vaishnavi', 'vilas', 'more', 'MH122530', 20, 'kothrud', 'MIT', 'foggy', 'cracks', 'dim', '2019-10-07', '18:30:00', 'digambar', 'vilas', 'more', '9545288167');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `vrno` varchar(32) NOT NULL,
  `d_license` varchar(56) NOT NULL,
  `regcert` varchar(56) NOT NULL,
  `adhar` varchar(56) NOT NULL,
  `rpbill` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`vrno`, `d_license`, `regcert`, `adhar`, `rpbill`) VALUES
('MH122806', 'Screenshot from 2019-08-12 20-54-46.png', 'Screenshot from 2019-04-12 13-32-17.png', 'Screenshot from 2019-04-12 12-53-17.png', 'Screenshot from 2019-03-30 20-47-55.png'),
('MH142345', 'Screenshot from 2019-08-12 20-54-46.png', 'Screenshot from 2019-04-12 13-32-17.png', 'Screenshot from 2019-04-12 12-53-17.png', 'Screenshot from 2019-03-30 20-47-55.png'),
('MH122345', 'Screenshot from 2019-08-12 20-54-46.png', 'Screenshot from 2019-04-12 13-32-17.png', 'Screenshot from 2019-04-12 12-53-17.png', 'Screenshot from 2019-03-30 20-47-55.png');

-- --------------------------------------------------------

--
-- Table structure for table `vehicleinfo`
--

CREATE TABLE `vehicleinfo` (
  `name` varchar(32) NOT NULL,
  `vrno` varchar(32) NOT NULL,
  `licenseno` varchar(32) NOT NULL,
  `vpolicy` varchar(32) NOT NULL,
  `edate` date NOT NULL,
  `status` varchar(32) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicleinfo`
--

INSERT INTO `vehicleinfo` (`name`, `vrno`, `licenseno`, `vpolicy`, `edate`, `status`) VALUES
('Vaishnavi More', 'MH122806', 'MAH123', 'MAH1234', '2019-11-09', 'pending'),
('Vinaya borhude', 'MH142345', 'VIN123', 'VINA1234', '2019-11-08', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custreg`
--
ALTER TABLE `custreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insureg`
--
ALTER TABLE `insureg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policereg`
--
ALTER TABLE `policereg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policereport`
--
ALTER TABLE `policereport`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custreg`
--
ALTER TABLE `custreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insureg`
--
ALTER TABLE `insureg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `policereg`
--
ALTER TABLE `policereg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `policereport`
--
ALTER TABLE `policereport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
