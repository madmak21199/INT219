-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 01:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dept_id` int(20) NOT NULL,
  `job` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile_number` int(20) NOT NULL,
  `join_date` int(20) NOT NULL,
  `salary` int(20) NOT NULL,
  `mgr_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `name`, `dept_id`, `job`, `email`, `mobile_number`, `join_date`, `salary`, `mgr_id`) VALUES
(1234, 'a', 1234, 'bl-7', 'a@gmail.com', 78587, 7845, 78987, 1234),
(123, 'b', 123, 'bl-9', 'b@gmail.com', 87587, 7847, 68978, 1235);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`Id`, `name`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'a1', 'a1@gmail.com', NULL, '2020-03-13 00:12:46', '2020-03-13 00:12:46'),
(2, 'komarti', 'komarti@gmail.com', NULL, '2020-03-13 00:13:07', '2020-03-13 00:13:07'),
(3, 'a2', 'a2@gmail.com', NULL, '2020-03-13 00:17:19', '2020-03-13 00:17:19');

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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(26, '2014_10_12_000000_create_users_table', 1),
(27, '2014_10_12_100000_create_password_resets_table', 1),
(28, '2018_04_18_035846_create_posts_table', 1),
(29, '2018_04_28_052118_create_verifications_table', 1),
(30, '2018_05_01_022702_create_files_table', 1),
(31, '2018_05_30_015009_create_social_accounts_table', 1),
(32, '2018_06_02_061429_create_products_table', 1),
(33, '2018_06_28_074004_create_ratings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsportalusers`
--

CREATE TABLE `newsportalusers` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsportalusers`
--

INSERT INTO `newsportalusers` (`id`, `first_name`, `last_name`, `email_id`, `password`, `phone`) VALUES
(1, 'komarti', 'venkata teja', 'a1@gmail.com', '123456', 7896547896),
(0, 'ganesh', 'mandapati', 'abc@gmail.com', '123456', 9182026657),
(0, 'ganesh', 'mandapati', 'abcdef@gmail.com', '123456', 9182026657),
(0, 'ganesh', 'mandapati', 'abc12@gmail.com', '123456', 9182026657),
(0, 'ganesh', 'mandapati', 'mandapatiganesh389@gmail.com', '123456', 9182026657);

-- --------------------------------------------------------

--
-- Table structure for table `testtable`
--

CREATE TABLE `testtable` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testtable`
--

INSERT INTO `testtable` (`id`, `username`) VALUES
(1, 'mina'),
(2, 'bons tutorial'),
(3, 'Monalisa'),
(4, 'Monica Maria'),
(5, 'Borna'),
(6, 'Bons'),
(7, 'mona'),
(8, 'monikal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testtable`
--
ALTER TABLE `testtable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `testtable`
--
ALTER TABLE `testtable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
