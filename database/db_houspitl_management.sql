-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 07:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_houspitl_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_d_m_i_s_i_o_n_e_s`
--

CREATE TABLE `a_d_m_i_s_i_o_n_e_s` (
  `admision_id` bigint(20) UNSIGNED NOT NULL,
  `Patient_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Son_of_Do_of` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('m','f','o') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'm',
  `mr_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_name` bigint(20) UNSIGNED NOT NULL,
  `dr_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `husband_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `husband_mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pat_mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic_pat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `husband_cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CASE_TYPE` enum('surgical','non surgical') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type_Department` enum('Orthopadic','ENT','uorolgy','gynaecology','General Surgery','Medical Case') COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `madi_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IN_OUT` datetime NOT NULL,
  `DISCHARGE_DATE` datetime NOT NULL,
  `PAT_REFERED_BY` bigint(20) UNSIGNED NOT NULL,
  `PRIVATE_SEHAT_CARD` bigint(20) UNSIGNED NOT NULL,
  `ROOM_TYPE` enum('AC','Non Ac') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ROOM_CHARGES` double NOT NULL,
  `OPD_INCLUDE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procedure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UPS_charges` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lab_Quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lab_Price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Labsum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdcn_Quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MDCN_Price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mdcnammount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dcnammount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_d_m_i_s_i_o_n_e_s`
--

INSERT INTO `a_d_m_i_s_i_o_n_e_s` (`admision_id`, `Patient_Name`, `Son_of_Do_of`, `gender`, `mr_no`, `visit_no`, `dr_name`, `dr_fee`, `date`, `time`, `husband_name`, `husband_mobile_no`, `pat_mobile_no`, `cnic_pat`, `husband_cnic`, `CASE_TYPE`, `Type_Department`, `lab_id`, `madi_id`, `IN_OUT`, `DISCHARGE_DATE`, `PAT_REFERED_BY`, `PRIVATE_SEHAT_CARD`, `ROOM_TYPE`, `ROOM_CHARGES`, `OPD_INCLUDE`, `procedure`, `UPS_charges`, `Lab_Quantity`, `Lab_Price`, `Labsum`, `mdcn_Quantity`, `MDCN_Price`, `Mdcnammount`, `dcnammount`, `total`, `created_at`, `updated_at`) VALUES
(3, 'xyz', 'shahs', 'm', '84238', '38892', 2, '700', '2022-08-26', '20:38:00', 'hddjjs', '483499', '84839', '382939', '4839849', 'surgical', 'ENT', '1,3', '2,2', '2022-08-23 17:40:00', '2022-08-26 17:40:00', 1, 1, 'AC', 1300, '14000', '2', '19000', '2,1', '1200,1200', '2400', '2,2', '280,280', '560', '0', '37960', '2022-08-26 07:45:08', '2022-09-10 00:56:23'),
(4, 'amjad', 'Akhtar', 'm', '1122', '11222', 2, '700', '2022-09-04', '14:46:00', 'ooo', '38892821', '378237662', '7328882', '378299712', 'surgical', 'uorolgy', '2,2', '4,3', '2022-09-04 14:46:00', '2022-09-06 14:46:00', 2, 2, 'AC', 13000, '1500', '2', '1800\n', '2,3', '1800,2700', '4500', '2,3', '40,180', '220', NULL, '21720', '2022-09-06 04:47:06', '2022-09-06 12:31:00'),
(5, 'usama', 'Akhtar', 'm', '1122', '11222', 2, '700', '2022-09-04', '14:46:00', 'ooo', '38892821', '378237662', '7328882', '378299712', 'surgical', 'uorolgy', '2,2', '4,3', '2022-09-04 14:46:00', '2022-09-06 14:46:00', 2, 2, 'AC', 13000, '1500', '2', '1800', '2,3', '1800,2700', '4500', '2,3', '40,180', '220', NULL, '21720', '2022-09-06 05:00:03', '2022-09-06 05:00:03'),
(6, 'shahbaz', 'Ali', 'm', '25888', '25888', 1, '600', '2022-09-06', '22:26:00', 'hytd', '0214825522', '845224984', '385216562', '14164120641230641', 'surgical', 'Orthopadic', '1,2', '1,3', '2022-09-06 22:27:00', '2022-09-09 22:27:00', 1, 2, 'Non Ac', 5000, '15000', '1', '10000', '2,01', '1200,900', '2100', '010,1', '70,60', '130', NULL, '35060', '2022-09-06 12:29:16', '2022-09-06 12:29:16'),
(7, 'abdula', 'amjad', 'm', '12345123', '1234512345', 1, '600', '2022-09-08', '17:00:00', 'sahh', '12345123466', '12345123466', '12345123451551212', '12345123451231', 'surgical', 'uorolgy', '1,2', '1,3', '2022-09-05 17:01:00', '2022-09-07 17:01:00', 1, 2, 'Non Ac', 12, '12', '1', '12', '2,1', '1200,900', '2100', '10,1', '70,60', '130', NULL, '2466', '2022-09-07 07:02:31', '2022-09-07 07:02:31'),
(8, 'abdula', 'ahsan', 'm', '1209', '1289', 1, '600', '2022-09-07', '18:43:00', 'akram', '73828882', '037772821', '07276167612', '377877823', 'surgical', 'Orthopadic', '1,2', '1,3', '2022-09-04 17:43:00', '2022-09-07 17:43:00', 1, 2, 'Non Ac', 120, '1200', '2', '1289', '2,1', '1200,900', '2100', '10,1', '70,60', '130', NULL, '5639', '2022-09-07 07:45:48', '2022-09-07 07:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `doctores`
--

CREATE TABLE `doctores` (
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee_on_PRIVATE` double(8,2) NOT NULL,
  `fee_on_SEHAT_CARD` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctores`
--

INSERT INTO `doctores` (`doctor_id`, `name`, `fee_on_PRIVATE`, `fee_on_SEHAT_CARD`, `created_at`, `updated_at`) VALUES
(1, 'azka muneer', 1200.00, 600.00, '2022-08-26 07:28:55', '2022-08-26 07:28:55'),
(2, 'amjad khan', 1400.00, 700.00, '2022-08-26 07:29:29', '2022-08-26 07:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `creditammount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `name`, `amount`, `discription`, `creditammount`, `created_at`, `updated_at`) VALUES
(1, 'abdur rahman, Ali Asghar, amjad ali', '1000, 3000, 14000', 'for fuel, for rent, markiting', '18000', '2022-09-05 01:46:44', '2022-09-05 05:38:13'),
(2, 'ahmad', '2000', 'lab', '2000', '2022-09-06 12:44:40', '2022-09-06 12:44:40');

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
-- Table structure for table `labes`
--

CREATE TABLE `labes` (
  `lab_id` bigint(20) UNSIGNED NOT NULL,
  `Lab_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lab_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lab_priceP` bigint(20) NOT NULL,
  `Lab_priceS` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labes`
--

INSERT INTO `labes` (`lab_id`, `Lab_name`, `Lab_location`, `Lab_priceP`, `Lab_priceS`, `created_at`, `updated_at`) VALUES
(1, 'Xray', 'xyz', 1000, 600, '2022-08-26 07:11:44', '2022-09-05 07:51:27'),
(2, 'ecg', 'xyz', 1400, 900, '2022-08-26 07:12:20', '2022-08-26 07:12:20'),
(3, 'ctg', 'zz', 1200, 800, '2022-08-26 07:21:18', '2022-08-26 07:21:18'),
(4, 'xyzabc', 'abaseeya', 12000, 7000, '2022-09-05 07:42:03', '2022-09-05 07:42:03');

-- --------------------------------------------------------

--
-- Table structure for table `lab_billes`
--

CREATE TABLE `lab_billes` (
  `lab_bill_id` bigint(20) UNSIGNED NOT NULL,
  `date_time` datetime NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'WALKING',
  `business` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lab_Quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lab_Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creditammount` double(8,2) NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Total_Bill` double(8,2) NOT NULL,
  `usaer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lab_billes`
--

INSERT INTO `lab_billes` (`lab_bill_id`, `date_time`, `customer_name`, `business`, `Lab_Quantity`, `Lab_Price`, `creditammount`, `discount`, `Total_Bill`, `usaer_name`, `created_at`, `updated_at`) VALUES
(1, '2022-08-07 21:27:00', 'Walking', '3,2', '2,3', '2400,4200', 6600.00, '13%', 5742.00, NULL, '2022-08-27 11:30:20', '2022-08-27 11:30:20'),
(2, '2022-08-10 21:31:00', 'ahamd', '3', '13', '15600', 15600.00, '14', 15586.00, NULL, '2022-08-27 11:31:19', '2022-08-27 11:31:19'),
(3, '2022-08-11 21:33:00', 'kamal', '2,1,3', '2,3,1', '2800,3000,1200', 7000.00, '1400', 5600.00, NULL, '2022-08-27 11:34:00', '2022-08-27 11:34:00'),
(4, '2022-08-16 21:34:00', 'Walking', '1', '10', '10000', 10000.00, '12%', 8800.00, NULL, '2022-08-27 11:34:46', '2022-08-27 11:34:46'),
(5, '2022-09-04 16:06:00', 'Akhtar', '3,2', '2,2', '2400,2800', 5200.00, '10%', 4680.00, NULL, '2022-09-06 06:08:05', '2022-09-06 06:08:05'),
(6, '2022-09-05 22:19:00', 'Shahbaz', '1,2', '1,1', '1000,1400', 2400.00, '0', 2400.00, NULL, '2022-09-06 12:19:42', '2022-09-06 12:19:42'),
(7, '2022-09-07 19:33:00', 'Walking', '3', '1', '1200', 1200.00, '0', 1200.00, NULL, '2022-09-07 09:33:53', '2022-09-07 09:33:53');

-- --------------------------------------------------------

--
-- Table structure for table `lab_lists`
--

CREATE TABLE `lab_lists` (
  `lb_id` bigint(20) UNSIGNED NOT NULL,
  `lb_Test_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lb_test_price` bigint(20) NOT NULL,
  `lab_no` bigint(20) UNSIGNED NOT NULL,
  `lb_date` date NOT NULL,
  `d_t_blood_sample_colecte` datetime NOT NULL,
  `d_t_reporting_of_test_results` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Madicenes`
--

CREATE TABLE `Madicenes` (
  `madi_id` bigint(20) UNSIGNED NOT NULL,
  `madi_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `madi_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `madi_priceP` bigint(20) NOT NULL,
  `madi_priceS` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Madicenes`
--

INSERT INTO `Madicenes` (`madi_id`, `madi_name`, `madi_type`, `madi_priceP`, `madi_priceS`, `created_at`, `updated_at`) VALUES
(1, 'xyz 100mg', 'Tablet', 12, 7, '2022-08-26 07:26:31', '2022-09-05 08:36:14'),
(2, 'abc', 'syrup', 140, 70, '2022-08-26 07:26:51', '2022-08-26 07:26:51'),
(3, 'wwe 50mg', 'Tablet', 120, 60, '2022-08-26 07:27:24', '2022-08-26 07:27:37'),
(4, 'weeexyz', 'syrup', 40, 20, '2022-09-05 08:27:24', '2022-09-05 08:27:24'),
(5, 'eeemo 100mg', 'Tablet', 50, 25, '2022-09-05 08:29:01', '2022-09-05 08:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `mdcn_billes`
--

CREATE TABLE `mdcn_billes` (
  `mdcn_bill_id` bigint(20) UNSIGNED NOT NULL,
  `date_time` datetime NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'WALKING',
  `mdcn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdcn_Quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MDCN_Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creditammount` double(8,2) NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Total_Bill` double(8,2) NOT NULL,
  `usaer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mdcn_billes`
--

INSERT INTO `mdcn_billes` (`mdcn_bill_id`, `date_time`, `customer_name`, `mdcn`, `mdcn_Quantity`, `MDCN_Price`, `creditammount`, `discount`, `Total_Bill`, `usaer_name`, `created_at`, `updated_at`) VALUES
(1, '2022-09-05 18:56:00', 'usama', '2,4', '2,3', '280,120', 400.00, '12', 388.00, NULL, '2022-09-06 09:06:15', '2022-09-06 09:06:15'),
(2, '2022-09-05 16:22:00', 'shahbaz', '3,1', '01,01', '120,12', 132.00, '100', 32.00, NULL, '2022-09-06 12:23:27', '2022-09-06 12:23:27'),
(3, '2022-09-07 19:23:00', 'Walking', '2', '2', '280', 280.00, '0', 280.00, NULL, '2022-09-07 09:24:16', '2022-09-07 09:24:16');

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
(229, '2014_10_12_000000_create_users_table', 1),
(230, '2014_10_12_100000_create_password_resets_table', 1),
(231, '2019_08_19_000000_create_failed_jobs_table', 1),
(232, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(233, '2022_08_06_100141_create_logins_table', 1),
(234, '2022_08_07_101022_create_labes_table', 1),
(235, '2022_08_07_152945_create_Madicenes_table', 1),
(236, '2022_08_09_114848_add_columns_to_Madicenes_table', 1),
(237, '2022_08_09_123342_create__m_d_c_nes_table', 1),
(238, '2022_08_09_142403_create_lab_lists_table', 1),
(239, '2022_08_10_073100_create_roles_table', 1),
(240, '2022_08_10_073504_create_permissions_table', 1),
(241, '2022_08_10_074339_create_users_permission_table', 1),
(242, '2022_08_10_075257_create_users_roles_table', 1),
(243, '2022_08_10_080027_create_roles_permissions_table', 1),
(244, '2022_08_10_100646_create_walking_test_mdcns_table', 1),
(245, '2022_08_19_051120_create_lab_billes_table', 1),
(246, '2022_08_20_100227_create_mdcn_billes_table', 1),
(247, '2022_08_20_112314_create_doctores_table', 1),
(249, '2022_08_21_071138_create_roomes_table', 1),
(250, '2022_08_21_071236_create_pat_refered_bies_table', 1),
(251, '2022_08_21_074232_create_a_d_m_i_s_i_o_n_e_s_table', 2),
(253, '2022_08_20_112511_create_o_p_des_table', 3),
(255, '2022_09_02_075347_create_expenses_table', 4),
(256, '2022_09_09_095911_create_procedures_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `o_p_des`
--

CREATE TABLE `o_p_des` (
  `opd_id` bigint(20) UNSIGNED NOT NULL,
  `Patient_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Son_of_Do_of` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('m','f','o') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'm',
  `mr_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_name` bigint(20) UNSIGNED NOT NULL,
  `dr_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `husband_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `husband_mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pat_mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic_pat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type_Department` enum('Orthopadic','ENT','uorolgy','gynaecology','General Surgery','Medical Case') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ultrasound` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ultrasound_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lab_Quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lab_Price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Labsum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdcn_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdcn_Quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MDCN_Price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mdcnammount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `o_p_des`
--

INSERT INTO `o_p_des` (`opd_id`, `Patient_Name`, `Son_of_Do_of`, `gender`, `mr_no`, `visit_no`, `dr_name`, `dr_fee`, `date`, `time`, `husband_name`, `husband_mobile_no`, `pat_mobile_no`, `cnic_pat`, `Type_Department`, `Ultrasound`, `Ultrasound_price`, `lab_id`, `Lab_Quantity`, `Lab_Price`, `Labsum`, `mdcn_id`, `mdcn_Quantity`, `MDCN_Price`, `Mdcnammount`, `discount`, `total`, `created_at`, `updated_at`) VALUES
(1, 'dkjhk', 'jdsakdh', 'm', '829', '8291', 1, '1200', '2022-08-07', '08:09:00', 'sdkah', '373872', '737728', '7382', 'ENT', NULL, NULL, '2,2', '02,1', '2800,1400', '4200', '1,3', '2,2', '24,240', '264', '12', '5652', '2022-08-26 09:28:51', '2022-08-26 09:28:51'),
(2, 'sdajdk', 'JDKADSKA', 'm', '898', '89932', 2, '1400', '2022-08-26', '19:36:00', 'jhdka', '8329', '372387', '8382', 'gynaecology', NULL, NULL, '1,3', '2,1', '2000,1200', '3200', '2,3', '2,5', '280,600', '880', '154', '5326', '2022-08-26 10:21:50', '2022-08-26 10:21:50'),
(3, 'abdula', 'abid', 'm', '8773762', '73728', 1, '1200', '2022-09-05', '22:36:00', 'ashj', '748387', '443848', '874738', 'ENT', NULL, NULL, '3', '2', '2400', '2400', '3,5', '2,1', '240,50', '290', '12', '3878', '2022-09-06 12:37:28', '2022-09-06 12:37:28'),
(4, 'dcdxcs', 'asdfasda', 'f', '619615', '5432312', 1, '1200', '2022-09-04', '22:39:00', 'asdada', '2016510', '02310', '0325185120', 'Orthopadic', NULL, NULL, '1', '20', '20000', '20000', '1', '100', '1200', '1200', '0', '22400', '2022-09-06 12:40:10', '2022-09-06 12:40:10'),
(5, 'abrar', 'abc', 'm', '1121', '2213', 2, '1400', '2022-09-07', '18:20:00', 'xbnz', '382989', '738277853', '37823788', 'gynaecology', NULL, NULL, '', '0', '0', '0', '', '0', '0', '0', '0', '1400', '2022-09-07 08:20:37', '2022-09-07 08:20:37'),
(6, 'Arman', 'Dilbar', 'm', '1244354', '3886661', 1, '1200', '2022-09-11', '12:11:00', 'Dilbar Hussain', '382877773', '092773781', '37772881', 'gynaecology', NULL, NULL, '', '0', '0', '0', '', '0', '0', '0', '0', '1200', '2022-09-11 02:12:29', '2022-09-11 02:12:29'),
(7, 'abrar', 'adj', 'm', '3723887', '37283782', 2, '1400', '2022-09-12', '18:48:00', 'hsjahs', '32738', '738238', '32388923', 'gynaecology', 'Ultrasound', '1233', '', '0', '0', '0', '', '0', '0', '0', '21', '2612', '2022-09-12 09:00:29', '2022-09-12 09:00:29');

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
-- Table structure for table `pat_refered_bies`
--

CREATE TABLE `pat_refered_bies` (
  `pat_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persentage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pat_refered_bies`
--

INSERT INTO `pat_refered_bies` (`pat_id`, `name`, `persentage`, `created_at`, `updated_at`) VALUES
(1, 'hdsj', '10', '2022-08-26 07:32:31', '2022-08-26 07:33:41'),
(2, 'tuusu', '13', '2022-08-26 07:33:56', '2022-08-26 07:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `procedures`
--

CREATE TABLE `procedures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `procedures_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `share` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `procedures`
--

INSERT INTO `procedures` (`id`, `procedures_name`, `share`, `created_at`, `updated_at`) VALUES
(1, 'Abcess Drainage under LAA', '11%', '2022-09-09 05:30:41', '2022-09-12 09:33:44'),
(2, 'Abcess Drainage under AAL', '15%', '2022-09-09 06:03:45', '2022-09-12 09:33:35'),
(4, 'Abcess Drainage under Lll', '13%', '2022-09-12 09:31:13', '2022-09-12 09:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roomes`
--

CREATE TABLE `roomes` (
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `room_name` enum('PRIVATE','SEHAT_CARD') COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type` enum('Ac','Non Ac') COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_Price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roomes`
--

INSERT INTO `roomes` (`room_id`, `room_name`, `room_type`, `room_Price`, `created_at`, `updated_at`) VALUES
(1, 'PRIVATE', 'Ac', 1500.00, '2022-08-26 07:29:53', '2022-08-26 07:29:53'),
(2, 'SEHAT_CARD', 'Non Ac', 1400.00, '2022-08-26 07:30:09', '2022-08-26 07:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SUBHAN', 'Admin@gmail.com', NULL, '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_permissions`
--

CREATE TABLE `users_permissions` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `walking_test_mdcns`
--

CREATE TABLE `walking_test_mdcns` (
  `wtm_id` bigint(20) UNSIGNED NOT NULL,
  `lab_id` bigint(20) UNSIGNED NOT NULL,
  `lab_DISCOUNT` bigint(20) NOT NULL,
  `madi_id` bigint(20) UNSIGNED NOT NULL,
  `mdcn_DISCOUNT` bigint(20) NOT NULL,
  `test_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_Price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_m_d_c_nes`
--

CREATE TABLE `_m_d_c_nes` (
  `mdcn_id` bigint(20) UNSIGNED NOT NULL,
  `mdcn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdcn_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdcn_SALE` bigint(20) NOT NULL,
  `mdcn_SINGLE_ITEM_ADD` bigint(20) NOT NULL,
  `mdcn_mg/g` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_d_m_i_s_i_o_n_e_s`
--
ALTER TABLE `a_d_m_i_s_i_o_n_e_s`
  ADD PRIMARY KEY (`admision_id`),
  ADD KEY `a_d_m_i_s_i_o_n_e_s_dr_name_foreign` (`dr_name`),
  ADD KEY `a_d_m_i_s_i_o_n_e_s_pat_refered_by_foreign` (`PAT_REFERED_BY`),
  ADD KEY `a_d_m_i_s_i_o_n_e_s_private_sehat_card_foreign` (`PRIVATE_SEHAT_CARD`);

--
-- Indexes for table `doctores`
--
ALTER TABLE `doctores`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `labes`
--
ALTER TABLE `labes`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `lab_billes`
--
ALTER TABLE `lab_billes`
  ADD PRIMARY KEY (`lab_bill_id`);

--
-- Indexes for table `lab_lists`
--
ALTER TABLE `lab_lists`
  ADD PRIMARY KEY (`lb_id`),
  ADD KEY `lab_lists_lab_no_foreign` (`lab_no`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `Madicenes`
--
ALTER TABLE `Madicenes`
  ADD PRIMARY KEY (`madi_id`);

--
-- Indexes for table `mdcn_billes`
--
ALTER TABLE `mdcn_billes`
  ADD PRIMARY KEY (`mdcn_bill_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_p_des`
--
ALTER TABLE `o_p_des`
  ADD PRIMARY KEY (`opd_id`),
  ADD KEY `o_p_des_dr_name_foreign` (`dr_name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pat_refered_bies`
--
ALTER TABLE `pat_refered_bies`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `procedures`
--
ALTER TABLE `procedures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`role_id`,`permission_id`);

--
-- Indexes for table `roomes`
--
ALTER TABLE `roomes`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_permissions`
--
ALTER TABLE `users_permissions`
  ADD PRIMARY KEY (`user_id`,`permission_id`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `walking_test_mdcns`
--
ALTER TABLE `walking_test_mdcns`
  ADD PRIMARY KEY (`wtm_id`),
  ADD KEY `walking_test_mdcns_lab_id_foreign` (`lab_id`),
  ADD KEY `walking_test_mdcns_madi_id_foreign` (`madi_id`);

--
-- Indexes for table `_m_d_c_nes`
--
ALTER TABLE `_m_d_c_nes`
  ADD PRIMARY KEY (`mdcn_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_d_m_i_s_i_o_n_e_s`
--
ALTER TABLE `a_d_m_i_s_i_o_n_e_s`
  MODIFY `admision_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctores`
--
ALTER TABLE `doctores`
  MODIFY `doctor_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labes`
--
ALTER TABLE `labes`
  MODIFY `lab_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lab_billes`
--
ALTER TABLE `lab_billes`
  MODIFY `lab_bill_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lab_lists`
--
ALTER TABLE `lab_lists`
  MODIFY `lb_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Madicenes`
--
ALTER TABLE `Madicenes`
  MODIFY `madi_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mdcn_billes`
--
ALTER TABLE `mdcn_billes`
  MODIFY `mdcn_bill_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT for table `o_p_des`
--
ALTER TABLE `o_p_des`
  MODIFY `opd_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pat_refered_bies`
--
ALTER TABLE `pat_refered_bies`
  MODIFY `pat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `procedures`
--
ALTER TABLE `procedures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roomes`
--
ALTER TABLE `roomes`
  MODIFY `room_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `walking_test_mdcns`
--
ALTER TABLE `walking_test_mdcns`
  MODIFY `wtm_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_m_d_c_nes`
--
ALTER TABLE `_m_d_c_nes`
  MODIFY `mdcn_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `a_d_m_i_s_i_o_n_e_s`
--
ALTER TABLE `a_d_m_i_s_i_o_n_e_s`
  ADD CONSTRAINT `a_d_m_i_s_i_o_n_e_s_dr_name_foreign` FOREIGN KEY (`dr_name`) REFERENCES `doctores` (`doctor_id`),
  ADD CONSTRAINT `a_d_m_i_s_i_o_n_e_s_pat_refered_by_foreign` FOREIGN KEY (`PAT_REFERED_BY`) REFERENCES `pat_refered_bies` (`pat_id`),
  ADD CONSTRAINT `a_d_m_i_s_i_o_n_e_s_private_sehat_card_foreign` FOREIGN KEY (`PRIVATE_SEHAT_CARD`) REFERENCES `roomes` (`room_id`);

--
-- Constraints for table `lab_lists`
--
ALTER TABLE `lab_lists`
  ADD CONSTRAINT `lab_lists_lab_no_foreign` FOREIGN KEY (`lab_no`) REFERENCES `labes` (`lab_id`);

--
-- Constraints for table `o_p_des`
--
ALTER TABLE `o_p_des`
  ADD CONSTRAINT `o_p_des_dr_name_foreign` FOREIGN KEY (`dr_name`) REFERENCES `doctores` (`doctor_id`);

--
-- Constraints for table `users_permissions`
--
ALTER TABLE `users_permissions`
  ADD CONSTRAINT `users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD CONSTRAINT `users_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `walking_test_mdcns`
--
ALTER TABLE `walking_test_mdcns`
  ADD CONSTRAINT `walking_test_mdcns_lab_id_foreign` FOREIGN KEY (`lab_id`) REFERENCES `labes` (`lab_id`),
  ADD CONSTRAINT `walking_test_mdcns_madi_id_foreign` FOREIGN KEY (`madi_id`) REFERENCES `Madicenes` (`madi_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
