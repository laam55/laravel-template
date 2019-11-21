-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 05:48 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel5x`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `permission` tinyint(1) DEFAULT NULL,
  `phone` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sex` tinyint(1) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `role`, `permission`, `phone`, `birthday`, `sex`, `address`, `status`, `remember_token`) VALUES
(1, 'lam', '$2y$10$tRp2X95czqoXqLXvRsFVFuK2TRM9MOm0eM8eq2VQqC83jB7J8qp.e', 'Phạm Tùng Lâm', 1, 1, '01694883618', '1995-10-09', 1, 'ha noi', 1, 'EY7yHbrl3qXCFSvA6Ddnf7nuccfxzFKB2ASmW0il1SHlJFgXVaqgIu1cWCzB'),
(13, 'laam55', '$2y$10$i0Bwd1fqFJWwnAZ/nnAMkel8eEItL/UhhrdVotoZ4pfttRpNOrXca', 'lâmm', 0, NULL, '01694883618', '2018-01-31', 1, '1234531', 1, 'jaIbbVTbtbp1YYI8y59TmIyPslplx4350RsNZFuNveNVjBgIYNUmzXG5E0wp'),
(14, 'lam11', '$2y$10$tRp2X95czqoXqLXvRsFVFuK2TRM9MOm0eM8eq2VQqC83jB7J8qp.e', 'Phạm Tùng Lâm', 1, 1, '01694883618', '1995-10-09', 1, 'ha noi', 1, 'EY7yHbrl3qXCFSvA6Ddnf7nuccfxzFKB2ASmW0il1SHlJFgXVaqgIu1cWCzB'),
(15, 'laam5511', '$2y$10$i0Bwd1fqFJWwnAZ/nnAMkel8eEItL/UhhrdVotoZ4pfttRpNOrXca', 'lâmm', 0, NULL, '01694883618', '2018-01-31', 1, '1234531', 1, 'jaIbbVTbtbp1YYI8y59TmIyPslplx4350RsNZFuNveNVjBgIYNUmzXG5E0wp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `fullname` (`fullname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
