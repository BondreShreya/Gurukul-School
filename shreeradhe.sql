-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 06, 2020 at 05:46 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shreeradhe`
--

-- --------------------------------------------------------

--
-- Table structure for table `acadamic_year`
--

DROP TABLE IF EXISTS `acadamic_year`;
CREATE TABLE IF NOT EXISTS `acadamic_year` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `acadamic_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_acadamic_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acadamic_year`
--

INSERT INTO `acadamic_year` (`id`, `acadamic_year`, `previous_acadamic_year`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, '2020', '2019', 'active', 'student', '2020-10-26 01:17:29', '2020-10-26 01:17:29'),
(2, '2019', '2018', 'inactive', 'student', '2020-10-26 01:17:44', '2020-10-26 01:17:44'),
(3, '2018', '2017', 'inactive', 'student', '2020-10-26 01:17:57', '2020-10-26 01:17:57'),
(4, '2017', '2016', 'inactive', 'student', '2020-10-26 01:18:10', '2020-10-26 01:18:10'),
(5, '2016', '2015', 'inactive', 'student', '2020-10-28 01:30:41', '2020-10-28 01:30:41'),
(6, '2015', '2014', 'inactive', 'student', '2020-10-28 01:30:56', '2020-10-28 01:30:56');

-- --------------------------------------------------------

--
-- Table structure for table `addfees`
--

DROP TABLE IF EXISTS `addfees`;
CREATE TABLE IF NOT EXISTS `addfees` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fees_head` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acadamic_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alloted`
--

DROP TABLE IF EXISTS `alloted`;
CREATE TABLE IF NOT EXISTS `alloted` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acadamic_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alloted`
--

INSERT INTO `alloted` (`id`, `class_name`, `section`, `acadamic_year`, `created_at`, `updated_at`) VALUES
(24, '1', '1', '2', '2020-10-30 05:14:12', '2020-10-30 05:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `alloted_student`
--

DROP TABLE IF EXISTS `alloted_student`;
CREATE TABLE IF NOT EXISTS `alloted_student` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `allotment_id` int(10) UNSIGNED NOT NULL,
  `admission_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `alloted_student_allotment_id_foreign` (`allotment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alloted_student`
--

INSERT INTO `alloted_student` (`id`, `allotment_id`, `admission_id`, `created_at`, `updated_at`) VALUES
(21, 23, '11', '2020-10-30 04:36:01', '2020-10-30 04:36:01'),
(18, 21, '9', '2020-10-30 04:13:35', '2020-10-30 04:13:35'),
(19, 21, '7', '2020-10-30 04:13:35', '2020-10-30 04:13:35'),
(23, 24, '12', '2020-10-30 05:14:12', '2020-10-30 05:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acadamic_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `class_name`, `section`, `acadamic_year`, `month`, `days`, `created_at`, `updated_at`) VALUES
(1, '1', 'A', '2019 - 2020', 'January', '25', '2020-10-28 05:59:05', '2020-10-28 05:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `standard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_tech` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `standard`, `section`, `class_tech`, `created_at`, `updated_at`) VALUES
(1, 'KG 1', 'B', NULL, '2020-10-26 01:19:16', '2020-10-26 07:19:15'),
(2, '2nd Std', 'B', NULL, '2020-10-26 01:19:24', '2020-10-26 01:19:24'),
(3, '3rd Std', 'C', NULL, '2020-10-26 01:19:32', '2020-10-26 01:19:32'),
(4, 'KG 1', 'A', NULL, '2020-10-26 01:19:56', '2020-10-26 01:19:56'),
(5, '1st Std', 'A', NULL, '2020-10-26 07:11:29', '2020-10-26 07:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `day_wise_paid`
--

DROP TABLE IF EXISTS `day_wise_paid`;
CREATE TABLE IF NOT EXISTS `day_wise_paid` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fees_head`
--

DROP TABLE IF EXISTS `fees_head`;
CREATE TABLE IF NOT EXISTS `fees_head` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fees_head` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fees_head`
--

INSERT INTO `fees_head` (`id`, `fees_head`, `description`, `created_at`, `updated_at`) VALUES
(3, 'contribution', 'student', '2020-11-02 05:09:36', '2020-11-02 05:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `fees_summary`
--

DROP TABLE IF EXISTS `fees_summary`;
CREATE TABLE IF NOT EXISTS `fees_summary` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `form_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_23_072209_create_roles_table', 1),
(5, '2020_09_23_072419_create_role_user_table', 1),
(6, '2020_09_23_112022_create_acadamic_year_table', 1),
(7, '2020_09_23_121215_create_user_account_table', 1),
(8, '2020_09_23_122958_create_student_profile_table', 1),
(9, '2020_09_28_072414_create_school_profile_table', 1),
(10, '2020_09_29_053005_create_teacher_reg_table', 1),
(11, '2020_09_29_054449_create_standerd_table', 1),
(12, '2020_09_29_054520_create_section_table', 1),
(13, '2020_09_29_054537_create_class_table', 1),
(14, '2020_09_29_075623_create_siblings_table', 1),
(15, '2020_10_19_073614_create_addfees_table', 1),
(16, '2020_10_19_100234_create_fees_head_table', 1),
(17, '2020_10_19_110317_create_day_wise_paid_table', 1),
(18, '2020_10_19_110857_create_fees_summary_table', 1),
(19, '2020_10_21_092412_create_promote_table', 1),
(20, '2020_10_21_112838_create_attendance_table', 1),
(21, '2020_10_23_055450_create_alloted_table', 1),
(23, '2020_10_29_072011_create_alloted_student_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promote`
--

DROP TABLE IF EXISTS `promote`;
CREATE TABLE IF NOT EXISTS `promote` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `promote_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `promote_promote_id_foreign` (`promote_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `acc_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `acc_type`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-10-24 05:46:23', '2020-10-24 05:46:23'),
(2, 'highschool', '2020-10-24 05:46:23', '2020-10-24 05:46:23'),
(3, 'primaryschool', '2020-10-24 05:46:23', '2020-10-24 05:46:23'),
(4, 'marathischool', '2020-10-24 05:46:23', '2020-10-24 05:46:23'),
(5, 'accountant', '2020-10-24 05:46:23', '2020-10-24 05:46:23'),
(6, 'teacher', '2020-10-24 05:46:23', '2020-10-24 05:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 4, 4, NULL, NULL),
(5, 5, 5, NULL, NULL),
(6, 6, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `school_profile`
--

DROP TABLE IF EXISTS `school_profile`;
CREATE TABLE IF NOT EXISTS `school_profile` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `society_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `society_reg_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `society_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_taluka` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_taluka` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genral_reg_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_recog_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udise_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiliation_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gr_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medium` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `board` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_profile`
--

INSERT INTO `school_profile` (`id`, `society_name`, `society_reg_no`, `society_address`, `so_city`, `so_taluka`, `so_district`, `so_state`, `so_country`, `so_zip_code`, `school_name`, `school_address`, `file`, `school_city`, `school_taluka`, `school_district`, `school_state`, `school_country`, `school_zip_code`, `school_type`, `serial_number`, `genral_reg_no`, `school_recog_no`, `udise_no`, `affiliation_name`, `gr_number`, `medium`, `board`, `contact_number`, `email`, `website`, `created_at`, `updated_at`) VALUES
(1, 'titak', '45', 'Manewada', 'Nagpur', NULL, 'nagpure', 'Maharastra', 'India', '440009', 'gurukul', 'Manewada', '605784425.jpg', 'Nagpur', 'nagpure', 'nagpure', 'Maharastra', 'India', '440009', NULL, '5635', '4163', '436', '456354', '16354', '645', 'english', 'pune', '05623562356', 'admin@admin.com', 'iceico.in', '2020-10-26 01:47:04', '2020-10-31 06:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section`, `created_at`, `updated_at`) VALUES
(1, 'A', '2020-10-26 01:18:47', '2020-10-26 01:18:47'),
(2, 'B', '2020-10-26 01:18:53', '2020-10-26 01:18:53'),
(3, 'C', '2020-10-26 01:18:58', '2020-10-26 01:18:58'),
(4, 'D', '2020-10-26 01:19:04', '2020-10-26 01:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `siblings`
--

DROP TABLE IF EXISTS `siblings`;
CREATE TABLE IF NOT EXISTS `siblings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `standerd`
--

DROP TABLE IF EXISTS `standerd`;
CREATE TABLE IF NOT EXISTS `standerd` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `standard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `standerd`
--

INSERT INTO `standerd` (`id`, `standard`, `created_at`, `updated_at`) VALUES
(1, '1st Std', '2020-10-26 01:18:22', '2020-10-26 01:18:22'),
(2, '2nd Std', '2020-10-26 01:18:27', '2020-10-26 01:18:27'),
(3, '3rd Std', '2020-10-26 01:18:32', '2020-10-26 01:18:32'),
(4, 'KG 1', '2020-10-26 01:18:37', '2020-10-26 01:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

DROP TABLE IF EXISTS `student_profile`;
CREATE TABLE IF NOT EXISTS `student_profile` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `form_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admission_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acadamic_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_teacher_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admission_scheme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admission_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cast` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_tongue` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_school` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_school_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_class_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medium_of_instruction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_curricular_activity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `health_problem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recogniser` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_leaving` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonafide_certificate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admission_fees_discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term_fees_discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`id`, `form_number`, `serial_id`, `admission_number`, `acadamic_year`, `school_name`, `class_teacher_name`, `class_name`, `section`, `admission_scheme`, `admission_date`, `first_name`, `middle_name`, `last_name`, `religion`, `category`, `cast`, `place_of_birth`, `mother_tongue`, `gender`, `file`, `date_of_birth`, `father_name`, `father_contact`, `mother_name`, `mother_contact`, `address`, `guardian_name`, `guardian_address`, `previous_school`, `previous_school_address`, `previous_class_name`, `medium_of_instruction`, `extra_curricular_activity`, `health_problem`, `recogniser`, `date_of_leaving`, `certificate`, `bonafide_certificate`, `admission_fees_discount`, `term_fees_discount`, `status`, `created_at`, `updated_at`) VALUES
(9, '232', '3223', '232', '1', '1', '1', '1', '1', 'granted', '2020-10-29', 'neha', 'dharmraj', 'patange', '5rt', '4r534', '4r53w', '23r5', 't34', 'female', '328605297.png', '2020-11-03', '4r', 'r3rf', 'fr', 'aerygrt', 'grtfg', NULL, NULL, NULL, NULL, NULL, NULL, 'yes', NULL, 'recogniser', '2020-10-29', 'recogniser', 'recogniser', NULL, NULL, 1, '2020-10-29 04:57:17', '2020-10-30 06:03:08'),
(11, '3423', '3434', '3434', '2', '1', '1', '1', '1', 'granted', '2020-09-30', 'divya', 'vijay', 'sitewar', 'Hindu', 'obc', 'rangari', 'wani', 'marathi', 'female', NULL, '2020-09-29', 'suresh', '2323232323', 'subha', '2352352352', 'Manewada', NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 'recogniser', '2020-10-29', 'certificate', 'bonafide_certificate', NULL, NULL, 1, '2020-10-30 04:35:42', '2020-10-30 04:36:01'),
(12, '321', '324', '434', '2', '1', '1', '1', '1', 'granted', '2020-10-30', 'HHHHHH', 'TYT', 'TYHT', 'GHG', NULL, NULL, NULL, NULL, 'gender', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, 'recogniser', '2020-10-29', 'certificate', 'bonafide_certificate', NULL, NULL, 1, '2020-10-30 05:13:21', '2020-10-30 05:14:12'),
(7, '232', '232', '232', '1', '1', '1', '1', '1', 'granted', '2020-10-29', 'sagar', 'vijay', 'sitewar', 'Hindu', 'obc', 'rangari', 'wani', 'marathi', 'male', NULL, '2020-10-15', 'suresh', '2323232323', 'subha', '2352352352', 'Manewada', 'shreeya', 'nagpure', 'st preter', 'Manewada', 'KG1', 'english', 'yes', 'no', 'yes', '2020-10-29', 'yes', 'yes', '7000', '500', 1, '2020-10-29 00:37:43', '2020-10-30 04:13:35'),
(10, '3243', '432', '3423', '1', '1', '2', '1', '1', 'granted', '2020-10-29', 'ruuuu', 'tgytfrh', 'rtfhrtfyh', 'rfgh', 'hjfg', 'rangari', 'chandrapur', 'marathi', 'male', NULL, '2020-10-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', NULL, 'recogniser', '2020-10-29', 'certificate', 'bonafide_certificate', NULL, NULL, 1, '2020-10-29 04:58:12', '2020-10-30 05:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_reg`
--

DROP TABLE IF EXISTS `teacher_reg`;
CREATE TABLE IF NOT EXISTS `teacher_reg` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_reg`
--

INSERT INTO `teacher_reg` (`id`, `name`, `email`, `qualification`, `designation`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Shreeya Bondre', 'shreeya@gmail.com', 'B.E', 'Developer', '817700980.jpg', '2020-10-26 01:32:51', '2020-10-26 01:32:51'),
(2, 'Daivya Patange', 'divyapatange@gmail.com', 'B.sc B.ed', 'Developer', '1474036326.jpg', '2020-10-26 01:33:21', '2020-10-26 01:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acc_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_1`, `parent_id`, `acc_type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', NULL, '$2y$10$ktZmWe7RgKdjtc0DLqzEJea8K/3s68GgJ3WvGQ6vy4nvIs9xMUdPS', 'admin', '0', 'admin', 1, NULL, '2020-10-24 05:46:23', '2020-10-24 05:46:23'),
(2, 'highschool', 'highschool@highschool.com', 'highschool', NULL, '$2y$10$QVqLu8u/.j.Bbc6m/rhQjuyS27iYlOQS515kzPXZjquH6/CDrqr7C', 'highschool', '1', 'highschool', 1, NULL, '2020-10-24 05:46:23', '2020-10-24 05:46:23'),
(3, 'primaryschool', 'primaryschool@primaryschool.com', 'primaryschool', NULL, '$2y$10$secBGRXJTW9luEOe0FzML.8HVc5Fuqbwly4nioMWfjqe8HtLFCZr.', 'primaryschool', '2', 'primaryschool', 1, NULL, '2020-10-24 05:46:23', '2020-10-24 05:46:23'),
(4, 'marathischool', 'marathischool@marathischool.com', 'marathischool', NULL, '$2y$10$CsAXhL7FW30v3SvIt4ESBeaoa9vF7ZN.9rBhrmCOhzhcDR2.sqKUa', 'marathischool', '3', 'marathischool', 1, NULL, '2020-10-24 05:46:23', '2020-10-24 05:46:23'),
(5, 'accountant', 'accountant@accountant.com', 'accountant', NULL, '$2y$10$3Slook5DKO0XieoIr0NCuuI/iVAfTGHFf94h4k/oaMApXVZNil/16', 'accountant', '4', 'accountant', 1, NULL, '2020-10-24 05:46:23', '2020-10-24 05:46:23'),
(6, 'teacher', 'teacher@teacher.com', 'teacher', NULL, '$2y$10$II9wE8M67CvQ5H5MxTRlWOoWXLr2S0gylN3HKLPPiz51GIuxcUa3u', 'teacher', '5', 'teacher', 1, NULL, '2020-10-24 05:46:24', '2020-10-24 05:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

DROP TABLE IF EXISTS `user_account`;
CREATE TABLE IF NOT EXISTS `user_account` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_confirmation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobileNumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userProfile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
