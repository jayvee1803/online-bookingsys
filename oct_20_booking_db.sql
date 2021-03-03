-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 03:34 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booklists`
--

CREATE TABLE `booklists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booker_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courselist_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `courselist_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_range` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booklists`
--

INSERT INTO `booklists` (`id`, `booker_email`, `teacher_name`, `subject`, `courselist_name`, `courselist_desc`, `time_range`, `created_at`, `updated_at`) VALUES
(46, 'santosjay952@gmail.com', 'John Rooster', 'English', 'Academic Writing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem deserunt tenetur.', '8:00AM-9:00AM', '2020-10-16 12:00:00', '2020-10-15 11:31:01'),
(47, 'santosjay952@gmail.com', 'Tom Sharp', 'Mathematics', 'Algebra', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem deserunt tenetur.', '8:00AM-9:00AM', '2020-10-15 12:25:55', '2020-10-15 12:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `courselist`
--

CREATE TABLE `courselist` (
  `id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `courselist_name` varchar(100) NOT NULL,
  `courselist_desc` text NOT NULL,
  `data_aos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courselist`
--

INSERT INTO `courselist` (`id`, `course_name`, `courselist_name`, `courselist_desc`, `data_aos`) VALUES
(1, 'English', 'Academic Writing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.', 100),
(2, 'English', 'Essay Writing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.', 200),
(3, 'English', 'English Composition', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.', 300),
(4, 'English', 'Reading and Writing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.', 400),
(5, 'Mathematics', 'Algebra', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.', 100),
(6, 'Mathematics', 'Geometry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.', 200),
(7, 'Mathematics', 'Trigonometry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.', 300),
(8, 'Science', 'Biology', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.', 100),
(9, 'Science', 'Chemistry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.', 200),
(10, 'Science', 'Physics', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.', 300);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `course_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_desc`) VALUES
(1, 'English', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(2, 'Mathematics', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(3, 'Science', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(4, 'Adults (General Eng.)', 'Lorem ipsum dolor sit amet, consectetur adipiscing'),
(5, 'Adults (Eng for..)', 'Lorem ipsum dolor sit amet, consectetur adipiscing');

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
(1, '2020_04_18_125035_create_courses_table', 1),
(2, '2020_04_21_143139_create_courselists_table', 2),
(8, '2020_04_21_144110_create_courselist_tbls_table', 3),
(9, '2020_05_16_113410_create_user_lists_table', 3),
(15, '2020_05_29_121807_courselist_tbl', 4),
(16, '2020_06_12_073903_create_booklists_table', 4),
(17, '2020_09_11_125847_create_teacherlists_table', 5),
(18, '2020_10_05_105638_users_tbl', 6),
(19, '2014_10_12_100000_create_password_resets_table', 7),
(20, '2020_10_17_191759_users_info_table', 8),
(21, '2020_10_17_195636_user_info', 9),
(22, '2020_10_18_074713_user_info', 10);

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
-- Table structure for table `teacherlists`
--

CREATE TABLE `teacherlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `courselist_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courselist_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_range` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacherlists`
--

INSERT INTO `teacherlists` (`id`, `teacher_name`, `subject`, `courselist_name`, `courselist_desc`, `time_range`, `created_at`, `updated_at`) VALUES
(1, 'John Rooster', 'English', 'Academic Writing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem deserunt tenetur.', '8:00AM-9:00AM', NULL, NULL),
(2, 'Tom Sharp', 'Mathematics', 'Algebra', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem deserunt tenetur.', '8:00AM-9:00AM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(21, 'Jayvee', 'santosjay952@gmail.com', '2020-10-18 00:19:03', '$2y$10$LEO7sWnisEGk/Kls5L6I6u8oUzEbc94nmn3kZ4LdiYioIu0CItFC.', NULL, NULL, '2020-10-18 00:18:15', '2020-10-18 00:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_infos`
--

CREATE TABLE `user_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `about_me` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` blob DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_infos`
--

INSERT INTO `user_infos` (`id`, `email`, `first_name`, `last_name`, `address`, `city`, `postal_code`, `about_me`, `photo`, `created_at`, `updated_at`) VALUES
(10, 'santosjay952@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 0x32303230313031383138333430352e6a7067, NULL, '2020-10-18 10:34:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booklists`
--
ALTER TABLE `booklists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courselist`
--
ALTER TABLE `courselist`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `teacherlists`
--
ALTER TABLE `teacherlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_infos_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booklists`
--
ALTER TABLE `booklists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `courselist`
--
ALTER TABLE `courselist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `teacherlists`
--
ALTER TABLE `teacherlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
