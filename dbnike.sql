-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 11:19 PM
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
-- Database: `dbnike`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbgiay`
--

CREATE TABLE `tbgiay` (
  `Giay_id` int(10) NOT NULL,
  `MaSo` varchar(50) NOT NULL,
  `TenGiay` varchar(50) NOT NULL,
  `DonGia` double NOT NULL,
  `SoLuong` tinyint(3) NOT NULL,
  `HinhAnh` varchar(50) NOT NULL,
  `HDBaoQuan` varchar(300) NOT NULL,
  `HangSX` varchar(50) NOT NULL,
  `Maloai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbhd_chitiet`
--

CREATE TABLE `tbhd_chitiet` (
  `HDCT_id` int(10) NOT NULL,
  `SoLuong` tinyint(4) NOT NULL,
  `DonGia` double NOT NULL,
  `MaGiay` int(10) NOT NULL,
  `SoHD` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbhoadon`
--

CREATE TABLE `tbhoadon` (
  `HD_id` int(10) NOT NULL,
  `NgayLapHD` date NOT NULL,
  `KhuyenMai` varchar(50) NOT NULL,
  `MaKH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbkhachhang`
--

CREATE TABLE `tbkhachhang` (
  `MaKH_id` int(10) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `SoDT` varchar(50) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbloaigiay`
--

CREATE TABLE `tbloaigiay` (
  `Maloai` varchar(10) NOT NULL,
  `TenLoai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbthanhvien`
--

CREATE TABLE `tbthanhvien` (
  `MaTv_id` int(10) NOT NULL,
  `LoaiKH` varchar(50) NOT NULL,
  `Diem` int(10) NOT NULL,
  `MaKH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Hoten` varchar(100) NOT NULL,
  `NgaySinh` date NOT NULL,
  `Gioitinh` tinyint(1) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `CMND` varchar(20) NOT NULL,
  `DienThoai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`user_id`, `username`, `Password`, `Hoten`, `NgaySinh`, `Gioitinh`, `Email`, `CMND`, `DienThoai`) VALUES
(1, 'Tiến Nguyễn', '123123123', 'Nguyễn Mạnh Tiến', '2006-06-25', 0, 'thaitan@gmail.com', '123123123123', '0989786968'),
(2, 'Trần Hòa', '123123123123', 'Trần Quốc Hòa', '2006-09-12', 0, 'choppery8@gmail.com', '123123234234', '096875664'),
(3, 'Tân Thái', '1232234345', 'Thái Kim Tân', '2006-07-07', 1, 'thaitan@gmail.com', '12323455678', '0965775847'),
(4, 'Vinh Chịu', '28476434', 'Triệu Gia Vinh', '2007-08-28', 0, 'vinhmup@gmail.com', '12323543456', '069687585'),
(5, 'Sâm lỏ', '123235434566', 'Trần Bảo Sâm', '2006-01-26', 0, 'samlo@gmail.com', '12324234234', '0968967868');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbgiay`
--
ALTER TABLE `tbgiay`
  ADD PRIMARY KEY (`Giay_id`),
  ADD KEY `Maloai` (`Maloai`);

--
-- Indexes for table `tbhd_chitiet`
--
ALTER TABLE `tbhd_chitiet`
  ADD PRIMARY KEY (`HDCT_id`),
  ADD KEY `MaGiay` (`MaGiay`),
  ADD KEY `SoHD` (`SoHD`);

--
-- Indexes for table `tbhoadon`
--
ALTER TABLE `tbhoadon`
  ADD PRIMARY KEY (`HD_id`),
  ADD KEY `MaKH_id` (`MaKH`);

--
-- Indexes for table `tbkhachhang`
--
ALTER TABLE `tbkhachhang`
  ADD PRIMARY KEY (`MaKH_id`);

--
-- Indexes for table `tbloaigiay`
--
ALTER TABLE `tbloaigiay`
  ADD PRIMARY KEY (`Maloai`);

--
-- Indexes for table `tbthanhvien`
--
ALTER TABLE `tbthanhvien`
  ADD PRIMARY KEY (`MaTv_id`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbgiay`
--
ALTER TABLE `tbgiay`
  MODIFY `Giay_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbhd_chitiet`
--
ALTER TABLE `tbhd_chitiet`
  MODIFY `HDCT_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbhoadon`
--
ALTER TABLE `tbhoadon`
  MODIFY `HD_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbkhachhang`
--
ALTER TABLE `tbkhachhang`
  MODIFY `MaKH_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbthanhvien`
--
ALTER TABLE `tbthanhvien`
  MODIFY `MaTv_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbgiay`
--
ALTER TABLE `tbgiay`
  ADD CONSTRAINT `Maloai` FOREIGN KEY (`Maloai`) REFERENCES `tbloaigiay` (`Maloai`);

--
-- Constraints for table `tbhd_chitiet`
--
ALTER TABLE `tbhd_chitiet`
  ADD CONSTRAINT `MaGiay` FOREIGN KEY (`MaGiay`) REFERENCES `tbgiay` (`Giay_id`),
  ADD CONSTRAINT `SoHD` FOREIGN KEY (`SoHD`) REFERENCES `tbhoadon` (`HD_id`);

--
-- Constraints for table `tbhoadon`
--
ALTER TABLE `tbhoadon`
  ADD CONSTRAINT `MaKH` FOREIGN KEY (`MaKH`) REFERENCES `tbkhachhang` (`MaKH_id`);

--
-- Constraints for table `tbthanhvien`
--
ALTER TABLE `tbthanhvien`
  ADD CONSTRAINT `1` FOREIGN KEY (`MaKH`) REFERENCES `tbkhachhang` (`MaKH_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
