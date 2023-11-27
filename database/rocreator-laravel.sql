-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2023 at 04:01 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rocreator-laravel`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game_posts`
--

CREATE TABLE `game_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `game_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_available` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `game_posts`
--

INSERT INTO `game_posts` (`id`, `game_title`, `game_content`, `game_type`, `game_image`, `publish_date`, `game_link`, `game_available`, `created_at`, `updated_at`) VALUES
(1, 'Forest Story', 'Forest is the place where you can explore and spend time with friends.', 'Roblox', 'image3-1.png', '2023-01-29 16:04:25', 'https://www.roblox.com/games/6394812786/Forest-Story', 1, '2023-11-23 13:28:07', '2023-11-23 13:28:07'),
(2, 'Forest Story 2', 'Welcome back to the sequel to the famous Forest Story.', 'Roblox', 'image4.png', '2023-11-23 13:29:13', 'https://www.roblox.com/games/7327362362/Forest-Story-2', 1, '2023-11-23 13:29:13', '2023-11-23 13:29:13'),
(3, 'Super Parkour 3', 'New interesting adventures came. Explore the game.', 'Roblox', 'image5-1.png', '2023-11-23 13:29:13', 'https://www.roblox.com/games/4680524694/Super-Parkour-3', 1, '2023-11-23 13:29:13', '2023-11-23 13:29:13'),
(4, 'Island of Mystery', 'Welcome to a new super adventure game. You need survival skills.', 'Roblox', 'image5-1.png', '2023-11-23 13:29:13', 'https://www.roblox.com/games/6534765863/Island-of-Mystery', 1, '2023-11-23 13:29:13', '2023-11-23 13:29:13'),
(5, 'WarBot', 'WarBot is a game where you need to survive the elements.', 'Android', 'image4.png', '2023-01-29 16:13:46', 'https://example.com', 0, '2023-11-23 13:30:09', '2023-11-23 13:30:09');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_19_225143_create_game_posts_table', 1),
(6, '2023_11_19_225206_create_software_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `software_posts`
--

CREATE TABLE `software_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `software_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `software_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `software_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `software_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `software_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `software_available` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `software_posts`
--

INSERT INTO `software_posts` (`id`, `software_title`, `software_content`, `software_type`, `software_image`, `publish_date`, `software_link`, `software_available`, `created_at`, `updated_at`) VALUES
(1, 'PulseTimer', 'Introducing Puls Timer, your go-to online tool for seamless time management. Set timers, enhance organization, and boost productivity effortlessly. Bid farewell to procrastination and embrace efficiency. ', 'Web', 'image5-1.png', '2023-11-23 12:41:30', 'https://bogdansch.github.io/PulseTimer/', 1, NULL, NULL),
(2, 'Calculator for PC', 'This is an important thing ever. This calculator has a nice design and can do all operations what you need. Made for windows devices. It doesn\'t have any virus!', 'PC', 'image3-1.png', '2023-11-23 12:46:25', '', 0, NULL, NULL),
(3, 'Calculator for Android', 'This is an important thing ever. This calculator has a nice design and can do all operations what you need. Made for android devices. It doesn\'t have any virus!', 'Android', 'image4.png', '2023-11-23 12:46:25', '', 0, NULL, NULL);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `game_posts`
--
ALTER TABLE `game_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `software_posts`
--
ALTER TABLE `software_posts`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game_posts`
--
ALTER TABLE `game_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `software_posts`
--
ALTER TABLE `software_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
