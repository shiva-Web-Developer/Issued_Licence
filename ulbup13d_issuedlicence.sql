-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2023 at 11:23 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ulbup13d_issuedlicence`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_Deleted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `status`, `role`, `is_Deleted`, `created_at`, `updated_at`) VALUES
(1, 'admin123', 'admin@gmail.com', 'admin123', '1', 'admin', 'N', '2023-01-03 05:19:20', '2023-01-03 05:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `org_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appi_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legecy_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trade_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_name_f` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_name_l` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fh_f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fh_l_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firm_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firm_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plot_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_partner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `swami_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `officer_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_proof_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `affidevit_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_timee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_Deleted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `org_id`, `appi_id`, `legecy_type`, `trade_type`, `ward`, `applicant_name_f`, `applicant_name_l`, `fh_f_name`, `fh_l_name`, `city`, `zone`, `mobile_number`, `email`, `property_id`, `application_date`, `firm_name`, `firm_type`, `plot_number`, `road`, `pincode`, `district`, `countary`, `join_partner`, `shop_type`, `swami_img`, `officer_img`, `property_img`, `tax_img`, `id_proof_img`, `affidevit_img`, `status`, `role`, `current_timee`, `is_Deleted`, `created_at`, `updated_at`) VALUES
(29, '615060', '724492', '2222333', 'Trade -1', 'L-W1', 'Test', 'Verma', 'Test', 'Test', 'Lucknow', '000', '5645342343', 'test@gmail.com', '6534', '2023-01-21', 'Test Group Pvt Ltd', 'Partnership', '223', 'Lucknow', '222222', 'Lucknow', 'India', 'Test', 'College', '1674289792.png', '1674289792.png', '1674289792.jpeg', '1674289792.jpeg', '1674289792.jpeg', '1674289792.jpeg', 'pending', 'applicant', '21-01-2023 08:29:52', 'N', '2023-01-21 16:29:52', '2023-01-21 16:29:52'),
(30, '615060', '710637', 'sssss', 'Trade-3', 'L-W2', 'ttt', 'tttt', 'ttt', 'ttt', 'ttttt', '000', '3434342342', 'dd@gmail.com', '322', '2023-01-23', 'SS Group Of Pvt Ltd', 'Partnership', '223', 'vvvvvvv', '261203', 'sitapur', 'India', 'w', 'College', '1674461735.png', '1674461735.png', '1674461735.png', '1674461735.png', '1674461735.png', '1674461735.png', 'pending', 'applicant', '23-01-2023 08:15:35', 'N', '2023-01-23 16:15:35', '2023-01-23 16:15:35');

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
-- Table structure for table `firms`
--

CREATE TABLE `firms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `org_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firm_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_timee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_Deleted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `firms`
--

INSERT INTO `firms` (`id`, `org_id`, `firm_type`, `current_timee`, `created_by`, `is_Deleted`, `created_at`, `updated_at`) VALUES
(5, '615060', 'Ownership', '04-01-2023 06:50:59', 'orgnization', 'N', '2023-01-04 14:50:59', '2023-01-04 14:50:59'),
(6, '615060', 'Partnership', '04-01-2023 06:51:07', 'orgnization', 'N', '2023-01-04 14:51:07', '2023-01-04 14:51:07'),
(7, '615060', 'Others', '04-01-2023 06:51:16', 'orgnization', 'N', '2023-01-04 14:51:16', '2023-01-04 14:51:16');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_03_051742_create_admins_table', 1),
(6, '2023_01_03_052014_create_orgnizations_table', 2),
(7, '2023_01_03_103955_create_wards_table', 3),
(8, '2023_01_03_111430_create_trades_table', 4),
(9, '2023_01_04_063439_create_firms_table', 5),
(13, '2023_01_20_053949_create_shops_table', 6),
(14, '2023_01_20_101602_create_applications_table', 6),
(15, '2023_01_21_065907_create_payments_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orgnizations`
--

CREATE TABLE `orgnizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `org_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `org_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `org_id` bigint(255) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_timee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_Deleted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orgnizations`
--

INSERT INTO `orgnizations` (`id`, `org_logo`, `org_name`, `org_id`, `address`, `mobile_number`, `username`, `email`, `password`, `status`, `role`, `current_timee`, `is_Deleted`, `created_at`, `updated_at`) VALUES
(4, '1672732018.png', 'Business Innovation', 615060, 'Lucknow', '0000000000', 'bio123', 'Info@businessinnovations.in', 'bio123', '1', 'orgnization', '03-01-2023 07:46:58', 'N', '2023-01-03 15:46:58', '2023-01-03 15:47:29');

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
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appi_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `org_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finencial_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_method` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_timee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_Deleted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_id`, `appi_id`, `org_id`, `finencial_year`, `payment`, `pay_method`, `current_timee`, `created_by`, `is_Deleted`, `created_at`, `updated_at`) VALUES
(28, '381728', '724492', '615060', '2022', '500', 'Online', '25-01-2023 10:18:46', 'applicant', 'N', '2023-01-25 10:18:46', '2023-01-25 10:18:46'),
(29, '450281', '724492', '615060', '2023', '10000', 'Online', '04-02-2023 10:18:28', 'applicant', 'N', '2023-02-04 10:18:28', '2023-02-04 10:18:28');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `org_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge_amount` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finencial_year` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_timee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_Deleted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `org_id`, `shop_type`, `charge_amount`, `finencial_year`, `current_timee`, `created_by`, `is_Deleted`, `created_at`, `updated_at`) VALUES
(1, '615060', 'College', '500', '2022', '21-01-2023 06:32:58', 'orgnization', 'N', '2023-01-21 14:32:58', '2023-01-21 14:32:58'),
(2, '615060', 'College', '10000', '2023', '21-01-2023 06:35:22', 'orgnization', 'N', '2023-01-21 14:35:22', '2023-01-21 14:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `trades`
--

CREATE TABLE `trades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `org_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trade_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_timee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_Deleted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trades`
--

INSERT INTO `trades` (`id`, `org_id`, `trade_type`, `current_timee`, `is_Deleted`, `created_at`, `updated_at`) VALUES
(8, '615060', 'Trade -1', '20-01-2023 07:42:38', 'N', '2023-01-20 15:42:38', '2023-01-20 15:42:38'),
(9, '615060', 'Trade-2', '20-01-2023 07:42:44', 'N', '2023-01-20 15:42:44', '2023-01-20 15:42:44'),
(10, '615060', 'Trade-3', '20-01-2023 07:42:51', 'N', '2023-01-20 15:42:51', '2023-01-20 15:42:51');

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

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `org_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_timee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_Deleted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `org_id`, `city`, `ward_name`, `current_timee`, `is_Deleted`, `created_at`, `updated_at`) VALUES
(11, '615060', 'Lucknow', 'L-W1', '03-01-2023 11:03:39', 'N', '2023-01-03 19:03:39', '2023-01-03 19:03:39'),
(12, '615060', 'Lucknow', 'L-W2', '03-01-2023 11:03:46', 'N', '2023-01-03 19:03:46', '2023-01-03 19:03:46'),
(13, '615060', 'Lucknow', 'L-W3', '03-01-2023 11:03:55', 'N', '2023-01-03 19:03:55', '2023-01-03 19:03:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `firms`
--
ALTER TABLE `firms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orgnizations`
--
ALTER TABLE `orgnizations`
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
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `firms`
--
ALTER TABLE `firms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orgnizations`
--
ALTER TABLE `orgnizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trades`
--
ALTER TABLE `trades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
