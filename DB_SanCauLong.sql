-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2025 at 11:35 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sancaulong`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `maDat` int(11) NOT NULL auto_increment,
  `maSan` int(11) NOT NULL,
  `time_slot_id` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `ngayDat` date NOT NULL,
  `status` varchar(11) collate utf8_unicode_ci NOT NULL,
  `ngayTao` datetime NOT NULL,
  `maKH` int(11) NOT NULL,
  `gia` decimal(10,0) NOT NULL,
  PRIMARY KEY  (`maDat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=116 ;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`maDat`, `maSan`, `time_slot_id`, `soLuong`, `ngayDat`, `status`, `ngayTao`, `maKH`, `gia`) VALUES
(107, 1, 1, 2, '2025-05-28', 'booked', '2025-05-27 10:56:41', 3, '70'),
(109, 1, 2, 1, '2025-05-28', 'booked', '2025-05-27 10:56:55', 3, '70'),
(112, 1, 3, 1, '2025-05-30', 'booked', '2025-05-27 10:59:37', 5, '70'),
(113, 1, 4, 1, '2025-05-30', 'booked', '2025-05-27 10:59:38', 5, '70'),
(114, 1, 1, 1, '2025-05-29', 'booked', '2025-05-27 11:01:02', 5, '70'),
(115, 1, 2, 1, '2025-05-29', 'booked', '2025-05-27 11:01:03', 5, '70');

-- --------------------------------------------------------

--
-- Table structure for table `doanhnghiep`
--

CREATE TABLE `doanhnghiep` (
  `maDN` int(11) NOT NULL auto_increment,
  `idnguoidung` int(10) unsigned NOT NULL,
  `tenDN` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `diaChi` varchar(200) character set utf8 collate utf8_unicode_ci default NULL,
  `soDienThoai` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`maDN`),
  KEY `fk_doanhnghiep_nguoidung` (`idnguoidung`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Triggers `doanhnghiep`
--
DROP TRIGGER IF EXISTS `sancaulong`.`xoa_taikhoan_khi_xoa_doanhnghiep`;
DELIMITER //
CREATE TRIGGER `sancaulong`.`xoa_taikhoan_khi_xoa_doanhnghiep` BEFORE DELETE ON `sancaulong`.`doanhnghiep`
 FOR EACH ROW DELETE FROM taikhoannguoidung WHERE idnguoidung = OLD.idnguoidung
//
DELIMITER ;

--
-- Dumping data for table `doanhnghiep`
--

INSERT INTO `doanhnghiep` (`maDN`, `idnguoidung`, `tenDN`, `diaChi`, `soDienThoai`, `email`) VALUES
(1, 17, 'Lam Hieu', 'cầu suối', '0346021604', 'tests@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `maHoaDon` int(11) NOT NULL,
  `maHopDong` int(11) default NULL,
  `thoiGianBatDau` datetime default NULL,
  `thoiGianKetThuc` datetime default NULL,
  `tongThoiGian` float default NULL,
  `donGia` decimal(10,2) default NULL,
  `chietKhau` float default '0',
  `thanhTien` decimal(10,2) default NULL,
  `trangThai` tinyint(4) default NULL,
  PRIMARY KEY  (`maHoaDon`),
  KEY `maHopDong` (`maHopDong`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`maHoaDon`, `maHopDong`, `thoiGianBatDau`, `thoiGianKetThuc`, `tongThoiGian`, `donGia`, `chietKhau`, `thanhTien`, `trangThai`) VALUES
(1, 1, '2025-05-01 08:00:00', '2025-05-01 10:00:00', 2, '200000.00', 0, '400000.00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `hopdong`
--

CREATE TABLE `hopdong` (
  `maHopDong` int(11) NOT NULL auto_increment,
  `maKH` int(11) default NULL,
  `maSan` int(11) default NULL,
  `ngayTao` datetime NOT NULL,
  `thoiGianBatDau` date NOT NULL,
  `thoiGianKetThuc` date NOT NULL,
  `soLuongSan` int(11) NOT NULL,
  `ghiChu` varchar(200) character set utf8 collate utf8_unicode_ci default NULL,
  `trangThai` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`maHopDong`),
  KEY `maSan` (`maSan`),
  KEY `fk_hopdong_khachhang` (`maKH`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `hopdong`
--

INSERT INTO `hopdong` (`maHopDong`, `maKH`, `maSan`, `ngayTao`, `thoiGianBatDau`, `thoiGianKetThuc`, `soLuongSan`, `ghiChu`, `trangThai`) VALUES
(9, 3, 1, '2025-05-25 19:02:39', '2025-05-21', '2025-06-06', 1, 'thứ 3,5,7', 'duyệt'),
(11, 3, 2, '2025-05-25 19:24:59', '2025-05-27', '2025-07-05', 2, 'Chủ nhật', 'duyệt'),
(12, 3, 1, '2025-05-27 00:43:37', '2025-05-15', '2025-07-04', 3, 'Tối 20-22, Thứ 2,4,6', 'duyệt'),
(13, 5, 1, '2025-05-27 11:05:29', '2025-05-27', '2025-05-28', 1, 'Thứ 3,5,7', 'chờ');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `maKH` int(11) NOT NULL auto_increment,
  `tenKH` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `loaiKH` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `soDienThoai` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `idnguoidung` int(10) unsigned NOT NULL,
  `diaChi` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`maKH`),
  KEY `fk_khachhang_nguoidung` (`idnguoidung`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Triggers `khachhang`
--
DROP TRIGGER IF EXISTS `sancaulong`.`xoa_taikhoan_khi_xoa_khachhang`;
DELIMITER //
CREATE TRIGGER `sancaulong`.`xoa_taikhoan_khi_xoa_khachhang` BEFORE DELETE ON `sancaulong`.`khachhang`
 FOR EACH ROW DELETE FROM taikhoannguoidung WHERE idnguoidung = OLD.idnguoidung
//
DELIMITER ;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`maKH`, `tenKH`, `loaiKH`, `soDienThoai`, `email`, `idnguoidung`, `diaChi`) VALUES
(3, 'Luong Cong Trieu', 'Vãng lai', '0346021604', 'luongcongtrieu210603@gmail.com', 24, ''),
(5, 'Nguyễn Đăng Hồng Phúc', 'Vãng lai', '0346021604', 'phuc@gmail.com', 26, ''),
(6, 'bao', 'Vãng lai', '0346021604', 'luongcongtrieu210603@gmail.com', 27, '');

-- --------------------------------------------------------

--
-- Table structure for table `lichdatsan`
--

CREATE TABLE `lichdatsan` (
  `maLich` int(11) NOT NULL,
  `maKH` int(11) default NULL,
  `maSan` int(11) default NULL,
  `ngayDat` date default NULL,
  `gioBatDau` time default NULL,
  `gioKetThuc` time default NULL,
  `trangThai` varchar(10) default NULL,
  PRIMARY KEY  (`maLich`),
  KEY `maSan` (`maSan`),
  KEY `fk_lichdatsan_khachhang` (`maKH`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lichdatsan`
--


-- --------------------------------------------------------

--
-- Table structure for table `sancaulong`
--

CREATE TABLE `sancaulong` (
  `maSan` int(11) NOT NULL auto_increment,
  `tenSan` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `diaChi` varchar(200) character set utf8 NOT NULL,
  `soLuongSanCon` int(11) default NULL,
  `trangThai` varchar(10) default NULL,
  `gioMoCua` time default NULL,
  `moTa` varchar(300) character set utf8 default NULL,
  `soDienThoai` varchar(20) character set utf8 default NULL,
  PRIMARY KEY  (`maSan`),
  UNIQUE KEY `tenSan` (`tenSan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sancaulong`
--

INSERT INTO `sancaulong` (`maSan`, `tenSan`, `diaChi`, `soLuongSanCon`, `trangThai`, `gioMoCua`, `moTa`, `soDienThoai`) VALUES
(1, 'Sân Lê Lợi', '123 Đường Lê Lợi, Quận 1', 5, 'open', '06:00:00', 'Sân mới, chất lượng cao', '0909999999'),
(2, '2', '2', 2, '2', '08:30:00', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoannguoidung`
--

CREATE TABLE `taikhoannguoidung` (
  `idnguoidung` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `passwords` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `email` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `loainguoidung` tinyint(4) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `trangthai` tinyint(4) NOT NULL,
  PRIMARY KEY  (`idnguoidung`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `taikhoannguoidung`
--

INSERT INTO `taikhoannguoidung` (`idnguoidung`, `username`, `passwords`, `email`, `loainguoidung`, `sodienthoai`, `trangthai`) VALUES
(7, 'admin', '123123', 'sao@gmail.com', 3, 123123123, 1),
(17, 'test5', '123123', 'tests@gmail.com', 2, 346021604, 1),
(19, 'test1', '123123', 'tests@gmail.com', 1, 346021604, 1),
(20, 'test6', '123123', 'tests@gmail.com', 2, 346021604, 1),
(21, 'test12', '123123', 'tests@gmail.com', 1, 346021604, 1),
(24, 'trieu', '123123', 'luongcongtrieu210603@gmail.com', 1, 346021604, 1),
(26, 'phuc', '123123', 'phuc@gmail.com', 1, 346021604, 1),
(27, 'bao', '123', 'luongcongtrieu210603@gmail.com', 1, 346021604, 1);

-- --------------------------------------------------------

--
-- Table structure for table `thongtinsan`
--

CREATE TABLE `thongtinsan` (
  `maSan` int(11) NOT NULL auto_increment,
  `tenSan` varchar(100) character set utf8 default NULL,
  `soLuongSan` int(11) default NULL,
  `gioMoCua` varchar(50) character set utf8 default NULL,
  `giaMacDinh` decimal(10,0) default NULL,
  `giaGioVang` decimal(10,0) default NULL,
  `diaChi` varchar(200) character set utf8 default NULL,
  `ghiChu` varchar(200) character set utf8 default NULL,
  `moTa` varchar(300) character set utf8 default NULL,
  `soDienThoai` varchar(20) character set utf8 default NULL,
  `hinhAnh` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `trangThai` varchar(10) character set utf8 default NULL,
  PRIMARY KEY  (`maSan`),
  UNIQUE KEY `tenSan` (`tenSan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `thongtinsan`
--

INSERT INTO `thongtinsan` (`maSan`, `tenSan`, `soLuongSan`, `gioMoCua`, `giaMacDinh`, `giaGioVang`, `diaChi`, `ghiChu`, `moTa`, `soDienThoai`, `hinhAnh`, `trangThai`) VALUES
(1, 'Sân Cầu Lông Lâm Hiếu', 4, '5:00', '70', '90', 'cầu suối', 'slgbskegjr', 'Sân mới, chất lượng cao', '0346021604', 'lamhieu.jpg', 'open'),
(2, 'Sân Cầu Lông Quang Vinh', 10, '5:00', '90', '150', 'Nguyễn Văn Qúa ', 'rngsjkgnkslj', 'Sân cầu lông đẹp', '0372426204', 'quangvinh.jpg', 'open'),
(3, 'Vinh Vinh', 15, '5:00', '100', '120', 'regssef', 'drhrdg', 'thfd', '0346021604', 'quangvinh.jpg', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `time_slots`
--

CREATE TABLE `time_slots` (
  `id` int(11) NOT NULL auto_increment,
  `start_time` time default NULL,
  `end_time` time default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `time_slots`
--

INSERT INTO `time_slots` (`id`, `start_time`, `end_time`) VALUES
(1, '05:00:00', '06:00:00'),
(2, '06:00:00', '07:00:00'),
(3, '07:00:00', '08:00:00'),
(4, '08:00:00', '09:00:00'),
(5, '09:00:00', '10:00:00'),
(6, '10:00:00', '11:00:00'),
(7, '11:00:00', '12:00:00'),
(8, '12:00:00', '13:00:00'),
(9, '13:00:00', '14:00:00'),
(10, '14:00:00', '15:00:00'),
(11, '15:00:00', '16:00:00'),
(12, '16:00:00', '17:00:00'),
(13, '17:00:00', '18:00:00'),
(14, '18:00:00', '19:00:00'),
(15, '19:00:00', '20:00:00'),
(16, '20:00:00', '21:00:00'),
(17, '21:00:00', '22:00:00'),
(18, '22:00:00', '23:00:00'),
(19, '23:00:00', '24:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `yeucauhoatdong`
--

CREATE TABLE `yeucauhoatdong` (
  `maYeuCau` int(11) NOT NULL auto_increment,
  `tenSan` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `soLuongSan` int(11) default NULL,
  `gioMoCua` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `giaMacDinh` decimal(10,2) default NULL,
  `giaGioVang` decimal(10,2) default NULL,
  `diaChi` varchar(200) character set utf8 collate utf8_unicode_ci default NULL,
  `tenChuSan` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `hinhAnhSan` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `CCCD` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `trangThai` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`maYeuCau`),
  UNIQUE KEY `tenSan` (`tenSan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `yeucauhoatdong`
--

INSERT INTO `yeucauhoatdong` (`maYeuCau`, `tenSan`, `soLuongSan`, `gioMoCua`, `giaMacDinh`, `giaGioVang`, `diaChi`, `tenChuSan`, `hinhAnhSan`, `CCCD`, `trangThai`) VALUES
(1, 'Sân Nguyễn Trãi', 4, '07:00', '150000.00', '200000.00', '45 Nguyễn Trãi, Quận 5', 'Phạm Văn B', 'chauduong.jpg', '123456789012', 'Phê Duyệt'),
(2, 'sao', 2, '21', '22.00', '2.00', 'q12', 'A', 'abc', '22323', 'Phê Duyệt'),
(3, 'saoo', 33, '32', '31.00', '3.00', 'q1', 'B', 'ada', '3123', 'Từ Chối');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doanhnghiep`
--
ALTER TABLE `doanhnghiep`
  ADD CONSTRAINT `fk_doanhnghiep_nguoidung` FOREIGN KEY (`idnguoidung`) REFERENCES `taikhoannguoidung` (`idnguoidung`) ON DELETE CASCADE;

--
-- Constraints for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `fk_hopdong_khachhang` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`) ON DELETE CASCADE,
  ADD CONSTRAINT `hopdong_ibfk_1` FOREIGN KEY (`maSan`) REFERENCES `sancaulong` (`maSan`);

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `fk_khachhang_nguoidung` FOREIGN KEY (`idnguoidung`) REFERENCES `taikhoannguoidung` (`idnguoidung`) ON DELETE CASCADE;

--
-- Constraints for table `lichdatsan`
--
ALTER TABLE `lichdatsan`
  ADD CONSTRAINT `fk_lichdatsan_khachhang` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`) ON DELETE CASCADE,
  ADD CONSTRAINT `lichdatsan_ibfk_1` FOREIGN KEY (`maSan`) REFERENCES `sancaulong` (`maSan`);
