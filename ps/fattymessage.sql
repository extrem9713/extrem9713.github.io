-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2019 年 10 月 07 日 22:48
-- 伺服器版本: 5.5.39
-- PHP 版本： 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `fattymessage`
--

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`id` int(10) NOT NULL,
  `messagemail` varchar(40) NOT NULL,
  `message` varchar(400) CHARACTER SET armscii8 NOT NULL,
  `messagedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- 資料表的匯出資料 `message`
--

INSERT INTO `message` (`id`, `messagemail`, `message`, `messagedate`) VALUES
(6, 'ex@gmail.com', 'test', '2019-10-07 20:14:22');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `message`
--
ALTER TABLE `message`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
