-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 21, 2023 lúc 11:07 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlydienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', 'admin123', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangsx`
--

CREATE TABLE `hangsx` (
  `id_hangsx` int(11) NOT NULL,
  `tenhang` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hangsx`
--

INSERT INTO `hangsx` (`id_hangsx`, `tenhang`, `thutu`) VALUES
(11, 'Nokia', 1),
(20, 'iphone', 10),
(21, 'samsung', 9),
(23, 'Xaomi', 13),
(29, 'oppo', 20),
(30, 'vivo', 21),
(31, 'realme', 22),
(32, 'philips', 23),
(33, 'mobell', 24),
(34, 'mobistar', 25),
(35, 'coolpan', 26),
(36, 'motorola', 27);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `products_json` text DEFAULT NULL,
  `purchase_date` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `payment`
--

INSERT INTO `payment` (`id`, `user_id`, `products_json`, `purchase_date`, `status`, `total`) VALUES
(34, 3, '[{\"ma\":\"Hua3\",\"soluong\":1,\"date\":\"2023-06-26T07:15:56.189Z\"}]', '2023-06-26 09:21:15', 'Pending', 0.00),
(35, 3, '[{\"ma\":\"Hua3\",\"soluong\":1,\"date\":\"2023-06-26T07:15:56.189Z\"}]', '2023-06-26 09:22:31', 'Pending', 0.00),
(36, 3, '[{\"ma\":\"Xia3\",\"soluong\":1,\"date\":\"2023-06-26T07:23:04.342Z\"}]', '2023-06-26 09:23:39', 'Pending', 0.00),
(37, 7, '[{\"ma\":\"Xia3\",\"soluong\":1,\"date\":\"2023-06-26T07:24:25.093Z\"}]', '2023-06-26 09:24:49', 'Pending', 0.00),
(41, 3, '[{\"ma\":\"Hua3\",\"soluong\":1,\"date\":\"2023-06-26T07:43:01.376Z\"}]', '2023-06-26 09:43:08', 'Pending', 0.00),
(42, 3, '[{\"ma\":\"Nok1\",\"soluong\":1,\"date\":\"2023-06-26T09:10:34.266Z\"}]', '2023-06-26 11:10:37', 'Pending', 300000.00),
(43, 3, '[{\"ma\":\"Hua3\",\"soluong\":1,\"date\":\"2023-06-26T09:13:49.122Z\"},{\"ma\":\"Viv2\",\"soluong\":1,\"date\":\"2023-06-26T09:13:52.498Z\"}]', '2023-06-26 11:14:01', 'Pending', 0.00),
(44, 3, '[{\"ma\":\"Hua3\",\"soluong\":1,\"date\":\"2023-06-26T10:50:59.968Z\"}]', '2023-06-26 12:51:07', 'Pending', 0.00),
(45, 3, '[{\"ma\":\"Hua3\",\"soluong\":1,\"date\":\"2023-06-26T10:50:59.968Z\"}]', '2023-06-26 12:51:17', 'Pending', 200000.00),
(46, 3, '[{\"ma\":\"Hua3\",\"soluong\":1,\"date\":\"2023-06-26T10:50:59.968Z\"}]', '2023-06-26 12:51:49', 'Pending', 0.00),
(47, 3, '[{\"ma\":\"Hua3\",\"soluong\":1,\"date\":\"2023-06-26T10:50:59.968Z\"}]', '2023-06-26 12:51:53', 'Pending', 0.00),
(48, 3, '[{\"ma\":\"Xia2\",\"soluong\":2,\"date\":\"2023-06-26T10:58:33.599Z\"}]', '2023-06-26 12:59:49', 'Pending', 0.00),
(49, 3, '[{\"ma\":\"Xia2\",\"soluong\":2,\"date\":\"2023-06-26T10:58:33.599Z\"}]', '2023-06-26 13:00:29', 'Pending', 45000.00),
(50, 3, '[{\"ma\":\"Xia2\",\"soluong\":2,\"date\":\"2023-06-26T10:58:33.599Z\"}]', '2023-06-26 13:01:12', 'Pending', 5690000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `name` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `star` int(11) DEFAULT NULL,
  `rateCount` int(11) DEFAULT NULL,
  `promo_name` varchar(255) DEFAULT NULL,
  `promo_value` varchar(255) DEFAULT NULL,
  `screen` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL,
  `camara` varchar(255) DEFAULT NULL,
  `camaraFront` varchar(255) DEFAULT NULL,
  `cpu` varchar(255) DEFAULT NULL,
  `ram` varchar(255) DEFAULT NULL,
  `rom` varchar(255) DEFAULT NULL,
  `microUSB` varchar(255) DEFAULT NULL,
  `battery` varchar(255) DEFAULT NULL,
  `masp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`name`, `company`, `img`, `price`, `star`, `rateCount`, `promo_name`, `promo_value`, `screen`, `os`, `camara`, `camaraFront`, `cpu`, `ram`, `rom`, `microUSB`, `battery`, `masp`) VALUES
('SamSung Galaxy J4+', 'Samsung', 'img/products/samsung-galaxy-j4-plus-pink-400x400.jpg', '3.490.000', 3, 26, 'tragop', '0', 'IPS LCD, 6.0\', HD+', 'Android 8.1 (Oreo)', '13 MP', '5 MP', 'Qualcomm Snapdragon 425 4 nhân 64-bit', '2 GB', '16 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '3300 mAh', 'Sam0'),
('Xiaomi Mi 8 Lite', 'Xiaomi', 'img/products/xiaomi-mi-8-lite-black-1-600x600.jpg', '6.690.000', 0, 0, 'tragop', '0', 'IPS LCD, 6.26\', Full HD+', 'Android 8.1 (Oreo)', '12 MP và 5 MP (2 camera)', '24 MP', 'Qualcomm Snapdragon 660 8 nhân', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '3300 mAh, có sạc nhanh', 'Xia0'),
('Oppo F9', 'Oppo', 'img/products/oppo-f9-red-600x600.jpg', '7.690.000', 5, 188, 'giamgia', '500.000', 'LTPS LCD, 6.3\', Full HD+', 'ColorOS 5.2 (Android 8.1)', '16 MP và 2 MP (2 camera)', '25 MP', 'MediaTek Helio P60 8 nhân 64-bit', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '3500 mAh, có sạc nhanh', 'Opp0'),
('Nokia 5.1 Plus', 'Nokia', 'img/products/nokia-51-plus-black-18thangbh-400x400.jpg', '4.790.000', 5, 7, 'giamgia', '250.000', 'IPS LCD, 5.8\', HD+', 'Android One', '13 MP và 5 MP (2 camera)', '8 MP', 'MediaTek Helio P60 8 nhân 64-bit', '3 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '3060 mAh, có sạc nhanh', 'Nok0'),
('Samsung Galaxy A8+ (2018)', 'Samsung', 'img/products/samsung-galaxy-a8-plus-2018-gold-600x600.jpg', '11.990.000', 0, 0, 'giamgia', '1.500.000', 'Super AMOLED, 6\', Full HD+', 'Android 7.1 (Nougat)', '16 MP', '16 MP và 8 MP (2 camera)', 'Exynos 7885 8 nhân 64-bit', '6 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '3500 mAh, có sạc nhanh', 'Sam1'),
('iPhone X 256GB Silver', 'Apple', 'img/products/iphone-x-256gb-silver-400x400.jpg', '31.990.000', 4, 10, 'giareonline', '27.990.000', 'OLED, 5.8\', Super Retina', 'iOS 11', '2 camera 12 MP', '7 MP', 'Apple A11 Bionic 6 nhân', '3 GB', '256 GB', 'Không', '2716 mAh, có sạc nhanh', 'App0'),
('Oppo A3s 32GB', 'Oppo', 'img/products/oppo-a3s-32gb-600x600.jpg', '4.690.000', 0, 0, 'tragop', '0', 'IPS LCD, 6.2\', HD+', 'Android 8.1 (Oreo)', '13 MP và 2 MP (2 camera)', '8 MP', 'Qualcomm Snapdragon 450 8 nhân 64-bit', '3 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4230 mAh', 'Opp1'),
('Samsung Galaxy J8', 'Samsung', 'img/products/samsung-galaxy-j8-600x600-600x600.jpg', '6.290.000', 0, 0, 'giamgia', '500.000', 'Super AMOLED, 6.0\', HD+', 'Android 8.0 (Oreo)', '16 MP và 5 MP (2 camera)', '16 MP', 'Qualcomm Snapdragon 450 8 nhân 64-bit', '3 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '3500 mAh', 'Sam2'),
('iPad 2018 Wifi 32GB', 'Apple', 'img/products/ipad-wifi-32gb-2018-thumb-600x600.jpg', '8.990.000', 0, 0, 'tragop', '0', 'LED-backlit LCD, 9.7p\'', '	iOS 11.3', '8 MP', '1.2 MP', 'Apple A10 Fusion, 2.34 GHz', '2 GB', '32 GB', 'Không', 'Chưa có thông số cụ thể', 'App1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `id_hangsx` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `giaban` varchar(50) NOT NULL,
  `khuyenmai` varchar(100) NOT NULL,
  `thongso` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensp`, `id_hangsx`, `hinhanh`, `giaban`, `khuyenmai`, `thongso`) VALUES
(21, 'Điện thoại Nokia black future', 11, '1689866359_mobiistar-b310-orange-600x600.jpg', '999.999.000', 'KHUYẾN MÃI  Khách hàng sẽ được giảm 1.000₫ khi tới mua trực tiếp tại cửa hàng', 'Màn hình4K, Chống nước, Chống trầy\r\nHệ điều hànhiOS + Android song song\r\nCamara trướcChuẩn thế giới 50MP\r\nCPU16 nhân 128 bit\r\nRAMKhông giới hạn\r\nBộ nhớ trongDùng thoải mái\r\nThẻ nhớKhông cần\r\nDung lượng pin'),
(24, 'galaxy ultra s13', 30, '1689867752_huawei-mate-20-pro-green-600x600.jpg', '999.999.000', 'KHUYẾN MÃI  Khách hàng sẽ được giảm 1.000₫ khi tới mua trực tiếp tại cửa hàng', 'Từ 256GB đến 512GB ổ SSD hoặc ổ cứng HDD. Một số máy mới hơn có thể sử dụng ổ SSD PCIe nhanh hơn.'),
(25, 'Điện thoại Vivo Y71', 30, '1689868221_mobiistar-zumbo-s2-dual-300x300.jpg', '500000', 'KHUYẾN MÃI  Khách hàng sẽ được giảm 250.000₫ khi tới mua trực tiếp tại cửa hàng', 'Kích thước màn hình thường từ 13 inch đến 15.6 inch.\r\nĐộ phân giải thường là Full HD (1920 x 1080 pixel) hoặc cao hơn như 4K (3840 x 2160 pixel) cho màn hình cao cấp.'),
(26, 'Điện thoại SamSung Galaxy J4+', 21, '1689868268_oppo-a3s-32gb-600x600.jpg', '7.490.000', 'KHUYẾN MÃI  Khách hàng sẽ được giảm 800.000₫ khi tới mua trực tiếp tại cửa hàng', 'Bàn phím có đèn nền.\r\nCảm biến vân tay.\r\nLoa kép và âm thanh được tối ưu hóa bởi các công nghệ âm thanh như Dolby Atmos.'),
(27, 'Điện thoại Nokia black future', 11, '1689868370_hinh-nen-dt-1280.jpg', '4.790.000', 'KHUYẾN MÃI  Khách hàng sẽ được giảm 1.000₫ khi tới mua trực tiếp tại cửa hàng', 'Dung lượng pin thường từ 3.000 mAh đến 5.000 mAh, tùy thuộc vào loại máy và kích thước pin.'),
(28, 'Điện thoại Nokia 5.1 Plus', 11, '1689868432_huawei-mate-20-pro-green-600x600.jpg', '999.999.000', 'KHUYẾN MÃI  Khách hàng sẽ được giảm 250.000₫ khi tới mua trực tiếp tại cửa hàng', 'Kích thước màn hình thường từ 13 inch đến 15.6 inch.\r\nĐộ phân giải thường là Full HD (1920 x 1080 pixel) hoặc cao hơn như 4K (3840 x 2160 pixel) cho màn hình cao cấp.'),
(29, 'Điện thoại Samsung Galaxy J8', 21, '1689868500_samsung-galaxy-j4-plus-pink-400x400.jpg', '4.790.000', 'KHUYẾN MÃI  Khách hàng sẽ được giảm 1.000₫ khi tới mua trực tiếp tại cửa hàng', 'Đồ họa tích hợp trong bộ vi xử lý hoặc bộ xử lý đồ họa riêng biệt (GPU) từ Nvidia hoặc AMD. Ví dụ: Nvidia GeForce hoặc AMD Radeon.'),
(30, 'Điện thoại Samsung Galaxy A7', 21, '1689868551_tải xuống (1).jpg', '7.490.000', 'KHUYẾN MÃI  Khách hàng sẽ được giảm 800.000₫ khi tới mua trực tiếp tại cửa hàng', 'Tối thiểu từ 8GB RAM trở lên để đảm bảo hiệu suất tốt khi sử dụng nhiều ứng dụng cùng một lúc.'),
(31, 'iphone 8s', 20, '1689868633_iphone-8-64gb-hh-600x600.jpg', '999.999.000', 'KHUYẾN MÃI  Khách hàng sẽ được giảm 250.000₫ khi tới mua trực tiếp tại cửa hàng', 'Kích thước màn hình thường từ 13 inch đến 15.6 inch.\r\nĐộ phân giải thường là Full HD (1920 x 1080 pixel) hoặc cao hơn như 4K (3840 x 2160 pixel) cho màn hình cao cấp.'),
(32, 'iphone 14 Promax', 20, '1689868702_iphone-14-pro-max-den-thumb-600x600.jpg', '39.999.999', 'KHUYẾN MÃI  Khách hàng sẽ được giảm 250.000₫ khi tới mua trực tiếp tại cửa hàng', 'Kích thước màn hình thường từ 13 inch đến 15.6 inch.\r\nĐộ phân giải thường là Full HD (1920 x 1080 pixel) hoặc cao hơn như 4K (3840 x 2160 pixel) cho màn hình cao cấp.'),
(33, 'iphone 7s Plus', 20, '1689868739_tải xuống.jpg', '7.490.000', 'KHUYẾN MÃI  Khách hàng sẽ được giảm 1.000₫ khi tới mua trực tiếp tại cửa hàng', 'Kích thước màn hình thường từ 13 inch đến 15.6 inch.\r\nĐộ phân giải thường là Full HD (1920 x 1080 pixel) hoặc cao hơn như 4K (3840 x 2160 pixel) cho màn hình cao cấp.'),
(34, 'iphone Xs', 20, '1689868787_iphone-x-256gb-silver-400x400.jpg', '9.490.000', 'KHUYẾN MÃI  Khách hàng sẽ được giảm 800.000₫ khi tới mua trực tiếp tại cửa hàng', 'Kích thước màn hình thường từ 13 inch đến 15.6 inch.\r\nĐộ phân giải thường là Full HD (1920 x 1080 pixel) hoặc cao hơn như 4K (3840 x 2160 pixel) cho màn hình cao cấp.'),
(35, 'Điện thoại Mobiistar X', 33, '1689868844_mobiistar-x-3-600x600.jpg', '5.000.000', 'KHUYẾN MÃI  Khách hàng sẽ được giảm 250.000₫ khi tới mua trực tiếp tại cửa hàng', 'Điện thoại Mobiistar X'),
(36, 'Điện thoại Mobiistar E Selfie', 33, '1689868958_mobiistar-zumbo-s2-dual-300x300.jpg', '1.000.000', '60%', 'Hệ điều hành: Windows 10 (hoặc phiên bản mới nhất tại thời điểm mua máy)\r\n\r\nHoặc có thể là một hệ điều hành Chrome OS nếu đó là một Chromebook.\r\nBộ vi xử lý (CPU):\r\n\r\nThường là Intel Core hoặc AMD Ryzen. Ví dụ: Intel Core i5 hoặc AMD Ryzen 7.'),
(37, 'Điện thoại Oppo A3s 32GB', 29, '1689869028_oppo-a3s-32gb-600x600.jpg', '999.999.000', 'KHUYẾN MÃI  Khách hàng sẽ được giảm 250.000₫ khi tới mua trực tiếp tại cửa hàng', 'Hệ điều hành: Windows 10 (hoặc phiên bản mới nhất tại thời điểm mua máy)\r\n\r\nHoặc có thể là một hệ điều hành Chrome OS nếu đó là một Chromebook.\r\nBộ vi xử lý (CPU):\r\n\r\nThường là Intel Core hoặc AMD Ryzen. Ví dụ: Intel Core i5 hoặc AMD Ryzen 7.'),
(38, 'Điện thoại Oppo K3s 32GB', 29, '1689869091_tải xuống (2).jpg', '7.490.000', 'KHUYẾN MÃI  Khách hàng sẽ được giảm 1.000₫ khi tới mua trực tiếp tại cửa hàng', 'Hệ điều hành: Windows 10 (hoặc phiên bản mới nhất tại thời điểm mua máy)\r\n\r\nHoặc có thể là một hệ điều hành Chrome OS nếu đó là một Chromebook.\r\nBộ vi xử lý (CPU):\r\n\r\nThường là Intel Core hoặc AMD Ryzen. Ví dụ: Intel Core i5 hoặc AMD Ryzen 7.'),
(39, ' Điện thoại Xiaomi Redmi A1 2GB/32GB Xanh dương - Hàng chính hãng', 23, '1689869195_xiaomi-mi-8-lite-black-1-600x600.jpg', '5.000.000', 'KHUYẾN MÃI  Khách hàng sẽ được giảm 1.000₫ khi tới mua trực tiếp tại cửa hàng', 'Hệ điều hành: Windows 10 (hoặc phiên bản mới nhất tại thời điểm mua máy)\r\n\r\nHoặc có thể là một hệ điều hành Chrome OS nếu đó là một Chromebook.\r\nBộ vi xử lý (CPU):\r\n\r\nThường là Intel Core hoặc AMD Ryzen. Ví dụ: Intel Core i5 hoặc AMD Ryzen 7.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `support`
--

INSERT INTO `support` (`id`, `full_name`, `phone_number`, `email`, `subject`, `message`, `created_at`) VALUES
(6, 'hungvo2', '03789978232', 'hungvo2@gmail.com', 'hungvo', 'hungvo', '2023-06-26 08:01:11'),
(7, '', '', '', '', '', '2023-06-26 08:30:09'),
(8, 'hùng võ 06', '03789978232', 'hungvo06@gmail.com', 'Hỗ trợ dịch vụ ', 'Quý khách có thể liên hệ với chúng tôi bằng cách hoàn tất biểu mẫu dưới đây. Chúng tôi sẽ trả lời thư của quý khách trong thời gian sớm nhất.', '2023-06-26 08:30:09'),
(9, '', '', '', '', '', '2023-06-26 09:14:35'),
(10, 'hùng võ 3', '03789978232', 'hungvo03@gmail.com', 'Hỗ trợ vấn đề thanh toán', 'Thanh toán bị lỗi 304', '2023-06-26 09:14:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id_tintuc` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `tacgia` varchar(255) NOT NULL,
  `tgian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id_tintuc`, `tieude`, `hinhanh`, `noidung`, `tacgia`, `tgian`) VALUES
(5, 'Samsung Electronics đang mất đà tăng trưởng?', '1689854723_oppo-a3s-32gb-600x600.jpg', 'Khi các mảng kinh doanh bán dẫn, smartphone, gia dụng đều đi lùi, ', 'Công nghệ', '8 Giờ'),
(6, 'Đánh giá smartphone chip S660, RAM 8 GB, giá 6,99 triệu tại Việt Nam', '1689854732_mobiistar-zumbo-s2-dual-300x300.jpg', '(DNVN) - Tại thị trường Việt Nam, Realme 2 Pro được bán với giá cao nhất 6,99 triệu đồng..', 'Công nghệ', '15 phút'),
(7, 'Doanh số iPhone XS và iPhone XR thảm hại, Apple sản xuất lại iPhone X', '1689854760_iphone-x-256gb-silver-400x400.jpg', 'Apple đã quyết định sản xuất lại mẫu iPhone X sau khi doanh số thu được từ iPhone XS/XS Max .', 'Sơn Nguyễn', 'Thứ Hai, 14:19, 26/11/2022'),
(8, ' Realme sắp tung smartphone có camera 200MP, sạc nhanh 100W', '1689854149_tintuc3.png', 'Đây là smartphone đầu tiên thuộc dòng số của Realme được trang bị camera 200MP với khả năng zoom...', 'Thảo Đặng', 'Thứ Năm, 18:55, 21/7/2023'),
(9, 'Nokia 150 thế hệ mới ra mắt với giá chỉ 709.000 đồng', '1689854826_mobiistar-b310-orange-600x600.jpg', 'HMD Global đã chính thức giới thiệu mẫu điện thoại phổ thông mới nhất của mình là Nokia', 'Nghĩa Trang', 'Thứ Năm, 18:55, 17/6/2023'),
(10, 'Honor gây sốc với chiếc smartphone 5G giá siêu rẻ', '1689854873_mobiistar-e-selfie-300-1copy-600x600.jpg', 'Khi các mảng kinh doanh bán dẫn, smartphone, gia dụng đều đi lùi, ban lãnh đạo Samsung dường như chưa tìm được chiến lược vượt khó.', 'Hằng Quang', '12 giờ trước');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuyendung`
--

CREATE TABLE `tuyendung` (
  `id_tuyendung` int(11) NOT NULL,
  `tencv` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `thoigian` varchar(255) NOT NULL,
  `diadiem` varchar(255) NOT NULL,
  `yeucau` varchar(255) NOT NULL,
  `quyenloi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tuyendung`
--

INSERT INTO `tuyendung` (`id_tuyendung`, `tencv`, `mota`, `thoigian`, `diadiem`, `yeucau`, `quyenloi`) VALUES
(3, 'NHÂN VIÊN BÁN HÀNG', 'Vui vẻ, lịch sự chào đón khi khách vào cửa hàng.\r\nTìm hiểu nhu cầu, tư vấn các thông tin về: Sản phẩm, dịch vụ, chương trình khuyến mãi, hậu mãi cho khách hàng.\r\nSắp xếp sản phẩm gọn gàng, hợp lý, vệ sinh cửa hàng khi hết ca làm việc.\r\nNắm bắt, cập nhật t', 'Từ 18h – 21h30 các ngày trong tuần Nghỉ 3 ngày/ tháng', 'Ngõ 132/78 , Nam Từ Niêm , Hà Nội', 'Nam/Nữ, tuổi từ 18 - 25. Ngoại hình khá, thân thiện, niềm nở. Có kỹ năng giao tiếp, thuyết phục, đàm phán tốt với khách hàng. Kiên trì, năng động, trung thực, nhiệt tình. Yêu thích công nghệ, giao tiếp, chăm sóc khách hàng. Ưu tiên các ứng viên đã làm việ', 'hu nhập: 3.000.000 - 4.000.000 VNĐ/tháng. Hoa hồng hưởng theo doanh thu bán hàng của cửa hàng. Thưởng thêm theo tăng trưởng cửa hàng. Phụ cấp, thưởng thêm theo chế độ công ty (Làm thêm, gửi xe, sinh nhật, Lễ tết….) Hưởng đầy đủ các chính sách theo luật la'),
(4, 'DEPLOYMENT - CHUYÊN VIÊN TRIỂN KHAI VẬN HÀNH', 'Gọi điện tư vấn thông tin cho khách hàng dựa trên data nóng từ Marketing.\r\nThuyết phục khách hàng đưa ra quyết định mua và hướng dẫn thanh toán.\r\nNhập kết quả chăm sóc/Nhập đơn hàng lên hệ thống CRM để theo dõi tình trạng contact/đơn hàng.\r\nHỗ trợ khách h', 'Từ 18h – 21h30 các ngày trong tuần Nghỉ 3 ngày/ tháng', 'CS1: Tầng 6, Toà C, 22 Thành Công CS2: Tầng 2, 29T1 Hoàng Đạo Thuý CS3: Tầng 6, 107 Nguyễn Phong Sắc CS4: Tầng 5, 71 Nguyễn Chí Thanh CS5: Tầng 4, Hòa Bình Green City 505 Minh Khai CS6: số 6 Nguyễn Hoàng, Mỹ Đình CS7: Toà Hồ Gươm Plaza 102 Trần Phú CS8: S', 'Nữ, có khả năng làm việc full - time Yêu thích công việc tư vấn, chăm sóc khách hàng. Có kinh nghiệm làm sales là một lợi thế. Giọng nói dễ nghe, nhanh nhẹn, trách nhiệm với công việc.', '- Lương cứng theo bậc từ rank 1 tới 6, lương cứng tương ứng từ 5.800.000 tới 16.500.000 VNĐ/tháng. - COM vận hành: 1-1,5% Doanh thu vận hành - Tương đương 3.000.000 - 5.000.0000 VNĐ/tháng. - COM Upsales: 10-30% Doanh thu upsales - Tương đương 1.000.000 - '),
(5, '[HN] Android Developer', 'Phát triển App bằng Android cho hệ thống của khách hàng (Nhật Bản, Việt Nam).\r\nPhát triển hệ thống mới hoặc bảo trì hệ thống cũ theo yêu cầu của dự án.\r\nTư vấn thiết kế giải pháp, đóng góp ý kiến để phát triển sản phẩm/dự án.\r\nThực hiện estimate công việc', 'Từ 18h – 21h30 các ngày trong tuần Nghỉ 3 ngày/ tháng', 'Vĩnh phúc', 'Giao tiếp chủ động với đồng nghiệp. Sẵn sàng học hỏi các công nghệ mới cũng như chuyển đổi công nghệ. Tiếng Anh đọc hiểu tài liệu. Cầu thị trong công việc, có tinh thần trách nhiệm cao. Kỹ năng làm việc độc lập/làm việc nhóm tốt.', 'Thu nhập: upto 30 triệu; 13 tháng lương/năm; thưởng dự án 6 tháng/lần. Phụ cấp ăn trưa 730.000 VNĐ, thưởng 300.000 VNĐ quà sinh nhật và các loại thưởng khác (Thưởng thành tích, thưởng cá nhân xuất sắc, thưởng đạt chứng chỉ ngoại ngữ/chuyên môn từ 1.000.00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ho` varchar(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `ho`, `ten`, `email`) VALUES
(3, 'hungvo', '123456', 'hung', 'vo', 'hungvo@gmail.com'),
(7, 'hungvo2', '123456', 'hung', 'vo2', 'hungvo2@gmail.com'),
(8, 'user1', 'password1', 'Nguyen', 'Van A', 'user1@example.com'),
(9, 'user2', 'password2', 'Tran', 'Thi B', 'user2@example.com'),
(10, 'user3', 'password3', 'Le', 'Minh C', 'user3@example.com'),
(11, 'user4', 'password4', 'Pham', 'Tuan D', 'user4@example.com'),
(12, 'user5', 'password5', 'Vo', 'Thu E', 'user5@example.com'),
(13, 'user6', 'password6', 'Hoang', 'Quoc F', 'user6@example.com'),
(14, 'user7', 'password7', 'Truong', 'Hai G', 'user7@example.com'),
(15, 'user8', 'password8', 'Ngo', 'Thien H', 'user8@example.com'),
(16, 'user9', 'password9', 'Dinh', 'Thi I', 'user9@example.com'),
(17, 'user10', 'password10', 'Vu', 'Van K', 'user10@example.com'),
(18, 'user11', 'password11', 'Bui', 'Ngoc L', 'user11@example.com'),
(19, 'user12', 'password12', 'Trinh', 'Thi M', 'user12@example.com'),
(20, 'user13', 'password13', 'Ha', 'Tuan N', 'user13@example.com'),
(21, 'user14', 'password14', 'Luong', 'Hai P', 'user14@example.com'),
(22, 'user15', 'password15', 'Mai', 'Thi Q', 'user15@example.com'),
(23, 'user16', 'password16', 'Do', 'Van S', 'user16@example.com'),
(24, 'user17', 'password17', 'Tran', 'Minh T', 'user17@example.com'),
(25, 'user18', 'password18', 'Nguyen', 'Tuan V', 'user18@example.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `hangsx`
--
ALTER TABLE `hangsx`
  ADD PRIMARY KEY (`id_hangsx`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_tintuc`);

--
-- Chỉ mục cho bảng `tuyendung`
--
ALTER TABLE `tuyendung`
  ADD PRIMARY KEY (`id_tuyendung`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hangsx`
--
ALTER TABLE `hangsx`
  MODIFY `id_hangsx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_tintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tuyendung`
--
ALTER TABLE `tuyendung`
  MODIFY `id_tuyendung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
