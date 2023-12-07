-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 07, 2023 at 02:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nolly`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `mobile`, `password`) VALUES
(1, 'root', 'nelson@gmail.com', '010-1234567', '$2y$10$ffOmSOMG6jsfH8yw4BIWzOp0zeqTar79qyHvjinJNyyCd/kayK1Hu'),
(2, 'KirinBeast', 'nelson@gmail.com', '0101222222', '$2y$10$jSgWZtPdr07/RHxekDJVB.W2WgM7krTxe.lfBqyQR7h7ahkeJrl1e'),
(3, 'ABC', 'abc@gmail.com', '0101222222', '$2y$10$50Obv68EiAgAc8vv6kWU6.f5jgP77J2bGptloZs0oVLEzEMu0FQyq'),
(4, 'Tommy', 'Tommy@gmail.com', '010-12345678', '$2y$10$fjDctKS3Jxn2DS7NnRfsrejfBpsXBwdA8Va9Uuwff21mIurhLrPWm'),
(5, 'Tom', 'Tom@gmail.com', '12345678', '$2y$10$OTbWaMOIyyikGlV2e.Y.MuvoMuzSSrNLOdCVh5EVWSJG82HOImwhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
