-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2019 at 01:35 PM
-- Server version: 8.0.3-rc-log
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mamafair`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1547579972);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `password_reset_token` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `email`, `phone`, `auth_key`, `password_hash`, `password_reset_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'tim', 'Timothy', 'Mutegi', 'tim@gmail.com', '07054863421', 'hcxFaD9XsyR1MHT0Qw4X_G6gl3Q6ahSo', '$2y$13$ToyHk/pYomoSyLKAgTehLed0lNAPb7rpxf3XXOtj8ZQ.Ie2G7qFS2', 'J6KRUGudYGKpMCRwEUeE_C7I44SR7krJ_1547684840', 10, 1547583895, 1547684840),
(3, 'wambui', 'Winner', 'Wambui', 'winnerwambui@gmail.com', '0714253698', 'Mz8Hq4aKQbbg0V4_bVx8pAPp72NSO7Kx', '$2y$13$frLJ8cDsFoVTDXNGFvB/fesg6e4.IzC9ON9cjNVSmdpAQ0.bhr7rO', 'cto7qEtz7kCYEOgZIftHUv5C_Tnm7S4R_1547722195', 10, 1547722195, 1547722195),
(4, 'Maggie', 'Magret', 'Maina', 'maggie@gmail.com', '0729698969', '21p0eyiNUjUxrPRt37uapJq0zFJCo9jC', '$2y$13$W42TnKLbQAaN7MyA5Q5.DeNSmPNyub6mylP6Fto4qcz3sQzAI3rZi', 'SA861nU-ylZIWR__uVzyVD3tydf0tjTB_1547878656', 10, 1547878656, 1547878656);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `forbidden_items` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`, `description`, `forbidden_items`) VALUES
(1, 'Admin', 'System Administrator', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `vaccination`
--

CREATE TABLE `vaccination` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bcg_dose1_given` date NOT NULL,
  `bcg_dose1_nextvisit` date DEFAULT NULL,
  `dpt_dose1_given` date NOT NULL,
  `dpt_dose1_nextvisit` date DEFAULT NULL,
  `polio_dose1_given` date NOT NULL,
  `polio_dose1_nextvisit` date DEFAULT NULL,
  `measles_dose1_given` date NOT NULL,
  `measles_dose1_nextvisit` date DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccination`
--

INSERT INTO `vaccination` (`id`, `user_id`, `bcg_dose1_given`, `bcg_dose1_nextvisit`, `dpt_dose1_given`, `dpt_dose1_nextvisit`, `polio_dose1_given`, `polio_dose1_nextvisit`, `measles_dose1_given`, `measles_dose1_nextvisit`, `created_at`, `updated_at`) VALUES
(1, 4, '2019-01-26', '2019-02-07', '2019-01-26', '2019-02-07', '2019-01-26', '2019-02-09', '2019-01-26', '2019-02-09', 1547980519, 1547980519),
(2, 4, '2019-02-08', '2019-03-07', '2019-02-09', '2019-03-27', '2019-02-09', '2019-03-07', '2019-02-11', '2019-03-09', 1547980725, 1547980738),
(3, 4, '2019-02-09', '2019-02-07', '2019-01-09', '2019-04-05', '2019-04-05', '2019-04-05', '2019-01-17', '2019-03-09', 1547982924, 1547982924);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccination`
--
ALTER TABLE `vaccination`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vaccination`
--
ALTER TABLE `vaccination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `vaccination`
--
ALTER TABLE `vaccination`
  ADD CONSTRAINT `vaccination_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
