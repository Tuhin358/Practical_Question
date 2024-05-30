-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2024 at 11:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practical-question`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dashboards`
--

INSERT INTO `dashboards` (`id`, `name`, `email`, `image`, `gender`, `skills`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'dsds', 'dsds@gmail.com', 'images/nu4l2FL2FKi09WTOTzpCNoUwv5i9CrDzt1i6GqoC.jpg', 'male', 'Laravel,Codeigniter', '2024-05-30 04:15:32', '2024-05-30 04:15:12', '2024-05-30 04:15:32'),
(2, 'vdvd', 'bfbd@gmail.com', 'images/EUUrTMM0SnjeFBKmGnrwOMZj7nEQrSE19AaXvWub.jpg', 'female', 'Laravel,Codeigniter', '2024-05-30 04:16:34', '2024-05-30 04:16:08', '2024-05-30 04:16:34'),
(3, 'va', 'vava@gmail.com', 'images/bvs8PBB9BZwFRMVVTGzrJIIFwWe3T9BnIf78yf6u.jpg', 'male', '[\"Laravel\"]', '2024-05-30 05:08:18', '2024-05-30 04:42:03', '2024-05-30 05:08:18'),
(4, 'rere', 'rere@gmail.com', 'images/BpgigJnHwDnCAyJ2SVaV36PyuU23F6jhzJtjmVGT.jpg', 'male', 'Codeigniter,API', '2024-05-30 05:09:49', '2024-05-30 04:48:36', '2024-05-30 05:09:49'),
(5, 'xxx', 'xxx@gmail.com', 'images/pP8tKCVAQ9sIxkvWPJd0Y4JcFK4qKE2F9XRy9WsV.jpg', 'male', 'Ajax', '2024-05-30 05:02:08', '2024-05-30 05:00:59', '2024-05-30 05:02:08'),
(7, 'vw', 'ww@gmail.com', 'images/KLgNEqILDPNQkcPp0uFjLi87Wvtj80UKxqoKHbQQ.png', 'male', 'Ajax', '2024-05-30 05:04:23', '2024-05-30 05:01:53', '2024-05-30 05:04:23'),
(8, 'ds', 'ds@gmail.com', 'images/XPiVRxYkdzGT18qTLLPp2OaO7UevtlRrMTNAJcKN.png', 'female', 'Ajax', '2024-05-30 05:08:58', '2024-05-30 05:08:53', '2024-05-30 05:08:58'),
(9, 'Levi Valentine', 'zihazudix@mailinator.com', NULL, 'female', 'Codeigniter,Ajax,VUE JS,MySQL,API', '2024-05-30 05:11:28', '2024-05-30 05:10:12', '2024-05-30 05:11:28'),
(10, 'aa', 'aa@mailinator.com', '1717068448.jpg', 'male', '[\"Ajax\",\"MySQL\",\"API\"]', '2024-05-30 05:37:23', '2024-05-30 05:12:31', '2024-05-30 05:37:23'),
(11, 'Graiden Nunez', 'neqix@mailinator.com', 'images/1717069017.jpg', 'female', '[\"API\"]', NULL, '2024-05-30 05:13:20', '2024-05-30 05:36:57'),
(12, 'cc', 'cc@mailinator.com', '1717068487.jpg', 'female', '[\"Laravel\",\"Codeigniter\",\"Ajax\",\"API\"]', '2024-05-30 05:37:26', '2024-05-30 05:27:47', '2024-05-30 05:37:26'),
(13, 'Iola Walton', 'jodupuvuxy@mailinator.com', 'images/1717069000.jpg', 'male', '[\"Codeigniter\",\"VUE JS\",\"API\"]', NULL, '2024-05-30 05:31:06', '2024-05-30 05:36:40'),
(14, 'Jeanette English', 'zysynyjezo@mailinator.com', 'images/1717069081.jpg', 'male', '[\"Laravel\",\"Codeigniter\",\"Ajax\",\"MySQL\",\"API\"]', NULL, '2024-05-30 05:37:46', '2024-05-30 05:38:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dashboards_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
