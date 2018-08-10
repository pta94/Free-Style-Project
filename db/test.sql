-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 10, 2018 at 08:30 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdondathang`
--

CREATE TABLE `chitietdondathang` (
  `MaChiTietDonDatHang` int(11) NOT NULL,
  `MaDonDatHang` int(11) NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `GiaBan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `MaDonDatHang` int(11) NOT NULL,
  `MaKhachHang` int(11) NOT NULL,
  `NgayDatHang` datetime NOT NULL,
  `TongThanhTien` int(11) DEFAULT NULL,
  `MaTinhTrangDonDatHang` int(11) NOT NULL,
  `MaNhanVien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinhchitiet`
--

CREATE TABLE `hinhchitiet` (
  `MaSanPham` int(11) NOT NULL,
  `Hinh1` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `Hinh2` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `Hinh3` varchar(256) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hinhchitiet`
--

INSERT INTO `hinhchitiet` (`MaSanPham`, `Hinh1`, `Hinh2`, `Hinh3`) VALUES
(1, 'men0_2.png', 'men0_3.png', 'men0_4.png'),
(2, 'men1_2.png', 'men1_3.png', 'men1_4.png'),
(3, 'men2_2.png', 'men2_3.png', 'men2_4.png'),
(4, 'men3_2.png', 'men3_3.png', 'men3_4.png'),
(5, 'men4_2.png', 'men4_3.png', 'men4_4.png'),
(6, 'men5_2.png', 'men5_3.png', 'men5_4.png'),
(7, 'men6_2.png', 'men6_3.png', 'men6_4.png'),
(8, 'men7_2.png', 'men7_3.png', 'men7_4.png'),
(9, 'men8_2.png', 'men8_3.png', 'men8_4.png'),
(10, 'women0_2.png', 'women0_3.png', 'women0_4.png'),
(11, 'women1_2.png', 'women1_3.png', 'women1_4.png'),
(12, 'women2_2.png', 'women2_3.png', 'women2_4.png'),
(13, 'women3_2.png', 'women3_3.png', 'women3_4.png'),
(14, 'women4_2.png', 'women4_3.png', 'women4_4.png'),
(15, 'women5_2.png', 'women5_3.png', 'women5_4.png'),
(16, 'women6_2.png', 'women6_3.png', 'women6_4.png'),
(17, 'women7_2.png', 'women7_3.png', 'women7_4.png'),
(18, 'women8_2.png', 'women8_3.png', 'women8_4.png');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKhachHang` int(11) NOT NULL,
  `HoTen` varchar(45) CHARACTER SET utf8 NOT NULL,
  `DiaChi` varchar(256) CHARACTER SET utf8 NOT NULL,
  `SoDienThoai` varchar(11) CHARACTER SET utf8 NOT NULL,
  `BiXoa` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKhachHang`, `HoTen`, `DiaChi`, `SoDienThoai`, `BiXoa`) VALUES
(1, 'Nguyễn Văn Tèo', 'Số 2 Nguyễn Gia Thiều - Quận 3', '0909112233', 0),
(2, 'Lê Thị Tủng', '123/32 Lê Thị Riêng - Quận Tân Bình', '0909887766', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoaiSanPham` int(11) NOT NULL,
  `TenLoaiSanPham` varchar(45) CHARACTER SET utf8 NOT NULL,
  `BiXoa` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoaiSanPham`, `TenLoaiSanPham`, `BiXoa`) VALUES
(1, 'Men', 0),
(2, 'Women', 0),
(3, 'Kids', 0),
(4, 'Sports', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNhanVien` int(11) NOT NULL,
  `TenDangNhap` varchar(45) CHARACTER SET utf8 NOT NULL,
  `MatKhau` varchar(20) CHARACTER SET utf8 NOT NULL,
  `HoTen` varchar(45) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `SoDienThoai` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `BiXoa` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(100) CHARACTER SET utf8 NOT NULL,
  `MaLoaiSanPham` int(11) NOT NULL,
  `HinhURL` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `Gia` int(11) NOT NULL,
  `SoLuongTon` int(11) DEFAULT NULL,
  `SoLuongBan` int(11) DEFAULT '0',
  `SoLuotXem` int(11) DEFAULT '0',
  `NgayNhap` datetime DEFAULT NULL,
  `MoTa` longtext CHARACTER SET utf8,
  `BiXoa` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `MaLoaiSanPham`, `HinhURL`, `Gia`, `SoLuongTon`, `SoLuongBan`, `SoLuotXem`, `NgayNhap`, `MoTa`, `BiXoa`) VALUES
(1, 'Nike EXP-X14\r\n', 1, 'men0_1.png', 149, 50, 9, 18, '2018-05-01 00:00:00', 'Drawing inspiration from Nike running shoes such as the Nike Zoom Vaporfly Elite, the Nike EXP-X14 Men\'s Shoe races off the track and onto the street with a fast design and shape. Nike React technology delivers lightweight durability and a smooth feel, while the layered upper showcases Flywire cables and bold branding.\r\n', 0),
(2, 'Nike Air Force 1\r\n', 1, 'men1_1.png', 129, 27, 13, 43, '2018-05-01 00:00:00', 'The legend lives on in the Nike Air Force 1 Low \'07 LV8 Men\'s Shoe, a modern take on the icon that blends classic style and fresh, crisp details. This special edition sets itself apart with elevated design elements.\r\n', 0),
(3, 'Nike Air VaporMax ', 1, 'men2_1.png', 275, 41, 9, 157, '2018-05-01 00:00:00', 'With a re-invented cushioning system, the Nike Air VaporMax Plus Men\'s Shoe delivers a lightweight, bouncy ride for a gravity-defying sensation underfoot, while the throwback moulded upper gives you a snug, comfortable fit.\r\n', 0),
(4, 'Nike Air Max 270 ', 1, 'men3_1.png', 225, 49, 1, 17, '2018-05-01 00:00:00', 'Feel the Air, both above and below, with the Nike Air Max 270 Flyknit Men\'s Shoe. It features Nike\'s biggest heel Air unit yet, plus an ultra-breathable Flyknit upper that helps keep you cool when the temperatures rise.', 0),
(5, 'Nike Air Max 1', 1, 'men4_1.png', 169, 28, 2, 34, '2018-05-01 00:00:00', 'The Nike Air Max 1 gave the world its first glimpse of Nike Air cushioning back in 1987. The Nike Air Max 1 Premium Men\'s Shoe refreshes the classic design with premium materials for an elevated look.\r\n', 0),
(6, 'NIKE AIR VAPORMAX 97', 1, 'men5_1.png', 299, 35, 15, 189, '2018-05-01 00:00:00', 'Past and future icons of Air collide to create the Nike Air VaporMax 97 Men\'s Shoe, a commanding new street sneaker. It features the classic Air Max 97 design lines up top and the revolutionary Air VaporMax cushioning down below.\r\n', 0),
(7, 'Nike Duel Racer\r\n', 1, 'men6_1.png', 150, 44, 6, 78, '2018-05-01 00:00:00', 'Inspired by the fast road-racer known as the Duelist, the Nike Duel Racer Men\'s Shoe brings back the profile as a sleek lifestyle sneaker. Its dual-density cushioning provides all-day, everyday comfort, even on marathon-long days.\r\n', 0),
(8, 'Nike Air Force 270\r\n', 1, 'men7_1.png', 225, 39, 11, 98, '2018-05-01 00:00:00', 'The Nike Air Force 270 Men\'s Shoe updates the muscular Air Force silhouettes of the \'90s with a big, plush Max Air unit—the tallest ever. It also includes an adjustable midfoot strap with a magnetic closure, so you can get out of the shoe with a quick click.\r\n', 0),
(9, 'Nike SB Air Max ', 1, 'men8_1.png', 140, 50, 10, 122, '2018-05-01 00:00:00', 'Modernising a classic profile, the Nike SB Air Max Bruin Vapor Men\'s Skateboarding Shoe features original design lines with classic Max Air cushioning and a more streamline lightweight fit. A slimmer profile allows your foot to sit lower to the ground for better boardfeel.\r\n', 0),
(10, 'Nike AF-1 Jester ', 2, 'women0_1.png', 79, 33, 7, 16, '2018-05-01 00:00:00', 'As playful as it is beautiful, this Nike AF-1 Jester XX SE Women\'s Shoe features exaggerated design details, including a saw-tooth sole and graphic lines. Leather and synthetic leather offer support, while Nike Air cushioning delivers lightweight comfort with every step.\r\n', 0),
(11, 'Nike Air Max 90\r\n', 2, 'women1_1.png', 80, 31, 19, 76, '2018-05-01 00:00:00', 'The Nike Air Max 90 Women\'s Shoe brings back the iconic design and visible Max Air cushioning that made the original famous. \r\n', 0),
(12, 'Nike Air Max 1 ', 2, 'women2_1.png', 99, 46, 34, 213, '2018-05-01 00:00:00', 'The Nike Air Max 1 gave the world its first glimpse of Nike Air cushioning back in 1987. The Nike Air Max 1 Premium Women\'s Shoe elevates the classic design with new accents, colours and materials.\r\n', 0),
(13, 'Nike Classic Cortez\r\n', 2, 'women3_1.png', 80, 29, 11, 47, '2018-05-01 00:00:00', 'The Nike Classic Cortez Nylon Women\'s Shoe is Nike\'s original running shoe, designed by Bill Bowerman and released in 1972. This version features a nylon upper with suede overlays for a lightweight feel and throwback style.\r\n', 0),
(14, 'Nike Praktisk\r\n', 2, 'women4_1.png', 70, 48, 12, 46, '2018-05-01 00:00:00', 'The Nike Praktisk Women\'s Sandal provides the plush comfort with the breathability of a three-strap design. Exaggerated flex grooves offer traction and range of motion in this breezy silhouette.\r\n', 0),
(15, 'Air Jordan 3 ', 2, 'women5_1.png', 199, 33, 17, 89, '2018-05-01 00:00:00', 'The Air Jordan 3 Retro SE Women\'s Shoe refreshes the original basketball icon with a combination upper plus visible Max Air cushioning for elevated comfort.\r\n', 0),
(16, 'Nike Air Max 2017', 2, 'women6_1.png', 249, 42, 8, 69, '2018-05-01 00:00:00', 'The Nike Air Max 2017 iD Running Shoe brings you lightweight, maximum cushioning and breathable support designed to keep you comfortable from mile one to done. Customise yours with a variety of colours, fade options and a personal message.  ', 0),
(17, 'Nike Cortez iD', 2, 'women7_1.png', 109, 53, 7, 76, '2018-05-01 00:00:00', 'The Nike Cortez is Nike\'s original running shoe, designed by Bill Bowerman and released in 1972. Now it\'s yours to design with the Nike Cortez iD Shoe. Choose from a spectrum of muted colours, then add metallic accents and a personal iD to make it your own.', 0),
(18, 'Nike Air Max 95', 2, 'women8_1.png', 249, 28, 22, 169, '2018-05-01 00:00:00', 'The Nike Air Max 95 iD honours the legendary original with coveted fade options and a variety of premium details, from paint speckles to translucency. Customise yours for a unique spin on the 1995 icon.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrangdondathang`
--

CREATE TABLE `tinhtrangdondathang` (
  `MaTinhTrangDonDatHang` int(11) NOT NULL,
  `TenTinhTrangDonDatHang` varchar(45) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tinhtrangdondathang`
--

INSERT INTO `tinhtrangdondathang` (`MaTinhTrangDonDatHang`, `TenTinhTrangDonDatHang`) VALUES
(1, 'Đặt hàng'),
(2, 'Đang xử lý'),
(3, 'Đang giao hàng'),
(4, 'Thanh toán'),
(5, 'Hủy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD PRIMARY KEY (`MaChiTietDonDatHang`),
  ADD KEY `fk_ChiTietDonDatHang_DonDatHang1_idx` (`MaDonDatHang`),
  ADD KEY `fk_ChiTietDonDatHang_SanPham1_idx` (`MaSanPham`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`MaDonDatHang`),
  ADD KEY `fk_DonDatHang_KhachHang1_idx` (`MaKhachHang`),
  ADD KEY `fk_DonDatHang_TinhTrangDonDatHang1_idx` (`MaTinhTrangDonDatHang`),
  ADD KEY `fk_DonDatHang_NhanVien1_idx` (`MaNhanVien`);

--
-- Indexes for table `hinhchitiet`
--
ALTER TABLE `hinhchitiet`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD UNIQUE KEY `MaSanPham` (`MaSanPham`),
  ADD KEY `fk_HinhChiTiet_SanPham_idx` (`MaSanPham`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKhachHang`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoaiSanPham`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNhanVien`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `fk_SanPham_LoaiSanPham_idx` (`MaLoaiSanPham`);

--
-- Indexes for table `tinhtrangdondathang`
--
ALTER TABLE `tinhtrangdondathang`
  ADD PRIMARY KEY (`MaTinhTrangDonDatHang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  MODIFY `MaChiTietDonDatHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `MaDonDatHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKhachHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLoaiSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNhanVien` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tinhtrangdondathang`
--
ALTER TABLE `tinhtrangdondathang`
  MODIFY `MaTinhTrangDonDatHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD CONSTRAINT `fk_ChiTietDonDatHang_DonDatHang1` FOREIGN KEY (`MaDonDatHang`) REFERENCES `dondathang` (`MaDonDatHang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ChiTietDonDatHang_SanPham1` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `fk_DonDatHang_KhachHang1` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`MaKhachHang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DonDatHang_NhanVien1` FOREIGN KEY (`MaNhanVien`) REFERENCES `nhanvien` (`MaNhanVien`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DonDatHang_TinhTrangDonDatHang1` FOREIGN KEY (`MaTinhTrangDonDatHang`) REFERENCES `tinhtrangdondathang` (`MaTinhTrangDonDatHang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hinhchitiet`
--
ALTER TABLE `hinhchitiet`
  ADD CONSTRAINT `fk_HinhChiTiet_SanPham` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_SanPham_LoaiSanPham` FOREIGN KEY (`MaLoaiSanPham`) REFERENCES `loaisanpham` (`MaLoaiSanPham`) ON DELETE NO ACTION ON UPDATE NO ACTION;
