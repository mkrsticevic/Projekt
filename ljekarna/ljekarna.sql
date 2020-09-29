-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 02:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ljekarna`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uloga` varchar(50) NOT NULL,
  `sifra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `email`, `uloga`, `sifra`) VALUES
(1, 'admin@admin.ba', 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `lijek`
--

CREATE TABLE `lijek` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `slika` varchar(50) NOT NULL,
  `kratak_opis` varchar(50) NOT NULL,
  `cijena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lijek`
--

INSERT INTO `lijek` (`id`, `naziv`, `slika`, `kratak_opis`, `cijena`) VALUES
(1, 'paracetamol', 'test', 'glavobolja,prehlada', 1),
(3, 'test', 'download (1).jpg', 'glavobolja', 12333);

-- --------------------------------------------------------

--
-- Table structure for table `narudzba`
--

CREATE TABLE `narudzba` (
  `id` int(11) NOT NULL,
  `korisnikid` int(11) NOT NULL,
  `datum` date NOT NULL,
  `adresa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `narudzba`
--

INSERT INTO `narudzba` (`id`, `korisnikid`, `datum`, `adresa`) VALUES
(3340013, 1, '2020-09-28', 'kralja tomislava 21');

-- --------------------------------------------------------

--
-- Table structure for table `narudzbalijek`
--

CREATE TABLE `narudzbalijek` (
  `lijekid` int(11) NOT NULL,
  `narudzbaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `narudzbalijek`
--

INSERT INTO `narudzbalijek` (`lijekid`, `narudzbaid`) VALUES
(3, 3340013),
(1, 3340013);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lijek`
--
ALTER TABLE `lijek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `narudzba`
--
ALTER TABLE `narudzba`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lijek`
--
ALTER TABLE `lijek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
