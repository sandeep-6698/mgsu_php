-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2020 at 05:04 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mgsu_paper`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `yearly` tinyint(1) NOT NULL,
  `num_year_sem` int(11) DEFAULT NULL,
  `dep_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `yearly`, `num_year_sem`, `dep_id`, `time`) VALUES
(1, 'M.Sc (Computer Science)', 0, 4, 1, '2020-02-29 16:56:54'),
(2, 'M.Sc (Cyber)', 0, 4, 1, '2020-02-13 17:23:12'),
(3, 'M.Sc (Lateral Entry)', 1, 1, 1, '2020-02-29 16:57:43'),
(4, 'PGDCA', 1, 1, 1, '2020-02-13 17:23:42'),
(5, 'M.Sc (Microbiology)', 0, 4, 2, '2020-02-13 17:23:12'),
(6, 'M.Sc  (Envirnmont Science)', 0, 4, 4, '2020-02-13 17:23:12'),
(7, 'B.A History (Honors)', 1, 3, 5, '2020-02-13 17:24:00'),
(8, 'B.A (L.L.B.)', 1, 3, 6, '2020-02-13 19:09:28'),
(9, 'B.A (English)', 0, 4, 7, '2020-02-13 17:23:12'),
(10, 'M.A (English)', 0, 4, 7, '2020-02-13 17:23:12'),
(11, 'MCA', 0, 6, 1, '2020-02-23 06:32:28'),
(12, 'PGDMT', 0, 4, 2, '2020-02-13 17:23:12'),
(13, 'PGDPM', 0, 4, 2, '2020-02-13 17:23:12'),
(14, 'PGDIB', 0, 4, 2, '2020-02-13 17:23:12'),
(15, 'PGDGR', 1, 1, 4, '2020-02-13 19:07:46'),
(16, 'PGDADT', 0, 4, 4, '2020-02-13 17:23:12'),
(17, 'PGDEL', 0, 4, 4, '2020-02-13 17:23:12'),
(18, 'M.A. History (Medieval)', 0, 4, 5, '2020-02-13 17:23:12'),
(19, 'M.A  History (Archaeology)', 0, 4, 5, '2020-02-13 17:23:12'),
(20, 'M.A. History (GCH)', 0, 4, 5, '2020-02-13 17:23:12'),
(21, 'PGDT', 0, 4, 7, '2020-02-13 17:23:12'),
(22, 'B.SC Yogic Science (SFS)', 0, 4, 3, '2020-02-13 17:23:12'),
(23, 'M.Sc YSTM(SFS)', 0, 4, 3, '2020-02-13 17:23:12'),
(24, 'PGDBF (SFS)', 0, 4, 3, '2020-02-13 17:23:12'),
(25, 'PGTTM(SFS)', 0, 4, 3, '2020-02-13 17:23:12'),
(26, 'DPK (SFS)', 0, 4, 3, '2020-02-13 17:23:12'),
(27, 'BLISc', 1, 1, 8, '2020-02-13 18:57:26'),
(29, 'M.A. Political Science', 0, 4, 9, '2020-02-13 17:23:12'),
(30, 'B.A./B.Sc Geography ( Honors)', 0, 4, 9, '2020-02-13 17:23:12'),
(31, 'M.A. Geography', 0, 4, 9, '2020-02-13 17:23:12'),
(32, 'M.A. Hindi', 0, 4, 9, '2020-02-13 17:23:12'),
(33, 'L.L.M', 1, 2, 6, '2020-02-13 19:25:34'),
(34, 'M.A. Rajasthani', 0, 4, 9, '2020-03-05 12:04:26'),
(70, 'course', 1, 3, 72, '2020-03-13 07:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dep_name` varchar(50) NOT NULL,
  `dep_img_name` varchar(50) NOT NULL,
  `dep_description` text DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dep_name`, `dep_img_name`, `dep_description`, `time`) VALUES
(1, 'Computer Science', 'cs.jpeg', 'This is CS Stream', '2020-02-14 02:42:57'),
(2, 'Microbiology', 'micro.jpeg', '', '2020-01-29 19:11:27'),
(3, 'Yoga Science', 'ys.jpeg', '', '2020-01-29 19:11:27'),
(4, 'Envirnment Science', 'es.jpeg', '', '2020-01-29 19:11:27'),
(5, 'History', 'history.jpeg', '', '2020-01-29 19:11:27'),
(6, 'Law', 'law.jpeg', '', '2020-01-29 19:11:27'),
(7, 'English', 'english.jpeg', '', '2020-01-29 19:11:27'),
(8, 'Library and Informatic Science', 'lis.jpeg', '', '2020-01-29 19:11:27'),
(9, 'Other', 'other.jpeg', '', '2020-01-29 19:11:27'),
(72, 'new dep', '1584083400post.png', 'JF', '2020-03-13 07:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `id` int(11) NOT NULL,
  `paper_name` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  `sem` enum('1','2','3','4','5','6','11','12','13','14','15','16') NOT NULL,
  `sub_id` int(11) NOT NULL,
  `status` enum('Yes','No') NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `sem` enum('1','2','3','4','5','6','11','12','13','14','15','16') NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `sub_name`, `course_id`, `sem`, `time`) VALUES
(1, 'C++ Programing', 1, '1', '2020-01-25 09:15:29'),
(2, 'Internet and web programing', 1, '1', '2020-01-25 08:32:17'),
(3, 'Computer Orgnaization', 1, '1', '2020-01-25 08:32:17'),
(4, 'Mathematics for CS', 1, '1', '2020-01-25 08:34:44'),
(5, 'DBMS', 1, '2', '2020-01-27 17:09:17'),
(6, 'Data Comunication and Networking', 1, '2', '2020-01-27 17:09:24'),
(7, ' Operation System', 1, '2', '2020-01-27 17:09:33'),
(8, 'PHP', 1, '2', '2020-01-27 17:09:40'),
(9, 'Data Structure', 1, '3', '2020-01-27 17:09:48'),
(10, 'SE and Research Methodology', 1, '3', '2020-01-27 17:09:54'),
(11, 'Computer Graphic  and Multimedia', 1, '3', '2020-03-13 07:11:39'),
(12, 'Java', 1, '3', '2020-01-27 17:10:09'),
(13, 'SEO', 1, '4', '2020-01-27 17:10:16'),
(14, 'Data Mining', 1, '4', '2020-01-27 17:10:22'),
(15, 'Python', 1, '4', '2020-01-27 17:10:29'),
(16, 'Android Programing', 1, '4', '2020-01-27 17:10:34'),
(17, 'Advance Web Programing', 1, '4', '2020-01-27 17:10:39'),
(18, 'Advance Java', 1, '4', '2020-01-27 17:10:47'),
(19, 'AI', 1, '4', '2020-01-27 17:10:52'),
(20, 'Cloud Computing', 1, '4', '2020-01-27 17:10:58'),
(21, 'Internet Of Things', 1, '4', '2020-03-04 08:11:02'),
(22, 'General Microbiology and Bacteriology', 5, '1', '2020-01-27 17:02:36'),
(23, 'Microbial Physiology and Biochemistry', 5, '1', '2020-01-25 09:23:24'),
(24, 'Molecular Biology', 5, '1', '2020-01-25 09:23:24'),
(25, 'Microbial Genetics and Genetic Engineering', 5, '1', '2020-01-25 09:23:24'),
(26, 'Viriology', 5, '2', '2020-01-27 17:17:24'),
(27, 'Bioinstrumentation', 5, '2', '2020-01-27 17:17:28'),
(28, 'Eukaryotic Microbiology', 5, '2', '2020-01-27 17:17:32'),
(29, ' Indestrial and food Microbiology', 5, '2', '2020-01-27 17:17:36'),
(30, 'Microbial Ecology and Envirnometal Biotechnology', 5, '3', '2020-01-27 17:17:41'),
(31, 'Siol and Agriculture Microbiology', 5, '3', '2020-01-27 17:17:46'),
(32, 'Medical Microbiology', 5, '3', '2020-01-27 17:17:50'),
(33, 'Immunology', 5, '3', '2020-01-27 17:17:57'),
(34, 'Biostatistics', 5, '4', '2020-01-27 17:18:01'),
(35, 'Bioinformatics and Computer Application', 5, '4', '2020-01-27 17:18:06'),
(36, 'Mathematical Foundation for Cyber Security', 2, '1', '2020-01-27 05:15:33'),
(37, 'Cyber Laws and Security Policies', 2, '1', '2020-01-27 05:15:33'),
(38, 'Intellectual Property Rights', 2, '1', '2020-01-27 05:15:33'),
(39, ' Java', 2, '1', '2020-01-27 05:15:33'),
(40, 'Software Velnerability Analysis', 2, '2', '2020-01-27 17:15:11'),
(41, 'SecurityThreats', 2, '2', '2020-01-27 17:15:16'),
(42, 'Web Security', 2, '2', '2020-01-27 17:15:21'),
(43, 'Python', 2, '2', '2020-01-27 17:15:27'),
(44, 'Intrusion Detection and Prevention System', 2, '3', '2020-01-27 17:15:34'),
(45, 'Information Storage Management', 2, '3', '2020-01-27 17:15:39'),
(46, 'Information System Audit', 2, '3', '2020-01-27 17:15:58'),
(47, 'SQL', 2, '3', '2020-01-27 17:16:04'),
(48, 'Network and Wireless Security', 2, '4', '2020-01-27 17:16:11'),
(49, 'Cyber Crime Investigations and Digital Forensics', 2, '4', '2020-01-27 17:16:17'),
(50, 'Digital Watermarking and Steganography', 2, '4', '2020-01-27 17:16:22'),
(51, 'Computer Organization', 4, '11', '2020-02-13 18:43:08'),
(52, ' Programming with C++', 4, '11', '2020-02-13 18:43:08'),
(53, 'Database System', 4, '11', '2020-02-13 18:43:08'),
(54, 'Operating System', 4, '11', '2020-02-13 18:43:08'),
(55, 'Computer Networks', 4, '11', '2020-02-13 18:43:08'),
(56, 'Environment and Ecology', 6, '1', '2020-01-27 06:39:04'),
(57, 'Environmental Geosciences', 6, '1', '2020-01-27 06:39:04'),
(58, 'Environmental Chemistry', 6, '1', '2020-01-27 06:39:04'),
(59, 'Environmental Pollution', 6, '1', '2020-01-27 06:39:04'),
(60, 'Environmental Monitoring', 6, '2', '2020-01-28 10:36:19'),
(61, 'Desert Ecology', 6, '2', '2020-01-28 10:36:24'),
(62, 'Environmental Legislation', 6, '2', '2020-01-28 10:36:32'),
(63, 'Environmental Toxicology', 6, '2', '2020-01-28 10:36:38'),
(64, 'Environmental Technology', 6, '3', '2020-01-28 10:36:57'),
(65, 'Environmental Impact Assessment-I', 6, '3', '2020-01-28 10:37:02'),
(66, 'Population and Community Ecology', 6, '3', '2020-01-28 10:37:09'),
(67, 'Biomes and Biogeography', 6, '3', '2020-01-28 10:37:15'),
(68, 'Yoga and Health', 6, '3', '2020-01-28 10:37:24'),
(69, 'Basics of Computer Science', 6, '3', '2020-01-28 10:37:32'),
(70, 'Environmental Impact Assessment-II', 6, '4', '2020-01-28 10:37:46'),
(71, 'Natural Resource Managemen', 6, '4', '2020-01-28 10:37:56'),
(72, 'Biodiversity and Conservation', 6, '4', '2020-01-28 10:38:02'),
(73, 'Environmental Issues and Awareness', 6, '4', '2020-01-28 10:38:10'),
(74, 'Presentation skills', 6, '4', '2020-01-28 10:38:15'),
(75, 'Mathematics for Computer Science', 3, '11', '2020-03-04 08:27:52'),
(76, 'Software Engineering', 3, '11', '2020-02-13 18:43:08'),
(77, 'Data Structure', 3, '11', '2020-02-13 18:43:08'),
(78, 'Java', 3, '11', '2020-02-13 18:43:08'),
(79, 'Internet Programming', 3, '11', '2020-02-13 18:43:08'),
(85, 'History of Europe(1789-1870 A.D.)', 18, '1', '2020-02-06 14:21:02'),
(86, 'History of Europe (1870-1919 A.D.)', 18, '1', '2020-02-06 14:21:02'),
(87, 'International Relations (1919-1945 A.D.)', 18, '1', '2020-02-06 14:21:02'),
(88, 'Political History of Rajasthan (1200-1761 A.D.)', 18, '1', '2020-02-06 14:21:02'),
(89, 'Culture Profile of India', 18, '2', '2020-02-06 14:24:19'),
(90, 'Women in India History', 18, '2', '2020-02-06 14:24:19'),
(91, 'Social,Cultural,Economic History of Rajasthan (1700 A.D. to 1950 A.D.)', 18, '2', '2020-02-06 14:25:03'),
(92, 'Elements of Ancient Civilization and Institution', 18, '2', '2020-02-06 14:24:19'),
(93, 'The Philosophy of HIstory and Research', 18, '3', '2020-02-06 14:30:31'),
(94, 'Medieval India and Its Institution (1200-1526 A.D.)', 18, '3', '2020-02-06 14:30:31'),
(95, 'Economic History of India (1200-1550 A.D.)', 18, '3', '2020-02-06 14:30:31'),
(96, 'Sociiety-Culture and Economy of India in 18th Century', 18, '3', '2020-02-06 14:30:31'),
(97, 'Primary Sources of Medieval Indian History', 18, '3', '2020-02-06 14:30:31'),
(98, 'Historical Application in Tourism', 18, '3', '2020-02-06 14:30:31'),
(99, 'Archaeological Method', 18, '3', '2020-02-06 14:30:31'),
(100, 'Medieval India and Its Institution (1526-1656 AD)', 18, '4', '2020-02-07 01:05:45'),
(101, 'Medieval Society Religion Art and Archoetecture', 18, '4', '2020-02-07 01:05:45'),
(102, ' Economic History of India (155-1750 AD)', 18, '4', '2020-02-07 01:05:45'),
(103, 'Development of Medieval Architecture in India (1300-1700 AD)', 18, '4', '2020-02-07 01:07:19'),
(104, 'Tribal Peasant and Prajamandal Movement in Rajasthan During the Colonial Period', 18, '4', '2020-02-07 01:12:28'),
(105, 'History if Ideas(Religious Political and Social Ideas)', 18, '4', '2020-02-07 01:12:28'),
(106, '', 18, '4', '2020-02-07 01:12:28'),
(107, 'Principal of Archaeology', 19, '1', '2020-02-07 01:17:10'),
(108, 'Perhistory if India', 19, '1', '2020-02-07 01:17:10'),
(109, 'Ancient History of India (Since Ancient times to 185 B.C.)', 19, '1', '2020-02-07 01:17:10'),
(110, 'Museums and Museology', 19, '1', '2020-02-07 01:17:10'),
(111, 'Methods of Archaeology', 19, '2', '2020-02-07 01:20:33'),
(112, 'Proto history of India', 19, '2', '2020-02-07 01:20:33'),
(113, 'Ancient History of India (200 B.C.- 700 A.D.)', 19, '2', '2020-02-07 01:20:33'),
(114, 'Monuments of Rajasthan General Survey', 19, '2', '2020-02-07 01:20:33'),
(115, 'Archaeollogy of Rajasthan', 19, '3', '2020-02-07 01:22:09'),
(116, 'Numismatics: Beginning of India Coinage', 19, '3', '2020-02-07 01:22:09'),
(117, 'Art & Iconography', 19, '3', '2020-02-07 01:22:09'),
(118, 'Archietecture', 19, '4', '2020-02-07 01:23:09'),
(119, 'Antiquarian Laws', 19, '4', '2020-02-07 01:23:09'),
(120, 'Historical Essays', 19, '4', '2020-02-07 01:23:09'),
(121, 'English Language and Documentation', 10, '1', '2020-03-05 12:12:03'),
(122, 'Renaissance Poetry and Prose', 10, '1', '2020-02-07 01:26:57'),
(123, 'Caroline to Neo-Classical Age: Poetry and Prose', 10, '1', '2020-02-07 01:26:57'),
(124, 'Romantic Age: Poetry and Prose', 10, '1', '2020-02-07 01:26:57'),
(125, 'Basic Concept af Phonetics and Language Teaching', 10, '2', '2020-02-07 01:29:20'),
(126, 'Renaissance Drama and Ficitiona', 10, '2', '2020-02-07 01:29:20'),
(127, 'Caroline to Neo-Classical Age: Drana and Ficition', 10, '2', '2020-02-07 01:29:20'),
(128, 'Romantic Age: Ficition', 10, '2', '2020-02-07 01:29:20'),
(129, 'Literary Criticism and Theory-1', 10, '3', '2020-02-07 01:35:46'),
(130, 'Nineteenth Century Poetry and Prose', 10, '3', '2020-02-07 01:35:46'),
(131, 'Twentieth Century Poetry and Drama', 10, '3', '2020-02-07 01:35:46'),
(132, 'New Literatures in English', 10, '3', '2020-02-07 01:35:46'),
(133, 'Indian Writing -1', 10, '3', '2020-02-07 01:35:46'),
(134, 'Third World Literatures - 1', 10, '3', '2020-02-07 01:35:46'),
(135, 'Translation: Theorya and Practice', 10, '3', '2020-02-07 01:35:46'),
(136, 'Womens Writing - 1', 10, '3', '2020-02-07 01:35:46'),
(137, 'English Language and Culture', 10, '3', '2020-02-07 01:35:46'),
(138, 'Literary Criticism and Theory-2', 10, '4', '2020-02-07 01:40:31'),
(139, 'Nineteenth Century Ficition', 10, '4', '2020-02-07 01:40:31'),
(140, 'Twentieth Century Prose and Ficition', 10, '4', '2020-02-07 01:40:31'),
(141, 'New Literatures in Englush - 2', 10, '4', '2020-02-07 01:40:31'),
(142, 'Indian Writing -2 ', 10, '4', '2020-02-07 01:40:31'),
(143, 'Third world Literatures - 2', 10, '4', '2020-02-07 01:40:31'),
(144, 'Tribal Literature', 10, '4', '2020-02-07 01:40:31'),
(145, 'Womens Writing - 1', 10, '4', '2020-02-07 01:40:31'),
(146, 'Grammer Discourse Analysis and Course Designi', 10, '4', '2020-02-07 01:40:31'),
(147, 'Foundation of Library and Information Science', 27, '11', '2020-02-13 18:43:08'),
(148, 'Knowledge Organization :  Classification (Theory)', 27, '11', '2020-02-13 18:43:08'),
(149, 'Knowledge Orgazitaion : Cataloguing (Theory)', 27, '11', '2020-02-13 18:43:08'),
(150, 'M:anagement of Library Information Centers and Institituions', 27, '11', '2020-02-13 18:43:08'),
(151, 'References-Information Services and Sources', 27, '11', '2020-02-13 18:43:08'),
(152, 'Informatics and Communication Technology (Theory)', 27, '11', '2020-02-13 18:43:08'),
(153, 'Informatics and Communication Technology (Practical)', 27, '11', '2020-02-13 18:43:08'),
(154, 'Knowledge Organization Classification (Practical)', 27, '11', '2020-02-13 18:43:08'),
(155, 'Knowledge Orgazitaion : Cataloguing (Practical)', 27, '11', '2020-02-13 18:43:08'),
(156, 'Fundamentals of Remote Sensing Surveying & Cartography', 15, '11', '2020-02-13 18:43:08'),
(157, 'Digital Image Processing and applications of Remote Sensing in various field', 15, '11', '2020-02-13 18:43:08'),
(158, 'Fumdamentals of Geographical Information System (GIS)', 15, '11', '2020-02-13 18:43:08'),
(159, 'Practical', 15, '11', '2020-02-13 18:43:08'),
(178, 'General Principles of Contract, and consumer Protection Act, 1986', 8, '11', '2020-02-13 19:41:04'),
(179, 'Specific Contract, Sale of Goods Act, 1930, Indian Partnership Act, 1932 and Specific Relief Act, 1963', 8, '11', '2020-02-13 19:41:04'),
(180, 'Law of Torts and Motor Vehicle Act. ', 8, '11', '2020-02-13 19:42:56'),
(181, ' Family Law-I (Hindu Law) ', 8, '11', '2020-02-13 19:42:56'),
(182, ' Family Law-II (Mohammedan Law)', 8, '11', '2020-02-13 19:42:56'),
(183, ' Constitutional Law of India ', 8, '11', '2020-02-13 19:42:56'),
(184, ' Environmental Law', 8, '11', '2020-02-13 19:42:56'),
(185, 'Legal and Constitutional History of India. ', 8, '11', '2020-02-13 19:43:36'),
(186, 'Rajasthan Local Laws ', 8, '11', '2020-02-13 19:43:36'),
(187, 'Criminal Minor Act', 8, '11', '2020-02-13 19:43:36'),
(188, 'Jurisprudence', 8, '12', '2020-02-13 19:53:20'),
(189, 'Law of crimes', 8, '12', '2020-02-13 19:53:20'),
(190, 'Property law including transfer of property act and easement act', 8, '12', '2020-02-13 19:53:20'),
(191, 'Company law', 8, '12', '2020-02-13 19:53:20'),
(192, 'Public international law and human rights', 8, '12', '2020-02-13 19:53:20'),
(193, 'Labour laws', 8, '12', '2020-02-13 19:53:20'),
(194, 'Administrative law', 8, '12', '2020-02-13 19:53:20'),
(195, 'Taxation laws', 8, '12', '2020-02-13 19:53:20'),
(196, 'Insurance law', 8, '12', '2020-02-13 19:53:20'),
(197, 'Banking law including negotiable instrument act, 1881', 8, '12', '2020-02-13 19:53:20'),
(198, 'Public interest lawyering', 8, '12', '2020-02-13 19:53:20'),
(199, ' legal aid and para legal services', 8, '12', '2020-02-13 19:53:20'),
(200, 'Law of evidence', 8, '13', '2020-02-13 19:56:49'),
(201, 'The code of criminal procedure, 1973, juvenile justice act, 2015 and probation of offenders act, 1958.', 8, '13', '2020-02-13 19:56:49'),
(202, 'The code of civil procedure 1908 and the limitation act, 1963.', 8, '13', '2020-02-13 19:56:49'),
(203, 'Legal language, legal writing including general english and interpretation of statutes', 8, '13', '2020-02-13 19:56:49'),
(204, 'Trust, equity and fiduciary relations', 8, '13', '2020-02-13 19:56:49'),
(205, 'Criminology and penology', 8, '13', '2020-02-13 19:56:49'),
(206, 'Intellectual property law', 8, '13', '2020-02-13 19:56:49'),
(207, 'Law of medicine', 8, '13', '2020-02-13 19:56:49'),
(208, 'Arbitration, conciliation and alternative disputes resolution systems', 8, '13', '2020-02-13 19:56:49'),
(209, 'Land laws', 8, '13', '2020-03-04 08:31:47'),
(210, 'Drafting, pleading, conveyancing and moot court trial', 8, '13', '2020-02-13 19:56:49'),
(211, 'Law & social transformation in india ', 33, '11', '2020-02-13 20:01:45'),
(212, 'Indian constitutional law & the new challenges ', 33, '11', '2020-02-13 20:01:45'),
(213, ' judicial process ', 33, '11', '2020-02-13 20:01:45'),
(214, ' legal research and research methodology', 33, '11', '2020-02-13 20:01:45'),
(215, 'International law and organization: law, practice and future ', 33, '12', '2020-02-13 20:06:32'),
(216, 'Disarmament & peace strategies ', 33, '12', '2020-02-13 20:06:32'),
(217, 'International humanitarian law ', 33, '12', '2020-02-13 20:06:32'),
(218, 'International law: diplomacy & contemporary issues ', 33, '12', '2020-02-13 20:06:32'),
(219, 'Law of the sea', 33, '12', '2020-02-13 20:06:32'),
(220, 'Comparative criminal procedure ', 33, '12', '2020-02-13 20:06:32'),
(221, 'Penology & victimology ', 33, '12', '2020-02-13 20:06:32'),
(222, 'Drug addiction, juvenile delinquency ', 33, '12', '2020-02-13 20:06:32'),
(223, 'Privileged class deviance and criminal justice ', 33, '12', '2020-02-13 20:06:32'),
(224, 'Collective violence ', 33, '12', '2020-02-13 20:06:32'),
(225, 'Law of industrial and intellectual property ', 33, '12', '2020-02-13 20:06:32'),
(226, 'Legal regulation of economic enterprises including export & import ', 33, '12', '2020-02-13 20:06:32'),
(227, 'Regulation ', 33, '12', '2020-02-13 20:06:32'),
(228, 'Banking law ', 33, '12', '2020-02-13 20:06:32'),
(229, 'Insurance law ', 33, '12', '2020-02-13 20:06:32'),
(230, 'Corporate finance ', 33, '12', '2020-02-13 20:06:32'),
(231, 'Concept and development of human rights ', 33, '12', '2020-02-13 20:06:32'),
(232, 'Human rights in international and regional perspective ', 33, '12', '2020-02-13 20:06:32'),
(233, 'Human rights: enforcement mechanism ', 33, '12', '2020-02-13 20:06:32'),
(234, 'Human rights of disadvantaged groups: women, children, elderly persons ', 33, '12', '2020-02-13 20:06:32'),
(235, 'And refugee. ', 33, '12', '2020-02-13 20:06:32'),
(236, 'Science, technology and human rights', 33, '12', '2020-02-13 20:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `dcrypt_pass` varchar(50) NOT NULL,
  `mob` varchar(13) NOT NULL,
  `role` enum('Operator','Owner') NOT NULL,
  `active` enum('Yes','No') NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `uname`, `pass`, `dcrypt_pass`, `mob`, `role`, `active`, `time`) VALUES
(85, 'sandeep', '22c14f311a60486b36f79f3bc962be66', 'a1b2c3d4', '9571738867', 'Owner', 'Yes', '2020-03-09 16:21:13'),
(86, 'blockuser', '088ca4dadc6849cfba14ef3db1dc9f5d', 'blockuser', '1234567890', 'Operator', 'No', '2020-03-09 17:38:37'),
(89, 'operator', '4b583376b2767b923c3e1da60d10de59', 'operator', '1234567890', 'Operator', 'Yes', '2020-03-09 17:39:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=377;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
