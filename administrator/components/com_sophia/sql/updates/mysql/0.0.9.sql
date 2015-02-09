CREATE TABLE `#__sophia_colegio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `establecimiento` text,
  `direccion` text,
  `telefono` text,
  `director` text,
  `published` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


INSERT INTO `#__sophia_colegio` VALUES (1,'Sophia','Av. santa Maria 1234','02- 123456','Alex olave',1);

UPDATE `#__sophia_botones` SET link='colegios' WHERE id =1;