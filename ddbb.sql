CREATE TABLE `rrd_min` (
  `rrd_key` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attribute_key` int(10) unsigned NOT NULL DEFAULT '0',
  `start_utime` int(10) unsigned NOT NULL DEFAULT '0',
  `logging_interval` int(10) unsigned NOT NULL DEFAULT '0',
  `GAL` bigint(20) unsigned NOT NULL DEFAULT '0',
  `AST` bigint(20) unsigned DEFAULT '0',
  `CAB` bigint(20) unsigned DEFAULT '0',
  `UVA` bigint(20) unsigned DEFAULT '0',
  `CYL` bigint(20) unsigned DEFAULT '0',
  `PAV` bigint(20) unsigned DEFAULT '0',
  `NAV` bigint(20) unsigned DEFAULT '0',
  `RIO` bigint(20) unsigned DEFAULT '0',
  `UNIZAR` bigint(20) unsigned DEFAULT '0',
  `ARA` bigint(20) unsigned DEFAULT '0',
  `CAT` bigint(20) unsigned DEFAULT '0',
  `CIEMAT` bigint(20) unsigned DEFAULT '0',
  `TELMAD` bigint(20) unsigned DEFAULT '0',
  `MAD` bigint(20) unsigned DEFAULT '0',
  `BAL` bigint(20) unsigned DEFAULT '0',
  `UIB` bigint(20) unsigned DEFAULT '0',
  `UV` bigint(20) unsigned DEFAULT '0',
  `EXT` bigint(20) unsigned DEFAULT '0',
  `CLM` bigint(20) unsigned DEFAULT '0',
  `VAL` bigint(20) unsigned DEFAULT '0',
  `MUR` bigint(20) unsigned DEFAULT '0',
  `AND` bigint(20) unsigned DEFAULT '0',
  `CICA` bigint(20) unsigned DEFAULT '0',
  `CAN-L` bigint(20) unsigned DEFAULT '0',
  `ULPGC` bigint(20) unsigned DEFAULT '0',
  `IAC` bigint(20) unsigned DEFAULT '0',
  `CAN-T` bigint(20) unsigned DEFAULT '0',
  `GAL-UVA` bigint(20) unsigned DEFAULT '0',
  `AST-UVA` bigint(20) unsigned DEFAULT '0',
  `CAB-UVA` bigint(20) unsigned DEFAULT '0',
  `PAV-UVA` bigint(20) unsigned DEFAULT '0',
  `PAV-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `RIO-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `NAV-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `ARA-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `CAT-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `CAT-UV` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-UVA` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-GAL` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-RIO` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-PAV` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-NAV` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-ARA` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-CAT` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-UB` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-TELMAD` bigint(20) unsigned DEFAULT '0',
  `UVA-CYL` bigint(20) unsigned DEFAULT '0',
  `UVA-GAL` bigint(20) unsigned DEFAULT '0',
  `UVA-AST` bigint(20) unsigned DEFAULT '0',
  `UVA-CAB` bigint(20) unsigned DEFAULT '0',
  `UVA-PAV` bigint(20) unsigned DEFAULT '0',
  `UVA-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `UVA-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `CYL-UVA` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-TELMAD` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-MAD` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-CLM` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-CICA` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-EXT` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-IAC` bigint(20) unsigned DEFAULT '0',
  `TELMAD-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `TELMAD-IAC` bigint(20) unsigned DEFAULT '0',
  `TELMAD-MAD` bigint(20) unsigned DEFAULT '0',
  `TELMAD-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `TELMAD-UV` bigint(20) unsigned DEFAULT '0',
  `MAD-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `MAD-TELMAD` bigint(20) unsigned DEFAULT '0',
  `UB-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `UB-BAL` bigint(20) unsigned DEFAULT '0',
  `UB-UV` bigint(20) unsigned DEFAULT '0',
  `BAL-UB` bigint(20) unsigned DEFAULT '0',
  `UV-TELMAD` bigint(20) unsigned DEFAULT '0',
  `UV-CAT` bigint(20) unsigned DEFAULT '0',
  `UV-UB` bigint(20) unsigned DEFAULT '0',
  `UV-VAL` bigint(20) unsigned DEFAULT '0',
  `UV-MUR` bigint(20) unsigned DEFAULT '0',
  `UV-AND` bigint(20) unsigned DEFAULT '0',
  `UV-CICA` bigint(20) unsigned DEFAULT '0',
  `VAL-UV` bigint(20) unsigned DEFAULT '0',
  `MUR-UV` bigint(20) unsigned DEFAULT '0',
  `MUR-CICA` bigint(20) unsigned DEFAULT '0',
  `CLM-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `AND-CICA` bigint(20) unsigned DEFAULT '0',
  `AND-UV` bigint(20) unsigned DEFAULT '0',
  `CICA-EXT` bigint(20) unsigned DEFAULT '0',
  `CICA-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `CICA-UV` bigint(20) unsigned DEFAULT '0',
  `CICA-AND` bigint(20) unsigned DEFAULT '0',
  `CICA-MUR` bigint(20) unsigned DEFAULT '0',
  `CICA-ULPGC` bigint(20) unsigned DEFAULT '0',
  `EXT-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `EXT-CICA` bigint(20) unsigned DEFAULT '0',
  `CAN-L-ULPGC` bigint(20) unsigned DEFAULT '0',
  `ULPGC-CAN-L` bigint(20) unsigned DEFAULT '0',
  `ULPGC-CICA` bigint(20) unsigned DEFAULT '0',
  `ULPGC-IAC` bigint(20) unsigned DEFAULT '0',
  `IAC-ULPGC` bigint(20) unsigned DEFAULT '0',
  `IAC-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `IAC-TELMAD` bigint(20) unsigned DEFAULT '0',
  `IAC-CAN-T` bigint(20) unsigned DEFAULT '0',
  `CAN-T-IAC` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`rrd_key`),
  UNIQUE KEY `attribute_key` (`attribute_key`,`start_utime`),
  KEY `start_time` (`start_utime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 MAX_ROWS=60 ROW_FORMAT=FIXED;

CREATE TABLE `rrd_min_key` (
  `rrd_key` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`rrd_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `rrd_min_key` VALUES (0);

CREATE TABLE `rrd_hour` (
  `rrd_key` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attribute_key` int(10) unsigned NOT NULL DEFAULT '0',
  `start_utime` int(10) unsigned NOT NULL DEFAULT '0',
  `logging_interval` int(10) unsigned NOT NULL DEFAULT '0',
  `GAL` bigint(20) unsigned NOT NULL DEFAULT '0',
  `AST` bigint(20) unsigned DEFAULT '0',
  `CAB` bigint(20) unsigned DEFAULT '0',
  `UVA` bigint(20) unsigned DEFAULT '0',
  `CYL` bigint(20) unsigned DEFAULT '0',
  `PAV` bigint(20) unsigned DEFAULT '0',
  `NAV` bigint(20) unsigned DEFAULT '0',
  `RIO` bigint(20) unsigned DEFAULT '0',
  `UNIZAR` bigint(20) unsigned DEFAULT '0',
  `ARA` bigint(20) unsigned DEFAULT '0',
  `CAT` bigint(20) unsigned DEFAULT '0',
  `CIEMAT` bigint(20) unsigned DEFAULT '0',
  `TELMAD` bigint(20) unsigned DEFAULT '0',
  `MAD` bigint(20) unsigned DEFAULT '0',
  `BAL` bigint(20) unsigned DEFAULT '0',
  `UIB` bigint(20) unsigned DEFAULT '0',
  `UV` bigint(20) unsigned DEFAULT '0',
  `EXT` bigint(20) unsigned DEFAULT '0',
  `CLM` bigint(20) unsigned DEFAULT '0',
  `VAL` bigint(20) unsigned DEFAULT '0',
  `MUR` bigint(20) unsigned DEFAULT '0',
  `AND` bigint(20) unsigned DEFAULT '0',
  `CICA` bigint(20) unsigned DEFAULT '0',
  `CAN-L` bigint(20) unsigned DEFAULT '0',
  `ULPGC` bigint(20) unsigned DEFAULT '0',
  `IAC` bigint(20) unsigned DEFAULT '0',
  `CAN-T` bigint(20) unsigned DEFAULT '0',
  `GAL-UVA` bigint(20) unsigned DEFAULT '0',
  `AST-UVA` bigint(20) unsigned DEFAULT '0',
  `CAB-UVA` bigint(20) unsigned DEFAULT '0',
  `PAV-UVA` bigint(20) unsigned DEFAULT '0',
  `PAV-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `RIO-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `NAV-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `ARA-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `CAT-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `CAT-UV` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-UVA` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-GAL` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-RIO` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-PAV` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-NAV` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-ARA` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-CAT` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-UB` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-TELMAD` bigint(20) unsigned DEFAULT '0',
  `UVA-CYL` bigint(20) unsigned DEFAULT '0',
  `UVA-GAL` bigint(20) unsigned DEFAULT '0',
  `UVA-AST` bigint(20) unsigned DEFAULT '0',
  `UVA-CAB` bigint(20) unsigned DEFAULT '0',
  `UVA-PAV` bigint(20) unsigned DEFAULT '0',
  `UVA-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `UVA-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `CYL-UVA` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-TELMAD` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-MAD` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-CLM` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-CICA` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-EXT` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-IAC` bigint(20) unsigned DEFAULT '0',
  `TELMAD-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `TELMAD-IAC` bigint(20) unsigned DEFAULT '0',
  `TELMAD-MAD` bigint(20) unsigned DEFAULT '0',
  `TELMAD-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `TELMAD-UV` bigint(20) unsigned DEFAULT '0',
  `MAD-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `MAD-TELMAD` bigint(20) unsigned DEFAULT '0',
  `UB-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `UB-BAL` bigint(20) unsigned DEFAULT '0',
  `UB-UV` bigint(20) unsigned DEFAULT '0',
  `BAL-UB` bigint(20) unsigned DEFAULT '0',
  `UV-TELMAD` bigint(20) unsigned DEFAULT '0',
  `UV-CAT` bigint(20) unsigned DEFAULT '0',
  `UV-UB` bigint(20) unsigned DEFAULT '0',
  `UV-VAL` bigint(20) unsigned DEFAULT '0',
  `UV-MUR` bigint(20) unsigned DEFAULT '0',
  `UV-AND` bigint(20) unsigned DEFAULT '0',
  `UV-CICA` bigint(20) unsigned DEFAULT '0',
  `VAL-UV` bigint(20) unsigned DEFAULT '0',
  `MUR-UV` bigint(20) unsigned DEFAULT '0',
  `MUR-CICA` bigint(20) unsigned DEFAULT '0',
  `CLM-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `AND-CICA` bigint(20) unsigned DEFAULT '0',
  `AND-UV` bigint(20) unsigned DEFAULT '0',
  `CICA-EXT` bigint(20) unsigned DEFAULT '0',
  `CICA-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `CICA-UV` bigint(20) unsigned DEFAULT '0',
  `CICA-AND` bigint(20) unsigned DEFAULT '0',
  `CICA-MUR` bigint(20) unsigned DEFAULT '0',
  `CICA-ULPGC` bigint(20) unsigned DEFAULT '0',
  `EXT-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `EXT-CICA` bigint(20) unsigned DEFAULT '0',
  `CAN-L-ULPGC` bigint(20) unsigned DEFAULT '0',
  `ULPGC-CAN-L` bigint(20) unsigned DEFAULT '0',
  `ULPGC-CICA` bigint(20) unsigned DEFAULT '0',
  `ULPGC-IAC` bigint(20) unsigned DEFAULT '0',
  `IAC-ULPGC` bigint(20) unsigned DEFAULT '0',
  `IAC-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `IAC-TELMAD` bigint(20) unsigned DEFAULT '0',
  `IAC-CAN-T` bigint(20) unsigned DEFAULT '0',
  `CAN-T-IAC` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`rrd_key`),
  UNIQUE KEY `attribute_key` (`attribute_key`,`start_utime`),
  KEY `start_time` (`start_utime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 MAX_ROWS=24 ROW_FORMAT=FIXED;

CREATE TABLE `rrd_hour_key` (
  `rrd_key` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`rrd_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `rrd_hour_key` VALUES (0);

CREATE TABLE `rrd_day` (
  `rrd_key` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attribute_key` int(10) unsigned NOT NULL DEFAULT '0',
  `start_utime` int(10) unsigned NOT NULL DEFAULT '0',
  `logging_interval` int(10) unsigned NOT NULL DEFAULT '0',
  `GAL` bigint(20) unsigned NOT NULL DEFAULT '0',
  `AST` bigint(20) unsigned DEFAULT '0',
  `CAB` bigint(20) unsigned DEFAULT '0',
  `UVA` bigint(20) unsigned DEFAULT '0',
  `CYL` bigint(20) unsigned DEFAULT '0',
  `PAV` bigint(20) unsigned DEFAULT '0',
  `NAV` bigint(20) unsigned DEFAULT '0',
  `RIO` bigint(20) unsigned DEFAULT '0',
  `UNIZAR` bigint(20) unsigned DEFAULT '0',
  `ARA` bigint(20) unsigned DEFAULT '0',
  `CAT` bigint(20) unsigned DEFAULT '0',
  `CIEMAT` bigint(20) unsigned DEFAULT '0',
  `TELMAD` bigint(20) unsigned DEFAULT '0',
  `MAD` bigint(20) unsigned DEFAULT '0',
  `BAL` bigint(20) unsigned DEFAULT '0',
  `UIB` bigint(20) unsigned DEFAULT '0',
  `UV` bigint(20) unsigned DEFAULT '0',
  `EXT` bigint(20) unsigned DEFAULT '0',
  `CLM` bigint(20) unsigned DEFAULT '0',
  `VAL` bigint(20) unsigned DEFAULT '0',
  `MUR` bigint(20) unsigned DEFAULT '0',
  `AND` bigint(20) unsigned DEFAULT '0',
  `CICA` bigint(20) unsigned DEFAULT '0',
  `CAN-L` bigint(20) unsigned DEFAULT '0',
  `ULPGC` bigint(20) unsigned DEFAULT '0',
  `IAC` bigint(20) unsigned DEFAULT '0',
  `CAN-T` bigint(20) unsigned DEFAULT '0',
  `GAL-UVA` bigint(20) unsigned DEFAULT '0',
  `AST-UVA` bigint(20) unsigned DEFAULT '0',
  `CAB-UVA` bigint(20) unsigned DEFAULT '0',
  `PAV-UVA` bigint(20) unsigned DEFAULT '0',
  `PAV-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `RIO-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `NAV-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `ARA-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `CAT-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `CAT-UV` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-UVA` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-GAL` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-RIO` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-PAV` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-NAV` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-ARA` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-CAT` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-UB` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-TELMAD` bigint(20) unsigned DEFAULT '0',
  `UVA-CYL` bigint(20) unsigned DEFAULT '0',
  `UVA-GAL` bigint(20) unsigned DEFAULT '0',
  `UVA-AST` bigint(20) unsigned DEFAULT '0',
  `UVA-CAB` bigint(20) unsigned DEFAULT '0',
  `UVA-PAV` bigint(20) unsigned DEFAULT '0',
  `UVA-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `UVA-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `CYL-UVA` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-TELMAD` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-MAD` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-CLM` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-CICA` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-EXT` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-IAC` bigint(20) unsigned DEFAULT '0',
  `TELMAD-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `TELMAD-IAC` bigint(20) unsigned DEFAULT '0',
  `TELMAD-MAD` bigint(20) unsigned DEFAULT '0',
  `TELMAD-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `TELMAD-UV` bigint(20) unsigned DEFAULT '0',
  `MAD-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `MAD-TELMAD` bigint(20) unsigned DEFAULT '0',
  `UB-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `UB-BAL` bigint(20) unsigned DEFAULT '0',
  `UB-UV` bigint(20) unsigned DEFAULT '0',
  `BAL-UB` bigint(20) unsigned DEFAULT '0',
  `UV-TELMAD` bigint(20) unsigned DEFAULT '0',
  `UV-CAT` bigint(20) unsigned DEFAULT '0',
  `UV-UB` bigint(20) unsigned DEFAULT '0',
  `UV-VAL` bigint(20) unsigned DEFAULT '0',
  `UV-MUR` bigint(20) unsigned DEFAULT '0',
  `UV-AND` bigint(20) unsigned DEFAULT '0',
  `UV-CICA` bigint(20) unsigned DEFAULT '0',
  `VAL-UV` bigint(20) unsigned DEFAULT '0',
  `MUR-UV` bigint(20) unsigned DEFAULT '0',
  `MUR-CICA` bigint(20) unsigned DEFAULT '0',
  `CLM-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `AND-CICA` bigint(20) unsigned DEFAULT '0',
  `AND-UV` bigint(20) unsigned DEFAULT '0',
  `CICA-EXT` bigint(20) unsigned DEFAULT '0',
  `CICA-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `CICA-UV` bigint(20) unsigned DEFAULT '0',
  `CICA-AND` bigint(20) unsigned DEFAULT '0',
  `CICA-MUR` bigint(20) unsigned DEFAULT '0',
  `CICA-ULPGC` bigint(20) unsigned DEFAULT '0',
  `EXT-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `EXT-CICA` bigint(20) unsigned DEFAULT '0',
  `CAN-L-ULPGC` bigint(20) unsigned DEFAULT '0',
  `ULPGC-CAN-L` bigint(20) unsigned DEFAULT '0',
  `ULPGC-CICA` bigint(20) unsigned DEFAULT '0',
  `ULPGC-IAC` bigint(20) unsigned DEFAULT '0',
  `IAC-ULPGC` bigint(20) unsigned DEFAULT '0',
  `IAC-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `IAC-TELMAD` bigint(20) unsigned DEFAULT '0',
  `IAC-CAN-T` bigint(20) unsigned DEFAULT '0',
  `CAN-T-IAC` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`rrd_key`),
  UNIQUE KEY `attribute_key` (`attribute_key`,`start_utime`),
  KEY `start_time` (`start_utime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 MAX_ROWS=31 ROW_FORMAT=FIXED;

CREATE TABLE `rrd_day_key` (
  `rrd_key` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`rrd_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `rrd_day_key` VALUES (0);

CREATE TABLE `rrd_month` (
  `rrd_key` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attribute_key` int(10) unsigned NOT NULL DEFAULT '0',
  `start_utime` int(10) unsigned NOT NULL DEFAULT '0',
  `logging_interval` int(10) unsigned NOT NULL DEFAULT '0',
  `GAL` bigint(20) unsigned NOT NULL DEFAULT '0',
  `AST` bigint(20) unsigned DEFAULT '0',
  `CAB` bigint(20) unsigned DEFAULT '0',
  `UVA` bigint(20) unsigned DEFAULT '0',
  `CYL` bigint(20) unsigned DEFAULT '0',
  `PAV` bigint(20) unsigned DEFAULT '0',
  `NAV` bigint(20) unsigned DEFAULT '0',
  `RIO` bigint(20) unsigned DEFAULT '0',
  `UNIZAR` bigint(20) unsigned DEFAULT '0',
  `ARA` bigint(20) unsigned DEFAULT '0',
  `CAT` bigint(20) unsigned DEFAULT '0',
  `CIEMAT` bigint(20) unsigned DEFAULT '0',
  `TELMAD` bigint(20) unsigned DEFAULT '0',
  `MAD` bigint(20) unsigned DEFAULT '0',
  `BAL` bigint(20) unsigned DEFAULT '0',
  `UIB` bigint(20) unsigned DEFAULT '0',
  `UV` bigint(20) unsigned DEFAULT '0',
  `EXT` bigint(20) unsigned DEFAULT '0',
  `CLM` bigint(20) unsigned DEFAULT '0',
  `VAL` bigint(20) unsigned DEFAULT '0',
  `MUR` bigint(20) unsigned DEFAULT '0',
  `AND` bigint(20) unsigned DEFAULT '0',
  `CICA` bigint(20) unsigned DEFAULT '0',
  `CAN-L` bigint(20) unsigned DEFAULT '0',
  `ULPGC` bigint(20) unsigned DEFAULT '0',
  `IAC` bigint(20) unsigned DEFAULT '0',
  `CAN-T` bigint(20) unsigned DEFAULT '0',
  `GAL-UVA` bigint(20) unsigned DEFAULT '0',
  `AST-UVA` bigint(20) unsigned DEFAULT '0',
  `CAB-UVA` bigint(20) unsigned DEFAULT '0',
  `PAV-UVA` bigint(20) unsigned DEFAULT '0',
  `PAV-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `RIO-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `NAV-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `ARA-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `CAT-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `CAT-UV` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-UVA` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-GAL` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-RIO` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-PAV` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-NAV` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-ARA` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-CAT` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-UB` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-TELMAD` bigint(20) unsigned DEFAULT '0',
  `UVA-CYL` bigint(20) unsigned DEFAULT '0',
  `UVA-GAL` bigint(20) unsigned DEFAULT '0',
  `UVA-AST` bigint(20) unsigned DEFAULT '0',
  `UVA-CAB` bigint(20) unsigned DEFAULT '0',
  `UVA-PAV` bigint(20) unsigned DEFAULT '0',
  `UVA-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `UVA-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `CYL-UVA` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-TELMAD` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-MAD` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-CLM` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-CICA` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-EXT` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-IAC` bigint(20) unsigned DEFAULT '0',
  `TELMAD-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `TELMAD-IAC` bigint(20) unsigned DEFAULT '0',
  `TELMAD-MAD` bigint(20) unsigned DEFAULT '0',
  `TELMAD-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `TELMAD-UV` bigint(20) unsigned DEFAULT '0',
  `MAD-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `MAD-TELMAD` bigint(20) unsigned DEFAULT '0',
  `UB-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `UB-BAL` bigint(20) unsigned DEFAULT '0',
  `UB-UV` bigint(20) unsigned DEFAULT '0',
  `BAL-UB` bigint(20) unsigned DEFAULT '0',
  `UV-TELMAD` bigint(20) unsigned DEFAULT '0',
  `UV-CAT` bigint(20) unsigned DEFAULT '0',
  `UV-UB` bigint(20) unsigned DEFAULT '0',
  `UV-VAL` bigint(20) unsigned DEFAULT '0',
  `UV-MUR` bigint(20) unsigned DEFAULT '0',
  `UV-AND` bigint(20) unsigned DEFAULT '0',
  `UV-CICA` bigint(20) unsigned DEFAULT '0',
  `VAL-UV` bigint(20) unsigned DEFAULT '0',
  `MUR-UV` bigint(20) unsigned DEFAULT '0',
  `MUR-CICA` bigint(20) unsigned DEFAULT '0',
  `CLM-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `AND-CICA` bigint(20) unsigned DEFAULT '0',
  `AND-UV` bigint(20) unsigned DEFAULT '0',
  `CICA-EXT` bigint(20) unsigned DEFAULT '0',
  `CICA-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `CICA-UV` bigint(20) unsigned DEFAULT '0',
  `CICA-AND` bigint(20) unsigned DEFAULT '0',
  `CICA-MUR` bigint(20) unsigned DEFAULT '0',
  `CICA-ULPGC` bigint(20) unsigned DEFAULT '0',
  `EXT-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `EXT-CICA` bigint(20) unsigned DEFAULT '0',
  `CAN-L-ULPGC` bigint(20) unsigned DEFAULT '0',
  `ULPGC-CAN-L` bigint(20) unsigned DEFAULT '0',
  `ULPGC-CICA` bigint(20) unsigned DEFAULT '0',
  `ULPGC-IAC` bigint(20) unsigned DEFAULT '0',
  `IAC-ULPGC` bigint(20) unsigned DEFAULT '0',
  `IAC-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `IAC-TELMAD` bigint(20) unsigned DEFAULT '0',
  `IAC-CAN-T` bigint(20) unsigned DEFAULT '0',
  `CAN-T-IAC` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`rrd_key`),
  UNIQUE KEY `attribute_key` (`attribute_key`,`start_utime`),
  KEY `start_time` (`start_utime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 MAX_ROWS=12 ROW_FORMAT=FIXED;

CREATE TABLE `rrd_month_key` (
  `rrd_key` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`rrd_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `rrd_month_key` VALUES (0);

CREATE TABLE `rrd_year` (
  `rrd_key` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attribute_key` int(10) unsigned NOT NULL DEFAULT '0',
  `start_utime` int(10) unsigned NOT NULL DEFAULT '0',
  `logging_interval` int(10) unsigned NOT NULL DEFAULT '0',
  `GAL` bigint(20) unsigned NOT NULL DEFAULT '0',
  `AST` bigint(20) unsigned DEFAULT '0',
  `CAB` bigint(20) unsigned DEFAULT '0',
  `UVA` bigint(20) unsigned DEFAULT '0',
  `CYL` bigint(20) unsigned DEFAULT '0',
  `PAV` bigint(20) unsigned DEFAULT '0',
  `NAV` bigint(20) unsigned DEFAULT '0',
  `RIO` bigint(20) unsigned DEFAULT '0',
  `UNIZAR` bigint(20) unsigned DEFAULT '0',
  `ARA` bigint(20) unsigned DEFAULT '0',
  `CAT` bigint(20) unsigned DEFAULT '0',
  `CIEMAT` bigint(20) unsigned DEFAULT '0',
  `TELMAD` bigint(20) unsigned DEFAULT '0',
  `MAD` bigint(20) unsigned DEFAULT '0',
  `BAL` bigint(20) unsigned DEFAULT '0',
  `UIB` bigint(20) unsigned DEFAULT '0',
  `UV` bigint(20) unsigned DEFAULT '0',
  `EXT` bigint(20) unsigned DEFAULT '0',
  `CLM` bigint(20) unsigned DEFAULT '0',
  `VAL` bigint(20) unsigned DEFAULT '0',
  `MUR` bigint(20) unsigned DEFAULT '0',
  `AND` bigint(20) unsigned DEFAULT '0',
  `CICA` bigint(20) unsigned DEFAULT '0',
  `CAN-L` bigint(20) unsigned DEFAULT '0',
  `ULPGC` bigint(20) unsigned DEFAULT '0',
  `IAC` bigint(20) unsigned DEFAULT '0',
  `CAN-T` bigint(20) unsigned DEFAULT '0',
  `GAL-UVA` bigint(20) unsigned DEFAULT '0',
  `AST-UVA` bigint(20) unsigned DEFAULT '0',
  `CAB-UVA` bigint(20) unsigned DEFAULT '0',
  `PAV-UVA` bigint(20) unsigned DEFAULT '0',
  `PAV-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `RIO-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `NAV-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `ARA-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `CAT-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `CAT-UV` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-UVA` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-GAL` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-RIO` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-PAV` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-NAV` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-ARA` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-CAT` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-UB` bigint(20) unsigned DEFAULT '0',
  `UNIZAR-TELMAD` bigint(20) unsigned DEFAULT '0',
  `UVA-CYL` bigint(20) unsigned DEFAULT '0',
  `UVA-GAL` bigint(20) unsigned DEFAULT '0',
  `UVA-AST` bigint(20) unsigned DEFAULT '0',
  `UVA-CAB` bigint(20) unsigned DEFAULT '0',
  `UVA-PAV` bigint(20) unsigned DEFAULT '0',
  `UVA-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `UVA-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `CYL-UVA` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-TELMAD` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-MAD` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-CLM` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-CICA` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-EXT` bigint(20) unsigned DEFAULT '0',
  `CIEMAT-IAC` bigint(20) unsigned DEFAULT '0',
  `TELMAD-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `TELMAD-IAC` bigint(20) unsigned DEFAULT '0',
  `TELMAD-MAD` bigint(20) unsigned DEFAULT '0',
  `TELMAD-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `TELMAD-UV` bigint(20) unsigned DEFAULT '0',
  `MAD-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `MAD-TELMAD` bigint(20) unsigned DEFAULT '0',
  `UB-UNIZAR` bigint(20) unsigned DEFAULT '0',
  `UB-BAL` bigint(20) unsigned DEFAULT '0',
  `UB-UV` bigint(20) unsigned DEFAULT '0',
  `BAL-UB` bigint(20) unsigned DEFAULT '0',
  `UV-TELMAD` bigint(20) unsigned DEFAULT '0',
  `UV-CAT` bigint(20) unsigned DEFAULT '0',
  `UV-UB` bigint(20) unsigned DEFAULT '0',
  `UV-VAL` bigint(20) unsigned DEFAULT '0',
  `UV-MUR` bigint(20) unsigned DEFAULT '0',
  `UV-AND` bigint(20) unsigned DEFAULT '0',
  `UV-CICA` bigint(20) unsigned DEFAULT '0',
  `VAL-UV` bigint(20) unsigned DEFAULT '0',
  `MUR-UV` bigint(20) unsigned DEFAULT '0',
  `MUR-CICA` bigint(20) unsigned DEFAULT '0',
  `CLM-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `AND-CICA` bigint(20) unsigned DEFAULT '0',
  `AND-UV` bigint(20) unsigned DEFAULT '0',
  `CICA-EXT` bigint(20) unsigned DEFAULT '0',
  `CICA-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `CICA-UV` bigint(20) unsigned DEFAULT '0',
  `CICA-AND` bigint(20) unsigned DEFAULT '0',
  `CICA-MUR` bigint(20) unsigned DEFAULT '0',
  `CICA-ULPGC` bigint(20) unsigned DEFAULT '0',
  `EXT-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `EXT-CICA` bigint(20) unsigned DEFAULT '0',
  `CAN-L-ULPGC` bigint(20) unsigned DEFAULT '0',
  `ULPGC-CAN-L` bigint(20) unsigned DEFAULT '0',
  `ULPGC-CICA` bigint(20) unsigned DEFAULT '0',
  `ULPGC-IAC` bigint(20) unsigned DEFAULT '0',
  `IAC-ULPGC` bigint(20) unsigned DEFAULT '0',
  `IAC-CIEMAT` bigint(20) unsigned DEFAULT '0',
  `IAC-TELMAD` bigint(20) unsigned DEFAULT '0',
  `IAC-CAN-T` bigint(20) unsigned DEFAULT '0',
  `CAN-T-IAC` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`rrd_key`),
  UNIQUE KEY `attribute_key` (`attribute_key`,`start_utime`),
  KEY `start_time` (`start_utime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 MAX_ROWS=10 ROW_FORMAT=FIXED;

CREATE TABLE `rrd_year_key` (
  `rrd_key` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`rrd_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `rrd_year_key` VALUES (0);

/*******************************************************************************/

DROP TRIGGER IF EXISTS `rrd_min_ins`;

DELIMITER $$
CREATE TRIGGER  `rrd_min_ins`
BEFORE INSERT ON `rrd_min`
FOR EACH ROW
BEGIN
    SET @rrd_key_min = 0;
    SET @rows_min = 60;
    -- PK is NULL
    IF NEW.rrd_key = 0 THEN
        SELECT rrd_key + 1
            FROM rrd_min_key
            INTO @rrd_key_min;
        SET NEW.rrd_key = @rrd_key_min;
    END IF;
    IF (NEW.rrd_key % (@rows_min+1)) THEN
        SET NEW.rrd_key = NEW.rrd_key % (@rows_min+1);
    ELSE
    	SET @avg_atribute_key = ROUND(RAND()*100000);
		SELECT AVG(`GAL`) FROM rrd_min INTO @avg_GAL;
		SELECT AVG(`AST`) FROM rrd_min INTO @avg_AST;
		SELECT AVG(`CAB`) FROM rrd_min INTO @avg_CAB;
		SELECT AVG(`UVA`) FROM rrd_min INTO @avg_UVA;
		SELECT AVG(`CYL`) FROM rrd_min INTO @avg_CYL;
		SELECT AVG(`PAV`) FROM rrd_min INTO @avg_PAV;
		SELECT AVG(`NAV`) FROM rrd_min INTO @avg_NAV;
		SELECT AVG(`RIO`) FROM rrd_min INTO @avg_RIO;
		SELECT AVG(`UNIZAR`) FROM rrd_min INTO @avg_UNIZAR;
		SELECT AVG(`ARA`) FROM rrd_min INTO @avg_ARA;
		SELECT AVG(`CAT`) FROM rrd_min INTO @avg_CAT;
		SELECT AVG(`CIEMAT`) FROM rrd_min INTO @avg_CIEMAT;
		SELECT AVG(`TELMAD`) FROM rrd_min INTO @avg_TELMAD;
		SELECT AVG(`MAD`) FROM rrd_min INTO @avg_MAD;
		SELECT AVG(`BAL`) FROM rrd_min INTO @avg_BAL;
		SELECT AVG(`UIB`) FROM rrd_min INTO @avg_UIB;
		SELECT AVG(`UV`) FROM rrd_min INTO @avg_UV;
		SELECT AVG(`EXT`) FROM rrd_min INTO @avg_EXT;
		SELECT AVG(`CLM`) FROM rrd_min INTO @avg_CLM;
		SELECT AVG(`VAL`) FROM rrd_min INTO @avg_VAL;
		SELECT AVG(`MUR`) FROM rrd_min INTO @avg_MUR;
		SELECT AVG(`AND`) FROM rrd_min INTO @avg_AND;
		SELECT AVG(`CICA`) FROM rrd_min INTO @avg_CICA;
		SELECT AVG(`CAN-L`) FROM rrd_min INTO @avg_CAN_L;
		SELECT AVG(`ULPGC`) FROM rrd_min INTO @avg_ULPGC;
		SELECT AVG(`IAC`) FROM rrd_min INTO @avg_IAC;
		SELECT AVG(`CAN-T`) FROM rrd_min INTO @avg_CAN_T;
		SELECT AVG(`GAL-UVA`) FROM rrd_min INTO @avg_GAL_UVA;
		SELECT AVG(`AST-UVA`) FROM rrd_min INTO @avg_AST_UVA;
		SELECT AVG(`CAB-UVA`) FROM rrd_min INTO @avg_CAB_UVA;
		SELECT AVG(`PAV-UVA`) FROM rrd_min INTO @avg_PAV_UVA;
		SELECT AVG(`PAV-UNIZAR`) FROM rrd_min INTO @avg_PAV_UNIZAR;
		SELECT AVG(`RIO-UNIZAR`) FROM rrd_min INTO @avg_RIO_UNIZAR;
		SELECT AVG(`NAV-UNIZAR`) FROM rrd_min INTO @avg_NAV_UNIZAR;
		SELECT AVG(`ARA-UNIZAR`) FROM rrd_min INTO @avg_ARA_UNIZAR;
		SELECT AVG(`CAT-UNIZAR`) FROM rrd_min INTO @avg_CAT_UNIZAR;
		SELECT AVG(`CAT-UV`) FROM rrd_min INTO @avg_CAT_UV;
		SELECT AVG(`UNIZAR-UVA`) FROM rrd_min INTO @avg_UNIZAR_UVA;
		SELECT AVG(`UNIZAR-GAL`) FROM rrd_min INTO @avg_UNIZAR_GAL;
		SELECT AVG(`UNIZAR-RIO`) FROM rrd_min INTO @avg_UNIZAR_RIO;
		SELECT AVG(`UNIZAR-PAV`) FROM rrd_min INTO @avg_UNIZAR_PAV;
		SELECT AVG(`UNIZAR-NAV`) FROM rrd_min INTO @avg_UNIZAR_NAV;
		SELECT AVG(`UNIZAR-ARA`) FROM rrd_min INTO @avg_UNIZAR_ARA;
		SELECT AVG(`UNIZAR-CAT`) FROM rrd_min INTO @avg_UNIZAR_CAT;
		SELECT AVG(`UNIZAR-UB`) FROM rrd_min INTO @avg_UNIZAR_UB;
		SELECT AVG(`UNIZAR-TELMAD`) FROM rrd_min INTO @avg_UNIZAR_TELMAD;
		SELECT AVG(`UVA-CYL`) FROM rrd_min INTO @avg_UVA_CYL;
		SELECT AVG(`UVA-GAL`) FROM rrd_min INTO @avg_UVA_GAL;
		SELECT AVG(`UVA-AST`) FROM rrd_min INTO @avg_UVA_AST;
		SELECT AVG(`UVA-CAB`) FROM rrd_min INTO @avg_UVA_CAB;
		SELECT AVG(`UVA-PAV`) FROM rrd_min INTO @UVA_PAV;
		SELECT AVG(`UVA-UNIZAR`) FROM rrd_min INTO @UVA_UNIZAR;
		SELECT AVG(`UVA-CIEMAT`) FROM rrd_min INTO @avg_UVA_CIEMAT;
		SELECT AVG(`CYL-UVA`) FROM rrd_min INTO @avg_CYL_UVA;
		SELECT AVG(`CIEMAT-TELMAD`) FROM rrd_min INTO @avg_CIEMAT_TELMAD;
		SELECT AVG(`CIEMAT-MAD`) FROM rrd_min INTO @avg_CIEMAT_MAD;
		SELECT AVG(`CIEMAT-CLM`) FROM rrd_min INTO @avg_CIEMAT_CLM;
		SELECT AVG(`CIEMAT-CICA`) FROM rrd_min INTO @avg_CIEMAT_CICA;
		SELECT AVG(`CIEMAT-EXT`) FROM rrd_min INTO @avg_CIEMAT_EXT;
		SELECT AVG(`CIEMAT-IAC`) FROM rrd_min INTO @avg_CIEMAT_IAC;
		SELECT AVG(`TELMAD-CIEMAT`) FROM rrd_min INTO @avg_TELMAD_CIEMAT;
		SELECT AVG(`TELMAD-IAC`) FROM rrd_min INTO @avg_TELMAD_IAC;
		SELECT AVG(`TELMAD-MAD`) FROM rrd_min INTO @avg_TELMAD_MAD;
		SELECT AVG(`TELMAD-UNIZAR`) FROM rrd_min INTO @avg_TELMAD_UNIZAR;
		SELECT AVG(`TELMAD-UV`) FROM rrd_min INTO @avg_TELMAD_UV;
		SELECT AVG(`MAD-CIEMAT`) FROM rrd_min INTO @avg_MAD_CIEMAT;
		SELECT AVG(`MAD-TELMAD`) FROM rrd_min INTO @avg_MAD_TELMAD;
		SELECT AVG(`UB-UNIZAR`) FROM rrd_min INTO @avg_UB_UNIZAR;
		SELECT AVG(`UB-BAL`) FROM rrd_min INTO @avg_UB_BAL;
		SELECT AVG(`UB-UV`) FROM rrd_min INTO @avg_UB_UV;
		SELECT AVG(`BAL-UB`) FROM rrd_min INTO @avg_BAL_UB;
		SELECT AVG(`UV-TELMAD`) FROM rrd_min INTO @avg_UV_TELMAD;
		SELECT AVG(`UV-CAT`) FROM rrd_min INTO @avg_UV_CAT;
		SELECT AVG(`UV-UB`) FROM rrd_min INTO @avg_UV_UB;
		SELECT AVG(`UV-VAL`) FROM rrd_min INTO @avg_UV_VAL;
		SELECT AVG(`UV-MUR`) FROM rrd_min INTO @avg_UV_MUR;
		SELECT AVG(`UV-AND`) FROM rrd_min INTO @avg_UV_AND;
		SELECT AVG(`UV-CICA`) FROM rrd_min INTO @avg_UV_CICA;
		SELECT AVG(`VAL-UV`) FROM rrd_min INTO @avg_VAL_UV;
		SELECT AVG(`MUR-UV`) FROM rrd_min INTO @avg_MUR_UV;
		SELECT AVG(`MUR-CICA`) FROM rrd_min INTO @avg_MUR_CICA;
		SELECT AVG(`CLM-CIEMAT`) FROM rrd_min INTO @avg_CLM_CIEMAT;
		SELECT AVG(`AND-CICA`) FROM rrd_min INTO @avg_AND_CICA;
		SELECT AVG(`AND-UV`) FROM rrd_min INTO @avg_AND_UV;
		SELECT AVG(`CICA-EXT`) FROM rrd_min INTO @avg_CICA_EXT;
		SELECT AVG(`CICA-CIEMAT`) FROM rrd_min INTO @avg_CICA_CIEMAT;
		SELECT AVG(`CICA-UV`) FROM rrd_min INTO @avg_CICA_UV;
		SELECT AVG(`CICA-AND`) FROM rrd_min INTO @avg_CICA_AND;
		SELECT AVG(`CICA-MUR`) FROM rrd_min INTO @avg_CICA_MUR;
		SELECT AVG(`CICA-ULPGC`) FROM rrd_min INTO @avg_CICA_ULPGC;
		SELECT AVG(`EXT-CIEMAT`) FROM rrd_min INTO @avg_EXT_CIEMAT;
		SELECT AVG(`EXT-CICA`) FROM rrd_min INTO @avg_EXT_CICA;
		SELECT AVG(`CAN-L-ULPGC`) FROM rrd_min INTO @avg_CAN_L_ULPGC;
  		SELECT AVG(`ULPGC-CAN-L`) FROM rrd_min INTO @avg_ULPGC_CAN_L;
		SELECT AVG(`ULPGC-CICA`) FROM rrd_min INTO @avg_ULPGC_CICA;
		SELECT AVG(`ULPGC-IAC`) FROM rrd_min INTO @avg_ULPGC_IAC;
		SELECT AVG(`IAC-ULPGC`) FROM rrd_min INTO @avg_IAC_ULPGC;
		SELECT AVG(`IAC-CIEMAT`) FROM rrd_min INTO @avg_IAC_CIEMAT;
		SELECT AVG(`IAC-TELMAD`) FROM rrd_min INTO @avg_IAC_TELMAD;
		SELECT AVG(`IAC-CAN-T`) FROM rrd_min INTO @avg_IAC_CAN_T;
		SELECT AVG(`CAN-T-IAC`) FROM rrd_min INTO @avg_CAN_T_IAC;

		REPLACE INTO rrd_hour (
			attribute_key,
			start_utime,
			logging_interval,
			GAL, AST, CAB, UVA, CYL, PAV, NAV, RIO, UNIZAR, ARA, CAT, CIEMAT, TELMAD, MAD, BAL, UIB, UV, EXT, CLM, VAL, MUR, `AND`, CICA, `CAN-L`, ULPGC, IAC, `CAN-T`) 
		VALUES(
			@avg_atribute_key,
			UNIX_TIMESTAMP(NOW()),
			36000,
			@avg_GAL, @avg_AST, @avg_CAB, @avg_UVA, @avg_CYL, @avg_PAV, @avg_NAV, @avg_RIO, @avg_UNIZAR, @avg_ARA, @avg_CAT, @avg_CIEMAT, @avg_TELMAD,  @avg_MAD, @avg_BAL, @avg_UIB, @avg_UV, @avg_EXT, @avg_CLM, @avg_VAL, @avg_MUR, @avg_AND, @avg_CICA, @avg_CAN_L, @avg_ULPGC, @avg_IAC, @avg_CAN_T);
        SET NEW.rrd_key = 1;
    END IF;
UPDATE rrd_min_key SET rrd_key = NEW.rrd_key;
END
$$
DELIMITER ;

DROP TRIGGER IF EXISTS `rrd_hour_ins`;

DELIMITER $$
CREATE TRIGGER  `rrd_hour_ins`
BEFORE INSERT ON `rrd_hour`
FOR EACH ROW
BEGIN
    SET @rrd_key_hour = 0;
    SET @rows_hour = 60;
    -- PK is NULL
    IF NEW.rrd_key = 0 THEN
        SELECT rrd_key + 1
            FROM rrd_hour_key
            INTO @rrd_key_hour;
        SET NEW.rrd_key = @rrd_key_hour;
    END IF;
    IF (NEW.rrd_key % (@rows_hour+1)) THEN
        SET NEW.rrd_key = NEW.rrd_key % (@rows_hour+1);
    ELSE
    	SET @avg_atribute_key = ROUND(RAND()*100000);
		SELECT AVG(`GAL`) FROM rrd_hour INTO @avg_GAL;
		SELECT AVG(`AST`) FROM rrd_hour INTO @avg_AST;
		SELECT AVG(`CAB`) FROM rrd_hour INTO @avg_CAB;
		SELECT AVG(`UVA`) FROM rrd_hour INTO @avg_UVA;
		SELECT AVG(`CYL`) FROM rrd_hour INTO @avg_CYL;
		SELECT AVG(`PAV`) FROM rrd_hour INTO @avg_PAV;
		SELECT AVG(`NAV`) FROM rrd_hour INTO @avg_NAV;
		SELECT AVG(`RIO`) FROM rrd_hour INTO @avg_RIO;
		SELECT AVG(`UNIZAR`) FROM rrd_hour INTO @avg_UNIZAR;
		SELECT AVG(`ARA`) FROM rrd_hour INTO @avg_ARA;
		SELECT AVG(`CAT`) FROM rrd_hour INTO @avg_CAT;
		SELECT AVG(`CIEMAT`) FROM rrd_hour INTO @avg_CIEMAT;
		SELECT AVG(`TELMAD`) FROM rrd_hour INTO @avg_TELMAD;
		SELECT AVG(`MAD`) FROM rrd_hour INTO @avg_MAD;
		SELECT AVG(`BAL`) FROM rrd_hour INTO @avg_BAL;
		SELECT AVG(`UIB`) FROM rrd_hour INTO @avg_UIB;
		SELECT AVG(`UV`) FROM rrd_hour INTO @avg_UV;
		SELECT AVG(`EXT`) FROM rrd_hour INTO @avg_EXT;
		SELECT AVG(`CLM`) FROM rrd_hour INTO @avg_CLM;
		SELECT AVG(`VAL`) FROM rrd_hour INTO @avg_VAL;
		SELECT AVG(`MUR`) FROM rrd_hour INTO @avg_MUR;
		SELECT AVG(`AND`) FROM rrd_hour INTO @avg_AND;
		SELECT AVG(`CICA`) FROM rrd_hour INTO @avg_CICA;
		SELECT AVG(`CAN-L`) FROM rrd_hour INTO @avg_CAN_L;
		SELECT AVG(`ULPGC`) FROM rrd_hour INTO @avg_ULPGC;
		SELECT AVG(`IAC`) FROM rrd_hour INTO @avg_IAC;
		SELECT AVG(`CAN-T`) FROM rrd_hour INTO @avg_CAN_T;
		SELECT AVG(`GAL-UVA`) FROM rrd_hour INTO @avg_GAL_UVA;
		SELECT AVG(`AST-UVA`) FROM rrd_hour INTO @avg_AST_UVA;
		SELECT AVG(`CAB-UVA`) FROM rrd_hour INTO @avg_CAB_UVA;
		SELECT AVG(`PAV-UVA`) FROM rrd_hour INTO @avg_PAV_UVA;
		SELECT AVG(`PAV-UNIZAR`) FROM rrd_hour INTO @avg_PAV_UNIZAR;
		SELECT AVG(`RIO-UNIZAR`) FROM rrd_hour INTO @avg_RIO_UNIZAR;
		SELECT AVG(`NAV-UNIZAR`) FROM rrd_hour INTO @avg_NAV_UNIZAR;
		SELECT AVG(`ARA-UNIZAR`) FROM rrd_hour INTO @avg_ARA_UNIZAR;
		SELECT AVG(`CAT-UNIZAR`) FROM rrd_hour INTO @avg_CAT_UNIZAR;
		SELECT AVG(`CAT-UV`) FROM rrd_hour INTO @avg_CAT_UV;
		SELECT AVG(`UNIZAR-UVA`) FROM rrd_hour INTO @avg_UNIZAR_UVA;
		SELECT AVG(`UNIZAR-GAL`) FROM rrd_hour INTO @avg_UNIZAR_GAL;
		SELECT AVG(`UNIZAR-RIO`) FROM rrd_hour INTO @avg_UNIZAR_RIO;
		SELECT AVG(`UNIZAR-PAV`) FROM rrd_hour INTO @avg_UNIZAR_PAV;
		SELECT AVG(`UNIZAR-NAV`) FROM rrd_hour INTO @avg_UNIZAR_NAV;
		SELECT AVG(`UNIZAR-ARA`) FROM rrd_hour INTO @avg_UNIZAR_ARA;
		SELECT AVG(`UNIZAR-CAT`) FROM rrd_hour INTO @avg_UNIZAR_CAT;
		SELECT AVG(`UNIZAR-UB`) FROM rrd_hour INTO @avg_UNIZAR_UB;
		SELECT AVG(`UNIZAR-TELMAD`) FROM rrd_hour INTO @avg_UNIZAR_TELMAD;
		SELECT AVG(`UVA-CYL`) FROM rrd_hour INTO @avg_UVA_CYL;
		SELECT AVG(`UVA-GAL`) FROM rrd_hour INTO @avg_UVA_GAL;
		SELECT AVG(`UVA-AST`) FROM rrd_hour INTO @avg_UVA_AST;
		SELECT AVG(`UVA-CAB`) FROM rrd_hour INTO @avg_UVA_CAB;
		SELECT AVG(`UVA-PAV`) FROM rrd_hour INTO @UVA_PAV;
		SELECT AVG(`UVA-UNIZAR`) FROM rrd_hour INTO @UVA_UNIZAR;
		SELECT AVG(`UVA-CIEMAT`) FROM rrd_hour INTO @avg_UVA_CIEMAT;
		SELECT AVG(`CYL-UVA`) FROM rrd_hour INTO @avg_CYL_UVA;
		SELECT AVG(`CIEMAT-TELMAD`) FROM rrd_hour INTO @avg_CIEMAT_TELMAD;
		SELECT AVG(`CIEMAT-MAD`) FROM rrd_hour INTO @avg_CIEMAT_MAD;
		SELECT AVG(`CIEMAT-CLM`) FROM rrd_hour INTO @avg_CIEMAT_CLM;
		SELECT AVG(`CIEMAT-CICA`) FROM rrd_hour INTO @avg_CIEMAT_CICA;
		SELECT AVG(`CIEMAT-EXT`) FROM rrd_hour INTO @avg_CIEMAT_EXT;
		SELECT AVG(`CIEMAT-IAC`) FROM rrd_hour INTO @avg_CIEMAT_IAC;
		SELECT AVG(`TELMAD-CIEMAT`) FROM rrd_hour INTO @avg_TELMAD_CIEMAT;
		SELECT AVG(`TELMAD-IAC`) FROM rrd_hour INTO @avg_TELMAD_IAC;
		SELECT AVG(`TELMAD-MAD`) FROM rrd_hour INTO @avg_TELMAD_MAD;
		SELECT AVG(`TELMAD-UNIZAR`) FROM rrd_hour INTO @avg_TELMAD_UNIZAR;
		SELECT AVG(`TELMAD-UV`) FROM rrd_hour INTO @avg_TELMAD_UV;
		SELECT AVG(`MAD-CIEMAT`) FROM rrd_hour INTO @avg_MAD_CIEMAT;
		SELECT AVG(`MAD-TELMAD`) FROM rrd_hour INTO @avg_MAD_TELMAD;
		SELECT AVG(`UB-UNIZAR`) FROM rrd_hour INTO @avg_UB_UNIZAR;
		SELECT AVG(`UB-BAL`) FROM rrd_hour INTO @avg_UB_BAL;
		SELECT AVG(`UB-UV`) FROM rrd_hour INTO @avg_UB_UV;
		SELECT AVG(`BAL-UB`) FROM rrd_hour INTO @avg_BAL_UB;
		SELECT AVG(`UV-TELMAD`) FROM rrd_hour INTO @avg_UV_TELMAD;
		SELECT AVG(`UV-CAT`) FROM rrd_hour INTO @avg_UV_CAT;
		SELECT AVG(`UV-UB`) FROM rrd_hour INTO @avg_UV_UB;
		SELECT AVG(`UV-VAL`) FROM rrd_hour INTO @avg_UV_VAL;
		SELECT AVG(`UV-MUR`) FROM rrd_hour INTO @avg_UV_MUR;
		SELECT AVG(`UV-AND`) FROM rrd_hour INTO @avg_UV_AND;
		SELECT AVG(`UV-CICA`) FROM rrd_hour INTO @avg_UV_CICA;
		SELECT AVG(`VAL-UV`) FROM rrd_hour INTO @avg_VAL_UV;
		SELECT AVG(`MUR-UV`) FROM rrd_hour INTO @avg_MUR_UV;
		SELECT AVG(`MUR-CICA`) FROM rrd_hour INTO @avg_MUR_CICA;
		SELECT AVG(`CLM-CIEMAT`) FROM rrd_hour INTO @avg_CLM_CIEMAT;
		SELECT AVG(`AND-CICA`) FROM rrd_hour INTO @avg_AND_CICA;
		SELECT AVG(`AND-UV`) FROM rrd_hour INTO @avg_AND_UV;
		SELECT AVG(`CICA-EXT`) FROM rrd_hour INTO @avg_CICA_EXT;
		SELECT AVG(`CICA-CIEMAT`) FROM rrd_hour INTO @avg_CICA_CIEMAT;
		SELECT AVG(`CICA-UV`) FROM rrd_hour INTO @avg_CICA_UV;
		SELECT AVG(`CICA-AND`) FROM rrd_hour INTO @avg_CICA_AND;
		SELECT AVG(`CICA-MUR`) FROM rrd_hour INTO @avg_CICA_MUR;
		SELECT AVG(`CICA-ULPGC`) FROM rrd_hour INTO @avg_CICA_ULPGC;
		SELECT AVG(`EXT-CIEMAT`) FROM rrd_hour INTO @avg_EXT_CIEMAT;
		SELECT AVG(`EXT-CICA`) FROM rrd_hour INTO @avg_EXT_CICA;
		SELECT AVG(`CAN-L-ULPGC`) FROM rrd_hour INTO @avg_CAN_L_ULPGC;
  		SELECT AVG(`ULPGC-CAN-L`) FROM rrd_hour INTO @avg_ULPGC_CAN_L;
		SELECT AVG(`ULPGC-CICA`) FROM rrd_hour INTO @avg_ULPGC_CICA;
		SELECT AVG(`ULPGC-IAC`) FROM rrd_hour INTO @avg_ULPGC_IAC;
		SELECT AVG(`IAC-ULPGC`) FROM rrd_hour INTO @avg_IAC_ULPGC;
		SELECT AVG(`IAC-CIEMAT`) FROM rrd_hour INTO @avg_IAC_CIEMAT;
		SELECT AVG(`IAC-TELMAD`) FROM rrd_hour INTO @avg_IAC_TELMAD;
		SELECT AVG(`IAC-CAN-T`) FROM rrd_hour INTO @avg_IAC_CAN_T;
		SELECT AVG(`CAN-T-IAC`) FROM rrd_hour INTO @avg_CAN_T_IAC;

		REPLACE INTO rrd_day (
			attribute_key,
			start_utime,
			logging_interval,
			GAL, AST, CAB, UVA, CYL, PAV, NAV, RIO, UNIZAR, ARA, CAT, CIEMAT, TELMAD, MAD, BAL, UIB, UV, EXT, CLM, VAL, MUR, `AND`, CICA, `CAN-L`, ULPGC, IAC, `CAN-T`) 
		VALUES(
			@avg_atribute_key,
			UNIX_TIMESTAMP(NOW()),
			36000,
			@avg_GAL, @avg_AST, @avg_CAB, @avg_UVA, @avg_CYL, @avg_PAV, @avg_NAV, @avg_RIO, @avg_UNIZAR, @avg_ARA, @avg_CAT, @avg_CIEMAT, @avg_TELMAD,  @avg_MAD, @avg_BAL, @avg_UIB, @avg_UV, @avg_EXT, @avg_CLM, @avg_VAL, @avg_MUR, @avg_AND, @avg_CICA, @avg_CAN_L, @avg_ULPGC, @avg_IAC, @avg_CAN_T);
        SET NEW.rrd_key = 1;
    END IF;
UPDATE rrd_hour_key SET rrd_key = NEW.rrd_key;
END
$$
DELIMITER ;

DROP TRIGGER IF EXISTS `rrd_day_ins`;

DELIMITER $$
CREATE TRIGGER  `rrd_day_ins`
BEFORE INSERT ON `rrd_day`
FOR EACH ROW
BEGIN
    SET @rrd_key_day = 0;
    SET @rows_day = 60;
    -- PK is NULL
    IF NEW.rrd_key = 0 THEN
        SELECT rrd_key + 1
            FROM rrd_day_key
            INTO @rrd_key_day;
        SET NEW.rrd_key = @rrd_key_day;
    END IF;
    IF (NEW.rrd_key % (@rows_day+1)) THEN
        SET NEW.rrd_key = NEW.rrd_key % (@rows_day+1);
    ELSE
    	SET @avg_atribute_key = ROUND(RAND()*100000);
		SELECT AVG(`GAL`) FROM rrd_day INTO @avg_GAL;
		SELECT AVG(`AST`) FROM rrd_day INTO @avg_AST;
		SELECT AVG(`CAB`) FROM rrd_day INTO @avg_CAB;
		SELECT AVG(`UVA`) FROM rrd_day INTO @avg_UVA;
		SELECT AVG(`CYL`) FROM rrd_day INTO @avg_CYL;
		SELECT AVG(`PAV`) FROM rrd_day INTO @avg_PAV;
		SELECT AVG(`NAV`) FROM rrd_day INTO @avg_NAV;
		SELECT AVG(`RIO`) FROM rrd_day INTO @avg_RIO;
		SELECT AVG(`UNIZAR`) FROM rrd_day INTO @avg_UNIZAR;
		SELECT AVG(`ARA`) FROM rrd_day INTO @avg_ARA;
		SELECT AVG(`CAT`) FROM rrd_day INTO @avg_CAT;
		SELECT AVG(`CIEMAT`) FROM rrd_day INTO @avg_CIEMAT;
		SELECT AVG(`TELMAD`) FROM rrd_day INTO @avg_TELMAD;
		SELECT AVG(`MAD`) FROM rrd_day INTO @avg_MAD;
		SELECT AVG(`BAL`) FROM rrd_day INTO @avg_BAL;
		SELECT AVG(`UIB`) FROM rrd_day INTO @avg_UIB;
		SELECT AVG(`UV`) FROM rrd_day INTO @avg_UV;
		SELECT AVG(`EXT`) FROM rrd_day INTO @avg_EXT;
		SELECT AVG(`CLM`) FROM rrd_day INTO @avg_CLM;
		SELECT AVG(`VAL`) FROM rrd_day INTO @avg_VAL;
		SELECT AVG(`MUR`) FROM rrd_day INTO @avg_MUR;
		SELECT AVG(`AND`) FROM rrd_day INTO @avg_AND;
		SELECT AVG(`CICA`) FROM rrd_day INTO @avg_CICA;
		SELECT AVG(`CAN-L`) FROM rrd_day INTO @avg_CAN_L;
		SELECT AVG(`ULPGC`) FROM rrd_day INTO @avg_ULPGC;
		SELECT AVG(`IAC`) FROM rrd_day INTO @avg_IAC;
		SELECT AVG(`CAN-T`) FROM rrd_day INTO @avg_CAN_T;
		SELECT AVG(`GAL-UVA`) FROM rrd_day INTO @avg_GAL_UVA;
		SELECT AVG(`AST-UVA`) FROM rrd_day INTO @avg_AST_UVA;
		SELECT AVG(`CAB-UVA`) FROM rrd_day INTO @avg_CAB_UVA;
		SELECT AVG(`PAV-UVA`) FROM rrd_day INTO @avg_PAV_UVA;
		SELECT AVG(`PAV-UNIZAR`) FROM rrd_day INTO @avg_PAV_UNIZAR;
		SELECT AVG(`RIO-UNIZAR`) FROM rrd_day INTO @avg_RIO_UNIZAR;
		SELECT AVG(`NAV-UNIZAR`) FROM rrd_day INTO @avg_NAV_UNIZAR;
		SELECT AVG(`ARA-UNIZAR`) FROM rrd_day INTO @avg_ARA_UNIZAR;
		SELECT AVG(`CAT-UNIZAR`) FROM rrd_day INTO @avg_CAT_UNIZAR;
		SELECT AVG(`CAT-UV`) FROM rrd_day INTO @avg_CAT_UV;
		SELECT AVG(`UNIZAR-UVA`) FROM rrd_day INTO @avg_UNIZAR_UVA;
		SELECT AVG(`UNIZAR-GAL`) FROM rrd_day INTO @avg_UNIZAR_GAL;
		SELECT AVG(`UNIZAR-RIO`) FROM rrd_day INTO @avg_UNIZAR_RIO;
		SELECT AVG(`UNIZAR-PAV`) FROM rrd_day INTO @avg_UNIZAR_PAV;
		SELECT AVG(`UNIZAR-NAV`) FROM rrd_day INTO @avg_UNIZAR_NAV;
		SELECT AVG(`UNIZAR-ARA`) FROM rrd_day INTO @avg_UNIZAR_ARA;
		SELECT AVG(`UNIZAR-CAT`) FROM rrd_day INTO @avg_UNIZAR_CAT;
		SELECT AVG(`UNIZAR-UB`) FROM rrd_day INTO @avg_UNIZAR_UB;
		SELECT AVG(`UNIZAR-TELMAD`) FROM rrd_day INTO @avg_UNIZAR_TELMAD;
		SELECT AVG(`UVA-CYL`) FROM rrd_day INTO @avg_UVA_CYL;
		SELECT AVG(`UVA-GAL`) FROM rrd_day INTO @avg_UVA_GAL;
		SELECT AVG(`UVA-AST`) FROM rrd_day INTO @avg_UVA_AST;
		SELECT AVG(`UVA-CAB`) FROM rrd_day INTO @avg_UVA_CAB;
		SELECT AVG(`UVA-PAV`) FROM rrd_day INTO @UVA_PAV;
		SELECT AVG(`UVA-UNIZAR`) FROM rrd_day INTO @UVA_UNIZAR;
		SELECT AVG(`UVA-CIEMAT`) FROM rrd_day INTO @avg_UVA_CIEMAT;
		SELECT AVG(`CYL-UVA`) FROM rrd_day INTO @avg_CYL_UVA;
		SELECT AVG(`CIEMAT-TELMAD`) FROM rrd_day INTO @avg_CIEMAT_TELMAD;
		SELECT AVG(`CIEMAT-MAD`) FROM rrd_day INTO @avg_CIEMAT_MAD;
		SELECT AVG(`CIEMAT-CLM`) FROM rrd_day INTO @avg_CIEMAT_CLM;
		SELECT AVG(`CIEMAT-CICA`) FROM rrd_day INTO @avg_CIEMAT_CICA;
		SELECT AVG(`CIEMAT-EXT`) FROM rrd_day INTO @avg_CIEMAT_EXT;
		SELECT AVG(`CIEMAT-IAC`) FROM rrd_day INTO @avg_CIEMAT_IAC;
		SELECT AVG(`TELMAD-CIEMAT`) FROM rrd_day INTO @avg_TELMAD_CIEMAT;
		SELECT AVG(`TELMAD-IAC`) FROM rrd_day INTO @avg_TELMAD_IAC;
		SELECT AVG(`TELMAD-MAD`) FROM rrd_day INTO @avg_TELMAD_MAD;
		SELECT AVG(`TELMAD-UNIZAR`) FROM rrd_day INTO @avg_TELMAD_UNIZAR;
		SELECT AVG(`TELMAD-UV`) FROM rrd_day INTO @avg_TELMAD_UV;
		SELECT AVG(`MAD-CIEMAT`) FROM rrd_day INTO @avg_MAD_CIEMAT;
		SELECT AVG(`MAD-TELMAD`) FROM rrd_day INTO @avg_MAD_TELMAD;
		SELECT AVG(`UB-UNIZAR`) FROM rrd_day INTO @avg_UB_UNIZAR;
		SELECT AVG(`UB-BAL`) FROM rrd_day INTO @avg_UB_BAL;
		SELECT AVG(`UB-UV`) FROM rrd_day INTO @avg_UB_UV;
		SELECT AVG(`BAL-UB`) FROM rrd_day INTO @avg_BAL_UB;
		SELECT AVG(`UV-TELMAD`) FROM rrd_day INTO @avg_UV_TELMAD;
		SELECT AVG(`UV-CAT`) FROM rrd_day INTO @avg_UV_CAT;
		SELECT AVG(`UV-UB`) FROM rrd_day INTO @avg_UV_UB;
		SELECT AVG(`UV-VAL`) FROM rrd_day INTO @avg_UV_VAL;
		SELECT AVG(`UV-MUR`) FROM rrd_day INTO @avg_UV_MUR;
		SELECT AVG(`UV-AND`) FROM rrd_day INTO @avg_UV_AND;
		SELECT AVG(`UV-CICA`) FROM rrd_day INTO @avg_UV_CICA;
		SELECT AVG(`VAL-UV`) FROM rrd_day INTO @avg_VAL_UV;
		SELECT AVG(`MUR-UV`) FROM rrd_day INTO @avg_MUR_UV;
		SELECT AVG(`MUR-CICA`) FROM rrd_day INTO @avg_MUR_CICA;
		SELECT AVG(`CLM-CIEMAT`) FROM rrd_day INTO @avg_CLM_CIEMAT;
		SELECT AVG(`AND-CICA`) FROM rrd_day INTO @avg_AND_CICA;
		SELECT AVG(`AND-UV`) FROM rrd_day INTO @avg_AND_UV;
		SELECT AVG(`CICA-EXT`) FROM rrd_day INTO @avg_CICA_EXT;
		SELECT AVG(`CICA-CIEMAT`) FROM rrd_day INTO @avg_CICA_CIEMAT;
		SELECT AVG(`CICA-UV`) FROM rrd_day INTO @avg_CICA_UV;
		SELECT AVG(`CICA-AND`) FROM rrd_day INTO @avg_CICA_AND;
		SELECT AVG(`CICA-MUR`) FROM rrd_day INTO @avg_CICA_MUR;
		SELECT AVG(`CICA-ULPGC`) FROM rrd_day INTO @avg_CICA_ULPGC;
		SELECT AVG(`EXT-CIEMAT`) FROM rrd_day INTO @avg_EXT_CIEMAT;
		SELECT AVG(`EXT-CICA`) FROM rrd_day INTO @avg_EXT_CICA;
		SELECT AVG(`CAN-L-ULPGC`) FROM rrd_day INTO @avg_CAN_L_ULPGC;
  		SELECT AVG(`ULPGC-CAN-L`) FROM rrd_day INTO @avg_ULPGC_CAN_L;
		SELECT AVG(`ULPGC-CICA`) FROM rrd_day INTO @avg_ULPGC_CICA;
		SELECT AVG(`ULPGC-IAC`) FROM rrd_day INTO @avg_ULPGC_IAC;
		SELECT AVG(`IAC-ULPGC`) FROM rrd_day INTO @avg_IAC_ULPGC;
		SELECT AVG(`IAC-CIEMAT`) FROM rrd_day INTO @avg_IAC_CIEMAT;
		SELECT AVG(`IAC-TELMAD`) FROM rrd_day INTO @avg_IAC_TELMAD;
		SELECT AVG(`IAC-CAN-T`) FROM rrd_day INTO @avg_IAC_CAN_T;
		SELECT AVG(`CAN-T-IAC`) FROM rrd_day INTO @avg_CAN_T_IAC;

		REPLACE INTO rrd_month (
			attribute_key,
			start_utime,
			logging_interval,
			GAL, AST, CAB, UVA, CYL, PAV, NAV, RIO, UNIZAR, ARA, CAT, CIEMAT, TELMAD, MAD, BAL, UIB, UV, EXT, CLM, VAL, MUR, `AND`, CICA, `CAN-L`, ULPGC, IAC, `CAN-T`) 
		VALUES(
			@avg_atribute_key,
			UNIX_TIMESTAMP(NOW()),
			36000,
			@avg_GAL, @avg_AST, @avg_CAB, @avg_UVA, @avg_CYL, @avg_PAV, @avg_NAV, @avg_RIO, @avg_UNIZAR, @avg_ARA, @avg_CAT, @avg_CIEMAT, @avg_TELMAD,  @avg_MAD, @avg_BAL, @avg_UIB, @avg_UV, @avg_EXT, @avg_CLM, @avg_VAL, @avg_MUR, @avg_AND, @avg_CICA, @avg_CAN_L, @avg_ULPGC, @avg_IAC, @avg_CAN_T);
        SET NEW.rrd_key = 1;
    END IF;
UPDATE rrd_day_key SET rrd_key = NEW.rrd_key;
END
$$
DELIMITER ;

DROP TRIGGER IF EXISTS `rrd_month_ins`;

DELIMITER $$
CREATE TRIGGER  `rrd_month_ins`
BEFORE INSERT ON `rrd_month`
FOR EACH ROW
BEGIN
    SET @rrd_key_month = 0;
    SET @rows_month = 60;
    -- PK is NULL
    IF NEW.rrd_key = 0 THEN
        SELECT rrd_key + 1
            FROM rrd_month_key
            INTO @rrd_key_month;
        SET NEW.rrd_key = @rrd_key_month;
    END IF;
    IF (NEW.rrd_key % (@rows_month+1)) THEN
        SET NEW.rrd_key = NEW.rrd_key % (@rows_month+1);
    ELSE
    	SET @avg_atribute_key = ROUND(RAND()*100000);
		SELECT AVG(`GAL`) FROM rrd_month INTO @avg_GAL;
		SELECT AVG(`AST`) FROM rrd_month INTO @avg_AST;
		SELECT AVG(`CAB`) FROM rrd_month INTO @avg_CAB;
		SELECT AVG(`UVA`) FROM rrd_month INTO @avg_UVA;
		SELECT AVG(`CYL`) FROM rrd_month INTO @avg_CYL;
		SELECT AVG(`PAV`) FROM rrd_month INTO @avg_PAV;
		SELECT AVG(`NAV`) FROM rrd_month INTO @avg_NAV;
		SELECT AVG(`RIO`) FROM rrd_month INTO @avg_RIO;
		SELECT AVG(`UNIZAR`) FROM rrd_month INTO @avg_UNIZAR;
		SELECT AVG(`ARA`) FROM rrd_month INTO @avg_ARA;
		SELECT AVG(`CAT`) FROM rrd_month INTO @avg_CAT;
		SELECT AVG(`CIEMAT`) FROM rrd_month INTO @avg_CIEMAT;
		SELECT AVG(`TELMAD`) FROM rrd_month INTO @avg_TELMAD;
		SELECT AVG(`MAD`) FROM rrd_month INTO @avg_MAD;
		SELECT AVG(`BAL`) FROM rrd_month INTO @avg_BAL;
		SELECT AVG(`UIB`) FROM rrd_month INTO @avg_UIB;
		SELECT AVG(`UV`) FROM rrd_month INTO @avg_UV;
		SELECT AVG(`EXT`) FROM rrd_month INTO @avg_EXT;
		SELECT AVG(`CLM`) FROM rrd_month INTO @avg_CLM;
		SELECT AVG(`VAL`) FROM rrd_month INTO @avg_VAL;
		SELECT AVG(`MUR`) FROM rrd_month INTO @avg_MUR;
		SELECT AVG(`AND`) FROM rrd_month INTO @avg_AND;
		SELECT AVG(`CICA`) FROM rrd_month INTO @avg_CICA;
		SELECT AVG(`CAN-L`) FROM rrd_month INTO @avg_CAN_L;
		SELECT AVG(`ULPGC`) FROM rrd_month INTO @avg_ULPGC;
		SELECT AVG(`IAC`) FROM rrd_month INTO @avg_IAC;
		SELECT AVG(`CAN-T`) FROM rrd_month INTO @avg_CAN_T;
		SELECT AVG(`GAL-UVA`) FROM rrd_month INTO @avg_GAL_UVA;
		SELECT AVG(`AST-UVA`) FROM rrd_month INTO @avg_AST_UVA;
		SELECT AVG(`CAB-UVA`) FROM rrd_month INTO @avg_CAB_UVA;
		SELECT AVG(`PAV-UVA`) FROM rrd_month INTO @avg_PAV_UVA;
		SELECT AVG(`PAV-UNIZAR`) FROM rrd_month INTO @avg_PAV_UNIZAR;
		SELECT AVG(`RIO-UNIZAR`) FROM rrd_month INTO @avg_RIO_UNIZAR;
		SELECT AVG(`NAV-UNIZAR`) FROM rrd_month INTO @avg_NAV_UNIZAR;
		SELECT AVG(`ARA-UNIZAR`) FROM rrd_month INTO @avg_ARA_UNIZAR;
		SELECT AVG(`CAT-UNIZAR`) FROM rrd_month INTO @avg_CAT_UNIZAR;
		SELECT AVG(`CAT-UV`) FROM rrd_month INTO @avg_CAT_UV;
		SELECT AVG(`UNIZAR-UVA`) FROM rrd_month INTO @avg_UNIZAR_UVA;
		SELECT AVG(`UNIZAR-GAL`) FROM rrd_month INTO @avg_UNIZAR_GAL;
		SELECT AVG(`UNIZAR-RIO`) FROM rrd_month INTO @avg_UNIZAR_RIO;
		SELECT AVG(`UNIZAR-PAV`) FROM rrd_month INTO @avg_UNIZAR_PAV;
		SELECT AVG(`UNIZAR-NAV`) FROM rrd_month INTO @avg_UNIZAR_NAV;
		SELECT AVG(`UNIZAR-ARA`) FROM rrd_month INTO @avg_UNIZAR_ARA;
		SELECT AVG(`UNIZAR-CAT`) FROM rrd_month INTO @avg_UNIZAR_CAT;
		SELECT AVG(`UNIZAR-UB`) FROM rrd_month INTO @avg_UNIZAR_UB;
		SELECT AVG(`UNIZAR-TELMAD`) FROM rrd_month INTO @avg_UNIZAR_TELMAD;
		SELECT AVG(`UVA-CYL`) FROM rrd_month INTO @avg_UVA_CYL;
		SELECT AVG(`UVA-GAL`) FROM rrd_month INTO @avg_UVA_GAL;
		SELECT AVG(`UVA-AST`) FROM rrd_month INTO @avg_UVA_AST;
		SELECT AVG(`UVA-CAB`) FROM rrd_month INTO @avg_UVA_CAB;
		SELECT AVG(`UVA-PAV`) FROM rrd_month INTO @UVA_PAV;
		SELECT AVG(`UVA-UNIZAR`) FROM rrd_month INTO @UVA_UNIZAR;
		SELECT AVG(`UVA-CIEMAT`) FROM rrd_month INTO @avg_UVA_CIEMAT;
		SELECT AVG(`CYL-UVA`) FROM rrd_month INTO @avg_CYL_UVA;
		SELECT AVG(`CIEMAT-TELMAD`) FROM rrd_month INTO @avg_CIEMAT_TELMAD;
		SELECT AVG(`CIEMAT-MAD`) FROM rrd_month INTO @avg_CIEMAT_MAD;
		SELECT AVG(`CIEMAT-CLM`) FROM rrd_month INTO @avg_CIEMAT_CLM;
		SELECT AVG(`CIEMAT-CICA`) FROM rrd_month INTO @avg_CIEMAT_CICA;
		SELECT AVG(`CIEMAT-EXT`) FROM rrd_month INTO @avg_CIEMAT_EXT;
		SELECT AVG(`CIEMAT-IAC`) FROM rrd_month INTO @avg_CIEMAT_IAC;
		SELECT AVG(`TELMAD-CIEMAT`) FROM rrd_month INTO @avg_TELMAD_CIEMAT;
		SELECT AVG(`TELMAD-IAC`) FROM rrd_month INTO @avg_TELMAD_IAC;
		SELECT AVG(`TELMAD-MAD`) FROM rrd_month INTO @avg_TELMAD_MAD;
		SELECT AVG(`TELMAD-UNIZAR`) FROM rrd_month INTO @avg_TELMAD_UNIZAR;
		SELECT AVG(`TELMAD-UV`) FROM rrd_month INTO @avg_TELMAD_UV;
		SELECT AVG(`MAD-CIEMAT`) FROM rrd_month INTO @avg_MAD_CIEMAT;
		SELECT AVG(`MAD-TELMAD`) FROM rrd_month INTO @avg_MAD_TELMAD;
		SELECT AVG(`UB-UNIZAR`) FROM rrd_month INTO @avg_UB_UNIZAR;
		SELECT AVG(`UB-BAL`) FROM rrd_month INTO @avg_UB_BAL;
		SELECT AVG(`UB-UV`) FROM rrd_month INTO @avg_UB_UV;
		SELECT AVG(`BAL-UB`) FROM rrd_month INTO @avg_BAL_UB;
		SELECT AVG(`UV-TELMAD`) FROM rrd_month INTO @avg_UV_TELMAD;
		SELECT AVG(`UV-CAT`) FROM rrd_month INTO @avg_UV_CAT;
		SELECT AVG(`UV-UB`) FROM rrd_month INTO @avg_UV_UB;
		SELECT AVG(`UV-VAL`) FROM rrd_month INTO @avg_UV_VAL;
		SELECT AVG(`UV-MUR`) FROM rrd_month INTO @avg_UV_MUR;
		SELECT AVG(`UV-AND`) FROM rrd_month INTO @avg_UV_AND;
		SELECT AVG(`UV-CICA`) FROM rrd_month INTO @avg_UV_CICA;
		SELECT AVG(`VAL-UV`) FROM rrd_month INTO @avg_VAL_UV;
		SELECT AVG(`MUR-UV`) FROM rrd_month INTO @avg_MUR_UV;
		SELECT AVG(`MUR-CICA`) FROM rrd_month INTO @avg_MUR_CICA;
		SELECT AVG(`CLM-CIEMAT`) FROM rrd_month INTO @avg_CLM_CIEMAT;
		SELECT AVG(`AND-CICA`) FROM rrd_month INTO @avg_AND_CICA;
		SELECT AVG(`AND-UV`) FROM rrd_month INTO @avg_AND_UV;
		SELECT AVG(`CICA-EXT`) FROM rrd_month INTO @avg_CICA_EXT;
		SELECT AVG(`CICA-CIEMAT`) FROM rrd_month INTO @avg_CICA_CIEMAT;
		SELECT AVG(`CICA-UV`) FROM rrd_month INTO @avg_CICA_UV;
		SELECT AVG(`CICA-AND`) FROM rrd_month INTO @avg_CICA_AND;
		SELECT AVG(`CICA-MUR`) FROM rrd_month INTO @avg_CICA_MUR;
		SELECT AVG(`CICA-ULPGC`) FROM rrd_month INTO @avg_CICA_ULPGC;
		SELECT AVG(`EXT-CIEMAT`) FROM rrd_month INTO @avg_EXT_CIEMAT;
		SELECT AVG(`EXT-CICA`) FROM rrd_month INTO @avg_EXT_CICA;
		SELECT AVG(`CAN-L-ULPGC`) FROM rrd_month INTO @avg_CAN_L_ULPGC;
  		SELECT AVG(`ULPGC-CAN-L`) FROM rrd_month INTO @avg_ULPGC_CAN_L;
		SELECT AVG(`ULPGC-CICA`) FROM rrd_month INTO @avg_ULPGC_CICA;
		SELECT AVG(`ULPGC-IAC`) FROM rrd_month INTO @avg_ULPGC_IAC;
		SELECT AVG(`IAC-ULPGC`) FROM rrd_month INTO @avg_IAC_ULPGC;
		SELECT AVG(`IAC-CIEMAT`) FROM rrd_month INTO @avg_IAC_CIEMAT;
		SELECT AVG(`IAC-TELMAD`) FROM rrd_month INTO @avg_IAC_TELMAD;
		SELECT AVG(`IAC-CAN-T`) FROM rrd_month INTO @avg_IAC_CAN_T;
		SELECT AVG(`CAN-T-IAC`) FROM rrd_month INTO @avg_CAN_T_IAC;

		REPLACE INTO rrd_year (
			attribute_key,
			start_utime,
			logging_interval,
			GAL, AST, CAB, UVA, CYL, PAV, NAV, RIO, UNIZAR, ARA, CAT, CIEMAT, TELMAD, MAD, BAL, UIB, UV, EXT, CLM, VAL, MUR, `AND`, CICA, `CAN-L`, ULPGC, IAC, `CAN-T`) 
		VALUES(
			@avg_atribute_key,
			UNIX_TIMESTAMP(NOW()),
			36000,
			@avg_GAL, @avg_AST, @avg_CAB, @avg_UVA, @avg_CYL, @avg_PAV, @avg_NAV, @avg_RIO, @avg_UNIZAR, @avg_ARA, @avg_CAT, @avg_CIEMAT, @avg_TELMAD,  @avg_MAD, @avg_BAL, @avg_UIB, @avg_UV, @avg_EXT, @avg_CLM, @avg_VAL, @avg_MUR, @avg_AND, @avg_CICA, @avg_CAN_L, @avg_ULPGC, @avg_IAC, @avg_CAN_T);
        SET NEW.rrd_key = 1;
    END IF;
UPDATE rrd_month_key SET rrd_key = NEW.rrd_key;
END
$$
DELIMITER ;

DROP TRIGGER IF EXISTS `rrd_year_ins`;

DELIMITER $$
CREATE TRIGGER  `rrd_year_ins`
BEFORE INSERT ON `rrd_year`
FOR EACH ROW
BEGIN
    SET @rrd_key_year = 0;
    SET @rows_year = 60;
    -- PK is NULL
    IF NEW.rrd_key = 0 THEN
        SELECT rrd_key + 1
            FROM rrd_year_key
            INTO @rrd_key_year;
        SET NEW.rrd_key = @rrd_key_year;
    END IF;
    IF (NEW.rrd_key % (@rows_year+1)) THEN
        SET NEW.rrd_key = NEW.rrd_key % (@rows_year+1);
    ELSE
    	SET @avg_atribute_key = ROUND(RAND()*100000);
		SELECT AVG(`GAL`) FROM rrd_year INTO @avg_GAL;
		SELECT AVG(`AST`) FROM rrd_year INTO @avg_AST;
		SELECT AVG(`CAB`) FROM rrd_year INTO @avg_CAB;
		SELECT AVG(`UVA`) FROM rrd_year INTO @avg_UVA;
		SELECT AVG(`CYL`) FROM rrd_year INTO @avg_CYL;
		SELECT AVG(`PAV`) FROM rrd_year INTO @avg_PAV;
		SELECT AVG(`NAV`) FROM rrd_year INTO @avg_NAV;
		SELECT AVG(`RIO`) FROM rrd_year INTO @avg_RIO;
		SELECT AVG(`UNIZAR`) FROM rrd_year INTO @avg_UNIZAR;
		SELECT AVG(`ARA`) FROM rrd_year INTO @avg_ARA;
		SELECT AVG(`CAT`) FROM rrd_year INTO @avg_CAT;
		SELECT AVG(`CIEMAT`) FROM rrd_year INTO @avg_CIEMAT;
		SELECT AVG(`TELMAD`) FROM rrd_year INTO @avg_TELMAD;
		SELECT AVG(`MAD`) FROM rrd_year INTO @avg_MAD;
		SELECT AVG(`BAL`) FROM rrd_year INTO @avg_BAL;
		SELECT AVG(`UIB`) FROM rrd_year INTO @avg_UIB;
		SELECT AVG(`UV`) FROM rrd_year INTO @avg_UV;
		SELECT AVG(`EXT`) FROM rrd_year INTO @avg_EXT;
		SELECT AVG(`CLM`) FROM rrd_year INTO @avg_CLM;
		SELECT AVG(`VAL`) FROM rrd_year INTO @avg_VAL;
		SELECT AVG(`MUR`) FROM rrd_year INTO @avg_MUR;
		SELECT AVG(`AND`) FROM rrd_year INTO @avg_AND;
		SELECT AVG(`CICA`) FROM rrd_year INTO @avg_CICA;
		SELECT AVG(`CAN-L`) FROM rrd_year INTO @avg_CAN_L;
		SELECT AVG(`ULPGC`) FROM rrd_year INTO @avg_ULPGC;
		SELECT AVG(`IAC`) FROM rrd_year INTO @avg_IAC;
		SELECT AVG(`CAN-T`) FROM rrd_year INTO @avg_CAN_T;
		SELECT AVG(`GAL-UVA`) FROM rrd_year INTO @avg_GAL_UVA;
		SELECT AVG(`AST-UVA`) FROM rrd_year INTO @avg_AST_UVA;
		SELECT AVG(`CAB-UVA`) FROM rrd_year INTO @avg_CAB_UVA;
		SELECT AVG(`PAV-UVA`) FROM rrd_year INTO @avg_PAV_UVA;
		SELECT AVG(`PAV-UNIZAR`) FROM rrd_year INTO @avg_PAV_UNIZAR;
		SELECT AVG(`RIO-UNIZAR`) FROM rrd_year INTO @avg_RIO_UNIZAR;
		SELECT AVG(`NAV-UNIZAR`) FROM rrd_year INTO @avg_NAV_UNIZAR;
		SELECT AVG(`ARA-UNIZAR`) FROM rrd_year INTO @avg_ARA_UNIZAR;
		SELECT AVG(`CAT-UNIZAR`) FROM rrd_year INTO @avg_CAT_UNIZAR;
		SELECT AVG(`CAT-UV`) FROM rrd_year INTO @avg_CAT_UV;
		SELECT AVG(`UNIZAR-UVA`) FROM rrd_year INTO @avg_UNIZAR_UVA;
		SELECT AVG(`UNIZAR-GAL`) FROM rrd_year INTO @avg_UNIZAR_GAL;
		SELECT AVG(`UNIZAR-RIO`) FROM rrd_year INTO @avg_UNIZAR_RIO;
		SELECT AVG(`UNIZAR-PAV`) FROM rrd_year INTO @avg_UNIZAR_PAV;
		SELECT AVG(`UNIZAR-NAV`) FROM rrd_year INTO @avg_UNIZAR_NAV;
		SELECT AVG(`UNIZAR-ARA`) FROM rrd_year INTO @avg_UNIZAR_ARA;
		SELECT AVG(`UNIZAR-CAT`) FROM rrd_year INTO @avg_UNIZAR_CAT;
		SELECT AVG(`UNIZAR-UB`) FROM rrd_year INTO @avg_UNIZAR_UB;
		SELECT AVG(`UNIZAR-TELMAD`) FROM rrd_year INTO @avg_UNIZAR_TELMAD;
		SELECT AVG(`UVA-CYL`) FROM rrd_year INTO @avg_UVA_CYL;
		SELECT AVG(`UVA-GAL`) FROM rrd_year INTO @avg_UVA_GAL;
		SELECT AVG(`UVA-AST`) FROM rrd_year INTO @avg_UVA_AST;
		SELECT AVG(`UVA-CAB`) FROM rrd_year INTO @avg_UVA_CAB;
		SELECT AVG(`UVA-PAV`) FROM rrd_year INTO @UVA_PAV;
		SELECT AVG(`UVA-UNIZAR`) FROM rrd_year INTO @UVA_UNIZAR;
		SELECT AVG(`UVA-CIEMAT`) FROM rrd_year INTO @avg_UVA_CIEMAT;
		SELECT AVG(`CYL-UVA`) FROM rrd_year INTO @avg_CYL_UVA;
		SELECT AVG(`CIEMAT-TELMAD`) FROM rrd_year INTO @avg_CIEMAT_TELMAD;
		SELECT AVG(`CIEMAT-MAD`) FROM rrd_year INTO @avg_CIEMAT_MAD;
		SELECT AVG(`CIEMAT-CLM`) FROM rrd_year INTO @avg_CIEMAT_CLM;
		SELECT AVG(`CIEMAT-CICA`) FROM rrd_year INTO @avg_CIEMAT_CICA;
		SELECT AVG(`CIEMAT-EXT`) FROM rrd_year INTO @avg_CIEMAT_EXT;
		SELECT AVG(`CIEMAT-IAC`) FROM rrd_year INTO @avg_CIEMAT_IAC;
		SELECT AVG(`TELMAD-CIEMAT`) FROM rrd_year INTO @avg_TELMAD_CIEMAT;
		SELECT AVG(`TELMAD-IAC`) FROM rrd_year INTO @avg_TELMAD_IAC;
		SELECT AVG(`TELMAD-MAD`) FROM rrd_year INTO @avg_TELMAD_MAD;
		SELECT AVG(`TELMAD-UNIZAR`) FROM rrd_year INTO @avg_TELMAD_UNIZAR;
		SELECT AVG(`TELMAD-UV`) FROM rrd_year INTO @avg_TELMAD_UV;
		SELECT AVG(`MAD-CIEMAT`) FROM rrd_year INTO @avg_MAD_CIEMAT;
		SELECT AVG(`MAD-TELMAD`) FROM rrd_year INTO @avg_MAD_TELMAD;
		SELECT AVG(`UB-UNIZAR`) FROM rrd_year INTO @avg_UB_UNIZAR;
		SELECT AVG(`UB-BAL`) FROM rrd_year INTO @avg_UB_BAL;
		SELECT AVG(`UB-UV`) FROM rrd_year INTO @avg_UB_UV;
		SELECT AVG(`BAL-UB`) FROM rrd_year INTO @avg_BAL_UB;
		SELECT AVG(`UV-TELMAD`) FROM rrd_year INTO @avg_UV_TELMAD;
		SELECT AVG(`UV-CAT`) FROM rrd_year INTO @avg_UV_CAT;
		SELECT AVG(`UV-UB`) FROM rrd_year INTO @avg_UV_UB;
		SELECT AVG(`UV-VAL`) FROM rrd_year INTO @avg_UV_VAL;
		SELECT AVG(`UV-MUR`) FROM rrd_year INTO @avg_UV_MUR;
		SELECT AVG(`UV-AND`) FROM rrd_year INTO @avg_UV_AND;
		SELECT AVG(`UV-CICA`) FROM rrd_year INTO @avg_UV_CICA;
		SELECT AVG(`VAL-UV`) FROM rrd_year INTO @avg_VAL_UV;
		SELECT AVG(`MUR-UV`) FROM rrd_year INTO @avg_MUR_UV;
		SELECT AVG(`MUR-CICA`) FROM rrd_year INTO @avg_MUR_CICA;
		SELECT AVG(`CLM-CIEMAT`) FROM rrd_year INTO @avg_CLM_CIEMAT;
		SELECT AVG(`AND-CICA`) FROM rrd_year INTO @avg_AND_CICA;
		SELECT AVG(`AND-UV`) FROM rrd_year INTO @avg_AND_UV;
		SELECT AVG(`CICA-EXT`) FROM rrd_year INTO @avg_CICA_EXT;
		SELECT AVG(`CICA-CIEMAT`) FROM rrd_year INTO @avg_CICA_CIEMAT;
		SELECT AVG(`CICA-UV`) FROM rrd_year INTO @avg_CICA_UV;
		SELECT AVG(`CICA-AND`) FROM rrd_year INTO @avg_CICA_AND;
		SELECT AVG(`CICA-MUR`) FROM rrd_year INTO @avg_CICA_MUR;
		SELECT AVG(`CICA-ULPGC`) FROM rrd_year INTO @avg_CICA_ULPGC;
		SELECT AVG(`EXT-CIEMAT`) FROM rrd_year INTO @avg_EXT_CIEMAT;
		SELECT AVG(`EXT-CICA`) FROM rrd_year INTO @avg_EXT_CICA;
		SELECT AVG(`CAN-L-ULPGC`) FROM rrd_year INTO @avg_CAN_L_ULPGC;
  		SELECT AVG(`ULPGC-CAN-L`) FROM rrd_year INTO @avg_ULPGC_CAN_L;
		SELECT AVG(`ULPGC-CICA`) FROM rrd_year INTO @avg_ULPGC_CICA;
		SELECT AVG(`ULPGC-IAC`) FROM rrd_year INTO @avg_ULPGC_IAC;
		SELECT AVG(`IAC-ULPGC`) FROM rrd_year INTO @avg_IAC_ULPGC;
		SELECT AVG(`IAC-CIEMAT`) FROM rrd_year INTO @avg_IAC_CIEMAT;
		SELECT AVG(`IAC-TELMAD`) FROM rrd_year INTO @avg_IAC_TELMAD;
		SELECT AVG(`IAC-CAN-T`) FROM rrd_year INTO @avg_IAC_CAN_T;
		SELECT AVG(`CAN-T-IAC`) FROM rrd_year INTO @avg_CAN_T_IAC;

        SET NEW.rrd_key = 1;
    END IF;
UPDATE rrd_year_key SET rrd_key = NEW.rrd_key;
END
$$
DELIMITER ;

SET GLOBAL event_scheduler = ON;
SHOW PROCESSLIST;
DROP EVENT project_min;

CREATE EVENT project_min ON SCHEDULE EVERY 1 MINUTE DO REPLACE INTO rrd_min (attribute_key, start_utime, logging_interval,	GAL, AST, CAB, UVA, CYL, PAV, NAV, RIO, UNIZAR, ARA, CAT, CIEMAT, TELMAD, MAD, BAL, UIB, UV, EXT, CLM, VAL, MUR, `AND`, CICA, `CAN-L`, ULPGC, IAC, `CAN-T`) 	VALUES(ROUND(RAND()*100000), UNIX_TIMESTAMP(NOW()), 100, ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000), ROUND(RAND()*100000));