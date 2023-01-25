-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 06:06 PM
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
-- Database: `pmhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `passed` varchar(255) NOT NULL,
  `current` text NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `passed`, `current`, `img_path`) VALUES
(1, 'Koushik Garai', '2020', 'B.Pharm ', 'koushik.jpg'),
(3, 'Indrajit Ruidas', '2020', 'BTech ,CSE\r\n(Purulia Govt. Engineering College)', 'indrajit.jpg'),
(5, 'Ankita Saha', '2020', 'GNM\r\n(NRS Medical College & Hospital)', 'ankita.jpg'),
(7, 'Binoy Krishna Pal', '2020', 'BTech, CSE\r\n(Purulia Govt. Engineering College)', 'binoy.jpg'),
(8, 'Shilpa Pal', '2020', 'BSC Nursing\r\n(Bankura Sammilani Medical College)', 'shilpa.jpg'),
(11, 'Kakali Mal', '2020', 'GNM\r\n(R.G Kar Medical College & Hospital)', 'kakali.jpg'),
(12, 'Ananta Musib', '2022', 'BTech,CSE\r\n(Purulia Govt. Engineering College)', 'https://img.freepik.com/free-icon/user_318-804790.jpg?w=2000'),
(15, 'Suman Ray Pratihar', '2020', 'Dairy Technology\r\n(WBUAFS)', 'suman.jpg'),
(17, 'Priti Ghosh', '2020', 'BSC,Food Science\r\n(MAKAUT)', 'https://img.freepik.com/free-icon/user_318-804790.jpg?w=2000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
