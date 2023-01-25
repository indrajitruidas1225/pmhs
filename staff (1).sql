-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 06:05 PM
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
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `qualifications` text NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `img_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`name`, `designation`, `qualifications`, `specialization`, `img_path`) VALUES
('Nadugopal Manna', 'HM', 'MA(English double,Lingu..),B.Ed', 'Arts', 'hm.jpg'),
('Pintu Ghosh', 'Asst. HM', 'M.SC(Physics),MA(Education),B.Ed', 'Science', 'asst_hm.jpg'),
('Anjan Saha', 'Assistant Teacher', 'B.Com,BPED', 'Arts', 'anjan.jpg'),
('Asit Kumar Gayen', 'Assistant Teacher', 'MA(Bengali),B.Ed', 'Arts', 'asit.jpg'),
('Swarup Kumar Ghosh', 'Assistant Teacher', 'MA(English),B.Ed', 'None', 'swarup_g.jpg'),
('Chandan Kumar Sarker', 'Assistant Teacher', 'MA(English,History,Education),B.Ed,M.Phil(English)', 'Arts', 'chandan.jpg'),
('Shirsendu Ghosh', 'Assistant Teacher', 'M.SC(Chemistry),B.ED', 'Science', 'shirsendu.jpg'),
('Rajesh Mandal', 'Assistant Teacher', 'MA(Geography),B.Ed', 'Arts', 'rajesh.jpg'),
('Sudip Chatterjee', 'Assistant Teacher', 'M.SC(Botany),B.ED', 'Science', 'sudip.jpg'),
('Seema Pramanick', 'Assistant Teacher', 'BA(Needle Work),(Lady Brabourne)', 'None', 'seema.jpg'),
('Riya Chatterjee', 'Assistant Teacher', 'MA(Sanskrit),B.ED', 'Arts', 'https://img.freepik.com/free-icon/user_318-804790.jpg?w=2000'),
('Sanjoy Kumar Mallick', 'Assistant Teacher', 'MA(English),B.Ed', 'Arts', 'sanjoy.jpg'),
('Partha Sarathi Pal', 'Assistant Teacher', 'M.SC(Mathematics),B.ED', 'Science', 'partha.jpg'),
('Apurba Rajak', 'Assistant Teacher', 'MA(History),B.ED', 'Arts', 'apurba.jpg'),
('Jhuma Halder', 'Assistant Teacher', 'MA(Education),B.ED', 'Arts', 'jhuma.jpg'),
('Manka Hansda', 'Assistant Teacher', 'MA(Bengali),B.Ed', 'Arts', 'manka.jpg'),
('Kartik Saha', 'Assistant Teacher', 'B.Sc(Pure),B.ED', 'None', 'https://img.freepik.com/free-icon/user_318-804790.jpg?w=2000'),
('Pralay Chakraborty', 'Assistant Teacher', 'MA(History),B.ED', 'Arts', 'pralay.jpg'),
('Rupa Sil', 'Assistant Teacher', 'MA(Philosophy),B.ED', 'Arts', 'rupa.jpg'),
('Kabita Garai', 'Assistant Teacher', 'MA(Bengali),B.Ed', 'Arts', 'https://img.freepik.com/free-icon/user_318-804790.jpg?w=2000'),
('Sanchita Dalal', 'Assistant Teacher', 'MA(Geography),B.Ed', 'Arts', 'https://img.freepik.com/free-icon/user_318-804790.jpg?w=2000'),
('Prakitidas Roy', 'Contractual Assistant Teacher', 'MA(Political Science,History),B.ED', 'Arts', 'prakriti.jpg'),
('Satyajit Banerjee', 'Assistant Teacher', 'I.C.T Computer Teacher', 'None', 'https://img.freepik.com/free-icon/user_318-804790.jpg?w=2000'),
('Swarup Kumar Mukherjee', 'Assistant Teacher', 'MPED,Physical Education(Not full time)', 'Arts', 'swarup_m.jpg'),
('Mukul Chattopadhay', 'Para Teacher', 'B.SC(Bio),D.ED', 'None', 'https://img.freepik.com/free-icon/user_318-804790.jpg?w=2000'),
('Madan Mahanta', 'Para Teacher', 'MA(History),D.ED', 'None', 'madan.jpg'),
('Tarapada Mal', 'Para Teacher', 'MA(Philosophy),D.ED', 'None', 'https://img.freepik.com/free-icon/user_318-804790.jpg?w=2000'),
('Tapas Kumar Kar', 'Librarian', 'M.COM, M.L.I.S', 'None', 'tapas.jpg'),
('Madhab Chandra Lohar', 'Clerk', '', 'None', 'madhab.jpg'),
('Rahul Mukherjee', 'Clerk', '', 'None', 'rahul.jpg'),
('Pradyot Saha', 'Group D', '', 'None', 'pradyut.jpg'),
('Ranjit Kumar Ghosh', 'Group D', '', 'None', 'ranjit.jpg'),
('Ruma Nandi', 'Group D', '', 'None', 'ruma.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
