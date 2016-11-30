-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2016 at 06:09 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aimazing`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`event_id`),
  UNIQUE KEY `event_id` (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `name`, `start`, `end`, `image`) VALUES
(8, 'Expo East', '2016-03-16', '2016-03-19', 'uploads/events/1051831601_expo-east-259x65.png'),
(9, 'PPAI Vegas', '2017-01-08', '2017-01-13', ''),
(10, 'ASI Orlando', '2017-01-18', '2017-01-20', '');

-- --------------------------------------------------------

--
-- Table structure for table `event_supplier`
--

CREATE TABLE IF NOT EXISTS `event_supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `booth_no` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=584 ;

--
-- Dumping data for table `event_supplier`
--

INSERT INTO `event_supplier` (`id`, `event_id`, `supplier_id`, `booth_no`) VALUES
(469, 10, 20, '454');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `salt` varchar(4) NOT NULL,
  PRIMARY KEY (`login_id`),
  UNIQUE KEY `login_id` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `salt`) VALUES
(3, 'picasso', '94d2302ca0d117609159896b479d7eaf', 'PjOM'),
(4, 'zoo', '039895912dee3fa33832e0ea4acaa81c', '4lLX'),
(5, 'vantage', 'b3bbffb9cfb727d64d737edb0344cbb3', 'cBZB'),
(6, 'premline', 'f91a660a546b9357dc6326066ff447d7', 'O8Wg'),
(7, 'magnetgroup', '27c6531574aceb2629ddfda7f8a5b33d', 'RjAj'),
(8, 'tek', 'a328baf674533c6549c94f0be75e6d90', 'Z7rD'),
(9, 'showdown', '5637612a781ba9b4edfa6cebb502baf2', '6bpa'),
(10, '3mpromo', 'e984abb510cd269f66dd5758334e2569', 'qwbs'),
(11, 'mmmpromo', '60bec36dc4f426557bedef8dae3b249c', 'Cq6y'),
(12, 'admints', 'aea36e412dd0294db8ef96d23abbea4f', 'mMgh'),
(13, 'adaday', '6e2428259448a3f17f3742b6f873ce96', 'wv81'),
(14, 'alpha', '0ab8d26fb88601313aa093ca18a70a41', 'Q1Q8'),
(15, 'apspec', 'bbfb046e7230b6535d5d523b6bd3b608', 'c0Id'),
(16, 'artisitc', '5c2c526bce96f6af5a8fef027a2ce4ba', 'R2yJ'),
(17, 'bambam', '6586f5ff0384eaa397164b79d0410308', 'tMmi'),
(18, 'baystate', 'f10358835b3581759c0957e8382cdbb4', 'WLZE'),
(19, 'choc2', 'be9cddbebe59e84a8711bab97e8213ae', '3m62'),
(20, 'cutter', '66e814f33a53dbe221fd4d166cf472a9', 'krk5'),
(21, 'dard', '9d1ac653cc674712a8447d7daa7198a4', 'QT7w'),
(22, 'evans', '0d8284c906f8c8c67a6b395e4650b14f', 'bOSw'),
(23, 'feygroup', 'abe85ca1b645694aad146b4d439ccd9d', 'MN1Q'),
(24, 'garyline', '85123b2129b063d5490be0c30a27dbda', 'iJVS'),
(25, 'haas', '27bd7b0753082d5eabab6161b97ab01d', 'nCzb'),
(26, 'handstands', '7e33c525afc2f4379bc2d9914af27155', 'xfb5'),
(27, 'headwear', '98da59b32f180cf988b489a8df87ac42', 'fapz'),
(28, 'goldstar', '88ee1733c3be8279515bdd5d2362c5bd', 'o7l0'),
(29, 'ktipromo', 'f3b20664f59dd1b91e8792517c1254bb', '0Uan'),
(30, 'hitpromo', 'eadbbcf38e6f5779dc9955860e3920e9', 'WBrd'),
(31, 'kutmaster', 'f4f6677b0e489bf0399da3125118425b', '9t0g'),
(32, 'lanco', 'c73ba2f90ad6e3b8c278379f67a2565e', 'OA5W'),
(33, 'liquimark', '1bcc91005aae30bd22eb8d4e6cb778a4', 'XmDg'),
(34, 'logomats', '3e6ca66214102e977ab2d600a53aac82', '1J03'),
(35, 'logomark', '1b24ee8397de39626cc81413b4738c04', 'OTCg'),
(36, 'glass', '6caddb86db06ae276b89e78ee645ae60', '0t27'),
(37, 'notes', 'cac1a2e44827ca67e9ebd9db5697b2db', 'BfeP'),
(38, 'prime', 'd981a0d4bc7d07fa297ff9e31deb9fe3', 'sYIW'),
(39, 'progolf', '2a34c20f8ee61086a833d3c323e9b8c4', 'Bokr'),
(40, 'rainkist', '41702f3ed48279c9557f78d90e46bb50', '7xau'),
(41, 'ready', 'e6d199b0a6028ac66382168bfbfedddd', 'KUKm'),
(42, 'sage', '51dc7205be8d349a3ba839ba43ae73c6', 'jCsv'),
(43, 'sanmar', '46ca00e6f409e56bef8458e69801a0fc', '9tJ6'),
(44, 'snugz', '2cc206b9c472bbf82c2eabbd877c549f', 'LZGy'),
(45, 'tekweld', '9cd63a78814261c6511729cedaadea0a', 'c64n'),
(46, 'magnet', '938693ab226c205d6e56a2518a474e73', '4UrE'),
(47, 'premium', '6a1c8ea0a974708c0fa7500b779943b6', 'C10B'),
(49, 'ebad', '331a1db7ea79c363043dfc7c2a57f7de', 'OX6w'),
(50, 'alam22', '118ee74359b3f2ccdb64e3ba11590b51', 'pe0x'),
(51, 'alam', 'f5d99f354c2f10cb297e78a3cea0a567', 'ug8Q'),
(52, 'alam22', 'd0926108e5ee795fe2790635aa8389b2', '9dlf');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `publish_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `details`, `image`, `publish_date`) VALUES
(5, 'Visit New AIM Partners', '<p><strong>Please be sure to express your appreciation to all our partners.</strong></p>\r\n\r\n<p><strong>Fey Line</strong>&nbsp;- 1715</p>\r\n\r\n<p><strong>Ad-A-Day</strong> - 2219</p>\r\n\r\n<p><strong>GoldStar</strong> - 2318</p>\r\n\r\n<p><strong>KTI Promo</strong> - 2329</p>\r\n', 'uploads/news/68775486_newpartners.png', '2016-03-15 20:13:32'),
(6, 'ROOM CHANGE to 307 at 4pm', '<p>Sorry for the inconvenience</p>', '0', '2016-03-17 13:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`supplier_id`),
  UNIQUE KEY `supplier_id` (`supplier_id`),
  KEY `login_id` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `login_id`, `name`, `image`) VALUES
(3, 3, 'picasso', 'uploads/722357051_Picasso-Laser.jpg'),
(4, 4, 'Zoo Printing', 'uploads/2030932758_zoologo.jpg'),
(10, 11, '3M Promo', 'uploads/1594084160_3M.jpg'),
(11, 12, 'admints', 'uploads/1988869117_Admints.jpg'),
(12, 13, 'Ad-A-Day', 'uploads/425306229_Adaday.jpg'),
(13, 14, 'alphabroder/Bodek', 'uploads/211847188_Alpha.jpg'),
(14, 15, 'apspec', 'uploads/360965452_APSpecialties.jpg'),
(15, 16, 'Artistic Toy', 'uploads/670744775_ArtisticToy_sm.jpg'),
(16, 17, 'bambam', 'uploads/1672511246_BamBams.jpg'),
(17, 18, 'Bay State', 'uploads/1666063287_BayState.png'),
(18, 19, 'Chocolate Chocolate', 'uploads/1796697806_Chocolate2.jpg'),
(19, 20, 'Cutter & Buck', 'uploads/219378208_CutterBuckLogo.png'),
(20, 21, 'DARD / TagMaster', 'uploads/296758040_Tagmaster.jpg'),
(21, 22, 'Evans Mfg', 'uploads/407593550_Evans.jpg'),
(22, 23, 'Fey Group', 'uploads/466863784_FeyLogo.jpg'),
(23, 24, 'Gary Line', 'uploads/133746985_GaryLine.jpg'),
(24, 25, 'haas', 'uploads/2131149158_HaasJordan.jpg'),
(25, 26, 'Handstands', 'uploads/1521978986_Handstands.jpg'),
(26, 27, 'headwear', 'uploads/1792513881_Headwear.jpg'),
(27, 28, 'Goldstar', 'uploads/1723431948_GoldStar.jpg'),
(28, 29, 'KTI Promo', 'uploads/302943985_KTIpromo.jpg'),
(29, 30, 'Hit Promo', 'uploads/658793001_Hit.jpg'),
(30, 31, 'KutMaster', 'uploads/2060667616_Kutmaster.jpg'),
(31, 32, 'Lanco', 'uploads/1487849072_Lanco.jpg'),
(32, 33, 'liquimark', 'uploads/339712259_LiquidMark.jpg'),
(33, 34, 'logomats', 'uploads/390151809_LogoMats.jpg'),
(34, 35, 'Logomark', 'uploads/380657234_Logomark.jpg'),
(35, 36, 'glass', 'uploads/1426632548_GlassAmerica.jpg'),
(36, 37, 'Notes, Inc', 'uploads/1585957474_Notes.jpg'),
(37, 38, 'Prime Line', 'uploads/372159241_PrimeLine.jpg'),
(38, 39, 'progolf', 'uploads/53448333_ProGolf.jpg'),
(39, 40, 'Rainkist', 'uploads/1680268524_Rainkist.jpg'),
(40, 41, 'Ready4kits', 'uploads/759320905_Ready4Kits.jpg'),
(41, 42, 'sage', 'uploads/590107543_2SAGE.jpg'),
(42, 43, 'SanMar', 'uploads/549165307_SanMar.jpg'),
(43, 44, 'Snugz', 'uploads/1164800782_Snugz.jpg'),
(44, 45, 'tekweld', 'uploads/718719015_Tekweld.jpg'),
(45, 46, 'magnet', 'uploads/208133837_Magnet.jpg'),
(46, 47, 'The Premium Line', 'uploads/1194233021_Premium.jpg'),
(47, 49, 'ebad', '0');

-- --------------------------------------------------------

--
-- Table structure for table `TABLE 9`
--

CREATE TABLE IF NOT EXISTS `TABLE 9` (
  `S.No.` varchar(1) DEFAULT NULL,
  `Name` varchar(19) DEFAULT NULL,
  `Booth` int(4) DEFAULT NULL,
  `User` varchar(14) DEFAULT NULL,
  `Logo` varchar(28) DEFAULT NULL,
  `Pass` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TABLE 9`
--

INSERT INTO `TABLE 9` (`S.No.`, `Name`, `Booth`, `User`, `Logo`, `Pass`) VALUES
('8', '3M', 2214, '3mpromo', '/partners/3M.jpg', 12345),
('', 'Admints', 1711, 'admints', '/partners/Admints.jpg', 12345),
('', 'Alphabroder', 1819, 'alpha', '/partners/Alpha.jpg', 12345),
('', 'AP Specialties', 2500, 'apspec', '/partners/APSpecialties.jpg', 12345),
('', 'Artistic Toy', 1909, 'artistic', '/partners/ArtisticToy_sm.jpg', 12345),
('', 'BamBams', 2126, 'bambams', '/partners/BamBams.jpg', 12345),
('', 'Bay State', 1815, 'baystate', '/partners/BayState.png', 12345),
('', 'Chocolate Chocolate', 1908, 'chocchoc', '/partners/Chocolate2.jpg', 12345),
('', 'Cutter & Buck', 1837, 'cutter', '/partners/CutterBuckLogo.png', 12345),
('', 'TagMaster', 1803, 'dard', '/partners/Tagmaster.jpg', 12345),
('', 'Evans', 2019, 'evans', '/partners/Evans.jpg', 12345),
('', 'Fey Group', 1715, 'feygroup', '/partners/FeyLogo.jpg', 12345),
('', 'Gary Line', 2301, 'garyline', '/partners/GaryLine.jpg', 12345),
('', 'Haas-Jordan', 2303, 'haas', '/partners/HaasJordan.jpg', 12345),
('', 'HandStands', 2300, 'handstands', '/partners/Handstands.jpg', 12345),
('', 'Headwear USA', 2007, 'headwear', '/partners/Headwear.jpg', 12345),
('', 'Hit Promo', 1701, 'hitpromo', '/partners/Hit.jpg', 12345),
('', 'KutMaster', 2312, 'kutmaster', '/partners/Kutmaster.jpg', 12345),
('', 'Lanco', 2200, 'lanco', '/partners/Lanco.jpg', 12345),
('', 'Liqui-Mark', 2515, 'liquimark', '/partners/LiquidMark.jpg', 12345),
('', 'LogoMats', 2309, 'logomats', '/partners/LogoMats.jpg', 12345),
('', 'Logomark', 1808, 'logomark', '/partners/Logomark.jpg', 12345),
('', 'Glass America', 2201, 'glassam', '/partners/glass.jpg', 12345),
('', 'Notes', 2218, 'notes', '/partners/notes.jpg', 12345),
('', 'Prime Line', 1901, 'prime', '/partners/PrimeLine.jpg', 12345),
('', 'Pro Golf', 2233, 'progolf', '/partners/ProGolf.jpg', 12345),
('', 'Promo Marketing', 2022, 'promomarketing', '/partners/pm.jpg', 12345),
('', 'Rainkist', 1830, 'rainkist', '/partners/Rainkist.jpg', 12345),
('', 'Ready4Kits', 2027, 'ready4', '/partners/Ready4Kits.jpg', 12345),
('', 'SAGE', 2419, 'sage', '/partners/sage.jpg', 12345),
('', 'SanMar', 1301, 'sanmar', '/partners/SanMar.jpg', 12345),
('', 'Showdown', 2330, 'showdown', '/partners/Showdown.jpg', 12345),
('', 'Snugz USA', 2000, 'snugz', '/partners/Snugz.jpg', 12345),
('', 'Tekweld', 2511, 'tekweld', '/partners/Tekweld.jpg', 12345),
('', 'The Magnet Group', 2100, 'magnet', '/partners/Magnet.jpg', 12345),
('', 'The Premium Line', 2031, 'premium', '/partners/Premium.jpg', 12345),
('', 'Vantage Apparel', 2001, 'vantage', '/partners/Vantage.jpg', 12345),
('', 'Zoo Printing', 2536, 'zoo', '/partners/Zooprinting.jpg', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `task_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `reward` varchar(255) NOT NULL,
  `placeholder_text` text NOT NULL,
  `task_type_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY (`task_id`),
  UNIQUE KEY `task_id` (`task_id`),
  KEY `task_type_id` (`task_type_id`),
  KEY `event_id` (`event_id`),
  KEY `supplier_id` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `login_id`, `name`, `reward`, `placeholder_text`, `task_type_id`, `event_id`) VALUES
(13, 21, 'Take a selfie with our WBENC giveaway.  Post to FB', 'Receive EQP-5% on next order by posting to Fb with #WomenOwned', '#AIMazingRace #ExpoEast #WomenOwned', 1, 8),
(14, 28, 'How much are Ground Freight and Setups on writing instruments?', 'Entry into drawing for Free Self Promo ($50 value)', '#AIMazingRace #ExpoEast', 2, 8),
(15, 23, 'What type of business is the top buyer of the World''s Best Pizza Cutter by Mi Line?', 'Free sample of a pizza cutter', '#AIMazingRace #ExpoEast #bestpizzacutter', 2, 8),
(16, 19, 'Pick up sample of our Belgian Chocolate Cookie or Deluxe Trio', 'mmm Yummy Chocolate!!', '#AIMazingRace #ExpoEast', 5, 8),
(17, 47, 'Take a selfie with our new Insulated Wine Tote with Corkscrew 060-WT', 'Entry into our AIM Prize awarded at our AIM Meeting', '#AIMazingRace #ExpoEast', 1, 8),
(18, 31, 'Take a selfie with our new Mr. Food® Kitchen Cutlery Center', 'Entry into our AIM Prize awarded at our AIM Meeting', '#AIMazingRace #ExpoEast', 1, 8),
(19, 26, 'Take a selfie with our Cobra VR™ Viewer', 'Entry to win a Free Spec Sample', '#AIMazingRace #ExpoEast', 1, 8),
(20, 41, 'Take a selfie holding our FUN123A - Hangover Kit', 'Entry into our AIM Prize awarded at our AIM Meeting', '#AIMazingRace #ExpoEast', 1, 8),
(21, 18, 'Take a selfie holding one of our kitchen combo gift sets', 'Entry into our AIM Prize awarded at our AIM Meeting', '#AIMazingRace #ExpoEast', 1, 8),
(22, 37, 'Pick up a sample of a Knock, Knock pad', 'Enter to win Free Self Promo 250 4 x 6 Stik-Withit self promo pads', '#AIMazingRace #ExpoEast', 5, 8),
(23, 22, 'Take a selfie with any 2016 new item', 'Entry into our AIM Prize awarded at our AIM Meeting', '#AIMazingRace #ExpoEast', 1, 8),
(24, 13, 'Pick up a Postcard for a Free Self Promo', 'Free Self Promo', '#AIMazingRace #ExpoEast', 5, 8),
(25, 16, 'Pick up a Free Spec Coupon', 'Free Spec Coupon', '#AIMazingRace #ExpoEast', 5, 8),
(26, 40, 'Take a selfie with the AIM Smarter Umbrella', 'Free Screen on your next order', '#AIMazingRace #ExpoEast', 1, 8),
(27, 14, 'Take a Selfie with your favorite  product at our booth', 'Entry into our AIM Prize awarded at our AIM Meeting', '#AIMazingRace #ExpoEast', 1, 8),
(28, 38, 'Ask about their Pot of Gold Contest.', 'Win one of their prizes at their booth', '#AIMazingRace #ExpoEast', 2, 8),
(33, 21, 'aaaaa', 'a12wd', 'aa', 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `task_completed`
--

CREATE TABLE IF NOT EXISTS `task_completed` (
  `task_completed_id` int(11) NOT NULL AUTO_INCREMENT,
  `task_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `completion_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`task_completed_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `task_completed`
--

INSERT INTO `task_completed` (`task_completed_id`, `task_id`, `user_id`, `completion_date`) VALUES
(1, 3, 1, '2016-01-19 07:30:20'),
(2, 5, 1, '2016-02-04 09:09:40'),
(3, 7, 1, '2016-02-09 11:07:39'),
(4, 10, 1, '2016-02-09 11:19:07'),
(5, 10, 3, '2016-02-09 11:56:12'),
(6, 8, 3, '2016-02-09 12:07:54'),
(7, 7, 4, '2016-02-10 16:06:48'),
(8, 6, 3, '2016-02-10 16:09:08'),
(9, 3, 3, '2016-02-15 11:06:13'),
(11, 18, 4, '2016-03-17 15:02:29'),
(12, 19, 4, '2016-03-17 15:16:27'),
(13, 20, 4, '2016-03-17 16:03:08'),
(14, 28, 4, '2016-03-17 16:37:36'),
(15, 26, 4, '2016-03-17 16:43:48'),
(16, 13, 4, '2016-03-17 16:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `task_type`
--

CREATE TABLE IF NOT EXISTS `task_type` (
  `task_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`task_type_id`),
  UNIQUE KEY `task_type_id` (`task_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `task_type`
--

INSERT INTO `task_type` (`task_type_id`, `name`, `image`) VALUES
(1, 'U-TURN', 'tasks/UTurn.png'),
(2, 'DETOUR', 'tasks/Detour.png'),
(5, 'ROADBLOCK', 'tasks/RoadBlock.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `facebook_id` (`facebook_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `facebook_id`, `user_name`, `user_email`) VALUES
(1, '10208432350035898', 'Motasim Hussain', 'motasim_hussain_4_u@hotmail.com'),
(2, '10153866687296306', 'Usman Durrani', 'usmandgreat@gmail.com'),
(3, '1219230604758140', 'Usama Nadeem', 'k092170@nu.edu.pk'),
(4, '1107807179250692', 'Jamie Coggeshall', 'aimastermind@mac.com'),
(5, '1551459248500397', 'Mark Eting-Guru', 'marguru2015@gmail.com'),
(6, '1034148193325221', 'Robert Malka', 'rm71188@gmail.com'),
(7, '1280474861967675', 'Beckey Gallamore', 'bgallamore@verizon.net'),
(8, '10207649942663424', 'Avery Manko', 'avery@mankocompany.com'),
(9, '10207792202875184', 'Jodi Leichtman Frank', 'jfrank@thefrankadvantage.com'),
(10, '10153490917457717', 'Dan Kaufman', 'dan@dkgpromotions.com'),
(11, '1665193447075500', 'Christine D''Amico', 'info@imageryprint.com'),
(12, '10204990809883856', 'Abie Ross', 'abieross@gmail.com'),
(13, '10204152612134877', 'Bill McCormick', 'bill@teamcreativeconnections.com'),
(14, '10208008587428453', 'Robin L Allen', 'rallenfull@gmail.com'),
(15, '10205960174019593', 'Donna LoPinto Waetjen', 'printthis1@aol.com'),
(16, '10207497564131051', 'Pearl Coggeshall', 'pcoggeshall@verizon.net'),
(17, '981266248646640', 'Carol Metzger', 'info@cadettmarketing.com'),
(18, '10153377964887116', 'Sandee Rodriguez', 'sandeelynne@comcast.net'),
(19, '10209013033672728', 'Max Tollens', 'max@maxtollens.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `login_constraint` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `event_constraint` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supplier_contraint` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_constraint` FOREIGN KEY (`task_type_id`) REFERENCES `task_type` (`task_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
