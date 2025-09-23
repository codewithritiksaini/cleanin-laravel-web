-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 23, 2025 at 12:06 PM
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
-- Database: `protfolio12`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL DEFAULT 'about-us',
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(1, 'about-us', 'Meaning of Paragrapha piece of writing consisting of one or more sentences that express a main idea or point. It gives structure to the prose and focuses on one topic, making it easier for readers to understand. Paragraphs often start on a new line and are also indented. Meaning of Paragrapha piece of writing consisting of one or more sentences that express a main idea or point. It gives structure to the prose and focuses on one topic, making it easier for readers to understand. Paragraphs often start on a new line and are also indented. Meaning of Paragrapha piece of writing consisting of one or more sentences that express a main idea or point. It gives structure to the prose and focuses on one topic, making it easier for readers to understand. Paragraphs often start on a new line and are also indented.', '2025-08-27 05:57:23', '2025-08-30 00:33:48');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$12$jwU2VCRVjIRDP6W8SUtGNexkrB5gmb0nXTYxrLcYKSOfVsooYO8a.', '2025-08-27 05:57:43', '2025-08-27 05:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` text NOT NULL,
  `description` text DEFAULT NULL,
  `btn_name` varchar(255) DEFAULT NULL,
  `btn_url` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `sub_title`, `slug`, `image`, `description`, `btn_name`, `btn_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to Cleanin.', 'Best Cleaning Services <br> In Town', 'banner-2', '[\"banner_6377_2025-09-13.jpg\"]', 'including normal word length, spacing, and punctuation — designers can focus on the visual elements of a layout without the actual content getting in the way.', 'About Us', 'about', 1, '2025-09-13 06:15:07', '2025-09-13 06:47:02'),
(2, 'Welcome to Cleanin.', 'Cleanin a cleaning <br> company.', 'welcome-to-cleanin', '[\"banner_6979_2025-09-13.jpg\"]', 'Why scrambled text? That\'s exactly the point. By using text that\'s unreadable but maintains the general pattern of regular writing.', 'Contact Us', 'contact', 1, '2025-09-13 06:15:57', '2025-09-13 06:46:49');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `name`, `keywords`, `slug`, `image`, `description`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'rikki', 'saini', NULL, 'saini', 'blog_7584_2025-09-09.jpg', 'Why scrambled text? That\'s exactly the point. By using text that\'s unreadable but maintains the general pattern of regular writing — including normal word length, spacing, and punctuation — designers can focus on the visual elements of a layout without the actual content getting in the way. The pseudo-Latin appearance gives it a natural feel while ensuring it won\'t distract from the design itself.', 'nsmnxklwnmxkwxexn exn jexnjexe jneksd', 1, '2025-09-09 03:29:38', '2025-09-09 03:29:38'),
(4, 'om', 'omsaini', NULL, 'omsaini', 'blog_9501_2025-09-09.jpg', 'Why scrambled text? That\'s exactly the point. By using text that\'s unreadable but maintains the general pattern of regular writing — including normal word length, spacing, and punctuation — designers can focus on the visual elements of a layout without the actual content getting in the way. The pseudo-Latin appearance gives it a natural feel while ensuring it won\'t distract from the design itself.', 'mnmxjwnixwe   djn2es edhueid  diedne', 1, '2025-09-09 03:33:02', '2025-09-09 03:33:02'),
(5, 'Best Ways to Keep Your House Fresh & Clean', 'Best Ways to Keep Your House Fresh & Clean', 'Cleaning, Business, Office', 'cleaning-business-office', 'blog_7277_2025-09-18.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years.\r\n\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.', 'Expertise and Experience\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum.\r\n\r\nRichard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.\r\n\r\n\r\n\r\nTop tips for house cleaning\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet.\r\n\r\n Daily cleaning of office areas, including desks, chairs.\r\n\r\n Floor care, including vacuuming or mopping as needed.\r\n\r\n Dusting and sanitizing of electronics, such computers & telephones.\r\n\r\n Thorough cleaning of conference tables, chairs, and equipment.\r\n\r\nWhy Professional Cleaning Matters\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, '2025-09-09 03:37:39', '2025-09-18 06:01:55'),
(6, 'som', 'dwvloper', 'php', 'dwvloper', 'blog_6195_2025-09-09.jpg', 'Why scrambled text? That\'s exactly the point. By using text that\'s unreadable but maintains the general pattern of regular writing — including normal word length, spacing, and punctuation — designers can focus on the visual elements of a layout without the actual content getting in the way. The pseudo-Latin appearance gives it a natural feel while ensuring it won\'t distract from the design itself.', ',w ,d ,we m,d wed  wewem eee   dj2d 3 k2s 2 d', 1, '2025-09-09 03:42:22', '2025-09-09 03:42:22');

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
-- Table structure for table `image_galleries`
--

CREATE TABLE `image_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_galleries`
--

INSERT INTO `image_galleries` (`id`, `title`, `slug`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'bass', 'bass', 'image_9601_20250913123159.jpg', 'Why scrambled text? That\'s exactly the point. By using text that\'s unreadable but maint?', 1, '2025-09-13 07:01:59', '2025-09-13 07:01:59'),
(2, 'msp', 'msp', 'image_5410_20250917092949.jpg', 'Why scrambled text? That\'s exactly the point. By using text that\'s', 1, '2025-09-17 03:59:49', '2025-09-17 03:59:49'),
(3, 'KMDC', 'kmdc', 'image_5877_20250920064701.png', ',DWELDLEW', 1, '2025-09-17 04:41:41', '2025-09-20 01:17:01');

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
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'fsfsd', 'rikkisaini9@gmail.com', '9719700483', 'dfdnsfsdf', 'sdcsdcdf', '2025-08-30 04:02:21', '2025-08-30 04:02:21'),
(3, 'rikki', 'rikkisaini4455@gmail.com', '9389249642', 'just test', 'hii it\'s Rikki , availble for test form', '2025-08-30 04:06:32', '2025-08-30 04:06:32'),
(4, 'rikki saini dd', 'rrikkisaini4455@gmail.com', '9389249642', 'php html css', 'hii bro', '2025-08-30 04:08:59', '2025-08-30 04:08:59'),
(5, 'test', 'test@gmail.com', '9389249642', '26', 'sadsd', '2025-08-30 04:11:06', '2025-08-30 04:11:06'),
(6, 'test', 'rikkisaini9@gmail.com', '9719700483', 'Bike Wash', 'dwed', '2025-08-31 05:56:06', '2025-08-31 05:56:06'),
(7, 'rikki', 'rrikkisaini4455@gmail.com', '9389249642', 'Array', 'aaaaaaaaaaaaaa', '2025-09-09 04:39:18', '2025-09-09 04:39:18'),
(8, 'ariyain', 'rikkisaini4455@gmail.com', '9389249642', 'Array', 'ihnwejdnweid', '2025-09-13 00:27:17', '2025-09-13 00:27:17'),
(9, 'scs', 'som@gmail.com', '9719700483', '25', 'sss', '2025-09-13 01:07:09', '2025-09-13 01:07:09'),
(10, 'ariyain', 'rikkisaini9@gmail.com', '9719700483', 'noty', 'aaaaaaaa', '2025-09-13 04:33:57', '2025-09-13 04:33:57'),
(11, 'ariyain', 'rrikkisaini4455@gmail.com', '9389249642', 'one two three', 'ndjksnjks', '2025-09-13 05:40:47', '2025-09-13 05:40:47'),
(12, 'rikki', 'rikkiadmin@gmail.com', '9389249642', 'Request for Free Quote', 'hsukfhweknerf', '2025-09-13 05:44:15', '2025-09-13 05:44:15'),
(13, 'rikki saini dd', 'rrikkisaini4455@gmail.com', '9389249642', 'dsdssd', 'sdsds', '2025-09-13 05:57:26', '2025-09-13 05:57:26'),
(14, 'ariyain', 'rikkisaini4455@gmail.com', '9389249642', 'saini', 'jexdw', '2025-09-18 05:24:53', '2025-09-18 05:24:53'),
(15, 'njkfnjkr', 'rikkisaini4455@gmail.com', '9389249642', 'nfwjkenf', 'wefe', '2025-09-18 06:19:50', '2025-09-18 06:19:50'),
(17, 'ariyain', 'rikkisaini4455@gmail.com', '9389249642', 'Hindi, English', 's', '2025-09-19 01:27:55', '2025-09-19 01:27:55'),
(18, 'rikki saini', 'rikkisaini4455@gmail.com', '9389249642', 'php html css', 'my name is rikki saini?', '2025-09-19 01:35:45', '2025-09-19 01:35:45'),
(19, 'rikki', 'rrikkisaini4455@gmail.com', '9389249642', 'Hindi, English', 'jd', '2025-09-19 04:07:56', '2025-09-19 04:07:56'),
(20, 'rikki saini dd', 'rikkisaini4455@gmail.com', '9389249642', 'Hindi, English', 'a', '2025-09-19 04:09:01', '2025-09-19 04:09:01'),
(21, 'rikki', 'admin@gmail.com', '9719700483', 'Array', 'asdasd', '2025-09-19 04:10:12', '2025-09-19 04:10:12'),
(22, 'rikki saini dd', 'rikkisaini4455@gmail.com', '9389249642', '34', 'as', '2025-09-19 04:11:09', '2025-09-19 04:11:09');

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
(4, '2025_05_03_113818_create_services_table', 1),
(6, '2025_05_11_062734_create_projects_table', 1),
(8, '2025_05_19_114018_create_banners_table', 1),
(9, '2025_06_16_073917_create_about_table', 1),
(10, '2025_07_27_042059_create_image_galleries_table', 1),
(11, '2025_07_27_055531_create_messages_table', 1),
(12, '2025_07_29_091836_create__setting_table', 1),
(14, '2025_08_18_093748_create_admins_table', 1),
(15, '2025_08_29_174801_create_views_table', 2),
(16, '2025_05_11_062803_create_testimonials_table', 3),
(18, '2025_09_03_100757_create_teams_table', 4),
(19, '2025_05_11_062648_create_blogs_table', 5),
(21, '2025_07_29_093906_create_video_galleries_table', 6),
(22, '2025_09_20_112304_create_policies_table', 7);

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
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term` text DEFAULT NULL,
  `privacy` text DEFAULT NULL,
  `refund` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `term`, `privacy`, `refund`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, '2025-09-23 02:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`image`)),
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`image`)),
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `name`, `slug`, `image`, `description`, `content`, `status`, `created_at`, `updated_at`) VALUES
(25, 'Bike Wash Service', 'Bike Wash', 'bike-wash', '[\"service_9630_2025-08-30.jpg\"]', 'Quick and affordable bike wash for all two-wheelers.', 'We provide foam wash, chain cleaning, and polish for bikes to give them a fresh look.', 1, '2025-08-30 05:00:53', '2025-08-29 23:33:55'),
(26, 'Cloth Washing Service', 'Cloth Washing', 'cloth-washing', '[\"service_6309_2025-08-30.jpg\"]', 'Professional laundry service with washing, drying, and ironing.', 'We ensure hygienic cloth washing with premium detergents and ironing for a neat finish.', 1, '2025-08-30 05:00:53', '2025-08-29 23:35:09'),
(27, 'Dry Cleaning Service', 'Dry Cleaning', 'dry-cleaning', '[\"service_2524_2025-08-30.jpg\"]', 'Delicate and premium dry cleaning for special clothes.', 'Our dry cleaning process uses eco-friendly chemicals that protect fabric quality.', 1, '2025-08-30 05:00:53', '2025-08-29 23:35:27'),
(28, 'Sofa Cleaning Service', 'Sofa Cleaning', 'sofa-cleaning', '[\"service_4333_2025-08-30.jpg\"]', 'Deep sofa cleaning with vacuum and shampooing.', 'We remove dust, stains, and bacteria from sofa fabrics ensuring freshness and hygiene.', 1, '2025-08-30 05:00:53', '2025-08-29 23:35:47'),
(29, 'Carpet Cleaning Service', 'Carpet Cleaning', 'carpet-cleaning', '[\"service_6372_2025-08-30.jpg\"]', 'Expert carpet cleaning for homes and offices.', 'Our carpet cleaning process removes dust mites, allergens, and deep stains effectively.', 1, '2025-08-30 05:00:53', '2025-08-29 23:36:04'),
(30, 'Home Cleaning Service', 'Home Cleaning', 'home-cleaning', '[\"service_4351_2025-08-30.jpg\"]', 'Full home cleaning including bathroom, kitchen, and furniture.', 'Our trained team provides professional deep cleaning for entire homes with modern equipment.', 1, '2025-08-30 05:00:53', '2025-08-29 23:36:21'),
(31, 'Office Cleaning Service', 'Office Cleaning', 'office-cleaning', '[\"service_4735_2025-08-30.jpg\"]', 'Professional office cleaning for a clean work environment.', 'We offer dusting, sanitization, and deep cleaning for office spaces ensuring a healthy workplace.', 1, '2025-08-30 05:00:53', '2025-08-29 23:36:42'),
(32, 'Window Cleaning Service', 'Window Cleaning', 'window-cleaning', '[\"service_7453_2025-08-30.jpg\"]', 'Glass and window cleaning with shine polish.', 'We use streak-free solutions for sparkling clean windows and glass doors.', 1, '2025-08-30 05:00:53', '2025-08-29 23:37:12'),
(33, 'Kitchen Cleaning Service', 'Kitchen Cleaning', 'kitchen-cleaning', '[\"service_8684_2025-08-30.jpg\"]', 'Deep kitchen cleaning including chimney and tiles.', 'We remove oil stains, grease, and sanitize your entire kitchen for hygiene and safety.', 1, '2025-08-30 05:00:53', '2025-08-29 23:37:29'),
(34, 'saini', 'saini', 'saini', '[\"service_8370_2025-08-31.jpg\"]', 'sainiKitchen Cleaning ServiceKitchen Cleaning ServiceKitchen Cleaning ServiceKitchen Cleaning ServiceKitchen Cleaning ServiceKitchen Cleaning ServiceKitchen Cleaning ServiceKitchen Cleaning ServiceKitchen Cleaning ServiceKitchen Cleaning ServiceKitchen Cleaning Service', 'sani', 1, '2025-08-31 05:16:30', '2025-08-31 05:19:45');

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
('QuxNkHs7oEPPpMR2UUhUNRg0rSkC34g6mTaKnPUN', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiOEV0MzNZTzBTTEM5R1g2UHd5UVc0cXVSbVFzUVFPdldFT09IbmxpViI7czoxMDoic2VydmljZV8zMSI7YjoxO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1OiJhZG1pbiI7czo1OiJhZG1pbiI7czoxMDoic2VydmljZV8yNiI7YjoxO3M6MTA6InNlcnZpY2VfMjUiO2I6MTtzOjY6ImJsb2dfNSI7YjoxO30=', 1758619460);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(400) DEFAULT NULL,
  `email1` varchar(400) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `mobile1` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `short_address` text DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `dark_logo` varchar(255) DEFAULT NULL,
  `light_logo` varchar(255) DEFAULT NULL,
  `company_profile` varchar(255) DEFAULT NULL,
  `template_name` varchar(255) DEFAULT NULL,
  `footer_text` varchar(1000) DEFAULT NULL,
  `google_map_url` varchar(1000) DEFAULT NULL,
  `google_analytics` varchar(1000) DEFAULT NULL,
  `live_chat` varchar(1000) DEFAULT NULL,
  `image_seo_keyword` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `total_google_ratting` varchar(255) DEFAULT NULL,
  `total_google_reviews` varchar(255) DEFAULT NULL,
  `google_review_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `email`, `email1`, `mobile`, `mobile1`, `address`, `short_address`, `whatsapp`, `facebook`, `instagram`, `twitter`, `linkedin`, `youtube`, `favicon`, `dark_logo`, `light_logo`, `company_profile`, `template_name`, `footer_text`, `google_map_url`, `google_analytics`, `live_chat`, `image_seo_keyword`, `title`, `description`, `total_google_ratting`, `total_google_reviews`, `google_review_link`, `created_at`, `updated_at`) VALUES
(1, 'rikki saini', 'rikkisaini4455@gmail.com', 'rikkisaini90@gmail.com', '9389249642', '9389249642', 'Saharanpur | 247231 - Uttar Pradesh , India', 'Saharanpur | 247231 - Uttar Pradesh , India', NULL, 'https://www.facebook.com/rikki.saini.2025', 'https://www.instagram.com/rikki__saini__26/', 'https://x.com/', 'linkedin.com', 'https://www.youtube.com/', 'settings/1758270616_favicon.png', 'settings/1758276206_dark.png', 'settings/1758276162_light.png', 'settings/1758270224_profile.jpg', NULL, 'footer_bass', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50552.04008731722!2d77.51522750025494!3d29.9636270405692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390eea921f841f45%3A0x39baf780903811f!2sSaharanpur%2C%20Uttar%20Pradesh!5e1!3m2!1sen!2sin!4v1758275177551!5m2!1sen!2sin', NULL, 'rikki sain', NULL, 'cleanin', 'Why scrambled text? That\'s exactly the point. By using text that\'s unreadable but maintains the general pattern of regular writing — including normal word length, spacing, and punctuation — designers can focus on the visual elements of a layout without the actual content getting in the way.', NULL, 'https://www.google.com/maps/@30.1344951,77.5170281,3397m/data=!3m1!1e3?entry=ttu&g_ep=EgoyMDI1MDkxNy4wIKXMDSoASAFQAw%3D%3D', 'https://www.google.com/maps/@30.1344951,77.5170281,3397m/data=!3m1!1e3?entry=ttu&g_ep=EgoyMDI1MDkxNy4wIKXMDSoASAFQAw%3D%3D', NULL, '2025-09-19 04:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `slug`, `position`, `content`, `image`, `role`, `facebook`, `instagram`, `twitter`, `whatsapp`, `created_at`, `updated_at`) VALUES
(1, 'ariyain', 'ariyain', 'php developer', 'Why scrambled text? That\'s exactly the point. By using text that\'s unreadable but maintains the general pattern of regular writing — including normal word length, spacing, and punctuation — designers can focus on the visual elements of a layout without the actual content getting in the way. The pseudo-Latin appearance gives it a natural feel while ensuring it won\'t distract from the design itself.', 'team_1945_2025-09-07.jpg', 'bca', 'https://www.facebook.com/rikki.saini.2025', 'https://www.instagram.com/rikki__saini__26/', 'https://x.com/', 'https://web.whatsapp.com/', '2025-09-07 03:43:06', '2025-09-07 03:43:06'),
(2, 'Ritik Saini', 'RItik', 'opop', 'Why scrambled text? That\'s exactly the point. By using text that\'s unreadable but maintains the general pattern of regular writing — including normal word length, spacing, and punctuation — designers can focus on the visual elements of a layout without the actual content getting in the way. The pseudo-Latin appearance gives it a natural feel while ensuring it won\'t distract from the design itself.', 'team_1928_2025-09-07.jpg', 'njen', 'https://www.facebook.com/rikki.saini.2025', 'https://www.instagram.com/rikki__saini__26/', 'https://x.com/', 'https://web.whatsapp.com/', '2025-09-07 03:45:30', '2025-09-07 03:45:30'),
(3, 'rikki', 'som', 'ssss', 'Why scrambled text? That\'s exactly the point. By using text that\'s unreadable but maintains the general pattern of regular writing — including normal word length, spacing, and punctuation — designers can focus on the visual elements of a layout without the actual content getting in the way. The pseudo-Latin appearance gives it a natural feel while ensuring it won\'t distract from the design itself.', 'team_1256_2025-09-07.jpg', 'njen', 'https://www.facebook.com/rikki.saini.2025', 'https://www.instagram.com/rikki__saini__26/', 'https://x.com/', 'https://web.whatsapp.com/', '2025-09-07 03:46:07', '2025-09-07 03:46:07'),
(6, 'ko', 'ko', 'ko', 'Why scrambled text? That\'s exactly the point. By using text that\'s unreadable but maintains the general pattern of regular writing — including normal word length, spacing, and punctuation — designers can focus on the visual elements of a layout without the actual content getting in the way. The pseudo-Latin appearance gives it a natural feel while ensuring it won\'t distract from the design itself.', 'team_4145_2025-09-07.jpg', 'nedjknqkjdnqwejk', 'https://www.facebook.com/rikki.saini.2025', 'https://www.instagram.com/rikki__saini__26/', 'https://x.com/', 'https://web.whatsapp.com/', '2025-09-07 03:50:46', '2025-09-07 03:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `testimonial` longtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1:Enable, 0:Disable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `company`, `position`, `image`, `rating`, `testimonial`, `status`, `created_at`, `updated_at`) VALUES
(4, 'rikki', 'sssssssssss', 'ssss', '\"testimonial_1756806309.jpg\"', '3', 'bbbbbbbbbbbb', 1, '2025-09-02 04:15:09', '2025-09-20 04:53:05'),
(5, 'ritik', 'web', 'php developer', '\"testimonial_1756806499.jpg\"', '5', 'this is a bok and this a bij and eyjmio dokqwiowsd w', 1, '2025-09-02 04:18:19', '2025-09-02 04:18:19'),
(6, 'kamal saini', 'tant', 'house', '\"testimonial_1758363838.jpg\"', '5', 'thsi is a kamal saini.', 1, '2025-09-02 04:23:23', '2025-09-20 04:53:58'),
(7, 'ritik', 'web', 'php developer', '\"testimonial_1756807106.jpg\"', '3.5', '<div class=\"flex justify-center gap-2\">\r\n    {{-- Edit Button --}}\r\n    <a href=\"{{ route(\'testimonials.edit\', $item->id) }}\" class=\"text-blue-600\">\r\n        <i data-lucide=\"check-square\" class=\"w-4 h-4\"></i> Edit\r\n    </a>\r\n\r\n    {{-- Delete Button --}}\r\n    <form action=\"{{ route(\'testimonials.destroy\', $item->id) }}\" method=\"POST\" onsubmit=\"return confirm(\'Are you sure?\')\" style=\"display:inline;\">\r\n        @csrf\r\n        @method(\'DELETE\')\r\n        <button type=\"submit\" class=\"text-red-600\">\r\n            <i data-lucide=\"trash\" class=\"w-4 h-4\"></i> Delete\r\n        </button>\r\n    </form>\r\n</div>', 0, '2025-09-02 04:28:26', '2025-09-02 04:28:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(3000) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_galleries`
--

INSERT INTO `video_galleries` (`id`, `title`, `description`, `video_url`, `image`, `status`, `created_at`, `updated_at`) VALUES
(11, 'two', 'Why scrambled text? That\'s exactly the point. By using text that\'s unreadable but maintains the general pattern of regular writing — including normal word length, spacing, and punctuation — designers can focus on the visual elements of a layout without the actual content getting in the way. The pseudo-Latin appearance gives it a natural feel while ensuring it won\'t distract from the design itself.', 'https://www.youtube.com/watch?v=fO94zt1Tb88', 'image_1303_20250917125603.jpg', 1, '2025-09-17 07:26:03', '2025-09-17 07:26:03'),
(12, 'vivak', 'Why scrambled text? That\'s exactly the point. By using text that\'s unreadable but maintains the general pattern of regular writing — including normal word length, spacing, and punctuation — designers can focus on the visual elements of a layout without the actu', 'https://www.youtube.com/watch?v=fO94zt1Tb88', 'image_1527_20250920101931.jpg', 0, '2025-09-18 01:34:54', '2025-09-20 04:49:31'),
(15, 'ariyain', 'm dedn,dddddddddd', 'https://www.youtube.com/', 'image_8352_20250920101754.jpg', 0, '2025-09-20 01:32:17', '2025-09-20 04:47:54'),
(16, 'sourave', 'Why scrambled text? That\'s exactly the point. By using text that\'s unreadable but maintains the general pattern of regular writing — including normal word length, spacing, and punctuation — designers can focus on the visual elements of a layout without the actual content getting in the way. The pseudo-Latin appearance gives it a natural feel while ensuring it won\'t distract from the design itself.', 'https://www.youtube.com/watch?v=fO94zt1Tb88', 'image_7735_20250920101950.jpg', 1, '2025-09-20 04:47:26', '2025-09-20 04:49:50'),
(17, 'guddu', 'Why scrambled text? That\'s exactly the point. By using text that\'s unreadable but maintains the general pattern of regular writing — including normal word length, spacing, and punctuation — designers can focus on the visual elements of a layout without the actual content getting in the way. The pseudo-Latin appearance gives it a natural feel while ensuring it won\'t distract from the design itself.', 'https://www.youtube.com/watch?v=fO94zt1Tb88', 'image_7316_20250920101912.jpg', 1, '2025-09-20 04:49:12', '2025-09-20 04:49:12');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blog_id` bigint(20) UNSIGNED DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `service_id`, `blog_id`, `count`, `created_at`, `updated_at`) VALUES
(1, 35, NULL, 3, NULL, '2025-09-18 02:28:57'),
(2, NULL, 8, 4, NULL, '2025-09-09 02:50:00'),
(3, 34, NULL, 9, NULL, '2025-09-19 04:10:45'),
(4, 28, NULL, 7, NULL, '2025-09-19 02:00:37'),
(5, 30, NULL, 4, NULL, '2025-09-18 03:53:41'),
(6, NULL, 9, 1, NULL, '2025-09-07 05:13:34'),
(7, 25, NULL, 4, NULL, '2025-09-23 00:54:28'),
(8, 26, NULL, 4, NULL, '2025-09-23 00:54:03'),
(9, NULL, 7, 1, NULL, '2025-09-08 05:21:31'),
(10, NULL, 1, 4, NULL, '2025-09-20 06:26:47'),
(11, NULL, 5, 4, NULL, '2025-09-23 00:54:58'),
(12, NULL, 6, 3, NULL, '2025-09-19 04:13:04'),
(13, NULL, 4, 1, NULL, '2025-09-18 02:42:55'),
(14, 27, NULL, 1, NULL, '2025-09-19 04:12:13'),
(15, 31, NULL, 2, NULL, '2025-09-23 00:32:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banners_slug_unique` (`slug`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

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
-- Indexes for table `image_galleries`
--
ALTER TABLE `image_galleries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image_galleries_slug_unique` (`slug`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_slug_unique` (`slug`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_slug_unique` (`slug`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_galleries`
--
ALTER TABLE `image_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
