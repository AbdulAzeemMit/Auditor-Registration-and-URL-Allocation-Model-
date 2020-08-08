-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 09:07 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nic`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `critical_code` text NOT NULL,
  `auditor_code` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `url`, `critical_code`, `auditor_code`, `date`, `remarks`) VALUES
(453, 'nn.pp', 'More_Critical', 'AKS-IT2Deepak Agarwal', '2019-07-23 22:36:55', ''),
(454, 'mm.pp', 'Critical', 'PWCRahul Singh', '2019-07-23 22:42:59', ''),
(455, 'hdkf.co', 'Critical', 'c11aud2', '2019-07-24 06:09:06', ''),
(456, 'c.oc', 'More_Critical', 'c11aud2', '2019-07-24 06:54:03', '');

-- --------------------------------------------------------

--
-- Table structure for table `auditor`
--

CREATE TABLE `auditor` (
  `SN` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `auditor_name` text NOT NULL,
  `email` text NOT NULL,
  `company_name` text NOT NULL,
  `role` text NOT NULL,
  `date` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auditor`
--

INSERT INTO `auditor` (`SN`, `code`, `auditor_name`, `email`, `company_name`, `role`, `date`, `remarks`) VALUES
(1, 'AKS-IT2Deepak Agarwal', 'Deepak Agarwal', 'appsecmon1@nic.in', 'AKS-IT2', 'Auditor', '2019-07-19 01:09:59', ''),
(2, 'AKS-IT2Sonika Singh', 'Sonika Singh', 'appsecmon7@nic.in', 'AKS-IT2', 'Auditor', '2019-07-19 01:09:59', ''),
(25, 'c11aud2', 'aud2', '', 'c11', 'Auditor', '2019-07-24 04:21:12', ''),
(26, 'c11aud3', 'aud3', '', 'c11', 'Auditor', '2019-07-24 04:21:12', ''),
(17, 'PWCNeha Sharma', 'Neha Sharma', 'appsecmon14@nic.in', 'PWC', 'Auditor', '2019-07-19 01:09:58', ''),
(18, 'PWCRahul Singh', 'Rahul Singh', 'appsecmon9@nic.in', 'PWC', 'Auditor', '2019-07-19 01:09:58', ''),
(19, 'PWCVikas Suman', 'Vikas Suman', 'appsecmon3@nic.in', 'PWC', 'Auditor', '2019-07-19 01:09:59', ''),
(20, 'SEAkash Deep', 'Akash Deep', 'appsecmon2@nic.in', 'SE', 'Auditor', '2019-07-19 01:09:58', ''),
(21, 'SEHarsh Anandani', 'Harsh Anandani', 'appsecmon6@nic.in', 'SE', 'Auditor', '2019-07-19 01:09:58', ''),
(22, 'SEKamal Gupta', 'Kamal Gupta', 'appsecmon5@nic.in', 'SE', 'Auditor', '2019-07-19 01:09:58', '');

-- --------------------------------------------------------

--
-- Table structure for table `critical`
--

CREATE TABLE `critical` (
  `code` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `critical`
--

INSERT INTO `critical` (`code`, `name`, `date`, `remarks`) VALUES
(1, 'stackoverflow.com/questions/8454510/open-url-in-same-window-and-in-same-tab', '2019-06-24 05:27:11', 'avg'),
(2, 'stackoverflow.com/questions/8454510/open-url-in-same-window-and-in-same-tab', '2019-06-24 05:27:11', 'avg'),
(3, 'stackoverflow.com/questions/8454510/open-url-in-same-window-and-in-same-tab', '2019-06-24 05:27:11', 'avg'),
(4, 'stackoverflow.com/questions/8454510/open-url-in-same-window-and-in-same-tab', '2019-06-24 05:27:31', 'avg'),
(5, 'codingcyber.org/simple-captcha-script-php-5765/', '2019-06-25 12:06:22', 'avg'),
(6, 'www.php.net/manual/en/function.imagejpeg.php', '2019-06-25 12:06:23', 'avg'),
(7, 'www.w3resource.com/php/function-reference/isset.php', '2019-06-25 12:06:23', 'avg'),
(8, 'www.w3schools.com/php/func_misc_die.asp', '2019-06-27 09:05:43', 'avg'),
(9, 'www.w3schools.com/php/func_misc_die.asp', '2019-06-27 09:05:43', 'avg'),
(10, 'www.w3schools.com/php/func_misc_die.asp', '2019-06-27 09:05:43', 'avg'),
(11, 'www.w3schools.com/php/func_misc_die.asp', '2019-06-27 09:07:03', 'avg'),
(12, 'www.w3schools.com/php/func_misc_die.asp', '2019-06-27 09:07:03', 'avg'),
(13, 'www.w3schools.com/php/func_misc_die.asp', '2019-06-27 09:07:03', 'avg'),
(14, 'www.php.net/manual/en/reserved.variables.cookies.php', '2019-06-27 11:23:40', 'avg'),
(15, 'www.php.net/manual/en/reserved.variables.cookies.php', '2019-06-27 11:23:40', 'avg'),
(16, 'www.php.net/manual/en/reserved.variables.cookies.php', '2019-06-27 11:23:40', 'avg'),
(17, 'www.php.net/manual/en/reserved.variables.cookies.php', '2019-06-27 11:25:33', 'avg'),
(18, 'www.php.net/manual/en/reserved.variables.cookies.php', '2019-06-27 11:25:33', 'avg'),
(19, 'www.php.net/manual/en/reserved.variables.cookies.php', '2019-06-27 11:25:33', 'avg'),
(20, 'www.formget.com/multi-page-form-', '2019-06-27 11:29:23', 'avg'),
(21, 'www.w3resource.com/php/statement', '2019-06-27 11:29:24', 'avg'),
(22, 'onlinecourses.nptel.ac.in', '2019-06-28 05:20:09', 'avg'),
(23, 'onlinecourses.nptel.ac.in', '2019-06-28 05:20:09', 'avg'),
(24, 'www.tutorialspoint.com/execute_smlnj_online.php', '2019-06-28 06:06:55', 'avg'),
(25, 'www.tutorialspoint.com/execute_smlnj_online.php', '2019-06-28 06:06:55', 'avg'),
(26, 'nptel.ac.in/noc/index.php', '2019-06-28 06:10:08', 'test1'),
(27, 'nptel.ac.in/noc/inde', '2019-06-28 06:10:08', 'test2'),
(28, 'nptel.ac.in/noc/index.phpkjhfjdkf', '2019-06-28 06:10:08', 'test3'),
(29, 'nptel.ac.in/noc/index.php;ljfkdjkdjf', '2019-06-28 06:10:08', 'test4'),
(30, 'www.quora.com/How-do-you-add-extra-whitespace-in-P', '2019-06-28 07:22:55', 'null'),
(31, 'www.quora.com/How-do-you-add-extra-', '2019-06-28 07:22:55', 'null1'),
(32, 'www.quora.com/How-do-you-add-extra-w', '2019-06-28 07:22:56', 'null2'),
(33, 'www.quora.com/How-do-you-add-extra-whitespace-in-P', '2019-06-28 07:23:11', 'null'),
(34, 'www.quora.com/How-do-you-add-extra-', '2019-06-28 07:23:11', 'null1'),
(35, 'www.quora.com/How-do-you-add-extra-w', '2019-06-28 07:23:11', 'null2'),
(36, 'www.quora.com/How-do-you-add-extra-whitespace-in-P', '2019-06-28 07:23:56', 'null'),
(37, 'www.quora.com/How-do-you-add-extra-', '2019-06-28 07:23:57', 'null1'),
(38, 'www.quora.com/How-do-you-add-extra-w', '2019-06-28 07:23:57', 'null2'),
(39, 'flkd.co', '2019-06-28 08:42:33', 'test'),
(40, 'abc.com', '2019-06-28 08:56:56', ''),
(41, 'gjy.no.ni', '2019-06-28 08:56:56', ''),
(42, 'metasploit.help.rapid7.com/docs/installing', '2019-07-02 06:25:26', ''),
(43, 'abc.com', '2019-07-02 09:42:41', '<script>alert();</script>'),
(44, 'gec.com', '2019-07-02 09:42:41', '<script>alert();</script>'),
(45, 'www.networkworld.com/article/3296740/', '2019-07-02 10:07:31', ''),
(46, 'www.networkworld.com/article/3296740/;kjlk', '2019-07-02 10:07:31', ''),
(47, 'www.networkworld.com/article/3296740/', '2019-07-02 10:07:31', ''),
(48, 'www.google.com/search?q=IC', '2019-07-02 10:38:35', '<script>alert();</script>'),
(49, 'metasploit.help.rapid7.com/docs/msf', '2019-07-03 05:48:35', '<script>alert();</script>'),
(50, 'metasploit.help.rapid7.com/docs/msf', '2019-07-03 05:48:35', ''),
(51, 'metasploit.help.rapid7.com/docs/msf', '2019-07-03 05:48:35', ''),
(52, 'subscription.packtpub.com/book/net', '2019-07-03 05:54:27', 'valid'),
(53, 'subscription.packtpub.com/book/net', '2019-07-03 05:54:27', ''),
(54, 'subscription.packtpub.com/book/net', '2019-07-03 05:54:27', ''),
(55, 'subscription.packtpub.com/book/net', '2019-07-03 05:55:00', '989d89'),
(56, 'subscription.packtpub.com/book/net', '2019-07-03 05:55:00', ''),
(57, 'subscription.packtpub.com/book/net', '2019-07-03 05:55:00', ''),
(58, 'subscription.packtpub.com/book/net', '2019-07-03 05:57:31', 'valid'),
(59, 'subscription.packtpub.com/book/net', '2019-07-03 05:57:31', ''),
(60, 'subscription.packtpub.com/book/net', '2019-07-03 05:58:10', 'valid'),
(61, 'subscription.packtpub.com/book/net', '2019-07-03 05:58:10', ''),
(62, 'subscription.packtpub.com/book/net', '2019-07-03 06:00:04', 'validremarks'),
(63, 'subscription.packtpub.com/book/net', '2019-07-03 06:00:24', 'validrmarks'),
(64, 'subscription.packtpub.com/book/net', '2019-07-03 06:01:30', 'valid_rmarks'),
(65, 'subscription.packtpub.com/book/net', '2019-07-03 06:01:30', ''),
(66, 'www.dofactory.com/sql/group-by', '2019-07-03 06:23:50', 'remarks1'),
(67, 'www.dofactory.com/sql/group-by', '2019-07-03 06:23:50', 'remarks1'),
(68, 'www.dofactory.com/sql/group-byklghhgv', '2019-07-03 06:23:50', ''),
(69, 'www.dofactory.com/sql/grou', '2019-07-03 06:23:50', ''),
(70, 'eonasdan.go', '2019-07-03 10:11:49', ''),
(71, 'mdbootstrap1.co', '2019-07-03 10:35:51', ''),
(72, 'mdbootstrap2.co', '2019-07-03 10:35:51', ''),
(73, 'mdbootstrap3.co', '2019-07-03 10:35:51', ''),
(74, 'www.w3schools.com/js/js', '2019-07-04 20:02:35', ''),
(75, 'www.w3schools.com/js/js', '2019-07-04 20:02:36', ''),
(76, 'www.w3schools.com/bootstrap/bootstrap', '2019-07-06 07:32:54', ''),
(77, 'www.w3schools.com/bootstrap/bootstrap', '2019-07-06 07:32:54', ''),
(78, 'www.w3schools.com/bootstrap/bootstrapmndmfnmfnmd', '2019-07-06 07:36:00', ''),
(79, 'ccc.w3schools.com/bootstrap/bootstrap', '2019-07-06 07:36:00', ''),
(80, 'www.w3schools.com/bootstrap/bootstrap', '2019-07-06 07:45:09', ''),
(81, 'www.w3schools.com/bootstrap/bootstrap', '2019-07-06 07:45:09', ''),
(82, 'www.w3schools.com/css/css_form.asp', '2019-07-06 17:31:30', ''),
(83, 'www.w3schools.com/css/css_form.asp', '2019-07-06 17:31:30', ''),
(84, 'www.w3schools.com/css/css_form.asp', '2019-07-06 17:31:30', ''),
(85, 'www.w3schools.com/css/css_form.asp', '2019-07-06 17:37:31', ''),
(86, 'www.w3schools.com/css/css_form.asp', '2019-07-06 17:37:31', ''),
(87, 'www.w3schools.com/css/css_form.asp', '2019-07-06 17:43:20', ''),
(88, 'www.w3schools.com/css/css_form.asp', '2019-07-06 17:53:07', ''),
(89, 'www.w3schools.com/css/css_form.asp', '2019-07-06 17:59:40', '00000'),
(90, 'www.w3schools.com/css/css_form.asp', '2019-07-06 17:59:40', ''),
(91, 'www.w3schools.com/css/css_form.asp', '2019-07-06 17:59:40', ''),
(92, 'www.w3schools.com/css/css_form.asp', '2019-07-06 17:59:41', ''),
(93, 'www.w3schools.com/css/css_form.asp', '2019-07-06 17:59:41', ''),
(94, 'www.w3schools.com/css/css_form.asp', '2019-07-06 17:59:41', ''),
(95, 'www.w3schools.com/css/css_form.asp', '2019-07-06 17:59:41', ''),
(96, 'www.w3schools.com/colors/colors_', '2019-07-07 07:38:18', ''),
(97, 'www.w3schools.com/colors/colors_', '2019-07-07 07:38:18', ''),
(98, 'phppot.com/php/php-jquer', '2019-07-07 07:43:49', ''),
(99, 'phppot.com/php/php-jquer', '2019-07-07 07:43:49', ''),
(100, 'www.w3schools.com/colors/colors_pijlkd', '2019-07-08 05:12:31', ''),
(101, 'www.w3schools.com/colors/colors_pijlkd', '2019-07-08 05:12:31', ''),
(102, 'www.w3schools.co', '2019-07-08 08:26:41', ''),
(103, 'www.w3schools.com', '2019-07-08 08:26:41', ''),
(104, 'www.w3schools.co', '2019-07-08 08:27:01', ''),
(105, 'www.w3schools.com', '2019-07-08 08:27:01', ''),
(106, 'www.w3schools.com', '2019-07-08 08:27:40', 'r2'),
(107, 'www.w3schools.co', '2019-07-08 08:30:10', ''),
(108, 'www.w3schools.com', '2019-07-08 08:30:10', ''),
(109, 'www.w3schools.co', '2019-07-08 08:30:33', ''),
(110, 'www.w3schools.com', '2019-07-08 08:30:33', ''),
(111, 'www.w3schools.co', '2019-07-08 08:31:39', ''),
(112, 'www.w3schools.com', '2019-07-08 08:31:39', ''),
(113, 'www.w3schools.co', '2019-07-08 08:40:31', ''),
(114, 'www.w3schools.con', '2019-07-08 08:40:31', ''),
(115, 'www.w3schools.co', '2019-07-08 08:42:18', 'b'),
(116, 'www.w3schools.com', '2019-07-08 08:42:18', ''),
(117, 'www.w3schools.co', '2019-07-08 08:49:42', 'aa'),
(118, 'www.w3schools.co', '2019-07-08 09:05:16', ''),
(119, 'www.w3schools.com', '2019-07-08 09:05:16', ''),
(120, 'www.w3schools.co', '2019-07-08 09:05:52', ''),
(121, 'www.w3schools.com', '2019-07-08 09:05:52', ''),
(122, 'www.w3schools.com/colors/col', '2019-07-08 18:36:50', ''),
(123, 'www.w3schools.com/colors/coljk', '2019-07-08 18:36:50', ''),
(124, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:15', ''),
(125, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:16', ''),
(126, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:16', ''),
(127, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:16', ''),
(128, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:16', ''),
(129, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:16', ''),
(130, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:16', ''),
(131, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:16', ''),
(132, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:16', ''),
(133, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:16', ''),
(134, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:16', ''),
(135, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:16', ''),
(136, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:16', ''),
(137, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:16', ''),
(138, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:17', ''),
(139, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:17', ''),
(140, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:17', ''),
(141, 'www.google.com/search?q=how+to+d', '2019-07-09 06:18:17', ''),
(142, 'www.w3schools.com/howto/howto_js_nav', '2019-07-09 10:39:31', ''),
(143, 'www.w3schools.com/howto/howto_js_navnnnnn', '2019-07-09 10:39:32', ''),
(144, 'getbootstrap.com/docs/4.0/', '2019-07-09 12:02:18', ''),
(145, 'www.google.com/search?q=how+to', '2019-07-11 08:35:30', ''),
(146, 'www.google.com/search?q=how+to', '2019-07-11 09:05:30', ''),
(147, 'onlinecourses.nptel.ac.in', '2019-07-15 06:34:39', ''),
(148, '123.com', '2019-07-16 06:43:08', ''),
(149, 'xyz.com', '2019-07-16 06:43:08', ''),
(150, '456.com', '2019-07-16 06:43:08', ''),
(151, 'stackoverflow.com/questions/3959236/how-to-change-c', '2019-07-16 08:36:01', ''),
(152, 'stackoverflow.com/questions/3959236/how-to-change-cmm', '2019-07-16 08:36:02', ''),
(153, 'stackoverflow.com/questions/3959236/how-to-change-c12', '2019-07-16 08:36:02', ''),
(154, 'stackoverflow.com/questions/3959236/how-to', '2019-07-16 08:36:02', ''),
(155, 'hyperledger-fabric.readthedocs.io/2', '2019-07-18 20:16:41', ''),
(156, 'hyperledger-fabric.readthedocs.io/3', '2019-07-18 20:16:41', ''),
(157, 'onlinecourses1.nptel.ac.in', '2019-07-20 12:18:58', ''),
(158, 'onlinecourses2.nptel.ac.in', '2019-07-20 12:18:58', ''),
(159, 'onlinecourses3.nptel.ac.in', '2019-07-20 12:18:58', ''),
(160, 'onlinecourses4.nptel.ac.in', '2019-07-20 12:18:58', ''),
(161, 'onlinecourses5.nptel.ac.in', '2019-07-20 12:18:58', ''),
(162, 'onlinecourses101.nptel.ac.in', '2019-07-20 12:24:15', ''),
(163, 'onlinecourses9.nptel.ac.in', '2019-07-20 12:26:11', ''),
(164, 'onlinecourse1s.nptel.ac.in', '2019-07-20 12:36:21', ''),
(165, 'onlinecourses1.nptel.ac.in', '2019-07-20 12:39:00', ''),
(166, 'onlinecourses2.nptel.ac.in', '2019-07-20 12:39:00', ''),
(167, 'onlinecourses3.nptel.ac.in', '2019-07-20 12:39:00', ''),
(168, 'onlinecourses4.nptel.ac.in', '2019-07-20 12:39:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `item_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `item_name`, `item_price`) VALUES
(8, 'sksldfn', 54),
(9, 'sksldfn', 0),
(10, 'sksldfn', 54),
(11, 'sksldfn', 0),
(12, 'abc', 0),
(13, '', 0),
(14, 'abc', 0),
(15, '', 0),
(16, 'aa', 0),
(17, 'aa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `code` int(11) NOT NULL,
  `URL` text NOT NULL,
  `Vulnerablity` text NOT NULL,
  `Assign` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `password` text NOT NULL,
  `isadmin` tinyint(1) NOT NULL,
  `code` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `isadmin`, `code`, `date`) VALUES
(11, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 1, 'admin1', '2019-07-23 18:34:17'),
(405, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'SEAkash Deep', '2019-07-18 19:39:58'),
(406, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'SEKamal Gupta', '2019-07-18 19:39:58'),
(407, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'PWCNeha Sharma', '2019-07-18 19:39:58'),
(408, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'PWCRahul Singh', '2019-07-18 19:39:58'),
(409, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'SEHarsh Anandani', '2019-07-18 19:39:58'),
(410, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'AKS-IT2Sonika Singh', '2019-07-18 19:39:58'),
(411, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'AKS-IT2Deepak Agarwal', '2019-07-18 19:39:59'),
(412, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'PWCVikas Suman', '2019-07-18 19:39:59'),
(415, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c5aud3', '2019-07-20 13:42:23'),
(416, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c5aud4', '2019-07-20 13:46:31'),
(417, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c5aud5', '2019-07-20 13:46:31'),
(418, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c5aud6', '2019-07-20 13:48:39'),
(419, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c5aud7', '2019-07-20 13:49:46'),
(420, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c5aud8', '2019-07-20 13:51:45'),
(421, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c5aud9', '2019-07-20 13:52:01'),
(423, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c5aud11', '2019-07-20 13:53:43'),
(425, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c5aud13', '2019-07-22 08:30:11'),
(426, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c5<>', '2019-07-21 19:11:10'),
(427, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c5aud99', '2019-07-22 17:56:09'),
(428, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c5aud100', '2019-07-22 18:01:38'),
(429, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c5auditor2', '2019-07-22 18:14:11'),
(430, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c5auditor3', '2019-07-22 18:14:23'),
(436, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c5aud22', '2019-07-23 09:29:07'),
(437, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c5aud30', '2019-07-23 17:47:48'),
(439, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c11aud2', '2019-07-23 22:51:12'),
(440, '3ff2b8e69efa4d028602b13918f05bdcd2b5c1b5', 0, 'c11aud3', '2019-07-23 22:51:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auditor`
--
ALTER TABLE `auditor`
  ADD PRIMARY KEY (`code`),
  ADD UNIQUE KEY `SN` (`SN`);

--
-- Indexes for table `critical`
--
ALTER TABLE `critical`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;

--
-- AUTO_INCREMENT for table `auditor`
--
ALTER TABLE `auditor`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `critical`
--
ALTER TABLE `critical`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=443;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
