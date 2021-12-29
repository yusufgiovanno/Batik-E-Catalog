-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 29, 2021 at 09:34 AM
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE latin1_bin NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_12_26_071238_create_produks_table', 2),
(3, '2021_12_26_080231_create_pesans_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE latin1_bin NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE latin1_bin NOT NULL,
  `token` varchar(64) COLLATE latin1_bin NOT NULL,
  `abilities` text COLLATE latin1_bin DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

-- --------------------------------------------------------

--
-- Table structure for table `pesans`
--

CREATE TABLE `pesans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `depan` text COLLATE latin1_bin NOT NULL,
  `belakang` text COLLATE latin1_bin NOT NULL,
  `email` text COLLATE latin1_bin NOT NULL,
  `pesan` text COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `pesans`
--

INSERT INTO `pesans` (`id`, `created_at`, `updated_at`, `depan`, `belakang`, `email`, `pesan`) VALUES
(1, '2021-12-26 01:34:43', '2021-12-26 01:34:43', 'Yusuf', 'Giovanno', 'yusufgiovanno97@gmail.com', 'Hello, World!');

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ProdukKode` text COLLATE latin1_bin NOT NULL,
  `ProdukNama` text COLLATE latin1_bin DEFAULT NULL,
  `ProdukFoto` text COLLATE latin1_bin DEFAULT NULL,
  `ProdukDesc` text COLLATE latin1_bin DEFAULT NULL,
  `ProdukHarga` text COLLATE latin1_bin DEFAULT NULL,
  `ProdukStatus` tinyint(4) NOT NULL,
  `ProdukWP` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `created_at`, `updated_at`, `ProdukKode`, `ProdukNama`, `ProdukFoto`, `ProdukDesc`, `ProdukHarga`, `ProdukStatus`, `ProdukWP`) VALUES
(1, NULL, '2021-12-27 07:26:57', 'B01', 'Batik Sogan', 'Produk/1.jpg', 'Batik Yang Dibuat Dengan Bahan Batik Berkualitas', '25000', 2, '2021-12-27'),
(2, NULL, '2021-12-28 04:40:06', 'B02', 'Batik Parang', 'Produk/2.jpg', 'Batik Yang Dibuat Dengan Bahan Batik', '15000', 1, '2021-12-28'),
(3, NULL, '2021-12-27 07:23:49', 'B03', 'Batik Kawung', 'Produk/3.jpg', 'Batik Yang Dibuat Dengan Bahan Batik', '15000', 1, '2021-12-27'),
(4, NULL, '2021-12-26 08:56:35', 'B04', 'Batik Sekar Jagad', 'Produk/4.jpg', 'Batik Yang Dibuat Dengan Bahan Batik', '15000', 1, '2021-12-26'),
(5, NULL, '2021-12-26 08:56:36', 'B05', 'Batik Truntum', 'Produk/5.jpg', 'Batik Yang Dibuat Dengan Bahan Batik', '15000', 1, '2021-12-26'),
(6, NULL, '2021-12-26 08:56:38', 'B06', 'Batik Sido Asih', 'Produk/6.jpg', 'Batik Yang Dibuat Dengan Bahan Batik', '123456', 1, '2021-12-26'),
(7, NULL, '2021-12-26 08:56:39', 'B07', 'Batik Buketan', 'Produk/7.jpg', 'Batik Yang Dibuat Dengan Bahan Batik', '123000', 1, '2021-12-26'),
(8, NULL, '2021-12-26 08:56:42', 'B08', 'Batik Ulamsari Mas', 'Produk/8.jpg', 'Batik Yang Dibuat Dengan Bahan Batik', '145000', 1, '2021-12-26'),
(9, NULL, '2021-12-28 04:39:02', 'B09', 'Batik Gentongan', 'Produk/9.jpg', 'Batik Yang Dibuat Dengan Bahan Batik  Berkualitas Tinggi', '135000', 1, '2021-12-26'),
(10, '2021-12-27 07:30:12', '2021-12-28 05:12:15', 'B10', 'Batik Mega Mendung', 'Produk/10.jpg', 'Batik Yang Dibuat Dengan Bahan Batik Berkualitas', '13500', 1, '2021-12-28'),
(11, '2021-12-28 04:37:06', '2021-12-28 05:24:30', 'B11', 'Batik Sogan', 'Produk/11.jpg', 'Batik Yang Dibuat Dengan Bahan Batik', '250000', 2, '2021-12-28'),
(12, '2021-12-28 23:46:08', '2021-12-29 00:54:15', 'B11', 'Batik Swastika', 'Produk/.jpg', 'Batik Yang Dibuat Dengan Bahan Batik  Berkualitas Tinggi', '30000', 1, '2021-12-29');

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

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `Username` varchar(20) COLLATE latin1_bin NOT NULL,
  `Password` text COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `Username`, `Password`) VALUES
(1, 'admin', 'ab56b4d92b40713acc5af89985d4b786');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Settings`
--
ALTER TABLE `Settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `Settings`
--
ALTER TABLE `Settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
