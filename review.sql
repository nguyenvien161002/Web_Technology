-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 01:07 PM
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
-- Database: `review`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhchon`
--

CREATE TABLE `binhchon` (
  `idBC` int(11) NOT NULL,
  `MoTa` varchar(200) NOT NULL,
  `idTL` int(11) NOT NULL,
  `SoLanChon` int(11) NOT NULL,
  `AnHien` tinyint(4) NOT NULL,
  `ThuTu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binhchon`
--

INSERT INTO `binhchon` (`idBC`, `MoTa`, `idTL`, `SoLanChon`, `AnHien`, `ThuTu`) VALUES
(1, 'Bạn nghĩ hocweb.com.vn có giúp bạn học tốt hơn không ?', 1, 11, 1, 0),
(2, 'Bạn dự đoán Phương Mỹ Chi có đạt giải The Voice năm nay không ?', 1, 2, 1, 0),
(3, 'Bạn thích làm nghề gì trong các nghề dưới dây ?', 9, 1, 1, 0),
(4, 'Bạn sẽ cho con làm gì trong kì nghĩ hè này ?', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phuongan`
--

CREATE TABLE `phuongan` (
  `idPA` int(11) NOT NULL,
  `MoTa` varchar(200) NOT NULL,
  `SoLanChon` int(11) NOT NULL,
  `idBC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phuongan`
--

INSERT INTO `phuongan` (`idPA`, `MoTa`, `SoLanChon`, `idBC`) VALUES
(1, 'Là nơi để sinh viên tự học lập trình tốt nhất.', 20, 1),
(2, 'Nội dung không phong phú lắm.', 6, 1),
(3, 'Làm công chức nhà nước.', 0, 3),
(4, 'Làm trong các công ty.', 0, 3),
(5, 'Làm trong các cơ quan nghiên cứu.', 0, 3),
(6, 'Các lĩnh vực khác', 1, 3),
(7, 'Chất lượng thì cũng bình thường thôi.', 2, 1),
(8, 'Chắc chắn đoạt giải Nhất.', 2, 2),
(9, 'Hát dỡ quá, chắc rớt luôn.', 0, 2),
(10, 'Đi học thêm.', 0, 4),
(11, 'Chơi ở nhà.', 0, 4),
(12, 'Đi du lịch.', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhchon`
--
ALTER TABLE `binhchon`
  ADD PRIMARY KEY (`idBC`);

--
-- Indexes for table `phuongan`
--
ALTER TABLE `phuongan`
  ADD PRIMARY KEY (`idPA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhchon`
--
ALTER TABLE `binhchon`
  MODIFY `idBC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phuongan`
--
ALTER TABLE `phuongan`
  MODIFY `idPA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
