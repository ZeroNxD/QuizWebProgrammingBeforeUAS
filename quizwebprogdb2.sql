-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 06:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizwebprogdb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Software Development', '2025-01-10 04:22:10', '2025-01-10 04:22:10'),
(2, 'Data Science', '2025-01-10 04:22:10', '2025-01-10 04:22:10'),
(3, 'Artificial Intelligence', '2025-01-10 04:22:10', '2025-01-10 04:22:10'),
(4, 'Network Security', '2025-01-10 04:22:10', '2025-01-10 04:22:10'),
(5, 'Graphic Design', '2025-01-10 04:22:10', '2025-01-10 04:22:10'),
(6, 'Civil Engineering', '2025-01-10 04:22:10', '2025-01-10 04:22:10'),
(7, 'Healthcare', '2025-01-10 04:22:10', '2025-01-10 04:22:10'),
(8, 'Entertainment', '2025-01-10 04:22:10', '2025-01-10 04:22:10'),
(9, 'Social Media Content Creator', '2025-01-10 04:22:10', '2025-01-10 04:22:10'),
(10, 'Entrepreneurship', '2025-01-10 04:22:10', '2025-01-10 04:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `friendlists`
--

CREATE TABLE `friendlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `friends_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('Accepted','Pending','Rejected') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friendlists`
--

INSERT INTO `friendlists` (`id`, `user_id`, `friends_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 6, 'Rejected', '2025-01-10 04:22:16', '2025-01-10 04:22:16'),
(2, 3, 4, 'Accepted', '2025-01-10 04:22:16', '2025-01-10 10:20:42'),
(3, 4, 7, 'Accepted', '2025-01-10 04:22:16', '2025-01-10 04:22:16'),
(4, 2, 1, 'Accepted', '2025-01-10 04:22:16', '2025-01-10 04:22:16'),
(5, 5, 2, 'Accepted', '2025-01-10 04:22:16', '2025-01-10 04:22:16'),
(6, 2, 4, 'Accepted', '2025-01-10 04:22:16', '2025-01-10 04:22:16'),
(11, 7, 2, 'Accepted', '2025-01-10 09:42:52', '2025-01-10 09:43:31'),
(12, 3, 2, 'Rejected', '2025-01-10 10:14:35', '2025-01-10 10:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `send_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_08_130503_create_friendlist_tables', 1),
(5, '2025_01_08_130538_create_payment_tables', 1),
(6, '2025_01_08_130613_create_fields_tables', 1),
(7, '2025_01_08_130754_create_userfields_tables', 1),
(8, '2025_01_08_130827_create_messages_tables', 1),
(9, '2025_01_08_130850_create_notifications_tables', 1),
(10, '2025_01_08_135956_create_wishlist_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('friend_request','message') NOT NULL,
  `content` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount_payment` int(11) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('Fail','Success','Pending') NOT NULL DEFAULT 'Pending',
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
('HzMOpLN2z9TPEZTEcPyyopvBc1phRUjOgTVnEAL5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:134.0) Gecko/20100101 Firefox/134.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibDk5NWFSOG42RVg1TFBDc2dwT3RIS2tYaUtvckd1TVM5SVI3QkxKTyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9Db25uZWN0RnJpZW5kIjt9fQ==', 1736529791);

-- --------------------------------------------------------

--
-- Table structure for table `userfields`
--

CREATE TABLE `userfields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `field_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userfields`
--

INSERT INTO `userfields` (`id`, `user_id`, `field_id`, `created_at`, `updated_at`) VALUES
(1, 1, 9, '2025-01-10 04:22:23', '2025-01-10 04:22:23'),
(2, 1, 8, '2025-01-10 04:22:23', '2025-01-10 04:22:23'),
(3, 1, 7, '2025-01-10 04:22:23', '2025-01-10 04:22:23'),
(4, 2, 9, '2025-01-10 04:22:23', '2025-01-10 04:22:23'),
(5, 2, 4, '2025-01-10 04:22:23', '2025-01-10 04:22:23'),
(6, 2, 6, '2025-01-10 04:22:23', '2025-01-10 04:22:23'),
(7, 3, 4, '2025-01-10 04:22:23', '2025-01-10 04:22:23'),
(8, 3, 7, '2025-01-10 04:22:23', '2025-01-10 04:22:23'),
(9, 3, 8, '2025-01-10 04:22:23', '2025-01-10 04:22:23'),
(10, 4, 7, '2025-01-10 04:22:23', '2025-01-10 04:22:23'),
(11, 4, 2, '2025-01-10 04:22:23', '2025-01-10 04:22:23'),
(12, 4, 10, '2025-01-10 04:22:23', '2025-01-10 04:22:23'),
(13, 5, 9, '2025-01-10 04:22:23', '2025-01-10 04:22:23'),
(14, 5, 6, '2025-01-10 04:22:23', '2025-01-10 04:22:23'),
(15, 5, 4, '2025-01-10 04:22:23', '2025-01-10 04:22:23'),
(16, 6, 2, NULL, NULL),
(17, 6, 5, NULL, NULL),
(18, 6, 9, NULL, NULL),
(19, 7, 1, NULL, NULL),
(20, 7, 4, NULL, NULL),
(22, 7, 10, NULL, NULL),
(23, 7, 5, NULL, NULL),
(24, 7, 8, NULL, NULL),
(25, 7, 6, NULL, NULL),
(26, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `linkedin_link` varchar(255) NOT NULL,
  `wallet` int(11) NOT NULL DEFAULT 0,
  `biography` text NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `profile_picture`, `email`, `email_verified_at`, `password`, `gender`, `linkedin_link`, `wallet`, `biography`, `mobile_number`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kevin Petersen', 'Assets/KevinPetersen.png', 'KevinPetersen@gmail.com', '2025-01-10 04:22:03', '$2y$12$u8uDCuIfUIUq.tJhPlHiQ.ibGyTV6VfvoIIPeKMpptMUG3OUeQ6Sy', 'Male', 'http://www.mcclure.biz/dolores-voluptas-dolore-molestias-molestias.html', 0, 'Eum aliquid corrupti aspernatur nemo. Sit nisi ad non quibusdam ut molestiae. Fugit sint consequatur id provident. Provident temporibus qui ut iure aperiam ut in. Quo enim officia dolores dicta sed facere.', '081211137770', NULL, '2025-01-10 04:22:03', '2025-01-10 04:22:03'),
(2, 'Komi Shouko', 'Assets/KomiShouko.png', 'KomiShouko@gmail.com', '2025-01-10 04:22:03', '$2y$12$33tUgZYS3DDR35DeyEgwJ.bqvZl6s4f2qBRC21KZQshekGLvUb6xa', 'Female', 'http://predovic.net/assumenda-ad-cumque-ducimus-eius-nemo', 100000, 'Dolorem quidem eos deserunt minima. Quis voluptates libero voluptas voluptatem consequatur. Maiores perspiciatis et nihil aliquid iusto asperiores et. Doloremque cupiditate repudiandae reiciendis quos. Et dolor rerum ut maiores error eos eum.', '081211137771', NULL, '2025-01-10 04:22:03', '2025-01-10 04:22:03'),
(3, 'Testing User 1', 'Assets/TestingUser1.png', 'Testing1@gmail.com', '2025-01-10 04:22:03', '$2y$12$ADSbYFD2TaPbBqz2Ju7AIuckAuYoyYpRGhOFzFYMUN9n.Zo0OI8BW', 'Male', 'http://witting.org/autem-et-in-animi-cupiditate-recusandae-eius.html', 0, 'Saepe suscipit at illum pariatur eos unde. Tempore ut blanditiis et mollitia ratione. Autem numquam ut maxime ipsa consequatur.', '081211137772', NULL, '2025-01-10 04:22:03', '2025-01-10 04:22:03'),
(4, 'Testing User 2', 'Assets/TestingUser2.png', 'Testing2@gmail.com', '2025-01-10 04:22:03', '$2y$12$hgveHjOH8kuoLSN2E2YNM.R.2ZkyNlOjUBLaytvIVCuOrO356R6ry', 'Female', 'http://vandervort.com/error-expedita-nisi-esse-quam-minus-magni', 0, 'Nam quibusdam tempore totam voluptas. Soluta non sit iste eius dolor commodi quae. Distinctio delectus suscipit commodi qui.', '081211137773', NULL, '2025-01-10 04:22:04', '2025-01-10 04:22:04'),
(5, 'Testing User 3', 'Assets/TestingUser3.png', 'Testing3@gmail.com', '2025-01-10 04:22:04', '$2y$12$0nhMFfsgkDJ1oPTLEX3azeOR4cuMpIvKsluAB2/cW3glwsqj9zyQS', 'Female', 'http://www.kunde.info/atque-commodi-impedit-quis-aliquam-necessitatibus-et.html', 0, 'Mollitia earum labore labore sit occaecati praesentium aut. Exercitationem dolores laudantium facilis mollitia laudantium. Sit vel ipsam in ipsum.', '081211137774', NULL, '2025-01-10 04:22:04', '2025-01-10 04:22:04'),
(6, 'Wdwdw', 'assets/Kezll11TVCKr093DQlEJjbWUlfRUGQ3O0MzvuZqj.png', 'wdwdw@gmail.com', NULL, '$2y$12$kZW7ltmUTxJSq4N2lnlN.em/c/siTCZn.v8Tnvq9ku8mSnyzeW9Li', 'Male', 'https://www.linkedin.com/in/kevin-petersen-9174a1251/', 0, 'wdwdw', '0812121121212', NULL, '2025-01-10 04:28:11', '2025-01-10 04:28:11'),
(7, 'Testing', 'assets/CQxEeGiKfCdydnCQV7FCyzHKh7dHF3EkCsjadpUQ.png', 'Testing123@gmail.com', NULL, '$2y$12$gBrJyYpK8ru9/9HHTaAuyuX9xhLMQPpMfVS6oit8hiYXdTmmbKXBy', 'Female', 'https://www.linkedin.com/in/kevin-petersen-9174a1251/', 11000, 'ahahahhaa', '012901291028012', NULL, '2025-01-10 06:16:08', '2025-01-10 06:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `liked_user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fields_name_unique` (`name`);

--
-- Indexes for table `friendlists`
--
ALTER TABLE `friendlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `friendlists_user_id_foreign` (`user_id`),
  ADD KEY `friendlists_friends_id_foreign` (`friends_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_sender_id_foreign` (`sender_id`),
  ADD KEY `messages_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `userfields`
--
ALTER TABLE `userfields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userfields_user_id_foreign` (`user_id`),
  ADD KEY `userfields_field_id_foreign` (`field_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_liked_user_id_foreign` (`liked_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `friendlists`
--
ALTER TABLE `friendlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userfields`
--
ALTER TABLE `userfields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `friendlists`
--
ALTER TABLE `friendlists`
  ADD CONSTRAINT `friendlists_friends_id_foreign` FOREIGN KEY (`friends_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `friendlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `userfields`
--
ALTER TABLE `userfields`
  ADD CONSTRAINT `userfields_field_id_foreign` FOREIGN KEY (`field_id`) REFERENCES `fields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userfields_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_liked_user_id_foreign` FOREIGN KEY (`liked_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
