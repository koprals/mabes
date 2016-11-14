-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Nov 2016 pada 09.36
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mabes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acos`
--

DROP TABLE IF EXISTS `acos`;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `description`, `lft`, `rght`, `remarks`, `status`, `created`, `modified`) VALUES
(1, NULL, NULL, NULL, 'superadmin', '', 1, 36, NULL, 1, '2014-11-25 00:00:00', '2014-11-26 10:21:30'),
(4, 1, NULL, NULL, 'Dashboard', '', 2, 3, NULL, 1, '2014-11-25 13:09:49', '2014-11-25 13:09:49'),
(5, 1, NULL, NULL, 'Administrator', '', 4, 15, NULL, 1, '2014-11-25 13:10:04', '2014-11-25 13:10:04'),
(7, 5, NULL, NULL, 'Module_Object', '', 5, 6, NULL, 1, '2014-11-25 13:10:52', '2014-11-25 13:10:52'),
(8, 5, NULL, NULL, 'Admin_Group', '', 7, 8, NULL, 1, '2014-11-25 13:11:06', '2014-11-25 13:11:06'),
(31, 27, NULL, NULL, 'PortfolioContents', '', 23, 24, NULL, 1, '2016-09-13 14:31:24', '2016-09-13 14:31:24'),
(11, 5, NULL, NULL, 'Permission', '', 9, 10, NULL, 1, '2014-11-26 13:53:10', '2014-11-26 13:53:10'),
(14, 5, NULL, NULL, 'Admin', '', 11, 12, NULL, 1, '2014-11-26 15:08:25', '2014-11-26 15:08:25'),
(18, 1, NULL, NULL, 'Settings', '', 16, 17, NULL, 1, '2015-07-13 22:49:11', '2015-07-13 22:49:11'),
(30, 27, NULL, NULL, 'PortfolioSubcategories', '', 21, 22, NULL, 1, '2016-09-13 14:31:10', '2016-09-13 14:31:10'),
(27, 1, NULL, NULL, 'Portfolio', '', 18, 25, NULL, 1, '2016-09-13 14:30:26', '2016-09-13 14:30:26'),
(28, 1, NULL, NULL, 'Clients', '', 26, 27, NULL, 1, '2016-09-13 14:30:40', '2016-09-13 14:30:40'),
(29, 27, NULL, NULL, 'PortfolioCategories', '', 19, 20, NULL, 1, '2016-09-13 14:30:56', '2016-09-13 14:30:56'),
(32, 1, NULL, NULL, 'Customers', '-', 28, 29, NULL, 1, '2016-10-01 21:15:29', '2016-10-01 21:15:29'),
(33, 1, NULL, NULL, 'BA', '', 30, 31, NULL, 1, '2016-10-10 11:01:56', '2016-10-10 11:01:56'),
(34, 1, NULL, NULL, 'Report', '', 32, 33, NULL, 1, '2016-10-10 11:03:05', '2016-10-10 11:10:56'),
(35, 1, NULL, NULL, 'Coordinators', '-', 34, 35, NULL, 1, '2016-10-14 16:51:44', '2016-10-14 16:51:44'),
(36, 5, NULL, NULL, 'CustomerValidationFile', 'CustomerValidationFile', 13, 14, NULL, 1, '2016-10-19 15:20:32', '2016-10-19 15:20:32'),
(37, 1, NULL, NULL, 'EducationTypes', '', 12, 30, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 1, NULL, NULL, 'Data Program Studi', '', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 1, NULL, NULL, 'Data Form Studi', '', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 38, NULL, NULL, 'Country', 'Countries/Index', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 39, NULL, NULL, NULL, '', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `aro_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `aro_id`, `username`, `fullname`, `password`, `status`, `created`, `modified`) VALUES
(1, 1, 'admin', 'Superadmin', '2sXP4s/N6M7X58rW2tQ=', 1, '2014-02-06 04:09:01', '2016-10-11 20:12:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_groups`
--

DROP TABLE IF EXISTS `admin_groups`;
CREATE TABLE `admin_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` smallint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin_groups`
--

INSERT INTO `admin_groups` (`id`, `name`, `description`, `status`, `created`, `modified`) VALUES
(1, 'superadmin', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aros`
--

DROP TABLE IF EXISTS `aros`;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `total_admin` int(11) NOT NULL DEFAULT '0',
  `status` smallint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `description`, `lft`, `rght`, `total_admin`, `status`, `created`, `modified`) VALUES
(1, NULL, 'admin', 1, 'superadmin', '', 1, 2, 1, 1, '2014-11-25 00:00:00', '2014-11-25 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE `aros_acos` (
  `id` bigint(20) NOT NULL,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(438, 1, 34, '1', '1', '1', '1'),
(437, 1, 33, '1', '1', '1', '1'),
(436, 1, 32, '1', '1', '1', '1'),
(435, 1, 28, '1', '1', '1', '1'),
(434, 1, 31, '1', '1', '1', '1'),
(433, 1, 30, '1', '1', '1', '1'),
(432, 1, 29, '1', '1', '1', '1'),
(431, 1, 27, '1', '1', '1', '1'),
(430, 1, 18, '1', '1', '1', '1'),
(429, 1, 36, '1', '1', '1', '1'),
(428, 1, 14, '1', '1', '1', '1'),
(427, 1, 11, '1', '1', '1', '1'),
(426, 1, 8, '1', '1', '1', '1'),
(425, 1, 7, '1', '1', '1', '1'),
(424, 1, 5, '1', '1', '1', '1'),
(423, 1, 4, '1', '1', '1', '1'),
(439, 1, 35, '1', '1', '1', '1'),
(440, 1, 37, '1', '1', '1', '1'),
(442, 1, 40, '1', '1', '1', '1'),
(443, 0, 0, '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_menus`
--

DROP TABLE IF EXISTS `cms_menus`;
CREATE TABLE `cms_menus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `sort` int(2) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `cms_menus`
--

INSERT INTO `cms_menus` (`id`, `name`, `url`, `sort`, `class`, `status`) VALUES
(1, 'Dashboard', 'Home/Index', 1, 'fa fa-desktop', 1),
(3, 'Administrator', '', 30, 'fa fa-user', 1),
(10, 'Data Program Studi', '', 3, 'fa fa-files-o', 1),
(9, 'Data Form Studi', '', 2, 'fa fa-file-o', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_submenus`
--

DROP TABLE IF EXISTS `cms_submenus`;
CREATE TABLE `cms_submenus` (
  `id` int(11) NOT NULL,
  `cms_menu_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `cms_submenus`
--

INSERT INTO `cms_submenus` (`id`, `cms_menu_id`, `class`, `name`, `url`, `status`) VALUES
(3, 3, 'fa fa-list', 'Module Object', 'Acos/Index', 1),
(4, 3, 'fa fa-list', 'Admin Group', 'Aros/Index', 1),
(6, 3, 'fa fa-list', 'Admin', 'Admins/Index', 1),
(17, 10, 'fa fa-list', 'Negara', '', 1),
(18, 10, 'fa fa-list', 'Kategori Program Studi', '', 1),
(19, 10, 'fa fa-list', 'Program Studi', '', 1),
(20, 9, 'fa fa-list', 'Jenis Pendidikan', '', 1),
(21, 9, 'fa fa-list', 'Matra', '', 1),
(22, 9, 'fa fa-list', 'Korps', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contents`
--

DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `model` varchar(100) NOT NULL,
  `model_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `host` varchar(255) NOT NULL,
  `url` varchar(100) NOT NULL,
  `cloud` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=Masih di server loka,1=Sudah di server cloud',
  `mime_type` varchar(100) NOT NULL,
  `path` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `contents`
--

INSERT INTO `contents` (`id`, `model`, `model_id`, `type`, `host`, `url`, `cloud`, `mime_type`, `path`) VALUES
(408, 'DiningServiceImage', 4, 'big', 'http://dummy-bedrock.com/', 'contents/DiningServiceImage/4/4_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/DiningServiceImage/4/4_big.jpg'),
(407, 'DiningServiceImage', 4, 'thumb', 'http://dummy-bedrock.com/', 'contents/DiningServiceImage/4/4_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/DiningServiceImage/4/4_thumb.jpg'),
(406, 'DiningServiceImage', 3, 'big', 'http://dummy-bedrock.com/', 'contents/DiningServiceImage/3/3_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/DiningServiceImage/3/3_big.jpg'),
(405, 'DiningServiceImage', 3, 'thumb', 'http://dummy-bedrock.com/', 'contents/DiningServiceImage/3/3_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/DiningServiceImage/3/3_thumb.jpg'),
(404, 'DiningServiceImage', 2, 'big', 'http://dummy-bedrock.com/', 'contents/DiningServiceImage/2/2_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/DiningServiceImage/2/2_big.jpg'),
(403, 'DiningServiceImage', 2, 'thumb', 'http://dummy-bedrock.com/', 'contents/DiningServiceImage/2/2_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/DiningServiceImage/2/2_thumb.jpg'),
(402, 'DiningServiceImage', 1, 'big', 'http://dummy-bedrock.com/', 'contents/DiningServiceImage/1/1_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/DiningServiceImage/1/1_big.jpg'),
(401, 'DiningServiceImage', 1, 'thumb', 'http://dummy-bedrock.com/', 'contents/DiningServiceImage/1/1_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/DiningServiceImage/1/1_thumb.jpg'),
(400, 'WebPage', 6, 'big', 'http://dummy-bedrock.com/', 'contents/WebPage/6/6_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/WebPage/6/6_big.jpg'),
(399, 'WebPage', 6, 'thumb', 'http://dummy-bedrock.com/', 'contents/WebPage/6/6_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/WebPage/6/6_thumb.jpg'),
(398, 'SpecialOffer', 2, 'big', 'http://dummy-bedrock.com/', 'contents/SpecialOffer/2/2_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/SpecialOffer/2/2_big.jpg'),
(397, 'SpecialOffer', 2, 'thumb', 'http://dummy-bedrock.com/', 'contents/SpecialOffer/2/2_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/SpecialOffer/2/2_thumb.jpg'),
(396, 'SpecialOffer', 1, 'big', 'http://dummy-bedrock.com/', 'contents/SpecialOffer/1/1_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/SpecialOffer/1/1_big.jpg'),
(395, 'SpecialOffer', 1, 'thumb', 'http://dummy-bedrock.com/', 'contents/SpecialOffer/1/1_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/SpecialOffer/1/1_thumb.jpg'),
(394, 'SpecialOffer', 0, 'big', 'http://dummy-bedrock.com/', 'contents/SpecialOffer/0/0_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/SpecialOffer/0/0_big.jpg'),
(393, 'SpecialOffer', 0, 'thumb', 'http://dummy-bedrock.com/', 'contents/SpecialOffer/0/0_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/SpecialOffer/0/0_thumb.jpg'),
(392, 'RoomImage', 6, 'big', 'http://dummy-bedrock.com/', 'contents/RoomImage/6/6_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/RoomImage/6/6_big.jpg'),
(391, 'RoomImage', 6, 'thumb', 'http://dummy-bedrock.com/', 'contents/RoomImage/6/6_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/RoomImage/6/6_thumb.jpg'),
(390, 'RoomImage', 5, 'big', 'http://dummy-bedrock.com/', 'contents/RoomImage/5/5_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/RoomImage/5/5_big.jpg'),
(389, 'RoomImage', 5, 'thumb', 'http://dummy-bedrock.com/', 'contents/RoomImage/5/5_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/RoomImage/5/5_thumb.jpg'),
(388, 'RoomImage', 4, 'big', 'http://dummy-bedrock.com/', 'contents/RoomImage/4/4_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/RoomImage/4/4_big.jpg'),
(387, 'RoomImage', 4, 'thumb', 'http://dummy-bedrock.com/', 'contents/RoomImage/4/4_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/RoomImage/4/4_thumb.jpg'),
(386, 'RoomImage', 3, 'big', 'http://dummy-bedrock.com/', 'contents/RoomImage/3/3_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/RoomImage/3/3_big.jpg'),
(385, 'RoomImage', 3, 'thumb', 'http://dummy-bedrock.com/', 'contents/RoomImage/3/3_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/RoomImage/3/3_thumb.jpg'),
(384, 'SalesTeam', 3, 'big', 'http://dummy-bedrock.com/', 'contents/SalesTeam/3/3_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/SalesTeam/3/3_big.jpg'),
(383, 'SalesTeam', 3, 'thumb', 'http://dummy-bedrock.com/', 'contents/SalesTeam/3/3_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/SalesTeam/3/3_thumb.jpg'),
(382, 'SalesTeam', 2, 'big', 'http://dummy-bedrock.com/', 'contents/SalesTeam/2/2_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/SalesTeam/2/2_big.jpg'),
(381, 'SalesTeam', 2, 'thumb', 'http://dummy-bedrock.com/', 'contents/SalesTeam/2/2_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/SalesTeam/2/2_thumb.jpg'),
(380, 'SalesTeam', 1, 'big', 'http://dummy-bedrock.com/', 'contents/SalesTeam/1/1_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/SalesTeam/1/1_big.jpg'),
(379, 'SalesTeam', 1, 'thumb', 'http://dummy-bedrock.com/', 'contents/SalesTeam/1/1_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/SalesTeam/1/1_thumb.jpg'),
(378, 'WebPage', 4, 'big', 'http://dummy-bedrock.com/', 'contents/WebPage/4/4_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/WebPage/4/4_big.jpg'),
(377, 'WebPage', 4, 'thumb', 'http://dummy-bedrock.com/', 'contents/WebPage/4/4_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/WebPage/4/4_thumb.jpg'),
(376, 'WebPage', 2, 'big', 'http://dummy-bedrock.com/', 'contents/WebPage/2/2_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/WebPage/2/2_big.jpg'),
(375, 'WebPage', 2, 'thumb', 'http://dummy-bedrock.com/', 'contents/WebPage/2/2_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/WebPage/2/2_thumb.jpg'),
(371, 'HomeSlider', 2, 'thumb', 'http://dummy-bedrock.com/', 'contents/HomeSlider/2/2_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/HomeSlider/2/2_thumb.jpg'),
(372, 'HomeSlider', 2, 'big', 'http://dummy-bedrock.com/', 'contents/HomeSlider/2/2_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/HomeSlider/2/2_big.jpg'),
(373, 'HomeSlider', 3, 'thumb', 'http://dummy-bedrock.com/', 'contents/HomeSlider/3/3_thumb.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/HomeSlider/3/3_thumb.jpg'),
(374, 'HomeSlider', 3, 'big', 'http://dummy-bedrock.com/', 'contents/HomeSlider/3/3_big.jpg', '', 'image/jpeg', '/Library/WebServer/Documents/amaya/amaya-005-bedrock/app/webroot/contents/HomeSlider/3/3_big.jpg'),
(410, 'SalesTeam', 4, 'big', 'http://dummy-bedrock.com/', 'contents/SalesTeam/4/4_big.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contentsSalesTeam/4/4_big.jpg'),
(409, 'SalesTeam', 4, 'thumb', 'http://dummy-bedrock.com/', 'contents/SalesTeam/4/4_thumb.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contentsSalesTeam/4/4_thumb.jpg'),
(441, 'WebPage', 9, 'thumb', 'http://dummy-bedrock.com/', 'contents/WebPage/9/9_thumb.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\WebPage/9/9_thumb.jpg'),
(450, 'PhotoGallery', 1, 'bedrock1', 'http://dummy-bedrock.com/', 'contents/PhotoGallery/1/1_bedrock1.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\PhotoGallery/1/1_bedrock1.jpg'),
(451, 'PhotoGallery', 1, 'bedrock2', 'http://dummy-bedrock.com/', 'contents/PhotoGallery/1/1_bedrock2.png', '', 'image/png', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\PhotoGallery/1/1_bedrock2.png'),
(452, 'PhotoGallery', 1, 'bedrock3', 'http://dummy-bedrock.com/', 'contents/PhotoGallery/1/1_bedrock3.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\PhotoGallery/1/1_bedrock3.jpg'),
(453, 'PhotoGallery', 1, 'bedrock4', 'http://dummy-bedrock.com/', 'contents/PhotoGallery/1/1_bedrock4.png', '', 'image/png', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\PhotoGallery/1/1_bedrock4.png'),
(454, 'PhotoGallery', 1, 'bedrock5', 'http://dummy-bedrock.com/', 'contents/PhotoGallery/1/1_bedrock5.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\PhotoGallery/1/1_bedrock5.jpg'),
(442, 'WebPage', 9, 'big', 'http://dummy-bedrock.com/', 'contents/WebPage/9/9_big.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\WebPage/9/9_big.jpg'),
(469, 'Advertisement', 0, 'big', 'http://dummy-bedrock.com/', 'contents/Advertisement/0/0_big.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\Advertisement/0/0_big.jpg'),
(478, 'PhotoGalleryImage', 1, 'thumb', 'http://dummy-bedrock.com/', 'contents/PhotoGalleryImage/1/1_thumb.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\PhotoGalleryImage/1/1_thumb.jpg'),
(479, 'PhotoGalleryImage', 1, 'big', 'http://dummy-bedrock.com/', 'contents/PhotoGalleryImage/1/1_big.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\PhotoGalleryImage/1/1_big.jpg'),
(480, 'PhotoGalleryImage', 2, 'thumb', 'http://dummy-bedrock.com/', 'contents/PhotoGalleryImage/2/2_thumb.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\PhotoGalleryImage/2/2_thumb.jpg'),
(481, 'PhotoGalleryImage', 2, 'big', 'http://dummy-bedrock.com/', 'contents/PhotoGalleryImage/2/2_big.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\PhotoGalleryImage/2/2_big.jpg'),
(482, 'PhotoGalleryImage', 3, 'thumb', 'http://dummy-bedrock.com/', 'contents/PhotoGalleryImage/3/3_thumb.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\PhotoGalleryImage/3/3_thumb.jpg'),
(483, 'PhotoGalleryImage', 3, 'big', 'http://dummy-bedrock.com/', 'contents/PhotoGalleryImage/3/3_big.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\PhotoGalleryImage/3/3_big.jpg'),
(468, 'Advertisement', 0, 'thumb', 'http://dummy-bedrock.com/', 'contents/Advertisement/0/0_thumb.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\Advertisement/0/0_thumb.jpg'),
(470, 'Advertisement', 1, 'thumb', 'http://dummy-bedrock.com/', 'contents/Advertisement/1/1_thumb.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\Advertisement/1/1_thumb.jpg'),
(471, 'Advertisement', 1, 'big', 'http://dummy-bedrock.com/', 'contents/Advertisement/1/1_big.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\Advertisement/1/1_big.jpg'),
(472, 'Advertisement', 2, 'thumb', 'http://dummy-bedrock.com/', 'contents/Advertisement/2/2_thumb.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\Advertisement/2/2_thumb.jpg'),
(473, 'Advertisement', 2, 'big', 'http://dummy-bedrock.com/', 'contents/Advertisement/2/2_big.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\Advertisement/2/2_big.jpg'),
(474, 'Advertisement', 3, 'thumb', 'http://dummy-bedrock.com/', 'contents/Advertisement/3/3_thumb.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\Advertisement/3/3_thumb.jpg'),
(475, 'Advertisement', 3, 'big', 'http://dummy-bedrock.com/', 'contents/Advertisement/3/3_big.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\Advertisement/3/3_big.jpg'),
(476, 'RoomImage', 7, 'thumb', 'http://dummy-bedrock.com/', 'contents/RoomImage/7/7_thumb.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\RoomImage/7/7_thumb.jpg'),
(477, 'RoomImage', 7, 'big', 'http://dummy-bedrock.com/', 'contents/RoomImage/7/7_big.jpg', '', 'image/jpeg', 'C:\\xampp\\htdocs\\amaya-005-bedrock\\app\\webroot\\contents\\RoomImage/7/7_big.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `corps`
--

DROP TABLE IF EXISTS `corps`;
CREATE TABLE `corps` (
  `id` int(11) NOT NULL,
  `matra_id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `countries`
--

INSERT INTO `countries` (`id`, `name`, `status`) VALUES
(1, 'Indonesia', 1),
(2, 'Kazakstan', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `education_types`
--

DROP TABLE IF EXISTS `education_types`;
CREATE TABLE `education_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `education_types`
--

INSERT INTO `education_types` (`id`, `name`, `status`, `created`, `modified`) VALUES
(1, 'Bahasa Inggris', 1, '2014-02-06 04:09:01', '2014-02-06 04:09:01'),
(2, '', 1, '2016-11-09 21:09:22', '2016-11-09 21:09:22'),
(3, 'Bahasa Jepang', 1, '2016-11-09 21:10:38', '2016-11-09 21:10:38'),
(4, 'Bahasa Mandarin', 1, '2016-11-09 22:43:57', '2016-11-09 22:43:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `korps`
--

DROP TABLE IF EXISTS `korps`;
CREATE TABLE `korps` (
  `id` int(11) NOT NULL,
  `matra_id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matras`
--

DROP TABLE IF EXISTS `matras`;
CREATE TABLE `matras` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matras`
--

INSERT INTO `matras` (`id`, `name`, `status`, `created`, `modified`) VALUES
(1, NULL, 1, '2016-11-09 23:09:14', '2016-11-09 23:09:14'),
(2, 'Matras', 1, '2016-11-09 23:10:51', '2016-11-09 23:10:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `occupations`
--

DROP TABLE IF EXISTS `occupations`;
CREATE TABLE `occupations` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(255) NOT NULL DEFAULT '',
  `site_title` varchar(255) NOT NULL DEFAULT '',
  `site_description` text NOT NULL,
  `site_keywords` text NOT NULL,
  `site_domain` varchar(255) NOT NULL DEFAULT '',
  `web_url` varchar(255) NOT NULL DEFAULT 'http://webmld.coda-technology.dev/',
  `wap_url` varchar(255) NOT NULL DEFAULT 'http://mld.coda-technology.dev/',
  `cms_url` varchar(255) NOT NULL,
  `path_content` varchar(255) NOT NULL DEFAULT 'D:/xampp/htdocs/mld-web/contents/',
  `path_webroot` varchar(255) NOT NULL,
  `facebook_app_id` varchar(255) NOT NULL,
  `facebook_app_secret` varchar(255) NOT NULL,
  `bucket_name` varchar(255) DEFAULT NULL,
  `aws_host` varchar(255) DEFAULT NULL,
  `aws_host_url` varchar(255) DEFAULT NULL,
  `aws_access_key` varchar(255) DEFAULT NULL,
  `aws_secret_key` varchar(255) DEFAULT NULL,
  `mandrill_api_key` varchar(100) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `gplus_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_title`, `site_description`, `site_keywords`, `site_domain`, `web_url`, `wap_url`, `cms_url`, `path_content`, `path_webroot`, `facebook_app_id`, `facebook_app_secret`, `bucket_name`, `aws_host`, `aws_host_url`, `aws_access_key`, `aws_secret_key`, `mandrill_api_key`, `facebook_url`, `gplus_url`, `twitter_url`, `instagram_url`) VALUES
(2, 'TNI - Knowledge Management', 'TNI - Knowledge Management', 'TNI - Knowledge Management', 'TNI - Knowledge Management', 'http://localhost/mabes/', 'http://localhost/mabes/', '', 'http://localhost/mabes/', 'C:\\xampp\\htdocs\\mabes\\app\\webroot\\contents\\', 'C:\\xampp\\htdocs\\mabes\\app\\webroot\\contents\\', '', '', '', '', '', '', '', 'Wi8K7CXGFDE4aYM9jY4JmA', 'https://www.facebook.com/BedrockBarAndGrill', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `study_programs`
--

DROP TABLE IF EXISTS `study_programs`;
CREATE TABLE `study_programs` (
  `id` int(11) NOT NULL,
  `study_program_category_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `study_program_categories`
--

DROP TABLE IF EXISTS `study_program_categories`;
CREATE TABLE `study_program_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`),
  ADD KEY `rght` (`rght`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_groups`
--
ALTER TABLE `admin_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`),
  ADD KEY `rght` (`rght`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`),
  ADD KEY `aro_id` (`aro_id`),
  ADD KEY `aco_id` (`aco_id`);

--
-- Indexes for table `cms_menus`
--
ALTER TABLE `cms_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_submenus`
--
ALTER TABLE `cms_submenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cloud` (`cloud`);

--
-- Indexes for table `corps`
--
ALTER TABLE `corps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_types`
--
ALTER TABLE `education_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korps`
--
ALTER TABLE `korps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matras`
--
ALTER TABLE `matras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occupations`
--
ALTER TABLE `occupations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_programs`
--
ALTER TABLE `study_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_program_categories`
--
ALTER TABLE `study_program_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `admin_groups`
--
ALTER TABLE `admin_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=444;
--
-- AUTO_INCREMENT for table `cms_menus`
--
ALTER TABLE `cms_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `cms_submenus`
--
ALTER TABLE `cms_submenus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=484;
--
-- AUTO_INCREMENT for table `corps`
--
ALTER TABLE `corps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `education_types`
--
ALTER TABLE `education_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `korps`
--
ALTER TABLE `korps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `matras`
--
ALTER TABLE `matras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `occupations`
--
ALTER TABLE `occupations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `study_programs`
--
ALTER TABLE `study_programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `study_program_categories`
--
ALTER TABLE `study_program_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
