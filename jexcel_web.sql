-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 03:28 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jexcel_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `jexcel`
--

CREATE TABLE `jexcel` (
  `baris` varchar(3) NOT NULL,
  `kata` varchar(1024) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jexcel`
--

INSERT INTO `jexcel` (`baris`, `kata`) VALUES
('1', '[ \'Adeela Nurul Fadhila\', \'05311840000001\', \'\', \'\', \'\',]'),
('3', '[ \'Donny Kurnia Ramadhani\', \'05311840000004\', \'\', \'\', \'\',]'),
('6', '[ \'\', \'\', \'\', \'\', \'\',]'),
('8', '[ \'\', \'\', \'\', \'\', \'\',]'),
('5', '[ \'Fikri Haykal\', \'05311840000006\', \'Web Developer\', \'\', \'\',]'),
('4', '[ \'Fachrizal Rachmat Hidayat\', \'05311840000005\', \'\', \'\', \'\',]'),
('2', '[ \'Anis Saidatur Rochma\', \'05311840000002\', \'\', \'\', \'\',]'),
('7', '[ \'\', \'\', \'\', \'\', \'\',]');

-- --------------------------------------------------------



--
-- Indexes for dumped tables
--

--
-- Indexes for table `jexcel`
--
ALTER TABLE `jexcel`
  ADD PRIMARY KEY (`baris`);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
