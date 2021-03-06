-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 18, 2018 at 01:28 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coddl`
--

-- --------------------------------------------------------

--
-- Table structure for table `IGS_assetfields`
--

CREATE TABLE `IGS_assetfields` (
`id` int(11) NOT NULL,
  `entryid` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `kind` varchar(50) NOT NULL,
  `width` varchar(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `size` int(11) NOT NULL,
  `datecreated` datetime NOT NULL,
  `url` varchar(200) NOT NULL,
  `thumb` varchar(300) NOT NULL,
  `fieldname` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=204 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_assetfields`
--

INSERT INTO `IGS_assetfields` (`id`, `entryid`, `filename`, `kind`, `width`, `height`, `size`, `datecreated`, `url`, `thumb`, `fieldname`) VALUES
(198, 204, 'Screen_Shot_2017-12-30_at_19_27_25.png', '.png', '238', '103', 11, '2017-12-30 19:27:48', 'http://localhost:8888/coddl/assets/uploads/Screen_Shot_2017-12-30_at_19_27_25.png', 'http://localhost:8888/coddl/assets/uploads/Screen_Shot_2017-12-30_at_19_27_25_thumb.png', 'logo'),
(199, 211, 'abstract-bg.jpg', '.jpg', '1200', '910', 208, '2017-12-30 19:38:59', 'http://localhost:8888/coddl/assets/uploads/abstract-bg.jpg', 'http://localhost:8888/coddl/assets/uploads/abstract-bg_thumb.jpg', 'landing'),
(200, 211, 'slice1.jpg', '.jpg', '3485', '2476', 3826, '2017-12-30 20:03:03', 'http://localhost:8888/coddl/assets/uploads/slice1.jpg', 'http://localhost:8888/coddl/assets/uploads/slice1_thumb.jpg', 'imone'),
(201, 211, 'slice11.jpg', '.jpg', '3485', '2440', 1917, '2017-12-30 20:04:06', 'http://localhost:8888/coddl/assets/uploads/slice11.jpg', 'http://localhost:8888/coddl/assets/uploads/slice11_thumb.jpg', 'imone'),
(202, 204, 'slice2.jpg', '.jpg', '3452', '586', 319, '2017-12-30 20:43:55', 'http://localhost:8888/coddl/assets/uploads/slice2.jpg', 'http://localhost:8888/coddl/assets/uploads/slice2_thumb.jpg', 'footerlogo'),
(203, 204, 'slice12.jpg', '.jpg', '1171', '49', 6, '2017-12-30 20:48:46', 'http://localhost:8888/coddl/assets/uploads/slice12.jpg', 'http://localhost:8888/coddl/assets/uploads/slice12_thumb.jpg', 'footerlogo');

-- --------------------------------------------------------

--
-- Table structure for table `IGS_blocks`
--

CREATE TABLE `IGS_blocks` (
`id` int(11) NOT NULL,
  `fieldid` int(11) NOT NULL,
  `typeid` int(11) NOT NULL,
  `sortorder` int(11) NOT NULL,
  `datecreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `IGS_bookings`
--

CREATE TABLE `IGS_bookings` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `CLIENT_FIRST_NAME` varchar(512) NOT NULL,
  `CLIENT_LAST_NAME` varchar(512) NOT NULL,
  `STAFF_FIRST_NAME` varchar(512) NOT NULL,
  `STAFF_LAST_NAME` varchar(512) NOT NULL,
  `BOOKING_DATE_TIME` varchar(512) NOT NULL,
  `BOOKING_DATE` varchar(512) NOT NULL,
  `BOOKING_TIME` varchar(512) NOT NULL,
  `BOOKING_REFERENCE` varchar(512) NOT NULL,
  `SERVICE_NAME` varchar(512) NOT NULL,
  `BUSINESS_NAME` varchar(512) NOT NULL,
  `LOCATION_NAME` varchar(512) NOT NULL,
  `LOCATION_PHONE` varchar(512) NOT NULL,
  `BOOKING_END_DATE_TIME` varchar(512) NOT NULL,
  `color` varchar(512) NOT NULL,
  `CLIENT_MOBILE` varchar(255) NOT NULL,
  `SERVICE_COST` varchar(255) NOT NULL,
  `schedul_date` varchar(255) NOT NULL,
  `schedul_hour` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_bookings`
--

INSERT INTO `IGS_bookings` (`id`, `user_id`, `CLIENT_FIRST_NAME`, `CLIENT_LAST_NAME`, `STAFF_FIRST_NAME`, `STAFF_LAST_NAME`, `BOOKING_DATE_TIME`, `BOOKING_DATE`, `BOOKING_TIME`, `BOOKING_REFERENCE`, `SERVICE_NAME`, `BUSINESS_NAME`, `LOCATION_NAME`, `LOCATION_PHONE`, `BOOKING_END_DATE_TIME`, `color`, `CLIENT_MOBILE`, `SERVICE_COST`, `schedul_date`, `schedul_hour`) VALUES
(128, 4, 'Joe Blogs', 'Joe Blogs', 'karen', 'h', '2018-01-21T11:30:00', '2018-01-20', '12:15:00', '1DrCHWYd', 'Manicure', 'Company Name', 'x', '01234567891', '2018-01-21T12:00:00', 'blue', '01234567891', '10.00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `IGS_cats`
--

CREATE TABLE `IGS_cats` (
`id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `IGS_cat_links`
--

CREATE TABLE `IGS_cat_links` (
`id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `IGS_clients`
--

CREATE TABLE `IGS_clients` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `First_Name` varchar(512) NOT NULL,
  `Last_Name` varchar(512) NOT NULL,
  `Mobile_Number` varchar(255) NOT NULL,
  `Email` varchar(512) NOT NULL,
  `Send_Notifications_by` varchar(255) NOT NULL,
  `Client_Notes` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_clients`
--

INSERT INTO `IGS_clients` (`id`, `user_id`, `First_Name`, `Last_Name`, `Mobile_Number`, `Email`, `Send_Notifications_by`, `Client_Notes`) VALUES
(16, 4, 'Joe', 'Blogs', '01234567891', 'joe@mail.com', 'SMS', 'Client Notes'),
(17, 4, 'Sara', 'Smith', '0123456711', 'sara@mail.com', 'SMS', 'Client Notes');

-- --------------------------------------------------------

--
-- Table structure for table `IGS_company_details`
--

CREATE TABLE `IGS_company_details` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Bussiness_Name` varchar(512) NOT NULL,
  `Description` text NOT NULL,
  `Address` text NOT NULL,
  `Website` varchar(512) NOT NULL,
  `Mobile_Number` varchar(255) NOT NULL,
  `Business_Type` varchar(512) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_company_details`
--

INSERT INTO `IGS_company_details` (`id`, `user_id`, `Bussiness_Name`, `Description`, `Address`, `Website`, `Mobile_Number`, `Business_Type`) VALUES
(9, 4, 'Company Name', 'Company Description', 'Company Address', 'http://www.company.com', '01234567891', 'Salon');

-- --------------------------------------------------------

--
-- Table structure for table `IGS_content`
--

CREATE TABLE `IGS_content` (
`id` int(11) NOT NULL,
  `entryid` int(11) NOT NULL,
  `entrytitle` varchar(200) NOT NULL,
  `test` varchar(10) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `bgcolor` varchar(100) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `boxcolor` varchar(100) DEFAULT NULL,
  `logowidth` varchar(10) DEFAULT NULL,
  `welcome` varchar(200) DEFAULT NULL,
  `landing` varchar(500) DEFAULT NULL,
  `fontcolor` varchar(100) DEFAULT NULL,
  `imone` varchar(500) DEFAULT NULL,
  `footerlogo` varchar(500) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `icon` text,
  `eventcolor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=224 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_content`
--

INSERT INTO `IGS_content` (`id`, `entryid`, `entrytitle`, `test`, `color`, `bgcolor`, `logo`, `name`, `boxcolor`, `logowidth`, `welcome`, `landing`, `fontcolor`, `imone`, `footerlogo`, `url`, `icon`, `eventcolor`) VALUES
(204, 203, '', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(205, 204, '', NULL, 'D25C4A', 'EBEBEB', '198', NULL, 'BDBDBD', '238', 'Welcome to this CMS', NULL, '696969', NULL, '203', NULL, NULL, '72B37B'),
(206, 205, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(207, 206, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(208, 207, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(209, 208, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(210, 209, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(211, 210, 'Calender', NULL, NULL, NULL, NULL, 'Calender', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://localhost:8888/coddl/index.php/custom/calendar/load_calendar', 'fa-calendar', NULL),
(212, 211, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '199', NULL, '201', NULL, NULL, NULL, NULL),
(213, 212, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '201', NULL, NULL, NULL, NULL),
(214, 213, 'Clients', NULL, NULL, NULL, NULL, 'Clients', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://localhost:8888/coddl/index.php/admin/clients', 'fa-user', NULL),
(215, 214, 'Staff', NULL, NULL, NULL, NULL, 'Staff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://localhost:8888/coddl/index.php/admin/staff', NULL, NULL),
(216, 215, 'Services', NULL, NULL, NULL, NULL, 'Services', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://localhost:8888/coddl/index.php/admin/services', 'fa-credit-card', NULL),
(217, 216, 'Setup', NULL, NULL, NULL, NULL, 'Setup', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://localhost:8888/coddl/index.php/admin/setup/edit_setup_view/1', 'fa-cog', NULL),
(218, 217, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(219, 218, 'Company Profile', NULL, NULL, NULL, NULL, 'Company Profile', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://localhost:8888/coddl/index.php/admin/company_details/edit_company_details_view/1', 'fa-unlock', NULL),
(220, 219, 'Logout', NULL, NULL, NULL, NULL, 'Logout', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://localhost:8888/coddl/index.php/custom/cms_login/logout', 'fa-power-off', NULL),
(221, 220, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(222, 221, 'Sent Messages', NULL, NULL, NULL, NULL, 'Sent Messages', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://localhost:8888/coddl/index.php/admin/sent', 'fa-cog', NULL),
(223, 222, 'Logout', NULL, NULL, NULL, NULL, 'Logout', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://localhost:8888/coddl/index.php/custom/cms_login/logout', 'fa-power-off', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `IGS_email`
--

CREATE TABLE `IGS_email` (
`id` int(11) NOT NULL,
  `protocol` varchar(50) NOT NULL,
  `smtp_host` varchar(50) NOT NULL,
  `smtp_port` varchar(50) NOT NULL,
  `smtp_user` varchar(50) NOT NULL,
  `smtp_pass` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_email`
--

INSERT INTO `IGS_email` (`id`, `protocol`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`) VALUES
(1, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `IGS_entry`
--

CREATE TABLE `IGS_entry` (
`id` int(11) NOT NULL,
  `sectionid` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `datecreated` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_entry`
--

INSERT INTO `IGS_entry` (`id`, `sectionid`, `type`, `datecreated`) VALUES
(203, 211, 'Single', '0000-00-00'),
(204, 212, 'Global', '0000-00-00'),
(205, 213, 'Single', '0000-00-00'),
(206, 214, 'Single', '0000-00-00'),
(207, 215, 'Single', '0000-00-00'),
(208, 216, 'Single', '0000-00-00'),
(209, 217, 'Single', '0000-00-00'),
(210, 218, 'Multiple', '0000-00-00'),
(211, 219, 'Single', '0000-00-00'),
(212, 220, 'Single', '0000-00-00'),
(213, 218, 'Multiple', '0000-00-00'),
(215, 218, 'Multiple', '0000-00-00'),
(216, 218, 'Multiple', '0000-00-00'),
(217, 221, 'Single', '0000-00-00'),
(218, 218, 'Multiple', '0000-00-00'),
(220, 222, 'Single', '0000-00-00'),
(221, 218, 'Multiple', '0000-00-00'),
(222, 218, 'Multiple', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `IGS_fields`
--

CREATE TABLE `IGS_fields` (
  `name` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `opts` text NOT NULL,
  `instructions` varchar(200) NOT NULL,
  `maxchars` varchar(50) NOT NULL,
  `limitamount` int(11) NOT NULL,
  `formvalidation` text NOT NULL,
  `settings` text NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=301 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_fields`
--

INSERT INTO `IGS_fields` (`name`, `type`, `opts`, `instructions`, `maxchars`, `limitamount`, `formvalidation`, `settings`, `id`) VALUES
('test', 'plain-text', '', 'test', '10', 0, 'max_length[10]', '', 286),
('color', 'color', '', 'Site color', '', 0, 'min_length[1]', '', 287),
('bgcolor', 'color', '', 'Background Colour', '', 0, 'min_length[1]', '', 288),
('logo', 'file-upload', '', 'Site logo', '', 1, 'gif|jpg|png', '', 289),
('name', 'plain-text', '', 'Menu item title', '20', 0, 'max_length[20]', '', 290),
('url', 'plain-text', '', 'Menu item url', '100', 0, 'max_length[100]', '', 291),
('boxcolor', 'color', '', 'The border colour for the main pages', '', 0, 'min_length[1]', '', 292),
('icon', 'drop-down', 'fa-unlock,fa-group,fa-user,fa-power-off,fa-cog,fa-calendar,fa-credit-card,fa-dashboard,fa-cloud,fa-save', 'Icon for the dashboard', '', 0, 'min_length[1]', '', 293),
('logowidth', 'plain-text', '', 'The logo width in pixels', '10', 0, 'max_length[10]', '', 294),
('welcome', 'plain-text', '', 'The welcome message', '200', 0, 'max_length[200]', '', 295),
('landing', 'file-upload', '', 'landing image', '', 1, 'jpg', '', 296),
('fontcolor', 'color', '', 'landing page font color', '', 0, 'min_length[1]', '', 297),
('imone', 'file-upload', '', '', '', 1, 'jpg', '', 298),
('footerlogo', 'file-upload', '', '', '', 1, 'jpg', '', 299),
('eventcolor', 'color', '', 'The event colour when selected', '', 0, 'min_length[1]', '', 300);

-- --------------------------------------------------------

--
-- Table structure for table `IGS_menu`
--

CREATE TABLE `IGS_menu` (
  `id` int(11) NOT NULL,
  `html` varchar(50000) NOT NULL,
  `array` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_menu`
--

INSERT INTO `IGS_menu` (`id`, `html`, `array`) VALUES
(1, '\n<li class="dd-item dd3-item" id="idkOCeHgoIDtL2SxwB">\n				<div class="dd-handle dd3-handle"></div>\n				<div class="dd3-content">welcome</div>\n				<div class="url" style="display:none;">219</div>\n				<div class="dd-edit"><i id="remove" u_id="idkOCeHgoIDtL2SxwB" class="fa fa-trash-o"></i></div>\n				</li>\n<li class="dd-item dd3-item" id="idSxDH7OPNslmp6u1J">\n				<div class="dd-handle dd3-handle"></div>\n				<div class="dd3-content">About</div>\n				<div class="url" style="display:none;">220</div>\n				<div class="dd-edit"><i id="remove" u_id="idSxDH7OPNslmp6u1J" class="fa fa-trash-o"></i></div>\n				</li><li class="dd-item dd3-item" id="idhDwYaAJQO6ZkpnGT">\n				<div class="dd-handle dd3-handle"></div>\n				<div class="dd3-content">Log-in</div>\n				<div class="url" style="display:none;">214</div>\n				<div class="dd-edit"><i id="remove" u_id="idhDwYaAJQO6ZkpnGT" class="fa fa-trash-o"></i></div>\n				</li>\n<li class="dd-item dd3-item" id="idpAH6K5bWMSBUc1xm">\n				<div class="dd-handle dd3-handle"></div>\n				<div class="dd3-content">Try-us-for-free</div>\n				<div class="url" style="display:none;">217</div>\n				<div class="dd-edit"><i id="remove" u_id="idpAH6K5bWMSBUc1xm" class="fa fa-trash-o"></i></div>\n				</li>\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `IGS_menu2`
--

CREATE TABLE `IGS_menu2` (
  `id` int(11) NOT NULL,
  `father` varchar(50) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `innerhtml` varchar(500) NOT NULL,
`s_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_menu2`
--

INSERT INTO `IGS_menu2` (`id`, `father`, `tag`, `innerhtml`, `s_id`) VALUES
(3, 'null', 'tag', ' Try-us-for-free| 217| ', 19),
(2, 'null', 'tag', ' Log-in| 214| ', 20),
(1, 'null', 'tag', ' About| 220| ', 21),
(0, 'null', 'tag', ' welcome| 219| ', 22);

-- --------------------------------------------------------

--
-- Table structure for table `IGS_permissions`
--

CREATE TABLE `IGS_permissions` (
`permissionID` int(11) NOT NULL,
  `permission` varchar(200) DEFAULT NULL,
  `order_position` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_permissions`
--

INSERT INTO `IGS_permissions` (`permissionID`, `permission`, `order_position`) VALUES
(3, 'email', 6),
(5, 'permissions', 8),
(6, 'profile', 1),
(9, 'users', 9),
(7, 'menu', 2),
(10, 'database', 10),
(13, 'field_builder', 13),
(14, 'sections', 14),
(15, 'entries', 15),
(17, 'asset_lib', 17),
(18, 'site_settings', 18),
(19, 'plugins', 19),
(70, 'staff', 0),
(71, 'clients', 0),
(72, 'services', 0),
(73, 'company_details', 0),
(74, 'setup', 0),
(75, 'bookings', 0),
(76, 'textanywhere', 0),
(77, 'sent', 0);

-- --------------------------------------------------------

--
-- Table structure for table `IGS_permission_groups`
--

CREATE TABLE `IGS_permission_groups` (
`groupID` int(11) NOT NULL,
  `groupName` varchar(200) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_permission_groups`
--

INSERT INTO `IGS_permission_groups` (`groupID`, `groupName`) VALUES
(1, 'Administrators'),
(42, 'coddl');

-- --------------------------------------------------------

--
-- Table structure for table `IGS_permission_map`
--

CREATE TABLE `IGS_permission_map` (
  `groupID` int(11) NOT NULL DEFAULT '0',
  `permissionID` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_permission_map`
--

INSERT INTO `IGS_permission_map` (`groupID`, `permissionID`) VALUES
(1, 3),
(1, 5),
(1, 6),
(1, 7),
(1, 9),
(1, 10),
(1, 13),
(1, 14),
(1, 15),
(1, 17),
(1, 18),
(1, 19),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 77),
(42, 70),
(42, 71),
(42, 72),
(42, 73),
(42, 74),
(42, 75);

-- --------------------------------------------------------

--
-- Table structure for table `IGS_plugins`
--

CREATE TABLE `IGS_plugins` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `install` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_plugins`
--

INSERT INTO `IGS_plugins` (`id`, `name`, `install`, `status`) VALUES
(2, 'staff', '2017-12-30 23:11:46', 1),
(3, 'clients', '2017-12-30 23:30:55', 1),
(4, 'services', '2017-12-30 23:38:00', 1),
(5, 'company_details', '2018-01-02 10:40:45', 1),
(6, 'setup', '2018-01-02 11:13:15', 1),
(7, 'bookings', '2018-01-02 14:45:18', 1),
(8, 'textanywhere', '2018-01-04 19:07:05', 1),
(9, 'sent', '2018-01-15 12:49:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `IGS_routes`
--

CREATE TABLE `IGS_routes` (
`id` int(11) NOT NULL,
  `route` varchar(200) NOT NULL,
  `controller` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_routes`
--

INSERT INTO `IGS_routes` (`id`, `route`, `controller`) VALUES
(1, 'home', 'admin/test_twig/display/203/211'),
(2, 'forgot-password', 'admin/test_twig/display/205/213'),
(3, 'Log-in', 'admin/test_twig/display/206/214'),
(4, 'reset', 'admin/test_twig/display/207/215'),
(5, 'success', 'admin/test_twig/display/208/216'),
(6, 'Try-us-for-free', 'admin/test_twig/display/209/217'),
(7, 'menuitems', 'admin/test_twig/index_page/menuitems'),
(8, 'menuitems/calender', 'admin/test_twig/display/210/218'),
(9, 'welcome', 'admin/test_twig/display/211/219'),
(10, 'About', 'admin/test_twig/display/212/220'),
(11, 'menuitems/clients', 'admin/test_twig/display/213/218'),
(12, 'menuitems/staff', 'admin/test_twig/display/214/218'),
(13, 'menuitems/services', 'admin/test_twig/display/215/218'),
(14, 'menuitems/setup', 'admin/test_twig/display/216/218'),
(15, 'calendar', 'admin/test_twig/display/217/221'),
(16, 'menuitems/company-profile', 'admin/test_twig/display/218/218'),
(17, 'menuitems/logout', 'admin/test_twig/display/219/218'),
(18, 'buymore', 'admin/test_twig/display/220/222'),
(19, 'menuitems/sent-messages', 'admin/test_twig/display/221/218'),
(20, 'menuitems/logout', 'admin/test_twig/display/222/218');

-- --------------------------------------------------------

--
-- Table structure for table `IGS_section`
--

CREATE TABLE `IGS_section` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sectiontype` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_section`
--

INSERT INTO `IGS_section` (`id`, `name`, `sectiontype`) VALUES
(211, 'home', 'Single'),
(212, 'theme', 'Global'),
(213, 'forgot-password', 'Single'),
(214, 'Log-in', 'Single'),
(215, 'reset', 'Single'),
(216, 'success', 'Single'),
(217, 'Try-us-for-free', 'Single'),
(218, 'menuitems', 'Multiple'),
(219, 'welcome', 'Single'),
(220, 'About', 'Single'),
(221, 'calendar', 'Single'),
(222, 'buymore', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `IGS_section_layout`
--

CREATE TABLE `IGS_section_layout` (
`s_id` int(11) NOT NULL,
  `sectionid` int(11) NOT NULL,
  `fieldid` int(11) NOT NULL,
  `sortorder` int(11) NOT NULL,
  `required` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=941 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_section_layout`
--

INSERT INTO `IGS_section_layout` (`s_id`, `sectionid`, `fieldid`, `sortorder`, `required`) VALUES
(868, 211, 286, 0, 0),
(873, 213, 286, 0, 0),
(874, 214, 286, 0, 0),
(875, 215, 286, 0, 0),
(876, 216, 286, 0, 0),
(877, 217, 286, 0, 0),
(884, 218, 290, 0, 0),
(885, 218, 291, 1, 0),
(886, 218, 293, 2, 0),
(908, 219, 296, 0, 0),
(909, 219, 298, 1, 0),
(911, 220, 286, 0, 0),
(912, 220, 298, 1, 0),
(921, 221, 286, 0, 0),
(931, 212, 287, 0, 0),
(932, 212, 288, 1, 0),
(933, 212, 300, 2, 0),
(934, 212, 289, 3, 0),
(935, 212, 294, 4, 0),
(936, 212, 297, 5, 0),
(937, 212, 292, 6, 0),
(938, 212, 295, 7, 0),
(939, 212, 299, 8, 0),
(940, 222, 286, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `IGS_sent`
--

CREATE TABLE `IGS_sent` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message_name` varchar(512) NOT NULL,
  `message` text NOT NULL,
  `recipient` varchar(255) NOT NULL,
  `sent_on` datetime NOT NULL,
  `type` int(11) NOT NULL,
  `unique_reference` varchar(255) NOT NULL,
  `status_code` varchar(3) NOT NULL,
  `status_desc` varchar(255) NOT NULL,
  `status_update` datetime NOT NULL,
  `booking_reference` varchar(255) NOT NULL,
  `staff_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_sent`
--

INSERT INTO `IGS_sent` (`id`, `user_id`, `message_name`, `message`, `recipient`, `sent_on`, `type`, `unique_reference`, `status_code`, `status_desc`, `status_update`, `booking_reference`, `staff_name`) VALUES
(3, 4, 'Your appointment was cancelled', 'Hi Joe Blogs,Your appointment with booking reference getU3Gc7 was cancelled. Here are the details: Company Name Manicure 2018-01-18T10:15:00. Need to get in touch? Please contact Company Name on 01234567891.', '01234567891', '2018-01-15 15:16:52', 1, '687152921', '600', 'status_desc', '0000-00-00 00:00:00', 'getU3Gc7', 'karen'),
(4, 4, 'Your appointment was resheduled', 'Hi Joe Blogs,Your appointment with booking reference 1DrCHWYd has been updated. Here are the new details:Company Name Manicure 2018-01-20T12:15:00.  Need to change your appointment? Please contact Company Name on 01234567891.', '01234567891', '2018-01-15 15:27:21', 1, '560654747', '600', 'status_desc', '0000-00-00 00:00:00', '1DrCHWYd', 'karen'),
(5, 4, 'Your appointment is confirmed', 'Hi Joe Blogs,Your new appointment with booking reference 1DrCHWYd is confirmed. Here are the details:Company Name Manicure 2018-01-21T11:30:00. Need to change your appointment? Please contact Company Name on 01234567891.', '01234567891', '2018-01-15 15:28:03', 1, '847737632', '600', 'status_desc', '0000-00-00 00:00:00', '1DrCHWYd', 'karen');

-- --------------------------------------------------------

--
-- Table structure for table `IGS_services`
--

CREATE TABLE `IGS_services` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Service_name` varchar(512) NOT NULL,
  `Duration` varchar(215) NOT NULL,
  `Retail_Price` varchar(215) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_services`
--

INSERT INTO `IGS_services` (`id`, `user_id`, `Service_name`, `Duration`, `Retail_Price`) VALUES
(13, 4, 'Massage', '45 minutes', '25.00'),
(14, 4, 'Manicure', '30 minutes', '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `IGS_setup`
--

CREATE TABLE `IGS_setup` (
  `Reschedule_Template` text NOT NULL,
  `Confirm_Template` text NOT NULL,
  `Cancelled_Template` text NOT NULL,
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Enable_Notifications` int(11) NOT NULL,
  `Send_by` varchar(512) NOT NULL,
  `Reminder_advance_notice` varchar(512) NOT NULL,
  `SMS_Template` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_setup`
--

INSERT INTO `IGS_setup` (`Reschedule_Template`, `Confirm_Template`, `Cancelled_Template`, `id`, `user_id`, `Enable_Notifications`, `Send_by`, `Reminder_advance_notice`, `SMS_Template`) VALUES
('Hi CLIENT_FIRST_NAME,Your appointment with booking reference BOOKING_REFERENCE has been updated. Here are the new details:BUSINESS_NAME SERVICE_NAME BOOKING_DATE_TIME At this location: LOCATION_NAME LOCATION_PHONE Need to change your appointment? Please contact BUSINESS_NAME on LOCATION_PHONE.', 'Hi CLIENT_FIRST_NAME,Your new appointment with booking reference BOOKING_REFERENCE is confirmed. Here are the details:BUSINESS_NAME SERVICE_NAME BOOKING_DATE_TIME At this location: LOCATION_NAME LOCATION_PHONE Need to change your appointment? Please contact BUSINESS_NAME on LOCATION_PHONE.', 'Hi CLIENT_FIRST_NAME,Your appointment with booking reference BOOKING_REFERENCE was cancelled. Here are the details: BUSINESS_NAME SERVICE_NAME BOOKING_DATE_TIME At this location:LOCATION_NAME LOCATION_PHONE Need to get in touch? Please contact BUSINESS_NAME on LOCATION_PHONE.', 6, 4, 1, 'SMS', '1 hour', 'Hi CLIENT_FIRST_NAME, this is a friendly reminder about your appointment with BUSINESS_NAME on BOOKING_DATE_TIME, to cancel text LOCATION_PHONE.');

-- --------------------------------------------------------

--
-- Table structure for table `IGS_site`
--

CREATE TABLE `IGS_site` (
  `id` int(11) NOT NULL,
  `site` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `color` varchar(10) NOT NULL,
  `font` varchar(50) NOT NULL,
  `footercolor` varchar(50) NOT NULL,
  `footerfontcolor` varchar(50) NOT NULL,
  `footer1` varchar(5000) NOT NULL,
  `footer2` varchar(5000) NOT NULL,
  `footer3` varchar(5000) NOT NULL,
  `default_page` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_site`
--

INSERT INTO `IGS_site` (`id`, `site`, `logo`, `color`, `font`, `footercolor`, `footerfontcolor`, `footer1`, `footer2`, `footer3`, `default_page`) VALUES
(1, 'test', 'ig2.png', '', '', '', '', '', '', '', 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `IGS_staff`
--

CREATE TABLE `IGS_staff` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `First_Name` varchar(512) NOT NULL,
  `Last_Name` varchar(512) NOT NULL,
  `Mobile_Number` varchar(255) NOT NULL,
  `Email` varchar(512) NOT NULL,
  `Notes` text NOT NULL,
  `Appointment_Colour` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `IGS_textanywhere`
--

CREATE TABLE `IGS_textanywhere` (
`id` int(11) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `External` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_textanywhere`
--

INSERT INTO `IGS_textanywhere` (`id`, `Password`, `External`, `label`) VALUES
(2, 'xxx', 'xxx', 'main');

-- --------------------------------------------------------

--
-- Table structure for table `IGS_user`
--

CREATE TABLE `IGS_user` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `joindate` date NOT NULL,
  `logins` int(11) NOT NULL,
  `is_logged_in` int(11) NOT NULL,
  `isadmin` int(11) NOT NULL,
  `companyid` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(15) NOT NULL,
  `activ_status` int(11) NOT NULL,
  `activ_key` varchar(1000) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `credits` int(11) NOT NULL,
  `permissiongroup` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_user`
--

INSERT INTO `IGS_user` (`id`, `name`, `password`, `joindate`, `logins`, `is_logged_in`, `isadmin`, `companyid`, `company`, `email`, `number`, `activ_status`, `activ_key`, `logo`, `about`, `credits`, `permissiongroup`, `fullname`) VALUES
(4, 'admin', '$2y$10$KMouG0nlZffhDS6P6zTph.bTDZ14RDACmW7N8IcpNJ30wu3EatJRW', '2017-11-30', 92, 0, 1, 0, '', 'email@gmail.com', '', 0, '', '', '', 86, 1, ''),
(5, 'sara', '$2y$10$NJ5AA9NEV9kTvAmPbCLq/.Kb5Fk6nsWN6Td1CKJ5.E7pAO5CKBO3K', '2018-01-02', 0, 0, 0, 0, '', 'sara@mail.com', '', 0, '', '', '', 0, 42, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `IGS_assetfields`
--
ALTER TABLE `IGS_assetfields`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_blocks`
--
ALTER TABLE `IGS_blocks`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_bookings`
--
ALTER TABLE `IGS_bookings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_cats`
--
ALTER TABLE `IGS_cats`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_cat_links`
--
ALTER TABLE `IGS_cat_links`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_clients`
--
ALTER TABLE `IGS_clients`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_company_details`
--
ALTER TABLE `IGS_company_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_content`
--
ALTER TABLE `IGS_content`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_email`
--
ALTER TABLE `IGS_email`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_entry`
--
ALTER TABLE `IGS_entry`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_fields`
--
ALTER TABLE `IGS_fields`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_menu`
--
ALTER TABLE `IGS_menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_menu2`
--
ALTER TABLE `IGS_menu2`
 ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `IGS_permissions`
--
ALTER TABLE `IGS_permissions`
 ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `IGS_permission_groups`
--
ALTER TABLE `IGS_permission_groups`
 ADD PRIMARY KEY (`groupID`);

--
-- Indexes for table `IGS_permission_map`
--
ALTER TABLE `IGS_permission_map`
 ADD PRIMARY KEY (`groupID`,`permissionID`);

--
-- Indexes for table `IGS_plugins`
--
ALTER TABLE `IGS_plugins`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_routes`
--
ALTER TABLE `IGS_routes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_section`
--
ALTER TABLE `IGS_section`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_section_layout`
--
ALTER TABLE `IGS_section_layout`
 ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `IGS_sent`
--
ALTER TABLE `IGS_sent`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_services`
--
ALTER TABLE `IGS_services`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_setup`
--
ALTER TABLE `IGS_setup`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_staff`
--
ALTER TABLE `IGS_staff`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_textanywhere`
--
ALTER TABLE `IGS_textanywhere`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `IGS_user`
--
ALTER TABLE `IGS_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `IGS_assetfields`
--
ALTER TABLE `IGS_assetfields`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=204;
--
-- AUTO_INCREMENT for table `IGS_blocks`
--
ALTER TABLE `IGS_blocks`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `IGS_bookings`
--
ALTER TABLE `IGS_bookings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `IGS_cats`
--
ALTER TABLE `IGS_cats`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `IGS_cat_links`
--
ALTER TABLE `IGS_cat_links`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `IGS_clients`
--
ALTER TABLE `IGS_clients`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `IGS_company_details`
--
ALTER TABLE `IGS_company_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `IGS_content`
--
ALTER TABLE `IGS_content`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=224;
--
-- AUTO_INCREMENT for table `IGS_email`
--
ALTER TABLE `IGS_email`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `IGS_entry`
--
ALTER TABLE `IGS_entry`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=223;
--
-- AUTO_INCREMENT for table `IGS_fields`
--
ALTER TABLE `IGS_fields`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=301;
--
-- AUTO_INCREMENT for table `IGS_menu2`
--
ALTER TABLE `IGS_menu2`
MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `IGS_permissions`
--
ALTER TABLE `IGS_permissions`
MODIFY `permissionID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `IGS_permission_groups`
--
ALTER TABLE `IGS_permission_groups`
MODIFY `groupID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `IGS_plugins`
--
ALTER TABLE `IGS_plugins`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `IGS_routes`
--
ALTER TABLE `IGS_routes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `IGS_section`
--
ALTER TABLE `IGS_section`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=223;
--
-- AUTO_INCREMENT for table `IGS_section_layout`
--
ALTER TABLE `IGS_section_layout`
MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=941;
--
-- AUTO_INCREMENT for table `IGS_sent`
--
ALTER TABLE `IGS_sent`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `IGS_services`
--
ALTER TABLE `IGS_services`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `IGS_setup`
--
ALTER TABLE `IGS_setup`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `IGS_staff`
--
ALTER TABLE `IGS_staff`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `IGS_textanywhere`
--
ALTER TABLE `IGS_textanywhere`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `IGS_user`
--
ALTER TABLE `IGS_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
