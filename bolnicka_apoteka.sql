-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 07:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bolnicka_apoteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `lekovi`
--

CREATE TABLE `lekovi` (
  `sifraL` int(20) NOT NULL,
  `naziv` varchar(11) NOT NULL,
  `kolicina` decimal(10,0) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lekovi`
--

INSERT INTO `lekovi` (`sifraL`, `naziv`, `kolicina`, `datum`) VALUES
(4325322, 'Bensedin', '35', '2022-03-16'),
(4325777, 'Paracetamol', '23', '2022-03-06'),
(6543344, 'Penicilin', '22', '2022-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `odeljenje` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `odeljenje`) VALUES
(0, 'admin', 'admin', 'Finansije'),
(1, 'ljubica', 'ljubica', 'Menazment'),
(2, 'andjela', 'andjela', 'IT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lekovi`
--
ALTER TABLE `lekovi`
  ADD PRIMARY KEY (`sifraL`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
