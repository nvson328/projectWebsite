-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 24, 2020 lúc 04:59 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_nhahang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_banan`
--

CREATE TABLE `tbl_banan` (
  `ma_ban` int(10) NOT NULL,
  `ma_loai_ban` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_banan`
--

INSERT INTO `tbl_banan` (`ma_ban`, `ma_loai_ban`, `status`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1),
(7, 1, 1),
(8, 2, 1),
(9, 2, 1),
(10, 2, 1),
(11, 2, 1),
(12, 2, 1),
(13, 2, 1),
(14, 2, 1),
(15, 2, 1),
(16, 2, 1),
(17, 2, 1),
(18, 2, 1),
(19, 2, 1),
(20, 2, 1),
(21, 2, 1),
(22, 2, 1),
(23, 3, 1),
(24, 3, 1),
(25, 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitietban`
--

CREATE TABLE `tbl_chitietban` (
  `ma_hoa_don` int(10) NOT NULL,
  `ma_thuc_don` int(10) NOT NULL,
  `don_gia` decimal(10,2) NOT NULL,
  `so_luong` int(10) NOT NULL,
  `giam_gia` int(10) NOT NULL,
  `tong_tien` decimal(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_chitietban`
--

INSERT INTO `tbl_chitietban` (`ma_hoa_don`, `ma_thuc_don`, `don_gia`, `so_luong`, `giam_gia`, `tong_tien`, `status`) VALUES
(1, 25, '30000.00', 1, 0, '30000.00', 1),
(2, 26, '60000.00', 1, 0, '60000.00', 1),
(3, 26, '60000.00', 1, 0, '60000.00', 1),
(1, 27, '80000.00', 1, 0, '80000.00', 1),
(2, 28, '180000.00', 1, 0, '180000.00', 1),
(1, 29, '250000.00', 1, 0, '250000.00', 1),
(3, 30, '200000.00', 1, 0, '200000.00', 1),
(3, 31, '45000.00', 2, 0, '90000.00', 1),
(1, 34, '30000.00', 3, 0, '90000.00', 1),
(2, 37, '20000.00', 3, 0, '60000.00', 1),
(3, 37, '20000.00', 4, 0, '80000.00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `ma_danh_muc` int(10) NOT NULL,
  `ten_danh_muc` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`ma_danh_muc`, `ten_danh_muc`, `status`) VALUES
(1, 'Khai vị', 1),
(2, 'Món chính', 1),
(3, 'Tráng miệng', 1),
(4, 'Đồ uống', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_daubep`
--

CREATE TABLE `tbl_daubep` (
  `ma_dau_bep` int(10) NOT NULL,
  `ten_dau_bep` varchar(50) NOT NULL,
  `anh_dau_bep` varchar(150) NOT NULL,
  `gioi_thieu` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_daubep`
--

INSERT INTO `tbl_daubep` (`ma_dau_bep`, `ten_dau_bep`, `anh_dau_bep`, `gioi_thieu`, `status`) VALUES
(1, 'Marco Pierre White', 'staff-01.jpg', 'Vị Đầu bếp nổi tiếng nước Anh này được nhiều người nhìn nhận là “Bố già của nền ẩm thực thế giới”. Với các món ăn mang đậm phong cách đương đại, nhẹ nhàng va tinh tế, ông đã có nhiều đóng góp ch', 1),
(4, 'Gordon James Ramsay', 'staff-02.jpg', 'Với nhiều người Gordon Ramsay đơn giản là “Huyền thoại của nghề Bếp”, ông nóng tính nhưng tài năng; nghiêm khắc nhưng đôi khi cũng cực kỳ dí dỏm. Bên cạnh chuỗi nhà hàng nổi tiếng mà mình sở hữu thì vị Bếp trưởng siêu tài năng này còn là 1 giám khảo, cố vấn của hàng loạt chương trình truyền hình thực tế về nghề Bếp. Có thể nói, với sự nhiệt huyết và đam mê của mình thì Ramsay chính là niềm cảm hứng, tấm gương lớn cho nhiều bạn trẻ theo đuổi nghề Bếp. Kỷ lục đạt 14 sao Michelin của ông sẽ còn được nhắc đến rất lâu trên thế giới.', 1),
(5, 'Julia Child', 'staff-03.jpg', 'Julia Child là nữ đầu bếp nổi tiếng duy nhất xuất hiện trong danh sách này. Tuy đầu bếp nổi tiếng phần lớn là nam giới nhưng bà đã chứng minh được vị thế của mình trong làng ẩm thực thế giới.Tuy sinh ra và lớn lên tại Mỹ nhưng bà lại có niềm đam mê kỳ lạ đối với ẩm thực Pháp. Cuốn sách “Mastering the Art of French Cooking” và show truyền hình “The French Chef” của bà chính là minh chứng rõ ràng nhất cho thiên phú nấu món Pháp của Julia Child.', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadon`
--

CREATE TABLE `tbl_hoadon` (
  `ma_hoa_don` int(10) NOT NULL,
  `ma_khach_hang` int(10) NOT NULL,
  `ma_ban` int(10) NOT NULL,
  `ngay_dat_ban` datetime NOT NULL,
  `ghi_chu` varchar(150) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_hoadon`
--

INSERT INTO `tbl_hoadon` (`ma_hoa_don`, `ma_khach_hang`, `ma_ban`, `ngay_dat_ban`, `ghi_chu`, `status`) VALUES
(1, 1, 12, '2020-08-20 20:00:00', '', 1),
(2, 3, 5, '2020-08-19 21:00:00', '', 1),
(3, 2, 1, '2020-08-22 20:30:00', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `ma_khach_hang` int(10) NOT NULL,
  `ten_khach_hang` varchar(50) NOT NULL,
  `so_dien_thoai` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`ma_khach_hang`, `ten_khach_hang`, `so_dien_thoai`, `email`, `status`) VALUES
(1, 'Vũ Xuân Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(2, 'Nguyễn Văn Sơn', '0986463215', 'nvson@gmail.com', 1),
(3, 'Phạm Đăng Nam', '0976315649', 'nampham@gmail.com', 1),
(4, 'Trần Anh Tú', '0974412365', 'tuta@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaiban`
--

CREATE TABLE `tbl_loaiban` (
  `ma_loai_ban` int(10) NOT NULL,
  `ten_loai_ban` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_loaiban`
--

INSERT INTO `tbl_loaiban` (`ma_loai_ban`, `ten_loai_ban`, `status`) VALUES
(1, 'Bàn hai người', 1),
(2, 'Bàn sáu người', 1),
(3, 'Bàn mười người', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_taikhoan`
--

CREATE TABLE `tbl_taikhoan` (
  `ma_tai_khoan` int(10) NOT NULL,
  `ten_dang_nhap` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_taikhoan`
--

INSERT INTO `tbl_taikhoan` (`ma_tai_khoan`, `ten_dang_nhap`, `mat_khau`, `status`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1),
(2, 'staff', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thucdon`
--

CREATE TABLE `tbl_thucdon` (
  `ma_thuc_don` int(10) NOT NULL,
  `ma_danh_muc` int(10) NOT NULL,
  `ten_mon_an` varchar(50) NOT NULL,
  `anh_chi_tiet` varchar(150) NOT NULL,
  `gioi_thieu` text NOT NULL,
  `gia_tien` decimal(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_thucdon`
--

INSERT INTO `tbl_thucdon` (`ma_thuc_don`, `ma_danh_muc`, `ten_mon_an`, `anh_chi_tiet`, `gioi_thieu`, `gia_tien`, `status`) VALUES
(25, 1, 'Bánh mì bơ tỏi', 'menu-item-thumbnail-01.jpg', 'Bánh mì bơ tỏi là một sản phẩm đồ ăn bao gồm bánh mì là nguyên liệu chính với tỏi và dầu ô liu hoặc bơ và được chế biến theo phương pháp nướng ', '30000.00', 1),
(26, 1, 'Salad ', 'menu-item-thumbnail-02.jpg', 'Salad xanh hỗn hợp thường có một số sự kết hợp của rau diếp bé, arugula, frisée và rau bina. Những loại rau lá xanh này cũng có hương vị thơm ngon khi trộn với rau mùi tây, húng quế hoặc hẹ', '60000.00', 1),
(27, 1, 'Cánh gà BBQ', 'menu-item-thumbnail-03.jpg', 'BBQ Chicken Wings là một món khai vị ngày trò chơi tuyệt vời, cánh gà nướng thơm lừng trong nước sốt thịt nướng. Giòn bên trong và ngọt và dính ở bên ngoài!', '80000.00', 1),
(28, 2, 'Pizza', 'menu-item-thumbnail-04.jpg', 'Pizza được làm ròn rụm, có thịt bò, ngô ngọt và những hạt ô liu sẽ là bạn ăn không thể ngừng lại', '180000.00', 1),
(29, 2, 'Gà phô mai', 'menu-item-thumbnail-05.jpg', 'Gà phô mai được chế biến với những nguyên liệu không quá cầu kỳ nhưng mang lại một hương vị rất hấp dẫn và quyến rũ. Công thức cho món gà này cũng vô cùng đơn giản: thịt gà lọc xương, cắt miếng vuông vừa miệng rồi được nướng với rất nhiều loại gia vị Hàn đặc trưng và cuối cùng là phủ lên trên một lớp phô mai béo ngậy, mềm dẻo.', '250000.00', 1),
(30, 2, 'Thịt viên cay', 'menu-item-thumbnail-06.jpg', 'Thịt viên cay có hương vị đậm đà với tỏi, thì là, ớt bột và cayenne. Nước sốt là tuyệt vời, vì vậy phục vụ những viên thịt trên gạo hoặc súp lơ.', '200000.00', 1),
(31, 3, 'Bánh Pudding', 'menu-item-thumbnail-07.jpg', 'Biến thể bao gồm bánh pudding fudge, được làm bằng hỗn hợp bánh sô cô la , bánh pudding sô cô la , và sô cô la chip', '45000.00', 1),
(32, 3, 'Kem tươi', 'menu-item-thumbnail-08.jpg', 'Phủ lớp siro chocolate bên ngoài, bên trong là hương vị vani ngọt ngào', '20000.00', 1),
(33, 3, 'Đĩa hoa quả tổng hợp', 'menu-item-thumbnail-09.jpg', 'Mát dịu, ngon, và chứa nhiều các loại vitamin tốt cho sức khỏe', '120000.00', 1),
(34, 4, 'Bia tươi', 'menu-item-thumbnail-10.jpg', 'Thành phần chính của bia là nước, lúa mạch đã mạch nha hóa, hoa bia và men bia.[12] Các thành phần khác, chẳng hạn các chất tạo mùi vị hay các nguồn tạo đường khác được thêm vào như là các phụ gia. Các phụ gia phổ biến là ngô và lúa gạo.[13] Các nguồn tinh bột này được ngâm ủ để chuyển hóa thành các loại đường dễ lên men và làm tăng nồng độ cồn trong bia trong khi bổ sung rất ít hương vị. Các nhà sản xuất bia lớn ở Mỹ sử dụng tương đối nhiều các phụ gia để sản xuất bia rất ít hương vị với nồng độ cồn 4-5% theo thể tích.', '30000.00', 1),
(35, 4, 'Rượu vang', 'menu-item-thumbnail-11.jpg', 'Rượu vang đã được sản xuất trong hàng ngàn năm. Bằng chứng sớm nhất về rượu vang là từ Georgia , Iran (5000 TCN) và Sicily (4000 TCN). Rượu vang New World có một số mối liên hệ với đồ uống có cồn được sản xuất bởi người dân bản địa châu Mỹ , nhưng chủ yếu được kết nối với khu vực Viking sau này của Vinland và truyền thống Tây Ban Nha ở New Tây Ban Nha . [1] [2] Sau này, khi rượu vang Thế giới cũ phát triển hơn nữa các kỹ thuật trồng nho, Châu Âu sẽ bao gồm ba khu vực sản xuất rượu vang lớn nhất. Ngày nay, năm quốc gia có khu vực sản xuất rượu vang lớn nhất là ở Ý , Tây Ban Nha , Pháp , Hoa Kỳ ', '450000.00', 1),
(37, 4, 'Nước ngọt có ga', 'menu-item-thumbnail-12.jpg', 'Nước giải khát có ga là một loại thức uống thường chứa nước cácbon điôxít bão hòa, chất làm ngọt, và thường có thêm hương liệu. Chất làm ngọt có thể là đường, Xirô bắp high-fructose, nước ép trái cây, chất làm ngọt thay thế thường thấy trong các loại \"không đường\" hoặc các kết hợp của các loại trên', '20000.00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thuvien`
--

CREATE TABLE `tbl_thuvien` (
  `ma_anh` int(10) NOT NULL,
  `anh_gioi_thieu` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_thuvien`
--

INSERT INTO `tbl_thuvien` (`ma_anh`, `anh_gioi_thieu`, `status`) VALUES
(1, 'gallery_01.jpg', 1),
(2, 'gallery_02.jpg', 1),
(3, 'gallery_03.jpg', 1),
(4, 'gallery_04.jpg', 1),
(5, 'gallery_05.jpg', 1),
(6, 'gallery_06.jpg', 1),
(7, 'gallery_07.jpg', 1),
(8, 'gallery_08.jpg', 1),
(9, 'gallery_09.jpg', 1),
(10, 'gallery_10.jpg', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_banan`
--
ALTER TABLE `tbl_banan`
  ADD PRIMARY KEY (`ma_ban`),
  ADD KEY `fk_ma_loai_ban_tbl_loaiban_tbl_banan` (`ma_loai_ban`);

--
-- Chỉ mục cho bảng `tbl_chitietban`
--
ALTER TABLE `tbl_chitietban`
  ADD PRIMARY KEY (`ma_thuc_don`,`ma_hoa_don`),
  ADD KEY `fk_ma_hoa_don_tbl_hoadon_tbl_chitietban` (`ma_hoa_don`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`ma_danh_muc`);

--
-- Chỉ mục cho bảng `tbl_daubep`
--
ALTER TABLE `tbl_daubep`
  ADD PRIMARY KEY (`ma_dau_bep`);

--
-- Chỉ mục cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD PRIMARY KEY (`ma_hoa_don`),
  ADD KEY `fk_ma_khach_hang_tbl_khach_hang_tbl_hoadon` (`ma_khach_hang`),
  ADD KEY `fk_ma_ban_tbl_banan_tbl_hoadon` (`ma_ban`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`ma_khach_hang`);

--
-- Chỉ mục cho bảng `tbl_loaiban`
--
ALTER TABLE `tbl_loaiban`
  ADD PRIMARY KEY (`ma_loai_ban`);

--
-- Chỉ mục cho bảng `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  ADD PRIMARY KEY (`ma_tai_khoan`);

--
-- Chỉ mục cho bảng `tbl_thucdon`
--
ALTER TABLE `tbl_thucdon`
  ADD PRIMARY KEY (`ma_thuc_don`),
  ADD KEY `fk_ma_danh_muc_tbl_danhmuc_tbl_thucdon` (`ma_danh_muc`);

--
-- Chỉ mục cho bảng `tbl_thuvien`
--
ALTER TABLE `tbl_thuvien`
  ADD PRIMARY KEY (`ma_anh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_banan`
--
ALTER TABLE `tbl_banan`
  MODIFY `ma_ban` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `ma_danh_muc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_daubep`
--
ALTER TABLE `tbl_daubep`
  MODIFY `ma_dau_bep` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  MODIFY `ma_hoa_don` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `ma_khach_hang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_loaiban`
--
ALTER TABLE `tbl_loaiban`
  MODIFY `ma_loai_ban` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  MODIFY `ma_tai_khoan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_thucdon`
--
ALTER TABLE `tbl_thucdon`
  MODIFY `ma_thuc_don` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `tbl_thuvien`
--
ALTER TABLE `tbl_thuvien`
  MODIFY `ma_anh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_banan`
--
ALTER TABLE `tbl_banan`
  ADD CONSTRAINT `fk_ma_loai_ban_tbl_loaiban_tbl_banan` FOREIGN KEY (`ma_loai_ban`) REFERENCES `tbl_loaiban` (`ma_loai_ban`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_chitietban`
--
ALTER TABLE `tbl_chitietban`
  ADD CONSTRAINT `fk_ma_hoa_don_tbl_hoadon_tbl_chitietban` FOREIGN KEY (`ma_hoa_don`) REFERENCES `tbl_hoadon` (`ma_hoa_don`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ma_thuc_don_tbl_thucdon_tbl_chitietban` FOREIGN KEY (`ma_thuc_don`) REFERENCES `tbl_thucdon` (`ma_thuc_don`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD CONSTRAINT `fk_ma_ban_tbl_banan_tbl_hoadon` FOREIGN KEY (`ma_ban`) REFERENCES `tbl_banan` (`ma_ban`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ma_khach_hang_tbl_khach_hang_tbl_hoadon` FOREIGN KEY (`ma_khach_hang`) REFERENCES `tbl_khachhang` (`ma_khach_hang`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_thucdon`
--
ALTER TABLE `tbl_thucdon`
  ADD CONSTRAINT `fk_ma_danh_muc_tbl_danhmuc_tbl_thucdon` FOREIGN KEY (`ma_danh_muc`) REFERENCES `tbl_danhmuc` (`ma_danh_muc`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
