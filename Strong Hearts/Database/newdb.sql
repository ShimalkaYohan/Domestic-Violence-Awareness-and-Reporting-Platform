-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 06:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `sub_form2`
--

CREATE TABLE `sub_form2` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` varchar(10) NOT NULL,
  `complaint` varchar(5000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_form2`
--

INSERT INTO `sub_form2` (`id`, `name`, `email`, `number`, `complaint`, `date`) VALUES
(1, 'shimalka wick', 'shimalkawick@gmail.com', '0764247198', 'cdcasccc', '2022-08-13'),
(2, 'dded', 'shimalkawick@gmail.com', '0764247198', 'deded', '2022-08-19'),
(3, 'Ramidu', 'ramidu@gmail.com', '0714455632', 'Sample Text', '2022-09-09'),
(4, 'shimalka wick', 'shimalkawick@gmail.com', '0764247198', 'aaasss', '2022-09-24'),
(5, 'sample ', 'shimalkawick@gmail.com', '0764247197', 'sample', '2022-09-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sub_form2`
--
ALTER TABLE `sub_form2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sub_form2`
--
ALTER TABLE `sub_form2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
