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
-- Database: `phantrang`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `link`, `description`) VALUES
(1, 'Bài 1: Làm quen với môi trường phát triển ứng dụng PHP', 'http://hocweb.com.vn/bai-1-lam-quen-voi-moi-truong-phat-trien-ung-dung-php/', 'Mục đích: Cách sử dụng môi trường  phát triển ứng dụng  PHP  Cài đặt và sử dụng Web Server (Xampp) Tạo và tổ chức cây thư mục trên PHPDesigner 8 Làm quen với đối tượng Form Thực hiện các thao tác: tạo, xoá trang Viết chương trình và thực thi một trang'),
(2, 'Bài 1. Xuất câu chào xử lý trên form PHP (tt)', 'http://hocweb.com.vn/bai-1-xuat-cau-chao-xu-ly-tren-form-php-tt/', 'Phần 2. Xử lý trên form PHP  Tiếp tục bài 1. Ta thử nghiệm đoạn code cơ bản đầu tiên của các ngôn ngữ lập trình. Theo các bạn đó là gì nào?  Đó là đoạn code nhập vào họ tên và xuất họ tên ra ngoài màn hình.'),
(3, 'Bài 2: Sử dụng hàm if trong PHP để giải phương trình bậc 1 (p1)', 'http://hocweb.com.vn/bai-2-su-dung-ham-if-de-giai-phuong-trinh-bac-1-trong-php/', 'Hôm nay hocweb.com.vn tiếp tục giới thiệu cho các bạn về hàm IF trong PHP.  Tham khảo thêm từ nguồn http://www.php.net/manual/en/control-structures.if.php Cú pháp như sau: if( điều kiện) {      lệnh 1; } '),
(4, 'Bài 2: Sử dụng lệnh switch case để làm bài tập chuyển số thành chữ (p2)', 'http://hocweb.com.vn/bai-2-su-dung-lenh-switch-case-de-lam-bai-tap-chuyen-thanh-chu-p2/', 'Hôm trước chúng ta đã tìm hiểu các lệnh if thông qua bài tập giải phương trình bậc 1, hôm nay Học web tiếp tục giới thiệu các bạn lệnh switch case để giải bài tập chuyển số thành chữ.');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `title`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit'),
(2, 'Ut wisi enim ad minim veniam, quis nostrud exerci tation'),
(3, 'Duis autem vel eum iriure dolor in hendrerit in vulputate'),
(4, 'Nam liber tempor cum soluta nobis eleifend'),
(5, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit'),
(195, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit'),
(196, 'Typi non habent claritatem insitam'),
(197, 'Nam liber ipsum consectetuer adipiscing elit'),
(198, 'Eodem modo typi, qui nunc nobis videntur parum clari'),
(199, 'Claritas est etiam processus dynamicus, qui sequitur mutationem'),
(200, 'Imperdiet doming id quod mazim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
