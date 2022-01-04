-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 01, 2022 at 03:44 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elsayadw_abraj`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci,
  `title_en` longtext COLLATE utf8mb4_unicode_ci,
  `title_ar` longtext COLLATE utf8mb4_unicode_ci,
  `content_ar` longtext COLLATE utf8mb4_unicode_ci,
  `content_en` longtext COLLATE utf8mb4_unicode_ci,
  `start_at` date DEFAULT NULL,
  `end_at` date DEFAULT NULL,
  `photo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `link`, `title_en`, `title_ar`, `content_ar`, `content_en`, `start_at`, `end_at`, `photo`, `created_at`, `updated_at`) VALUES
(1, NULL, 'About the crown center for cupping', 'عن مركز  التاج للحجامه', 'لدينا في مركز أبراج التاج نخبة من الأطباء وطبيبات والاخصائيين ذوي الكفاءة العالية والخبرة الممتازة في مجال التشخيص والعلاج بالحجامة \r\nحيث نقوم بداية بعمل تشخيص مبدأى للمريض ثم يحدد الطبيبة او الطبيبة المختصة نوعية وأماكن الحجامة بحيث تحقق العلاج المثالي باذن الله', 'We at the Crown Towers Center have a group of highly qualified doctors and specialists with excellent experience in the field of diagnosis and cupping therapy.\r\nWhere we first make a preliminary diagnosis for the patient and then the specialist doctor determines the quality and locations of cupping so that it achieves the ideal treatment, God willing', NULL, NULL, 'about/mhrZ3L9snTbST2PD5E1QEgGuVh1YmmVf8R9JmnIy.png', '2020-12-05 02:46:12', '2020-12-07 19:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@test.com', '$2y$10$5LBYxzY5.OrTqmekq9q7BOUCQJYJJEiDCdi6KCW1S5lY3G/qHv2CW', NULL, '2020-12-04 03:39:56', '2020-12-04 03:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `footer` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `status_comment` enum('pen','approve','unacceptable','delete') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child` int(10) UNSIGNED DEFAULT NULL,
  `parent` int(10) UNSIGNED DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `commentable_id` int(10) UNSIGNED DEFAULT NULL,
  `commentable_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `dep_name_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dep_name_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `icon` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `parent` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dep_name_ar`, `dep_name_en`, `description_ar`, `description_en`, `icon`, `link`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'Wanda Bray', 'dep_name_en', 'Minus error in non f', 'Fugit architecto en', 'departments/tEPwjSBSg8hhYg7Z3bpnyBr34brxBsb8uuQBykWP.jpeg', 'https://www.youtube.com/watch?v=DxfFeNqgrHU', NULL, '2020-12-04 03:44:38', '2020-12-07 20:32:08'),
(2, 'Portia Casey', 'Francis Barr', 'Doloremque anim ex t', 'Tempora sed maiores', 'departments/YnAR59ke2RZT36KdreqTZcI8u9dllIsn9ozIuR1T.jpeg', 'https://www.youtube.com/watch?v=DxfFeNqgrHU', NULL, '2020-12-04 03:46:57', '2020-12-07 20:33:31'),
(3, 'Sandra Maynard', 'dep_name_en', 'Culpa Nam placeat v', NULL, 'departments/eOLEfwxeZSWVIiJ4HsVfJimafet0Q1rJ5Zp6nGDQ.jpeg', 'https://www.youtube.com/watch?v=DxfFeNqgrHU', NULL, '2020-12-05 01:03:12', '2020-12-07 20:32:27'),
(4, 'Kitra Barnes', 'Kirby Espinoza', 'Quia dolore omnis fu', 'Sed fugiat aliquip', 'departments/1NW28huF6rcpHzrzjxM0GS8dBn5lqueVXs57z3Xp.jpeg', 'https://www.youtube.com/watch?v=DxfFeNqgrHU', NULL, '2020-12-05 01:08:24', '2020-12-07 20:35:13'),
(5, 'Otto Webb', 'dep_name_en', 'In amet veniam ull', NULL, 'departments/q7OnM40jYpS2KICTkOyiWeRIT3bMREc7PP46JsAq.png', 'https://www.youtube.com/watch?v=DxfFeNqgrHU', NULL, '2020-12-05 01:09:42', '2020-12-07 20:34:15'),
(6, 'Alvin Leonard', 'dep_name_en', 'Quos obcaecati ut ve', NULL, 'departments/gzwJ4VUXAsO76tcC2QMmYKnWaKJIJoLdjSQ6f80S.jpeg', 'https://www.youtube.com/watch?v=DxfFeNqgrHU', NULL, '2020-12-05 01:10:34', '2020-12-07 20:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `file`, `path`, `full_file`, `mime_type`, `file_type`, `relation_id`, `created_at`, `updated_at`) VALUES
(1, '2.jpg', '61626', '1QjZXUMhNaE3n9sBZaI7q3BypH4m3aPKkzcfZRRj.jpeg', 'products/1', 'products/1/1QjZXUMhNaE3n9sBZaI7q3BypH4m3aPKkzcfZRRj.jpeg', 'image/jpeg', 'product', 1, '2020-12-04 04:48:09', '2020-12-04 04:48:09'),
(2, '1.jpg', '29859', 'XRDXXOcTAVBf17Pp11FOeq6Y3sDb8O5apB8naaFa.jpeg', 'products/1', 'products/1/XRDXXOcTAVBf17Pp11FOeq6Y3sDb8O5apB8naaFa.jpeg', 'image/jpeg', 'product', 1, '2020-12-04 04:48:09', '2020-12-04 04:48:09'),
(3, '3.jpg', '63362', 'pIHAHsgUCda8V9DOsN0DOhFLdehXMGIca8qEDOPy.jpeg', 'products/1', 'products/1/pIHAHsgUCda8V9DOsN0DOhFLdehXMGIca8qEDOPy.jpeg', 'image/jpeg', 'product', 1, '2020-12-04 04:48:10', '2020-12-04 04:48:10'),
(4, '4.jpg', '33422', 'tyBDA24WrgifuumExbZdfMD11oFKp4h0Fhj9YfJf.jpeg', 'products/1', 'products/1/tyBDA24WrgifuumExbZdfMD11oFKp4h0Fhj9YfJf.jpeg', 'image/jpeg', 'product', 1, '2020-12-04 04:48:10', '2020-12-04 04:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `frontends`
--

CREATE TABLE `frontends` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `icon` text COLLATE utf8mb4_unicode_ci,
  `img_larg` text COLLATE utf8mb4_unicode_ci,
  `img_insid` text COLLATE utf8mb4_unicode_ci,
  `section_three_img_one` text COLLATE utf8mb4_unicode_ci,
  `section_three_img_two` text COLLATE utf8mb4_unicode_ci,
  `section_three_img_three` text COLLATE utf8mb4_unicode_ci,
  `section_tow_img_one` text COLLATE utf8mb4_unicode_ci,
  `section_tow_img_two` text COLLATE utf8mb4_unicode_ci,
  `section_footer_about_ar` longtext COLLATE utf8mb4_unicode_ci,
  `section_footer_about_en` longtext COLLATE utf8mb4_unicode_ci,
  `section_footer_img_about` text COLLATE utf8mb4_unicode_ci,
  `section_footer_img_payment_methods` text COLLATE utf8mb4_unicode_ci,
  `section_footer_address_ar` text COLLATE utf8mb4_unicode_ci,
  `section_footer_address_en` text COLLATE utf8mb4_unicode_ci,
  `section_footer_phone` text COLLATE utf8mb4_unicode_ci,
  `section_footer_email` text COLLATE utf8mb4_unicode_ci,
  `section_footer_sen_message` text COLLATE utf8mb4_unicode_ci,
  `section_footer_sen_email` text COLLATE utf8mb4_unicode_ci,
  `section_footer_payment_methods` text COLLATE utf8mb4_unicode_ci,
  `facebook` text COLLATE utf8mb4_unicode_ci,
  `twitter` text COLLATE utf8mb4_unicode_ci,
  `instagram` text COLLATE utf8mb4_unicode_ci,
  `gmail` text COLLATE utf8mb4_unicode_ci,
  `section_footer_contact_us_title_ar` text COLLATE utf8mb4_unicode_ci,
  `section_footer_contact_us_title_en` text COLLATE utf8mb4_unicode_ci,
  `section_footer_contact_us_content_ar` text COLLATE utf8mb4_unicode_ci,
  `section_footer_contact_us_content_en` text COLLATE utf8mb4_unicode_ci,
  `section_footer_part_two_title_ar` text COLLATE utf8mb4_unicode_ci,
  `section_footer_part_two_title_en` text COLLATE utf8mb4_unicode_ci,
  `section_footer_part_two_content_ar` text COLLATE utf8mb4_unicode_ci,
  `section_footer_part_two_content_en` text COLLATE utf8mb4_unicode_ci,
  `section_footer_part_three_title_ar` text COLLATE utf8mb4_unicode_ci,
  `section_footer_part_three_title_en` text COLLATE utf8mb4_unicode_ci,
  `section_footer_part_three_content_ar` text COLLATE utf8mb4_unicode_ci,
  `section_footer_part_three_content_en` text COLLATE utf8mb4_unicode_ci,
  `section_footer_payment_methods_title_ar` text COLLATE utf8mb4_unicode_ci,
  `section_footer_payment_methods_title_en` text COLLATE utf8mb4_unicode_ci,
  `section_footer_payment_methods_content_ar` text COLLATE utf8mb4_unicode_ci,
  `section_footer_payment_methods_content_en` text COLLATE utf8mb4_unicode_ci,
  `section_two_part_one_icon` text COLLATE utf8mb4_unicode_ci,
  `section_two_part_one_photo` text COLLATE utf8mb4_unicode_ci,
  `section_two_part_one_title_ar` text COLLATE utf8mb4_unicode_ci,
  `section_two_part_one_title_en` text COLLATE utf8mb4_unicode_ci,
  `section_two_part_one_content_ar` longtext COLLATE utf8mb4_unicode_ci,
  `section_two_part_one_content_en` longtext COLLATE utf8mb4_unicode_ci,
  `section_two_part_two_icon` text COLLATE utf8mb4_unicode_ci,
  `section_two_part_two_photo` text COLLATE utf8mb4_unicode_ci,
  `section_two_part_two_title_ar` text COLLATE utf8mb4_unicode_ci,
  `section_two_part_two_title_en` text COLLATE utf8mb4_unicode_ci,
  `section_two_part_two_content_ar` longtext COLLATE utf8mb4_unicode_ci,
  `section_two_part_two_content_en` longtext COLLATE utf8mb4_unicode_ci,
  `section_two_part_three_icon` text COLLATE utf8mb4_unicode_ci,
  `section_two_part_three_photo` text COLLATE utf8mb4_unicode_ci,
  `section_two_part_three_title_ar` text COLLATE utf8mb4_unicode_ci,
  `section_two_part_three_title_en` text COLLATE utf8mb4_unicode_ci,
  `section_two_part_three_content_ar` longtext COLLATE utf8mb4_unicode_ci,
  `section_two_part_three_content_en` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontends`
--

INSERT INTO `frontends` (`id`, `logo`, `icon`, `img_larg`, `img_insid`, `section_three_img_one`, `section_three_img_two`, `section_three_img_three`, `section_tow_img_one`, `section_tow_img_two`, `section_footer_about_ar`, `section_footer_about_en`, `section_footer_img_about`, `section_footer_img_payment_methods`, `section_footer_address_ar`, `section_footer_address_en`, `section_footer_phone`, `section_footer_email`, `section_footer_sen_message`, `section_footer_sen_email`, `section_footer_payment_methods`, `facebook`, `twitter`, `instagram`, `gmail`, `section_footer_contact_us_title_ar`, `section_footer_contact_us_title_en`, `section_footer_contact_us_content_ar`, `section_footer_contact_us_content_en`, `section_footer_part_two_title_ar`, `section_footer_part_two_title_en`, `section_footer_part_two_content_ar`, `section_footer_part_two_content_en`, `section_footer_part_three_title_ar`, `section_footer_part_three_title_en`, `section_footer_part_three_content_ar`, `section_footer_part_three_content_en`, `section_footer_payment_methods_title_ar`, `section_footer_payment_methods_title_en`, `section_footer_payment_methods_content_ar`, `section_footer_payment_methods_content_en`, `section_two_part_one_icon`, `section_two_part_one_photo`, `section_two_part_one_title_ar`, `section_two_part_one_title_en`, `section_two_part_one_content_ar`, `section_two_part_one_content_en`, `section_two_part_two_icon`, `section_two_part_two_photo`, `section_two_part_two_title_ar`, `section_two_part_two_title_en`, `section_two_part_two_content_ar`, `section_two_part_two_content_en`, `section_two_part_three_icon`, `section_two_part_three_photo`, `section_two_part_three_title_ar`, `section_two_part_three_title_en`, `section_two_part_three_content_ar`, `section_two_part_three_content_en`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'مركز ابراج التاج للحاجامه بدون الم  بالمملكه العربيه السعوديه', 'Abraj Al-Taj Center for Hajjama without pain in Saudi Arabia', 'frontends/nE3y9zPF2cWccp5vLyXRcXSMocFF9a9s850HQIzG.jpeg', 'frontends/qcpRMJUOkyp3yTn5GeBDOZ9uN6BMTKDR2BEe9wEw.png', NULL, NULL, '+966597310739', NULL, NULL, 'https://www.snapchat.com/add/abraj-altaj', 'frontends/KbF9IpwJDzR92isd8Wq8WyvZ6GasJQTEug58jnJD.jpeg', 'https://www.facebook.com/profile.php?id=100058564283645', 'https://twitter.com/blNbld5Se0T8Uvf?s=12', 'https://www.instagram.com/abraj.altaj/?igshid=1qrp8hbyskjog', 'https://www.youtube.com/channel/UCxYcLOroIiLJq7-vsilObpQ', 'للاتصال على الرقام التالى', 'To contact the following number', '+966597310739', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-08 02:49:22');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_02_11_211915_create_admins_table', 1),
(4, '2020_02_26_112449_create_settings_table', 1),
(5, '2020_02_27_190156_create_files_table', 1),
(6, '2020_03_02_124916_create_departments_table', 1),
(7, '2020_03_02_124916_create_sliders_table', 1),
(8, '2221_03_02_1249229_create_products_table', 1),
(9, '3221_03_02_124916_create_news_table', 1),
(10, '3222_03_02_124916_create_abouts_table', 1),
(11, '420_03_02_124916_create_frontends_table', 1),
(12, '9920_07_01_151339_create_comments_table', 1),
(13, '99222_03_02_124916_create_offers_table', 1),
(14, '99222_03_02_124916_create_questions_table', 1),
(15, '9999_07_01_151349_create_socialproviders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci,
  `title_en` longtext COLLATE utf8mb4_unicode_ci,
  `title_ar` longtext COLLATE utf8mb4_unicode_ci,
  `content_ar` longtext COLLATE utf8mb4_unicode_ci,
  `content_en` longtext COLLATE utf8mb4_unicode_ci,
  `start_at` date DEFAULT NULL,
  `end_at` date DEFAULT NULL,
  `photo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` longtext COLLATE utf8mb4_unicode_ci,
  `title_ar` longtext COLLATE utf8mb4_unicode_ci,
  `content_ar` longtext COLLATE utf8mb4_unicode_ci,
  `content_en` longtext COLLATE utf8mb4_unicode_ci,
  `link` longtext COLLATE utf8mb4_unicode_ci,
  `start_at` date DEFAULT NULL,
  `end_at` date DEFAULT NULL,
  `photo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title_en`, `title_ar`, `content_ar`, `content_en`, `link`, `start_at`, `end_at`, `photo`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'يمكنكم متابعة صفحاتنا على سناب شات وتويتر والفيس بوك وحالات الواتس لمعرفة العروض باستمرار \r\n\r\n\r\n\r\nللتواصل : +966597310739', 'You can follow our pages on Snapchat, Twitter, Facebook and WhatsApp status to see the offers constantly\r\n\r\n\r\n\r\nFor contact: +966597310739', NULL, NULL, NULL, 'offers/AduM2PPY9Ng86Ydqxc1vu1w7KZ8ZkQrf13PX6cYa.jpeg', '2020-12-05 03:07:39', '2020-12-07 21:49:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name_ar` text COLLATE utf8mb4_unicode_ci,
  `product_name_en` text COLLATE utf8mb4_unicode_ci,
  `description_ar` longtext COLLATE utf8mb4_unicode_ci,
  `description_en` longtext COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `add_by_ar` text COLLATE utf8mb4_unicode_ci,
  `add_by_en` text COLLATE utf8mb4_unicode_ci,
  `add_by_photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` text COLLATE utf8mb4_unicode_ci,
  `price_old` decimal(5,2) NOT NULL DEFAULT '0.00',
  `department_id` int(10) UNSIGNED DEFAULT NULL,
  `price` decimal(5,2) NOT NULL DEFAULT '0.00',
  `stock` int(11) NOT NULL DEFAULT '0',
  `start_at` date DEFAULT NULL,
  `end_at` date DEFAULT NULL,
  `start_offer_at` date DEFAULT NULL,
  `end_offer_at` date DEFAULT NULL,
  `price_offer` decimal(5,2) NOT NULL DEFAULT '0.00',
  `other_data` longtext COLLATE utf8mb4_unicode_ci,
  `other_color` longtext COLLATE utf8mb4_unicode_ci,
  `weight` text COLLATE utf8mb4_unicode_ci,
  `status` enum('pending','refused','active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `reason` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name_ar`, `product_name_en`, `description_ar`, `description_en`, `photo`, `add_by_ar`, `add_by_en`, `add_by_photo`, `discount`, `price_old`, `department_id`, `price`, `stock`, `start_at`, `end_at`, `start_offer_at`, `end_offer_at`, `price_offer`, `other_data`, `other_color`, `weight`, `status`, `reason`, `created_at`, `updated_at`) VALUES
(1, 'Charlotte Roberson', 'Deborah Lindsay', 'Id in elit nihil c', 'Voluptatibus et adip', 'products/1/main_image/ld8moDso2PFPKjXCOfEYnONGth3UXBKaNigcwRe6.jpeg', NULL, NULL, NULL, NULL, 0.00, NULL, 0.00, 0, NULL, NULL, NULL, NULL, 0.00, NULL, NULL, NULL, 'pending', NULL, '2020-12-04 04:21:08', '2020-12-04 04:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` longtext COLLATE utf8mb4_unicode_ci,
  `title_ar` longtext COLLATE utf8mb4_unicode_ci,
  `content_ar` longtext COLLATE utf8mb4_unicode_ci,
  `content_en` longtext COLLATE utf8mb4_unicode_ci,
  `link` longtext COLLATE utf8mb4_unicode_ci,
  `start_at` date DEFAULT NULL,
  `end_at` date DEFAULT NULL,
  `photo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title_en`, `title_ar`, `content_ar`, `content_en`, `link`, `start_at`, `end_at`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'What is cupping and how do we do it?', 'ما هي الحجامة وكيف نقوم بها', 'الْحِجَامَةُ : مَأْخُوذَةٌ مِنْ الْحَجْمِ أَيْ الْمَصِّ . يُقَالُ : حَجَمَ الصَّبِيُّ ثَدْيَ أُمِّهِ إذَا مَصَّهُ . وَالْحَجَّامُ الْمَصَّاصُ , وَالْحِجَامَةُ صِنَاعَتُهُ وَالْمِحْجَمُ يُطْلَقُ عَلَى الآلَةِ الَّتِي يُجْمَعُ فِيهَا الدَّمُ وَعَلَى مِشْرَطِ الْحَجَّامِ \r\nويعمل الشفط الناتج عن هذا الإجراء، على سحب الجلد لمسافة جزئية داخل الكوب. وربما يتم ترك الكوب في موضعه لدقائق عدة ثم رفعه، مخلّفًا وراءه كدمة دائرية لونها أحمر فاتح. وعند إجراء الحجامة الرطبة، يتمّ وخز الجلد بإبرة قبل وضع الكوب عليه.', 'Cupping: taken from the volume, i.e. sucking. It is said: A boy will have the size of his mother\'s breast when he sucks it. And the suction cup, and cupping is its work, and the volume is given to the device in which the blood and the blood are collected.', 'https://www.youtube.com/watch?v=8ZTeFyVs3zk', NULL, NULL, 'questions/r3n2Q2pfpJjXfqANXBrrSITtOPOI3h4FYVrvVm95.jpeg', '2020-12-05 02:12:17', '2020-12-07 19:04:25'),
(2, 'What are the benefits of cupping', 'ما هي فوائد الحجامة', 'للحجامة فوائد ملموسة في علاج كثير من الأمراض في الماضي والحاضر ، ومن هذه الأمراض التي جربت فيها الحجامة فنفعت بإذن الله ما يلي :\r\n1- أمراض الدورة الدموية .\r\n2- علاج ضغط الدم ، والتهاب عضلة القلب .\r\n3- أمراض الصدر والقصبة الهوائية .\r\n4- صداع الرأس والعيون .\r\n5- آلام الرقبة والبطن ، وآلام الروماتيزم في العضلات .\r\n6- بعض أمراض القلب والصدر وآلام المفاصل.', 'Cupping has tangible benefits in treating many diseases in the past and present, and among these diseases in which cupping has been tried, and God willing, the following have benefited:\r\n1- Circulatory diseases.\r\n2- Treating blood pressure and myocarditis.\r\n3- Chest and tracheal diseases.\r\n4- Headache and eyes.\r\n5- Neck and abdominal pain, and rheumatic pain in the muscles.\r\n6- Some heart and chest diseases and joint pain.', NULL, NULL, NULL, 'questions/bqmxZuaWJQ4ZCCszrNkVdjsvDi14JJqxocYruxmu.jpeg', '2020-12-05 02:22:56', '2020-12-07 19:05:11'),
(3, 'Do you do a female cupping', 'هل تقومون بعمل حجامه نسائية', 'نعم لدينا كادر نسائي كامل وعلى كفاءة عالية لعمل الحجامة النسائية', 'Yes, we have a full and highly qualified female cadre to do female cupping', NULL, NULL, NULL, 'questions/EnVjNAIYaEv55ZVCRXPVvXGRFAsKHhxC7k5KmxfJ.jpeg', '2020-12-05 02:25:50', '2020-12-07 19:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `sitename_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sitename_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_maintenance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_maintenance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ar',
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `keywords` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('open','close') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `message_maintenance` longtext COLLATE utf8mb4_unicode_ci,
  `bg_main_dark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_main_dark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `font_main` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_two_dark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_two_dark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `font_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_three_dark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_three_dark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `font_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_main_light` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_main_light` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_two_light` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_two_light` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_three_light` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_three_light` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_icon_light` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_icon_dark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alert_success` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alert_error` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `font` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `font_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_btn_show_modal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `padding_btn_show_modal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_none` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_block` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_footer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_nav` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_sid_prent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_sid_bar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_small_box` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_stat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_title_home` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_fa_angle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_icon_sid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_img_maintenance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_bg_maintenance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_message_maintenance` longtext COLLATE utf8mb4_unicode_ci,
  `d_type_user_sid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_type_user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_type_d_pep` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_img_icon_top_sidbar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_type_product_sid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_type_product` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_my_tools` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_btn_refresh_sid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_btn_home_sid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sitename_ar`, `sitename_en`, `logo`, `icon`, `img_maintenance`, `bg_maintenance`, `email`, `main_lang`, `description`, `keywords`, `status`, `message_maintenance`, `bg_main_dark`, `color_main_dark`, `font_main`, `bg_two_dark`, `color_two_dark`, `font_two`, `bg_three_dark`, `color_three_dark`, `font_three`, `bg_main_light`, `color_main_light`, `bg_two_light`, `color_two_light`, `bg_three_light`, `color_three_light`, `color_icon_light`, `color_icon_dark`, `alert_success`, `alert_error`, `theme`, `background`, `font`, `font_size`, `color`, `d_btn_show_modal`, `padding_btn_show_modal`, `style_file`, `d_none`, `d_block`, `d_footer`, `d_nav`, `d_sid_prent`, `d_sid_bar`, `d_small_box`, `d_stat`, `d_title_home`, `d_logo`, `d_fa_angle`, `d_icon_sid`, `d_icon`, `d_img_maintenance`, `d_bg_maintenance`, `d_message_maintenance`, `d_type_user_sid`, `d_type_user`, `d_type_d_pep`, `d_img_icon_top_sidbar`, `d_type_product_sid`, `d_type_product`, `d_my_tools`, `d_btn_refresh_sid`, `d_btn_home_sid`, `created_at`, `updated_at`) VALUES
(1, 'مركز ابراج التاج للحاجامه', 'مركز ابراج التاج للحاجامه', 'settings/aX1SxkZHmlSzg8mHLZkscaUXgyco6HOSGgTTUBo3.jpeg', 'settings/zIKkAuAuVFWKlbPvQqUcnPsd9ct6nnq389kVniCb.jpeg', 'settings/0cSYeEVija5likMpszfGgeuJtvMD5wfEQY066rGm.png', 'settings/PzgAcRh38nZYwoYgANRuLXZMys4iqZdG6JXKBSMb.png', 'email@email.com', 'ar', 'description', 'keywords', 'open', 'message_maintenance', '#000000', '#000000', NULL, '#000000', '#000000', NULL, NULL, '#000000', NULL, '#000000', '#000000', '#000000', '#000000', '#000000', '#000000', '#000000', '#000000', 'modal', 'alert', 'dark', NULL, NULL, NULL, NULL, 'd-block', NULL, NULL, 'd-block', 'd-block', 'd-block', 'd-block', 'd-block', 'd-block', 'd-block', 'd-block', 'd-block', 'display:block!important', 'd-block', NULL, NULL, 'd-block', 'd-block', 'd-block', 'd-block', 'd-block', 'show_tow', 'd-block', 'd-block', 'd-block', 'd-block', 'd-block', 'd-block', '2020-12-04 03:39:57', '2020-12-04 11:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text3_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text3_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `link`, `head_en`, `head_ar`, `title_en`, `title_ar`, `text1_ar`, `text1_en`, `text2_ar`, `text2_en`, `text3_ar`, `text3_en`, `photo`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sliders/mLV1YJQGRxbNr1LyYHvQZ0xYV8UtcUmxjLDZ2MPK.png', '2020-12-04 03:42:44', '2020-12-08 19:43:02'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sliders/tgiZpSCiOZ1vePrxw6H0tFmMpOUb3acSjilc6fHT.png', '2020-12-04 12:54:13', '2020-12-04 12:54:13'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sliders/E2iTq71cWJjIwpj4AKccGHDuuKxwH3Nfq3OXulBw.png', '2020-12-04 12:54:39', '2020-12-04 12:54:56'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sliders/FKaPw13OA6mmsdfLdUxfyhkVONsaFdEpiKP9YlsC.png', '2020-12-04 12:55:31', '2020-12-04 12:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `socialproviders`
--

CREATE TABLE `socialproviders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` enum('user','vendor','company','labor_Office','corporation','store') COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_product_id_foreign` (`product_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_child_foreign` (`child`),
  ADD KEY `comments_parent_foreign` (`parent`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_parent_foreign` (`parent`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontends`
--
ALTER TABLE `frontends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_department_id_foreign` (`department_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialproviders`
--
ALTER TABLE `socialproviders`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `frontends`
--
ALTER TABLE `frontends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `socialproviders`
--
ALTER TABLE `socialproviders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_child_foreign` FOREIGN KEY (`child`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_parent_foreign` FOREIGN KEY (`parent`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_parent_foreign` FOREIGN KEY (`parent`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
