-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 03:15 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `id_beli` int(100) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tlp` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Belum Di Proses',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`id_beli`, `nama_barang`, `jumlah`, `name`, `email`, `tlp`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Band Pass Filter 174 MHz - 230 MHz', 2, 'nukman', 'nukman@gmail.com', '2', 'Selesai Proses', '2021-08-30 21:39:24', '2021-08-30 23:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id_barang` int(191) NOT NULL,
  `name` varchar(200) NOT NULL,
  `foto_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(191) NOT NULL,
  `stok` varchar(191) NOT NULL,
  `manual` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id_barang`, `name`, `foto_barang`, `nama_barang`, `stok`, `manual`, `updated_at`, `created_at`) VALUES
(1, '', 'a1.png', 'Band Pass Filter 174 MHz - 230 MHz', '94', 'a10.pdf', NULL, NULL),
(2, '', 'a10.png', '3DB Hybrid Coupler 300W', '', 'a10.pdf', NULL, NULL),
(3, '', 'a11.png', '3DB Hybrid Coupler 1 KWT', '', '', NULL, NULL),
(4, '', 'a12.png', '3DB Hybrid Coupler 5 KWT				', '', '', NULL, NULL),
(5, '', 'a13.png', 'Adapter 3 1/8- inch end - din 7/16				', '', '', NULL, NULL),
(6, '', 'a14.png', '3DB Hybrid Coupler				', '', 'a14.pdf', NULL, NULL),
(7, '', 'a15.png', 'UHF TV Filter 500W				', '', '', NULL, NULL),
(8, '', 'a16.png', 'UHF TV Filter 1000W				', '', '', NULL, NULL),
(9, '', 'a17.png', 'UHF TV Filter 5000W				', '', '', NULL, NULL),
(10, '', 'a18.png', 'UHF TV Filter 5KW				', '', 'a18.pdf', NULL, NULL),
(11, '', 'a19.png', 'UHV Band Pass Filter 500 Watt				', '', 'a19.pdf', NULL, NULL),
(12, '', 'a2.png', 'Band Pass Filter 450 MHz - 550 MHz', '167', '', NULL, NULL),
(13, '', 'a20.png', 'UHF TV Band Pass Filter 500 W				', '', 'a20.pdf', NULL, NULL),
(14, '', 'a21.png', '3-1/8\" EIA Flange Conector to Cable				', '', 'a21.pdf', NULL, NULL),
(15, '', 'a3.png', 'Band Pass Filter 550 MHz - 860 MHz', '139', '', NULL, NULL),
(16, '', 'a4.png', 'RF Dummy Load 60 Watt 50 Ohm DC 6.0 GHz', '6', '', NULL, NULL),
(17, '', 'a5.png', 'Antenna pemancar TV , two dipole antenna', '1', '', NULL, NULL),
(18, '', 'a6.png', 'Antenna Divider 1:2 MICROLAB Type FXR D2 - 1 TN', '', 'a6.pdf', NULL, NULL),
(19, '', 'a7.png', 'Antenna Divider 1:3', '', 'a7.pdf', NULL, NULL),
(20, '', 'a8.png', 'Antenna Divider 1:4', '', 'a8.pdf', NULL, NULL),
(21, '', 'a9.png', 'Antenna Divider UHV 470 - 800MHz', '', '', NULL, NULL),
(25, 'cs', 'ADS-B Receiver.png', 'physicalw', '1', 'AISG-Base-standard-AISG-v3-0-0-10.pdf', '2021-08-30 08:03:09', '2021-08-30 07:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `id_komen` int(11) NOT NULL,
  `nama_depan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(100) NOT NULL,
  `layanan` varchar(255) NOT NULL,
  `deskripsi_layanan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `layanan`, `deskripsi_layanan`) VALUES
(1, 'Survei', 'Melayani survei untuk pembuatan simtem Antenna, Radio, TV, Radar, AntiDrone dan Sistem Telekomunikasi Radio Lainnya'),
(2, 'Desain', 'Melayani Desain untuk pembuatan simtem Antenna, Radio, TV, Radar, AntiDrone dan Sistem Telekomunikasi Radio Lainnya'),
(3, 'Installasi', 'Melayani Installasi untuk pembuatan simtem Antenna, Radio, TV, Radar, AntiDrone dan Sistem Telekomunikasi Radio Lainnya'),
(4, 'Testing', 'Melayani Testing untuk pembuatan simtem Antenna, Radio, TV, Radar, AntiDrone dan Sistem Telekomunikasi Radio Lainnya'),
(5, 'Penilaian', 'Melayani Antenna Radar, AntiDrone'),
(6, 'Pemeliharaan', 'Melayani Pemeliharaan untuk pembuatan simtem Antenna, Radio, TV, Radar, AntiDrone dan Sistem Telekomunikasi Radio Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2021_05_31_061236_create_order_table', 1),
(9, '2021_06_04_075402_create_feed_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_order` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jumlah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Di Proses'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `name`, `email`, `tlp`, `barang_order`, `created_at`, `updated_at`, `jumlah`, `status`) VALUES
(1, 'Nukman', 'nukman@gmail.com', '098', 'bangku', NULL, '2021-08-30 23:22:14', '10', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `id_solusi` int(255) NOT NULL,
  `solusi` varchar(255) NOT NULL,
  `foto_solusi` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id_solusi`, `solusi`, `foto_solusi`, `updated_at`, `created_at`) VALUES
(1, 'Weapon Locating Radar System', '1.png', NULL, NULL),
(2, 'RADAR Long Radius', '2.png', NULL, NULL),
(3, 'Electronic Intelligence', '3.png', NULL, NULL),
(4, 'Direct Finder', '4.png', NULL, NULL),
(5, 'Anti Drone', '5.png', NULL, NULL),
(6, 'Drone Intercept System', '6.png', NULL, NULL),
(7, 'WIFI Coin', '7.png', NULL, NULL),
(8, 'Recorder Jammer', '8.png', NULL, NULL),
(9, 'Cellular Interception', '9.png', NULL, NULL),
(10, 'Satellite Interception', '10.png', NULL, NULL),
(11, 'Coastal Monitoring System', '11.png', NULL, NULL),
(12, 'ADAS (Advanced Driver Assistance System)', '12.png', NULL, NULL),
(13, 'Geolocation', '13.png', NULL, NULL),
(14, 'Trunking Interception', '14.png', NULL, NULL),
(15, 'Wifi Interception', '15.png', NULL, NULL),
(16, 'ADSB (Automatic Digital Surveillance - Broadcast)', '16.png', NULL, NULL),
(17, 'Counter Surveillance', '17.png', NULL, NULL),
(20, 'goodd', '1629263869073.jpg', '2021-08-30 08:00:44', '2021-08-30 07:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id_topic` int(100) NOT NULL,
  `topic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id_topic`, `topic`) VALUES
(1, '5G'),
(2, 'Phased Array'),
(3, 'Radar Beamforming'),
(4, 'Software Define Radio(SDR)');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'cs', 'cs@timlab.co.id', NULL, '$2y$10$.aPK1Ll8obg6JAUiRZcVYe/zW5XKLfSiXiqdbffPcLVhzDPjRPU2a', 'AfRYs5JZiMK1niOROQtv5R7umoVsDkggCOrVthW7fcl3FLKXVsaP3o3GJewU', '2021-06-02 01:42:54', '2021-06-02 01:42:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id_komen`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id_solusi`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id_topic`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beli`
--
ALTER TABLE `beli`
  MODIFY `id_beli` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id_barang` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id_solusi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id_topic` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
