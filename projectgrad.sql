-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 04:10 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectgrad`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_datas`
--

CREATE TABLE `admin_datas` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_datas`
--

INSERT INTO `admin_datas` (`admin_id`, `name`, `email`, `mobile`, `facebook`, `twitter`, `instagram`, `login_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'اسلام', 'i@g.com', 8937434, NULL, NULL, NULL, 1, 'uploads/team/1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `composes`
--

CREATE TABLE `composes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sendtime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emergencies`
--

CREATE TABLE `emergencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `numberOfUnit` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emergencies`
--

INSERT INTO `emergencies` (`id`, `type`, `name`, `City`, `hospital`, `mobile`, `status`, `numberOfUnit`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'A+', 'محمد', 'سلفيت', 'رافيديا', 8937434, 1, 2, 1, NULL, NULL),
(2, 'A+', 'امال', 'نابلس', 'التخصصي', 5982633, 0, 2, 2, '2021-11-06 13:48:57', '2021-11-06 13:48:57');

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
(56, '2013_10_20_110604_create_roles_table', 1),
(57, '2014_10_12_000000_create_users_table', 1),
(58, '2014_10_12_100000_create_password_resets_table', 1),
(59, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(60, '2019_08_19_000000_create_failed_jobs_table', 1),
(61, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(62, '2021_10_03_134103_create_admin_datas_table', 1),
(63, '2021_10_03_134815_create_user_login_table', 1),
(64, '2021_10_03_140340_create_emergencies_table', 1),
(65, '2021_10_03_141352_create_composes_table', 1),
(66, '2021_10_03_141915_create_small_projects_table', 1),
(67, '2021_10_03_142413_create_studentships_table', 1),
(68, '2021_10_03_142927_create_view_products_table', 1),
(69, '2021_10_03_143215_create_volunteers_table', 1),
(70, '2021_10_05_082451_create_payments_table', 1),
(71, '2021_10_11_130417_create_blogs_table', 1),
(72, '2021_10_12_143319_create_comments_table', 1),
(73, '2021_10_20_111505_create_role_user_table', 1),
(74, '2021_10_20_114813_create_user_small_project_table', 1),
(75, '2021_10_20_115314_create_user_studentship_table', 1),
(76, '2021_11_02_142314_create_user_view_product_table', 1);

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'palpay', NULL, NULL),
(2, 'visa', NULL, NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'متبرع', NULL, NULL),
(2, 'مستفيد', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 1, 1, NULL, NULL),
(5, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `small_projects`
--

CREATE TABLE `small_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `mobile` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `small_projects`
--

INSERT INTO `small_projects` (`id`, `title`, `name`, `address`, `status`, `mobile`, `money`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'مصنع معلبات', 'علي', 'نابلس', 1, 8937434, 13000, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `small_project_user`
--

CREATE TABLE `small_project_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `small_project_id` bigint(20) UNSIGNED NOT NULL,
  `money` int(11) NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `Allname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NumberId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `small_project_user`
--

INSERT INTO `small_project_user` (`id`, `user_id`, `small_project_id`, `money`, `payment_id`, `Allname`, `NumberId`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 300, 2, 'امال علي محمد', 123456789, '2021-11-06 13:46:14', '2021-11-06 13:46:14'),
(2, 1, 1, 300, 2, 'اسيل ضمايرة', 123456789, '2021-11-07 07:06:56', '2021-11-07 07:06:56'),
(3, 1, 1, 1000, 2, 'امال علي محمد', 123456789, '2021-11-07 07:16:35', '2021-11-07 07:16:35'),
(4, 1, 1, 11400, 1, 'اسيل ضمايرة', 123456789, '2021-11-07 07:17:39', '2021-11-07 07:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `studentships`
--

CREATE TABLE `studentships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `University` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `mobile` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentships`
--

INSERT INTO `studentships` (`id`, `major`, `name`, `University`, `City`, `status`, `mobile`, `money`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'انجليزي', 'اريج', 'الامريكية', 'طولكرم', 1, 8937434, 1500, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentship_user`
--

CREATE TABLE `studentship_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `studentship_id` bigint(20) UNSIGNED NOT NULL,
  `money` int(11) NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `Allname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NumberId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentship_user`
--

INSERT INTO `studentship_user` (`id`, `user_id`, `studentship_id`, `money`, `payment_id`, `Allname`, `NumberId`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 300, 1, 'اسيل ضمايرة', 123456789, '2021-11-06 12:48:07', '2021-11-06 12:48:07'),
(2, 1, 1, 300, 2, 'امال علي محمد', 123456789, '2021-11-06 12:52:20', '2021-11-06 12:52:20'),
(3, 1, 1, 300, 2, 'علي محمد', 123456789, '2021-11-06 13:01:12', '2021-11-06 13:01:12'),
(4, 1, 1, 300, 2, 'اسيل ضمايرة', 123456789, '2021-11-07 07:14:31', '2021-11-07 07:14:31'),
(5, 1, 1, 1500, 2, 'اسيل ضمايرة', 123456789, '2021-11-07 07:15:40', '2021-11-07 07:15:40');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `address`, `mobile`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'امال', 'a@gmail.com', NULL, '$2y$10$0XWPtAEG4CMkAScuk7TVbOJLuiNlYnHJH9LPD.7KyznuA/IlSv7YW', NULL, NULL, 'نابلس', 5982633, 1, NULL, '2021-11-06 14:01:16', '2021-11-06 14:01:16'),
(2, 'امال', 'a@gmail.com', NULL, '$2y$10$BXkWZA7DcI4V1uIUwUr4Z.paSr5OEMzQa4caogp4B7Sh5N6PXE1f.', NULL, NULL, 'نابلس', 5982633, 2, NULL, '2021-11-06 14:01:33', '2021-11-06 14:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Permissions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_view_product`
--

CREATE TABLE `user_view_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `view_product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_view_product`
--

INSERT INTO `user_view_product` (`id`, `user_id`, `view_product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `view_products`
--

CREATE TABLE `view_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `mobile` int(11) NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `view_products`
--

INSERT INTO `view_products` (`id`, `productName`, `name`, `address`, `topic`, `status`, `mobile`, `filename`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'راوتر', 'علي', 'نابلس', 'راوتر شحن', 1, 8937434, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `mobile` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `name`, `type`, `City`, `status`, `mobile`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'امال علي', 'ترميم منزل', 'نابلس', 0, 5982633, 1, '2021-11-06 13:47:35', '2021-11-06 13:47:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_datas`
--
ALTER TABLE `admin_datas`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `composes`
--
ALTER TABLE `composes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergencies`
--
ALTER TABLE `emergencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emergencies_user_id_foreign` (`user_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `small_projects`
--
ALTER TABLE `small_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `small_projects_user_id_foreign` (`user_id`);

--
-- Indexes for table `small_project_user`
--
ALTER TABLE `small_project_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_small_project_user_id_foreign` (`user_id`),
  ADD KEY `user_small_project_small_project_id_foreign` (`small_project_id`),
  ADD KEY `user_small_project_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `studentships`
--
ALTER TABLE `studentships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studentships_user_id_foreign` (`user_id`);

--
-- Indexes for table `studentship_user`
--
ALTER TABLE `studentship_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_studentship_user_id_foreign` (`user_id`),
  ADD KEY `user_studentship_studentship_id_foreign` (`studentship_id`),
  ADD KEY `user_studentship_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_view_product`
--
ALTER TABLE `user_view_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_view_product_user_id_foreign` (`user_id`),
  ADD KEY `user_view_product_view_product_id_foreign` (`view_product_id`);

--
-- Indexes for table `view_products`
--
ALTER TABLE `view_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `view_products_user_id_foreign` (`user_id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `volunteers_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_datas`
--
ALTER TABLE `admin_datas`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `composes`
--
ALTER TABLE `composes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emergencies`
--
ALTER TABLE `emergencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `small_projects`
--
ALTER TABLE `small_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `small_project_user`
--
ALTER TABLE `small_project_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studentships`
--
ALTER TABLE `studentships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentship_user`
--
ALTER TABLE `studentship_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_view_product`
--
ALTER TABLE `user_view_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `view_products`
--
ALTER TABLE `view_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `emergencies`
--
ALTER TABLE `emergencies`
  ADD CONSTRAINT `emergencies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `small_projects`
--
ALTER TABLE `small_projects`
  ADD CONSTRAINT `small_projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `small_project_user`
--
ALTER TABLE `small_project_user`
  ADD CONSTRAINT `user_small_project_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`),
  ADD CONSTRAINT `user_small_project_small_project_id_foreign` FOREIGN KEY (`small_project_id`) REFERENCES `small_projects` (`id`),
  ADD CONSTRAINT `user_small_project_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `studentships`
--
ALTER TABLE `studentships`
  ADD CONSTRAINT `studentships_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `studentship_user`
--
ALTER TABLE `studentship_user`
  ADD CONSTRAINT `user_studentship_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`),
  ADD CONSTRAINT `user_studentship_studentship_id_foreign` FOREIGN KEY (`studentship_id`) REFERENCES `studentships` (`id`),
  ADD CONSTRAINT `user_studentship_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_view_product`
--
ALTER TABLE `user_view_product`
  ADD CONSTRAINT `user_view_product_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_view_product_view_product_id_foreign` FOREIGN KEY (`view_product_id`) REFERENCES `view_products` (`id`);

--
-- Constraints for table `view_products`
--
ALTER TABLE `view_products`
  ADD CONSTRAINT `view_products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD CONSTRAINT `volunteers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
