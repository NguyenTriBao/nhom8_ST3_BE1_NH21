-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 06, 2022 lúc 06:36 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom8`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhapuser`
--

DROP TABLE IF EXISTS `dangnhapuser`;
CREATE TABLE IF NOT EXISTS `dangnhapuser` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangnhapuser`
--

INSERT INTO `dangnhapuser` (`userid`, `username`, `password`) VALUES
(1, 'hoangtan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'baopro@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'ht205@gmail.com', 'b630990075e84cee4c130c4cd86f0e50'),
(6, 'ht205@gmail.com', 'b630990075e84cee4c130c4cd86f0e50'),
(7, 'bao12@gmail.com', 'b630990075e84cee4c130c4cd86f0e50'),
(8, 'nhom8@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `MaKH` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `Tongtien` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaKH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `MaKH` int(11) NOT NULL AUTO_INCREMENT,
  `NameKH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` int(10) NOT NULL,
  PRIMARY KEY (`MaKH`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `NameKH`, `Email`, `Address`, `Phone`) VALUES
(2, 'Bao', 'tribao0510@gmail.com', 'Thủ Đức', 123455),
(4, 'Trần Hoàng Tân', '20211tt2057@mail.tdc.edu.vn', 'Thủ Đức', 12356978),
(13, 'tan', 'sad@gmail.com', 'thuduc', 1234567),
(15, 'NJ', 'iuu2@gmail.com', 'so 4 nguyen kim', 368390949);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'Apple'),
(2, 'SamSung'),
(3, 'Oppo'),
(4, 'LG'),
(5, 'Xiaome');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(20) NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `feature` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) VALUES
(1, 'Điện Thoại Xiaomi Redmi Note 10 Pro (8GB/128GB) - Hàng Chính Hãng', 5, 1, 7039000, '247890605_333214368606787_4063868311176915672_n.png', 'Thể hiện đẳng cấp Pro trong mức giá bình dân, Xiaomi Redmi Note 10 Pro mang đến cho người dùng chiếc điện thoại thực sự mạnh mẽ với bộ vi xử lý Snapdragon 732G, màn hình 120Hz và 4 camera 108MP chuyên nghiệp.', NULL, NULL),
(2, 'Apple MacBook Pro M1 2020 - 13 Inchs (8GB / 16GB - 256GB / 512GB) - Hàng Chính Hãng', 1, 2, 36390000, '246281145_4726735124050925_3968774957998065073_n.png', 'MacBook Pro 13 inch mới với chip Silicon M1 là một dòng sản phẩm quan trọng, được so sánh với MacBook hiện có về mặt hiệu suất. Apple đang “chạy nước rút” để chuyển tất cả các máy Mac của mình từ bộ vi xử lý dựa trên Intel sang Apple Silicon.', NULL, NULL),
(3, 'Vòng Đeo Tay Thông Minh OPPO Band | Đo Nồng Độ Oxy Trong Máu SPO2 | Chóng Nước 5ATM | Hàng Chính Hãng', 3, 3, 690000, '246777311_914544312824927_303875867993619147_n.png', 'Màn hình màu HD 1.14 inch, thiết kế thời trang, tinh tế\r\n\r\nTrang bị cảm biến HR mới nhất giúp đo chính xác nhịp tim và huyết áp, theo dõi giấc ngủ, nhắc nhở vận động\r\n\r\nChế độ thể thao đa dạng như chạy bộ, đi bộ, cầu lông, bóng rổ, đạp xe, bóng đá\r\n\r\nCác tính năng khác: đếm bước chân, tính calo tiêu thụ, bấm giờ, báo thức, tìm điện thoại, dự báo thời tiết\r\n\r\nChống nước IP67 không thấm mồ hôi, nước mưa, an toàn trong sinh hoạt hàng ngày', NULL, NULL),
(4, 'Chuột gaming Logitech G302 (Đen)', 4, 5, 679000, '248340936_230514065672168_3411480781234036533_n.png', 'Chuột được thiết kế cho Game thủ chuyên nghiệp. G302 MOBA Gaming Mouse.\r\nChuột Logitech G302 sử dụng cảm biến quang học công nghệ Logitech Delta Zero™.\r\nTích hợp 6 nút có thể lập trình được, gán các tác vụ khác nhau được trên chuột.\r\nCho phép chuyển đổi DPI từ 240 DPI đến 4000 DPI ngay tức thì bằng phím bấm trên chuột.', NULL, NULL),
(5, 'Smart TV 8K Neo QLED 65 inch QN800A 2021', 2, 4, 89896847, '246187981_383985936784673_6645112879131761606_n.png', 'Xem hình ảnh 8K có chiều sâu, tự nhiên và chân thực. Bộ xử lý đột phá sử dụng dữ liệu phân tích góc nhìn của người để phân tích chéo và tối ưu hóa hàng trăm nghìn yếu tố trong chớp mắt. Kết hợp với độ chính xác của màn hình Full Array LED, hình ảnh trên màn hình sẽ nổi bật với màu đen thuần khiết và ánh sáng rực rỡ.', NULL, NULL),
(6, 'Tivi Thông Minh Xiaomi Mi TV 3S 65 inch Chính Hãng', 5, 4, 29000000, 'Tivi-Thông-Minh-Xiaomi-Mi-TV-3S-65-inch-Cong', '+ Độ phân giải 4K, siêu mỏng chỉ 5.9 mmm, màn cong ấn tượng.\r\n+ Âm thanh AKG đẳng cấp mang rạp hát tới gia đình bạn.', NULL, NULL),
(7, 'Xiaomi Mi Watch Phiên bản Esim (4G/LTE)', 5, 3, 3490000, 'xiaomi-mi-watch-background-ldstore15', 'Đồng hồ thông minh Xiaomi Mi Watch Lite gây ấn tượng với người dùng bởi thiết kế độc đáo. Thay vì màn hình tròn như thế hệ trước thì Mi Watch Lite được trang bị mặt vuông với 4 góc bo tròn mềm mại. Bên cạnh đó, khung viền của đồng hồ được làm bằng nhôm chắc chắn mang đến sự sang trọng và bền bỉ vượt trội.', NULL, NULL),
(8, 'iPhone 13 mini 128GB', 1, 1, 21990000, '242105749_1492765804393520_8065572412285556047_n.png', NULL, NULL, NULL),
(9, 'Apple Watch S6 40mm viền nhôm dây cao su', 1, 3, 9592000, '242121627_995650051268222_789899961679756113_n.png', NULL, NULL, NULL),
(11, 'iMac 27 inch 5K 2015 2TB - MK482', 1, 4, 899000, '248372567_1271254543298127_4533212217173831323_n.png', NULL, NULL, NULL),
(12, 'Điện thoại Samsung Galaxy Z Fold3 5G 512GB', 2, 1, 43990000, '247347636_385193669930626_2339119314075010783_n.png', NULL, NULL, NULL),
(13, 'Samsung Galaxy Book S NT767XCM-K38(S) notebook Laptop Wi-Fi i3 8GB 256GB eUFS', 2, 2, 29545227, '247021132_465380708599812_4138484909712096210_n', NULL, NULL, NULL),
(14, 'Samsung Galaxy Watch Active 2 40mm R830 Aluminum', 2, 3, 2799000, '185352700_317720579871499_7506089681429268737_n.png', NULL, NULL, NULL),
(15, 'Chuột Bluetooth chính hãng Samsung (S Action Mouse - ET-MP900)\r\n', 2, 5, 850000, '247288534_1550870615265743_3842609017018101252_n.png', NULL, NULL, NULL),
(16, 'OPPO Reno5 4G', 3, 1, 7699000, '154719513_247509047013532_3877042753535254582_n.png', NULL, NULL, NULL),
(17, 'Laptop Fujitsu CH 9C13A1 i5 1135G7/8GB/512GB/13.3\"FHD/Win 10', 3, 2, 23999000, '247546049_3048848045388915_4771104980930291404_n.png', NULL, NULL, NULL),
(18, 'OPPO TV S1', 3, 4, 11500000, 'oppo-ra-mat-smart-tv-dau-tien-65-inch-120hz-ram-1.jpg', NULL, NULL, NULL),
(19, 'LG Wing 5G (8GB - 128GB) Like New 99%', 4, 1, 8690000, '247602435_602768141156472_4007878588553723644_n.png', NULL, NULL, NULL),
(20, 'Laptop LG Gram 2021 17Z90P-G.AH78A5 (Core i7-1165G7/ 16GB LPDDR4X/ 1TB SSD NVMe/ 17 WQXGA IPS/ Win10)', 4, 2, 54890000, '248341946_1885014611705426_5805991681142187674_n.png', NULL, NULL, NULL),
(21, 'Đồng Hồ LG Watch Urbane ( Mới 99% )', 4, 3, 2390000, '242167647_571969700792942_3835664710325771105_n.png', NULL, NULL, NULL),
(22, 'LG C1 48 inch 4K Smart OLED TV', 4, 4, 31900000, '247417484_246243394191936_5490284047560308014_n.png', NULL, NULL, NULL),
(29, 'Điện thoại iPhone 13 mini 128GB', 1, 1, 21490000, '249813558_567183331251699_7330875185991078430_n', 'Màn hình:OLED5.4\"Super Retina XDR\r\nHệ điều hành:iOS 15\r\nCamera sau:2 camera 12 MP\r\nCamera trước:12 MP\r\nChip:Apple A15 Bionic\r\nRAM:4 GB\r\nBộ nhớ trong:128 GB\r\nSIM:1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:2438 mAh20 W', NULL, '2021-11-02 07:15:20'),
(26, 'Điện thoại iPhone 12 64GB', 1, 1, 20490000, '248977812_301689128217245_6684279599008498579_n', 'Màn hình:\r\nOLED6.1\"Super Retina XDR\r\nHệ điều hành:\r\niOS 14\r\nCamera sau:\r\n2 camera 12 MP\r\nCamera trước:\r\n12 MP\r\nChip:\r\nApple A14 Bionic\r\nRAM:\r\n4 GB\r\nBộ nhớ trong:\r\n64 GB\r\nSIM:\r\n1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:\r\n2815 mAh20 W', NULL, '2021-11-02 07:07:11'),
(27, 'Điện thoại iPhone 13 Pro 128GB', 1, 1, 30490000, '249760403_2783269501963522_4871233321604545177_n', 'Màn hình:OLED6.1\"Super Retina XDR\r\nHệ điều hành:iOS 15\r\nCamera sau:3 camera 12 MP\r\nCamera trước:12 MP\r\nChip:Apple A15 Bionic\r\nRAM:6 GB\r\nBộ nhớ trong:128 GB\r\nSIM:1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:3095 mAh20 W', NULL, '2021-11-02 07:08:49'),
(28, 'Điện thoại iPhone 13 Pro 128GB', 1, 1, 30490000, '249760403_2783269501963522_4871233321604545177_n', 'Màn hình:OLED6.1\"Super Retina XDR\r\nHệ điều hành:iOS 15\r\nCamera sau:3 camera 12 MP\r\nCamera trước:12 MP\r\nChip:Apple A15 Bionic\r\nRAM:6 GB\r\nBộ nhớ trong:128 GB\r\nSIM:1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:3095 mAh20 W', NULL, '2021-11-02 07:09:18'),
(30, 'Điện thoại iPhone 13 mini 128GB', 1, 1, 21490000, '249813558_567183331251699_7330875185991078430_n', 'Màn hình:OLED5.4\"Super Retina XDR\r\nHệ điều hành:iOS 15\r\nCamera sau:2 camera 12 MP\r\nCamera trước:12 MP\r\nChip:Apple A15 Bionic\r\nRAM:4 GB\r\nBộ nhớ trong:128 GB\r\nSIM:1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:2438 mAh20 W', NULL, '2021-11-02 07:15:23'),
(31, 'Điện thoại iPhone 12 mini 64GB', 1, 1, 18990000, '250062983_715489589429114_558685145445293476_n', '\r\nOLED5.4\"Super Retina XDR\r\nHệ điều hành:iOS 14\r\nCamera sau:2 camera 12 MP\r\nCamera trước:12 MP\r\nChip:Apple A14 Bionic\r\nRAM:4 GB\r\nBộ nhớ trong:64 GB\r\nSIM:1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:2227 mAh20 W\r\n', NULL, '2021-11-02 07:17:08'),
(32, 'iPhone 7 Plus 256GB', 1, 1, 6790000, '251022530_438173411091356_855102393083584617_n', 'Bộ nhớ trong: 32 GB\r\nCamera sau: Chính 12 MP & Phụ 12 MP\r\nCamera trước: 7 MP\r\nCPU: Apple A10 Fusion 4 nhân\r\nDung lượng pin: 2900 mAh\r\nHệ điều hành: iOS 13\r\nMàn hình: LED-backlit IPS LCD, 5.5\", Retina HD\r\nRAM: 3 GB\r\nThẻ SIM: 1 Nano SIM, Hỗ trợ 4G\r\nTrọng lượng: 188 g\r\nThương hiệu: Apple', NULL, '2021-11-02 07:18:18'),
(33, 'Laptop Apple MacBook Pro M1 2020 16GB/512GB (Z11C) ', 1, 2, 44990000, '248354705_4457472191002031_1583913905587109210_n', 'CPU:Apple M1\r\nRAM:16 GB\r\nỔ cứng:512 GB SSD\r\nMàn hình:13.3\"Retina (2560 x 1600)\r\nCard màn hình:Card tích hợp8 nhân GPU\r\nCổng kết nối:2 x Thunderbolt 3 (USB-C)Jack tai nghe 3.5 mm\r\nĐặc biệt:Có đèn bàn phím\r\nHệ điều hành:Mac OS\r\nThiết kế:Vỏ kim loại nguyên khối Kích thước, trọng lượng:Dài 304.1 mm - Rộng 212.4 mm - Dày 15.6 mm - Nặng 1.4 kg', NULL, '2021-11-02 07:28:14'),
(34, 'Laptop Apple MacBook Pro 16 M1 Max 2021 10 core-CPU/32GB/1TB SSD/32 core-GPU (MK1A3SA/A)\r\n', 1, 2, 90990000, '251925447_875356239787036_2675178882309547184_n', 'CPU:Apple M1 Max400GB/s memory bandwidth\r\nRAM:32 GB\r\nỔ cứng:1 TB SSD\r\nMàn hình:16.2 inchLiquid Retina XDR display (3456 x 2234)120Hz\r\nCard màn hình:Card tích hợp32 core-GPU\r\nCổng kết nối:3 x Thunderbolt 4 USB-CHDMIJack tai nghe 3.5 mm\r\nĐặc biệt:Có đèn bàn phím\r\nHệ điều hành:Mac OS\r\nThiết kế:Vỏ kim loại nguyên khối\r\nKích thước, trọng lượng:Dài 355.7 mm - Rộng 248.1 mm - Dày 16.8 mm - Nặng 2.2 kg', NULL, '2021-11-02 07:28:14'),
(35, 'Laptop Apple MacBook Pro M1 2020 16GB/512GB (Z11C) ', 1, 2, 44990000, '248354705_4457472191002031_1583913905587109210_n', 'CPU:Apple M1\r\nRAM:16 GB\r\nỔ cứng:512 GB SSD\r\nMàn hình:13.3\"Retina (2560 x 1600)\r\nCard màn hình:Card tích hợp8 nhân GPU\r\nCổng kết nối:2 x Thunderbolt 3 (USB-C)Jack tai nghe 3.5 mm\r\nĐặc biệt:Có đèn bàn phím\r\nHệ điều hành:Mac OS\r\nThiết kế:Vỏ kim loại nguyên khối Kích thước, trọng lượng:Dài 304.1 mm - Rộng 212.4 mm - Dày 15.6 mm - Nặng 1.4 kg', NULL, '2021-11-02 07:29:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(20) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Dien Thoai'),
(2, 'LapTop'),
(3, 'Dong Ho'),
(4, 'Tivi'),
(5, 'Chuot'),
(8, 'Tai Nghe');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
