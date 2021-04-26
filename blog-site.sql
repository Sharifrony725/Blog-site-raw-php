-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 03:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog-site`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `createtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `status`, `createtime`, `updatetime`) VALUES
(1, 'HTML', 1, '2021-04-19 18:21:51', '2021-04-19 18:21:51'),
(2, 'CSS3', 0, '2021-04-19 18:22:52', '2021-04-19 18:22:52'),
(3, 'CSS3', 0, '2021-04-19 18:23:01', '2021-04-19 18:23:01'),
(4, 'CSS3', 0, '2021-04-19 18:23:43', '2021-04-19 18:23:43'),
(5, 'Js', 1, '2021-04-19 18:23:52', '2021-04-19 18:23:52'),
(6, 'Js', 1, '2021-04-19 18:23:55', '2021-04-19 18:23:55'),
(7, 'good', 1, '2021-04-19 18:26:41', '2021-04-19 18:26:41'),
(8, 'good2', 1, '2021-04-19 18:27:48', '2021-04-19 18:27:48'),
(9, 'good2', 1, '2021-04-19 18:27:52', '2021-04-19 18:27:52'),
(10, 'good2', 1, '2021-04-19 18:29:25', '2021-04-19 18:29:25'),
(11, 'test 3', 0, '2021-04-19 18:29:37', '2021-04-19 18:29:37'),
(12, 'php', 0, '2021-04-19 18:31:02', '2021-04-19 18:31:02'),
(13, 'good', 0, '2021-04-19 18:33:54', '2021-04-19 18:33:54'),
(14, 'goodddd', 0, '2021-04-19 18:34:54', '2021-04-19 18:34:54'),
(15, 'test 5', 1, '2021-04-19 18:35:48', '2021-04-19 18:35:48'),
(16, 'test 1', 0, '2021-04-19 18:46:46', '2021-04-19 18:46:46'),
(17, 'java sss', 1, '2021-04-19 18:50:08', '2021-04-19 18:50:08'),
(18, 'goodddd', 1, '2021-04-19 18:50:35', '2021-04-19 18:50:35'),
(19, 'good5', 1, '2021-04-24 17:25:47', '2021-04-24 17:25:47'),
(20, '', 0, '2021-04-24 17:38:47', '2021-04-24 17:38:47'),
(21, 'test 10', 0, '2021-04-24 17:42:53', '2021-04-24 17:42:53'),
(22, 'new2', 1, '2021-04-24 17:44:52', '2021-04-24 17:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `gender` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=male,2=female',
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `address`, `username`, `email`, `city`, `gender`, `password`) VALUES
(13, 'Sharif', 'Village/Town: 18/3, Monessor Road, Zigatola', 'sharif', 'info@htrstudio.com', 'Zigatola', 1, '4297f44b13955235245b2497399d7a93'),
(14, 'Rony khan', 'Village/Town: 18/3, Monessor Road, Zigatola', 'khan', 'info@htrstudio.com', 'Zigatola', 1, 'e10adc3949ba59abbe56e057f20f883e'),
(15, 'Shariful Islam', 'Dhaka', 'sharif1234', 'sharifrony725@gmail.com', 'Feni', 1, '42f207dc42ceda59502609d667412e18');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(100) NOT NULL,
  `education_institution_name` varchar(255) NOT NULL,
  `pass_year` varchar(100) NOT NULL,
  `profile_pic` varchar(91) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `education_institution_name`, `pass_year`, `profile_pic`) VALUES
(1, 0, 'dmrc', '2017', ''),
(2, 0, 'Test', '2018', 'rony-2.png'),
(4, 0, 'Test2', '2019', 'NID.png'),
(5, 0, 'Test3', '2020', 'html.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
