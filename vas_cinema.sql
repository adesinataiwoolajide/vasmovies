git-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 06:54 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vas_cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinemas`
--

CREATE TABLE `cinemas` (
  `id` int(10) UNSIGNED NOT NULL,
  `cinema_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cinema_location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cinemas`
--

INSERT INTO `cinemas` (`id`, `cinema_name`, `cinema_location`, `created_at`, `updated_at`) VALUES
(6, 'Glorious', 'Lagos', '2019-01-15 11:08:28', '2019-01-15 11:08:28'),
(8, 'Empire', 'Lagos', '2019-01-15 11:09:09', '2019-01-15 11:09:09'),
(9, 'Empire ssg', 'Lagos', '2019-01-15 11:13:54', '2019-01-15 11:13:54'),
(10, 'Empiredqxfw', 'Lagos', '2019-01-15 11:14:58', '2019-01-15 11:14:58'),
(11, 'Ventura', 'Apapa', '2019-01-15 11:21:02', '2019-01-15 11:21:02'),
(12, 'Favours', 'Apapa', '2019-01-16 07:48:26', '2019-01-16 07:48:26'),
(14, 'Hope', 'Lekki', '2019-01-16 15:15:49', '2019-01-16 15:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_15_055317_create_movies_table', 1),
(4, '2019_01_15_055925_create_cinemas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_banner` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cinema_id` int(255) NOT NULL,
  `top_actors` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_title`, `movie_category`, `movie_banner`, `cinema_id`, `top_actors`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Brandddd', 'Comedy', 'ABUBAKAR SANI BELLO – NIGER STATE_1547643197.jpg', 10, 'recretwxdsffdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'dsewrhvewcvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', '2019-01-16 11:28:10', '2019-01-16 16:19:09'),
(3, 'Trainig', 'Action', '', 12, 'juvhfcdtrnftynvgfcthdny', 'fjytchrj6mc', '2019-01-16 11:37:46', '2019-01-16 16:20:06'),
(4, 'Brandooujjn', 'Indegenous', '', 10, 'jnjnunhnhnu', 'huhjnjnunun', '2019-01-16 11:44:56', '2019-01-16 11:44:56'),
(5, 'tsjdvrtbydttrrbt', 'Comedy', '', 10, 'dfWGHNSTAWF', 'EESBSRTT', '2019-01-16 11:46:32', '2019-01-16 11:46:32'),
(7, 'Shouldersddd', 'Action', 'C:\\xampp\\tmp\\php3EC5.tmp', 10, '4CWC', 'GVACREE', '2019-01-16 11:55:58', '2019-01-16 11:55:58'),
(8, 'Shouldersdddedwrrw', 'Action', 'C:\\xampp\\tmp\\php8EDE.tmp', 10, '4CWC', 'GVACREE', '2019-01-16 12:02:51', '2019-01-16 12:02:51'),
(9, 'Shouldersdddedwrrwgfvt', 'Action', 'C:\\xampp\\tmp\\php2971.tmp', 10, '4CWC', 'GVACREE', '2019-01-16 12:08:59', '2019-01-16 12:08:59'),
(10, 'COmpliant', 'Action', 'C:\\xampp\\tmp\\php77CE.tmp', 10, 'yrtnurervrtry juuyterwyyuubt', 'nmjkljthyrbhvecvtry', '2019-01-16 12:13:41', '2019-01-16 12:13:41'),
(11, 'rtybntrewqcxgw', 'Comedy', 'C:\\xampp\\tmp\\phpCE37.tmp', 10, 'av wc4et5vy63754c5645', '354g6746535423d5465', '2019-01-16 12:41:22', '2019-01-16 12:41:22'),
(12, '4b66r3f', 'Religious', 'C:\\xampp\\tmp\\phpB1A8.tmp', 12, 'v453434', 'v46c53345d', '2019-01-16 12:48:54', '2019-01-16 12:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `show_times`
--

CREATE TABLE `show_times` (
  `id` int(255) NOT NULL,
  `movie_id` int(255) NOT NULL,
  `showing_time` text NOT NULL,
  `showing_date` text NOT NULL,
  `cinema_id` int(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `show_times`
--

INSERT INTO `show_times` (`id`, `movie_id`, `showing_time`, `showing_date`, `cinema_id`, `updated_at`, `created_at`) VALUES
(2, 3, '4:PM CATb76687697b584356', '2019-01-07', 12, '2019-01-16 18:08:29', '2019-01-16 19:08:29'),
(5, 12, '4:PM CAT Timedd', '2020-01-07', 9, '2019-01-16 14:23:34', '2019-01-16 15:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adesina Taiwo Olajide', 'tolajide74@gmail.com', '$2y$10$wQVaRp6sjBP1fK.rCvKuXOqC9KpPmC/uDBGqE4jgj/vGYa946Rk/i', 'eyoCrrl7ia0YrzqQJlQfFEJj4Iohxue2amcsbh5xOedqZR7tPeziWxJIrsze', NULL, NULL),
(2, 'Adesina Kehinde Temitope', 'aty@yahoo.com', 'mbmnmnj', NULL, '2019-01-15 13:53:30', '2019-01-16 18:47:13'),
(3, 'Adesina Kehinde Temitopedddddd', 'adesina1514@yahoo.com', 'password', NULL, '2019-01-15 14:03:41', '2019-01-16 18:40:25'),
(12, 'mjhjhjk', 'kolade@gmail.com', 'hjhjjk', NULL, '2019-01-16 18:52:35', '2019-01-16 18:52:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `show_times`
--
ALTER TABLE `show_times`
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
-- AUTO_INCREMENT for table `cinemas`
--
ALTER TABLE `cinemas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `show_times`
--
ALTER TABLE `show_times`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
