-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-12-19 15:45:32
-- 伺服器版本: 10.1.13-MariaDB
-- PHP 版本： 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `finaltest`
--

-- --------------------------------------------------------

--
-- 資料表結構 `bid`
--

CREATE TABLE `bid` (
  `oid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `bid`
--

INSERT INTO `bid` (`oid`, `uid`, `price`, `time`) VALUES
(68, 2, 510, '2016-12-15 01:27:10'),
(69, 2, 80, '2016-12-15 01:27:30'),
(69, 3, 120, '2016-12-15 01:29:32'),
(71, 6, 500, '2016-12-19 22:42:27'),
(73, 5, 2000, '2016-12-19 14:27:33'),
(74, 1, 200, '2016-12-15 01:30:53'),
(74, 3, 150, '2016-12-15 01:29:21'),
(76, 3, 180, '2016-12-15 01:29:55'),
(77, 1, 300, '2016-12-15 01:31:12');

-- --------------------------------------------------------

--
-- 資料表結構 `card`
--

CREATE TABLE `card` (
  `cid` int(10) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `card`
--

INSERT INTO `card` (`cid`, `name`, `info`) VALUES
(1, '白澤', '　　昆侖山上著名的神獸，渾身雪白，能說人話，通萬物之情，很少出沒，除非當時有聖人治理天下，才奉書而至。<br>　　是可使人逢凶化吉的吉祥之獸。黃帝巡遊至東海，遇之，此獸能言，達於萬物之情。問天下鬼神之事，自古精氣為物、遊魂為變者凡萬一五百二十種，白澤言之，帝令以圖寫之，以示天下。'),
(2, '刑天', '　　「精衛銜微木，將以填滄海。刑天舞幹戚，猛志故常在。同物既無慮，化去不複悔。徒設在昔心，良晨讵可待！」<br>　　刑天原本是居住在常羊山中的一個巨人。雖然生來體型巨大，面相凶煞，但他卻有著豪爽達觀的意志，常在山中作曲自樂，以歌抒懷。'),
(3, '犼', '　　東海有獸名犼，能食龍腦，騰空上下，鷙猛異常。每與龍斗，口中噴火數丈，龍輒不勝。康熙二十五年夏間，平陽縣有犼從海中逐龍至空中，斗三日夜，人見三蛟二龍，合斗一犼，殺一龍二蛟，犼亦隨斃，俱墮山谷。其中一物，長一二丈，形類馬，有鱗鬣。死後，鱗鬣中猶焰起火光丈余，蓋即犼也。'),
(4, '兕', '　　「兕在舜葬东，湘水南。其状如牛，苍黑，一角。」<br>　　兕和犀相似，像野牛，全身青黑，頭上長有一角，角長三尺余，形如馬鞭柄，兕重千斤，皮很厚，可制甲，壽二百年。'),
(5, '混沌', '　　混沌是一種像狗，卻長著長毛動物，四條腿，像熊卻沒有爪子，有眼睛卻看不見，能走卻無法移動，有兩只耳朵卻無法聽見，能通人性，有腹部卻沒有五髒六腑，有腸子卻是直的不彎曲，吃下的食物徑直通過。<br>　　如果遇到高尚的人，渾沌便會大肆施暴；如果遇到惡人，渾沌便會聽從他的指揮。'),
(6, '贏魚', '　　「嬴魚，魚身而鳥翼，音如鴛鴦，見則其邑大水。」<br>　　嬴魚生長在邽山的洋水裡。魚有雙翼，叫聲猶如鴛鴦。平時輕易不出現，一旦在哪裡出現，哪裡就要發大水。'),
(7, '蠱雕', '　　「又東五百裡，曰鹿吳之山，上無草木，多金石。澤更之水出焉，而南流注於滂水，水有獸焉，名曰蠱雕，其狀如雕而有角，其音如嬰兒之，是食人。」<br>　　蠱雕又稱纂雕，是一種似鳥非鳥的食人怪獸，樣子像雕，頭上長角，叫聲像嬰兒的哭啼聲。'),
(8, '陵魚', '　　海洋裡有一種魚，除了身軀是魚外，面孔、四肢都與人相似，南海鮫人乃陵魚近親。<br>　　傳說鮫人在海底紡織，織成後從海底浮出，寓居陸上人家，出售絹帛。臨返向房主索盤而泣，淚珠落盤，化為珍珠。'),
(9, '卡片禮包(*3)', '隨機三張卡片');

-- --------------------------------------------------------

--
-- 資料表結構 `inventory`
--

CREATE TABLE `inventory` (
  `uid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `num` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `inventory`
--

INSERT INTO `inventory` (`uid`, `cid`, `num`) VALUES
(1, 1, 1),
(1, 2, 7),
(1, 3, 0),
(1, 4, 1),
(1, 5, 7),
(1, 6, 7),
(1, 7, 7),
(1, 8, 3),
(2, 1, 4),
(2, 2, 5),
(2, 3, 2),
(2, 4, 1),
(2, 5, 4),
(2, 6, 0),
(2, 7, 0),
(2, 8, 2),
(3, 1, 0),
(3, 2, 6),
(3, 3, 0),
(3, 4, 4),
(3, 5, 2),
(3, 6, 2),
(3, 7, 6),
(3, 8, 1),
(5, 1, 0),
(5, 2, 0),
(5, 3, 0),
(5, 4, 0),
(5, 5, 0),
(5, 6, 0),
(5, 7, 0),
(5, 8, 0),
(6, 1, 0),
(6, 2, 0),
(6, 3, 0),
(6, 4, 0),
(6, 5, 0),
(6, 6, 0),
(6, 7, 0),
(6, 8, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `oid` int(10) NOT NULL,
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `lowprice` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `status` enum('ing','end') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ing',
  `now_price` int(20) DEFAULT '0',
  `now_uid` int(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `orders`
--

INSERT INTO `orders` (`oid`, `uid`, `cid`, `num`, `lowprice`, `time`, `status`, `now_price`, `now_uid`) VALUES
(68, 1, 2, 3, 500, '2016-12-17 02:00:00', 'end', 510, 2),
(69, 1, 6, 3, 60, '2016-12-16 00:58:00', 'end', 120, 3),
(70, 1, 8, 3, 550, '2016-12-18 10:00:00', 'end', 0, 0),
(71, 1, 5, 3, 500, '2016-12-23 07:03:00', 'ing', 500, 6),
(72, 2, 2, 5, 300, '2016-12-17 01:00:00', 'end', 0, 0),
(73, 2, 1, 3, 400, '2016-12-20 03:00:00', 'ing', 600, 5),
(74, 0, 9, 1, 99, '2016-12-15 01:39:46', 'end', 200, 1),
(75, 0, 9, 1, 168, '2016-12-15 01:40:53', 'end', 0, 0),
(76, 0, 9, 1, 142, '2016-12-15 01:41:57', 'end', 180, 3),
(77, 3, 7, 7, 200, '2016-12-16 01:00:00', 'end', 300, 1),
(78, 3, 7, 2, 2000, '2016-12-24 01:00:00', 'ing', 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `uid` int(10) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `money` int(20) NOT NULL,
  `role` enum('player','npc') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`uid`, `name`, `pwd`, `money`, `role`) VALUES
(0, '-', '2', 0, 'npc'),
(1, 'Lulu', '1', 1800, 'player'),
(2, 'Amy', '1', 2000, 'player'),
(3, 'Jack', '1', 1820, 'player'),
(5, 'CBDCBD', '1', 1000, 'player'),
(6, 'QQQ', '1', 1000, 'player');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`oid`,`uid`);

--
-- 資料表索引 `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`cid`);

--
-- 資料表索引 `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`uid`,`cid`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `card`
--
ALTER TABLE `card`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用資料表 AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
