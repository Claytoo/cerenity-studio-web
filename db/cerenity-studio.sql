-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2022 at 03:24 PM
-- Server version: 10.3.32-MariaDB-log-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sfcereni_cerenity-studio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `fname`, `lname`, `password`) VALUES
(1, 'admin@sfcerenity.id', 'Admin', 'Cerenity Studio', '$2y$10$ozvxNy9U7cGcBrS6Fs2Jse3NtaKW1aE7X.1.OJ.TamYalTd.ynw8.'),
(2, 'nfmurran@gmail.com', 'Naufal Fahim', 'Murran', '$2y$10$d.4jANFKKJCY9ibTeeuNmu2rxr8u0UMpb1pmPzSDOciaYAHziQQ9K'),
(3, 'tubespwi@gmail.com', 'Tubes', 'PWI 2', '$2y$10$CFF2Fkvo6Q8rPdj8G/igk.3pBIOL2o2VxGRwwpKICnP/6LBCuRKrC');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `proposal_id` int(11) NOT NULL,
  `company_name` varchar(256) NOT NULL,
  `game_license` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `file_name` varchar(256) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`proposal_id`, `company_name`, `game_license`, `description`, `file_name`, `status`) VALUES
(4, 'Test 1', 'Lost Saga', 'new contract', '16420899711642089971_3130fce5ea622c21df76.pdf', 'Approved'),
(5, 'Test 2', 'Infect Clean', 'extend contract', '16420900091642090009_8bc09fa6a933eb17056e.pdf', 'Declined'),
(6, 'Test Tubes', 'Golden Adventure', 'Perpanjang Lisensi', '16421286851642128685_9d346d8b724fd0300ef3.pdf', 'Approved'),
(7, 'Test 5', 'Infect Clean', 'Perpanjang', '16421294271642129427_b4158ef54075dfcc8adf.pdf', 'In Progress');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`proposal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `proposal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
