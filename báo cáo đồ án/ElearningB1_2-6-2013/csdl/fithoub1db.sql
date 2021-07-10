-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 203.124.112.82
-- Generation Time: Aug 26, 2013 at 10:40 AM
-- Server version: 5.0.96
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fithoub1db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL auto_increment,
  `name` text collate utf8_unicode_ci NOT NULL,
  `ParentID` int(11) NOT NULL,
  `control` text collate utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=109 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` VALUES(8, 'Luyá»‡n Ä‘á»c biá»ƒn quáº£ng c&aacute;o, b&aacute;o hiá»‡u.', 11, 'readad', 1);
INSERT INTO `categories` VALUES(10, 'B&agrave;i 1', 9, '', 0);
INSERT INTO `categories` VALUES(11, 'Luyá»‡n kÄ© nÄƒng Ä‘á»c', 0, '', 0);
INSERT INTO `categories` VALUES(14, 'Äá»c - Kiá»ƒm tra Ä‘&aacute;p &aacute;n.', 11, 'readcor', 1);
INSERT INTO `categories` VALUES(17, 'B&agrave;i 1', 8, '', 1);
INSERT INTO `categories` VALUES(18, 'B&agrave;i 2', 8, '', 1);
INSERT INTO `categories` VALUES(19, 'B&agrave;i 3', 8, '', 1);
INSERT INTO `categories` VALUES(20, 'B&agrave;i 4', 8, '', 1);
INSERT INTO `categories` VALUES(21, 'Luyá»‡n kÄ© nÄƒng nghe', 0, '', 1);
INSERT INTO `categories` VALUES(22, 'Nghe - Äiá»n tá»« c&ograve;n thiáº¿u v&agrave;o chá»— trá»‘ng', 21, 'listenfill', 1);
INSERT INTO `categories` VALUES(23, 'B&agrave;i 1', 22, '', 1);
INSERT INTO `categories` VALUES(24, 'B&agrave;i 2', 22, '', 1);
INSERT INTO `categories` VALUES(25, 'B&agrave;i 3', 22, '', 1);
INSERT INTO `categories` VALUES(26, 'B&agrave;i 4', 22, '', 1);
INSERT INTO `categories` VALUES(27, 'Äá»c - Chá»n Ä‘&aacute;p &aacute;n Ä‘&uacute;ng', 11, 'readtest', 1);
INSERT INTO `categories` VALUES(28, 'B&agrave;i 1', 27, '', 1);
INSERT INTO `categories` VALUES(29, 'B&agrave;i 2', 27, '', 1);
INSERT INTO `categories` VALUES(30, 'B&agrave;i 3', 27, '', 1);
INSERT INTO `categories` VALUES(31, 'B&agrave;i 4', 27, '', 1);
INSERT INTO `categories` VALUES(32, 'Äá»c - Chá»n c&aacute;c bá»©c tranh tÆ°Æ¡ng á»©ng', 11, 'readdes', 1);
INSERT INTO `categories` VALUES(33, 'B&agrave;i 1', 32, '', 1);
INSERT INTO `categories` VALUES(34, 'B&agrave;i 2', 32, '', 1);
INSERT INTO `categories` VALUES(35, 'B&agrave;i 3', 32, '', 1);
INSERT INTO `categories` VALUES(36, 'B&agrave;i 4', 32, '', 1);
INSERT INTO `categories` VALUES(38, 'B&agrave;i 1', 37, '', 0);
INSERT INTO `categories` VALUES(39, 'B&agrave;i 2', 37, '', 0);
INSERT INTO `categories` VALUES(40, 'B&agrave;i 3', 37, '', 0);
INSERT INTO `categories` VALUES(41, 'B&agrave;i 4', 37, '', 0);
INSERT INTO `categories` VALUES(42, 'Äá»c - Tráº£ lá»i c&acirc;u há»i dÆ°á»›i dáº¡ng tráº¯c nghiá»‡m', 11, 'readanswer', 1);
INSERT INTO `categories` VALUES(43, 'B&agrave;i 1', 42, '', 1);
INSERT INTO `categories` VALUES(44, 'B&agrave;i 2', 42, '', 1);
INSERT INTO `categories` VALUES(45, 'B&agrave;i 3', 42, '', 1);
INSERT INTO `categories` VALUES(46, 'B&agrave;i 4', 42, '', 1);
INSERT INTO `categories` VALUES(47, 'Äá»c - Äiá»n tá»« c&ograve;n thiáº¿u v&agrave;o chá»— trá»‘ng', 11, 'readchoose', 1);
INSERT INTO `categories` VALUES(48, 'B&agrave;i 1', 47, '', 1);
INSERT INTO `categories` VALUES(49, 'B&agrave;i 2', 47, '', 1);
INSERT INTO `categories` VALUES(50, 'B&agrave;i 3', 47, '', 1);
INSERT INTO `categories` VALUES(51, 'B&agrave;i 4', 47, '', 1);
INSERT INTO `categories` VALUES(52, 'Luyá»‡n kÄ© nÄƒng viáº¿t', 0, '', 1);
INSERT INTO `categories` VALUES(53, 'Viáº¿t má»™t b&agrave;i viáº¿t ngáº¯n c&oacute; ná»™i dung li&ecirc;n quan Ä‘áº¿n Ä‘á»i sá»‘ng h&agrave;ng ng&agrave;y', 52, 'writearticle', 1);
INSERT INTO `categories` VALUES(54, 'B&agrave;i 1', 53, '', 1);
INSERT INTO `categories` VALUES(55, 'B&agrave;i 2', 53, '', 1);
INSERT INTO `categories` VALUES(56, 'B&agrave;i 3', 53, '', 1);
INSERT INTO `categories` VALUES(57, 'B&agrave;i 4', 53, '', 1);
INSERT INTO `categories` VALUES(58, 'Viáº¿t c&acirc;u tráº£ lá»i dá»±a tr&ecirc;n má»™t t&agrave;i liá»‡u gá»£i &yacute; cho sáºµn', 52, 'writeanswer', 1);
INSERT INTO `categories` VALUES(59, 'B&agrave;i 1', 58, '', 1);
INSERT INTO `categories` VALUES(60, 'B&agrave;i 2', 58, '', 1);
INSERT INTO `categories` VALUES(61, 'B&agrave;i 3', 58, '', 1);
INSERT INTO `categories` VALUES(62, 'B&agrave;i 4', 58, '', 1);
INSERT INTO `categories` VALUES(63, 'Luyá»‡n kÄ© nÄƒng n&oacute;i', 0, '', 1);
INSERT INTO `categories` VALUES(64, 'Ghi &acirc;m lá»i giá»›i thiá»‡u vá» tiá»ƒu sá»­ báº£n th&acirc;n', 63, 'speakintro', 1);
INSERT INTO `categories` VALUES(65, 'B&agrave;i 1', 64, '', 1);
INSERT INTO `categories` VALUES(66, 'Luyá»‡n n&oacute;i theo chá»§ Ä‘á» tr&igrave;nh Ä‘á»™ B1', 63, 'speaktopic', 1);
INSERT INTO `categories` VALUES(67, 'B&agrave;i 1', 66, '', 1);
INSERT INTO `categories` VALUES(68, 'B&agrave;i 2', 66, '', 1);
INSERT INTO `categories` VALUES(69, 'B&agrave;i 3', 66, '', 1);
INSERT INTO `categories` VALUES(71, 'B&agrave;i 4', 66, '', 1);
INSERT INTO `categories` VALUES(72, 'B&agrave;i 5', 66, '', 1);
INSERT INTO `categories` VALUES(73, 'B&agrave;i 6', 66, '', 1);
INSERT INTO `categories` VALUES(74, 'B&agrave;i 7', 66, '', 1);
INSERT INTO `categories` VALUES(75, 'KÄ© nÄƒng n&oacute;i chuyá»‡n trong giao tiáº¿p', 63, 'speaksentence', 1);
INSERT INTO `categories` VALUES(76, 'B&agrave;i 1', 75, '', 1);
INSERT INTO `categories` VALUES(77, 'B&agrave;i 2', 75, '', 1);
INSERT INTO `categories` VALUES(78, 'B&agrave;i 3', 75, '', 1);
INSERT INTO `categories` VALUES(79, 'B&agrave;i 4', 75, '', 1);
INSERT INTO `categories` VALUES(82, 'Nghe - Ä&aacute;nh dáº¥u v&agrave;o Ä‘á»“ váº­t / sá»± viá»‡c', 21, 'listendialog', 1);
INSERT INTO `categories` VALUES(83, 'B&agrave;i 1', 82, '', 1);
INSERT INTO `categories` VALUES(84, 'B&agrave;i 2', 82, '', 1);
INSERT INTO `categories` VALUES(85, 'B&agrave;i 3', 82, '', 1);
INSERT INTO `categories` VALUES(86, 'B&agrave;i 4', 82, '', 1);
INSERT INTO `categories` VALUES(87, 'B&agrave;i 1', 14, '', 1);
INSERT INTO `categories` VALUES(88, 'B&agrave;i 2', 14, '', 1);
INSERT INTO `categories` VALUES(89, 'B&agrave;i 3', 14, '', 1);
INSERT INTO `categories` VALUES(90, 'B&agrave;i 4', 14, '', 1);
INSERT INTO `categories` VALUES(91, 'Nghe - Chá»n c&acirc;u Ä&uacute;ng / Sai', 21, 'listencor', 1);
INSERT INTO `categories` VALUES(92, 'B&agrave;i 1', 91, '', 1);
INSERT INTO `categories` VALUES(93, 'B&agrave;i 2', 91, '', 1);
INSERT INTO `categories` VALUES(94, 'B&agrave;i 3', 91, '', 1);
INSERT INTO `categories` VALUES(95, 'B&agrave;i 4', 91, '', 1);
INSERT INTO `categories` VALUES(96, 'Nghe - Ä&aacute;nh dáº¥u v&agrave;o bá»©c tranh/h&igrave;nh áº£nh Ä‘&uacute;ng', 21, 'listenchoose', 1);
INSERT INTO `categories` VALUES(97, 'B&agrave;i 1', 96, '', 1);
INSERT INTO `categories` VALUES(98, 'B&agrave;i 2', 96, '', 1);
INSERT INTO `categories` VALUES(99, 'B&agrave;i 3', 96, '', 1);
INSERT INTO `categories` VALUES(100, 'B&agrave;i 4', 96, '', 1);
INSERT INTO `categories` VALUES(101, 'Viáº¿t láº¡i c&acirc;u giá»¯ nguy&ecirc;n &yacute;', 52, 'writeblank', 1);
INSERT INTO `categories` VALUES(102, 'B&agrave;i 1', 101, '', 1);
INSERT INTO `categories` VALUES(103, 'B&agrave;i 2', 101, '', 1);
INSERT INTO `categories` VALUES(104, 'B&agrave;i 3', 101, '', 1);
INSERT INTO `categories` VALUES(105, 'B&agrave;i 4', 101, '', 1);
INSERT INTO `categories` VALUES(106, 'B&agrave;i test', 0, 'test', 1);
INSERT INTO `categories` VALUES(107, 'B&agrave;i test 1', 106, '', 1);
INSERT INTO `categories` VALUES(108, 'B&agrave;i test 2', 106, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `lesson_name` text collate utf8_unicode_ci NOT NULL,
  `type_data` text collate utf8_unicode_ci NOT NULL,
  `content` text collate utf8_unicode_ci NOT NULL,
  `email` text collate utf8_unicode_ci NOT NULL,
  `file` text collate utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `userid` int(11) NOT NULL,
  `reply` text collate utf8_unicode_ci NOT NULL,
  `resid` int(11) NOT NULL,
  `respondent` text collate utf8_unicode_ci NOT NULL,
  `response_time` varchar(30) collate utf8_unicode_ci NOT NULL,
  `typeID` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` VALUES(11, 'BÃ i nÃ y hay', '17', 'Tráº¯c nghiá»‡m', 'BÃ i nÃ y hay', 'daotientu@gmail.com', 'uploaded/comment/Vi du ve trigger.doc', '2013-05-25 22:12:07', 7, 'Biáº¿t rá»“i', 7, 'ÄÃ€O TIáº¾N TÃš', '05-26-2013 12:10', 2, 1);
INSERT INTO `comments` VALUES(12, 'test láº§n 2', '8', 'GiÃ¡o trÃ¬nh', 'Bá» trá»‘ng', 'daotientu@gmail.com', 'CMSforE/uploaded/comment/Office Specialist.png', '2013-05-16 10:00:00', 7, '', 0, '', '', 1, 0);
INSERT INTO `comments` VALUES(13, 'tÃ i khoáº£n admin bá»‹ lá»—i khÃ´ng vÃ o Ä‘c báº¡n Æ¡i', '', '', 'LÃ m Æ¡n chá»‰nh láº¡i giÃ¹m', 'daotientu@gmail.com', '', '2013-05-14 10:00:00', 7, '', 0, '', '', 1, 0);
INSERT INTO `comments` VALUES(14, 'sao chÆ°a gÃ¬ Ä‘Ã£ báº¯t náº¡p tÃ i khoáº£n rá»“i váº­y :V', '0', '', 'sao chÆ°a gÃ¬ Ä‘Ã£ báº¯t náº¡p tÃ i khoáº£n rá»“i váº­y :V', '123456778@gmail.com', '', '2013-08-15 15:20:46', 38, '', 0, '', '', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `key_writeblank`
--

CREATE TABLE `key_writeblank` (
  `id` int(11) NOT NULL auto_increment,
  `writeblaid` int(11) NOT NULL,
  `keyblank` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Dumping data for table `key_writeblank`
--

INSERT INTO `key_writeblank` VALUES(4, 15, 'were cheaper');
INSERT INTO `key_writeblank` VALUES(5, 15, 'less expensive');
INSERT INTO `key_writeblank` VALUES(6, 16, 'difficult to ');
INSERT INTO `key_writeblank` VALUES(7, 16, 'impossible to ');
INSERT INTO `key_writeblank` VALUES(8, 16, 'hard to ');
INSERT INTO `key_writeblank` VALUES(9, 16, 'a problem to');
INSERT INTO `key_writeblank` VALUES(10, 17, 'about going');
INSERT INTO `key_writeblank` VALUES(11, 18, 'can use a ');
INSERT INTO `key_writeblank` VALUES(12, 18, 'can pay by');
INSERT INTO `key_writeblank` VALUES(13, 19, 'is not allowed ');
INSERT INTO `key_writeblank` VALUES(14, 19, 'permitted');
INSERT INTO `key_writeblank` VALUES(15, 19, 'is forbidden');
INSERT INTO `key_writeblank` VALUES(16, 20, 'saw');
INSERT INTO `key_writeblank` VALUES(17, 20, 'had seen');
INSERT INTO `key_writeblank` VALUES(18, 21, 'has');
INSERT INTO `key_writeblank` VALUES(19, 21, 'has got');
INSERT INTO `key_writeblank` VALUES(20, 22, 'as');
INSERT INTO `key_writeblank` VALUES(21, 22, 'so difficult');
INSERT INTO `key_writeblank` VALUES(22, 22, 'hard');
INSERT INTO `key_writeblank` VALUES(23, 23, 'called');
INSERT INTO `key_writeblank` VALUES(25, 24, 'gives');
INSERT INTO `key_writeblank` VALUES(26, 25, 'have not');
INSERT INTO `key_writeblank` VALUES(27, 25, 'haven''t');
INSERT INTO `key_writeblank` VALUES(28, 25, '''ve not');
INSERT INTO `key_writeblank` VALUES(29, 26, 'far from');
INSERT INTO `key_writeblank` VALUES(30, 27, 'unless');
INSERT INTO `key_writeblank` VALUES(31, 27, 'except if');
INSERT INTO `key_writeblank` VALUES(32, 27, 'until');
INSERT INTO `key_writeblank` VALUES(33, 27, 'till');
INSERT INTO `key_writeblank` VALUES(34, 27, 'before');
INSERT INTO `key_writeblank` VALUES(35, 28, 'don''t you');
INSERT INTO `key_writeblank` VALUES(36, 28, 'not');
INSERT INTO `key_writeblank` VALUES(37, 29, 'too');

-- --------------------------------------------------------

--
-- Table structure for table `lessons_listenchoose`
--

CREATE TABLE `lessons_listenchoose` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `audio` text collate utf8_unicode_ci NOT NULL,
  `translate` text collate utf8_unicode_ci NOT NULL,
  `ques1` text collate utf8_unicode_ci NOT NULL,
  `pic1` text collate utf8_unicode_ci NOT NULL,
  `pic2` text collate utf8_unicode_ci NOT NULL,
  `pic3` text collate utf8_unicode_ci NOT NULL,
  `ques2` text collate utf8_unicode_ci NOT NULL,
  `pic4` text collate utf8_unicode_ci NOT NULL,
  `pic5` text collate utf8_unicode_ci NOT NULL,
  `pic6` text collate utf8_unicode_ci NOT NULL,
  `ques3` text collate utf8_unicode_ci NOT NULL,
  `pic7` text collate utf8_unicode_ci NOT NULL,
  `pic8` text collate utf8_unicode_ci NOT NULL,
  `pic9` text collate utf8_unicode_ci NOT NULL,
  `ques4` text collate utf8_unicode_ci NOT NULL,
  `pic10` text collate utf8_unicode_ci NOT NULL,
  `pic11` text collate utf8_unicode_ci NOT NULL,
  `pic12` text collate utf8_unicode_ci NOT NULL,
  `ques5` text collate utf8_unicode_ci NOT NULL,
  `pic13` text collate utf8_unicode_ci NOT NULL,
  `pic14` text collate utf8_unicode_ci NOT NULL,
  `pic15` text collate utf8_unicode_ci NOT NULL,
  `ques6` text collate utf8_unicode_ci NOT NULL,
  `pic16` text collate utf8_unicode_ci NOT NULL,
  `pic17` text collate utf8_unicode_ci NOT NULL,
  `pic18` text collate utf8_unicode_ci NOT NULL,
  `ques7` text collate utf8_unicode_ci NOT NULL,
  `pic19` text collate utf8_unicode_ci NOT NULL,
  `pic20` text collate utf8_unicode_ci NOT NULL,
  `pic21` text collate utf8_unicode_ci NOT NULL,
  `res1` text collate utf8_unicode_ci NOT NULL,
  `res2` text collate utf8_unicode_ci NOT NULL,
  `res3` text collate utf8_unicode_ci NOT NULL,
  `res4` text collate utf8_unicode_ci NOT NULL,
  `res5` text collate utf8_unicode_ci NOT NULL,
  `res6` text collate utf8_unicode_ci NOT NULL,
  `res7` text collate utf8_unicode_ci NOT NULL,
  `reference` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `lessons_listenchoose`
--

INSERT INTO `lessons_listenchoose` VALUES(26, 'C&acirc;u 1', 'uploaded/lessons_listenchoose/audio/01 Test 1 Part 1.ogg', 'One. What was in the woman&rsquo;s bag?<br />\r\nMan:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Was there anything valuable in the bag that was stolen, Madam?<br />\r\nWoman: Yes. It had my purse in it and my keys.<br />\r\nMan:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Anything else?<br />\r\nWoman: Well, luckily I was wearing my glasses, so no, nothing else.<br />\r\n<br />\r\nTwo. Which film is the man talking about?<br />\r\nMan:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I&rsquo;m sure I&rsquo;ve seen this film before. That bit where she&rsquo;s standing on the bridge watching the sunset reminded me.<br />\r\n<br />\r\nThree. What should the woman do first?<br />\r\nWoman 1:&nbsp; Well, you put the washing powder in the machine.<br />\r\nWoman 2:&nbsp; Is that before or after you put the clothes in?<br />\r\nWoman 1:&nbsp; Oh, it&rsquo;s after you put them in, and then remember to switch it on at the wall when you&rsquo;re ready.<br />\r\n<br />\r\nFour. What is David going to do this weekend?<br />\r\nMan:&nbsp; Could you help me paint my flat this weekend,&nbsp; David?<br />\r\nDavid: Oh, sorry, I&rsquo;m going sailing. I decided to enjoy myself for a change. I spent last weekend helping my mum do her garden and I need to repair the car next weekend.<br />\r\n<br />\r\nFive. How did the man get to work today?<br />\r\nMan: Sorry I&rsquo;m late. I never know whether to take the underground or drive. I was held up in a traffic jam for half an hour, and then when I got to work the car park was full! I think I&rsquo;ll have to move nearer so I can walk or use my bike.<br />\r\n<br />\r\nSix. Which tie does the man choose?<br />\r\nMan:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Which tie shall I wear for the interview? D&rsquo;you think my blue silk one would look all right?<br />\r\nWoman:&nbsp; A bit boring! I&rsquo;d wear something with a small pattern &mdash; squares or spots, something like that.<br />\r\nMan:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Oh, I don&rsquo;t know. I think I&rsquo;ll wear the plain one.<br />\r\n<br />\r\nSeven. What time is the appointment?<br />\r\nWoman: Dr Brown&rsquo;s Clinic. Can I help you?<br />\r\nMan:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yes. Can I have an appointment to see the doctor, please?<br />\r\nWoman: Well, he&rsquo;s free at quarter past eleven today or tomorrow at quarter past ten or five to two.<br />\r\nMan:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I&rsquo;ll come tomorrow afternoon. Thank you.', '<strong>1)</strong> What was in the woman&rsquo;s bag?', 'uploaded/lessons_listenchoose/picture/pic1.jpg', 'uploaded/lessons_listenchoose/picture/pic2.jpg', 'uploaded/lessons_listenchoose/picture/pic3.jpg', '<strong>2)</strong> Which film is the man talking about?', 'uploaded/lessons_listenchoose/picture/pic4.jpg', 'uploaded/lessons_listenchoose/picture/pic5.jpg', 'uploaded/lessons_listenchoose/picture/pic6.jpg', '<strong>3)</strong> What should the woman do first?', 'uploaded/lessons_listenchoose/picture/pic7.jpg', 'uploaded/lessons_listenchoose/picture/pic8.jpg', 'uploaded/lessons_listenchoose/picture/pic9.jpg', '<strong>4)</strong> What is David going to do this weekend?', 'uploaded/lessons_listenchoose/picture/pic10.jpg', 'uploaded/lessons_listenchoose/picture/pic11.jpg', 'uploaded/lessons_listenchoose/picture/pic12.jpg', '<strong>5)</strong> How did the man get to work today?', 'uploaded/lessons_listenchoose/picture/pic13.jpg', 'uploaded/lessons_listenchoose/picture/pic14.jpg', 'uploaded/lessons_listenchoose/picture/pic15.jpg', '<strong>6)</strong> Which tie does the man choose?', 'uploaded/lessons_listenchoose/picture/pic16.jpg', 'uploaded/lessons_listenchoose/picture/pic17.jpg', 'uploaded/lessons_listenchoose/picture/pic18.jpg', '<strong>7)</strong>&nbsp;What time is the appointment?', 'uploaded/lessons_listenchoose/picture/pic19.jpg', 'uploaded/lessons_listenchoose/picture/pic20.jpg', 'uploaded/lessons_listenchoose/picture/pic21.jpg', 'B', 'B', 'C', 'B', 'A', 'C', 'C', 'SÃ¡ch PET 3 - Ebook', '05-14-2013 21:14', 7, 97, 1);
INSERT INTO `lessons_listenchoose` VALUES(27, 'C&acirc;u 2', 'uploaded/lessons_listenchoose/audio/Test.1_part.1.mp3', '<em>One. Where will the friends meet?</em><br />\r\nGirl:&nbsp; Hi, it&rsquo;s Maria. Got your message. Yeah, &nbsp;l&#39;d like to go to the movies. There&rsquo;s a film called Lightworld &nbsp;Two, or a comedy &mdash; I don&rsquo;t mind which &nbsp;. &nbsp;. . Shall we meet outside the cinema?<br />\r\nBoy: Or, I know, at the coffee bar on the corner, we could have a snack before we go in. We<br />\r\ncould meet at the bus stop.<br />\r\nGirl:&nbsp; Mum&#39;s driving me into town this afternoon, to buy some trainers, so I won&rsquo;t &nbsp;have to get the bus. But something to eat first is a good idea. Shall we say six o&rsquo;clock?<br />\r\nBoy: OK.<br />\r\n<br />\r\n<em>Two.&nbsp; What has the girl forgotten &nbsp;to bring?</em><br />\r\nBoy:&nbsp; Drink up your coffee &mdash; we&#39;ll be late for class. What are you looking for now? Don&#39;t tell me you&#39;ve left your essay at home. You said you were working on it till midnight.<br />\r\nGirl:&nbsp;&nbsp; Don&#39;t worry, it was the first thing &nbsp;I put in my bag &mdash; look, here it is. I won&rsquo;t &nbsp;be a second<br />\r\n. just checking everything. &nbsp;Pen . &nbsp;. . now where did I . &nbsp;. .? Oh dear, you&rsquo;ll be able to lend me one, won&#39;t you? Keys? &mdash; oh, here they are, in my pocket as usual<br />\r\n<br />\r\n<em>Three. Which TV programme &nbsp;is on at nine o&rsquo;clock tonight?</em><br />\r\nWoman:&nbsp; &nbsp;Because of the ski jumping finals we&rsquo;re &nbsp;late finishing, &nbsp;so there are some changes to this evening&rsquo;s programmes. We won&#39;t now show the Nature Programme, about the dolphins found near the Florida coast, at nine o&rsquo;clock. Instead, Tim Wong&rsquo;s &nbsp;Chinese<br />\r\n/Cifchen will be at this time, an hour later than advertised. &nbsp;You can see the Nature Programme at its usual time next week.<br />\r\n<br />\r\n<em>Four. How &nbsp;will the man book tickets for the show?</em><br />\r\nWoman:&nbsp; Shall we go to the Boat Show? &nbsp;It&rsquo;s on for three weeks &mdash; but you need to book if you want to go on the first night because there&rsquo;s a party.<br />\r\nMan:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Really? Let&#39;s go. How do you book?<br />\r\nWoman: &nbsp;On the Internet or by phone .&nbsp; &nbsp;. or there&rsquo;s a form to fill in, in this week&rsquo;s TV magazine<br />\r\nwith a discount on each ticket.<br />\r\nMan:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I like saving money, but the post&#39;s always so slow. I prefer to talk to someone when I&rsquo;m making a booking &mdash; just &nbsp;leave it to me.<br />\r\n<br />\r\n<em>Five. &nbsp;What will the man do this winter?</em><br />\r\nWoman:&nbsp; &nbsp;Will you go on working as a gardener when winter comes, Jim? You&rsquo;ll get very cold<br />\r\nand wet working outside.<br />\r\nMan:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Well, last winter &nbsp;I took a job &nbsp;in a supermarket. &nbsp;They&rsquo;re advertising for staff &nbsp;again at the moment, but I prefer being in the fresh air &mdash; even when the weather&#39;s &nbsp;bad. I&rsquo;d really like to get a job abroad in the sun, but all the ones I&#39;ve seen need building skills, which I haven&#39;t got. So I&rsquo;ll just &nbsp;stay in my present job for the time being.', '<strong>1)</strong> Where will the friends meet?', 'uploaded/lessons_listenchoose/picture/pic22.jpg', 'uploaded/lessons_listenchoose/picture/pic23.jpg', 'uploaded/lessons_listenchoose/picture/pic24.jpg', '<strong>2) </strong>What has the girl forgotten to bring?', 'uploaded/lessons_listenchoose/picture/pic25.jpg', 'uploaded/lessons_listenchoose/picture/pic26.jpg', 'uploaded/lessons_listenchoose/picture/pic27.jpg', '<strong>3) </strong>Which TV programme is on at 9 o&#39;clock tonight?', 'uploaded/lessons_listenchoose/picture/pic28.jpg', 'uploaded/lessons_listenchoose/picture/pic29.jpg', 'uploaded/lessons_listenchoose/picture/pic30.jpg', '<strong>4)</strong> How will the man book tickets for the show?', 'uploaded/lessons_listenchoose/picture/pic31.jpg', 'uploaded/lessons_listenchoose/picture/pic32.jpg', 'uploaded/lessons_listenchoose/picture/pic33.jpg', '<strong>5)</strong> What will the man do this winter?', 'uploaded/lessons_listenchoose/picture/pic34.jpg', 'uploaded/lessons_listenchoose/picture/pic35.jpg', 'uploaded/lessons_listenchoose/picture/pic36.jpg', '<strong>6)</strong> How does the man want the woman to help him?', 'uploaded/lessons_listenchoose/picture/pic37.jpg', 'uploaded/lessons_listenchoose/picture/pic38.jpg', 'uploaded/lessons_listenchoose/picture/pic39.jpg', '', 'uploaded/lessons_listenchoose/picture/', 'uploaded/lessons_listenchoose/picture/', 'uploaded/lessons_listenchoose/picture/', 'A', 'A', 'C', 'B', 'A', 'B', '', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-28-2013 05:11', 7, 107, 1);
INSERT INTO `lessons_listenchoose` VALUES(28, 'C&acirc;u 1 - B&agrave;i test 2', 'uploaded/lessons_listenchoose/audio/Test.2_part.1.mp3', '<em>One. Where are the dictionaries?</em><br />\r\nMan:&nbsp; As this is your first visit to the library, I&rsquo;ll show you round. As you can see, shelves are clearly labelled according to subject. Most books you may take home with you but some, such as foreign language dictionaries, must stay in the library. These can be found over there behind the computers and it&#39;s best if you take them to the desks by the window &nbsp;and study them there. Or you can use these armchairs &nbsp;if you prefer to sit somewhere &nbsp;more comfortable.<br />\r\n<br />\r\n<em>Two. Which evening dress does the woman decide to wear?</em><br />\r\nMan: &nbsp; &nbsp; &nbsp;Why are you taking so long to decide what to wear tomorrow &nbsp;night? The black dress<br />\r\nwith the long sleeves will be fine!<br />\r\nWoman: Mmm . &nbsp;. . Long sleeves are a bit uncomfortable, &nbsp;but yes, it&#39;s a nice dress. Trouble &nbsp;is, I&#39;ve lent my short-sleeved &nbsp;dress to Angela. That would be perfect, it&rsquo;s a long dress with a wide belt . &nbsp;. . Anyway, let&#39;s see what &nbsp;I&rsquo;ve got here . &nbsp;. &nbsp;. this one, also black, short- sleeved &mdash; but it&rsquo;s got white flowers on the sleeves.<br />\r\nMan: &nbsp; &nbsp; &nbsp;Why don&rsquo;t you phone Angela and get your dress back?<br />\r\nWoman: Yes, &nbsp;I think &nbsp;I will.<br />\r\n<br />\r\n<em>Three. What is the man&rsquo;s job &nbsp;now?</em><br />\r\nMan:&nbsp; When I was young, &nbsp;I used to paint. I always dreamed of &nbsp;being an artist, painting pictures for a living. But I didn&#39;t do very well at school and so I left early to join &nbsp;my dad working &nbsp;in the family &nbsp;photography &nbsp;business. After a few years of that &nbsp;I got bored, and felt I wanted to go back and study. That&rsquo;s when &nbsp;I did my degree and teacher training, and I&rsquo;ve taught photography ever since, although &nbsp;I still paint in my spare time.<br />\r\n<br />\r\n<em>Four. &nbsp;Which calendar will the boy buy?</em><br />\r\nBoy: Mum asked me to buy her a calendar. Shall I get this one with pictures of &nbsp;mountains, or this one with boats on it?<br />\r\nGirl: &nbsp;She loves sailing, so get that one. I like that one with wild animals, but I don&rsquo;t suppose<br />\r\nMum would. And you can&rsquo;t get the one with mountains because she had that last year.<br />\r\nBoy:&nbsp;Yes, &nbsp;I know. I&rsquo;ll get the one you suggested then.<br />\r\n<br />\r\n<em>Five. &nbsp;What time will the writer arrive at the bookshop?</em><br />\r\nMan:&nbsp; All fans of &nbsp;Peter Robbins should go to the South Street book store tomorrow&nbsp; afternoon, where Peter will sign copies of his book Love of Life and answer questions.<br />\r\nHe is expected at a quarter past two and promises to stay until half past three, when he has to leave for another appointment. Get there as soon as you can because, if it&rsquo;s<br />\r\nanything like Peter&rsquo;s last visit, queues will start to form at quarter to two or even earlier.<br />\r\nDon&#39;t miss this opportunity to meet everyone&rsquo;s favourite writer.<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;', '<strong>1.</strong>&nbsp;Where are the dictionaries?', 'uploaded/lessons_listenchoose/picture/1.jpg', 'uploaded/lessons_listenchoose/picture/2.jpg', 'uploaded/lessons_listenchoose/picture/3.jpg', '<strong>2.</strong> Which evening dress does the woman decide to wear?', 'uploaded/lessons_listenchoose/picture/4.jpg', 'uploaded/lessons_listenchoose/picture/5.jpg', 'uploaded/lessons_listenchoose/picture/6.jpg', '<strong>3.</strong> What is the man&#39;s job now?', 'uploaded/lessons_listenchoose/picture/7.jpg', 'uploaded/lessons_listenchoose/picture/8.jpg', 'uploaded/lessons_listenchoose/picture/9.jpg', '<strong>4.</strong> Which calendar will the boy buy?', 'uploaded/lessons_listenchoose/picture/10.jpg', 'uploaded/lessons_listenchoose/picture/11.jpg', 'uploaded/lessons_listenchoose/picture/12.jpg', '<strong>5.</strong> What time will the writer arrive at the bookshop?', 'uploaded/lessons_listenchoose/picture/13.jpg', 'uploaded/lessons_listenchoose/picture/14.jpg', 'uploaded/lessons_listenchoose/picture/15.jpg', '', 'uploaded/lessons_listenchoose/picture/', 'uploaded/lessons_listenchoose/picture/', 'uploaded/lessons_listenchoose/picture/', '', 'uploaded/lessons_listenchoose/picture/', 'uploaded/lessons_listenchoose/picture/', 'uploaded/lessons_listenchoose/picture/', 'B', 'A', 'B', 'C', 'B', '', '', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test6', '06-15-2013 16:36', 7, 108, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_listencor`
--

CREATE TABLE `lessons_listencor` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `audio` text collate utf8_unicode_ci NOT NULL,
  `sentences` text collate utf8_unicode_ci NOT NULL,
  `translate` text collate utf8_unicode_ci NOT NULL,
  `cor1` text collate utf8_unicode_ci NOT NULL,
  `cor2` text collate utf8_unicode_ci NOT NULL,
  `cor3` text collate utf8_unicode_ci NOT NULL,
  `cor4` text collate utf8_unicode_ci NOT NULL,
  `cor5` text collate utf8_unicode_ci NOT NULL,
  `cor6` text collate utf8_unicode_ci NOT NULL,
  `reference` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lessons_listencor`
--

INSERT INTO `lessons_listencor` VALUES(3, 'You will hear a conversation between a girl, Jane, and her brother, Michael, about a Spanish family who are coming to visit them in England.', 'uploaded/lessons_listencorrect/04 Test 1 Part 4.ogg', '<strong>1) </strong>This will be the Sanchez family&#39;s first trip to England.<br />\r\n<strong>2) </strong>Michael suggests sightseeing in London.<br />\r\n<strong>3)</strong> The Sanchez children are teenagers.<br />\r\n<strong>4)</strong> Jane has been to the car museum.<br />\r\n<strong>5)</strong> Michael thinks everyone enjoys visiting museums.<br />\r\n<strong>6)</strong> Jane and Michael have bought tickets for the tennis competition.', '<strong>Jane:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Michael, you know that Spanish family Mum and Dad met in Spain last year?<br />\r\n<strong>Michael:</strong> &nbsp;Yeah, the Sanchez family.<br />\r\n<strong>Jane:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; That&rsquo;s right. Anyway, they&rsquo;re coming to stay next month. They haven&rsquo;t been to England before, so Mum wants us to help plan a really good week for them. Can we give her some suggestions?<br />\r\n<strong>Michael:</strong> &nbsp; Well, they <u>must</u> spend a day in London seeing the famous places like Buckingham Palace and the Tower of London. Perhaps they could go on one of those open top buses and see everything from there.<br />\r\n<strong>Jane:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; That&rsquo;s a great idea. Do you think the children will like that?<br />\r\n<strong>Michael:</strong>&nbsp; &nbsp;How old are they?<br />\r\n<strong>Jane:&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; One&rsquo;s 12 and the other&rsquo;s nine.<br />\r\n<strong>Michael:</strong>&nbsp; &nbsp;That should be okay then. What about a trip to the car museum at Beaulieu on another day?<br />\r\n<strong>Jane:&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Oh no, I found that car museum so boring. I don&rsquo;t think any of them would like that.<br />\r\n<strong>Michael:</strong>&nbsp; &nbsp;Well, I think most people find museums boring, but it&rsquo;s what people do when they visit another country, isn&rsquo;t it?<br />\r\n<strong>Jane:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Not necessarily. They might want to do more outdoor activities or perhaps go to some shows or plays or something.<br />\r\n<strong>Michael:</strong> &nbsp; I know, there&rsquo;s a big open air pop and jazz festival in Southampton. Do you think they&rsquo;d like that?<br />\r\n<strong>Jane:&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; That sounds better. What about taking the kids windsurfing as well? I think they might enjoy that, don&rsquo;t you?<br />\r\n<strong>Michael:</strong> &nbsp; Fine. And what about tennis? Do you think we could still get tickets for the Open Tennis competition in Bournemouth? There are some famous players there this year.<br />\r\n<strong>Jane:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I&rsquo;m sure we could, but I wonder if the family like tennis.<br />\r\n<strong>Michael:</strong>&nbsp; &nbsp;I don&rsquo;t know ... so let&rsquo;s just write a list of all the things they could do, then get Mum to phone Mrs Sanchez tonight. The family can talk it over and then phone back if we need to book anything.<br />\r\n<strong>Jane:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Brilliant! Let&#39;s start the list.', 'A', 'A', 'B', 'A', 'B', 'B', 'SÃ¡ch PET 3 - Ebook', '05-12-2013 16:49', 4, 92, 1);
INSERT INTO `lessons_listencor` VALUES(4, 'You will hear a conversation between a boy, Marcus, and a girl, Catherine, about their homework', 'uploaded/lessons_listencorrect/Test.1_part.4.wma', '<strong>1)</strong> Catherine finds it hard to understand why Marcus has so much homework<br />\r\n<strong>2)</strong> Marcus agrees that he could change his weekend activities<br />\r\n<strong>3) </strong>Catherine offers to show Marcus the maths homework she has already done<br />\r\n<strong>4)</strong> Marcus worries that his teacher might be angry if Catherine helps him<br />\r\n<strong>5)</strong> After talking to Catherine, Marcus feels more confident about his homework', 'Marcus: &nbsp;&nbsp; I feel awful. I&rsquo;ve got two lots of homework to do today, and all I want to do after school is relax. It&#39;s not fair.<br />\r\nCatherine: Of course you&rsquo;ve got a lot. You didn&rsquo;t do any yesterday, did you?<br />\r\nMarcus:&nbsp;&nbsp;&nbsp; No, I didn&#39;t. I had football practice, and after that I was just too tired for anything else.<br />\r\nCatherine: Well, maybe you could do more homework at the weekends, so you have time for football and other things during the week.<br />\r\nMarcus:&nbsp;&nbsp;&nbsp; But at the weekend &nbsp;I often go out with my family. On Sunday we went to the Science Museum. It was great. &nbsp;I wouldn&#39;t want to miss doing things like that just &nbsp;because I&rsquo;ve got homework!<br />\r\nCatherine: Actually, you&rsquo;re quite lucky. I never do anything like that. Homework isn&#39;t everything I&#39;m sure you learnt just &nbsp;as much there.<br />\r\nMarcus:&nbsp;&nbsp;&nbsp; Yes, but I don&#39;t suppose the teachers will be interested in that . . . I&#39;ve got today&rsquo;s maths to do, and I expect it&#39;ll take me hours.<br />\r\nCatherine:&nbsp; I tell you what &nbsp;. . &nbsp;. you can come round to my house this afternoon and we&rsquo;ll work on it together.<br />\r\nMarcus:&nbsp;&nbsp; &nbsp; I don&rsquo;t know . . &nbsp;. You&#39;re really good at maths. You&rsquo;ll just finish it quickly and I can&#39;t do<br />\r\nthat.<br />\r\nCatherine:&nbsp; It&#39;s not a competition, &nbsp;is it? It&#39;s more important that we both finish it, and working<br />\r\ntogether&rsquo;ll be much more fun.<br />\r\nMarcus:&nbsp;&nbsp;&nbsp; But if &nbsp;I don&#39;t do it by myself, &nbsp;I could be in trouble &nbsp;with the teacher.<br />\r\nCatherine: Well, we&#39;ll tell her you&rsquo;re finding &nbsp;it difficult and so I&rsquo;m going to try and help you understand it. I&rsquo;m sure she won&rsquo;t mind that.<br />\r\nMarcus:&nbsp;&nbsp;&nbsp; Alright then, thank you. &nbsp;Perhaps I&rsquo;ll feel better about maths if you help me. At the<br />\r\nmoment, I still don&rsquo;t know where to begin.<br />\r\nCatherine: Don&#39;t worry, we&rsquo;ll get there.', 'B', 'A', 'A', 'B', 'A', 'B', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 15:18', 7, 107, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_listendialog`
--

CREATE TABLE `lessons_listendialog` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `audio` text collate utf8_unicode_ci NOT NULL,
  `content_question` text collate utf8_unicode_ci NOT NULL,
  `translate` text collate utf8_unicode_ci NOT NULL,
  `cor1` text collate utf8_unicode_ci NOT NULL,
  `cor2` text collate utf8_unicode_ci NOT NULL,
  `cor3` text collate utf8_unicode_ci NOT NULL,
  `cor4` text collate utf8_unicode_ci NOT NULL,
  `cor5` text collate utf8_unicode_ci NOT NULL,
  `cor6` text collate utf8_unicode_ci NOT NULL,
  `reference` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `lessons_listendialog`
--

INSERT INTO `lessons_listendialog` VALUES(5, 'You will hear an announcement about what&#39;s on television tomorrow.', 'uploaded/lessons_listendialog/02 Test 1 Part 2.ogg', '<strong>1) </strong><em>The Railway Princess</em> is on television from<br />\r\n<strong>A</strong> 9.00 to 10.00<br />\r\n<strong>B </strong>9.00 to 10.30<br />\r\n<strong>C </strong>9.30 to 11.00<br />\r\n<br />\r\n<strong>2)</strong> There is a music programme for teenagers<br />\r\n<strong>A </strong>early in the morning<br />\r\n<strong>B </strong>before lunch<br />\r\n<strong>C </strong>at lunchtime<br />\r\n<br />\r\n<strong>3)</strong> You can see a football match between<br />\r\n<strong>A</strong> Ireland and Spain<br />\r\n<strong>B </strong>Brazil and Ireland<br />\r\n<strong>C </strong>Spain and Italy<br />\r\n<br />\r\n<strong>4) </strong>If the weather is bad, there will be no<br />\r\n<strong>A </strong>cycling<br />\r\n<strong>B </strong>skiing<br />\r\n<strong>C </strong>tennis<br />\r\n<br />\r\n<strong>5) </strong>In the quiz programme, teams have to guess<br />\r\n<strong>A </strong>the year<br />\r\n<strong>B </strong>the person<br />\r\n<strong>C </strong>the place<br />\r\n<br />\r\n<strong>6)</strong> What kind of film is <em>I Could Live Forever?</em><br />\r\n<strong>A </strong>a comedy<br />\r\n<strong>B </strong>a musical<br />\r\n<strong>C </strong>a thriller', 'Man: And that&rsquo;s the weather forecast. And now we know what the weather&rsquo;s going to be like, let&rsquo;s have a look at what we&rsquo;ve got for you tomorrow on TV31.<br />\r\nMost of the morning is taken up with children&rsquo;s television. As it&rsquo;s Saturday, we&rsquo;ve got programmes for children from the under fives to teenagers. We start<br />\r\nthe day at 7.00 with cartoons and programmes for the very young. These go on<br />\r\nuntil 9.00 when we have a film specially made for television called&nbsp; The Railway Princess. It was first shown about six months ago and we&rsquo;ve had lots of requests to show it again. The film is based on Jenny Johnson&rsquo;s best-selling children&rsquo;s book. Then from 10.30 until 12.00, we continue with a magazine programme for 5- to 12-year-olds. There&rsquo;s something for everyone &mdash; animals, art, sport, the countryside. At lunchtime, from 12.00 till 2.00, we have something for teenagers<br />\r\n&mdash; Here and No&raquo;&#39;&mdash; our music programme with all the latest groups and singers, and the results of last week&rsquo;s competition.<br />\r\nAfter lunch there&rsquo;s half an hour of news and that&rsquo;s followed at 2.30 by sport. This afternoon you can watch the match between Brazil and Ireland. The winner of that match will go on to play Italy or Spain in the final next week.<br />\r\nFootball is followed at 4 o&rsquo;clock by tennis. We&rsquo;ll be watching part of the Macmillan Tennis Tournament.&nbsp; If the tennis is cancelled because of rain we&rsquo;ll be going over early to Japan to see some of the skiing. Let&rsquo;s hope Angus Burns has recovered from yesterday&rsquo;s fall. At 5 o&rsquo;clock we&rsquo;ll be bringing you the end of the Round Britain Cycle Race.<br />\r\nAt 6 o&rsquo;clock it&rsquo;s time for our new quiz programme&nbsp; Your guess is as good as in/ne with Nigel Parsons. Each team is shown pictures of people who were in the news in one particular year, or important things that happened in that year. The teams guess when that<br />\r\nwas.<br />\r\nThat&rsquo;s followed by more news and at 7.00 it&rsquo;s time for our Saturday evening film I Could Live Forever, a sad story with a happy ending. You&rsquo;ll recognise the songs, now well known, made famous by the film and sung by Julia Jones. And of course there&rsquo;s some<br />\r\nwonderful dancing.<br />\r\nOur evening carries on with plenty of entertainment for all the family. At nine o&rsquo;clock there&rsquo;s a chance to see ..', 'B', 'C', 'B', 'C', 'A', 'B', 'SÃ¡ch PET 3 - Ebook', '05-05-2013 13:36', 6, 83, 1);
INSERT INTO `lessons_listendialog` VALUES(18, 'You will hear a news reporter called Angela Bond, talking on the radio about her job', 'uploaded/lessons_listendialog/Test.1_part.2.wma', '<strong>1)</strong> Where is Angela working at the moment?<br />\r\n<strong>A </strong>Britian<br />\r\n<strong>B </strong>the USA<br />\r\n<strong>C </strong>Asia<br />\r\n<br />\r\n<strong>2)</strong> Angela likes her job because she<br />\r\n<strong>A </strong>loves being in dangerous situations<br />\r\n<strong>B</strong> never knows where she&#39;ll go next<br />\r\n<strong>C </strong>enjoys watching important events happen<br />\r\n<br />\r\n<strong>3)</strong> What did Angela bring home from Hong Kong?<br />\r\n<strong>A</strong> pictures<br />\r\n<strong>B</strong> carpets<br />\r\n<strong>C</strong> furniture<br />\r\n<br />\r\n<strong>4)</strong> What time does Angela&#39;s working day begin?<br />\r\n<strong>A </strong>8.30 am<br />\r\n<strong>B </strong>6.30 pm<br />\r\n<strong>C </strong>10.00 am<br />\r\n<br />\r\n<strong>5)</strong> Where did Angela meet her boyfriend?<br />\r\n<strong>A </strong>at her sister&#39;s house<br />\r\n<strong>B </strong>at university<br />\r\n<strong>C </strong>in Hong Kong<br />\r\n<br />\r\n<strong>6)</strong> What does Angela do to relax?<br />\r\n<strong>A</strong> She cooks a meal<br />\r\n<strong>B </strong>She goes sailing<br />\r\n<strong>C </strong>She goes shopping', 'Interviewer:&nbsp; And today &nbsp;in the studio we have a familiar face on television, Angela &nbsp;Bond, the<br />\r\nnews reporter. Angela, your job &nbsp;has taken you all over the world, hasn&rsquo;t it?<br />\r\nAngela:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yes. &nbsp;I&#39;ve reported from a number of countries in Asia and I&#39;ve just &nbsp;returned from the United States. &nbsp;I must say, it&rsquo;s good to be able to unpack &nbsp;my suitcase &nbsp;now that the job &nbsp;has brought me to Britain for at least six months.<br />\r\nInterviewer:&nbsp; Is the travelling what you enjoy about the job?<br />\r\nAngela:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; It&#39;s certainly interesting, but it can be annoying never knowing where &nbsp;I&#39;m going to be next week! &nbsp;For me, the really exciting thing is being somewhere &nbsp;when a big news story is taking place and seeing it develop. Sometimes that can be quite dangerous, &nbsp;but all jobs &nbsp;have their disadvantages! &nbsp;And travelling gives me the chance to collect souvenirs.<br />\r\nInterviewer:&nbsp; What &nbsp;kind of things?<br />\r\nAngela:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mostly things for my flat. &nbsp;I&#39;m mad about anything Chinese and so when &nbsp;I was in Hong Kong, I got a really nice table and some chairs &mdash; and in Turkey &nbsp;I spend a lot of &nbsp;money on carpets. Then &nbsp;I&#39;ve got pictures and other bits of art from Thailand<br />\r\nand India. The flat&rsquo;s getting a bit crowded!<br />\r\nInterviewer:&nbsp; It sounds colourful! &nbsp;Do you have a regular working day?<br />\r\nAngela:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Not really. At the moment &nbsp;I&#39;m one of the team that reads the evening news, so sometimes &nbsp;I&rsquo;m on at six thirty, and sometimes at ten o&#39;clock. But that&rsquo;s at the end of the day. It all starts in the morning at eight thirty when &nbsp;I phone the office to see what has happened and what they want me to go and report on.<br />\r\nInterviewer:&nbsp; So you don&rsquo;t have much time for a social life?<br />\r\nAngela:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; It&#39;s better now I&#39;m in London and can see my boyfriend more often. My sister introduced us. He came round for dinner when I was staying with her a year ago. We have a lot in common. He&rsquo;s a lawyer and I studied law at university. Also we&rsquo;ve found that we lived in Hong Kong at the same time, although we never met.<br />\r\nInterviewer:&nbsp; What &nbsp;do you &nbsp;like to do in your free &nbsp;time?<br />\r\nAngela:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Weli, cooking is something new I&#39;m tfying because I can&#39;t do it when &nbsp;I&rsquo;m travelling. But I&rsquo;m not very good at it yet so I find it a bit stressful. One of the best things &nbsp;I&#39;ve bought recently was a boat and when &nbsp;I want to feel calm and peaceful I go for a sail on the river. It never fails!<br />\r\nInterviewer:&nbsp; Angela &mdash; thanks.', 'A', 'C', 'C', 'A', 'A', 'B', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 19:10', 7, 107, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_listenfill`
--

CREATE TABLE `lessons_listenfill` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `audio` text collate utf8_unicode_ci NOT NULL,
  `text` text collate utf8_unicode_ci NOT NULL,
  `translate` text collate utf8_unicode_ci NOT NULL,
  `blank1` text collate utf8_unicode_ci NOT NULL,
  `blank2` text collate utf8_unicode_ci NOT NULL,
  `blank3` text collate utf8_unicode_ci NOT NULL,
  `blank4` text collate utf8_unicode_ci NOT NULL,
  `blank5` text collate utf8_unicode_ci NOT NULL,
  `blank6` text collate utf8_unicode_ci NOT NULL,
  `blank7` text collate utf8_unicode_ci NOT NULL,
  `blank8` text collate utf8_unicode_ci NOT NULL,
  `blank9` text collate utf8_unicode_ci NOT NULL,
  `blank10` text collate utf8_unicode_ci NOT NULL,
  `note` text collate utf8_unicode_ci NOT NULL,
  `reference` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `lessons_listenfill`
--

INSERT INTO `lessons_listenfill` VALUES(25, '- You will hear a radio announcer talking about Plymouth Sea Life Centre', 'uploaded/lessons_listenfill/03 Test 1 Part 3.ogg', '<u><strong>Plymouth Sea Life Centre</strong></u><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _._COST_._<br />\r\nAdult<strong>(1)</strong>&pound;.........., children<strong> </strong>&pound;2.00. Special prices for over sixties and school groups.<br />\r\n&nbsp; _._OPENING TIMES_._<br />\r\nEvery day except 25 and 26 December<br />\r\n_._FOR CHILDREN_._<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Special quiz<br />\r\nAnimals are fed every<strong>(2)</strong>.........from 9.30 am.<br />\r\nSlide and<strong>(3)</strong>........... shows from 10.00 am.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _._GROUPS_._<br />\r\nGuided tours available - ask at the<strong>(4)</strong>..............<br />\r\n_._NEW ATTRACTION_._<br />\r\nWalk through the big<strong>(5)</strong>.................made of glass.<br />\r\n&nbsp;_._REFRESHMENTS_._<br />\r\nFamily ares sells<strong>(6)</strong>.................,cold drinks, ice creams.<br />\r\n<em>FOR MORE INFORMATION TELEPHONE 01743 564219.</em>', 'Man:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ... and finally Mary James has been visiting the new Sea Life Centre at Plymouth. What can you tell us about it, Mary?<br />\r\nWoman:&nbsp; Well, it&rsquo;s an extremely exciting place. There are so many things to see and everything is enjoyable as well as educational.&nbsp; It costs &pound;3.70 for adults, &pound;2 for children and less for over sixties and school groups.&nbsp; It&rsquo;s open every day of the year except the 25th and 26th of December.<br />\r\nSpecial attractions for children include a quiz and hourly feeding times for all the different animals and fish, starting at 9.30. You can see everything here from the most enormous of sea creatures to the smallest.<br />\r\nEvery morning from&nbsp; 10.00 there are slide and video shows for children in the sea life theatre, and someone is always there to answer questions about what you&rsquo;ve seen. If you are in a group of six or more people, they can give you a special guided tour of the centre. But you need to arrange this at the information desk when you arrive.<br />\r\nThe latest attraction at the centre is a big glass tunnel you can walk through; all around you, you will see enormous fish swimming &mdash; sometimes even over your head. You certainly have the clearest possible view of the world beneath the waves. Children love it and it&rsquo;s really amazing for adults too!<br />\r\nWhen you get hungry, there is a relaxed family dining area serving snacks, cold drinks and ice creams. Near the main entrance there is an excellent bookshop and there&rsquo;s also a souvenir shop selling all kinds of things connected with the sea.<br />\r\nI warmly&nbsp; recommend this visit; for more information phone 01743 564219.<br />\r\n<br />\r\n&nbsp;', '3.7', 'hour', 'video', 'information desk', 'tunnel', 'snack', '', '', '', '', '1) &pound;3.70<br />\r\n2) hour/hourly<br />\r\n3) video(s)<br />\r\n4) information desk<br />\r\n5) tunnel<br />\r\n6) snack(s)', 'SÃ¡ch PET 3 - book', '05-05-2013 06:08', 0, 23, 1);
INSERT INTO `lessons_listenfill` VALUES(26, '- You will hear five messages left on an answerphone', 'uploaded/lessons_listenfill/07 Test 2 Part 3.ogg', '<span style="font-family:comic sans ms,cursive;">These messages were on the answerphone.</span><br />\r\n<br />\r\n<span style="font-family:comic sans ms,cursive;"><strong>Sarah Smith</strong> rang to say she left her <strong>(14)</strong>................behind yesterday.<br />\r\n<strong>Alex</strong> arrives about 6.00 tomorrow evening. Please collect him from station when he rings. Has lots of <strong>(15)...........!<br />\r\nHelen </strong>phoned to invite you to have <strong>(16)..................</strong>on Saturday.</span><br />\r\n<span style="font-family:comic sans ms,cursive;">Has friends visiting from <strong>(17)........................</strong></span><br />\r\n<span style="font-family:comic sans ms,cursive;"><strong>Helen</strong> phoned to invite you to have <strong>(16)</strong>...............on Saturday.<br />\r\nHas friends visiting from <strong>(17)</strong>.................</span><br />\r\n<span style="font-family:comic sans ms,cursive;"><strong>Premier Travel</strong> say holiday tickets have arrived.<br />\r\nChange of departure time from 7.30 am to <strong>(18)</strong>...................am.<br />\r\nThis mean 7.30 check-in!</span><br />\r\n<span style="font-family:comic sans ms,cursive;"><strong>Mary</strong> called. Problem at Australian <strong>(19)</strong>...................Call at once. She&#39;s at home after 7.00.</span>', 'Woman:&nbsp; ... Hello Ann ... it&rsquo;s Sarah Smith. I think I left my glasses in your house yesterday. I had my bag with me but they&rsquo;re not in there. Can you have a look and see if you can find them? I&#39;ll be in all day if you want to call back.<br />\r\nMan:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ... Hi Mum, it&rsquo;s Alex. I should be arriving about 6 o&rsquo;clock tomorrow evening. Could you come and get me from the station? I&rsquo;ve got lots of luggage, it&rsquo;ll fill the car! I&rsquo;ll give you a call when the train gets in. Thanks&nbsp; ... see you tomorrow.<br />\r\nWoman:&nbsp; ... Morning Ann, it&rsquo;s Helen here. I was wondering if you could come to lunch this Saturday? About&nbsp; 12 o&rsquo;clock. If you can&rsquo;t manage Saturday, Sunday would be fine. I&rsquo;d like you to meet some American friends who are visiting. Look forward to hearing from you.<br />\r\nMan:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mrs Jackson, this is Premier Travel.&nbsp; I&rsquo;m just calling to tell you that your holiday tickets have arrived and you can come and get them any time. There&rsquo;s one small change in flight time, but it simply means that your flight out to Spain leaves at 9.30 am rather than 7.30. I thought you&rsquo;d probably be pleased! It means checking in at 7.30 instead of 5.30, so you won&rsquo;t be quite so exhausted when you arrive. Call if you have any queries. Bye.<br />\r\nWoman:&nbsp; Hello Ann, sorry to trouble you on your day off, but it&rsquo;s Mary at the office.<br />\r\nThere&rsquo;s a real problem at the new Australian office and the manager needs to speak to you urgently. Can you ring me whenever you get in &mdash; call me at home if it&rsquo;s after 7.00. Thanks a lot.<br />\r\n<br />\r\n<br />\r\n&nbsp;', 'glasses', 'luggage', 'lunch', 'America', '9.3', 'office', '', '', '', '', '', 'SÃ¡ch PET 3 - Ebook', '05-04-2013 15:26', 6, 24, 1);
INSERT INTO `lessons_listenfill` VALUES(27, 'You will hear a radio programme about some historic places to visit', 'uploaded/lessons_listenfill/Test.1_part.3.mp3', '<span style="font-size:18px;"><strong>HISTORIC PLACES TO VISIT</strong></span><br />\r\n<span style="font-family:times new roman,times,serif;"><span style="font-size: 14px;"><strong>Black Rock Caves</strong></span></span><br />\r\n<span style="font-family:times new roman,times,serif;">- Over 2 million years old<br />\r\n- For half a million years, people and animals, especially <strong>(14)</strong> ..............., lived here<br />\r\n- Special evening tours during the month of <strong>(15)</strong> .................</span><br />\r\n<span style="font-size:14px;"><span style="font-family: times new roman,times,serif;"><strong>Salter House</strong></span></span><br />\r\n<span style="font-family:times new roman,times,serif;">- Built in the year <strong>(16)</strong> .................<br />\r\n- Made famous by the television series called <em>Aunt Dorothy</em><br />\r\n- All visitors want to see Dorothy&#39;s <strong>(17)</strong> ..................</span><br />\r\n<strong><span style="font-size:14px;"><span style="font-family: times new roman,times,serif;">The Old Port</span></span></strong><br />\r\n- Have a ride on an old tram to the <strong>(18) </strong>............... village<br />\r\n- In the factory, find out how people used to make <strong>(19)</strong> ..................', 'Man: &nbsp;Are you interested in history? Well, I&#39;d like to tell you about some of the historic places open to visitors in this part of the country.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Let&rsquo;s start with the oldest first. B/acf&lsaquo; Rock Caves have been here for over two million years. And, for half a million years, they were &nbsp;home to people and various animals, particularly tigers. You can explore these ancient homes and imagine what &nbsp;life was like for the people who lived there. The caves are open daily from April to October. A special attraction on evenings in August &nbsp;is a walk &nbsp;by candlelight. &nbsp;Don&#39;t take this tour &nbsp;if you are<br />\r\nafraid of the dark!<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Next I recommend a visit to Salter House. This was built by Sir Joshua Salter and dates back to seventeen sixty-five. The Salter family are still living there today. The house became famous &nbsp;in nineteen eighty-two when the television &nbsp;series Aunt &nbsp;Dorof/&rsaquo;y was filmed there. The furniture &nbsp;and paintings are well worth seeing, but the attraction &nbsp;nobody wants to miss is the kitchen. This is where Aunt &nbsp;Dorothy cooked her enormous &nbsp;meals and gave advice to anyone who passed through this part of the house.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; And don&rsquo;t forget to visit &nbsp;The Old Port. You will need several hours to see everything there, especially if you take a trip along the riverside in an old tram as far as the fishing village. The guides there all wear traditional costume and you too get the chance to try on clothes from a hundred years ago. You can buy gifts in the old village stores and eat delicious snacks in the<br />\r\nTea Shop. If you visit the village factory, you can see how sweets were made a hundred years ago, and taste them, too.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; So, you see there&#39;s plenty of.', 'tigers', 'August', '1765', 'kitchen', 'fishing', 'candies', '', '', '', '', '1) T/tiger(s)<br />\r\n2) A/aug(ust) (evenings)<br />\r\n3) 1765<br />\r\n4) K/kitchen(s)<br />\r\n5) (old) F/fishing<br />\r\n6) S/sweet(s)(es)(ies) C/candy(s)/C/candies', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 16:05', 7, 107, 1);
INSERT INTO `lessons_listenfill` VALUES(28, '-&nbsp;You will hear a woman talking on the radio about a singing course she attended.', 'uploaded/lessons_listenfill/Test.2_part.3.mp3', '<span style="font-size:18px;"><strong>Singing for Beginners</strong></span><br />\r\n&nbsp;\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:577px;" width="577">\r\n	<colgroup>\r\n		<col />\r\n		<col />\r\n	</colgroup>\r\n	<tbody>\r\n		<tr height="31">\r\n			<td colspan="2" height="31" style="height:31px;width:577px;"><strong>Place:</strong>&nbsp; Browastoke Oollegs</td>\r\n		</tr>\r\n		<tr height="364">\r\n			<td height="364" style="height:364px;width:5px;">&nbsp;</td>\r\n			<td style="width:572px;"><strong>Course details:</strong><br />\r\n			&nbsp;\r\n			<div style="margin-left:.61in;">&bull;Lena Phipps, a very good former <strong>(1)</strong> ...... singer iS the tutor</div>\r\n			&nbsp;\r\n\r\n			<div style="margin-left:.6in;">&bull;the maximum number of students per course in <strong>(2)</strong> .......</div>\r\n			&nbsp;\r\n\r\n			<div style="margin-left:.61in;">&bull;all classes start with exercises that hup students to <strong>(3)</strong> .......</div>\r\n			&nbsp;\r\n\r\n			<div style="margin-left:.61in;">&bull;students learn to sing <strong>(4) </strong>......., modern ard pop sorgs</div>\r\n			&nbsp;\r\n\r\n			<div style="margin-left:.61in;">&bull;accommodation is in single or twin rooms</div>\r\n\r\n			<div>&bull;</div>\r\n\r\n			<div style="margin-left:.62in;">&bull;cooked breakfast, lunch and dinaer are included</div>\r\n			&nbsp;\r\n\r\n			<div style="margin-left:.61in;">&bull;there&rsquo;s a very good lunch, especially <strong>(5)</strong> .........</div>\r\n			<br />\r\n			<strong>Date the next course starls:</strong> <strong>(6)</strong> ........, 24th September</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'Interviewer:&nbsp;<br />\r\nI&rsquo;ve just &nbsp;come back from a short music course called Singing for Beginners. It was<br />\r\nat Brownstoke College, which &nbsp;is just to the north of London.<br />\r\nA woman called Lena Phipps runs these three-day courses for people with no previous experience of singing. Lena used to be an opera singer, but no longer appears on the stage. Nowadays she occasionally &nbsp;sings in jazz clubs, but spends most of &nbsp;her time teaching. She was excellent!<br />\r\nThere were only nine of us on the course I attended, five men and four women,<br />\r\nand Lena never takes more than ten students on a course. This means that everyone &nbsp;has lots of attention and plenty of opportunity to sing.<br />\r\nWe were all very &nbsp;nervous at the beginning, but every class begins with some exercises to help students &nbsp;relax. These are followed by warm-up &nbsp;exercises to<br />\r\nimprove the quality of the voice.<br />\r\nDuring the three days, students learn around twenty songs in a variety &nbsp;of different styles, depending on the interests of the class members. There are classical and modern songs, &nbsp;including pop songs. By the last day, everyone was confident enough to perform their favourite song on their own!<br />\r\nI would really recommend this course. Brownstoke College is an old building<br />\r\nsurrounded &nbsp;by a beautiful garden. Accommodation &nbsp;is very comfortable &mdash; the single and twin rooms are clean and warm, and three meals a day are included in the cost; a cooked breakfast, lunch and an evening meal. The lunch is very good,<br />\r\nand the salads can be recommended.<br />\r\nCourses begin on the last Tuesday &nbsp;of the month, so the next one begins on the 24&#39;&ordm; of September &nbsp;and continues &nbsp;until Thursday the 26&#39;&ordm; of September. &nbsp;I would advise you to reserve a place early, because it&rsquo;s certain to be very popular!<br />\r\n&nbsp;', 'opera', '10', 'relax', 'classic', 'salad', 'Tuesday', '', '', '', '', '1. O/opera(s)<br />\r\n2. T/ten (students)/10<br />\r\n3. (to) R/relax<br />\r\n4. C/classic (at) (s) (songs)<br />\r\n5. (the) S/salad (s) (bar)<br />\r\n6. T/Tuesday/tues', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test6', '06-15-2013 15:59', 7, 108, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_readad`
--

CREATE TABLE `lessons_readad` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `content_ad` text collate utf8_unicode_ci NOT NULL,
  `content_answer` text collate utf8_unicode_ci NOT NULL,
  `correct_answer` text collate utf8_unicode_ci NOT NULL,
  `reference` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `lessons_readad`
--

INSERT INTO `lessons_readad` VALUES(4, 'CÃ¢u há»i thá»© 1', '<strong>&nbsp; NO BICYCLES<br />\r\nAGAINST GLASS<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PLEASE</strong>', '<strong>A</strong>. Do not leave your bicycle touching the widow.<br />\r\n<strong>B</strong>. Broken glass may damage your bicycle tyres.<br />\r\n<strong>C</strong>. Your bicycle may not be safe here.', 'A', 'PET 3 - book', '', 0, 17, 0);
INSERT INTO `lessons_readad` VALUES(5, 'CÃ¢u há»i thá»© 2', '<em>This is a letter.<br />\r\nWhat a fantasic city. We found the restaurant you recommended but it was shut! Menu looks good value, so we&#39;ll definitely go before we leave.<br />\r\nElena and Tim</em>', '<strong>A</strong>. Elena and Tim have discovered another good restaurant.<br />\r\n<strong>B</strong>. Elena and Tim think the restaurant&#39;s prices are reasonable.<br />\r\n<strong>C</strong>. Elena and Tim will have to try the restaurant on their next visit.', 'B', 'PET 3 - book', '', 0, 17, 0);
INSERT INTO `lessons_readad` VALUES(6, 'CÃ¢u há»i thá»© 3', 'CITY BUSES<br />\r\nPlease have ready the exact fare for your journey', '<strong>A</strong>. All City Bus journeys cost exactly the same<br />\r\n<strong>B</strong>. You need to have the correct money when you board the bus<br />\r\n<strong>C</strong>. You must keep your ticket ready for checking', 'B', 'SÃ¡ch PET 3 - Ebook', '', 0, 17, 0);
INSERT INTO `lessons_readad` VALUES(7, 'CÃ¢u há»i thá»© 4', 'Frank, Rabbit Records phoned. The CD you ordered arrived today, but someone sold it. They&#39;re really sorry! They&#39;re reordered - available next Monday at the latest.<br />\r\nJan', 'Why did the record shop phone ?<br />\r\n<strong>A</strong>. to appologise for a mistake with Frank&#39;s order<br />\r\n<strong>B</strong>. to suggest Frank comes in later this week<br />\r\n<strong>C</strong>. to say that Frank&#39;s CD is ready for collection', 'A', 'SÃ¡ch PET 3 - Ebook', '', 0, 17, 0);
INSERT INTO `lessons_readad` VALUES(8, 'CÃ¢u há»i thá»© 5', '<span style="font-family:comic sans ms,cursive;"><u>The Pizza Place</u><br />\r\nBetween 12 and 2 pm, minimum charge &pound;3 per person</span>', '<strong>A</strong> .You can buy a meal for only &pound;3 at lunchtime<br />\r\n<strong>B</strong>. A charge of &pound;3 is added to each bill at lunchtime<br />\r\n<strong>C</strong>. Each customer will have to pay at least &pound;3 at lunchtime', 'C', 'SÃ¡ch PET 3 - Ebook', '', 0, 17, 0);
INSERT INTO `lessons_readad` VALUES(9, 'CÃ¢u há»i thá»© 6', '<strong>To</strong>: Dr Hatton&#39;s students<br />\r\n<strong>From</strong>: College secretary<br />\r\nDr Hatton would like to remind you all that Thursday&#39;s lecture is to take place in the library (this week only). Start time unchanged.', '<strong>A</strong>. Students should check when this Thursday&#39;s lecture begins<br />\r\n<strong>B</strong>. Dr Hatton had forgotten to announce the change on Thursday<br />\r\n<strong>C</strong>. The location of Thursday&#39;s lecture will be different from usual', 'C', 'SÃ¡ch PET 3 - Ebook', '', 0, 17, 0);
INSERT INTO `lessons_readad` VALUES(10, 'CÃ¢u há»i thá»© 7', '<u><strong>NOTICES</strong></u><br />\r\nTo order your class photograph, sign below, &pound;<br />\r\n8.50 each, 20% discount on three or more copies (payment to office immediatetly, please).', '<strong>A</strong>. There will be a class photo if enough people sign here<br />\r\n<strong>B</strong>. Your photo will cost less if you pay the office in advance<br />\r\n<strong>C</strong>. The price per photo is reduced if several are ordered at once', 'C', 'SÃ¡ch PET 3 - Ebook', '', 0, 18, 0);
INSERT INTO `lessons_readad` VALUES(11, 'CÃ¢u há»i thá»© 8', '<strong>Company Security</strong><br />\r\n<span style="font-family:trebuchet ms,helvetica,sans-serif;"><em>Office staff must have their identity cards with them at all times</em>.</span>', '<strong>A</strong>. The company insists office workers carry an identity card<br />\r\n<strong>B</strong>. Show your identity card when asked to do so<br />\r\n<strong>C</strong>. Staff identity cards are available at the office', 'A', 'SÃ¡ch PET 3 - Ebook', '', 0, 18, 0);
INSERT INTO `lessons_readad` VALUES(12, 'CÃ¢u há»i thá»© 9', 'NO DIVING ALLOWED EXCEPT AT THE DEEP END OF THE SWIMMING POOL', '<strong>A</strong>. The company insists office workers carry an identity card<br />\r\n<strong>B</strong>. Show your identity card when asked to do so<br />\r\n<strong>C</strong>. Staff identity cards are available at the office', 'B', 'SÃ¡ch PET 3 - Ebook', '', 0, 18, 0);
INSERT INTO `lessons_readad` VALUES(13, 'CÃ¢u há»i thá»© 10', '<span style="font-family:lucida sans unicode,lucida grande,sans-serif;">Gareth</span><br />\r\n<span style="font-family:comic sans ms,cursive;">The printer&#39;s not working properly - I&#39;ve put in more ink, but that hasn&#39;t helped. Can you fix it? I must print out my essay tonight</span>!<br />\r\n<span style="font-family:lucida sans unicode,lucida grande,sans-serif;">Jasmine</span>', '<strong>Jasmine wants Gareth to</strong><br />\r\n<strong>A</strong>. repair the printer for her<br />\r\n<strong>B</strong>. help her finish an essay<br />\r\n<strong>C</strong>. bring her some proper ink', 'A', 'SÃ¡ch PET 3 - Ebook', '', 0, 18, 0);
INSERT INTO `lessons_readad` VALUES(14, 'CÃ¢u há»i thá»© 11', '<strong>Patients with appointments ring once and enter. Those with enquiries ring twice and enter.</strong>', '<strong>A</strong>. To make an appointment, ring once and enter.<br />\r\n<strong>B</strong>. You should ring twice and enter unless you have an enquiry<br />\r\n<strong>C</strong>. Ring once if you have an appointment and twice if you don&#39;t', 'C', 'SÃ¡ch PET 3 - Ebook', '', 0, 18, 0);
INSERT INTO `lessons_readad` VALUES(15, 'CÃ¢u thá»© 12', 'Lisa!<br />\r\nYvonne can&#39;t go to the concert tonight. Let me know as soon as possible if you&#39;d like her ticket. If not, I&#39;ll offer it to Marie.<br />\r\nSally', '<strong>Who should Lisa contact if she wants to go to the concert?</strong><br />\r\n<strong>A</strong> Yvonne<br />\r\n<strong>B</strong> Marie<br />\r\n<strong>C</strong> Sally', 'C', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 06:45', 7, 107, 1);
INSERT INTO `lessons_readad` VALUES(16, 'CÃ¢u thá»© 13', '<span style="font-size:18px;">Parking Form</span><br />\r\nComplete and place in lower left-hand corner of windscreen<br />\r\nCar registration.....................<br />\r\nDate....................................', '<strong>A</strong> Register your car here by filling on this form<br />\r\n<strong>B </strong>Put this form in your car windscreen after filling it in.<br />\r\n<strong>C </strong>Place the completed form at the top of your car windscreen', 'B', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 06:59', 7, 107, 1);
INSERT INTO `lessons_readad` VALUES(17, 'CÃ¢u thá»© 14', '<strong><span style="font-family:tahoma,geneva,sans-serif;"><u>NOTICES</u></span><br />\r\nBoat Trip to Woodley Place</strong><br />\r\nDue to high water levels, this trip will now take place by coach at no extra cost. The pick-up time from the hotel remains unchanged', '<strong>What has changed about the trip to Woodley Place?</strong><br />\r\n<strong>A </strong>the transport<br />\r\n<strong>B </strong>the price<br />\r\n<strong>C </strong>the departure time', 'A', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 07:13', 7, 107, 1);
INSERT INTO `lessons_readad` VALUES(18, 'CÃ¢u thá»© 15', '<span style="font-family:comic sans ms,cursive;">Mum,<br />\r\nCould you pick up my skirt from the dry cleaner&#39;s when you collect your jacket? I&#39;ll pay you back this evening<br />\r\nThanks<br />\r\nSonja</span>', '<strong>What will Sonja&#39;s mother do?</strong><br />\r\n<strong>A </strong>receive money for the dry cleaning from Sonja tonight<br />\r\n<strong>B </strong>fetch Sonja&#39;s jacket from the dry cleaner&#39;s for her<br />\r\n<strong>C </strong>deliver her own clothes to the dry cleaner&#39;s', 'A', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 07:20', 7, 107, 1);
INSERT INTO `lessons_readad` VALUES(19, 'CÃ¢u thá»© 16', '<span style="font-size:18px;"><strong>Allow at least two hours for your visit to the castle</strong></span>', '<strong>A </strong>Each tour of the castle lasts less than two hours<br />\r\n<strong>B </strong>Two hours is the minimum time recommended for a visit to the castle<br />\r\n<strong>C </strong>Visitors are only allowed to spend two hours inside the castle', 'B', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 07:29', 7, 107, 1);
INSERT INTO `lessons_readad` VALUES(20, 'CÃ¢u 1 - BÃ i test 2', '<strong>WATCH REPAIRS</strong><br />\r\n<br />\r\nWarning to Customers<br />\r\n<br />\r\nAll uncollected items will be sold after twelve months.', '<strong>A </strong>This shop will sell customers&#39; watches within twelve months.<br />\r\n<strong>B </strong>This shop will keep customers&#39; watches for up to twelve months.<br />\r\n<strong>C </strong>This shop will look after customers&#39; watches for more than twelve months.', 'B', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test6', '06-15-2013 13:27', 7, 108, 1);
INSERT INTO `lessons_readad` VALUES(21, 'CÃ¢u 2 - BÃ i test 2', '<span style="font-family:comic sans ms,cursive;">Philippe,<br />\r\n<br />\r\nCouldn&#39;t wait any longer, didn&#39;t want to miss the start of the match! Problem at work? Here&#39;s your ticket - see you at the stadium.<br />\r\n<br />\r\nStefano</span>', '<strong>A </strong>Philippe and Stefano missed each other at the stadium.<br />\r\n<strong>B </strong>Stefano had to leave without Philippe to get to work<br />\r\n<strong>C</strong> Stefano has given up waiting for Philippe to arrive.', 'C', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test6', '06-15-2013 13:46', 7, 108, 1);
INSERT INTO `lessons_readad` VALUES(22, 'CÃ¢u 3 - BÃ i test 2', '<span style="font-size:14px;"><span style="font-family:times new roman,times,serif;"><strong>PARENTS:<br />\r\n<br />\r\nComplete and return your child&#39;s form for next month&#39;s school trip by Friday</strong></span></span><br />\r\n<br />\r\n&nbsp;', '<strong>A </strong>Parents must return forms this week if their child going on Friday&#39;s trip.<br />\r\n<strong>B </strong>Parents cannot go on next month&#39;s trip unless they return their forms by Friday.<br />\r\n<strong>C </strong>The last day for returning completed forms for the trip is Friday.', 'C', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test6', '06-15-2013 13:58', 7, 108, 1);
INSERT INTO `lessons_readad` VALUES(24, 'CÃ¢u 4 - BÃ i test 2', '<strong>From:</strong> Gabi<br />\r\n<strong>To:</strong> &nbsp; &nbsp; Jo<br />\r\n<br />\r\nI&#39;ll be in town on business on Wednesday, so could we meet for dinner then, instead of on Thursday as usual?<br />\r\n&nbsp;', '<strong>Gabi wants Jo to<br />\r\nA&nbsp;</strong>change an arrangement.<br />\r\n<strong>B </strong>cancel a regular event.<br />\r\n<strong>C </strong>come to a business meeting.<br />\r\n<br />\r\n&nbsp;', 'A', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test6', '06-15-2013 14:04', 7, 108, 1);
INSERT INTO `lessons_readad` VALUES(25, 'CÃ¢u 5 - BÃ i test 2', 'Lift service starts at ground floor today. For basement please use the stairs.', '<strong>A </strong>It is not possible to use the lift above the ground floor today.<br />\r\n<strong>B </strong>The lift will not be going to the basement today.<br />\r\n<strong>C </strong>The stairs between the basement and the ground floor are closed today.', 'B', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test6', '06-15-2013 14:12', 7, 108, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_readanswer`
--

CREATE TABLE `lessons_readanswer` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `text` text collate utf8_unicode_ci NOT NULL,
  `content_question` text collate utf8_unicode_ci NOT NULL,
  `answer1` text collate utf8_unicode_ci NOT NULL,
  `answer2` text collate utf8_unicode_ci NOT NULL,
  `answer3` text collate utf8_unicode_ci NOT NULL,
  `answer4` text collate utf8_unicode_ci NOT NULL,
  `answer5` text collate utf8_unicode_ci NOT NULL,
  `reference` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lessons_readanswer`
--

INSERT INTO `lessons_readanswer` VALUES(4, 'CÃ¢u 1', '&quot;The best age to start learning the violin is between three and six, &#39;says Margaret Porter, a violinist and music teacher. &#39;It&#39;s the time when you are learning about the world. &#39;Margaret, who lives in London, prefers to take pupils at three and four, although she has made lots of exceptions for keen five-year-olds. When she started teaching the violin in 1972, her first class consisted of her children&#39;s five-year-old school friends.<br />\r\n<br />\r\nMargaret&#39;s pupils have group lessons. Each group has about a dozen pupils and each lesson lasts an hour, once a fortnight. In addition, each pupil has one individual lesson a week with her. Parents also have to attend the classes. It is important that the parents take an active interest in the lessons.<br />\r\n<br />\r\nFrom the earliest lessons pupils learn to play by car. They do not even try to read music until they have been playing for serveral years, and for a long time there is a big difference between their playing and reading of music. Margaret says that her method is not supposed to produce great violinists, and always suggests that pupils who perform particularly well should leave and study the violin using more traditional methods.', '<strong>1</strong>. What is the writter trying to do in the text?<br />\r\n<strong>A</strong>. explain why Margaret likes teaching the violin<br />\r\n<strong>B</strong>. describe a different way of elearning the violin<br />\r\n<strong>C</strong>. give advice on how to find a music teacher<br />\r\n<strong>D</strong>. explain why Margaret has a lot of pupils<br />\r\n<br />\r\n<strong>2</strong>. Why should someone read the text?<br />\r\n<strong>A</strong>. to discover how Margaret learnt the violin<br />\r\n<strong>B</strong>. to learn why it is important to read music<br />\r\n<strong>C</strong>. to find out about Margaret&#39;s teaching method<br />\r\n<strong>D</strong>. to learn why children should pay the violin<br />\r\n<br />\r\n<strong>3</strong>. What opinion does Margaret have about her best pupils?<br />\r\n<strong>A</strong>. They ought to find another teacher<br />\r\n<strong>B</strong>. They will become great violinists using her method<br />\r\n<strong>C</strong>. They could try harder<br />\r\n<strong>D</strong>. They take several years to learn to read music<br />\r\n<br />\r\n<strong>4</strong>. Margaret&#39;s first pupils were<br />\r\n<strong>A</strong>. her children<br />\r\n<strong>B</strong>. three-and four-year-olds<br />\r\n<strong>C</strong>. her own friends<br />\r\n<strong>D</strong>. her children&#39;s friends<br />\r\n<br />\r\n<strong>5</strong>. Which of the following would Margaret include in an advertisement for her classes?<br />\r\n<strong>A</strong>. Learn to play the violin with your children - 2 lessons a week.<br />\r\n<strong>B</strong>. Watch your children learn to play the violin<br />\r\n<strong>C</strong>. Group violin lessons for children - no more than 5 per group.<br />\r\n<strong>D</strong>. We&#39;ll look after your children while you learn the violin<br />\r\n<br />\r\n&nbsp;', 'B', 'C', 'A', 'D', 'B', 'SÃ¡ch PET 3 - Ebook', '04-16-2013 07:11', 2, 43, 1);
INSERT INTO `lessons_readanswer` VALUES(5, 'CÃ¢u 2', '<span style="font-size:18px;"><strong>Rock Band</strong></span><br />\r\n<br />\r\nTwo years ago, our 14-year-old son, Ben, asked us for a set of drums for his birthday. At first, we were very much against the idea because of the noise. &lsquo;It&rsquo;s better than watching television or playing computer games in my free time,&rsquo; Ben argued, &lsquo;and it&rsquo;ll keep me out of trouble.&rsquo;<br />\r\nIn the end we gave in. &lsquo;All right,&#39; we said, &lsquo;but you must consider the rest of the family and the neighbours when you play.&rsquo;<br />\r\nThat was just the beginning. Because drums are not the easiest instruments to transport, the other members of Ben&rsquo;s band started appearilT&sect; dt 0Ur home with their guitars and other electrical equipment. And so, for several hours a week, the house shakes to the noise of their instruments and their teenage singing.<br />\r\n<br />\r\nAt least Ben&rsquo;s hobby has been good for our health: whenever the band start practising, my husband and I go out for a long walk. And I must admit that, although their music may sound a little strange, they are a friendly and polite group of young men. I cannot judge their musical skill &mdash; after all I didn&#39;t expect my parents&rsquo; generation to like the same music as I did when I was a teenager &mdash; but they do play regularly in local clubs for young people.<br />\r\n<br />\r\nOur main worry is that they won&rsquo;t spend enough time on their school work because of their musical activities, though this hasn&rsquo;t happened yet. I am always stressing to Ben how important his studies are. But one thing is certain &mdash; Ben was right: it has kept him out of trouble and he is never bored.', '<strong>1</strong>. What is the writer trying to do in this text?<br />\r\n<strong>A</strong>. complain about her son&#39;s friends<br />\r\n<strong>B</strong>. give advice to teenagers<br />\r\n<strong>C</strong>. describe her son&#39;s hobby<br />\r\n<strong>D</strong>. compare herself with her parents<br />\r\n<br />\r\n<strong>2</strong>. Why did the writer give Ben the present he wanted?<br />\r\n<strong>A</strong>. She wanted to reward him for working hard<br />\r\n<strong>B</strong>. He already had too many computer games<br />\r\n<strong>C</strong>. She knew he would use it sensibly<br />\r\n<strong>D</strong>. He persuaded her it would be a good idea<br />\r\n<br />\r\n<strong>3</strong>. Why do the band always practise at Ben&#39;s house?<br />\r\n<strong>A</strong>. It is difficult for Ben to move his drums<br />\r\n<strong>B</strong>. The neighbours don&#39;t mind the noise<br />\r\n<strong>C</strong>. Ben&#39;s parents enjoy listening to them<br />\r\n<strong>D</strong>. They can leave their equipment there<br />\r\n<br />\r\n<strong>4</strong>. What does the writter say about the band members?<br />\r\n<strong>A</strong>. Their influence on her son worries her<br />\r\n<strong>B</strong>. Their taste in music is different from hers<br />\r\n<strong>C</strong>. They play their instruments well<br />\r\n<strong>D</strong>. They avoid any contact with her<br />\r\n<br />\r\n<strong>5</strong>. What might the writter say to her son?<br />\r\n<strong>A</strong>. Your teacher has just phoned. He wants to know why you weren&#39;t at school today<br />\r\n<strong>B</strong>. When are you playing at the club next? Dad and I would love to come along again<br />\r\n<strong>C</strong>. If you don&#39;t know what to do with yourself, there&#39;s a good programme on the television in a few minutes<br />\r\n<strong>D</strong>. Are you sure you&#39;ve finished your homework? It&#39;s more important than band practice.', 'C', 'D', 'A', 'B', 'D', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 12:11', 7, 107, 1);
INSERT INTO `lessons_readanswer` VALUES(6, 'CÃ¢u 1 - BÃ i test 2', '<span style="font-size:16px;">Craigie Aitchison</span><br />\r\n<br />\r\nThe painter Craigie Aitchison &nbsp;was &nbsp;born in Scotland. &nbsp;He came to &nbsp;London intending to study &nbsp;law, bUt went &nbsp;to art sChool &nbsp;instead. There &nbsp;he found the traditional drawing classes difficult, &nbsp;but still kept on &nbsp;painting.<br />\r\n<br />\r\nIn his late twenties &nbsp;he was given money by the Italian government to study art, and became interested in early Italian artists, which shows in some of his work. &nbsp;He loved the greens and browns of the Italian fields and the clear light there, and wanted to put this light into his paintings.<br />\r\n<br />\r\nThis led him to paint colours thinly one on top of another from light to dark, but he insists he&rsquo;s never sure what the results will be. He says, &lsquo;It&rsquo;s a secret &mdash; &nbsp;because I don&rsquo;t know myself. Idon&rsquo;t start by painting yellow, &nbsp;knowing I&lsquo;m going to put anything on top.&rsquo; Like most talented &nbsp;people, Aitchison &nbsp;makes it sound easy. &lsquo;Anyone can do<br />\r\nthe Colours &mdash; you Can buy them. Isimply notice what you put the colours next to.&rsquo;<br />\r\n<br />\r\nUnlike some artists, he never does drawings &nbsp;before he starts a &nbsp;painting, as he feels that if he did, he might get bored and not do the painting afterwards. Instead, Aitchison &nbsp;changes &nbsp;his paintings many times before they &nbsp;are finished. This explains why &nbsp;his favourite &nbsp;models are people who don&lsquo;t ask to see their pictures while &nbsp;he&rsquo;s painting them. &lsquo;If Ifeel they&lsquo;re worried &nbsp;and want to look at the<br />\r\npainting, Ican&rsquo;t do it.&rsquo;<br />\r\n<br />\r\nSince moving to &nbsp;London years ago, he has not felt &nbsp;part of the Scottish &nbsp;painting scene. &nbsp;He says &nbsp;he is not interested in following &nbsp;any tradition, &nbsp;but just &nbsp;paints the way &nbsp;he can. &nbsp;However, his work still influences young &nbsp;British painters.', '<strong>1.</strong> What is&nbsp;the writer trying to do in the text?\r\n<div><strong>A </strong>describe particular works by Craigie Aitchison<br />\r\n<strong>B </strong>teach readers how to paint like <span style="font-size: 13px;">Craigie Aitchison<br />\r\n<strong>C </strong>introduce readers to the artist&nbsp;Craigie Aitchison<br />\r\n<strong>D </strong>explain how&nbsp;Craigie Aitchison has made money from painting<br />\r\n<br />\r\n<strong>2</strong>. What can the reader learn about&nbsp;Aitchison from the text?<br />\r\n<strong>A </strong>He works in a different way from other artists.<br />\r\n<strong>B </strong>He often gets bored with his paintings.<br />\r\n<strong>C </strong>He improved his drawing by going to art school.<br />\r\n<strong>D </strong>He did some paintings for the Italian government.</span><br />\r\n<br />\r\n<strong>3.</strong> What does&nbsp;<span style="font-size: 13px;">Aitchison say about his use of colour?<br />\r\n<strong>A</strong> He likes starting with the darkest colours first.<br />\r\n<strong>B </strong>He knows the colours he&#39;s aiming for when he begins.<br />\r\n<strong>C </strong>He prefers to paint with yellows, greens and browns.<br />\r\n<strong>D </strong>He understands how different colours work together.<br />\r\n<br />\r\n<strong>4.</strong>&nbsp;Aitchison prefers models who don&#39;t<br />\r\n<strong>A </strong>keep talking to him while he&#39;s working<br />\r\n<strong>B </strong>ask him about his strange method of working.<br />\r\n<strong>C </strong>worry about how long the work will take.<br />\r\n<strong>D </strong>feel anxious to see the work as it&#39;s developing.</span></div>\r\n<br />\r\n<strong>5.</strong> What might a visitor at an exhibition say about&nbsp;<span style="font-size: 13px;">Aitchison&#39;s work?<br />\r\n<strong>A </strong>I love his recent paintings of Scotland, which are very similar to a number of other Scottish painters<br />\r\n<strong>B </strong>You can still see the influence of his trip to Italy in some of these pictures.<br />\r\n<strong>C </strong>You can tell he spent a lot of time drawing the picture before he started painting.<br />\r\n<strong>D </strong>I wonder if his law training helps him at all, especially in selling his work.</span>', 'C', 'A', 'D', 'D', 'B', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test6', '06-15-2013 15:18', 7, 108, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_readchoose`
--

CREATE TABLE `lessons_readchoose` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `text` text collate utf8_unicode_ci NOT NULL,
  `content_choose` text collate utf8_unicode_ci NOT NULL,
  `choose1` text collate utf8_unicode_ci NOT NULL,
  `choose2` text collate utf8_unicode_ci NOT NULL,
  `choose3` text collate utf8_unicode_ci NOT NULL,
  `choose4` text collate utf8_unicode_ci NOT NULL,
  `choose5` text collate utf8_unicode_ci NOT NULL,
  `choose6` text collate utf8_unicode_ci NOT NULL,
  `choose7` text collate utf8_unicode_ci NOT NULL,
  `choose8` text collate utf8_unicode_ci NOT NULL,
  `choose9` text collate utf8_unicode_ci NOT NULL,
  `choose10` text collate utf8_unicode_ci NOT NULL,
  `reference` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lessons_readchoose`
--

INSERT INTO `lessons_readchoose` VALUES(2, 'CÃ¢u 1', '<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-family:times new roman,times,serif;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NEW OPPORTUNITIES WITH AN OPEN UNIVERSITY DEGREE</span></strong><br />\r\nLike any other university, the Open University can give you a degree. However, you don&#39;t have to <strong>(1)</strong>............working to study. It can also open up a whole variety <strong>(2)</strong>..............interests.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; If you have <strong>(3)</strong>.............studied before, you will enjoy the special, new pleasure of <strong>(4)</strong>................your knowledge. You will make friends of <strong>(5)</strong>...........kinds. You may also <strong>(6)</strong>............that your qualification provides new career opportunities.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; You don&#39;t actually <strong>(7)</strong>............ to the Open University for lectures, but study at home, using television, radio and computer software. You can <strong>(8)</strong>............one class a month if you wish at an Open University centre. Of course, there are exams to take, as in <strong>(9)</strong>.............university.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp; If you <strong>(10)</strong>...........like to know more, all you have to do is complete the form below. It could be the start of a wonderful new period in your life.', '<table border="0" cellpadding="0" cellspacing="0" style="width:523px;" width="523">\r\n	<colgroup>\r\n		<col />\r\n		<col />\r\n		<col />\r\n		<col />\r\n		<col />\r\n		<col />\r\n		<col />\r\n		<col />\r\n		<col />\r\n	</colgroup>\r\n	<tbody>\r\n		<tr height="30">\r\n			<td height="30" style="height:30px;width:27px;"><strong>26</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:76px;">stop</td>\r\n			<td style="width:39px;"><strong>B</strong></td>\r\n			<td style="width:88px;">end</td>\r\n			<td style="width:45px;"><strong>C</strong></td>\r\n			<td style="width:71px;">break</td>\r\n			<td style="width:41px;"><strong>D</strong></td>\r\n			<td style="width:115px;">leave</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>27</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:76px;">from</td>\r\n			<td style="width:39px;"><strong>B</strong></td>\r\n			<td style="width:88px;">of</td>\r\n			<td style="width:45px;"><strong>C</strong></td>\r\n			<td style="width:71px;">in</td>\r\n			<td style="width:41px;"><strong>D</strong></td>\r\n			<td style="width:115px;">for</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>28</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:76px;">ever</td>\r\n			<td style="width:39px;"><strong>B</strong></td>\r\n			<td style="width:88px;">never</td>\r\n			<td style="width:45px;"><strong>C</strong></td>\r\n			<td style="width:71px;">often</td>\r\n			<td style="width:41px;"><strong>D</strong></td>\r\n			<td style="width:115px;">always</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>29</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:76px;">growing</td>\r\n			<td style="width:39px;"><strong>B</strong></td>\r\n			<td style="width:88px;">changing</td>\r\n			<td style="width:45px;"><strong>C</strong></td>\r\n			<td style="width:71px;">adding</td>\r\n			<td style="width:41px;"><strong>D</strong></td>\r\n			<td style="width:115px;">increasing</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>30</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:76px;">all</td>\r\n			<td style="width:39px;"><strong>B</strong></td>\r\n			<td style="width:88px;">each</td>\r\n			<td style="width:45px;"><strong>C</strong></td>\r\n			<td style="width:71px;">both</td>\r\n			<td style="width:41px;"><strong>D</strong></td>\r\n			<td style="width:115px;">every</td>\r\n		</tr>\r\n		<tr height="25">\r\n			<td height="25" style="height:25px;width:27px;"><strong>31</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:76px;">suggest</td>\r\n			<td style="width:39px;"><strong>B</strong></td>\r\n			<td style="width:88px;">find</td>\r\n			<td style="width:45px;"><strong>C</strong></td>\r\n			<td style="width:71px;">wish</td>\r\n			<td style="width:41px;"><strong>D</strong></td>\r\n			<td style="width:115px;">want</td>\r\n		</tr>\r\n		<tr height="29">\r\n			<td height="29" style="height:29px;width:27px;"><strong>32</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:76px;">join</td>\r\n			<td style="width:39px;"><strong>B</strong></td>\r\n			<td style="width:88px;">enter</td>\r\n			<td style="width:45px;"><strong>C</strong></td>\r\n			<td style="width:71px;">arrive</td>\r\n			<td style="width:41px;"><strong>D</strong></td>\r\n			<td style="width:115px;">go</td>\r\n		</tr>\r\n		<tr height="24">\r\n			<td height="24" style="height:24px;width:27px;"><strong>33</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:76px;">give</td>\r\n			<td style="width:39px;"><strong>B</strong></td>\r\n			<td style="width:88px;">attend</td>\r\n			<td style="width:45px;"><strong>C</strong></td>\r\n			<td style="width:71px;">learn</td>\r\n			<td style="width:41px;"><strong>D</strong></td>\r\n			<td style="width:115px;">study</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>34</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:76px;">any</td>\r\n			<td style="width:39px;"><strong>B</strong></td>\r\n			<td style="width:88px;">some</td>\r\n			<td style="width:45px;"><strong>C</strong></td>\r\n			<td style="width:71px;">many</td>\r\n			<td style="width:41px;"><strong>D</strong></td>\r\n			<td style="width:115px;">most</td>\r\n		</tr>\r\n		<tr height="32">\r\n			<td height="32" style="height:32px;width:27px;"><strong>35</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:76px;">did</td>\r\n			<td style="width:39px;"><strong>B</strong></td>\r\n			<td style="width:88px;">will</td>\r\n			<td style="width:45px;"><strong>C</strong></td>\r\n			<td style="width:71px;">would</td>\r\n			<td style="width:41px;"><strong>D</strong></td>\r\n			<td style="width:115px;">can</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'A', 'B', 'B', 'D', 'A', 'B', 'D', 'B', 'A', 'C', 'SÃ¡ch PET 3 - Ebook', '04-18-2013 06:14', 2, 48, 1);
INSERT INTO `lessons_readchoose` VALUES(3, 'CÃ¢u 2', '<span style="font-size:16px;">Tom Cruise</span><br />\r\nTom Cruise is one of the most successful actors in cinema history. However, life hasn&#39;t always been that easy for him. As a young boy, Tom was shy and had <strong>(26) </strong>........................ in finding friends, although he really enjoyed <strong>(27)</strong> ........................ part in school plays.<br />\r\n<strong>(28)</strong> &nbsp;........................ &nbsp;he &nbsp;had finished &nbsp;High School, &nbsp;Tom &nbsp;went &nbsp;to &nbsp;New York to &nbsp;look for work. &nbsp;He found &nbsp;employment &nbsp;as a porter, &nbsp;and &nbsp;at the same time &nbsp;he <strong>(29)</strong> &nbsp;........................ &nbsp;drama classes. &nbsp;In 1980, the &nbsp;film<br />\r\ndirector &nbsp;Franco Zeffirelli &nbsp;<strong>(30)</strong> &nbsp;........................ &nbsp;Tom &nbsp;his first &nbsp;part &nbsp;in a film. &nbsp;Ten &nbsp;years &nbsp;later,<br />\r\nhe had &nbsp;become &nbsp;<strong>(31)</strong> &nbsp;........................ &nbsp;successful &nbsp;that &nbsp;he was &nbsp;one of the &nbsp;highest-paid<br />\r\nactors &nbsp;in &nbsp;Hollywood, &nbsp;<strong>(32)</strong> &nbsp;........................ &nbsp;millions &nbsp;of dollars &nbsp;for &nbsp;<strong>(33)</strong> &nbsp;........................ &nbsp;film.<br />\r\n<br />\r\nToday, &nbsp;Tom &nbsp;<strong>(34)</strong> &nbsp;. ...................... &nbsp;appears &nbsp;in films &nbsp;and &nbsp;is as <strong>(35)</strong> &nbsp;........................ &nbsp;as &nbsp;ever &nbsp;with<br />\r\nhis thousands &nbsp;of fans &nbsp;from &nbsp;all around &nbsp;the &nbsp;world.', '<table border="0" cellpadding="0" cellspacing="0" style="width:521px;" width="521">\r\n	<colgroup>\r\n		<col />\r\n		<col />\r\n		<col />\r\n		<col />\r\n		<col />\r\n		<col />\r\n	</colgroup>\r\n	<tbody>\r\n		<tr height="27">\r\n			<td height="27" style="height:27px;width:27px;"><strong>26</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:91px;">worry</td>\r\n			<td style="width:127px;"><strong>B &nbsp;</strong>problem</td>\r\n			<td style="width:143px;"><strong>C &nbsp;</strong>fear</td>\r\n			<td style="width:115px;"><strong>D &nbsp;</strong>difficulty</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>27</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:91px;">making</td>\r\n			<td style="width:127px;"><strong>B &nbsp;</strong>holding</td>\r\n			<td style="width:143px;"><strong>C &nbsp;</strong>taking</td>\r\n			<td style="width:115px;"><strong>D &nbsp;</strong>finding</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>28</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:91px;">While</td>\r\n			<td style="width:127px;"><strong>B &nbsp;</strong>During</td>\r\n			<td style="width:143px;"><strong>C &nbsp;</strong>After</td>\r\n			<td style="width:115px;"><strong>D &nbsp;</strong>Until</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>29</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:91px;">prepared</td>\r\n			<td style="width:127px;"><strong>B &nbsp;</strong>waited</td>\r\n			<td style="width:143px;"><strong>C &nbsp;</strong>attended</td>\r\n			<td style="width:115px;"><strong>D &nbsp;</strong>happened</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>30</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:91px;">suggested</td>\r\n			<td style="width:127px;"><strong>B &nbsp;</strong>offered</td>\r\n			<td style="width:143px;"><strong>C &nbsp;</strong>tried</td>\r\n			<td style="width:115px;"><strong>D &nbsp;</strong>advised</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>31</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:91px;">so</td>\r\n			<td style="width:127px;"><strong>B &nbsp;</strong>such</td>\r\n			<td style="width:143px;"><strong>C &nbsp;</strong>too</td>\r\n			<td style="width:115px;"><strong>D &nbsp;</strong>very</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>32</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:91px;">paying</td>\r\n			<td style="width:127px;"><strong>B &nbsp;</strong>earning</td>\r\n			<td style="width:143px;"><strong>C &nbsp;</strong>winning</td>\r\n			<td style="width:115px;"><strong>D &nbsp;</strong>reaching</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>33</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:91px;">another</td>\r\n			<td style="width:127px;"><strong>B &nbsp;</strong>all</td>\r\n			<td style="width:143px;"><strong>C &nbsp;</strong>each</td>\r\n			<td style="width:115px;"><strong>D &nbsp;</strong>some</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>34</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:91px;">yet</td>\r\n			<td style="width:127px;"><strong>B &nbsp;</strong>ever</td>\r\n			<td style="width:143px;"><strong>C &nbsp;</strong>already</td>\r\n			<td style="width:115px;"><strong>D &nbsp;</strong>still</td>\r\n		</tr>\r\n		<tr height="27">\r\n			<td height="27" style="height:27px;width:27px;"><strong>35</strong></td>\r\n			<td style="width:21px;"><strong>A</strong></td>\r\n			<td style="width:91px;">popular</td>\r\n			<td style="width:127px;"><strong>B &nbsp;</strong>favourite</td>\r\n			<td style="width:143px;"><strong>C &nbsp;</strong>preferred</td>\r\n			<td style="width:115px;"><strong>D </strong>approved</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'D', 'C', 'C', 'C', 'B', 'A', 'B', 'C', 'D', 'A', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 13:16', 7, 107, 1);
INSERT INTO `lessons_readchoose` VALUES(4, 'CÃ¢u 1 - BÃ i test 2', '<strong><span style="font-family:comic sans ms,cursive;">ZOOS</span></strong><br />\r\n<br />\r\nPeople begon to keep onimols in zoos <strong>(1)</strong> ........................ &nbsp;3,000 /&eacute;or &sup3; &sup3;9 &nbsp;, when the rulers of Rhino opened on enormous &nbsp;zoo colled the Gardens of &nbsp;Intelligence. In mony of &nbsp;the eorly zoos, onimols <strong>(2)</strong> ........................ &nbsp;tought to perform for the visitors.<br />\r\nThis no longer <strong>(3)</strong> ........................ &nbsp;ond it is accepted thot the purpose of &nbsp;zoos &nbsp;is for people to see onimols &nbsp;behaving noturolly.<br />\r\n<br />\r\nTodoy, most cities &nbsp;hove o zoo or wildlife pork. However, not <strong>(4)</strong> .................. ..... &nbsp;approves<br />\r\nof &nbsp;zoos. People who think thot zoos ore o good ideo soy they <strong>(5)</strong> ........................ &nbsp;us with<br />\r\nthe opportunity &nbsp;to <strong>(6)</strong> ........................ &nbsp;obout the noturol world ond be close to wild<br />\r\nonimols. &nbsp;Both of <strong>(7)</strong> ........................ &nbsp;would not be possible <strong>(8)</strong> ...&nbsp; .. zoos. On the<br />\r\nother &nbsp;hond, some people disapprove of &nbsp;zoos becouse they <strong>(9)</strong> .............. ......... it is wron9<br />\r\nto put onimols &nbsp;in coges, ond orgue thot in zoos which ore not <strong>(10)</strong> ........................ &nbsp;properly, onimols &nbsp;live in dirty conditions ond eot unsuitable food.<br />\r\n&nbsp;', '<table border="0" cellpadding="0" cellspacing="0" style="width:545px;" width="545">\r\n	<colgroup>\r\n		<col />\r\n		<col />\r\n		<col />\r\n		<col />\r\n		<col />\r\n		<col />\r\n	</colgroup>\r\n	<tbody>\r\n		<tr height="31">\r\n			<td height="31" style="height:31px;width:27px;"><strong>1</strong></td>\r\n			<td style="width:20px;"><strong>A</strong></td>\r\n			<td style="width:89px;">above</td>\r\n			<td style="width:132px;"><strong>B</strong> &nbsp;over</td>\r\n			<td style="width:136px;"><strong>C</strong> &nbsp;more</td>\r\n			<td style="width:140px;"><strong>D</strong> &nbsp;beyond</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>2</strong></td>\r\n			<td style="width:20px;"><strong>A</strong></td>\r\n			<td style="width:89px;">are</td>\r\n			<td style="width:132px;"><strong>B</strong> &nbsp;have</td>\r\n			<td style="width:136px;"><strong>C</strong> &nbsp;were</td>\r\n			<td style="width:140px;"><strong>D</strong> &nbsp;had</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>3</strong></td>\r\n			<td style="width:20px;"><strong>A</strong></td>\r\n			<td style="width:89px;">appears</td>\r\n			<td style="width:132px;"><strong>B</strong> &nbsp;becomes</td>\r\n			<td style="width:136px;"><strong>C</strong> &nbsp;develops</td>\r\n			<td style="width:140px;"><strong>D </strong>&nbsp;happens</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>4</strong></td>\r\n			<td style="width:20px;"><strong>A</strong></td>\r\n			<td style="width:89px;">somebody</td>\r\n			<td style="width:132px;"><strong>B</strong> &nbsp;everybody</td>\r\n			<td style="width:136px;"><strong>C</strong> &nbsp;nobody</td>\r\n			<td style="width:140px;"><strong>D</strong> &nbsp;anybody</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>5</strong></td>\r\n			<td style="width:20px;"><strong>A</strong></td>\r\n			<td style="width:89px;">produce</td>\r\n			<td style="width:132px;"><strong>B</strong> &nbsp;bring</td>\r\n			<td style="width:136px;"><strong>C</strong> &nbsp;provide</td>\r\n			<td style="width:140px;"><strong>D</strong> &nbsp;make</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>6</strong></td>\r\n			<td style="width:20px;"><strong>A</strong></td>\r\n			<td style="width:89px;">discover</td>\r\n			<td style="width:132px;"><strong>B</strong> &nbsp;learn</td>\r\n			<td style="width:136px;"><strong>C</strong> &nbsp;find</td>\r\n			<td style="width:140px;"><strong>D</strong> &nbsp;realise</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>7</strong></td>\r\n			<td style="width:20px;"><strong>A</strong></td>\r\n			<td style="width:89px;">that</td>\r\n			<td style="width:132px;"><strong>B</strong> &nbsp;what</td>\r\n			<td style="width:136px;"><strong>C </strong>&nbsp;whose</td>\r\n			<td style="width:140px;"><strong>D</strong> these</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>8</strong></td>\r\n			<td style="width:20px;"><strong>A</strong></td>\r\n			<td style="width:89px;">without</td>\r\n			<td style="width:132px;"><strong>B</strong> &nbsp;instead</td>\r\n			<td style="width:136px;"><strong>C</strong> &nbsp;except</td>\r\n			<td style="width:140px;"><strong>D</strong> &nbsp;unless</td>\r\n		</tr>\r\n		<tr height="26">\r\n			<td height="26" style="height:26px;width:27px;"><strong>9</strong></td>\r\n			<td style="width:20px;"><strong>A</strong></td>\r\n			<td style="width:89px;">hope</td>\r\n			<td style="width:132px;"><strong>B </strong>&nbsp;expect</td>\r\n			<td style="width:136px;"><strong>C</strong> &nbsp;imagine</td>\r\n			<td style="width:140px;"><strong>D </strong>&nbsp;believe</td>\r\n		</tr>\r\n		<tr height="31">\r\n			<td height="31" style="height:31px;width:27px;"><strong>10</strong></td>\r\n			<td style="width:20px;"><strong>A</strong></td>\r\n			<td style="width:89px;">ordered</td>\r\n			<td style="width:132px;"><strong>B</strong> &nbsp;managed</td>\r\n			<td style="width:136px;"><strong>C </strong>&nbsp;decided</td>\r\n			<td style="width:140px;"><strong>D </strong>&nbsp;aimed</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'B', 'C', 'D', 'B', 'C', 'B', 'D', 'A', 'D', 'B', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test6', '06-15-2013 15:50', 7, 108, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_readcor`
--

CREATE TABLE `lessons_readcor` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `paragraph` text collate utf8_unicode_ci NOT NULL,
  `sentences` text collate utf8_unicode_ci NOT NULL,
  `cor1` text collate utf8_unicode_ci NOT NULL,
  `cor2` text collate utf8_unicode_ci NOT NULL,
  `cor3` text collate utf8_unicode_ci NOT NULL,
  `cor4` text collate utf8_unicode_ci NOT NULL,
  `cor5` text collate utf8_unicode_ci NOT NULL,
  `cor6` text collate utf8_unicode_ci NOT NULL,
  `cor7` text collate utf8_unicode_ci NOT NULL,
  `cor8` text collate utf8_unicode_ci NOT NULL,
  `cor9` text collate utf8_unicode_ci NOT NULL,
  `cor10` text collate utf8_unicode_ci NOT NULL,
  `reference` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lessons_readcor`
--

INSERT INTO `lessons_readcor` VALUES(1, 'CÃ¢u 1', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family:times new roman,times,serif;"><strong><span style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size:20px;">The Outdoor Centre</span></span></strong></span><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Opening times</strong><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Water sports: 10 am - 6 pm<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Play Park: 10 am - 5.30 pm<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Entrance / Car park fees</strong><br />\r\n<em>Low season</em>: Weekdays &pound;2.00 per car&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; High season: 23 July - 11 September<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Weekends &pound;3.00 per car&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Weekdays and weekends &pound;3.00 per car&nbsp;<br />\r\nFees are for car with four people. Each extra person is 50p. Fees to be paid at main office.<br />\r\nThe centre is not a private club; it is an organisation whose aim is to provide outdoor sport and recreation facilities for all members of the public.<br />\r\nGroup visitors are requested to inform the centre in advance of their intended visit.<br />\r\n<br />\r\n<strong>Windsurfing - One day course</strong><br />\r\nBeginner windsurfing courses are offered on Saturdays and Sundays when the weather is good enough. Learning to windsuft is a lot of fun. The excitement when you sail across the water for the first time is not easily forgotten. Boards with small sails are available for beginners<br />\r\n<em>Course fee: &pound;32.50 (this includes all equipment)</em><br />\r\n<br />\r\n<strong>One-day adventure course</strong><br />\r\nThis is an opportunity you have been waiting for. Come and try sailing, climbing, surfing and archery. This course is intended to introduce outdoor activities to adults in a fun, leisurely manner. You do not need to be extremely fit or to have had previous experience of the activities. All you need is to interested.<br />\r\n<em>Course fee</em>: <em>&pound;22.50</em><br />\r\n<br />\r\n<strong>Play Park</strong><br />\r\nThe Play Park is suitable for children from two to ten years of age. It is one of the best of its type in the country. It has sand and water play, sildes, large ball pool, play castle and much, much more. Next year the centre will open a new Play Palace and Play Ship.<br />\r\n<br />\r\n<strong>Group day and residential courses</strong><br />\r\nWe also offer day and long weekend courses for groups. We receive regular visits from schools, colleges and youth groups. There are three large rooms with twelve beds in each, which can be booked in advance for groups of up to 36 people (minimum 12).<br />\r\n<br />\r\n<strong>Summer adventure holidays (for 8-14 years of age)</strong><br />\r\n<strong>Sailing&nbsp;&nbsp;&nbsp;&nbsp; Climbing&nbsp;&nbsp;&nbsp;&nbsp; Windsurfing&nbsp;&nbsp; Fun Games</strong><br />\r\nSafety is of primary importance at the Outdoor Centre. All staff are fully trained in First Aid, and qualified to teach the activities on offer. We also make certain that all children only take part in activities that are suitable for their age and physical abilities. For this programme children must be also to swim 25 metres and be in good physical heath.', '<strong>1</strong>. In August, four people visiting the centre together by car would pay more than two people<br />\r\n<strong>2</strong>. The centre has activities for a range of age groups<br />\r\n<strong>3</strong>. There are windsurfing courses every weekend<br />\r\n<strong>4</strong>. The centre has special equipment for people who are learning to windsurf<br />\r\n<strong>5</strong>. There is an extra hire charge for the board on the windsurfing course<br />\r\n<strong>6</strong>. The adventure course is suitable for beginners<br />\r\n<strong>7</strong>. The centre is planning to add extra facilities to the Play Park<br />\r\n<strong>8</strong>. It is possible for individual visitors to stay overnight at the centre<br />\r\n<strong>9</strong>. On the holiday programme children are allowed to do any sport they are interested in<br />\r\n<strong>10</strong>. Summer adventure holidays are open to any child between eight and fourteen years who can swim', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'B', 'B', 'B', 'SÃ¡ch PET 3 - Ebook', '04-15-2013 23:24', 2, 87, 1);
INSERT INTO `lessons_readcor` VALUES(2, 'CÃ¢u 2 - A book club', '<strong>1</strong>. By ordering a book, you qualify to become a member of the International Book Club<br />\r\n<strong>2</strong>. Every new member can request a watch from the book club<br />\r\n<strong>3</strong>. You can buy a DVD more cheaply when you join<br />\r\n<strong>4</strong>. All club books cost half the publisher&#39;s price<br />\r\n<strong>5</strong>. Each club magazine gives you a choice of over 1.000 books<br />\r\n<strong>6</strong>. You get a different choice of books if you order from the website<br />\r\n<strong>7</strong>. One special book is recommended every month<br />\r\n<strong>8</strong>. You may receive a book that the club has chosen for you<br />\r\n<strong>9</strong>. You must pay the postage when sending your application to join the club<br />\r\n<strong>10</strong>. You should pay as soon as you receive your books', '<span style="font-size:16px;"><strong>International Book Club</strong></span><br />\r\n<br />\r\n<strong>Have you ever thought of joining &nbsp;a book club and buying new books through the post? Here at the International &nbsp;Book Club, we already have many members buying books from us by mail.</strong><br />\r\n<br />\r\n<strong>To join:</strong><br />\r\nYou just &nbsp;need to send us your &nbsp;first order from our book &nbsp;list.<br />\r\n<br />\r\n<strong>Immediate benefits:</strong>\r\n<div style="margin-left:.18in;">&bull;As &nbsp;a special &nbsp;offer, you &nbsp;may &nbsp;choose any &nbsp;reduced-price &nbsp;books from our new &nbsp;members&rsquo; &nbsp;book&nbsp; list, to the value &nbsp;of &pound;6 in total &nbsp;(plus postage &nbsp;and packing). &nbsp;By &nbsp;doing &nbsp;this, &nbsp;you &nbsp;will &nbsp;save pounds on the publishers&rsquo; &nbsp;prices.</div>\r\n\r\n<div style="margin-left:.18in;">&bull;Tick &nbsp;the box &nbsp;on your &nbsp;form to order a tree &nbsp;watch.</div>\r\n\r\n<div style="margin-left:.18in;">&bull;If you reply &nbsp;within &nbsp;seven &nbsp;days, &nbsp;we &nbsp;will &nbsp;send you &nbsp;another free gift &nbsp;carefully &nbsp;chosen &nbsp;from our</div>\r\nbook &nbsp;list by &nbsp;our staff.\r\n\r\n<div style="margin-left:.18in;">&bull;Order a DVD from &nbsp;the many &nbsp;on offer in our list, at half &nbsp;the recommended &nbsp;retail &nbsp;price.</div>\r\n<br />\r\n<strong>When you&rsquo;ve joined:</strong><br />\r\nAs a member, &nbsp;you&rsquo;ll enjoy &nbsp;savings of between &nbsp;309c and 509o off the publisher&rsquo;s &nbsp;price on every book &nbsp;you &nbsp;buy, and what&rsquo;s &nbsp;more, they&rsquo;ll &nbsp;come straight to your door. Your free club magazine<br />\r\narrives once a month, &nbsp;to keep you up to date with the latest best&mdash;sellers. &nbsp;This &nbsp;means &nbsp;that every year we offer over &nbsp;1,000 books to choose from. On the Internet, you can find all our titles for the year on our exclusive &nbsp;members&rsquo; website.<br />\r\n<br />\r\n<strong>Being a member:</strong><br />\r\nAll &nbsp;we are asking you &nbsp;to do while you &nbsp;are a member &nbsp;is to choose four books &nbsp;during your first year. After that, you &nbsp;can decide on &nbsp;the number &nbsp;of books you &nbsp;wish &nbsp;to take.<br />\r\n<br />\r\nIn each of our monthly &nbsp;club magazines, &nbsp;our experienced &nbsp;staff choose a Club Choice book &mdash; a work &nbsp;of fiction or a reference title which &nbsp;they &nbsp;feel is particularly &nbsp;worth buying, &nbsp;and which &nbsp;is offered &nbsp;at an extra-special &nbsp;price. &nbsp;However, &nbsp;if you &nbsp;do not want &nbsp;this book, just &nbsp;say &nbsp;so in the space provided &nbsp;on the form. We will always send the book &nbsp;if we do not receive &nbsp;this.<br />\r\n<br />\r\nSo, return &nbsp;your &nbsp;application &nbsp;form &nbsp;today, but hurry &mdash; it&rsquo;s not every day we can &nbsp;make you &nbsp;an offer like this. To apply to become a member, &nbsp;all you need to do is simply fill in &nbsp;the enclosed form and return &nbsp;it in the postage-paid &nbsp;envelope &nbsp;supplied.<br />\r\n<br />\r\nBefore you &nbsp;know &nbsp;it, your &nbsp;books &nbsp;will be &nbsp;with &nbsp;you. &nbsp;Please don&rsquo;t &nbsp;send &nbsp;any &nbsp;money &nbsp;now, &nbsp;as we &nbsp;will send you &nbsp;your bill &nbsp;with &nbsp;the books. And &nbsp;remember, &nbsp;you &nbsp;have up to a fortnight &nbsp;to decide &nbsp;if you wish &nbsp;to keep &nbsp;the books &nbsp;you &nbsp;have &nbsp;ordered. You &nbsp;should then &nbsp;either &nbsp;return the books or send &nbsp;your payment.', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'B', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 11:14', 7, 107, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_readdes`
--

CREATE TABLE `lessons_readdes` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `num1` int(11) NOT NULL,
  `pic1` text collate utf8_unicode_ci NOT NULL,
  `des1` text collate utf8_unicode_ci NOT NULL,
  `num2` int(11) NOT NULL,
  `pic2` text collate utf8_unicode_ci NOT NULL,
  `des2` text collate utf8_unicode_ci NOT NULL,
  `num3` int(11) NOT NULL,
  `pic3` text collate utf8_unicode_ci NOT NULL,
  `des3` text collate utf8_unicode_ci NOT NULL,
  `num4` int(11) NOT NULL,
  `pic4` text collate utf8_unicode_ci NOT NULL,
  `des4` text collate utf8_unicode_ci NOT NULL,
  `num5` int(11) NOT NULL,
  `pic5` text collate utf8_unicode_ci NOT NULL,
  `des5` text collate utf8_unicode_ci NOT NULL,
  `description` text collate utf8_unicode_ci NOT NULL,
  `res1` text collate utf8_unicode_ci NOT NULL,
  `res2` text collate utf8_unicode_ci NOT NULL,
  `res3` text collate utf8_unicode_ci NOT NULL,
  `res4` text collate utf8_unicode_ci NOT NULL,
  `res5` text collate utf8_unicode_ci NOT NULL,
  `reference` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lessons_readdes`
--

INSERT INTO `lessons_readdes` VALUES(3, 'CÃ¢u thá»© 1', 6, 'uploaded/lessons_readdes/1.png', 'Mrs Jones and her daughter are going to have a day in town.Their bus arrives there at 10 o&#39;clock.&nbsp; They would like to have coffee before they start shopping.', 7, 'uploaded/lessons_readdes/2.png', 'The Browns are on holiday. They are spending the day sightseeing in town and want to have a meal at a restaurant suitable for small children. They would like to sit outside.', 8, 'uploaded/lessons_readdes/3.png', 'Linda&#39;s Italian friend Maria is visiting her for a week. They want to have a snack before going to the cinema in the evening. Maria is keen to try English food. Linda doesn&#39;t eat meat.', 9, 'uploaded/lessons_readdes/4.png', 'Robert Evans has invited a Swedish businessman to dinner to discuss a contract. He wants to take him to a restaurant near his office in the city centre. The food and service must be excellent.', 10, 'uploaded/lessons_readdes/5.png', 'A group of students from various countries want to go out for a late-night meal,', '<strong>A. The White Horse</strong> <strong>Inn</strong> has a top-class restaurant. It is an attractive village seven kilometers from town.Head chef Paul Grant has won prizes for his traditional English food which is served in a comfortable setting. Large garden with children&#39;s play area.<br />\r\nOpen 10.00 - 14.00, 19.00 - 23.00<br />\r\n<strong>B. The Sliver Palace Chinese Restaurant </strong>serves food from many parts of China at low prices. The atmosphere is warm and friendly, but it can get noisy. Reasonable service. Near the city centre, with a car park.<br />\r\nOpen 12.00 - 14.00, 17.30 - 02.00<br />\r\n<strong>C. Dandelions</strong> is a small self-service vegetarian cafe. Serves home-cooked food including soup, pizzas, salads and wonderful desserts. Popular with office workers at lunchtime. Good value for money.<br />\r\nOpen 11.30 - 14.30 only.<br />\r\n<strong>D. The Tiny Tea Room</strong> serves a selection of tea, coffee and good home-made cakes and pastries. Perfect for a refreshing rest and there is a games room for children. Gets very crowded at lunchtime.<br />\r\nOpen 09.00 - 16.30<br />\r\n<strong>E. King&#39;s Restaurant</strong> is a good choice for quick, inexpensive meals. This restaurant serves a wide range of English food. There is also an interesting vegetarian menu which includes a variety of hot dishes, and salads.<br />\r\nOpen 11.00 - 22.00<br />\r\n<strong>F. Bernini&#39;s</strong> is a high-quality Italian restaurant. It is internationally recognised for its first-class food and service. Bernini&#39;s is close to the city centre and parking is available.<br />\r\nOpen evenings only, 18.00 - 23.00<br />\r\n<strong>G. The Tower Coffee Bar</strong> serves light snacks, soft drinks and excellent Italian coffee. Its friendly atmosphere is popular with syudents and young people, and it is a good meeting place for friends. Can be rather noisy!<br />\r\nOpen midday to midnight.<br />\r\n<strong>H. Gordon&#39;s</strong> is a restaurant in an attractive part of town, and has tables in the garden for sunny days. It&#39;s known for pizza, friend chicken and hamburgers. Gordon&#39;s has special prices for children&#39;s meals. Excellent food but service can be slow.<br />\r\nOpen 12.00 - 20.00', 'D', 'H', 'E', 'F', 'B', 'SÃ¡ch PET 3 - Ebook', '04-13-2013 07:10', 2, 34, 1);
INSERT INTO `lessons_readdes` VALUES(4, 'CÃ¢u thá»© 2', 1, 'uploaded/lessons_readdes/1.jpg', 'Klara has recently moved to London and enjoys serious running. She is looking for a club where she can take part in competitions', 2, 'uploaded/lessons_readdes/2.jpg', 'Sami wants to find some ideas for keeping fit at home and communicate online with other people doing the same thing. He doesn&#39;t want to have to pay for using the website.', 3, 'uploaded/lessons_readdes/3.jpg', 'Kumiko is a member of a local gym where she goes at least twice a week. She does not get much time to shop, so wants to buy gym clothes and shoes online', 4, 'uploaded/lessons_readdes/4.jpg', 'Peter loves the outdoors and cycles to different places each weekend to keep fit. He wants a website which will give him suggestions for a range of suitable destinations', 5, 'uploaded/lessons_readdes/5.jpg', 'Stefano is a student and is looking for a gym where he can keep fit. He wants to pay each time he visits the gym rather than paying a fee to become a member', '<span style="font-size:14px;"><strong><span style="font-family: lucida sans unicode,lucida grande,sans-serif;">FIND THE PERFECT WAY TO KEEP FIT WITH THESE WEBSITES</span></strong></span><br />\r\nA&nbsp; <a href="http://www.activelife.co.uk/">www.activelife.co.uk</a> &nbsp;This site is perfect for those who like to combine living a healthy lifestyle with enjoying the countryside. Type in the name of the town and you get a list of locations that offer routes for cycling or exploring the area on foot. There is also &nbsp;information on cycling Competitions in Britain.<br />\r\nB <a href="http://www.fitinfo.com/">www.fitinfo.com</a> &nbsp;This online shop offers books, magazines, DVDs and software connected to keeping &nbsp;fit. You simply type in the aspect of &nbsp;keeping fit that you are interested in, such as &lsquo;keeping fit outdoors&rsquo;, &nbsp;and a super selection is displayed.<br />\r\nC <a href="http://www.fitnet.co.uk/">www.fitnet.co.uk</a> &nbsp;Steve Amos &nbsp;started this site for &nbsp;busy people wanting to keep fit. Fill in a questionnaire and Steve will create a fitness programme for you. Although Steve&lsquo;s fee &nbsp;is high, you can email him for advice whenever you want. In addition, Steve has designed a range of fitness clothes and footwear, which anyone can order (48-hour delivery).<br />\r\nD <a href="http://www.NAG.cc.uk/">www.NAG.cc.uk</a> &nbsp;The National &nbsp;Athletics Group is a site for people interested &nbsp;in athletics.<br />\r\nIt allows you to find out where your nearest athletics club is and provides information about races and other athletics events around &nbsp;the country. There is a popular chatroom where athletes exchange suggestions and ideas.<br />\r\nE&nbsp; <a href="http://www.swavedon.com/">www.swavedon.com</a> &nbsp;Swavedon is a national park with a lake, which offers many different ways of keeping fit in the great outdoors. There are three cycle routes, a jogging track around the lake and several woodland walks.<br />\r\nF&nbsp; <a href="http://www.fitnessonline.co.uk/">www.fitnessonline.co.uk</a> &nbsp;This &nbsp;is a free government website that encourages people to keep fit. It gives diet advice, and allows you to work through a fitness programme without leaving your house. It also offers advice on gym equipment to buy and has a chatroom, where you can compare experiences with others.<br />\r\nG <a href="http://www/">www.[tneeeclub.co.uk</a> &nbsp;This website tells you all you need to know about this chain of gyms, including where your nearest Fitnessclub gym is, how you can become a member and how much the yearly fee is. Advice is given on everything from using a running machine to buying the right equipment. Each gym has a swimming pool and a shop selling gymwear.<br />\r\nH&nbsp; <a href="http://www.sportsoreno.co.uk/">www.sportsoreno.co.uk</a> &nbsp;This website tells you how you con keep fit ot this group of London sports centres. You don&rsquo;t hove to be o member - these centres operate o poy-os-you-go system. They off hove o pool, squosh courts, gym ond outdoor tennis courts. The website includes details of locations, opening times ond prices.', 'D', 'F', 'C', 'A', 'H', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 08:19', 7, 107, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_readtest`
--

CREATE TABLE `lessons_readtest` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `sentence` text collate utf8_unicode_ci NOT NULL,
  `select_answer` text collate utf8_unicode_ci NOT NULL,
  `correct_answer` text collate utf8_unicode_ci NOT NULL,
  `reference` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `lessons_readtest`
--

INSERT INTO `lessons_readtest` VALUES(3, 'CÃ¢u thá»© 1', 'Tom doesn&#39;t like dancing, but Mike......................', 'A. does<br />\r\nB. did<br />\r\nC. do<br />\r\nD. doesn&#39;t', 'A', 'SÃ¡ch caohoc.vnB101.pdf', '04-09-2013 13:36', 2, 28, 1);
INSERT INTO `lessons_readtest` VALUES(4, 'CÃ¢u thá»© 2', 'Listen! Somebody..............for help', 'A. are screaming<br />\r\nB. scream<br />\r\nC. is screaming<br />\r\nD. has screamed', 'C', 'SÃ¡ch caohoc.vnB101.pdf', '04-09-2013 23:56', 2, 28, 1);
INSERT INTO `lessons_readtest` VALUES(5, 'CÃ¢u thá»© 3', 'Waiter! There................forks on this table', 'A. are not some<br />\r\nB. isn&#39;t any<br />\r\nC. are not any<br />\r\nD. are some', 'C', 'SÃ¡ch caohoc.vnB101.pdf', '04-10-2013 00:10', 2, 28, 1);
INSERT INTO `lessons_readtest` VALUES(6, 'CÃ¢u thá»© 4', 'I have a test tomorrow, so I..........sit up late tonight to study', 'A. will have to<br />\r\nB. can have to<br />\r\nC. have<br />\r\nD. have to', 'D', 'SÃ¡ch caohoc.vnB101.pdf', '04-10-2013 00:12', 2, 28, 1);
INSERT INTO `lessons_readtest` VALUES(7, 'CÃ¢u thá»© 5', 'An island on which..............is called a deserted island', 'A. no people lived<br />\r\nB. no people live<br />\r\nC. no people live<br />\r\nD. people are living', 'C', 'SÃ¡ch caohoc.vnB101.pdf', '04-10-2013 00:19', 2, 28, 1);
INSERT INTO `lessons_readtest` VALUES(8, 'CÃ¢u thá»© 6', 'We wondered who............to pay for the broken window', 'A. is going<br />\r\nB. was going<br />\r\nC. have<br />\r\nD. would', 'B', 'SÃ¡ch caohoc.vnB101.pdf', '04-10-2013 00:22', 2, 28, 1);
INSERT INTO `lessons_readtest` VALUES(9, 'CÃ¢u thá»© 7', 'Linda..................tie her shoes when she was only 3 years old', 'A. knew to<br />\r\nB. knew how to<br />\r\nC. could to<br />\r\nD. may', 'B', 'SÃ¡ch caohoc.vnB101.pdf', '04-10-2013 00:24', 2, 28, 1);
INSERT INTO `lessons_readtest` VALUES(10, 'CÃ¢u thá»© 8', 'John said that no other car could go..............his car', 'A. so fast like<br />\r\nB. as fast as<br />\r\nC. fast than<br />\r\nD. as fastly as', 'B', 'SÃ¡ch caohoc.vnB101.pdf', '04-10-2013 00:26', 2, 28, 1);
INSERT INTO `lessons_readtest` VALUES(11, 'CÃ¢u thá»© 9', 'A number of accidents in the last 2 years...................caused by drunk driving', 'A. were<br />\r\nB. have been<br />\r\nC. have<br />\r\nD. are', 'B', 'SÃ¡ch caohoc.vnB101.pdf', '04-10-2013 00:28', 2, 28, 1);
INSERT INTO `lessons_readtest` VALUES(12, 'CÃ¢u thá»© 10', 'Perhaps people don&#39;t like...............tourists in their country', 'A. so much<br />\r\nB. too much<br />\r\nC. so many<br />\r\nD. a lot', 'C', 'SÃ¡ch caohoc.vnB101.pdf', '04-10-2013 00:30', 2, 28, 1);
INSERT INTO `lessons_readtest` VALUES(13, 'CÃ¢u thá»© 11', 'Daniel Webster, Thadeus Stevens, and many others __________ prominent in public life', 'A. they became<br />\r\nB. once they became<br />\r\nC. became<br />\r\nD. who became', 'C', 'caohoc.vnB102.pdf', '05-27-2013 08:50', 7, 107, 1);
INSERT INTO `lessons_readtest` VALUES(14, 'CÃ¢u thá»© 12', 'Agnes De Mille&#39;s landmark musical play Oklahomal was __________ of story, music, and dance', 'A. successfully combined<br />\r\nB. to combine successfully<br />\r\nC. a successful combination<br />\r\nD. successful combining', 'A', 'caohoc.vnB102.pdf', '05-27-2013 09:04', 7, 107, 1);
INSERT INTO `lessons_readtest` VALUES(15, 'CÃ¢u thá»© 13', 'If Peter had enough money,..............on the trip to Las Vegas', 'A. he would have gone<br />\r\nB. had he gone<br />\r\nC. he went<br />\r\nD. he would go', 'D', 'caohoc.vnB102.pdf', '05-27-2013 09:06', 7, 107, 1);
INSERT INTO `lessons_readtest` VALUES(16, 'CÃ¢u thá»© 14', 'Despite the polar bear&#39;s tremendous weight and height,____________of sprinting at tremendous speed', 'A. it is capable<br />\r\nB. is capable<br />\r\nC. it is able<br />\r\nD. ability', 'C', 'caohoc.vnB102.pdf', '05-27-2013 09:12', 7, 107, 1);
INSERT INTO `lessons_readtest` VALUES(17, 'CÃ¢u thá»© 15', 'Porpoises, which __________ actually mammals because they breathe air through an orifice in their heads, are playful and intelligent', 'A. is<br />\r\nB. be<br />\r\nC. being<br />\r\nD. are', 'D', 'caohoc.vnB102.pdf', '05-27-2013 09:15', 7, 107, 1);
INSERT INTO `lessons_readtest` VALUES(18, 'CÃ¢u thá»© 16', 'Why so many people die from this illness ________ unknown, but researchers have learned much about the source of the problem.', 'A. is<br />\r\nB. be<br />\r\nC. widely<br />\r\nD. has', 'D', 'caohoc.vnB102.pdf', '05-27-2013 09:21', 7, 107, 1);
INSERT INTO `lessons_readtest` VALUES(19, 'CÃ¢u thá»© 17', 'Ms.Henry insisted that results of the research be presented to the panel before ________', 'A. was held the vote<br />\r\nB. was the vote<br />\r\nC. voted<br />\r\nD. the vote was held', 'A', 'caohoc.vnB102.pdf', '05-27-2013 09:31', 7, 107, 1);
INSERT INTO `lessons_readtest` VALUES(20, 'CÃ¢u thá»© 18', 'According to the conditions of my scholarship, after finishing my degree,...............', 'A. my education will employed by the university<br />\r\nB. employment will be given to me by the university<br />\r\nC. the university will employ me<br />\r\nD. I will be employed by the university', 'D', 'caohoc.vnB102.pdf', '05-27-2013 09:38', 7, 107, 1);
INSERT INTO `lessons_readtest` VALUES(21, 'CÃ¢u thá»© 19', 'Political demontrations on American campuses have debated ......................', 'A. after 1970<br />\r\nB. in 1970<br />\r\nC. for 1970<br />\r\nD. since 1970', 'D', 'caohoc.vnB102.pdf', '05-27-2013 09:48', 7, 107, 1);
INSERT INTO `lessons_readtest` VALUES(22, 'CÃ¢u thá»© 20', 'The professor has not written a book __________ to the masses to generate interest from a publisher.', 'A. enough appealing<br />\r\nB. appealing enough<br />\r\nC. appeal enough<br />\r\nD. enough appeal', 'C', 'caohoc.vnB102.pdf', '05-27-2013 09:52', 7, 107, 1);
INSERT INTO `lessons_readtest` VALUES(23, 'CÃ¢u 1 - bÃ i test 2', 'The man was in _________ health that the family began to consider whether he could continue to live in his home.', 'A. such bad<br />\r\nB. so bad<br />\r\nC. such worse<br />\r\nD. so badly', 'B', 'SÃ¡ch caohoc.vnB102', '06-15-2013 09:51', 7, 108, 1);
INSERT INTO `lessons_readtest` VALUES(24, 'CÃ¢u 2 - BÃ i test 2', 'Since Elizabeth Barrett Browing&#39;s father never approved of __________ Robert Browing, the couple eloped to Italy, where they lived and wrote.<br />\r\n&nbsp;', 'A. her to marry<br />\r\nB. her marrying<br />\r\nC. she marrying<br />\r\nD. she to marry', 'B', 'SÃ¡ch caohoc.vnB102', '06-15-2013 12:12', 7, 108, 1);
INSERT INTO `lessons_readtest` VALUES(25, 'CÃ¢u 3 - BÃ i test 2', 'The actress, having worked for many hours without interruption, ___________ it difficult to remember her lines.<br />\r\n&nbsp;', 'A. find<br />\r\nB. was finding<br />\r\nC. was found<br />\r\nD. were finding', 'B', 'SÃ¡ch caohoc.vnB102', '06-15-2013 12:31', 7, 108, 1);
INSERT INTO `lessons_readtest` VALUES(26, 'CÃ¢u 4 - BÃ i test 2', '__________ 1000 species of finch have been identified<br />\r\n&nbsp;', 'A. As many as<br />\r\nB. As many<br />\r\nC. As much as<br />\r\nD. Much as', 'D', 'SÃ¡ch caohoc.vnB102', '06-15-2013 12:38', 7, 108, 1);
INSERT INTO `lessons_readtest` VALUES(27, 'CÃ¢u 5 - BÃ i test 2', 'In the past six months, the company has already received twice _________ in gross revenues as it earned in the entire preceding year.', 'A. as much<br />\r\nB. more<br />\r\nC. as many<br />\r\nD. as more', 'A', 'SÃ¡ch caohoc.vnB102', '06-15-2013 12:59', 7, 108, 1);
INSERT INTO `lessons_readtest` VALUES(28, 'CÃ¢u 6 - BÃ i test 2', 'Shakespeare, born in Stratford-upon-Avon, _________ widely regarded as the greatest writer in the English language.<br />\r\n&nbsp;', 'A. he is<br />\r\nB. and is<br />\r\nC. is<br />\r\nD. and he is', 'C', 'SÃ¡ch caohoc.vnB102', '06-15-2013 13:02', 7, 108, 1);
INSERT INTO `lessons_readtest` VALUES(29, 'CÃ¢u 7 - BÃ i test 2', '_______ think of this topic as a modern field of science, it is actually one of the oldest.', 'A. Although many people<br />\r\nB. Many people who<br />\r\nC. Many people<br />\r\nD. In spite of many people', 'A', 'SÃ¡ch caohoc.vnB102', '06-15-2013 13:08', 7, 108, 1);
INSERT INTO `lessons_readtest` VALUES(30, 'CÃ¢u 8 - BÃ i test 2', 'When Columbus saw America, he ______ that he _______ the East Indies.<br />\r\n&nbsp;', 'A. thought/reached<br />\r\nB. had thought/reached<br />\r\nC. thinks/reached<br />\r\nD. thought/had reached', 'A', 'SÃ¡ch caohoc.vnB102', '06-15-2013 13:14', 7, 108, 1);
INSERT INTO `lessons_readtest` VALUES(31, 'CÃ¢u 9 - BÃ i test 2', 'Apart from regular exercise, a diet rich in &nbsp;________ is good for the heart<br />\r\n&nbsp;', 'A. fruits and vegetables<br />\r\nB. fruit and vegetables<br />\r\nC. the fruit and the vegetables<br />\r\nD. fruits and vegetable<br />\r\n&nbsp;', 'B', 'SÃ¡ch caohoc.vnB102', '06-15-2013 13:16', 7, 108, 1);
INSERT INTO `lessons_readtest` VALUES(32, 'CÃ¢u 10 - BÃ i test 2', '<span style="font-size: 13px;">This pen doesn&#39;t work. Can you give me ________ ?</span>', '<span style="font-size: 13px;">A. other</span><br style="font-size: 13px;" />\r\n<span style="font-size: 13px;">B. others</span><br style="font-size: 13px;" />\r\n<span style="font-size: 13px;">C. the others</span><br style="font-size: 13px;" />\r\n<span style="font-size: 13px;">D. another</span>', 'D', 'SÃ¡ch caohoc.vnB102', '06-15-2013 13:21', 7, 108, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_speakintro`
--

CREATE TABLE `lessons_speakintro` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `requirement` text collate utf8_unicode_ci NOT NULL,
  `content_speaking` text collate utf8_unicode_ci NOT NULL,
  `reference` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lessons_speakintro`
--

INSERT INTO `lessons_speakintro` VALUES(2, 'CÃ¢u thá»© 1', '<span style="font-family:times new roman,times,serif;">The examiners introduce themselves and then one examiner asks you and your partner to say your names and spell them. This examiner then asks you questions about yourself, your daily life, interests, etc.</span>', '', 'SÃ¡ch PET 3 - Ebook', '04-23-2013 07:34', 5, 65, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_speaksentence`
--

CREATE TABLE `lessons_speaksentence` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `audio` text collate utf8_unicode_ci NOT NULL,
  `sentence` text collate utf8_unicode_ci NOT NULL,
  `translate` text collate utf8_unicode_ci NOT NULL,
  `reference` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lessons_speaksentence`
--

INSERT INTO `lessons_speaksentence` VALUES(2, 'BÃ i thá»© 1', 'uploaded/lessons_speaksentence/1 - Track01.mp3', '<span style="font-family:comic sans ms,cursive;"><strong>&nbsp;&nbsp; BOB&#39;S DAY AT WORK</strong></span><br />\r\n<span style="font-family:georgia,serif;"><em>Bob works as a manager in a furniture store. Peter, his boss, is not happy about sales. Bob&#39;s new advertising campaign hasn&#39;t helped. Peter decides to fire him.</em></span><br />\r\n<br />\r\n<em>Peter: </em>Bob, I hate to break the news, but our sales were down again last month.<br />\r\n<em>Bob</em>: Down again, Peter?<br />\r\n<em>Peter</em>: Yeah, These days, everybody&#39;s shopping at our competition, Honest Abe&#39;s Furniture Store.<br />\r\n<em>Bob</em>: But everything in there <strong>costs an arm and a leg!</strong><br />\r\n<em>Peter</em>: That&#39;s true. They do charge <strong>top dollar</strong>.<br />\r\n<em>Bob</em>: But everything in there <strong>costs an arm and a leg</strong>!<br />\r\n<em>Peter</em>: That&#39;s true. They do charge <strong>top dollar.</strong><br />\r\n<em>Bob</em>: And their salespeople are very strange. They really <strong>give me the creeps!</strong><br />\r\n<em>Peter</em>: Well, they must be doing something right over there. Meanwhile, we&#39;re <strong>about to go belly-up.</strong><br />\r\n<em>Bob</em>: I&#39;m sorry to hear that. I thought my new advertising campaign would <strong>save the day.</strong><br />\r\n<em>Peter</em>: Let&#39;s face it: your advertising campaign was a <strong>real flop</strong>.<br />\r\n<em>Bob</em>: Well then I&#39;ll <strong>go back to the drawing board</strong>.<br />\r\n<em>Peter</em>: It&#39;s too late for that. You&#39;re fired!<br />\r\n<em>Bob</em>: What? You&#39;re <strong>giving me the ax?</strong><br />\r\n<em>Peter</em>: Yes, I&#39;ve already found a new manager. She&#39;s as<strong> sharp as a tack</strong>.<br />\r\n<em>Bob</em>: Can&#39;t we even <strong>talk this over</strong>?<strong> After all</strong>, I&#39;ve been working here for 10 years!<br />\r\n<em>Peter</em>: There&#39;s <strong>no point in</strong> arguing, Bob. I&#39;ve already <strong>made up my mind</strong>.<br />\r\n<em>Bob</em>: Oh well, <strong>at least</strong> I won&#39;t have to <strong>put up with</strong> your non-sense anymore! Good-bye to you and good-bye to this <strong>dead-end job</strong>.<br />\r\n<em>Peter</em>: Please leave before I <strong>lose my temper</strong>!<br />\r\n&nbsp;\r\n<table border="1" cellpadding="1" cellspacing="1" height="80" width="600">\r\n	<tbody>\r\n		<tr>\r\n			<td style="text-align: center;"><strong>IDIOMS - LESSON 1</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>about to</strong> - ready to; on the verge of<br />\r\n			EXAMPLE 1: It&#39;s a good thing Bob left the furniture store when he did.<br />\r\n			Peter was so angry, he was <strong>about to</strong> throw a dining room chair at him.<br />\r\n			EXAMPLE 2: I&#39;m glad you&#39;re finally home. I was just <strong>about to</strong> have dinner without you.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>after all</strong> - despite everything; when everything has been con-sidered; the fact is<br />\r\n			EXAMPLE 1: You&#39;d better invite Ed to your party. <strong>After all</strong>, he&#39;s a good friend.<br />\r\n			EXAMPLE 2: It doesn&#39;t matter what your boss thinks of you. <strong>After all</strong>, you&#39;re going to quit your job anyway.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>at least</strong> - anyway; the <em>good </em>thing is that....<br />\r\n			EXAMPLE 1: We&#39;re run out of coffee, but <strong>at least</strong> we still have tea.<br />\r\n			EXAMPLE 2: Tracy can&#39;t afford to buy a car, but <strong>at least</strong> she has a good bicycle.<br />\r\n			NOTE: The second definition of this phrase is &quot;no less than&quot;: There were <strong>at least</strong> 300 people waiting in line to buy concert tickets.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>(to) break the news</strong> - to make something known<br />\r\n			EXAMPLE 1: Samantha and Michael are getting married, but they haven&#39;t yet <strong>broken the news</strong> to their parents.<br />\r\n			EXAMPLE 2: You&#39;d better<strong> break the news</strong> to your father carefully. After all, you don&#39;t want him to have a heart attack!</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>(to) cost an arm and a leg</strong> - to be very expensive<br />\r\n			EXAMPLE 1: A college education in America <strong>costs an arm and a leg.</strong><br />\r\n			EXAMPLE 2: All of the furniture at Honest Abe&#39;s <strong>costs an arm and a leg!</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>dead-end job</strong> - a job that won&#39;t lead to anything else<br />\r\n			EXAMPLE 1: Diane realized that working as a cashier was a <strong>dead-end job</strong>.<br />\r\n			EXAMPLE 2: Jim worked many <strong>dead-end jobs</strong> before finally deciding to start his own business.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '', 'SÃ¡ch SpeakEnglishLAA.pdf', '04-27-2013 13:38', 6, 76, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_speaktopic`
--

CREATE TABLE `lessons_speaktopic` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `topic_name` text collate utf8_unicode_ci NOT NULL,
  `sample` text collate utf8_unicode_ci NOT NULL,
  `media` text collate utf8_unicode_ci NOT NULL,
  `translate` text collate utf8_unicode_ci NOT NULL,
  `reference` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lessons_speaktopic`
--

INSERT INTO `lessons_speaktopic` VALUES(1, 'Chá»§ Ä‘á» 1', '<span style="color:#0000CD;"><strong><span style="font-family: times new roman,times,serif;">Your favourite entertainment in your free time.<br />\r\n(Tr&ograve; giáº£i tr&iacute; báº¡n th&iacute;ch trong thá»i gian ráº£nh)</span></strong></span>', '<span style="color:#008000;"><span style="font-family: times new roman,times,serif;">I studies during this week, and I have only Sunday of, I go to the school every morning. Sometime I was work even on Sunday. And I am attending an evening class improve my English. I am very busy with my study. When I have free time, I read book, newspaper, magazine, listen to music. There are many kinds of music available on tapes including everything: rock, pop, dance,...<br />\r\nSometime I go to shopping with my friends and my relative. We often go to the supermaket example: Big C, Vincom, Metro,...<br />\r\nSometime I go to the zoo, park,... but my favourite entertainment is collection stamp, I collection stamp when I 15 years old. Now I have 500 in collection stamp: bird, tree, person,...</span></span><br />\r\n<br />\r\n<span style="font-family:times new roman,times,serif;"><strong>(Translate)</strong></span><br />\r\n<span style="color:#008000;"><span style="font-family: times new roman,times,serif;">T&ocirc;i báº­n há»c suá»‘t trong tuáº§n, v&agrave; t&ocirc;i chá»‰ c&oacute; má»™t ng&agrave;y nghá»‰ chá»§ nháº­t. T&ocirc;i Ä‘i Ä‘áº¿n trÆ°á»ng má»—i buá»•i s&aacute;ng, Ä‘&ocirc;i khi t&ocirc;i pháº£i l&agrave;m viá»‡c ngay cáº£ ng&agrave;y chá»§ nháº­t. V&agrave; t&ocirc;i tham dá»± má»™t lá»›p há»c buá»•i tá»‘i Ä‘á»ƒ cáº£i thiá»‡n tiáº¿ng Anh cho báº£n th&acirc;n. T&ocirc;i ráº¥t báº­n rá»™n vá»›i viá»‡c há»c táº­p. Khi t&ocirc;i c&oacute; thá»i gian ráº£nh, t&ocirc;i Ä‘á»c s&aacute;ch, táº¡p ch&iacute;, nghe nháº¡c. C&oacute; nhiá»u loáº¡i &acirc;m nháº¡c c&oacute; sáºµn tr&ecirc;n bÄƒng nhÆ°: rock, pop, dance,...<br />\r\nÄ&ocirc;i khi, t&ocirc;i Ä‘i mua sáº¯m vá»›i báº¡n b&egrave; v&agrave; ngÆ°á»i th&acirc;n. Ch&uacute;ng t&ocirc;i thÆ°á»ng xuy&ecirc;n Ä‘i Ä‘áº¿n c&aacute;c si&ecirc;u thá»‹ nhÆ°: BigC, Vincom, Metro,...<br />\r\nÄ&ocirc;i khi t&ocirc;i Ä‘i Ä‘áº¿n vÆ°á»n th&uacute;, c&ocirc;ng vi&ecirc;n,.. nhÆ°ng giáº£i tr&iacute; y&ecirc;u th&iacute;ch cá»§a t&ocirc;i l&agrave; sÆ°u táº­p tem. T&ocirc;i sÆ°u táº­p tem khi t&ocirc;i 15 tuá»•i. B&acirc;y giá» t&ocirc;i c&oacute; 500 con tem trong bá»™ sÆ°u táº­p: chim, c&acirc;y, ngÆ°á»i,...</span></span><br />\r\n<br />\r\n&nbsp;', '', '', 'tailieu.vn', '04-26-2013 00:39', 6, 67, 1);
INSERT INTO `lessons_speaktopic` VALUES(2, 'Chá»§ Ä‘á» 2', '<span style="color:#0000CD;"><span style="font-family: times new roman,times,serif;"><strong>Your idea of an interesting job.</strong></span></span><br />\r\n<span style="font-family:times new roman,times,serif;"><span style="color: rgb(0, 0, 205);"><strong>(&Yacute; kiáº¿n cá»§a báº¡n vá» má»™t c&ocirc;ng viá»‡c th&uacute; vá»‹)</strong></span></span>', '<span style="color:#008000;"><span style="font-family: times new roman,times,serif;">To prepare for a good job, we must be highly education acording to me. Most people who are going to do professional work must have additional formal education beyond the high school level.<br />\r\nThe amount of time needed for with their education varies acording to me the profession for with they are preparing themselves. They must go to colleges and universities to became an engineer, a architect, a lawyer, a professor, a science.<br />\r\nI opinion an interesting job it to be helpful to ourselves, our families, our country and the society.<br />\r\nWe will be able to choose a career that suits us best and to lead a happy and useful life. As for my career: I would like to become a businessman, I will travel to foreign countries to transact business, visit various places of interest, contact with all kinds of people and have chances to communicate with them in english.<br />\r\nI hope that my dream would came true in the very near future.</span></span><br />\r\n<br />\r\n<span style="font-family:times new roman,times,serif;"><strong>(Translate)</strong></span><br />\r\n<span style="color:#008000;"><span style="font-family: times new roman,times,serif;">Äá»ƒ chuáº©n bá»‹ tá»‘t cho má»™t c&ocirc;ng viá»‡c, theo t&ocirc;i ch&uacute;ng ta pháº£i Ä‘&aacute;nh gi&aacute; cao gi&aacute;o dá»¥c. Háº§u háº¿t nhá»¯ng ngÆ°á»i l&agrave;m c&ocirc;ng t&aacute;c chuy&ecirc;n m&ocirc;n pháº£i c&oacute; th&ecirc;m tri thá»©c gi&aacute;o dá»¥c vÆ°á»£t ra ngo&agrave;i cáº¥p trung há»c.<br />\r\nLÆ°á»£ng thá»i gian gi&aacute;o dá»¥c cáº§n thiáº¿t cá»§a há» thay Ä‘á»•i t&ugrave;y theo má»©c chuy&ecirc;n m&ocirc;n nghá» nghiá»‡p. Há» pháº£i Ä‘i Ä‘áº¿n c&aacute;c trÆ°á»ng cao Ä‘áº³ng v&agrave; Ä‘áº¡i há»c Ä‘á»ƒ trá»Ÿ th&agrave;nh má»™t ká»¹ sÆ°, má»™t kiáº¿n tr&uacute;c sÆ°, má»™t luáº­t sÆ°, má»™t gi&aacute;o sÆ°, má»™t nh&agrave; khoa há»c.<br />\r\n&Yacute; kiáº¿n cá»§a t&ocirc;i vá» m&ocirc;t c&ocirc;ng viá»‡c th&uacute; vá»‹ l&agrave; n&oacute; há»¯u &iacute;ch cho tÆ°Æ¡ng lai báº£n th&acirc;n, gia Ä‘&igrave;nh, Ä‘áº¥t nÆ°á»›c v&agrave; x&atilde; há»™i.<br />\r\nCh&uacute;ng ta sáº½ c&oacute; thá»ƒ chá»n má»™t nghá» nghiá»‡p ph&ugrave; há»£p nháº¥t Ä‘á»ƒ sá»‘ng má»™t cuá»™c sá»‘ng háº¡nh ph&uacute;c v&agrave; há»¯u &iacute;ch.<br />\r\nÄá»‘i vá»›i sá»± nghiá»‡p cá»§a t&ocirc;i : t&ocirc;i muá»‘n trá»Ÿ th&agrave;nh má»™t doanh nh&acirc;n. T&ocirc;i sáº½ Ä‘i du lá»‹ch ra nÆ°á»›c ngo&agrave;i Ä‘á»ƒ giao dá»‹ch kinh doanh, tham quan nhiá»u nÆ¡i, li&ecirc;n láº¡c vá»›i táº¥t cáº£ Ä‘á»‘i t&aacute;c v&agrave; c&oacute; cÆ¡ há»™i Ä‘á»ƒ giao tiáº¿p vá»›i há» báº±ng tiáº¿ng Anh.<br />\r\nT&ocirc;i hy vá»ng ráº±ng Æ°á»›c mÆ¡ cá»§a t&ocirc;i sáº½ th&agrave;nh sá»± tháº­t trong tÆ°Æ¡ng lai ráº¥t gáº§n.</span></span><br />\r\n&nbsp;', '', '', 'tailieu.vn', '04-26-2013 01:44', 6, 68, 1);
INSERT INTO `lessons_speaktopic` VALUES(3, 'Chá»§ Ä‘á» 3', '<strong><span style="color:#0000CD;"><span style="font-family: times new roman,times,serif;">Your favourite sport</span></span></strong><br />\r\n<span style="color:#0000CD;"><span style="font-family: times new roman,times,serif;"><strong>(M&ocirc;n thá»ƒ thao báº¡n y&ecirc;u th&iacute;ch)</strong></span></span>', '<span style="color:#008000;"><span style="font-family: times new roman,times,serif;">Sport is necessary for everyone. Sport not only brings good heath for every body but also brings joy ment for many elderly to live longer so acording to me. Sport is good for our heath.<br />\r\nMost people like sport. So do I, I like sport because sport is my favourite entertainment in my free time. Futhermore sport is good health for me.<br />\r\nI like two sport, it is soccer and badminton. When I have free time I play badminton with my roommate. I play soccer at the last week. I play soccer with my friends class room. We are formation the team football.<br />\r\nI like many football team national example: Manchester United-it football team in england and Real Madrit-it football tram in Spain.<br />\r\nI would like to become a footballer<br />\r\nI wish my dream can be true.</span></span><br />\r\n<br />\r\n<strong><span style="font-family:times new roman,times,serif;">(Translate)</span></strong><br />\r\n<span style="color:#008000;"><span style="font-family: times new roman,times,serif;">Thá»ƒ thao l&agrave; cáº§n thiáº¿t cho táº¥t cáº£ má»i ngÆ°á»i. Theo t&ocirc;i, thá»ƒ thao kh&ocirc;ng chá»‰ mang láº¡i sá»©c khá»e tá»‘t cho cÆ¡ thá»ƒ m&agrave; c&ograve;n mang láº¡i niá»m vui cho nhiá»u ngÆ°á»i cao tuá»•i l&agrave; sá»‘ng l&acirc;u hÆ¡n. Thá»ƒ thso tá»‘t cho sá»©c khá»e cá»§a ch&uacute;ng t&ocirc;i.</span></span><br />\r\n<span style="color:#008000;"><span style="font-family: times new roman,times,serif;">Háº§u háº¿t má»i ngÆ°á»i th&iacute;ch thá»ƒ thao. T&ocirc;i cÅ©ng váº­y, t&ocirc;i th&iacute;ch thá»ƒ thao v&igrave; thá»ƒ thao l&agrave; tr&ograve; giáº£i tr&iacute; t&ocirc;i y&ecirc;u th&iacute;ch trong thá»i gian ráº£nh. HÆ¡n ná»¯a tháº¿ thao tá»‘t cho sá»©c khá»e cá»§a t&ocirc;i.<br />\r\nT&ocirc;i th&iacute;ch hai m&ocirc;n thá»ƒ thao, Ä‘&oacute; l&agrave; b&oacute;ng Ä‘&aacute; v&agrave; cáº§u l&ocirc;ng. Khi t&ocirc;i c&oacute; thá»i gian ráº£nh t&ocirc;i chÆ¡i cáº§u l&ocirc;ng vá»›i báº¡n c&ugrave;ng ph&ograve;ng. T&ocirc;i chÆ¡i b&oacute;ng Ä‘&aacute; v&agrave;o cuá»‘i tuáº§n, t&ocirc;i Ä‘&aacute; b&oacute;ng vá»›i báº¡n b&egrave; cá»§a lá»›p t&ocirc;i. Ch&uacute;ng t&ocirc;i Ä‘&atilde; h&igrave;nh th&agrave;nh má»™t Ä‘á»™i tuyá»ƒn b&oacute;ng Ä‘&aacute;.<br />\r\nT&ocirc;i th&iacute;ch nhiá»u Ä‘á»™i tuyá»ƒn b&oacute;ng Ä‘&aacute; quá»‘c gia nhÆ°: Manchester United - n&oacute; l&agrave; Ä‘á»™i tuyá»ƒn b&oacute;ng Ä‘&aacute; á»Ÿ Anh v&agrave; Real Madrit - n&oacute; l&agrave; Ä‘á»™i tuyá»ƒn b&oacute;ng Ä‘&aacute; á»Ÿ T&acirc;y Ban Nha.<br />\r\nT&ocirc;i muá»‘n trá»Ÿ th&agrave;nh má»™t cáº§u thá»§ b&oacute;ng Ä‘&aacute; chuy&ecirc;n nghiá»‡p<br />\r\nT&ocirc;i mong Æ°á»›c mÆ¡ cá»§a t&ocirc;i c&oacute; thá»ƒ trá»Ÿ th&agrave;nh hiá»‡n thá»±c</span></span>', '', '', 'tailieu.vn', '04-26-2013 11:13', 6, 69, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_writeanswer`
--

CREATE TABLE `lessons_writeanswer` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `content_question` text collate utf8_unicode_ci NOT NULL,
  `content_answer` text collate utf8_unicode_ci NOT NULL,
  `reference` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lessons_writeanswer`
--

INSERT INTO `lessons_writeanswer` VALUES(2, 'CÃ¢u 1', '<ul>\r\n	<li>- Your English teacher has asked you to write a story</li>\r\n	<li>- Your story must begin with sentence:</li>\r\n</ul>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family:comic sans ms,cursive;"><strong> I wanted to leave the city as soon as possible</strong></span>\r\n\r\n<ul>\r\n	<li>- Write your <strong>story</strong> in about 100 words <strong>on your answer sheet.</strong></li>\r\n</ul>\r\n', '<strong>Sample D:</strong><br />\r\n<span style="font-family:comic sans ms,cursive;">I wanted to leave the city as soon as possible. Because when I came here I felt very bad. The weather was terrible. Actually I don&#39;t like rain and windy. But the city it rained everyday and windy was very strong: Most of all I had terrible homesick.Everyday I was groomy. But two month later I started enjoying my life and it didn&#39;t matter about weather no more. And now I changed my mind about this city. Here is very exciting and interesting. I can meet another country people and make friends and also I can travel somewhere. With someone After that I&#39;ll have various experiences. It will be good for me. Because I will understand some situation or someone&#39;s very special opinion. For I don&#39;t regret. I will enjoy this time.</span><br />\r\n<br />\r\n<strong>Sample E:</strong><br />\r\n<span style="font-family:comic sans ms,cursive;">I wanted to leave the city as soon as possible. I&#39;ve spend all my money. To leave in London is very expensive. The accomodation costs near 100 pounds a week, a travel card 19 pounds. The prices on food in the restaurants are to high, it needs to take 30 pounds to make a super. What about the sight seeings its expensive too, for example to visit a Dali collection it costs 8 pounds. The pubs are very expensive too.<br />\r\nThe traffic on the streets is terrible, crazy motor cycles didn&#39;t give me to sleep. Sometimes the buses didn&#39;t stop for my request, and the streets were very dirty. That&#39;s why I wanted to leave the city as soon as possible.</span><br />\r\n<br />\r\n<strong>Sample F:</strong><br />\r\nI wanted to leave the city as soon as possible I spent quite a long time in here but I never like it. Everywhere is so dirty that I can&#39;t sit even in a train. People is very unfriendly, I could say they are nasty. The food is bad the weather is horrible. The shops just open five hours a day. Could you imagine more worse place than here? But I&#39;d stay here for one reason. It&#39;s my brother. I&#39;ve a evidence he is still in this city. I must catch him and take him home. I haven&#39;t a good relationship with my brother. But my mother is going to die. She hopes to see him again. I&#39;m not sure if I can catch him before her death. But I must do. I must...<br />\r\n&nbsp;', 'SÃ¡ch PET 3 - Ebook', '04-22-2013 00:06', 3, 59, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_writearticle`
--

CREATE TABLE `lessons_writearticle` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `suggestion` text collate utf8_unicode_ci NOT NULL,
  `requirement` text collate utf8_unicode_ci NOT NULL,
  `content_article` text collate utf8_unicode_ci NOT NULL,
  `sample` text collate utf8_unicode_ci NOT NULL,
  `reference` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lessons_writearticle`
--

INSERT INTO `lessons_writearticle` VALUES(5, 'CÃ¢u 1', 'You are going to spend some time with your Scottish friend Douglas next Saturday.', '<strong>Write an email to spend some time with your Scottish friend Douglas next Saturday.</strong><br />\r\n<strong>- arrange to meet Douglas next Saturday<br />\r\n- suggest something you could do together<br />\r\n- say how long you will be able to spend with him<br />\r\n<br />\r\nWrite 35-45 words on your answer sheet</strong>', '', '<span style="font-family:comic sans ms,cursive;"><strong><span style="font-family:arial,helvetica,sans-serif;">Sample A</span></strong><br />\r\nHi Douglas</span><br />\r\n<span style="font-family:comic sans ms,cursive;">How are you?<br />\r\nI&#39;m writing you from in London, i&#39;m here for 2 weeks vacation and &#39;id like to meet you on next Saturday, if it&#39;s possible for you. There&#39;s a nice art exhibition that we could see at the National gallery. We can stay together just until the evening. Write me back as soon as you can.</span><br />\r\n<br />\r\n<strong>Sample B</strong><br />\r\n<span style="font-family:comic sans ms,cursive;">Dear Douglas</span><br />\r\n<span style="font-family:comic sans ms,cursive;">Hello Douglas. How are you these days. I&#39;m good. By the way what are you going to next Saturday? If you have time shall we meet on next Saturday? If you ok. Please tell me how long will you be able to spend with me? I&#39;d like to buy new jazz CD. But I don&#39;t know which one is the best. So please recommend me! I hope you return your mail soon. Please say hello to your family.<br />\r\nSinsially<br />\r\nSumiyo</span><br />\r\n<br />\r\n<strong>Sample C</strong><br />\r\n<span style="font-family:trebuchet ms,helvetica,sans-serif;">Dear Douglas:</span><br />\r\n<span style="font-family:trebuchet ms,helvetica,sans-serif;">Hi? It&#39;s me, How are you?</span><br />\r\n<span style="font-family:comic sans ms,cursive;">I&#39;ll go to Scotland next month with my friend. So I&#39;m going to meet you on Friday at 6pm. I&#39;ll waiting you in the startbox there just in Oxford street. Could you take some information catalog or guid book of Scotland. You should tell me about travel rote and other many thing.<br />\r\nBuy the way I tell you I only spend with you for 2 hours because I have to go to my part time work. But I&#39;ll pay for you nice dinner.<br />\r\nSee you bye.<br />\r\nLove<br />\r\nJin Xue Hua</span><br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;', 'SÃ¡ch PET 3 - Ebook', '04-19-2013 15:28', 2, 54, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_writeblank`
--

CREATE TABLE `lessons_writeblank` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `question` text collate utf8_unicode_ci NOT NULL,
  `reference` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `lessons_writeblank`
--

INSERT INTO `lessons_writeblank` VALUES(15, 'CÃ¢u 1 - Going to the theatre', '<strong>1)</strong> Theatre tickets are more expensive than last year.<br />\r\n&nbsp;<strong>&nbsp;&nbsp; Last year, theatre tickets</strong>...............................................<strong>than they are now.</strong>', 'SÃ¡ch PET 3 - Ebook', '05-19-2013 10:43', 7, 102, 1);
INSERT INTO `lessons_writeblank` VALUES(16, 'CÃ¢u 2 - Going to the theatre', '<strong>2)</strong> The booking office telephone is often engaged.<br />\r\n&nbsp;&nbsp;<strong>&nbsp; It is often</strong>.................................................<strong>phone the booking office</strong>.', 'SÃ¡ch PET 3 - Ebook', '05-19-2013 10:59', 7, 102, 1);
INSERT INTO `lessons_writeblank` VALUES(17, 'CÃ¢u 3 - Going to the theatre', '<strong>3) </strong>Peter said, &#39;Why don&#39;t you go to the booking office yourself?&#39;<br />\r\n&nbsp;&nbsp;&nbsp; <strong>Peter saild, &#39;How</strong>.................................................<strong>to the booking office yourself?&#39;</strong>', 'SÃ¡ch PET 3 - Ebook', '05-19-2013 11:15', 7, 102, 1);
INSERT INTO `lessons_writeblank` VALUES(18, 'CÃ¢u 4 - Going to the theatre', '<strong>4) </strong>Many theatres accept credit cards.<br />\r\n&nbsp;&nbsp;&nbsp; <strong>At many theatres you</strong>................................................<strong>credit card</strong>.', 'SÃ¡ch PET 3 - Ebook', '05-19-2013 11:21', 7, 102, 1);
INSERT INTO `lessons_writeblank` VALUES(19, 'CÃ¢u 5 - Going to the theatre', '<strong>5) </strong>You can&#39;t smoke in the theatre.<br />\r\n&nbsp;<strong>&nbsp;&nbsp; Smoking.</strong>....................................................<strong>in the theatre.</strong>', 'SÃ¡ch PET 3 - Ebook', '05-19-2013 11:22', 7, 102, 1);
INSERT INTO `lessons_writeblank` VALUES(20, 'CÃ¢u 1 - Learning Italian', '<strong>1</strong>. After seeing an advertisement for Italian lessons, Daniel decided to go<br />\r\n<strong>Daniel</strong> ..............................................<strong>an advertisement for Italian lessons and then decided to go.</strong>', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 13:38', 7, 107, 1);
INSERT INTO `lessons_writeblank` VALUES(21, 'CÃ¢u 2 - Learning Italian', '<strong>2</strong>. There are fifteen other students in his Italian class<br />\r\n<strong>His Italian class</strong> ..............................................<strong>fifteen other students in it</strong>.', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 13:57', 7, 107, 1);
INSERT INTO `lessons_writeblank` VALUES(22, 'CÃ¢u 3 - Learning Italian', '<strong>3</strong>. Daniel thinks that speaking Italian is easier than writing it<br />\r\n<strong>Daniel doesn&#39;t think that speaking is</strong> .................................................<strong>as writing Italian</strong>', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 14:24', 7, 107, 1);
INSERT INTO `lessons_writeblank` VALUES(23, 'CÃ¢u 4 - Learning Italian', '<strong>4</strong>. Daniel&#39;s teacher is Italian and her name&#39;s Chiara Paolozzi<br />\r\n<strong>Daniel&#39;s teacher is Italian and she&#39;s </strong>............................................... <strong>Chiara Paolozzi</strong>', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 14:28', 7, 107, 1);
INSERT INTO `lessons_writeblank` VALUES(24, 'CÃ¢u 5 - Learning Italian', '<strong>5</strong>. The students are given two hours of homework each week<br />\r\n<strong>Each week Chiara</strong> ............................................. <strong>the students two hours of homework</strong>', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test1', '05-27-2013 14:57', 7, 107, 1);
INSERT INTO `lessons_writeblank` VALUES(25, 'CÃ¢u 1 - BÃ i test 2', '<strong>1.</strong> It&#39;s six months since I last went swimming.<br />\r\n<strong>I</strong> .............................................. <strong>been swimming for six months.</strong><br />\r\n&nbsp;', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test6', '06-15-2013 14:39', 7, 108, 1);
INSERT INTO `lessons_writeblank` VALUES(26, 'CÃ¢u 2 - BÃ i test 2', '<strong>2.&nbsp;</strong>The new pool is near to my home.<br />\r\n<strong>It&#39;s not</strong> ............................................. <strong>the new pool to my home.</strong>', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test6', '06-15-2013 14:53', 7, 108, 1);
INSERT INTO `lessons_writeblank` VALUES(27, 'CÃ¢u 3 - BÃ i test 2', '<strong>3.</strong> If you can&#39;t swim, you&#39;re not allowed in the deep end.<br />\r\n<strong>You&#39;re not allowed in the deep end</strong> ..................................... <strong>you can swim.</strong><br />\r\n&nbsp;', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test6', '06-15-2013 14:56', 7, 108, 1);
INSERT INTO `lessons_writeblank` VALUES(28, 'CÃ¢u 4 - BÃ i test 2', '<strong>4.</strong> My friend Sam wanted me to go swimming with him<br />\r\n<strong>&#39;Why</strong> ......................................... <strong>come swimming with me?&#39; suggested Sam.</strong><br />\r\n&nbsp;', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test6', '06-15-2013 15:08', 7, 108, 1);
INSERT INTO `lessons_writeblank` VALUES(29, 'CÃ¢u 5 - BÃ i test 2', '<strong>5.</strong> I didn&#39;t go swimming with Sam because I was very busy.<br />\r\n<strong>I was</strong> ............................................. <strong>busy to go swimming with Sam.</strong>', 'SÃ¡ch CAMBRIDGE_2010_Preliminary.English.Test6', '06-15-2013 15:12', 7, 108, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `keyword` text collate utf8_unicode_ci NOT NULL,
  `description` text collate utf8_unicode_ci NOT NULL,
  `content` text collate utf8_unicode_ci NOT NULL,
  `author` text collate utf8_unicode_ci NOT NULL,
  `createDate` varchar(30) collate utf8_unicode_ci NOT NULL,
  `image` text collate utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `typeID` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` VALUES(15, '<strong>Sinh vi&ecirc;n Khoa C&ocirc;ng nghá»‡ th&ocirc;ng tin tham dá»± cuá»™c thi MOS Word Championship 2013</strong>', '', 'MICROSOFT OFFICE SPECIALIST WORLD CHAMPIONSHIP l&agrave; cuá»™c thi tin há»c vÄƒn ph&ograve;ng Microsoft Office do Certiport tá»• chá»©c tr&ecirc;n pháº¡m vi to&agrave;n tháº¿ giá»›i nháº±m lá»±a chá»n ra nhá»¯ng á»©ng vi&ecirc;n xuáº¥t sáº¯c á»Ÿ má»—i quá»‘c gia Ä‘á»ƒ tham dá»± v&ograve;ng chung káº¿t tháº¿ giá»›i táº¡i Má»¹.', 'Cuá»™c thi nháº±m mang láº¡i má»™t s&acirc;n chÆ¡i l&agrave;nh máº¡nh v&agrave; mang t&iacute;nh cáº¡nh tranh Ä‘á»ƒ há»c sinh, sinh vi&ecirc;n tr&ecirc;n to&agrave;n tháº¿ giá»›i thá»ƒ hiá»‡n kháº£ nÄƒng sá»­ dá»¥ng c&aacute;c á»©ng dá»¥ng Microsoft Office v&agrave; nháº­n Ä‘Æ°á»£c sá»± c&ocirc;ng nháº­n cho t&agrave;i nÄƒng cá»§a m&igrave;nh tá»« Microsoft, Certiport cÅ©ng nhÆ° nhá»¯ng tá»• chá»©c uy t&iacute;n trong v&agrave; ngo&agrave;i nÆ°á»›c.', 'ÄÃ o Tiáº¿n TÃº', '03-26-2013 07:22', 'uploaded/news/Office Specialist.png', 1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(11) NOT NULL auto_increment,
  `catName` text collate utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `ParentID` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` VALUES(2, '<strong>Tin tá»©c hoáº¡t Ä‘á»™ng</strong>', 1, 0);
INSERT INTO `news_category` VALUES(3, '<strong>Tin tá»©c Ä‘&agrave;o táº¡o</strong>', 1, 0);
INSERT INTO `news_category` VALUES(4, '<strong>Tin tá»©c gi&aacute;o dá»¥c</strong>', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id` int(11) NOT NULL auto_increment,
  `test_date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `reading_score` int(11) NOT NULL,
  `writing_score` int(11) NOT NULL,
  `listening_score` int(11) NOT NULL,
  `total_score` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `score`
--

INSERT INTO `score` VALUES(3, '2013-06-06 11:55:13', 5, 0, 8, 13, 7, 107);
INSERT INTO `score` VALUES(4, '2013-06-05 23:48:24', 6, 0, 4, 10, 8, 107);
INSERT INTO `score` VALUES(5, '2013-06-06 08:36:28', 0, 0, 0, 0, 8, 108);

-- --------------------------------------------------------

--
-- Table structure for table `userfile`
--

CREATE TABLE `userfile` (
  `id` int(11) NOT NULL auto_increment,
  `userid` int(11) NOT NULL,
  `speakintid` int(11) NOT NULL,
  `speakintfile` text collate utf8_unicode_ci NOT NULL,
  `speakintpoint` int(11) NOT NULL,
  `speaktopid` int(11) NOT NULL,
  `speaktopfile` text collate utf8_unicode_ci NOT NULL,
  `speaktoppoint` int(11) NOT NULL,
  `writeansid` int(11) NOT NULL,
  `writeansfile` text collate utf8_unicode_ci NOT NULL,
  `writeanspoint` int(11) NOT NULL,
  `writeartid` int(11) NOT NULL,
  `writeartfile` text collate utf8_unicode_ci NOT NULL,
  `writeartpoint` int(11) NOT NULL,
  `evaluate` text collate utf8_unicode_ci NOT NULL,
  `date` varchar(30) collate utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `userfile`
--

INSERT INTO `userfile` VALUES(12, 6, 65, 'uploaded/lessons_speakintro/dx01.mp3', 0, 67, 'uploaded/lessons_speaktopic/xyz.rar', 0, 0, '', 0, 0, '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `useronline`
--

CREATE TABLE `useronline` (
  `id` int(11) NOT NULL auto_increment,
  `userid` int(11) NOT NULL,
  `ip_address` varchar(50) collate utf8_unicode_ci NOT NULL,
  `last_visit` varchar(50) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4457 ;

--
-- Dumping data for table `useronline`
--

INSERT INTO `useronline` VALUES(4434, 0, '113.167.221.70', '1377143014');
INSERT INTO `useronline` VALUES(4435, 0, '113.167.221.70', '1377143015');
INSERT INTO `useronline` VALUES(4436, 0, '113.167.221.70', '1377143051');
INSERT INTO `useronline` VALUES(4437, 0, '113.167.221.70', '1377143055');
INSERT INTO `useronline` VALUES(4438, 0, '113.167.221.70', '1377143146');
INSERT INTO `useronline` VALUES(4439, 39, '113.167.221.70', '1377143167');
INSERT INTO `useronline` VALUES(4440, 39, '113.167.221.70', '1377143172');
INSERT INTO `useronline` VALUES(4441, 39, '113.167.221.70', '1377143176');
INSERT INTO `useronline` VALUES(4442, 39, '113.167.221.70', '1377143248');
INSERT INTO `useronline` VALUES(4443, 39, '113.167.221.70', '1377143255');
INSERT INTO `useronline` VALUES(4444, 39, '113.167.221.70', '1377143258');
INSERT INTO `useronline` VALUES(4445, 39, '113.167.221.70', '1377143266');
INSERT INTO `useronline` VALUES(4446, 39, '113.167.221.70', '1377143280');
INSERT INTO `useronline` VALUES(4447, 39, '113.167.221.70', '1377143292');
INSERT INTO `useronline` VALUES(4448, 39, '113.167.221.70', '1377143295');
INSERT INTO `useronline` VALUES(4449, 0, '113.171.171.154', '1377143346');
INSERT INTO `useronline` VALUES(4450, 0, '113.171.171.154', '1377143359');
INSERT INTO `useronline` VALUES(4451, 0, '113.171.171.154', '1377143368');
INSERT INTO `useronline` VALUES(4452, 0, '113.171.171.154', '1377143372');
INSERT INTO `useronline` VALUES(4453, 0, '113.171.171.154', '1377143377');
INSERT INTO `useronline` VALUES(4454, 0, '113.171.171.154', '1377143404');
INSERT INTO `useronline` VALUES(4455, 39, '113.167.221.70', '1377143904');
INSERT INTO `useronline` VALUES(4456, 39, '113.167.221.70', '1377143905');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` text collate utf8_unicode_ci NOT NULL,
  `password` text collate utf8_unicode_ci NOT NULL,
  `name` text collate utf8_unicode_ci NOT NULL,
  `date` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `sex` text collate utf8_unicode_ci NOT NULL,
  `address` text collate utf8_unicode_ci NOT NULL,
  `country` text collate utf8_unicode_ci NOT NULL,
  `place_of_work` text collate utf8_unicode_ci NOT NULL,
  `tel` varchar(20) collate utf8_unicode_ci NOT NULL,
  `avatar` text collate utf8_unicode_ci NOT NULL,
  `email` text collate utf8_unicode_ci NOT NULL,
  `RoleID` text collate utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(5, 'daotientu2801', 'd25f0708e664d371c56a2bcff6904c6f', 'ÄÃ€O TIáº¾N TÃš', 0, 0, 0, 'Nam', '45 Tá»• 5 LÆ°Æ¡ng YÃªn', 'HÃ  Ná»™i', 'Viá»‡n Äáº¡i Há»c Má»Ÿ HÃ  Ná»™i', '01688092229', '', 'daotientu@gmail.com', 'Admin', 0);
INSERT INTO `users` VALUES(7, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 0, 0, 0, 'Nam', '96 Äá»‹nh CÃ´ng - HÃ  Ná»™i', '', '', '01688092229', 'uploaded/avatar/i_icon_minipost.gif', 'daotientu@gmail.com', 'Admin', 0);
INSERT INTO `users` VALUES(8, 'hainole', 'c56d0e9a7ccec67b4ea131655038d604', 'Ho Thanh Hai', 0, 0, 0, 'Nam', 'HÃ  ÄÃ´ng, HÃ  Ná»™i', 'HÃ  Ná»™i', 'Viá»‡n ÄH Má»Ÿ HN', '0436883377', '', 'thanhhaivphd@facebook.com', 'Admin', 1);
INSERT INTO `users` VALUES(9, 'trungchoi', '0589480b4e2f0152a4ad712e55c5ef7b', 'Trung Vu Thanh Nguyen', 0, 0, 0, 'Nam', 'SÃ i Äá»“ng, Long BiÃªn, HÃ  Ná»™i.', 'Viá»‡t Nam', '', '0985578664', '', 'nguyenvuthanhtrung@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(10, 'trungchoi1', '1a2bfe64abde5c0491b56fdc07482d44', 'Trung Vu Thanh Nguyen', 0, 0, 0, 'Nam', 'SÃ i Äá»“ng, Long BiÃªn, HÃ  Ná»™i.', 'Viá»‡t Nam', '', '0985578664', '', 'nguyenvuthanhtrung@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(11, 'fidodaica1102', 'e10adc3949ba59abbe56e057f20f883e', 'ÄÃ o Anh TÃ i', 0, 0, 0, 'Nam', '107 HÃ ng ÄÃ o - HÃ  Ná»™i', '', '', '01686326049', '', 'fido_sad_1991@yahoo.com', 'Student', 0);
INSERT INTO `users` VALUES(12, 'tungn6504', '8cc60e71fd7a480d9ffc7114582a9003', 'Nguyá»…n VÅ© TÃ¹ng', 0, 0, 0, 'Nam', '49B - KhÆ°Æ¡ng Háº¡', 'HÃ  Ná»™i', 'ÄH Má»Ÿ HÃ  Ná»™i', '01656226909', '', 'tungn6504@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(13, 'hathai', 'e3eed0ae3c3e7b8fca09f60de5221e7b', 'Nguyá»…n ThÃ¡i HÃ ', 0, 0, 0, 'Ná»¯', 'Thá»¥y DÃ¢n, ThÃ¡i Thá»¥y, ThÃ¡i BÃ¬nh', '', '', '0985620028', '', 'thaihavannhi@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(14, 'Kuzze', '787c2291d5c020b9f46349a1ae3abdfe', 'Khá»‰ BÃ´ng', 0, 0, 0, 'Ná»¯', 'XuÃ¢n Thá»§y - Cáº§u Giáº¥y', 'HÃ  Ná»™i', '', '0989640292', '', 'khibong92@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(15, 'hoanhaha', 'afa0511c134699ac9d6ac98bbf956225', 'Nguyá»…n CÃ´ng HoÃ n', 0, 0, 0, '', 'Thá»¥y LÃ¢m -ÄÃ´ng Anh', 'HÃ  Ná»™i', 'Open University', '01643255986', '', 'nguyenconghoanbk10@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(16, 'anhtuan', 'e10adc3949ba59abbe56e057f20f883e', 'tuan tran', 0, 0, 0, 'Nam', 'Viá»‡n Äáº¡i Há»c Má»Ÿ HÃ  Ná»™i', 'HÃ  Ná»™i', 'Viá»‡n Äáº¡i Há»c Má»Ÿ HÃ  Ná»™i', '0123232334', '', 'at_tb90@yahoo.com', 'Student', 0);
INSERT INTO `users` VALUES(17, 'designer.k91', 'ab29489cd803ba50231b2e013d1aacf8', 'Hero', 0, 0, 0, 'Nam', '24 kim Ä‘á»“ng, hoÃ ng mai', 'hÃ  ná»™i', 'Viá»‡n Äáº¡i há»c Má»Ÿ HÃ  Ná»™i', '01656053331', '', 'designer.k91@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(18, 'Mr.TienTu', '25d55ad283aa400af464c76d713c07ad', 'ÄÃ o Tiáº¿n TÃº', 0, 0, 0, '', 'HÃ  Ná»™i, Viá»‡t Nam.', '', '', '0988888888', '', 'hitsmanhno1@yahoo.com', 'Student', 0);
INSERT INTO `users` VALUES(19, 'ManhHip', '25d55ad283aa400af464c76d713c07ad', 'LÆ°Æ¡ng Tiáº¿n Máº¡nh', 0, 0, 0, 'Nam', 'abcsdfghjkrtyuioghl', 'HÃ  Ná»™i', '', '0999999999', '', 'hitsmanhno1@yahoo.com', 'Student', 0);
INSERT INTO `users` VALUES(20, 'dinhthiquynh', 'f1baeb47425625fd99b7fb198fbd6e7b', 'Äinh Quá»³nh', 0, 0, 0, 'Ná»¯', 'Äá»ŠNH CÃ”NG , HÃ€ Ná»˜I', '', '', '0976016891', '', 'quynh4891@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(21, 'phanhong', '827ccb0eea8a706c4c34a16891f84e7b', 'phanthá»‹há»“ng', 0, 0, 0, 'Ná»¯', 'linh Ä‘Ã m- HÃ  ná»™i', 'HÃ  ná»™i', '', '12345567899', '', 'phanhong@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(22, 'ThanhNguyenDinh', 'ac2149e4e59f04133e28bdb3f9f9257a', 'Nguyá»…n ÄÃ¬nh Thanh', 0, 0, 0, 'Nam', 'HÃ  Ná»™i, dfghjklfdjksdids', 'Háº£i DÆ°Æ¡ng', '', '01639407693', '', 'dinhthanh122@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(23, 'tr.thinh92', '8b0dcdfb863376f5ee6be86cbea57784', 'Tráº§n Äá»©c Thá»‹nh', 0, 0, 0, '', '697 Giáº£i PhÃ³ng - HÃ  Ná»™i', 'HÃ  Ná»™i', 'FITHOU', '0986694520', 'CMSforE/uploaded/avatar/avata.png', 'tr.thinh92@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(24, 'nam_be_con', '25f9e794323b453885f5181f1b624d0b', 'nguyá»…n thá»‹ gáº¥m', 0, 0, 0, 'Ná»¯', '2/77, Kim Hoa, Äá»‘ng Äa, HN', 'HÃ  Ná»™i', '', '01226374985', '', 'ntgmeocondethuong@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(25, 'phamlien', 'e10adc3949ba59abbe56e057f20f883e', 'LiÃªnb5', 0, 0, 0, 'Ná»¯', 'hÃ  Ä‘Ã´ng, hÃ  tÃ¢y', '', 'hÃ  Ä‘Ã´ng, hÃ  ná»™i', '03433245454', '', 'thanhhaivphd@facebook.com', 'Student', 0);
INSERT INTO `users` VALUES(26, 'php0613e_db', '83fbee20fdeca3f72a4febc4323e7b25', '', 0, 0, 0, '', '', '', '', '', '', '', 'Admin', 1);
INSERT INTO `users` VALUES(27, 'teacher01', '0071e6bcf4379a0c627744963f38e1bd', 'Nguyá»…n ThÃºy Lan', 0, 0, 0, 'Ná»¯', '', '', '', '', 'uploaded/avatar/', '', 'Teacher', 1);
INSERT INTO `users` VALUES(28, 'luongtuefithou', '667c182423b38a24e99392d60336aadc', 'LÆ°Æ¡ng Thá»‹ Tuá»‡', 0, 0, 0, 'Ná»¯', ' YÃªn DÅ©ng Báº¯c Giang', 'HÃ  Ná»™i', 'Viá»‡n Má»Ÿ HÃ  Ná»™i', '01649612080', 'CMSforE/uploaded/avatar/222511_294522657318579_524769189_n.jpg', 'luongtue92@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(29, 'khicon_tn', '2f56c09759c3db459289a732b9694204', 'khicon_tn', 0, 0, 0, 'Ná»¯', 'ÄÃ´ng Má»¹ - Thanh TrÃ¬ - HÃ  Ná»™i', 'HÃ  Ná»™i', 'Viá»‡n ÄH Má»Ÿ HÃ  Ná»™i', '0943663491', 'CMSforE/uploaded/avatar/trung.jpg', 'hoaiduong92@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(30, 'vuongnh', '679e7bd71619584b22a8039155d1f681', 'Nguyá»…n Huy VÆ°á»£ng', 0, 0, 0, 'Nam', 'sá»‘ 167 Nguyá»…n Khang HÃ  Ná»™i', 'HÃ  Ná»™i - Viá»‡t Nam', 'Cáº§u Giáº¥y - HÃ  Ná»™i', '01222307487', 'CMSforE/uploaded/avatar/CÃºn.jpg', 'nguyenhuyvuong92@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(31, 'kemxoi1992', '472648413c824356c31d4c192c4674bd', 'Äá»– THá»Š CÃšC', 0, 0, 0, 'Ná»¯', 'SÃ³c SÆ n - HÃ  Ná»™i', 'HÃ  Ná»™i', 'Viá»‡n ÄH Má»Ÿ HÃ  Ná»™i', '01649608991', 'CMSforE/uploaded/avatar/563448_336014429832520_662410542_n.jpg', 'kemxoi1992@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(32, 'acekaka', '827ccb0eea8a706c4c34a16891f84e7b', 'nguyen huy hoang', 2, 2, 2009, 'Nam', 'thuy phuong tu liem', 'Hanoi', 'thuy phuong tu liem', '01695755522', '', 'huyhoangds1@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(33, 'minhhua', 'f8306d21eab231477e362fe7bf9e85e4', 'há»©a vÄƒn Ä‘iá»ƒm', 14, 4, 1994, '', 'lá»¥c ngáº¡n-báº¯c giang', 'báº¯c giang', 'viá»‡n Ä‘áº¡i há»c má»Ÿ hÃ  ná»™i', '01647517847', '', 'huavandiem.it@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(34, 'nvtrung', '4bc6f31b184dd234450ffdd8b81b70cc', 'nguyenvantrung', 24, 10, 1975, '', 'Phan Thiáº¿t, tá»‰nh BÃ¬nh Thuáº­n', 'Vietnam/BinhThuan', 'TrÆ°á»ng Cao Ä‘áº³ng nghá» tá»‰nh BÃ¬nh Thuáº­n', '0984971127', '', 'nvtrung@dnbt.edu.vn', 'Student', 0);
INSERT INTO `users` VALUES(35, 'xuanquy96', 'b3d4896f6776bb7ea47e8cc569366638', 'tran nhat nam', 5, 7, 1994, 'Nam', '123 dinh tien hoang', 'viet nam - hue', 'dai hoc y duoc', '0969774884', '', 'qui.unicore@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(36, 'thuy9221', '407b793b9a786a3a2d72c9c4c053e358', 'Tráº§n Ngá»c ThÃºy', 21, 1, 1992, 'Ná»¯', 'Hoang Mai - Ha Noi', 'Ha Noi', 'ThÃ nh phá»‘ tÃ´i yÃªu', '09890791429', 'CMSforE/uploaded/avatar/images.jpg', 'jane210192@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(37, 'thunguyen_ssvc', '615334d19593e103c289cb432686ca6b', 'Thu_Frank', 10, 5, 1993, '', 'Äáº¡i Kim, HoÃ ng Máº¡i, HÃ  Ná»™i', 'HÃ  Ná»™i', 'SV Fithou_2011', '01232202567', '', 'Ntthu_ssvc@hotmail.com', 'Student', 0);
INSERT INTO `users` VALUES(38, 'chenyouxing', '81543cd7dd3312c08189dddb39fe08ca', 'Tráº§n Há»¯u HÆ°ng', 30, 7, 1992, 'Nam', 'HÃ  Ná»™i - Viá»‡t Nam', 'Viá»‡t Nam', 'FITHOU - HOU', '0903265901', '', 'chenyouxing049@gmail.com', 'Student', 0);
INSERT INTO `users` VALUES(39, 'Tiogon', '21ea9c9635ae1550e50168fb7a80fd4c', 'Tiogon', 12, 4, 1993, 'Ná»¯', 'Linh Nam. Ha Noi', '', 'Vien Dai hoc Mo', '01674670329', '', 'muamuahe124@yahoo.com.vn', 'Student', 0);
