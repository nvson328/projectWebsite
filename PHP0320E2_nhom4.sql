-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th9 22, 2020 lúc 03:45 AM
-- Phiên bản máy phục vụ: 5.7.31-0ubuntu0.18.04.1
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `PHP0320E2_nhom4`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_banan`
--

CREATE TABLE `tbl_banan` (
  `ma_ban` int(10) NOT NULL,
  `ma_loai_ban` int(10) NOT NULL,
  `ten_ban` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_banan`
--

INSERT INTO `tbl_banan` (`ma_ban`, `ma_loai_ban`, `ten_ban`, `status`) VALUES
(1, 1, 'Bàn hai người sô 1', 1),
(2, 1, 'Bàn hai người sô 2', 1),
(3, 1, 'Bàn hai người sô 3', 1),
(4, 1, 'Bàn hai người sô 4', 1),
(5, 1, 'Bàn hai người sô 5', 1),
(6, 1, 'Bàn hai người sô 6', 1),
(7, 1, 'Bàn hai người sô 7', 1),
(8, 2, 'Bàn sáu người sô 1', 1),
(9, 2, 'Bàn sáu người sô 2', 1),
(10, 2, 'Bàn sáu người sô 3', 1),
(11, 2, 'Bàn sáu người sô 4', 1),
(12, 2, 'Bàn sáu người sô 5', 1),
(13, 2, 'Bàn sáu người sô 6', 1),
(14, 2, 'Bàn sáu người sô 7', 1),
(15, 2, 'Bàn sáu người sô 8', 1),
(16, 2, 'Bàn sáu người sô 9', 1),
(17, 2, 'Bàn sáu người sô 10', 1),
(18, 2, 'Bàn sáu người sô 11', 1),
(19, 2, 'Bàn sáu người sô 12', 1),
(20, 2, 'Bàn sáu người sô 13', 1),
(21, 2, 'Bàn sáu người sô 14', 1),
(22, 2, 'Bàn sáu người sô 15', 1),
(23, 3, 'Bàn mười người sô 1', 1),
(24, 3, 'Bàn mười người sô 2', 1),
(25, 3, 'Bàn mười người số 3', 1);

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
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_chitietban`
--

INSERT INTO `tbl_chitietban` (`ma_hoa_don`, `ma_thuc_don`, `don_gia`, `so_luong`, `giam_gia`, `tong_tien`, `status`) VALUES
(1, 25, '30000.00', 5, 0, '150000.00', 1),
(3, 25, '30000.00', 5, 0, '150000.00', 1),
(5, 25, '30000.00', 1, 0, '30000.00', 1),
(29, 25, '30000.00', 2, 0, '60000.00', 1),
(1, 26, '60000.00', 2, 0, '120000.00', 1),
(2, 26, '60000.00', 2, 0, '120000.00', 1),
(3, 26, '60000.00', 2, 0, '120000.00', 1),
(5, 26, '60000.00', 1, 0, '60000.00', 1),
(29, 26, '60000.00', 2, 0, '120000.00', 1),
(1, 27, '80000.00', 1, 0, '80000.00', 1),
(5, 27, '80000.00', 1, 0, '80000.00', 1),
(29, 27, '80000.00', 2, 0, '160000.00', 1),
(2, 28, '180000.00', 1, 0, '180000.00', 1),
(5, 28, '180000.00', 1, 0, '180000.00', 1),
(1, 29, '250000.00', 1, 0, '250000.00', 1),
(1, 30, '200000.00', 1, 0, '200000.00', 1),
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
  `status` tinyint(1) NOT NULL DEFAULT '1'
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
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_daubep`
--

INSERT INTO `tbl_daubep` (`ma_dau_bep`, `ten_dau_bep`, `anh_dau_bep`, `gioi_thieu`, `status`) VALUES
(1, 'Marco Pierre White', 'staff-01.jpg', 'Vị Đầu bếp nổi tiếng nước Anh này được nhiều người nhìn nhận là “Bố già của nền ẩm thực thế giới”. Với các món ăn mang đậm phong cách đương đại, nhẹ nhàng va tinh tế, ông đã có nhiều đóng góp cho nền ẩm thực thế giới.', 1),
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
  `ngay_dat_ban` date NOT NULL,
  `gio_dat_ban` time NOT NULL,
  `ghi_chu` varchar(150) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_hoadon`
--

INSERT INTO `tbl_hoadon` (`ma_hoa_don`, `ma_khach_hang`, `ma_ban`, `ngay_dat_ban`, `gio_dat_ban`, `ghi_chu`, `status`) VALUES
(1, 1, 12, '2020-08-20', '00:00:00', '', 1),
(2, 3, 5, '2020-08-19', '00:00:00', '', 1),
(3, 2, 1, '2020-08-22', '00:00:00', '', 1),
(4, 15, 2, '0000-00-00', '11:38:00', '', 1),
(5, 16, 2, '0000-00-00', '11:38:00', '', 1),
(6, 17, 3, '0000-00-00', '11:40:00', '', 1),
(7, 16, 2, '0000-00-00', '99:44:07', '', 1),
(8, 16, 1, '0000-00-00', '20:44:53', '', 1),
(9, 16, 2, '0000-00-00', '15:48:17', '', 1),
(10, 18, 13, '2020-09-02', '11:53:00', '', 1),
(11, 19, 3, '2020-09-25', '06:37:00', '', 1),
(12, 20, 2, '2020-09-04', '09:53:00', '', 1),
(13, 21, 2, '2020-09-04', '09:53:00', '', 1),
(14, 22, 2, '2020-09-04', '09:55:00', '', 1),
(15, 23, 2, '2020-09-04', '09:56:00', '', 1),
(16, 24, 2, '2020-09-04', '09:56:00', '', 1),
(17, 25, 2, '2020-09-04', '10:03:00', '', 1),
(18, 26, 2, '2020-09-04', '10:04:00', '', 1),
(19, 27, 2, '2020-09-04', '10:06:00', '', 1),
(20, 28, 2, '2020-09-04', '10:07:00', '', 1),
(21, 29, 9, '2020-09-04', '10:08:00', '', 1),
(22, 31, 2, '2020-09-04', '10:37:00', '', 1),
(23, 32, 3, '2020-09-04', '10:37:00', '', 1),
(24, 32, 3, '2020-09-04', '10:37:00', '', 1),
(25, 33, 6, '2020-09-04', '10:37:00', '', 1),
(26, 34, 24, '2020-09-04', '10:48:00', '', 1),
(27, 35, 1, '2020-09-11', '07:30:00', '', 1),
(28, 35, 24, '2020-09-17', '07:30:00', '', 1),
(29, 2, 10, '2020-10-08', '01:52:00', '', 1),
(30, 36, 5, '2020-09-16', '01:56:00', '', 1),
(31, 37, 6, '2020-09-16', '07:00:00', '', 1),
(32, 38, 2, '2020-09-09', '07:28:00', '', 1),
(33, 39, 2, '2020-09-10', '07:02:00', '', 1),
(34, 40, 1, '2020-09-10', '07:04:00', '', 1),
(35, 41, 1, '2020-09-10', '07:05:00', '', 1),
(36, 42, 2, '2020-09-10', '07:53:00', '', 1),
(37, 43, 24, '2020-09-17', '04:28:00', '', 1),
(38, 44, 24, '2020-09-17', '04:28:00', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `ma_khach_hang` int(10) NOT NULL,
  `ten_khach_hang` varchar(50) NOT NULL,
  `so_dien_thoai` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`ma_khach_hang`, `ten_khach_hang`, `so_dien_thoai`, `email`, `status`) VALUES
(1, 'Vũ Xuân Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(2, 'Nguyễn Văn Sơn', '0986463215', 'nvson@gmail.com', 1),
(3, 'Phạm Đăng Nam', '0976315649', 'nampham@gmail.com', 1),
(4, 'Trần Anh Tú', '0974412365', 'tuta@gmail.com', 1),
(5, 'Giàng A Páo', '0586542658', 'Apao@gmail.com', 1),
(6, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(7, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(8, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(9, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(10, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(11, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(12, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(13, 'đá', '0986384632', 'vuxtit1210@gmail.com', 1),
(14, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(15, 'A Lử', '0986384632', 'alu@gmail.com', 1),
(16, 'A Lử', '0986384632', 'alu@gmail.com', 1),
(17, 'Nguyễn Gia Bảo', '0986384632', 'giabao@gmail.com', 1),
(18, 'Thị Nở', '0986384632', 'thino@oo.oo', 1),
(19, 'Nam Nguyễn', '0986384632', 'namnuyen@gmail.com', 1),
(20, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(21, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(22, 'Vũ Xuân Tugnf', '0986384632', 'tungvx72@wru.vn', 1),
(23, 'đá', '654654', 'vuxtit1210@gmail.com', 1),
(24, 'đá', '654654', 'vuxtit1210@gmail.com', 1),
(25, 'Abcs', '0986384632', 'vuxtit1210@gmail.com', 1),
(26, 'Vũ Tùng', '31', 'vuxtit1210@gmail.com', 1),
(27, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(28, 'Vũ Tùng', '0986384632', 'tungvx72@wru.vn', 1),
(29, 'Jang a Mùa', '0542658746', 'aMua@gmail.com', 1),
(30, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(31, 'Vũ Tùng', '0986384632', 'tungvx72@wru.vn', 1),
(32, 'Vũ Tùng', '0972853498', 'luasinh@gmail.com', 1),
(33, 'Giàng thị Nở', '0972853475', 'thino@gmail.com', 1),
(34, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(35, 'Đoàn quỳnh anh', '0862592140', 'quynhanh@gamil.com', 1),
(36, 'Nam phạm', '5+45652612', 'phamdangnam@gmail.com', 1),
(37, 'Nguyễn Thùy Linh', '0988851491', 'thuylinh@gmail.com', 1),
(38, 'Vũ Tùng', '0988851491', 'vuxtit1210@gmail.com', 1),
(39, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(40, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(41, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(42, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(43, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(44, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1),
(45, 'Vũ Tùng', '0986384632', 'vuxtit1210@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaiban`
--

CREATE TABLE `tbl_loaiban` (
  `ma_loai_ban` int(10) NOT NULL,
  `ten_loai_ban` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
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
  `status` tinyint(1) NOT NULL DEFAULT '1'
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
  `gia_tien` decimal(10,0) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_thucdon`
--

INSERT INTO `tbl_thucdon` (`ma_thuc_don`, `ma_danh_muc`, `ten_mon_an`, `anh_chi_tiet`, `gioi_thieu`, `gia_tien`, `status`) VALUES
(25, 1, 'Bánh mì bơ tỏi', 'menu-item-thumbnail-01.jpg', 'Bánh mì bơ tỏi là một sản phẩm đồ ăn bao gồm bánh mì là nguyên liệu chính với tỏi và dầu ô liu hoặc bơ và được chế biến theo phương pháp nướng ', '30000', 1),
(26, 1, 'Salad ', 'menu-item-thumbnail-02.jpg', 'Salad xanh hỗn hợp thường có một số sự kết hợp của rau diếp bé, arugula, frisée và rau bina. Những loại rau lá xanh này cũng có hương vị thơm ngon khi trộn với rau mùi tây, húng quế hoặc hẹ', '60000', 1),
(27, 1, 'Cánh gà BBQ', 'menu-item-thumbnail-03.jpg', 'BBQ Chicken Wings là một món khai vị ngày trò chơi tuyệt vời, cánh gà nướng thơm lừng trong nước sốt thịt nướng. Giòn bên trong và ngọt và dính ở bên ngoài!', '80000', 1),
(28, 2, 'Pizza', 'menu-item-thumbnail-04.jpg', 'Pizza được làm ròn rụm, có thịt bò, ngô ngọt và những hạt ô liu sẽ là bạn ăn không thể ngừng lại', '180000', 1),
(29, 2, 'Gà phô mai', 'menu-item-thumbnail-05.jpg', 'Gà phô mai được chế biến với những nguyên liệu không quá cầu kỳ nhưng mang lại một hương vị rất hấp dẫn và quyến rũ. Công thức cho món gà này cũng vô cùng đơn giản: thịt gà lọc xương, cắt miếng vuông vừa miệng rồi được nướng với rất nhiều loại gia vị Hàn đặc trưng và cuối cùng là phủ lên trên một lớp phô mai béo ngậy, mềm dẻo.', '250000', 1),
(30, 2, 'Thịt viên cay', 'menu-item-thumbnail-06.jpg', 'Thịt viên cay có hương vị đậm đà với tỏi, thì là, ớt bột và cayenne. Nước sốt là tuyệt vời, vì vậy phục vụ những viên thịt trên gạo hoặc súp lơ.', '200000', 1),
(31, 3, 'Bánh Pudding', 'menu-item-thumbnail-07.jpg', 'Biến thể bao gồm bánh pudding fudge, được làm bằng hỗn hợp bánh sô cô la , bánh pudding sô cô la , và sô cô la chip', '45000', 1),
(32, 3, 'Kem tươi', 'menu-item-thumbnail-08.jpg', 'Phủ lớp siro chocolate bên ngoài, bên trong là hương vị vani ngọt ngào', '20000', 1),
(33, 3, 'Đĩa hoa quả tổng hợp', 'menu-item-thumbnail-09.jpg', 'Mát dịu, ngon, và chứa nhiều các loại vitamin tốt cho sức khỏe', '120000', 1),
(34, 4, 'Bia tươi', 'menu-item-thumbnail-10.jpg', 'Thành phần chính của bia là nước, lúa mạch đã mạch nha hóa, hoa bia và men bia .Các thành phần khác, chẳng hạn các chất tạo mùi vị hay các nguồn tạo đường khác được thêm vào như là các phụ gia. Các phụ gia phổ biến là ngô và lúa gạo Các nguồn tinh bột này được ngâm ủ để chuyển hóa thành các loại đường dễ lên men và làm tăng nồng độ cồn trong bia trong khi bổ sung rất ít hương vị. Các nhà sản xuất bia lớn ở Mỹ sử dụng tương đối nhiều các phụ gia để sản xuất bia rất ít hương vị với nồng độ cồn 4-5% theo thể tích.', '30000', 1),
(35, 4, 'Rượu vang', 'menu-item-thumbnail-11.jpg', 'Rượu vang đã được sản xuất trong hàng ngàn năm. Bằng chứng sớm nhất về rượu vang là từ Georgia , Iran (5000 TCN) và Sicily (4000 TCN). Rượu vang New World có một số mối liên hệ với đồ uống có cồn được sản xuất bởi người dân bản địa châu Mỹ , nhưng chủ yếu được kết nối với khu vực Viking sau này của Vinland và truyền thống Tây Ban Nha ở New Tây Ban Nha . [1] [2] Sau này, khi rượu vang Thế giới cũ phát triển hơn nữa các kỹ thuật trồng nho, Châu Âu sẽ bao gồm ba khu vực sản xuất rượu vang lớn nhất. Ngày nay, năm quốc gia có khu vực sản xuất rượu vang lớn nhất là ở Ý , Tây Ban Nha , Pháp , Hoa Kỳ ', '450000', 1),
(37, 4, 'Nước ngọt có ga', 'menu-item-thumbnail-12.jpg', 'Nước giải khát có ga là một loại thức uống thường chứa nước cácbon điôxít bão hòa, chất làm ngọt, và thường có thêm hương liệu. Chất làm ngọt có thể là đường, Xirô bắp high-fructose, nước ép trái cây, chất làm ngọt thay thế thường thấy trong các loại \"không đường\" hoặc các kết hợp của các loại trên', '20000', 1),
(44, 2, 'Italian Pizza', 'special-menu-2.jpg', 'Trên thế giới có rất nhiều lọai pizza nhưng có thể các bạn không biết rằng pizza nó được xuất phát từ Italian. Hôm nay chúng tôi sẽ đưa các bạn đến Italian bằng chính chiếc pizza đậm mùi Italian này.', '250000', 2),
(46, 2, 'Steak cá hồi', 'special-menu-1.jpg', 'Steak cá hồi được kết hợp với măng tây cuộn thịt hun khói tạo nên món ăn có giá trị dinh dương cao và sang trọng. Tuy nhiên các bạn có thể hoàn toàn làm tại nhà cho gia đình thưởng thức. Và thậm chí tạo nên một buổi tối lãng mạng cùng với người yêu trong gian bếp ấm cúng của bạn với món Steak Cá Hồi này', '450000', 2),
(47, 1, 'Nem cuốn', 'special-menu-3.jpg', 'Chả giò hay còn gọi là nem rán, chả ram, chả cuốn… là món đặc trưng của người Việt, có ở tất cả 3 miền. ', '150000', 2),
(48, 2, 'Steak bò', 'special-menu-4.jpg', 'Beefsteak chắc hẳn đã quá quen thuộc với người Việt Nam ta nhưng liệu bạn có muốn thử beefsteak chuẩn vị New York', '300000', 2),
(49, 2, 'Spaghetti', 'special-menu-5.jpg', 'Mì Ý sốt bò băm hay còn gọi là Spaghetti, là món ăn ngon và phổ biến, dùng kèm với hỗn hợp sốt cà chua và thịt bò bằm có nguồn gốc từ Italia.', '150000', 2);

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
  MODIFY `ma_hoa_don` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `ma_khach_hang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
  MODIFY `ma_thuc_don` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
