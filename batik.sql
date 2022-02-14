-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 10.11.3.130:3306
-- Generation Time: Feb 14, 2022 at 09:37 PM
-- Server version: 10.3.32-MariaDB-1:10.3.32+maria~focal
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakiyahb_atik`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(11) NOT NULL,
  `Kategori` varchar(30) COLLATE latin1_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `Kategori`, `created_at`, `updated_at`) VALUES
(1, 'Kemeja', '2022-01-30 21:13:39', '2022-01-28 16:01:22'),
(2, 'Jaket', '2022-01-30 21:14:04', '2022-01-28 16:14:15'),
(3, 'Kain', '2022-01-30 22:19:26', '2022-01-30 15:18:52'),
(4, 'Sarung', '2022-01-30 15:18:52', '2022-01-30 15:18:52');

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
  `ProdukKode` text COLLATE latin1_bin DEFAULT NULL,
  `ProdukNama` text COLLATE latin1_bin DEFAULT NULL,
  `ProdukFoto` text COLLATE latin1_bin DEFAULT NULL,
  `ProdukDesc` text COLLATE latin1_bin DEFAULT NULL,
  `ProdukHarga` text COLLATE latin1_bin DEFAULT NULL,
  `ProdukStatus` tinyint(4) NOT NULL,
  `ProdukWP` date DEFAULT NULL,
  `Gender` varchar(10) COLLATE latin1_bin NOT NULL,
  `KategoriId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `created_at`, `updated_at`, `ProdukKode`, `ProdukNama`, `ProdukFoto`, `ProdukDesc`, `ProdukHarga`, `ProdukStatus`, `ProdukWP`, `Gender`, `KategoriId`) VALUES
(36, '2022-02-09 08:34:41', '2022-02-09 08:36:15', 'B01', 'Batik Jaket', 'Produk/36.jpg', 'Jaket Batik Tulis Eksklusif, Bahan Kain Batik Tulis Gurik Premium, 1 motif hanya untuk 1 ukuran jaket, tidak ada seri', '400000', 1, '2022-02-09', 'Laki-laki', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Settings`
--

CREATE TABLE `Settings` (
  `id` int(11) NOT NULL,
  `Tentang` text COLLATE latin1_bin NOT NULL,
  `Instagram` text COLLATE latin1_bin NOT NULL,
  `LinkInstagram` text COLLATE latin1_bin NOT NULL,
  `Instagram2` text COLLATE latin1_bin NOT NULL,
  `LinkInstagram2` text COLLATE latin1_bin NOT NULL,
  `Facebook` text COLLATE latin1_bin NOT NULL,
  `LinkFacebook` text COLLATE latin1_bin NOT NULL,
  `Video` text COLLATE latin1_bin NOT NULL,
  `Slide1` text COLLATE latin1_bin DEFAULT NULL,
  `Slide2` text COLLATE latin1_bin DEFAULT NULL,
  `Slide3` text COLLATE latin1_bin DEFAULT NULL,
  `Slide4` text COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `Settings`
--

INSERT INTO `Settings` (`id`, `Tentang`, `Instagram`, `LinkInstagram`, `Instagram2`, `LinkInstagram2`, `Facebook`, `LinkFacebook`, `Video`, `Slide1`, `Slide2`, `Slide3`, `Slide4`) VALUES
(1, 'Kami adalah UMKM yang bergerak di bidang Fashion Batik. Kami memproduksi kain Batik Tulis Madura dan Batik Khas motif Malang. Kami menerima pembuatan batik secara custom untuk instansi atau lembaga apapun dan dimanapun di seluruh Indonesia. \r\n\r\nSelain memproduksi Kain Batik Tulis, kami juga memproduksi daster batik, blouse, hem dan jaket batik tulis..', '@supplierbatikmadura', 'https://www.instagram.com/supplierbatikmadura/', '@BatikTopekMalangan', 'https://www.instagram.com/batiktopengmalangan', '@zakiyahbatik', 'https://www.instagram.com/zakiyahbatik', '5YseHCxq7hY', '1NtpgL.jpg', '2BFt8l.jpg', '3BFt8l.jpg', '4BFt8l.jpg');

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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `KategoriId` (`KategoriId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produks`
--
ALTER TABLE `produks`
  ADD CONSTRAINT `produks_ibfk_1` FOREIGN KEY (`KategoriId`) REFERENCES `kategoris` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
