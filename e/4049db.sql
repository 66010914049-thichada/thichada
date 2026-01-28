-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 10:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4049db`
--
CREATE DATABASE IF NOT EXISTS `4049db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4049db`;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `a_id` int(6) NOT NULL,
  `a_position` varchar(50) NOT NULL,
  `a_title` varchar(255) NOT NULL,
  `a_fullname` varchar(100) NOT NULL,
  `a_birthday` date NOT NULL,
  `a_education` varchar(255) NOT NULL,
  `a_skill` varchar(255) NOT NULL,
  `a_experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`a_id`, `a_position`, `a_title`, `a_fullname`, `a_birthday`, `a_education`, `a_skill`, `a_experience`) VALUES
(1, '0', 'นางสาว', 'ธิชาดา สีทอน', '2025-12-12', 'ปริญญาโท', 'ใช้โปรแกรมกราฟิกได้ดี', 'บริษัท ครีเอทีฟอาร์ต ดีไซน์ จำกัด'),
(2, 'นักออกแบบกราฟิก (Graphic Designer)', 'นางสาว', 'ธิชาดา สีทอน', '2025-12-12', 'ปริญญาโท', 'ใช้โปรแกรมกราฟิกได้ดี', 'บริษัท ครีเอทีฟอาร์ต ดีไซน์ จำกัด'),
(3, 'การตลาดออนไลน์ (Digital Marketing)', 'นางสาว', 'ลิซ่า แบล็คพิงค์', '2025-12-06', 'มัธยมศึกษาตอนปลาย (ม.6)', 'มีความคิดสร้างสรรค์', 'อาร์ตเวิร์ค ครีเอชั่น จำกัด');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(6) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_phone` varchar(255) NOT NULL,
  `r_height` int(3) NOT NULL,
  `r_address` varchar(255) NOT NULL,
  `r_birthday` date NOT NULL,
  `r_major` varchar(255) NOT NULL,
  `r_color` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_name`, `r_phone`, `r_height`, `r_address`, `r_birthday`, `r_major`, `r_color`) VALUES
(1, 'ธิชาดา สีทอน', '', 0, '', '0000-00-00', '', ''),
(2, 'เกวลิน เลิศล้ำ', '', 0, '', '0000-00-00', '', ''),
(3, 'ชัยธวัช ล้ำเลิศ', '', 0, '', '0000-00-00', '', ''),
(4, 'เกวลิน เลิศล้ำ', '0926327418', 0, '', '0000-00-00', '', ''),
(5, 'ลิซ่า แบล็คพิงค์', '0864823145', 0, '', '0000-00-00', '', ''),
(6, 'ท้องฟ้า สีคราม', '0846529863', 0, '', '0000-00-00', '', ''),
(7, 'อารีอาน่า แกรนเดย์', '0569821569', 163, 'america', '2025-12-04', 'การจัดการ', '#563d7c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `a_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
