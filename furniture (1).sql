-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 11:07 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `o_id` int(11) NOT NULL,
  `o_list` varchar(2550) COLLATE utf8_unicode_ci NOT NULL,
  `o_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`o_id`, `o_list`, `o_user`) VALUES
(5, '{\"2\":{\"id\":\"2\",\"name\":\"ตู้เสื้อผ้าบานเลื่อน\",\"count\":2,\"price\":\"5999\",\"total\":11998},\"1\":{\"id\":\"1\",\"name\":\"ตู้เสื้อผ้า ,ขนาด 160 x 60 x 210CM\",\"count\":1,\"price\":\"28800\",\"total\":\"28800\"}}', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_pro` int(11) NOT NULL,
  `name_pro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price_pro` int(20) NOT NULL,
  `pro_add` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_pro`, `name_pro`, `price_pro`, `pro_add`, `pro_img`, `id_type`) VALUES
(1, 'ตู้เสื้อผ้า ,ขนาด 160 x 60 x 210CM', 28800, 'A1', 'ตู้เสื้อผ้า1.jpg', 1),
(2, 'ตู้เสื้อผ้าบานเลื่อน', 5999, 'A1', 'ตู้เสื้อผ้า2.jpg', 1),
(3, 'ตู้เสื้อผ้าทึบ 3 ลิ้นชัก รุ่น 3.5 F', 1990, 'A1', 'ตู้เสื้อผ้า3.jpg', 1),
(4, 'ตู้เสื้อผ้าเหล็กบานเลื่อน', 6900, 'A1', 'ตู้เสื้อผ้า4.jpg', 1),
(5, 'ตู้เสื้อผ้าลายการ์ตูน', 4500, 'A1', 'ตู้เสื้อผ้า5.jpg', 1),
(6, 'ตู้เสื้อผ้าไม้อัด', 7500, 'A1', 'ตู้เสื้อผ้า6.jpg', 1),
(7, 'เตียงนอนสไตล์ยุโรป BP-57', 29000, 'B2', 'เตียงนอน1.jpg', 2),
(8, 'เตียงนอนLOTO MOBILI', 79450, 'B2', 'เตียงนอน2.jpg', 2),
(9, 'เตียงนอน bt-02', 8900, 'B2', 'เตียงนอน3.jpg', 2),
(10, 'เตียงนอน 5,6 ฟุต เบสิค', 5950, 'B2', 'เตียงนอน4.jpg', 2),
(11, 'เตียงนอน MARCH', 5950, 'B2', 'เตียงนอน5.jpg', 2),
(12, 'เตียงนอน รุ่น 30033D-3.5-SF', 19900, 'B2', 'เตียงนอน6.jpg', 2),
(13, 'ที่นอนปิกนิกพร้อมหมอน', 599, 'C1', 'ที่นอน1.jpg', 3),
(14, 'ที่นอนปิคนิคRejuvinite 3 ฟุต', 1299, 'C1', 'ที่นอน2.jpg', 3),
(15, 'ที่นอนสปริง MIDAS รุ่น Whiteport 6 ฟุต', 8400, 'C1', 'ที่นอน3.jpg', 3),
(16, 'ที่นอนพ๊อคเก็ตสปริงLUCKYรุ่นIrisขนาด6ฟุต', 1490, 'C1', 'ที่นอน4.jpg', 3),
(17, 'ที่นอน JAPAN รุ่น OSAKA\r\n', 8900, 'C1', 'ที่นอน5.jpg', 3),
(18, 'ที่นอนหอพัก รุ่นฟองอัด', 2350, 'C1', 'ที่นอน6.jpg', 3),
(19, 'โต๊ะเครื่องแป้ง + สตูล 60 ซม. รุ่น DT601', 2500, 'D1', 'เครื่องแป้ง1.jpg', 4),
(20, 'ชุดโต๊ะเครื่องแป้ง 1.45 เมตร รุ่น 23112', 4200, 'D1', 'เครื่องแป้ง2.jpg', 4),
(21, 'ONLY โต๊ะเครื่องแป้งพร้อมสตูล', 1150, 'D1', 'เครื่องแป้ง3.jpg', 4),
(22, 'โต๊ะเครื่องแป้ง รุ่น 25443', 5100, 'D1', 'เครื่องแป้ง4.png', 4),
(23, 'โต๊ะเครื่องแป้ง', 3200, 'D1', 'เครื่องแป้ง5.jpg', 4),
(24, 'DC370 โต๊ะเครื่อองแป้ง+สตูล', 3900, 'D1', 'เครื่องแป้ง6.jpg', 4),
(25, 'ชุดโซฟาเบด – 187  CM', 14900, 'E1', 'โซฟา1.jpg', 5),
(26, 'โซฟาพักผ่อนผ้านาโนกันน้ำ รุ่น Daveno Sleeper', 74498, 'E1', 'โซฟา2.jpg', 5),
(27, 'CALINA โซฟาหนัง 3 ที่นั่ง รุ่น A111-3S', 28900, 'E1', 'โซฟา3.jpg', 5),
(28, 'โซฟาเบด รุ่น พรีเมียม 2.45 m', 22900, 'E1', 'โซฟา4.jpg', 5),
(29, 'โซฟา NEW41-18 สีแดง', 19000, 'E1', 'โซฟา5.jpg', 5),
(30, 'โซฟา 3 ที่นั่ง, ยี่ห้อ KONCEPT FURNITURE', 17900, 'E1', 'โซฟา6.jpg', 5),
(31, 'ชั้นวางทีวีบานเลื่อนคู่ 120 ซม', 4950, 'F1', 'ชั้นวาง1.jpg', 6),
(32, 'ชั้นวางรองเท้า พร้อมที่นั่ง เบาะหนัง', 4390, 'F1', 'ชั้นวาง2.jpg', 6),
(33, 'ชั้นวางของ 80 ซม.', 2415, 'F1', 'ชั้นวาง3.jpg', 6),
(34, 'ชั้นวางเอนกประสงค์ คัลเลอร์บ๊อกส์ 3 shelf', 750, 'F1', 'ชั้นวาง4.jpg', 6),
(35, 'ชั้นวางหนังสือ 4 ชั้น เฟอร์ราเดค BS-1617', 3720, 'F1', 'ชั้นวาง5.jpg', 6),
(36, 'ชั้นวางของสีลายไม้', 2415, 'F1', 'ชั้นวาง6.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_type`
--

CREATE TABLE `tb_type` (
  `id_type` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_type`
--

INSERT INTO `tb_type` (`id_type`, `name`) VALUES
(1, 'ตู้เสื้อผ้า'),
(2, 'เตียงนอน'),
(3, 'ที่นอน'),
(4, 'โต๊ะเครื่องแป้ง'),
(5, 'โซฟา'),
(6, 'ชั้นวาง');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `name`, `phone`, `username`, `password`, `status`) VALUES
(1, 'admin', '0857894312', 'admin', 'admin', 'admin'),
(2, 'นางสาวมณีรัตน์ มาบิดา', '', 'Earn', '123456', 'user'),
(3, 'เจนีก้า เอ กิลเลียนโน', '', 'caca9927', '1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `o_user` (`o_user`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `tb_product_ibfk_1` (`id_type`);

--
-- Indexes for table `tb_type`
--
ALTER TABLE `tb_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_type`
--
ALTER TABLE `tb_type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`o_user`) REFERENCES `tb_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `tb_product_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `tb_type` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
