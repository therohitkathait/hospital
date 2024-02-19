-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 10:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `date`, `doctor`, `phone`, `message`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'sanat', 'sanat@gmail.com', '2023-12-15', 'rohit', '9854756985', 'i am sick.', 'Canceled', NULL, '2023-12-16 05:41:08', '2024-01-03 10:12:54'),
(6, 'kunal', 'kunal@gmail.com', '2023-12-22', 'rohit', '9854756985', 'help', 'Canceled', '3', '2023-12-16 08:48:16', '2023-12-19 00:26:49'),
(7, 'Hitesh', 'hiteshkumrawat9@gmail.com', '2023-12-20', 'sanat', '9854756985', 'hey help me! i am dying!', 'Canceled', '11', '2023-12-18 03:06:32', '2023-12-18 03:08:13'),
(8, 'Hitesh', 'hiteshkumrawat9@gmail.com', '2023-12-22', 'kunall', '9854756985', 'e3wrtyuhi', 'in Progress', '11', '2023-12-18 03:10:55', '2023-12-18 03:10:55'),
(9, 'kunal', 'kunal@gmail.com', '2023-12-20', 'sanat', '9854785698', 'hey i am dying!!!', 'Approved', '3', '2023-12-19 00:27:41', '2023-12-19 00:27:55'),
(10, 'rishabh', 'rishabhrawat757@gmail.com', '2024-01-12', 'Rohit Kathait', '98465284', 'Hey i am being surrounded! Form upon me.', 'Approved', '15', '2024-01-03 10:10:10', '2024-01-03 10:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `speciality` varchar(255) DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `phone`, `speciality`, `room`, `image`, `created_at`, `updated_at`) VALUES
(1, 'kunall', '87456985214', 'orthopedic', '404', '1702640459.jpg', '2023-12-15 06:10:59', '2023-12-18 03:08:29'),
(6, 'sanat', '45263263263', 'heart', '505', '1702640754.jpg', '2023-12-15 06:15:54', '2023-12-16 11:18:56'),
(20, 'Rohit Kathait', '7302524978', 'eye', '521', '1703490490.jpeg', '2023-12-25 02:18:10', '2023-12-25 02:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_12_14_080938_create_sessions_table', 1),
(7, '2023_12_15_105427_create_doctors_table', 2),
(8, '2023_12_16_063631_create_appointments_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('hiteshkumrawat9@gmail.com', '$2y$12$r81wo7q4TwqpNmzpR5gzru0lg0IJOLsMySVyHBFQrVr2SKK0E8d/a', '2023-12-18 03:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('FgjtWMjpWUNQcbfXdF2zIB1JcCrlVoWDD9f3ZRpr', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaVNRbWF3NkZEcWZiUXJJZ0lBMzQ0b0tYdkJPdzdoVGFvejc5N0t0ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1706337732),
('hCKfTcGQI9vIp36R5FellU4EX0M3DcqGIgaUBk2M', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiRkxTaE9kd0tGdFI0dVB6OU16VGU1MlZ1amFlTzd3WWhQQTNrdUZlViI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1706339186),
('LGpgRRGUOh1xn7WPkGqUpFtMJxqw7C7S39VGdOJS', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT0dTSUFYaHZPcFZES0NkMU02SGhnMFFuemlDQUlITEFhU0wwd3NIQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZGRfZG9jdG9yX3ZpZXciO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=', 1706346080);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(3, 'kunal', 'kunal@gmail.com', '9854756985', 'Palnagar, Dewas, Madhya Pradesh', '0', '2023-12-17 09:57:51', '$2y$12$ltjmTr3Hd.uPjRFOE0z/CuaISifTX6oWTgJeUO5GU8La4NaZgR4wC', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-15 00:28:14', '2023-12-15 00:28:14'),
(4, 'Admin', 'admin@gmail.com', '9854785698', 'Sanjay Nagar, Dewas', '1', '2023-12-17 09:57:51', '$2y$12$cvJjbMwvjj./4K6tmf.ybOV6/D55R2MwSO6w7S5bbuTgS7cfposXm', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-15 00:30:33', '2023-12-15 00:30:33'),
(5, 'sanat', 'sanat@gmail.com', '9854756985', 'station ke pass', '0', NULL, '$2y$12$rHMU5lRLuHwJUL1s7dFhUO12fg.vlwnPhjVMfXcD78Z8IerfXxDqu', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-17 09:00:43', '2023-12-17 09:00:43'),
(11, 'Hitesh', 'hiteshkumrawat9@gmail.com', '9854785698', 'dewas', '0', '2023-12-17 09:57:51', '$2y$12$JuhfXR19POJifmJ0NqgQIuXWAfFrvMtNUixc4eAJQwO7xGKgAvXVS', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-18 03:00:30', '2023-12-18 03:00:30'),
(12, 'siddharth', 'siddharth.18semwal@gmail.com', '9854785698', 'Sanjay Nagar, Dewas', '0', NULL, '$2y$12$nms6NlHhoasUfqfA9q4Hiu5B2UqAI2eyhaL81Q3PiTVqDE5L/fnV2', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-18 09:12:21', '2023-12-18 09:12:21'),
(15, 'rishabh', 'rohitsinghkathait17447@gmail.com', '9854785698', 'Sanjay Nagar, Dewas', '0', '2024-01-03 10:08:18', '$2y$12$.aW3TL5FR/7tZLTrbA.YiOEzx7QQC1Rne9xL3ag3Dxzxd92PJULTm', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-03 10:06:00', '2024-01-03 10:08:18'),
(16, 'kunal', 'adroitteachteam1@gmail.com', '9854785698', 'Sanjay Nagar, Dewas', '0', NULL, '$2y$12$Rw7wgiWBThjj3K77HbHID.EcOiSuk9jTWA0sQiOFRzo4XjaIXsEPe', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-25 03:25:24', '2024-01-25 03:25:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
