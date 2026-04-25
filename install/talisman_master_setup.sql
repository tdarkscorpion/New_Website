-- Talisman Online Master Setup SQL
-- Generated: 2026-04-25 22:18:54
-- This file contains the complete structure and default settings for an error-free installation.

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_account`
--
CREATE DATABASE IF NOT EXISTS `db_account` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_account`;

-- Structure for table `t_account`
CREATE TABLE `t_account` (
  `accountid` bigint(21) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `pwd` varchar(32) DEFAULT NULL,
  `pw2` varchar(32) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `full_name` varchar(32) DEFAULT NULL,
  `birth_date` text,
  `mobile_number` text,
  `nationality` text,
  `sq` text,
  `sa` text,
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
  `pwp3` int(11) NOT NULL DEFAULT '0',
  `Time` text,
  `attempt` text,
  `f_name` text,
  `Ref` text,
  `mail` text,
  `s_code` varchar(222) NOT NULL,
  `google_2fa_enabled` tinyint(1) DEFAULT '0',
  `google_2fa_secret` text,
  `google_2fa_recovery` text,
  `google_2fa_recovery_codes` text,
  `last_session_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`accountid`),
  UNIQUE KEY `name` (`name`),
  KEY `ll` (`ll`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Structure for table `t_card_saving`
CREATE TABLE `t_card_saving` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `cardid` varchar(45) DEFAULT NULL,
  `cardpwd` varchar(32) DEFAULT NULL,
  `gold` int(11) DEFAULT '0',
  `stime` int(11) DEFAULT '0',
  `type` int(11) DEFAULT '0',
  `got` int(11) DEFAULT '0',
  `num` int(11) DEFAULT '0',
  `opid` int(11) DEFAULT '0',
  PRIMARY KEY (`idx`),
  KEY `name` (`name`),
  KEY `stime` (`stime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_cct`
CREATE TABLE `t_cct` (
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
  `s30` int(11) DEFAULT '0',
  KEY `tm` (`tm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_cct24h`
CREATE TABLE `t_cct24h` (
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
  `s30` int(11) DEFAULT '0',
  PRIMARY KEY (`idx`),
  KEY `tm` (`tm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_gold_saving`
CREATE TABLE `t_gold_saving` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `gold` int(11) DEFAULT '0',
  `type` int(11) DEFAULT '0',
  `opid` int(11) DEFAULT '0',
  `nidx` int(11) DEFAULT '0',
  `ctime` int(11) DEFAULT '0',
  PRIMARY KEY (`idx`),
  KEY `name` (`name`),
  KEY `ctime` (`ctime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_gold_used`
CREATE TABLE `t_gold_used` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
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
  `ip` int(11) DEFAULT '0',
  PRIMARY KEY (`idx`),
  KEY `name` (`name`),
  KEY `utime` (`utime`),
  KEY `actorid` (`actorid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_log_acct`
CREATE TABLE `t_log_acct` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
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
  `c13` int(11) DEFAULT '0',
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_log_act`
CREATE TABLE `t_log_act` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
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
  `lvuptimeavg2` int(11) DEFAULT '0',
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_log_gitem`
CREATE TABLE `t_log_gitem` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `tm` int(11) DEFAULT '0',
  `itemid` int(11) DEFAULT '0',
  `price` int(11) DEFAULT '0',
  `cnt` int(11) DEFAULT '0',
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_log_log`
CREATE TABLE `t_log_log` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `tm` int(11) DEFAULT '0',
  `type` int(11) DEFAULT '0',
  `usetime` int(11) DEFAULT '0',
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_login`
CREATE TABLE `t_login` (
  `loginindex` bigint(21) NOT NULL AUTO_INCREMENT,
  `accountid` bigint(21) DEFAULT '0',
  `server` bigint(21) DEFAULT '0',
  `logintime` int(11) DEFAULT '0',
  `logouttime` int(11) DEFAULT '0',
  `ip` int(11) DEFAULT '0',
  `point` int(11) DEFAULT '0',
  `flag` int(11) DEFAULT '0',
  `mac` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`loginindex`),
  KEY `accountid` (`accountid`),
  KEY `logintime` (`logintime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_new`
CREATE TABLE `t_new` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT '0',
  `name` varchar(32) DEFAULT NULL,
  `str1` varchar(64) DEFAULT NULL,
  `str2` varchar(32) DEFAULT NULL,
  `str3` varchar(250) DEFAULT NULL,
  `i1` int(11) DEFAULT '0',
  `i2` int(11) DEFAULT '0',
  `i3` int(11) DEFAULT '0',
  `ctime` int(11) DEFAULT '0',
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_schedule`
CREATE TABLE `t_schedule` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
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
  `deletetype` int(11) DEFAULT '0',
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_ui`
CREATE TABLE `t_ui` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `txt` text,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Database: `db_game`
--
CREATE DATABASE IF NOT EXISTS `db_game` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_game`;

-- Structure for table `online`
CREATE TABLE `online` (
  `accountid` bigint(21) NOT NULL,
  `dbid` bigint(21) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `guild` varchar(32) DEFAULT NULL,
  `party` int(11) DEFAULT '0',
  `godlevel` int(11) DEFAULT '0',
  `level` int(11) DEFAULT '0',
  `pv` int(11) DEFAULT '0',
  `lastmodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`dbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `request_teacher_list`
CREATE TABLE `request_teacher_list` (
  `teacherdbid` bigint(21) NOT NULL DEFAULT '0',
  `teachername` varchar(32) DEFAULT NULL,
  `teacherlev` int(11) DEFAULT '0',
  `teacherparty` int(11) DEFAULT '0',
  `studentcount` int(11) DEFAULT '0',
  `publishtime` int(11) DEFAULT '0',
  PRIMARY KEY (`teacherdbid`),
  KEY `publishtime` (`publishtime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_auction_item`
CREATE TABLE `t_auction_item` (
  `auctionitemid` bigint(21) NOT NULL AUTO_INCREMENT,
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
  `opid` int(11) DEFAULT '0',
  PRIMARY KEY (`auctionitemid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_consign`
CREATE TABLE `t_consign` (
  `id` bigint(21) NOT NULL DEFAULT '0',
  `taskid` int(11) DEFAULT '0',
  `releaserid` bigint(21) DEFAULT '0',
  `releasername` varchar(32) DEFAULT NULL,
  `receiverid` bigint(21) DEFAULT '0',
  `money` int(11) DEFAULT '0',
  `credit` int(11) DEFAULT '0',
  `deadline` int(11) DEFAULT '0',
  `description` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_defend_equip_rank`
CREATE TABLE `t_defend_equip_rank` (
  `dbid` bigint(21) NOT NULL DEFAULT '0',
  `ownerdbid` bigint(21) DEFAULT '0',
  `itemtypeid` int(11) DEFAULT '0',
  `level` int(11) DEFAULT '0',
  `point` int(11) DEFAULT '0',
  `inserttime` int(11) DEFAULT '0',
  `ownername` varchar(32) DEFAULT NULL,
  `showpoint` tinyint(4) DEFAULT '0',
  `showownername` tinyint(4) DEFAULT '0',
  `data` blob,
  PRIMARY KEY (`dbid`),
  KEY `point` (`point`),
  KEY `inserttime` (`inserttime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_gift`
CREATE TABLE `t_gift` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recvid` bigint(21) DEFAULT '0',
  `recvname` varchar(32) DEFAULT NULL,
  `sendername` varchar(32) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `gifts` text,
  `deleted` tinyint(4) DEFAULT '0',
  `deltime` int(11) DEFAULT '0',
  `createtime` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `recvid` (`recvid`),
  KEY `deleted` (`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_guild_kill_record`
CREATE TABLE `t_guild_kill_record` (
  `id` bigint(21) NOT NULL DEFAULT '0',
  `name` varchar(32) DEFAULT NULL,
  `agname` varchar(32) DEFAULT NULL,
  `killusercnt` int(11) DEFAULT '0',
  `bekilledusercnt` int(11) DEFAULT '0',
  `data` blob,
  PRIMARY KEY (`id`),
  KEY `killusercnt` (`killusercnt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_guild_war_pair`
CREATE TABLE `t_guild_war_pair` (
  `guildid` bigint(21) NOT NULL DEFAULT '0',
  `guildname` varchar(32) DEFAULT NULL,
  `guildlev` int(11) DEFAULT '0',
  `decguildid` bigint(21) DEFAULT '0',
  `decguildname` varchar(32) DEFAULT NULL,
  `decguildlev` int(11) DEFAULT '0',
  `dectime` int(11) DEFAULT '0',
  PRIMARY KEY (`guildid`),
  KEY `dectime` (`dectime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_main_trump_rank`
CREATE TABLE `t_main_trump_rank` (
  `dbid` bigint(21) NOT NULL DEFAULT '0',
  `ownerdbid` bigint(21) DEFAULT '0',
  `itemtypeid` int(11) DEFAULT '0',
  `level` int(11) DEFAULT '0',
  `point` int(11) DEFAULT '0',
  `inserttime` int(11) DEFAULT '0',
  `ownername` varchar(32) DEFAULT NULL,
  `showpoint` tinyint(4) DEFAULT '0',
  `showownername` tinyint(4) DEFAULT '0',
  `data` blob,
  PRIMARY KEY (`dbid`),
  KEY `point` (`point`),
  KEY `inserttime` (`inserttime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_murder`
CREATE TABLE `t_murder` (
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
  `rewardpoint` int(11) DEFAULT '0',
  PRIMARY KEY (`dbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_pve_rank`
CREATE TABLE `t_pve_rank` (
  `rank` int(11) NOT NULL DEFAULT '0',
  `name` varchar(32) DEFAULT NULL,
  `party` int(11) DEFAULT '0',
  `level` int(11) DEFAULT '0',
  `guild` varchar(32) DEFAULT NULL,
  `point` int(11) DEFAULT '0',
  PRIMARY KEY (`rank`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_storage_item`
CREATE TABLE `t_storage_item` (
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
  `forcedeltime` int(11) DEFAULT '0',
  PRIMARY KEY (`storageitemid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_student`
CREATE TABLE `t_student` (
  `studentdbid` bigint(21) NOT NULL DEFAULT '0',
  `teacherdbid` bigint(21) DEFAULT '0',
  `studentname` varchar(32) DEFAULT NULL,
  `studentlev` int(11) DEFAULT '0',
  `studentparty` int(11) DEFAULT '0',
  `reportlev` int(11) DEFAULT '0',
  `state` int(11) DEFAULT '0',
  `enterschooltime` int(11) DEFAULT '0',
  `lastreporttime` int(11) DEFAULT '0',
  PRIMARY KEY (`studentdbid`),
  KEY `teacherdbid` (`teacherdbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_teacher`
CREATE TABLE `t_teacher` (
  `teacherdbid` bigint(21) NOT NULL DEFAULT '0',
  `teachername` varchar(32) DEFAULT NULL,
  `teacherlev` int(11) DEFAULT '0',
  `teacherparty` int(11) DEFAULT '0',
  `totalreportgrade` int(11) DEFAULT '0',
  PRIMARY KEY (`teacherdbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_user`
CREATE TABLE `t_user` (
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
  `data` blob,
  PRIMARY KEY (`dbid`),
  UNIQUE KEY `name` (`name`),
  KEY `accountid` (`accountid`),
  KEY `totalexp` (`totalexp`),
  KEY `totalgodexp` (`totalgodexp`),
  KEY `deleted` (`deleted`),
  KEY `level` (`level`),
  KEY `lastupdatetime` (`lastupdatetime`),
  KEY `pvpscore` (`pvpscore`),
  KEY `pvescore` (`pvescore`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_user_dungeon_team`
CREATE TABLE `t_user_dungeon_team` (
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
  `touchtime` int(11) DEFAULT '0',
  PRIMARY KEY (`dbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_user_guild`
CREATE TABLE `t_user_guild` (
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
  `bundguild` blob,
  PRIMARY KEY (`guildid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_user_guild_terr`
CREATE TABLE `t_user_guild_terr` (
  `guildid` bigint(21) NOT NULL DEFAULT '0',
  `deleted` tinyint(4) DEFAULT '0',
  `exp` int(11) DEFAULT '0',
  `money` int(11) DEFAULT '0',
  `lumber` int(11) DEFAULT '0',
  `guildpoints` int(11) DEFAULT '0',
  `building` blob,
  `bank` blob,
  `bankhistory` blob,
  PRIMARY KEY (`guildid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_user_mail`
CREATE TABLE `t_user_mail` (
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
  `para2` int(11) DEFAULT '0',
  PRIMARY KEY (`mailid`),
  KEY `senderid` (`senderid`),
  KEY `recvid` (`recvid`),
  KEY `starttime` (`starttime`),
  KEY `deleted` (`deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_vars`
CREATE TABLE `t_vars` (
  `name` varchar(64) NOT NULL DEFAULT '',
  `type` varchar(32) DEFAULT NULL,
  `value` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_war_area`
CREATE TABLE `t_war_area` (
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
  `door` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Database: `db_misc`
--
CREATE DATABASE IF NOT EXISTS `db_misc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_misc`;

-- Structure for table `file_checksums`
CREATE TABLE `file_checksums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_path` varchar(255) NOT NULL,
  `md5_checksum` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Structure for table `t_case_answers`
CREATE TABLE `t_case_answers` (
  `answerID` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL DEFAULT '0',
  `answer` text NOT NULL,
  `answerHighlight` enum('Admin','GameMaster','User') NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`answerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_case_attachments`
CREATE TABLE `t_case_attachments` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `attachment` text NOT NULL,
  `addedBy` int(11) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_cases`
CREATE TABLE `t_cases` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `creatorAccountID` int(11) NOT NULL,
  `AccountName` varchar(62) DEFAULT NULL,
  `title` varchar(62) NOT NULL,
  `content` text NOT NULL,
  `reason` varchar(32) NOT NULL,
  `priority` char(10) NOT NULL DEFAULT 'Normal',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Opened','Closed','Pending','Answered') NOT NULL DEFAULT 'Opened',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_cases_close`
CREATE TABLE `t_cases_close` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `creatorAccountID` int(11) NOT NULL,
  `title` varchar(62) NOT NULL,
  `content` text NOT NULL,
  `reason` varchar(32) NOT NULL,
  `priority` char(10) NOT NULL DEFAULT 'Normal',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Opened','Closed','Pending','Answered') NOT NULL DEFAULT 'Opened',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_cmd_logs`
CREATE TABLE `t_cmd_logs` (
  `lid` bigint(22) NOT NULL DEFAULT '0',
  `user` varchar(32) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `addedDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_codes`
CREATE TABLE `t_codes` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(37) NOT NULL,
  `pswd` varchar(42) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `usedTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usedAccount` varchar(65) DEFAULT NULL,
  `gp` int(11) NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_crawl_news`
CREATE TABLE `t_crawl_news` (
  `cid` int(55) NOT NULL AUTO_INCREMENT,
  `Crawl` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_donate`
CREATE TABLE `t_donate` (
  `cid` bigint(21) NOT NULL AUTO_INCREMENT,
  `AccountID` int(11) NOT NULL,
  `AccountName` varchar(32) DEFAULT NULL,
  `sender_name` varchar(62) NOT NULL,
  `sender_number` text NOT NULL,
  `code` varchar(64) NOT NULL,
  `send_money` varchar(32) NOT NULL,
  `send_ecoin` int(11) DEFAULT '0',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(32) DEFAULT NULL,
  `send_receipt` varchar(1200) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_donate_itens`
CREATE TABLE `t_donate_itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(92) NOT NULL,
  `itemID` mediumint(8) NOT NULL,
  `color` varchar(14) NOT NULL DEFAULT 'white',
  `binding` enum('unbinded','binded','bind_pick','bind_equip') NOT NULL DEFAULT 'unbinded',
  `smithing` tinyint(3) NOT NULL DEFAULT '0',
  `level` tinyint(3) NOT NULL DEFAULT '0',
  `amount` tinyint(2) NOT NULL DEFAULT '1',
  `attr` mediumint(8) NOT NULL DEFAULT '0',
  `isSended` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_donation_messages`
CREATE TABLE `t_donation_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donation_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `donation_id` (`donation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Structure for table `t_donations`
CREATE TABLE `t_donations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `sender_mobile` varchar(50) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `credited_points` int(11) DEFAULT '0',
  `screenshot_path` varchar(255) NOT NULL,
  `status` enum('pending','approved','declined') DEFAULT 'pending',
  `decline_reason` varchar(255) DEFAULT NULL,
  `processed_at` timestamp NULL DEFAULT NULL,
  `processed_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transaction_id` (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Structure for table `t_gift_itens`
CREATE TABLE `t_gift_itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(92) NOT NULL,
  `itemID` mediumint(8) NOT NULL,
  `color` varchar(14) NOT NULL DEFAULT 'white',
  `binding` enum('unbinded','binded','bind_pick','bind_equip') NOT NULL DEFAULT 'unbinded',
  `smithing` tinyint(3) NOT NULL DEFAULT '0',
  `level` tinyint(3) NOT NULL DEFAULT '0',
  `amount` tinyint(2) NOT NULL DEFAULT '1',
  `attr` mediumint(8) NOT NULL DEFAULT '0',
  `isSended` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_gift_kills`
CREATE TABLE `t_gift_kills` (
  `kid` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(62) NOT NULL,
  `character` varchar(32) NOT NULL,
  `kills` int(11) NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_gift_ranking`
CREATE TABLE `t_gift_ranking` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `points` int(11) NOT NULL DEFAULT '0',
  `character` varchar(32) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_gift_time`
CREATE TABLE `t_gift_time` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `accountid` int(5) NOT NULL,
  `Name` char(50) NOT NULL,
  `PlayedHours` int(50) NOT NULL,
  `CanConvert` int(50) NOT NULL,
  `ConvertedHours` int(50) NOT NULL,
  `RemainHours` int(50) NOT NULL,
  `Points` int(50) NOT NULL,
  `ClaimedPoints` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Structure for table `t_gift_votes`
CREATE TABLE `t_gift_votes` (
  `vid` bigint(22) NOT NULL AUTO_INCREMENT,
  `accountid` bigint(22) NOT NULL,
  `points` mediumint(8) NOT NULL DEFAULT '10',
  `time` int(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_give_itens`
CREATE TABLE `t_give_itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemName` varchar(92) NOT NULL,
  `link` varchar(92) NOT NULL,
  `Name` varchar(92) NOT NULL,
  `status` enum('Open','Closed','Raffling') NOT NULL DEFAULT 'Open',
  `icon` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Structure for table `t_image_event`
CREATE TABLE `t_image_event` (
  `cid` bigint(21) NOT NULL AUTO_INCREMENT,
  `Image` varchar(1200) DEFAULT NULL,
  `Link` varchar(1200) DEFAULT NULL,
  `Title` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_news`
CREATE TABLE `t_news` (
  `dbid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(52) NOT NULL,
  `poster` varchar(38) NOT NULL DEFAULT 'Frozen Talisman Team',
  `image` varchar(80) DEFAULT NULL,
  `content` text NOT NULL,
  `mainImage` varchar(42) NOT NULL DEFAULT '1.png',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  `displayAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`dbid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_nick_change`
CREATE TABLE `t_nick_change` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accountid` int(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Structure for table `t_password_resets`
CREATE TABLE `t_password_resets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_name` varchar(222) NOT NULL,
  `email` varchar(300) NOT NULL,
  `token` varchar(64) NOT NULL,
  `expires_at` datetime NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_token` (`token`),
  KEY `idx_account` (`account_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Structure for table `t_payment_packages`
CREATE TABLE `t_payment_packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('paypal','gcash') NOT NULL,
  `points` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Structure for table `t_payment_validate`
CREATE TABLE `t_payment_validate` (
  `vid` smallint(6) NOT NULL AUTO_INCREMENT,
  `itemName` varchar(80) NOT NULL,
  `checkName` text NOT NULL,
  `currency` char(10) NOT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `points` int(11) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_payments`
CREATE TABLE `t_payments` (
  `pid` bigint(22) NOT NULL AUTO_INCREMENT,
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
  `paymentID` varchar(50) NOT NULL,
  `Ref` varchar(255) DEFAULT NULL,
  `R_point` int(1) DEFAULT '0',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_paymentsbr`
CREATE TABLE `t_paymentsbr` (
  `pid` bigint(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(69) NOT NULL,
  `accountid` varchar(69) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `banco` enum('Caixa','Bradesco') NOT NULL,
  `des` varchar(90) NOT NULL,
  `email` varchar(102) NOT NULL,
  `points` int(64) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Dispatched','Pedding','Suspended') NOT NULL DEFAULT 'Pedding',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_point_sale`
CREATE TABLE `t_point_sale` (
  `psid` mediumint(8) NOT NULL AUTO_INCREMENT,
  `points` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`psid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_pvp`
CREATE TABLE `t_pvp` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `level` int(2) NOT NULL,
  `class` varchar(15) NOT NULL,
  `guild` varchar(20) NOT NULL,
  `death` int(2) NOT NULL,
  `kills` int(2) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Structure for table `t_reset_itens`
CREATE TABLE `t_reset_itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(92) NOT NULL,
  `itemID` mediumint(8) NOT NULL,
  `color` varchar(14) NOT NULL DEFAULT 'white',
  `binding` enum('unbinded','binded','bind_pick','bind_equip') NOT NULL DEFAULT 'unbinded',
  `smithing` tinyint(3) NOT NULL DEFAULT '0',
  `level` tinyint(3) NOT NULL DEFAULT '0',
  `amount` tinyint(2) NOT NULL DEFAULT '1',
  `attr` mediumint(8) NOT NULL DEFAULT '0',
  `isSended` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_screenshot_views`
CREATE TABLE `t_screenshot_views` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `accountid` bigint(22) NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `accountid` (`accountid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_screenshot_votes`
CREATE TABLE `t_screenshot_votes` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `accountid` bigint(22) NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `accountid` (`accountid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_screenshots`
CREATE TABLE `t_screenshots` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
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
  `displayViewsCount` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_screenshots_comments`
CREATE TABLE `t_screenshots_comments` (
  `cid` bigint(22) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `dbid` bigint(22) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_settings`
CREATE TABLE `t_settings` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `setting` varchar(38) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `use` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `setting` (`setting`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

-- Data for table `t_settings`
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('1', 'PayPal Client ID', 'paypal_client_id', 'test_paypal_id', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('2', 'PayPal Secret', 'paypal_secret', '', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('4', 'GCash Merchant ID', 'gcash_merchant_id', '', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('5', 'GCash API Key', 'gcash_api_key', '', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('6', 'GCash Gateway Status (active/inactive)', 'gcash_status', 'inactive', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('7', 'PayPal Webhook ID', 'paypal_webhook_id', 'WH-123', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('8', 'PayPal Webhook URL', 'paypal_webhook_url', '', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('9', 'GCash Public Key', 'gcash_public_key', '', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('10', 'GCash Secret Key', 'gcash_secret_key', '', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('11', 'GCash Webhook Secret', 'gcash_webhook_secret', 'SK-GCASH-456', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('12', 'GCash Webhook URL', 'gcash_webhook_url', '', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('21', 'Typer Line 1', 'typer_line_1', 'Warriors of World', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('22', 'Typer Line 2', 'typer_line_2', 'Classic Server', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('23', 'Typer Line 3', 'typer_line_3', 'Max Level 40', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('24', 'Typer Line 4', 'typer_line_4', 'Max Combine +10', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('32', 'Theme Primary Color', 'theme_primary_color', '#fcc419', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('33', 'Theme Secondary Color', 'theme_secondary_color', '#2ca4bf', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('34', 'Admin GCash QR URL (Optional)', 'gcash_qr_url', '', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('43', 'Primary Theme Color', 'primary_color', '#fcc419', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('44', 'Secondary Theme Color', 'secondary_color', '#0f172a', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('45', 'Website Title', 'site_title', 'Talisman Online', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('46', 'Footer Copyright Text', 'footer_text', '© 2026 Talisman Online. All rights reserved.', 'Textarea');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('47', 'Hero Section Title', 'hero_title', 'The Journey Begins', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('48', 'Hero Section Description', 'hero_description', 'Experience the most balanced Talisman Online server ever created.', 'Textarea');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('49', 'Facebook Page URL', 'facebook_url', '#', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('50', 'Typer Line 1', 'typerLine1', 'Warriors of World', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('51', 'Typer Line 2', 'typerLine2', 'Classic Server', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('52', 'Typer Line 3', 'typerLine3', 'Max Level 40', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('53', 'Typer Line 4', 'typerLine4', 'Max Combine +10', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('54', 'Download 1 Title', 'dl_title_1', 'Google Drive', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('55', 'Download 1 URL', 'dl_url_1', '#', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('56', 'Download 2 Title', 'dl_title_2', 'Mediafire', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('57', 'Download 2 URL', 'dl_url_2', '#', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('58', 'Download 3 Title', 'dl_title_3', 'Mega.nz', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('59', 'Download 3 URL', 'dl_url_3', '#', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('60', 'GCash Number', 'gcash_number', '09123456789', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('61', 'GCash Account Name', 'gcash_name', 'Server Admin', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('62', 'PayPal Mode', 'paypal_mode', 'sandbox', 'Input');
INSERT INTO `t_settings` (`sid`, `title`, `setting`, `value`, `use`) VALUES ('63', 'gcash_qr', 'gcash_qr', 'uploads/gcash/gcash_qr_1777135509.png', 'Input');

-- Structure for table `t_shop_itens`
CREATE TABLE `t_shop_itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `objectID` int(11) NOT NULL,
  `itemName` varchar(92) NOT NULL,
  `itemDescription` text NOT NULL,
  `points` mediumint(8) NOT NULL,
  `shopType` enum('VPoint','ECoin','Both') NOT NULL DEFAULT 'Both',
  `icon` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Structure for table `t_shop_objects`
CREATE TABLE `t_shop_objects` (
  `objectID` int(11) NOT NULL AUTO_INCREMENT,
  `itemID` mediumint(8) NOT NULL,
  `color` varchar(14) NOT NULL DEFAULT 'white',
  `binding` enum('unbinded','binded','bind_pick','bind_equip') NOT NULL DEFAULT 'unbinded',
  `smithing` tinyint(3) NOT NULL DEFAULT '0',
  `level` tinyint(3) NOT NULL DEFAULT '0',
  `amount` tinyint(2) NOT NULL DEFAULT '1',
  `attr` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`objectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_shop_package_itens`
CREATE TABLE `t_shop_package_itens` (
  `pid` smallint(6) NOT NULL,
  `objectID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_shop_packages`
CREATE TABLE `t_shop_packages` (
  `pid` smallint(6) NOT NULL AUTO_INCREMENT,
  `packageName` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `points` mediumint(8) NOT NULL,
  `shopType` enum('Gift','Donate','Both') NOT NULL DEFAULT 'Both',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_slider_images`
CREATE TABLE `t_slider_images` (
  `imageID` smallint(6) NOT NULL AUTO_INCREMENT,
  `imagePath` varchar(90) NOT NULL,
  `title` varchar(106) NOT NULL,
  `redirectTo` varchar(106) NOT NULL DEFAULT '#',
  PRIMARY KEY (`imageID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_smtp_settings`
CREATE TABLE `t_smtp_settings` (
  `setting_key` varchar(100) NOT NULL,
  `setting_value` text,
  PRIMARY KEY (`setting_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data for table `t_smtp_settings`

-- Structure for table `t_staff_hide`
CREATE TABLE `t_staff_hide` (
  `hid` smallint(6) NOT NULL AUTO_INCREMENT,
  `account` varchar(32) NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_update_files`
CREATE TABLE `t_update_files` (
  `fid` bigint(22) NOT NULL AUTO_INCREMENT,
  `signature` varchar(64) NOT NULL,
  `remote` text NOT NULL,
  `local` text NOT NULL,
  `released` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_updates`
CREATE TABLE `t_updates` (
  `uid` mediumint(8) NOT NULL AUTO_INCREMENT,
  `signature` varchar(52) NOT NULL,
  `fromVersion` int(11) NOT NULL,
  `toVersion` int(11) NOT NULL,
  `released` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `UNIQUE INDEX` (`toVersion`,`fromVersion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_war`
CREATE TABLE `t_war` (
  `id` bigint(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(69) NOT NULL,
  `guild` varchar(53) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Structure for table `t_website_lottery_draws`
CREATE TABLE `t_website_lottery_draws` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `winner_username` varchar(50) NOT NULL,
  `prize_amount` int(11) NOT NULL,
  `total_pool` int(11) NOT NULL,
  `drawn_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Structure for table `t_website_lottery_entries`
CREATE TABLE `t_website_lottery_entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `ticket_count` int(11) NOT NULL DEFAULT '1',
  `draw_id` int(11) DEFAULT NULL,
  `tickets` int(11) NOT NULL DEFAULT '1',
  `purchased_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Structure for table `t_website_minigame_logs`
CREATE TABLE `t_website_minigame_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `game_key` varchar(50) NOT NULL,
  `cost` int(11) NOT NULL,
  `won` int(11) NOT NULL,
  `prize_name` varchar(100) NOT NULL,
  `played_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=latin1;

-- Structure for table `t_website_minigames`
CREATE TABLE `t_website_minigames` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_key` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL DEFAULT '0',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `config_json` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `game_key` (`game_key`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Structure for table `t_website_options`
CREATE TABLE `t_website_options` (
  `option_name` varchar(100) NOT NULL,
  `option_value` varchar(255) NOT NULL,
  PRIMARY KEY (`option_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data for table `t_website_options`
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('adv_email_visible', '1');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('adv_feedback_visible', '0');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('adv_nick_visible', '0');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('adv_pwd_visible', '0');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('adv_redeem_visible', '0');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('adv_referral_visible', '0');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('adv_tickets_visible', '1');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('adv_vip_visible', '0');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('currency_name', 'T-Points');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('currency_short', 'TP');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('enforce_single_session', '0');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('gcash_enabled', '1');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('menu_advanced_visible', '1');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('menu_characters_visible', '1');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('menu_donations_visible', '1');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('menu_rewards_visible', '1');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('menu_security_visible', '1');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('paypal_enabled', '1');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('paypal_mode', 'sandbox');
INSERT INTO `t_website_options` (`option_name`, `option_value`) VALUES ('test_persist', '123');

