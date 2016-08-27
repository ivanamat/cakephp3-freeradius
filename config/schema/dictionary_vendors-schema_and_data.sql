-- MySQL dump 10.13  Distrib 5.7.12, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: databasename
-- ------------------------------------------------------
-- Server version	5.7.13-0ubuntu0.16.04.2

--
-- Table structure for table `dictionary_vendors`
--
DROP TABLE IF EXISTS `dictionary_vendors`;
CREATE TABLE `dictionary_vendors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dictionary_vendors`
--
LOCK TABLES `dictionary_vendors` WRITE;
INSERT INTO `dictionary_vendors` VALUES (1,'3com'),(2,'3gpp'),(3,'3gpp2'),(4,'acc'),(5,'acme'),(6,'actelis'),(7,'aerohive'),(8,'airespace'),(9,'alcatel'),(10,'alcatel-lucent.aaa'),(11,'alcatel.esam'),(12,'alcatel.sr'),(13,'alteon'),(14,'altiga'),(15,'alvarion'),(16,'alvarion.wimax.v2_2'),(17,'apc'),(18,'aptis'),(19,'aruba'),(20,'ascend'),(21,'ascend.illegal'),(22,'asn'),(23,'audiocodes'),(24,'avaya'),(25,'azaire'),(26,'bay'),(27,'bintec'),(28,'bluecoat'),(29,'bristol'),(30,'broadsoft'),(31,'brocade'),(32,'bskyb'),(33,'bt'),(34,'cablelabs'),(35,'cabletron'),(36,'camiant'),(37,'chillispot'),(38,'cisco'),(39,'cisco.asa'),(40,'cisco.bbsm'),(41,'cisco.vpn3000'),(42,'cisco.vpn5000'),(43,'clavister'),(44,'colubris'),(45,'columbia_university'),(46,'compat'),(47,'cosine'),(48,'dante'),(49,'dhcp'),(50,'digium'),(51,'dlink'),(52,'efficientip'),(53,'eltex'),(54,'epygi'),(55,'equallogic'),(56,'ericsson'),(57,'erx'),(58,'extreme'),(59,'f5'),(60,'fdxtended'),(61,'fortinet'),(62,'foundry'),(63,'freedhcp'),(64,'freeradius'),(65,'freeradius.internal'),(66,'freeswitch'),(67,'gandalf'),(68,'garderos'),(69,'gemtek'),(70,'h3c'),(71,'hp'),(72,'huawei'),(73,'iana'),(74,'iea'),(75,'infoblox'),(76,'infonet'),(77,'ipunplugged'),(78,'issanni'),(79,'itk'),(80,'juniper'),(81,'karlnet'),(82,'kineto'),(83,'lancom'),(84,'livingston'),(85,'localweb'),(86,'lucent'),(87,'manzara'),(88,'merit'),(89,'meru'),(90,'microsoft'),(91,'mikrotik'),(92,'motorola'),(93,'motorola.illegal'),(94,'motorola.wimax'),(95,'navini'),(96,'netscreen'),(97,'networkphysics'),(98,'nexans'),(99,'nokia'),(100,'nokia.conflict'),(101,'nomadix'),(102,'nortel'),(103,'ntua'),(104,'openser'),(105,'packeteer'),(106,'paloalto'),(107,'patton'),(108,'propel'),(109,'prosoft'),(110,'proxim'),(111,'purewave'),(112,'quiconnect'),(113,'quintum'),(114,'redback'),(115,'redcreek'),(116,'rfc2865'),(117,'rfc2866'),(118,'rfc2867'),(119,'rfc2868'),(120,'rfc2869'),(121,'rfc3162'),(122,'rfc3576'),(123,'rfc3580'),(124,'rfc4072'),(125,'rfc4372'),(126,'rfc4603'),(127,'rfc4675'),(128,'rfc4679'),(129,'rfc4818'),(130,'rfc4849'),(131,'rfc5090'),(132,'rfc5176'),(133,'rfc5447'),(134,'rfc5580'),(135,'rfc5607'),(136,'rfc5904'),(137,'rfc6519'),(138,'rfc6572'),(139,'rfc6677'),(140,'rfc6911'),(141,'rfc6929'),(142,'rfc6930'),(143,'rfc7055'),(144,'riverstone'),(145,'roaringpenguin'),(146,'sg'),(147,'shasta'),(148,'shiva'),(149,'siemens'),(150,'slipstream'),(151,'sofaware'),(152,'sonicwall'),(153,'springtide'),(154,'starent'),(155,'starent.vsa1'),(156,'symbol'),(157,'t_systems_nova'),(158,'telebit'),(159,'telkom'),(160,'terena'),(161,'trapeze'),(162,'tropos'),(163,'ukerna'),(164,'unix'),(165,'usr'),(166,'usr.illegal'),(167,'utstarcom'),(168,'valemount'),(169,'versanet'),(170,'vqp'),(171,'walabi'),(172,'waverider'),(173,'wichorus'),(174,'wimax'),(175,'wimax.alvarion'),(176,'wimax.wichorus'),(177,'wispr'),(178,'xedia'),(179,'xylan'),(180,'yubico'),(181,'zeus'),(182,'zte'),(183,'zyxel');
UNLOCK TABLES;

-- Dump completed on 2016-08-27 10:22:27
