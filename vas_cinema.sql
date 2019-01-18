-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 04:39 PM
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
(1, 'Glorious', 'Apapa', '2019-01-17 21:46:48', '2019-01-17 21:46:48'),
(2, 'Empire', 'Ikeja', '2019-01-17 21:47:10', '2019-01-17 21:47:10'),
(3, 'Vas Movies', 'Lekki', '2019-01-17 21:47:28', '2019-01-17 21:47:28');

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
(1, 'Arrival', 'Action', 'Arrival_1547803202.jpg', 2, 'Tola, Kenny, Kelvin, Odun', 'This is an Indian Action Movie', '2019-01-17 21:58:27', '2019-01-18 08:20:02'),
(2, 'Exodus', 'Religious', 'exodus-gods-and-kings-545d433b2af6e_1547765987.jpg', 1, 'David. Kola. Josh, Tele', 'This is good', '2019-01-17 21:59:47', '2019-01-17 21:59:47'),
(3, 'Justice League', 'Comedy', 'Justice-League_1547766048.jpg', 3, 'All Actors, Directors, Hope', 'This is fresh', '2019-01-17 22:00:48', '2019-01-17 22:00:48'),
(4, 'The Kick', 'Indegenous', 'kick_1547766109.jpg', 2, 'Henry, Joke, Ope', 'Indian Movie', '2019-01-17 22:01:49', '2019-01-17 22:01:49'),
(5, 'Red Bad', 'Religious', 'redbad_1547766191.jpg', 1, 'Kola, Kunle, Dayo , More', 'This is more than Good', '2019-01-17 22:03:11', '2019-01-17 22:03:11'),
(6, 'Veronica', 'Action', 'veronica-mars-movie-poster_1547766275.jpg', 3, 'Aloma, Kelly, Nelly, Goke, Joke', 'This is all about action Movie', '2019-01-17 22:04:35', '2019-01-17 22:04:35'),
(7, 'Colide', 'Action', 'colide_1547766423.jpg', 2, 'CMan, Sola, Goke, The Rock', 'More than Awesome', '2019-01-17 22:07:03', '2019-01-17 22:07:03'),
(8, 'Widows', 'Indegenous', 'widows_1547766580.jpg', 1, 'Kelvin, Hart, Jokky, Umelo', 'They all lost their loved ones', '2019-01-17 22:09:40', '2019-01-17 22:09:40'),
(9, 'Lopper', 'Indegenous', 'lopper_1547766742.jpg', 3, 'Gope, Kola, Rolly, Fola, Favous', 'Whjat hapened was unimaginable', '2019-01-17 22:12:22', '2019-01-17 22:12:22'),
(10, 'Terminator', 'Action', 'terminator-5_1547766820.jpg', 2, 'Commando, Ranbo, Jet li, Joke', 'This is a movie by commando', '2019-01-17 22:13:40', '2019-01-17 22:13:40'),
(11, 'Hancook', 'Action', 'hancook_1547766917.jpg', 1, 'Smith, Paul ,Stephen, Martins', 'He is so powerful', '2019-01-17 22:15:17', '2019-01-17 22:15:17'),
(12, 'Tomb Raider', 'Action', 'tomb_1547767022.jpg', 2, 'Kenny, Kola, folly, Tope, Emma, Peter', 'This a movie about Revenge', '2019-01-17 22:17:02', '2019-01-17 22:17:02');

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
  `show_day` varchar(20) DEFAULT NULL,
  `amount` int(25) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `show_times`
--

INSERT INTO `show_times` (`id`, `movie_id`, `showing_time`, `showing_date`, `cinema_id`, `show_day`, `amount`, `updated_at`, `created_at`) VALUES
(1, 1, '15:02', '2019-01-06', 1, 'Friday', 4000, '2019-01-17 23:39:23', '2019-01-18 00:39:23'),
(2, 9, '10:30', '2019-01-08', 2, 'Monday', 2000, '2019-01-18 07:36:18', '2019-01-18 07:36:18'),
(3, 3, '11:00', '2019-01-08', 1, 'Tuesday', 5000, '2019-01-18 07:36:24', '2019-01-18 07:36:24'),
(5, 5, '01:59', '2019-01-18', 3, 'Sunday', 3500, '2019-01-18 07:36:31', '2019-01-18 07:36:31'),
(6, 8, '23:00', '2019-02-07', 2, 'Thursday', 1000, '2019-01-18 07:36:37', '2019-01-18 07:36:37'),
(7, 2, '20:00', '2019-01-01', 3, 'Sunday', 2500, '2019-01-18 10:04:56', '2019-01-18 10:04:56');

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
(1, 'Adesina Taiwo Olajide', 'tolajide74@gmail.com', '$2y$10$wQVaRp6sjBP1fK.rCvKuXOqC9KpPmC/uDBGqE4jgj/vGYa946Rk/i', '6k9tq3zLL5EZWrl2S85iHRBtjesXmvYZWLmfBOuOYNcqLYNHcOwveQoeLzcG', NULL, NULL),
(14, 'Administrator', 'admin@gmail.com', '$2y$10$wG3OLjzvXhDGWrStKOugoeuAxTV6G2x6StMnUL.iTUnoop2KTYK2K', 'PkJY0ctQ6Vjqt8avK7F02qsOLILj0wjrSYKESLnaGAJKlesCLcySkvwwSzza', '2019-01-18 05:54:23', '2019-01-18 05:54:23');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
