-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 09:39 PM
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
-- Database: `admin-panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `phone` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`, `status`) VALUES
(1, 'hamna sheikh', 'ansarisawera@gmail.coll', '$2y$10$gznsNxlNA5Aj6Lx0Y71NPOfWMmyL4MVt7dTvyWlEtf1px2Z2NN5GK', 2147483647, 1),
(2, 'ahmed', 'muslimtayyaba@gmail.com', '$2y$10$pAnslju5ydj7TBVmr2jl0uxltamxQft0O1wmsIiBKzi05ISpniiua', 7878, 1),
(3, 'ahmed', 'hamna@gmail.cok', '$2y$10$cME8OjAcoT1/pnEGsYN1q.AJtvzPYBlZUeeVrgxlrIQ.HIzW7CKq.', 999999, 1),
(4, 'sawera ansari', 'saw@gmail.com', '$2y$10$XzteItbWVV14F537eaKcAu0kdNnriRnqiS9OM366QtMxrn14dOV4e', 123456789, 1),
(5, 'fabiha', 'fabi@gmail.com', '$2y$10$6xvDZilgPAHL6g0Ot/9E3ua68DUu5Q9HUdAgeIuagQ9aZievQq2XO', 123456789, 1),
(6, 'rabi', 'rabi@gmail.com', '$2y$10$kGU7z65k7ziBDabconuGmOkpmj3lAMlu2MZTbHorGnO2c4GG0Keiu', 2147483647, 1),
(7, 'mttkclock', 'mk@gmail.com', '$2y$10$DrSPDtx1VVAgO0tnNvgBH.OdD8yc.I/VwsQ77laJ04xIH4S2lIVY2', 2147483647, 0),
(8, 'ham', 'ha@gmail.com', '$2y$10$16mxegEpAK3YExraYWMGKuqJmhgp7qDMeyTFTKxSaCQf3XUGVkaUq', 234234234, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
