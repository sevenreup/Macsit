-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 03:39 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `macsit`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `category_image`, `created_at`) VALUES
(1, 9, 'Technology', 'Tech.png', '2017-10-30 13:45:44'),
(2, 9, 'Music', 'music.png', '2017-10-30 13:51:27'),
(3, 9, 'Networking', 'net.png', '2017-10-30 14:13:07'),
(4, 9, 'mcsit', '1_(1).png', '2017-11-08 11:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(1, 126, 'sevenreup4ill', 'chris7phiri@gmail.com', 'shit', '2017-10-15 22:01:46'),
(2, 126, 'sevenreup4ill', 'chris7phiri@gmail.com', 'Dafuq you saying man shit aint funny at all', '2017-10-16 20:11:34'),
(3, 123, 'sevenreup4ill', 'chris7phiri@gmail.com', 'asedrtyui', '2017-10-18 21:52:04'),
(4, 123, 'sevenreup4ill', 'chris7phiri@gmail.com', 'This shit can go on for ever just shut the fuck up and shit..', '2017-10-19 22:14:21'),
(5, 127, 'Xperia ', 'chris7phirity@gmail.com', 'Can I try to post a comment ', '2017-10-23 20:16:43'),
(6, 128, 'austinmwandoloma', 'austinmwandoloma@outlook.com', 'Djgykg', '2017-10-23 20:26:17'),
(7, 129, 'Watipa', 'watiechirambo@gmail.com', 'This guy comments they this shit\r\n', '2017-10-24 16:48:37'),
(8, 129, 'Watipa', 'watiechirambo@gmail.com', 'Again ', '2017-10-24 16:48:50'),
(9, 1, 'sevenreup4ill', 'chris7phiri@gmail.com', 'This is the first comment', '2017-10-30 14:34:57'),
(10, 1, 'sevenreup4ill', 'chris7phiri@gmail.com', 'This is a comment and shit', '2017-11-04 14:43:50'),
(11, 1, 'sevenreup4ill', 'chris7phiri@gmail.com', 'fghuio', '2017-11-04 14:45:39'),
(12, 4, 'sevenreup4ill', 'chris7phiri@gmail.com', 'This is a test comment', '2017-11-07 14:58:57'),
(13, 4, 'sevenreup4ill', 'chris7phiri@gmail.com', 'More comments', '2017-11-07 15:27:18'),
(14, 5, 'sevenreup4ill', 'chris7phiri@gmail.com', 'qweet', '2017-11-08 11:19:36'),
(15, 5, 'sevenreup4ill', 'chris7phiri@gmail.com', 'errt666777y', '2018-01-02 12:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_place` varchar(255) NOT NULL,
  `event_date` date DEFAULT NULL,
  `event_speaker` varchar(255) NOT NULL,
  `event_body` text NOT NULL,
  `event_img` varchar(255) NOT NULL,
  `event_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_title`, `event_place`, `event_date`, `event_speaker`, `event_body`, `event_img`, `event_slug`) VALUES
(1, 'Fundraising Tuesday', 'Libray', '0000-00-00', 'guy dude', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n	tempor incididunt ut labore et dolore magna', 'IMG-20170307-WA0016.jpg', 'Fundraising-Tuesday'),
(2, 'Coding Grounds', 'B4', '0000-00-00', 'guy dude', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n	tempor incididunt ut labore et dolore magna', 'IMG-20170307-WA0015.jpg', 'Coding-Grounds'),
(3, 'Computer Fixing', 'Blantyre', '2001-11-11', 'guy dude', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n	tempor incididunt ut labore et dolore magna', 'IMG-20170307-WA0014.jpg', 'Computer-Fixing'),
(4, 'Social Assembly', 'C2', '2017-11-17', 'guy dude', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n	tempor incididunt ut labore et dolore magna', 'IMG-20170307-WA0012.jpg', 'Social-Assembly');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT '0.1',
  `position_name` varchar(255) NOT NULL,
  `duties` text NOT NULL,
  `more_info` text NOT NULL,
  `pos_slug` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `user_id`, `position_name`, `duties`, `more_info`, `pos_slug`, `post_image`) VALUES
(1, '10', 'President', 'This guy does allot of presidental stuff and more stuff he does.', '<p>First Title</p>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:50%">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style="width:50%">\r\n			<h3>First first title</h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Second Title</td>\r\n			<td>&nbsp;</td>\r\n			<td>Secnd second title</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. &nbsp;</p>\r\n', 'President', 'IMG-20170307-WA0042.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `preview` text NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `preview`, `body`, `post_image`, `created_at`) VALUES
(1, 3, 9, 'This is the first real Test post of the NETWORKING category', 'This-is-the-first-real-Test-post-of-the-NETWORKING-category', 'This is a preview of the post and it will have a different word range if the word limiter function is used but still just enter a short and precise post preview,,, ', '<p><span style="color:#ff0000">Lorem ipsum dolor sit</span> amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo &nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse &nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non &nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo &nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse &nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non &nbsp; <a href="#">proident</a>, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo &nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse &nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non &nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<blockquote>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo &nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse &nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non &nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<span style="color:#ffffff"><span style="background-color:#1abc9c"> </span><span style="background-color:#1abc9c">tempor incididunt ut labore</span></span> et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo &nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse &nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non &nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo &nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse &nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non &nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo &nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse &nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non &nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<h4><strong>Table showing networing stuff</strong></h4>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Network Examples</strong></td>\r\n			<td><strong>Highest Speed</strong></td>\r\n			<td><strong>Quality</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Malawi university of science</td>\r\n			<td>3kbps</td>\r\n			<td><span style="color:#cc0000">crappy</span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>The other places</td>\r\n			<td>15mbps</td>\r\n			<td><span style="color:#00ff00">kinda dope</span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 'first-real.jpg', '2017-10-30 14:23:07'),
(3, 2, 9, 'Lorem ipsum dolor sit ame', 'Lorem-ipsum-dolor-sit-ame', 'Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Alot of stuff can be added on the IpsumLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Alot of stuff can be added on the IpsumLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Alot of stuff can be added on the IpsumLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Alot of stuff can be added on the Ipsum</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Alot of stuff can be added on the IpsumLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Alot of stuff can be added on the IpsumLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Alot of stuff can be added on the Ipsum</p>\r\n\r\n<h3><strong>Lorem ipsum dolor sit amet</strong></h3>\r\n\r\n<div class="post">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Alot of stuff can be added on the IpsumLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Alot of stuff can be added on the IpsumLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Alot of stuff can be added on the IpsumLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Alot of stuff can be added on the Ipsum</p>\r\n</div>\r\n', 'pexels-photo-196661.jpg', '2017-11-06 12:38:56'),
(4, 1, 9, ' Duis aute irure dolor in reprehenderit in voluptate', 'Duis-aute-irure-dolor-in-reprehenderit-in-voluptate', 'ugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpi officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enad minim ', '<div class="container">\r\n<h1>This is&nbsp;Lorem ipsum dolor sit ame</h1>\r\n\r\n<p>This is&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatt non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit ametaliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquiex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpi officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n</div>\r\n', 'sepia.jpg', '2017-11-06 12:57:49'),
(5, 3, 9, 'first post', 'first-post', 'qwert prevuiew', '<p><strong>lorem&nbsp;</strong></p>\r\n', 'luffy.jpg', '2017-11-08 11:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `overview` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `service_img` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `overview`, `info`, `service_img`, `slug`, `icon`) VALUES
(1, 'Language Lessons', 'To develop a better understanding of the nature and functions of computer science and computer information systems as they relate to the business world today.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis. Donec et purus nec leo interdum sodales nec sit amet magna', 'Folder.jpg', 'Language_Lessons', 'fa-language'),
(2, 'Computer lessons', 'To develop a better understanding of the nature and functions of computer science and computer information systems as they relate to the business world today.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis. Donec et purus nec leo interdum sodales nec sit amet magna', 'Folder.jpg', 'Computer_lessons', 'fa-calendar-check-o'),
(3, 'Educational Lectures', 'To develop a better understanding of the nature and functions of computer science and computer information systems as they relate to the business world today.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis. Donec et purus nec leo interdum sodales nec sit amet magna', 'Folder.jpg', 'Educational_Lectures', 'fa-graduation-cap'),
(4, 'Design Lessons', 'To develop a better understanding of the nature and functions of computer science and computer information systems as they relate to the business world today.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis. Donec et purus nec leo interdum sodales nec sit amet magna', 'Folder.jpg', 'Design_Lessons', 'fa-users'),
(5, 'DataBase Lessons', 'To develop a better understanding of the nature and functions of computer science and computer information systems as they relate to the business world today.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis. Donec et purus nec leo interdum sodales nec sit amet magna', 'Folder.jpg', 'DataBase_Lessons', 'fa-music'),
(6, 'Painting Lessons', 'To develop a better understanding of the nature and functions of computer science and computer information systems as they relate to the business world today.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis. Donec et purus nec leo interdum sodales nec sit amet magna', 'Folder.jpg', 'Painting_Lessons', 'fa-envelope');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admini_id` int(1) NOT NULL DEFAULT '0',
  `position` varchar(100) NOT NULL DEFAULT 'Member',
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `birthday`, `email`, `username`, `password`, `register_date`, `admini_id`, `position`, `slug`) VALUES
(9, 'Christopher Phiri', '0000-00-00', 'chris7phiri@gmail.com', 'sevenreup4ill', '7b15ada836a513bd7b6505705a3ec0c2', '2017-10-10 12:50:43', 1, 'Member', 'sevenreup4ill'),
(10, 'Chain Gang', '0000-00-00', 'wrath@outlook.com', 'Mayareal', '81dc9bdb52d04dc20036dbd8313ed055', '2017-11-03 12:49:43', 1, 'Member', 'Mayareal'),
(11, 'Micheal Peal', '1998-04-15', 'Chris7d@coon.com', 'Janat', '81dc9bdb52d04dc20036dbd8313ed055', '2017-11-06 12:21:25', 0, 'Member', 'Janat'),
(12, 'Mr mac sit', '2001-04-03', 'seven@gmail.com', 'qwerty', '827ccb0eea8a706c4c34a16891f84e7b', '2017-11-08 11:16:18', 0, 'Member', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
