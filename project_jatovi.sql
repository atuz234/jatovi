-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 21, 2017 lúc 03:57 AM
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
  `trangthai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `ten_taikhoan`, `matkhau`, `hoten`, `gioitinh`, `id_nhom`, `trangthai`) VALUES
(1, 'admin', 'admin', 'Nguyen Anh Tuan', 1, 1, '1'),
(2, 'quantri', 'quantri', 'Nguyen Anh Tuan', 2, 3, '1'),
(11, 'ad', 'asd', 'asd', 0, 1, '1');

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
(12, 'Phân quyền', 1, 'phanquyen', 3, 1, 'phanquyen', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_danhmuc`
--

CREATE TABLE `tb_danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 'buitanthanh211098', 'tanthanh98', '0964474680', 'thanh', '2017-09-21', 1, 'xuan ai ', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_lichsunganhan`
--

CREATE TABLE `tb_lichsunganhan` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `ngaycapnhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `nsx_logo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `nsx_mota` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(25, 1, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_sanpham`
--

CREATE TABLE `tb_sanpham` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_nsx` int(11) NOT NULL,
  `xuatsu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `giacu` int(30) NOT NULL,
  `giamoi` int(30) NOT NULL,
  `ngaysanxuat` date NOT NULL,
  `hansudung` date NOT NULL,
  `donvi` int(11) NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dshinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `damua` int(20) NOT NULL,
  `luotxem` int(20) NOT NULL,
  `moicapnhat` datetime NOT NULL,
  `chuacapnhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `trangthai` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_tintuc`
--

CREATE TABLE `tb_tintuc` (
  `id_tintuc` int(11) NOT NULL,
  `tieude` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Chỉ mục cho bảng `tb_lichsunganhan`
--
ALTER TABLE `tb_lichsunganhan`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `tb_chitietdonhang`
--
ALTER TABLE `tb_chitietdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tb_chucnang`
--
ALTER TABLE `tb_chucnang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tb_donhang`
--
ALTER TABLE `tb_donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tb_khachhang`
--
ALTER TABLE `tb_khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `tb_lichsunganhan`
--
ALTER TABLE `tb_lichsunganhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tb_nhasanxuat`
--
ALTER TABLE `tb_nhasanxuat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tb_nhomnguoidung`
--
ALTER TABLE `tb_nhomnguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `tb_phanquyen`
--
ALTER TABLE `tb_phanquyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tb_tintuc`
--
ALTER TABLE `tb_tintuc`
  MODIFY `id_tintuc` int(11) NOT NULL AUTO_INCREMENT;
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
