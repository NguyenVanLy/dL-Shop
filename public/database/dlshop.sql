-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Client: sql300.byetcluster.com
-- Généré le: Lun 19 Décembre 2016 à 01:32
-- Version du serveur: 5.6.34-79.1
-- Version de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `b7_18990826_dlshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `chi_tiet_hoa_don`
--

CREATE TABLE IF NOT EXISTS `chi_tiet_hoa_don` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` double NOT NULL,
  PRIMARY KEY (`ma_hoa_don`,`ma_san_pham`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='chi_tiet_hoa_don';

--
-- Contenu de la table `chi_tiet_hoa_don`
--

INSERT INTO `chi_tiet_hoa_don` (`ma_hoa_don`, `ma_san_pham`, `so_luong`, `don_gia`) VALUES
(1, 1, 2, 5000000),
(1, 7, 1, 500000),
(2, 2, 2, 5000000),
(2, 11, 1, 100000),
(3, 1, 1, 5000000),
(3, 14, 1, 100000),
(3, 19, 2, 4500000),
(4, 1, 1, 5000000),
(4, 2, 1, 5000000),
(4, 9, 1, 5000000),
(5, 1, 1, 5000000),
(6, 1, 1, 5000000),
(6, 6, 1, 500000),
(6, 7, 1, 500000),
(7, 2, 1, 5000000),
(8, 40, 1, 600000),
(9, 1, 1, 5000000),
(9, 6, 1, 500000),
(10, 6, 1, 500000),
(10, 7, 1, 500000),
(12, 12, 1, 100000),
(13, 3, 1, 5000000),
(13, 6, 1, 500000),
(14, 1, 2, 5000000),
(15, 2, 1, 5000000),
(18, 2, 1, 5000000),
(20, 3, 2, 5000000),
(21, 2, 1, 5000000),
(11, 1, 1, 5000000),
(12, 1, 10, 5000000),
(13, 1, 1, 5000000),
(14, 5, 1, 5000000),
(15, 1, 2, 5000000),
(16, 31, 1, 450000);

-- --------------------------------------------------------

--
-- Structure de la table `danh_gia`
--

CREATE TABLE IF NOT EXISTS `danh_gia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_san_pham` int(11) NOT NULL,
  `ho_ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) NOT NULL,
  `noi_dung` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dang` datetime NOT NULL,
  `hien_thi` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `ma_san_pham` (`ma_san_pham`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `danh_gia`
--

INSERT INTO `danh_gia` (`id`, `ma_san_pham`, `ho_ten`, `email`, `noi_dung`, `ngay_dang`, `hien_thi`) VALUES
(1, 1, 'Nguyễn Văn Lý', 'nvl.it.tdt@gmail.com', 'Sản phẩm rất tốt, phù hợp với người Việt Nam', '2016-12-10 00:00:00', 1),
(2, 1, 'Đặng Thái Duy', 'dtduy@gmail.com', 'Sản phẩm đẹp, chống trượt', '2016-12-10 00:00:00', 1),
(5, 1, 'g', 'httt@gmail.com', 'hgh', '2016-12-17 11:41:53', 0);

-- --------------------------------------------------------

--
-- Structure de la table `hinh`
--

CREATE TABLE IF NOT EXISTS `hinh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_san_phams` int(11) NOT NULL,
  `ten_hinh` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ma_san_pham` (`ma_san_phams`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=182 ;

--
-- Contenu de la table `hinh`
--

INSERT INTO `hinh` (`id`, `ma_san_phams`, `ten_hinh`) VALUES
(1, 1, '1_1.jpg'),
(2, 1, '1_2.jpg'),
(3, 1, '1_3.jpg'),
(4, 1, '1_4.jpg'),
(6, 2, '2_1.jpg'),
(7, 2, '2_2.jpg'),
(8, 2, '2_3.jpg'),
(9, 2, '2_4.jpg'),
(10, 2, '2_5.jpg'),
(11, 3, '3_1.jpg'),
(12, 3, '3_2.jpg'),
(13, 3, '3_3.jpg'),
(14, 3, '3_4.jpg'),
(15, 3, '3_5.jpg'),
(16, 4, '4_1.jpg'),
(17, 4, '4_2.jpg'),
(18, 4, '4_3.jpg'),
(19, 4, '4_4.jpg'),
(20, 4, '4_5.jpg'),
(21, 5, '5_1.jpg'),
(22, 5, '5_2.jpg'),
(23, 5, '5_3.jpg'),
(24, 5, '5_4.jpg'),
(25, 5, '5_5.jpg'),
(26, 6, 'a1_1.jpg'),
(27, 6, 'a1_2.jpg'),
(28, 6, 'a1_3.jpg'),
(29, 6, 'a1_4.jpg'),
(30, 6, 'a1_5.jpg'),
(31, 7, 'a2_1.jpg'),
(32, 7, 'a2_2.jpg'),
(33, 7, 'a2_3.jpg'),
(34, 7, 'a2_4.jpg'),
(35, 7, 'a2_5.jpg'),
(36, 8, 'a3_1.jpg'),
(37, 8, 'a3_2.jpg'),
(38, 8, 'a3_3.jpg'),
(39, 8, 'a3_4.jpg'),
(40, 8, 'a3_5.jpg'),
(41, 9, 'a4_1.jpg'),
(42, 9, 'a4_2.jpg'),
(43, 9, 'a4_3.jpg'),
(44, 9, 'a4_4.jpg'),
(45, 9, 'a4_5.jpg'),
(46, 10, 'a5_1.jpg'),
(47, 10, 'a5_2.jpg'),
(48, 10, 'a5_3.jpg'),
(49, 10, 'a5_4.jpg'),
(50, 10, 'a5_5.jpg'),
(51, 11, 'pk1_1.jpg'),
(52, 11, 'pk1_2.jpg'),
(53, 11, 'pk1_3.jpg'),
(54, 11, 'pk1_4.jpg'),
(55, 11, 'pk1_5.jpg'),
(56, 12, 'pk2_1.jpg'),
(57, 12, 'pk2_2.jpg'),
(58, 12, 'pk2_3.jpg'),
(59, 12, 'pk2_4.jpg'),
(60, 12, 'pk2_5.jpg'),
(61, 13, 'pk3_1.jpg'),
(62, 13, 'pk3_2.jpg'),
(63, 13, 'pk3_3.jpg'),
(64, 14, 'pk4_1.jpg'),
(65, 14, 'pk4_2.jpg'),
(66, 14, 'pk4_3.jpg'),
(67, 15, 'pk5_1.jpg'),
(68, 15, 'pk5_2.jpg'),
(69, 15, 'pk5_3.jpg'),
(70, 16, 'n1_1.jpg'),
(71, 16, 'n1_2.jpg'),
(72, 16, 'n1_3.jpg'),
(73, 16, 'n1_4.jpg'),
(74, 16, 'n1_5.jpg'),
(75, 17, 'n2_1.jpg'),
(76, 17, 'n2_2.jpg'),
(77, 17, 'n2_3.jpg'),
(78, 17, 'n2_4.jpg'),
(79, 17, 'n2_5.jpg'),
(80, 18, 'n3_1.jpg'),
(81, 18, 'n3_2.jpg'),
(82, 18, 'n3_3.jpg'),
(83, 18, 'n3_4.jpg'),
(84, 18, 'n3_5.jpg'),
(85, 19, 'n4_1.jpg'),
(86, 19, 'n4_2.jpg'),
(87, 19, 'n4_3.jpg'),
(88, 19, 'n4_4.jpg'),
(89, 19, 'n4_5.jpg'),
(90, 20, 'n5_1.jpg'),
(91, 20, 'n5_2.jpg'),
(92, 20, 'n5_3.jpg'),
(93, 20, 'n5_4.jpg'),
(94, 20, 'n5_5.jpg'),
(95, 31, 'p1_1.jpg'),
(96, 31, 'p1_2.jpg'),
(97, 31, 'p1_3.jpg'),
(98, 31, 'p1_4.jpg'),
(99, 31, 'p1_5.jpg'),
(100, 32, 'p2_1.jpg'),
(101, 32, 'p2_2.jpg'),
(102, 32, 'p2_3.jpg'),
(103, 32, 'p2_4.jpg'),
(104, 32, 'p2_5.jpg'),
(105, 33, 'p3_1.jpg'),
(106, 33, 'p3_2.jpg'),
(107, 33, 'p3_3.jpg'),
(108, 33, 'p3_4.jpg'),
(109, 33, 'p3_5.jpg'),
(110, 34, 'p4_1.jpg'),
(111, 34, 'p4_2.jpg'),
(112, 34, 'p4_3.jpg'),
(113, 34, 'p4_4.jpg'),
(114, 35, 'p5_1.jpg'),
(115, 35, 'p5_2.jpg'),
(116, 35, 'p5_3.jpg'),
(117, 35, 'p5_4.jpg'),
(118, 39, 'AQ6387_02_standard.jpg'),
(119, 39, 'AQ6387_03_standard.jpg'),
(120, 39, 'AQ6387_04_standard.jpg'),
(121, 39, 'AQ6387_05_standard.jpg'),
(122, 39, 'AQ6387_41_detail.jpg'),
(123, 1, '1_5.jpg'),
(124, 40, 'S80377_02_standard.jpg'),
(125, 40, 'S80377_03_standard.jpg'),
(126, 40, 'S80377_04_standard.jpg'),
(127, 40, 'S80377_05_standard.jpg'),
(128, 40, 'S80377_42_detail.jpg'),
(129, 37, 'ao_pm1.2.jpg'),
(130, 37, 'ao_pm1.3.jpg'),
(131, 37, 'ao_pm1.jpg'),
(132, 21, 'aa.png'),
(133, 21, 'aaa.png'),
(134, 21, 'aaaaaa.jpg'),
(135, 21, 'aaaaaaaaaaaaaaaa.jpg'),
(136, 21, 'aaaaaaaaaaaaaaaaaaaaa.jpg'),
(137, 22, 'ttt.png'),
(138, 22, 'tttt.png'),
(139, 22, 'tttttr.png'),
(140, 22, 'ttttttttttttttttttt.jpg'),
(141, 22, 'ttttttttttttttttttttttt.jpg'),
(142, 23, 'bb.png'),
(143, 23, 'bbbb.png'),
(144, 23, 'bbbbb.png'),
(145, 23, 'bbbbbbbbbb.jpg'),
(146, 23, 'bbbbbbbbbbbbbbbbbbbbbb.jpg'),
(147, 24, 'mm.jpg'),
(148, 24, 'mmm.jpg'),
(149, 24, 'mmmm.jpg'),
(150, 24, 'mmmmmmm.jpg'),
(151, 41, 'hh.jpg'),
(152, 41, 'hhh.jpg'),
(153, 41, 'hhhhh.jpg'),
(154, 41, 'hhhhhhhhh.jpg'),
(155, 41, 'hhhhhhhhhhhh.jpg'),
(156, 41, 'hhhhhhhhhhhhhhhhhhhhhhhhhhh.jpg'),
(157, 42, 'jj.jpg'),
(158, 42, 'jjjj.jpg'),
(159, 42, 'jjjjjjjjjf.jpg'),
(160, 42, 'jjjjjjjjjjjjjjff.jpg'),
(161, 42, 'jjjjjjjjjjjjjjjg.jpg'),
(162, 43, 'fff.jpg'),
(163, 43, 'ffff.jpg'),
(164, 43, 'fffff.jpg'),
(165, 43, 'ffffffff.jpg'),
(166, 44, 'jjjjjjjj.jpg'),
(167, 44, 'jjjjjjjjj.jpg'),
(168, 44, 'jjjjjjjjjjjjjj.jpg'),
(169, 44, 'jjjjjjjjjjjjjjjjjjj.jpg'),
(170, 44, 'jjjjjjjjjjjjjjjjjjjjjjjjjj.jpg'),
(171, 44, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjj.jpg'),
(172, 45, 'gg.jpg'),
(173, 45, 'gggg.jpg'),
(174, 45, 'ggggg.jpg'),
(175, 45, 'gggggg.jpg'),
(176, 45, 'gggggggg.jpg'),
(177, 45, 'ggggggggggg.jpg'),
(178, 25, 'xx.jpg'),
(179, 25, 'xxx.jpg'),
(180, 25, 'xxxx.png'),
(181, 25, 'xxxxx.png');

-- --------------------------------------------------------

--
-- Structure de la table `hoa_don`
--

CREATE TABLE IF NOT EXISTS `hoa_don` (
  `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT,
  `ma_khach_hang` int(11) NOT NULL,
  `ngay_dat` date NOT NULL,
  `tong_tien` double NOT NULL,
  `tien_dat_coc` double NOT NULL,
  `con_lai` double NOT NULL,
  `hinh_thuc_thanh_toan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  PRIMARY KEY (`ma_hoa_don`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Contenu de la table `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hoa_don`, `ma_khach_hang`, `ngay_dat`, `tong_tien`, `tien_dat_coc`, `con_lai`, `hinh_thuc_thanh_toan`, `ghi_chu`, `trang_thai`) VALUES
(1, 1, '2016-12-08', 500000, 0, 0, 'Tiền mặt', '', 2),
(2, 1, '2016-12-09', 100000, 0, 0, 'Tiền mặt', '', 2),
(3, 2, '2016-12-09', 100000, 0, 0, 'Tiền mặt', '', 1),
(4, 3, '2016-12-11', 5000000, 0, 0, 'Tiền mặt', '', 1),
(5, 5, '2016-12-16', 100000, 0, 0, 'Tiền mặt', '', 1),
(6, 5, '2016-12-16', 0, 0, 0, 'Tiền mặt', '', 1),
(7, 5, '2016-12-16', 5000000, 0, 0, 'Tiền mặt', '', 1),
(8, 5, '2016-12-16', 600000, 0, 0, 'Tiền mặt', '', 1),
(9, 5, '2016-12-16', 500000, 0, 0, 'Tiền mặt', '', 1),
(10, 5, '2016-12-16', 500000, 0, 0, 'Tiền mặt', '', 1),
(11, 5, '2016-12-17', 5000000, 0, 0, 'Tiền mặt', '', 1),
(12, 5, '2016-12-17', 50000000, 0, 0, 'Tiền mặt', '', 1),
(13, 5, '2016-12-17', 5000000, 0, 0, 'Tiền mặt', '', 1),
(14, 5, '2016-12-17', 5000000, 0, 0, 'Thẻ tín dụng', '', 1),
(15, 5, '2016-12-17', 10000000, 0, 0, 'Tiền mặt', '', 1),
(16, 5, '2016-12-18', 450000, 0, 0, 'Tiền mặt', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `khach_hang`
--

CREATE TABLE IF NOT EXISTS `khach_hang` (
  `ma_khach_hang` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khach_hang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phai` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_khach_hang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_khach_hang`, `ten_khach_hang`, `mat_khau`, `phai`, `email`, `dia_chi`, `dien_thoai`, `ghi_chu`) VALUES
(1, 'Nguyen Van Ly', '8753a46af7e0f555ec92f041034a8a33', 1, 'nvl.it.tdt@gmail.com', 'Can Giuoc-Long An', '0978668670', ''),
(3, 'Dang Thai Duy', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'dtduy@gmail.com', 'TP. HCM', 'TP. HCM', 'Mua hang'),
(5, 'cc', 'e0323a9039add2978bf5b49550572c7c', 0, 'cc@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `lien_he`
--

CREATE TABLE IF NOT EXISTS `lien_he` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ho_ten` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `so_dien_thoai` varchar(20) NOT NULL,
  `noi_dung` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_lien_he` datetime NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `lien_he`
--

INSERT INTO `lien_he` (`id`, `ho_ten`, `email`, `so_dien_thoai`, `noi_dung`, `ngay_lien_he`, `trang_thai`) VALUES
(1, 'Nguyễn Văn Lý', 'nvl.it.tdt@gmail.com', '0978668670', 'Liên hệ', '2016-12-11 05:39:23', 1),
(2, 'Đặng Thái Duy', 'duy@gmail.com', '0978668670', 'ddddddddddddddddđ', '2016-12-16 03:41:49', 0),
(5, 'sssssssssssss', 'sssssssss@gamo.com', '0978668670', 'Nội dung...', '2016-12-16 03:52:49', 0),
(7, 'Họ & Tên', 'dsfsf@gmail.com', '909090909', 'd', '2016-12-16 04:03:42', 0),
(9, 'f', 'duy@gmail.com', '4444444444444444', 'ddddddddddddddddddddd', '2016-12-17 11:55:58', 1);

-- --------------------------------------------------------

--
-- Structure de la table `loai_san_pham`
--

CREATE TABLE IF NOT EXISTS `loai_san_pham` (
  `ma_loai` int(11) NOT NULL AUTO_INCREMENT,
  `ten_loai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_loai`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`ma_loai`, `ten_loai`) VALUES
(1, 'Giầy'),
(2, 'Quần & Áo'),
(3, 'Phụ kiện'),
(4, 'Thiết bị');

-- --------------------------------------------------------

--
-- Structure de la table `nguoi_dung`
--

CREATE TABLE IF NOT EXISTS `nguoi_dung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_dang_nhap` varchar(100) NOT NULL,
  `mat_khau` varchar(100) NOT NULL,
  `ho_ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` tinyint(4) NOT NULL,
  `so_dien_thoai` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dia_chi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id`, `ten_dang_nhap`, `mat_khau`, `ho_ten`, `ngay_sinh`, `gioi_tinh`, `so_dien_thoai`, `email`, `dia_chi`, `quyen`) VALUES
(4, 'nvly', '8753a46af7e0f555ec92f041034a8a33', 'Nguyễn Văn Lý', '1995-11-20', 1, '0978668670', 'nvl.it.tdt@gmail.com', 'Cần Giuộc - Long An', 1),
(5, 'httthao', '869518a629546a782e1548ccc1cdfb27', 'Hồ Thị Thu Thảo', '1995-06-20', 0, '01886267696', 'thao@gmail.com', 'Cần Giuộc - Long An', 0),
(6, 'ttkien', 'c56d0e9a7ccec67b4ea131655038d604', 'Tran Trung kien', '2016-12-08', 1, '123456789', 'ttkien@gmail.com', 'Vũng Tàu', 0),
(7, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '1970-01-01', 1, '123456789', 'admin@gmail.com', 'Website', 0);

-- --------------------------------------------------------

--
-- Structure de la table `nhan_tin`
--

CREATE TABLE IF NOT EXISTS `nhan_tin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Contenu de la table `nhan_tin`
--

INSERT INTO `nhan_tin` (`id`, `email`) VALUES
(1, 'natuan@t3h.hcmus.edu.vn'),
(44, 'f@gmail.cpom'),
(45, 'nvl.it.tdt@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `nha_san_xuat`
--

CREATE TABLE IF NOT EXISTS `nha_san_xuat` (
  `ma_nsx` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nsx` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_nsx` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  PRIMARY KEY (`ma_nsx`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `nha_san_xuat`
--

INSERT INTO `nha_san_xuat` (`ma_nsx`, `ten_nsx`, `logo_nsx`, `website`) VALUES
(1, 'Adidas', 'adidas.png', 'www.adidas.com'),
(2, 'Nike', 'nike.png', 'www.nike.com'),
(3, 'Puma', 'puma.png', ''),
(4, 'New Balance', 'new_balance.png', 'www.newbance.com'),
(5, 'Umbro', 'umbro.jpg', 'www.umbro.com');

-- --------------------------------------------------------

--
-- Structure de la table `nhom_san_pham`
--

CREATE TABLE IF NOT EXISTS `nhom_san_pham` (
  `ma_nhom` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nhom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_nhom`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `nhom_san_pham`
--

INSERT INTO `nhom_san_pham` (`ma_nhom`, `ten_nhom`) VALUES
(1, 'Bóng đá'),
(2, 'Điền kinh\r\n'),
(3, 'Tập luyện'),
(4, 'Quần vợt'),
(5, 'Bóng rổ'),
(6, 'Bơi lội'),
(7, 'Cầu long'),
(8, 'Bóng bàn');

-- --------------------------------------------------------

--
-- Structure de la table `san_pham`
--

CREATE TABLE IF NOT EXISTS `san_pham` (
  `ma_san_pham` int(11) NOT NULL AUTO_INCREMENT,
  `ten_san_pham` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `ma_nhom` int(11) NOT NULL,
  `ma_nsx` int(11) NOT NULL,
  `thong_tin` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(200) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `don_gia_khuyen_mai` int(11) NOT NULL DEFAULT '0',
  `khuyen_mai` int(11) NOT NULL DEFAULT '0',
  `san_pham_tieu_bieu` int(11) NOT NULL DEFAULT '0',
  `ngay_cap_nhat` datetime NOT NULL,
  PRIMARY KEY (`ma_san_pham`),
  KEY `fk_loai_sanpham` (`ma_loai`),
  KEY `fk_nhom_sanpham` (`ma_nhom`),
  KEY `fk_nsx_sanpham` (`ma_nsx`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Contenu de la table `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ten_san_pham`, `ma_loai`, `ma_nhom`, `ma_nsx`, `thong_tin`, `mo_ta`, `hinh`, `don_gia`, `don_gia_khuyen_mai`, `khuyen_mai`, `san_pham_tieu_bieu`, `ngay_cap_nhat`) VALUES
(1, 'Giầy ADIDAS 01', 1, 1, 1, '<div><span style="font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);">Loại sản phẩm :Giày đá sân cỏ tự nhiên</span><br style="margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);">Chất liệu : da nhân tạo</span><br style="margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);">Màu sắc : Như hình</span><br style="margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);">Thương hiệu: Adidas</span><br style="margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"></div>', '<div><span style="font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);">Loại sản phẩm :Giày đá sân cỏ tự nhiên</span><br style="margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);">Chất liệu : da nhân tạo</span><br style="margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);">Màu sắc : Như hình</span><br style="margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);">Thương hiệu:</span><span style="background-color: rgb(255, 255, 255); font-family: roboto, Arial, sans-serif;">Adidas</span></div>', '1.jpg', 5000000, 0, 0, 1, '2016-12-17 11:23:15'),
(2, 'Giầy ADIDAS 02', 1, 1, 1, '<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Loại sản phẩm :Giày đá sân cỏ tự nhiên</span><br style="color: rgb(85, 85, 85); margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Chất liệu : da nhân tạo</span><br style="color: rgb(85, 85, 85); margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Màu sắc : Như hình</span>', '<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Loại sản phẩm :Giày đá sân cỏ tự nhiên</span><br style="color: rgb(85, 85, 85); margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Chất liệu : da nhân tạo</span><br style="color: rgb(85, 85, 85); margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Màu sắc : Như hình</span>', '2.jpg', 5000000, 0, 0, 1, '2016-12-17 11:20:32'),
(3, 'Giầy ADIDAS 03', 1, 1, 1, '<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Loại sản phẩm :Giày đá sân cỏ tự nhiên</span><br style="color: rgb(85, 85, 85); margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Chất liệu : da nhân tạo</span><br style="color: rgb(85, 85, 85); margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Màu sắc : Như hình</span>', '<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Loại sản phẩm :Giày đá sân cỏ tự nhiên</span><br style="color: rgb(85, 85, 85); margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Chất liệu : da nhân tạo</span><br style="color: rgb(85, 85, 85); margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Màu sắc : Như hình</span>', '3.jpg', 5000000, 0, 0, 0, '2016-12-17 11:21:30'),
(4, 'Giầy ADIDAS 04', 1, 1, 1, '<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Loại sản phẩm :Giày đá sân cỏ tự nhiên</span><br style="color: rgb(85, 85, 85); margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Chất liệu : da nhân tạo</span><br style="color: rgb(85, 85, 85); margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Màu sắc : Như hình</span>', '<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Loại sản phẩm :Giày đá sân cỏ tự nhiên</span><br style="color: rgb(85, 85, 85); margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Chất liệu : da nhân tạo</span><br style="color: rgb(85, 85, 85); margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Màu sắc : Như hình</span>', '4.jpg', 5000000, 0, 0, 1, '2016-12-17 11:21:55'),
(5, 'Giầy ADIDAS 05', 1, 1, 1, '<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Loại sản phẩm :Giày đá sân cỏ tự nhiên</span><br style="color: rgb(85, 85, 85); margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Chất liệu : da nhân tạo</span><br style="color: rgb(85, 85, 85); margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Màu sắc : Như hình</span>', '<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Loại sản phẩm :Giày đá sân cỏ tự nhiên</span><br style="color: rgb(85, 85, 85); margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Chất liệu : da nhân tạo</span><br style="color: rgb(85, 85, 85); margin: 0px; padding: 0px; font-family: roboto, Arial, sans-serif; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: roboto, Arial, sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); background-color: rgb(255, 255, 255);">Màu sắc : Như hình</span>', '5.jpg', 5000000, 0, 0, 0, '2016-12-17 11:22:22'),
(6, 'Quần&Áo ADIDAS 01', 2, 1, 1, 'Quần&amp;Áo ADIDAS ', 'Quần&amp;Áo ADIDAS ', 'a1_1.jpg', 500000, 0, 0, 0, '0000-00-00 00:00:00'),
(7, 'Quần&Áo ADIDAS 02', 2, 1, 1, 'Quần&amp;Áo ADIDAS ', 'Quần&amp;Áo ADIDAS ', 'a2_1.jpg', 500000, 0, 0, 0, '0000-00-00 00:00:00'),
(8, 'Quần&Áo ADIDAS 03', 2, 1, 1, 'Quần&amp;Áo ADIDAS', 'Quần&amp;Áo ADIDAS', 'a3.jpg', 500000, 0, 0, 0, '2016-12-17 07:55:58'),
(9, 'Quần&Áo ADIDAS 04', 2, 1, 1, 'Quần&amp;Áo ADIDAS', 'Quần&amp;Áo ADIDAS', 'a4.jpg', 5000000, 0, 0, 0, '2016-12-17 07:56:24'),
(10, 'Quần&Áo ADIDAS 05', 2, 1, 1, 'Quần&amp;Áo ADIDAS', 'Quần&amp;Áo ADIDAS', 'a5.jpg', 500000, 0, 0, 0, '2016-12-17 07:56:09'),
(11, 'Phụ Kiện ADIDAS 01', 3, 1, 1, 'Phụ Kiện ADIDAS', 'Phụ Kiện ADIDAS', 'pk1.jpg', 100000, 0, 0, 1, '2016-12-08 00:00:00'),
(12, 'Phụ Kiện ADIDAS 02', 3, 1, 1, 'Phụ Kiện ADIDAS', 'Phụ Kiện ADIDAS', 'pk2.jpg', 100000, 0, 0, 0, '2016-11-09 00:00:00'),
(13, 'Phụ Kiện ADIDAS 03', 3, 1, 1, 'Phụ Kiện ADIDAS', 'Phụ Kiện ADIDAS', 'pk3.jpg', 100000, 0, 0, 1, '0000-00-00 00:00:00'),
(14, 'Phụ Kiện ADIDAS 04', 3, 1, 1, 'Phụ Kiện ADIDAS', 'Phụ Kiện ADIDAS', 'pk4.jpg', 100000, 0, 0, 1, '0000-00-00 00:00:00'),
(15, 'Phụ Kiện ADIDAS 05', 3, 1, 1, 'Phụ Kiện ADIDAS', 'Phụ Kiện ADIDAS', 'pk5.jpg', 100000, 0, 0, 0, '2016-11-10 00:00:00'),
(16, 'Giầy NIKE 01', 1, 1, 2, 'Giầy NIKE', 'Giầy NIKE', 'n1.jpg', 4500000, 0, 0, 0, '2016-11-12 00:00:00'),
(17, 'Giầy NIKE 02', 1, 1, 2, 'Giầy NIKE', 'Giầy NIKE', 'n2.jpg', 4500000, 0, 0, 0, '2016-11-11 00:00:00'),
(18, 'Giầy NIKE 03', 1, 1, 2, 'Giầy NIKE', 'Giầy NIKE', 'n3.jpg', 4500000, 0, 0, 0, '2016-12-09 00:00:00'),
(19, 'Giầy NIKE 04', 1, 1, 2, 'Giầy NIKE', 'Giầy NIKE', 'n4.jpg', 4500000, 0, 0, 0, '0000-00-00 00:00:00'),
(20, 'Giầy NIKE 05', 1, 1, 2, 'Giầy NIKE', 'Giầy NIKE', 'n5.jpg', 4500000, 0, 0, 0, '0000-00-00 00:00:00'),
(21, 'Quần&Áo NIKE 01', 2, 1, 2, 'Quần&amp;Áo NIKE 01', 'Quần&amp;Áo NIKE 01', 'a.png', 300000, 0, 0, 1, '2016-12-17 07:56:52'),
(22, 'Quần&Áo NIKE 02', 2, 1, 2, 'Quần&amp;Áo NIKE 02', 'Quần&amp;Áo NIKE 02', 'tt.png', 300000, 0, 0, 1, '2016-12-17 07:57:12'),
(23, 'Quần&Áo NIKE 03', 2, 1, 2, 'Quần&amp;Áo NIKE 03', 'Quần&amp;Áo NIKE 03', 'bbb.png', 300000, 0, 0, 1, '2016-12-17 07:58:18'),
(24, 'Quần&Áo NIKE 04', 2, 1, 2, 'Quần&amp;Áo NIKE 04', 'Quần&amp;Áo NIKE 04', 'm.jpg', 300000, 0, 0, 0, '2016-12-17 07:28:00'),
(25, 'Quần&Áo NIKE 05', 2, 1, 2, 'Quần&amp;Áo NIKE 05', 'Quần&amp;Áo NIKE 05', 'xxxxx.png', 300000, 0, 0, 0, '2016-12-17 07:58:33'),
(41, 'NIKE AIR MAX 2017', 1, 2, 2, 'NIKE AIR MAX 2017', '<font face="Arial, Helvetica, sans-serif"><span style="font-size: 13px;">NIKE AIR MAX 2017</span></font>', 'h.jpg', 3000000, 0, 0, 1, '2016-12-17 08:03:58'),
(42, 'NIKE AIR MAX 2017 s', 1, 2, 1, 'NIKE AIR MAX 2017 s', '<font face="Arial, Helvetica, sans-serif"><span style="font-size: 13px;">NIKE AIR MAX 2017 s</span></font>', 'j.jpg', 2000000, 0, 0, 0, '2016-12-17 08:05:10'),
(31, 'Giầy PUMA 01', 1, 1, 3, 'Giầy PUMA', 'Giầy PUMA', 'p1.jpg', 450000, 0, 0, 1, '0000-00-00 00:00:00'),
(32, 'Giầy PUMA 02', 1, 1, 3, 'Giầy PUMA', 'Giầy PUMA', 'p2.jpg', 3000000, 0, 0, 0, '2016-11-26 00:00:00'),
(33, 'Giầy PUMA 03', 1, 1, 3, 'Giầy PUMA', 'Giầy PUMA', 'p3.jpg', 3500000, 0, 0, 0, '2016-11-26 00:00:00'),
(34, 'Giầy PUMA 04', 1, 1, 3, 'Giầy PUMA', 'Giầy PUMA', 'p4.jpg', 4300000, 0, 0, 0, '2016-11-26 00:00:00'),
(35, 'Giầy PUMA 05', 1, 1, 3, 'Giầy PUMA', 'Giầy PUMA', 'p5.jpg', 3400000, 0, 0, 0, '2016-11-26 00:00:00'),
(37, 'Quần&Áo PUMA 01', 2, 1, 3, '<font face="Arial, Helvetica, sans-serif"><span style="font-size: 13px;">Quần&amp;Áo PUMA 01</span></font>', '<font face="Arial, Helvetica, sans-serif"><span style="font-size: 13px;">Quần&amp;Áo PUMA 01</span>&', 'ao_pm1.1.jpg', 600000, 0, 0, 1, '2016-12-17 06:58:25'),
(39, 'ARIANNA CLOUDFOAM SHOES', 1, 3, 1, 'Giầy tập luyện thể thao', 'Giầy tập luyện thể thao', '44.jpg', 500000, 0, 0, 0, '2016-12-15 18:17:38'),
(40, 'ENERGY BOUNCE 2.0 SHOESs', 1, 3, 1, 'Giầy tập luyện', 'Giầy tập luyện', 'S80377_01_standard.jpg', 600000, 0, 0, 1, '2016-12-15 18:17:55'),
(43, 'NIKE AIR MAX 2016', 1, 2, 2, 'NIKE AIR MAX 2016', 'NIKE AIR MAX 2016', 'f.jpg', 6000000, 0, 0, 0, '2016-12-17 08:01:22'),
(44, 'NIKE AIR MAX 2016', 1, 2, 2, 'NIKE AIR MAX 2016', 'NIKE AIR MAX 2016', 'jjjjjjj.jpg', 2000000, 0, 0, 1, '2016-12-17 08:08:01'),
(45, 'NIKE AIR MAX 2016', 1, 2, 2, 'NIKE AIR MAX 2016', 'NIKE AIR MAX 2016', 'g.jpg', 2000000, 0, 0, 1, '2016-12-17 08:09:34');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
