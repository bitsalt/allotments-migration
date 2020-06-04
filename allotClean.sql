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


-- END TEST REFRESH --

