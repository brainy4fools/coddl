-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 28, 2017 at 11:26 AM
-- Server version: 5.5.38
-- PHP Version: 5.5.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `template`
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
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=latin1;

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
-- Table structure for table `IGS_cats`
--

CREATE TABLE `IGS_cats` (
`id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
  `url` varchar(50) DEFAULT NULL,
  `boxcolor` varchar(100) DEFAULT NULL,
  `icon` text,
  `logowidth` varchar(10) DEFAULT NULL,
  `welcome` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=212 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_content`
--

INSERT INTO `IGS_content` (`id`, `entryid`, `entrytitle`, `test`, `color`, `bgcolor`, `logo`, `name`, `url`, `boxcolor`, `icon`, `logowidth`, `welcome`) VALUES
(204, 203, '', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(205, 204, '', NULL, 'DE3A3A', 'F2F2F2', NULL, NULL, NULL, 'BDBBBB', NULL, '100', 'Welcome to this CMS'),
(206, 205, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(207, 206, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(208, 207, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(209, 208, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(210, 209, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(211, 210, 'Testing', NULL, NULL, NULL, NULL, 'testing', 'test', NULL, 'fa-save', NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=211 DEFAULT CHARSET=latin1;

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
(210, 218, 'Multiple', '0000-00-00');

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
) ENGINE=InnoDB AUTO_INCREMENT=296 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_fields`
--

INSERT INTO `IGS_fields` (`name`, `type`, `opts`, `instructions`, `maxchars`, `limitamount`, `formvalidation`, `settings`, `id`) VALUES
('test', 'plain-text', '', 'test', '10', 0, 'max_length[10]', '', 286),
('color', 'color', '', 'Site color', '', 0, 'min_length[1]', '', 287),
('bgcolor', 'color', '', 'Background Colour', '', 0, 'min_length[1]', '', 288),
('logo', 'file-upload', '', 'Site logo', '', 1, 'gif|jpg|png', '', 289),
('name', 'plain-text', '', 'Menu item title', '20', 0, 'max_length[20]', '', 290),
('url', 'plain-text', '', 'Menu item url', '50', 0, 'max_length[50]', '', 291),
('boxcolor', 'color', '', 'The border colour for the main pages', '', 0, 'min_length[1]', '', 292),
('icon', 'drop-down', 'fa-unlock,fa-group,fa-user,fa-off,fa-cog,fa-calendar,fa-credit-card,fa-dashboard,fa-cloud,fa-save', 'Icon for the dashboard', '', 0, 'min_length[1]', '', 293),
('logowidth', 'plain-text', '', 'The logo width in pixels', '10', 0, 'max_length[10]', '', 294),
('welcome', 'plain-text', '', 'The welcome message', '200', 0, 'max_length[200]', '', 295);

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
(1, '\n<li class="dd-item dd3-item" id="idYFO1MQ6xr52boImw">\n				<div class="dd-handle dd3-handle"></div>\n				<div class="dd3-content">home</div>\n				<div class="url" style="display:none;">211</div>\n				<div class="dd-edit"><i id="remove" u_id="idYFO1MQ6xr52boImw" class="fa fa-trash-o"></i></div>\n				</li>\n', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_menu2`
--

INSERT INTO `IGS_menu2` (`id`, `father`, `tag`, `innerhtml`, `s_id`) VALUES
(0, 'null', 'tag', ' home| 211| ', 12);

-- --------------------------------------------------------

--
-- Table structure for table `IGS_permissions`
--

CREATE TABLE `IGS_permissions` (
`permissionID` int(11) NOT NULL,
  `permission` varchar(200) DEFAULT NULL,
  `order_position` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

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
(19, 'plugins', 19);

-- --------------------------------------------------------

--
-- Table structure for table `IGS_permission_groups`
--

CREATE TABLE `IGS_permission_groups` (
`groupID` int(11) NOT NULL,
  `groupName` varchar(200) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_permission_groups`
--

INSERT INTO `IGS_permission_groups` (`groupID`, `groupName`) VALUES
(1, 'Administrators');

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
(1, 19);

-- --------------------------------------------------------

--
-- Table structure for table `IGS_plugins`
--

CREATE TABLE `IGS_plugins` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `install` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `IGS_routes`
--

CREATE TABLE `IGS_routes` (
`id` int(11) NOT NULL,
  `route` varchar(200) NOT NULL,
  `controller` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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
(8, 'menuitems/testing', 'admin/test_twig/display/210/218');

-- --------------------------------------------------------

--
-- Table structure for table `IGS_section`
--

CREATE TABLE `IGS_section` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sectiontype` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=219 DEFAULT CHARSET=latin1;

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
(218, 'menuitems', 'Multiple');

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
) ENGINE=InnoDB AUTO_INCREMENT=898 DEFAULT CHARSET=latin1;

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
(892, 212, 287, 0, 0),
(893, 212, 288, 1, 0),
(894, 212, 289, 2, 0),
(895, 212, 294, 3, 0),
(896, 212, 292, 4, 0),
(897, 212, 295, 5, 0);

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
(1, 'test', 'ig2.png', '', '', '', '', '', '', '', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `IGS_user`
--

INSERT INTO `IGS_user` (`id`, `name`, `password`, `joindate`, `logins`, `is_logged_in`, `isadmin`, `companyid`, `company`, `email`, `number`, `activ_status`, `activ_key`, `logo`, `about`, `credits`, `permissiongroup`, `fullname`) VALUES
(4, 'admin', '$2y$10$KMouG0nlZffhDS6P6zTph.bTDZ14RDACmW7N8IcpNJ30wu3EatJRW', '2017-11-30', 9, 0, 1, 0, '', 'email@gmail.com', '', 0, '', '', '', 0, 1, '');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=198;
--
-- AUTO_INCREMENT for table `IGS_blocks`
--
ALTER TABLE `IGS_blocks`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `IGS_cats`
--
ALTER TABLE `IGS_cats`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `IGS_cat_links`
--
ALTER TABLE `IGS_cat_links`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `IGS_content`
--
ALTER TABLE `IGS_content`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=212;
--
-- AUTO_INCREMENT for table `IGS_email`
--
ALTER TABLE `IGS_email`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `IGS_entry`
--
ALTER TABLE `IGS_entry`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=211;
--
-- AUTO_INCREMENT for table `IGS_fields`
--
ALTER TABLE `IGS_fields`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=296;
--
-- AUTO_INCREMENT for table `IGS_menu2`
--
ALTER TABLE `IGS_menu2`
MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `IGS_permissions`
--
ALTER TABLE `IGS_permissions`
MODIFY `permissionID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `IGS_permission_groups`
--
ALTER TABLE `IGS_permission_groups`
MODIFY `groupID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `IGS_plugins`
--
ALTER TABLE `IGS_plugins`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `IGS_routes`
--
ALTER TABLE `IGS_routes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `IGS_section`
--
ALTER TABLE `IGS_section`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=219;
--
-- AUTO_INCREMENT for table `IGS_section_layout`
--
ALTER TABLE `IGS_section_layout`
MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=898;
--
-- AUTO_INCREMENT for table `IGS_user`
--
ALTER TABLE `IGS_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
