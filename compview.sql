-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2019 at 11:58 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbitrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `compview`
--

CREATE TABLE `compview` (
  `benNum` int(11) NOT NULL,
  `compOffense` varchar(150) NOT NULL,
  `dateComi` date NOT NULL,
  `compStatus` longtext NOT NULL,
  `compInv` varchar(200) NOT NULL,
  `compRemarks` longtext,
  `dateCompl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compview`
--

INSERT INTO `compview` (`benNum`, `compOffense`, `dateComi`, `compStatus`, `compInv`, `compRemarks`, `dateCompl`) VALUES
(1, 'Kaso ni Maria', '2019-03-05', 'UNDER INVESTIGATION', 'SPO1 Soriano', 'On process', NULL),
(2, 'Pagnanakaw kay Nikko', '2019-02-12', 'CLEARED', 'SPO2 Chua', 'Go to the police station for more info', NULL),
(4, 'Pagbubog ni Vince', '2018-12-05', 'SOLVED', 'SPO4 Romero', 'Go the police station', '2019-03-04'),
(6, 'Pambogbog ni Ravincent', '2019-03-04', 'UNDER INVESTIGATION', 'SPO3 Sunga', 'Hindi nakakain', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compview`
--
ALTER TABLE `compview`
  ADD PRIMARY KEY (`benNum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
