-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 04:45 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sotay`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangdiemrenluyen`
--

CREATE TABLE `bangdiemrenluyen` (
  `ID` bigint(25) NOT NULL,
  `MaSinhVien` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `NamHoc` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `HocKy` int(2) DEFAULT NULL,
  `LanCham` int(2) DEFAULT NULL,
  `DTB_HKtruoc` float DEFAULT NULL,
  `DTB_HKnay` float DEFAULT NULL,
  `Muc1_1` int(2) DEFAULT NULL,
  `Muc1_2` int(2) DEFAULT NULL,
  `Muc1_3` int(2) DEFAULT NULL,
  `Muc1_4` int(2) DEFAULT NULL,
  `Muc2_1` int(2) DEFAULT NULL,
  `Muc2_2` int(2) DEFAULT NULL,
  `Muc2_3` int(2) DEFAULT NULL,
  `Muc3_1` int(2) DEFAULT NULL,
  `Muc3_2` int(2) DEFAULT NULL,
  `Muc4_1` int(2) DEFAULT NULL,
  `Muc4_2` int(2) DEFAULT NULL,
  `Muc4_3` int(2) DEFAULT NULL,
  `Muc5_1` int(2) DEFAULT NULL,
  `Muc5_2` int(2) DEFAULT NULL,
  `Muc5_3` int(2) DEFAULT NULL,
  `Muc6` int(2) DEFAULT NULL,
  `TongDiem` int(4) DEFAULT NULL,
  `GhiChu` text COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `bangdiemrenluyen`
--

INSERT INTO `bangdiemrenluyen` (`ID`, `MaSinhVien`, `NamHoc`, `HocKy`, `LanCham`, `DTB_HKtruoc`, `DTB_HKnay`, `Muc1_1`, `Muc1_2`, `Muc1_3`, `Muc1_4`, `Muc2_1`, `Muc2_2`, `Muc2_3`, `Muc3_1`, `Muc3_2`, `Muc4_1`, `Muc4_2`, `Muc4_3`, `Muc5_1`, `Muc5_2`, `Muc5_3`, `Muc6`, `TongDiem`, `GhiChu`) VALUES
(1, '4151050048', '2020-2021', 1, 1, 5, 10, 22, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 37, ''),
(8, '4151050206', '2020-2021', 1, 1, 5, 10, 22, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 37, ''),
(9, '4151050206', '2020-2021', 1, 2, 5, 10, 22, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 37, '');

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinhhoc`
--

CREATE TABLE `chuongtrinhhoc` (
  `ID` bigint(25) NOT NULL,
  `MaKhoaHoc` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MaHocPhan` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MaChuyenNganh` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `chuongtrinhhoc`
--

INSERT INTO `chuongtrinhhoc` (`ID`, `MaKhoaHoc`, `MaHocPhan`, `MaChuyenNganh`) VALUES
(1, 'K41', '1130045', 'CNTT'),
(2, 'K41', '1090061', 'CNTT'),
(3, 'K41', '1010245', 'CNTT'),
(4, 'K41', '1010038', 'CNTT'),
(5, 'K41', '1050074', 'CNTT'),
(6, 'K41', '1050108', 'CNTT'),
(7, 'K41', '1050124', 'CNTT'),
(8, 'K41', '1120001', 'CNTT'),
(9, 'K41', '1130046', 'CNTT'),
(10, 'K41', '1090166', 'CNTT'),
(11, 'K41', '1050075', 'CNTT'),
(12, 'K41', '1010034', 'CNTT'),
(13, 'K41', '1050133', 'CNTT'),
(14, 'K41', '1050016', 'CNTT'),
(15, 'K41', '1120002', 'CNTT'),
(16, 'K41', '1120095', 'CNTT'),
(17, 'K41', '1120096', 'CNTT'),
(18, 'K41', '1120097', 'CNTT'),
(19, 'K41', '1130091', 'CNTT'),
(20, 'K41', '1130049', 'CNTT'),
(21, 'K41', '1010126', 'CNTT'),
(22, 'K41', '1050043', 'CNTT'),
(23, 'K41', '1050024', 'CNTT'),
(24, 'K41', '1050121', 'CNTT'),
(25, 'K41', '1050134', 'CNTT'),
(26, 'K41', '1120003', 'CNTT'),
(27, 'K41', '1130013', 'CNTT'),
(28, 'K41', '1050040', 'CNTT'),
(29, 'K41', '1050051', 'CNTT'),
(30, 'K41', '1050135', 'CNTT'),
(31, 'K41', '1050096', 'CNTT'),
(32, 'K41', '1050064', 'CNTT'),
(33, 'K41', '1050085', 'CNTT'),
(34, 'K41', '1050137', 'CNTT'),
(35, 'K41', '1120004', 'CNTT'),
(36, 'K41', '1050021', 'CNTT'),
(37, 'K41', '1050058', 'CNTT'),
(38, 'K41', '1050049', 'CNTT'),
(39, 'K41', '1050041', 'CNTT'),
(40, 'K41', '1050029', 'CNTT'),
(41, 'K41', '1050113', 'CNTT'),
(42, 'K41', '1050112', 'CNTT'),
(43, 'K41', '1050036', 'CNTT'),
(44, 'K41', '1050128', 'CNTT'),
(45, 'K41', '1050037', 'CNTT'),
(46, 'K41', '1050139', 'KHMT'),
(47, 'K41', '1050034', 'KHMT'),
(48, 'K41', '1050141', 'HTTT'),
(49, 'K41', '1050142', 'HTTT'),
(50, 'K41', '1050153', 'CNPM'),
(51, 'K41', '1050154', 'CNPM'),
(52, 'K41', '1050155', 'CNPM'),
(53, 'K41', '1050169', 'MMT'),
(54, 'K41', '1050170', 'MMT'),
(55, 'K41', '1050171', 'MMT'),
(56, 'K41', '1050156', 'CNPM'),
(57, 'K41', '1050157', 'CNPM'),
(58, 'K41', '1050158', 'CNPM'),
(59, 'K41', '1050159', 'CNPM'),
(60, 'K41', '1050160', 'CNPM'),
(61, 'K41', '1050161', 'CNPM'),
(62, 'K41', '1050162', 'CNPM'),
(63, 'K41', '1050163', 'CNPM'),
(64, 'K41', '1050164', 'CNPM'),
(65, 'K41', '1050165', 'CNPM'),
(66, 'K41', '1050166', 'CNPM'),
(67, 'K41', '1050167', 'CNPM'),
(68, 'K41', '1050168', 'CNPM'),
(69, 'K41', '1050123', 'KHMT'),
(70, 'K41', '1050015', 'KHMT'),
(71, 'K41', '1050012', 'KHMT'),
(72, 'K41', '1050140', 'KHMT'),
(73, 'K41', '1050186', 'KHMT'),
(74, 'K41', '1050187', 'KHMT'),
(75, 'K41', '1050188', 'KHMT'),
(76, 'K41', '1050189', 'KHMT'),
(77, 'K41', '1050011', 'HTTT'),
(78, 'K41', '1050143', 'HTTT'),
(79, 'K41', '1050144', 'HTTT'),
(80, 'K41', '1050145', 'HTTT'),
(81, 'K41', '1050146', 'HTTT'),
(82, 'K41', '1050147', 'HTTT'),
(83, 'K41', '1050148', 'HTTT'),
(84, 'K41', '1050149', 'HTTT'),
(85, 'K41', '1050150', 'HTTT'),
(86, 'K41', '1050151', 'HTTT'),
(87, 'K41', '1050152', 'HTTT'),
(88, 'K41', '1050190', 'HTTT'),
(89, 'K41', '1050172', 'MMT'),
(90, 'K41', '1050173', 'MMT'),
(91, 'K41', '1050174', 'MMT'),
(92, 'K41', '1050175', 'MMT'),
(93, 'K41', '1050176', 'MMT'),
(94, 'K41', '1050177', 'MMT'),
(95, 'K41', '1050178', 'MMT'),
(96, 'K41', '1050179', 'MMT'),
(97, 'K41', '1050138', 'CNTT'),
(98, 'K41', '1050102', 'CNTT'),
(99, 'K41', '1050115', 'CNTT'),
(100, 'K41', '1050180', 'KHMT'),
(101, 'K41', '1050011', 'KHMT'),
(102, 'K41', '1050050', 'HTTT'),
(103, 'K41', '1050181', 'HTTT'),
(104, 'K41', '1050182', 'CNPM'),
(105, 'K41', '1050183', 'CNPM'),
(106, 'K41', '1050184', 'MMT'),
(107, 'K41', '1050185', 'MMT');

-- --------------------------------------------------------

--
-- Table structure for table `chuyennganh`
--

CREATE TABLE `chuyennganh` (
  `MaChuyenNganh` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `TenChuyenNganh` text COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `chuyennganh`
--

INSERT INTO `chuyennganh` (`MaChuyenNganh`, `TenChuyenNganh`) VALUES
('CNPM', 'Công nghệ phần mềm'),
('CNTT', 'Công nghệ thông tin'),
('HTTT', 'Hệ thống thông tin'),
('KHMT', 'Khoa học máy tính'),
('KTPM', 'Kỹ thuật phần mềm'),
('MMT', 'Mạng máy tính');

-- --------------------------------------------------------

--
-- Table structure for table `dangkydiemrenluyen`
--

CREATE TABLE `dangkydiemrenluyen` (
  `NamHoc` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `HocKy` int(2) NOT NULL,
  `NgayBatDau` date DEFAULT NULL,
  `NgayKetThuc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `dangkydiemrenluyen`
--

INSERT INTO `dangkydiemrenluyen` (`NamHoc`, `HocKy`, `NgayBatDau`, `NgayKetThuc`) VALUES
('2017-2018', 1, '2021-04-01', '2021-04-02'),
('2017-2018', 2, '2021-04-03', '2021-04-04'),
('2019-2020', 2, '2021-03-31', '2021-04-10'),
('2020-2021', 1, '2021-04-10', '2021-04-27'),
('2020-2021', 2, '2021-04-28', '2021-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `dangkyhoatdong`
--

CREATE TABLE `dangkyhoatdong` (
  `MaHoatDong` bigint(25) NOT NULL,
  `MaSinhVien` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `ThamGia` text COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `dangkyhoatdong`
--

INSERT INTO `dangkyhoatdong` (`MaHoatDong`, `MaSinhVien`, `ThamGia`) VALUES
(1, '4151050048', 'Đăng ký'),
(2, '4151050048', 'Đăng ký'),
(3, '4151050019', 'Không tham gia'),
(4, '4151050048', 'Không tham gia'),
(4, '4151050050', 'Đã tham gia'),
(5, '4151050048', 'Không tham gia'),
(5, '4151050050', 'Không tham gia'),
(5, '4151050060', 'Đã tham gia'),
(5, '4151050206', 'Đã tham gia'),
(5, '4251050004', 'Đăng ký');

-- --------------------------------------------------------

--
-- Table structure for table `diemhoctap`
--

CREATE TABLE `diemhoctap` (
  `MaHocPhan` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `MaSinhVien` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `DTB` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `diemhoctap`
--

INSERT INTO `diemhoctap` (`MaHocPhan`, `MaSinhVien`, `DTB`) VALUES
('1050108', '4151050048', 3.9),
('1090061', '4151050019', 3.9),
('1090061', '4151050048', 3.9),
('1090166', '4151050048', 3),
('1120001', '4151050048', 10),
('1120096', '4151050048', 4.9),
('1120097', '4151050048', 5),
('1130045', '4151050019', 9.8),
('1130045', '4151050048', 5),
('1130046', '4151050048', 10);

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGiangVien` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `HoTen` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `GioiTinh` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `SDT` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MatKhau` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Quyen` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`MaGiangVien`, `HoTen`, `NgaySinh`, `GioiTinh`, `SDT`, `Email`, `MatKhau`, `Quyen`) VALUES
('Admin', 'Admin', NULL, NULL, NULL, NULL, 'Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoatdong`
--

CREATE TABLE `hoatdong` (
  `MaHoatDong` bigint(25) NOT NULL,
  `TenHoatDong` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `NgayDienRa` date DEFAULT NULL,
  `ThoiGianDienRa` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `NoiDung` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `NamHoc` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `HocKy` int(2) DEFAULT NULL,
  `KhoaThamGia` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `SoLuong` int(10) DEFAULT NULL,
  `File` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `hoatdong`
--

INSERT INTO `hoatdong` (`MaHoatDong`, `TenHoatDong`, `NgayDienRa`, `ThoiGianDienRa`, `NoiDung`, `NamHoc`, `HocKy`, `KhoaThamGia`, `SoLuong`, `File`) VALUES
(1, 'Dự lễ mít tinh kỷ niệm 90 năm ngày thành lập đoàn TNCS HCM', '2021-03-24', '13h', NULL, '2020-2021', 2, '41', 30, ''),
(2, 'Chương trình khai mạc ngày hội thanh niên công nhân 2021', '2021-03-26', '7h30', '- Thời gian: Có mặt lúc 7h30, ngày 26/3/2021.\n- Địa điểm: Tại Quảng trường Chiến Thắng, thành phố Quy Nhơn.\n- Trang phục: Mặc áo thanh niên, quần sẫm màu.', '2020-2021', 2, '41', 20, ''),
(3, 'Team building ngày 21/3', '2021-03-21', '6h30', 'Nhằm chào mừng 90 năm thành lập Đoàn thanh niên Cộng sản Hồ Chí Minh để tạo phong trào sôi nổi trong sinh viên, xây dựng nếp sống văn hóa lành mạnh. BCH LCĐ-LCH kết hợp tổ chức Team building ngoài trời cho sinh viên trong khoa CNTT. Sẽ có các thử thách, mật thư cho các đội tại các trạm và BTC sẽ hướng dẫn các đội để vượt qua trạm một cách nhanh nhất.\r\n1. Đối tượng dự thi\r\n- Là sinh viên trực thuộc Ban chấp hành LCĐ – LCH, sinh viên các lớp có mong muốn tham gia chƣơng trình (khuyến khích Ban cán sự lớp) đang theo học hệ chính quy tại Khoa CNTT Trƣờng Đại học Quy Nhơn (ĐHQN).\r\n- Các Thầy/Cô và cán bộ Khoa CNTT.\r\n- Phí tham gia là 20.000đ/thí sinh.\r\n- Ban tổ chức (BTC) sẽ tổ chức bốc thăm chia đội.\r\n2. Thông tin đăng ký gồm:\r\n- Họ và tên, mã sinh viên.\r\n- Lớp, số điện thoại liên lạc.\r\n- Sinh viên đăng ký trực tiếp qua Bí thư của từng Chi đoàn. Bí thư Chi đoàn gửi danh sách đăng kí, kèm phí tham gia về cho BTC qua mail leminhnamktpmk41@gmail.com (đ/c Lê Minh Nam, Lớp Kỹ thuật phần mềm K41, SĐT: 033.260.5868)\r\n3. Thời gian và địa điểm:\r\n- Tiếp nhận đăng ký của thí sinh: từ ngày ra thông báo đến hết ngày 18/03/2021\r\n- Tổ chức họp các thành viên đăng kí tham gia: ngày 19/03/2021. (Thời gian và địa điểm BTC sẽ có thông báo chính thức sau.)\r\n- Ngày chính thức Team building: 6h30 sáng Chủ nhật, ngày 21/3/2021.\r\n- Các sinh viên tập trung tại địa điểm đƣợc BTC chuẩn bị trước 6h30 để ổn định tổ chức và phổ biến thể lệ Team building.\r\n-Địa điểm tập trung: Nhà xe A3.', '2020-2021', 2, 'Tất cả', NULL, ''),
(4, 'IT Champion 2021', '2021-05-09', NULL, 'Yêu cầu lớp trưởng/ Bí thư điểm danh', '2020-2021', 2, 'Tất cả', 1000, ''),
(5, 'TeamBuilding', '2021-05-10', NULL, 'Lớp trưởng/ Bí thư điểm danh\r\n', '2020-2021', 1, 'Tất cả', 1000, '');

-- --------------------------------------------------------

--
-- Table structure for table `hocphan`
--

CREATE TABLE `hocphan` (
  `MaHocPhan` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `TenHocPhan` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `SoTinChi` int(2) DEFAULT NULL,
  `HocKy` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `hocphan`
--

INSERT INTO `hocphan` (`MaHocPhan`, `TenHocPhan`, `SoTinChi`, `HocKy`) VALUES
('1010034', 'Đại số số học', 3, 2),
('1010038', 'Đại số tuyến tính', 3, 1),
('1010126', 'Xác suất thống kê', 2, 3),
('1010245', 'Giải tích', 3, 1),
('1050011', 'Điện toán đám mây', 2, 7),
('1050011', 'Chuyên đề 3: Điện toán đám mây', 2, 8),
('1050012', 'Đồ họa máy tính', 3, 7),
('1050015', 'Hệ hỗ trợ ra quyết định', 2, 7),
('1050016', 'Hệ quản trị cơ sở dữ liệu', 3, 2),
('1050021', 'Kiến trúc máy tính', 3, 5),
('1050024', 'Lập trình hướng đối tượng', 3, 3),
('1050029', 'Lập trình ứng dụng Web', 3, 5),
('1050034', 'Ngôn ngữ hình thức', 3, 6),
('1050036', 'Thực hành làm việc nhóm', 2, 6),
('1050037', 'Nguyên lý hệ điều hành', 3, 6),
('1050040', 'Nhập môn Cơ sở dữ liệu', 3, 4),
('1050041', 'Nhập môn công nghệ phần mềm', 3, 5),
('1050043', 'Nhập môn mạng máy tính', 3, 3),
('1050049', 'Phân tích và thiết kế hệ thống thông tin', 3, 5),
('1050050', 'Chuyên đề 2: Phân tích và thiết kế hướng đối tượng', 2, 8),
('1050051', 'Phân tích và thiết kế thuật toán', 3, 4),
('1050058', 'Quản trị mạng', 3, 5),
('1050064', 'Thực hành lập trình', 2, 4),
('1050074', 'Toán logic', 2, 1),
('1050075', 'Toán rời rạc', 3, 2),
('1050085', 'Lập trình trên Windows', 3, 4),
('1050096', 'Tham quan thực tế', 1, 4),
('1050102', 'Khóa luận tốt nghiệp', 7, 8),
('1050108', 'Đại cương về Tin học', 3, 1),
('1050112', 'Nhập môn trí tuệ nhân tạo', 3, 6),
('1050113', 'Công nghệ .NET', 3, 5),
('1050115', 'Chuyên đề 1: Những vấn đề hiện đại của công nghệ thông tin', 2, 8),
('1050121', 'Cấu trúc dữ liệu', 3, 3),
('1050123', 'Xử lý ngôn ngữ tự nhiên', 3, 7),
('1050124', 'Thực hành máy tính', 1, 1),
('1050128', 'Lập trình cho thiết bị di động', 3, 6),
('1050133', 'Lập trình cơ bản', 4, 2),
('1050134', 'Kỹ năng mềm trong CNTT', 2, 3),
('1050135', 'Sử dụng tiếng Anh trong CNTT', 2, 4),
('1050137', 'XML và ứng dụng', 2, 4),
('1050138', 'Thực tập tốt nghiệp', 3, 8),
('1050139', 'Xử lý ảnh', 3, 6),
('1050140', 'Thuật toán tiến hóa', 3, 7),
('1050141', 'Hệ quản trị CSDL ORACLE', 3, 6),
('1050142', 'Lập trình quản lý', 3, 6),
('1050143', 'Thương mại điện tử', 2, 7),
('1050144', 'Kho dữ liệu và Khai phá dữ liệu', 3, 7),
('1050145', 'An toàn và bảo mật Hệ thống thông tin', 2, 7),
('1050146', 'Cơ sở dữ liệu hướng đối tượng', 2, 7),
('1050147', 'Cơ sở dữ liệu NoSQL', 3, 7),
('1050148', 'Phát triển ứng dụng hệ thống thông tin hiện đại', 3, 7),
('1050149', 'Web ngữ nghĩa', 3, 7),
('1050150', 'Ứng dụng phân tán', 3, 7),
('1050151', 'Quản trị hệ thống thông tin', 3, 7),
('1050152', 'Cơ sở dữ liệu suy diễn', 3, 7),
('1050153', 'Ngôn ngữ mô hình hóa', 2, 6),
('1050154', 'Tương tác người – máy', 2, 6),
('1050155', 'Phân tích yêu cầu phần mềm', 2, 6),
('1050156', 'Phân tích và thiết kế hướng đối tượng', 2, 7),
('1050157', 'Kiểm thử và đảm bảo chất lượng phần mềm', 3, 7),
('1050158', 'Quản lý dự án phần mềm', 2, 7),
('1050159', 'Công nghệ Java', 3, 7),
('1050160', 'Phát triển phần mềm chuyên nghiệp', 2, 7),
('1050161', 'Phát triển phần mềm nguồn mở', 2, 7),
('1050162', 'Bảo trì phần mềm', 2, 7),
('1050163', 'Mẫu thiết kế', 2, 7),
('1050164', 'Các công cụ CASE', 2, 7),
('1050165', 'Phát triển phần mềm hướng đối tượng', 3, 7),
('1050166', 'Phát triển phần mềm hướng tác tử', 3, 7),
('1050167', 'Lập trình Game', 3, 7),
('1050168', 'Lập trình hệ thống nhúng', 3, 7),
('1050169', 'Hệ điều hành Linux', 2, 6),
('1050170', 'Quản trị mạng Windows', 2, 6),
('1050171', 'Quản lý mạng máy tính', 2, 6),
('1050172', 'Lập trình mạng', 3, 7),
('1050173', 'Quản trị mạng Linux', 2, 7),
('1050174', 'Phân tích thiết kế mạng', 3, 7),
('1050175', 'An ninh mạng', 3, 7),
('1050176', 'Mạng không dây', 3, 7),
('1050177', 'Đánh giá hiệu năng mạng', 3, 7),
('1050178', 'Truyền thông đa phương tiện', 3, 7),
('1050179', 'Thiết bị mạng', 3, 7),
('1050180', 'Chuyên đề 2: Logic mờ và ứng dụng', 3, 8),
('1050181', 'Chuyên đề 3: Cơ sở dữ liệu đa phương tiện', 3, 8),
('1050182', 'Chuyên đề 2: Kiến trúc hướng dịch vụ', 3, 8),
('1050183', 'Chuyên đề 3: Những vấn đề hiện đại của CNPM', 2, 8),
('1050184', 'Chuyên đề 2: Lập trình mạng nâng cao', 3, 8),
('1050185', 'Chuyên đề 3: Một số vấn đề hiện đại của Mạng máy tính', 2, 8),
('1050186', 'Mô hình hóa và mô phỏng', 3, 7),
('1050187', 'Tính toán song song', 3, 7),
('1050188', 'Lý thuyết nhận dạng', 3, 7),
('1050189', 'Lập trình logic', 3, 7),
('1050190', 'Hệ thống thông tin địa lý', 3, 7),
('1090061', 'Tiếng Anh 1', 3, 1),
('1090166', 'Tiếng Anh 2', 4, 2),
('1120001', 'Giáo dục thể chất 1', 1, 1),
('1120002', 'Giáo dục thể chất 2', 1, 2),
('1120003', 'Giáo dục thể chất 3', 1, 3),
('1120004', 'Giáo dục thể chất 4', 1, 4),
('1120095', 'Giáo dục quốc phòng – an ninh 1', 3, 2),
('1120096', 'Giáo dục quốc phòng – an ninh 2', 2, 2),
('1120097', 'Giáo dục quốc phòng – an ninh 3', 3, 2),
('1130013', 'Đường lối cách mạng của Đảng Cộng sản Việt Nam', 3, 4),
('1130045', 'Những nguyên lý cơ bản của CN Mác-Lênin 1', 2, 1),
('1130046', 'Những nguyên lý cơ bản của CN Mác-Lênin 2', 3, 2),
('1130049', 'Pháp luật đại cương', 2, 3),
('1130091', 'Tư tưởng Hồ Chí Minh', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `homthugopy`
--

CREATE TABLE `homthugopy` (
  `ID` bigint(25) NOT NULL,
  `MaSinhVien` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `NgayGopY` date DEFAULT NULL,
  `GioGopY` time NOT NULL,
  `TieuDe` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `NoiDung` text COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `homthugopy`
--

INSERT INTO `homthugopy` (`ID`, `MaSinhVien`, `NgayGopY`, `GioGopY`, `TieuDe`, `NoiDung`) VALUES
(2, '4151050048', '2021-04-04', '08:13:34', 'Cần phát triển ', 'sản phẩm cần phát triển hơn'),
(6, '4151050060', '2021-04-04', '10:22:22', 'Phát triển sản phẩm', 'Cần nhiều sự cố gắng'),
(7, '4151050015', '2021-04-04', '15:56:08', 'Góp ý chân thành', 'Trường đại học Quy Nhơn được thành lập từ ngày 21 tháng 12 năm 1977 theo Quyết định số 1842/QĐ ngày 21/12/1977 của Bộ trưởng Bộ Giáo dục (nay là Bộ Giáo dục và Đào tạo). Cở sở chính của trường gần 14 ha, nằm trên địa bàn thành phố Quy Nhơn, tỉnh Bình Định. Trải qua hơn 40 năm, cùng với sự phát triển của nền giáo dục nước nhà, Trường đã nổ lực mở rộng các lĩnh vực, đa dạng hóa các ngành nghề đào tạo nhằm đáp ứng nhu cầu nâng cao dân trí, đào tạo nhân lực cho đất nước, đặc biệt là khu vực Nam Trung Bộ và Tây Nguyên. Ngày 30/10/2003, Thủ tướng chính phủ đã ra quyết định số 221/2003/QĐ-TT về việc đổi tên Trường Đại học Sư phạm Quy Nhơn thành Trường Đại học Quy Nhơn.\r\n\r\nHơn 40 năm xây dựng và phát triển, Trường Đại học Quy Nhơn không ngừng phát triển mạnh mẽ theo hướng đào tạo đa ngành, đa lĩnh vực, có vai trò ngày càng to lớn đối với sự phát triển kinh tế - văn hóa - xã hội cũng như cung cấp nguồn nhân lực trình độ cao cho đất nước. Trường là nơi đào tạo vào cung cấp phần lớn giáo viên từ bậc mầm non đến trung học phổ thông cho các tỉnh trong khu vực. Đồng thời, Trường còn đào tạo đội ngũ cán bộ khoa học, cán bộ chuyên môn thuộc các lĩnh vực: Khoa học Tự nhiên, Khoa học Xã hội và Nhân văn, Kinh tế và Quản trị kinh doanh, Kỹ thuật và Công nghệ.\r\n\r\nHiện nay toàn trường có 714 viên chức, trong đó có 507 giảng viên cơ hữu, 34 phó giáo sư, 152 tiến sĩ, tiến sĩ khoa học, 260 thạc sĩ, 115 giảng viên đang là nghiên cứu sinh trong và ngoài nước. Đây là nguồn nhân lực dồi dào, là nền móng vững chắc đáp ứng yêu cầu đổi mới căn bản, toàn diện nhà trường theo hướng chuẩn hóa, hiện đại hóa và hội nhập quốc tế. Nhà trường đang đào tạo 46 ngành trình độ đại học thuộc các khối Sưu phạm, Khoa học Tự nhiên, Khoa học Xã hội và Nhân văn, Kinh tế và Quản trị kinh doanh, Kỹ thuật và Công nghệ, với quy mô khoảng 12.500 sinh viên chính quy và 3.000 sinh viên không chính quy; 21 chuyên ngành trình độ thạc sĩ, 03 chuyên ngành trình độ tiến sĩ với quy mô trên 1.000 học viên, nghiên cứu sinh. Ngoài ra, Trường còn đào tạo đại học, sau đại học và bồi dưỡng tiếng Việt cho lưu học sinh Lào thuộc các tỉnh Attapu, Champasak, Salavan và Sekong.\r\n\r\nSong song với công tác giảng dạy, nhà trường rất coi trọng công tác nghiên cứu khoa học, chuyển giao công nghệ. Hằng năm có nhiều công trình, bài báo cáo nghiên cứu khoa học của cán bộ, giảng viên được công bố trên các tạp chí quốc tế ISI về các lĩnh vực Toán học, Hóa học, Vật lý, Sinh học, Kỹ thuật, ... Ngoài ra, Trường có nhiều phó giáo sư, tiến sĩ, tiến sĩ khoa học ngành Toán học và Hóa học, Sinh học ... là cộng tác viên thường xuyên của các trường đại học ở Pháp, Bỉ, Hàn Quốc, Úc, Thái Lan, ... trong các nghiên cứu khoa học và đào tạo. Theo định hướng phát triển tới năm 2025 và tầm nhìn đến 2030, Trường Đại học Quy Nhơn ổn định quy mô đào tạo, đẩy mạnh nghiên cứu khoa học và hợp tác quốc tế, xây dựng và phát triển nhà trường theo định hướng ứng dụng và tương lai gần phấn đấu để trở thành trường đại học trọng điểm của Quốc gia.\r\n\r\nNhằm xây dựng bộ máy tổ chức nhà trường tinh gọn và cơ chế quản trị linh hoạt, phù hợp với thông lệ quốc tế; nâng cao năng lực đội ngũ công chức, viên chức; giảng dạy và giáo dục đáp ứng nhu cầu của xã hội, ngày 16 tháng 5 năm 2019, Hiệu trưởng Trường Đại học Quy Nhơn đã ký Quyết định số 848/QĐ-ĐHQN về việc triển khai thực hiện Đề án Đổi mới cơ cấu tổ chức Trường Đại học Quy Nhơn giai đoạn 2019 - 2022, tầm nhìn 2030. Trong đó, Trường Đại học Quy Nhơn gồm 12 khoa, 10 phòng chức năng, 02 viện nghiên cứu, 07 trung tâm.'),
(8, '4151050206', '2021-04-04', '15:59:17', 'Gửi ý kiến về khoa', '1. Sinh viên cần phát triển hơn về sản phẩm\r\n2. Cần được biết đến rộng rãi hơn\r\n\r\n3. Làm hoàn thành sớm'),
(9, '4151050048', '2021-04-04', '16:07:43', 'q', '1. Sinh viên cần phát triển hơn về sản phẩm\r\n2. Cần được biết đến rộng rãi hơn\r\n\r\n3. Làm hoàn thành sớm'),
(10, '4151050048', '2021-04-05', '17:23:37', 'sdsds', 'sdsdsdsd'),
(11, '4151050048', '2021-04-05', '17:23:50', 'sdsds', 'sdsdsdsd'),
(12, '4151050019', '2021-04-29', '15:00:20', 'Con quỳnh', 'Lớp cntt k41a');

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `MaKhoaHoc` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `NamBatDau` int(5) DEFAULT NULL,
  `NamKetThuc` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`MaKhoaHoc`, `NamBatDau`, `NamKetThuc`) VALUES
('K40', 2017, 2023),
('K41', 2018, 2024),
('K42', 2019, 2025),
('K43', 2020, 2026),
('K44', 2021, 2027),
('K45', 2022, 2028),
('K46', 2023, 2029),
('K47', 2024, 2030),
('K48', 2025, 2031),
('K49', 2026, 2032),
('K50', 2027, 2033);

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `MaKhoaHoc` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MaLop` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `TenLop` text COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`MaKhoaHoc`, `MaLop`, `TenLop`) VALUES
('K40', 'CNTTK40A', 'Công nghệ thông tin K40A'),
('K40', 'CNTTK40B', 'Công nghệ thông tin K40B'),
('K40', 'CNTTK40C', 'Công nghệ thông tin K40C'),
('K41', 'CNTTK41A', 'Công nghệ thông tin K41A'),
('K41', 'CNTTK41B', 'Công nghệ thông tin K41B'),
('K41', 'CNTTK41C', 'Công nghệ thông tin K41C'),
('K42', 'CNTTK42A', 'Công nghệ thông tin K42A'),
('K42', 'CNTTK42B', 'Công nghệ thông tin K42B'),
('K42', 'CNTTK42C', 'Công nghệ thông tin K42C'),
('K43', 'CNTTK43A', 'Công nghệ thông tin K43A'),
('K43', 'CNTTK43B', 'Công nghệ thông tin K43B'),
('K43', 'CNTTK43C', 'Công nghệ thông tin K43C'),
('K43', 'CNTTK43D', 'Công nghệ thông tin K43D'),
('K41', 'KTPMK41', 'Kỹ thuật phần mềm K41'),
('K42', 'KTPMK42', 'Kỹ thuật phần mềm K42'),
('K43', 'KTPMK43', 'Kỹ thuật phần mềm K43');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSinhVien` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `HoTen` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `GioiTinh` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `SDT` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MaLop` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MaChuyenNganh` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ChucVu` text COLLATE utf8_vietnamese_ci NOT NULL,
  `TinhTrangHoc` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MatKhau` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Quyen` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MaSinhVien`, `HoTen`, `NgaySinh`, `GioiTinh`, `SDT`, `Email`, `MaLop`, `MaChuyenNganh`, `ChucVu`, `TinhTrangHoc`, `MatKhau`, `Quyen`) VALUES
('4051050001', 'Đặng Ngọc Vũ', '1999-03-23', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050001', 0),
('4051050002', 'Nguyễn Thị Trúc Ngân', '1999-12-28', 'Nữ', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Thôi học', '4051050002', 0),
('4051050005', 'Nguyễn Minh Tiến', '1999-10-14', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050005', 0),
('4051050007', 'Nhữ Mạnh Cần', '1999-12-21', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050007', 0),
('4051050008', 'Phạm Thuý Phương', '1999-04-26', 'Nữ', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050008', 0),
('4051050009', 'Lê Việt Khánh', '1999-07-23', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050009', 0),
('4051050010', 'Lê Kim Hương', '1999-07-30', 'Nữ', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050010', 0),
('4051050011', 'Trần Thái Nguyên', '1999-12-10', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050011', 0),
('4051050012', 'Hà Võ Quỳnh Trâm', '1999-06-21', 'Nữ', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050012', 0),
('4051050013', 'Võ Thị Mỹ Linh', '1999-06-28', 'Nữ', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050013', 0),
('4051050014', 'Nguyễn Văn Hiếu', '1999-08-12', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050014', 0),
('4051050015', 'Nguyễn Đức Thanh Hoàn', '1999-03-20', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050015', 0),
('4051050016', 'Nguyễn Phương Nam', '1999-11-04', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050016', 0),
('4051050017', 'Nguyễn Thị Tường Vi', '1999-04-28', 'Nữ', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050017', 0),
('4051050018', 'Phạm Thị Như Hậu', '1999-09-15', 'Nữ', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050018', 0),
('4051050019', 'Nguyễn Đức Chinh', '1999-01-20', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050019', 0),
('4051050020', 'Nguyễn Tấn Nhị', '1999-10-21', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050020', 0),
('4051050021', 'La Thị Thanh Thuận', '1999-05-22', 'Nữ', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050021', 0),
('4051050022', 'Trần Nam Huy', '1996-02-20', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050022', 0),
('4051050023', 'Ngô Xuân Lộc', '1999-04-28', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050023', 0),
('4051050024', 'Nguyễn Minh Vươn', '1999-02-02', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050024', 0),
('4051050025', 'Nguyễn Trung Hiếu', '1999-12-12', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050025', 0),
('4051050026', 'Nguyễn Trùng Dương', '1999-03-14', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050026', 0),
('4051050027', 'Đặng Hoàng Lợi', '1999-06-04', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050027', 0),
('4051050028', 'Đỗ Duy Phương', '1999-02-16', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050028', 0),
('4051050029', 'Võ Sự', '1999-09-11', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050029', 0),
('4051050030', 'Nguyễn Dương Thế Vinh', '1999-10-04', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050030', 0),
('4051050031', 'Nguyễn Thanh Tình', '1999-08-18', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050031', 0),
('4051050032', 'Nguyễn Văn Phụng', '1998-03-06', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Buộc thôi học', '4051050032', 0),
('4051050033', 'Trần Thái Nguyên', '1999-10-03', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050033', 0),
('4051050034', 'Nguyễn Ngọc Khánh', '1999-05-06', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050034', 0),
('4051050035', 'Phan Thanh Nhật', '1998-11-04', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050035', 0),
('4051050036', 'Nguyễn Minh Thi', '1999-10-10', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050036', 0),
('4051050037', 'Nguyễn Trọng Chơn', '1999-09-19', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Buộc thôi học', '4051050037', 0),
('4051050038', 'Phan Thị Phúc', '1999-11-08', 'Nữ', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050038', 0),
('4051050039', 'Nguyễn Thị Kiều Duyên', '1999-08-22', 'Nữ', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050039', 0),
('4051050040', 'Lê Thị Kim Hương', '1998-02-10', 'Nữ', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050040', 0),
('4051050041', 'Đỗ Công Phúc', '1999-12-09', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050041', 0),
('4051050042', 'Nguyễn Thị Mỹ Liêm', '1999-08-24', 'Nữ', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050042', 0),
('4051050043', 'Huỳnh Trọng Nghĩa', '1996-07-02', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Buộc thôi học', '4051050043', 0),
('4051050044', 'Phạm Anh Quốc', '1999-09-10', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050044', 0),
('4051050045', 'Nguyễn Huy Hoàng', '1999-11-21', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050045', 0),
('4051050046', 'Nguyễn Trần Quốc Cường', '1996-11-30', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050046', 0),
('4051050047', 'Lưu Văn Thịnh', '1999-01-10', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050047', 0),
('4051050048', 'Lê Công Hội', '1999-08-22', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050048', 0),
('4051050049', 'Nguyễn Minh Thiện', '1999-08-15', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050049', 0),
('4051050050', 'Võ Ly Va', '1999-03-30', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050050', 0),
('4051050051', 'Trịnh Ngọc Hiếu', '1999-08-25', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050051', 0),
('4051050052', 'Trần Thế Vỹ', '1998-06-11', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050052', 0),
('4051050053', 'Lê Văn Tường', '1999-08-26', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050053', 0),
('4051050054', 'Trần Quang Huy', '1999-11-24', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050054', 0),
('4051050055', 'Nguyễn Trường Lâm', '1999-03-10', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050055', 0),
('4051050056', 'Tô Thị Kiều Oanh', '1999-03-12', 'Nữ', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050056', 0),
('4051050057', 'Trần Duy Phương', '1999-10-22', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050057', 0),
('4051050058', 'Đoàn Phi Vũ', '1999-04-12', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050058', 0),
('4051050059', 'Phạm Quốc Cường', '1999-05-02', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Buộc thôi học', '4051050059', 0),
('4051050060', 'Trần Đức Tấn', '1999-09-25', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050060', 0),
('4051050061', 'Võ Hương', '1999-08-06', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050061', 0),
('4051050062', 'Nguyễn Trung Nguyên', '1999-03-26', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050062', 0),
('4051050063', 'Nguyễn Thị Thảo', '1999-07-25', 'Nữ', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Nghỉ học tạm thời', '4051050063', 0),
('4051050064', 'Phan Thị Thu', '1999-08-26', 'Nữ', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050064', 0),
('4051050066', 'Lê Uyển Ny', '1999-11-21', 'Nữ', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Buộc thôi học', '4051050066', 0),
('4051050067', 'Trần Quang Khang', '1999-03-24', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050067', 0),
('4051050068', 'Mạc Thông Trong', '1999-08-20', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050068', 0),
('4051050069', 'Nguyễn Thị Kim Chi', '1999-10-17', 'Nữ', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Buộc thôi học', '4051050069', 0),
('4051050070', 'Trần Tấn Đạt', '1999-02-26', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050070', 0),
('4051050071', 'Nguyễn Huệ Minh', '1999-08-30', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050071', 0),
('4051050072', 'Mai Hồng Lưu', '1997-11-16', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050072', 0),
('4051050073', 'Võ Hoài Trung', '1999-04-03', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050073', 0),
('4051050074', 'Nguyễn Văn Lâm', '1999-10-22', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050074', 0),
('4051050075', 'Nguyễn Văn Hải', '1999-05-03', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050075', 0),
('4051050076', 'Đoàn Thị Nhã Yên', '1999-02-20', 'Nữ', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050076', 0),
('4051050077', 'Trần Văn Liệu', '1999-05-26', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Buộc thôi học', '4051050077', 0),
('4051050078', 'Giang Thị Thanh Hằng', '1999-05-23', 'Nữ', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050078', 0),
('4051050079', 'Lưu Đức Mạnh', '1999-01-01', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050079', 0),
('4051050080', 'Cao Thành Nhân', '1999-02-02', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050080', 0),
('4051050081', 'Phạm Thành Phúc', '1999-10-21', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050081', 0),
('4051050082', 'Trần Hữu Trực', '1999-10-26', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050082', 0),
('4051050083', 'Nguyễn Quốc Bin', '1999-03-16', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050083', 0),
('4051050084', 'Võ Thị Thao', '1999-03-06', 'Nữ', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050084', 0),
('4051050085', 'Võ Văn Bình Phước', '1999-11-26', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050085', 0),
('4051050086', 'Nguyễn Ngọc Thiện', '1999-12-04', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050086', 0),
('4051050087', 'Ngô Quang Khải', '1999-12-06', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Buộc thôi học', '4051050087', 0),
('4051050088', 'Phan Phúc Thịnh', '1997-05-19', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050088', 0),
('4051050089', 'Nguyễn Lộc', '1999-09-30', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Buộc thôi học', '4051050089', 0),
('4051050090', 'Võ Tấn Phong', '1998-11-17', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050090', 0),
('4051050091', 'Võ Quốc Tuấn', '1999-02-23', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Buộc thôi học', '4051050091', 0),
('4051050092', 'Trần Lê Đức Toàn', '1999-10-30', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Buộc thôi học', '4051050092', 0),
('4051050093', 'Phạm Minh Trung', '1999-05-29', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050093', 0),
('4051050094', 'Nguyễn Đăng Nhật', '1997-12-10', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050094', 0),
('4051050095', 'Võ Vương', '1999-10-27', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Buộc thôi học', '4051050095', 0),
('4051050096', 'Nay Tiết', '1999-02-26', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Buộc thôi học', '4051050096', 0),
('4051050097', 'Nguyễn Ngọc Sơn', '1999-12-24', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050097', 0),
('4051050098', 'Trần Thái Minh Trí', '1999-01-22', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Buộc thôi học', '4051050098', 0),
('4051050099', 'Trần Quang Trường', '1999-04-19', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050099', 0),
('4051050100', 'Võ Thị Hằng', '1999-11-02', 'Nữ', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050100', 0),
('4051050101', 'Nguyễn Hữu Đạt', '1999-05-15', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050101', 0),
('4051050102', 'Mai Thanh Phong', '1999-06-11', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050102', 0),
('4051050103', 'Nguyễn Trọng Tuyển', '1999-10-29', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Buộc thôi học', '4051050103', 0),
('4051050104', 'Cù Phước Khánh', '1999-09-15', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050104', 0),
('4051050105', 'Huỳnh Sanh Ngân', '1999-09-23', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050105', 0),
('4051050106', 'Nguyễn Hữu Thắng', '1999-03-19', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050106', 0),
('4051050107', 'Trần Anh Tuấn', '1999-02-12', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050107', 0),
('4051050108', 'Nguyễn Thị Thanh Loan', '1999-11-23', 'Nữ', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Buộc thôi học', '4051050108', 0),
('4051050109', 'Hồ Văn Phúc', '1999-07-12', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050109', 0),
('4051050110', 'Trần Thị Phương Thảo', '1999-05-16', 'Nữ', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050110', 0),
('4051050111', 'Nguyễn Khắc Mừng', '1999-08-16', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050111', 0),
('4051050112', 'Nguyễn Hoàng Đăng', '1999-07-23', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Buộc thôi học', '4051050112', 0),
('4051050113', 'Dương Tấn Thành', '1996-04-28', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Buộc thôi học', '4051050113', 0),
('4051050114', 'Nguyễn Văn Thanh Thảo', '1999-04-20', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Thôi học', '4051050114', 0),
('4051050115', 'Giáp Lượng', '1999-08-20', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Buộc thôi học', '4051050115', 0),
('4051050116', 'Võ Lê Trung Chiến', '1999-09-24', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050116', 0),
('4051050117', 'Văn Công Phú', '1999-04-04', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050117', 0),
('4051050118', 'Tăng Khắc Hiếu', '1999-11-15', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050118', 0),
('4051050119', 'Phan Hồng Thái Sơn', '1996-12-21', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050119', 0),
('4051050120', 'Lê Hoàng Tín', '1997-02-02', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050120', 0),
('4051050121', 'Phạm Hữu Tình', '1999-03-21', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050121', 0),
('4051050122', 'Hồ Xuân Long', '1998-08-20', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050122', 0),
('4051050123', 'Nguyễn Văn Hậu', '1997-11-26', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Buộc thôi học', '4051050123', 0),
('4051050124', 'Nguyễn Thị Phương Ân', '1999-11-28', 'Nữ', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050124', 0),
('4051050125', 'Lê Đình Nghĩa', '1999-07-05', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050125', 0),
('4051050126', 'Đào Duy Khánh', '1999-02-20', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050126', 0),
('4051050127', 'Huỳnh Hữu Tín', '1999-03-24', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050127', 0),
('4051050128', 'Nguyễn Thanh Phong', '1999-11-26', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050128', 0),
('4051050129', 'Nguyễn Công Thiện', '1999-02-01', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050129', 0),
('4051050130', 'Nguyễn Trung Ý', '1999-11-28', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050130', 0),
('4051050131', 'Hoàng Văn Tới', '1999-05-14', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050131', 0),
('4051050132', 'Nguyễn Đặng Anh Tuấn', '1999-08-16', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050132', 0),
('4051050133', 'Nguyễn Hoàng Quốc Bảo', '1999-01-01', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050133', 0),
('4051050134', 'Bùi Nguyễn Hoàng Việt', '1999-07-18', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050134', 0),
('4051050135', 'Trần Văn Diện', '1999-12-16', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050135', 0),
('4051050136', 'Nguyễn Thành Nhật', '1999-10-17', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050136', 0),
('4051050137', 'Nguyễn Văn Đổng', '1998-02-20', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050137', 0),
('4051050138', 'Nguyễn Thị Ngân', '1999-04-05', 'Nữ', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050138', 0),
('4051050139', 'Đặng Hoàng Nhi', '1992-05-20', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Buộc thôi học', '4051050139', 0),
('4051050140', 'Nguyễn Ngọc Đức', '1999-04-12', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050140', 0),
('4051050141', 'Nguyễn Ngọc Phương Dung', '1999-08-23', 'Nữ', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050141', 0),
('4051050142', 'Phan Chí Thanh Tuy', '1999-12-09', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050142', 0),
('4051050143', 'Hồ Quốc Trung', '1999-10-02', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050143', 0),
('4051050144', 'Nguyễn Phạm Chánh Luận', '1999-08-25', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Thôi học', '4051050144', 0),
('4051050145', 'Nguyễn Đình Ty', '1999-08-22', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050145', 0),
('4051050146', 'Nguyễn Ngọc Thịnh', '1999-01-20', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050146', 0),
('4051050147', 'Lê Văn Vũ', '1999-10-28', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050147', 0),
('4051050148', 'Lê Đức Thành', '1999-02-02', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050148', 0),
('4051050149', 'Bùi Thị Kim Qua', '1999-03-11', 'Nữ', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050149', 0),
('4051050150', 'Phạm Duy Nam', '1995-01-23', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050150', 0),
('4051050151', 'Lê Văn Lợi', '1999-07-28', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050151', 0),
('4051050152', 'Nguyễn Đăng Tâm', '1999-03-14', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050152', 0),
('4051050153', 'Nguyễn Huỳnh Thanh Tùng', '1999-04-17', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050153', 0),
('4051050154', 'Rah Lan H\' Chôi', '1999-05-22', 'Nữ', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050154', 0),
('4051050155', 'Nguyễn Quốc Nam', '1999-09-10', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050155', 0),
('4051050156', 'Huỳnh Đức Duy', '1999-10-02', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050156', 0),
('4051050157', 'Phạm Vũ Minh Đức', '1999-08-05', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050157', 0),
('4051050158', 'Trần Ngọc Nghĩa', '1999-10-02', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050158', 0),
('4051050159', 'Huỳnh Đông Dương', '1998-05-11', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050159', 0),
('4051050160', 'Hồ Hữu Tín', '1999-01-06', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050160', 0),
('4051050161', 'Quảng Thanh Tiến', '1999-11-04', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050161', 0),
('4051050162', 'Võ Nguyên Quý', '1999-04-01', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050162', 0),
('4051050163', 'Trương Quốc Đạt', '1999-03-30', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050163', 0),
('4051050164', 'Trần Ngọc Đăng', '1999-07-21', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050164', 0),
('4051050165', 'Huỳnh Phú Thiên', '1999-03-15', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050165', 0),
('4051050166', 'Huỳnh Tấn Phát', '1999-08-10', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050166', 0),
('4051050167', 'Huỳnh Nguyễn Anh Việt', '1999-10-03', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050167', 0),
('4051050168', 'Tăng Thị Thúy Vân', '1997-05-25', 'Nữ', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050168', 0),
('4051050169', 'Nguyễn Văn Hiền', '1999-08-03', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Nghỉ học tạm thời', '4051050169', 0),
('4051050170', 'Hồ Nhật Hiếu', '1999-01-02', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050170', 0),
('4051050171', 'Phạm Quốc Nhật', '1999-03-19', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050171', 0),
('4051050172', 'Ngô Trịnh Nguyên', '1999-04-20', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050172', 0),
('4051050173', 'Hồ Ngọc Thanh', '1999-01-20', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050173', 0),
('4051050174', 'Trần Sĩ Nguyên', '1999-12-20', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050174', 0),
('4051050175', 'Nguyễn Chấn', '1999-12-15', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Buộc thôi học', '4051050175', 0),
('4051050176', 'Nguyễn Ánh Ngọc', '1999-12-05', 'Nữ', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050176', 0),
('4051050177', 'Đặng Duy Khoa', '1999-10-03', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050177', 0),
('4051050178', 'Lê Quốc Đạt', '1997-03-03', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050178', 0),
('4051050179', 'La Văn Quỳnh', '1998-08-04', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Thôi học', '4051050179', 0),
('4051050180', 'Nguyễn Chí Thạch', '1998-07-20', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050180', 0),
('4051050182', 'Trần Khoa Đăng', '1995-09-26', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050182', 0),
('4051050183', 'Đinh Văn Pháp', '1999-09-11', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050183', 0),
('4051050184', 'Nguyễn Bá Sum', '1999-05-15', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050184', 0),
('4051050185', 'Nguyễn Chí Hoà', '1999-06-01', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050185', 0),
('4051050186', 'Trần Đắc Kỳ', '1999-09-24', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050186', 0),
('4051050187', 'Thái Anh Quốc', '1999-09-10', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050187', 0),
('4051050188', 'Đào Văn Lợi', '1999-03-14', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050188', 0),
('4051050189', 'Nguyễn Thị Tuyết Băng', '1999-10-29', 'Nữ', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050189', 0),
('4051050190', 'Lê Văn Tri', '1999-02-02', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050190', 0),
('4051050191', 'Đào Nguyên Ngọc Linh', '1999-08-12', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050191', 0),
('4051050192', 'Lê Văn Biển', '1999-10-06', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050192', 0),
('4051050193', 'Võ Hoàng Huy', '1999-12-22', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050193', 0),
('4051050194', 'Nguyễn Thị Thu Hiền', '1999-06-22', 'Nữ', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050194', 0),
('4051050195', 'Bùi Thị Kim Ngân', '1999-06-10', 'Nữ', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Buộc thôi học', '4051050195', 0),
('4051050196', 'Đào Văn Tiến', '1999-03-09', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050196', 0),
('4051050197', 'Đào Nguyễn Xuân Trường', '1999-03-03', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Buộc thôi học', '4051050197', 0),
('4051050198', 'Trương Thị Phương Thảo', '1996-11-03', 'Nữ', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Buộc thôi học', '4051050198', 0),
('4051050199', 'Ksor H\' Nĩu', '1999-01-11', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Thôi học', '4051050199', 0),
('4051050200', 'Lê Xuân Hoàng', '1999-03-04', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050200', 0),
('4051050201', 'Đỗ Văn Khuyên', '1999-06-15', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050201', 0),
('4051050202', 'Nguyễn Công Tài', '1999-05-01', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050202', 0),
('4051050203', 'Nguyễn Công Hải Nam', '1999-08-17', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050203', 0),
('4051050204', 'Nguyễn Hoàng Bảo Duy', '1999-10-23', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050204', 0),
('4051050205', 'Nguyễn Văn Thiện', '1998-11-29', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050205', 0),
('4051050206', 'Phạm Minh Tây', '1999-01-24', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050206', 0),
('4051050207', 'Alê Joanh', '1999-08-18', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050207', 0),
('4051050208', 'Trương Hùng Sang', '1999-04-06', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Buộc thôi học', '4051050208', 0),
('4051050209', 'Nguyễn Trường Chinh', '1999-05-07', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050209', 0),
('4051050210', 'Nguyễn Thái Bình', '1998-06-03', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050210', 0),
('4051050211', 'Hồ Hoàn Hảo', '1999-07-19', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050211', 0),
('4051050212', 'Diệp Quang Toản', '1995-07-20', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Nghỉ học tạm thời', '4051050212', 0),
('4051050213', 'Trần Hùng Thanh', '1999-05-29', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Thôi học', '4051050213', 0),
('4051050214', 'Nguyễn Chí Tân', '1999-05-18', 'Nam', NULL, NULL, 'CNTTK40C', 'CNTT', '', 'Còn học', '4051050214', 0),
('4051050215', 'Nguyễn Công Thành', '1999-07-20', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051050215', 0),
('4051050216', 'Đinh Văn Pháp', '1999-01-11', 'Nam', NULL, NULL, 'CNTTK40B', 'CNTT', '', 'Còn học', '4051050216', 0),
('4051059001', 'Lê Văn Thơ', '1998-11-17', 'Nam', NULL, NULL, 'CNTTK40A', 'CNTT', '', 'Còn học', '4051059001', 0),
('4151050001', 'Phạm Đức Phòng', '2000-08-07', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050001', 0),
('4151050002', 'Võ Trọng Hiếu', '2000-07-03', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050002', 0),
('4151050003', 'Dương Thị Thu Hà', '2000-09-10', 'Nữ', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050003', 0),
('4151050004', 'Lê Hồng Tụ', '2000-08-15', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050004', 0),
('4151050005', 'Lê Trần Trọng Tín', '2000-03-23', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050005', 0),
('4151050006', 'Lê Hùng Thịnh', '2000-12-11', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050006', 0),
('4151050007', 'Tô Văn Tiên', '2000-06-14', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050007', 0),
('4151050008', 'Đinh Thiên Thoại', '2000-10-04', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050008', 0),
('4151050009', 'Nguyễn Thị Triều', '2000-02-27', 'Nữ', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050009', 0),
('4151050010', 'Dương Tiến Lĩnh', '2000-03-12', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050010', 0),
('4151050011', 'Huỳnh Long Ẩn', '2000-02-10', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050011', 0),
('4151050012', 'Y Mallôthi Mlô', '2000-06-22', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050012', 0),
('4151050013', 'Đào Duy Tường', '2000-07-13', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050013', 0),
('4151050014', 'Nguyễn Hữu Như', '2000-12-24', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050014', 0),
('4151050015', 'Phạm Thị Ngọc Ngân', '2000-10-15', 'Nữ', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050015', 0),
('4151050016', 'Bùi Lê Vĩnh Huy', '2000-04-17', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050016', 0),
('4151050017', 'Võ Thái Nhựt', '2000-11-26', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050017', 0),
('4151050018', 'Phạm Đình Khá', '2000-10-24', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050018', 0),
('4151050019', 'Nguyễn Thị Như Quỳnh', '2000-07-16', 'Nữ', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050019', 0),
('4151050020', 'Hồ Xuân Hưng', '1998-04-12', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050020', 0),
('4151050021', 'Phan Tấn Đạt', '2000-01-16', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Buộc thôi học', '4151050021', 0),
('4151050022', 'Dương Minh Lợi', '2000-03-26', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050022', 0),
('4151050023', 'Trần Thanh Sơn', '2000-03-08', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Buộc thôi học', '4151050023', 0),
('4151050024', 'Nguyễn Quang Phú', '2000-10-16', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050024', 0),
('4151050025', 'Nguyễn Thị Thanh Thuý', '2000-04-07', 'Nữ', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050025', 0),
('4151050027', 'Nguyễn Ngọc Khoa', '1999-04-03', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050027', 0),
('4151050028', 'Nguyễn Trung Thành', '2000-10-13', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050028', 0),
('4151050029', 'Lê Ngọc Huy', '1999-07-14', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050029', 0),
('4151050030', 'Nguyễn Hữu Quốc', '2000-05-19', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050030', 0),
('4151050031', 'Phan Xuân Dũng', '2000-12-22', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050031', 0),
('4151050032', 'Nguyễn Công Quỹ', '2000-11-25', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050032', 0),
('4151050034', 'Nguyễn Hoàng Phúc', '2000-08-22', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050034', 0),
('4151050035', 'Đinh Quốc Huy', '2000-03-10', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050035', 0),
('4151050036', 'Nguyễn Thiện Nhân', '2000-06-27', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Buộc thôi học', '4151050036', 0),
('4151050037', 'Đặng Minh Quy', '1999-04-10', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Thôi học', '4151050037', 0),
('4151050038', 'Đinh Thị Ngọt', '2000-12-10', 'Nữ', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050038', 0),
('4151050039', 'Nguyễn Thị Thanh Trà', '2000-12-07', 'Nữ', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050039', 0),
('4151050040', 'Lê Tuấn Trung', '2000-09-20', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050040', 0),
('4151050041', 'Võ Ngọc Sơn', '2000-06-20', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050041', 0),
('4151050042', 'Đặng Phước Triều', '2000-08-11', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050042', 0),
('4151050043', 'Võ Xuân Huy', '2000-07-05', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050043', 0),
('4151050044', 'Cao Minh Bình', '2000-08-02', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050044', 0),
('4151050045', 'Nguyễn Hoàng Hải', '2000-04-21', 'Nữ', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050045', 0),
('4151050046', 'Nguyễn Văn Tính', '2000-03-03', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050046', 0),
('4151050047', 'Hứa Tuấn Anh', '2000-08-17', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050047', 0),
('4151050048', 'Nguyễn Ngọc Nguyên', '2000-09-16', 'Nam', '0374766182', 'nguyen4224hn@gmail.com', 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050048', 1),
('4151050049', 'Trần Toàn Thắng', '2000-12-21', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050049', 0),
('4151050050', 'Nguyễn Thị Mỹ Chi', '2000-12-30', 'Nữ', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050050', 0),
('4151050051', 'Nguyễn Công Tuấn', '2000-12-05', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050051', 0),
('4151050052', 'Nguyễn Thị Thu Thảo', '2000-04-10', 'Nữ', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050052', 0),
('4151050053', 'Huỳnh Văn Thống', '2000-05-19', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050053', 0),
('4151050054', 'Trần Thị Thu Uyên', '2000-01-01', 'Nữ', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050054', 0),
('4151050055', 'Nguyễn Hoàng Thiện', '2000-02-04', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050055', 0),
('4151050056', 'Trương Thành Vĩ', '2000-08-06', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Buộc thôi học', '4151050056', 0),
('4151050057', 'Nguyễn Hữu Trí', '2000-07-05', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050057', 0),
('4151050058', 'Huỳnh Ngọc Bảo', '2000-02-08', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050058', 0),
('4151050059', 'Nguyễn Tấn Lên', '1999-09-29', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050059', 0),
('4151050060', 'Lê Anh Tài', '2000-06-15', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050060', 1),
('4151050061', 'Trần Tuấn Phát', '2000-10-10', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050061', 0),
('4151050062', 'Võ Minh Thẩn', '2000-08-02', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050062', 0),
('4151050063', 'Hồ Ngọc Nhân', '2000-10-09', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050063', 0),
('4151050064', 'Bùi Thị Chi', '2000-10-10', 'Nữ', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050064', 0),
('4151050065', 'Võ Thành Lâm', '2000-09-18', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050065', 0),
('4151050066', 'Võ Tường Vy', '2000-03-08', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050066', 0),
('4151050067', 'Nguyễn Xuân Thảo Nguyên', '2000-10-26', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050067', 0),
('4151050068', 'Nguyễn Thanh Phúc', '2000-06-03', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050068', 0),
('4151050070', 'Trần Nguyễn Anh Dũng', '2000-06-15', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050070', 0),
('4151050071', 'Huỳnh Văn Hào', '2000-02-22', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050071', 0),
('4151050072', 'Huỳnh Hồ Văn Duy', '2000-03-05', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050072', 0),
('4151050073', 'Phan Minh Sang', '2000-11-17', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Nghỉ học tạm thời', '4151050073', 0),
('4151050074', 'Phan Lê An Khang', '2000-09-15', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050074', 0),
('4151050075', 'Hoàng Thanh Lâm', '2000-07-28', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050075', 0),
('4151050076', 'Bùi Đạt', '2000-08-06', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050076', 0),
('4151050077', 'Bùi Thanh Sơn', '2000-11-25', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050077', 0),
('4151050078', 'Lê Hữu Châu', '2000-12-18', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Thôi học', '4151050078', 0),
('4151050079', 'Nguyễn Trung Hậu', '2000-02-22', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050079', 0),
('4151050080', 'Dương Quốc Biên', '2000-02-08', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050080', 0),
('4151050081', 'Hà Thị Mỹ Kim', '2000-08-16', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Thôi học', '4151050081', 0),
('4151050084', 'Huỳnh Vạn Toàn', '2000-11-18', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050084', 0),
('4151050085', 'Phan Minh Tâm', '2000-08-05', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050085', 0),
('4151050086', 'Phan Thị Lam Tuyền', '1999-11-28', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050086', 0),
('4151050087', 'Nguyễn Thanh Hưng', '2000-11-29', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050087', 0),
('4151050088', 'Châu Hiền Trân', '2000-08-11', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050088', 0),
('4151050089', 'Bùi Thanh Trúc', '2000-10-02', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050089', 0),
('4151050090', 'Lê Tiêu Kiếm', '2000-09-16', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050090', 0),
('4151050091', 'Phạm Minh Tú', '1999-12-09', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050091', 0),
('4151050092', 'Nguyễn Phương Trâm', '2000-07-26', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050092', 0),
('4151050093', 'Huỳnh Gia Bảo', '2000-12-09', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050093', 0),
('4151050094', 'Nguyễn Ngọc Nam', '2000-07-28', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050094', 0),
('4151050095', 'Nguyễn Văn Hải', '2000-05-17', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050095', 0),
('4151050097', 'Võ Ngọc Hưng', '2000-07-26', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050097', 0),
('4151050098', 'Huỳnh Thị Kim Loan', '2000-03-12', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050098', 0),
('4151050099', 'Hồ Nguyễn Trí Huy', '2000-12-26', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050099', 0),
('4151050100', 'Nguyễn Tường Vũ', '2000-06-06', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Buộc thôi học', '4151050100', 0),
('4151050101', 'Đồng Vĩnh Tín', '2000-08-20', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050101', 0),
('4151050102', 'Nguyễn Nhật Minh', '2000-02-28', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050102', 0),
('4151050103', 'Trần Ngọc Mân', '2000-09-15', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050103', 0),
('4151050104', 'Nguyễn Thành Đạt', '2000-04-02', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050104', 0),
('4151050105', 'Bùi Văn Tính', '2000-11-13', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050105', 0),
('4151050106', 'Nguyễn Ngọc Tú', '2000-06-20', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050106', 0),
('4151050107', 'Phạm Nhật Duy', '2000-07-09', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Buộc thôi học', '4151050107', 0),
('4151050108', 'Trần Quốc Việt', '2000-12-25', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050108', 0),
('4151050109', 'Lê Đức Hiếu', '2000-03-23', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050109', 0),
('4151050110', 'Nguyễn Thanh Trương', '2000-04-12', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050110', 0),
('4151050111', 'Đỗ Đình Hưng', '2000-09-14', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Buộc thôi học', '4151050111', 0),
('4151050112', 'Huỳnh Tín Trọng', '2000-02-25', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050112', 0),
('4151050113', 'Nguyễn Lê Phương', '2000-08-20', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050113', 0),
('4151050114', 'Đinh Thành Thắng', '2000-07-20', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050114', 0),
('4151050115', 'Trần Thị Thanh Tuyền', '2000-11-22', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050115', 0),
('4151050116', 'Nguyễn Thành Na', '2000-02-27', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Buộc thôi học', '4151050116', 0),
('4151050117', 'Nguyễn Hữu Đoan', '2000-04-21', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050117', 0),
('4151050118', 'Võ Văn Thức', '2000-11-04', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050118', 0),
('4151050119', 'Lê Phước Sáng', '2000-08-20', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050119', 0),
('4151050120', 'Hồ Lê Bảo', '2000-09-05', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050120', 0),
('4151050121', 'Bùi Du Nam Khánh', '2000-06-04', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050121', 0),
('4151050122', 'Nguyễn Ngọc Phú', '2000-05-02', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050122', 0),
('4151050123', 'Trần Thị Tuyết Trinh', '2000-08-04', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050123', 0),
('4151050124', 'Nguyễn Hoàng Sinh', '2000-06-20', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Buộc thôi học', '4151050124', 0),
('4151050125', 'Phạm Văn Đô', '2000-09-01', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Buộc thôi học', '4151050125', 0),
('4151050126', 'Trần Quốc Bảo', '2000-01-01', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050126', 0),
('4151050127', 'Hồ Thanh Bình', '2000-02-29', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050127', 0),
('4151050128', 'Trần Văn Phong', '2000-02-20', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050128', 0),
('4151050129', 'Nguyễn Phi Hổ', '2000-06-19', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050129', 0),
('4151050130', 'Đinh Thị Huệ Thắm', '2000-10-09', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050130', 0),
('4151050131', 'Đỗ Minh Trung', '2000-04-08', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050131', 0),
('4151050132', 'Võ Minh Hiếu', '2000-04-16', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Nghỉ học tạm thời', '4151050132', 0),
('4151050133', 'Ngô Tấn Trường', '2000-12-12', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050133', 0),
('4151050134', 'Nguyễn Đình Đệ', '2000-10-24', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050134', 0),
('4151050135', 'Đoàn Quốc Lợi', '2000-12-18', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050135', 0),
('4151050136', 'Đặng Anh Bá', '2000-11-11', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Thôi học', '4151050136', 0),
('4151050137', 'Trần Hồng Phương Anh', '2000-02-15', 'Nữ', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Thôi học', '4151050137', 0),
('4151050138', 'Nguyễn Thị Châu Khâu', '2000-04-19', 'Nữ', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050138', 0),
('4151050139', 'Nguyễn Hồng Phong', '2000-07-24', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050139', 0),
('4151050140', 'Nguyễn Thị Thơm', '2000-08-12', 'Nữ', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050140', 0),
('4151050141', 'Nguyễn Quốc Hiếu', '2000-11-04', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050141', 0),
('4151050142', 'Đồng Xuân Hoàng', '2000-01-25', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050142', 0),
('4151050143', 'Đinh Thị Hạnh Trang', '2000-05-02', 'Nữ', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050143', 0),
('4151050144', 'Trần Đức Thanh', '2000-09-28', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050144', 0),
('4151050145', 'Lê Thị Như Trâm', '2000-11-04', 'Nữ', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050145', 0),
('4151050146', 'Nguyễn Văn Hoài Trung', '2000-10-04', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050146', 0),
('4151050147', 'Nguyễn Thanh Lâm', '2000-02-15', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050147', 0),
('4151050148', 'Nguyễn Duy Tư', '2000-02-04', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Buộc thôi học', '4151050148', 0),
('4151050149', 'Hồ Thị Hoài Thu', '2000-10-15', 'Nữ', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050149', 0),
('4151050150', 'Lê Thị Hương', '2000-06-30', 'Nữ', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050150', 0),
('4151050151', 'Hồ Nguyễn Hoàng Minh', '2000-10-22', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Buộc thôi học', '4151050151', 0),
('4151050152', 'Mai Đoàn Thạch Sơn', '2000-07-15', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050152', 0),
('4151050153', 'Nguyễn Tùng Long', '2000-06-15', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050153', 0),
('4151050154', 'Cao Văn Toàn', '2000-04-16', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050154', 0),
('4151050155', 'Nguyễn Tuấn Khải', '2000-06-21', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050155', 0),
('4151050156', 'Huỳnh Thị Mỹ Oanh', '2000-10-18', 'Nữ', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050156', 0),
('4151050157', 'Nguyễn Văn Hoá', '2000-10-09', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050157', 0),
('4151050158', 'Phan Thị Tuyết Nga', '2000-12-27', 'Nữ', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050158', 0),
('4151050159', 'Phạm Hữu Mạnh', '2000-10-10', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050159', 0),
('4151050160', 'Phạm Nguyễn Nhật Huy', '2000-07-06', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050160', 0),
('4151050161', 'Đỗ Chánh Toàn', '2000-05-06', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050161', 0),
('4151050162', 'Ngô Văn Quỳnh', '1999-07-23', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050162', 0),
('4151050163', 'Nguyễn Văn Hiệu', '2000-01-12', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050163', 0),
('4151050164', 'Trần Văn Quốc', '2000-03-02', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050164', 0),
('4151050165', 'Nguyễn Tất Ý', '2000-09-16', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Nghỉ học tạm thời', '4151050165', 0),
('4151050166', 'Hồ Văn Lộc', '2000-12-02', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050166', 0),
('4151050167', 'Trần Minh Khang', '2000-12-21', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Buộc thôi học', '4151050167', 0),
('4151050168', 'Diệp Thế Huy', '2000-10-01', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Buộc thôi học', '4151050168', 0),
('4151050169', 'Nguyễn Phúc Tấn', '2000-07-24', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050169', 0),
('4151050170', 'Trần Ngọc Vinh', '2000-04-02', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050170', 0),
('4151050171', 'Nguyễn Đình Dương', '2000-12-20', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Buộc thôi học', '4151050171', 0),
('4151050172', 'Phan Tấn Dũng', '2000-02-10', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050172', 0),
('4151050173', 'Đặng Thành Đạt', '2000-12-17', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Buộc thôi học', '4151050173', 0),
('4151050174', 'Trần Trí Mẫn', '2000-02-03', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050174', 0),
('4151050175', 'Trần Quốc Việt', '1999-11-24', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050175', 0),
('4151050176', 'Lê Tuấn Anh', '2000-02-24', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050176', 0),
('4151050177', 'Đặng Ngô Bảo Hoàng', '2000-02-28', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050177', 0),
('4151050178', 'Lê Trần Hữu Chánh', '2000-08-23', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050178', 0),
('4151050179', 'Nguyễn Quốc Tuấn', '1999-12-20', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Buộc thôi học', '4151050179', 0),
('4151050180', 'Võ Quốc Tuấn', '1999-02-23', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Buộc thôi học', '4151050180', 0),
('4151050181', 'Nguyễn Thị Kim Luyện', '2000-07-27', 'Nữ', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050181', 0),
('4151050182', 'Ngô Quang Thọ', '2000-11-13', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050182', 0),
('4151050183', 'Trần Lê Anh Dân', '2000-03-11', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Buộc thôi học', '4151050183', 0),
('4151050184', 'Hồ Xuân Lộc', '2000-11-23', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Buộc thôi học', '4151050184', 0),
('4151050185', 'Đỗ Ngọc Nam', '2000-01-10', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050185', 0),
('4151050186', 'Trần Đoàn Bảo Long', '2000-01-05', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050186', 0),
('4151050187', 'Hồ Hải Hà', '2000-10-09', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050187', 0),
('4151050188', 'Trần Hữu Phước', '2000-09-29', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Buộc thôi học', '4151050188', 0),
('4151050189', 'Trần Kim Quí', '2000-10-23', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Thôi học', '4151050189', 0),
('4151050190', 'Bùi Minh Hoàng', '1999-12-09', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050190', 0),
('4151050191', 'Nguyễn Văn Bằng', '1998-03-30', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050191', 0),
('4151050192', 'Ngô Nguyễn Tuấn Văn', '2000-11-25', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050192', 0),
('4151050193', 'Nguyễn Quang Thuận Thiên', '2000-04-01', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050193', 0),
('4151050194', 'Lê Anh Vũ', '2000-09-04', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050194', 0),
('4151050195', 'Huỳnh Bá Thiên', '2000-02-06', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050195', 0),
('4151050196', 'Nguyễn Trọng Tuấn', '2000-11-26', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050196', 0),
('4151050197', 'Lê Thị Minh Tâm', '2000-02-12', 'Nữ', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050197', 0),
('4151050198', 'Nguyễn Hữu Hoàng', '2000-12-27', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050198', 0),
('4151050199', 'Đinh Thanh Hoàng', '2000-01-11', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050199', 0),
('4151050200', 'Nguyễn Ngọc Tùng', '2000-08-03', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050200', 0),
('4151050201', 'Đoàn Hữu Khang', '2000-12-10', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050201', 0),
('4151050202', 'Lưu Công Cảnh', '2000-02-06', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050202', 0),
('4151050203', 'Nguyễn Khánh Phương', '2000-01-17', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050203', 0),
('4151050204', 'Ngô Châu Thanh', '2000-04-28', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050204', 0),
('4151050205', 'Phạm Thị Minh Thuỷ', '2000-08-16', 'Nữ', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050205', 0),
('4151050206', 'Hàng Thanh Luân', '2000-09-17', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050206', 1),
('4151050207', 'Trần Trương Vi', '2000-06-12', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050207', 0),
('4151050208', 'Lê Thị Kim Ái', '2000-05-24', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050208', 0),
('4151050209', 'Nguyễn Thanh Bình', '2000-05-05', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050209', 0),
('4151050210', 'Mai Thị Chi', '1999-10-20', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050210', 0),
('4151050211', 'Hồ Duy Khang', '2000-10-07', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050211', 0),
('4151050212', 'Cù Minh Tích', '1999-11-25', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050212', 0),
('4151050213', 'Ngô Đức Tường', '2000-03-20', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050213', 0);
INSERT INTO `sinhvien` (`MaSinhVien`, `HoTen`, `NgaySinh`, `GioiTinh`, `SDT`, `Email`, `MaLop`, `MaChuyenNganh`, `ChucVu`, `TinhTrangHoc`, `MatKhau`, `Quyen`) VALUES
('4151050214', 'Trần Hoàng Anh Đức', '1997-11-01', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050214', 0),
('4151050216', 'Nguyễn Quốc Thắng', '2000-01-17', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Thôi học', '4151050216', 0),
('4151050217', 'Hoàng Thị Minh Huệ', '2000-07-08', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050217', 0),
('4151050218', 'Võ Thị Ngọc Trang', '2000-08-27', 'Nữ', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Còn học', '4151050218', 0),
('4151050219', 'Trần Xuân Vinh', '2000-03-20', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050219', 0),
('4151050220', 'Lê Thiện Lộc', '2000-09-30', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050220', 0),
('4151050221', 'Hồ Trần Anh Tú', '2000-10-15', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Thôi học', '4151050221', 0),
('4151050222', 'Võ Trường Vũ', '2000-04-24', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050222', 0),
('4151050223', 'Nguyễn Hoàng Long', '2000-12-20', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Buộc thôi học', '4151050223', 0),
('4151050224', 'Hồ Phúc Trang', '2000-03-05', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050224', 0),
('4151050225', 'Ngô Văn Tiến', '2000-04-25', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050225', 0),
('4151050226', 'Phạm Mạnh Bình', '2000-01-08', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050226', 0),
('4151050227', 'Nguyễn Thanh Phong', '2000-07-18', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Buộc thôi học', '4151050227', 0),
('4151050228', 'Lê Chí Sang', '1999-11-08', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Buộc thôi học', '4151050228', 0),
('4151050229', 'Cao Văn Phúc', '2000-07-12', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Thôi học', '4151050229', 0),
('4151050230', 'Sitouthay Xayalat Xayalat', '1998-08-20', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050230', 0),
('4151050231', 'Khammone Xaiyased Xaiyased', '1997-04-15', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050231', 0),
('4151050232', 'Souksakhone Souvannapheng Souvannapheng', '1999-05-21', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050232', 0),
('4151050233', 'Chanthaphone Khieovongphachanh Khieovongphachanh', '1996-01-01', 'Nữ', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050233', 0),
('4151050234', 'Nouna Khamvongsa Khamvongsa', '1999-12-01', 'Nữ', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151050234', 0),
('4151050235', 'Sengdavanh Manivong Manivong', '1999-08-28', 'Nữ', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050235', 0),
('4151050236', 'Hà Đức Thắng', '2000-06-07', 'Nam', NULL, NULL, 'CNTTK41B', 'CNTT', '', 'Buộc thôi học', '4151050236', 0),
('4151050237', 'Nguyễn Duy Hải', '1996-02-18', 'Nam', NULL, NULL, 'CNTTK41A', 'CNTT', '', 'Còn học', '4151050237', 0),
('4151059001', 'Ma Thanh Hoàng', '2000-06-25', 'Nam', NULL, NULL, 'CNTTK41C', 'CNTT', '', 'Còn học', '4151059001', 0),
('4151190001', 'Võ Nguyên Vọng', '2000-04-06', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190001', 0),
('4151190002', 'Đoàn Minh Trí', '2000-08-11', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190002', 0),
('4151190003', 'Nguyễn Lê Anh Thuận', '2000-10-10', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190003', 0),
('4151190004', 'Nguyễn Hồng Việt', '1997-12-07', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190004', 0),
('4151190005', 'Đào Nhơn Tâm', '2000-11-25', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190005', 0),
('4151190006', 'Phan Vũ Nhật Trường', '1999-06-24', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190006', 0),
('4151190007', 'Nguyễn Hữu Cương', '1999-01-05', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Buộc thôi học', '4151190007', 0),
('4151190008', 'Nguyễn Thị Thu Hà', '2000-05-03', 'Nữ', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190008', 0),
('4151190009', 'Nguyễn Tấn Quí', '2000-12-27', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190009', 0),
('4151190010', 'Phạm Công Luận', '2000-12-17', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190010', 0),
('4151190011', 'Lê Nguyễn Minh Thư', '2000-04-15', 'Nữ', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190011', 0),
('4151190012', 'Phan Ngọc Bình', '2000-12-11', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Buộc thôi học', '4151190012', 0),
('4151190013', 'Chu Đình Hiệp', '2000-12-10', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Buộc thôi học', '4151190013', 0),
('4151190014', 'Nguyễn Đăng Trình', '1999-05-09', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190014', 0),
('4151190015', 'Nguyễn Duy Thế', '2000-05-07', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190015', 0),
('4151190016', 'Lê Trọng Nghĩa', '2000-10-09', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190016', 0),
('4151190017', 'Võ Nhật Linh', '2000-06-16', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190017', 0),
('4151190018', 'Lê Minh Nam', '1997-04-04', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190018', 0),
('4151190019', 'Đào Văn Tuấn', '2000-04-19', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Thôi học', '4151190019', 0),
('4151190020', 'Cao Chí Kiên', '2000-09-06', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190020', 0),
('4151190021', 'Nguyễn Văn Ngọc', '2000-09-28', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190021', 0),
('4151190022', 'Nguyễn Trọng Nhân', '1998-09-29', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190022', 0),
('4151190023', 'Đoàn Thanh Tuấn', '2000-08-09', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190023', 0),
('4151190024', 'Trần Tuấn Tài', '1997-12-07', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Buộc thôi học', '4151190024', 0),
('4151190025', 'Võ Minh Trọng', '2000-04-28', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190025', 0),
('4151190026', 'Hoàng Minh Nhân', '2000-10-21', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190026', 0),
('4151190028', 'Huỳnh Công Thành', '2000-09-22', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190028', 0),
('4151190029', 'Nguyễn Đàm Quốc Ân', '2000-05-13', 'Nam', NULL, NULL, 'KTPMK41', 'KTPM', '', 'Còn học', '4151190029', 0),
('4251050001', 'A Phùng Hoàng Anh', '2001-09-27', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050001', 0),
('4251050002', 'Nguyễn Tích Thiện', '2001-10-01', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050002', 0),
('4251050003', 'Nguyễn Minh Châu', '2001-08-03', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050003', 0),
('4251050004', 'Nguyễn Quang Nhật', '2001-05-09', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050004', 0),
('4251050005', 'Đặng Như Thính', '2001-11-09', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050005', 0),
('4251050006', 'Nguyễn Tấn Lực', '2001-10-02', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050006', 0),
('4251050007', 'Võ Thành Luân', '2000-11-02', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050007', 0),
('4251050008', 'Huỳnh Anh Trọng', '2001-06-14', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050008', 0),
('4251050009', 'Nguyễn Vũ Quyết Tiến', '2001-08-13', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050009', 0),
('4251050010', 'Nguyễn Quốc Cường', '1998-01-10', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050010', 0),
('4251050011', 'Văn Hồng Thái', '2001-12-20', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050011', 0),
('4251050012', 'Nguyễn Phạm Thành Luân', '2001-04-29', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050012', 0),
('4251050013', 'Mai Anh Bắc', '2001-05-17', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050013', 0),
('4251050014', 'Võ Hoàng Quân', '1998-09-22', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050014', 0),
('4251050015', 'Trần Quốc Bảo', '2001-05-27', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050015', 0),
('4251050016', 'Nguyễn Kỳ Huy', '2001-02-10', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050016', 0),
('4251050017', 'Phạm Minh Dân', '2001-02-25', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050017', 0),
('4251050018', 'Đồng Nguyễn Hữu Phước', '2001-11-08', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050018', 0),
('4251050019', 'Đinh Minh Toại', '2001-11-12', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050019', 0),
('4251050020', 'Trần Lê Nhật Trường', '2001-10-03', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050020', 0),
('4251050021', 'Nguyễn Minh Mạnh', '2001-12-20', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050021', 0),
('4251050022', 'Phan Trương Lĩnh', '2001-06-16', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050022', 0),
('4251050023', 'Trương Huỳnh Anh Ngữ', '2001-12-09', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050023', 0),
('4251050024', 'Nguyễn Đức Thiện', '2000-09-28', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050024', 0),
('4251050025', 'Nguyễn Quốc Tuấn', '2001-03-03', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050025', 0),
('4251050026', 'Nguyễn Thị Hồng Loan', '2001-09-08', 'Nữ', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050026', 0),
('4251050027', 'Trần Anh Việt', '2001-10-18', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050027', 0),
('4251050028', 'Phạm Ngọc Hảo', '2001-09-18', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050028', 0),
('4251050029', 'Lê Thanh Tùng', '2001-04-15', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050029', 0),
('4251050030', 'Trần Văn Luận', '2001-06-22', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050030', 0),
('4251050031', 'Hoàng Ngọc Tùng', '2001-06-29', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050031', 0),
('4251050032', 'Nguyễn Hữu Thành', '2001-12-26', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050032', 0),
('4251050033', 'Đặng Thành Chương', '2001-02-02', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050033', 0),
('4251050034', 'Đoàn Xuân Thịnh', '2000-12-25', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050034', 0),
('4251050035', 'Ksor H\' Nham', '2000-02-08', 'Nữ', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050035', 0),
('4251050036', 'Thái Bá Tường', '1999-07-28', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050036', 0),
('4251050037', 'Lê Quang Sơn', '2001-12-10', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050037', 0),
('4251050038', 'Nguyễn Thị Thu Liễu', '2001-10-15', 'Nữ', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050038', 0),
('4251050040', 'Nguyễn Lê Huy', '2000-12-22', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050040', 0),
('4251050041', 'Trần Văn Tới', '2001-04-29', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050041', 0),
('4251050042', 'Trần Đăng Quang', '2001-01-19', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050042', 0),
('4251050043', 'Nguyễn Thanh Trợ', '2001-10-01', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050043', 0),
('4251050044', 'Ung Minh Hoài', '2001-04-29', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050044', 0),
('4251050045', 'Đỗ Minh Tâm', '2001-04-13', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050045', 0),
('4251050046', 'Đặng Anh Khoa', '2001-12-20', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050046', 0),
('4251050047', 'Nguyễn Xuân Đô', '2001-08-10', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050047', 0),
('4251050048', 'Hà Diễm Nữ', '2001-05-28', 'Nữ', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050048', 0),
('4251050049', 'Nguyễn Tấn Luân', '2001-03-01', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050049', 0),
('4251050050', 'Phạm Vũ Tiến', '2001-04-21', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050050', 0),
('4251050051', 'Lương Nguyễn', '2001-03-04', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050051', 0),
('4251050052', 'Phạm Thị Ly', '2001-05-15', 'Nữ', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050052', 0),
('4251050053', 'Đào Anh Ý', '2001-09-21', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050053', 0),
('4251050054', 'Nguyễn Đình Tân', '2001-01-06', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050054', 0),
('4251050055', 'Trần Đức Hiệp', '2001-05-03', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050055', 0),
('4251050056', 'Võ Trung Tín', '2001-11-29', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050056', 0),
('4251050057', 'Nguyễn Nam Khánh', '2001-09-20', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050057', 0),
('4251050058', 'Nguyễn Văn Lưu', '2001-05-24', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050058', 0),
('4251050059', 'Lý Hữu Đại', '2001-05-13', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050059', 0),
('4251050060', 'Huỳnh Anh Kiệt', '2000-04-27', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050060', 0),
('4251050061', 'Huỳnh Tấn Nhật Minh', '2001-11-10', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050061', 0),
('4251050062', 'Võ Song Nhưng', '2001-08-05', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050062', 0),
('4251050063', 'Nguyễn Đức Nghĩa', '2001-12-10', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050063', 0),
('4251050064', 'Phan Văn Nghĩa', '2001-04-01', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050064', 0),
('4251050065', 'Ngô Thị Bích Tiên', '2001-02-27', 'Nữ', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050065', 0),
('4251050066', 'Nguyễn Văn Dìa', '2001-10-16', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050066', 0),
('4251050067', 'Bùi Văn Tình', '2001-08-01', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050067', 0),
('4251050068', 'Nguyễn Hữu Phương', '2001-08-24', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050068', 0),
('4251050069', 'Đỗ Quốc Kiệt', '2001-09-19', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050069', 0),
('4251050070', 'Trần Quốc Bảo', '2001-06-28', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050070', 0),
('4251050071', 'Trần Thanh Nam', '2001-02-02', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050071', 0),
('4251050072', 'Lê Thị Bảo Quyên', '2001-11-13', 'Nữ', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050072', 0),
('4251050073', 'Nguyễn Thuỳ Trang', '2001-09-23', 'Nữ', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050073', 0),
('4251050074', 'Trần Minh Thư', '2001-12-29', 'Nữ', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050074', 0),
('4251050075', 'Nguyễn Thành Long', '2001-09-28', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050075', 0),
('4251050076', 'Trần Quang Ý', '2001-05-18', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050076', 0),
('4251050077', 'Nguyễn Lê Vũ', '2001-07-01', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050077', 0),
('4251050078', 'Phan Minh Toàn', '2001-11-05', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050078', 0),
('4251050079', 'Võ Tân Khoa', '2001-03-16', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050079', 0),
('4251050080', 'Nguyễn Phan Huy Hoàng', '2000-07-30', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050080', 0),
('4251050081', 'Thái Thanh Tùng', '2001-01-12', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050081', 0),
('4251050082', 'Huỳnh Thành Nhân', '2001-08-31', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050082', 0),
('4251050083', 'Lê Văn Bảo', '2001-10-22', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050083', 0),
('4251050084', 'Nguyễn Trí An', '2001-11-01', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050084', 0),
('4251050085', 'Nguyễn Cảnh Đệ', '1995-09-05', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050085', 0),
('4251050086', 'Nguyễn Long Vũ', '2001-09-05', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050086', 0),
('4251050087', 'Nguyễn Mộng Danh', '2001-09-24', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050087', 0),
('4251050088', 'Hàn Quốc Nguyên', '2000-07-31', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050088', 0),
('4251050089', 'Nguyễn Trọng Tuấn', '2001-08-11', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050089', 0),
('4251050090', 'Nguyễn Võ Quang Hoá', '2001-01-06', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050090', 0),
('4251050091', 'Võ Hoài Việt', '2001-06-22', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050091', 0),
('4251050092', 'Nguyễn Bá Tín', '2000-09-29', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050092', 0),
('4251050093', 'Huỳnh Trọng Đại', '2001-07-04', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050093', 0),
('4251050094', 'Lê Thanh Phú', '2001-06-05', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050094', 0),
('4251050095', 'Thái Quốc Tâm', '2001-03-18', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050095', 0),
('4251050096', 'Huỳnh Văn Phúc', '2001-04-20', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050096', 0),
('4251050097', 'Trần Triều Vỹ', '2001-09-13', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050097', 0),
('4251050098', 'Nguyễn Minh Thắng', '1999-08-29', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050098', 0),
('4251050099', 'Nguyễn Lê Anh Thư', '2001-07-12', 'Nữ', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050099', 0),
('4251050100', 'Nguyễn Chí Bảo', '2001-12-19', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050100', 0),
('4251050101', 'Nguyễn Trần Hoài Nam', '2001-10-16', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050101', 0),
('4251050102', 'Đỗ Minh Hiện', '2001-04-10', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050102', 0),
('4251050103', 'Trần Quốc Cường', '2000-06-14', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050103', 0),
('4251050104', 'Nguyễn Văn Đan Trường', '2001-03-27', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Thôi học', '4251050104', 0),
('4251050105', 'Nguyễn Thị Kiều Duyên', '2001-02-12', 'Nữ', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050105', 0),
('4251050106', 'Vương Thoại Mỹ Vy', '2001-04-16', 'Nữ', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050106', 0),
('4251050107', 'Nguyễn Trung Nghĩa', '2001-08-01', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050107', 0),
('4251050108', 'Nguyễn Đức Ngọc Ẩn', '2001-07-15', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050108', 0),
('4251050109', 'Lê Thanh Tính', '2001-05-06', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050109', 0),
('4251050112', 'Phạm Hiếu Trung', '2001-11-20', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050112', 0),
('4251050113', 'Phạm Xuân Tân', '2001-04-22', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050113', 0),
('4251050114', 'Vũ Văn Phước', '2001-05-14', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050114', 0),
('4251050115', 'Trần Việt Pháp', '2001-07-31', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050115', 0),
('4251050116', 'Nay Y Bô', '2001-07-08', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050116', 0),
('4251050117', 'Nguyễn Thi Thơ', '2001-11-23', 'Nữ', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050117', 0),
('4251050118', 'Phạm Đinh Chiêu', '2001-10-10', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050118', 0),
('4251050119', 'Trần Ngọc Tiền', '2001-09-12', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050119', 0),
('4251050120', 'Hoàng Như Việt', '2001-11-14', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050120', 0),
('4251050121', 'Lê Hữu Hoàng Tấn', '2000-10-02', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050121', 0),
('4251050122', 'Lê Minh Hoàng', '2001-06-12', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050122', 0),
('4251050123', 'Hà Đức Thắng', '2000-06-07', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050123', 0),
('4251050124', 'Võ Thanh Tân', '2001-11-29', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050124', 0),
('4251050125', 'Lê Trung Hậu', '2001-12-12', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050125', 0),
('4251050126', 'Trần Văn Nam', '2001-06-25', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Thôi học', '4251050126', 0),
('4251050127', 'Nguyễn Hoàng Vũ', '2001-08-22', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050127', 0),
('4251050128', 'Nguyễn Nguyên Tính', '2001-03-14', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050128', 0),
('4251050129', 'Nguyễn Thành Trung', '2001-07-18', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050129', 0),
('4251050130', 'Phạm Đình Thơ', '2001-05-01', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050130', 0),
('4251050131', 'Đoàn Văn Giàu', '2001-08-10', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050131', 0),
('4251050132', 'Đoàn Văn Sang', '2000-08-21', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050132', 0),
('4251050133', 'Nguyễn Trần Hiền', '2001-09-19', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050133', 0),
('4251050134', 'Nguyễn Đức Dự', '2001-11-28', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050134', 0),
('4251050135', 'Nguyễn Văn Bảo', '2001-05-14', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050135', 0),
('4251050136', 'Phạm Trần Mỹ Diễm', '2001-03-12', 'Nữ', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050136', 0),
('4251050137', 'Bùi Đăng Khoa', '2001-09-28', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050137', 0),
('4251050138', 'Nguyễn Trần Hữu Huy', '2001-04-26', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050138', 0),
('4251050139', 'Man Tiến Thắng', '2001-12-20', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Thôi học', '4251050139', 0),
('4251050140', 'Hoàng Thị Thuỳ Linh', '2001-08-11', 'Nữ', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050140', 0),
('4251050141', 'Huỳnh Tấn Đạt', '2001-05-29', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Thôi học', '4251050141', 0),
('4251050142', 'Trương Anh Hào', '2001-10-14', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050142', 0),
('4251050143', 'Nguyễn Ngọc Khoan', '2001-11-15', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050143', 0),
('4251050144', 'Nguyễn Xuân Trường', '2001-07-31', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050144', 0),
('4251050145', 'Phan Văn Ban', '2001-10-07', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050145', 0),
('4251050146', 'Trần Minh Vương', '2001-10-25', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050146', 0),
('4251050147', 'Lê Hoàng Lâm', '2001-12-02', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050147', 0),
('4251050148', 'Nguyễn Trọng Nghĩa', '2001-01-02', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Thôi học', '4251050148', 0),
('4251050149', 'Lê Huỳnh Kha', '1998-03-08', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050149', 0),
('4251050150', 'Nguyễn Thị Yến Như', '2001-01-01', 'Nữ', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050150', 0),
('4251050151', 'Nguyễn Trịnh Nam Long', '2001-01-14', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050151', 0),
('4251050152', 'Nguyễn Thanh Hoà', '2001-04-18', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050152', 0),
('4251050153', 'Hồ Văn Cường', '2001-03-17', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050153', 0),
('4251050154', 'Đặng Thành Quốc', '2001-08-06', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050154', 0),
('4251050155', 'Trần Xuân Tiến', '2001-12-07', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050155', 0),
('4251050156', 'Đỗ Quốc Khánh', '2001-09-02', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050156', 0),
('4251050157', 'Phan Hữu Quang', '2001-02-13', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050157', 0),
('4251050158', 'Lê Đình Nam', '1999-11-24', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050158', 0),
('4251050159', 'Huỳnh Trí Hiếu', '2001-11-30', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050159', 0),
('4251050160', 'Lưu Văn Đạt', '2001-10-10', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050160', 0),
('4251050161', 'Trương Anh Khoa', '2001-12-21', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050161', 0),
('4251050162', 'Tôn Huệ Hiệu', '1999-06-26', 'Nữ', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050162', 0),
('4251050163', 'Hà Trọng Quân', '2001-12-24', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050163', 0),
('4251050164', 'Phạm Đình Văn', '2001-02-08', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050164', 0),
('4251050165', 'Nguỵ Thị Tâm Như', '2001-04-20', 'Nữ', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050165', 0),
('4251050166', 'Võ Thị Kim Chi', '2001-07-18', 'Nữ', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050166', 0),
('4251050167', 'Nguyễn Đức Phong', '2001-07-30', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050167', 0),
('4251050168', 'Nguyễn Trần Lực', '2001-06-08', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050168', 0),
('4251050169', 'Hồ Phương', '2001-01-01', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050169', 0),
('4251050170', 'Nguyễn Thanh Nam', '2001-09-02', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Thôi học', '4251050170', 0),
('4251050171', 'Huỳnh Nguyễn Nhất Uyên', '2001-10-20', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050171', 0),
('4251050172', 'Lê Duy Quỳnh', '2001-05-20', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050172', 0),
('4251050173', 'Lê Tấn Toàn', '2001-12-26', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050173', 0),
('4251050175', 'Nguyễn Văn Hưng', '2001-07-14', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050175', 0),
('4251050176', 'Lê Quốc Mạnh', '2001-11-25', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050176', 0),
('4251050177', 'Bùi Long Đang', '2001-01-07', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050177', 0),
('4251050178', 'Nguyễn Thanh Bảo', '2001-04-20', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050178', 0),
('4251050179', 'Huỳnh Nguyễn Ngọc Hải', '1997-11-22', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050179', 0),
('4251050180', 'Châu Thành Đạt', '2001-12-22', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050180', 0),
('4251050181', 'Phan Văn Khải', '2001-05-02', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050181', 0),
('4251050182', 'Tăng Xuân Phụng', '2001-04-12', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050182', 0),
('4251050183', 'Phạm Hùng', '2001-04-05', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050183', 0),
('4251050184', 'Hồ Hoàng Ý', '1999-02-02', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050184', 0),
('4251050185', 'Nguyễn Văn Tú', '2001-12-12', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050185', 0),
('4251050186', 'Nguyễn Thị Như Quỳnh', '2000-06-30', 'Nữ', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050186', 0),
('4251050187', 'Phan Thanh Vũ', '1996-02-02', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050187', 0),
('4251050188', 'Nguyễn Như Ý', '2001-04-14', 'Nữ', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050188', 0),
('4251050189', 'Phạm Đỗ Vương Quốc', '2001-01-31', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050189', 0),
('4251050190', 'Hồ Phi Toàn', '2001-01-03', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050190', 0),
('4251050191', 'Nguyễn Thị Cẩm Sương', '2000-02-19', 'Nữ', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050191', 0),
('4251050192', 'Lê Thái Hoà', '2001-10-23', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050192', 0),
('4251050194', 'Lê Đức Ánh', '2001-06-01', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050194', 0),
('4251050195', 'Huỳnh Tấn Lộc', '2001-03-05', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050195', 0),
('4251050196', 'Nguyễn Trung Nhân', '2001-07-25', 'Nữ', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Thôi học', '4251050196', 0),
('4251050197', 'Đào Công Lương', '2001-01-02', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050197', 0),
('4251050198', 'Nguyễn Quốc Thịnh', '2001-11-01', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050198', 0),
('4251050199', 'Nguyễn Thị Tình', '2001-06-22', 'Nữ', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050199', 0),
('4251050200', 'Đỗ Ngọc Nhân', '2000-09-01', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050200', 0),
('4251050201', 'Cao Duy Nhật', '2001-12-02', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050201', 0),
('4251050202', 'Trần Hương Diễm Quỳnh', '2001-07-20', 'Nữ', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050202', 0),
('4251050203', 'Phạm Minh Tài', '2001-06-29', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050203', 0),
('4251050204', 'Trần Kim Phát', '2001-09-01', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050204', 0),
('4251050205', 'Nguyễn Trường Lâm', '2001-03-24', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050205', 0),
('4251050206', 'Trương Thành Nam', '2001-03-22', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050206', 0),
('4251050207', 'Nguyễn Thanh Sự', '2001-02-18', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050207', 0),
('4251050208', 'Nguyễn Quốc Cảnh', '2001-07-17', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050208', 0),
('4251050209', 'Nguyễn Long Phục', '2000-03-18', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050209', 0),
('4251050210', 'Hà Nguyễn Ngọc Trí', '2001-06-15', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050210', 0),
('4251050211', 'Nguyễn Tâm Thiên', '2001-02-22', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050211', 0),
('4251050212', 'Trần Nhật Trường', '2001-12-11', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Thôi học', '4251050212', 0),
('4251050213', 'Võ Phi Long', '2001-08-16', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050213', 0),
('4251050214', 'Nguyễn Ích Nguyên', '2001-01-06', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050214', 0),
('4251050215', 'Trần Anh Kiệt', '2001-04-17', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050215', 0),
('4251050216', 'Lê Minh Nghĩa', '2001-06-27', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050216', 0),
('4251050217', 'Nguyễn Đức Huỳnh', '2000-09-29', 'Nam', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050217', 0),
('4251050218', 'Nguyễn Thị Thu Hiền', '2001-08-08', 'Nữ', NULL, NULL, 'CNTTK42B', 'CNTT', '', 'Còn học', '4251050218', 0),
('4251050219', 'Nguyễn Hữu Nhân', '2001-03-19', 'Nam', NULL, NULL, 'CNTTK42A', 'CNTT', '', 'Còn học', '4251050219', 0),
('4251050220', 'Dương Thái Vinh', '2000-03-19', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050220', 0),
('4251050221', 'Lê Văn Việt', '2000-04-28', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050221', 0),
('4251050222', 'Huỳnh Kim Thông', '2000-04-02', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050222', 0),
('4251050223', 'Soukpasong Kedsouvannasarn', '2001-03-23', 'Nữ', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050223', 0),
('4251050224', 'Neuathong Fongkhamdeng', '2000-05-27', 'Nữ', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050224', 0),
('4251050225', 'Nguyễn Đăng Tiến', '2001-08-16', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050225', 0),
('4251050226', 'Lê Nguyễn Trường Vũ', '2001-02-27', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050226', 0),
('4251050228', 'Bạch Nhật Vũ Xanh', '1995-03-02', 'Nam', NULL, NULL, 'CNTTK42C', 'CNTT', '', 'Còn học', '4251050228', 0),
('4251190001', 'Vũ Hoàng Ngọc Minh', '1996-08-18', 'Nam', NULL, NULL, 'KTPMK42', 'KTPM', '', 'Còn học', '4251190001', 0),
('4251190002', 'Lê Thiên Minh Hùng', '2001-01-01', 'Nam', NULL, NULL, 'KTPMK42', 'KTPM', '', 'Còn học', '4251190002', 0),
('4251190003', 'Nguyễn Quan Huy', '2001-09-08', 'Nam', NULL, NULL, 'KTPMK42', 'KTPM', '', 'Còn học', '4251190003', 0),
('4251190004', 'Bùi Thanh Nhật', '2001-02-09', 'Nam', NULL, NULL, 'KTPMK42', 'KTPM', '', 'Còn học', '4251190004', 0),
('4251190005', 'Phạm Tài', '1997-12-10', 'Nam', NULL, NULL, 'KTPMK42', 'KTPM', '', 'Thôi học', '4251190005', 0),
('4251190006', 'Nguyễn Đỗ Thế An', '2001-11-02', 'Nam', NULL, NULL, 'KTPMK42', 'KTPM', '', 'Còn học', '4251190006', 0),
('4251190007', 'Trịnh Đình Bảo', '2001-10-15', 'Nam', NULL, NULL, 'KTPMK42', 'KTPM', '', 'Thôi học', '4251190007', 0),
('4251190008', 'Bùi Thanh Sự', '1999-04-12', 'Nam', NULL, NULL, 'KTPMK42', 'KTPM', '', 'Còn học', '4251190008', 0),
('4251190009', 'Trần Sĩ Hiền', '1998-11-20', 'Nam', NULL, NULL, 'KTPMK42', 'KTPM', '', 'Còn học', '4251190009', 0),
('4251190011', 'Lê Hồ Thu Ngân', '2001-12-19', 'Nữ', NULL, NULL, 'KTPMK42', 'KTPM', '', 'Còn học', '4251190011', 0),
('4251190012', 'Nguyễn Minh Nhật', '2001-12-25', 'Nam', NULL, NULL, 'KTPMK42', 'KTPM', '', 'Còn học', '4251190012', 0),
('4251190013', 'Phan Nhật Tân', '2001-06-10', 'Nam', NULL, NULL, 'KTPMK42', 'KTPM', '', 'Còn học', '4251190013', 0),
('4251190014', 'Lê Đức Thiên', '2001-11-12', 'Nam', NULL, NULL, 'KTPMK42', 'KTPM', '', 'Còn học', '4251190014', 0),
('4351050001', 'Lê Thái An', '2002-04-29', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050001', 0),
('4351050004', 'Nguyễn Chánh An', '2002-03-18', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050004', 0),
('4351050005', 'Nguyễn Đình An', '2002-04-12', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050005', 0),
('4351050008', 'Phạm Quốc An', '2002-04-26', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050008', 0),
('4351050010', 'Tô Phạm Ngọc Anh', '2002-08-31', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050010', 0),
('4351050013', 'Nguyễn Hồng Bản', '2002-10-02', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050013', 0),
('4351050015', 'Lê Thế Bảo', '2002-07-25', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351050015', 0),
('4351050018', 'Nguyễn Quốc Bảo', '2002-01-27', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050018', 0),
('4351050022', 'Nguyễn Văn Bông', '2002-05-12', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050022', 0),
('4351050025', 'Khúc Bảo Châu', '2002-09-13', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050025', 0),
('4351050030', 'Nguyễn Bá Cường', '2002-02-08', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050030', 0),
('4351050032', 'Nguyễn Thanh Cường', '1997-08-18', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050032', 0),
('4351050035', 'Nguyễn Công Danh', '2002-08-28', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050035', 0),
('4351050038', 'Hồ Quang Đạt', '2002-09-06', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050038', 0),
('4351050040', 'Lê Quốc Đạt', '2002-04-26', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050040', 0),
('4351050045', 'Trần Nhật Đệ', '2002-11-24', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050045', 0),
('4351050054', 'Đồng Nguyễn Thế Duy', '2002-01-01', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050054', 0),
('4351050057', 'Hồ Duy Đình', '2002-10-04', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050057', 0),
('4351050059', 'Võ Gia Huy', '2002-01-13', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050059', 0),
('4351050063', 'Nguyễn Hoàng Hà', '2002-01-05', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050063', 0),
('4351050065', 'Nguyễn Trần Ngọc Hà', '2002-01-31', 'Nữ', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050065', 0),
('4351050073', 'Kpá Y Hào', '2001-06-07', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050073', 0),
('4351050075', 'Võ Nguyên Hào', '2001-08-08', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050075', 0),
('4351050078', 'Nguyễn Đức Hậu', '2002-11-09', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050078', 0),
('4351050080', 'Trương Thị Anh Hậu', '2002-02-24', 'Nữ', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050080', 0),
('4351050087', 'Võ Thị Hiền', '2002-05-18', 'Nữ', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050087', 0),
('4351050093', 'Trần Quang Hiếu', '2002-05-01', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050093', 0),
('4351050097', 'Nguyễn Gia Hoan', '2002-09-09', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050097', 0),
('4351050100', 'Huỳnh Kim Hoàng', '2002-06-18', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050100', 0),
('4351050102', 'Tống Văn Hoàng', '2002-04-01', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050102', 0),
('4351050103', 'TrầN Thị Thu HồNg', '2002-08-01', 'Nữ', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050103', 0),
('4351050109', 'Hồ Lê Hưng', '2002-10-04', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050109', 0),
('4351050116', 'Tăng Nhật Hưng', '2001-09-20', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050116', 0),
('4351050117', 'Trương Quang Hưng', '2002-07-08', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050117', 0),
('4351050121', 'Đặng Gia Huy', '2002-03-16', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050121', 0),
('4351050123', 'Dương Quốc Huy', '2002-02-20', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050123', 0),
('4351050129', 'Nguyễn Đức Huy', '2002-03-22', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050129', 0),
('4351050130', 'Nguyễn Hồng Huy', '2002-10-11', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050130', 0),
('4351050132', 'Trần Thanh Huy', '2002-07-24', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050132', 0),
('4351050133', 'Võ Gia Huy', '2002-01-19', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050133', 0),
('4351050134', 'Võ Quang Huy', '2000-04-12', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050134', 0),
('4351050136', 'Nguyễn Thị Thu Huyền', '2002-12-05', 'Nữ', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050136', 0),
('4351050139', 'Nguyễn Đình Khải', '2001-05-20', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050139', 0),
('4351050141', 'Phan Nguyên Khải', '2002-01-02', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050141', 0),
('4351050143', 'Nguyễn Đình Khang', '2002-08-29', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351050143', 0),
('4351050155', 'Nguyễn Anh Khoa', '1999-07-27', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050155', 0),
('4351050157', 'Nguyễn Trọng Khoa', '2002-03-07', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050157', 0),
('4351050159', 'Huỳnh Tuấn Kiệt', '2002-11-20', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050159', 0),
('4351050162', 'Lê Anh Kiệt', '2002-11-22', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351050162', 0),
('4351050166', 'Nguyễn Duy Len', '2002-01-25', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050166', 0),
('4351050171', 'Nguyễn Phan Hoài Linh', '2002-05-06', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050171', 0),
('4351050174', 'Trần Khánh Linh', '2002-10-09', 'Nữ', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050174', 0),
('4351050175', 'Vũ Thị Thùy Linh', '2002-02-25', 'Nữ', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050175', 0),
('4351050178', 'Đỗ Nguyễn Tấn Lộc', '2002-07-14', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050178', 0),
('4351050182', 'Đinh Quốc Long', '2002-10-22', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050182', 0),
('4351050184', 'Nguyễn Hoàng Long', '2002-04-27', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050184', 0),
('4351050187', 'Nguyễn Trần Luân', '2002-03-16', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050187', 0),
('4351050189', 'Nguyễn Văn Lương', '2002-09-27', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050189', 0),
('4351050192', 'Nguyễn Trương Phương Lý', '2002-11-16', 'Nữ', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050192', 0),
('4351050193', 'Nguyễn Trương Quỳnh Mai', '2002-05-19', 'Nữ', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050193', 0),
('4351050199', 'Nguyễn Trọng Minh', '2002-06-14', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050199', 0),
('4351050207', 'Võ Thị Thanh Nga', '2019-01-01', 'Nữ', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050207', 0),
('4351050210', 'Đặng Xuân Nghĩa', '2002-12-21', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050210', 0),
('4351050211', 'Kiều Lê Hoàng Nghĩa', '2002-07-15', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050211', 0),
('4351050212', 'Lê Hữu Nghĩa', '2002-12-19', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050212', 0),
('4351050221', 'Nguyễn Văn Nguyên', '2002-11-09', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050221', 0),
('4351050227', 'Nguyễn Trần Thiện Nhân', '2002-05-01', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050227', 0),
('4351050228', 'Nguyễn Trọng Nhân', '2002-06-02', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050228', 0),
('4351050233', 'Lê Thị Hồng Nhung', '2002-07-04', 'Nữ', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050233', 0),
('4351050234', 'Võ Thị Cẩm Nhung', '2002-11-07', 'Nữ', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050234', 0),
('4351050235', 'Nguyễn Văn Ni', '2002-10-04', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050235', 0),
('4351050238', 'Đào Tấn Phát', '2002-05-11', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050238', 0),
('4351050239', 'Trình Nguyễn Xuân Phát', '2002-11-06', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050239', 0),
('4351050244', 'Lê Trần Bảo Phúc', '2000-12-21', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050244', 0),
('4351050245', 'Nguyễn Hoàng Phúc', '2002-10-01', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050245', 0),
('4351050247', 'Trần Nguyễn Huy Phúc', '2002-10-10', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351050247', 0),
('4351050248', 'Kpă Siu Phước', '2001-12-19', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050248', 0),
('4351050257', 'Trương Hoàng Phương', '2002-06-25', 'Nữ', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050257', 0),
('4351050263', 'Huỳnh Anh Quốc', '2002-08-24', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050263', 0),
('4351050264', 'Nguyễn Thành Quốc', '2002-07-19', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050264', 0),
('4351050271', 'Nay Sa Ma', '2002-02-28', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050271', 0),
('4351050274', 'Đặng Sáng', '2002-09-20', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050274', 0),
('4351050276', 'Nguyễn Thanh Sơn', '2002-12-08', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050276', 0),
('4351050278', 'Nguyễn Ngọc Sự', '2002-02-24', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050278', 0),
('4351050287', 'Nguyễn Xuân Thạch', '2002-05-10', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050287', 0),
('4351050290', 'Bùi Nhật Thắng', '2001-03-29', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050290', 0),
('4351050292', 'Nguyễn Ngọc Thắng', '2002-12-10', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050292', 0),
('4351050293', 'Nguyễn Thảng', '2002-01-11', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050293', 0),
('4351050299', 'Vũ Tấn Thi', '2001-06-10', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351050299', 0),
('4351050300', 'Huỳnh Thị Kiều Oanh', '2002-05-26', 'Nữ', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050300', 0),
('4351050304', 'Dương Gia Thịnh', '2002-05-01', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050304', 0),
('4351050305', 'Nguyễn Minh Thịnh', '2002-12-31', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050305', 0),
('4351050309', 'Ngô Quốc Thông', '2002-10-10', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050309', 0),
('4351050314', 'Trần Ngọc Thuận', '2002-07-26', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050314', 0),
('4351050320', 'Phùng Thị Thùy', '2002-01-02', 'Nữ', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050320', 0),
('4351050321', 'Lê Hồng Thủy', '2002-06-05', 'Nữ', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050321', 0),
('4351050324', 'Đoàn Hữu Tiến', '2002-10-01', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050324', 0),
('4351050327', 'Trần Nhật Tiến', '2002-01-17', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050327', 0),
('4351050328', 'Huỳnh Ngọc Tiệp', '2002-08-17', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050328', 0),
('4351050334', 'Phạm Trung Toàn', '2001-05-15', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050334', 0),
('4351050335', 'Nguyễn Hương Trà', '2002-10-14', 'Nữ', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050335', 0),
('4351050343', 'Đỗ Minh Trí', '2002-10-20', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050343', 0),
('4351050345', 'Bùi Ngọc Thùy Trinh', '2002-03-30', 'Nữ', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050345', 0),
('4351050351', 'Dương Minh Trọng', '2002-09-08', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050351', 0),
('4351050352', 'Vũ Lê Trúc', '2002-03-22', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050352', 0),
('4351050355', 'Châu Thành Trung', '2002-07-21', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050355', 0),
('4351050363', 'Nguyễn Phan Quang Trường', '2001-06-10', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050363', 0),
('4351050373', 'Trần Anh Tuấn', '2002-04-12', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050373', 0),
('4351050374', 'Nguyễn Huỳnh Tưởng', '2002-01-27', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050374', 0),
('4351050377', 'Trần Đình Văn', '2002-07-15', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050377', 0),
('4351050381', 'Trần Thị Tường Vi', '2002-02-27', 'Nữ', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050381', 0),
('4351050385', 'Võ Đôn Việt', '2002-01-01', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050385', 0),
('4351050389', 'Lê Triệu Vũ', '2001-02-28', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050389', 0),
('4351050394', 'Huỳnh Ngọc Vương', '2001-09-05', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050394', 0),
('4351050395', 'Lê Tuyên Vương', '2002-10-10', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050395', 0),
('4351050397', 'Trần Cao Vy', '2002-11-11', 'Nữ', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050397', 0),
('4351050400', 'Nguyễn Thị Xuân Quỳnh', '2002-04-20', 'Nữ', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050400', 0),
('4351050401', 'Trần Xuân Bách', '2002-10-19', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050401', 0),
('4351050404', 'Đặng Văn Trọng', '2002-08-07', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050404', 0),
('4351050406', 'Nguyễn Phúc Giang', '2002-05-27', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050406', 0),
('4351050412', 'Châu Nguyễn Thu Hiền', '2002-04-25', 'Nữ', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050412', 0),
('4351050414', 'Trần Ngọc Hữu Hoàng', '2002-01-22', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050414', 0),
('4351050415', 'Phạm Tiến Huy', '2002-02-02', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050415', 0),
('4351050416', 'Khổng Vũ An Khải', '2002-07-16', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050416', 0),
('4351050418', 'Trương Minh Kiệt', '2002-10-30', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050418', 0),
('4351050419', 'Huỳnh Văn Lắm', '2002-03-09', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050419', 0),
('4351050421', 'Thái Hoàng Linh', '2002-11-01', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050421', 0),
('4351050422', 'Nguyễn Công Minh', '2002-01-01', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050422', 0),
('4351050425', 'Nguyễn Trần Trọng Nhân', '2002-11-16', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050425', 0),
('4351050426', 'Hứa Vũ Tấn Phát', '2002-07-27', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050426', 0),
('4351050427', 'Phạm Đại Phi', '2002-06-09', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050427', 0),
('4351050428', 'Nguyễn Thanh Phong', '2002-07-23', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050428', 0),
('4351050432', 'Lê Nguyễn Đức Tâm', '2002-12-02', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050432', 0),
('4351050433', 'Đoàn Bá Thịnh', '2002-07-24', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050433', 0),
('4351050440', 'Võ Ngọc Tỉnh', '2002-03-09', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050440', 0);
INSERT INTO `sinhvien` (`MaSinhVien`, `HoTen`, `NgaySinh`, `GioiTinh`, `SDT`, `Email`, `MaLop`, `MaChuyenNganh`, `ChucVu`, `TinhTrangHoc`, `MatKhau`, `Quyen`) VALUES
('4351050443', 'Phạm Văn Vinh', '2002-12-10', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050443', 0),
('4351050446', 'Lê Vĩnh Cẩm', '2002-10-26', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050446', 0),
('4351050447', 'Phùng Anh Quân', '2002-01-10', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050447', 0),
('4351050449', 'Đỗ Giang Nam', '2002-05-18', 'Nam', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351050449', 0),
('4351050450', 'Đinh Trọng Sơn', '2002-06-14', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050450', 0),
('4351050451', 'Bùi Hoài Phụ', '2002-10-19', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050451', 0),
('4351050452', 'Nguyễn Thị Bích Kiều', '2002-10-10', 'Nữ', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050452', 0),
('4351050454', 'Nguyễn Thị Hồng Phước', '2002-04-30', 'Nữ', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050454', 0),
('4351050456', 'Trần Thế Định', '2002-11-20', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050456', 0),
('4351050457', 'Bùi Thiên Đạt', '2002-11-12', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050457', 0),
('4351050925', 'Trần Minh Huy', '2002-03-08', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050925', 0),
('4351050928', 'Nguyễn Thanh Du', '2002-06-24', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050928', 0),
('4351050939', 'Tạ Xuân Kiên', '2002-01-11', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050939', 0),
('4351050940', 'Võ Trung Hiếu', '2002-10-09', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050940', 0),
('4351050946', 'Ngô Thanh Hùng', '2002-03-05', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050946', 0),
('4351050954', 'Bùi Thị Mỹ Thắm', '2002-02-04', 'Nữ', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050954', 0),
('4351050955', 'Ngô Hoàng Anh', '2002-07-08', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050955', 0),
('4351050956', 'Nguyễn Quốc Anh', '2002-03-11', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351050956', 0),
('4351050958', 'Châu Hoài Bảo', '2002-06-21', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050958', 0),
('4351050961', 'Chĩnh', '2001-08-15', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050961', 0),
('4351050967', 'Nguyễn Đức Duy', '2002-04-29', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050967', 0),
('4351050974', 'Võ Đình Hưng', '2002-10-07', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050974', 0),
('4351050981', 'Nguyễn Thị Chi Linh', '1998-10-10', 'Nữ', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050981', 0),
('4351050983', 'Võ Á Nam', '2002-05-22', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050983', 0),
('4351050984', 'Nguyễn Thị Kim Ngân', '2002-08-18', 'Nữ', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050984', 0),
('4351050985', 'Rmah H Ngok', '2002-09-20', 'Nữ', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050985', 0),
('4351050993', 'Ksor Y Quang', '2001-05-02', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050993', 0),
('4351050994', 'Huỳnh Thái Sang', '2002-07-19', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050994', 0),
('4351050997', 'Mai Tấn Tài', '2002-11-07', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050997', 0),
('4351050998', 'Ngô Minh Tân', '2002-07-19', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351050998', 0),
('4351051001', 'Võ Minh Thịnh', '2002-10-21', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051001', 0),
('4351051004', 'Trần Quốc Tính', '2001-04-15', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051004', 0),
('4351051006', 'Lê Minh Triều', '2002-07-25', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051006', 0),
('4351051007', 'Phan Minh Trọng', '2002-02-16', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051007', 0),
('4351051009', 'Nguyễn Hữu Tường', '2002-02-06', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051009', 0),
('4351051012', 'Đỗ Hoàng Vinh', '2002-07-05', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051012', 0),
('4351051057', 'Lê Tấn Khánh', '2002-10-06', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051057', 0),
('4351051058', 'Trần Cảnh Khoa', '2002-04-30', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051058', 0),
('4351051075', 'Nguyễn Hữu Sử', '2001-03-25', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051075', 0),
('4351051076', 'Huỳnh Tô Hữu Thắng', '2002-05-31', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051076', 0),
('4351051080', 'A Trung', '2002-08-05', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051080', 0),
('4351051081', 'Nguyễn Cao Văn', '2002-11-06', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051081', 0),
('4351051084', 'Hồ Thị Cẩm Ly', '2002-12-20', 'Nữ', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051084', 0),
('4351051085', 'Nguyễn Đình Đạt', '2002-08-02', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051085', 0),
('4351051086', 'Nguyễn Thành Công', '2002-11-04', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051086', 0),
('4351051087', 'Trương Quang Vương', '2002-04-05', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051087', 0),
('4351051088', 'Võ Hữu Khánh', '2002-06-12', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051088', 0),
('4351051089', 'Đặng Gia Thừa', '2001-04-18', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051089', 0),
('4351051090', 'Phan Đình Bách', '2002-10-27', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051090', 0),
('4351051091', 'Rơ Mah Chương', '2001-08-20', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051091', 0),
('4351051092', 'Đỗ Hữu Nghĩa', '2001-03-25', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051092', 0),
('4351051093', 'Võ Duy Long', '2002-02-17', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051093', 0),
('4351051094', 'Nguyễn Huỳnh Khoa', '2002-12-04', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051094', 0),
('4351051104', 'Đặng Gia Khiêm', '2001-11-11', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051104', 0),
('4351051105', 'Nguyễn Trần Anh Khoa', '2002-11-09', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051105', 0),
('4351051107', 'Nguyễn Hồng Bảo Lâm', '2002-02-08', 'Nữ', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051107', 0),
('4351051113', 'Trần Quốc Phán', '2002-03-16', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051113', 0),
('4351051115', 'Hà Thanh Sáng', '2002-06-12', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051115', 0),
('4351051123', 'Hồ Thị Nhiễn', '2002-11-06', 'Nữ', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051123', 0),
('4351051124', 'Đặng Thiên Hào', '2002-10-05', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051124', 0),
('4351051127', 'Nguyễn Đỗ Vũ Toàn', '2002-10-03', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051127', 0),
('4351051128', 'Nguyễn Trường Nguyên', '2002-08-19', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051128', 0),
('4351051150', 'Võ Thị Nguyệt Nga', '2002-11-06', 'Nữ', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051150', 0),
('4351051163', 'Trương Tấn Quan', '2002-08-25', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051163', 0),
('4351051176', 'Nguyễn Thấp Vân Anh', '2002-07-01', 'Nữ', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051176', 0),
('4351051178', 'Đào Việt Bảo', '2002-11-01', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051178', 0),
('4351051181', 'Nguyễn Thanh Bảo', '2002-10-25', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051181', 0),
('4351051182', 'Võ Chí Bảo', '2002-10-20', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051182', 0),
('4351051183', 'Võ Ngọc Bảo', '2002-10-01', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051183', 0),
('4351051184', 'Nguyễn Minh Châu', '2002-06-20', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051184', 0),
('4351051185', 'Nguyễn Quốc Đạt', '2002-02-04', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051185', 0),
('4351051186', 'Rcom Hoàng Đạt', '2002-11-09', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051186', 0),
('4351051191', 'Nguyễn Nhật Duy', '2002-11-22', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051191', 0),
('4351051198', 'Võ Thành Hậu', '2002-06-29', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051198', 0),
('4351051200', 'Nguyễn Văn Hòa', '2001-06-26', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051200', 0),
('4351051202', 'Hồ Việt Hoàng', '2002-11-13', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051202', 0),
('4351051209', 'Lương An Khang', '2002-11-03', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051209', 0),
('4351051216', 'Trương Hồng Kông', '2002-10-12', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051216', 0),
('4351051230', 'Đinh Thị Thanh Nhã', '2002-10-23', 'Nữ', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051230', 0),
('4351051236', 'Trịnh Chấn Phúc', '2002-05-28', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051236', 0),
('4351051238', 'Lê Thanh Quân', '2002-02-23', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051238', 0),
('4351051239', 'Đào Duy Quý', '2002-11-30', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051239', 0),
('4351051240', 'Lê Phước Quyền', '2002-02-26', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051240', 0),
('4351051246', 'Nguyễn Đức Tân', '2002-06-27', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051246', 0),
('4351051249', 'Đỗ Duy Thành', '2002-09-24', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051249', 0),
('4351051257', 'Võ Thị Hoài Thương', '2002-12-02', 'Nữ', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051257', 0),
('4351051259', 'Đặng Thị Thanh Thủy', '2002-04-27', 'Nữ', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051259', 0),
('4351051265', 'Đặng Toàn Trung', '2002-04-25', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051265', 0),
('4351051274', 'Trần Thị Kim Xuyên', '2002-01-10', 'Nữ', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051274', 0),
('4351051278', 'Đặng Trung Hiếu', '2000-05-07', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051278', 0),
('4351051280', 'Nguyễn Phi Trường', '2002-05-30', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051280', 0),
('4351051281', 'Nguyễn Trọng Tuân', '2002-10-18', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051281', 0),
('4351051282', 'Đặng Trần Uyên Nhi', '2002-11-28', 'Nữ', NULL, NULL, 'CNTTK43A', 'CNTT', '', 'Còn học', '4351051282', 0),
('4351051286', 'Nguyễn Trung Nhân', '2001-07-25', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051286', 0),
('4351051292', 'Phan Tấn Minh', '2002-06-02', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051292', 0),
('4351051293', 'Rcom Nik', '2002-02-09', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051293', 0),
('4351051295', 'Vũ Ngọc Tuân', '2002-05-23', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051295', 0),
('4351051298', 'Võ Dương Duy Trực', '2002-06-19', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051298', 0),
('4351051299', 'Nguyễn Tuấn Kiệt', '2002-07-01', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051299', 0),
('4351051302', 'Trần Cao Nghiêm', '2002-09-15', 'Nữ', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051302', 0),
('4351051303', 'Đào Thanh Lợi', '2002-07-04', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351051303', 0),
('4351051304', 'Nguyễn Thị Quá', '2002-11-07', 'Nữ', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051304', 0),
('4351051305', 'Phạm Lê Hồng Linh', '2002-05-16', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051305', 0),
('4351051306', 'Nguyễn Hải Đăng', '2002-04-17', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051306', 0),
('4351051308', 'Nguyễn Huỳnh Nhật Hân', '2002-01-28', 'Nam', NULL, NULL, 'CNTTK43C', 'CNTT', '', 'Còn học', '4351051308', 0),
('4351051309', 'Lê Văn Huy', '2002-12-07', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051309', 0),
('4351051315', 'Đàm Minh Quân', '2002-05-31', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051315', 0),
('4351051316', 'Lê Anh Tú', '2001-07-17', 'Nam', NULL, NULL, 'CNTTK43D', 'CNTT', '', 'Còn học', '4351051316', 0),
('4351051317', 'Trần Thanh Qúi', '2002-09-17', 'Nam', NULL, NULL, 'CNTTK43B', 'CNTT', '', 'Còn học', '4351051317', 0),
('4351190006', 'Nguyễn Quốc Cường', '1998-01-10', 'Nam', NULL, NULL, 'KTPMK43', 'KTPM', '', 'Còn học', '4351190006', 0),
('4351190011', 'Nguyễn Thị Thu Hà', '2000-05-03', 'Nữ', NULL, NULL, 'KTPMK43', 'KTPM', '', 'Còn học', '4351190011', 0),
('4351190017', 'Nguyễn Huy Hùng', '2002-02-27', 'Nam', NULL, NULL, 'KTPMK43', 'KTPM', '', 'Còn học', '4351190017', 0),
('4351190021', 'Lê Đức Khánh', '2002-12-18', 'Nam', NULL, NULL, 'KTPMK43', 'KTPM', '', 'Còn học', '4351190021', 0),
('4351190028', 'Trần Quốc Mạnh', '2002-07-06', 'Nam', NULL, NULL, 'KTPMK43', 'KTPM', '', 'Còn học', '4351190028', 0),
('4351190041', 'Nguyễn Nhật Quang', '2002-11-11', 'Nam', NULL, NULL, 'KTPMK43', 'KTPM', '', 'Còn học', '4351190041', 0),
('4351190055', 'Hàn Quốc Trung', '2002-06-25', 'Nam', NULL, NULL, 'KTPMK43', 'KTPM', '', 'Còn học', '4351190055', 0),
('4351190060', 'Nguyễn Thanh Tuấn', '2002-10-12', 'Nam', NULL, NULL, 'KTPMK43', 'KTPM', '', 'Còn học', '4351190060', 0),
('4351190068', 'Nguyễn Văn An', '2002-08-21', 'Nam', NULL, NULL, 'KTPMK43', 'KTPM', '', 'Còn học', '4351190068', 0),
('4351190070', 'Đặng Anh Bá', '2000-11-11', 'Nam', NULL, NULL, 'KTPMK43', 'KTPM', '', 'Còn học', '4351190070', 0),
('4351190072', 'Hồ Xuân Lộc', '2000-11-23', 'Nam', NULL, NULL, 'KTPMK43', 'KTPM', '', 'Còn học', '4351190072', 0),
('4351190074', 'Trần Đức Tình', '2002-02-12', 'Nam', NULL, NULL, 'KTPMK43', 'KTPM', '', 'Còn học', '4351190074', 0),
('4351190076', 'Lê Quốc Thắng', '2002-01-01', 'Nam', NULL, NULL, 'KTPMK43', 'KTPM', '', 'Còn học', '4351190076', 0),
('4351190082', 'Võ Lê Huy', '2002-08-31', 'Nam', NULL, NULL, 'KTPMK43', 'KTPM', '', 'Còn học', '4351190082', 0),
('4351190086', 'Vy Thành Long', '2002-01-26', 'Nam', NULL, NULL, 'KTPMK43', 'KTPM', '', 'Còn học', '4351190086', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangdiemrenluyen`
--
ALTER TABLE `bangdiemrenluyen`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaSinhVien` (`MaSinhVien`);

--
-- Indexes for table `chuongtrinhhoc`
--
ALTER TABLE `chuongtrinhhoc`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaKhoaHoc` (`MaKhoaHoc`),
  ADD KEY `MaHocPhan` (`MaHocPhan`),
  ADD KEY `MaChuyenNganh` (`MaChuyenNganh`);

--
-- Indexes for table `chuyennganh`
--
ALTER TABLE `chuyennganh`
  ADD PRIMARY KEY (`MaChuyenNganh`);

--
-- Indexes for table `dangkydiemrenluyen`
--
ALTER TABLE `dangkydiemrenluyen`
  ADD PRIMARY KEY (`NamHoc`,`HocKy`);

--
-- Indexes for table `dangkyhoatdong`
--
ALTER TABLE `dangkyhoatdong`
  ADD PRIMARY KEY (`MaHoatDong`,`MaSinhVien`),
  ADD KEY `MaSinhVien` (`MaSinhVien`);

--
-- Indexes for table `diemhoctap`
--
ALTER TABLE `diemhoctap`
  ADD PRIMARY KEY (`MaHocPhan`,`MaSinhVien`),
  ADD KEY `MaSinhVien` (`MaSinhVien`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGiangVien`);

--
-- Indexes for table `hoatdong`
--
ALTER TABLE `hoatdong`
  ADD PRIMARY KEY (`MaHoatDong`);

--
-- Indexes for table `hocphan`
--
ALTER TABLE `hocphan`
  ADD PRIMARY KEY (`MaHocPhan`,`HocKy`) USING BTREE;

--
-- Indexes for table `homthugopy`
--
ALTER TABLE `homthugopy`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaSinhVien` (`MaSinhVien`);

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`MaKhoaHoc`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `MaKhoaHoc` (`MaKhoaHoc`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSinhVien`),
  ADD KEY `MaLop` (`MaLop`),
  ADD KEY `MaChuyenNganh` (`MaChuyenNganh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangdiemrenluyen`
--
ALTER TABLE `bangdiemrenluyen`
  MODIFY `ID` bigint(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `chuongtrinhhoc`
--
ALTER TABLE `chuongtrinhhoc`
  MODIFY `ID` bigint(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `hoatdong`
--
ALTER TABLE `hoatdong`
  MODIFY `MaHoatDong` bigint(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `homthugopy`
--
ALTER TABLE `homthugopy`
  MODIFY `ID` bigint(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bangdiemrenluyen`
--
ALTER TABLE `bangdiemrenluyen`
  ADD CONSTRAINT `bangdiemrenluyen_ibfk_1` FOREIGN KEY (`MaSinhVien`) REFERENCES `sinhvien` (`MaSinhVien`) ON UPDATE CASCADE;

--
-- Constraints for table `chuongtrinhhoc`
--
ALTER TABLE `chuongtrinhhoc`
  ADD CONSTRAINT `chuongtrinhhoc_ibfk_1` FOREIGN KEY (`MaKhoaHoc`) REFERENCES `khoahoc` (`MaKhoaHoc`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chuongtrinhhoc_ibfk_2` FOREIGN KEY (`MaHocPhan`) REFERENCES `hocphan` (`MaHocPhan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chuongtrinhhoc_ibfk_3` FOREIGN KEY (`MaChuyenNganh`) REFERENCES `chuyennganh` (`MaChuyenNganh`) ON UPDATE CASCADE;

--
-- Constraints for table `dangkyhoatdong`
--
ALTER TABLE `dangkyhoatdong`
  ADD CONSTRAINT `dangkyhoatdong_ibfk_1` FOREIGN KEY (`MaHoatDong`) REFERENCES `hoatdong` (`MaHoatDong`) ON UPDATE CASCADE,
  ADD CONSTRAINT `dangkyhoatdong_ibfk_2` FOREIGN KEY (`MaSinhVien`) REFERENCES `sinhvien` (`MaSinhVien`) ON UPDATE CASCADE;

--
-- Constraints for table `diemhoctap`
--
ALTER TABLE `diemhoctap`
  ADD CONSTRAINT `diemhoctap_ibfk_1` FOREIGN KEY (`MaHocPhan`) REFERENCES `hocphan` (`MaHocPhan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `diemhoctap_ibfk_2` FOREIGN KEY (`MaSinhVien`) REFERENCES `sinhvien` (`MaSinhVien`) ON UPDATE CASCADE;

--
-- Constraints for table `homthugopy`
--
ALTER TABLE `homthugopy`
  ADD CONSTRAINT `homthugopy_ibfk_1` FOREIGN KEY (`MaSinhVien`) REFERENCES `sinhvien` (`MaSinhVien`) ON UPDATE CASCADE;

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`MaKhoaHoc`) REFERENCES `khoahoc` (`MaKhoaHoc`) ON UPDATE CASCADE;

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sinhvien_ibfk_2` FOREIGN KEY (`MaChuyenNganh`) REFERENCES `chuyennganh` (`MaChuyenNganh`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
