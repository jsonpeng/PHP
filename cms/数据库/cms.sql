-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 06 月 07 日 09:34
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `cms`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `logintime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `logintime`) VALUES
(1, 'sky', '4297f44b13955235245b2497399d7a93', 'sky@dodi.cn', '0000-00-00 00:00:00'),
(2, 'miny', '4297f44b13955235245b2497399d7a93', 'miny@dodi.cn', '0000-00-00 00:00:00'),
(4, 'alex', '4297f44b13955235245b2497399d7a93', 'alex@dodi.cn', '2013-06-06 03:03:48'),
(5, 'echo', '321', 'echo@dodi.cn', '2013-06-06 09:48:29');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `mtime` int(10) unsigned NOT NULL DEFAULT '0',
  `image` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `mtime`, `image`) VALUES
(1, '多迪教育', '让梦想腾飞', 0, ''),
(2, '广州天河校区', 'dodi', 0, ''),
(3, 't1', 't1', 0, ''),
(4, 't2', 't2', 0, ''),
(5, 't3', 't3', 0, ''),
(6, 't4', 't4', 0, ''),
(7, 't5', 't5', 0, ''),
(8, 't6', 't6', 0, ''),
(9, 't7', 't7', 0, ''),
(10, 't8', 't8', 0, ''),
(11, 't17_2', 't17', 0, ''),
(12, 't10', 't10', 0, ''),
(13, 't11', 't11', 0, ''),
(15, 't13', 't13', 0, ''),
(17, 't15', 't15', 0, ''),
(18, 't16', 't16', 0, ''),
(21, 't20', 't20~~~~~~', 2013, ''),
(22, 'j6', 'j6', 1370511999, '');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(30) NOT NULL,
  `password` char(32) NOT NULL,
  `email` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'sky', '4297f44b13955235245b2497399d7a93', 'sky@dodi.cn'),
(2, 'miny', '4297f44b13955235245b2497399d7a93', 'miny@dodi.cn');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
