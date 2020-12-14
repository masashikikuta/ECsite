-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-12-14 09:24:52
-- サーバのバージョン： 10.4.16-MariaDB
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `node_test`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `colors`
--

CREATE TABLE `colors` (
  `user_id` int(11) DEFAULT NULL,
  `color` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `colors`
--

INSERT INTO `colors` (`user_id`, `color`) VALUES
(1, 'orange');

-- --------------------------------------------------------

--
-- テーブルの構造 `fruit`
--

CREATE TABLE `fruit` (
  `name` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `fruit`
--

INSERT INTO `fruit` (`name`, `price`) VALUES
('リンゴ', 100),
('バナナ', 200),
('オレンジ', 300),
('apple', 100),
('banana', 200),
('orange', 300);

-- --------------------------------------------------------

--
-- テーブルの構造 `product_info`
--

CREATE TABLE `product_info` (
  `Product_ID` int(11) NOT NULL,
  `Product_Name` text DEFAULT NULL,
  `Product_Category` text DEFAULT NULL,
  `Product_About` text DEFAULT NULL,
  `Product_Price` int(11) DEFAULT NULL,
  `Product_Image` text DEFAULT NULL,
  `Product_Stock` int(11) DEFAULT NULL,
  `Product_Access` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `product_info`
--

INSERT INTO `product_info` (`Product_ID`, `Product_Name`, `Product_Category`, `Product_About`, `Product_Price`, `Product_Image`, `Product_Stock`, `Product_Access`) VALUES
(1, 'りんご', '食品', 'おいしいりんごです', 120, 'img/1.png', 161, 0),
(2, 'ボールペン', '文房具', '使いやすいボールペンです', 150, 'img/2.png', 98, 0),
(3, 'みかん', '食品', 'フレッシュなみかんです', 120, 'img/3.png', 293, 0),
(4, 'カメラ', '家電', '高性能なカメラです', 10000, 'img/4.png', 98, 0),
(5, 'ノート', '文房具', '書きやすいノートです', 100, 'img/5.png', 196, 0),
(6, 'ゲーム機', 'ゲーム', '大人気のゲームです', 25000, 'img/6.png', 10, 0),
(7, 'ゲームソフト', 'ゲーム', '大人気のゲームです', 5000, 'img/7.png', 48, 0),
(8, '缶詰', '食品', '非常用の缶詰です', 300, 'img/8.png', 92, 7),
(9, 'バナナ', '食品', 'おいしいバナナです', 100, 'img/9.png', 93, 1),
(10, 'パン', '食品', 'やわらかいパンです', 100, 'img/10.png', 95, 0),
(13, '肉まん', '食品', 'おいしい肉まんです。', 150, NULL, 100, 0),
(15, '定規', '文房具', '使いやすい定規です', 200, NULL, 100, 0),
(16, '鉛筆', '文房具', '書きやすい鉛筆です', 100, NULL, 100, 0),
(17, '鉛筆削り', '文房具', '鉛筆削りです', 100, NULL, 100, 16),
(18, 'メモ帳', '文房具', '書きやすいメモ帳です', 100, NULL, 100, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`id`, `name`) VALUES
(1, 'sato'),
(2, 'musashi'),
(3, 'takeuchi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi'),
(4, 'kobayashi');

-- --------------------------------------------------------

--
-- テーブルの構造 `userdeta`
--

CREATE TABLE `userdeta` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `userdeta`
--

INSERT INTO `userdeta` (`id`, `email`, `password`, `created`) VALUES
(1, 'masashi.kikuta@gmail.com', '$2y$10$8we5L92hHWB0umL/j2vGXOFKJUfnUkNOjoqOnk1cydf86/kB9BHQ6', '2020-12-01 08:10:57'),
(2, 'kikuta@mba-international.jp', '$2y$10$/tUrbpy69Hj3OFBlz7W1SeBasVEDuA1ifwL0dxF8OupK/3909h0QW', '2020-12-01 08:32:30'),
(3, 'masashi.kikuta@gmail.com', '$2y$10$i9XLX8biIrApzRsaDWinLe6vi4t0bTRtG//RHj25rVlb/Q0rouHFu', '2020-12-03 02:46:13');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_info`
--

CREATE TABLE `user_info` (
  `User_ID` int(11) NOT NULL,
  `User_Name` text DEFAULT NULL,
  `Login_ID` varchar(255) DEFAULT NULL,
  `Login_Pass` varchar(255) DEFAULT NULL,
  `Login_Log` varchar(255) DEFAULT NULL,
  `Email_Address` varchar(255) DEFAULT NULL,
  `Profile_Image` text DEFAULT NULL,
  `User_Right` text DEFAULT 'visitor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `user_info`
--

INSERT INTO `user_info` (`User_ID`, `User_Name`, `Login_ID`, `Login_Pass`, `Login_Log`, `Email_Address`, `Profile_Image`, `User_Right`) VALUES
(5, 'test02', NULL, '$2y$10$F25O2p/jeJYSHNv9Y/1zIu0gz1Y8c6eECv76KARUu5zGEQICDv1Xy', NULL, 'test02@gmail.com', NULL, 'admin'),
(7, 'masa', NULL, '$2y$10$OsS3DZPH/bXPMUa5DZfLqO9n3ajqAQRQQAH5tfhhb1vb9v9SN/K9q', NULL, 'masashi.kikuta@gmail.com', NULL, 'visitor');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`Product_ID`);

--
-- テーブルのインデックス `userdeta`
--
ALTER TABLE `userdeta`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `Login_ID` (`Login_ID`),
  ADD UNIQUE KEY `Email_Address` (`Email_Address`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `product_info`
--
ALTER TABLE `product_info`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- テーブルの AUTO_INCREMENT `userdeta`
--
ALTER TABLE `userdeta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `user_info`
--
ALTER TABLE `user_info`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
