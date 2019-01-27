-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2019 at 06:08 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beleggings_aanvraag`
--

-- --------------------------------------------------------

--
-- Table structure for table `aanvragen`
--

CREATE TABLE `aanvragen` (
  `id` int(11) NOT NULL,
  `naam` varchar(2048) NOT NULL,
  `achternaam` varchar(2048) NOT NULL,
  `legitimatie_bewijs` varchar(2048) NOT NULL,
  `geboortedatum` date NOT NULL,
  `adres` varchar(2048) NOT NULL,
  `mobiel` int(11) NOT NULL,
  `beleggingsvorm` varchar(2048) NOT NULL,
  `land` varchar(2048) NOT NULL,
  `munt_eenheid` varchar(2048) NOT NULL,
  `bedrag` double NOT NULL,
  `ten_name_van` varchar(2048) NOT NULL,
  `looptijd` varchar(2048) NOT NULL,
  `rente_percentage` double NOT NULL,
  `rente_cred_rekening_nr` varchar(2048) NOT NULL,
  `bank` varchar(2048) NOT NULL,
  `opmerking` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aanvragen`
--

INSERT INTO `aanvragen` (`id`, `naam`, `achternaam`, `legitimatie_bewijs`, `geboortedatum`, `adres`, `mobiel`, `beleggingsvorm`, `land`, `munt_eenheid`, `bedrag`, `ten_name_van`, `looptijd`, `rente_percentage`, `rente_cred_rekening_nr`, `bank`, `opmerking`) VALUES
(1, 'hyhy', 'hyhyh', 'yhyhyhy', '2019-01-02', 'yhyh', 0, 'Flexibile Deposito Rekening SRD (*)', '', '', 6.666666666666666e15, 'yby', 'bybyyb', 66, '6666', 'yhyh', 'yhyhyhyh'),
(2, 'dfdf', 'dfdf', 'dfdfdf', '2019-01-02', 'dfddf', 4444444, 'Flexibile Deposito Rekening SRD (*)', 'Suriname', '0', 4444, 'fffff', 'ffff', 4444, '4314', 'fff', 'fffff'),
(3, 'wdwd', 'wdwdwd', 'wdwdwdwdwdwddwdwdwdw', '2019-01-25', 'dwdwdw', 2147483647, 'Flexibile Deposito Rekening SRD (*)', 'Suriname', 'SRD', 333333333333, 'dddddddd', 'ddddddddddddddddd', 3333333333, '333333333', 'dddddddddddddd', 'ddddddddddddddddddddd'),
(4, 'Test22', 'tes444', 'edfyg48o7gf38o7g', '2019-01-15', 'Straat01', 3444333, 'Vaste Spaar Certificaat in EURO/USD', 'USA', 'EURO', 2222222222222, 'Shaniel', '3 maanden', 2, '5555555555555555555555555555', 'DSB', 'HAHAHAHAHAHAHHA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aanvragen`
--
ALTER TABLE `aanvragen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aanvragen`
--
ALTER TABLE `aanvragen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
