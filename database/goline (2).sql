-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 26, 2018 at 06:21 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faceback`
--
CREATE DATABASE IF NOT EXISTS `faceback` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `faceback`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

DROP TABLE IF EXISTS `admin_info`;
CREATE TABLE IF NOT EXISTS `admin_info` (
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`Username`, `Password`) VALUES
('98d34c1758b15b5a359b69c2b08c5767', '98d34c1758b15b5a359b69c2b08c5767');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(7) NOT NULL AUTO_INCREMENT,
  `user_id` int(7) NOT NULL,
  `feedback_txt` varchar(120) NOT NULL,
  `star` varchar(1) NOT NULL,
  `Date` varchar(30) NOT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `user_id`, `feedback_txt`, `star`, `Date`) VALUES
(2, 8, 'Thanks Rohan', '5', '30-9-2013 11:34');

-- --------------------------------------------------------

--
-- Table structure for table `group_chat`
--

DROP TABLE IF EXISTS `group_chat`;
CREATE TABLE IF NOT EXISTS `group_chat` (
  `chat_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(7) NOT NULL,
  `chat_txt` text NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`chat_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_chat`
--

INSERT INTO `group_chat` (`chat_id`, `user_id`, `chat_txt`, `time`) VALUES
(1, 8, 'Hello Friends How are you ? ', '30-9-2013 11:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(7) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Birthday_Date` varchar(11) NOT NULL,
  `FB_Join_Date` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Name`, `Email`, `Password`, `Gender`, `Birthday_Date`, `FB_Join_Date`) VALUES
(8, 'Amit Dodiya', 'amit.ad1i4@yahoo.com', 'myfaceback', 'Male', '14-1-1994', '18-9-2013 22:10');

-- --------------------------------------------------------

--
-- Table structure for table `users_notice`
--

DROP TABLE IF EXISTS `users_notice`;
CREATE TABLE IF NOT EXISTS `users_notice` (
  `notice_id` int(7) NOT NULL AUTO_INCREMENT,
  `user_id` int(7) NOT NULL,
  `notice_txt` varchar(120) NOT NULL,
  `notice_time` varchar(30) NOT NULL,
  PRIMARY KEY (`notice_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_cover_pic`
--

DROP TABLE IF EXISTS `user_cover_pic`;
CREATE TABLE IF NOT EXISTS `user_cover_pic` (
  `cover_id` int(7) NOT NULL AUTO_INCREMENT,
  `user_id` int(7) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`cover_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_cover_pic`
--

INSERT INTO `user_cover_pic` (`cover_id`, `user_id`, `image`) VALUES
(7, 8, '999584_496501817111249_1587007043_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(7) NOT NULL,
  `job` varchar(100) NOT NULL,
  `school_or_collage` varchar(100) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `hometown` varchar(100) NOT NULL,
  `relationship_status` varchar(30) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `mobile_no_priority` varchar(10) NOT NULL,
  `website` varchar(100) NOT NULL,
  `Facebook_ID` varchar(100) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `job`, `school_or_collage`, `current_city`, `hometown`, `relationship_status`, `mobile_no`, `mobile_no_priority`, `website`, `Facebook_ID`) VALUES
(8, '', 'vccm', 'Rajkot', 'Rajkot', 'Single', '7600898210', 'Public', 'www.wix.com/amitad1i4/amit', 'www.facebook.com/Amit.000002');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

DROP TABLE IF EXISTS `user_post`;
CREATE TABLE IF NOT EXISTS `user_post` (
  `post_id` int(7) NOT NULL AUTO_INCREMENT,
  `user_id` int(7) NOT NULL,
  `post_txt` text NOT NULL,
  `post_pic` varchar(150) NOT NULL,
  `post_time` varchar(30) NOT NULL,
  `priority` varchar(8) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`post_id`, `user_id`, `post_txt`, `post_pic`, `post_time`, `priority`) VALUES
(46, 8, 'Join Faceback', '', '18-9-2013 22:10', 'Public');

-- --------------------------------------------------------

--
-- Table structure for table `user_post_comment`
--

DROP TABLE IF EXISTS `user_post_comment`;
CREATE TABLE IF NOT EXISTS `user_post_comment` (
  `comment_id` int(7) NOT NULL AUTO_INCREMENT,
  `post_id` int(7) NOT NULL,
  `user_id` int(7) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `user_id` (`user_id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_post_status`
--

DROP TABLE IF EXISTS `user_post_status`;
CREATE TABLE IF NOT EXISTS `user_post_status` (
  `status_id` int(7) NOT NULL AUTO_INCREMENT,
  `post_id` int(7) NOT NULL,
  `user_id` int(7) NOT NULL,
  `status` varchar(7) NOT NULL,
  PRIMARY KEY (`status_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile_pic`
--

DROP TABLE IF EXISTS `user_profile_pic`;
CREATE TABLE IF NOT EXISTS `user_profile_pic` (
  `profile_id` int(7) NOT NULL AUTO_INCREMENT,
  `user_id` int(7) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`profile_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile_pic`
--

INSERT INTO `user_profile_pic` (`profile_id`, `user_id`, `image`) VALUES
(6, 8, 'my.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_secret_quotes`
--

DROP TABLE IF EXISTS `user_secret_quotes`;
CREATE TABLE IF NOT EXISTS `user_secret_quotes` (
  `user_id` int(7) NOT NULL,
  `Question1` varchar(50) NOT NULL,
  `Answer1` varchar(20) NOT NULL,
  `Question2` varchar(50) NOT NULL,
  `Answer2` varchar(20) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_secret_quotes`
--

INSERT INTO `user_secret_quotes` (`user_id`, `Question1`, `Answer1`, `Question2`, `Answer2`) VALUES
(8, 'what is the first name of your oldest nephew?', 'OneRaj', 'who is your all-time favorite movie character?', 'Amir Khan');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

DROP TABLE IF EXISTS `user_status`;
CREATE TABLE IF NOT EXISTS `user_status` (
  `user_id` int(7) NOT NULL,
  `status` varchar(8) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`user_id`, `status`) VALUES
(8, 'Offline');

-- --------------------------------------------------------

--
-- Table structure for table `user_warning`
--

DROP TABLE IF EXISTS `user_warning`;
CREATE TABLE IF NOT EXISTS `user_warning` (
  `user_id` int(7) NOT NULL,
  `warning_txt` varchar(200) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `group_chat`
--
ALTER TABLE `group_chat`
  ADD CONSTRAINT `group_chat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `users_notice`
--
ALTER TABLE `users_notice`
  ADD CONSTRAINT `users_notice_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_cover_pic`
--
ALTER TABLE `user_cover_pic`
  ADD CONSTRAINT `user_cover_pic_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_post`
--
ALTER TABLE `user_post`
  ADD CONSTRAINT `user_post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_post_comment`
--
ALTER TABLE `user_post_comment`
  ADD CONSTRAINT `user_post_comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_post_comment_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `user_post` (`post_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_post_status`
--
ALTER TABLE `user_post_status`
  ADD CONSTRAINT `user_post_status_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_post_status_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_post` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_profile_pic`
--
ALTER TABLE `user_profile_pic`
  ADD CONSTRAINT `user_profile_pic_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_secret_quotes`
--
ALTER TABLE `user_secret_quotes`
  ADD CONSTRAINT `user_secret_quotes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_status`
--
ALTER TABLE `user_status`
  ADD CONSTRAINT `user_status_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_status_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_warning`
--
ALTER TABLE `user_warning`
  ADD CONSTRAINT `user_warning_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
--
-- Database: `goline`
--
CREATE DATABASE IF NOT EXISTS `goline` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `goline`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'suraj', 'suraj');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` varchar(100) NOT NULL,
  `reciever_id` varchar(100) NOT NULL,
  `flag` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `sender_id`, `reciever_id`, `flag`) VALUES
(3, 'kumarsuraj9585@gmail.com', 'ajaykumar@gmail.com', 1),
(19, 'abhay@gmail.com', 'ajaykumar@gmail.com', 1),
(22, 'arnav@gmail.com', 'kumarsuraj9585@gmail.com', 1),
(23, 'ankit@gmail.com', 'kumarsuraj9585@gmail.com', 1),
(20, 'kumarsuraj9585@gmail.com', 'abhay@gmail.com', 1),
(21, 'shiva@gmail.com', 'kumarsuraj9585@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` varchar(255) NOT NULL,
  `reciever_id` varchar(255) NOT NULL,
  `message` varchar(555) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sender_id`, `reciever_id`, `message`) VALUES
(1, 'kumarsuraj9585@gmail.com', 'abhay@gmail.com', 'hello i am suraj'),
(2, 'abhay@gmail.com', 'kumarsuraj9585@gmail.com', 'hy i am abhay'),
(3, 'abhay@gmail.com', 'kumarsuraj9585@gmail.com', 'sddsds'),
(4, 'abhay@gmail.com', 'kumarsuraj9585@gmail.com', 'hoooo'),
(5, 'kumarsuraj9585@gmail.com', 'abhay@gmail.com', 'hyyhyyh yh'),
(6, 'kumarsuraj9585@gmail.com', 'abhay@gmail.com', 'bnbnb bnnnnnnn'),
(7, 'kumarsuraj9585@gmail.com', 'abhay@gmail.com', 'hhhhhhhhhhhhhhhhhhh'),
(8, 'kumarsuraj9585@gmail.com', 'abhay@gmail.com', 'vvvvvvvvvvv'),
(13, 'abhay@gmail.com', 'kumarsuraj9585@gmail.com', 'hello suraj its abhay'),
(12, 'kumarsuraj9585@gmail.com', 'abhay@gmail.com', 'hi abhay mera nam suraj hai'),
(14, 'abhay@gmail.com', 'ajaykumar@gmail.com', 'hello ajay its abhay'),
(15, 'abhay@gmail.com', 'ajaykumar@gmail.com', 'hello ajay its abhay'),
(16, 'ajaykumar@gmail.com', 'abhay@gmail.com', 'hello abhay its ajay'),
(17, 'ajaykumar@gmail.com', 'kumarsuraj9585@gmail.com', 'hello suraj'),
(18, 'kumarsuraj9585@gmail.com', 'ajaykumar@gmail.com', 'hy ajay kumar'),
(19, 'kumarsuraj9585@gmail.com', 'ajaykumar@gmail.com', 'how are you'),
(20, 'ajaykumar@gmail.com', 'kumarsuraj9585@gmail.com', 'i am fine'),
(21, 'abhay@gmail.com', 'kumarsuraj9585@gmail.com', 'hhhhhhddddddddddddddddddd'),
(22, 'shiva@gmail.com', 'kumarsuraj9585@gmail.com', 'hyy'),
(23, 'kumarsuraj9585@gmail.com', 'shiva@gmail.com', 'hello'),
(24, 'abhay@gmail.com', 'kumarsuraj9585@gmail.com', 'helo good evening'),
(25, 'kumarsuraj9585@gmail.com', 'abhay@gmail.com', 'good evening'),
(26, 'kumarsuraj9585@gmail.com', 'arnav@gmail.com', 'hyy arnav'),
(27, 'arnav@gmail.com', 'kumarsuraj9585@gmail.com', 'hyy suraj'),
(28, 'arnav@gmail.com', 'kumarsuraj9585@gmail.com', 'how are you'),
(29, 'kumarsuraj9585@gmail.com', 'arnav@gmail.com', 'i am fine '),
(30, 'kumarsuraj9585@gmail.com', 'arnav@gmail.com', 'and you'),
(31, 'arnav@gmail.com', 'kumarsuraj9585@gmail.com', 'i am also fine'),
(32, 'ankit@gmail.com', 'kumarsuraj9585@gmail.com', 'hello suraj'),
(33, 'kumarsuraj9585@gmail.com', 'ankit@gmail.com', 'hyy ankit'),
(34, 'kumarsuraj9585@gmail.com', 'ankit@gmail.com', 'how are you'),
(35, 'ankit@gmail.com', 'kumarsuraj9585@gmail.com', 'ymm'),
(36, 'kumarsuraj9585@gmail.com', 'ankit@gmail.com', 'hahahah'),
(37, 'kumarsuraj9585@gmail.com', 'ankit@gmail.com', 'hhhh'),
(38, 'ankit@gmail.com', 'kumarsuraj9585@gmail.com', 'hhyyy');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `bio` varchar(200) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `email`, `name`, `profile_pic`, `city`, `state`, `country`, `bio`, `mobile_no`) VALUES
(1, 'kumarsuraj9585@gmail.com', 'suraj verma', 'IMG_20170729_112135_128.jpg', 'bharua sumerpur', 'utter pradesh', 'india', 'i am a student', '9616330844'),
(2, 'ajaykumar@gmail.com', 'ajay kumar', '552e41b7071e4b3dcf051e072eabaf0e.jpg', 'bharua sumerpur', 'utter pradesh', 'india', 'i am a hacker', '9616330844'),
(3, 'abhay@gmail.com', 'abhay', 'John-Abraham-body-best-hd-wallpaper.jpg', 'kanpur', 'utter pradesh', 'india', 'programmer', '8788021220'),
(5, 'shiva@gmail.com', 'shiva', 'Hrithik-Roshan-Images.jpg', 'sumerpur', 'uttar pradesh', 'india', 'student', '8989895454'),
(9, 'arnav@gmail.com', 'arnav', '5a64c60c33f391.00249929.png', 'sumerpur', 'uttar pradesh', 'india', 'smart boy', '888555474'),
(11, 'ankit@gmail.com', 'ankit', 'El1LjoY.jpg', 'delhi', 'delhi', 'india', 'dance', '548516657');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday_date` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `birthday_date`) VALUES
(1, 'suraj verma', 'kumarsuraj9585@gmail.com', 'surajverma', 'Male', '15-8-1998'),
(2, 'ajay kumar', 'ajaykumar@gmail.com', 'ajaykumar', 'Male', '19-9-1998'),
(3, 'abhay', 'abhay@gmail.com', 'abhay', 'Male', '1-1-2005'),
(5, 'abhishek chaudhari', 'abhishek@gmail.com', 'abhishek', 'Male', '22-6-1998'),
(6, 'shiva', 'shiva@gmail.com', 'shiva', 'Male', '2-6-2004'),
(7, 'arnav', 'arnav@gmail.com', 'arnav', 'Male', '2-2-2004'),
(10, 'ankit', 'ankit@gmail.com', 'ankit', 'Male', '17-5-1988');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

DROP TABLE IF EXISTS `user_post`;
CREATE TABLE IF NOT EXISTS `user_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `story` varchar(20000) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`id`, `name`, `story`, `post_image`) VALUES
(1, 'suraj verma', 'this is my first post on goonline,', 'IMG_20170729_112135_128.jpg'),
(2, 'suraj verma', 'that is my second post on goonline', 'large.jpg'),
(5, 'suraj verma', 'my bycycle', 'bicycle-basket-flowers-street-wallpaper-44578-45707-hd-wallpapers.jpg'),
(18, 'arnav', '', 'C language e-book.jpg.jpg'),
(14, 'ajay kumar', 'that is my first post on goonline', 'Hrithik-Roshan-Images.jpg'),
(15, 'abhay', 'hehehehehehehheehhheeh   heheheehehhe', 'vidyut-jamwal-eight-pack-abs-photo-9540.jpeg'),
(16, 'abhay', 'hello is my younger brother this pic is-', '[002889].jpg'),
(17, 'abhay', 'shiva ji the boss', '[002889].jpg');
--
-- Database: `image`
--
CREATE DATABASE IF NOT EXISTS `image` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `image`;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
--
-- Database: `shoping`
--
CREATE DATABASE IF NOT EXISTS `shoping` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shoping`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `password` varbinary(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile_no`, `password`) VALUES
(1, 'suraj', 916363221, 0x737572616a00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000),
(2, 'saa', 465466, 0x667364647366647366000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000),
(3, 'vikas', 54785655, 0x737572616a00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000),
(4, 'suraj', 4233242, 0x737373730000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
