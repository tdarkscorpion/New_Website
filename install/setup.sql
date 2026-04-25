-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2026 at 08:28 PM
-- Server version: 5.1.73-community
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_account`
--
CREATE DATABASE IF NOT EXISTS `db_account` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_account`;

-- --------------------------------------------------------

--
-- Table structure for table `t_account`
--

CREATE TABLE IF NOT EXISTS `t_account` (
  `accountid` bigint(21) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `pwd` varchar(32) DEFAULT NULL,
  `pw2` varchar(32) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `full_name` varchar(32) NOT NULL,
  `birth_date` text NOT NULL,
  `mobile_number` text NOT NULL,
  `nationality` text NOT NULL,
  `sq` text NOT NULL,
  `sa` text NOT NULL,
  `gd` int(11) DEFAULT '0',
  `vo` bigint(21) DEFAULT '0',
  `vn` bigint(21) DEFAULT '0',
  `lastvoted` int(11) DEFAULT NULL,
  `voted` int(1) DEFAULT '0',
  `gp` int(11) DEFAULT '0',
  `dp` int(11) DEFAULT '0',
  `lr` varchar(250) DEFAULT NULL,
  `ld` tinyint(4) DEFAULT '0',
  `ls` int(11) DEFAULT '0',
  `le` int(11) DEFAULT '0',
  `ll` int(11) DEFAULT '0',
  `sc` varchar(32) DEFAULT NULL,
  `pp` varchar(250) DEFAULT NULL,
  `city` varchar(128) DEFAULT NULL,
  `bd` int(11) DEFAULT '0',
  `pv` int(11) DEFAULT '0',
  `pt` int(11) DEFAULT '0',
  `el` int(11) DEFAULT '0',
  `ac` varchar(128) DEFAULT NULL,
  `ai` varchar(128) DEFAULT NULL,
  `ct` int(11) DEFAULT '0',
  `cn` int(11) DEFAULT '0',
  `ot` int(11) DEFAULT '0',
  `vt` int(11) DEFAULT '0',
  `vl` int(11) DEFAULT '0',
  `p1` int(11) DEFAULT '0',
  `p2` int(11) DEFAULT '0',
  `lg` int(11) DEFAULT '0',
  `lt` int(11) DEFAULT '0',
  `ck` int(11) DEFAULT '0',
  `st` int(11) DEFAULT '0',
  `cc` int(11) DEFAULT '0',
  `ut` int(11) DEFAULT '0',
  `cr` int(11) DEFAULT '0',
  `dc` int(11) DEFAULT '0',
  `di` int(11) DEFAULT '0',
  `ic` int(11) DEFAULT '0',
  `do` int(11) DEFAULT '0',
  `oc` int(11) DEFAULT '0',
  `gn` int(11) DEFAULT '0',
  `bc` int(11) DEFAULT '0',
  `cy` int(11) DEFAULT '0',
  `cs` int(11) DEFAULT '0',
  `cm` int(11) DEFAULT '0',
  `mc` int(11) DEFAULT '0',
  `uc` int(11) DEFAULT '0',
  `svc` int(11) DEFAULT '0',
  `svcc` int(11) DEFAULT '0',
  `svd` int(11) DEFAULT '0',
  `svdc` int(11) DEFAULT '0',
  `svb` int(11) DEFAULT '0',
  `svbc` int(11) DEFAULT '0',
  `pwt` int(11) DEFAULT '0',
  `pwp1` int(11) DEFAULT '0',
  `pwp2` int(11) DEFAULT '0',
  `pwp3` int(11) DEFAULT '0',
  `Time` text NOT NULL,
  `attempt` text NOT NULL,
  `f_name` text NOT NULL,
  `Ref` text NOT NULL,
  `mail` text NOT NULL,
  `s_code` varchar(222) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_card_saving`
--

CREATE TABLE IF NOT EXISTS `t_card_saving` (
  `idx` int(11) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `cardid` varchar(45) DEFAULT NULL,
  `cardpwd` varchar(32) DEFAULT NULL,
  `gold` int(11) DEFAULT '0',
  `stime` int(11) DEFAULT '0',
  `type` int(11) DEFAULT '0',
  `got` int(11) DEFAULT '0',
  `num` int(11) DEFAULT '0',
  `opid` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_cct`
--

CREATE TABLE IF NOT EXISTS `t_cct` (
  `tm` int(11) DEFAULT '0',
  `cnt` int(11) DEFAULT '0',
  `svcnt` int(11) DEFAULT '0',
  `s01` int(11) DEFAULT '0',
  `s02` int(11) DEFAULT '0',
  `s03` int(11) DEFAULT '0',
  `s04` int(11) DEFAULT '0',
  `s05` int(11) DEFAULT '0',
  `s06` int(11) DEFAULT '0',
  `s07` int(11) DEFAULT '0',
  `s08` int(11) DEFAULT '0',
  `s09` int(11) DEFAULT '0',
  `s10` int(11) DEFAULT '0',
  `s11` int(11) DEFAULT '0',
  `s12` int(11) DEFAULT '0',
  `s13` int(11) DEFAULT '0',
  `s14` int(11) DEFAULT '0',
  `s15` int(11) DEFAULT '0',
  `s16` int(11) DEFAULT '0',
  `s17` int(11) DEFAULT '0',
  `s18` int(11) DEFAULT '0',
  `s19` int(11) DEFAULT '0',
  `s20` int(11) DEFAULT '0',
  `s21` int(11) DEFAULT '0',
  `s22` int(11) DEFAULT '0',
  `s23` int(11) DEFAULT '0',
  `s24` int(11) DEFAULT '0',
  `s25` int(11) DEFAULT '0',
  `s26` int(11) DEFAULT '0',
  `s27` int(11) DEFAULT '0',
  `s28` int(11) DEFAULT '0',
  `s29` int(11) DEFAULT '0',
  `s30` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_cct24h`
--

CREATE TABLE IF NOT EXISTS `t_cct24h` (
  `idx` int(11) NOT NULL DEFAULT '0',
  `tm` int(11) DEFAULT '0',
  `cnt` int(11) DEFAULT '0',
  `svcnt` int(11) DEFAULT '0',
  `s01` int(11) DEFAULT '0',
  `s02` int(11) DEFAULT '0',
  `s03` int(11) DEFAULT '0',
  `s04` int(11) DEFAULT '0',
  `s05` int(11) DEFAULT '0',
  `s06` int(11) DEFAULT '0',
  `s07` int(11) DEFAULT '0',
  `s08` int(11) DEFAULT '0',
  `s09` int(11) DEFAULT '0',
  `s10` int(11) DEFAULT '0',
  `s11` int(11) DEFAULT '0',
  `s12` int(11) DEFAULT '0',
  `s13` int(11) DEFAULT '0',
  `s14` int(11) DEFAULT '0',
  `s15` int(11) DEFAULT '0',
  `s16` int(11) DEFAULT '0',
  `s17` int(11) DEFAULT '0',
  `s18` int(11) DEFAULT '0',
  `s19` int(11) DEFAULT '0',
  `s20` int(11) DEFAULT '0',
  `s21` int(11) DEFAULT '0',
  `s22` int(11) DEFAULT '0',
  `s23` int(11) DEFAULT '0',
  `s24` int(11) DEFAULT '0',
  `s25` int(11) DEFAULT '0',
  `s26` int(11) DEFAULT '0',
  `s27` int(11) DEFAULT '0',
  `s28` int(11) DEFAULT '0',
  `s29` int(11) DEFAULT '0',
  `s30` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_gold_saving`
--

CREATE TABLE IF NOT EXISTS `t_gold_saving` (
  `idx` int(11) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `gold` int(11) DEFAULT '0',
  `type` int(11) DEFAULT '0',
  `opid` int(11) DEFAULT '0',
  `nidx` int(11) DEFAULT '0',
  `ctime` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_gold_used`
--

CREATE TABLE IF NOT EXISTS `t_gold_used` (
  `idx` int(11) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `type` int(11) DEFAULT '0',
  `gold` int(11) DEFAULT '0',
  `ng` int(11) DEFAULT '0',
  `utime` int(11) DEFAULT '0',
  `memo` varchar(64) DEFAULT NULL,
  `optype` int(11) DEFAULT '0',
  `opparam1` int(11) DEFAULT '0',
  `opparam2` int(11) DEFAULT '0',
  `buycnt` int(11) DEFAULT '0',
  `serveridx` int(11) DEFAULT '0',
  `actorid` bigint(21) DEFAULT '0',
  `actorname` varchar(128) DEFAULT NULL,
  `actorlev` int(11) DEFAULT '0',
  `ip` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_log_acct`
--

CREATE TABLE IF NOT EXISTS `t_log_acct` (
  `idx` int(11) NOT NULL,
  `tm` int(11) DEFAULT '0',
  `logtm` int(11) DEFAULT '0',
  `i00` int(11) DEFAULT '0',
  `i01` int(11) DEFAULT '0',
  `i02` int(11) DEFAULT '0',
  `i03` int(11) DEFAULT '0',
  `i04` int(11) DEFAULT '0',
  `i05` int(11) DEFAULT '0',
  `i06` int(11) DEFAULT '0',
  `i07` int(11) DEFAULT '0',
  `i08` int(11) DEFAULT '0',
  `i09` int(11) DEFAULT '0',
  `i10` int(11) DEFAULT '0',
  `i11` int(11) DEFAULT '0',
  `i12` int(11) DEFAULT '0',
  `i13` int(11) DEFAULT '0',
  `i14` int(11) DEFAULT '0',
  `i15` int(11) DEFAULT '0',
  `i16` int(11) DEFAULT '0',
  `i17` int(11) DEFAULT '0',
  `i18` int(11) DEFAULT '0',
  `i19` int(11) DEFAULT '0',
  `i20` int(11) DEFAULT '0',
  `i21` int(11) DEFAULT '0',
  `i22` int(11) DEFAULT '0',
  `i23` int(11) DEFAULT '0',
  `i24` int(11) DEFAULT '0',
  `i25` int(11) DEFAULT '0',
  `i26` int(11) DEFAULT '0',
  `i27` int(11) DEFAULT '0',
  `i28` int(11) DEFAULT '0',
  `i29` int(11) DEFAULT '0',
  `i30` int(11) DEFAULT '0',
  `c00` int(11) DEFAULT '0',
  `c01` int(11) DEFAULT '0',
  `c02` int(11) DEFAULT '0',
  `c03` int(11) DEFAULT '0',
  `c04` int(11) DEFAULT '0',
  `c05` int(11) DEFAULT '0',
  `c06` int(11) DEFAULT '0',
  `c07` int(11) DEFAULT '0',
  `c08` int(11) DEFAULT '0',
  `c09` int(11) DEFAULT '0',
  `c10` int(11) DEFAULT '0',
  `c11` int(11) DEFAULT '0',
  `c12` int(11) DEFAULT '0',
  `c13` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_log_act`
--

CREATE TABLE IF NOT EXISTS `t_log_act` (
  `idx` int(11) NOT NULL,
  `tm` int(11) DEFAULT '0',
  `logtm` int(11) DEFAULT '0',
  `level` int(11) DEFAULT '0',
  `totalact` int(11) DEFAULT '0',
  `a15` int(11) DEFAULT '0',
  `a7d` int(11) DEFAULT '0',
  `a1d` int(11) DEFAULT '0',
  `em` int(11) DEFAULT '0',
  `fm` int(11) DEFAULT '0',
  `qc` int(11) DEFAULT '0',
  `bh` int(11) DEFAULT '0',
  `xq` int(11) DEFAULT '0',
  `money` int(11) DEFAULT '0',
  `totallost` int(11) DEFAULT '0',
  `lost1` int(11) DEFAULT '0',
  `oltimemin` int(11) DEFAULT '0',
  `oltimemax` int(11) DEFAULT '0',
  `oltimeavg` int(11) DEFAULT '0',
  `lvup` int(11) DEFAULT '0',
  `lvuptimemin` int(11) DEFAULT '0',
  `lvuptimemax` int(11) DEFAULT '0',
  `lvuptimeavg` int(11) DEFAULT '0',
  `lvuptimeavg2` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_log_gitem`
--

CREATE TABLE IF NOT EXISTS `t_log_gitem` (
  `idx` int(11) NOT NULL,
  `tm` int(11) DEFAULT '0',
  `itemid` int(11) DEFAULT '0',
  `price` int(11) DEFAULT '0',
  `cnt` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_log_log`
--

CREATE TABLE IF NOT EXISTS `t_log_log` (
  `idx` int(11) NOT NULL,
  `tm` int(11) DEFAULT '0',
  `type` int(11) DEFAULT '0',
  `usetime` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_login`
--

CREATE TABLE IF NOT EXISTS `t_login` (
  `loginindex` bigint(21) NOT NULL,
  `accountid` bigint(21) DEFAULT '0',
  `server` bigint(21) DEFAULT '0',
  `logintime` int(11) DEFAULT '0',
  `logouttime` int(11) DEFAULT '0',
  `ip` int(11) DEFAULT '0',
  `point` int(11) DEFAULT '0',
  `flag` int(11) DEFAULT '0',
  `mac` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_new`
--

CREATE TABLE IF NOT EXISTS `t_new` (
  `idx` int(11) NOT NULL,
  `type` int(11) DEFAULT '0',
  `name` varchar(32) DEFAULT NULL,
  `str1` varchar(64) DEFAULT NULL,
  `str2` varchar(32) DEFAULT NULL,
  `str3` varchar(250) DEFAULT NULL,
  `i1` int(11) DEFAULT '0',
  `i2` int(11) DEFAULT '0',
  `i3` int(11) DEFAULT '0',
  `ctime` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_schedule`
--

CREATE TABLE IF NOT EXISTS `t_schedule` (
  `idx` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `schedule` varchar(128) DEFAULT NULL,
  `timestart` int(11) DEFAULT '0',
  `timestop` int(11) DEFAULT '0',
  `duration` int(11) DEFAULT '0',
  `cmdstart` text,
  `cmdend` text,
  `recever` varchar(250) DEFAULT NULL,
  `createtime` int(11) DEFAULT '0',
  `deletetime` int(11) DEFAULT '0',
  `deletetype` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_ui`
--

CREATE TABLE IF NOT EXISTS `t_ui` (
  `idx` int(11) NOT NULL,
  `txt` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_account`
--
ALTER TABLE `t_account`
  ADD PRIMARY KEY (`accountid`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `ll` (`ll`);

--
-- Indexes for table `t_card_saving`
--
ALTER TABLE `t_card_saving`
  ADD PRIMARY KEY (`idx`),
  ADD KEY `name` (`name`),
  ADD KEY `stime` (`stime`);

--
-- Indexes for table `t_cct`
--
ALTER TABLE `t_cct`
  ADD KEY `tm` (`tm`);

--
-- Indexes for table `t_cct24h`
--
ALTER TABLE `t_cct24h`
  ADD PRIMARY KEY (`idx`),
  ADD KEY `tm` (`tm`);

--
-- Indexes for table `t_gold_saving`
--
ALTER TABLE `t_gold_saving`
  ADD PRIMARY KEY (`idx`),
  ADD KEY `name` (`name`),
  ADD KEY `ctime` (`ctime`);

--
-- Indexes for table `t_gold_used`
--
ALTER TABLE `t_gold_used`
  ADD PRIMARY KEY (`idx`),
  ADD KEY `name` (`name`),
  ADD KEY `utime` (`utime`),
  ADD KEY `actorid` (`actorid`);

--
-- Indexes for table `t_log_acct`
--
ALTER TABLE `t_log_acct`
  ADD PRIMARY KEY (`idx`);

--
-- Indexes for table `t_log_act`
--
ALTER TABLE `t_log_act`
  ADD PRIMARY KEY (`idx`);

--
-- Indexes for table `t_log_gitem`
--
ALTER TABLE `t_log_gitem`
  ADD PRIMARY KEY (`idx`);

--
-- Indexes for table `t_log_log`
--
ALTER TABLE `t_log_log`
  ADD PRIMARY KEY (`idx`);

--
-- Indexes for table `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`loginindex`),
  ADD KEY `accountid` (`accountid`),
  ADD KEY `logintime` (`logintime`);

--
-- Indexes for table `t_new`
--
ALTER TABLE `t_new`
  ADD PRIMARY KEY (`idx`);

--
-- Indexes for table `t_schedule`
--
ALTER TABLE `t_schedule`
  ADD PRIMARY KEY (`idx`);

--
-- Indexes for table `t_ui`
--
ALTER TABLE `t_ui`
  ADD PRIMARY KEY (`idx`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_account`
--
ALTER TABLE `t_account`
  MODIFY `accountid` bigint(21) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_card_saving`
--
ALTER TABLE `t_card_saving`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_gold_saving`
--
ALTER TABLE `t_gold_saving`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_gold_used`
--
ALTER TABLE `t_gold_used`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_log_acct`
--
ALTER TABLE `t_log_acct`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_log_act`
--
ALTER TABLE `t_log_act`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_log_gitem`
--
ALTER TABLE `t_log_gitem`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_log_log`
--
ALTER TABLE `t_log_log`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `loginindex` bigint(21) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_new`
--
ALTER TABLE `t_new`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_schedule`
--
ALTER TABLE `t_schedule`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_ui`
--
ALTER TABLE `t_ui`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;--
-- Database: `db_game`
--
CREATE DATABASE IF NOT EXISTS `db_game` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_game`;

-- --------------------------------------------------------

--
-- Table structure for table `request_teacher_list`
--

CREATE TABLE IF NOT EXISTS `request_teacher_list` (
  `teacherdbid` bigint(21) NOT NULL DEFAULT '0',
  `teachername` varchar(32) DEFAULT NULL,
  `teacherlev` int(11) DEFAULT '0',
  `teacherparty` int(11) DEFAULT '0',
  `studentcount` int(11) DEFAULT '0',
  `publishtime` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_auction_item`
--

CREATE TABLE IF NOT EXISTS `t_auction_item` (
  `auctionitemid` bigint(21) NOT NULL,
  `ownerid` bigint(21) DEFAULT '0',
  `owneraccountid` bigint(21) DEFAULT '0',
  `buyerid` bigint(21) DEFAULT '0',
  `buyeraccountid` bigint(21) DEFAULT '0',
  `ownername` varchar(32) DEFAULT NULL,
  `buyername` varchar(32) DEFAULT NULL,
  `baseprice` int(11) DEFAULT '0',
  `uniqueprice` int(11) DEFAULT '0',
  `bidprice` int(11) DEFAULT '0',
  `passtime` int(11) DEFAULT '0',
  `duration` int(11) DEFAULT '0',
  `instance` blob,
  `starttime` int(11) DEFAULT '0',
  `opid` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_consign`
--

CREATE TABLE IF NOT EXISTS `t_consign` (
  `id` bigint(21) NOT NULL DEFAULT '0',
  `taskid` int(11) DEFAULT '0',
  `releaserid` bigint(21) DEFAULT '0',
  `releasername` varchar(32) DEFAULT NULL,
  `receiverid` bigint(21) DEFAULT '0',
  `money` int(11) DEFAULT '0',
  `credit` int(11) DEFAULT '0',
  `deadline` int(11) DEFAULT '0',
  `description` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_defend_equip_rank`
--

CREATE TABLE IF NOT EXISTS `t_defend_equip_rank` (
  `dbid` bigint(21) NOT NULL DEFAULT '0',
  `ownerdbid` bigint(21) DEFAULT '0',
  `itemtypeid` int(11) DEFAULT '0',
  `level` int(11) DEFAULT '0',
  `point` int(11) DEFAULT '0',
  `inserttime` int(11) DEFAULT '0',
  `ownername` varchar(32) DEFAULT NULL,
  `showpoint` tinyint(4) DEFAULT '0',
  `showownername` tinyint(4) DEFAULT '0',
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_gift`
--

CREATE TABLE IF NOT EXISTS `t_gift` (
  `id` int(11) NOT NULL,
  `recvid` bigint(21) DEFAULT '0',
  `recvname` varchar(32) DEFAULT NULL,
  `sendername` varchar(32) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `gifts` text,
  `deleted` tinyint(4) DEFAULT '0',
  `deltime` int(11) DEFAULT '0',
  `createtime` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_guild_kill_record`
--

CREATE TABLE IF NOT EXISTS `t_guild_kill_record` (
  `id` bigint(21) NOT NULL DEFAULT '0',
  `name` varchar(32) DEFAULT NULL,
  `agname` varchar(32) DEFAULT NULL,
  `killusercnt` int(11) DEFAULT '0',
  `bekilledusercnt` int(11) DEFAULT '0',
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_guild_war_pair`
--

CREATE TABLE IF NOT EXISTS `t_guild_war_pair` (
  `guildid` bigint(21) NOT NULL DEFAULT '0',
  `guildname` varchar(32) DEFAULT NULL,
  `guildlev` int(11) DEFAULT '0',
  `decguildid` bigint(21) DEFAULT '0',
  `decguildname` varchar(32) DEFAULT NULL,
  `decguildlev` int(11) DEFAULT '0',
  `dectime` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_main_trump_rank`
--

CREATE TABLE IF NOT EXISTS `t_main_trump_rank` (
  `dbid` bigint(21) NOT NULL DEFAULT '0',
  `ownerdbid` bigint(21) DEFAULT '0',
  `itemtypeid` int(11) DEFAULT '0',
  `level` int(11) DEFAULT '0',
  `point` int(11) DEFAULT '0',
  `inserttime` int(11) DEFAULT '0',
  `ownername` varchar(32) DEFAULT NULL,
  `showpoint` tinyint(4) DEFAULT '0',
  `showownername` tinyint(4) DEFAULT '0',
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_murder`
--

CREATE TABLE IF NOT EXISTS `t_murder` (
  `dbid` bigint(21) NOT NULL DEFAULT '0',
  `deleted` tinyint(4) DEFAULT '0',
  `applyid` bigint(21) DEFAULT '0',
  `applyname` varchar(255) DEFAULT NULL,
  `targetid` bigint(21) DEFAULT '0',
  `targetname` varchar(255) DEFAULT NULL,
  `killerid` bigint(21) DEFAULT '0',
  `killername` varchar(255) DEFAULT NULL,
  `begintime` int(11) DEFAULT '0',
  `endtime` int(11) DEFAULT '0',
  `rewardmoney` int(11) DEFAULT '0',
  `rewardpoint` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_pve_rank`
--

CREATE TABLE IF NOT EXISTS `t_pve_rank` (
  `rank` int(11) NOT NULL DEFAULT '0',
  `name` varchar(32) DEFAULT NULL,
  `party` int(11) DEFAULT '0',
  `level` int(11) DEFAULT '0',
  `guild` varchar(32) DEFAULT NULL,
  `point` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_storage_item`
--

CREATE TABLE IF NOT EXISTS `t_storage_item` (
  `storageitemid` bigint(21) NOT NULL,
  `dbid` bigint(21) DEFAULT '0',
  `strdesc` varchar(255) DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT '0',
  `limittime` int(11) DEFAULT '0',
  `bytetype` int(11) DEFAULT '0',
  `bytereason` int(11) DEFAULT '0',
  `money` int(11) DEFAULT '0',
  `instance` blob,
  `storagetime` int(11) DEFAULT '0',
  `taketime` int(11) DEFAULT '0',
  `forcedeltime` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_student`
--

CREATE TABLE IF NOT EXISTS `t_student` (
  `studentdbid` bigint(21) NOT NULL DEFAULT '0',
  `teacherdbid` bigint(21) DEFAULT '0',
  `studentname` varchar(32) DEFAULT NULL,
  `studentlev` int(11) DEFAULT '0',
  `studentparty` int(11) DEFAULT '0',
  `reportlev` int(11) DEFAULT '0',
  `state` int(11) DEFAULT '0',
  `enterschooltime` int(11) DEFAULT '0',
  `lastreporttime` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_teacher`
--

CREATE TABLE IF NOT EXISTS `t_teacher` (
  `teacherdbid` bigint(21) NOT NULL DEFAULT '0',
  `teachername` varchar(32) DEFAULT NULL,
  `teacherlev` int(11) DEFAULT '0',
  `teacherparty` int(11) DEFAULT '0',
  `totalreportgrade` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `dbid` bigint(21) NOT NULL DEFAULT '0',
  `name` varchar(32) DEFAULT NULL,
  `accountid` bigint(21) DEFAULT '0',
  `totalexp` bigint(21) DEFAULT '0',
  `totalgodexp` bigint(21) DEFAULT '0',
  `password` varchar(64) DEFAULT NULL,
  `guild` varchar(32) DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT '0',
  `locked` tinyint(4) DEFAULT '0',
  `changename` tinyint(4) DEFAULT '0',
  `freeze` tinyint(4) DEFAULT '0',
  `lockedtime` int(11) DEFAULT '0',
  `deletetime` int(11) DEFAULT '0',
  `createtime` int(11) DEFAULT '0',
  `teacherpoint` int(11) DEFAULT '0',
  `party` int(11) DEFAULT '0',
  `level` int(11) DEFAULT '0',
  `godlevel` int(11) DEFAULT '0',
  `exp` int(11) DEFAULT '0',
  `nimbus` int(11) DEFAULT '0',
  `talent` int(11) DEFAULT '0',
  `hp` int(11) DEFAULT '0',
  `mp` int(11) DEFAULT '0',
  `map` int(11) DEFAULT '0',
  `x` int(11) DEFAULT '0',
  `y` int(11) DEFAULT '0',
  `pk` int(11) DEFAULT '0',
  `money` int(11) DEFAULT '0',
  `bindmoney` int(11) DEFAULT '0',
  `bankmoney` int(11) DEFAULT '0',
  `appearance` int(11) DEFAULT '0',
  `lastlevuptime` int(11) DEFAULT '0',
  `onlinetime` int(11) DEFAULT '0',
  `lastupdatetime` int(11) DEFAULT '0',
  `pvpscore` int(11) DEFAULT '0',
  `pvescore` int(11) DEFAULT '0',
  `pv` int(11) DEFAULT '0',
  `ip` int(11) DEFAULT '0',
  `ipsafe` int(11) DEFAULT '0',
  `ipptime` int(11) DEFAULT '0',
  `equipment` blob,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user_dungeon_team`
--

CREATE TABLE IF NOT EXISTS `t_user_dungeon_team` (
  `dbid` bigint(21) NOT NULL DEFAULT '0',
  `deleted` tinyint(4) DEFAULT '0',
  `createtime` int(11) DEFAULT '0',
  `name` varchar(32) DEFAULT NULL,
  `boss` bigint(21) DEFAULT '0',
  `member` blob,
  `memberdata` blob,
  `scores` blob,
  `pvpcount` int(11) DEFAULT '0',
  `pvecount` int(11) DEFAULT '0',
  `pvpscore` int(11) DEFAULT '0',
  `pvescore` int(11) DEFAULT '0',
  `pvprank` int(11) DEFAULT '0',
  `pverank` int(11) DEFAULT '0',
  `joinlimit` blob,
  `joinlimittime` int(11) DEFAULT '0',
  `touchtime` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user_guild`
--

CREATE TABLE IF NOT EXISTS `t_user_guild` (
  `guildid` bigint(21) NOT NULL DEFAULT '0',
  `deleted` tinyint(4) DEFAULT '0',
  `todeletetime` int(11) DEFAULT '0',
  `level` int(11) DEFAULT '0',
  `bosspv` int(11) DEFAULT '0',
  `name` varchar(32) DEFAULT NULL,
  `boss` bigint(21) DEFAULT '0',
  `bulletin` varchar(255) DEFAULT NULL,
  `member` blob,
  `memberdata` blob,
  `icon` blob,
  `guildmoney` int(11) DEFAULT '0',
  `membercontrib` blob,
  `household` blob,
  `userdata` blob,
  `bundguild` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user_guild_terr`
--

CREATE TABLE IF NOT EXISTS `t_user_guild_terr` (
  `guildid` bigint(21) NOT NULL DEFAULT '0',
  `deleted` tinyint(4) DEFAULT '0',
  `exp` int(11) DEFAULT '0',
  `money` int(11) DEFAULT '0',
  `lumber` int(11) DEFAULT '0',
  `guildpoints` int(11) DEFAULT '0',
  `building` blob,
  `bank` blob,
  `bankhistory` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user_mail`
--

CREATE TABLE IF NOT EXISTS `t_user_mail` (
  `mailid` bigint(21) NOT NULL,
  `senderid` bigint(21) DEFAULT '0',
  `recvid` bigint(21) DEFAULT '0',
  `sendername` varchar(32) DEFAULT NULL,
  `recvname` varchar(32) DEFAULT NULL,
  `isread` tinyint(4) DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `haveaccessory` tinyint(4) DEFAULT '0',
  `accessory` blob,
  `log` blob,
  `limittime` int(11) DEFAULT '0',
  `starttime` int(11) DEFAULT '0',
  `deleted` tinyint(4) DEFAULT '0',
  `deletetime` int(11) DEFAULT '0',
  `forcedeletetime` int(11) DEFAULT '0',
  `para1` int(11) DEFAULT '0',
  `para2` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_vars`
--

CREATE TABLE IF NOT EXISTS `t_vars` (
  `name` varchar(64) NOT NULL DEFAULT '',
  `type` varchar(32) DEFAULT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_war_area`
--

CREATE TABLE IF NOT EXISTS `t_war_area` (
  `id` int(11) NOT NULL DEFAULT '0',
  `egid` bigint(21) DEFAULT '0',
  `dwstart` int(11) DEFAULT '0',
  `dwlaststart` int(11) DEFAULT '0',
  `istate` int(11) DEFAULT '0',
  `lsaid` blob,
  `lsdid` blob,
  `lsrid` blob,
  `iscreatefromdb` int(11) DEFAULT '0',
  `npcassign` blob,
  `commonnpcassign` blob,
  `door` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_teacher_list`
--
ALTER TABLE `request_teacher_list`
  ADD PRIMARY KEY (`teacherdbid`),
  ADD KEY `publishtime` (`publishtime`);

--
-- Indexes for table `t_auction_item`
--
ALTER TABLE `t_auction_item`
  ADD PRIMARY KEY (`auctionitemid`);

--
-- Indexes for table `t_consign`
--
ALTER TABLE `t_consign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_defend_equip_rank`
--
ALTER TABLE `t_defend_equip_rank`
  ADD PRIMARY KEY (`dbid`),
  ADD KEY `point` (`point`),
  ADD KEY `inserttime` (`inserttime`);

--
-- Indexes for table `t_gift`
--
ALTER TABLE `t_gift`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recvid` (`recvid`),
  ADD KEY `deleted` (`deleted`);

--
-- Indexes for table `t_guild_kill_record`
--
ALTER TABLE `t_guild_kill_record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `killusercnt` (`killusercnt`);

--
-- Indexes for table `t_guild_war_pair`
--
ALTER TABLE `t_guild_war_pair`
  ADD PRIMARY KEY (`guildid`),
  ADD KEY `dectime` (`dectime`);

--
-- Indexes for table `t_main_trump_rank`
--
ALTER TABLE `t_main_trump_rank`
  ADD PRIMARY KEY (`dbid`),
  ADD KEY `point` (`point`),
  ADD KEY `inserttime` (`inserttime`);

--
-- Indexes for table `t_murder`
--
ALTER TABLE `t_murder`
  ADD PRIMARY KEY (`dbid`);

--
-- Indexes for table `t_pve_rank`
--
ALTER TABLE `t_pve_rank`
  ADD PRIMARY KEY (`rank`);

--
-- Indexes for table `t_storage_item`
--
ALTER TABLE `t_storage_item`
  ADD PRIMARY KEY (`storageitemid`);

--
-- Indexes for table `t_student`
--
ALTER TABLE `t_student`
  ADD PRIMARY KEY (`studentdbid`),
  ADD KEY `teacherdbid` (`teacherdbid`);

--
-- Indexes for table `t_teacher`
--
ALTER TABLE `t_teacher`
  ADD PRIMARY KEY (`teacherdbid`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`dbid`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `accountid` (`accountid`),
  ADD KEY `totalexp` (`totalexp`),
  ADD KEY `totalgodexp` (`totalgodexp`),
  ADD KEY `deleted` (`deleted`),
  ADD KEY `level` (`level`),
  ADD KEY `lastupdatetime` (`lastupdatetime`),
  ADD KEY `pvpscore` (`pvpscore`),
  ADD KEY `pvescore` (`pvescore`);

--
-- Indexes for table `t_user_dungeon_team`
--
ALTER TABLE `t_user_dungeon_team`
  ADD PRIMARY KEY (`dbid`);

--
-- Indexes for table `t_user_guild`
--
ALTER TABLE `t_user_guild`
  ADD PRIMARY KEY (`guildid`);

--
-- Indexes for table `t_user_guild_terr`
--
ALTER TABLE `t_user_guild_terr`
  ADD PRIMARY KEY (`guildid`);

--
-- Indexes for table `t_user_mail`
--
ALTER TABLE `t_user_mail`
  ADD PRIMARY KEY (`mailid`),
  ADD KEY `senderid` (`senderid`),
  ADD KEY `recvid` (`recvid`),
  ADD KEY `starttime` (`starttime`),
  ADD KEY `deleted` (`deleted`);

--
-- Indexes for table `t_vars`
--
ALTER TABLE `t_vars`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `t_war_area`
--
ALTER TABLE `t_war_area`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_auction_item`
--
ALTER TABLE `t_auction_item`
  MODIFY `auctionitemid` bigint(21) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_gift`
--
ALTER TABLE `t_gift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;--
-- Database: `db_misc`
--
CREATE DATABASE IF NOT EXISTS `db_misc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_misc`;

-- --------------------------------------------------------

--
-- Table structure for table `file_checksums`
--

CREATE TABLE IF NOT EXISTS `file_checksums` (
  `id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `md5_checksum` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_case_answers`
--

CREATE TABLE IF NOT EXISTS `t_case_answers` (
  `answerID` int(11) NOT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `answer` text NOT NULL,
  `answerHighlight` enum('Admin','GameMaster','User') NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_case_attachments`
--

CREATE TABLE IF NOT EXISTS `t_case_attachments` (
  `aid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `attachment` text NOT NULL,
  `addedBy` int(11) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_cases`
--

CREATE TABLE IF NOT EXISTS `t_cases` (
  `cid` int(11) NOT NULL,
  `creatorAccountID` int(11) NOT NULL,
  `AccountName` varchar(62) DEFAULT NULL,
  `title` varchar(62) NOT NULL,
  `content` text NOT NULL,
  `reason` varchar(32) NOT NULL,
  `priority` char(10) NOT NULL DEFAULT 'Normal',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Opened','Closed','Pending','Answered') NOT NULL DEFAULT 'Opened'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_cases_close`
--

CREATE TABLE IF NOT EXISTS `t_cases_close` (
  `cid` int(11) NOT NULL,
  `creatorAccountID` int(11) NOT NULL,
  `title` varchar(62) NOT NULL,
  `content` text NOT NULL,
  `reason` varchar(32) NOT NULL,
  `priority` char(10) NOT NULL DEFAULT 'Normal',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Opened','Closed','Pending','Answered') NOT NULL DEFAULT 'Opened'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_cmd_logs`
--

CREATE TABLE IF NOT EXISTS `t_cmd_logs` (
  `lid` bigint(22) NOT NULL DEFAULT '0',
  `user` varchar(32) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `addedDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_codes`
--

CREATE TABLE IF NOT EXISTS `t_codes` (
  `cid` int(11) NOT NULL,
  `code` varchar(37) NOT NULL,
  `pswd` varchar(42) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `usedTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usedAccount` varchar(65) DEFAULT NULL,
  `gp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_crawl_news`
--

CREATE TABLE IF NOT EXISTS `t_crawl_news` (
  `cid` int(55) NOT NULL,
  `Crawl` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_donate`
--

CREATE TABLE IF NOT EXISTS `t_donate` (
  `cid` bigint(21) NOT NULL,
  `AccountID` int(11) NOT NULL,
  `AccountName` varchar(32) DEFAULT NULL,
  `sender_name` varchar(62) NOT NULL,
  `sender_number` text NOT NULL,
  `code` varchar(64) NOT NULL,
  `send_money` varchar(32) NOT NULL,
  `send_ecoin` int(11) DEFAULT '0',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(32) DEFAULT NULL,
  `send_receipt` varchar(1200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_donate_itens`
--

CREATE TABLE IF NOT EXISTS `t_donate_itens` (
  `id` int(11) NOT NULL,
  `userName` varchar(92) NOT NULL,
  `itemID` mediumint(8) NOT NULL,
  `color` varchar(14) NOT NULL DEFAULT 'white',
  `binding` enum('unbinded','binded','bind_pick','bind_equip') NOT NULL DEFAULT 'unbinded',
  `smithing` tinyint(3) NOT NULL DEFAULT '0',
  `level` tinyint(3) NOT NULL DEFAULT '0',
  `amount` tinyint(2) NOT NULL DEFAULT '1',
  `attr` mediumint(8) NOT NULL DEFAULT '0',
  `isSended` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_gift_itens`
--

CREATE TABLE IF NOT EXISTS `t_gift_itens` (
  `id` int(11) NOT NULL,
  `userName` varchar(92) NOT NULL,
  `itemID` mediumint(8) NOT NULL,
  `color` varchar(14) NOT NULL DEFAULT 'white',
  `binding` enum('unbinded','binded','bind_pick','bind_equip') NOT NULL DEFAULT 'unbinded',
  `smithing` tinyint(3) NOT NULL DEFAULT '0',
  `level` tinyint(3) NOT NULL DEFAULT '0',
  `amount` tinyint(2) NOT NULL DEFAULT '1',
  `attr` mediumint(8) NOT NULL DEFAULT '0',
  `isSended` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_gift_kills`
--

CREATE TABLE IF NOT EXISTS `t_gift_kills` (
  `kid` smallint(6) NOT NULL,
  `name` varchar(62) NOT NULL,
  `character` varchar(32) NOT NULL,
  `kills` int(11) NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_gift_ranking`
--

CREATE TABLE IF NOT EXISTS `t_gift_ranking` (
  `rid` int(11) NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `character` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_gift_time`
--

CREATE TABLE IF NOT EXISTS `t_gift_time` (
  `id` int(5) NOT NULL,
  `accountid` int(5) NOT NULL,
  `Name` char(50) NOT NULL,
  `PlayedHours` int(50) NOT NULL,
  `CanConvert` int(50) NOT NULL,
  `ConvertedHours` int(50) NOT NULL,
  `RemainHours` int(50) NOT NULL,
  `Points` int(50) NOT NULL,
  `ClaimedPoints` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_gift_votes`
--

CREATE TABLE IF NOT EXISTS `t_gift_votes` (
  `vid` bigint(22) NOT NULL,
  `accountid` bigint(22) NOT NULL,
  `points` mediumint(8) NOT NULL DEFAULT '10',
  `time` int(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `t_gift_votes`
--
DELIMITER $$
CREATE TRIGGER `voteGift` AFTER INSERT ON `t_gift_votes`
 FOR EACH ROW BEGIN
       UPDATE `db_account`.`t_account` SET `gp` = ( `gp` + NEW.points ) WHERE `accountid` = NEW.accountid ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `t_give_itens`
--

CREATE TABLE IF NOT EXISTS `t_give_itens` (
  `id` int(11) NOT NULL,
  `itemName` varchar(92) NOT NULL,
  `link` varchar(92) NOT NULL,
  `Name` varchar(92) NOT NULL,
  `status` enum('Open','Closed','Raffling') NOT NULL DEFAULT 'Open',
  `icon` varchar(80) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_image_event`
--

CREATE TABLE IF NOT EXISTS `t_image_event` (
  `cid` bigint(21) NOT NULL,
  `Image` varchar(1200) DEFAULT NULL,
  `Link` varchar(1200) DEFAULT NULL,
  `Title` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_news`
--

CREATE TABLE IF NOT EXISTS `t_news` (
  `dbid` int(11) NOT NULL,
  `title` varchar(52) NOT NULL,
  `poster` varchar(38) NOT NULL DEFAULT 'Frozen Talisman Team',
  `image` varchar(80) DEFAULT NULL,
  `content` text NOT NULL,
  `mainImage` varchar(42) NOT NULL DEFAULT '1.png',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  `displayAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_nick_change`
--

CREATE TABLE IF NOT EXISTS `t_nick_change` (
  `id` int(11) NOT NULL,
  `accountid` int(22) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_payment_validate`
--

CREATE TABLE IF NOT EXISTS `t_payment_validate` (
  `vid` smallint(6) NOT NULL,
  `itemName` varchar(80) NOT NULL,
  `checkName` text NOT NULL,
  `currency` char(10) NOT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_payments`
--

CREATE TABLE IF NOT EXISTS `t_payments` (
  `pid` bigint(22) NOT NULL,
  `name` varchar(69) NOT NULL,
  `country` varchar(53) NOT NULL,
  `city` varchar(90) NOT NULL,
  `paymentStatus` varchar(29) NOT NULL,
  `account` varchar(32) NOT NULL,
  `email` varchar(102) NOT NULL,
  `points` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `currency` char(10) NOT NULL,
  `status` enum('Dispatched','Stored','Invalid Account') NOT NULL DEFAULT 'Stored',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paymentID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_paymentsbr`
--

CREATE TABLE IF NOT EXISTS `t_paymentsbr` (
  `pid` bigint(22) NOT NULL,
  `name` varchar(69) NOT NULL,
  `accountid` varchar(69) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `banco` enum('Caixa','Bradesco') NOT NULL,
  `des` varchar(90) NOT NULL,
  `email` varchar(102) NOT NULL,
  `points` int(64) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Dispatched','Pedding','Suspended') NOT NULL DEFAULT 'Pedding'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_point_sale`
--

CREATE TABLE IF NOT EXISTS `t_point_sale` (
  `psid` mediumint(8) NOT NULL,
  `points` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_pvp`
--

CREATE TABLE IF NOT EXISTS `t_pvp` (
  `Id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `level` int(2) NOT NULL,
  `class` varchar(15) NOT NULL,
  `guild` varchar(20) NOT NULL,
  `death` int(2) NOT NULL,
  `kills` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_reset_itens`
--

CREATE TABLE IF NOT EXISTS `t_reset_itens` (
  `id` int(11) NOT NULL,
  `userName` varchar(92) NOT NULL,
  `itemID` mediumint(8) NOT NULL,
  `color` varchar(14) NOT NULL DEFAULT 'white',
  `binding` enum('unbinded','binded','bind_pick','bind_equip') NOT NULL DEFAULT 'unbinded',
  `smithing` tinyint(3) NOT NULL DEFAULT '0',
  `level` tinyint(3) NOT NULL DEFAULT '0',
  `amount` tinyint(2) NOT NULL DEFAULT '1',
  `attr` mediumint(8) NOT NULL DEFAULT '0',
  `isSended` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_screenshot_views`
--

CREATE TABLE IF NOT EXISTS `t_screenshot_views` (
  `sid` int(11) NOT NULL,
  `accountid` bigint(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_screenshot_votes`
--

CREATE TABLE IF NOT EXISTS `t_screenshot_votes` (
  `sid` int(11) NOT NULL,
  `accountid` bigint(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_screenshots`
--

CREATE TABLE IF NOT EXISTS `t_screenshots` (
  `sid` int(11) NOT NULL,
  `dbid` bigint(22) NOT NULL,
  `title` varchar(98) NOT NULL,
  `votes` smallint(6) NOT NULL DEFAULT '0',
  `imageSource` varchar(255) NOT NULL,
  `status` enum('Hidden','Unapproved','Approved') NOT NULL DEFAULT 'Unapproved',
  `views` smallint(6) NOT NULL DEFAULT '0',
  `highlight` tinyint(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `enableComments` tinyint(1) NOT NULL DEFAULT '1',
  `displayCharacterName` tinyint(1) NOT NULL DEFAULT '1',
  `displayViewsCount` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_screenshots_comments`
--

CREATE TABLE IF NOT EXISTS `t_screenshots_comments` (
  `cid` bigint(22) NOT NULL,
  `sid` int(11) NOT NULL,
  `dbid` bigint(22) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_settings`
--

CREATE TABLE IF NOT EXISTS `t_settings` (
  `sid` int(11) NOT NULL,
  `title` text NOT NULL,
  `setting` varchar(38) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `use` enum('Bool','Input','Textarea','Text') NOT NULL DEFAULT 'Text'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_shop_itens`
--

CREATE TABLE IF NOT EXISTS `t_shop_itens` (
  `id` int(11) NOT NULL,
  `objectID` int(11) NOT NULL,
  `itemName` varchar(92) NOT NULL,
  `itemDescription` text NOT NULL,
  `points` mediumint(8) NOT NULL,
  `shopType` enum('VPoint','ECoin','Both') NOT NULL DEFAULT 'Both',
  `icon` varchar(80) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_shop_objects`
--

CREATE TABLE IF NOT EXISTS `t_shop_objects` (
  `objectID` int(11) NOT NULL,
  `itemID` mediumint(8) NOT NULL,
  `color` varchar(14) NOT NULL DEFAULT 'white',
  `binding` enum('unbinded','binded','bind_pick','bind_equip') NOT NULL DEFAULT 'unbinded',
  `smithing` tinyint(3) NOT NULL DEFAULT '0',
  `level` tinyint(3) NOT NULL DEFAULT '0',
  `amount` tinyint(2) NOT NULL DEFAULT '1',
  `attr` mediumint(8) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_shop_package_itens`
--

CREATE TABLE IF NOT EXISTS `t_shop_package_itens` (
  `pid` smallint(6) NOT NULL,
  `objectID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_shop_packages`
--

CREATE TABLE IF NOT EXISTS `t_shop_packages` (
  `pid` smallint(6) NOT NULL,
  `packageName` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `points` mediumint(8) NOT NULL,
  `shopType` enum('Gift','Donate','Both') NOT NULL DEFAULT 'Both',
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_slider_images`
--

CREATE TABLE IF NOT EXISTS `t_slider_images` (
  `imageID` smallint(6) NOT NULL,
  `imagePath` varchar(90) NOT NULL,
  `title` varchar(106) NOT NULL,
  `redirectTo` varchar(106) NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_staff_hide`
--

CREATE TABLE IF NOT EXISTS `t_staff_hide` (
  `hid` smallint(6) NOT NULL,
  `account` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_update_files`
--

CREATE TABLE IF NOT EXISTS `t_update_files` (
  `fid` bigint(22) NOT NULL,
  `signature` varchar(64) NOT NULL,
  `remote` text NOT NULL,
  `local` text NOT NULL,
  `released` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_updates`
--

CREATE TABLE IF NOT EXISTS `t_updates` (
  `uid` mediumint(8) NOT NULL,
  `signature` varchar(52) NOT NULL,
  `fromVersion` int(11) NOT NULL,
  `toVersion` int(11) NOT NULL,
  `released` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_war`
--

CREATE TABLE IF NOT EXISTS `t_war` (
  `id` bigint(22) NOT NULL,
  `name` varchar(69) NOT NULL,
  `guild` varchar(53) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_checksums`
--
ALTER TABLE `file_checksums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_case_answers`
--
ALTER TABLE `t_case_answers`
  ADD PRIMARY KEY (`answerID`);

--
-- Indexes for table `t_case_attachments`
--
ALTER TABLE `t_case_attachments`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `t_cases`
--
ALTER TABLE `t_cases`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `t_cases_close`
--
ALTER TABLE `t_cases_close`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `t_codes`
--
ALTER TABLE `t_codes`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `t_crawl_news`
--
ALTER TABLE `t_crawl_news`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `t_donate`
--
ALTER TABLE `t_donate`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `t_donate_itens`
--
ALTER TABLE `t_donate_itens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_gift_itens`
--
ALTER TABLE `t_gift_itens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_gift_kills`
--
ALTER TABLE `t_gift_kills`
  ADD PRIMARY KEY (`kid`);

--
-- Indexes for table `t_gift_ranking`
--
ALTER TABLE `t_gift_ranking`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `t_gift_time`
--
ALTER TABLE `t_gift_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_gift_votes`
--
ALTER TABLE `t_gift_votes`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `t_give_itens`
--
ALTER TABLE `t_give_itens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_image_event`
--
ALTER TABLE `t_image_event`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `t_news`
--
ALTER TABLE `t_news`
  ADD PRIMARY KEY (`dbid`);

--
-- Indexes for table `t_nick_change`
--
ALTER TABLE `t_nick_change`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_payment_validate`
--
ALTER TABLE `t_payment_validate`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `t_payments`
--
ALTER TABLE `t_payments`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `t_paymentsbr`
--
ALTER TABLE `t_paymentsbr`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `t_point_sale`
--
ALTER TABLE `t_point_sale`
  ADD PRIMARY KEY (`psid`);

--
-- Indexes for table `t_pvp`
--
ALTER TABLE `t_pvp`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `t_reset_itens`
--
ALTER TABLE `t_reset_itens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_screenshot_views`
--
ALTER TABLE `t_screenshot_views`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `accountid` (`accountid`);

--
-- Indexes for table `t_screenshot_votes`
--
ALTER TABLE `t_screenshot_votes`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `accountid` (`accountid`);

--
-- Indexes for table `t_screenshots`
--
ALTER TABLE `t_screenshots`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `t_screenshots_comments`
--
ALTER TABLE `t_screenshots_comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `t_settings`
--
ALTER TABLE `t_settings`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `t_shop_itens`
--
ALTER TABLE `t_shop_itens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_shop_objects`
--
ALTER TABLE `t_shop_objects`
  ADD PRIMARY KEY (`objectID`);

--
-- Indexes for table `t_shop_packages`
--
ALTER TABLE `t_shop_packages`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `t_slider_images`
--
ALTER TABLE `t_slider_images`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `t_staff_hide`
--
ALTER TABLE `t_staff_hide`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `t_update_files`
--
ALTER TABLE `t_update_files`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `t_updates`
--
ALTER TABLE `t_updates`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `UNIQUE INDEX` (`toVersion`,`fromVersion`);

--
-- Indexes for table `t_war`
--
ALTER TABLE `t_war`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_checksums`
--
ALTER TABLE `file_checksums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_case_answers`
--
ALTER TABLE `t_case_answers`
  MODIFY `answerID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_case_attachments`
--
ALTER TABLE `t_case_attachments`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_cases`
--
ALTER TABLE `t_cases`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_cases_close`
--
ALTER TABLE `t_cases_close`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_codes`
--
ALTER TABLE `t_codes`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_crawl_news`
--
ALTER TABLE `t_crawl_news`
  MODIFY `cid` int(55) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_donate`
--
ALTER TABLE `t_donate`
  MODIFY `cid` bigint(21) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_donate_itens`
--
ALTER TABLE `t_donate_itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_gift_itens`
--
ALTER TABLE `t_gift_itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_gift_kills`
--
ALTER TABLE `t_gift_kills`
  MODIFY `kid` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_gift_ranking`
--
ALTER TABLE `t_gift_ranking`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_gift_time`
--
ALTER TABLE `t_gift_time`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_gift_votes`
--
ALTER TABLE `t_gift_votes`
  MODIFY `vid` bigint(22) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_give_itens`
--
ALTER TABLE `t_give_itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_image_event`
--
ALTER TABLE `t_image_event`
  MODIFY `cid` bigint(21) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_news`
--
ALTER TABLE `t_news`
  MODIFY `dbid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_nick_change`
--
ALTER TABLE `t_nick_change`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_payment_validate`
--
ALTER TABLE `t_payment_validate`
  MODIFY `vid` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_payments`
--
ALTER TABLE `t_payments`
  MODIFY `pid` bigint(22) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_paymentsbr`
--
ALTER TABLE `t_paymentsbr`
  MODIFY `pid` bigint(22) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_point_sale`
--
ALTER TABLE `t_point_sale`
  MODIFY `psid` mediumint(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_pvp`
--
ALTER TABLE `t_pvp`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_reset_itens`
--
ALTER TABLE `t_reset_itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_screenshot_views`
--
ALTER TABLE `t_screenshot_views`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_screenshot_votes`
--
ALTER TABLE `t_screenshot_votes`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_screenshots`
--
ALTER TABLE `t_screenshots`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_screenshots_comments`
--
ALTER TABLE `t_screenshots_comments`
  MODIFY `cid` bigint(22) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_settings`
--
ALTER TABLE `t_settings`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_shop_itens`
--
ALTER TABLE `t_shop_itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_shop_objects`
--
ALTER TABLE `t_shop_objects`
  MODIFY `objectID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_shop_packages`
--
ALTER TABLE `t_shop_packages`
  MODIFY `pid` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_slider_images`
--
ALTER TABLE `t_slider_images`
  MODIFY `imageID` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_staff_hide`
--
ALTER TABLE `t_staff_hide`
  MODIFY `hid` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_update_files`
--
ALTER TABLE `t_update_files`
  MODIFY `fid` bigint(22) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_updates`
--
ALTER TABLE `t_updates`
  MODIFY `uid` mediumint(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_war`
--
ALTER TABLE `t_war`
  MODIFY `id` bigint(22) NOT NULL AUTO_INCREMENT;
DELIMITER $$
--
-- Events
--
CREATE EVENT `removecase` ON SCHEDULE EVERY 1 SECOND STARTS '2024-09-29 21:51:36' ON COMPLETION NOT PRESERVE ENABLE DO TRUNCATE t_cases$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
