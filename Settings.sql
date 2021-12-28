-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2021 at 05:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batik`
--

-- --------------------------------------------------------

--
-- Table structure for table `Settings`
--

CREATE TABLE `Settings` (
  `id` int(11) NOT NULL,
  `Tentang` text COLLATE latin1_bin NOT NULL,
  `Instagram` text COLLATE latin1_bin NOT NULL,
  `LinkInstagram` text COLLATE latin1_bin NOT NULL,
  `Facebook` text COLLATE latin1_bin NOT NULL,
  `LinkFacebook` text COLLATE latin1_bin NOT NULL,
  `Video` text COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `Settings`
--

INSERT INTO `Settings` (`id`, `Tentang`, `Instagram`, `LinkInstagram`, `Facebook`, `LinkFacebook`, `Video`) VALUES
(1, 'Menyediakan berbagai macam kain batik khas Madura dengan kualitas tinggi.', 'Zakiyah Batik', 'https://www.instagram.com/zakiyahbatik', 'Zakiyah Batik', 'https://www.instagram.com/zakiyahbatik', 'TA4WfYHAmZk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Settings`
--
ALTER TABLE `Settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Settings`
--
ALTER TABLE `Settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
