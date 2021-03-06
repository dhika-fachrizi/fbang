-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 04:01 AM
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
  `additional_name` varchar(250) NOT NULL,
  `additional_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_additional`
--

INSERT INTO `tbl_additional` (`additional_id`, `additional_name`, `additional_category_id`) VALUES
(1, 'Ada Dessert', 11),
(2, 'WiFi', 11),
(4, 'Buffet', 11),
(5, 'Live Music', 11),
(6, 'Ada Dessert', 12),
(7, 'Wifi', 12),
(8, 'Seating Capacity Min 20', 12),
(9, 'Ada Coffee/Alkohol', 12),
(10, 'Live Music', 12),
(11, 'Ada Dessert', 13),
(12, 'Ada snacks', 13),
(13, 'Wifi', 13),
(14, 'wifi', 14),
(15, 'ada bar', 14),
(16, 'ada alkohol', 14),
(17, 'DJ booth', 14),
(18, 'Masak dirumah', 15),
(19, 'Jual hanya Online', 15),
(20, 'Jual Online', 16),
(21, 'Supermarket', 16),
(23, 'Ready to cook/fried', 16),
(24, 'ada kadaluarsa', 17),
(25, 'packaging bagus', 17),
(26, 'Seating Capacity max 20', 18),
(27, 'Gerobak', 18),
(28, 'Store depan toko', 18),
(29, 'Late night food', 18),
(30, 'Tidak ada makan berat', 19),
(31, 'Gerobak', 19),
(32, 'Dessert', 20),
(33, 'Packaging plastic', 20),
(34, 'to go drinks', 20),
(35, 'Vegan', 24),
(36, 'Vegetarian', 24);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_availability`
--

CREATE TABLE `tbl_availability` (
  `availability_id` int(11) NOT NULL,
  `availability_name` varchar(20) NOT NULL,
  `availability_img` varchar(200) NOT NULL,
  `availability_created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_availability`
--

INSERT INTO `tbl_availability` (`availability_id`, `availability_name`, `availability_img`, `availability_created_at`) VALUES
(1, 'gofood', 'gofood.png', 2147483647),
(2, 'grabfood', 'grabfood.png', 2147483647),
(5, 'shopee', 'shopee.png', 2147483647),
(6, 'bukalapak', 'bukalapak.svg', 2147483647),
(7, 'tokopedia', 'tokopedia.png', 2147483647);

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
(20, 4, 'Snacks/Drinks', 'snacks-drinks'),
(24, 5, 'Healthy Food', 'healthy-food');

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
-- Table structure for table `tbl_detail_category`
--

CREATE TABLE `tbl_detail_category` (
  `detail_category_id` int(11) NOT NULL,
  `detail_category_title` varchar(255) DEFAULT NULL,
  `detail_category_desc` varchar(200) DEFAULT NULL,
  `detail_category_meta_title` varchar(255) NOT NULL,
  `detail_category_image` varchar(255) DEFAULT NULL,
  `detail_category_meta_desc` varchar(255) NOT NULL,
  `detail_category_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_category`
--

INSERT INTO `tbl_detail_category` (`detail_category_id`, `detail_category_title`, `detail_category_desc`, `detail_category_meta_title`, `detail_category_image`, `detail_category_meta_desc`, `detail_category_category_id`) VALUES
(1, 'Titile For The RestaurantLorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quasi repudiandae error in unde delectus corporis atque nisi voluptates ', 'Jakarta raya indonesia', 'Jakarta raya indonesia', '69d3dfdef77187d0e3ca851b60af7152.jpg', 'Jakarta raya indonesia', 11),
(2, 'The Cafe Titile', 'The Cafe Description', '', '3a5f627ee7109f0e94d102dceafdf244.jpg', '', 12),
(5, 'Coffee shop dengan kopi-kopi pilihan terbaik! Mulai dari kopi susu sampai ke metode-metode yang mungkin blm pernah lo denger sebelumnya.', 'Coffee shop ', 'Coffee shop', '9ab69460a79b73fcbaf9de3c84af2c7c.jpg', 'Coffee shop dengan kopi-kopi pilihan terbaik! Mulai dari kopi susu sampai ke metode-metode yang mungkin blm pernah lo denger sebelumnya.', 13),
(6, 'snack drink', 'snack drink', 'snack drink', 'f52e7559ae92c52ca570d057e2f8e572.jpg', 'snack drink', 20);

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
  `detail_catlist_created_at` int(50) DEFAULT NULL,
  `detail_catlist_update_at` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_catlist`
--

INSERT INTO `tbl_detail_catlist` (`detail_catlist_id`, `detail_catlist_name`, `detail_catlist_availability`, `detail_catlist_social`, `detail_catlist_address`, `detail_catlist_phone`, `detail_catlist_gmaps`, `detail_catlist_created_at`, `detail_catlist_update_at`) VALUES
('id5f3c8d76ba080', 'Bebek Ginyo', '[]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com\"}]', 'gg nila cipadu', '088104047258', '', 2147483647, 2147483647),
('id5f3caa0906f7a', 'Seafod Santa 68', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood/santa\"},{\"availability_id\":\"2\",\"availability_name\":\"grabfood\",\"availability_img\":\"grabfood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"grabfood/santa\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com\"}]', 'gg nila cipadu', '088104047258', '{\"lat\":-6.239296700000001,\"lng\":106.7367328,\"name\":\"Cipadu, Larangan, Tangerang City, Banten, Indonesia\"}', 2147483647, 2147483647),
('id5f40b122eb898', 'Akira Back', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood.com\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com\"}]', 'MD Place Mezzanine Level, Setiabudi', '021123456789', '', 2147483647, 2147483647),
('id5f40b210b2ba5', 'Namaaz Dining', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com\"}]', 'jakarta selatan', '021123456789', '[]', 2147483647, 2147483647),
('id5f40b2c3dd925', 'Le Quartier', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com\"}]', 'Senopati, Kebayoran Baru', '02113456789', '', 2147483647, 2147483647),
('id5f40b31dd0b69', 'Pasola', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com\"}]', ' Jakarta Ritz Carlton,', '08122345322', '[]', 2147483647, 2147483647),
('id5f40b3b5ba114', 'Vong Kitchen', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com\"}]', ' Jakarta', '02113456789', '[]', 2147483647, 2147483647),
('id5f40b3fd81015', 'House of Yuen - Fairmont', '[]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com\"}]', 'Senayan, Jakarta Selatan', '02113456789', '', 2147483647, 2147483647),
('id5f48efe2aff62', 'Jimbaran Lounge', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood.com/\"},{\"availability_id\":\"2\",\"availability_name\":\"grabfood\",\"availability_img\":\"grabfood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"grabfood.com/\"},{\"availability_id\":\"5\",\"availability_name\":\"shopee\",\"availability_img\":\"shopee.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"shopee.com/\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com/\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com/\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com/\"}]', 'Di tengah hutan beton Sudirman', '02113456789', '', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_hltfood`
--

CREATE TABLE `tbl_detail_hltfood` (
  `detail_hltfood_id` varchar(255) NOT NULL,
  `detail_hltfood_name` varchar(100) NOT NULL,
  `detail_hltfood_availability` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `detail_hltfood_social` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `detail_hltfood_address` varchar(100) NOT NULL,
  `detail_hltfood_phone` varchar(15) NOT NULL,
  `detail_hltfood_gmaps` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `detail_hltfood_created_at` int(50) DEFAULT NULL,
  `detail_hltfood_update_at` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_hltfood`
--

INSERT INTO `tbl_detail_hltfood` (`detail_hltfood_id`, `detail_hltfood_name`, `detail_hltfood_availability`, `detail_hltfood_social`, `detail_hltfood_address`, `detail_hltfood_phone`, `detail_hltfood_gmaps`, `detail_hltfood_created_at`, `detail_hltfood_update_at`) VALUES
('id5f4e5d6867d8f', 'dwwqd', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood.com/\"},{\"availability_id\":\"2\",\"availability_name\":\"grabfood\",\"availability_img\":\"grabfood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"grabfood.com/\"},{\"availability_id\":\"5\",\"availability_name\":\"shopee\",\"availability_img\":\"shopee.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"shopee.com/\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com/\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com/\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com/\"}]', 'wdqwdqwdq', '02113456789', '[]', 2147483647, 2147483647),
('id5f59c9106ade5', 'OOatmeal', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood.com/\"},{\"availability_id\":\"2\",\"availability_name\":\"grabfood\",\"availability_img\":\"grabfood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"grabfood.com/\"},{\"availability_id\":\"5\",\"availability_name\":\"shopee\",\"availability_img\":\"shopee.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"shopee.com/\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com/\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com/\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com/\"}]', 'Jl. OOatmeal', '02113456789', '[]', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_news`
--

CREATE TABLE `tbl_detail_news` (
  `detail_news_id` varchar(255) NOT NULL,
  `detail_news_name` varchar(100) NOT NULL,
  `detail_news_availability` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `detail_news_social` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `detail_news_address` varchar(100) NOT NULL,
  `detail_news_phone` varchar(15) NOT NULL,
  `detail_news_gmaps` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `detail_news_created_at` int(50) DEFAULT NULL,
  `detail_news_update_at` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_news`
--

INSERT INTO `tbl_detail_news` (`detail_news_id`, `detail_news_name`, `detail_news_availability`, `detail_news_social`, `detail_news_address`, `detail_news_phone`, `detail_news_gmaps`, `detail_news_created_at`, `detail_news_update_at`) VALUES
('id5f3f7044af2f3', 'News Restoo', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com\"}]', 'gg nila cipadu', '088104047258', '', 2147483647, 2147483647),
('id5f3f9bf4548d1', 'Warung Nagih Jakarta', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood\"}]', '[\"{\\\"social_id\\\":\\\"1\\\",\\\"social_name\\\":\\\"facebook\\\",\\\"social_icon\\\":\\\"fab fa-facebook-f\\\",\\\"created_at\\\":\\\"1597723692\\\"}\",\"{\\\"social_id\\\":\\\"2\\\",\\\"social_name\\\":\\\"instagram\\\",\\\"social_icon\\\":\\\"fab fa-instagram\\\",\\\"created_at\\\":\\\"1597723692\\\"}\",\"{\\\"social_id\\\":\\\"5\\\",\\\"social_name\\\":\\\"twitter\\\",\\\"social_icon\\\":\\\"fab fa-twitter\\\",\\\"created_at\\\":\\\"1597723692\\\"}\"]', 'gg nila cipadu', '088104047258', '', 2147483647, 2147483647),
('id5f3f9c8b5f534', 'Joni Steak', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com\"}]', 'gg nila cipadu', '088104047258', '[]', 2147483647, 2147483647),
('id5f3f9d3528f63', 'Bubur Ayam Barito', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com\"}]', 'gg nila cipadu', '088104047258', '[]', 2147483647, 2147483647),
('id5f3f9e01ebae4', 'Pecenongan', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com\"}]', 'gg nila cipadu', '088104047258', '[]', 2147483647, 2147483647),
('id5f3f9e5d111aa', 'Cafe Siang Malam ˝ 18 ˝ Palmerah', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com\"}]', 'gg nila cipadu', '088104047258', '', 2147483647, 2147483647),
('id5f3f9ef40251b', 'OTW Food Street', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com\"}]', 'gg nila cipadu', '088104047258', '[]', 2147483647, 2147483647),
('id5f47a5417d489', 'indomi', '[]', '[]', 'indomi jakarta raya', '0887521545', '', 2147483647, 2147483647),
('id5f5aebb160143', 'asi pecel khas pedagang kaki lima, yang rasanya cocok di lidah mahasiswa', '[]', '[]', 'gg nila cipadu', '088104047258', '{\"lat\":-6.3082841,\"lng\":107.1751834,\"name\":\"Blok B2, Jl. Taman Tropika No.37, RT.38/RW.11, Sertajaya, Kec. Cikarang Tim., Bekasi, Jawa Barat 17530, Indonesia\"}', NULL, NULL);

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
  `detail_promo_created_at` int(50) DEFAULT NULL,
  `detail_promo_update_at` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_promo`
--

INSERT INTO `tbl_detail_promo` (`detail_promo_id`, `detail_promo_name`, `detail_promo_address`, `detail_promo_short_desc`, `detail_promo_time`, `detail_promo_start`, `detail_promo_end`, `detail_promo_created_at`, `detail_promo_update_at`) VALUES
('id5f3cf5c7e250c', 'Grab', 'Address', 'GrabFood Promo', 'sdsddd', 1597788000, 1671404400, 1597830599, 1598784407),
('id5f410e7d1466f', 'Grab', 'Jl.Ruko Selatan', 'Berlaku Hanya Bylan A', '00:00 - 12:00', 1598047200, 1672268400, 1598099069, 1599647675),
('id5f4113d9ae69f', 'asd', 'asd', 'asdsa', 'asd', 1598047200, 1598652000, 1598100441, 1598101244),
('id5f4a36ef3ce58', 'grabfoodsdsd', 'cipadusd', 'sd', '00:00 - 12:00', 1598652000, 1598824800, 1598699247, 1598699554),
('id5f59befa47450', 'Kode Grab', 'Jl.Ruko Selatan', 'Kode Promo Grab ', 'jan 10 - des  12', 1599688800, 1601416800, 1599717114, 1599717114);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_stfood`
--

CREATE TABLE `tbl_detail_stfood` (
  `detail_stfood_id` varchar(255) NOT NULL,
  `detail_stfood_name` varchar(100) NOT NULL,
  `detail_stfood_availability` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `detail_stfood_social` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `detail_stfood_address` varchar(100) NOT NULL,
  `detail_stfood_phone` varchar(15) NOT NULL,
  `detail_stfood_gmaps` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `detail_stfood_created_at` int(50) DEFAULT NULL,
  `detail_stfood_update_at` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_stfood`
--

INSERT INTO `tbl_detail_stfood` (`detail_stfood_id`, `detail_stfood_name`, `detail_stfood_availability`, `detail_stfood_social`, `detail_stfood_address`, `detail_stfood_phone`, `detail_stfood_gmaps`, `detail_stfood_created_at`, `detail_stfood_update_at`) VALUES
('id5f4e568c9c17d', 'raja kepiting', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood.com/\"},{\"availability_id\":\"2\",\"availability_name\":\"grabfood\",\"availability_img\":\"grabfood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"grabfood.com/\"},{\"availability_id\":\"5\",\"availability_name\":\"shopee\",\"availability_img\":\"shopee.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"shopee.com/\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com/\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com/\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com/\"}]', 'Jl. Raya Serpong No. 35, Pondok Jagung, Kec. Serpong Utara, Kab. Tangerang Selatan. ', '02113456789', '[]', 2147483647, 2147483647),
('id5f5048812c3b6', 'Nasi Tutug Oncom', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood.com/\"},{\"availability_id\":\"2\",\"availability_name\":\"grabfood\",\"availability_img\":\"grabfood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"grabfood.com/\"},{\"availability_id\":\"5\",\"availability_name\":\"shopee\",\"availability_img\":\"shopee.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"shopee.com/\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com/\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com/\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com/\"}]', 'Jl. Aria Santika No.43A, Margasari, Kec. Karawaci, Kota Tangerang, Banten', '+62881024130321', '', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_umkm`
--

CREATE TABLE `tbl_detail_umkm` (
  `detail_umkm_id` varchar(255) NOT NULL,
  `detail_umkm_name` varchar(100) NOT NULL,
  `detail_umkm_availability` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `detail_umkm_social` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `detail_umkm_address` varchar(100) NOT NULL,
  `detail_umkm_phone` varchar(15) NOT NULL,
  `detail_umkm_gmaps` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `detail_umkm_created_at` int(50) DEFAULT NULL,
  `detail_umkm_update_at` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_umkm`
--

INSERT INTO `tbl_detail_umkm` (`detail_umkm_id`, `detail_umkm_name`, `detail_umkm_availability`, `detail_umkm_social`, `detail_umkm_address`, `detail_umkm_phone`, `detail_umkm_gmaps`, `detail_umkm_created_at`, `detail_umkm_update_at`) VALUES
('id5f4e5454b23a9', 'Dinas Koperasi Dan UKM Kota Tangerang Selatan', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood.com/\"},{\"availability_id\":\"2\",\"availability_name\":\"grabfood\",\"availability_img\":\"grabfood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"grabfood.com/\"},{\"availability_id\":\"5\",\"availability_name\":\"shopee\",\"availability_img\":\"shopee.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"shopee.com/\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com/\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com/\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com/\"}]', 'Serua, Kec. Ciputat, Kota Tangerang Selatan, Banten 15414', '02113456789', '[]', 2147483647, 2147483647),
('id5f4f5e1277196', 'efewf', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood.com/\"},{\"availability_id\":\"2\",\"availability_name\":\"grabfood\",\"availability_img\":\"grabfood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"grabfood.com/\"},{\"availability_id\":\"5\",\"availability_name\":\"shopee\",\"availability_img\":\"shopee.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"shopee.com/\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com/\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com/\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com/\"}]', 'fewfew', '02113456789', '[]', 2147483647, 2147483647),
('id5f4fa82189ef0', 'Geprek Bensu Cimonee', '[{\"availability_id\":\"1\",\"availability_name\":\"gofood\",\"availability_img\":\"gofood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"gofood.com/\"},{\"availability_id\":\"2\",\"availability_name\":\"grabfood\",\"availability_img\":\"grabfood.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"grabfood.com/\"},{\"availability_id\":\"5\",\"availability_name\":\"shopee\",\"availability_img\":\"shopee.png\",\"availability_created_at\":\"2147483647\",\"availability_value\":\"shopee.com/\"}]', '[{\"social_id\":\"1\",\"social_name\":\"facebook\",\"social_icon\":\"fab fa-facebook-f\",\"created_at\":\"1597723692\",\"social_value\":\"facebook.com/\"},{\"social_id\":\"2\",\"social_name\":\"instagram\",\"social_icon\":\"fab fa-instagram\",\"created_at\":\"1597723692\",\"social_value\":\"instagram.com/\"},{\"social_id\":\"5\",\"social_name\":\"twitter\",\"social_icon\":\"fab fa-twitter\",\"created_at\":\"1597723692\",\"social_value\":\"twitter.com/\"}]', 'Plaza Shinta, Jl. Teuku Umar No.38, RT.003/RW.008, Cimone Jaya, Kec. Karawaci, Kota Tangerang, Bante', '02113456789', '', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_future_article`
--

CREATE TABLE `tbl_future_article` (
  `id` int(11) NOT NULL,
  `name_slot` varchar(250) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_future_article`
--

INSERT INTO `tbl_future_article` (`id`, `name_slot`, `post_id`) VALUES
(1, 'Slot 1', 41),
(2, 'Slot 2', 38),
(3, 'Slot 3', 20),
(4, 'Slot 4', 40),
(5, 'Slot 5', 43);

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
  `location_name` varchar(250) NOT NULL,
  `location_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`location_id`, `location_name`, `location_category_id`) VALUES
(1, 'Dalam Mall', 11),
(2, 'Stand Alone', 11),
(4, 'Kantor', 11),
(5, 'Hotel', 11),
(6, 'Dalam Mall', 12),
(7, 'Stand Alone', 12),
(8, 'Kantor', 12),
(9, 'Hotel', 12),
(10, 'Semua', 12),
(11, 'Dalam Mall', 13),
(12, 'Stand Alone', 13),
(13, 'Kantor', 13),
(14, 'Hotel', 13),
(15, 'Semua', 13),
(16, 'Dalam Mall', 14),
(17, 'Stand Alone', 14),
(18, 'Kantor', 14),
(19, 'Hotel', 14),
(20, 'Semua', 14),
(21, 'Rumah', 15),
(22, 'Rumah', 16),
(23, 'Factory', 16),
(24, 'Factory', 17),
(25, 'Rumah', 17),
(26, 'Stand Alone', 18),
(27, 'Kaki Lima', 18),
(28, 'Stand Alone', 19),
(29, 'Kaki Lima', 19),
(30, 'Dalam Mall', 20),
(31, 'Stand Alone', 20),
(32, 'Kantor', 20),
(33, 'Semua', 20),
(34, 'Dalam Mall', 24),
(35, 'Stand Alone', 24),
(36, 'Kantor', 24),
(37, 'Semua', 24);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meta`
--

CREATE TABLE `tbl_meta` (
  `meta_id` int(11) NOT NULL,
  `meta_name` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_meta`
--

INSERT INTO `tbl_meta` (`meta_id`, `meta_name`, `meta_title`, `meta_desc`) VALUES
(1, 'home', 'home meta title', 'home meta descs'),
(2, 'about us', '', ''),
(3, 'promo', '', ''),
(4, 'search', '', ''),
(5, 'tags', '', '');

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
  `post_description_title` varchar(255) NOT NULL,
  `post_contents` longtext DEFAULT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `post_image_desc` varchar(255) NOT NULL,
  `post_date` timestamp NULL DEFAULT current_timestamp(),
  `post_last_update` datetime DEFAULT NULL,
  `post_type_id` int(11) NOT NULL,
  `post_category_id` int(11) DEFAULT NULL,
  `post_subcategory_id` int(11) NOT NULL,
  `post_tags` varchar(225) DEFAULT NULL,
  `post_slug` varchar(250) DEFAULT NULL,
  `post_feature_article` int(11) NOT NULL,
  `post_city_id` int(11) NOT NULL,
  `post_location_id` int(11) NOT NULL,
  `post_halal_id` int(11) NOT NULL,
  `post_additional_id` int(11) NOT NULL,
  `post_status` int(11) DEFAULT NULL COMMENT '1=Publish, 0=Unpublish',
  `post_views` int(11) DEFAULT 0,
  `post_user_id` int(11) DEFAULT NULL,
  `post_detail_id` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `email_news_update` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_description`, `post_description_title`, `post_contents`, `post_image`, `post_image_desc`, `post_date`, `post_last_update`, `post_type_id`, `post_category_id`, `post_subcategory_id`, `post_tags`, `post_slug`, `post_feature_article`, `post_city_id`, `post_location_id`, `post_halal_id`, `post_additional_id`, `post_status`, `post_views`, `post_user_id`, `post_detail_id`, `email_news_update`) VALUES
(2, '7 Tips untuk menemukan passion Anda', '', '', '<p style=\"outline: 0px !important;\">Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><h3 style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(78,=\"\" 94,=\"\" 106);\"=\"\">Ini adalah Sub Heading&nbsp;</h3><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p>', '787f035149ba2179b8bc4c5ac01c5001.jpg', '', '2019-04-05 07:52:06', '2019-04-14 09:08:10', 0, 1, 0, 'Psikologi,Motivasi', 'tips-untuk-menemukan-passion-anda', 0, 0, 0, 0, 0, 1, 5, 1, '', 0),
(3, '5 Alasan kenapa Anda perlu berbuat baik', '', '', '<p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p style=\"outline: 0px !important;\">Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><h3 style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(78,=\"\" 94,=\"\" 106);\"=\"\">Ini adalah Sub Heading&nbsp;</h3><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p>', 'a06ae9341405a292ae12b67ed85dc1dc.jpg', '', '2019-04-05 12:25:13', '2019-04-14 09:08:51', 0, 2, 0, 'Psikologi,Motivasi,Kesehatan', '5-alasan-kenapa-anda-perlu-berbuat-baik', 0, 0, 0, 0, 0, 1, 0, 1, '', 0),
(4, '7 Tips untuk meningkatkan pendapatan Anda', '', '', '<p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p style=\"outline: 0px !important;\">Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><h3 style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" color:=\"\" rgb(78,=\"\" 94,=\"\" 106);\"=\"\">Ini adalah Sub Heading&nbsp;</h3><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p style=\"outline: 0px !important;\">Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini adalah artikel konten.</p>', '9a734ed5d107f0f378da0a1e13dfc92e.jpg', '', '2019-04-05 12:26:55', '2019-04-14 09:09:16', 0, 3, 0, 'Teknologi,Motivasi', 'tips-untuk-meningkatkan-pendapatan-anda', 0, 0, 0, 0, 0, 1, 0, 1, '', 0),
(7, '3 Teknik Efektif Membaca Cepat', '', '', '<p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten.</p><p style=\"outline: 0px !important;\">Ini adalah\r\n artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><h3 style=\"font-family: \" open=\"\">Ini adalah Sub Heading&nbsp;</h3><p style=\"outline: 0px !important;\">Ini\r\n adalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten.</p><p style=\"outline: 0px !important;\">Ini\r\n adalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten.</p>', 'b69bd34db0726b6cf7747a816c99254f.jpg', '', '2020-01-12 04:30:20', NULL, 0, 1, 0, 'Psikologi,Motivasi', '3-teknik-efektif-membaca-cepat', 0, 0, 0, 0, 0, 1, 0, 1, '', 0),
(9, '4 Cara Menjadi Lebih Aktif dalam Belajar', '', '', '<p>Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten.</p><p style=\"outline: 0px !important;\">Ini adalah\r\n artikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten.</p><p>Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten.</p><h3 style=\"font-family: \" open=\"\">Ini adalah Sub Heading&nbsp;</h3><p style=\"outline: 0px !important;\">Ini\r\n adalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten.</p><p style=\"outline: 0px !important;\">Ini\r\n adalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten.</p><p>Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten.</p><p>Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten.</p><p>Ini adalah artikel konten Ini \r\nadalah artikel konten Ini adalah artikel konten Ini adalah artikel \r\nkonten Ini adalah artikel konten Ini adalah artikel konten Ini adalah \r\nartikel konten Ini adalah artikel konten Ini adalah artikel konten Ini \r\nadalah artikel konten.</p>', 'ec77cde530b2eb464b9add2c31316b10.jpg', '', '2020-01-12 04:34:01', NULL, 0, 1, 0, 'Psikologi,Motivasi', '4-cara-menjadi-lebih-aktif-dalam-belajar', 0, 0, 0, 0, 0, 1, 0, 1, '', 0),
(11, 'BASO ACI AKANG', '', '', 'baso aci akanga baso yang sedang viral di kalangan anak milenial terutama di daerah tangeranag', '58fe0c716e50edeabc7737a07cdf1db9.jpg', '', '2020-08-10 13:22:44', NULL, 0, 1, 0, 'Psikologi', 'baso-aci-akang', 0, 2, 2, 1, 1, 1, 0, 1, '', 0),
(12, 'Baso Aci ', '', '', '<hr><p>Makanan yang sedang viral di kalangan anak milenial ini sekarang menjadi&nbsp;</p><p>salah satu makanan yang sangat di gemari dengan berbagai varian baru yang ada</p><p>menambah minat dari para penkmatnya.</p><p><br></p><img src=\"http://localhost/fbang/assets/images/seafod-santa-681.jpg\" style=\"width: 800px;\"><p><br></p>', '289098b431f76d402c8827c59f9ab907.jpg', '', '2020-08-11 00:53:22', '2020-08-20 08:14:12', 1, 1, 0, '', 'baso-aci-', 0, 1, 1, 1, 1, 1, 0, 1, '', 0),
(13, 'Gudeg jogoja', '', '', '<p></p><p>makan khas jogja</p><p><br></p><br><p></p><img src=\"http://localhost/fbang/assets/images/seafod-santa-68.jpg\" style=\"width: 800px;\">', 'aa1818548127b313bea0f480d9b991db.jpg', '', '2020-08-12 13:13:48', '2020-08-20 08:17:43', 1, 1, 0, 'gudeg', 'gudeg-jogoja', 0, 1, 1, 1, 1, 1, 0, 1, '', 0),
(19, 'Bebek Ginyo', '', '', '<span style=\"color: rgb(82, 82, 82); font-family: Lato, sans-serif; font-size: 16px; text-align: justify;\">Masakah dengan bahan daging bebek memiliki keunikan cita rasa sehingga memiliki penggemar tersendiri. Bebek Ginyo merupakan salah satu tempat makan di daerah Jakarta Selatan yang menyajikan berbagai jenis menu masakan bebek. Berbagai masakan dengan bahan utama daging bebek seperti bebek bakar dan bebek kremes. Penggemar masakan pedas juga dapat mencoba menu unik berupa bebek balado dan bebek cabe hijau. Sedangkan mereka yang kurang suka masakan bebek bakar juga dapat mencoba memesan pepes bebek di warung ini. Warung masakan bebek Ginyo yang berdiri sejak tahun 2007 ini dapat dikunjungi di Jalan Tebet Dalam nomor 12, Tebet, Jakarta Selatan.</span>', 'dcaccfae248b23ca53fcc956749709a7.jpg', '', '2020-08-19 02:24:54', NULL, 2, 2, 0, 'bbq', 'facebook', 0, 1, 1, 1, 1, 1, 1, 1, 'id5f3c8d76ba080', 0),
(20, 'Seafod Santa 68ga', '', '', '<p><span style=\"color: rgb(82, 82, 82); font-family: Lato, sans-serif; font-size: 16px; text-align: justify;\"><span style=\"font-weight: bold;\">Masakan laut atau sea food menjadi jenis makanan lain yang memiliki banyak penggemar. Salah satu tempat terbaik untuk menikmati masakan laut dengan rasa lezat dan harga terjangkau adalah Seafood Santa 68</span>. Bahan – bahan segar dan cara mengolah dengan bumbu lezat menjadi salah satu alasan mengapa Seafood Santa 68 memiliki sangat banyak pelanggan. Berbagai menu masakan laut dengan bahan ikan, udang, cumi hingga kepiting dan kerang dapat dinikmati di warung makan yang sering disesaki pelanggan ini. Warung makan Seafood Santa 68 dapat dikunjungi di Jalan Wolter Monginsidi nomor 58 Senopati, Jakarta Selatan.</span></p><p><span style=\"color: rgb(82, 82, 82); font-family: Lato, sans-serif; font-size: 16px; text-align: justify;\"><br></span></p>', 'Seafod_Santa_68ga-1599646628.jpg', 'MLD Sport', '2020-08-19 04:26:49', NULL, 2, 11, 1, 'seafood,baso', 'seafod-santa-68ga', 0, 2, 2, 2, 1, 1, 2, 1, 'id5f3caa0906f7a', 1),
(29, 'GrabFood Promo TERBARU!', '', '', 'GrabFood Promo', '576b5f14d1c3c427ee8a64d0161214c3.png', '', '2020-08-19 09:49:59', NULL, 6, 0, 0, 'grab,grabfood', 'grabfood-promo', 0, 1, 0, 0, 0, 1, 1, 1, 'id5f3cf5c7e250c', 1),
(30, 'Foodbang in web', '', '', 'Foodbang in web', '082c6fcf205ff1a0ce4770716a871039.png', '', '2020-08-20 03:42:02', '2020-08-20 10:43:11', 1, 1, 0, 'foodbang', 'foodbang-in-web', 0, 0, 0, 0, 0, 1, 1, 1, '', 1),
(31, 'test news', '', '', 'test news', '7296ddd40a9c351e4b33a27e97917d83.jpg', '', '2020-08-21 06:57:08', NULL, 1, 5, 0, 'makanan murah', 'gofood', 0, 152, 1, 1, 2, 1, 0, 1, 'id5f3f7044af2f3', 0),
(32, 'Warung Nagih Jakarta', 'ni adalah salah satu tempat makan yang diburu oleh para mahasiswa, pelajar dan juga para pegawai kantor. Bagaimana tidak rumah makan yang berada di Jl. Kapten Tendean, Kav 41, mampang, Jakarta Selatan ini, memang memberikan aneka sajikan kuliner dengan harga yang cukup murah. Adapun aneka sajian yang disugunkan antara lain roti bakar, aneka olahan mie rebus, aneka minuman hangat atau dingin, dll. Buka dari jam 4.30 sore hingga jam 1 dini hari, tentunya pas untuk Anda yang mbaru pulang kerja dan merasa lapar.', '', '<span style=\"color: rgb(82, 82, 82); font-family: lato, sans-serif; font-size: 16px; text-align: justify;\">ni adalah salah satu tempat makan yang diburu oleh para mahasiswa, pelajar dan juga para pegawai kantor. Bagaimana tidak rumah makan yang berada di Jl. Kapten Tendean, Kav 41, mampang, Jakarta Selatan ini, memang memberikan aneka sajikan kuliner dengan harga yang cukup murah. Adapun aneka sajian yang disugunkan antara lain roti bakar, aneka olahan mie rebus, aneka minuman hangat atau dingin, dll. Buka dari jam 4.30 sore hingga jam 1 dini hari, tentunya pas untuk Anda yang mbaru pulang kerja dan merasa lapar.</span>', 'Warung_Nagih_Jakarta-1599646388.jpg', 'MLD Sport', '2020-08-21 10:03:32', NULL, 1, 5, 0, 'warung', 'warung-nagih-jakarta', 0, 152, 0, 0, 0, 1, 2, 1, 'id5f3f9bf4548d1', 0),
(33, 'Bubur Kwang Tung', 'Makan steak malam-malam, kenapa tidak ! Adalah Joni Steak yang berlokasi beberapa tempat di Jakarta, seperti di Jl. Kalimalang Raya No. 28 Blok A2/3C Pondok Kelapa / Lampiri, Jl. Samanhudi No. 65, Pasar Baru Jakarta Pusat, atau di Jl. Gajah Mada No. 91 / dekat dengan Bakmi Gajah Mada.  Buka mulai pukul 6 sore hingga jam 1 dini hari, tentunya pas untuk Anda dan teman yang sedang lapar di malam hari. Harga yang ditawarkan untuk 1 porsi tidak terlalu mahal, hanya sekitar Rp 20.000 atau hingga Rp 30.000. Adapun menu andalan di tempat ini adalah salmon steak,  tenderloin atau sirloin steak.', '', '<span style=\"color: rgb(82, 82, 82); font-family: lato, sans-serif; font-size: 16px; text-align: justify;\">Ingin mencari bubur hangat di malam hari, kunjungi saja bubur Kwang Tung yang ada di Jl, Pecenongan, No 671, Jakarta Pusat. Menu utama di tempat ini tentu saja bubur, yang bernama bubur Kwang Tung. Ini adalah menu bubur seafood Hongkong, sekaligus menu utama yang harus Anda coba. &nbsp;&nbsp;Rumah makan yang buka selama 24 jam ini menyajikan beberapa menu bubur seafood, seperti kepiting, ayam, udang, ikan, sapi, dll. Selain menu bubur, menu lainnya yang juga ada di rumah makan tersebut adalah chinese food, dll.</span>', '30f65fc5b8d1bb0d50432b774deb2ae1.jpg', '', '2020-08-21 10:06:03', NULL, 1, 5, 0, 'steak', 'gofood-com', 0, 152, 1, 1, 1, 1, 2, 1, 'id5f3f9c8b5f534', 0),
(34, 'Bubur Ayam Barito', 'Bubur Ayam barito yang terletak di Jl. Gandaria Tengah 3, Jakarta ini dapat Anda jadikan tempat makan malam berikutnya. Seperti nama restoran tersebut, menu utama dari rumah makan tersebut adalah bubur ayam. Namun yang membedakan bubur ayam di tempat ini dan tempat lainnya adalah teksturnya yang lembut, dengan tambahan toping yang cukup banyak, membuat 1 porsi bubur, cukup untuk mengisi perut Anda. Harga untuk 1 porsi sendiri juga tidak terlalu mahal, hanya sekitar Rp 3.000 hingga Rp 13.000. Rumah makan yang satu ini buka mulai jam 7 pagi hingga tengah malam.', '', '<span style=\"color: rgb(82, 82, 82); font-family: lato, sans-serif; font-size: 16px; text-align: justify;\">Bubur Ayam barito yang terletak di Jl. Gandaria Tengah 3, Jakarta ini dapat Anda jadikan tempat makan malam berikutnya. Seperti nama restoran tersebut, menu utama dari rumah makan tersebut adalah bubur ayam. Namun yang membedakan bubur ayam di tempat ini dan tempat lainnya adalah teksturnya yang lembut, dengan tambahan toping yang cukup banyak, membuat 1 porsi bubur, cukup untuk mengisi perut Anda. Harga untuk 1 porsi sendiri juga tidak terlalu mahal, hanya sekitar Rp 3.000 hingga Rp 13.000. Rumah makan yang satu ini buka mulai jam 7 pagi hingga tengah malam.</span>', 'cdfee9843405b646748639d40dc262c3.jpg', '', '2020-08-21 10:08:53', NULL, 1, 5, 0, 'bubur ayam', 'grab-co-id', 0, 153, 1, 1, 1, 1, 2, 1, 'id5f3f9d3528f63', 0),
(35, 'Jl. Pecenongan', 'Selain bubur Kwang Tung, daerah Pecenongan juga memiliki aneka kuliner menarik lainnya. Kawsan yang satu ini menjadi surga kuliner malam di daerah Jakarta. Bagi Anda yang merasa lapar di malam hari, tidak ada salahnya mengunjungi kawasan yang satu ini. Aneka kuliner yang dijajakan di tempat ini mulai ramai sejak jam 5 hingga dini hari. Ada banyak sekali makanan yang disajikan di tempat ini, mulai dari aneka seafood, chinese foof, dan aneka kuliner lainnya. Untuk masalah harga tidak perlu khawatir, sebabnya kuliner yang ada di tempat ini dibandrol dengan harga yang murah meriah, namun pastinya tetap enak.', '', '<span style=\"color: rgb(82, 82, 82); font-family: lato, sans-serif; font-size: 16px; text-align: justify;\">Selain bubur Kwang Tung, daerah Pecenongan juga memiliki aneka kuliner menarik lainnya. Kawsan yang satu ini menjadi surga kuliner malam di daerah Jakarta. Bagi Anda yang merasa lapar di malam hari, tidak ada salahnya mengunjungi kawasan yang satu ini. Aneka kuliner yang dijajakan di tempat ini mulai ramai sejak jam 5 hingga dini hari. Ada banyak sekali makanan yang disajikan di tempat ini, mulai dari aneka seafood, chinese foof, dan aneka kuliner lainnya. Untuk masalah harga tidak perlu khawatir, sebabnya kuliner yang ada di tempat ini dibandrol dengan harga yang murah meriah, namun pastinya tetap enak.</span>', '1e44084611ea7e0e2014982dba25aa68.jpg', '', '2020-08-21 10:12:17', NULL, 1, 5, 0, 'cafe', 'jl--pecenongan', 0, 153, 2, 1, 2, 1, 4, 1, 'id5f3f9e01ebae4', 0),
(36, 'Cafe Siang Malam ? 18 ? Palmerah', 'Seperti namanya, tempat makan yang satu ini, buka dari siang hari hingga malam hari, tepatnya hingga pukul 2 atau 3 dini hari. Menu makanan yang disajikan di tempat ini adalah menu makanan simpel dan biasa dikonsusmi oleh anak muda, seperti roti bakar, ayam penyet, nasi sarden, dll. Ini akan menjadi tempat nongkrong berikutnya yang pas untuk Anda dan rekan lainnya sepulang kerja.', '', '<span style=\"color: rgb(82, 82, 82); font-family: lato, sans-serif; font-size: 16px; text-align: justify;\">Seperti namanya, tempat makan yang satu ini, buka dari siang hari hingga malam hari, tepatnya hingga pukul 2 atau 3 dini hari. Menu makanan yang disajikan di tempat ini adalah menu makanan simpel dan biasa dikonsusmi oleh anak muda, seperti roti bakar, ayam penyet, nasi sarden, dll. Ini akan menjadi tempat nongkrong berikutnya yang pas untuk Anda dan rekan lainnya sepulang kerja.</span>', '0d49618fa6dc203f8fdeaf054ab14cc5.jpg', '', '2020-08-21 10:13:49', NULL, 1, 5, 0, 'cafe', 'cafe-siang-malam--18--palmerah', 0, 156, 2, 1, 2, 1, 6, 1, 'id5f3f9e5d111aa', 0),
(37, 'Kemang Food Festifal', 'OTW Food Street', '', '<span style=\"color: rgb(82, 82, 82); font-family: lato, sans-serif; font-size: 16px; text-align: justify;\">kuliner malam Jakarta berikutnya adalah Kemang Food Festifal. Seperti namanya, kuliner yang satu ini berlokasi di kawasan Kemang, Tepatnya di Jl. Kemang Raya no 19, Mampang Prapatan, Jakarta Selatan. Di lokasi yang satu ini, Anda akan menemukan berbagai macam menu makanan dengan konsep food courd. Menu makanan yang ditawarkan, mulai dari aneka menu tradisional, hingga aneka makanan Eropa. Untuk masalah harga, tidak pelru khawatir, aneka kuliner yang ada di tempat ini memiliki harga yang sangat terjangkau untuk kalangan mahasiswa dan pelajar. Lokasi tempat makan tentunya sangat nyaman, selain itu, tempat makan yang satu ini, buka mulai jam 5 sore hingga tengah malam.</span>', '8ed7a6f2a53370bb61e3c9b6a85b2f38.jpg', '', '2020-08-21 10:16:20', NULL, 1, 5, 0, 'steak,cafe', 'gofood-com-1933888409', 0, 16, 2, 1, 2, 1, 8, 1, 'id5f3f9ef40251b', 0),
(38, 'Akira Back', 'Akira Back', '', '<p style=\"margin-top: 5px; margin-bottom: 15px; border: 0px; padding: 0px; line-height: 1.6; color: rgb(102, 102, 102); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\">Akira Back adalah salah satu restaurant bintang 5 yang terletak di Setiabudi, Jakarta Selatan. Akira menghadirkan makanan khas Jepang yang difusion dengan makanan Korea. Kretivitas dari Chef Akira sendiri lah dalam mengolah setiap menu di restauran ini membuat Akira Back Restaurant memiliki banyak penggemar walaupun memiliki harga yang mahal.</p><p style=\"margin-top: 5px; margin-bottom: 15px; border: 0px; padding: 0px; line-height: 1.6; color: rgb(102, 102, 102); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\">Setiap review tentang restauran ini selalu menceritakan jika ingin sekali-kali mencicipi hidangan di restauran ini, setidaknya Anda harus membawa uang sekitar diatas Rp900 ribu rupiah untuk 2 orang. Tapi kebanyakan orang berujung setidaknya harus mengeluarkan Rp1,3 juta sebagai standar budget minimal untuk menikmati hidangan di restauran ini secara&nbsp;<em style=\"border: 0px; margin: 0px; padding: 0px;\">proper</em>&nbsp;mulai dari appetizer, main course, dessert hingga pajak dan biaya servicenya.</p><p style=\"margin-top: 5px; margin-bottom: 15px; border: 0px; padding: 0px; line-height: 1.6; color: rgb(102, 102, 102); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\">Menu yang paling direkomendasikan dari restauran ini adalah Pizza Tuna, Seared Halibut, Spring Chicken &amp; Foie Roulade, Wagyu Cheek dan Black Forest.</p>', '7ca533b41dbb1db811060a92e2c64d34.jpg', '', '2020-08-22 05:46:10', NULL, 2, 11, 2, 'restaurant terbaik', 'akira-back', 0, 155, 1, 1, 1, 1, 1, 1, 'id5f40b122eb898', 0),
(39, 'Namaaz Dining', 'Namaaz Dining', '', '<p style=\"font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.65em; color: rgb(25, 25, 25);\">Restoran yang terletak di Kebayoran Baru, Jakarta Selatan ini memiliki set menu seharga Rp 1,25 juta untuk sekali&nbsp;<em>dining in</em>. Set menu mahal ini dianggap wajar saja karena set makanan yang akan ditawarkan ke kamu akan membuat kamu bingung dan terheran-heran.</p><p style=\"font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.65em; color: rgb(25, 25, 25);\">Berawal dari Youtuber populer Raditya Dika yang mereview berbagai hidangan unik yang ditawarkan oleh restoran ini. Namaaz Dining pun berhasil viral dan menjadi incaran banyak para food hunter berikutnya.</p><p style=\"font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.65em; color: rgb(25, 25, 25);\">Teknik Gastronomi Molekuler yang diciptakan dalam penyajian setiap hidangan di restoran ini menjadi kan Namaaz Dining menjadi satu-satunya<a href=\"https://republika.co.id/tag/restoran-di-jakarta\" style=\"text-decoration-line: underline; color: rgb(0, 0, 0); font-weight: 600; line-height: 1.35em;\">&nbsp;restoran di Jakarta&nbsp;</a>bahka mungkin di Indonesia yang mengusung konsep tersebut.</p><p style=\"font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.65em; color: rgb(25, 25, 25);\">Menu-menu di restoran ini ada yang bisa meledak sendiri, berbentuk abstrak hingga super aneh. Di mana bentuk/visual dari menu tersebut bisa menipu kamu sedemikian rupa sehingga ketika kamu mencobanya kamu akan sangat terkejut. Pokoknya mind blowing banget deh.</p><p style=\"font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.65em; color: rgb(25, 25, 25);\">Yang unik lagi dari restoran ini adalah, durasi makannya dan sistem bookingnya. Setiap pengunjung yang ingin makan di restoran ini wajib melakukan booking terlebih dahulu, tidak boleh terlambat dan harus memberikan informasi yang detail tentang alergi makanan yang dimiliki.</p><p style=\"font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.65em; color: rgb(25, 25, 25);\">Untuk durasi makannya, karena penyajian makananannya yg unik waktu yang dibutuhkan untuk mengeluarkan setiap menu pun memakan banyak waktu juga, jadi setiap pengunjung setidaknya harus menghabiskan 2-3 jam setiap kunjungan untuk setiap pemilihan paket set menu Rp 1,25 juta tersebut.</p>', 'dfe57ccd077e2b227a34ac61fb6dd322.jpg', '', '2020-08-22 05:50:08', NULL, 2, 11, 2, 'restaurant terbaik', 'namaaz-dining', 0, 155, 1, 1, 1, 1, 0, 1, 'id5f40b210b2ba5', 0),
(40, 'Le Quartier', 'Le Quartier', '', '<p style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" helvetica,=\"\" sans-serif;=\"\" font-size:=\"\" 18px;=\"\" line-height:=\"\" 1.65em;=\"\" color:=\"\" rgb(25,=\"\" 25,=\"\" 25);\"=\"\">enopati, Kebayoran Baru memang gudangnya tempat makanan mewah, selain Namaaz Dining. Le Quartier juga merupakan salah satu restoran mewah populer yang ada di kawasan elite tersebut. Le Quartier adalah restoran ala eropa yang menyajikan makanan khas perancis.</p><p style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" helvetica,=\"\" sans-serif;=\"\" font-size:=\"\" 18px;=\"\" line-height:=\"\" 1.65em;=\"\" color:=\"\" rgb(25,=\"\" 25,=\"\" 25);\"=\"\">Interior dari restoran ini sendiri pun kental dengan suasana Eropanya, dengan&nbsp;<em>furniture</em>&nbsp;kayu yang disusun secara cantik, lampu gantung&nbsp;<em>chandilier</em>&nbsp;mini yang bergantu di setiap meja. Hingga suasananya yang sedikit temaram membuat makan malam di restoran ini seperti layaknya makan malam di Prancis.</p><p style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" helvetica,=\"\" sans-serif;=\"\" font-size:=\"\" 18px;=\"\" line-height:=\"\" 1.65em;=\"\" color:=\"\" rgb(25,=\"\" 25,=\"\" 25);\"=\"\">Walaupun elite, Le Quartier adalah golongan restoran elite yang masih memiliki menu makanan yang ramah untuk kantong. Kamu masih bisa makan secara pas dan kenyang dengan biaya Rp 500-Rp 600 ribu untuk 2 orang di restoran ini untuk set menu mulai dari appetizer,&nbsp;<em>main course</em>&nbsp;hingga&nbsp;<em>dessert.</em></p>', '0e1c8001370d505dd3f90858faa0ff99.jpg', '', '2020-08-22 05:53:07', NULL, 2, 11, 2, 'restaurant terbaik', 'le-quartier', 0, 155, 1, 1, 1, 1, 1, 1, 'id5f40b2c3dd925', 0),
(41, 'Pasola – The Ritz Carlton Pacific Place', 'Pasola', '', '<p style=\"font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.65em; color: rgb(25, 25, 25);\">Dari namanya saja kamu pasti tau kalau restoran ini pasti restoran berkelas bintang 5 dengan interior restoran yang super mewah dan elegan. Terletak di lantai 6 di salah satu hotel mewah di Jakarta Ritz Carlton, Pasola sudah sering masuk<a href=\"https://republika.co.id/tag/daftar-restoran\" style=\"text-decoration-line: underline; color: rgb(0, 0, 0); font-weight: 600; line-height: 1.35em;\">&nbsp;daftar restoran&nbsp;</a>mewah yang paling direkomendasikan di Jakarta.</p><p style=\"font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.65em; color: rgb(25, 25, 25);\">Pasola menyajikan menu&nbsp;<em>fusion</em>&nbsp;layakanya restoran mewah pada umumnya, yaitu gabungan kreasi makanan barat dengan hidangan tradisional Indonesia. Interior mewah dan disajikan pemandangan indah Ibu Kota membuat siapa saja tentu akan merasa nyaman untuk menghabiskan waktu makan dengan keluarga.</p><p style=\"font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.65em; color: rgb(25, 25, 25);\">Untuk bisa menikmati hidangan di Pasola secara pas dan kenyang rata-rata para pengunjung setidaknya harus mengeluarkan Rp 700 ribu untuk 2 orang. Tapi untuk kamu yang mau menikmati hidangan di restoran ini dengan harga yang lebih murah lagi. Bisa mencoba hidangan buffet nya mulai dari Rp 298 ribu di&nbsp;<em>weekdays</em>&nbsp;dan Rp 398 ribu di&nbsp;<em>weekend.</em>&nbsp;Di Buffet Pasola ini kamu bisa memakan semua hidangan&nbsp;<em>buffet</em>&nbsp;sebanyak apa pun atau&nbsp;<em>all you can eat</em>.</p>', 'ac7d4117bcbb13387749d153966d635c.jpg', '', '2020-08-22 05:54:37', NULL, 2, 11, 0, 'restaurant terbaik', 'pasola--the-ritz-carlton-pacific-place', 0, 156, 1, 2, 1, 1, 2, 1, 'id5f40b31dd0b69', 0),
(42, 'Vong Kitchen', 'Vong Kitchen', '', '<p style=\"font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.65em; color: rgb(25, 25, 25);\">vong Kitchen menjadi favorit pecinta kuliner, terutama kuliner Eropa karena restoran ini adalah satu-satunya di Jakarta yang pengolahan makanannya dilakukan oleh Chef dengan gelar Michelin. Bagi yang sedikit bingung, Michelin adalah gelar profesional tertinggi di dalam industri kuliner. Gelar ini sangatlah ekslusif dan prestigius, itu mengapa masih sangat sedikit restoran-restoran yang menyandang gelar ini dan kebanyakan di antaranya berada di luar negeri.</p><p style=\"font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.65em; color: rgb(25, 25, 25);\">Tapi sekarang kamu tidak perlu khawatir, sekarang restoran dengan level yang sama telah hadir, Vong Kitchen yang berlokasi di SCBD, Jakarta Selatan adalah restoran yang menyajikan hidangan khas Prancis dan Inggris sebagai konsep menu utama mereka.</p><p style=\"font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.65em; color: rgb(25, 25, 25);\">Semua menunya sendiri diciptakan langsung oleh chef Michelin bintang 3 asal Prancis, Jean-Georges Vongerichten, bersama putranya Cédric Vongerichten yang mengikuti jejak sang ayah sebagai seorang chef profesional. Dengan semua fakta di atas, tidak heran&nbsp;<em>dong</em>&nbsp;jika harganya juga bisa menggoyang dompet kamu?</p><p style=\"font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.65em; color: rgb(25, 25, 25);\">Biaya yang setidaknya harus kamu keluarkan untuk menikmati hidangan di restoran ini secara pas dan kenyang adalah Rp 800 ribu untuk 2 orang. Dengan kualitas rasa dan penyajiannya tentu saja harga tersebut dikatakan cukup pantas, terutama untuk para pecinta kuliner Eropa.</p>', '8033d3d99827cd4a7c23995060a3c1d7.jpg', '', '2020-08-22 05:57:09', NULL, 2, 11, 0, 'restaurant terbaik', 'vong-kitchen', 0, 153, 1, 1, 1, 1, 1, 1, 'id5f40b3b5ba114', 0),
(43, 'House of Yuen - Fairmont', 'House of Yuen - Fairmont', '', '<p style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" helvetica,=\"\" sans-serif;=\"\" font-size:=\"\" 18px;=\"\" line-height:=\"\" 1.65em;=\"\" color:=\"\" rgb(25,=\"\" 25,=\"\" 25);\"=\"\">Untuk kamu pecinta kuliner Cina, pasti tertarik&nbsp;<em>dong</em>&nbsp;sekali-sekali mencoba hidangan khas negara pohon bambu ini tapi versi mewah?</p><p style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" helvetica,=\"\" sans-serif;=\"\" font-size:=\"\" 18px;=\"\" line-height:=\"\" 1.65em;=\"\" color:=\"\" rgb(25,=\"\" 25,=\"\" 25);\"=\"\">Berlokasi di daerah Senayan, Jakarta Selatan, House of Yuen – Fairmont adalah restoran hidangan kuliner khas Cina yang wajib kamu kunjungi walaupun hanya sekali dalam seumur hidup!. Berada di lt.3 di salah satu hotel bintang 5 di Jakarta, Fairmont Hotel tentu saja kata mewah dan VIP adalah deskripsi yang tepat untuk menggambarkan restoran autentik Cina tersebut.</p><p style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" helvetica,=\"\" sans-serif;=\"\" font-size:=\"\" 18px;=\"\" line-height:=\"\" 1.65em;=\"\" color:=\"\" rgb(25,=\"\" 25,=\"\" 25);\"=\"\">Pernah baca artikel yang mengatakan, bahwa makan di restoran ini bisa rogoh kocek sampai Rp 100 juta? Yep House of Yuen adalah restoran tersebut.</p><p style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" helvetica,=\"\" sans-serif;=\"\" font-size:=\"\" 18px;=\"\" line-height:=\"\" 1.65em;=\"\" color:=\"\" rgb(25,=\"\" 25,=\"\" 25);\"=\"\">Menyediakan hidangan Cina kelas satu tentu saja biaya untuk makan di restoran tersebut tidak bisa dianggap murah. Kalau kamu penasaran banget dan nekat, jangan lupa yang siapkan budget sekitar Rp 700 ribu untuk sekali makan yang berlaku untuk 1 orang saja jika kamu mau makan dengan porsi pas dan kenyang di restoran ini.</p>', '7d101d7ddf3fa96c7ff41f73ed8d0398.jpg', '', '2020-08-22 05:58:21', NULL, 2, 11, 2, 'restaurant terbaik,privateroom,whiteglass,promo, tomato marmalade, salsa verde, ciabatta 10', 'house-of-yuen---fairmont', 0, 155, 1, 1, 1, 1, 0, 1, 'id5f40b3fd81015', 0),
(44, 'Promo GrabFood GrabFood GrabFoodGrabFoodGrabFoodGrabFood', 'Promo GrabFood Agustus 2020', '', '<ol><li style=\"text-size-adjust: 100%; margin-top: 0px;\">Pesan aneka makanan dan minuman pilihan Anda dengan kode promo GrabFood ini untuk diskon Rp 20.000 off. Promo ini berlaku dengan metode pembayaran menggunakan OVO.</li><li class=\"tb tc td\" style=\"text-size-adjust: 100%; margin-top: 4px;\"><b>Penawaran Diskon:</b>&nbsp;50% off Max Rp 20.000</li><li class=\"tb tc td\" style=\"text-size-adjust: 100%; margin-top: 4px;\"><b>Minimum Belanja:</b>&nbsp;Rp 40.000</li><li class=\"tb tc td\" style=\"text-size-adjust: 100%; margin-top: 4px;\"><b>Pembatasan Pengguna:</b>&nbsp;Pengguna baru</li><li class=\"tb tc td\" style=\"text-size-adjust: 100%; margin-top: 4px;\"><b>Keterbatasan Brand:</b>&nbsp;Untuk semua outlet</li><li class=\"tb tc td\" style=\"text-size-adjust: 100%; margin-top: 4px;\"><b>Ketentuan Berlaku:</b>&nbsp;3x pemakaian</li></ol>', 'Promo_GrabFood_GrabFood_GrabFoodGrabFoodGrabFoodGrabFood-1599647675-Foodbang.jpg', 'Grab ', '2020-08-22 12:24:29', NULL, 6, 0, 0, 'grab', 'promo-grabfood-grabfood-grabfoodgrabfoodgrabfoodgrabfood', 0, 153, 0, 0, 0, 1, 1, 1, 'id5f410e7d1466f', 0),
(46, 'Donat Indomie', 'Indomie Meta Description', 'Indomie Meta Titlesd', '<p style=\"margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px;\">Merupakan salah satu kreasi Indomie yang unik, donat Indomie mampu mencuri hati setiap orang. Bagaimana tidak? Hanya dalam sekali gigitan, kalian akan mendapatkan rasa khas Indomie yang dipadu dengan potongan daging serta lelehan keju mozarella.</p><p style=\"margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px;\"><em>Hmm, so yummy!</em></p>', 'b00f91287a1e32d1cb2885a15b3de34d.jpg', 'MLD Sporsd', '2020-08-27 12:21:21', NULL, 1, 5, 0, 'indomie', 'donat-indomie', 0, 153, 0, 0, 0, 1, 6, 1, 'id5f47a5417d489', 0),
(48, 'Jimbaran Lounge', 'Di tengah hutan beton Sudirman kamu bisa juga lho merasakan suasana yang menyejukkan ala Bali. Dimana lagi kalau bukan di Jimbaran Lounge, Ayana Midplaza. Dengan konsep tempat makan terapung di atas kolam, Jimbaran Lounge bisa jadi alternatif nongkrong yang menyegarkan pikiran.', 'Di tengah hutan beton ', '<span style=\"color: rgb(82, 82, 82); font-family: Poppins; font-size: 16px;\">Di tengah hutan beton Sudirman kamu bisa juga lho merasakan suasana yang menyejukkan ala Bali. Dimana lagi kalau bukan di Jimbaran Lounge, Ayana Midplaza. Dengan konsep tempat makan terapung di atas kolam, Jimbaran Lounge bisa jadi alternatif nongkrong yang menyegarkan pikiran.</span>', '7386c1365583e84f9028ea05fabc6e70.jpeg', '@ayanajakarta', '2020-08-28 11:52:02', NULL, 2, 11, 1, 'outdoor', 'jimbaran-lounge', 0, 156, 1, 1, 1, 1, 0, 1, 'id5f48efe2aff62', 0),
(49, 'Promo GoFood Juli 2020: PSBB, Promonya Serius Banyak Banget!s', 'grabpromosd', 'grabpromosdsd', '<ol><li>Promo GoFood Juli 2020: PSBB, Promonya Serius Banyak Banget!</li><li>Promo GoFood Juli 2020: PSBB, Promonya Serius Banyak Banget!</li><li>Promo GoFood Juli 2020: PSBB, Promonya Serius Banyak Banget!</li><li>Promo GoFood Juli 2020: PSBB, Promonya Serius Banyak Banget!</li><li>Promo GoFood Juli 2020: PSBB, Promonya Serius Banyak Banget!</li><li>Promo GoFood Juli 2020: PSBB, Promonya Serius Banyak Banget!<br></li></ol>', '40d94caa276ae78d6e39b786b4c4b7a6.jpg', 'grabfoodd', '2020-08-29 11:07:27', NULL, 6, 0, 0, 'grabfood', 'promo-gofood-juli-2020--psbb--promonya-serius-banyak-banget!s', 0, 153, 0, 0, 0, 1, 0, 1, 'id5f4a36ef3ce58', 0),
(50, 'Kerupuk Seblak', 'Jika biasanya seblak terbuat dari kerupuk yang sudah direndam air kemudian diberi bumbu pedas. Lain halnya dengan kerupuk seblak ini. ', 'Kerupuk Seblak', '<p dir=\"ltr\" style=\"margin-bottom: 1rem; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; color: rgb(0, 0, 0) !important;\">Jika biasanya seblak terbuat dari kerupuk yang sudah direndam air kemudian diberi bumbu pedas. Lain halnya dengan kerupuk seblak ini. Rasanya tetap sama dengan pedas level tinggi hanya saja ini tidak direndam air melainkan langsung digoreng bersama dengan bumbu halus hingga mereka tercampur dan menghasilkan rasa pedas dan gurih.</p><p dir=\"ltr\" style=\"margin-bottom: 1rem; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; color: rgb(0, 0, 0) !important;\">Peluang bisnis cemilan kerupuk seblak ini sama bagusnya dengan seblak pada umumnya</p><p dir=\"ltr\" style=\"margin-bottom: 1rem; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; color: rgb(0, 0, 0) !important;\">karena orang Indonesia memang pencinta pedas. Jadi tak ada salahnya jika Anda membuka</p><p dir=\"ltr\" style=\"margin-bottom: 1rem; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; color: rgb(0, 0, 0) !important;\">bisnis kerupuk seblak ini. Camilan pedas ini pun bisa Anda jual dengan harga Rp 2000</p>', 'ce3258d4605591d66968d10a98893925.jpg', 'Kerupuk Seblak', '2020-09-01 14:01:56', NULL, 2, 15, 20, 'kerupuk', 'kerupuk-seblak', 0, 250, 21, 1, 19, 1, 0, 1, 'id5f4e5454b23a9', 0),
(52, 'Raja Kepiting', 'Jika Anda ingin menikmati makanan seafood Anda bisa mengunjungi tempat makan satu ini. Suasananya yang nyaman akan membuat nafsu makan Anda nambah. Apalagi menu di tempat ini sangat banyak dan membuat Anda bingung.', 'Raja Kepiting', '<p style=\"margin-bottom: 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: Lora; vertical-align: baseline; color: rgb(66, 66, 66); background-color: rgb(245, 245, 245);\">Jika Anda ingin menikmati makanan seafood Anda bisa mengunjungi tempat makan satu ini. Suasananya yang nyaman akan membuat nafsu makan Anda nambah. Apalagi menu di tempat ini sangat banyak dan membuat Anda bingung. Namun menu andalan di Raja Kepiting yakni Cumi Goreng dan Kepiting Asam Manis. Untuk kepitingnya bisa memesan jantan atau yang betina, dimana yang betina akan ada telur di dalamnya.</p><p style=\"margin-bottom: 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: Lora; vertical-align: baseline; color: rgb(66, 66, 66); background-color: rgb(245, 245, 245);\">Bagi Anda yang tidak menyukai seafood Anda juga bisa memesan menu selain seafood. Tentu saja soal rasanya tidak bisa diragukan lagi. Untuk menuju tempat makan ini Anda bisa ke Jl. Raya Serpong KM 7 No. 35, Tangerang Selatan. Harga yang ditawarkan di tempat makan ini cukup terjangkau yakni mulai dari Rp. 80 ribuan. Jam bukanya mulai dari 10.30 hingga 22.00 WIB.</p>', '16568a78308a8f20c5cd8cf92006caf9.jpg', 'Raja Kepiting', '2020-09-01 14:11:24', NULL, 2, 18, 33, 'kepiting', 'raja-kepiting-13738249', 0, 250, 26, 1, 28, 1, 0, 1, 'id5f4e568c9c17d', 0),
(53, 'asdqw', 'wdwqddqw', 'wqddwq', 'wqdqwwqdqwd', 'eaec9f2e2d2cb706b78b0a9ded080e9b.jpg', 'dwqwqddwq', '2020-09-01 14:25:55', NULL, 2, 24, 48, 'dqwdqw', 'asdqw', 0, 322, 34, 1, 35, 1, 0, 1, 'id5f4e59f35b321', 0),
(54, 'aaaaa', 'wqdwqdwdq', 'wdwdq', 'wdqqwdwqd', '99ddf2a0cd428f09e3fe6b1edc7e2a90.png', 'wqdwqd', '2020-09-01 14:40:40', NULL, 2, 11, 1, 'wqdwq', 'aaaaa', 0, 322, 1, 1, 1, 1, 0, 1, 'id5f4e5d6867d8f', 0),
(55, 'wefewfefw', 'fewfew', 's', 'fewfewewf', '48b99d071e7a1e24b5ed9fb75be80281.jpg', 'fewfewfew', '2020-09-02 08:55:46', NULL, 2, 16, 25, 'ewffew', 'wefewfefw', 0, 33, 22, 1, 21, 1, 0, 1, 'id5f4f5e1277196', 0),
(56, ' Ayam geprek', 'Sedang digandrungi ayam berbalut tepung yang renyah. Fried chicken dengan bentuk outlet gerobak kini makin digemari', ' Ayam geprek', '<span style=\"color: rgb(51, 51, 51); font-family: helvetica, arial, sans-serif; font-size: 16px;\">Sedang digandrungi ayam berbalut tepung yang renyah. Fried chicken dengan bentuk outlet gerobak kini makin digemari. Beberapa fried chicken lokal pun menjamur di berbagai tempat. Banyak juga yang menawarkan paket kemitraan atau franchise untuk siapa saja yang ingin membuka usaha.</span><br style=\"color: rgb(51, 51, 51); font-family: helvetica, arial, sans-serif; font-size: 16px;\"><br style=\"color: rgb(51, 51, 51); font-family: helvetica, arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(51, 51, 51); font-family: helvetica, arial, sans-serif; font-size: 16px;\">Sebut saja Ranisa Fried Chicken, Sabana, Orchi Chicken hingga Cheese Chicken yang menjajakan ayamnya dengan harga dibawah Rp 15 ribuan. Paket yang dijual juga sangat beragam, mulai dari gerobak sampai outlet.</span>', '_Ayam_geprek-1599646901.jpg', ' Ayam geprek', '2020-09-02 14:11:45', NULL, 3, 15, 20, 'ayam', '-ayam-geprek', 0, 322, 21, 1, 19, 1, 0, 1, 'id5f4fa82189ef0', 0);
INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_description`, `post_description_title`, `post_contents`, `post_image`, `post_image_desc`, `post_date`, `post_last_update`, `post_type_id`, `post_category_id`, `post_subcategory_id`, `post_tags`, `post_slug`, `post_feature_article`, `post_city_id`, `post_location_id`, `post_halal_id`, `post_additional_id`, `post_status`, `post_views`, `post_user_id`, `post_detail_id`, `email_news_update`) VALUES
(57, 'Nasi Tutug Oncom', 'Nasi tutug oncom merupakan kuliner khas dari Sunda. Ini merupakan nasi yang diaduk dengan oncom goreng maupun oncom bakar. Biasanya disajikan dalam keadaan hangat dan dicampur dengan bumbu seperti cabai,bawang putih, kencur, dan oncom hitam. Nasi ini juga biasa disajikan dengan lauk gurih seperti gurami goreng dan ayam goreng.', 'Nasi Tutug Oncom', '<span style=\"color: rgb(0, 0, 0); font-family: \" ??????=\"\" pro=\"\" w3\",=\"\" \"hiragino=\"\" kaku=\"\" gothic=\"\" pro\",=\"\" ????,=\"\" meiryo,=\"\" osaka,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;\"=\"\">Nasi tutug oncom merupakan kuliner khas dari Sunda. Ini merupakan nasi yang diaduk dengan oncom goreng maupun oncom bakar. Biasanya disajikan dalam keadaan hangat dan dicampur dengan bumbu seperti cabai,bawang putih, kencur, dan oncom hitam. Nasi ini juga biasa disajikan dengan lauk gurih seperti gurami goreng dan ayam goreng.</span><br style=\"color: rgb(0, 0, 0); font-family: \" ??????=\"\" pro=\"\" w3\",=\"\" \"hiragino=\"\" kaku=\"\" gothic=\"\" pro\",=\"\" ????,=\"\" meiryo,=\"\" osaka,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;\"=\"\"><br style=\"color: rgb(0, 0, 0); font-family: \" ??????=\"\" pro=\"\" w3\",=\"\" \"hiragino=\"\" kaku=\"\" gothic=\"\" pro\",=\"\" ????,=\"\" meiryo,=\"\" osaka,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;\"=\"\"><span style=\"color: rgb(0, 0, 0); font-family: \" ??????=\"\" pro=\"\" w3\",=\"\" \"hiragino=\"\" kaku=\"\" gothic=\"\" pro\",=\"\" ????,=\"\" meiryo,=\"\" osaka,=\"\" sans-serif;=\"\" font-size:=\"\" 16px;\"=\"\">Anda bisa mampir ke Nasi Tutug Oncom Pamulang di jalan Pamulang Permai I No 21 Tangerang. Ada paket nasi timbel hingga nasi tutug oncom. Anda bisa habiskan sekitar Rp 50.000 untuk dua orang di tempat makan ini.</span>', 'Nasi_Tutug_Oncom-1599646985.jpg', 'Nasi Tutug Oncom', '2020-09-03 01:36:01', NULL, 4, 18, 33, 'nasi', 'nasi-tutug-oncom', 0, 246, 26, 2, 27, 1, 0, 1, 'id5f5048812c3b6', 0),
(58, 'Kode Promo Grab Potongan 20K', '', '', '<span style=\"color: rgb(86, 90, 92); font-family: &quot;Noto Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; letter-spacing: -0.35px;\">Gunakan metode pembayaran GrabPay, debit atau kartu kredit dan gunakan kode promo dapatkan kesempatan mendapatkan potongan 20K untuk 5 kali perjalanan. Segera download aplikasi Grab sekarang juga di App Store. beragam info tentang promo grabfood , kode voucher grab dan kode grab pilihan.</span>', 'Kode_Promo_Grab_Potongan_20K-1599717114-Foodbang.png', 'Kode Grab', '2020-09-10 05:51:54', NULL, 6, 0, 0, 'grab', 'kode-promo-grab-potongan-20k', 0, 153, 0, 0, 0, 1, 0, 1, 'id5f59befa47450', 0),
(59, 'Oatmeal', 'The key to a healthy diet is to eat the right amount of calories for how active you are so you balance the energy you consume with the energy you use.\r\n\r\nIf you eat or drink more than your body needs, you&#039;ll put on weight because the energy you do not use is stored as fat. If you eat and drink too little, you&#039;ll lose weight.\r\n\r\nYou should also eat a wide range of foods to make sure you&#039;re getting a balanced diet and your body is receiving all the nutrients it needs.\r\n\r\nIt&#039;s recommended that men have around 2,500 calories a day (10,500 kilojoules). Women should have around 2,000 calories a day (8,400 kilojoules).', 'Oatmeal', '<div>The key to a healthy diet is to eat the right amount of calories for how active you are so you balance the energy you consume with the energy you use.</div><div><br></div><div>If you eat or drink more than your body needs, you\'ll put on weight because the energy you do not use is stored as fat. If you eat and drink too little, you\'ll lose weight.</div><div><br></div><div>You should also eat a wide range of foods to make sure you\'re getting a balanced diet and your body is receiving all the nutrients it needs.</div><div><br></div><div>It\'s recommended that men have around 2,500 calories a day (10,500 kilojoules). Women should have around 2,000 calories a day (8,400 kilojoules).</div>', 'Oatmeal-1599719696-Foodbang.jpg', 'These 8 practical tips cover the basics of healthy eating and can help you make healthier choices.', '2020-09-10 06:34:56', NULL, 5, 24, 48, 'Oatmeal', 'oatmeal', 0, 11, 34, 1, 35, 1, 0, 1, 'id5f59c9106ade5', 1),
(60, 'asi pecel khas pedagang kaki lima, yang rasanya cocok di lidah mahasiswas', 'Untuk menu makanan pedagang kaki lima, siapa sih yang bisa menolak enaknya pecel? Apalagi pecel khas madiun yang antara pedas, manis dan gurihnya pas itu. Wiiih… Murahnya juga ngak ketulungan. Mahasiswa mah jelas suka!\r\n\r\n', 'asi pecel khas pedagang kaki lima, yang rasanya cocok di lidah mahasiswa', 'dddsd', 'asi_pecel_khas_pedagang_kaki_lima_yang_rasanya_cocok_di_lidah_mahasiswas-1599794097-Foodbang.jpg', 'MLD Sport', '2020-09-11 03:14:57', NULL, 1, 5, 0, 'pecel', 'asi-pecel-khas-pedagang-kaki-lima--yang-rasanya-cocok-di-lidah-mahasiswas', 0, 246, 0, 0, 0, 1, 1, 1, 'id5f5aebb160143', NULL);

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
(53, '2020-08-11 00:54:03', '::1', 12),
(54, '2020-08-21 02:48:01', '::1', 30),
(55, '2020-08-21 05:09:07', '::1', 29),
(56, '2020-08-21 05:16:42', '::1', 20),
(57, '2020-08-21 05:19:16', '::1', 19),
(58, '2020-08-21 10:17:08', '::1', 36),
(59, '2020-08-21 11:17:18', '::1', 32),
(60, '2020-08-21 11:21:31', '::1', 34),
(61, '2020-08-21 11:43:32', '::1', 35),
(62, '2020-08-22 03:24:18', '::1', 36),
(63, '2020-08-24 05:02:44', '::1', 38),
(64, '2020-08-24 05:02:51', '::1', 20),
(65, '2020-08-24 05:03:03', '::1', 44),
(66, '2020-08-24 05:03:12', '::1', 41),
(67, '2020-08-24 05:06:13', '::1', 37),
(68, '2020-08-24 05:06:18', '::1', 36),
(69, '2020-08-24 05:06:26', '::1', 35),
(70, '2020-08-24 05:06:31', '::1', 34),
(71, '2020-08-25 10:49:38', '::1', 36),
(72, '2020-08-25 10:51:26', '::1', 37),
(73, '2020-08-25 10:51:30', '::1', 35),
(74, '2020-08-25 10:51:40', '::1', 33),
(75, '2020-08-25 10:52:00', '::1', 12),
(76, '2020-08-25 10:58:31', '::1', 41),
(77, '2020-08-25 10:58:38', '::1', 42),
(78, '2020-08-25 10:58:57', '::1', 40),
(79, '2020-08-25 15:43:31', '::1', 32),
(80, '2020-08-27 12:36:58', '::1', 37),
(81, '2020-08-27 12:39:45', '::1', 46),
(82, '2020-08-28 12:06:38', '::1', 37),
(83, '2020-09-02 12:58:06', '::1', 2),
(84, '2020-09-02 14:19:33', '::1', 37),
(85, '2020-09-03 08:45:17', '::1', 46),
(86, '2020-09-03 08:55:20', '::1', 37),
(87, '2020-09-06 04:49:14', '::1', 35),
(88, '2020-09-06 05:22:49', '::1', 36),
(89, '2020-09-08 12:30:53', '::1', 37),
(90, '2020-09-09 05:37:03', '::1', 46),
(91, '2020-09-09 06:54:08', '::1', 36),
(92, '2020-09-10 10:02:53', '::1', 37),
(93, '2020-09-10 10:22:21', '::1', 33),
(94, '2020-09-12 02:11:58', '::1', 60),
(95, '2020-09-12 03:37:00', '::1', 46),
(96, '2020-09-13 06:10:54', '::1', 46),
(97, '2020-09-16 01:44:45', '::1', 46);

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
(1, 'Foodbang', 'Foodbang', 'Foodbang', 'favicon.png', 'logo2.png', 'favicon.png', 'logo1.png', 'https://www.facebook.com/Foodbang/', 'https://twitter.com/Foodbang/', 'https://www.instagram.com/Foodbang/', 'https://id.pinterest.com/Foodbang/', 'https://www.linkedin.com/in/Foodbang/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(255) NOT NULL,
  `slider_desc` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `slider_link` varchar(255) NOT NULL,
  `slider_order` int(200) NOT NULL,
  `slider_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_title`, `slider_desc`, `slider_image`, `slider_link`, `slider_order`, `slider_created_at`) VALUES
(1, 'Jakartas 6 Best Spots for Casual Dining', 'Donec dapibus mauris id odio ornare tempus duis sit.', '2294601da149c17cba080a510699af7f.jpg', 'facebook.com', 1, '2020-09-03 05:32:31'),
(2, 'Melon Termahal', 'Donec dapibus mauris id odio ornare tempus duis sit.', 'Melon_Termahal-1599633725.jpg', 'facebook.com', 2, '2020-09-02 22:32:31');

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
(1, 'facebook', 'fab fa-facebook-f', 1597723692),
(2, 'instagram', 'fab fa-instagram', 1597723692),
(5, 'twitter', 'fab fa-twitter', 1597723692);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcategory_id`, `subcategory_name`, `subcategory_category_id`) VALUES
(1, 'Indonesian', 11),
(2, 'Western', 11),
(3, 'Asian', 11),
(4, 'Fusion', 11),
(5, 'Arabic', 11),
(8, 'Indonesian', 12),
(9, 'Western', 12),
(10, 'Asian', 12),
(11, 'Fusion', 12),
(12, 'Arabic', 12),
(13, 'Indonesian', 13),
(14, 'Western', 13),
(15, 'Asian', 13),
(16, 'Fusion', 13),
(17, 'Club', 14),
(18, 'Lounge', 14),
(19, 'Drink Shop', 14),
(20, 'Indonesian', 15),
(21, 'Western', 15),
(22, 'Asian', 15),
(23, 'Fusion', 15),
(24, 'Arabic', 15),
(25, 'Indonesian', 16),
(26, 'Western', 16),
(27, 'Asian', 16),
(28, 'Fusion', 16),
(29, 'Arabic', 16),
(30, 'Indonesian', 17),
(31, 'Western', 17),
(32, 'Asian', 17),
(33, 'Indonesian', 18),
(34, 'Western', 18),
(35, 'Asian', 18),
(36, 'Fusion', 18),
(37, 'Arabic', 18),
(38, 'Indonesian', 19),
(39, 'Western', 19),
(40, 'Asian', 19),
(41, 'Fusion', 19),
(43, 'Indonesian', 20),
(44, 'Western', 20),
(45, 'Asian', 20),
(46, 'Fusion', 20),
(47, 'Arabic', 20),
(48, 'Indonesian', 24),
(49, 'Western', 24),
(50, 'Asian', 24),
(51, 'Fusion', 24);

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
(15, 'foodbang'),
(16, 'seafood'),
(17, 'makanan murah'),
(18, 'cafe'),
(19, 'restaurant terbaik'),
(20, 'sad'),
(21, 'indomie'),
(22, 'privateroom'),
(23, 'whiteglass'),
(24, 'promo'),
(25, ' tomato marmalade'),
(26, ' salsa verde'),
(27, ' ciabatta 10'),
(28, 'outdor'),
(29, 'outdoor'),
(30, 'kerupuk'),
(31, 'kepiting'),
(32, 'dqwdqw'),
(33, 'wqdwq'),
(34, 'ewffew'),
(35, 'ayam'),
(36, 'nasi'),
(37, 'warung'),
(38, 'oatmeal'),
(39, 'pecel');

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
(2, 'Restourant & Cofe'),
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
(541371, '2020-08-20 00:46:40', '::1', 'Chrome'),
(541372, '2020-08-21 02:44:01', '::1', 'Chrome'),
(541373, '2020-08-21 10:56:30', '127.0.0.1', 'Chrome'),
(541374, '2020-08-22 02:06:04', '::1', 'Chrome'),
(541375, '2020-08-23 03:03:54', '::1', 'Chrome'),
(541376, '2020-08-24 04:53:43', '::1', 'Chrome'),
(541377, '2020-08-25 08:51:16', '::1', 'Chrome'),
(541378, '2020-08-26 11:06:19', '::1', 'Chrome'),
(541379, '2020-08-27 01:07:43', '::1', 'Chrome'),
(541380, '2020-08-28 02:14:34', '::1', 'Chrome'),
(541381, '2020-08-28 03:41:07', '127.0.0.1', 'Chrome'),
(541382, '2020-08-30 02:56:25', '::1', 'Chrome'),
(541383, '2020-08-31 01:57:05', '::1', 'Chrome'),
(541384, '2020-09-01 02:47:01', '::1', 'Chrome'),
(541385, '2020-09-02 01:59:39', '::1', 'Chrome'),
(541386, '2020-09-03 01:06:54', '::1', 'Chrome'),
(541387, '2020-09-04 09:13:10', '::1', 'Chrome'),
(541388, '2020-09-05 02:27:43', '::1', 'Chrome'),
(541389, '2020-09-06 04:25:32', '::1', 'Chrome'),
(541390, '2020-09-07 02:12:20', '::1', 'Chrome'),
(541391, '2020-09-08 07:55:41', '::1', 'Chrome'),
(541392, '2020-09-09 02:02:37', '::1', 'Chrome'),
(541393, '2020-09-10 05:52:46', '::1', 'Chrome'),
(541394, '2020-09-12 02:09:22', '::1', 'Chrome'),
(541395, '2020-09-13 04:59:19', '::1', 'Chrome'),
(541396, '2020-09-14 14:11:39', '::1', 'Chrome'),
(541397, '2020-09-16 01:44:38', '::1', 'Chrome');

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
-- Indexes for table `tbl_detail_category`
--
ALTER TABLE `tbl_detail_category`
  ADD PRIMARY KEY (`detail_category_id`),
  ADD UNIQUE KEY `detail_category_category_id` (`detail_category_category_id`);

--
-- Indexes for table `tbl_detail_catlist`
--
ALTER TABLE `tbl_detail_catlist`
  ADD PRIMARY KEY (`detail_catlist_id`);

--
-- Indexes for table `tbl_detail_news`
--
ALTER TABLE `tbl_detail_news`
  ADD PRIMARY KEY (`detail_news_id`);

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
-- Indexes for table `tbl_meta`
--
ALTER TABLE `tbl_meta`
  ADD PRIMARY KEY (`meta_id`);

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
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

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
  MODIFY `additional_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_availability`
--
ALTER TABLE `tbl_availability`
  MODIFY `availability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
-- AUTO_INCREMENT for table `tbl_detail_category`
--
ALTER TABLE `tbl_detail_category`
  MODIFY `detail_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_meta`
--
ALTER TABLE `tbl_meta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_navbar`
--
ALTER TABLE `tbl_navbar`
  MODIFY `navbar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_post_views`
--
ALTER TABLE `tbl_post_views`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `tbl_site`
--
ALTER TABLE `tbl_site`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  MODIFY `subscribe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_tags`
--
ALTER TABLE `tbl_tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  MODIFY `visit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=541398;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_detail_catlist`
--
ALTER TABLE `tbl_detail_catlist`
  ADD CONSTRAINT `tbl_detail_catlist_ibfk_1` FOREIGN KEY (`detail_catlist_id`) REFERENCES `tbl_post` (`post_detail_id`);

--
-- Constraints for table `tbl_detail_news`
--
ALTER TABLE `tbl_detail_news`
  ADD CONSTRAINT `tbl_detail_news_ibfk_1` FOREIGN KEY (`detail_news_id`) REFERENCES `tbl_post` (`post_detail_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
