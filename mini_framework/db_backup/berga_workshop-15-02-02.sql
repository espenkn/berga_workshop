-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2015 at 05:33 PM
-- Server version: 5.5.41-0ubuntu0.14.10.1
-- PHP Version: 5.5.12-2ubuntu4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `berga_workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `news_subscribers`
--

CREATE TABLE IF NOT EXISTS `news_subscribers` (
`sub_id` int(10) unsigned NOT NULL,
  `email` tinytext NOT NULL,
  `reg_date` datetime NOT NULL,
  `reg_ip` tinytext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news_subscribers`
--

INSERT INTO `news_subscribers` (`sub_id`, `email`, `reg_date`, `reg_ip`) VALUES
(1, 'sdfsdf@ggg.no', '2015-02-02 17:29:18', '127.0.0.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news_subscribers`
--
ALTER TABLE `news_subscribers`
 ADD PRIMARY KEY (`sub_id`), ADD UNIQUE KEY `email` (`email`(255));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news_subscribers`
--
ALTER TABLE `news_subscribers`
MODIFY `sub_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
