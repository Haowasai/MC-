-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2019 年 08 月 16 日 19:47
-- 服务器版本: 5.6.45-log
-- PHP 版本: 5.3.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `a12301`
--

-- --------------------------------------------------------

--
-- 表的结构 `black_admin`
--

CREATE TABLE IF NOT EXISTS `black_admin` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `last` datetime NOT NULL,
  `dlip` varchar(15) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `black_admin`
--

INSERT INTO `black_admin` (`uid`, `user`, `pass`, `last`, `dlip`, `active`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2019-08-16 19:33:04', '42.248.6.214', 1);

-- --------------------------------------------------------

--
-- 表的结构 `black_config`
--

CREATE TABLE IF NOT EXISTS `black_config` (
  `k` varchar(255) NOT NULL DEFAULT '',
  `v` text,
  PRIMARY KEY (`k`(10))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `black_config`
--

INSERT INTO `black_config` (`k`, `v`) VALUES
('sitename', 'FTC工作室-MC云黑系统'),
('keywords', '我的世界,Minecraft,MC,我的世界云端黑名单,我的世界云黑,MC云黑,云端黑名单,云黑,云黑机器人,云黑名单,云端拉黑查询系统'),
('description', '一旦被收集资料，骗子无处可逃！欢迎小伙伴来举报，举报需提供有效证据，共同维护Minecraft圈子的小和平，让我们一起共建云端黑名单');

-- --------------------------------------------------------

--
-- 表的结构 `black_list`
--

CREATE TABLE IF NOT EXISTS `black_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qq` text,
  `level` int(1) NOT NULL,
  `date` datetime NOT NULL,
  `note` text COMMENT '拉黑原因',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `black_list`
--

INSERT INTO `black_list` (`id`, `qq`, `level`, `date`, `note`) VALUES
(1, '321230034', 0, '2019-08-10 22:39:41', '测试');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
PHP Fatal error:  Allowed memory size of 134217728 bytes exhausted (tried to allocate 11952815 bytes) in Unknown on line 0

Fatal error: Allowed memory size of 134217728 bytes exhausted (tried to allocate 11952815 bytes) in Unknown on line 0
