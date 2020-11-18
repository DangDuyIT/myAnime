-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2020 lúc 04:20 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `myfilm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `birthday` datetime NOT NULL,
  `sex` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`username`, `password`, `email`, `fullname`, `birthday`, `sex`) VALUES
('paradiseo0', '25d55ad283aa400af464c76d713c07ad', 'anhmatdieuhau@gmail.com', 'Đặng Thọ Duy', '2020-10-29 00:00:00', 'Nam'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'anhmatdieuhau1@gmail.com', 'Đặng DY', '2020-10-26 00:00:00', 'Nu'),
('paradiseo01', '25d55ad283aa400af464c76d713c07ad', 'dtduy46@gmail.com', '2020-11-04', '2020-11-09 00:00:00', 'Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `descriptionfilm`
--

CREATE TABLE `descriptionfilm` (
  `id` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `descriptionfilm`
--

INSERT INTO `descriptionfilm` (`id`, `id_film`, `description`) VALUES
(1, 1, 'Raku Ichijou, a first-year student at Bonyari High School, is the sole heir to an intimidating yakuza family. Ten years ago, Raku made a promise to his childhood friend. Now, all he has to go on is a pendant with a lock, which can only be unlocked with the key which the girl took with her when they parted.\r\n\r\nNisekoi follows the daily antics of this mismatched couple who have been forced to get along for the sake of maintaining the city\'s peace. With many more girls popping up his life, all involved with Raku\'s past somehow, his search for the girl who holds his heart and his promise leads him in more unexpected directions than he expects.'),
(2, 2, 'Tanjirou is the oldest son of a family who recently lost his father. One day, Tanjirou visited another town to sell coal, when at night he stayed at someone else\'s house instead of going home because of rumors of demons always lurking near the mountain at night. When he got home the next day, drama was waiting for him ...');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detailfilm`
--

CREATE TABLE `detailfilm` (
  `id` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `animeName` varchar(500) NOT NULL,
  `url` varchar(500) NOT NULL,
  `episodes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `detailfilm`
--

INSERT INTO `detailfilm` (`id`, `id_film`, `animeName`, `url`, `episodes`) VALUES
(1, 1, 'Nisekoi', 'https://www.youtube.com/embed/FUyfzz_yo8I', 1),
(2, 2, 'Kimetsu no Yaiba', 'https://www.youtube.com/embed/P-uhgIzHYYo', 2),
(4, 1, 'Ep2 Chitoge', 'https://www.youtube.com/embed/3pAWQhPPibI', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `listfilm`
--

CREATE TABLE `listfilm` (
  `id` int(11) NOT NULL,
  `nameAnime` varchar(255) NOT NULL,
  `img` varchar(500) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `listfilm`
--

INSERT INTO `listfilm` (`id`, `nameAnime`, `img`, `views`) VALUES
(1, 'Chitoge', 'https://i.pinimg.com/originals/7d/46/9d/7d469dc46897a7eab5627c7dc8c0608d.png', 123124),
(2, 'Kimesu-no-yaiba', 'https://cf.shopee.vn/file/9fcba91e755c1c349dcbc6f6694b533b', 3452353),
(3, 'Guity-Crown', 'https://i0.wp.com/farm8.staticflickr.com/7047/7008075789_ede1b52f70_c.jpg', 1234123),
(4, 'Nuruto Shipuden', 'https://images-na.ssl-images-amazon.com/images/I/61ZQa64IpWL._AC_SX679_.jpg', 23412343),
(5, 'Tate no Yuusha', 'https://a4vf.com/wp-content/uploads/2019/01/tate-yuusha.jpg', 2123412),
(6, 'Tokyo ghoul', 'https://images-na.ssl-images-amazon.com/images/I/51UfgHEbgiL._AC_SY355_.jpg', 234123);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `descriptionfilm`
--
ALTER TABLE `descriptionfilm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_film` (`id_film`);

--
-- Chỉ mục cho bảng `detailfilm`
--
ALTER TABLE `detailfilm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_film` (`id_film`);

--
-- Chỉ mục cho bảng `listfilm`
--
ALTER TABLE `listfilm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `descriptionfilm`
--
ALTER TABLE `descriptionfilm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `detailfilm`
--
ALTER TABLE `detailfilm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `listfilm`
--
ALTER TABLE `listfilm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `descriptionfilm`
--
ALTER TABLE `descriptionfilm`
  ADD CONSTRAINT `descriptionfilm_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `listfilm` (`id`);

--
-- Các ràng buộc cho bảng `detailfilm`
--
ALTER TABLE `detailfilm`
  ADD CONSTRAINT `detailfilm_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `listfilm` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
