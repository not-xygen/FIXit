-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 01:45 PM
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
  `foto_device` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kerusakan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `id_pelanggan`, `id_fixer`, `jenis_device`, `created_at`, `updated_at`, `nama_pelanggan`, `nama_fixer`, `no_hp_pelanggan`, `no_hp_fixer`, `alamat_pelanggan`, `alamat_fixer`, `status`, `foto_device`, `jenis_kerusakan`) VALUES
(7, 30, 34, 'HP JAdueol', NULL, NULL, 'penggunadummy', 'dummyfixer3', '081350199978', '087265123122', 'Jalan. Karta Negara', 'Jalan.Kenangan', 'Sedang Dikerjakan', 'penggunadummy.jpg', ''),
(8, 30, 34, 'Samsueng', NULL, NULL, 'penggunadummy', 'dummyfixer3', '081350199978', '087265123122', 'Jalan. Karta Negara', 'Jalan.Kenangan', 'Pending', 'penggunadummy.jpg', '-Tidak Mau Nyala'),
(9, 30, 34, 'BBM', NULL, NULL, 'penggunadummy', 'dummyfixer3', '081350199978', '087265123122', 'Jalan. Karta Negara', 'Jalan.Kenangan', 'Pending', 'penggunadummy.jpg', '-Tidak Sempurna uWu'),
(10, 30, 34, 'GEEER', NULL, NULL, 'penggunadummy', 'dummyfixer3', '081350199978', '087265123122', 'Jalan. Karta Negara', 'Jalan.Kenangan', 'Pending', '2021-06-08 08.jpg', '-Meledak jadi popcorn'),
(11, 30, 34, 'CiaoMix', NULL, NULL, 'penggunadummy', 'dummyfixer3', '081350199978', '087265123122', 'Jalan. Karta Negara', 'Jalan.Kenangan', 'Pending', '2021-06-08 10.jpg', '-Batrai Meleduk');

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
(3, 30, 'App\\Models\\User'),
(1, 31, 'App\\Models\\User'),
(2, 32, 'App\\Models\\User'),
(2, 33, 'App\\Models\\User'),
(2, 34, 'App\\Models\\User'),
(3, 35, 'App\\Models\\User');

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
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'poster.png',
  `desc_fixer` text COLLATE utf8mb4_unicode_ci DEFAULT '\'Lorem Ipsum\''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `no_telepon_pelanggan`, `alamat`, `foto_profile`, `poster`, `desc_fixer`) VALUES
(30, 'penggunadummy', 'penggunadummy@gmail.com', NULL, '$2y$10$pY3GGgi43DFrscpT2sFbE.eUPEaHFHM8Ec7yk3br4KOo/2JZ0pMEK', NULL, '2021-06-07 23:41:14', '2021-06-08 03:18:58', '081350199978', 'Jalan. Karta Negara', '30.jpg', 'poster.png', NULL),
(31, 'dummyadmin', 'dummyadmin@gmail.com', NULL, '$2y$10$te7CAemO7JxCyUkqeJxke.xbONPON8up7AUOE6CQhvix2BbIKbzO.', NULL, '2021-06-07 23:44:21', '2021-06-07 23:44:21', '081231251212', 'Jalan.Mantiks', 'foto_profile.png', 'poster.png', '\'Lorem Ipsum\''),
(32, 'dummyfixer', 'dummyfixer@gmail.com', NULL, '$2y$10$3ExBOhdcDQNL7MNjRBeBy.BvJFZrkHnpVA4lU2DpzNqsTxkTv2SoO', NULL, '2021-06-07 23:45:37', '2021-06-07 23:45:37', '08192316123', 'Jalan.Fixer99', 'foto_profile.png', 'poster.png', '\'Lorem Ipsum\''),
(33, 'dummyfixer2', 'dummyfixer2@gmail.com', NULL, '$2y$10$OgAikYIiN.TnvNmnNx8yqOYOp40pc9eRFmCBmPB6AqXY4ak04Tlle', NULL, '2021-06-07 23:54:37', '2021-06-07 23:54:37', '0812351912', 'Jalan.Kejungg', 'foto_profile.png', 'poster.png', '\'Lorem Ipsum\''),
(34, 'dummyfixer3', 'dummyfixer3@gmail.com', NULL, '$2y$10$tGzLapA.deNq6OX55qjqquFUZyp2Qsbh.DVQf.f6wLm7Jl7Iz/jfa', NULL, '2021-06-07 23:58:21', '2021-06-08 00:01:29', '087265123122', 'Jalan.Kenangan', '34.png', '34.png', 'Selamat Datang di Toko Kami \r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec tempor nibh vitae augue vehicula, vel sagittis leo porta.\r\nNunc faucibus arcu euismod nisi mattis lobortis.\r\nIn convallis leo pretium sodales pellentesque.\r\nCras vestibulum ante eu metus viverra, ac semper orci cursus.\r\nNulla et tellus non ligula placerat rutrum.\r\nAliquam scelerisque mi eu justo ultricies tempus.\r\nPellentesque efficitur nibh sit amet tincidunt bibendum.\r\nPellentesque cursus ex eu diam lacinia, eget efficitur tortor dictum.\r\nPellentesque id felis a massa sagittis ultrices.\r\nCras nec sapien pellentesque, blandit orci nec, lobortis libero.\r\nPraesent elementum nisi et lectus rutrum, ac consectetur risus vulputate.\r\nPhasellus rhoncus libero nec lacinia tempor.\r\nSed pellentesque mi viverra purus elementum, vitae dignissim lectus sollicitudin.\r\nMauris semper risus posuere dolor lobortis lacinia.'),
(35, 'pengguna2', 'pengguna2@gmail.com', NULL, '$2y$10$YUIXgilyzMKHxdlGXBivguJufZi2Bpyqf9JHUzAvhrEyMG92skPpK', NULL, '2021-06-08 03:24:04', '2021-06-08 03:24:04', '0812913123', 'jalan.kuninngan', 'foto_profile.png', 'poster.png', '\'Lorem Ipsum\'');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
