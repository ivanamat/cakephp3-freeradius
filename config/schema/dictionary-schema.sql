
--
-- Table structure for table `dictionary_vendors`
--

DROP TABLE IF EXISTS `dictionary_vendors`;
CREATE TABLE `dictionary_vendors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`(64))
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `dictionary_attributes`
--

DROP TABLE IF EXISTS `dictionary_attributes`;
CREATE TABLE `dictionary_attributes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dictionary_vendor_id` int(11) unsigned NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `oid` varchar(16) NOT NULL,
  `type` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`(64))
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;