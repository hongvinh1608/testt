-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 05, 2024 lúc 06:13 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopgiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_admin`
--

CREATE TABLE `b_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `b_admin`
--

INSERT INTO `b_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'hieuadmin', '25f9e794323b453885f5181f1b624d0b', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_cart`
--

CREATE TABLE `b_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_chitietdonhang`
--

CREATE TABLE `b_chitietdonhang` (
  `id_donhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_dangky`
--

CREATE TABLE `b_dangky` (
  `id_dangki` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_danhmuc`
--

CREATE TABLE `b_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `b_danhmuc`
--

INSERT INTO `b_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(59, 'Oppo', 0),
(60, 'Iphone', 0),
(69, 'Nokia', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `b_sanpham`
--

CREATE TABLE `b_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `b_sanpham`
--

INSERT INTO `b_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(13, 'op lung 8', '1', '1', 1, '2.1.4.jpg', 'ffff', 'fff', 1, 1),
(16, 'op lung 2', '1111111111111', '1', 1, '3+.jpg', 'f', 'f', 1, 54),
(18, 'samsung a54', '002', '23000', 11, '309834.jpg', 'n', 'm', 1, 58),
(22, 'samsung JP3', '02', '24000', 41, 'samsung-galaxy-a54-thumb-tim-600x600.jpg', 'f', 'f', 1, 58),
(23, 'samsung  JH', '06', '45000', 45, 'samsung-galaxy-s23-ultra-thumb-xanh-600x600.jpg', 'c', 'c', 1, 58),
(26, 'IPhone 13', '012', '15000000', 125, '11 trang.jpg', 'f', 'f', 1, 60),
(27, 'OPPO', '001', '20000', 222, 'po1.jpg', 'x', 'x', 0, 59),
(28, 'OOP', '001', '25', 3, '11 trang.jpg', 'd', '', 1, 60),
(29, 'op lung 1', '1', '111111', 11, 'xm naau.jpg', '', '', 1, 60),
(30, 'op lung 1', '001', '1', 11, '11 trang.jpg', '', '', 1, 60),
(31, 'op lung 5', '001', '230000', 444, 'po2.jpg', '', '', 1, 59),
(32, 'IPHONE 13 PRM', '001', '240000', 12, '11 trang.jpg', 'b', 'b', 1, 60);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `b_admin`
--
ALTER TABLE `b_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `b_cart`
--
ALTER TABLE `b_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `b_chitietdonhang`
--
ALTER TABLE `b_chitietdonhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Chỉ mục cho bảng `b_dangky`
--
ALTER TABLE `b_dangky`
  ADD PRIMARY KEY (`id_dangki`);

--
-- Chỉ mục cho bảng `b_danhmuc`
--
ALTER TABLE `b_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `b_sanpham`
--
ALTER TABLE `b_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `b_admin`
--
ALTER TABLE `b_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `b_cart`
--
ALTER TABLE `b_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `b_chitietdonhang`
--
ALTER TABLE `b_chitietdonhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `b_dangky`
--
ALTER TABLE `b_dangky`
  MODIFY `id_dangki` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `b_danhmuc`
--
ALTER TABLE `b_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `b_sanpham`
--
ALTER TABLE `b_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
