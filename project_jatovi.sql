-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2017 lúc 08:36 AM
-- Phiên bản máy phục vụ: 10.1.25-MariaDB
-- Phiên bản PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project_jatovi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `ten_taikhoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` tinyint(10) NOT NULL,
  `id_nhom` int(11) NOT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `ten_taikhoan`, `matkhau`, `hoten`, `gioitinh`, `id_nhom`, `trangthai`) VALUES
(1, 'admin', 'admin', 'Nguyen Anh Tuan', 1, 1, '1'),
(2, 'quantri', 'quantri', 'Nguyen Anh Tuan', 2, 3, '1'),
(11, 'abcd', '1234', 'hoten', 0, 3, '1'),
(12, 'a', 'a', 'a', 1, 3, '1'),
(13, 'b', 'b', 'b', 1, 1, '1'),
(14, 'c', 'c', 'c', 0, 1, '1'),
(15, 'd', 'd', 'd', 1, 1, '1'),
(16, 'adf', 'adf', 'adfs', 0, 3, '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_chitietdonhang`
--

CREATE TABLE `tb_chitietdonhang` (
  `id` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `thanhtien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_chitietdonhang`
--

INSERT INTO `tb_chitietdonhang` (`id`, `id_sanpham`, `id_donhang`, `soluong`, `dongia`, `thanhtien`) VALUES
(1, 8, 2, 1, 180000, 180000),
(2, 8, 3, 1, 180000, 180000),
(3, 8, 4, 3, 180000, 540000),
(4, 8, 4, 3, 180000, 540000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_chucnang`
--

CREATE TABLE `tb_chucnang` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` tinyint(4) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `f_order` int(11) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `nhanurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hienthi` tinyint(4) NOT NULL,
  `bieutuong` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_chucnang`
--

INSERT INTO `tb_chucnang` (`id`, `ten`, `trangthai`, `url`, `f_order`, `id_parent`, `nhanurl`, `hienthi`, `bieutuong`) VALUES
(1, 'Tài khoản', 1, '', 1, 0, '', 1, 'fa fa-user'),
(2, 'Đơn hàng', 1, '', 2, 0, '', 1, 'fa fa-group'),
(3, 'Sản phẩm', 1, '', 3, 0, '', 1, ''),
(4, 'Tài khoản khách hàng', 1, 'taikhoankhachhang', 1, 1, 'taikhoankhachhang', 1, ''),
(5, 'Tài khoản admin', 1, 'taikhoanadmin', 1, 1, 'taikhoanadmin', 1, ''),
(6, 'Quản lý đơn hàng', 1, 'quanlydonhang', 1, 2, 'quanlydonhang', 1, ''),
(7, 'Quản lý sản phẩm', 1, 'quanlysanpham', 1, 3, 'quanlysanpham', 1, ''),
(8, 'Danh mục sản phẩm', 1, 'danhmucsanpham', 2, 3, 'danhmucsanpham', 1, ''),
(9, 'Tin tức', 1, '', 4, 0, '', 1, 'fa fa-news'),
(10, 'Quản lý tin tức', 1, 'quanlytintuc', 1, 9, 'quanlytintuc', 1, ''),
(11, 'Nhà sản xuất', 1, 'nhasanxuat', 3, 3, 'nhasanxuat', 1, ''),
(12, 'Phân quyền', 1, 'phanquyen', 3, 1, 'phanquyen', 1, ''),
(13, 'Liên hệ', 1, 'lienhe', 3, 9, 'lienhe', 1, ''),
(14, 'Thống kê', 1, 'thongke', 1, 0, 'thongke', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_danhmuc`
--

CREATE TABLE `tb_danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dm_url` varchar(999) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_danhmuc`
--

INSERT INTO `tb_danhmuc` (`id`, `name`, `dm_url`) VALUES
(1, 'Colllagen', 'index.php?module=danhmuc&dm=1'),
(2, 'Chăm sóc da', 'index.php?module=danhmuc&dm=2'),
(3, 'Chăm sóc tóc', 'index.php?module=danhmuc&dm=3'),
(4, 'Trang điểm', 'index.php?module=danhmuc&dm=4'),
(5, 'Thực phẩm chức năng', 'index.php?module=danhmuc&dm=5');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_donhang`
--

CREATE TABLE `tb_donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `diachi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sotien` float NOT NULL,
  `ngaydathang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tinhtrang` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_donhang`
--

INSERT INTO `tb_donhang` (`id_donhang`, `id_khachhang`, `diachi`, `sotien`, `ngaydathang`, `tinhtrang`) VALUES
(2, 3, 'hanoi', 180000, '2017-11-01 17:00:00', '1'),
(3, 3, 'hanoi', 180000, '2017-11-01 17:00:00', '1'),
(4, 3, 'hanoi', 540000, '2017-11-01 17:00:00', '1'),
(5, 3, 'hanoi', 540000, '2017-11-01 17:00:00', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_khachhang`
--

CREATE TABLE `tb_khachhang` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` tinyint(10) NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_khachhang`
--

INSERT INTO `tb_khachhang` (`id`, `email`, `matkhau`, `sodienthoai`, `ten`, `ngaysinh`, `gioitinh`, `diachi`, `trangthai`) VALUES
(1, 'buitanthanh211098', 'tanthanh98', '0964474680', 'thanh', '2017-09-21', 1, 'xuan ai ', 1),
(2, 'asdf', 'adsf', '988888888', 'adf', '2017-09-29', 1, 'asdf', 0),
(3, 'khachhang', 'khachhang', '0988234234', 'tuan', '2017-11-01', 1, 'hanoi', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_lienhe`
--

CREATE TABLE `tb_lienhe` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_lienhe`
--

INSERT INTO `tb_lienhe` (`id`, `ten`, `email`, `tieude`, `noidung`) VALUES
(1, 'ádasda', '0964474680', 'sdsđsa', 'ádasd'),
(2, 'ádasda', '0964474680', 'Kem dưỡng chất collagen trắng da', 'dfsdfsdf'),
(3, 'ádasda', '0964474680', 'sdsđsa', 'ádasd'),
(8, 'Nguyễn Anh Tuấn', 'anhtuan@gmail.com', 'Phản hồi', 'Nội dung phản hồi'),
(10, 'Họ tên', 'Email@gmail.com', 'Tiêu đề', 'Phản hồi'),
(11, 'Họ tên', 'Email@gmail.com', 'Tiêu đề', 'Phản hồi'),
(12, 'Họ tên', 'Email@gmail.com', 'Tiêu đề', 'Phản hồi'),
(13, 'teen', 'email@gmail.com', 'tieude', 'phanhoi'),
(14, 'ten', 'Email@gmail.com', 'a', 'a');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id` int(11) NOT NULL,
  `tieude` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `trangthai` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_menu`
--

INSERT INTO `tb_menu` (`id`, `tieude`, `url`, `trangthai`) VALUES
(2, 'Collagen', 'index.php?module=danhmuc&dm=1', 1),
(3, 'Chăm sóc da', 'index.php?module=danhmuc&dm=2', 1),
(4, 'Chăm sóc tóc', 'index.php?module=danhmuc&dm=3', 1),
(5, 'Trang điểm', 'index.php?module=danhmuc&dm=4', 1),
(6, 'Thực phẩm chức năng', 'index.php?module=danhmuc&dm=5', 1),
(7, 'Tin tức', 'index.php?module=tintuc', 1),
(8, 'Liên hệ', 'index.php?module=lienhe', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_nhasanxuat`
--

CREATE TABLE `tb_nhasanxuat` (
  `id` int(11) NOT NULL,
  `nsx_ten` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `nsx_diachi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `nsx_sodienthoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nsx_email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `nsx_website` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `nsx_mota` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_nhasanxuat`
--

INSERT INTO `tb_nhasanxuat` (`id`, `nsx_ten`, `nsx_diachi`, `nsx_sodienthoai`, `nsx_email`, `nsx_website`, `nsx_mota`) VALUES
(1, 'Doanh nghiep dia phuong', 'Ha Noi', '01232131023', 'nhasanxuat@gmail.com', '', 'mo ta nha san xuat'),
(2, 'Shiseido', 'Nhật Bản', '', '', 'http://www.shiseido.co.jp', 'mo ta'),
(3, 'Kraice', 'Nhật Bản', '0922', '', 'www.web.com', 'mo ta'),
(4, 'DHC', 'Nhật Bản', '09876543221', 'email@gmail.com', '', 'mota DHC');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_nhomnguoidung`
--

CREATE TABLE `tb_nhomnguoidung` (
  `id` int(11) NOT NULL,
  `tennhom` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_nhomnguoidung`
--

INSERT INTO `tb_nhomnguoidung` (`id`, `tennhom`) VALUES
(1, 'Lập trình viên'),
(3, 'Quản trị viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_phanquyen`
--

CREATE TABLE `tb_phanquyen` (
  `id` int(11) NOT NULL,
  `id_nhom` int(11) NOT NULL,
  `id_chucnang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_phanquyen`
--

INSERT INTO `tb_phanquyen` (`id`, `id_nhom`, `id_chucnang`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(8, 1, 7),
(9, 1, 8),
(10, 1, 9),
(11, 1, 10),
(13, 3, 1),
(14, 3, 4),
(15, 3, 2),
(16, 3, 6),
(17, 3, 3),
(19, 3, 7),
(20, 3, 9),
(22, 3, 10),
(23, 1, 11),
(24, 3, 11),
(25, 1, 12),
(26, 1, 13),
(27, 1, 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_sanpham`
--

CREATE TABLE `tb_sanpham` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mota` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_nsx` int(11) NOT NULL,
  `xuatsu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `giacu` float NOT NULL,
  `giamoi` float NOT NULL,
  `ngaysanxuat` date NOT NULL,
  `hansudung` date NOT NULL,
  `donvi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'public/images/sanpham/noimage.png',
  `dshinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `damua` int(20) NOT NULL,
  `luotxem` int(20) NOT NULL,
  `tgcapnhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `trangthai` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_sanpham`
--

INSERT INTO `tb_sanpham` (`id`, `ten`, `mota`, `id_danhmuc`, `id_nsx`, `xuatsu`, `giacu`, `giamoi`, `ngaysanxuat`, `hansudung`, `donvi`, `hinhanh`, `dshinhanh`, `damua`, `luotxem`, `tgcapnhat`, `trangthai`) VALUES
(1, 'a', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 1, 1, 'a', 1000000, 200000, '2017-10-04', '2017-10-05', 'q', 'sp1.jpg', '', 0, 0, '2017-11-02 15:51:08', 0),
(2, 'b', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 1, 'b', 1500000, 120000, '2017-10-28', '2017-10-29', 'cai', 'sp2.jpg', '', 0, 0, '2017-11-02 15:51:13', 0),
(3, 'sanpham1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, 1, 'vn', 1500000, 100000, '2017-10-29', '2017-10-29', 'hop', 'sp1.jpg', '', 2, 5, '2017-11-02 15:51:21', 0),
(5, 'sanpham2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5, 1, 'japan', 200000, 190000, '2017-10-29', '2017-10-29', 'lo', 'sp1.jpg', '', 5, 10, '2017-11-02 15:51:45', 0),
(6, 'sanpham3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 4, 1, 'vn', 190000, 170000, '2017-10-29', '2017-10-29', 'hop', 'sp2.jpg', '', 1, 10, '2017-11-02 15:51:41', 0),
(7, 'sanpham4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2, 1, 'vn', 1900000, 150000, '2017-10-29', '2017-10-29', 'hop', 'sp3.jpg', '', 0, 19, '2017-11-02 15:51:17', 0),
(8, 'son duong moi', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, 3, 'Nhật bản', 2000000, 180000, '2017-10-29', '2017-10-29', 'hop', 'sp2.jpg', '', 9, 20, '2017-11-02 15:51:24', 0),
(9, 'sanpham5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, 2, 'vietnam', 100000, 99000, '2017-10-27', '2017-10-31', 'hop', 'sp3.jpg', '', 0, 0, '2017-11-02 15:51:33', 0),
(12, 'Thuoc tam trang', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 1, 3, 'Nhật Bản', 1000000, 99000, '0000-00-00', '0000-00-00', '', 'sp1.jpg', '', 0, 0, '2017-11-02 15:39:57', 0),
(13, 'Bùn khoáng', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 4, '', 200000, 189000, '2017-11-02', '2017-11-02', '', 'sp4.jpg', '', 0, 0, '2017-11-02 15:44:07', 0),
(14, 'Thuốc nhuộm tóc thiên nhiên', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 1, 2, '', 890000, 600000, '2017-11-02', '2017-11-02', '', 'sp5.jpg', '', 0, 0, '2017-11-02 15:44:53', 0),
(15, 'Kem trị nám', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 2, 3, '', 300000, 250000, '2017-11-02', '2017-11-02', '', 'sp6.jpg', '', 0, 0, '2017-11-02 15:45:38', 0),
(16, 'Trị mụn', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 4, 2, '', 400000, 340000, '2017-11-02', '2017-11-02', '', 'sp4.jpg', '', 0, 0, '2017-11-02 15:47:38', 0),
(17, 'Phấn nền', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 4, 2, '', 200000, 190000, '2017-11-02', '2017-11-02', '', 'sp5.jpg', '', 0, 0, '2017-11-02 15:48:57', 0),
(18, 'Trà giảm cân', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 5, 4, '', 400000, 300000, '2017-11-02', '2017-11-02', '', 'sp2.jpg', '', 0, 0, '2017-11-02 15:49:58', 0),
(20, 'Trị mỡ bụng', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 5, 4, '', 400000, 300000, '2017-11-02', '2017-11-02', '', 'sp6.jpg', '', 0, 0, '2017-11-02 15:50:53', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_tintuc`
--

CREATE TABLE `tb_tintuc` (
  `id_tintuc` int(11) NOT NULL,
  `tieude` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tacgia` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_tintuc`
--

INSERT INTO `tb_tintuc` (`id_tintuc`, `tieude`, `hinhanh`, `noidung`, `ngaydang`, `tacgia`) VALUES
(48, 'Kem dưỡng chất collagen trắng da', 'MoistOne1.jpg', '<p><strong>L&agrave;n da rất nhạy cảm với c&aacute;c t&aacute;c động m&ocirc;i trường v&agrave; nhanh ch&oacute;ng &ldquo; xuống cấp&rdquo; nếu kh&ocirc;ng được chăm s&oacute;c cẩn thận.&nbsp;Da th&ocirc; r&aacute;p, nhăn nheo, thiếu sức sống l&agrave; những dấu hiệu l&atilde;o h&oacute;a v&agrave; cũng ch&iacute;nh l&agrave; nỗi &aacute;m ảnh của mọi chị em phụ nữ.</strong></p>\r\n\r\n<p>Ng&agrave;y đăng: 1-11-2017</p>\r\n\r\n<p>576 lượt xem</p>\r\n\r\n<p>Với mong muốn t&igrave;m lại vẻ đẹp đ&ocirc;i mươi, kh&ocirc;ng &iacute;t c&aacute;c chị em đ&atilde; dốc hầu bao đổ v&agrave;o c&aacute;c Spa, thẩm mỹ viện, tiến h&agrave;nh phẫu thuật. Mặc d&ugrave; tốn k&eacute;m v&agrave; mất nhiều thời gian, nhưng chưa chắc đ&atilde; mang lại hiệu quả như &yacute;, thậm tr&iacute; còn làm cho da xấu, gi&agrave; đi trước tuổi.<br />\r\n&nbsp;</p>\r\n\r\n<p>Collagen l&agrave; một loại protein, chiếm 25% tổng lượng protein trong cơ thể, c&oacute; chức năng li&ecirc;n kết c&aacute;c m&ocirc;. Với tổ chức da, b&ecirc;n cạnh nhiệm vụ li&ecirc;n kết, Collagen c&ograve;n c&oacute; chức năng tạo n&ecirc;n sự đ&agrave;n hồi, gi&uacute;p da duy tr&igrave; độ ẩm, tăng khả năng giữ nước để da lu&ocirc;n căng mịn. V&igrave; thế khi collagen bị mất đi do qu&aacute; tr&igrave;nh l&atilde;o ho&aacute; của cơ thể da sẽ bị tr&ugrave;ng nh&atilde;o, nhiều nếp nhăn.Theo quy luật tự nhi&ecirc;n, trung b&igrave;nh một người sẽ mất khoảng 30% tổng lượng collagen khi chạm ngưỡng 40 tuổi.<br />\r\n&nbsp;</p>\r\n\r\n<p>Do đ&oacute;, c&aacute;ch đơn giản v&agrave; kinh tế nhất để giữ m&atilde;i tuổi thanh xu&acirc;n là &nbsp;l&agrave; sử dụng sản ph&acirc;̉m kem dưỡng ch&acirc;́t collagen trắng da Moistone Ostrich Collagen Gel Cung cấp đầy đủ c&aacute;c dưỡng chất cần thiết cho da, gi&uacute;p da giữ ẩm, săn chắc, đ&agrave;n hồi, căng mịn, trắng s&aacute;ng v&agrave; đầy sức sống cũng như l&agrave;m chậm đi qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a da.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kem dưỡng ch&acirc;́t collagen trắng da Moistone Ostrich Collagen Gel gồm collagen h&ograve;a tan từ đ&agrave; điểu kết hợp với nano collagen từ vi c&aacute; hồng v&agrave; c&aacute;c dưỡng chất qu&yacute; kh&aacute;c được đ&aacute;nh gi&aacute; l&agrave; sản phẩm kem dưỡng da cao cấp tại Nhật Bản, cung cấp đầy đủ c&aacute;c dưỡng chất cần thiết cho da, gi&uacute;p da giữ ẩm, săn chắc, đ&agrave;n hồi, căng mịn, trắng s&aacute;ng v&agrave; đầy sức sống cũng như l&agrave;m chậm đi qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a.</p>\r\n', '2017-11-02 05:12:36', 'Nguyen Anh Tuan'),
(49, 'Kem dưỡng chất collagen trắng da', 'MoistOne1.jpg', '<p><strong>L&agrave;n da rất nhạy cảm với c&aacute;c t&aacute;c động m&ocirc;i trường v&agrave; nhanh ch&oacute;ng &ldquo; xuống cấp&rdquo; nếu kh&ocirc;ng được chăm s&oacute;c cẩn thận.&nbsp;Da th&ocirc; r&aacute;p, nhăn nheo, thiếu sức sống l&agrave; những dấu hiệu l&atilde;o h&oacute;a v&agrave; cũng ch&iacute;nh l&agrave; nỗi &aacute;m ảnh của mọi chị em phụ nữ.</strong></p>\r\n\r\n<p>Ng&agrave;y đăng: 1-11-2017</p>\r\n\r\n<p>576 lượt xem</p>\r\n\r\n<p>Với mong muốn t&igrave;m lại vẻ đẹp đ&ocirc;i mươi, kh&ocirc;ng &iacute;t c&aacute;c chị em đ&atilde; dốc hầu bao đổ v&agrave;o c&aacute;c Spa, thẩm mỹ viện, tiến h&agrave;nh phẫu thuật. Mặc d&ugrave; tốn k&eacute;m v&agrave; mất nhiều thời gian, nhưng chưa chắc đ&atilde; mang lại hiệu quả như &yacute;, thậm tr&iacute; còn làm cho da xấu, gi&agrave; đi trước tuổi.<br />\r\n&nbsp;</p>\r\n\r\n<p>Collagen l&agrave; một loại protein, chiếm 25% tổng lượng protein trong cơ thể, c&oacute; chức năng li&ecirc;n kết c&aacute;c m&ocirc;. Với tổ chức da, b&ecirc;n cạnh nhiệm vụ li&ecirc;n kết, Collagen c&ograve;n c&oacute; chức năng tạo n&ecirc;n sự đ&agrave;n hồi, gi&uacute;p da duy tr&igrave; độ ẩm, tăng khả năng giữ nước để da lu&ocirc;n căng mịn. V&igrave; thế khi collagen bị mất đi do qu&aacute; tr&igrave;nh l&atilde;o ho&aacute; của cơ thể da sẽ bị tr&ugrave;ng nh&atilde;o, nhiều nếp nhăn.Theo quy luật tự nhi&ecirc;n, trung b&igrave;nh một người sẽ mất khoảng 30% tổng lượng collagen khi chạm ngưỡng 40 tuổi.<br />\r\n&nbsp;</p>\r\n\r\n<p>Do đ&oacute;, c&aacute;ch đơn giản v&agrave; kinh tế nhất để giữ m&atilde;i tuổi thanh xu&acirc;n là &nbsp;l&agrave; sử dụng sản ph&acirc;̉m kem dưỡng ch&acirc;́t collagen trắng da Moistone Ostrich Collagen Gel Cung cấp đầy đủ c&aacute;c dưỡng chất cần thiết cho da, gi&uacute;p da giữ ẩm, săn chắc, đ&agrave;n hồi, căng mịn, trắng s&aacute;ng v&agrave; đầy sức sống cũng như l&agrave;m chậm đi qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a da.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kem dưỡng ch&acirc;́t collagen trắng da Moistone Ostrich Collagen Gel gồm collagen h&ograve;a tan từ đ&agrave; điểu kết hợp với nano collagen từ vi c&aacute; hồng v&agrave; c&aacute;c dưỡng chất qu&yacute; kh&aacute;c được đ&aacute;nh gi&aacute; l&agrave; sản phẩm kem dưỡng da cao cấp tại Nhật Bản, cung cấp đầy đủ c&aacute;c dưỡng chất cần thiết cho da, gi&uacute;p da giữ ẩm, săn chắc, đ&agrave;n hồi, căng mịn, trắng s&aacute;ng v&agrave; đầy sức sống cũng như l&agrave;m chậm đi qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a.</p>\r\n', '2017-11-02 05:12:36', 'Nguyen Anh Tuan'),
(50, 'Kem dưỡng chất collagen trắng da', 'MoistOne1.jpg', '<p><strong>L&agrave;n da rất nhạy cảm với c&aacute;c t&aacute;c động m&ocirc;i trường v&agrave; nhanh ch&oacute;ng &ldquo; xuống cấp&rdquo; nếu kh&ocirc;ng được chăm s&oacute;c cẩn thận.&nbsp;Da th&ocirc; r&aacute;p, nhăn nheo, thiếu sức sống l&agrave; những dấu hiệu l&atilde;o h&oacute;a v&agrave; cũng ch&iacute;nh l&agrave; nỗi &aacute;m ảnh của mọi chị em phụ nữ.</strong></p>\r\n\r\n<p>Ng&agrave;y đăng: 1-11-2017</p>\r\n\r\n<p>576 lượt xem</p>\r\n\r\n<p>Với mong muốn t&igrave;m lại vẻ đẹp đ&ocirc;i mươi, kh&ocirc;ng &iacute;t c&aacute;c chị em đ&atilde; dốc hầu bao đổ v&agrave;o c&aacute;c Spa, thẩm mỹ viện, tiến h&agrave;nh phẫu thuật. Mặc d&ugrave; tốn k&eacute;m v&agrave; mất nhiều thời gian, nhưng chưa chắc đ&atilde; mang lại hiệu quả như &yacute;, thậm tr&iacute; còn làm cho da xấu, gi&agrave; đi trước tuổi.<br />\r\n&nbsp;</p>\r\n\r\n<p>Collagen l&agrave; một loại protein, chiếm 25% tổng lượng protein trong cơ thể, c&oacute; chức năng li&ecirc;n kết c&aacute;c m&ocirc;. Với tổ chức da, b&ecirc;n cạnh nhiệm vụ li&ecirc;n kết, Collagen c&ograve;n c&oacute; chức năng tạo n&ecirc;n sự đ&agrave;n hồi, gi&uacute;p da duy tr&igrave; độ ẩm, tăng khả năng giữ nước để da lu&ocirc;n căng mịn. V&igrave; thế khi collagen bị mất đi do qu&aacute; tr&igrave;nh l&atilde;o ho&aacute; của cơ thể da sẽ bị tr&ugrave;ng nh&atilde;o, nhiều nếp nhăn.Theo quy luật tự nhi&ecirc;n, trung b&igrave;nh một người sẽ mất khoảng 30% tổng lượng collagen khi chạm ngưỡng 40 tuổi.<br />\r\n&nbsp;</p>\r\n\r\n<p>Do đ&oacute;, c&aacute;ch đơn giản v&agrave; kinh tế nhất để giữ m&atilde;i tuổi thanh xu&acirc;n là &nbsp;l&agrave; sử dụng sản ph&acirc;̉m kem dưỡng ch&acirc;́t collagen trắng da Moistone Ostrich Collagen Gel Cung cấp đầy đủ c&aacute;c dưỡng chất cần thiết cho da, gi&uacute;p da giữ ẩm, săn chắc, đ&agrave;n hồi, căng mịn, trắng s&aacute;ng v&agrave; đầy sức sống cũng như l&agrave;m chậm đi qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a da.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kem dưỡng ch&acirc;́t collagen trắng da Moistone Ostrich Collagen Gel gồm collagen h&ograve;a tan từ đ&agrave; điểu kết hợp với nano collagen từ vi c&aacute; hồng v&agrave; c&aacute;c dưỡng chất qu&yacute; kh&aacute;c được đ&aacute;nh gi&aacute; l&agrave; sản phẩm kem dưỡng da cao cấp tại Nhật Bản, cung cấp đầy đủ c&aacute;c dưỡng chất cần thiết cho da, gi&uacute;p da giữ ẩm, săn chắc, đ&agrave;n hồi, căng mịn, trắng s&aacute;ng v&agrave; đầy sức sống cũng như l&agrave;m chậm đi qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a.</p>\r\n', '2017-11-02 05:12:36', 'Nguyen Anh Tuan'),
(51, 'Kem dưỡng chất collagen trắng da', 'MoistOne1.jpg', '<p><strong>L&agrave;n da rất nhạy cảm với c&aacute;c t&aacute;c động m&ocirc;i trường v&agrave; nhanh ch&oacute;ng &ldquo; xuống cấp&rdquo; nếu kh&ocirc;ng được chăm s&oacute;c cẩn thận.&nbsp;Da th&ocirc; r&aacute;p, nhăn nheo, thiếu sức sống l&agrave; những dấu hiệu l&atilde;o h&oacute;a v&agrave; cũng ch&iacute;nh l&agrave; nỗi &aacute;m ảnh của mọi chị em phụ nữ.</strong></p>\r\n\r\n<p>Ng&agrave;y đăng: 1-11-2017</p>\r\n\r\n<p>576 lượt xem</p>\r\n\r\n<p>Với mong muốn t&igrave;m lại vẻ đẹp đ&ocirc;i mươi, kh&ocirc;ng &iacute;t c&aacute;c chị em đ&atilde; dốc hầu bao đổ v&agrave;o c&aacute;c Spa, thẩm mỹ viện, tiến h&agrave;nh phẫu thuật. Mặc d&ugrave; tốn k&eacute;m v&agrave; mất nhiều thời gian, nhưng chưa chắc đ&atilde; mang lại hiệu quả như &yacute;, thậm tr&iacute; còn làm cho da xấu, gi&agrave; đi trước tuổi.<br />\r\n&nbsp;</p>\r\n\r\n<p>Collagen l&agrave; một loại protein, chiếm 25% tổng lượng protein trong cơ thể, c&oacute; chức năng li&ecirc;n kết c&aacute;c m&ocirc;. Với tổ chức da, b&ecirc;n cạnh nhiệm vụ li&ecirc;n kết, Collagen c&ograve;n c&oacute; chức năng tạo n&ecirc;n sự đ&agrave;n hồi, gi&uacute;p da duy tr&igrave; độ ẩm, tăng khả năng giữ nước để da lu&ocirc;n căng mịn. V&igrave; thế khi collagen bị mất đi do qu&aacute; tr&igrave;nh l&atilde;o ho&aacute; của cơ thể da sẽ bị tr&ugrave;ng nh&atilde;o, nhiều nếp nhăn.Theo quy luật tự nhi&ecirc;n, trung b&igrave;nh một người sẽ mất khoảng 30% tổng lượng collagen khi chạm ngưỡng 40 tuổi.<br />\r\n&nbsp;</p>\r\n\r\n<p>Do đ&oacute;, c&aacute;ch đơn giản v&agrave; kinh tế nhất để giữ m&atilde;i tuổi thanh xu&acirc;n là &nbsp;l&agrave; sử dụng sản ph&acirc;̉m kem dưỡng ch&acirc;́t collagen trắng da Moistone Ostrich Collagen Gel Cung cấp đầy đủ c&aacute;c dưỡng chất cần thiết cho da, gi&uacute;p da giữ ẩm, săn chắc, đ&agrave;n hồi, căng mịn, trắng s&aacute;ng v&agrave; đầy sức sống cũng như l&agrave;m chậm đi qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a da.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kem dưỡng ch&acirc;́t collagen trắng da Moistone Ostrich Collagen Gel gồm collagen h&ograve;a tan từ đ&agrave; điểu kết hợp với nano collagen từ vi c&aacute; hồng v&agrave; c&aacute;c dưỡng chất qu&yacute; kh&aacute;c được đ&aacute;nh gi&aacute; l&agrave; sản phẩm kem dưỡng da cao cấp tại Nhật Bản, cung cấp đầy đủ c&aacute;c dưỡng chất cần thiết cho da, gi&uacute;p da giữ ẩm, săn chắc, đ&agrave;n hồi, căng mịn, trắng s&aacute;ng v&agrave; đầy sức sống cũng như l&agrave;m chậm đi qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a.</p>\r\n', '2017-11-02 05:12:36', 'Nguyen Anh Tuan'),
(52, 'Kem dưỡng chất collagen trắng da', 'MoistOne1.jpg', '<p><strong>L&agrave;n da rất nhạy cảm với c&aacute;c t&aacute;c động m&ocirc;i trường v&agrave; nhanh ch&oacute;ng &ldquo; xuống cấp&rdquo; nếu kh&ocirc;ng được chăm s&oacute;c cẩn thận.&nbsp;Da th&ocirc; r&aacute;p, nhăn nheo, thiếu sức sống l&agrave; những dấu hiệu l&atilde;o h&oacute;a v&agrave; cũng ch&iacute;nh l&agrave; nỗi &aacute;m ảnh của mọi chị em phụ nữ.</strong></p>\r\n\r\n<p>Ng&agrave;y đăng: 1-11-2017</p>\r\n\r\n<p>576 lượt xem</p>\r\n\r\n<p>Với mong muốn t&igrave;m lại vẻ đẹp đ&ocirc;i mươi, kh&ocirc;ng &iacute;t c&aacute;c chị em đ&atilde; dốc hầu bao đổ v&agrave;o c&aacute;c Spa, thẩm mỹ viện, tiến h&agrave;nh phẫu thuật. Mặc d&ugrave; tốn k&eacute;m v&agrave; mất nhiều thời gian, nhưng chưa chắc đ&atilde; mang lại hiệu quả như &yacute;, thậm tr&iacute; còn làm cho da xấu, gi&agrave; đi trước tuổi.<br />\r\n&nbsp;</p>\r\n\r\n<p>Collagen l&agrave; một loại protein, chiếm 25% tổng lượng protein trong cơ thể, c&oacute; chức năng li&ecirc;n kết c&aacute;c m&ocirc;. Với tổ chức da, b&ecirc;n cạnh nhiệm vụ li&ecirc;n kết, Collagen c&ograve;n c&oacute; chức năng tạo n&ecirc;n sự đ&agrave;n hồi, gi&uacute;p da duy tr&igrave; độ ẩm, tăng khả năng giữ nước để da lu&ocirc;n căng mịn. V&igrave; thế khi collagen bị mất đi do qu&aacute; tr&igrave;nh l&atilde;o ho&aacute; của cơ thể da sẽ bị tr&ugrave;ng nh&atilde;o, nhiều nếp nhăn.Theo quy luật tự nhi&ecirc;n, trung b&igrave;nh một người sẽ mất khoảng 30% tổng lượng collagen khi chạm ngưỡng 40 tuổi.<br />\r\n&nbsp;</p>\r\n\r\n<p>Do đ&oacute;, c&aacute;ch đơn giản v&agrave; kinh tế nhất để giữ m&atilde;i tuổi thanh xu&acirc;n là &nbsp;l&agrave; sử dụng sản ph&acirc;̉m kem dưỡng ch&acirc;́t collagen trắng da Moistone Ostrich Collagen Gel Cung cấp đầy đủ c&aacute;c dưỡng chất cần thiết cho da, gi&uacute;p da giữ ẩm, săn chắc, đ&agrave;n hồi, căng mịn, trắng s&aacute;ng v&agrave; đầy sức sống cũng như l&agrave;m chậm đi qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a da.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kem dưỡng ch&acirc;́t collagen trắng da Moistone Ostrich Collagen Gel gồm collagen h&ograve;a tan từ đ&agrave; điểu kết hợp với nano collagen từ vi c&aacute; hồng v&agrave; c&aacute;c dưỡng chất qu&yacute; kh&aacute;c được đ&aacute;nh gi&aacute; l&agrave; sản phẩm kem dưỡng da cao cấp tại Nhật Bản, cung cấp đầy đủ c&aacute;c dưỡng chất cần thiết cho da, gi&uacute;p da giữ ẩm, săn chắc, đ&agrave;n hồi, căng mịn, trắng s&aacute;ng v&agrave; đầy sức sống cũng như l&agrave;m chậm đi qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a.</p>\r\n', '2017-11-02 05:12:36', 'Nguyen Anh Tuan'),
(53, 'Kem dưỡng chất collagen trắng da', 'MoistOne1.jpg', '<p><strong>L&agrave;n da rất nhạy cảm với c&aacute;c t&aacute;c động m&ocirc;i trường v&agrave; nhanh ch&oacute;ng &ldquo; xuống cấp&rdquo; nếu kh&ocirc;ng được chăm s&oacute;c cẩn thận.&nbsp;Da th&ocirc; r&aacute;p, nhăn nheo, thiếu sức sống l&agrave; những dấu hiệu l&atilde;o h&oacute;a v&agrave; cũng ch&iacute;nh l&agrave; nỗi &aacute;m ảnh của mọi chị em phụ nữ.</strong></p>\r\n\r\n<p>Ng&agrave;y đăng: 1-11-2017</p>\r\n\r\n<p>576 lượt xem</p>\r\n\r\n<p>Với mong muốn t&igrave;m lại vẻ đẹp đ&ocirc;i mươi, kh&ocirc;ng &iacute;t c&aacute;c chị em đ&atilde; dốc hầu bao đổ v&agrave;o c&aacute;c Spa, thẩm mỹ viện, tiến h&agrave;nh phẫu thuật. Mặc d&ugrave; tốn k&eacute;m v&agrave; mất nhiều thời gian, nhưng chưa chắc đ&atilde; mang lại hiệu quả như &yacute;, thậm tr&iacute; còn làm cho da xấu, gi&agrave; đi trước tuổi.<br />\r\n&nbsp;</p>\r\n\r\n<p>Collagen l&agrave; một loại protein, chiếm 25% tổng lượng protein trong cơ thể, c&oacute; chức năng li&ecirc;n kết c&aacute;c m&ocirc;. Với tổ chức da, b&ecirc;n cạnh nhiệm vụ li&ecirc;n kết, Collagen c&ograve;n c&oacute; chức năng tạo n&ecirc;n sự đ&agrave;n hồi, gi&uacute;p da duy tr&igrave; độ ẩm, tăng khả năng giữ nước để da lu&ocirc;n căng mịn. V&igrave; thế khi collagen bị mất đi do qu&aacute; tr&igrave;nh l&atilde;o ho&aacute; của cơ thể da sẽ bị tr&ugrave;ng nh&atilde;o, nhiều nếp nhăn.Theo quy luật tự nhi&ecirc;n, trung b&igrave;nh một người sẽ mất khoảng 30% tổng lượng collagen khi chạm ngưỡng 40 tuổi.<br />\r\n&nbsp;</p>\r\n\r\n<p>Do đ&oacute;, c&aacute;ch đơn giản v&agrave; kinh tế nhất để giữ m&atilde;i tuổi thanh xu&acirc;n là &nbsp;l&agrave; sử dụng sản ph&acirc;̉m kem dưỡng ch&acirc;́t collagen trắng da Moistone Ostrich Collagen Gel Cung cấp đầy đủ c&aacute;c dưỡng chất cần thiết cho da, gi&uacute;p da giữ ẩm, săn chắc, đ&agrave;n hồi, căng mịn, trắng s&aacute;ng v&agrave; đầy sức sống cũng như l&agrave;m chậm đi qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a da.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kem dưỡng ch&acirc;́t collagen trắng da Moistone Ostrich Collagen Gel gồm collagen h&ograve;a tan từ đ&agrave; điểu kết hợp với nano collagen từ vi c&aacute; hồng v&agrave; c&aacute;c dưỡng chất qu&yacute; kh&aacute;c được đ&aacute;nh gi&aacute; l&agrave; sản phẩm kem dưỡng da cao cấp tại Nhật Bản, cung cấp đầy đủ c&aacute;c dưỡng chất cần thiết cho da, gi&uacute;p da giữ ẩm, săn chắc, đ&agrave;n hồi, căng mịn, trắng s&aacute;ng v&agrave; đầy sức sống cũng như l&agrave;m chậm đi qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a.</p>\r\n', '2017-11-02 05:12:36', 'Nguyen Anh Tuan'),
(54, 'Kem dưỡng chất collagen trắng da', 'MoistOne1.jpg', '<p><strong>L&agrave;n da rất nhạy cảm với c&aacute;c t&aacute;c động m&ocirc;i trường v&agrave; nhanh ch&oacute;ng &ldquo; xuống cấp&rdquo; nếu kh&ocirc;ng được chăm s&oacute;c cẩn thận.&nbsp;Da th&ocirc; r&aacute;p, nhăn nheo, thiếu sức sống l&agrave; những dấu hiệu l&atilde;o h&oacute;a v&agrave; cũng ch&iacute;nh l&agrave; nỗi &aacute;m ảnh của mọi chị em phụ nữ.</strong></p>\r\n\r\n<p>Ng&agrave;y đăng: 1-11-2017</p>\r\n\r\n<p>576 lượt xem</p>\r\n\r\n<p>Với mong muốn t&igrave;m lại vẻ đẹp đ&ocirc;i mươi, kh&ocirc;ng &iacute;t c&aacute;c chị em đ&atilde; dốc hầu bao đổ v&agrave;o c&aacute;c Spa, thẩm mỹ viện, tiến h&agrave;nh phẫu thuật. Mặc d&ugrave; tốn k&eacute;m v&agrave; mất nhiều thời gian, nhưng chưa chắc đ&atilde; mang lại hiệu quả như &yacute;, thậm tr&iacute; còn làm cho da xấu, gi&agrave; đi trước tuổi.<br />\r\n&nbsp;</p>\r\n\r\n<p>Collagen l&agrave; một loại protein, chiếm 25% tổng lượng protein trong cơ thể, c&oacute; chức năng li&ecirc;n kết c&aacute;c m&ocirc;. Với tổ chức da, b&ecirc;n cạnh nhiệm vụ li&ecirc;n kết, Collagen c&ograve;n c&oacute; chức năng tạo n&ecirc;n sự đ&agrave;n hồi, gi&uacute;p da duy tr&igrave; độ ẩm, tăng khả năng giữ nước để da lu&ocirc;n căng mịn. V&igrave; thế khi collagen bị mất đi do qu&aacute; tr&igrave;nh l&atilde;o ho&aacute; của cơ thể da sẽ bị tr&ugrave;ng nh&atilde;o, nhiều nếp nhăn.Theo quy luật tự nhi&ecirc;n, trung b&igrave;nh một người sẽ mất khoảng 30% tổng lượng collagen khi chạm ngưỡng 40 tuổi.<br />\r\n&nbsp;</p>\r\n\r\n<p>Do đ&oacute;, c&aacute;ch đơn giản v&agrave; kinh tế nhất để giữ m&atilde;i tuổi thanh xu&acirc;n là &nbsp;l&agrave; sử dụng sản ph&acirc;̉m kem dưỡng ch&acirc;́t collagen trắng da Moistone Ostrich Collagen Gel Cung cấp đầy đủ c&aacute;c dưỡng chất cần thiết cho da, gi&uacute;p da giữ ẩm, săn chắc, đ&agrave;n hồi, căng mịn, trắng s&aacute;ng v&agrave; đầy sức sống cũng như l&agrave;m chậm đi qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a da.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kem dưỡng ch&acirc;́t collagen trắng da Moistone Ostrich Collagen Gel gồm collagen h&ograve;a tan từ đ&agrave; điểu kết hợp với nano collagen từ vi c&aacute; hồng v&agrave; c&aacute;c dưỡng chất qu&yacute; kh&aacute;c được đ&aacute;nh gi&aacute; l&agrave; sản phẩm kem dưỡng da cao cấp tại Nhật Bản, cung cấp đầy đủ c&aacute;c dưỡng chất cần thiết cho da, gi&uacute;p da giữ ẩm, săn chắc, đ&agrave;n hồi, căng mịn, trắng s&aacute;ng v&agrave; đầy sức sống cũng như l&agrave;m chậm đi qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a.</p>\r\n', '2017-11-02 05:12:36', 'Nguyen Anh Tuan');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_pq` (`id_nhom`);

--
-- Chỉ mục cho bảng `tb_chitietdonhang`
--
ALTER TABLE `tb_chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ctdh_dh` (`id_donhang`),
  ADD KEY `ctdh_sp` (`id_sanpham`);

--
-- Chỉ mục cho bảng `tb_chucnang`
--
ALTER TABLE `tb_chucnang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_donhang`
--
ALTER TABLE `tb_donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `dh_kh` (`id_khachhang`);

--
-- Chỉ mục cho bảng `tb_khachhang`
--
ALTER TABLE `tb_khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_lienhe`
--
ALTER TABLE `tb_lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_nhasanxuat`
--
ALTER TABLE `tb_nhasanxuat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_nhomnguoidung`
--
ALTER TABLE `tb_nhomnguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_phanquyen`
--
ALTER TABLE `tb_phanquyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pq_nhom` (`id_nhom`),
  ADD KEY `pq_cn` (`id_chucnang`);

--
-- Chỉ mục cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sp_dm` (`id_danhmuc`),
  ADD KEY `sp_nxs` (`id_nsx`);

--
-- Chỉ mục cho bảng `tb_tintuc`
--
ALTER TABLE `tb_tintuc`
  ADD PRIMARY KEY (`id_tintuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT cho bảng `tb_chitietdonhang`
--
ALTER TABLE `tb_chitietdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `tb_chucnang`
--
ALTER TABLE `tb_chucnang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT cho bảng `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `tb_donhang`
--
ALTER TABLE `tb_donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `tb_khachhang`
--
ALTER TABLE `tb_khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `tb_lienhe`
--
ALTER TABLE `tb_lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT cho bảng `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `tb_nhasanxuat`
--
ALTER TABLE `tb_nhasanxuat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `tb_nhomnguoidung`
--
ALTER TABLE `tb_nhomnguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `tb_phanquyen`
--
ALTER TABLE `tb_phanquyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT cho bảng `tb_tintuc`
--
ALTER TABLE `tb_tintuc`
  MODIFY `id_tintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD CONSTRAINT `admin_pq` FOREIGN KEY (`id_nhom`) REFERENCES `tb_phanquyen` (`id_nhom`);

--
-- Các ràng buộc cho bảng `tb_chitietdonhang`
--
ALTER TABLE `tb_chitietdonhang`
  ADD CONSTRAINT `ctdh_dh` FOREIGN KEY (`id_donhang`) REFERENCES `tb_donhang` (`id_donhang`),
  ADD CONSTRAINT `ctdh_sp` FOREIGN KEY (`id_sanpham`) REFERENCES `tb_sanpham` (`id`);

--
-- Các ràng buộc cho bảng `tb_donhang`
--
ALTER TABLE `tb_donhang`
  ADD CONSTRAINT `dh_kh` FOREIGN KEY (`id_khachhang`) REFERENCES `tb_khachhang` (`id`);

--
-- Các ràng buộc cho bảng `tb_phanquyen`
--
ALTER TABLE `tb_phanquyen`
  ADD CONSTRAINT `pq_cn` FOREIGN KEY (`id_chucnang`) REFERENCES `tb_chucnang` (`id`),
  ADD CONSTRAINT `pq_nhom` FOREIGN KEY (`id_nhom`) REFERENCES `tb_nhomnguoidung` (`id`);

--
-- Các ràng buộc cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD CONSTRAINT `sp_dm` FOREIGN KEY (`id_danhmuc`) REFERENCES `tb_danhmuc` (`id`),
  ADD CONSTRAINT `sp_nxs` FOREIGN KEY (`id_nsx`) REFERENCES `tb_nhasanxuat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
