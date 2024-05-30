-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 29, 2024 at 06:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indora`
--

-- --------------------------------------------------------

--
-- Table structure for table `bare`
--

CREATE TABLE `bare` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_bare` date NOT NULL,
  `id_barke` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bare`
--

INSERT INTO `bare` (`id`, `tgl_bare`, `id_barke`, `created_at`, `updated_at`) VALUES
(1, '2023-06-11', 3, '2023-06-11 06:25:50', '2023-06-11 06:25:50'),
(2, '2023-06-09', 14, '2023-06-11 06:26:45', '2023-06-11 06:26:45'),
(5, '2023-06-13', 5, '2023-06-20 17:54:14', '2023-06-20 17:54:14'),
(6, '2023-06-15', 11, '2023-06-21 21:27:22', '2023-06-21 21:27:22'),
(8, '2024-05-29', 2, '2024-05-29 08:05:16', '2024-05-29 08:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `barke`
--

CREATE TABLE `barke` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_barke` date NOT NULL,
  `resi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jmlh_barke` tinyint(100) NOT NULL,
  `harga_keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `omset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `base_prize` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketplace_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `packing` decimal(6,3) NOT NULL DEFAULT 1.000,
  `profit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(20) NOT NULL DEFAULT 0,
  `id_barsto` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barke`
--

INSERT INTO `barke` (`id`, `tgl_barke`, `resi`, `seller`, `jmlh_barke`, `harga_keluar`, `omset`, `base_prize`, `marketplace_fee`, `packing`, `profit`, `status`, `id_barsto`, `created_at`, `updated_at`) VALUES
(1, '2023-06-01', 'LAZ-2956198872', 'INDORA', 2, '5319', '10638', '8000', '425.52', '1.000', '1212.48', 0, 63, '2023-06-11 05:36:02', '2023-06-11 05:36:02'),
(2, '2023-06-01', 'LAZ-0168336916', 'INDORA', 1, '34900', '34900', '19500', '1396', '1.000', '13004', 1, 57, '2023-06-11 05:37:15', '2024-05-29 08:05:16'),
(3, '2023-06-01', 'LAZ-0168336979', 'INDORA', 1, '26000', '26000', '21000', '1040', '1.000', '2960', 1, 16, '2023-06-11 05:39:05', '2023-06-11 06:25:50'),
(4, '2023-06-01', 'LAZ-2956205251', 'INDORA', 1, '59376', '59376', '45000', '2375.04', '1.000', '11000.96', 0, 156, '2023-06-11 05:40:54', '2023-06-11 05:40:54'),
(5, '2023-06-01', 'LAZ-1649866195', 'INDORA', 1, '107250', '107250', '85000', '4290', '1.000', '16960', 1, 175, '2023-06-11 05:41:23', '2023-06-20 17:54:14'),
(6, '2023-06-01', 'LAZ-2956206385', 'INDORA', 3, '34223', '102669', '54000', '4106.76', '1.000', '43562.24', 0, 168, '2023-06-11 05:41:56', '2023-06-11 05:41:56'),
(7, '2023-06-01', 'LAZ-2956207012', 'INDORA', 1, '41639', '41639', '30000', '1665.56', '1.000', '8973.44', 0, 160, '2023-06-11 05:45:51', '2023-06-11 05:45:51'),
(8, '2023-06-01', 'LAZ-30073372928', 'INDORA', 1, '78172', '78172', '55000', '3126.88', '1.000', '19045.12', 0, 159, '2023-06-11 05:47:28', '2023-06-11 05:47:28'),
(9, '2023-06-01', 'LAZ-30073372928', 'INDORA', 1, '41639', '41639', '30000', '1665.56', '1.000', '8973.44', 0, 160, '2023-06-11 05:47:49', '2023-06-11 05:47:49'),
(10, '2023-06-01', '1000-7290257600', 'INDORA', 2, '8000', '16000', '6800', '640', '1.000', '7560', 0, 134, '2023-06-11 05:48:28', '2023-06-11 05:48:28'),
(11, '2023-06-01', 'TKP01-VT6Q3HW', 'INDORA', 2, '39000', '78000', '60000', '3120', '1.000', '13880', 1, 7, '2023-06-11 05:49:08', '2023-06-21 21:27:22'),
(12, '2023-06-01', '1000-7290488187', 'INDORA', 1, '17000', '17000', '12000', '680', '1.000', '3320', 0, 124, '2023-06-11 05:50:00', '2023-06-11 05:50:00'),
(13, '2023-06-01', 'SPXID-037967147196', 'INDORA', 1, '32000', '32000', '23000', '1280', '1.000', '6720', 0, 41, '2023-06-11 05:51:36', '2023-06-11 05:51:36'),
(14, '2023-06-01', 'LAZ-2956319697', 'INDORA', 1, '47752', '47752', '35000', '1910.08', '1.000', '9841.92', 1, 51, '2023-06-11 05:53:31', '2023-06-11 06:26:45'),
(15, '2023-06-01', 'LAZ-2956319353', 'INDORA', 1, '47752', '47752', '35000', '1910.08', '1.000', '9841.92', 0, 51, '2023-06-11 05:54:16', '2023-06-11 05:54:16'),
(16, '2023-06-01', 'LAZ-2956338227', 'INDORA', 2, '8000', '16000', '5000', '640', '1.000', '9360', 0, 144, '2023-06-11 05:55:26', '2023-06-11 05:55:26'),
(17, '2023-06-01', 'LAZ-2956343208', 'INDORA', 1, '8500', '8500', '5000', '340', '1.000', '2160', 0, 40, '2023-06-11 05:56:50', '2023-06-11 05:56:50'),
(18, '2023-06-02', 'SPXID-036188500146', 'INDORA', 1, '10000', '10000', '3900', '400', '1.000', '4700', 0, 151, '2023-06-11 05:58:46', '2023-06-11 05:58:46'),
(19, '2023-06-02', 'TKLP-6171Q1AM4T', 'INDORA', 1, '30000', '30000', '20000', '1200', '1.000', '7800', 0, 93, '2023-06-11 06:10:21', '2023-06-11 06:10:21'),
(20, '2023-06-02', 'TKLP-6171Q1AM4T', 'INDORA', 1, '49000', '49000', '36000', '1960', '1.000', '10040', 0, 106, '2023-06-11 06:10:48', '2023-06-11 06:10:48'),
(21, '2023-06-02', 'LAZ-29566514436', 'INDORA', 1, '25000', '25000', '13000', '1000', '1.000', '10000', 0, 15, '2023-06-11 06:11:23', '2023-06-11 06:11:23'),
(22, '2023-06-02', 'LAZ-1649983175', 'INDORA', 1, '21000', '21000', '10000', '840', '1.000', '9160', 0, 163, '2023-06-11 06:11:50', '2023-06-11 06:11:50'),
(23, '2023-06-02', 'LAZ-1649983293', 'INDORA', 1, '49900', '49900', '35000', '1996', '1.000', '11904', 0, 51, '2023-06-11 06:12:37', '2023-06-11 06:12:37'),
(24, '2023-06-02', 'LAZ-2956514998', 'INDORA', 1, '6000', '6000', '2500', '240', '1.000', '2260', 0, 183, '2023-06-11 06:15:19', '2023-06-20 17:53:43'),
(25, '2023-06-02', 'LAZ-0168378097', 'INDORA', 2, '24000', '48000', '20000', '1920', '1.000', '25080', 0, 184, '2023-06-11 06:16:30', '2023-06-11 06:16:30'),
(26, '2023-06-02', 'LAZ-1649983521', 'INDORA', 1, '49900', '49900', '35000', '1996', '1.000', '11904', 0, 51, '2023-06-11 06:16:55', '2023-06-11 06:16:55'),
(27, '2023-06-22', 'Hari Ini', 'INDORA', 6, '50000', '300000', '252000', '12000', '1.000', '35000', 0, 3, '2023-06-21 21:26:15', '2023-06-21 21:26:15'),
(28, '2023-06-22', 'Hariii-22', 'INDORA', 2, '50000', '100000', '40000', '4000', '1.000', '55000', 0, 20, '2023-06-21 21:32:33', '2023-06-21 21:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `barmas`
--

CREATE TABLE `barmas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_barmas` date NOT NULL,
  `resi_barmas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jmlh_barmas` tinyint(100) NOT NULL,
  `id_barsto` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barmas`
--

INSERT INTO `barmas` (`id`, `tgl_barmas`, `resi_barmas`, `jmlh_barmas`, `id_barsto`, `created_at`, `updated_at`) VALUES
(1, '2023-06-01', 'LAZADA', 6, 172, '2023-06-11 06:19:14', '2023-06-11 06:19:14'),
(2, '2023-06-01', 'TOKOPEDIA', 2, 20, '2023-06-11 06:20:10', '2023-06-11 06:20:10'),
(3, '2023-06-02', 'TOKOPEDIA', 3, 55, '2023-06-11 06:22:24', '2023-06-11 06:22:24'),
(4, '2023-06-06', 'LAZADA', 6, 51, '2023-06-11 06:23:45', '2023-06-11 06:23:45'),
(5, '2023-06-06', 'TOKOPEDIA', 5, 7, '2023-06-11 06:24:21', '2023-06-11 06:24:21'),
(6, '2023-06-07', 'TOKOPEDIA', 10, 60, '2023-06-11 06:25:02', '2023-06-11 06:25:02'),
(10, '2024-05-29', 'test', 12, 1, '2024-05-28 18:28:49', '2024-05-28 18:28:49'),
(11, '2024-05-29', 'test', 1, 1, '2024-05-29 07:45:16', '2024-05-29 07:45:16'),
(12, '2024-05-29', 'test', 3, 2, '2024-05-29 08:04:59', '2024-05-29 08:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `barsto`
--

CREATE TABLE `barsto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok_barang` tinyint(100) NOT NULL,
  `harga_jual` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_beli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barsto`
--

INSERT INTO `barsto` (`id`, `kategori_barang`, `nama_barang`, `stok_barang`, `harga_jual`, `harga_beli`, `created_at`, `updated_at`) VALUES
(1, 'MC', 'Dinamo Buangan LG XPQ-6A', 23, '69000', '61000', NULL, NULL),
(2, 'MC', 'Selang Pembuangan Mesin Cuci 45-120', 7, '29000', '20000', NULL, NULL),
(3, 'WH', 'Modul Pemantik', 4, '68900', '42000', NULL, NULL),
(4, 'WH', 'Magnetic Sensor', 10, '22000', '12000', NULL, NULL),
(5, 'WH', 'Box Baterai', 10, '20000', '11000', NULL, NULL),
(6, 'WH', 'Micro Switch', 10, '13000', '8500', NULL, NULL),
(7, 'WH', 'Selenoid', 15, '39000', '30000', NULL, NULL),
(8, 'WH', 'Selenoid Model Katup', 10, '39000', '29000', NULL, NULL),
(9, 'KS', 'Dinamo Fan Showcase 5W', 10, '81000', '65000', NULL, NULL),
(10, 'KS', 'Dinamo Fan Showcase 10W', 10, '105000', '90000', NULL, NULL),
(11, 'KS', 'Dinamo Fan LG As 3mm', 10, '69000', '60000', NULL, NULL),
(12, 'KS', 'Dinamo Fan LG As 4mm', 10, '69000', '60000', NULL, NULL),
(13, 'BLMX', 'Gir Atas Maspion Plastik', 10, '6000', '2000', NULL, NULL),
(14, 'BLMX', 'Stik Mixer Miyako', 10, '20000', '15000', NULL, NULL),
(15, 'BLMX', 'Stik Mixer Spiral', 9, '20000', '13000', NULL, NULL),
(16, 'BLMX', 'Stik Mixer Maspion', 10, '35000', '21000', NULL, NULL),
(17, 'BLMX', 'Pisau Juicer Maspion + Gir Atas', 10, '16000', '8000', NULL, NULL),
(18, 'AM', 'Knife Grinder 42 Besi', 10, '250000', '125000', NULL, NULL),
(19, 'AM', 'Knife Grinder 32 Stainless', 10, '49900', '33000', NULL, NULL),
(20, 'AM', 'Knife Grinder 32 Besi', 10, '29900', '20000', NULL, NULL),
(21, 'AM', 'Knife Grinder 22 Besi', 10, '35000', '20500', NULL, NULL),
(22, 'AM', 'Knife Grinder 8 Stainless', 10, '170000', '75000', NULL, NULL),
(23, 'AM', 'Knife Grinder 5 Stainless', 10, '50000', '20000', NULL, NULL),
(24, 'AM', 'Tutup Seal 22cm', 10, '29900', '12000', NULL, NULL),
(25, 'AM', 'Tutup Seal 24cm', 10, '20000', '12000', NULL, NULL),
(26, 'AM', 'Tutup Seal 26cm', 10, '22000', '12000', NULL, NULL),
(27, 'AM', 'Tutup Seal 28cm', 10, '21000', '12500', NULL, NULL),
(28, 'AM', 'Pluit Presto', 10, '22000', '11500', NULL, NULL),
(29, 'KOMP', 'Switch Pemantik', 10, '13000', '8000', NULL, NULL),
(30, 'KOMP', 'Pemantik Kompor 2 Kabel', 10, '40000', '31000', NULL, NULL),
(31, 'KOMP', 'Pulse Ignition 2 Pin AC', 10, '38000', '30000', NULL, NULL),
(32, 'KOMP', 'Pulse Ignition 4 Pin DC', 10, '38000', '30000', NULL, NULL),
(33, 'KOMP', 'Pulse Ignition 4 Pin AC', 10, '38000', '30000', NULL, NULL),
(34, 'KOMP', 'Pulse Ignition 6 Pin AC', 10, '39000', '30000', NULL, NULL),
(35, 'KA', 'Switch Exhaust KDK', 10, '81000', '65000', NULL, NULL),
(36, 'KA', 'Switch Exhaust Maspion', 10, '15000', '9000', NULL, NULL),
(37, 'KA', 'Cover Depan 12-16 In', 10, '12000', '7000', NULL, NULL),
(38, 'KA', 'Dinamo Kipas Box', 10, '55000', '45000', NULL, NULL),
(39, 'MPR', 'Tangki Bensin Potong Rumput', 10, '39000', '27000', NULL, NULL),
(40, 'MPR', 'Tutup Tangki Bensin Potong Rumput', 9, '7900', '5000', NULL, NULL),
(41, 'MPR', 'Repair Kit Karburator', 9, '33000', '23000', NULL, NULL),
(42, 'MPR', 'Kampas 328', 10, '27000', '19000', NULL, NULL),
(43, 'MPR', 'Pen Pengunci Rumah Kampas', 10, '17000', '10000', NULL, NULL),
(44, 'MPR', 'Bearing Bambu', 10, '16000', '9000', NULL, NULL),
(45, 'MPR', 'Tali Gendong', 10, '30000', '20000', NULL, NULL),
(46, 'MPR', 'Engine Mounting', 10, '8000', '4900', NULL, NULL),
(47, 'MPR', 'CDI Set 328', 10, '52000', '37500', NULL, NULL),
(48, 'MPR', 'Setelan/Handle Gas', 10, '15000', '9000', NULL, NULL),
(49, 'MPR', 'Pisau 305', 10, '38000', '27900', NULL, NULL),
(50, 'MPR', 'Pisau 410', 10, '42000', '35000', NULL, NULL),
(51, 'MPR', 'Mata Pisau Mesin Parutan Kelapa', 13, '42000', '35000', NULL, NULL),
(52, 'MPR', 'Tarikan Stater', 10, '31000', '16500', NULL, NULL),
(53, 'MPR', 'Spakbor', 10, '31000', '19500', NULL, NULL),
(54, 'MPR', 'Knalpot', 10, '36000', '25000', NULL, NULL),
(55, 'MPR', 'Clucth Drum Set', 13, '83000', '70000', NULL, NULL),
(56, 'MPR', 'Clucth Drum Inner', 10, '35000', '25000', NULL, NULL),
(57, 'MPR', 'Piston Set', 10, '30000', '19500', NULL, NULL),
(58, 'MPR', 'Busi', 10, '14000', '10000', NULL, NULL),
(59, 'MPR', 'Cop Busi', 10, '15000', '7500', NULL, NULL),
(60, 'MPR', 'Flexible Shaft 86cm', 20, '30000', '13000', NULL, NULL),
(61, 'MPR', 'Flexible Shaft 84cm', 10, '30000', '13000', NULL, NULL),
(62, 'MPR', 'Flexible Shaft Assy Komplit', 10, '89000', '70000', NULL, NULL),
(63, 'MPR', 'Baut Pisau', 8, '7500', '4000', NULL, NULL),
(64, 'MPR', 'Ring Dalam', 10, '15000', '10000', NULL, NULL),
(65, 'MPR', 'Ring Dalam Model Tinggi', 10, '35000', '25000', NULL, NULL),
(66, 'MPR', 'Ring Dalam Gigi 10 Tasco', 10, '36000', '26500', NULL, NULL),
(67, 'MPR', 'Ring Tengah', 10, '15000', '10000', NULL, NULL),
(68, 'MPR', 'Ring Tengah Model Tinggi', 10, '35000', '25000', NULL, NULL),
(69, 'MPR', 'Ring Tengah Gigi 10 Tasco', 10, '35000', '25000', NULL, NULL),
(70, 'MPR', 'Ring Luar', 10, '15000', '10000', NULL, NULL),
(71, 'MPR', 'Ring Luar Model Cekung Tasco', 10, '30000', '20000', NULL, NULL),
(72, 'MPR', 'Mur Drat', 10, '9000', '5000', NULL, NULL),
(73, 'MPR', 'Powel Stater 328', 10, '20000', '10000', NULL, NULL),
(74, 'MPR', 'Powel Stater 338', 10, '29900', '20000', NULL, NULL),
(75, 'MPR', 'Fuel Tank', 10, '80000', '65000', NULL, NULL),
(76, 'MPR', 'Bearing Crankshaft 328', 10, '14000', '7000', NULL, NULL),
(77, 'MPR', 'Gear Case', 10, '85000', '75000', NULL, NULL),
(78, 'MPR', 'Body Casing Modern M-2900', 10, '88000', '75000', NULL, NULL),
(79, 'MCS', 'Karbu Chainsaw 5800', 10, '72000', '57000', NULL, NULL),
(80, 'MCS', 'Kampas', 10, '33000', '20000', NULL, NULL),
(81, 'MCS', 'CDI Koil 5800', 10, '65000', '55000', NULL, NULL),
(82, 'MCS', 'Piston 5200/5800', 10, '35000', '21000', NULL, NULL),
(83, 'MCS', 'Sprocket 5200/5800', 10, '46000', '28000', NULL, NULL),
(84, 'MCS', 'STIHL Original Chainsaw', 10, '145000', '90000', NULL, NULL),
(85, 'MCS', 'Sprocket STIHL 70', 10, '155000', '120000', NULL, NULL),
(86, 'MCS', 'Tarikan Stater Assy STIHL 70', 10, '200000', '125000', NULL, NULL),
(87, 'KMP', 'Rubber Mounting', 5, '14000', '8000', NULL, NULL),
(88, 'KMP', 'Contact Breaker Platina Bulat 61mm', 10, '66000', '55000', NULL, NULL),
(89, 'KMP', 'Contact Breaker Platina Tanduk L19/30 Lama', 10, '69000', '55000', NULL, NULL),
(90, 'KMP', 'Contact Breaker Platina Tanduk L19/30 Baru', 10, '66000', '60000', NULL, NULL),
(91, 'KMP', 'Contact Breaker Platina Tanduk L19/30', 10, '75000', '65000', NULL, NULL),
(92, 'KMP', 'Contact Breaker Platina Tanduk L25/27', 10, '85000', '70000', NULL, NULL),
(93, 'KMP', 'Plat Katup Kompresor 3/4 HP', 9, '30000', '20000', NULL, NULL),
(94, 'KMP', 'Stang 3/4 HP Oilness', 10, '75000', '60000', NULL, NULL),
(95, 'KMP', 'Stang 1 HP Oilness', 10, '130000', '95000', NULL, NULL),
(96, 'KMP', 'Bearing Stang 3/4 HP - 1 HP NTN Oilness', 10, '24000', '17000', NULL, NULL),
(97, 'KMP', 'Ring Silinder 3/4 HP Oilness', 10, '65000', '50000', NULL, NULL),
(98, 'KMP', 'Karet Membran 3/4 HP - 1 HP Oilness', 10, '68000', '25000', NULL, NULL),
(99, 'KMP', 'Safety Valve Mini (Cap Kuning 1/8)', 10, '15000', '10000', NULL, NULL),
(100, 'KMP', 'Safety Valve Mini (Cap Kuning 1/4)', 10, '17000', '10000', NULL, NULL),
(101, 'KMP', 'Stang Seher Lakoni Panjang', 10, '39000', '27000', NULL, NULL),
(102, 'KMP', 'Stang Seher Lakoni Pendek', 10, '38600', '27000', NULL, NULL),
(103, 'KMP', 'Stang Seher Shark 3/4 HP', 10, '40500', '26000', NULL, NULL),
(104, 'KMP', 'Stang Seher SDP 1/4 HP', 10, '57000', '40000', NULL, NULL),
(105, 'KMP', 'Seher Lakoni 42mm', 10, '51800', '45000', NULL, NULL),
(106, 'KMP', 'Ring Seher 42mm', 9, '49000', '36000', NULL, NULL),
(107, 'KMP', 'Kaca Oli 3/4in (26mm) Besi', 10, '40000', '25000', NULL, NULL),
(108, 'KMP', 'Kaca Oli 3/4in (26mm) Plastik', 3, '26000', '10000', NULL, NULL),
(109, 'KMP', 'Kaca Oli 1/2in (21mm) Besi', 10, '25000', '10000', NULL, NULL),
(110, 'KMP', 'Kaca Oli 1/2in (21mm) Plastik', 10, '25000', '10000', NULL, NULL),
(111, 'KMP', 'Drain Cock', 10, '39900', '17000', NULL, NULL),
(112, 'KMP', 'Gasket Silinder Head SDP 1 HP', 10, '16000', '10000', NULL, NULL),
(113, 'KMP', 'Gasket Silinder Head SDP 1/4 HP', 10, '11000', '7000', NULL, NULL),
(114, 'KMP', 'Gasket Valve Seat', 10, '11000', '12000', NULL, NULL),
(115, 'KMP', 'Gasket Imola 75 A/B/C', 10, '25000', '20000', NULL, NULL),
(116, 'KMP', 'Gasket Imola 125 A/B/C', 10, '25000', '20000', NULL, NULL),
(117, 'KMP', 'Per Hisap Buang 1/4 - 1/2', 10, '14000', '10000', NULL, NULL),
(118, 'KMP', 'Check Valve Kompresor 3/4 Female', 10, '40000', '30000', NULL, NULL),
(119, 'KMP', 'Check Valve Kompresor 3/4 Male', 10, '40000', '30000', NULL, NULL),
(120, 'KMP', 'Valve 1/4 Hato', 10, '12000', '9000', NULL, NULL),
(121, 'KMP', 'Breathing Cover', 10, '14900', '8000', NULL, NULL),
(122, 'KMP', 'Filter Spray Gun HVLP', 10, '6000', '4000', NULL, NULL),
(123, 'KMP', 'Filter Udara MZ 3/4', 10, '19900', '15000', NULL, NULL),
(124, 'KMP', 'Filter Udara SDP', 9, '17000', '12000', NULL, NULL),
(125, 'KMP', 'Filter Udara Oiless', 10, '37500', '25000', NULL, NULL),
(126, 'KMP', 'Roda Besar As 12mm', 10, '39900', '35000', NULL, NULL),
(127, 'KMP', 'Roda 4in', 10, '24900', '16000', NULL, NULL),
(128, 'KMP', 'Kopler SP/SM/SH/SF', 10, '12000', '8000', NULL, NULL),
(129, 'KMP', 'Kopler PP/PM/PH/PF', 10, '6000', '3000', NULL, NULL),
(130, 'KMP', 'Inlet Discharge Valve Plate 1046', 10, '20000', '13500', NULL, NULL),
(131, 'KMP', 'Inlet Discharge Valve Plate 1157', 10, '29900', '20000', NULL, NULL),
(132, 'KMP', 'Inlet Discharge Valve MZ0725', 10, '30000', '20000', NULL, NULL),
(133, 'KMP', 'Pressure Gauge 2in', 10, '44000', '36000', NULL, NULL),
(134, 'KMP', 'Oil Seal 16x28x7 Lakoni 3/4 HP', 8, '8000', '3400', NULL, NULL),
(135, 'KMP', 'Oil Seal 20x40x7 Lakoni 1 HP', 10, '17000', '10000', NULL, NULL),
(136, 'KMP', 'Oil Seal Shark 1 HP', 10, '19900', '12000', NULL, NULL),
(137, 'KMP', 'Oil Seal 24x47x7 Shark 2 HP', 10, '19900', '11000', NULL, NULL),
(138, 'KMP', 'Cover Block Depan Lakoni/Multipro', 10, '100000', '50000', NULL, NULL),
(139, 'KMP', 'Bearing Set Kompresor Lakoni Imola 75', 10, '50000', '30000', NULL, NULL),
(140, 'KMP', 'Cylinder Oilness Compresor 3/4 HP', 10, '65000', '55000', NULL, NULL),
(141, 'ENG', 'Oil Seal Intake', 10, '14900', '9000', NULL, NULL),
(142, 'ENG', 'Exhaust Valve Cap', 10, '9900', '5000', NULL, NULL),
(143, 'ENG', 'Cop Busi GX-160', 10, '15000', '8000', NULL, NULL),
(144, 'ENG', 'Oil Seal Crankshaft GX-160', 8, '5000', '2500', NULL, NULL),
(145, 'ENG', 'Tutup Tangki Bensin GX-160 - 200', 10, '16000', '12500', NULL, NULL),
(146, 'ENG', 'Governor GX-160 - 200', 10, '20000', '15000', NULL, NULL),
(147, 'ENG', 'Overload 5A', 10, '20000', '10000', NULL, NULL),
(148, 'ENG', 'Overload 10A', 10, '20000', '10000', NULL, NULL),
(149, 'ENG', 'Overload 15A', 10, '20000', '10000', NULL, NULL),
(150, 'ENG', 'Overload 20A', 10, '20000', '10000', NULL, NULL),
(151, 'ENG', 'Tutup Pancingan Alkkon WP20/30', 9, '10000', '3900', NULL, NULL),
(152, 'ENG', 'Packing Set GX-160', 10, '22000', '20000', NULL, NULL),
(153, 'ENG', 'Selenoid Valve AC 220 1/4in Kuningan', 10, '155000', '85000', NULL, NULL),
(154, 'ENG', 'Selenoid Valve AC 220 1/2in Kuningan', 10, '200000', '115000', NULL, NULL),
(155, 'JC', 'Oil Seal Jet Cleaner 12x19x5', 10, '18000', '9500', NULL, NULL),
(156, 'JC', 'Oil Seal Jet Cleaner 12x20x4/6', 9, '75000', '45000', NULL, NULL),
(157, 'JC', 'Oil Seal Jet Cleaner 12x20x5/7', 10, '99000', '60000', NULL, NULL),
(158, 'JC', 'Oil Seal Jet Cleaner 12x20x6', 10, '15000', '8000', NULL, NULL),
(159, 'JC', 'Oil Seal Jet Cleaner 10x16x4/5', 9, '85000', '55000', NULL, NULL),
(160, 'JC', 'Water Seal Jet Cleaner 12x20x5', 8, '45000', '30000', NULL, NULL),
(161, 'JC', 'Water Seal Jet Cleaner 12x18x5', 10, '20000', '8000', NULL, NULL),
(162, 'JC', 'Water Seal Jet Cleaner 10x16x5', 10, '20000', '16000', NULL, NULL),
(163, 'JC', 'Water Seal Jet Cleaner 18x26', 9, '21000', '10000', NULL, NULL),
(164, 'JC', 'Seal Hidrolik 11x18x6', 10, '25000', '10000', NULL, NULL),
(165, 'JC', 'Inlet Valve 12x24', 10, '25000', '17000', NULL, NULL),
(166, 'JC', 'Inlet Valve APW 40-120', 10, '35000', '25900', NULL, NULL),
(167, 'JC', 'Valve Outlet 12x18mm', 10, '23000', '10000', NULL, NULL),
(168, 'JC', 'Middle Ringer Komplit', 7, '42000', '18000', NULL, NULL),
(169, 'JC', 'Middle Ringer (O Ring)', 10, '10000', '5000', NULL, NULL),
(170, 'JC', 'Middle Ringer QL-1200', 10, '40000', '25000', NULL, NULL),
(171, 'JC', 'Middle Ringer QL-1900', 10, '27000', '17000', NULL, NULL),
(172, 'JC', 'AS Piston', 16, '59000', '50000', NULL, NULL),
(173, 'JC', 'Per 24x40', 10, '20000', '10000', NULL, NULL),
(174, 'JC', 'Bearing QL-1200', 10, '88000', '68000', NULL, NULL),
(175, 'JC', 'Otomatis Set Jet Cleaner', 10, '110000', '85000', NULL, NULL),
(176, 'JC', 'Otomatis Set Prowash 45', 10, '130000', '85000', NULL, NULL),
(177, 'JC', 'Valve SCN 30', 10, '11000', '6000', NULL, NULL),
(178, 'JC', 'Apolo / Nosel Kabut', 10, '1800', '12500', NULL, NULL),
(179, 'JC', 'Plunger Jet Cleaner', 10, '77000', '45000', NULL, NULL),
(180, 'JC', 'Per Plunger HL-1200', 10, '20000', '15000', NULL, NULL),
(181, 'MISC', 'Casing Komplit', 10, '73500', '55000', NULL, NULL),
(182, 'MISC', 'WD Mata Potong Besi', 10, '2400', '2600', NULL, NULL),
(183, 'BLMX', 'Gir Bawah', 9, '6000', '2500', NULL, NULL),
(184, '-', 'Oil Seal As Roda Traktor', 8, '24000', '10000', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_18_155142_create_barstos_table', 1),
(6, '2023_04_18_155157_create_barmas_table', 1),
(7, '2023_04_18_155209_create_barkes_table', 1),
(8, '2023_04_18_155228_create_bares_table', 1),
(9, '2023_05_03_035112_create_owners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id_owner` bigint(20) UNSIGNED NOT NULL,
  `nama_owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id_owner`, `nama_owner`, `email_owner`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Indra', 'indradwiguna@gmail.com', '0895635215186', 'Sidoarjo, Jawa Timur', NULL, NULL);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Caca', 'caca@masuk.com', NULL, '$2y$10$quYOTCEFPGUEDWTrnyecw.eY/mOOSspXxO2CMFBglvUK8HWVs7jSm', NULL, '2023-05-10 21:33:52', '2023-05-10 21:33:52'),
(4, 'tamu', 'tamu@masuk.com', NULL, '$2y$10$ZmPZX04Pu/n4biERI2lgTOvgZEyjAsxmIpLfVmWf6UiX19FiC4tpO', NULL, '2023-06-05 05:25:27', '2023-06-05 05:25:27'),
(5, 'apa', 'apa@masuk.com', NULL, '$2y$10$GzsI5X66bp4X22V8LdCrMOpV.6m1YybV3n5c7PJ9NAZUSDVFRpvYq', NULL, '2023-06-05 05:28:20', '2023-06-05 05:28:20'),
(6, 'Admin', 'admin@masuk.com', NULL, '$2y$10$pbnPTNhd11UaEkF49Om9auqdqy9Hl46kUh2sfApK7bqcnZLvEDdAa', NULL, '2024-05-28 17:56:43', '2024-05-28 17:56:43'),
(7, 'Supervisor', 'supervisor@masuk.com', NULL, '$2y$10$rFEEwOudXvQHSE0frrBpC.LCX2WWlUZKMhh0VMBr/EkeUmSrP4dNa', NULL, '2024-05-28 17:57:32', '2024-05-28 17:57:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bare`
--
ALTER TABLE `bare`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bare_id_barke_foreign` (`id_barke`);

--
-- Indexes for table `barke`
--
ALTER TABLE `barke`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barke_id_barsto_foreign` (`id_barsto`);

--
-- Indexes for table `barmas`
--
ALTER TABLE `barmas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barmas_id_barsto_foreign` (`id_barsto`);

--
-- Indexes for table `barsto`
--
ALTER TABLE `barsto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id_owner`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `bare`
--
ALTER TABLE `bare`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `barke`
--
ALTER TABLE `barke`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `barmas`
--
ALTER TABLE `barmas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `barsto`
--
ALTER TABLE `barsto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id_owner` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bare`
--
ALTER TABLE `bare`
  ADD CONSTRAINT `bare_id_barke_foreign` FOREIGN KEY (`id_barke`) REFERENCES `barke` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barke`
--
ALTER TABLE `barke`
  ADD CONSTRAINT `barke_id_barsto_foreign` FOREIGN KEY (`id_barsto`) REFERENCES `barsto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barmas`
--
ALTER TABLE `barmas`
  ADD CONSTRAINT `barmas_id_barsto_foreign` FOREIGN KEY (`id_barsto`) REFERENCES `barsto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
