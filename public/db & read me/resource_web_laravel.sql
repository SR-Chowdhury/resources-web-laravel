-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 07:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resource_web_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_inputs`
--

CREATE TABLE `dynamic_inputs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dynamic_inputs`
--

INSERT INTO `dynamic_inputs` (`id`, `user_name`, `image`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Shihan Chowdhury', NULL, 'hackedgdown@gmail.com', '01719896982', '2021-06-06 08:59:10', '2021-06-06 08:59:10'),
(2, 'Tanzima Chowdhury', NULL, 'chowdhurytanzima94@gmail.com', '01787368571', '2021-06-06 08:59:29', '2021-06-06 08:59:29'),
(3, 'Tanvir', NULL, 'block.blaster.wrong@gmail.com', '55555', '2021-06-06 09:00:00', '2021-06-06 09:00:00');

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
(1, '2021_05_10_125722_peginations_table', 1),
(2, '2021_06_05_164107_create_dynamic_inputs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `paginations`
--

CREATE TABLE `paginations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paginations`
--

INSERT INTO `paginations` (`id`, `name`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Shihan', 'Bangladesh', NULL, NULL),
(2, 'Shakib', 'Bangladesh', NULL, NULL),
(3, 'Michel Stark', 'Australia', NULL, NULL),
(4, 'Cris Gayle', 'Westindiz', NULL, NULL),
(5, 'Shahid Afridi', 'Pakistan', NULL, NULL),
(6, 'Rahul Dravid', 'India', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dynamic_inputs`
--
ALTER TABLE `dynamic_inputs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paginations`
--
ALTER TABLE `paginations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dynamic_inputs`
--
ALTER TABLE `dynamic_inputs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paginations`
--
ALTER TABLE `paginations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
