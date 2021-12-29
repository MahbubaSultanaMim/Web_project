-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 08:15 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roadway_travels`
--


--
-- Table structure for table `bus_seat`
--

CREATE TABLE `bus_seat` (
  `id` int(100) NOT NULL,
  `seat_number` varchar(100) NOT NULL,
  `bus_id` int(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_seat`
--

INSERT INTO `bus_seat` (`id`, `seat_number`, `bus_id`, `status`) VALUES
(1, 'A1', 1, 1),
(2, 'A2', 1, 1),
(3, 'A3', 1, 1),
(4, 'A4', 1, 1),
(5, 'B1', 1, 1),
(6, 'B2', 1, 1),
(7, 'B3', 1, 1),
(8, 'B4', 1, 1),
(9, 'C1', 1, 1),
(10, 'C2', 1, 1),
(11, 'C3', 1, 1),
(12, 'C4', 1, 1),
(13, 'D1', 1, 1),
(14, 'D2', 1, 1),
(15, 'D3', 1, 1),
(16, 'D4', 1, 1),
(17, 'E1', 1, 1),
(18, 'E2', 1, 1),
(19, 'E3', 1, 1),
(20, 'E4', 1, 1),
(21, 'F1', 1, 1),
(22, 'F2', 1, 1),
(23, 'F3', 1, 1),
(24, 'F4', 1, 1),
(25, 'G1', 1, 1),
(26, 'G2', 1, 1),
(27, 'G3', 1, 1),
(28, 'G4', 1, 1),
(29, 'H1', 1, 1),
(30, 'H2', 1, 1),
(31, 'H3', 1, 1),
(32, 'H4', 1, 1),
(33, 'I1', 1, 1),
(34, 'I2', 1, 1),
(35, 'I3', 1, 1),
(36, 'I4', 1, 1),
(37, 'A1', 0, 1),
(38, 'A2', 0, 1),
(39, 'A3', 0, 1),
(40, 'A4', 0, 1),
(41, 'B1', 0, 1),
(42, 'B2', 0, 1),
(43, 'B3', 0, 1),
(44, 'B4', 0, 1),
(45, 'C1', 0, 1),
(46, 'C2', 0, 1),
(47, 'C3', 0, 1),
(48, 'C4', 0, 1),
(49, 'D1', 0, 1),
(50, 'D2', 0, 1),
(51, 'D3', 0, 1),
(52, 'D4', 0, 1),
(53, 'E1', 0, 1),
(54, 'E2', 0, 1),
(55, 'E3', 0, 1),
(56, 'E4', 0, 1),
(57, 'F1', 0, 1),
(58, 'F2', 0, 1),
(59, 'F3', 0, 1),
(60, 'F4', 0, 1),
(61, 'G1', 0, 1),
(62, 'G2', 0, 1),
(63, 'G3', 0, 1),
(64, 'G4', 0, 1);





--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(100) NOT NULL,
  `no_of_seats` int(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `coach` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `no_of_seats`, `contact`, `status`, `source`, `destination`, `coach`) VALUES
(1, 2, '01911803483', 1, 'Rajshahi', 'Dhaka', 'Non AC'),
(3, 3, '01521105453', 1, 'Sylhet', 'Chittagong', 'AC');




--
-- Indexes for dumped tables
--



--
-- Indexes for table `bus_seat`
--
ALTER TABLE `bus_seat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);



--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_seat`
--
ALTER TABLE `bus_seat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;


-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
