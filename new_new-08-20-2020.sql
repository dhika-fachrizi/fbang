-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 02:07 PM
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
-- Table structure for table `city_1`
--

CREATE TABLE `city_1` (
  `city_id` int(7) NOT NULL,
  `city_name` varchar(41) DEFAULT NULL,
  `city_prov_id` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city_1`
--

INSERT INTO `city_1` (`city_id`, `city_name`, `city_prov_id`) VALUES
(1, 'PIDIE JAYA', 1),
(2, 'SIMEULUE', 1),
(3, 'BIREUEN', 1),
(4, 'ACEH TIMUR', 1),
(5, 'ACEH UTARA', 1),
(6, 'PIDIE', 1),
(7, 'ACEH BARAT DAYA', 1),
(8, 'GAYO LUES', 1),
(9, 'ACEH SELATAN', 1),
(10, 'ACEH TAMIANG', 1),
(11, 'ACEH BESAR', 1),
(12, 'ACEH TENGGARA', 1),
(13, 'BENER MERIAH', 1),
(14, 'ACEH JAYA', 1),
(15, 'LHOKSEUMAWE', 1),
(16, 'ACEH BARAT', 1),
(17, 'NAGAN RAYA', 1),
(18, 'LANGSA', 1),
(19, 'BANDA ACEH', 1),
(20, 'ACEH SINGKIL', 1),
(21, 'SABANG', 1),
(22, 'ACEH TENGAH', 1),
(23, 'SUBULUSSALAM', 1),
(24, 'NIAS SELATAN', 2),
(25, 'MANDAILING NATAL', 2),
(26, 'DAIRI', 2),
(27, 'LABUHAN BATU UTARA', 2),
(28, 'TAPANULI UTARA', 2),
(29, 'SIMALUNGUN', 2),
(30, 'LANGKAT', 2),
(31, 'SERDANG BEDAGAI', 2),
(32, 'TAPANULI SELATAN', 2),
(33, 'ASAHAN', 2),
(34, 'PADANG LAWAS UTARA', 2),
(35, 'PADANG LAWAS', 2),
(36, 'LABUHAN BATU SELATAN', 2),
(37, 'PADANG SIDEMPUAN', 2),
(38, 'TOBA SAMOSIR', 2),
(39, 'TAPANULI TENGAH', 2),
(40, 'HUMBANG HASUNDUTAN', 2),
(41, 'SIBOLGA', 2),
(42, 'BATU BARA', 2),
(43, 'SAMOSIR', 2),
(44, 'PEMATANG SIANTAR', 2),
(45, 'LABUHAN BATU', 2),
(46, 'DELI SERDANG', 2),
(47, 'GUNUNGSITOLI', 2),
(48, 'NIAS UTARA', 2),
(49, 'NIAS', 2),
(50, 'KARO', 2),
(51, 'NIAS BARAT', 2),
(52, 'MEDAN', 2),
(53, 'PAKPAK BHARAT', 2),
(54, 'TEBING TINGGI', 2),
(55, 'BINJAI', 2),
(56, 'TANJUNG BALAI', 2),
(57, 'DHARMASRAYA', 3),
(58, 'SOLOK SELATAN', 3),
(59, 'SIJUNJUNG (SAWAH LUNTO SIJUNJUNG)', 3),
(60, 'PASAMAN BARAT', 3),
(61, 'SOLOK', 3),
(62, 'PASAMAN', 3),
(63, 'PARIAMAN', 3),
(64, 'TANAH DATAR', 3),
(65, 'PADANG PARIAMAN', 3),
(66, 'PESISIR SELATAN', 3),
(67, 'PADANG', 3),
(68, 'SAWAH LUNTO', 3),
(69, 'LIMA PULUH KOTO / KOTA', 3),
(70, 'AGAM', 3),
(71, 'PAYAKUMBUH', 3),
(72, 'BUKITTINGGI', 3),
(73, 'PADANG PANJANG', 3),
(74, 'KEPULAUAN MENTAWAI', 3),
(75, 'INDRAGIRI HILIR', 4),
(76, 'KUANTAN SINGINGI', 4),
(77, 'PELALAWAN', 4),
(78, 'PEKANBARU', 4),
(79, 'ROKAN HILIR', 4),
(80, 'BENGKALIS', 4),
(81, 'INDRAGIRI HULU', 4),
(82, 'ROKAN HULU', 4),
(83, 'KAMPAR', 4),
(84, 'KEPULAUAN MERANTI', 4),
(85, 'DUMAI', 4),
(86, 'SIAK', 4),
(87, 'TEBO', 5),
(88, 'TANJUNG JABUNG BARAT', 5),
(89, 'MUARO JAMBI', 5),
(90, 'KERINCI', 5),
(91, 'MERANGIN', 5),
(92, 'BUNGO', 5),
(93, 'TANJUNG JABUNG TIMUR', 5),
(94, 'SUNGAIPENUH', 5),
(95, 'BATANG HARI', 5),
(96, 'JAMBI', 5),
(97, 'SAROLANGUN', 5),
(98, 'PALEMBANG', 6),
(99, 'LAHAT', 6),
(100, 'OGAN KOMERING ULU TIMUR', 6),
(101, 'MUSI BANYUASIN', 6),
(102, 'PAGAR ALAM', 6),
(103, 'OGAN KOMERING ULU SELATAN', 6),
(104, 'BANYUASIN', 6),
(105, 'MUSI RAWAS', 6),
(106, 'MUARA ENIM', 6),
(107, 'OGAN KOMERING ULU', 6),
(108, 'OGAN KOMERING ILIR', 6),
(109, 'EMPAT LAWANG', 6),
(110, 'LUBUK LINGGAU', 6),
(111, 'PRABUMULIH', 6),
(112, 'OGAN ILIR', 6),
(113, 'BENGKULU TENGAH', 7),
(114, 'REJANG LEBONG', 7),
(115, 'MUKO MUKO', 7),
(116, 'KAUR', 7),
(117, 'BENGKULU UTARA', 7),
(118, 'LEBONG', 7),
(119, 'KEPAHIANG', 7),
(120, 'BENGKULU SELATAN', 7),
(121, 'SELUMA', 7),
(122, 'BENGKULU', 7),
(123, 'LAMPUNG UTARA', 8),
(124, 'WAY KANAN', 8),
(125, 'LAMPUNG TENGAH', 8),
(126, 'MESUJI', 8),
(127, 'PRINGSEWU', 8),
(128, 'LAMPUNG TIMUR', 8),
(129, 'LAMPUNG SELATAN', 8),
(130, 'TULANG BAWANG', 8),
(131, 'TULANG BAWANG BARAT', 8),
(132, 'TANGGAMUS', 8),
(133, 'LAMPUNG BARAT', 8),
(134, 'PESISIR BARAT', 8),
(135, 'PESAWARAN', 8),
(136, 'BANDAR LAMPUNG', 8),
(137, 'METRO', 8),
(138, 'BELITUNG', 9),
(139, 'BELITUNG TIMUR', 9),
(140, 'BANGKA', 9),
(141, 'BANGKA SELATAN', 9),
(142, 'BANGKA BARAT', 9),
(143, 'PANGKAL PINANG', 9),
(144, 'BANGKA TENGAH', 9),
(145, 'KEPULAUAN ANAMBAS', 10),
(146, 'BINTAN', 10),
(147, 'NATUNA', 10),
(148, 'BATAM', 10),
(149, 'TANJUNG PINANG', 10),
(150, 'KARIMUN', 10),
(151, 'LINGGA', 10),
(152, 'JAKARTA UTARA', 11),
(153, 'JAKARTA BARAT', 11),
(154, 'JAKARTA TIMUR', 11),
(155, 'JAKARTA SELATAN', 11),
(156, 'JAKARTA PUSAT', 11),
(157, 'KEPULAUAN SERIBU', 11),
(158, 'DEPOK', 12),
(159, 'KARAWANG', 12),
(160, 'CIREBON', 12),
(161, 'BANDUNG', 12),
(162, 'SUKABUMI', 12),
(163, 'SUMEDANG', 12),
(164, 'INDRAMAYU', 12),
(165, 'MAJALENGKA', 12),
(166, 'KUNINGAN', 12),
(167, 'TASIKMALAYA', 12),
(168, 'CIAMIS', 12),
(169, 'SUBANG', 12),
(170, 'PURWAKARTA', 12),
(171, 'BOGOR', 12),
(172, 'BEKASI', 12),
(173, 'GARUT', 12),
(174, 'PANGANDARAN', 12),
(175, 'CIANJUR', 12),
(176, 'BANJAR', 12),
(177, 'BANDUNG BARAT', 12),
(178, 'CIMAHI', 12),
(179, 'PURBALINGGA', 13),
(180, 'KEBUMEN', 13),
(181, 'MAGELANG', 13),
(182, 'CILACAP', 13),
(183, 'BATANG', 13),
(184, 'BANJARNEGARA', 13),
(185, 'BLORA', 13),
(186, 'BREBES', 13),
(187, 'BANYUMAS', 13),
(188, 'WONOSOBO', 13),
(189, 'TEGAL', 13),
(190, 'PURWOREJO', 13),
(191, 'PATI', 13),
(192, 'SUKOHARJO', 13),
(193, 'KARANGANYAR', 13),
(194, 'PEKALONGAN', 13),
(195, 'PEMALANG', 13),
(196, 'BOYOLALI', 13),
(197, 'GROBOGAN', 13),
(198, 'SEMARANG', 13),
(199, 'DEMAK', 13),
(200, 'REMBANG', 13),
(201, 'KLATEN', 13),
(202, 'KUDUS', 13),
(203, 'TEMANGGUNG', 13),
(204, 'SRAGEN', 13),
(205, 'JEPARA', 13),
(206, 'WONOGIRI', 13),
(207, 'KENDAL', 13),
(208, 'SURAKARTA (SOLO)', 13),
(209, 'SALATIGA', 13),
(210, 'SLEMAN', 14),
(211, 'BANTUL', 14),
(212, 'YOGYAKARTA', 14),
(213, 'GUNUNG KIDUL', 14),
(214, 'KULON PROGO', 14),
(215, 'GRESIK', 15),
(216, 'KEDIRI', 15),
(217, 'SAMPANG', 15),
(218, 'BANGKALAN', 15),
(219, 'SUMENEP', 15),
(220, 'SITUBONDO', 15),
(221, 'SURABAYA', 15),
(222, 'JEMBER', 15),
(223, 'PAMEKASAN', 15),
(224, 'JOMBANG', 15),
(225, 'PROBOLINGGO', 15),
(226, 'BANYUWANGI', 15),
(227, 'PASURUAN', 15),
(228, 'BOJONEGORO', 15),
(229, 'BONDOWOSO', 15),
(230, 'MAGETAN', 15),
(231, 'LUMAJANG', 15),
(232, 'MALANG', 15),
(233, 'BLITAR', 15),
(234, 'SIDOARJO', 15),
(235, 'LAMONGAN', 15),
(236, 'PACITAN', 15),
(237, 'TULUNGAGUNG', 15),
(238, 'MOJOKERTO', 15),
(239, 'MADIUN', 15),
(240, 'PONOROGO', 15),
(241, 'NGAWI', 15),
(242, 'NGANJUK', 15),
(243, 'TUBAN', 15),
(244, 'TRENGGALEK', 15),
(245, 'BATU', 15),
(246, 'TANGERANG', 16),
(247, 'SERANG', 16),
(248, 'PANDEGLANG', 16),
(249, 'LEBAK', 16),
(250, 'TANGERANG SELATAN', 16),
(251, 'CILEGON', 16),
(252, 'KLUNGKUNG', 17),
(253, 'KARANGASEM', 17),
(254, 'BANGLI', 17),
(255, 'TABANAN', 17),
(256, 'GIANYAR', 17),
(257, 'BADUNG', 17),
(258, 'JEMBRANA', 17),
(259, 'BULELENG', 17),
(260, 'DENPASAR', 17),
(261, 'MATARAM', 18),
(262, 'DOMPU', 18),
(263, 'SUMBAWA BARAT', 18),
(264, 'SUMBAWA', 18),
(265, 'LOMBOK TENGAH', 18),
(266, 'LOMBOK TIMUR', 18),
(267, 'LOMBOK UTARA', 18),
(268, 'LOMBOK BARAT', 18),
(269, 'BIMA', 18),
(270, 'TIMOR TENGAH SELATAN', 19),
(271, 'FLORES TIMUR', 19),
(272, 'ALOR', 19),
(273, 'ENDE', 19),
(274, 'NAGEKEO', 19),
(275, 'KUPANG', 19),
(276, 'SIKKA', 19),
(277, 'NGADA', 19),
(278, 'TIMOR TENGAH UTARA', 19),
(279, 'BELU', 19),
(280, 'LEMBATA', 19),
(281, 'SUMBA BARAT DAYA', 19),
(282, 'SUMBA BARAT', 19),
(283, 'SUMBA TENGAH', 19),
(284, 'SUMBA TIMUR', 19),
(285, 'ROTE NDAO', 19),
(286, 'MANGGARAI TIMUR', 19),
(287, 'MANGGARAI', 19),
(288, 'SABU RAIJUA', 19),
(289, 'MANGGARAI BARAT', 19),
(290, 'LANDAK', 20),
(291, 'KETAPANG', 20),
(292, 'SINTANG', 20),
(293, 'KUBU RAYA', 20),
(294, 'PONTIANAK', 20),
(295, 'KAYONG UTARA', 20),
(296, 'BENGKAYANG', 20),
(297, 'KAPUAS HULU', 20),
(298, 'SAMBAS', 20),
(299, 'SINGKAWANG', 20),
(300, 'SANGGAU', 20),
(301, 'MELAWI', 20),
(302, 'SEKADAU', 20),
(303, 'KOTAWARINGIN TIMUR', 21),
(304, 'SUKAMARA', 21),
(305, 'KOTAWARINGIN BARAT', 21),
(306, 'BARITO TIMUR', 21),
(307, 'KAPUAS', 21),
(308, 'PULANG PISAU', 21),
(309, 'LAMANDAU', 21),
(310, 'SERUYAN', 21),
(311, 'KATINGAN', 21),
(312, 'BARITO SELATAN', 21),
(313, 'MURUNG RAYA', 21),
(314, 'BARITO UTARA', 21),
(315, 'GUNUNG MAS', 21),
(316, 'PALANGKA RAYA', 21),
(317, 'TAPIN', 22),
(318, 'BANJAR', 22),
(319, 'HULU SUNGAI TENGAH', 22),
(320, 'TABALONG', 22),
(321, 'HULU SUNGAI UTARA', 22),
(322, 'BALANGAN', 22),
(323, 'TANAH BUMBU', 22),
(324, 'BANJARMASIN', 22),
(325, 'KOTABARU', 22),
(326, 'TANAH LAUT', 22),
(327, 'HULU SUNGAI SELATAN', 22),
(328, 'BARITO KUALA', 22),
(329, 'BANJARBARU', 22),
(330, 'KUTAI BARAT', 23),
(331, 'SAMARINDA', 23),
(332, 'PASER', 23),
(333, 'KUTAI KARTANEGARA', 23),
(334, 'BERAU', 23),
(335, 'PENAJAM PASER UTARA', 23),
(336, 'BONTANG', 23),
(337, 'KUTAI TIMUR', 23),
(338, 'BALIKPAPAN', 23),
(339, 'MALINAU', 24),
(340, 'NUNUKAN', 24),
(341, 'BULUNGAN (BULONGAN)', 24),
(342, 'TANA TIDUNG', 24),
(343, 'TARAKAN', 24),
(344, 'BOLAANG MONGONDOW (BOLMONG)', 25),
(345, 'BOLAANG MONGONDOW SELATAN', 25),
(346, 'MINAHASA SELATAN', 25),
(347, 'BITUNG', 25),
(348, 'MINAHASA', 25),
(349, 'KEPULAUAN SANGIHE', 25),
(350, 'MINAHASA UTARA', 25),
(351, 'KEPULAUAN TALAUD', 25),
(352, 'KEPULAUAN SIAU TAGULANDANG BIARO (SITARO)', 25),
(353, 'MANADO', 25),
(354, 'BOLAANG MONGONDOW UTARA', 25),
(355, 'BOLAANG MONGONDOW TIMUR', 25),
(356, 'MINAHASA TENGGARA', 25),
(357, 'KOTAMOBAGU', 25),
(358, 'TOMOHON', 25),
(359, 'BANGGAI KEPULAUAN', 26),
(360, 'TOLI-TOLI', 26),
(361, 'PARIGI MOUTONG', 26),
(362, 'BUOL', 26),
(363, 'DONGGALA', 26),
(364, 'POSO', 26),
(365, 'MOROWALI', 26),
(366, 'TOJO UNA-UNA', 26),
(367, 'BANGGAI', 26),
(368, 'SIGI', 26),
(369, 'PALU', 26),
(370, 'MAROS', 27),
(371, 'WAJO', 27),
(372, 'BONE', 27),
(373, 'SOPPENG', 27),
(374, 'SIDENRENG RAPPANG / RAPANG', 27),
(375, 'TAKALAR', 27),
(376, 'BARRU', 27),
(377, 'LUWU TIMUR', 27),
(378, 'SINJAI', 27),
(379, 'PANGKAJENE KEPULAUAN', 27),
(380, 'PINRANG', 27),
(381, 'JENEPONTO', 27),
(382, 'PALOPO', 27),
(383, 'TORAJA UTARA', 27),
(384, 'LUWU', 27),
(385, 'BULUKUMBA', 27),
(386, 'MAKASSAR', 27),
(387, 'SELAYAR (KEPULAUAN SELAYAR)', 27),
(388, 'TANA TORAJA', 27),
(389, 'LUWU UTARA', 27),
(390, 'BANTAENG', 27),
(391, 'GOWA', 27),
(392, 'ENREKANG', 27),
(393, 'PAREPARE', 27),
(394, 'KOLAKA', 28),
(395, 'MUNA', 28),
(396, 'KONAWE SELATAN', 28),
(397, 'KENDARI', 28),
(398, 'KONAWE', 28),
(399, 'KONAWE UTARA', 28),
(400, 'KOLAKA UTARA', 28),
(401, 'BUTON', 28),
(402, 'BOMBANA', 28),
(403, 'WAKATOBI', 28),
(404, 'BAU-BAU', 28),
(405, 'BUTON UTARA', 28),
(406, 'GORONTALO UTARA', 29),
(407, 'BONE BOLANGO', 29),
(408, 'GORONTALO', 29),
(409, 'BOALEMO', 29),
(410, 'POHUWATO', 29),
(411, 'MAJENE', 30),
(412, 'MAMUJU', 30),
(413, 'MAMUJU UTARA', 30),
(414, 'POLEWALI MANDAR', 30),
(415, 'MAMASA', 30),
(416, 'MALUKU TENGGARA BARAT', 31),
(417, 'MALUKU TENGGARA', 31),
(418, 'SERAM BAGIAN BARAT', 31),
(419, 'MALUKU TENGAH', 31),
(420, 'SERAM BAGIAN TIMUR', 31),
(421, 'MALUKU BARAT DAYA', 31),
(422, 'AMBON', 31),
(423, 'BURU', 31),
(424, 'BURU SELATAN', 31),
(425, 'KEPULAUAN ARU', 31),
(426, 'TUAL', 31),
(427, 'HALMAHERA BARAT', 32),
(428, 'TIDORE KEPULAUAN', 32),
(429, 'TERNATE', 32),
(430, 'PULAU MOROTAI', 32),
(431, 'KEPULAUAN SULA', 32),
(432, 'HALMAHERA SELATAN', 32),
(433, 'HALMAHERA TENGAH', 32),
(434, 'HALMAHERA TIMUR', 32),
(435, 'HALMAHERA UTARA', 32),
(436, 'YALIMO', 33),
(437, 'DOGIYAI', 33),
(438, 'ASMAT', 33),
(439, 'JAYAPURA', 33),
(440, 'PANIAI', 33),
(441, 'MAPPI', 33),
(442, 'TOLIKARA', 33),
(443, 'PUNCAK JAYA', 33),
(444, 'PEGUNUNGAN BINTANG', 33),
(445, 'JAYAWIJAYA', 33),
(446, 'LANNY JAYA', 33),
(447, 'NDUGA', 33),
(448, 'BIAK NUMFOR', 33),
(449, 'KEPULAUAN YAPEN (YAPEN WAROPEN)', 33),
(450, 'PUNCAK', 33),
(451, 'INTAN JAYA', 33),
(452, 'WAROPEN', 33),
(453, 'NABIRE', 33),
(454, 'MIMIKA', 33),
(455, 'BOVEN DIGOEL', 33),
(456, 'YAHUKIMO', 33),
(457, 'SARMI', 33),
(458, 'MERAUKE', 33),
(459, 'DEIYAI (DELIYAI)', 33),
(460, 'KEEROM', 33),
(461, 'SUPIORI', 33),
(462, 'MAMBERAMO RAYA', 33),
(463, 'MAMBERAMO TENGAH', 33),
(464, 'RAJA AMPAT', 34),
(465, 'MANOKWARI SELATAN', 34),
(466, 'MANOKWARI', 34),
(467, 'KAIMANA', 34),
(468, 'MAYBRAT', 34),
(469, 'SORONG SELATAN', 34),
(470, 'FAKFAK', 34),
(471, 'PEGUNUNGAN ARFAK', 34),
(472, 'TAMBRAUW', 34),
(473, 'SORONG', 34),
(474, 'TELUK WONDAMA', 34),
(475, 'TELUK BINTUNI', 34);

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
(1, 'WiFi'),
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
  `category_type_id` int(50) NOT NULL,
  `category_name` varchar(200) DEFAULT NULL,
  `category_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_type_id`, `category_name`, `category_slug`) VALUES
(1, 0, 'Indonesian', 'indonesian'),
(2, 0, 'Western', 'western'),
(3, 0, 'Asian', 'asian'),
(4, 0, 'Fusion', 'fusion'),
(5, 1, 'Daily News', 'daily-news'),
(6, 1, 'Hot News', 'hot-news'),
(7, 1, 'People & Inspiration', 'people-inspiration'),
(11, 2, 'Restaurant', 'restaurant'),
(12, 2, 'Cafe', 'cafe'),
(13, 2, 'Coffe Shop', 'coffe-shop'),
(14, 2, 'Nightlife', 'nightlife'),
(15, 3, 'Homefood', 'homefood'),
(16, 3, 'Frozen Food', 'frozen-food'),
(17, 3, 'Snack / Oleh-Oleh', 'snack-oleh-oleh'),
(18, 4, 'Makan Kenyang', 'makan-kenyang'),
(19, 4, 'Makan Ringan', 'makan-ringan'),
(20, 4, 'Sweet & Drink', 'sweet-drink');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `city_id` int(7) NOT NULL,
  `city_name` varchar(41) DEFAULT NULL,
  `city_prov_id` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `city_name`, `city_prov_id`) VALUES
(1, 'PIDIE JAYA', 1),
(2, 'SIMEULUE', 1),
(3, 'BIREUEN', 1),
(4, 'ACEH TIMUR', 1),
(5, 'ACEH UTARA', 1),
(6, 'PIDIE', 1),
(7, 'ACEH BARAT DAYA', 1),
(8, 'GAYO LUES', 1),
(9, 'ACEH SELATAN', 1),
(10, 'ACEH TAMIANG', 1),
(11, 'ACEH BESAR', 1),
(12, 'ACEH TENGGARA', 1),
(13, 'BENER MERIAH', 1),
(14, 'ACEH JAYA', 1),
(15, 'LHOKSEUMAWE', 1),
(16, 'ACEH BARAT', 1),
(17, 'NAGAN RAYA', 1),
(18, 'LANGSA', 1),
(19, 'BANDA ACEH', 1),
(20, 'ACEH SINGKIL', 1),
(21, 'SABANG', 1),
(22, 'ACEH TENGAH', 1),
(23, 'SUBULUSSALAM', 1),
(24, 'NIAS SELATAN', 2),
(25, 'MANDAILING NATAL', 2),
(26, 'DAIRI', 2),
(27, 'LABUHAN BATU UTARA', 2),
(28, 'TAPANULI UTARA', 2),
(29, 'SIMALUNGUN', 2),
(30, 'LANGKAT', 2),
(31, 'SERDANG BEDAGAI', 2),
(32, 'TAPANULI SELATAN', 2),
(33, 'ASAHAN', 2),
(34, 'PADANG LAWAS UTARA', 2),
(35, 'PADANG LAWAS', 2),
(36, 'LABUHAN BATU SELATAN', 2),
(37, 'PADANG SIDEMPUAN', 2),
(38, 'TOBA SAMOSIR', 2),
(39, 'TAPANULI TENGAH', 2),
(40, 'HUMBANG HASUNDUTAN', 2),
(41, 'SIBOLGA', 2),
(42, 'BATU BARA', 2),
(43, 'SAMOSIR', 2),
(44, 'PEMATANG SIANTAR', 2),
(45, 'LABUHAN BATU', 2),
(46, 'DELI SERDANG', 2),
(47, 'GUNUNGSITOLI', 2),
(48, 'NIAS UTARA', 2),
(49, 'NIAS', 2),
(50, 'KARO', 2),
(51, 'NIAS BARAT', 2),
(52, 'MEDAN', 2),
(53, 'PAKPAK BHARAT', 2),
(54, 'TEBING TINGGI', 2),
(55, 'BINJAI', 2),
(56, 'TANJUNG BALAI', 2),
(57, 'DHARMASRAYA', 3),
(58, 'SOLOK SELATAN', 3),
(59, 'SIJUNJUNG (SAWAH LUNTO SIJUNJUNG)', 3),
(60, 'PASAMAN BARAT', 3),
(61, 'SOLOK', 3),
(62, 'PASAMAN', 3),
(63, 'PARIAMAN', 3),
(64, 'TANAH DATAR', 3),
(65, 'PADANG PARIAMAN', 3),
(66, 'PESISIR SELATAN', 3),
(67, 'PADANG', 3),
(68, 'SAWAH LUNTO', 3),
(69, 'LIMA PULUH KOTO / KOTA', 3),
(70, 'AGAM', 3),
(71, 'PAYAKUMBUH', 3),
(72, 'BUKITTINGGI', 3),
(73, 'PADANG PANJANG', 3),
(74, 'KEPULAUAN MENTAWAI', 3),
(75, 'INDRAGIRI HILIR', 4),
(76, 'KUANTAN SINGINGI', 4),
(77, 'PELALAWAN', 4),
(78, 'PEKANBARU', 4),
(79, 'ROKAN HILIR', 4),
(80, 'BENGKALIS', 4),
(81, 'INDRAGIRI HULU', 4),
(82, 'ROKAN HULU', 4),
(83, 'KAMPAR', 4),
(84, 'KEPULAUAN MERANTI', 4),
(85, 'DUMAI', 4),
(86, 'SIAK', 4),
(87, 'TEBO', 5),
(88, 'TANJUNG JABUNG BARAT', 5),
(89, 'MUARO JAMBI', 5),
(90, 'KERINCI', 5),
(91, 'MERANGIN', 5),
(92, 'BUNGO', 5),
(93, 'TANJUNG JABUNG TIMUR', 5),
(94, 'SUNGAIPENUH', 5),
(95, 'BATANG HARI', 5),
(96, 'JAMBI', 5),
(97, 'SAROLANGUN', 5),
(98, 'PALEMBANG', 6),
(99, 'LAHAT', 6),
(100, 'OGAN KOMERING ULU TIMUR', 6),
(101, 'MUSI BANYUASIN', 6),
(102, 'PAGAR ALAM', 6),
(103, 'OGAN KOMERING ULU SELATAN', 6),
(104, 'BANYUASIN', 6),
(105, 'MUSI RAWAS', 6),
(106, 'MUARA ENIM', 6),
(107, 'OGAN KOMERING ULU', 6),
(108, 'OGAN KOMERING ILIR', 6),
(109, 'EMPAT LAWANG', 6),
(110, 'LUBUK LINGGAU', 6),
(111, 'PRABUMULIH', 6),
(112, 'OGAN ILIR', 6),
(113, 'BENGKULU TENGAH', 7),
(114, 'REJANG LEBONG', 7),
(115, 'MUKO MUKO', 7),
(116, 'KAUR', 7),
(117, 'BENGKULU UTARA', 7),
(118, 'LEBONG', 7),
(119, 'KEPAHIANG', 7),
(120, 'BENGKULU SELATAN', 7),
(121, 'SELUMA', 7),
(122, 'BENGKULU', 7),
(123, 'LAMPUNG UTARA', 8),
(124, 'WAY KANAN', 8),
(125, 'LAMPUNG TENGAH', 8),
(126, 'MESUJI', 8),
(127, 'PRINGSEWU', 8),
(128, 'LAMPUNG TIMUR', 8),
(129, 'LAMPUNG SELATAN', 8),
(130, 'TULANG BAWANG', 8),
(131, 'TULANG BAWANG BARAT', 8),
(132, 'TANGGAMUS', 8),
(133, 'LAMPUNG BARAT', 8),
(134, 'PESISIR BARAT', 8),
(135, 'PESAWARAN', 8),
(136, 'BANDAR LAMPUNG', 8),
(137, 'METRO', 8),
(138, 'BELITUNG', 9),
(139, 'BELITUNG TIMUR', 9),
(140, 'BANGKA', 9),
(141, 'BANGKA SELATAN', 9),
(142, 'BANGKA BARAT', 9),
(143, 'PANGKAL PINANG', 9),
(144, 'BANGKA TENGAH', 9),
(145, 'KEPULAUAN ANAMBAS', 10),
(146, 'BINTAN', 10),
(147, 'NATUNA', 10),
(148, 'BATAM', 10),
(149, 'TANJUNG PINANG', 10),
(150, 'KARIMUN', 10),
(151, 'LINGGA', 10),
(152, 'JAKARTA UTARA', 11),
(153, 'JAKARTA BARAT', 11),
(154, 'JAKARTA TIMUR', 11),
(155, 'JAKARTA SELATAN', 11),
(156, 'JAKARTA PUSAT', 11),
(157, 'KEPULAUAN SERIBU', 11),
(158, 'DEPOK', 12),
(159, 'KARAWANG', 12),
(160, 'CIREBON', 12),
(161, 'BANDUNG', 12),
(162, 'SUKABUMI', 12),
(163, 'SUMEDANG', 12),
(164, 'INDRAMAYU', 12),
(165, 'MAJALENGKA', 12),
(166, 'KUNINGAN', 12),
(167, 'TASIKMALAYA', 12),
(168, 'CIAMIS', 12),
(169, 'SUBANG', 12),
(170, 'PURWAKARTA', 12),
(171, 'BOGOR', 12),
(172, 'BEKASI', 12),
(173, 'GARUT', 12),
(174, 'PANGANDARAN', 12),
(175, 'CIANJUR', 12),
(176, 'BANJAR', 12),
(177, 'BANDUNG BARAT', 12),
(178, 'CIMAHI', 12),
(179, 'PURBALINGGA', 13),
(180, 'KEBUMEN', 13),
(181, 'MAGELANG', 13),
(182, 'CILACAP', 13),
(183, 'BATANG', 13),
(184, 'BANJARNEGARA', 13),
(185, 'BLORA', 13),
(186, 'BREBES', 13),
(187, 'BANYUMAS', 13),
(188, 'WONOSOBO', 13),
(189, 'TEGAL', 13),
(190, 'PURWOREJO', 13),
(191, 'PATI', 13),
(192, 'SUKOHARJO', 13),
(193, 'KARANGANYAR', 13),
(194, 'PEKALONGAN', 13),
(195, 'PEMALANG', 13),
(196, 'BOYOLALI', 13),
(197, 'GROBOGAN', 13),
(198, 'SEMARANG', 13),
(199, 'DEMAK', 13),
(200, 'REMBANG', 13),
(201, 'KLATEN', 13),
(202, 'KUDUS', 13),
(203, 'TEMANGGUNG', 13),
(204, 'SRAGEN', 13),
(205, 'JEPARA', 13),
(206, 'WONOGIRI', 13),
(207, 'KENDAL', 13),
(208, 'SURAKARTA (SOLO)', 13),
(209, 'SALATIGA', 13),
(210, 'SLEMAN', 14),
(211, 'BANTUL', 14),
(212, 'YOGYAKARTA', 14),
(213, 'GUNUNG KIDUL', 14),
(214, 'KULON PROGO', 14),
(215, 'GRESIK', 15),
(216, 'KEDIRI', 15),
(217, 'SAMPANG', 15),
(218, 'BANGKALAN', 15),
(219, 'SUMENEP', 15),
(220, 'SITUBONDO', 15),
(221, 'SURABAYA', 15),
(222, 'JEMBER', 15),
(223, 'PAMEKASAN', 15),
(224, 'JOMBANG', 15),
(225, 'PROBOLINGGO', 15),
(226, 'BANYUWANGI', 15),
(227, 'PASURUAN', 15),
(228, 'BOJONEGORO', 15),
(229, 'BONDOWOSO', 15),
(230, 'MAGETAN', 15),
(231, 'LUMAJANG', 15),
(232, 'MALANG', 15),
(233, 'BLITAR', 15),
(234, 'SIDOARJO', 15),
(235, 'LAMONGAN', 15),
(236, 'PACITAN', 15),
(237, 'TULUNGAGUNG', 15),
(238, 'MOJOKERTO', 15),
(239, 'MADIUN', 15),
(240, 'PONOROGO', 15),
(241, 'NGAWI', 15),
(242, 'NGANJUK', 15),
(243, 'TUBAN', 15),
(244, 'TRENGGALEK', 15),
(245, 'BATU', 15),
(246, 'TANGERANG', 16),
(247, 'SERANG', 16),
(248, 'PANDEGLANG', 16),
(249, 'LEBAK', 16),
(250, 'TANGERANG SELATAN', 16),
(251, 'CILEGON', 16),
(252, 'KLUNGKUNG', 17),
(253, 'KARANGASEM', 17),
(254, 'BANGLI', 17),
(255, 'TABANAN', 17),
(256, 'GIANYAR', 17),
(257, 'BADUNG', 17),
(258, 'JEMBRANA', 17),
(259, 'BULELENG', 17),
(260, 'DENPASAR', 17),
(261, 'MATARAM', 18),
(262, 'DOMPU', 18),
(263, 'SUMBAWA BARAT', 18),
(264, 'SUMBAWA', 18),
(265, 'LOMBOK TENGAH', 18),
(266, 'LOMBOK TIMUR', 18),
(267, 'LOMBOK UTARA', 18),
(268, 'LOMBOK BARAT', 18),
(269, 'BIMA', 18),
(270, 'TIMOR TENGAH SELATAN', 19),
(271, 'FLORES TIMUR', 19),
(272, 'ALOR', 19),
(273, 'ENDE', 19),
(274, 'NAGEKEO', 19),
(275, 'KUPANG', 19),
(276, 'SIKKA', 19),
(277, 'NGADA', 19),
(278, 'TIMOR TENGAH UTARA', 19),
(279, 'BELU', 19),
(280, 'LEMBATA', 19),
(281, 'SUMBA BARAT DAYA', 19),
(282, 'SUMBA BARAT', 19),
(283, 'SUMBA TENGAH', 19),
(284, 'SUMBA TIMUR', 19),
(285, 'ROTE NDAO', 19),
(286, 'MANGGARAI TIMUR', 19),
(287, 'MANGGARAI', 19),
(288, 'SABU RAIJUA', 19),
(289, 'MANGGARAI BARAT', 19),
(290, 'LANDAK', 20),
(291, 'KETAPANG', 20),
(292, 'SINTANG', 20),
(293, 'KUBU RAYA', 20),
(294, 'PONTIANAK', 20),
(295, 'KAYONG UTARA', 20),
(296, 'BENGKAYANG', 20),
(297, 'KAPUAS HULU', 20),
(298, 'SAMBAS', 20),
(299, 'SINGKAWANG', 20),
(300, 'SANGGAU', 20),
(301, 'MELAWI', 20),
(302, 'SEKADAU', 20),
(303, 'KOTAWARINGIN TIMUR', 21),
(304, 'SUKAMARA', 21),
(305, 'KOTAWARINGIN BARAT', 21),
(306, 'BARITO TIMUR', 21),
(307, 'KAPUAS', 21),
(308, 'PULANG PISAU', 21),
(309, 'LAMANDAU', 21),
(310, 'SERUYAN', 21),
(311, 'KATINGAN', 21),
(312, 'BARITO SELATAN', 21),
(313, 'MURUNG RAYA', 21),
(314, 'BARITO UTARA', 21),
(315, 'GUNUNG MAS', 21),
(316, 'PALANGKA RAYA', 21),
(317, 'TAPIN', 22),
(318, 'BANJAR', 22),
(319, 'HULU SUNGAI TENGAH', 22),
(320, 'TABALONG', 22),
(321, 'HULU SUNGAI UTARA', 22),
(322, 'BALANGAN', 22),
(323, 'TANAH BUMBU', 22),
(324, 'BANJARMASIN', 22),
(325, 'KOTABARU', 22),
(326, 'TANAH LAUT', 22),
(327, 'HULU SUNGAI SELATAN', 22),
(328, 'BARITO KUALA', 22),
(329, 'BANJARBARU', 22),
(330, 'KUTAI BARAT', 23),
(331, 'SAMARINDA', 23),
(332, 'PASER', 23),
(333, 'KUTAI KARTANEGARA', 23),
(334, 'BERAU', 23),
(335, 'PENAJAM PASER UTARA', 23),
(336, 'BONTANG', 23),
(337, 'KUTAI TIMUR', 23),
(338, 'BALIKPAPAN', 23),
(339, 'MALINAU', 24),
(340, 'NUNUKAN', 24),
(341, 'BULUNGAN (BULONGAN)', 24),
(342, 'TANA TIDUNG', 24),
(343, 'TARAKAN', 24),
(344, 'BOLAANG MONGONDOW (BOLMONG)', 25),
(345, 'BOLAANG MONGONDOW SELATAN', 25),
(346, 'MINAHASA SELATAN', 25),
(347, 'BITUNG', 25),
(348, 'MINAHASA', 25),
(349, 'KEPULAUAN SANGIHE', 25),
(350, 'MINAHASA UTARA', 25),
(351, 'KEPULAUAN TALAUD', 25),
(352, 'KEPULAUAN SIAU TAGULANDANG BIARO (SITARO)', 25),
(353, 'MANADO', 25),
(354, 'BOLAANG MONGONDOW UTARA', 25),
(355, 'BOLAANG MONGONDOW TIMUR', 25),
(356, 'MINAHASA TENGGARA', 25),
(357, 'KOTAMOBAGU', 25),
(358, 'TOMOHON', 25),
(359, 'BANGGAI KEPULAUAN', 26),
(360, 'TOLI-TOLI', 26),
(361, 'PARIGI MOUTONG', 26),
(362, 'BUOL', 26),
(363, 'DONGGALA', 26),
(364, 'POSO', 26),
(365, 'MOROWALI', 26),
(366, 'TOJO UNA-UNA', 26),
(367, 'BANGGAI', 26),
(368, 'SIGI', 26),
(369, 'PALU', 26),
(370, 'MAROS', 27),
(371, 'WAJO', 27),
(372, 'BONE', 27),
(373, 'SOPPENG', 27),
(374, 'SIDENRENG RAPPANG / RAPANG', 27),
(375, 'TAKALAR', 27),
(376, 'BARRU', 27),
(377, 'LUWU TIMUR', 27),
(378, 'SINJAI', 27),
(379, 'PANGKAJENE KEPULAUAN', 27),
(380, 'PINRANG', 27),
(381, 'JENEPONTO', 27),
(382, 'PALOPO', 27),
(383, 'TORAJA UTARA', 27),
(384, 'LUWU', 27),
(385, 'BULUKUMBA', 27),
(386, 'MAKASSAR', 27),
(387, 'SELAYAR (KEPULAUAN SELAYAR)', 27),
(388, 'TANA TORAJA', 27),
(389, 'LUWU UTARA', 27),
(390, 'BANTAENG', 27),
(391, 'GOWA', 27),
(392, 'ENREKANG', 27),
(393, 'PAREPARE', 27),
(394, 'KOLAKA', 28),
(395, 'MUNA', 28),
(396, 'KONAWE SELATAN', 28),
(397, 'KENDARI', 28),
(398, 'KONAWE', 28),
(399, 'KONAWE UTARA', 28),
(400, 'KOLAKA UTARA', 28),
(401, 'BUTON', 28),
(402, 'BOMBANA', 28),
(403, 'WAKATOBI', 28),
(404, 'BAU-BAU', 28),
(405, 'BUTON UTARA', 28),
(406, 'GORONTALO UTARA', 29),
(407, 'BONE BOLANGO', 29),
(408, 'GORONTALO', 29),
(409, 'BOALEMO', 29),
(410, 'POHUWATO', 29),
(411, 'MAJENE', 30),
(412, 'MAMUJU', 30),
(413, 'MAMUJU UTARA', 30),
(414, 'POLEWALI MANDAR', 30),
(415, 'MAMASA', 30),
(416, 'MALUKU TENGGARA BARAT', 31),
(417, 'MALUKU TENGGARA', 31),
(418, 'SERAM BAGIAN BARAT', 31),
(419, 'MALUKU TENGAH', 31),
(420, 'SERAM BAGIAN TIMUR', 31),
(421, 'MALUKU BARAT DAYA', 31),
(422, 'AMBON', 31),
(423, 'BURU', 31),
(424, 'BURU SELATAN', 31),
(425, 'KEPULAUAN ARU', 31),
(426, 'TUAL', 31),
(427, 'HALMAHERA BARAT', 32),
(428, 'TIDORE KEPULAUAN', 32),
(429, 'TERNATE', 32),
(430, 'PULAU MOROTAI', 32),
(431, 'KEPULAUAN SULA', 32),
(432, 'HALMAHERA SELATAN', 32),
(433, 'HALMAHERA TENGAH', 32),
(434, 'HALMAHERA TIMUR', 32),
(435, 'HALMAHERA UTARA', 32),
(436, 'YALIMO', 33),
(437, 'DOGIYAI', 33),
(438, 'ASMAT', 33),
(439, 'JAYAPURA', 33),
(440, 'PANIAI', 33),
(441, 'MAPPI', 33),
(442, 'TOLIKARA', 33),
(443, 'PUNCAK JAYA', 33),
(444, 'PEGUNUNGAN BINTANG', 33),
(445, 'JAYAWIJAYA', 33),
(446, 'LANNY JAYA', 33),
(447, 'NDUGA', 33),
(448, 'BIAK NUMFOR', 33),
(449, 'KEPULAUAN YAPEN (YAPEN WAROPEN)', 33),
(450, 'PUNCAK', 33),
(451, 'INTAN JAYA', 33),
(452, 'WAROPEN', 33),
(453, 'NABIRE', 33),
(454, 'MIMIKA', 33),
(455, 'BOVEN DIGOEL', 33),
(456, 'YAHUKIMO', 33),
(457, 'SARMI', 33),
(458, 'MERAUKE', 33),
(459, 'DEIYAI (DELIYAI)', 33),
(460, 'KEEROM', 33),
(461, 'SUPIORI', 33),
(462, 'MAMBERAMO RAYA', 33),
(463, 'MAMBERAMO TENGAH', 33),
(464, 'RAJA AMPAT', 34),
(465, 'MANOKWARI SELATAN', 34),
(466, 'MANOKWARI', 34),
(467, 'KAIMANA', 34),
(468, 'MAYBRAT', 34),
(469, 'SORONG SELATAN', 34),
(470, 'FAKFAK', 34),
(471, 'PEGUNUNGAN ARFAK', 34),
(472, 'TAMBRAUW', 34),
(473, 'SORONG', 34),
(474, 'TELUK WONDAMA', 34),
(475, 'TELUK BINTUNI', 34);

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
(1, 'Inside mall'),
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
(12, 'Baso Aci ', '', '<hr><p>Makanan yang sedang viral di kalangan anak milenial ini sekarang menjadi&nbsp;</p><p>salah satu makanan yang sangat di gemari dengan berbagai varian baru yang ada</p><p>menambah minat dari para penkmatnya.</p><p><br></p><img src=\"http://localhost/fbang/assets/images/seafod-santa-681.jpg\" style=\"width: 800px;\"><p><br></p>', '289098b431f76d402c8827c59f9ab907.jpg', '2020-08-11 00:53:22', '2020-08-20 08:14:12', 1, 1, '', 'baso-aci-', 1, 1, 1, 1, 1, 1, 1, ''),
(13, 'Gudeg jogoja', '', '<p></p><p>makan khas jogja</p><p><br></p><br><p></p><img src=\"http://localhost/fbang/assets/images/seafod-santa-68.jpg\" style=\"width: 800px;\">', 'aa1818548127b313bea0f480d9b991db.jpg', '2020-08-12 13:13:48', '2020-08-20 08:17:43', 1, 1, 'gudeg', 'gudeg-jogoja', 1, 1, 1, 1, 1, 0, 1, ''),
(19, 'Bebek Ginyo', '', '<span style=\"color: rgb(82, 82, 82); font-family: Lato, sans-serif; font-size: 16px; text-align: justify;\">Masakah dengan bahan daging bebek memiliki keunikan cita rasa sehingga memiliki penggemar tersendiri. Bebek Ginyo merupakan salah satu tempat makan di daerah Jakarta Selatan yang menyajikan berbagai jenis menu masakan bebek. Berbagai masakan dengan bahan utama daging bebek seperti bebek bakar dan bebek kremes. Penggemar masakan pedas juga dapat mencoba menu unik berupa bebek balado dan bebek cabe hijau. Sedangkan mereka yang kurang suka masakan bebek bakar juga dapat mencoba memesan pepes bebek di warung ini. Warung masakan bebek Ginyo yang berdiri sejak tahun 2007 ini dapat dikunjungi di Jalan Tebet Dalam nomor 12, Tebet, Jakarta Selatan.</span>', 'dcaccfae248b23ca53fcc956749709a7.jpg', '2020-08-19 02:24:54', NULL, 2, 2, 'bbq', 'facebook', 1, 1, 1, 1, 1, 0, 1, 'id5f3c8d76ba080'),
(20, 'Seafod Santa 68ga', '', '<p><span style=\"color: rgb(82, 82, 82); font-family: Lato, sans-serif; font-size: 16px; text-align: justify;\">Masakan laut atau sea food menjadi jenis makanan lain yang memiliki banyak penggemar. Salah satu tempat terbaik untuk menikmati masakan laut dengan rasa lezat dan harga terjangkau adalah Seafood Santa 68. Bahan – bahan segar dan cara mengolah dengan bumbu lezat menjadi salah satu alasan mengapa Seafood Santa 68 memiliki sangat banyak pelanggan. Berbagai menu masakan laut dengan bahan ikan, udang, cumi hingga kepiting dan kerang dapat dinikmati di warung makan yang sering disesaki pelanggan ini. Warung makan Seafood Santa 68 dapat dikunjungi di Jalan Wolter Monginsidi nomor 58 Senopati, Jakarta Selatan.</span></p><p><span style=\"color: rgb(82, 82, 82); font-family: Lato, sans-serif; font-size: 16px; text-align: justify;\"><br></span></p>', '987c2b7911590afad585a6e4a2ea5f17.jpg', '2020-08-19 04:26:49', NULL, 2, 2, 'seafood,baso', 'seafod-santa-68ga', 2, 2, 1, 2, 1, 0, 1, 'id5f3caa0906f7a'),
(29, 'Seafod Santa 68gsdzxs', '', 'sdasddd', '576b5f14d1c3c427ee8a64d0161214c3.png', '2020-08-19 09:49:59', NULL, 6, 4, 'grab,grabfood', 'seafod-santa-68gsdzxs', 1, 0, 0, 0, 1, 0, 1, 'id5f3cf5c7e250c'),
(30, 'Foodbang in web', '', 'Foodbang in web', '082c6fcf205ff1a0ce4770716a871039.png', '2020-08-20 03:42:02', '2020-08-20 10:43:11', 1, 1, 'foodbang', 'foodbang-in-web', 0, 0, 0, 0, 1, 0, 1, '');

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
(11, 'food'),
(13, 'grabfood'),
(14, 'gudeg'),
(15, 'foodbang');

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
(541370, '2020-08-19 00:38:44', '::1', 'Chrome'),
(541371, '2020-08-20 00:46:40', '::1', 'Chrome');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city_1`
--
ALTER TABLE `city_1`
  ADD PRIMARY KEY (`city_id`);

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
-- AUTO_INCREMENT for table `city_1`
--
ALTER TABLE `city_1`
  MODIFY `city_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=476;

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_additional`
--
ALTER TABLE `tbl_additional`
  MODIFY `additional_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_availability`
--
ALTER TABLE `tbl_availability`
  MODIFY `availability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=478;

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
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_navbar`
--
ALTER TABLE `tbl_navbar`
  MODIFY `navbar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `visit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=541372;

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
