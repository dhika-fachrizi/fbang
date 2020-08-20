-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 02:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `about_id` int(11) NOT NULL,
  `about_image` varchar(100) DEFAULT NULL,
  `about_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_image`, `about_description`) VALUES
(1, 'about.jpg', 'MBLOG adalah Open Source Source Code untuk personal blog.<br><br>Full responsive dan terlihat memukau pada desktop, tablet, atau perangkat selular apapun.<br><br>Dibangun dengan framework PHP Codeigniter dengan mengikuti standard desain patern MVC, sehingga mudah dikembangkan lebeih lanjut oleh web developer manapun. <br><br>Anda dapat memiliki blog pribadi idaman Anda menggunakan source code ini sekarang juga.<br><br>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_additional`
--

CREATE TABLE `tbl_additional` (
  `additional_id` int(11) NOT NULL,
  `additional_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_additional`
--

INSERT INTO `tbl_additional` (`additional_id`, `additional_name`) VALUES
(1, 'Wifi'),
(2, 'Smooking Room');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_availability`
--

CREATE TABLE `tbl_availability` (
  `availability_id` int(11) NOT NULL,
  `availability_name` varchar(20) NOT NULL,
  `availability_img` varchar(200) NOT NULL,
  `availability_created_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_availability`
--

INSERT INTO `tbl_availability` (`availability_id`, `availability_name`, `availability_img`, `availability_created_at`) VALUES
(1, 'gofood', '', 2147483647),
(2, 'grabfood', '', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) DEFAULT NULL,
  `category_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_slug`) VALUES
(1, 'Indonesian', 'indonesian'),
(2, 'Western', 'western'),
(3, 'Asian', 'asian'),
(4, 'Fusion', 'fusion');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `city_name`) VALUES
(1, 'Jakarata'),
(2, 'Tangerang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `comment_date` timestamp NULL DEFAULT current_timestamp(),
  `comment_name` varchar(60) DEFAULT NULL,
  `comment_email` varchar(90) DEFAULT NULL,
  `comment_message` text DEFAULT NULL,
  `comment_status` int(11) DEFAULT 0,
  `comment_parent` int(11) DEFAULT 0,
  `comment_post_id` int(11) DEFAULT NULL,
  `comment_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `comment_date`, `comment_name`, `comment_email`, `comment_message`, `comment_status`, `comment_parent`, `comment_post_id`, `comment_image`) VALUES
(1, '2019-04-07 03:15:05', 'Joko', 'joko@gmail.com', 'Nice Post, thanks', 1, 0, 6, 'user_blank.png'),
(2, '2019-04-12 04:22:34', 'M Fikri', 'fikrifiver97@gmail.com', 'Thank you.<br>', 1, 1, 6, 'fcee14ca639c3ca3c5b93b7c7fc70ba2.png'),
(3, '2019-12-28 07:52:42', 'Name', 'mfikri@gmail.com', 'Nice Post', 1, 0, 2, 'user_blank.png'),
(4, '2019-12-28 08:00:22', 'M Fikri', 'qadalm@gmail.com', 'Nice Article', 1, 0, 2, 'user_blank.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_catlist`
--

CREATE TABLE `tbl_detail_catlist` (
  `detail_catlist_id` varchar(255) NOT NULL,
  `detail_catlist_name` varchar(100) NOT NULL,
  `detail_catlist_availability` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `detail_catlist_social` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `detail_catlist_address` varchar(100) NOT NULL,
  `detail_catlist_phone` varchar(15) NOT NULL,
  `detail_catlist_gmaps` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `detail_catlist_created_at` int(50) NOT NULL DEFAULT current_timestamp(),
  `detail_catlist_update_at` int(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_catlist`
--

INSERT INTO `tbl_detail_catlist` (`detail_catlist_id`, `detail_catlist_name`, `detail_catlist_availability`, `detail_catlist_social`, `detail_catlist_address`, `detail_catlist_phone`, `detail_catlist_gmaps`, `detail_catlist_created_at`, `detail_catlist_update_at`) VALUES
('id5f3c8d76ba080', 'Bebek Ginyo', '[]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"\",\"created_at\":\"1597723692\",\"social_value\":\"facebook\"}]', 'gg nila cipadu', '088104047258', '', 2147483647, 2147483647),
('id5f3caa0906f7a', 'Seafod Santa 68', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood/santa\"},{\"availability_id\":\"2\",\"availability_name\":\"grabfood\",\"availability_img\":\"\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"grabfood/santa\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com/santa\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com/santa\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com/santa\"}]', 'gg nila cipadu', '088104047258', '', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_promo`
--

CREATE TABLE `tbl_detail_promo` (
  `detail_promo_id` varchar(255) NOT NULL,
  `detail_promo_name` varchar(255) NOT NULL,
  `detail_promo_address` varchar(255) NOT NULL,
  `detail_promo_short_desc` varchar(255) NOT NULL,
  `detail_promo_time` varchar(100) NOT NULL,
  `detail_promo_start` int(50) NOT NULL,
  `detail_promo_end` int(50) NOT NULL,
  `detail_promo_created_at` int(50) NOT NULL DEFAULT current_timestamp(),
  `detail_promo_update_at` int(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_promo`
--

INSERT INTO `tbl_detail_promo` (`detail_promo_id`, `detail_promo_name`, `detail_promo_address`, `detail_promo_short_desc`, `detail_promo_time`, `detail_promo_start`, `detail_promo_end`, `detail_promo_created_at`, `detail_promo_update_at`) VALUES
('id5f3cf5c7e250c', 'sdsdssd', 'Address', 'sdsdsd', 'sdsddd', 1597839238, 1597839238, 1597830599, 1597839238);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `home_id` int(11) NOT NULL,
  `home_caption_1` varchar(200) DEFAULT NULL,
  `home_caption_2` varchar(200) DEFAULT NULL,
  `home_bg_heading` varchar(50) DEFAULT NULL,
  `home_bg_testimonial` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`home_id`, `home_caption_1`, `home_caption_2`, `home_bg_heading`, `home_bg_testimonial`) VALUES
(1, 'Driven . Inspired . Smart', 'Personal Blog', 'image_4.png', 'image_8.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_name` varchar(50) DEFAULT NULL,
  `inbox_email` varchar(80) DEFAULT NULL,
  `inbox_subject` varchar(200) DEFAULT NULL,
  `inbox_message` text DEFAULT NULL,
  `inbox_created_at` timestamp NULL DEFAULT current_timestamp(),
  `inbox_status` varchar(2) DEFAULT '0' COMMENT '0=Unread, 1=Read'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_name`, `inbox_email`, `inbox_subject`, `inbox_message`, `inbox_created_at`, `inbox_status`) VALUES
(1, 'Fikri', 'fikrifiver97@gmail.com', 'Request Artikel', 'Saya mau request artikel tentang mindset.', '2019-04-11 03:46:56', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`location_id`, `location_name`) VALUES
(1, 'Inside Mall'),
(2, 'Food Street');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_navbar`
--

CREATE TABLE `tbl_navbar` (
  `navbar_id` int(11) NOT NULL,
  `navbar_name` varchar(50) DEFAULT NULL,
  `navbar_slug` varchar(200) DEFAULT NULL,
  `navbar_parent_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_navbar`
--

INSERT INTO `tbl_navbar` (`navbar_id`, `navbar_name`, `navbar_slug`, `navbar_parent_id`) VALUES
(1, 'Home', NULL, 0),
(2, 'About', 'about', 0),
(3, 'Blog', 'blog', 0),
(4, 'Contact', 'contact', 0),
(5, 'Teknologi', 'tag/Teknologi', 3),
(10, 'Success', 'category/success', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(250) DEFAULT NULL,
  `post_description` text DEFAULT NULL,
  `post_contents` longtext DEFAULT NULL,
  `post_image` varchar(40) DEFAULT NULL,
  `post_date` timestamp NULL DEFAULT current_timestamp(),
  `post_last_update` datetime DEFAULT NULL,
  `post_type_id` int(11) NOT NULL,
  `post_category_id` int(11) DEFAULT NULL,
  `post_tags` varchar(225) DEFAULT NULL,
  `post_slug` varchar(250) DEFAULT NULL,
  `post_city_id` int(11) NOT NULL,
  `post_location_id` int(11) NOT NULL,
  `post_halal_id` int(11) NOT NULL,
  `post_additional_id` int(11) NOT NULL,
  `post_status` int(11) DEFAULT NULL COMMENT '1=Publish, 0=Unpublish',
  `post_views` int(11) DEFAULT 0,
  `post_user_id` int(11) DEFAULT NULL,
  `post_detail_id` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_description`, `post_contents`, `post_image`, `post_date`, `post_last_update`, `post_type_id`, `post_category_id`, `post_tags`, `post_slug`, `post_city_id`, `post_location_id`, `post_halal_id`, `post_additional_id`, `post_status`, `post_views`, `post_user_id`, `post_detail_id`) VALUES
(2, '7 Tips untuk menemukan passion Anda', '', '<p style=\"outline: 0px !important;\">Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><h3 style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(78,=\"\" 94,=\"\" 106);\"=\"\">Ini adalah Sub Heading&nbsp;</h3><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p>', '787f035149ba2179b8bc4c5ac01c5001.jpg', '2019-04-05 07:52:06', '2019-04-14 09:08:10', 0, 1, 'Psikologi,Motivasi', 'tips-untuk-menemukan-passion-anda', 0, 0, 0, 0, 1, 4, 1, ''),
(3, '5 Alasan kenapa Anda perlu berbuat baik', '', '<p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p style=\"outline: 0px !important;\">Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><h3 style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(78,=\"\" 94,=\"\" 106);\"=\"\">Ini adalah Sub Heading&nbsp;</h3><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p>', 'a06ae9341405a292ae12b67ed85dc1dc.jpg', '2019-04-05 12:25:13', '2019-04-14 09:08:51', 0, 2, 'Psikologi,Motivasi,Kesehatan', '5-alasan-kenapa-anda-perlu-berbuat-baik', 0, 0, 0, 0, 1, 6, 1, ''),
(4, '7 Tips untuk meningkatkan pendapatan Anda', '', '<p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p style=\"outline: 0px !important;\">Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><h3 style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(78,=\"\" 94,=\"\" 106);\"=\"\">Ini adalah Sub Heading&nbsp;</h3><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p style=\"outline: 0px !important;\">Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p>', '9a734ed5d107f0f378da0a1e13dfc92e.jpg', '2019-04-05 12:26:55', '2019-04-14 09:09:16', 0, 3, 'Teknologi,Motivasi', 'tips-untuk-meningkatkan-pendapatan-anda', 0, 0, 0, 0, 1, 7, 1, ''),
(7, '3 Teknik Efektif Membaca Cepat', '', '<p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten.</p><p style=\"outline: 0px !important;\">Ini adalah\r\n artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><h3 style=\"font-family: \" open=\"\">Ini adalah Sub Heading&nbsp;</h3><p style=\"outline: 0px !important;\">Ini\r\n adalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten.</p><p style=\"outline: 0px !important;\">Ini\r\n adalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten.</p>', 'b69bd34db0726b6cf7747a816c99254f.jpg', '2020-01-12 04:30:20', NULL, 0, 1, 'Psikologi,Motivasi', '3-teknik-efektif-membaca-cepat', 0, 0, 0, 0, 1, 0, 1, ''),
(9, '4 Cara Menjadi Lebih Aktif dalam Belajar', '', '<p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten.</p><p style=\"outline: 0px !important;\">Ini adalah\r\n artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><h3 style=\"font-family: \" open=\"\">Ini adalah Sub Heading&nbsp;</h3><p style=\"outline: 0px !important;\">Ini\r\n adalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten.</p><p style=\"outline: 0px !important;\">Ini\r\n adalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten.</p>', 'ec77cde530b2eb464b9add2c31316b10.jpg', '2020-01-12 04:34:01', NULL, 0, 1, 'Psikologi,Motivasi', '4-cara-menjadi-lebih-aktif-dalam-belajar', 0, 0, 0, 0, 1, 1, 1, ''),
(11, 'BASO ACI AKANG', '', 'baso aci akanga baso yang sedang viral di kalangan anak milenial terutama di daerah tangeranag', '58fe0c716e50edeabc7737a07cdf1db9.jpg', '2020-08-10 13:22:44', NULL, 0, 1, 'Psikologi', 'baso-aci-akang', 2, 2, 1, 1, 1, 0, 1, ''),
(12, 'Baso Aci ', '', '<hr><p>Makanan yang sedang viral di kalangan anak milenial ini sekarang menjadi&nbsp;</p><p>salah satu makanan yang sangat di gemari dengan berbagai varian baru yang ada</p><p>menambah minat dari para penkmatnya.</p><img src=\"http://localhost/foodbang-dev/assets/images/baso_aci.jpg\" style=\"width: 50%;\"><p><br></p>', '289098b431f76d402c8827c59f9ab907.jpg', '2020-08-11 00:53:22', '2020-08-11 08:07:29', 0, 1, 'Psikologi', 'baso-aci-', 1, 1, 1, 1, 1, 1, 1, ''),
(13, 'Gudeg', '', '<p>makan khas jogja</p><p><br></p><img src=\"http://localhost/foodbang-dev/assets/images/baso_aci7.jpg\" style=\"width: 50%;\"><p><br></p>', 'aa1818548127b313bea0f480d9b991db.jpg', '2020-08-12 13:13:48', NULL, 4, 1, 'Sate', 'gudeg', 1, 1, 1, 1, 1, 0, 1, ''),
(19, 'Bebek Ginyo', '', '<span style=\"color: rgb(82, 82, 82); font-family: Lato, sans-serif; font-size: 16px; text-align: justify;\">Masakah dengan bahan daging bebek memiliki keunikan cita rasa sehingga memiliki penggemar tersendiri. Bebek Ginyo merupakan salah satu tempat makan di daerah Jakarta Selatan yang menyajikan berbagai jenis menu masakan bebek. Berbagai masakan dengan bahan utama daging bebek seperti bebek bakar dan bebek kremes. Penggemar masakan pedas juga dapat mencoba menu unik berupa bebek balado dan bebek cabe hijau. Sedangkan mereka yang kurang suka masakan bebek bakar juga dapat mencoba memesan pepes bebek di warung ini. Warung masakan bebek Ginyo yang berdiri sejak tahun 2007 ini dapat dikunjungi di Jalan Tebet Dalam nomor 12, Tebet, Jakarta Selatan.</span>', 'dcaccfae248b23ca53fcc956749709a7.jpg', '2020-08-19 02:24:54', NULL, 2, 2, 'bbq', 'facebook', 1, 1, 1, 1, 1, 0, 1, 'id5f3c8d76ba080'),
(20, 'Seafod Santa 68ga', '', '<p><span style=\"color: rgb(82, 82, 82); font-family: Lato, sans-serif; font-size: 16px; text-align: justify;\">Masakan laut atau sea food menjadi jenis makanan lain yang memiliki banyak penggemar. Salah satu tempat terbaik untuk menikmati masakan laut dengan rasa lezat dan harga terjangkau adalah Seafood Santa 68. Bahan – bahan segar dan cara mengolah dengan bumbu lezat menjadi salah satu alasan mengapa Seafood Santa 68 memiliki sangat banyak pelanggan. Berbagai menu masakan laut dengan bahan ikan, udang, cumi hingga kepiting dan kerang dapat dinikmati di warung makan yang sering disesaki pelanggan ini. Warung makan Seafood Santa 68 dapat dikunjungi di Jalan Wolter Monginsidi nomor 58 Senopati, Jakarta Selatan.</span></p><p><span style=\"color: rgb(82, 82, 82); font-family: Lato, sans-serif; font-size: 16px; text-align: justify;\"><br></span></p>', '987c2b7911590afad585a6e4a2ea5f17.jpg', '2020-08-19 04:26:49', NULL, 2, 2, 'seafood,baso', 'seafod-santa-68ga', 2, 2, 1, 2, 1, 0, 1, 'id5f3caa0906f7a'),
(29, 'Seafod Santa 68gsdzxs', '', 'sdasddd', '576b5f14d1c3c427ee8a64d0161214c3.png', '2020-08-19 09:49:59', NULL, 6, 4, 'grab,grabfood', 'seafod-santa-68gsdzxs', 1, 0, 0, 0, 1, 0, 1, 'id5f3cf5c7e250c');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_views`
--

CREATE TABLE `tbl_post_views` (
  `view_id` int(11) NOT NULL,
  `view_date` timestamp NULL DEFAULT current_timestamp(),
  `view_ip` varchar(50) DEFAULT NULL,
  `view_post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post_views`
--

INSERT INTO `tbl_post_views` (`view_id`, `view_date`, `view_ip`, `view_post_id`) VALUES
(1, '2019-04-06 13:33:39', '::1', 6),
(2, '2019-04-06 23:04:18', '::1', 6),
(3, '2019-04-07 03:32:54', '::1', 5),
(4, '2019-04-07 03:33:14', '::1', 4),
(5, '2019-04-07 04:03:50', '::1', 3),
(6, '2019-04-09 12:19:36', '::1', 6),
(7, '2019-04-09 13:28:30', '::1', 4),
(8, '2019-04-10 01:33:10', '::1', 5),
(9, '2019-04-10 10:00:27', '::1', 2),
(10, '2019-04-10 10:58:17', '::1', 1),
(11, '2019-04-10 13:20:32', '::1', 3),
(12, '2019-04-10 13:20:46', '::1', 6),
(13, '2019-04-11 03:32:18', '::1', 6),
(14, '2019-04-11 04:24:22', '::1', 4),
(15, '2019-04-11 07:58:35', '::1', 2),
(16, '2019-04-12 04:23:04', '::1', 6),
(17, '2019-04-12 10:09:30', '::1', 5),
(18, '2019-04-13 01:42:27', '::1', 6),
(19, '2019-04-13 02:01:01', '::1', 5),
(20, '2019-04-13 02:01:18', '::1', 3),
(21, '2019-04-13 03:23:34', '::1', 4),
(22, '2019-04-14 01:39:17', '::1', 1),
(23, '2019-04-14 03:24:24', '::1', 3),
(24, '2019-04-14 04:08:24', '::1', 2),
(25, '2019-04-15 03:44:42', '::1', 6),
(26, '2019-12-19 02:28:13', '::1', 6),
(27, '2019-12-19 02:29:33', '::1', 7),
(28, '2019-12-28 03:44:29', '::1', 7),
(29, '2019-12-28 07:44:18', '::1', 3),
(30, '2019-12-28 07:44:24', '::1', 2),
(31, '2019-12-28 08:06:56', '::1', 6),
(32, '2019-12-30 03:36:11', '::1', 4),
(33, '2019-12-30 04:21:54', '::1', 7),
(34, '2019-12-31 02:54:27', '::1', 4),
(35, '2019-12-31 02:58:04', '::1', 7),
(36, '2019-12-31 02:59:37', '::1', 1),
(37, '2019-12-31 03:58:35', '::1', 6),
(38, '2020-01-01 02:54:01', '::1', 7),
(39, '2020-01-01 03:19:14', '::1', 6),
(40, '2020-01-02 02:05:56', '::1', 4),
(41, '2020-01-02 03:16:32', '::1', 7),
(42, '2020-01-02 03:24:37', '::1', 1),
(43, '2020-01-03 03:20:23', '::1', 3),
(44, '2020-01-03 03:21:18', '::1', 6),
(45, '2020-01-03 04:03:10', '::1', 7),
(46, '2020-01-04 03:59:33', '::1', 5),
(47, '2020-01-04 04:04:33', '::1', 11),
(48, '2020-01-04 04:06:22', '::1', 10),
(49, '2020-01-04 04:23:16', '::1', 16),
(50, '2020-01-04 05:51:45', '::1', 15),
(51, '2020-01-07 03:12:53', '::1', 15),
(52, '2020-01-12 04:42:18', '::1', 9),
(53, '2020-08-11 00:54:03', '::1', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site`
--

CREATE TABLE `tbl_site` (
  `site_id` int(11) NOT NULL,
  `site_name` varchar(100) DEFAULT NULL,
  `site_title` varchar(200) DEFAULT NULL,
  `site_description` text DEFAULT NULL,
  `site_favicon` varchar(50) DEFAULT NULL,
  `site_logo_header` varchar(50) DEFAULT NULL,
  `site_logo_footer` varchar(50) DEFAULT NULL,
  `site_logo_big` varchar(50) DEFAULT NULL,
  `site_facebook` varchar(150) DEFAULT NULL,
  `site_twitter` varchar(150) DEFAULT NULL,
  `site_instagram` varchar(150) DEFAULT NULL,
  `site_pinterest` varchar(150) DEFAULT NULL,
  `site_linkedin` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_site`
--

INSERT INTO `tbl_site` (`site_id`, `site_name`, `site_title`, `site_description`, `site_favicon`, `site_logo_header`, `site_logo_footer`, `site_logo_big`, `site_facebook`, `site_twitter`, `site_instagram`, `site_pinterest`, `site_linkedin`) VALUES
(1, 'Foodbang', 'Foodbang', 'Open Source source code untuk personal blog, simple, elegan, full responsif, dan mudah di customize.  ', 'favicon.png', 'logo2.png', 'favicon.png', 'logo1.png', 'https://www.facebook.com/mfikridotcom/', 'https://twitter.com/MFikri75770694/', 'https://www.instagram.com/mfikricom/', 'https://id.pinterest.com/mfikricom/', 'https://www.linkedin.com/in/m-fikri-setiadi-b03370148/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `social_id` int(11) NOT NULL,
  `social_name` varchar(50) NOT NULL,
  `social_icon` varchar(255) NOT NULL,
  `created_at` int(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`social_id`, `social_name`, `social_icon`, `created_at`) VALUES
(1, 'facebook', '', 1597723692),
(2, 'instagram', '', 1597723692),
(5, 'twitter', '', 1597723692);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

CREATE TABLE `tbl_subscribe` (
  `subscribe_id` int(11) NOT NULL,
  `subscribe_email` varchar(100) DEFAULT NULL,
  `subscribe_created_at` timestamp NULL DEFAULT current_timestamp(),
  `subscribe_status` int(11) DEFAULT 0,
  `subscribe_rating` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subscribe`
--

INSERT INTO `tbl_subscribe` (`subscribe_id`, `subscribe_email`, `subscribe_created_at`, `subscribe_status`, `subscribe_rating`) VALUES
(1, 'fikrifiver97@gmail.com', '2019-04-11 07:40:16', 1, 1),
(3, 'porthere@gmail.com', '2019-04-11 07:57:28', 1, 0),
(4, 'mufty@gmail.com', '2019-04-11 07:58:44', 0, 0),
(5, 'qadalm@gmail.com', '2019-12-28 03:06:50', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tags`
--

CREATE TABLE `tbl_tags` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tags`
--

INSERT INTO `tbl_tags` (`tag_id`, `tag_name`) VALUES
(1, 'Baso'),
(2, 'Sate'),
(3, 'BBQ'),
(4, 'NasiGoreng'),
(5, 'grab'),
(9, 'bebek'),
(10, 's'),
(11, 'food'),
(12, 'jing'),
(13, 'grabfood');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `testimonial_name` varchar(50) DEFAULT NULL,
  `testimonial_content` text DEFAULT NULL,
  `testimonial_image` varchar(50) DEFAULT NULL,
  `testimonial_created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`testimonial_id`, `testimonial_name`, `testimonial_content`, `testimonial_image`, `testimonial_created_at`) VALUES
(1, 'M Fikri, Founder of mfikri.com', 'Ini adalah source code yang luar biasa. simple, elegan, full responsif, cepat, dan mudah di customize oleh web developer pemula.', 'b4d8e2b191213f72dc41ce768b03b2d9.png', '2020-01-03 03:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`) VALUES
(1, 'News'),
(2, 'Restourant $ Cofe'),
(3, 'UMKM'),
(4, 'Street Food'),
(5, 'Healthy Food'),
(6, 'Promo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_level` varchar(10) DEFAULT NULL,
  `user_status` varchar(10) DEFAULT '1',
  `user_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`, `user_status`, `user_photo`) VALUES
(1, 'dhika', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1', '1', '112bee4744eb2ffec2611611128baef0.png'),
(2, 'Joko', 'joko1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2', '1', '3d0be9678f99be0b5180634d37ff8ef4.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitors`
--

CREATE TABLE `tbl_visitors` (
  `visit_id` int(11) NOT NULL,
  `visit_date` timestamp NULL DEFAULT current_timestamp(),
  `visit_ip` varchar(50) DEFAULT NULL,
  `visit_platform` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_visitors`
--

INSERT INTO `tbl_visitors` (`visit_id`, `visit_date`, `visit_ip`, `visit_platform`) VALUES
(541327, '2019-03-18 14:07:36', '::1', 'Firefox'),
(541328, '2019-03-19 03:33:51', '::1', 'Chrome'),
(541329, '2019-03-20 01:00:19', '::1', 'Chrome'),
(541330, '2019-04-05 01:53:28', '::1', 'Firefox'),
(541331, '2019-04-06 01:37:35', '::1', 'Chrome'),
(541332, '2019-04-06 23:04:12', '::1', 'Chrome'),
(541333, '2019-04-09 12:19:32', '::1', 'Chrome'),
(541334, '2019-04-10 01:33:03', '::1', 'Chrome'),
(541335, '2019-04-11 03:30:38', '::1', 'Chrome'),
(541336, '2019-04-11 03:30:38', '::1', 'Chrome'),
(541337, '2019-04-12 03:51:42', '::1', 'Chrome'),
(541338, '2019-04-12 21:55:51', '::1', 'Chrome'),
(541339, '2019-04-14 01:30:40', '::1', 'Chrome'),
(541340, '2019-04-15 01:42:53', '::1', 'Chrome'),
(541341, '2019-05-08 02:07:09', '::1', 'Chrome'),
(541342, '2019-05-21 05:55:14', '::1', 'Firefox'),
(541343, '2019-08-28 07:08:22', '::1', 'Firefox'),
(541344, '2019-12-17 06:04:57', '::1', 'Firefox'),
(541345, '2019-12-18 01:34:25', '::1', 'Firefox'),
(541346, '2019-12-19 02:21:23', '::1', 'Firefox'),
(541347, '2019-12-20 07:47:00', '::1', 'Firefox'),
(541348, '2019-12-28 02:58:34', '::1', 'Firefox'),
(541349, '2019-12-29 08:48:39', '::1', 'Firefox'),
(541350, '2019-12-30 03:24:04', '::1', 'Firefox'),
(541351, '2019-12-31 02:47:15', '::1', 'Firefox'),
(541352, '2020-01-01 02:24:55', '::1', 'Firefox'),
(541353, '2020-01-02 01:58:25', '::1', 'Firefox'),
(541354, '2020-01-03 03:15:30', '::1', 'Firefox'),
(541355, '2020-01-04 03:31:49', '::1', 'Firefox'),
(541356, '2020-01-05 06:58:35', '127.0.0.1', 'Firefox'),
(541357, '2020-01-06 06:03:25', '::1', 'Firefox'),
(541358, '2020-01-07 00:57:59', '::1', 'Firefox'),
(541359, '2020-01-08 05:53:44', '::1', 'Firefox'),
(541360, '2020-01-12 04:18:15', '::1', 'Firefox'),
(541361, '2020-08-10 00:59:56', '::1', 'Chrome'),
(541362, '2020-08-11 00:53:43', '::1', 'Chrome'),
(541363, '2020-08-12 11:49:24', '::1', 'Chrome'),
(541364, '2020-08-13 00:54:12', '127.0.0.1', 'Chrome'),
(541365, '2020-08-13 03:26:32', '::1', 'Chrome'),
(541366, '2020-08-14 00:13:02', '::1', 'Chrome'),
(541367, '2020-08-15 01:20:01', '::1', 'Chrome'),
(541368, '2020-08-16 02:25:05', '::1', 'Chrome'),
(541369, '2020-08-18 01:47:29', '::1', 'Chrome'),
(541370, '2020-08-19 00:38:44', '::1', 'Chrome');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_additional`
--
ALTER TABLE `tbl_additional`
  ADD PRIMARY KEY (`additional_id`);

--
-- Indexes for table `tbl_availability`
--
ALTER TABLE `tbl_availability`
  ADD PRIMARY KEY (`availability_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_detail_catlist`
--
ALTER TABLE `tbl_detail_catlist`
  ADD PRIMARY KEY (`detail_catlist_id`);

--
-- Indexes for table `tbl_detail_promo`
--
ALTER TABLE `tbl_detail_promo`
  ADD PRIMARY KEY (`detail_promo_id`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `tbl_navbar`
--
ALTER TABLE `tbl_navbar`
  ADD PRIMARY KEY (`navbar_id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_detail_restaurant_id` (`post_detail_id`);

--
-- Indexes for table `tbl_post_views`
--
ALTER TABLE `tbl_post_views`
  ADD PRIMARY KEY (`view_id`);

--
-- Indexes for table `tbl_site`
--
ALTER TABLE `tbl_site`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  ADD PRIMARY KEY (`subscribe_id`);

--
-- Indexes for table `tbl_tags`
--
ALTER TABLE `tbl_tags`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_visitors`
--
ALTER TABLE `tbl_visitors`
  ADD PRIMARY KEY (`visit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_additional`
--
ALTER TABLE `tbl_additional`
  MODIFY `additional_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_availability`
--
ALTER TABLE `tbl_availability`
  MODIFY `availability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_navbar`
--
ALTER TABLE `tbl_navbar`
  MODIFY `navbar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_post_views`
--
ALTER TABLE `tbl_post_views`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_site`
--
ALTER TABLE `tbl_site`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  MODIFY `subscribe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_tags`
--
ALTER TABLE `tbl_tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_visitors`
--
ALTER TABLE `tbl_visitors`
  MODIFY `visit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=541371;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_detail_catlist`
--
ALTER TABLE `tbl_detail_catlist`
  ADD CONSTRAINT `tbl_detail_catlist_ibfk_1` FOREIGN KEY (`detail_catlist_id`) REFERENCES `tbl_post` (`post_detail_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
