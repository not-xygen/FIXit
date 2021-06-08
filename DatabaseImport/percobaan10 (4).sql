-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 07:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `percobaan10`
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
(4, '2021_05_28_102639_laratrust_setup_tables', 2),
(5, '2021_06_02_054911_payments', 3);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` int(10) UNSIGNED NOT NULL,
  `id_fixer` int(11) NOT NULL,
  `jenis_device` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_fixer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_pelanggan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_fixer` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_fixer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `foto_device` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `id_pelanggan`, `id_fixer`, `jenis_device`, `created_at`, `updated_at`, `nama_pelanggan`, `nama_fixer`, `no_hp_pelanggan`, `no_hp_fixer`, `alamat_pelanggan`, `alamat_fixer`, `status`, `foto_device`) VALUES
(4, 1, 5, 'wewew', NULL, NULL, 'Jaka', 'Surya', '123123123', '08123123123', 'gg.jaj', 'tt..ww', 'Pending', ''),
(5, 1, 5, 'Someting', NULL, NULL, 'Jaka', 'Surya', '123123123', '08123123123', 'gg.jaj', 'tt..ww', 'Pending', 'Jaka.png');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-05-28 02:29:46', '2021-05-28 02:29:46'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-05-28 02:29:46', '2021-05-28 02:29:46'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-05-28 02:29:46', '2021-05-28 02:29:46'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-05-28 02:29:46', '2021-05-28 02:29:46'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-05-28 02:29:47', '2021-05-28 02:29:47'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-05-28 02:29:47', '2021-05-28 02:29:47'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-05-28 02:29:47', '2021-05-28 02:29:47'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-05-28 02:29:47', '2021-05-28 02:29:47'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-05-28 02:29:47', '2021-05-28 02:29:47'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-05-28 02:29:47', '2021-05-28 02:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(5, 3),
(6, 1),
(6, 2),
(6, 3),
(7, 1),
(7, 2),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2021-05-28 02:29:46', '2021-05-28 02:29:46'),
(2, 'fixer', 'Fixer', 'Fixer', '2021-05-28 02:29:47', '2021-05-28 02:29:47'),
(3, 'pelanggan', 'Pelanggan', 'Pelanggan', '2021-05-28 02:29:47', '2021-05-28 02:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(3, 1, 'App\\Models\\User'),
(1, 2, 'App\\Models\\User'),
(3, 3, 'App\\Models\\User'),
(3, 4, 'App\\Models\\User'),
(2, 5, 'App\\Models\\User'),
(2, 8, 'App\\Models\\User'),
(3, 16, 'App\\Models\\User'),
(2, 17, 'App\\Models\\User'),
(2, 18, 'App\\Models\\User'),
(2, 19, 'App\\Models\\User'),
(2, 20, 'App\\Models\\User'),
(3, 21, 'App\\Models\\User'),
(3, 22, 'App\\Models\\User'),
(3, 23, 'App\\Models\\User'),
(3, 24, 'App\\Models\\User'),
(3, 25, 'App\\Models\\User'),
(3, 26, 'App\\Models\\User'),
(3, 27, 'App\\Models\\User'),
(3, 28, 'App\\Models\\User'),
(3, 29, 'App\\Models\\User');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `no_telepon_pelanggan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'foto_profile.png',
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'poster.png',
  `desc_fixer` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Lorem Ipsum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `no_telepon_pelanggan`, `alamat`, `foto_profile`, `poster`, `desc_fixer`) VALUES
(1, 'Jaka', 'dogcat226922@gmail.com', NULL, '$2y$10$QTCVvyTxGHJnx3NHnixCbu3bAy471kyBSCALFpiEuTxu4gNo1JMy.', NULL, '2021-05-28 02:48:46', '2021-05-28 02:48:46', '123123123', 'gg.jaj', 'foto_profile.png', '', ''),
(2, 'Ansar Fadillah', 'ansarcyber134@gmail.com', NULL, '$2y$10$nCG7ngG.VJy5uknzWU5kGe6iCWSJd9jTb9E7PyWydemafqkGGmoXe', NULL, '2021-05-28 02:50:52', '2021-05-28 02:50:52', '081350199978', 'gg.jeee', 'foto_profile.png', '', ''),
(3, 'percobaanmultiauth', 'ansarfadillah17@gmail.com', NULL, '$2y$10$FGlcDn3K2lPzBXLBbYSTCuLFqYAChL45/fuEw22WcmGimP.QPH00K', NULL, '2021-05-28 05:13:22', '2021-05-28 05:13:22', '081350199978', 'ee.gg', 'foto_profile.png', '', ''),
(4, 'Ansar Fadillah', 'dogcat2269422@gmail.com', NULL, '$2y$10$vx5iwcaseq3lQmPzDnsC8eAGWInnlHNMayRBy.9mY0utVeMXyLZia', NULL, '2021-05-28 05:13:46', '2021-05-28 05:13:46', '081212123123', 'rr.gg', 'foto_profile.png', '', ''),
(5, 'Surya', 'ansarfadillah127@gmail.com', NULL, '$2y$10$Xz8L3cDV0uhON.42XpksmuZ5Vif6sWosTByzlXGQh.xyj3oWDFcSG', NULL, '2021-05-28 05:14:08', '2021-05-28 05:14:08', '08123123123', 'tt..ww', 'foto_profile.png', '', ''),
(6, 'Tong', '222233@gmail.com', NULL, '$2y$10$EL2qYH4eOx5tF9IX1awd/uc4gCG1Rx1ne6sXbEUOxE7HYxLBkCQNm', NULL, '2021-06-02 04:10:59', '2021-06-02 04:10:59', '0813501999788', 'wwee..ggg', 'foto_profile.png', '', ''),
(8, 'GG', 'user@gmail.com', NULL, '$2y$10$JJilocoi1ucfNvoIhLpqkePKlHYuAW3aVcYwnmuhPSTN9zTLUHrKi', NULL, '2021-06-02 10:31:25', '2021-06-02 10:31:25', '123123123', 'asdasdas', 'foto_profile.png', '', ''),
(9, 'GGgg', 'use22r@gmail.com', NULL, '$2y$10$ohlz.yDb94sNJVlFRbZKQ.2HWY4jmv.6kDHOQq7E/RKMR/UlBlrby', NULL, '2021-06-02 10:33:14', '2021-06-02 10:33:14', '123123123', '123123123', 'foto_profile.png', '', ''),
(16, 'Pelanggan', 'asdasd@gmail.com', NULL, '$2y$10$aX/1Ao9sYnkyZ05nGnr0Xu15xH6iho6yF3EA5jBYGBc2ZMf7ebqg2', NULL, '2021-06-02 10:57:28', '2021-06-02 10:57:28', '123123', '123', 'foto_profile.png', '', ''),
(17, 'Fixer', 'fixerdummy@gmail.com', NULL, '$2y$10$AATLT4FPrhUkfOIS1oeW/Os9e7FnFWCw9lIMmlptlCD53Cv9k8zji', NULL, '2021-06-04 18:57:54', '2021-06-04 18:57:54', '081321', 'jalan Tanjung', 'foto_profile.png', '', ''),
(18, 'Fixer2', 'fixerdummy2@gmail.com', NULL, '$2y$10$a3PTt2W4dNjEoprUMYnHiOxL9pzANkjk5CMrH8CXRBC090wNqkqsS', NULL, '2021-06-04 18:59:36', '2021-06-04 18:59:36', '12312', 'Dummy', 'foto_profile.png', '', ''),
(19, 'Fixer3', 'fixer3@gmail.com', NULL, '$2y$10$jcd4WoakPw3fG7YsZo02g.XddwB159QqPoD2awxehYTPefKWSmeE6', NULL, '2021-06-04 19:16:42', '2021-06-04 19:16:42', '123123', 'GG221', 'foto_profile.png', '', ''),
(20, 'fixer4', 'fixer4@gmail.com', NULL, '$2y$10$MMcB.PjN4EagvHfZhokj1Oi5Tm2LpZe6pi4Jb6WvI.yNaEXDHyXa.', NULL, '2021-06-04 20:18:34', '2021-06-04 20:18:34', '123123', 'jalan jalan', 'foto_profile.png', '', ''),
(21, 'PelangganDummy', 'PelangganDummy@gmail.com', NULL, '$2y$10$NsGRs.muphwLY.btsHEvW.EEA4FoGYSL3IY4IpGeVlTYE/ra6aH.a', NULL, '2021-06-06 04:54:35', '2021-06-06 04:54:35', '08123456789', 'jalan.jatinegara', 'foto_profile.png', 'poster.png', 'Lorem Ipsum'),
(22, 'dummy3', 'dummy3@gmail.com', NULL, '$2y$10$840Gbe1WHpdWhPnwV1V4TeCkcbnxHMhXIqpR/9I58BdXXTLG6QBkC', NULL, '2021-06-06 04:55:47', '2021-06-06 04:55:47', '089876554231', 'Jalan.Kudunga', 'foto_profile.png', 'poster.png', 'Lorem Ipsum'),
(23, 'dummy4', 'dummy4@gmail.com', NULL, '$2y$10$b.9yBAO1PwlydksNDyMHNejDvtMxpoxn8ZXmpDF4AewytUhx5IFOa', NULL, '2021-06-06 04:58:07', '2021-06-06 04:58:07', '0876541234', 'jalan.kenangan 69420', 'foto_profile.png', 'poster.png', 'Lorem Ipsum'),
(24, 'dummy5', 'dummy5@gmail.com', NULL, '$2y$10$qoMu3ShEHhcOYmdWGx7oU.98PQSLTYWHmfR1sWocMP3ba7verTYMu', NULL, '2021-06-06 04:59:25', '2021-06-06 04:59:25', '081723123124', 'jalan.kuringgg', 'foto_profile.png', 'poster.png', 'Lorem Ipsum'),
(25, 'dummy6', 'dummy6@gmail.com', NULL, '$2y$10$PXtHhD6D2wu8oXsBElJCref.fetHiUBlXTxWxXLbUlnJ7zZvbF6Xi', NULL, '2021-06-06 05:06:46', '2021-06-06 05:06:46', '08132123231', 'Jalan.Rubick69', 'foto_profile.png', 'poster.png', 'Lorem Ipsum'),
(26, 'dummy7', 'dummy7@gmail.com', NULL, '$2y$10$RfGsqkEbVAn.Fhr50fIhC.iMyh/Oe66Q0wzvGlaydLwBeWReWvAQe', NULL, '2021-06-06 05:07:45', '2021-06-06 05:07:45', '0812391231', 'jalan.keren999', 'foto_profile.png', 'poster.png', 'Lorem Ipsum'),
(27, 'dummy8', 'dummy8@gmail.com', NULL, '$2y$10$.q33cEV3nn6iz7tol0d71eHAFslTlhLM1hcW4Hxyd2Qxn3LDbjbK2', NULL, '2021-06-06 05:09:37', '2021-06-06 05:09:37', '08123124125', 'jalan.maklogaming', 'foto_profile.png', 'poster.png', 'Lorem Ipsum'),
(28, 'dummy9', 'dummy9@gmail.com', NULL, '$2y$10$c0GLraLK675iqcAjPUC57.pACjfibUQrkc83y0nbIkzJrJN2lOvyG', NULL, '2021-06-06 05:13:17', '2021-06-06 05:13:17', '0823123213', 'jalan.oop', 'foto_profile.png', 'poster.png', 'Lorem Ipsum'),
(29, 'dummy10', 'dummy10@gmail.com', NULL, '$2y$10$H9RWm0hjifb6Ni.gJ78EyOAqBA.cKcOY2VL/C7uyGJFeCAIfbpRUO', NULL, '2021-06-06 05:14:48', '2021-06-06 05:14:48', '08123125412', 'jalan.sulawesi', 'foto_profile.png', 'poster.png', 'Lorem Ipsum');

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
