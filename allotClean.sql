--
-- Table structure for table `school_years`
--

DROP TABLE IF EXISTS `school_years`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `school_years` (
  `school_year` int NOT NULL,
  `display` varchar(10) DEFAULT NULL,
  `current_ind` int DEFAULT NULL,
  `admin_current_ind` tinyint(1) DEFAULT NULL,
  `visible_to_schools` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`school_year`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `school_years`
--

LOCK TABLES `school_years` WRITE;
/*!40000 ALTER TABLE `school_years` DISABLE KEYS */;
INSERT INTO `school_years` VALUES (2013,'2013-2014',0,0,1),(2014,'2014-2015',0,0,1),(2015,'2015-2016',0,0,1),(2016,'2016-2017',0,0,1),(2017,'2017-2018',0,0,1),(2018,'2018-2019',0,0,1),(2019,'2019-2020',1,0,1),(2020,'2020-2021',0,1,1);
/*!40000 ALTER TABLE `school_years` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `school_type`
--

DROP TABLE IF EXISTS `school_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `school_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_year` int DEFAULT NULL,
  `school_type` varchar(10) DEFAULT NULL,
  `school_type_name` varchar(40) DEFAULT NULL,
  `override1` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `scy_index` (`school_year`),
  KEY `st_index` (`school_type`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `school_type`
--

LOCK TABLES `school_type` WRITE;
/*!40000 ALTER TABLE `school_type` DISABLE KEYS */;
INSERT INTO `school_type` VALUES (1,2013,'TR','Traditional',NULL),(2,2013,'YR','Multi-Track Year-round ','Y'),(3,2013,'SY','Single-Track Year-round',''),(4,2013,'Mod','Modified',NULL),(5,2014,'TR','Traditional',NULL),(6,2014,'YR','Multi-Track Year-round ','Y'),(7,2014,'SY','Single-Track Year-round',''),(8,2014,'Mod','Modified',NULL),(9,2014,'Alt','Alternative',''),(10,2014,'EC','Early College',''),(11,2015,'TR','Traditional',''),(12,2015,'YR','Multi-Track Year-round ','Y'),(13,2015,'SY','Single-Track Year-round',''),(14,2015,'Mod','Modified',''),(15,2015,'Alt','Alternative',''),(16,2015,'EC','Early College',''),(17,2016,'TR','Traditional',''),(18,2016,'YR','Multi-Track Year-round ','Y'),(19,2016,'SY','Single-Track Year-round',''),(20,2016,'Mod','Modified',''),(21,2016,'Alt','Alternative',''),(22,2016,'EC','Early College',''),(23,2017,'TR','Traditional',''),(24,2017,'YR','Multi-Track Year-round ','Y'),(25,2017,'SY','Single-Track Year-round',''),(26,2017,'Mod','Modified',''),(27,2017,'Alt','Alternative',''),(28,2017,'EC','Early College',''),(29,2018,'TR','Traditional',''),(30,2018,'YR','Multi-Track Year-round ','Y'),(31,2018,'SY','Single-Track Year-round',''),(32,2018,'Mod','Modified',''),(33,2018,'Alt','Alternative',''),(34,2018,'EC','Early College',''),(35,2019,'TR','Traditional',''),(36,2019,'YR','Multi-Track Year-round ','Y'),(37,2019,'SY','Single-Track Year-round',''),(38,2019,'Mod','Modified',''),(39,2019,'Alt','Alternative',''),(40,2019,'EC','Early College',''),(41,2020,'TR','Traditional',''),(42,2020,'YR','Multi-Track Year-round ','Y'),(43,2020,'SY','Single-Track Year-round',''),(44,2020,'Mod','Modified',''),(45,2020,'Alt','Alternative',''),(46,2020,'EC','Early College','');
/*!40000 ALTER TABLE `school_type` ENABLE KEYS */;
UNLOCK TABLES;

-- Table structure for table `grade_levels`
--

DROP TABLE IF EXISTS `grade_levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grade_levels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_year` int DEFAULT NULL,
  `grade_level` varchar(10) DEFAULT NULL,
  `grade_level_name` varchar(50) DEFAULT NULL,
  `display_order` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sy_index` (`school_year`),
  KEY `gl_index` (`grade_level`),
  KEY `gln_index` (`grade_level_name`),
  KEY `do_index` (`display_order`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grade_levels`
--

LOCK TABLES `grade_levels` WRITE;
/*!40000 ALTER TABLE `grade_levels` DISABLE KEYS */;
INSERT INTO `grade_levels` VALUES (1,2013,'E','Elementary',1),(2,2013,'M','Middle',2),(3,2013,'H','High',3),(4,2013,'L','K-8 Academy',4),(5,2013,'U','6-12 Leadership Academy',5),(6,2014,'E','Elementary',1),(7,2014,'M','Middle',2),(8,2014,'H','High',3),(9,2014,'L','K-8 Academy',4),(10,2014,'U','6-12 Leadership Academy',5),(11,2015,'E','Elementary',1),(12,2015,'M','Middle',2),(13,2015,'H','High',3),(14,2015,'L','K-8 Academy',4),(15,2015,'U','6-12 Leadership Academy',5),(16,2016,'E','Elementary',1),(17,2016,'M','Middle',2),(18,2016,'H','High',3),(19,2016,'L','K-8 Academy',4),(20,2016,'U','6-12 Leadership Academy',5),(21,2017,'E','Elementary',1),(22,2017,'M','Middle',2),(23,2017,'H','High',3),(24,2017,'L','K-8 Academy',4),(25,2017,'U','6-12 Leadership Academy',5),(26,2018,'E','Elementary',1),(27,2018,'M','Middle',2),(28,2018,'H','High',3),(29,2018,'L','K-8 Academy',4),(30,2018,'U','6-12 Leadership Academy',5),(31,2019,'E','Elementary',1),(32,2019,'M','Middle',2),(33,2019,'H','High',3),(34,2019,'L','K-8 Academy',4),(35,2019,'U','6-12 Leadership Academy',5),(36,2020,'E','Elementary',1),(37,2020,'M','Middle',2),(38,2020,'H','High',3),(39,2020,'L','K-8 Academy',4),(40,2020,'U','6-12 Leadership Academy',5);
/*!40000 ALTER TABLE `grade_levels` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) DEFAULT NULL,
  `school_year` int DEFAULT NULL,
  `fund` varchar(2) DEFAULT NULL,
  `salary_nonsalary_ind` char(1) DEFAULT NULL,
  `display_order` int DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Area Superintendent Allotments',2013,NULL,'S',1),(2,'Instructional Services Allotments',2013,NULL,'S',2),(3,'Auxiliary Services',2013,NULL,'S',3),(4,'State',2013,NULL,'N',1),(5,'Local',2013,NULL,'N',2),(6,'Enterprise',2013,NULL,'N',4),(7,'Grants/Contracts',2013,NULL,'N',3),(8,'Teachers',2013,NULL,NULL,0),(9,'Teacher Assistants',2013,NULL,NULL,0),(10,'Area Superintendent Allotments',2014,NULL,'S',1),(11,'Instructional Services Allotments',2014,NULL,'S',2),(12,'Auxiliary Services',2014,NULL,'S',3),(13,'State',2014,'01','N',1),(14,'Local',2014,'02','N',2),(15,'Enterprise',2014,'07','N',4),(16,'Grants/Contracts',2014,'05','N',3),(17,'Teachers',2014,NULL,NULL,0),(18,'Teacher Assistants',2014,NULL,NULL,0),(19,'Area Superintendent Allotments',2015,NULL,'S',1),(20,'Instructional Services Allotments',2015,NULL,'S',2),(21,'Auxiliary Services',2015,NULL,'S',3),(22,'State',2015,NULL,'N',1),(23,'Local',2015,NULL,'N',2),(24,'Enterprise',2015,NULL,'N',4),(25,'Grants/Contracts',2015,NULL,'N',3),(26,'Teachers',2015,NULL,'',0),(27,'Teacher Assistants',2015,NULL,'',0),(28,'Area Superintendent Allotments',2016,NULL,'S',1),(29,'Instructional Services Allotments',2016,NULL,'S',2),(30,'Auxiliary Services',2016,NULL,'S',3),(31,'State',2016,NULL,'N',1),(32,'Local',2016,NULL,'N',2),(33,'Enterprise',2016,NULL,'N',4),(34,'Grants/Contracts',2016,NULL,'N',3),(35,'Teachers',2016,NULL,'',0),(36,'Teacher Assistants',2016,NULL,'',0),(37,'Area Superintendent Allotments',2017,NULL,'S',1),(38,'Instructional Services Allotments',2017,NULL,'S',2),(39,'Auxiliary Services',2017,NULL,'S',3),(40,'State',2017,NULL,'N',1),(41,'Local',2017,NULL,'N',2),(42,'Enterprise',2017,NULL,'N',4),(43,'Grants/Contracts',2017,NULL,'N',3),(44,'Teachers',2017,NULL,'',0),(45,'Teacher Assistants',2017,NULL,'',0),(54,'Instructional Assistants',2018,NULL,'',0),(53,'Teachers',2018,NULL,'',0),(52,'Grants/Contracts',2018,NULL,'N',3),(51,'Enterprise',2018,NULL,'N',4),(50,'Local',2018,NULL,'N',2),(49,'State',2018,NULL,'N',1),(48,'Auxiliary Services',2018,NULL,'S',3),(47,'Instructional Services Allotments',2018,NULL,'S',2),(46,'Area Superintendent Allotments',2018,NULL,'S',1),(55,'Instructional Assistants',2019,NULL,'',0),(56,'Teachers',2019,NULL,'',0),(57,'Grants/Contracts',2019,NULL,'N',3),(58,'Enterprise',2019,NULL,'N',4),(59,'Local',2019,NULL,'N',2),(60,'State',2019,NULL,'N',1),(61,'Auxiliary Services',2019,NULL,'S',3),(62,'Instructional Services Allotments',2019,NULL,'S',2),(63,'Area Superintendent Allotments',2019,NULL,'S',1),(64,'Instructional Assistants',2020,NULL,'',0),(65,'Teachers',2020,NULL,'',0),(66,'Grants/Contracts',2020,NULL,'N',3),(67,'Enterprise',2020,NULL,'N',4),(68,'Local',2020,NULL,'N',2),(69,'State',2020,NULL,'N',1),(70,'Auxiliary Services',2020,NULL,'S',3),(71,'Instructional Services Allotments',2020,NULL,'S',2),(72,'Area Superintendent Allotments',2020,NULL,'S',1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `grade_levels`
--

DROP TABLE IF EXISTS `grade_levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grade_levels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `school_year` int DEFAULT NULL,
  `grade_level` varchar(10) DEFAULT NULL,
  `grade_level_name` varchar(50) DEFAULT NULL,
  `display_order` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sy_index` (`school_year`),
  KEY `gl_index` (`grade_level`),
  KEY `gln_index` (`grade_level_name`),
  KEY `do_index` (`display_order`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grade_levels`
--

LOCK TABLES `grade_levels` WRITE;
/*!40000 ALTER TABLE `grade_levels` DISABLE KEYS */;
INSERT INTO `grade_levels` VALUES (1,2013,'E','Elementary',1),(2,2013,'M','Middle',2),(3,2013,'H','High',3),(4,2013,'L','K-8 Academy',4),(5,2013,'U','6-12 Leadership Academy',5),(6,2014,'E','Elementary',1),(7,2014,'M','Middle',2),(8,2014,'H','High',3),(9,2014,'L','K-8 Academy',4),(10,2014,'U','6-12 Leadership Academy',5),(11,2015,'E','Elementary',1),(12,2015,'M','Middle',2),(13,2015,'H','High',3),(14,2015,'L','K-8 Academy',4),(15,2015,'U','6-12 Leadership Academy',5),(16,2016,'E','Elementary',1),(17,2016,'M','Middle',2),(18,2016,'H','High',3),(19,2016,'L','K-8 Academy',4),(20,2016,'U','6-12 Leadership Academy',5),(21,2017,'E','Elementary',1),(22,2017,'M','Middle',2),(23,2017,'H','High',3),(24,2017,'L','K-8 Academy',4),(25,2017,'U','6-12 Leadership Academy',5),(26,2018,'E','Elementary',1),(27,2018,'M','Middle',2),(28,2018,'H','High',3),(29,2018,'L','K-8 Academy',4),(30,2018,'U','6-12 Leadership Academy',5),(31,2019,'E','Elementary',1),(32,2019,'M','Middle',2),(33,2019,'H','High',3),(34,2019,'L','K-8 Academy',4),(35,2019,'U','6-12 Leadership Academy',5),(36,2020,'E','Elementary',1),(37,2020,'M','Middle',2),(38,2020,'H','High',3),(39,2020,'L','K-8 Academy',4),(40,2020,'U','6-12 Leadership Academy',5);
/*!40000 ALTER TABLE `grade_levels` ENABLE KEYS */;
UNLOCK TABLES;

-- END TEST REFRESH --
