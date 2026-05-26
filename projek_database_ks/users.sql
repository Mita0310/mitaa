-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2026 at 07:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2526-27db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `kelas`, `tanggal_lahir`, `jenis_kelamin`, `username`, `email`, `password`, `role`) VALUES
(1, 'airin', 'XI KECANTIKAN & SPA 1', '2026-05-14', 'Perempuan', 'airin', 'airin@gmail.com', '123', 'user'),
(3, 'sisy', 'XI KECANTIKAN & SPA 3', '2026-05-14', 'Perempuan', 'sisy', 'sisy@gmail.com', '123', 'user'),
(4, 'admin', 'XI KECANTIKAN & SPA 1', '2026-05-24', 'Perempuan', '2526_27', 'admin@gmail.com', '12345678', 'admin'),
(8, 'mita', 'XI KECANTIKAN & SPA 1', '2008-10-03', 'Perempuan', 'mita', 'mithasugiarti0@gmail.com', '123', 'admin'),
(11, 'epan', 'XI KECANTIKAN & SPA 2', '2008-04-21', 'Laki-laki', 'epan', 'epan@gmail.com', '123', 'user'),
(14, 'ananda', 'XI KECANTIKAN & SPA 3', '2008-02-01', 'Laki-laki', 'ananda', 'ananda@gmail.com', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
