-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2016 at 11:26 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` char(36) NOT NULL,
  `album_name` varchar(128) NOT NULL,
  `album_image` varchar(128) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `album_name`, `album_image`, `status`, `deleted`, `date_entered`, `date_modified`, `created_by`, `modified_by`) VALUES
('bd30fd8b-5b78-e2e7-a472-56dc8f45928e', 'Album Name', 'Album Name.PNG', 1, 0, '2016-03-06 21:12:32', '2016-03-06 21:12:32', 'a661b28a-e2a2-11e5-8a55-3c07717072c4', 'a661b28a-e2a2-11e5-8a55-3c07717072c4');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` char(36) NOT NULL,
  `album` char(36) DEFAULT NULL,
  `download_count` varchar(128) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` char(36) NOT NULL,
  `genre` varchar(128) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre`, `status`, `deleted`, `date_entered`, `date_modified`, `created_by`, `modified_by`) VALUES
('70cc3f87-e3ea-11e5-977a-3c07717072c4', 'Hip Hop', 1, 0, '2016-03-07 00:00:00', '2016-03-07 00:00:00', 'a661b28a-e2a2-11e5-8a55-3c07717072c4', 'a661b28a-e2a2-11e5-8a55-3c07717072c4'),
('70cc5aee-e3ea-11e5-977a-3c07717072c4', 'Rock', 1, 0, '2016-03-07 00:00:00', '2016-03-07 00:00:00', 'a661b28a-e2a2-11e5-8a55-3c07717072c4', 'a661b28a-e2a2-11e5-8a55-3c07717072c4');

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `id` char(36) NOT NULL,
  `album` char(36) DEFAULT NULL,
  `song_name` varchar(128) NOT NULL,
  `artist_name` varchar(256) NOT NULL,
  `genre` char(36) NOT NULL,
  `path` varchar(256) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `mobile` varchar(16) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `created_by` char(36) NOT NULL,
  `modified_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `mobile`, `status`, `deleted`, `date_entered`, `date_modified`, `created_by`, `modified_by`) VALUES
('a661b28a-e2a2-11e5-8a55-3c07717072c4', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'Admin', 'neeraj24a@gmail.com', '8443868777', 1, 0, '2016-03-05 00:00:00', '2016-03-05 00:00:00', 'a661b28a-e2a2-11e5-8a55-3c07717072c4', 'a661b28a-e2a2-11e5-8a55-3c07717072c4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
