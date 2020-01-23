-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2019 at 05:25 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_bin NOT NULL,
  `address` varchar(256) COLLATE utf8_bin NOT NULL,
  `phone` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `phone`) VALUES
(1, 'Melvin Porter', 'P.O. Box 132 1599 Curabitur Rd. Bandera South Dakota 45149', '9591198364'),
(2, 'Cecilia Chapman', '711-2880 Nulla St. Mankato Mississippi 96522', '2575637401'),
(3, 'Iris Watson\r\n', 'P.O. Box 283 8562 Fusce Rd. Frederick Nebraska 20620', '3725872335'),
(4, 'Theodore Lowe', 'Ap #867-859 Sit Rd. Azusa New York 39531', '7931516230'),
(5, 'Calista Wise', '7292 Dictum Av. San Antonio MI 47096', '4927096392'),
(6, 'Forrest Ray', '191-103 Integer Rd. Corona New Mexico 08219', '4049603807'),
(7, 'Lawrence Moreno', '935-9940 Tortor. Street Santa Rosa MN 98804', '684579187'),
(8, 'Aaron Hawkins', '5587 Nunc. Avenue Erie Rhode Island 24975', '6606634518'),
(9, 'Lawrence Moreno', '935-9940 Tortor. Street Santa Rosa MN 98804', '6845791879'),
(10, 'Joan Romero', '666-4366 Lacinia Avenue Idaho Falls Ohio 19253', '2486754007'),
(11, 'Davis Patrick', 'P.O. Box 147 2546 Sociosqu Rd. Bethlehem Utah 02913', '9393531107'),
(12, 'Bryar Pitts', '5543 Aliquet St. Fort Dodge GA 20783', '7174504729'),
(13, 'Noelle Adams', '6351 Fringilla Avenue Gardena Colorado 37547', '5591045475'),
(14, 'Adria Russell', '414-7533 Non Rd. Miami Beach North Dakota 58563', '5167454496'),
(15, 'Sheila Mcintosh', 'P.O. Box 360 4407 Et Rd. Santa Monica FL 30309', '7466792470');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
