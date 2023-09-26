-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               11.3.0-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table cse_th1b.baiviet
CREATE TABLE IF NOT EXISTS `baiviet` (
  `ma_bviet` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tieude` varchar(200) NOT NULL,
  `ten_bhat` varchar(100) NOT NULL,
  `ma_tloai` int(10) unsigned NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `ma_tgia` int(10) unsigned NOT NULL,
  `ngayviet` datetime NOT NULL DEFAULT current_timestamp(),
  `hinhanh` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ma_bviet`),
  KEY `ma_tloai` (`ma_tloai`),
  KEY `ma_tgia` (`ma_tgia`),
  CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai` (`ma_tloai`),
  CONSTRAINT `baiviet_ibfk_2` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia` (`ma_tgia`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table cse_th1b.baiviet: ~72 rows (approximately)
INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
	(25, 'Lời bài hát Phố không mùa', 'Phố không mùa', 2, 'Tóm tắt bài Phố không mùa', 'Nội dung bài hát Phố không mùa', 1, '2016-05-09 00:00:00', 'https://nhaccuthienphuc.com/wp-content/uploads/2016/09/pho-khong-mua.jpg'),
	(26, 'Lời bài hát Người có thương', 'Người có thương', 2, 'Tóm tắt bài Người có thương', 'Nội dung bài hát Người có thương', 1, '2021-12-09 00:00:00', 'https://i.ytimg.com/vi/xb9-oaSdbDs/maxresdefault.jpg'),
	(27, 'Lời bài hát Anh sẽ cho mình', 'Anh sẽ cho mình', 2, 'Tóm tắt Anh sẽ cho mình', 'Nội dung bài hát Anh sẽ cho mình', 1, '2019-08-09 00:00:00', 'https://i.ytimg.com/vi/2Squv4QFpYU/sddefault.jpg'),
	(28, 'Lời bài hát Tháng mấy em nhớ anh', 'Tháng mấy em nhớ anh', 2, 'Tóm tắt Tháng mấy em nhớ anh', 'Nội dung Tháng mấy em nhớ anh', 2, '2016-10-19 00:00:00', 'https://avatar-ex-swe.nixcdn.com/song/share/2021/04/01/2/9/0/f/1617248290828.jpg'),
	(29, 'Lời bài hát Tháng tư là lời nói dối của em', 'Tháng tư là lời nói dối của em', 2, 'Tóm tắt Tháng tư là lời nói dối của em', 'Nội dung Tháng tư là lời nói dối của em', 2, '2017-02-24 00:00:00', 'https://i.ytimg.com/vi/UCXao7aTDQM/maxresdefault.jpg'),
	(30, 'Lời bài hát Túp lều lý tưởng', 'Túp lều lý tưởng', 1, 'Tóm tắt bài Túp lều lý tưởng', 'Nội dung bài hát Túp lều lý tưởng', 5, '2012-10-10 00:00:00', 'https://photo-resize-zmp3.zmdcdn.me/w600_r1x1_jpeg/covers/e/b/eb0786f1793299f9589468408e0ffa9f_1289838145.jpg'),
	(31, 'Lời bài hát Thị Mầu', 'Thị Mầu', 2, 'Tóm tắt bài Thị Mầu', 'Nội dung bài hát Thị Mầu', 4, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/0yHtYPeK2Jg/maxresdefault.jpg'),
	(32, 'Lời bài hát Lửng lơ', 'Lửng lơ', 3, 'Tóm tắt bài Lửng lơ', 'Nội dung bài hát Lửng lơ', 7, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/HehotFZ8BGo/maxresdefault.jpg'),
	(33, 'Lời bài hát À Lôi', 'À Lôi', 4, 'Tóm tắt bài À Lôi', 'Nội dung bài hát À Lôi', 6, '2012-10-10 00:00:00', 'https://photo-cms-tpo.epicdn.me/w1000/Uploaded/2023/ofh-yuztztmf/2023_07_31/a-loi-la-gi-01-5778.jpeg'),
	(34, 'Lời bài hát Người miền núi chất', 'Người miền núi chất', 4, 'Tóm tắt bài Người miền núi chất', 'Nội dung bài hát Người miền núi chất', 6, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/xVtkkHfrqPs/maxresdefault.jpg'),
	(35, 'Lời bài hát Anh ba khía', 'Anh ba khía', 1, 'Tóm tắt bài Anh ba khía', 'Nội dung bài hát Anh ba khía', 5, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/bujtjkN_C64/maxresdefault.jpg'),
	(36, 'Lời bài hát Bật tình yêu lên', 'Bật tình yêu lên', 2, 'Tóm tắt bài Bật tình yêu lên', 'Nội dung bài hát Bật tình yêu lên', 4, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/VHjMJeLsI0o/maxresdefault.jpg'),
	(37, 'Lời bài hát Phố không mùa', 'Phố không mùa', 2, 'Tóm tắt bài Phố không mùa', 'Nội dung bài hát Phố không mùa', 1, '2016-05-09 00:00:00', 'https://nhaccuthienphuc.com/wp-content/uploads/2016/09/pho-khong-mua.jpg'),
	(38, 'Lời bài hát Người có thương', 'Người có thương', 2, 'Tóm tắt bài Người có thương', 'Nội dung bài hát Người có thương', 1, '2021-12-09 00:00:00', 'https://i.ytimg.com/vi/xb9-oaSdbDs/maxresdefault.jpg'),
	(39, 'Lời bài hát Anh sẽ cho mình', 'Anh sẽ cho mình', 2, 'Tóm tắt Anh sẽ cho mình', 'Nội dung bài hát Anh sẽ cho mình', 1, '2019-08-09 00:00:00', 'https://i.ytimg.com/vi/2Squv4QFpYU/sddefault.jpg'),
	(40, 'Lời bài hát Tháng mấy em nhớ anh', 'Tháng mấy em nhớ anh', 2, 'Tóm tắt Tháng mấy em nhớ anh', 'Nội dung Tháng mấy em nhớ anh', 2, '2016-10-19 00:00:00', 'https://avatar-ex-swe.nixcdn.com/song/share/2021/04/01/2/9/0/f/1617248290828.jpg'),
	(41, 'Lời bài hát Tháng tư là lời nói dối của em', 'Tháng tư là lời nói dối của em', 2, 'Tóm tắt Tháng tư là lời nói dối của em', 'Nội dung Tháng tư là lời nói dối của em', 2, '2017-02-24 00:00:00', 'https://i.ytimg.com/vi/UCXao7aTDQM/maxresdefault.jpg'),
	(42, 'Lời bài hát Túp lều lý tưởng', 'Túp lều lý tưởng', 1, 'Tóm tắt bài Túp lều lý tưởng', 'Nội dung bài hát Túp lều lý tưởng', 5, '2012-10-10 00:00:00', 'https://photo-resize-zmp3.zmdcdn.me/w600_r1x1_jpeg/covers/e/b/eb0786f1793299f9589468408e0ffa9f_1289838145.jpg'),
	(43, 'Lời bài hát Thị Mầu', 'Thị Mầu', 2, 'Tóm tắt bài Thị Mầu', 'Nội dung bài hát Thị Mầu', 4, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/0yHtYPeK2Jg/maxresdefault.jpg'),
	(44, 'Lời bài hát Lửng lơ', 'Lửng lơ', 3, 'Tóm tắt bài Lửng lơ', 'Nội dung bài hát Lửng lơ', 7, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/HehotFZ8BGo/maxresdefault.jpg'),
	(45, 'Lời bài hát À Lôi', 'À Lôi', 4, 'Tóm tắt bài À Lôi', 'Nội dung bài hát À Lôi', 6, '2012-10-10 00:00:00', 'https://photo-cms-tpo.epicdn.me/w1000/Uploaded/2023/ofh-yuztztmf/2023_07_31/a-loi-la-gi-01-5778.jpeg'),
	(46, 'Lời bài hát Người miền núi chất', 'Người miền núi chất', 4, 'Tóm tắt bài Người miền núi chất', 'Nội dung bài hát Người miền núi chất', 6, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/xVtkkHfrqPs/maxresdefault.jpg'),
	(47, 'Lời bài hát Anh ba khía', 'Anh ba khía', 1, 'Tóm tắt bài Anh ba khía', 'Nội dung bài hát Anh ba khía', 5, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/bujtjkN_C64/maxresdefault.jpg'),
	(48, 'Lời bài hát Bật tình yêu lên', 'Bật tình yêu lên', 2, 'Tóm tắt bài Bật tình yêu lên', 'Nội dung bài hát Bật tình yêu lên', 4, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/VHjMJeLsI0o/maxresdefault.jpg'),
	(49, 'Lời bài hát Phố không mùa', 'Phố không mùa', 2, 'Tóm tắt bài Phố không mùa', 'Nội dung bài hát Phố không mùa', 1, '2016-05-09 00:00:00', 'https://nhaccuthienphuc.com/wp-content/uploads/2016/09/pho-khong-mua.jpg'),
	(50, 'Lời bài hát Người có thương', 'Người có thương', 2, 'Tóm tắt bài Người có thương', 'Nội dung bài hát Người có thương', 1, '2021-12-09 00:00:00', 'https://i.ytimg.com/vi/xb9-oaSdbDs/maxresdefault.jpg'),
	(51, 'Lời bài hát Anh sẽ cho mình', 'Anh sẽ cho mình', 2, 'Tóm tắt Anh sẽ cho mình', 'Nội dung bài hát Anh sẽ cho mình', 1, '2019-08-09 00:00:00', 'https://i.ytimg.com/vi/2Squv4QFpYU/sddefault.jpg'),
	(52, 'Lời bài hát Tháng mấy em nhớ anh', 'Tháng mấy em nhớ anh', 2, 'Tóm tắt Tháng mấy em nhớ anh', 'Nội dung Tháng mấy em nhớ anh', 2, '2016-10-19 00:00:00', 'https://avatar-ex-swe.nixcdn.com/song/share/2021/04/01/2/9/0/f/1617248290828.jpg'),
	(53, 'Lời bài hát Tháng tư là lời nói dối của em', 'Tháng tư là lời nói dối của em', 2, 'Tóm tắt Tháng tư là lời nói dối của em', 'Nội dung Tháng tư là lời nói dối của em', 2, '2017-02-24 00:00:00', 'https://i.ytimg.com/vi/UCXao7aTDQM/maxresdefault.jpg'),
	(54, 'Lời bài hát Túp lều lý tưởng', 'Túp lều lý tưởng', 1, 'Tóm tắt bài Túp lều lý tưởng', 'Nội dung bài hát Túp lều lý tưởng', 5, '2012-10-10 00:00:00', 'https://photo-resize-zmp3.zmdcdn.me/w600_r1x1_jpeg/covers/e/b/eb0786f1793299f9589468408e0ffa9f_1289838145.jpg'),
	(55, 'Lời bài hát Thị Mầu', 'Thị Mầu', 2, 'Tóm tắt bài Thị Mầu', 'Nội dung bài hát Thị Mầu', 4, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/0yHtYPeK2Jg/maxresdefault.jpg'),
	(56, 'Lời bài hát Lửng lơ', 'Lửng lơ', 3, 'Tóm tắt bài Lửng lơ', 'Nội dung bài hát Lửng lơ', 7, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/HehotFZ8BGo/maxresdefault.jpg'),
	(57, 'Lời bài hát À Lôi', 'À Lôi', 4, 'Tóm tắt bài À Lôi', 'Nội dung bài hát À Lôi', 6, '2012-10-10 00:00:00', 'https://photo-cms-tpo.epicdn.me/w1000/Uploaded/2023/ofh-yuztztmf/2023_07_31/a-loi-la-gi-01-5778.jpeg'),
	(58, 'Lời bài hát Người miền núi chất', 'Người miền núi chất', 4, 'Tóm tắt bài Người miền núi chất', 'Nội dung bài hát Người miền núi chất', 6, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/xVtkkHfrqPs/maxresdefault.jpg'),
	(59, 'Lời bài hát Anh ba khía', 'Anh ba khía', 1, 'Tóm tắt bài Anh ba khía', 'Nội dung bài hát Anh ba khía', 5, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/bujtjkN_C64/maxresdefault.jpg'),
	(60, 'Lời bài hát Bật tình yêu lên', 'Bật tình yêu lên', 2, 'Tóm tắt bài Bật tình yêu lên', 'Nội dung bài hát Bật tình yêu lên', 4, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/VHjMJeLsI0o/maxresdefault.jpg'),
	(61, 'Lời bài hát Phố không mùa', 'Phố không mùa', 2, 'Tóm tắt bài Phố không mùa', 'Nội dung bài hát Phố không mùa', 1, '2016-05-09 00:00:00', 'https://nhaccuthienphuc.com/wp-content/uploads/2016/09/pho-khong-mua.jpg'),
	(62, 'Lời bài hát Người có thương', 'Người có thương', 2, 'Tóm tắt bài Người có thương', 'Nội dung bài hát Người có thương', 1, '2021-12-09 00:00:00', 'https://i.ytimg.com/vi/xb9-oaSdbDs/maxresdefault.jpg'),
	(63, 'Lời bài hát Anh sẽ cho mình', 'Anh sẽ cho mình', 2, 'Tóm tắt Anh sẽ cho mình', 'Nội dung bài hát Anh sẽ cho mình', 1, '2019-08-09 00:00:00', 'https://i.ytimg.com/vi/2Squv4QFpYU/sddefault.jpg'),
	(64, 'Lời bài hát Tháng mấy em nhớ anh', 'Tháng mấy em nhớ anh', 2, 'Tóm tắt Tháng mấy em nhớ anh', 'Nội dung Tháng mấy em nhớ anh', 2, '2016-10-19 00:00:00', 'https://avatar-ex-swe.nixcdn.com/song/share/2021/04/01/2/9/0/f/1617248290828.jpg'),
	(65, 'Lời bài hát Tháng tư là lời nói dối của em', 'Tháng tư là lời nói dối của em', 2, 'Tóm tắt Tháng tư là lời nói dối của em', 'Nội dung Tháng tư là lời nói dối của em', 2, '2017-02-24 00:00:00', 'https://i.ytimg.com/vi/UCXao7aTDQM/maxresdefault.jpg'),
	(66, 'Lời bài hát Túp lều lý tưởng', 'Túp lều lý tưởng', 1, 'Tóm tắt bài Túp lều lý tưởng', 'Nội dung bài hát Túp lều lý tưởng', 5, '2012-10-10 00:00:00', 'https://photo-resize-zmp3.zmdcdn.me/w600_r1x1_jpeg/covers/e/b/eb0786f1793299f9589468408e0ffa9f_1289838145.jpg'),
	(67, 'Lời bài hát Thị Mầu', 'Thị Mầu', 2, 'Tóm tắt bài Thị Mầu', 'Nội dung bài hát Thị Mầu', 4, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/0yHtYPeK2Jg/maxresdefault.jpg'),
	(68, 'Lời bài hát Lửng lơ', 'Lửng lơ', 3, 'Tóm tắt bài Lửng lơ', 'Nội dung bài hát Lửng lơ', 7, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/HehotFZ8BGo/maxresdefault.jpg'),
	(69, 'Lời bài hát À Lôi', 'À Lôi', 4, 'Tóm tắt bài À Lôi', 'Nội dung bài hát À Lôi', 6, '2012-10-10 00:00:00', 'https://photo-cms-tpo.epicdn.me/w1000/Uploaded/2023/ofh-yuztztmf/2023_07_31/a-loi-la-gi-01-5778.jpeg'),
	(70, 'Lời bài hát Người miền núi chất', 'Người miền núi chất', 4, 'Tóm tắt bài Người miền núi chất', 'Nội dung bài hát Người miền núi chất', 6, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/xVtkkHfrqPs/maxresdefault.jpg'),
	(71, 'Lời bài hát Anh ba khía', 'Anh ba khía', 1, 'Tóm tắt bài Anh ba khía', 'Nội dung bài hát Anh ba khía', 5, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/bujtjkN_C64/maxresdefault.jpg'),
	(72, 'Lời bài hát Bật tình yêu lên', 'Bật tình yêu lên', 2, 'Tóm tắt bài Bật tình yêu lên', 'Nội dung bài hát Bật tình yêu lên', 4, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/VHjMJeLsI0o/maxresdefault.jpg'),
	(73, 'Lời bài hát Phố không mùa', 'Phố không mùa', 2, 'Tóm tắt bài Phố không mùa', 'Nội dung bài hát Phố không mùa', 1, '2016-05-09 00:00:00', 'https://nhaccuthienphuc.com/wp-content/uploads/2016/09/pho-khong-mua.jpg'),
	(74, 'Lời bài hát Người có thương', 'Người có thương', 2, 'Tóm tắt bài Người có thương', 'Nội dung bài hát Người có thương', 1, '2021-12-09 00:00:00', 'https://i.ytimg.com/vi/xb9-oaSdbDs/maxresdefault.jpg'),
	(75, 'Lời bài hát Anh sẽ cho mình', 'Anh sẽ cho mình', 2, 'Tóm tắt Anh sẽ cho mình', 'Nội dung bài hát Anh sẽ cho mình', 1, '2019-08-09 00:00:00', 'https://i.ytimg.com/vi/2Squv4QFpYU/sddefault.jpg'),
	(76, 'Lời bài hát Tháng mấy em nhớ anh', 'Tháng mấy em nhớ anh', 2, 'Tóm tắt Tháng mấy em nhớ anh', 'Nội dung Tháng mấy em nhớ anh', 2, '2016-10-19 00:00:00', 'https://avatar-ex-swe.nixcdn.com/song/share/2021/04/01/2/9/0/f/1617248290828.jpg'),
	(77, 'Lời bài hát Tháng tư là lời nói dối của em', 'Tháng tư là lời nói dối của em', 2, 'Tóm tắt Tháng tư là lời nói dối của em', 'Nội dung Tháng tư là lời nói dối của em', 2, '2017-02-24 00:00:00', 'https://i.ytimg.com/vi/UCXao7aTDQM/maxresdefault.jpg'),
	(78, 'Lời bài hát Túp lều lý tưởng', 'Túp lều lý tưởng', 1, 'Tóm tắt bài Túp lều lý tưởng', 'Nội dung bài hát Túp lều lý tưởng', 5, '2012-10-10 00:00:00', 'https://photo-resize-zmp3.zmdcdn.me/w600_r1x1_jpeg/covers/e/b/eb0786f1793299f9589468408e0ffa9f_1289838145.jpg'),
	(79, 'Lời bài hát Thị Mầu', 'Thị Mầu', 2, 'Tóm tắt bài Thị Mầu', 'Nội dung bài hát Thị Mầu', 4, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/0yHtYPeK2Jg/maxresdefault.jpg'),
	(80, 'Lời bài hát Lửng lơ', 'Lửng lơ', 3, 'Tóm tắt bài Lửng lơ', 'Nội dung bài hát Lửng lơ', 7, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/HehotFZ8BGo/maxresdefault.jpg'),
	(81, 'Lời bài hát À Lôi', 'À Lôi', 4, 'Tóm tắt bài À Lôi', 'Nội dung bài hát À Lôi', 6, '2012-10-10 00:00:00', 'https://photo-cms-tpo.epicdn.me/w1000/Uploaded/2023/ofh-yuztztmf/2023_07_31/a-loi-la-gi-01-5778.jpeg'),
	(82, 'Lời bài hát Người miền núi chất', 'Người miền núi chất', 4, 'Tóm tắt bài Người miền núi chất', 'Nội dung bài hát Người miền núi chất', 6, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/xVtkkHfrqPs/maxresdefault.jpg'),
	(83, 'Lời bài hát Anh ba khía', 'Anh ba khía', 1, 'Tóm tắt bài Anh ba khía', 'Nội dung bài hát Anh ba khía', 5, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/bujtjkN_C64/maxresdefault.jpg'),
	(84, 'Lời bài hát Bật tình yêu lên', 'Bật tình yêu lên', 2, 'Tóm tắt bài Bật tình yêu lên', 'Nội dung bài hát Bật tình yêu lên', 4, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/VHjMJeLsI0o/maxresdefault.jpg'),
	(85, 'Lời bài hát Phố không mùa', 'Phố không mùa', 2, 'Tóm tắt bài Phố không mùa', 'Nội dung bài hát Phố không mùa', 1, '2016-05-09 00:00:00', 'https://nhaccuthienphuc.com/wp-content/uploads/2016/09/pho-khong-mua.jpg'),
	(86, 'Lời bài hát Người có thương', 'Người có thương', 2, 'Tóm tắt bài Người có thương', 'Nội dung bài hát Người có thương', 1, '2021-12-09 00:00:00', 'https://i.ytimg.com/vi/xb9-oaSdbDs/maxresdefault.jpg'),
	(87, 'Lời bài hát Anh sẽ cho mình', 'Anh sẽ cho mình', 2, 'Tóm tắt Anh sẽ cho mình', 'Nội dung bài hát Anh sẽ cho mình', 1, '2019-08-09 00:00:00', 'https://i.ytimg.com/vi/2Squv4QFpYU/sddefault.jpg'),
	(88, 'Lời bài hát Tháng mấy em nhớ anh', 'Tháng mấy em nhớ anh', 2, 'Tóm tắt Tháng mấy em nhớ anh', 'Nội dung Tháng mấy em nhớ anh', 2, '2016-10-19 00:00:00', 'https://avatar-ex-swe.nixcdn.com/song/share/2021/04/01/2/9/0/f/1617248290828.jpg'),
	(89, 'Lời bài hát Tháng tư là lời nói dối của em', 'Tháng tư là lời nói dối của em', 2, 'Tóm tắt Tháng tư là lời nói dối của em', 'Nội dung Tháng tư là lời nói dối của em', 2, '2017-02-24 00:00:00', 'https://i.ytimg.com/vi/UCXao7aTDQM/maxresdefault.jpg'),
	(90, 'Lời bài hát Túp lều lý tưởng', 'Túp lều lý tưởng', 1, 'Tóm tắt bài Túp lều lý tưởng', 'Nội dung bài hát Túp lều lý tưởng', 5, '2012-10-10 00:00:00', 'https://photo-resize-zmp3.zmdcdn.me/w600_r1x1_jpeg/covers/e/b/eb0786f1793299f9589468408e0ffa9f_1289838145.jpg'),
	(91, 'Lời bài hát Thị Mầu', 'Thị Mầu', 2, 'Tóm tắt bài Thị Mầu', 'Nội dung bài hát Thị Mầu', 4, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/0yHtYPeK2Jg/maxresdefault.jpg'),
	(92, 'Lời bài hát Lửng lơ', 'Lửng lơ', 3, 'Tóm tắt bài Lửng lơ', 'Nội dung bài hát Lửng lơ', 7, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/HehotFZ8BGo/maxresdefault.jpg'),
	(93, 'Lời bài hát À Lôi', 'À Lôi', 4, 'Tóm tắt bài À Lôi', 'Nội dung bài hát À Lôi', 6, '2012-10-10 00:00:00', 'https://photo-cms-tpo.epicdn.me/w1000/Uploaded/2023/ofh-yuztztmf/2023_07_31/a-loi-la-gi-01-5778.jpeg'),
	(94, 'Lời bài hát Người miền núi chất', 'Người miền núi chất', 4, 'Tóm tắt bài Người miền núi chất', 'Nội dung bài hát Người miền núi chất', 6, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/xVtkkHfrqPs/maxresdefault.jpg'),
	(95, 'Lời bài hát Anh ba khía', 'Anh ba khía', 1, 'Tóm tắt bài Anh ba khía', 'Nội dung bài hát Anh ba khía', 5, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/bujtjkN_C64/maxresdefault.jpg'),
	(96, 'Lời bài hát Bật tình yêu lên', 'Bật tình yêu lên', 2, 'Tóm tắt bài Bật tình yêu lên', 'Nội dung bài hát Bật tình yêu lên', 4, '2012-10-10 00:00:00', 'https://i.ytimg.com/vi/VHjMJeLsI0o/maxresdefault.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
