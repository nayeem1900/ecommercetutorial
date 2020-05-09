-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 05:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_ecommerce_tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Super Admin' COMMENT 'Admin|Super Admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `avatar`, `mobile_no`, `password`, `typee`, `created_at`, `updated_at`) VALUES
(1, 'Nayeem', 'nayeembd84@gmail.com', NULL, '01818811220', '$2y$10$kaL47VHFV6RZAW.Y/zlFr.tP295m2TwUm9R2AGXhG8eYVWsqHrFoi', 'Super Admin', '2020-05-07 18:21:31', '2020-05-07 18:21:31'),
(2, 'harun', 'harun@gmail.com', NULL, '01818811220', '12345678', 'Super Admin', '2020-05-08 00:28:33', '2020-05-08 00:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Sony', 'Sony Led Television', '1587649549.jpg', '2020-04-23 07:45:49', '2020-04-23 07:45:49'),
(3, 'Others', 'speaker', '1587649726.jpg', '2020-04-23 07:48:46', '2020-04-23 07:48:46'),
(4, 'HP', 'electronics', '1588766871.jpg', '2020-05-06 06:07:51', '2020-05-06 06:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `order_id`, `ip_address`, `product_quantity`, `created_at`, `updated_at`) VALUES
(11, 16, NULL, NULL, '127.0.0.1', 2, '2020-05-04 05:29:06', '2020-05-06 05:58:36'),
(13, 16, 3, NULL, '127.0.0.1', 1, '2020-05-04 21:53:33', '2020-05-04 21:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(21, 'Fashion', 'Dress', '1587386665.jpg', NULL, '2020-04-20 06:44:25', '2020-04-20 06:44:25'),
(22, 'sunglass', 'sunglass', '1587386928.jpg', 21, '2020-04-20 06:48:48', '2020-04-20 06:48:48'),
(23, 'House Hold', NULL, '1587386994.jpg', NULL, '2020-04-20 06:49:54', '2020-04-20 08:06:18'),
(25, 'DELL', 'Dell Led USA', '1587649506.jpg', 21, '2020-04-23 07:45:06', '2020-04-23 07:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `division_id`, `created_at`, `updated_at`) VALUES
(4, 'sirajgonj', 4, '2020-04-27 05:59:12', '2020-04-27 05:59:12'),
(5, 'sirajgonj', 4, '2020-04-27 06:06:21', '2020-04-27 06:06:21'),
(6, 'sirajgonj', 4, '2020-04-27 06:06:59', '2020-04-27 06:06:59'),
(8, 'sirajgonj', 1, '2020-04-27 06:17:39', '2020-04-27 09:02:57'),
(9, 'sirajgonj', 4, '2020-04-27 06:18:25', '2020-04-27 06:18:25'),
(10, 'sirajgonj', 4, '2020-04-27 06:19:47', '2020-04-27 06:19:47');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 1, '2020-04-27 01:10:58', '2020-04-27 01:10:58'),
(4, 'Rajsahi', 3, '2020-04-27 01:38:16', '2020-04-27 01:38:16'),
(5, 'Rangpur', 4, '2020-04-27 01:38:32', '2020-04-27 01:38:32'),
(6, 'Khulna', 5, '2020-04-27 05:43:55', '2020-04-27 05:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_04_08_000808_create_products_table', 1),
(7, '2020_04_08_001511_create_product_images_table', 1),
(9, '2020_04_08_000729_create_categories_table', 2),
(10, '2020_04_08_000750_create_brands_table', 3),
(11, '2014_10_12_100000_create_password_resets_table', 4),
(13, '2020_04_27_053905_create_divisions_table', 6),
(14, '2020_04_27_054324_create_districts_table', 6),
(16, '2014_10_12_000000_create_users_table', 7),
(21, '2020_05_02_050435_create_carts_table', 8),
(22, '2020_05_03_141234_create_settings_table', 9),
(23, '2020_05_03_154003_create_payments_table', 10),
(25, '2020_05_02_050318_create_orders_table', 11),
(26, '2020_04_08_000824_create_admins_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `payment_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shiping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT 0,
  `is_completed` tinyint(1) NOT NULL DEFAULT 0,
  `is_seen_by_admin` tinyint(1) NOT NULL DEFAULT 0,
  `transcation_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_id`, `ip_address`, `name`, `mobile_no`, `shiping_address`, `email`, `message`, `is_paid`, `is_completed`, `is_seen_by_admin`, `transcation_id`, `created_at`, `updated_at`) VALUES
(16, NULL, 1, NULL, 'jony', '333', 'ff', 'nayeem@yahoo.com', NULL, 0, 0, 0, NULL, '2020-05-04 05:29:22', '2020-05-04 05:29:22'),
(17, NULL, 1, NULL, 'jony', '333', 'ff', 'nayeem@yahoo.com', NULL, 0, 0, 0, NULL, '2020-05-04 05:38:15', '2020-05-04 05:38:15'),
(18, NULL, 1, NULL, 'jony', '333', 'ff', 'nayeem@yahoo.com', NULL, 0, 0, 0, NULL, '2020-05-04 05:38:23', '2020-05-04 05:38:23'),
(19, NULL, 1, NULL, 'Dhaka2', '1111', 'ddd', 'nayeem@yahoo.com', NULL, 0, 0, 0, NULL, '2020-05-04 05:38:53', '2020-05-04 05:38:53'),
(20, NULL, 1, NULL, 'Dhaka2', '1111', 'ddd', 'nayeem@yahoo.com', NULL, 0, 0, 0, NULL, '2020-05-04 05:40:44', '2020-05-04 05:40:44'),
(21, NULL, 1, NULL, 'jony', '22', 'ff', 'santu@gmail.com', NULL, 0, 0, 0, NULL, '2020-05-04 08:10:12', '2020-05-04 08:10:12'),
(22, 3, 1, NULL, 'Fatema.Auth::user()->last_name', '01736374839', 's', 'fatemalux@gmail.com', NULL, 0, 0, 0, NULL, '2020-05-04 21:53:50', '2020-05-04 21:53:50'),
(23, 5, 1, NULL, 'nayeem.Auth::user()->last_name', '01617811220', 'ddddd', 'nayeem_ch@yahoo.co.in', NULL, 0, 0, 0, NULL, '2020-05-06 06:00:12', '2020-05-06 06:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nayeembd84@gmail.com', '$2y$10$obw894T61msdJcVScRG82.2s02GJv4Quq0gf7Qx7lnZdaZwndBOA.', '2020-04-26 05:05:28'),
('santu@gmail.com', '$2y$10$nzVBbjxgeJrHuyL2/9lZZuPaAyqRFy//mv40CPVH37xursVHxHkKW', '2020-04-26 05:06:05'),
('nayeem@yahoo.com', '$2y$10$7gkMsY2s4tZNw3dke0iN7eumC3nhM1iojFqJvnQEa/KHq2iztWgyO', '2020-04-26 05:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` tinyint(4) NOT NULL DEFAULT 1,
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Payment No',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'agent|personal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `image`, `priority`, `short_name`, `no`, `type`, `created_at`, `updated_at`) VALUES
(1, 'cash in', 'cash.jpg', 1, 'cash in', NULL, NULL, '2020-05-03 15:50:40', '2020-05-03 15:50:40'),
(2, 'Bkash', 'b.jpg', 2, 'bkash', '014', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `offer_price` int(11) DEFAULT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `description`, `slug`, `quantity`, `price`, `status`, `offer_price`, `admin_id`, `created_at`, `updated_at`) VALUES
(2, 23, 3, 'samsung2', 'samsungsamsungsamsungsamsungsamsungsamsungsamsungsamsungsamsungsamsungsamsungsamsungsamsungsamsungsamsungsamsungsamsungsamsung', 'samsung-galaxy-2', 0, 1000, 1, NULL, 1, '2020-04-08 00:41:37', '2020-04-08 00:41:37'),
(3, 23, 3, 'symphony', 'fff', 'symphony', 2, 2, 0, NULL, 1, '2020-04-07 22:58:14', '2020-04-07 22:58:14'),
(16, 22, 3, 'camera', 'camera', 'camera', 100, 15000, 0, NULL, 1, '2020-04-23 08:39:20', '2020-04-23 23:19:09'),
(17, 25, 3, 'IPHONE', 'mobile', 'IPHONE', 5, 2000, 0, NULL, 1, '2020-05-06 06:04:15', '2020-05-06 06:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '1.jpg', NULL, NULL),
(2, 2, '2.jpg', NULL, NULL),
(3, 2, '1586326271.png', NULL, NULL),
(4, 2, '3.jpg', '2020-04-08 00:10:54', '2020-04-08 00:10:54'),
(5, 2, '1586326271.png', '2020-04-08 00:11:11', '2020-04-08 00:11:11'),
(6, 2, '1586327605.jpg', '2020-04-08 00:33:25', '2020-04-08 00:33:25'),
(7, 7, '1586327605.jpg', '2020-04-08 00:33:25', '2020-04-08 00:33:25'),
(8, 7, '1586327605.jpg', '2020-04-08 00:33:25', '2020-04-08 00:33:25'),
(9, 8, '1586520394.jpg', '2020-04-10 06:06:34', '2020-04-10 06:06:34'),
(10, 9, '1586521001.jpg', '2020-04-10 06:16:41', '2020-04-10 06:16:41'),
(11, 9, '1586521001.jpg', '2020-04-10 06:16:41', '2020-04-10 06:16:41'),
(12, 10, '1586522079.jpg', '2020-04-10 06:34:39', '2020-04-10 06:34:39'),
(13, 11, '1586753708.jpg', '2020-04-12 22:55:08', '2020-04-12 22:55:08'),
(14, 12, '1586778333.jpg', '2020-04-13 05:45:34', '2020-04-13 05:45:34'),
(15, 13, '1587184454.png', '2020-04-17 22:34:14', '2020-04-17 22:34:14'),
(16, 14, '1587184515.jpg', '2020-04-17 22:35:15', '2020-04-17 22:35:15'),
(17, 15, '1587184779.jpg', '2020-04-17 22:39:39', '2020-04-17 22:39:39'),
(18, 16, '1587652760.jpg', '2020-04-23 08:39:20', '2020-04-23 08:39:20'),
(19, 17, '1588766655.jpg', '2020-05-06 06:04:15', '2020-05-06 06:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shiping_cost` int(10) UNSIGNED NOT NULL DEFAULT 100,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `mobile_no`, `address`, `shiping_cost`, `created_at`, `updated_at`) VALUES
(1, 'nayeem_ch@yahoo.co.in', '01617811220', 'sanirakra, Dhaka', 100, '2020-05-03 14:22:39', '2020-05-03 14:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '0=Inactive|1=active|2=Ban',
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL COMMENT 'Division Table ID',
  `district_id` int(10) UNSIGNED NOT NULL COMMENT 'District Table ID',
  `shipping_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `mobile_no`, `email`, `email_verified_at`, `password`, `status`, `ip_address`, `avatar`, `street_address`, `division_id`, `district_id`, `shipping_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Fatema', NULL, 'fatemaakter', '01736374839', 'fatemalux@gmail.com', NULL, '$2y$10$IHBhE63NvPMRrqyy9FC7eeXOmRx.KUwE4IJikebbN5SRkN7RG3KkW', 1, '127.0.0.1', NULL, 'Dhaka', 6, 4, NULL, NULL, '2020-04-29 20:57:37', '2020-04-30 00:21:26'),
(4, 'ibf', '', 'ibfaccounts', '01234567891', 'ibfaccounts@yahoo.com', NULL, '$2y$10$HslWM7J1vvCvbRxNG6RRXOOyopBQfPVmInWEqUFSfOYpI6IxdKJ9i', 1, '127.0.0.1', NULL, 'Dhaka', 6, 4, NULL, NULL, '2020-04-29 21:52:56', '2020-04-29 21:53:39'),
(5, 'nayeem', NULL, 'nayeemchowdhury', '01617811220', 'nayeem_ch@yahoo.co.in', NULL, '$2y$10$YaV/KfNdbT87qkXz/aSVg.8djnJj1fGB2jdfUfE/nWlGeA/X2KDne', 1, '127.0.0.1', NULL, 'Dhaka', 6, 4, NULL, NULL, '2020-04-30 00:05:18', '2020-04-30 00:13:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_order_id_foreign` (`order_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_short_name_unique` (`short_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_mobile_no_unique` (`mobile_no`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
