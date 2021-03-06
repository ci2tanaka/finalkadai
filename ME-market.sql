-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: 2017 年 3 月 12 日 14:08
-- サーバのバージョン： 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ME-market`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `ec_item`
--

CREATE TABLE `ec_item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `department` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `ec_item`
--

INSERT INTO `ec_item` (`id`, `name`, `price`, `status`, `stock`, `department`, `create_date`, `update_date`) VALUES
(23, '内視鏡装置', 10000000, NULL, 10, 0, '2017-03-12 18:35:14', NULL),
(24, '顕微鏡装置', 5000000, NULL, 10, 0, '2017-03-12 18:35:46', NULL),
(25, '人工心肺装置', 3000000, NULL, 10, 0, '2017-03-12 18:36:19', NULL),
(26, '電気メス', 1000000, NULL, 5, 0, '2017-03-12 18:36:51', NULL),
(27, '麻酔器', 2000000, NULL, 2, 0, '2017-03-12 18:47:23', NULL),
(28, 'オートクレーブ', 1000000, NULL, 5, 0, '2017-03-12 18:48:49', NULL),
(29, '手術用手袋', 3000, NULL, 100, 0, '2017-03-12 18:49:59', NULL),
(30, '生体情報モニター', 2000000, NULL, 10, 0, '2017-03-12 18:53:17', NULL),
(31, '生体情報モニター', 1000000, NULL, 3, 0, '2017-03-12 18:58:28', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `ec_order`
--

CREATE TABLE `ec_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `ec_order`
--

INSERT INTO `ec_order` (`id`, `user_id`, `price`, `created_date`) VALUES
(0, 1, 20000000, '2017-03-11 11:20:27'),
(0, 1, 0, '2017-03-11 11:21:19'),
(0, 1, 10000000, '2017-03-11 11:21:40'),
(0, 1, 0, '2017-03-11 11:23:15'),
(0, 1, 15000000, '2017-03-11 11:25:12'),
(0, 2, 10000000, '2017-03-11 11:54:07'),
(0, 2, 0, '2017-03-11 11:54:19'),
(0, 2, 5000000, '2017-03-11 12:01:23'),
(0, 2, 10000000, '2017-03-11 12:03:48'),
(0, 2, 10000000, '2017-03-11 12:10:43'),
(0, 2, 0, '2017-03-11 12:11:33'),
(0, 2, 0, '2017-03-11 12:12:03'),
(0, 2, 10000000, '2017-03-11 12:12:20'),
(0, 2, 5000000, '2017-03-11 12:17:25'),
(0, 2, 10000000, '2017-03-11 12:41:39'),
(0, 2, 15000000, '2017-03-11 13:16:08'),
(0, 6, 5000000, '2017-03-11 13:17:37'),
(0, 6, 2000000, '2017-03-11 13:39:33'),
(0, 6, 26500000, '2017-03-11 14:20:55'),
(0, 6, 1500000, '2017-03-11 22:52:23'),
(0, 6, 0, '2017-03-11 22:54:16'),
(0, 6, 0, '2017-03-11 22:54:28'),
(0, 6, 0, '2017-03-11 22:54:38'),
(0, 6, 10000000, '2017-03-11 22:54:51'),
(0, 6, 0, '2017-03-11 22:56:55'),
(0, 6, 10000000, '2017-03-12 10:30:54'),
(0, 1, 10000000, '2017-03-12 14:40:38'),
(0, 1, 1500000, '2017-03-12 14:40:50'),
(0, 1, 10000000, '2017-03-12 14:45:06'),
(0, 6, 1500000, '2017-03-12 16:30:22'),
(0, 6, 500000, '2017-03-12 17:43:25');

-- --------------------------------------------------------

--
-- テーブルの構造 `ec_order_detail`
--

CREATE TABLE `ec_order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `ec_order_detail`
--

INSERT INTO `ec_order_detail` (`id`, `order_id`, `item_id`, `amount`, `price`, `created_date`) VALUES
(0, 0, 1, 2, 10000000, '2017-03-11 11:20:27'),
(0, 0, 1, 1, 10000000, '2017-03-11 11:21:40'),
(0, 0, 2, 1, 5000000, '2017-03-11 11:25:12'),
(0, 0, 1, 1, 10000000, '2017-03-11 11:25:12'),
(0, 0, 1, 1, 10000000, '2017-03-11 11:54:07'),
(0, 0, 2, 1, 5000000, '2017-03-11 12:01:23'),
(0, 0, 1, 1, 10000000, '2017-03-11 12:03:48'),
(0, 0, 1, 1, 10000000, '2017-03-11 12:10:43'),
(0, 0, 1, 1, 10000000, '2017-03-11 12:12:20'),
(0, 0, 2, 1, 5000000, '2017-03-11 12:17:25'),
(0, 0, 1, 1, 10000000, '2017-03-11 12:41:39'),
(0, 0, 2, 1, 5000000, '2017-03-11 13:16:08'),
(0, 0, 1, 1, 10000000, '2017-03-11 13:16:08'),
(0, 0, 2, 1, 5000000, '2017-03-11 13:17:37'),
(0, 0, 4, 1, 500000, '2017-03-11 13:39:33'),
(0, 0, 3, 1, 1500000, '2017-03-11 13:39:33'),
(0, 0, 1, 2, 10000000, '2017-03-11 14:20:55'),
(0, 0, 2, 1, 5000000, '2017-03-11 14:20:55'),
(0, 0, 3, 1, 1500000, '2017-03-11 14:20:55'),
(0, 0, 3, 1, 1500000, '2017-03-11 22:52:23'),
(0, 0, 1, 1, 10000000, '2017-03-11 22:54:51'),
(0, 0, 1, 1, 10000000, '2017-03-12 10:30:54'),
(0, 0, 1, 1, 10000000, '2017-03-12 14:40:38'),
(0, 0, 3, 1, 1500000, '2017-03-12 14:40:50'),
(0, 0, 1, 1, 10000000, '2017-03-12 14:45:06'),
(0, 0, 3, 1, 1500000, '2017-03-12 16:30:22'),
(0, 0, 4, 1, 500000, '2017-03-12 17:43:25');

-- --------------------------------------------------------

--
-- テーブルの構造 `ec_user`
--

CREATE TABLE `ec_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `ec_user`
--

INSERT INTO `ec_user` (`id`, `name`, `email`, `password`, `created_date`, `updated_date`) VALUES
(1, 'たな', 'tanaka.ko32@gmail.com', '71a9d78324c9446fa047a8213355715a', '2017-03-11 11:13:46', '0000-00-00 00:00:00'),
(2, 'ana', 'ana', '3dbe00a167653a1aaee01d93e77e730e', '2017-03-11 11:52:56', '0000-00-00 00:00:00'),
(3, 'ana', 'ana', '3dbe00a167653a1aaee01d93e77e730e', '2017-03-11 12:16:18', '0000-00-00 00:00:00'),
(4, 'ana', 'ana', '3dbe00a167653a1aaee01d93e77e730e', '2017-03-11 12:16:52', '0000-00-00 00:00:00'),
(5, 'ana', 'ana', '3dbe00a167653a1aaee01d93e77e730e', '2017-03-11 12:54:39', '0000-00-00 00:00:00'),
(6, 'tana', 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', '2017-03-11 13:17:23', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ec_item`
--
ALTER TABLE `ec_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_user`
--
ALTER TABLE `ec_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ec_item`
--
ALTER TABLE `ec_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `ec_user`
--
ALTER TABLE `ec_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
