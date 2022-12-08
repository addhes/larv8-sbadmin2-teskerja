-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Dec 08, 2022 at 06:22 PM
-- Server version: 10.10.2-MariaDB-1:10.10.2+maria~ubu2204
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teswahana`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog_lagus`
--

CREATE TABLE `catalog_lagus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no` varchar(255) DEFAULT NULL,
  `cover_atwork` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `artis_name` varchar(255) DEFAULT NULL,
  `genre` varchar(255) NOT NULL,
  `sub_genre` varchar(255) DEFAULT NULL,
  `record_label` varchar(255) NOT NULL,
  `produced_by` varchar(255) DEFAULT NULL,
  `production_year` varchar(255) NOT NULL,
  `first_release_date` varchar(255) NOT NULL,
  `release_date` varchar(255) NOT NULL,
  `lyric_language` varchar(255) NOT NULL,
  `lyric_url` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalog_lagus`
--

INSERT INTO `catalog_lagus` (`id`, `no`, `cover_atwork`, `title`, `artis_name`, `genre`, `sub_genre`, `record_label`, `produced_by`, `production_year`, `first_release_date`, `release_date`, `lyric_language`, `lyric_url`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'PR001', 'cover\\pexels-pixabay-219998.jpg', 'title', 'artisn name', 'genre', 'sub genree', 'record label', 'produced', '2028', '27/12/2022', '28/12/2022', 'indoensia', 'doc\\image.txt', 'description', 'Pending', '2022-12-08 15:51:08', '2022-12-08 15:51:08'),
(3, 'PR002', 'cover\\pexels-baskin-creative-studios-1766838.jpg', 'title', NULL, 'genre', NULL, 'record label', NULL, '2028', '28/12/2022', '13/12/2022', 'english', '', NULL, 'Pending', '2022-12-08 15:59:44', '2022-12-08 15:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(40, '2014_10_12_000000_create_users_table', 1),
(41, '2014_10_12_100000_create_password_resets_table', 1),
(42, '2019_08_19_000000_create_failed_jobs_table', 1),
(43, '2022_12_06_221547_create_catalog_lagus_table', 1),
(44, '2022_12_07_043821_create_track_file_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `track_file`
--

CREATE TABLE `track_file` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `artis_name` varchar(255) DEFAULT NULL,
  `composer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `roles` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `email_verified_at`, `password`, `roles`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'A', 'user@g.com', NULL, '$2y$10$onjzMaM6a3KGRtRv8vvXCeh.VwKvQsOxsmPOAIZGVYgsi1/B2MkPq', 'user', NULL, '2022-12-08 15:43:09', '2022-12-08 15:43:09'),
(2, 'Admin', 'A', 'admin@g.com', NULL, '$2y$10$yHXhFTdi.Uz1qtV12TSC2ekiAx6s6hYIxz2m3I14fUuMhEb255Aqy', 'admin', NULL, '2022-12-08 15:43:34', '2022-12-08 15:43:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog_lagus`
--
ALTER TABLE `catalog_lagus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `track_file`
--
ALTER TABLE `track_file`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `catalog_lagus`
--
ALTER TABLE `catalog_lagus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `track_file`
--
ALTER TABLE `track_file`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
