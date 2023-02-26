-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql104.epizy.com
-- Generation Time: Feb 26, 2023 at 07:14 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33452204_pmhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `admin_id`, `password`, `img_path`) VALUES
(1, 'Nardu Gopal Manna', 'CGIU5095', 'hm@pmhs', 'FB_IMG_1676391043915.jpgCGIU5095.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `notice_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `name`, `notice_no`, `date`, `path`) VALUES
(17, 'Sample4', '55A', '2023-01-27', 'download.png');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `qualifications` text NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `img_path` text NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `doj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `designation`, `qualifications`, `specialization`, `img_path`, `staff_id`, `mobile`, `email`, `doj`) VALUES
(1, 'Nardu Gopal Manna', 'HM', 'MA(English double,Lingu..),B.Ed', 'Arts', 'FB_IMG_1676748546127.jpgCGIU5095.jpg', 'CGIU5095', '', '', ''),
(2, 'Pintu Ghosh', 'Asst. HM', 'M.SC(Physics),MA(Education),B.EdScience', 'Science', 'asst_hm.jpg', 'UIOD7996', '', '', ''),
(3, 'Anjan Saha', 'Assistant Teacher', 'B.Com,BPED', 'Arts', 'anjan.jpg', 'VNTK2649', '', '', ''),
(4, 'Asit Kumar Gayen', 'Assistant Teacher', 'MA(Bengali),B.Ed', 'Arts', 'asit.jpg', 'FGZT2193', '', '', ''),
(5, 'Swarup Kumar Ghosh', 'Assistant Teacher', 'MA(English),B.Ed', 'None', 'swarup_g.jpg', 'DXNW7433', '', '', ''),
(6, 'Chandan Kumar Sarkar', 'Assistant Teacher', 'MA(English,History,Education),B.Ed,M.Phil(English)', 'Arts', 'chandan.jpg', 'ZGDU8728', '', '', ''),
(7, 'Shirsendu Ghosh', 'Assistant Teacher', 'M.SC(Chemistry),B.ED', 'Science', 'shirsendu.jpg', 'OPLP4352', '', '', ''),
(8, 'Rajesh Mondal', 'Assistant Teacher', 'MA(Geography),B.Ed', 'Arts', 'rajesh.jpg', 'IVLH3378', '', '', ''),
(9, 'Sudip Chatterjee', 'Assistant Teacher', 'M.SC(Botany),B.ED', 'Science', 'FB_IMG_1676390876346.jpgFQBO3047.jpg', 'FQBO3047', '', '', ''),
(10, 'Seema Pramanik', 'Assistant Teacher', 'BA(Needle Work),(Lady Braborn)', 'None', 'seema.jpg', 'JGUM7646', '', '', ''),
(11, 'Ria Chatterjee', 'Assistant Teacher', 'MA(Sanskrit),B.ED', 'Arts', 'ria.jpg', 'NHTR9589', '', '', ''),
(12, 'Sanjoy Kumar Mallick', 'Assistant Teacher', 'MA(English),B.Ed', 'Arts', 'sanjoy.jpg', 'DCLY8207', '', '', ''),
(13, 'Partha Sarathi Pal', 'Assistant Teacher', 'M.SC(Mathematics),B.ED', 'Science', 'partha.jpg', 'VTFT8141', '', '', ''),
(14, 'Apurba Rajak', 'Assistant Teacher', 'MA(History),B.ED', 'Arts', 'apurba.jpg', 'OGTE8446', '', '', ''),
(15, 'Jhuma Halder', 'Assistant Teacher', 'MA(Education),B.ED', 'Arts', 'jhuma.jpg', 'BZUA5615', '', '', ''),
(16, 'Manka Hansda', 'Assistant Teacher', 'MA(Bengali),B.Ed', 'Arts', 'manka.jpg', 'GGQL9486', '', '', ''),
(17, 'Kartick Saha', 'Assistant Teacher', 'B.Sc(Pure),B.ED', 'None', 'kartik.jpg', 'GIZB4617', '', '', ''),
(18, 'Pralay Chakraborty', 'Assistant Teacher', 'MA(History),B.ED', 'Arts', 'pralay.jpg', 'PBQM0462', '', '', ''),
(19, 'Rupa Shil', 'Assistant Teacher', 'MA(Philosophy),B.ED', 'Arts', 'rupa.jpg', 'NUBI9718', '', '', ''),
(20, 'Kabita Garai', 'Assistant Teacher', 'MA(Bengali),B.Ed', 'Arts', 'kabita.jpg', 'VXGE7206', '', '', ''),
(21, 'Sanchita Dalal', 'Assistant Teacher', 'MA(Geography),B.Ed', 'Arts', 'sanchita.jpg', 'TOOJ2099', '', '', ''),
(22, 'Prakriti Das Roy', 'Contractual Assistant Teacher', 'MA(Political Science,History),B.ED', 'Arts', 'prakriti.jpg', 'PTAA4602', '', '', ''),
(23, 'Satyajit Banerjee', 'Assistant Teacher', 'I.C.T Computer Teacher', 'None', 'satyajit.jpg', 'CZAN7249', '', '', ''),
(24, 'Swarup Kumar Mukherjee', 'Assistant Teacher', 'MPED,Physical Education(Not full time)', 'Arts', 'swarup_m.jpg', '', '', '', ''),
(25, 'MUKUL CHATTOPADHYAY MUKHERJEE', 'Para Teacher', 'B.SC(Bio),D.ED', 'None', 'mukul.jpg', '186304', '', '', ''),
(26, 'Madan Mahanta', 'Para Teacher', 'MA(History),D.ED', 'None', 'madan.jpg', '169557', '', '', ''),
(27, 'Tarapada Mal', 'Para Teacher', 'MA(Philosophy),D.ED', 'None', 'tarapada.jpg', '118337', '', '', ''),
(28, 'Tapas Kumar Kar', 'Librarian', 'M.COM, M.L.I.S', 'None', 'tapas.jpg', 'QMYR7476', '9474814460', 'tapaskumar722206@gmail.com', '12-07-2016'),
(29, 'Madhab Chandra Lohar', 'Clerk', 'H. S.', 'None', 'madhab.jpg', 'TCDO7520', '9734234020', 'mclohar50@gmail.com', '28-08-2008'),
(30, 'Rahul Mukherjee', 'Clerk', 'H. S. (D E I E)', 'None', 'rahul.jpg', 'BDLO0690', '9002433618', 'rahulmukherjee0402@gmail.com', '18-01-2016'),
(31, 'Pradyut Saha', 'Group D', 'M.P', 'None', 'pradyut.jpg', 'SVNE0794', '9474990731', 'pradyutsaha731@gmail.com', '28-03-2005'),
(32, 'Ranjit Kumar Ghosh', 'Group D', 'M. P. (M A, B. ED.)', 'None', 'ranjit.jpg', 'ZCYE4533', '8101119439', 'rkghosh01011986@gmail.com', '20-11-2012'),
(33, 'Ruma Nandi', 'Group D', 'M.P', 'None', 'ruma.jpg', 'CGOA7136', '8145123672', 'ruma87883@gmail.com', '06-04-2015');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `passed`, `current`, `img_path`) VALUES
(1, 'Koushik Garai', '2020', 'D.Pharm(Institute of Pharmacy,Kalyani),B.Pharm', 'koushik.jpg'),
(3, 'Indrajit Ruidas', '2020', 'BTech ,CSE\r\n(Purulia Govt. Engineering College)', 'indrajit.jpg'),
(5, 'Ankita Saha', '2020', 'GNM\r\n(NRS Medical College & Hospital)', 'ankita.jpg'),
(7, 'Binoy Krishna Pal', '2020', 'BTech, CSE\r\n(Purulia Govt. Engineering College)', 'binoy.jpg'),
(8, 'Shilpa Pal', '2020', 'BSC Nursing\r\n(Bankura Sammilani Medical College)', 'shilpa.jpg'),
(11, 'Kakali Mal', '2020', 'GNM\r\n(R.G Kar Medical College & Hospital)', 'kakali.jpg'),
(12, 'Ananta Musib', '2022', 'BTech,CSE\r\n(Purulia Govt. Engineering College)', 'ananta.jfif'),
(15, 'Suman Ray Pratihar', '2020', 'Dairy Technology\r\n(WBUAFS)', 'suman.jpg'),
(17, 'Priti Ghosh', '2020', 'BSC,Food Science\r\n(MAKAUT)', 'priti.jfif'),
(19, 'Jayanta Mondal', '2022', 'BTech in EE (Purulia Government Engineering College)', 'jayanta.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `study_material`
--

CREATE TABLE `study_material` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `path` varchar(255) NOT NULL,
  `t_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study_material`
--

INSERT INTO `study_material` (`id`, `title`, `unique_id`, `date`, `path`, `t_id`) VALUES
(37, 'Material 1', '833293', '2023-02-02', 'download (2).png', '12345'),
(40, 'T1', '3d9c41', '2023-02-13', 'rahul.jpg', 'OGTE8446'),
(41, 'T2', '7848b3', '2023-02-13', 'shirsendu.jpg', 'OGTE8446'),
(42, 'T3', 'd14f41', '2023-02-13', 'chandan.jpg', 'DCLY8207');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img_path` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `doj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `teacher_id`, `password`, `img_path`, `mobile`, `email`, `doj`) VALUES
(1, 'NARDU GOPAL MANNA', 'CGIU5095', 'hm@pmhs', 'FB_IMG_1676748546127.jpgCGIU5095.jpg', '9474391009', 'nardugopal@gmail.com', '07-01-2015'),
(2, 'PINTU GHOSH', 'UIOD7996', 'pg@pmhs', 'asst_hm.jpg', '9475168637', 'pg9475168637@gmail.com', '04-01-2000'),
(3, 'ANJAN SAHA', 'VNTK2649', 'as@pmhs', 'anjan.jpg', '9064758194', 'anjansaha4077@gmail.com', '03-10-1988'),
(4, 'ASIT KUMAR GAYEN', 'FGZT2193', 'akg@pmhs', 'asit.jpg', '9800464326', 'asitkumargayen@gmail.com', '17-02-1997'),
(5, 'SWARUP KUMAR GHOSH', 'DXNW7433', 'skg@pmhs', 'swarup_g.jpg', '8670005565', 'swarupg206@gmail.com', '17-07-2001'),
(6, 'CHANDAN KUMAR SARKAR', 'ZGDU8728', 'cks@pmhs', 'chandan.jpg', '7074630616', 'namitasarkar913@gmail.com', '28-09-2007'),
(7, 'SHIRSENDU GHOSH', 'OPLP4352', 'sg@pmhs', 'shirsendu.jpg', '9475094085', 'shirsendu1983@gmail.com', '10-09-2009'),
(8, 'RAJESH MONDAL', 'IVLH3378', 'rm@pmhs', 'rajesh.jpg', '8670533433', 'mondalrajesh0033@gmail.com', '11-12-2010'),
(9, 'SUDIP CHATTERJEE', 'FQBO3047', 'sudipc@pmhs', 'FB_IMG_1676390876346.jpgFQBO3047.jpg', '9434528789', 'sudipchatterjee.bishnu@gmail.com', '12-07-2011'),
(10, 'SEEMA PRAMANIK', 'JGUM7646', 'seemap@pmhs', 'seema.jpg', '9474142123', '26011977s@gmail.com', '22-08-2012'),
(11, 'SANJOY KUMAR MALLICK', 'DCLY8207', 'skm@pmhs', 'sanjoy.jpg', '9475864964', 'sanjoymallick1983@gmail.com', '16-11-2013'),
(12, 'RIA CHATTERJEE', 'NHTR9589', 'riac@pmhs', 'ria.jpg', '9475217472', 'riasushovan@gmail.com', '16-11-2013'),
(13, 'PARTHA SARATHI PAL', 'VTFT8141', 'psp@pmhs', 'partha.jpg', '9641091242', 'parthasarathipal13@gmail.com', '18-11-2013'),
(14, 'APURBA RAJAK', 'OGTE8446', 'aj@pmhs', 'apurba.jpg', '9476303284', 'apurbar99@gmail.com', '20-11-2013'),
(15, 'JHUMA HALDER', 'BZUA5615', 'jh@pmhs', 'jhuma.jpg', '6295315101', 'jhumah107@gmail.com', '27-06-2014'),
(16, 'MANKA HANSDA', 'GGQL9486', 'mh@pmhs', 'manka.jpg', '9932887304', 'mankahansda@gmail.com', '18-03-2019'),
(17, 'KARTICK SAHA', 'GIZB4617', 'ks@pmhs', 'kartick.jpg', '9547007388', 'kartick666saha@gmail.com', '12-11-2020'),
(18, 'PRALAY CHAKRABORTY', 'PBQM0462', 'prc@pmhs', 'pralay.jpg', '9635475716', 'pralayckakraborty2@gmail.com', '12-02-2021'),
(19, 'RUPA SHIL', 'NUBI9718', 'rpc@pmhs', 'rupa.jpg', '8670530204', 'rupasonamukhiback@gmail.com', '08-01-2021'),
(20, 'KABITA GARAI', 'VXGE7206', 'kbg@pmhs', 'kabita.jpg', '9775709801', 'kabitagarai@gmail.com', '08-10-2021'),
(21, 'SANCHITA DALAL', 'TOOJ2099', 'snd@pmhs', 'sanchita.jpg', '9851427978', 'sanchitadalal84@gmail.com', '29-06-2022'),
(22, 'PRAKRITI DAS ROY', 'PTAA4602', 'pdr@pmhs', 'prakriti.jpg', '8900191807', 'prakritidasroy@gmail.com', '05-12-2002'),
(23, 'SATYAJIT BANERJEE', 'CZAN7249', 'stb@pmhs', 'satyajit.jpg', '8918125488', 'banerjeesatyajit92@gmail.com', '21-09-2017'),
(24, 'MUKUL CHATTOPADHYAY MUKHERJEE', '186304', 'mcm@pmhs', 'mukul.jpg', '9434572726', 'mukul@gmail.com', '19-10-2004'),
(25, 'MADAN MAHANTA', '169557', 'mm@pmhs', 'madan.jpg', '6294341856', 'madansikha@gmail.com', '19-10-2004'),
(26, 'TARAPADA MAL', '118337', 'tm@pmhs', 'tarapada.jpg', '6296101536', 'tarapadam1979@gmail.com', '27-07-2006'),
(27, 'TAPAS KUMAR KAR', 'QMYR7476', 'tkk@pmhs', 'tapas.jpg', '9474814460', 'tapaskumar722206@gmail.com', '12-07-2016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_material`
--
ALTER TABLE `study_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `study_material`
--
ALTER TABLE `study_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
