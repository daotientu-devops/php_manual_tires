-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 26, 2013 at 02:57 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php1012e_db`
--
CREATE DATABASE `php1012e_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `php1012e_db`;

-- --------------------------------------------------------

--
-- Table structure for table `active`
--

CREATE TABLE IF NOT EXISTS `active` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `code` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `active`
--

INSERT INTO `active` (`id`, `userid`, `code`) VALUES
(4, 10, 'ca1a11adf051d3eb643b8f934dc00bec');

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE IF NOT EXISTS `ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `file` text COLLATE utf8_unicode_ci NOT NULL,
  `width` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `height` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `ordinal` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `count` int(20) NOT NULL,
  `date` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`id`, `title`, `link`, `file`, `width`, `height`, `position`, `ordinal`, `priority`, `count`, `date`, `state`) VALUES
(5, 'Quảng cáo cột  trái', '', '', '', '', 3, 0, 0, 0, '05-02-2013 12:58', 1),
(7, 'Quảng cáo cho lopoto.net', 'http://www.lopoto.net/', 'uploaded/ad/banner_webLink.png', '207', '548', 3, 5, 2, 0, '05-01-2013 13:07', 1),
(8, 'Quảng cáo cho đối tác công ty ', 'http://www.lopxeoto.net/', 'uploaded/ad/banner_partner.png', '207', '380', 3, 5, 1, 0, '06-24-2013 15:19', 1),
(9, 'Banner of Header', '', '', '', '', 1, 0, 0, 0, '07-08-2013 15:07', 1),
(10, 'Quảng cáo cho công ty lốp Tiến Hoàng', '', 'uploaded/ad/banner_tires.png', '1000', '262', 1, 9, 1, 0, '07-08-2013 15:08', 1),
(11, 'SlideShows', '', '', '', '', 2, 0, 0, 0, '07-08-2013 18:18', 1),
(12, 'Slider 1', '', 'uploaded/ad/BB-banner-tires-999x432.jpg', '1000', '200', 2, 11, 1, 0, '07-08-2013 18:19', 1),
(13, 'Slider 2', '', 'uploaded/ad/HomeSlideEU-Summer.jpg', '1000', '200', 2, 11, 2, 0, '07-08-2013 18:21', 1),
(14, 'Slider 3', '', 'uploaded/ad/tires-banner3.jpg', '1000', '200', 2, 11, 3, 0, '07-08-2013 18:23', 1),
(15, 'Slider 4', '', 'uploaded/ad/Legal-banner.jpg', '1000', '200', 2, 11, 4, 0, '07-08-2013 18:31', 1),
(16, 'Slider 5', '', 'uploaded/ad/Specials Banner.jpg', '1000', '200', 2, 11, 5, 0, '07-08-2013 18:32', 1),
(17, 'Slider 6', '', 'uploaded/ad/warranty_banner.jpg', '1000', '200', 2, 11, 6, 0, '07-08-2013 18:32', 1),
(18, 'Quảng cáo trượt dọc 2 bên', '', '', '', '', 0, 0, 0, 0, '07-13-2013 23:44', 1),
(19, 'Quảng cáo chạy dọc bên trái', 'http://hn.nhac.vui.vn/', 'uploaded/ad/banner1-code1k.com.gif', '115', '480', 7, 18, 1, 0, '07-13-2013 23:46', 1),
(20, 'Quảng cáo chạy dọc bên phải', 'http://www.trochoiviet.com/games/', 'uploaded/ad/banner2-code1k.com.gif', '115', '480', 8, 18, 1, 0, '07-13-2013 23:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `quesid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `answer`
--


-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `ParentID` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` text COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `date` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `ParentID`, `title`, `keyword`, `description`, `logo`, `position`, `sort`, `date`, `state`) VALUES
(2, 'Lốp ô tô du lịch', 0, 'Lốp ô tô du lịch', 'Lốp ô tô, du lịch, Lốp ô tô du lịch', 'Lốp ô tô du lịch', '', 0, 1, '05-02-2013 18:35', 1),
(3, 'Lốp xe ô tô Bridgestone', 2, 'Lốp xe ô tô Bridgestone', 'Lốp xe ô tô,Lốp Bridgestone', 'Lốp xe ô tô Bridgestone', '', 3, 1, '05-07-2013 19:00', 1),
(4, 'Lốp xe ô tô Michelin', 2, 'Lốp xe ô tô Michelin', 'Lốp xe ô tô, Lốp Michelin', 'Lốp xe ô tô Michelin', '', 3, 2, '05-07-2013 19:21', 1),
(5, 'Lốp xe ô tô Goodyear', 2, 'Lốp xe ô tô Goodyear', 'Lốp xe ô tô Goodyear, Lốp Goodyear', 'Lốp xe ô tô Goodyear', '', 3, 3, '05-07-2013 20:01', 1),
(6, 'Lốp xe ô tô Dunlop', 2, 'Lốp xe ô tô Dunlop', 'Lốp xe ô tô, Lốp Dunlop', 'Lốp xe ô tô Dunlop', '', 3, 4, '05-07-2013 20:03', 1),
(7, 'Lốp xe ô tô Chengshin', 2, 'Lốp xe ô tô Chengshin', 'Lốp xe ô tô, Lốp Chengshin', 'Lốp xe ô tô Chengshin', '', 3, 5, '05-07-2013 20:04', 1),
(8, 'Lốp xe ô tô Tunggai', 2, 'Lốp xe ô tô Tunggai', 'Lốp xe ô tô Tunggai, Lốp Tunggai', 'Lốp xe ô tô Tunggai', '', 3, 6, '05-07-2013 20:07', 1),
(9, 'Lốp xe ô tô Kumho', 2, 'Lốp xe ô tô Kumho', 'Lốp xe ô tô Kumho, Lốp Kumho', 'Lốp xe ô tô Kumho', '', 3, 7, '05-07-2013 20:09', 1),
(10, 'Lốp xe ô tô Hankook', 2, 'Lốp xe ô tô Hankook', 'Lốp xe ô tô Hankook, Lốp Hankook', 'Lốp xe ô tô Hankook', '', 3, 8, '05-07-2013 20:11', 1),
(11, 'Lốp xe ô tô Firelli', 2, 'Lốp xe ô tô Firelli', 'Lốp xe ô tô Firelli, Lốp Firelli', 'Lốp xe ô tô Firelli', '', 3, 9, '05-14-2013 20:20', 1),
(12, 'Lốp xe ô tô Falken', 2, 'Lốp xe ô tô Falken', 'Lốp xe ô tô Falken, Lốp Falken', 'Lốp xe ô tô Falken', '', 3, 10, '05-07-2013 21:01', 1),
(13, 'Lốp xe ô tô Silvertone', 2, 'Lốp xe ô tô Silvertone', 'Lốp xe ô tô Silvertone, Lốp Silvertone', 'Lốp xe ô tô Silvertone', '', 3, 11, '05-07-2013 21:02', 1),
(14, 'Lốp xe tải', 0, 'Lốp xe tải', 'Lốp xe, Lốp xe tải, xe tải', 'Lốp xe tải', '', 3, 2, '05-07-2013 21:03', 1),
(15, 'Lốp xe tải Goodyear', 14, 'Lốp xe tải Goodyear', 'Lốp xe tải Goodyear, Lốp Goodyear', 'Lốp xe tải Goodyear', '', 3, 1, '05-07-2013 21:04', 1),
(16, 'Lốp xe tải Michelin', 14, 'Lốp xe tải Michelin', 'Lốp xe tải Michelin, Lốp Michelin', 'Lốp xe tải Michelin', '', 3, 2, '05-07-2013 21:05', 1),
(17, 'Lốp xe tải Casumina', 14, 'Lốp xe tải Casumina', 'Lốp xe tải Casumina, Lốp Casumina', 'Lốp xe tải Casumina', '', 3, 3, '05-07-2013 21:07', 1),
(18, 'Lốp xe nâng', 0, 'Lốp xe nâng', 'Lốp xe, Lốp xe nâng', 'Lốp xe nâng', '', 3, 3, '05-07-2013 21:07', 1),
(19, 'Lốp xe công trình', 0, 'Lốp xe công trình', 'Lốp xe, Lốp xe công trình', 'Lốp xe công trình', '', 3, 4, '05-07-2013 21:08', 1),
(20, 'Energy XM1', 4, 'Energy XM1', 'Energy XM1', 'Energy XM1', '', 3, 1, '05-09-2013 06:49', 1),
(21, 'Energy MXV8', 4, 'Energy MXV8', 'Energy MXV8', 'Energy MXV8', '', 3, 2, '05-09-2013 06:50', 1),
(22, 'Energy XM2', 4, 'Energy XM2', 'Energy XM2', 'Energy XM2', '', 3, 3, '05-09-2013 06:58', 1),
(23, 'Pilot Sport 3 (SP3)', 4, 'Pilot Sport 3 (SP3)', 'Pilot Sport 3 (SP3)', 'Pilot Sport 3 (SP3)', '', 3, 4, '05-09-2013 08:08', 1),
(24, 'LTX A/T', 4, 'LTX A/T', 'LTX A/T', 'LTX A/T', '', 3, 5, '05-09-2013 08:28', 1),
(25, 'Primacy LC', 4, 'Primacy LC', 'Primacy LC', 'Primacy LC', '', 3, 6, '05-09-2013 08:29', 1),
(26, 'Pilot Preceda PP2', 4, 'Pilot Preceda PP2', 'Pilot Preceda PP2', 'Pilot Preceda PP2', '', 3, 7, '05-09-2013 08:30', 1),
(27, 'Pilot Sport PS2', 4, 'Pilot Sport PS2', 'Pilot Sport PS2', 'Pilot Sport PS2', '', 3, 8, '05-09-2013 08:31', 1),
(28, 'Pilot Primacy', 4, 'Pilot Primacy', 'Pilot Primacy', 'Pilot Primacy', '', 3, 9, '05-09-2013 08:31', 1),
(29, 'Latitude Cross', 4, 'Latitude Cross', 'Latitude Cross', 'Latitude Cross', '', 3, 10, '05-09-2013 08:32', 1),
(30, 'Latitude Sport', 4, 'Latitude Sport', 'Latitude Sport', 'Latitude Sport', '', 3, 11, '05-09-2013 08:33', 1),
(31, 'Latitude Tour HP', 4, 'Latitude Tour HP', 'Latitude Tour HP', 'Latitude Tour HP', '', 3, 12, '05-09-2013 08:34', 1),
(32, 'Pilot Super Sport', 4, 'Pilot Super Sport', 'Pilot Super Sport', 'Pilot Super Sport', '', 3, 13, '05-09-2013 08:34', 1),
(33, 'Cross Terrain', 4, 'Cross Terrain', 'Cross Terrain', 'Cross Terrain', '', 3, 14, '05-09-2013 08:35', 1),
(34, 'Diamaris', 4, 'Diamaris', 'Diamaris', 'Diamaris', '', 3, 15, '05-09-2013 08:36', 1),
(35, 'Agilis', 4, 'Agilis', 'Agilis', 'Agilis', '', 3, 16, '05-09-2013 08:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `reply` text COLLATE utf8_unicode_ci NOT NULL,
  `file` text COLLATE utf8_unicode_ci NOT NULL,
  `rate` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `proID` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `tel`, `email`, `title`, `content`, `reply`, `file`, `rate`, `count`, `proID`, `type`, `state`) VALUES
(2, 'ĐÀO TIẾN TÚ', '', 'daotientu@gmail.com', 'Không có gì ', 'Không có gì ', 'Bình thường', '', 0, 0, 0, 2, 1),
(3, 'ĐÀO TIẾN TÚ', '', '', 'A', '', 'test', '', 5, 7, 12, 1, 0),
(5, 'ĐÀO TIẾN TÚ', '', '', 'test', 'test', '', '', 4, 1, 12, 1, 0),
(6, 'ĐÀO TIẾN TÚ', '', '', 'A', '', '', '', 3, 1, 12, 1, 0),
(7, 'ĐÀO TIẾN TÚ', '', '', 'A', '', '', '', 2, 1, 12, 1, 0),
(8, 'ĐÀO TIẾN TÚ', '', '', 'A', '', '', '', 1, 1, 12, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE IF NOT EXISTS `configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `siteName` text COLLATE utf8_unicode_ci NOT NULL,
  `siteOffline` int(11) NOT NULL,
  `offlineMessage` text COLLATE utf8_unicode_ci NOT NULL,
  `offlineImage` text COLLATE utf8_unicode_ci NOT NULL,
  `siteDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `siteKeywords` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `siteName`, `siteOffline`, `offlineMessage`, `offlineImage`, `siteDescription`, `siteKeywords`) VALUES
(1, 'Lốp xe ô tô', 1, 'Trang web này đang được bảo trì. <br/> Xin quay trở lại sau', 'uploaded/offline/baotri2-81203.jpg', 'Lốp xe ô tô', 'Lốp xe, ô tô');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `place_of_work` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `userid`, `name`, `place_of_work`, `address`, `tel`, `fax`, `country`, `email`, `title`, `content`, `date`, `state`) VALUES
(2, 4, 'ĐÀO TIẾN TÚ', '', '45 Tổ 5 Lương Yên ngõ 91', '0168 809 2229', '', '', 'daotientu@gmail.com', 'Không tiêu đề', 'Không nội dung', '2013-06-03 17:24:18', 0),
(4, 4, 'ĐÀO TIẾN TÚ', 'Viện Đại Học Mở Hà Nội', '45 Tổ 5 Lương Yên ngõ 91 quận Hai Bà Trưng - Hà Nội', '0168 809 2229', '', 'Hà Nội', '', '', '', '2013-06-04 23:29:27', 2),
(5, 4, 'ĐÀO TIẾN TÚ', '', 'Lương Yên, Hà Nội', '043 9875132', '', '', '', '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE IF NOT EXISTS `contactinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`id`, `content`) VALUES
(2, '<b>Học viện IT Plus - Viện CNTT - Trường Đại Học Quốc Gia H&agrave; Nội</b><br />\r\n&nbsp;\r\n<table border="0" cellpadding="2" cellspacing="2">\r\n	<tbody>\r\n		<tr>\r\n			<td>Địa chỉ</td>\r\n			<td>: Tầng 5, Nh&agrave; E3, ĐHQG HN, 144 Xu&acirc;n Thủy, Cầu Giấy, H&agrave; Nội</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Điện thoại</td>\r\n			<td>: 04 3754 6732 0912356004</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hotline</td>\r\n			<td>: 968 207 643</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Email</td>\r\n			<td>: <a href="mailto:itplus@itplus.edu.vn">itplus@itplus.edu.vn</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Website</td>\r\n			<td>:<a href="http://www.itplus.edu.vn/"> www.itplus.edu.vn</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `info`) VALUES
(1, '<strong>CN C&ocirc;ng ty TNHH Tiến Ho&agrave;ng Tại H&agrave; Nội</strong><br />\r\n<strong>Trụ sở:</strong> 557 Minh Khai- Hai B&agrave; Trưng- H&agrave; Nội<br />\r\n<strong>TTDV Lốp Xe:</strong> 58 Ng&ocirc; Gia Tự- Long Bi&ecirc;n- H&agrave; Nội<br />\r\n<strong>TK:</strong> 10820947046018 Ng&acirc;n H&agrave;ng Techcombank- CN Ho&agrave;n Kiếm- HN<br />\r\n<strong>Email:</strong> <span style="color:#0000CD;">daotientu@gmail.com</span>&nbsp;&nbsp;<br />\r\n<strong>Website:</strong> <span style="color:#0000CD;">IT+Tires.net</span><br />\r\n&nbsp;<br style="margin: 0px; padding: 0px; color: rgb(64, 61, 59); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 14px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" />\r\n<span style="color: rgb(64, 61, 59); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 14px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">&nbsp;</span><br style="margin: 0px; padding: 0px; color: rgb(64, 61, 59); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 14px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);" />\r\n<span style="color: rgb(64, 61, 59); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 14px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">&nbsp;</span>');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `author` text COLLATE utf8_unicode_ci NOT NULL,
  `picture` text COLLATE utf8_unicode_ci NOT NULL,
  `createDate` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `userCreate` text COLLATE utf8_unicode_ci NOT NULL,
  `numRead` int(100) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `keyword`, `description`, `content`, `author`, `picture`, `createDate`, `userCreate`, `numRead`, `state`) VALUES
(6, 'Lốp không hơi: Giải pháp cho mọi giải pháp', 'Lốp không hơi', 'Lốp không hơi: Giải pháp cho mọi giải pháp', '<span style="color:#800000;"><strong>Lốp kh&ocirc;ng hơi: Giải ph&aacute;p cho mọi giải ph&aacute;p</strong></span><br />\r\n<strong>Với lốp xe th&igrave; hiện tượng x&igrave; hơi, chu kỳ thay lốp v&agrave; khả năng th&iacute;ch nghi l&agrave; những vấn đề được quan t&acirc;m nhất. C&oacute; loại lốp n&agrave;o l&agrave;m thỏa m&atilde;n người ti&ecirc;u d&ugrave;ng theo cả 3 ti&ecirc;u ch&iacute; tr&ecirc;n?</strong><br />\r\n&nbsp;\r\n<div style="text-align: center;"><img alt="" src="/uploaded/news/images/lopkhonghoi.jpg" style="width: 460px; height: 334px;" /></div>\r\n<br />\r\n<em>Lốp kh&ocirc;ng hơi &quot;Tweel&quot; của Michelin</em><br />\r\n<br />\r\nThực ra lốp kh&ocirc;ng hơi cũng đ&atilde; được biết đến từ v&agrave;i năm trước đ&acirc;y.', 'Autonet', 'uploaded/news/201341310344741.120.90.jpg', '05-16-2013 21:37', 'ĐÀO TIẾN TÚ', 0, 1),
(7, 'Bắt "bệnh" trên lốp ô tô', 'Bắt "bệnh" trên lốp ô tô', ' Lốp xe là bộ phận duy nhất của xe ô tô tiếp xúc với mặt đường, nên thường là nơi đầu tiên báo hiệu có vấn đề không ổn với xe. Vì thế tài xế cần học cách “đọc” những dấu hiệu đó trên lốp.', '', 'Autonet', 'uploaded/news/2012122885622285.120.90.jpg', '06-20-2013 00:57', 'ĐÀO TIẾN TÚ', 0, 1),
(8, 'Khi nào cần đảo lốp xe ô tô ?', 'Khi nào cần đảo lốp xe ô tô ?', 'Khi nào cần đảo lốp ? Đảo lốp là một trong những hoạt động bảo dưỡng đơn giản góp phần giảm thiểu mòn không đều, kéo dài tuổi thọ và nâng cao an toàn khi lái xe.', '', 'Autonet', 'uploaded/news/201212311035634.120.90.jpg', '06-20-2013 01:45', 'ĐÀO TIẾN TÚ', 0, 1),
(9, 'Lốp ô tô tự bơm', 'Lốp ô tô tự bơm', 'Lốp ôtô tự bơm Không sử dụng bơm hay động cơ điện từ bên ngoài, hệ thống duy trì áp suất lốp của Goodyear Air Maintenance Technology (AMT) sẽ tự động bổ sung khí, tăng áp suất lốp đạt đến tiêu chuẩn khi xe chuyển động.', '', 'Autonet', 'uploaded/news/2012123103253283.120.90.jpg', '06-20-2013 11:03', 'ĐÀO TIẾN TÚ', 0, 1),
(10, 'Nhà máy sản xuất lốp ô tô đầu tiên tại Việt Nam đi vào họat động', 'Nhà máy sản xuất lốp ô tô đầu tiên tại Việt Nam đi vào họat động', 'tại Bình Dương diễn ra lễ khánh thành nhà máy Kumho Tires, với sự tham dự của Phó Thủ tướng Nguyễn Sinh Hùng, Thứ trưởng Bộ Công Thương Đỗ Hữu Hào, ông Lim Hong Che - Đại sứ Hàn Quốc tại Việt Nam', '', 'Autonet', 'uploaded/news/2012112217389599.120.90.jpg', '06-21-2013 02:27', 'ĐÀO TIẾN TÚ', 0, 1),
(11, 'Lốp ô tô lớn nhất thế giới', 'Lốp ô tô lớn nhất thế giới', 'Lốp ô tô lớn nhất thế giới (lopoto.net) - Đầu tuần này, nhà sản xuất lốp Titan Tire ở Mỹ đã xuất xưởng những chiếc lốp ngoại cỡ đầu tiên của mình: 63 inch, tương đương 1,6m, cao 4,27m, và nặng gần 5,67 tấn.', '', 'Autonet', 'uploaded/news/201112308193972.120.90.jpg', '06-21-2013 03:12', 'ĐÀO TIẾN TÚ', 0, 1),
(12, 'Renault tự sản xuất lốp ô tô', 'Renault tự sản xuất lốp ô tô', 'Renault tự sản xuất lốp ô tô (lốp ô tô) - Renault sẽ là hãng ô tô đầu tiên tự sản xuất lốp cho xe của mình.', '', 'Autonet', 'uploaded/news/2011123081650533.120.90.jpg', '06-21-2013 03:13', 'ĐÀO TIẾN TÚ', 0, 1),
(13, 'Căn chỉnh góc đặt bánh xe', 'Căn chỉnh góc đặt bánh xe', 'Có rất nhiều nguyên nhân dẫn đến mất lái, trong đó có một nguyên nhân phổ biến nhung khó nhận thấy, đó là các bánh xe chưa được cân chỉnh tốt.', '', 'Autonet', 'uploaded/news/2011123011957895.120.90.jpg', '06-21-2013 03:14', 'ĐÀO TIẾN TÚ', 0, 1),
(14, 'Hãng Lốp xe ô tô Michelin mở rộng hoạt động', 'Hãng Lốp xe ô tô Michelin mở rộng hoạt động', 'Hãng Lốp xe ô tô Michelin mở rộng hoạt động.', '', 'Autonet', 'uploaded/news/20111230118548.120.90.jpg', '06-21-2013 03:15', 'ĐÀO TIẾN TÚ', 0, 1),
(15, 'CTCP Thế giới vỏ xe giới thiệu sản phẩm Ultraseal chống xì hơi lốp xe ô tô', 'CTCP Thế giới vỏ xe giới thiệu sản phẩm Ultraseal chống xì hơi lốp xe ô tô', 'CTCP Thế giới vỏ xe giới thiệu sản phẩm Ultraseal chống xì hơi lốp xe ô tô', '', 'Autonet', 'uploaded/news/2011123011045269.120.90.jpg', '06-21-2013 03:17', 'ĐÀO TIẾN TÚ', 0, 1),
(16, 'TĂNG GIÁ SẢN PHẨM LỐP XE KUMHO', 'TĂNG GIÁ SẢN PHẨM LỐP XE KUMHO', 'Thông báo được công bố vào ngày 24 tháng 05 năm 2013. Công ty Lốp Kumho Việt Nam thông báo áp dụng tăng giá các sản phẩm lốp xe từ ngày 01/06/2013', '<p align="center" style="margin: 0px -3.7pt 8px 0px; padding: 0px 0px 15px; line-height: 16px; color: rgb(51, 51, 51); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-align: center;"><strong style="margin: 0px; padding: 0px;">C&Ocirc;NG TY LỐP KUMHO VIỆT NAM TH&Ocirc;NG B&Aacute;O</strong></p>\r\n\r\n<p align="center" style="margin: 0px -3.7pt 8px 0px; padding: 0px 0px 15px; line-height: 16px; color: rgb(51, 51, 51); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-align: center;"><strong style="margin: 0px; padding: 0px;">TĂNG GI&Aacute; SẢN PHẨM LỐP XE</strong></p>\r\n\r\n<p style="margin: 0px -3.7pt 8px 0px; padding: 0px 0px 15px; line-height: 16px; color: rgb(51, 51, 51); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><strong style="margin: 0px; padding: 0px;"><em style="margin: 0px; padding: 0px;">Th&ocirc;ng b&aacute;o được c&ocirc;ng bố v&agrave;o ng&agrave;y 24 th&aacute;ng 05 năm 2013</em></strong></p>\r\n\r\n<p style="margin: 0px -3.7pt 8px 0px; padding: 0px 0px 15px; line-height: 16px; color: rgb(51, 51, 51); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">C&ocirc;ng ty Lốp Kumho Việt Nam th&ocirc;ng b&aacute;o &aacute;p dụng tăng gi&aacute; c&aacute;c sản phẩm lốp xe từ ng&agrave;y 01/06/2013</p>\r\n\r\n<p style="margin: 0px -3.7pt 8px 0px; padding: 0px 0px 15px; line-height: 16px; color: rgb(51, 51, 51); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">C&ocirc;ng ty ch&uacute;ng t&ocirc;i tiếp tục cho việc cải thiện n&acirc;ng cao chất lượng sản phẩm ph&ugrave; hợp với địa h&igrave;nh, đường s&aacute; kh&oacute; khăn của Việt Nam v&agrave; sẽ ho&agrave;n thiện cung cấp dịch vụ tốt hơn cho kh&aacute;ch h&agrave;ng, ch&uacute;ng t&ocirc;i thấy rằng việc &aacute;p dụng tăng gi&aacute; sản phẩm l&agrave; cần thiết. C&ocirc;ng ty Lốp Kumho Việt Nam vẫn đang tiếp tục sử dụng những c&ocirc;ng nghệ mới nhất để sản xuất ra những chiếc lốp xe tốt nhất với gi&aacute; cả cạnh tranh ph&ugrave; hợp cho người ti&ecirc;u d&ugrave;ng.</p>\r\n\r\n<p style="margin: 0px -3.7pt 8px 0px; padding: 0px 0px 15px; line-height: 16px; color: rgb(51, 51, 51); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">Việc tăng gi&aacute; sản phẩm sẽ được &aacute;p dụng v&agrave; c&oacute; hiệu lực cho tất cả c&aacute;c đơn đặt h&agrave;ng kể từ ng&agrave;y 01 th&aacute;ng 06 năm 2013.</p>\r\n\r\n<p style="margin: 0px -3.7pt 8px 0px; padding: 0px 0px 15px; line-height: 16px; color: rgb(51, 51, 51); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><u style="margin: 0px; padding: 0px;">Mọi chi tiết xin li&ecirc;n hệ với ch&uacute;ng t&ocirc;i để biết th&ecirc;m chi tiết.</u></p>\r\n\r\n<p style="margin: 0px -3.7pt 8px 0px; padding: 0px 0px 15px; line-height: 16px; color: rgb(51, 51, 51); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">C&Ocirc;NG TY TNHH BIỂN HẠ LONG<br style="margin: 0px; padding: 0px;" />\r\nTrung T&acirc;m Dịch Vụ :&nbsp; 91 L&ecirc; Đức Thọ - Mỹ Đ&igrave;nh - H&agrave; Nội<br style="margin: 0px; padding: 0px;" />\r\nTel : 04 629 52 792<br style="margin: 0px; padding: 0px;" />\r\nHotline : 0914 230 699 - 0919 053 856<br style="margin: 0px; padding: 0px;" />\r\nEmail: lopoto.net@gmail.com<br style="margin: 0px; padding: 0px;" />\r\nwebsite:lopoto.net</p>\r\n', 'Autonet', 'uploaded/news/20136684045792.120.90.jpg', '06-21-2013 03:18', 'ĐÀO TIẾN TÚ', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderID` int(11) NOT NULL,
  `proID` int(11) NOT NULL,
  `price` int(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `totalPrice` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=44 ;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `orderID`, `proID`, `price`, `amount`, `totalPrice`) VALUES
(1, 1, 3, 1300000, 2, 2600000),
(26, 14, 12, 9600000, 1, 96000001),
(27, 14, 14, 2450000, 1, 24500001),
(28, 15, 12, 9600000, 1, 96000001),
(29, 15, 14, 2450000, 1, 24500001),
(30, 16, 12, 9600000, 1, 96000001),
(31, 16, 14, 2450000, 1, 24500001),
(32, 17, 12, 9600000, 1, 96000001),
(33, 17, 14, 2450000, 1, 24500001),
(34, 18, 12, 9600000, 1, 96000001),
(35, 18, 14, 2450000, 1, 24500001),
(36, 19, 12, 9600000, 1, 96000001),
(37, 19, 14, 2450000, 1, 24500001),
(38, 20, 12, 9600000, 1, 96000001),
(39, 20, 14, 2450000, 1, 24500001),
(40, 21, 13, 11000000, 1, 1),
(41, 22, 13, 11000000, 1, 1),
(42, 23, 11, 13950000, 1, 1),
(43, 24, 11, 13950000, 1, 13950000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cusID` int(11) NOT NULL,
  `orderDate` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `deliveryDate` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `shipper` text COLLATE utf8_unicode_ci NOT NULL,
  `paymentDate` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `paymentForm` int(11) NOT NULL,
  `paymentShip` int(11) NOT NULL,
  `recipient` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `totalBill` int(30) NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cusID`, `orderDate`, `deliveryDate`, `shipper`, `paymentDate`, `paymentForm`, `paymentShip`, `recipient`, `address`, `tel`, `country`, `email`, `totalBill`, `note`, `title`, `content`, `status`) VALUES
(1, 0, '05-10-2013 12:52', '06-11-2013 12:52', 'ĐÀO TIẾN TÚ', '05-11-2013 12:52', 1, 0, 'Nguyễn Huy Hoàng', 'Từ Liêm - Thanh Xuân', '(0168) 222 3334', 'Hà Nội', 'huyhoangds1@gmail.com', 0, 'Khách quen', '', '', 1),
(14, 26, '2013-07-31 09:05:39', '', '', '', 1, 1, 'ĐÀO TIẾN TÚ', 'test', '0123 456 7890', 'Hà Nội', 'daotientu@gmail.com', 12050000, 'Không vấn đề gì cả', '', '', 0),
(15, 27, '2013-07-31 09:08:41', '', '', '', 1, 1, 'ĐÀO TIẾN TÚ', 'test', '0123 456 7890', 'Hà Nội', 'daotientu@gmail.com', 12050000, 'Không vấn đề gì cả', '', '', 0),
(16, 28, '2013-07-31 09:16:35', '', '', '', 1, 1, 'ĐÀO TIẾN TÚ', 'test', '0123 456 7890', 'Hà Nội', 'daotientu@gmail.com', 12050000, 'Không vấn đề gì cả', '', '', 0),
(17, 29, '2013-07-31 11:59:34', '', '', '', 1, 1, 'ĐÀO TIẾN TÚ', '45 Tổ 5 Lương Yên', '0123 456 7890', 'Hà Nội', 'daotientu@gmail.com', 12050000, 'Không vấn đề gì cả', '', '', 0),
(18, 30, '2013-07-31 12:32:12', '', '', '', 3, 1, 'ĐÀO TIẾN TÚ', 'test', '0123 456 7890', 'Hà Nội', 'daotientu@gmail.com', 12050000, 'Không vấn đề gì cả', '', '', 0),
(19, 31, '2013-08-01 10:23:27', '', '', '', 3, 1, 'ĐÀO TIẾN TÚ', 'test', '0123 456 7890', 'Hà Nội', 'daotientu@gmail.com', 12050000, 'Không vấn đề gì cả', '', '', 0),
(20, 32, '2013-08-01 10:25:14', '', '', '', 3, 1, 'ĐÀO TIẾN TÚ', 'test', '0123 456 7890', 'Hà Nội', 'daotientu@gmail.com', 12050000, 'Không vấn đề gì cả', '', '', 0),
(21, 33, '2013-08-02 11:07:07', '', '', '', 0, 0, 'ĐÀO TIẾN TÚ', '45 Tổ 5 Lương Yên ngõ 91 quận Hai Bà Trưng - Hà Nội', '0168 809 2229', 'Hà Nội', 'daotientu@gmail.com', 11000000, 'No problem', '', '', 0),
(22, 34, '2013-08-02 11:09:57', '', '', '', 3, 1, 'ĐÀO TIẾN TÚ', '45 Tổ 5 Lương Yên ngõ 91 quận Hai Bà Trưng - Hà Nội', '0168 809 2229', 'Hà Nội', 'daotientu@gmail.com', 11000000, 'No problem', '', '', 0),
(23, 4, '2013-08-12 04:00:24', '', '', '', 2, 1, '', '', '', '', 'daotientu@gmail.com', 13950000, '', 'test', 'test', 0),
(24, 4, '2013-08-12 08:19:43', '', '', '', 1, 1, 'ĐÀO TIẾN TÚ', '45 Tổ 5 Lương Yên ngõ 91 quận Hai Bà Trưng - Hà Nội', '0168 809 2229', 'Hà Nội', 'daotientu@gmail.com', 13950000, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `parameter`
--

CREATE TABLE IF NOT EXISTS `parameter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `typeNode` int(11) NOT NULL,
  `ParentID` int(11) NOT NULL,
  `control` int(11) NOT NULL,
  `date` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

--
-- Dumping data for table `parameter`
--

INSERT INTO `parameter` (`id`, `title`, `typeNode`, `ParentID`, `control`, `date`, `state`) VALUES
(10, 'Loại xe', 2, 0, 1, '04-30-2013 11:55', 1),
(11, 'P (Passenger): lốp xe chở khách', 0, 10, 0, '04-30-2013 11:56', 1),
(12, 'LT (Light Truck): xe tải nhẹ', 0, 10, 0, '04-30-2013 11:57', 1),
(13, 'T (Temporary): lốp thay thế tạm thời', 0, 10, 0, '04-30-2013 11:57', 1),
(14, 'Bề ngang lốp (mm)', 1, 0, 2, '04-30-2013 11:58', 1),
(15, 'Tỷ lệ bề dày / chiều rộng lốp (%)', 1, 0, 3, '04-30-2013 12:00', 1),
(16, 'Cấu tạo lốp', 2, 0, 4, '04-30-2013 12:02', 1),
(17, 'R (hướng tâm): các lớp bố thân lốp xe chạy hướng tâm từ ta-lông bên này sang ta-lông bên kia', 0, 16, 0, '04-30-2013 12:03', 1),
(18, 'B (bố xiên): các lớp bố xiên chạy xiên từ ta-lông bên này sang ta-lông bên kia, với các lớp bố lần lượt đổi hướng để gia cường lẫn nhau', 0, 16, 0, '04-30-2013 12:06', 1),
(19, 'Đường kính bánh (inch)', 1, 0, 5, '04-30-2013 12:09', 1),
(20, 'Chỉ số trọng tải (kg) hoặc pound (cân Anh)', 0, 0, 6, '04-30-2013 12:11', 1),
(21, 'Chỉ số tốc độ (km/h)', 0, 0, 7, '04-30-2013 12:16', 1),
(22, 'F (vận tốc tối đa: 80 km/h)', 0, 21, 0, '04-30-2013 12:18', 1),
(23, 'G (vận tốc tối đa: 90 km/h)', 0, 21, 0, '04-30-2013 12:19', 1),
(24, 'J (vận tốc tối đa: 100 km/h)', 0, 21, 0, '04-30-2013 12:20', 1),
(25, 'K (vận tốc tối đa: 110 km/h)', 0, 21, 0, '04-30-2013 12:21', 1),
(26, 'L (vận tốc tối đa: 120 km/h)', 0, 21, 0, '04-30-2013 12:25', 1),
(27, 'M (vận tốc tối đa: 130 km/h)', 0, 21, 0, '04-30-2013 12:26', 1),
(28, 'N (vận tốc tối đa: 140 km/h)', 0, 21, 0, '04-30-2013 12:26', 1),
(29, 'P (vận tốc tối đa: 150 km/h)', 0, 21, 0, '04-30-2013 12:27', 1),
(30, 'Q (vận tốc tối đa: 160 km/h)', 0, 21, 0, '04-30-2013 12:28', 1),
(31, 'R (vận tốc tối đa: 170 km/h)', 0, 21, 0, '04-30-2013 12:29', 1),
(32, 'S (vận tốc tối đa: 180 km/h)', 0, 21, 0, '04-30-2013 12:29', 1),
(33, 'T (vận tốc tối đa: 190 km/h)', 0, 21, 0, '04-30-2013 12:30', 1),
(34, 'U (vận tốc tối đa: 200 km/h)', 0, 21, 0, '04-30-2013 12:31', 1),
(35, 'H (vận tốc tối đa: 210 km/h)', 0, 21, 0, '04-30-2013 12:32', 1),
(36, 'V (vận tốc tối đa: 240 km/h)', 0, 21, 0, '04-30-2013 12:32', 1),
(37, 'Z (vận tốc tối đa: > 240 km/h)', 0, 21, 0, '04-30-2013 12:33', 1),
(38, 'Độ kháng mòn của mặt lốp (Treadwear)', 0, 0, 8, '04-30-2013 13:49', 1),
(39, 'Trên 100 - Tốt hơn', 0, 38, 0, '04-30-2013 13:49', 1),
(40, '100 - Mức chuẩn', 0, 38, 0, '04-30-2013 13:50', 1),
(41, 'Dưới 100 - Kém hơn', 0, 38, 0, '04-30-2013 13:50', 1),
(42, 'Lực bám kéo (traction)', 0, 0, 9, '04-30-2013 13:51', 1),
(43, 'A - Tốt nhất', 0, 42, 0, '04-30-2013 13:52', 1),
(44, 'B - Trung bình', 0, 42, 0, '04-30-2013 13:52', 1),
(45, 'C - Chấp nhận được', 0, 42, 0, '04-30-2013 13:53', 1),
(46, 'Nhiệt độ (temperature)', 0, 0, 10, '04-30-2013 13:54', 1),
(47, 'A - Tốt nhất', 0, 46, 0, '04-30-2013 13:54', 1),
(48, 'B - Trung bình', 0, 46, 0, '04-30-2013 13:54', 1),
(49, 'C - Chấp nhận được', 0, 46, 0, '04-30-2013 13:54', 1),
(50, 'M + S (yêu cầu tối thiểu khi đi trên mặt đường lầy lội hoặc phủ tuyết)', 0, 0, 11, '04-30-2013 13:55', 1),
(51, 'Maximum load (tải trọng tối đa của lốp xe - pound hoặc kg)', 0, 0, 12, '04-30-2013 13:56', 1),
(52, 'Maximum Inflation Pressure (Áp lực hơi tối đa)', 0, 0, 13, '04-30-2013 13:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(100) NOT NULL,
  `VAT` int(11) NOT NULL,
  `amount` int(100) NOT NULL,
  `warranty` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `review` int(11) NOT NULL,
  `origin` text COLLATE utf8_unicode_ci NOT NULL,
  `shipping` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `typePro` int(11) NOT NULL,
  `special` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `title`, `keyword`, `price`, `VAT`, `amount`, `warranty`, `status`, `review`, `origin`, `shipping`, `image`, `description`, `date`, `state`, `typePro`, `special`, `catid`) VALUES
(3, '255/60R18 Latitude Tour HP', '255/60R18 Latitude Tour HP', '255/60R18 Latitude Tour HP', 7800000, 1, 2000, 12, 1, 5, 'Vietnam', 1, 'uploaded/products/255.60R18_Latitude_Tour_HP.jpg', '<strong>Lốp xe &ocirc; t&ocirc; cao cấp Michelin 255/60R18 Latitude tour HP lắp cho xe Ford Everest</strong>', '05-09-2013 08:42', 1, 2, 1, 31),
(4, '245/40R18 Pilot Sport 3', '245/40R18 Pilot Sport 3', '245/40R18 Pilot Sport 3', 5150000, 1, 2000, 12, 0, 5, 'Vietnam', 1, 'uploaded/products/245.40R18_Pilot_Sport_3.jpg', '', '05-10-2013 09:21', 1, 2, 2, 23),
(7, '255/55R18 Latitude Tour HP', '255/55R18 Latitude Tour HP', '255/55R18 Latitude Tour HP', 7800000, 1, 2000, 12, 0, 0, 'Vietnam', 0, 'uploaded/products/255.55R18_Latitude_Tour_HP.jpg', '', '05-09-2013 09:30', 1, 2, 3, 31),
(8, '255/50R20 Latitude Tour HP', '255/50R20 Latitude Tour HP', '255/50R20 Latitude Tour HP', 10900000, 1, 2000, 12, 0, 0, 'Vietnam', 0, 'uploaded/products/255.50R20_Latitude_Tour_HP.jpg', 'Lốp xe &ocirc; t&ocirc; cao cấp Michelin 255/50R20 Latitude tour HP lắp cho xe Land Rover', '05-09-2013 12:03', 1, 2, 4, 31),
(9, '255/55R19 Latitude Tour HP', '255/55R19 Latitude Tour HP', '255/55R19 Latitude Tour HP', 7900000, 1, 2000, 12, 0, 5, 'Vietnam', 1, 'uploaded/products/235.55R19_Latitude_Tour_HP.jpg', 'Lốp xe &ocirc; t&ocirc; cao cấp Michelin 235/55R19 Latitude tour HP lắp cho xe Audi Q5, RX350', '05-09-2013 12:16', 1, 2, 5, 31),
(10, '275/40R20 Latitude Tour HP', '275/40R20 Latitude Tour HP', '275/40R20 Latitude Tour HP', 12500000, 1, 2000, 12, 0, 0, 'Vietnam', 0, 'uploaded/products/275.40R20_Latitude_Tour_HP.jpg', 'Lốp xe &ocirc; t&ocirc; Michelin 275/40R20 Latitude Tour HP lắp b&aacute;nh trước cho Xe BMW X6', '05-09-2013 12:19', 1, 1, 0, 31),
(11, '315/35R20 Latitude Tour HP', '315/35R20 Latitude Tour HP', '315/35R20 Latitude Tour HP', 13950000, 1, 2000, 12, 0, 0, 'Vietnam', 0, 'uploaded/products/315.35R20_Latitude_Tour_HP.jpg', 'Lốp xe &ocirc; t&ocirc; Michelin 315/35R20 Latitude Tour HP lắp b&aacute;nh sau cho Xe BMV X6', '05-09-2013 13:17', 1, 1, 0, 31),
(12, '255/50R19 Latitude Tour HP', '255/50R19 Latitude Tour HP', '255/50R19 Latitude Tour HP', 9600000, 1, 2000, 12, 0, 5, 'Vietnam', 1, 'uploaded/products/255.50R19_Latitude_Tour_HP.jpg', 'Lốp xe &ocirc; t&ocirc; Michelin 255/50R19 Latitude Tour HP (Chống xịt - ZP) lắp cho xe BMV X5', '05-09-2013 13:21', 1, 1, 0, 31),
(13, '275/45R20 Latitude Tour HP', '275/45R20 Latitude Tour HP', '275/45R20 Latitude Tour HP', 11000000, 1, 2000, 12, 0, 0, 'Vietnam', 0, 'uploaded/products/275.45R20_Latitude_Tour_HP.jpg', 'Lốp xe &ocirc; t&ocirc; Michelin 275/45R20 Latitude Tour HP sản xuất tại Mỹ (USA), lắp theo xe Audi Q7', '05-09-2013 13:26', 1, 1, 0, 31),
(14, '215/55R16 Prymacy LC', '215/55R16 Prymacy LC', '215/55R16 Prymacy LC', 2450000, 1, 2000, 12, 0, 0, 'Vietnam', 0, 'uploaded/products/215.55R16_Prymacy_LC.jpg', '', '05-09-2013 13:26', 1, 1, 0, 25),
(16, '215/65R15 Primacy LC', '215/65R15 Primacy LC', '215/65R15 Primacy LC, Primacy LC', 2150000, 1, 0, 12, 0, 5, 'Vietnam', 2, 'uploaded/products/215.65R15_Primacy_LC.jpg', '215/65R15 Primacy LC', '08-08-2013 17:20', 1, 1, 0, 25);

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE IF NOT EXISTS `products_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proID` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `proID`, `image`, `sort_order`) VALUES
(18, 16, 'uploaded/products_images/0800657prymacy_lc_1518332.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `question`
--


-- --------------------------------------------------------

--
-- Table structure for table `techsupport`
--

CREATE TABLE IF NOT EXISTS `techsupport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `reply` text COLLATE utf8_unicode_ci NOT NULL,
  `file` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `techsupport`
--


-- --------------------------------------------------------

--
-- Table structure for table `template_styles`
--

CREATE TABLE IF NOT EXISTS `template_styles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `styleName` text COLLATE utf8_unicode_ci NOT NULL,
  `templateName` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `location` int(11) NOT NULL,
  `href` text COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `author` text COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `template_styles`
--

INSERT INTO `template_styles` (`id`, `styleName`, `templateName`, `description`, `image`, `location`, `href`, `date`, `author`, `state`) VALUES
(1, 'StyleA - Default', 'style', 'StyleSheet', 'uploaded/templates/ITplus_Tires.jpg', 1, 'uploaded/css/stylesA.css', '07-27-2013 10:06', 'DAO TIEN TU', 0),
(2, 'StyleB - Default', 'Other Style ', 'StyleSheet B', 'uploaded/templates/ITplus_TiresB.jpg', 1, 'uploaded/css/stylesB.css', '08-03-2013 07:47', 'ĐÀO TIẾN TÚ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `useronline`
--

CREATE TABLE IF NOT EXISTS `useronline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_user` text COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_visit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=290 ;

--
-- Dumping data for table `useronline`
--

INSERT INTO `useronline` (`id`, `session_user`, `ip_address`, `last_visit`) VALUES
(67, '1dcbf3a882594766ef5fd9bb3cf2aab3', '127.0.0.1', '2013-07-07 18:42:30'),
(68, '5a692ccf50fc6947d762c3a5c0820dd6', '127.0.0.1', '2013-07-07 18:43:08'),
(69, 'a78203b59c9da4d87c38f7f151c627c4', '127.0.0.2', '2013-07-07 18:44:47'),
(70, '83b7c312b34a7af58b6ddf70f717d643', '127.0.0.1', '2013-07-07 18:48:45'),
(71, '64cc8ff1f31e0d6a66ae1afccce34ec5', '127.0.0.1', '2013-07-07 19:38:19'),
(72, '5d36d265a1ba0b90f63970245bc45776', '127.0.0.1', '2013-07-08 15:10:55'),
(73, '75a0797b9339f34077f4d91647768207', '127.0.0.1', '2013-07-08 15:56:25'),
(74, '95cbf1828d759c0a36b448ea2d600b90', '127.0.0.1', '2013-07-08 18:18:40'),
(75, '1d643912fee82bb5bcb9b14c8f65263a', '127.0.0.1', '2013-07-08 18:46:06'),
(76, '4a1f13b88fd181a82cbc75c1baed15e8', '127.0.0.1', '2013-07-08 21:22:14'),
(77, 'fe3720c20057fd17a06c79cdbf3bacb6', '127.0.0.1', '2013-07-09 17:37:57'),
(78, '994e66e1351659c99d4c5c6511583629', '127.0.0.1', '2013-07-09 21:06:54'),
(79, '989bbc1b08ab7f51b865987eafebfdbc', '127.0.0.1', '2013-07-10 00:52:16'),
(80, '914e054d08c8ffce6bef929eea43c4ad', '127.0.0.1', '2013-07-10 15:21:21'),
(81, 'd5131dc2520d86f214ed6f1efc037238', '127.0.0.1', '2013-07-10 15:41:46'),
(82, '37861515713d9f8aa85c50b134968d3e', '127.0.0.1', '2013-07-10 18:39:36'),
(83, '7eaa46479c28dfca737718a087f8939a', '127.0.0.1', '2013-07-10 23:53:45'),
(84, '3bbeea7b0bf1a06f2aa114b4ac18a701', '127.0.0.1', '2013-07-12 05:46:38'),
(85, '24413b6fdea4ab15b1b5d762c63b8e33', '127.0.0.1', '2013-07-12 17:41:44'),
(86, 'ee5826170b0b90e04c349407985a7330', '127.0.0.1', '2013-07-12 18:42:28'),
(87, '2ffde8bf45fe98eb20e18419d4240181', '127.0.0.1', '2013-07-12 19:47:24'),
(88, 'fd9efcf1a4949d961f55bc5caf5632cd', '127.0.0.1', '2013-07-12 20:35:11'),
(89, 'ab95b469ba43948dfc3e5bd2affae54b', '127.0.0.1', '2013-07-12 21:11:45'),
(90, '7d37621268416ef586c957310e614bcf', '127.0.0.1', '2013-07-12 22:24:15'),
(91, '84c019e14c2d44ed47d1979c69e5e6d8', '127.0.0.1', '2013-07-12 23:44:46'),
(92, '82057a270090a1f7e38f6ba8fd34f21d', '127.0.0.1', '2013-07-13 18:56:31'),
(93, '54104d3738af653c34ad77c1bb878771', '127.0.0.1', '2013-07-13 19:00:22'),
(94, '8cdc1b8df7802eb95044b6bec218452a', '127.0.0.1', '2013-07-13 20:05:47'),
(95, '0469e6b05c6d6270b1ee973b999f26fc', '127.0.0.1', '2013-07-13 21:05:54'),
(96, '392a3f041ac87a0322d410010275f94b', '127.0.0.1', '2013-07-13 21:02:12'),
(97, '6d8974f9feb47d9708fd02fd4f6b39e2', '127.0.0.1', '2013-07-13 21:49:56'),
(98, '26d73d53eda1e4ab44fd72c4f2827cb5', '127.0.0.1', '2013-07-13 23:41:00'),
(99, '32d0f889a4a84b762491b6eab2162197', '127.0.0.1', '2013-07-14 01:09:30'),
(100, 'ffa2da384e07c4966d5671bdf38948b3', '127.0.0.1', '2013-07-14 18:54:27'),
(101, '8fdd389f97e816c4e547f3e19e8d4db2', '127.0.0.1', '2013-07-14 20:12:42'),
(102, 'a85f0f6d8c9f9e5432b9bcd3c69c6ba6', '127.0.0.1', '2013-07-14 21:07:38'),
(103, '13544bfb095aaa7eb629519995025bfd', '127.0.0.1', '2013-07-14 21:30:28'),
(104, '8ecedfbc3253de0ff6b1b01f9d234619', '127.0.0.1', '2013-07-14 23:30:37'),
(105, '4240e995f862f6660a87060d2b0cca19', '127.0.0.1', '2013-07-15 02:32:57'),
(106, '569dbd09b333eb1646c53f741931e230', '127.0.0.1', '2013-07-15 04:36:08'),
(107, 'a29ab283fe321176ccf0dca5250091c7', '127.0.0.1', '2013-07-15 05:38:24'),
(108, 'bcff4c3ac219e4c38652bee1c1b92a0b', '127.0.0.1', '2013-07-15 06:41:53'),
(109, 'f61484362e41273834d5dcd6c10ed98b', '127.0.0.1', '2013-07-15 06:57:49'),
(110, '4c5dc16510ae40bd7fc67688e09374c8', '127.0.0.1', '2013-07-15 07:32:51'),
(111, 'f06137285a08156b41725b80144f5f5e', '127.0.0.1', '2013-07-15 07:54:39'),
(112, '14a5fecffa036e48aa483741ca05f7e6', '127.0.0.1', '2013-07-15 19:14:30'),
(113, 'e1984e92bb7a7a25ab055c6111262db9', '127.0.0.1', '2013-07-15 19:33:11'),
(114, '52858adea51e002454469b8508b7da63', '127.0.0.1', '2013-07-15 19:51:25'),
(115, 'd760e377555a7ba0bd72d5b081d0903b', '127.0.0.1', '2013-07-15 20:07:51'),
(116, 'f2caa19f1f319bfdc5cace7607b36b0c', '127.0.0.1', '2013-07-15 20:29:29'),
(117, '6bd04bf2edf6c27b51534f0dfbacada5', '127.0.0.1', '2013-07-15 21:10:08'),
(118, '1ef6664f971bf553dafb2b9182c256d1', '127.0.0.1', '2013-07-15 22:11:35'),
(119, 'c0f6daa73f2768fe28546b317ac622d5', '127.0.0.1', '2013-07-15 22:37:38'),
(120, 'c996e2d10cf14a349a202daa1782f732', '127.0.0.1', '2013-07-15 23:26:30'),
(121, 'f90aedd2ccfa9da4e6e8dc63e0949851', '127.0.0.1', '2013-07-16 00:18:37'),
(122, '5e3f88b2763ba9f25e0ae6488d9b636f', '127.0.0.1', '2013-07-16 00:37:39'),
(123, 'aeb9ecd985dfbe7a25f7e44e551479af', '127.0.0.1', '2013-07-16 01:04:36'),
(124, '8509f3f0e74e6261339eb664797c33cc', '127.0.0.1', '2013-07-16 01:36:35'),
(125, 'b133250524b5ceea5a70fdf46f4a4a31', '127.0.0.1', '2013-07-16 01:38:23'),
(126, 'a82a366c01cb3f47805dcc3a4567a301', '127.0.0.1', '2013-07-16 02:26:18'),
(127, '4bae001c360a56c9f94b66395c52d9a8', '127.0.0.1', '2013-07-16 02:55:09'),
(128, 'a89899b886c8267e575e3df43602b13b', '127.0.0.1', '2013-07-16 03:06:28'),
(129, '76924f743a8359bdc6a1e0a8fc6b79e3', '127.0.0.1', '2013-07-16 03:56:57'),
(130, '00e70452fcc31acfe2c32add7ea32eab', '127.0.0.1', '2013-07-16 05:30:27'),
(131, '8fd70d393d3582c628f53f18b5504452', '127.0.0.1', '2013-07-16 06:52:20'),
(132, '16322590b7bff3900cd4cb24d7c0f96e', '127.0.0.1', '2013-07-16 18:35:06'),
(133, '9da137cd5c00d63ddc83f6633c32c355', '127.0.0.1', '2013-07-16 19:17:37'),
(134, 'f6c43aa47c4f940fad5bdddfba983f41', '127.0.0.1', '2013-07-16 19:28:51'),
(135, '152b98e28bf0706af1fdf798e875761b', '127.0.0.1', '2013-07-16 19:53:19'),
(136, '1befa26769ddfd852680329b8a454c80', '127.0.0.1', '2013-07-16 20:09:13'),
(137, 'd6e9c151574528aa5a4ba074e8393059', '127.0.0.1', '2013-07-16 20:55:57'),
(138, '81c2b5c6f5f57733c91db676973b2b17', '127.0.0.1', '2013-07-17 01:14:17'),
(139, '13eb380fc140ada3b36feb22a5528cdf', '127.0.0.1', '2013-07-17 01:33:07'),
(140, '92ee346a75e9c3eaa59bef7dcf07678c', '127.0.0.1', '2013-07-17 04:11:54'),
(141, '7eb6546a615e0bf31dc398c38d457d7a', '127.0.0.1', '2013-07-17 05:39:41'),
(142, '45cc46d6be67977fa7cf917fd3bcec78', '127.0.0.1', '2013-07-17 07:31:55'),
(143, '9799720665688c62fe2aee92b463a337', '127.0.0.1', '2013-07-17 09:23:16'),
(144, '7dd0668bac8f5275e9c344b4b62d2729', '127.0.0.1', '2013-07-17 09:49:23'),
(145, '383f6f25690e8cff8731a74213bf2366', '127.0.0.1', '2013-07-17 21:28:46'),
(146, '7522e9e13bcbb1b836261a26fd4d56b2', '127.0.0.1', '2013-07-18 00:27:03'),
(147, '0b7fdea674123796734f9265a5c9d7d1', '127.0.0.1', '2013-07-18 00:51:20'),
(148, 'f549f2382ac416fc9feeacf57685ce41', '127.0.0.1', '2013-07-18 01:19:50'),
(149, '7130b852eb57d82e625cdcb77d304284', '127.0.0.1', '2013-07-18 03:56:50'),
(150, 'fe910b97f5f46b40db5eec6e6cb890f2', '127.0.0.1', '2013-07-18 06:58:46'),
(151, '7f8779652f62a4028c4f0aecfe19be8a', '127.0.0.1', '2013-07-18 09:54:31'),
(152, '890cbda8548e4dc6ee51d360ef2c299e', '127.0.0.1', '2013-07-18 22:53:14'),
(153, '6fd286748ddb09eb8385954bc0500874', '127.0.0.1', '2013-07-19 22:46:54'),
(154, '3a626c4197c6b5b977a0293aa14664b8', '127.0.0.1', '2013-07-19 22:57:45'),
(155, '1a39d45cbea36bb96a41afcfa68dbb84', '127.0.0.1', '2013-07-20 09:34:32'),
(156, 'eaa434cba0754936cdf9804bfb401590', '127.0.0.1', '2013-07-20 22:18:10'),
(157, '3546907db04b0ba9b47bc4df2caf90ea', '127.0.0.1', '2013-07-21 02:43:28'),
(158, 'e84422ad3e739350d24b8b8306c202b5', '127.0.0.1', '2013-07-21 03:00:49'),
(159, 'f6e23c91dbb4bc3eac0c25c2f34a6dff', '127.0.0.1', '2013-07-21 07:48:12'),
(160, '21ae732ef05e7b2ebef9dcdd92052820', '127.0.0.1', '2013-07-21 08:12:34'),
(161, 'c6b34a2c1b82e04bb7c76518d1e54b23', '127.0.0.1', '2013-07-21 10:15:20'),
(162, '5327feffa10891a646664bf28d3d9c98', '127.0.0.1', '2013-07-21 11:02:57'),
(163, '2b633fb5c55cbe1205b58198118c2639', '127.0.0.1', '2013-07-21 23:31:18'),
(164, '4dc574c70437d70bdde990f96dd89453', '127.0.0.1', '2013-07-21 23:47:42'),
(165, '5912dff5f8ba0c18d95229eda1b263a1', '127.0.0.1', '2013-07-22 00:54:40'),
(166, '0e76ac0e63887f06ecafd476bf8d015e', '127.0.0.1', '2013-07-22 06:39:19'),
(167, '5913cbb81ed6e82be2d3d70b67e867bb', '127.0.0.1', '2013-07-22 07:11:15'),
(168, 'b68f2ec08953bdf681309897f118c8c7', '127.0.0.1', '2013-07-23 03:39:06'),
(169, '6dc7790275697fb13f83b6d3ffc7ad4a', '127.0.0.1', '2013-07-23 15:25:31'),
(170, 'c4931fb5bf2bc9410290a79d0aa3edff', '127.0.0.1', '2013-07-24 21:40:09'),
(171, '9394e5b4cd101ba148e53d989cb331d8', '127.0.0.1', '2013-07-25 21:01:05'),
(172, '5d125f2067b5696a787740d9615e6912', '127.0.0.1', '2013-07-26 09:33:26'),
(173, '665422c556b43ab24e0707621bd199ed', '127.0.0.1', '2013-07-26 18:16:04'),
(174, '0f969f6f15bdb41e5b42860071d1f7b2', '127.0.0.1', '2013-07-27 10:39:54'),
(175, 'ba8550d214fc3634e15962a342a52715', '127.0.0.1', '2013-07-27 19:30:11'),
(176, '8e74fa853741399c0fbe3496f4679430', '127.0.0.1', '2013-07-27 23:59:41'),
(177, 'ff4016e4dfe57c77ab84841a5080f976', '127.0.0.1', '2013-07-28 03:49:36'),
(178, '9e32f539402cc160ad29113f2df83a40', '127.0.0.1', '2013-07-28 04:25:50'),
(179, '21493c3da799915b0febe12028852ed4', '127.0.0.1', '2013-07-28 10:59:36'),
(180, '1a21734b17778f3dcf1aa090824f81d4', '127.0.0.1', '2013-07-28 20:06:42'),
(181, 'c66c7110e0b0cd1b84a32960956e357d', '127.0.0.1', '2013-07-29 02:53:36'),
(182, '228d976cf7eb381cb17076caaa8900d7', '127.0.0.1', '2013-07-29 04:59:20'),
(183, 'e623c8d0d1bf18178dce485aa508988e', '127.0.0.1', '2013-07-29 09:06:14'),
(184, '75249453db939840bd61a81434fe4da1', '127.0.0.1', '2013-07-30 00:34:12'),
(185, '1d0bae4fa96187c65fdea3dd94041d6f', '127.0.0.1', '2013-07-30 00:50:37'),
(186, '5adc7eceb13894053e58ac3d55b60946', '127.0.0.1', '2013-07-30 10:04:40'),
(187, '553119e6c40e4f7fcad6a153776ecb96', '127.0.0.1', '2013-07-30 18:34:16'),
(188, 'fe8bdd95bfe3352a9204d626e40ebd4f', '127.0.0.1', '2013-07-30 19:11:08'),
(189, 'cd409e5fce29efa675f881adb87a4d12', '127.0.0.1', '2013-07-30 19:54:45'),
(190, '7c0ad62ac38a2abb2ef6c7d9285f526e', '127.0.0.1', '2013-07-30 20:51:12'),
(191, 'd1b98b39d8342a43b567390ec96d2216', '127.0.0.1', '2013-07-30 21:55:29'),
(192, '1631443172feacb78c15446bdf1f446d', '127.0.0.1', '2013-07-30 22:17:26'),
(193, 'e32910b821ceb49a22ccceacd3740477', '127.0.0.1', '2013-07-30 23:23:35'),
(194, '1855037a1f3ea6f2bfa8527a2cf81452', '127.0.0.1', '2013-07-31 06:30:15'),
(195, '09d59aef787a6ed540c3c823638f85ec', '127.0.0.1', '2013-07-31 07:01:03'),
(196, '7f5063347348b5cd63f0c61738bfa93f', '127.0.0.1', '2013-07-31 07:45:05'),
(197, '600e2b88260864899675fe1b755abd05', '127.0.0.1', '2013-07-31 07:55:39'),
(198, '64c963249283234d447b2a1a5bd4d6e8', '127.0.0.1', '2013-07-31 08:22:59'),
(199, '4942f1556aba634c1b3f4ed11d050ca2', '127.0.0.1', '2013-07-31 09:16:55'),
(200, '34ebc202e2adfc9928a4b9b7c8f505f3', '127.0.0.1', '2013-07-31 09:32:28'),
(201, 'c534663e58d5c8bb8a1dba196f972d5a', '127.0.0.1', '2013-07-31 10:08:09'),
(202, '234e755e85f067b41cf404008ca96147', '127.0.0.1', '2013-07-31 12:53:31'),
(203, '495ec2ca6421631ca79bef74e93f33e6', '127.0.0.1', '2013-07-31 15:49:27'),
(204, '68d36baf142336a9edaafcd499f7658e', '127.0.0.1', '2013-08-01 09:00:22'),
(205, 'adb8ac9eb854f86162fe96aa8f6e022b', '127.0.0.1', '2013-08-01 10:29:03'),
(206, '35787eec5fb46c8a9cc87d54bc972350', '127.0.0.1', '2013-08-01 10:58:48'),
(207, '55a1a555666ba669eddb9f2add9c77a0', '127.0.0.1', '2013-08-01 11:21:36'),
(208, '747e52eae3514699d30006eaf09934b4', '127.0.0.1', '2013-08-02 00:03:44'),
(209, 'ffcd0041ddeaec6ab3fbc96d37ee48ce', '127.0.0.1', '2013-08-02 06:52:59'),
(210, '0d6f6c4f72d45470db59a2798ff8c02b', '127.0.0.1', '2013-08-02 08:07:36'),
(211, '6d746e61490aa404de2732b8ece18ad4', '127.0.0.1', '2013-08-02 09:28:10'),
(212, 'f468de023f8b8a69f9bad97811e50aa3', '127.0.0.1', '2013-08-02 09:40:16'),
(213, 'f4aee7bed4d08172e17b925f796cf9ea', '127.0.0.1', '2013-08-02 13:22:03'),
(214, '9ae85923f2c14e279f2a8921ed0f4ddb', '127.0.0.1', '2013-08-02 14:07:31'),
(215, '2a93437937d1e546e703cefb7558d8bf', '127.0.0.1', '2013-08-02 14:50:17'),
(216, '32f87011a4044d322fd5998db029605e', '127.0.0.1', '2013-08-02 23:40:51'),
(217, 'aa1249fe13cb0d786d3f32e947916502', '127.0.0.1', '2013-08-03 00:57:25'),
(218, 'f4c0676bd1624c161fff6027b8a26ef6', '127.0.0.1', '2013-08-03 01:26:47'),
(219, '192277058669941d0ef558280b0d54f6', '127.0.0.1', '2013-08-03 04:39:38'),
(220, 'ff7ffe09e86347aa4462fa026d075dd1', '127.0.0.1', '2013-08-03 07:42:35'),
(221, '237f41508233a3398b83a6e0881b401e', '127.0.0.1', '2013-08-03 08:02:02'),
(222, '86a2c761b6f511d19a5774ba9e407973', '127.0.0.1', '2013-08-03 09:03:24'),
(223, '4f4c1a1803047676c0a95b30e83c913c', '127.0.0.1', '2013-08-03 20:40:13'),
(224, 'bc3358ae443628d0eac930295cbd6073', '127.0.0.1', '2013-08-04 00:25:04'),
(225, 'f18ac0775b41728a0522a9bb02235105', '127.0.0.1', '2013-08-04 00:58:04'),
(226, 'f07850e2c0e7ca255c65bc7bb77e6ff3', '127.0.0.1', '2013-08-04 03:07:39'),
(227, '1e7a34a7db80e1cb190655e31b5ededd', '127.0.0.1', '2013-08-04 03:18:12'),
(228, '0e086d796fc8b138e4afc6a4a1f28971', '127.0.0.1', '2013-08-04 08:51:28'),
(229, '12dc14984b490e14f4f15ce811a7c294', '127.0.0.1', '2013-08-04 09:25:06'),
(230, '8eeab56586925334093a982e1d1a41ad', '127.0.0.1', '2013-08-05 01:04:28'),
(231, 'd23334fe0128ba5986fb117cab31bbc1', '127.0.0.1', '2013-08-05 10:25:29'),
(232, 'e25f9f3659df136eae2d4114cc1f8b2f', '127.0.0.1', '2013-08-06 01:27:19'),
(233, 'acc2c5d3d40f368223217c527b23584d', '127.0.0.1', '2013-08-07 02:18:02'),
(234, 'a5f1a20225c7f5ee6600e2cf0b013285', '127.0.0.1', '2013-08-07 06:40:59'),
(235, '1f6206db713d6ca71f5aa1922d512a20', '127.0.0.1', '2013-08-07 07:01:33'),
(236, '884caf69a6cf4cda43ef7f38e3ce791e', '127.0.0.1', '2013-08-08 00:32:24'),
(237, 'ac2a38ca902bbe4c99f15d76d5787a83', '127.0.0.1', '2013-08-08 15:58:18'),
(238, 'bf402e17101893b8a15969d4cf432587', '127.0.0.1', '2013-08-08 16:24:56'),
(239, '4b2a0c0a3abb3419a8cca3034bd7b2d1', '127.0.0.1', '2013-08-08 18:17:44'),
(240, '15cd5485cf7e7d212662e4dea37b9f64', '127.0.0.1', '2013-08-08 18:35:48'),
(241, 'f63c0d231d854e64feadc1534717a65e', '127.0.0.1', '2013-08-09 06:13:49'),
(242, 'e883ef7091066a8ac32b05c046dec619', '127.0.0.1', '2013-08-09 08:49:48'),
(243, 'bb82625db945d59466298bd697630ec5', '127.0.0.1', '2013-08-12 02:51:52'),
(244, 'cfacf0b576a876ecb1b876175f1c55f0', '127.0.0.1', '2013-08-12 03:23:42'),
(245, 'e38067f61c6723f18c3edaa4c16570c1', '127.0.0.1', '2013-08-12 03:33:13'),
(246, '7804aaf70cb600c86853ac1c59c58373', '127.0.0.1', '2013-08-12 03:43:23'),
(247, '779649b6002f75d42efe9dfb732510a1', '127.0.0.1', '2013-08-12 04:09:09'),
(248, '2456ac1f093797efdc6f17963b7effbc', '127.0.0.1', '2013-08-12 04:24:27'),
(249, 'bb33ee365aed6c99c6d693b973752887', '127.0.0.1', '2013-08-12 05:12:23'),
(250, '7536c05f8df688d1366bfdc48546d717', '127.0.0.1', '2013-08-12 05:46:29'),
(251, '5c001ff7609b5f5e9da147c988cc57fa', '127.0.0.1', '2013-08-12 07:49:36'),
(252, 'ddc44412f2ddc319d94714e02f106115', '127.0.0.1', '2013-08-12 08:19:43'),
(253, 'd4ee5fdcf8126f75fd37f633c2f9e5de', '127.0.0.1', '2013-08-12 09:38:44'),
(254, '874708265bc31f5f140b96b0fb375d26', '127.0.0.1', '2013-08-18 10:28:45'),
(255, 'f47bb9657683290591f12882399d82a3', '127.0.0.1', '2013-08-18 21:33:58'),
(256, '9fd485fa8de1958256f597ce48f4c80a', '127.0.0.1', '2013-08-18 21:59:04'),
(257, '47f19f00041c4043c4f4823614c6c75f', '127.0.0.1', '2013-08-19 00:07:40'),
(258, 'd8fc57080f2282b4d945c747379ddd43', '127.0.0.1', '2013-08-19 01:23:23'),
(259, 'f0a172d16e29069ff3ae4d80ce66e116', '127.0.0.1', '2013-08-19 01:58:21'),
(260, 'aba077c35b58bb9d6eb8013f4faad6fc', '127.0.0.1', '2013-08-19 02:16:03'),
(261, '987d0b640050456e4d4f3baa662b6af2', '127.0.0.1', '2013-08-19 02:25:05'),
(262, '287f937670400883112e4eccebf2f4ee', '127.0.0.1', '2013-08-19 02:44:24'),
(263, 'ef62647413e17c2f4a26df76a3b675e7', '127.0.0.1', '2013-08-19 06:08:36'),
(264, 'acd845d46bed437d375371a60d090d4e', '127.0.0.1', '2013-08-19 06:37:22'),
(265, 'b8c8be400e3b6a19d281b67ff9400913', '127.0.0.1', '2013-08-19 07:04:15'),
(266, '5c890051e099ed31eb8e7aa0885712d3', '127.0.0.1', '2013-08-19 08:40:51'),
(267, '5bb4954fca948c40ab19e12d8ab2d3f1', '127.0.0.1', '2013-08-19 09:18:13'),
(268, '73ecb6048246278da274b08db73ff25f', '127.0.0.1', '2013-08-21 06:25:57'),
(269, '2cac5e03f803191ed8799cbe9f376842', '127.0.0.1', '2013-08-22 09:56:57'),
(270, '7b64551b3cb661c7f90ad957c6520ea2', '127.0.0.1', '2013-08-22 10:17:19'),
(271, '330106c1997452baa4cc3ad9531de10c', '127.0.0.1', '2013-08-23 06:41:15'),
(272, '9c0b504cab11f337180b7b947151bda6', '127.0.0.1', '2013-08-23 09:03:12'),
(273, 'a5b299e162202e79045dcae4552cbf54', '127.0.0.1', '2013-08-23 10:00:16'),
(274, '33a21f136a63f79f70656c60fac8216d', '127.0.0.1', '2013-08-24 07:49:11'),
(275, '5802dece11b3f1cb26bead03077fe73f', '127.0.0.1', '2013-08-24 08:16:06'),
(276, 'db2d2719ebf631c56564d809f56420d2', '127.0.0.1', '2013-08-24 08:18:23'),
(277, 'dd5fad2241e1ff56769f169ef369a612', '127.0.0.1', '2013-08-24 08:27:52'),
(278, 'a856c659f35f63328df0576ee9ac14cb', '127.0.0.1', '2013-08-24 08:39:08'),
(279, '1c4ce3decd563c2abd56cd725ae50410', '127.0.0.1', '2013-08-24 09:25:51'),
(280, 'ec7dfe4763118f281bed4fc543d17426', '127.0.0.1', '2013-08-24 09:46:37'),
(281, '84a6391e6ac2b27bb6c5c5fd438f098c', '127.0.0.1', '2013-08-24 10:16:59'),
(282, '37ddc8f76229fdba8b13fe1a65581d7d', '127.0.0.1', '2013-08-24 10:43:53'),
(283, '13678e027ea60fa7c9d226f3a69b5362', '127.0.0.1', '2013-08-25 04:44:59'),
(284, '9a550307ba4bf6b3d431e77e8844d8a1', '127.0.0.1', '2013-08-25 07:38:05'),
(285, '99cdbd755b4f8909f3dc9a48b0aee5d9', '127.0.0.1', '2013-08-25 08:37:39'),
(286, '1c09716db3e1a067214b5e2ebe8ca34a', '127.0.0.1', '2013-08-25 08:52:01'),
(287, '55a09d23cc240a32ddd7496525bdd7e6', '127.0.0.1', '2013-08-25 09:18:57'),
(288, '74864d96e8a56014aa0e79edf3dd426f', '127.0.0.1', '2013-08-25 11:12:05'),
(289, 'a4336b0ddc46338fb162ad7393e6f68a', '127.0.0.1', '2013-08-25 12:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sex` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `place_of_work` text COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `yahoo` text COLLATE utf8_unicode_ci NOT NULL,
  `skype` text COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `Role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `birthday`, `sex`, `address`, `country`, `place_of_work`, `tel`, `avatar`, `email`, `yahoo`, `skype`, `date`, `state`, `Role`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ĐÀO TIẾN TÚ', '01-28-1992', '1', '45 Tổ 5 Lương Yên ngõ 91', 'Hà Nội', 'Khoa CNTT - Viện Đại Học Mở Hà Nội - Chuyên ngành Tin học ứng dụng', '0168 809 2229', 'uploaded/avatar/1001356_393874784058298_1637897656_n.jpg', 'daotientu@gmail.com', '', '', '2013-06-05 13:10:36', 1, 1),
(10, 'daotientu', '629e19ac4e595c0936b84c2591a02403', 'ĐÀO TIẾN TÚ', '', '1', 'Lương Yên Street', 'Hà Nội', 'VĐHMHN', '0168 809 2229', 'uploaded/avatar/ảnh 4x6 (1).jpg', 'daotientu@gmail.com', 'daotientu2801', 'daotientu2801', '2013-07-10 15:40:44', 0, 1),
(11, '', 'd41d8cd98f00b204e9800998ecf8427e', 'Mr.Tú', '', '1', '', '', '', '0168 809 2229', '', 'daotientu@gmail.com', 'daotientu2801', 'daotientu2801', '07-21-2013 23:39', 1, 2),
(12, '', 'd41d8cd98f00b204e9800998ecf8427e', 'Mr.Hoàng ', '', '1', '', '', '', '0168 575 5522', '', 'huyhoangds1@gmail.com', 'kaka_1993_acmilan', 'kaka_1993_acmilan', '07-21-2013 23:46', 1, 2),
(34, '', '', 'ĐÀO TIẾN TÚ', '', '', 'test', 'Hà Nội', '', '0123 456 7890', '', 'daotientu@gmail.com', '', '', '2013-08-02 11:09:57', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `warranty`
--

CREATE TABLE IF NOT EXISTS `warranty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` text COLLATE utf8_unicode_ci NOT NULL,
  `product_name` text COLLATE utf8_unicode_ci NOT NULL,
  `serial` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `warranty_id` int(11) NOT NULL,
  `date_receipt` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `on_pay` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `warranty`
--

