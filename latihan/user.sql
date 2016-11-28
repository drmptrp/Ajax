-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2016 at 06:19 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `kab`
--

CREATE TABLE `kab` (
  `id_kab` varchar(5) NOT NULL,
  `id_prop` varchar(5) NOT NULL,
  `kabupaten` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kab`
--

INSERT INTO `kab` (`id_kab`, `id_prop`, `kabupaten`) VALUES
('2', '1', 'Kudus'),
('3', '1', 'Demak'),
('4', '2', 'Madiun'),
('kab1', '1', 'Pati');

-- --------------------------------------------------------

--
-- Table structure for table `prop`
--

CREATE TABLE `prop` (
  `id_prop` varchar(5) NOT NULL,
  `prop` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prop`
--

INSERT INTO `prop` (`id_prop`, `prop`) VALUES
('1', 'Jawa Tengah'),
('2', 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `tabeluser`
--

CREATE TABLE `tabeluser` (
  `user_id` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `umur` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabeluser`
--

INSERT INTO `tabeluser` (`user_id`, `email`, `umur`) VALUES
('mhs1', 'jhe', 0),
('mhs2', 'sitijumatun@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kab`
--
ALTER TABLE `kab`
  ADD PRIMARY KEY (`id_kab`),
  ADD KEY `id_prop` (`id_prop`);

--
-- Indexes for table `prop`
--
ALTER TABLE `prop`
  ADD PRIMARY KEY (`id_prop`);

--
-- Indexes for table `tabeluser`
--
ALTER TABLE `tabeluser`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kab`
--
ALTER TABLE `kab`
  ADD CONSTRAINT `kab_ibfk_1` FOREIGN KEY (`id_prop`) REFERENCES `prop` (`id_prop`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
