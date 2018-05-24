-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 05. Apr 2018 um 15:42
-- Server Version: 10.0.32-MariaDB-0+deb8u1
-- PHP-Version: 5.6.33-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `praktikant`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE IF NOT EXISTS `benutzer` (
`pkid` int(11) NOT NULL,
  `vorname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nachname` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `alterjahre` int(2) NOT NULL,
  `newsletter` tinyint(4) NOT NULL,
  `usertype` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT 'user',
  `password` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `benutzer`
--

INSERT INTO `benutzer` (`pkid`, `vorname`, `nachname`, `email`, `username`, `alterjahre`, `newsletter`, `usertype`, `password`) VALUES
(18, 'asdasd', '', 'asd@dfs.de', 'asdasd', 12, 0, 'user', '1a1dc91c907325c69271ddf0c944bc72'),
(19, 'tzer', '', 'ert@sdfsdf.de', 'tzer', 12, 0, 'user', '1a1dc91c907325c69271ddf0c944bc72'),
(20, 'ertert', '', 'ert@sdfsdf.de', 'ertert', 23, 0, 'user', '1a1dc91c907325c69271ddf0c944bc72'),
(21, 'asd', '', 'asd@dfs.de', 'asd', 33, 0, 'user', '1a1dc91c907325c69271ddf0c944bc72'),
(22, 'Test', '', 'sbohnen@live.com', 'Test', 12, 0, 'user', '1a1dc91c907325c69271ddf0c944bc72'),
(23, 'werwer', '', 'werwer@sdsdf.de', 'werwer', 23, 0, 'user', '1a1dc91c907325c69271ddf0c944bc72'),
(24, 'Volker', '', 'volker@home.de', 'Volker', 13, 0, 'user', 'd41d8cd98f00b204e9800998ecf8427e'),
(27, 'Diter', '', 'volkeer@home.de', 'Diter', 12, 0, 'user', 'd41d8cd98f00b204e9800998ecf8427e'),
(28, 'werwer2', '', 'sbohenen@live.com', 'werwer2', 12, 0, 'user', 'd41d8cd98f00b204e9800998ecf8427e'),
(29, 'Oliverw', '', 'asd@asd.de', 'Oliverw', 11, 0, 'user', 'd41d8cd98f00b204e9800998ecf8427e'),
(30, 'sdfsdf', '', 'werwer@sefsdf.de', 'sdfsdf', 11, 0, 'user', '22c276a05aa7c90566ae2175bcc2a9b0'),
(31, 'TestPerson', '', 'mail@home.de', 'TestPerson', 121212, 0, 'user', 'd9729feb74992cc3482b350163a1a010'),
(32, 'Test04041108e', '', 'testemaeeil@home.de', 'Test04041108e', 12, 0, 'user', '3841c2553aaa59762ff4c052fa11ff80'),
(33, 'Vorname', '', 'email@email.de', 'Vorname', 24, 0, 'user', '8fe4c11451281c094a6578e6ddbf5eed'),
(46, 'fdhgfj', 'ghj', 'ghj@email.de', 'fdhgfj', 0, 1, 'user', '8fe4c11451281c094a6578e6ddbf5eed'),
(47, 'sdf', 'sdfsdf', 'sdf@sfdg.de', 'sdf', 0, 1, 'user', '11ddbaf3386aea1f2974eee984542152'),
(48, 'dfgdfg', 'dfgdfg', 'dfg@sdf.de', 'dfgdfg', 0, 1, 'user', '1aabac6d068eef6a7bad3fdf50a05cc8'),
(49, 'wwwwwwwwwwwww', 'xxxxxxxxx', 'xxx@xxx.de', 'wwwwwwwwwwwww', 0, 1, 'user', '1aabac6d068eef6a7bad3fdf50a05cc8'),
(50, 'Sebastian', 'Bohnen', 'sbohnen2@live.com', 'Sebastian', 38, 0, 'admin', '1aabac6d068eef6a7bad3fdf50a05cc8'),
(51, 'Chrome', 'Browser', 'mail@home2.de', 'Chrome', 125, 1, 'user', '6512bd43d9caa6e02c990b0a82652dca'),
(52, 'Nochmal', 'TRest', 'wwwwwwww@sd.de', 'Nochmal', 110, 1, 'user', 'd785c99d298a4e9e6e13fe99e602ef42'),
(53, 'fffffff', 'ffffffffff', 'fffffffffff@fff.de', 'fffffff', 86, 1, 'user', 'd58e3582afa99040e27b92b13c8f2280'),
(54, 'dsafsdf', 'sdsdsd', 'abc@abc.de', 'dsafsdf', 125, 1, 'user', '8fe4c11451281c094a6578e6ddbf5eed');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
 ADD UNIQUE KEY `pkid_2` (`pkid`), ADD KEY `pkid` (`pkid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `benutzer`
--
ALTER TABLE `benutzer`
MODIFY `pkid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
