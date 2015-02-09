
DROP TABLE IF EXISTS `#__sophia_anno`;
CREATE TABLE IF NOT EXISTS  `#__sophia_anno` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `anno` int(11) DEFAULT '2012',
  `descripcion` text,
  `published` int(3) DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `#__sophia_anotaciones`;
CREATE TABLE `#__sophia_anotaciones` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `matricula_id` int(10) NOT NULL DEFAULT '0',
  `user_id` int(10) NOT NULL DEFAULT '0',
  `periodo_id` int(10) NOT NULL DEFAULT '0',
  `fecha` date DEFAULT NULL,
  `tipo` text,
  `anotacion` text,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `#__sophia_anuncios`;
CREATE TABLE `#__sophia_anuncios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `alumno_id` int(10) NOT NULL,
  `sbj` varchar(30) DEFAULT NULL,
  `msg` text,
  `date` date DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS `#__sophia_ara_detalles`;
CREATE TABLE `#__sophia_ara_detalles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `arancel_id` int(11) DEFAULT NULL,
  `cuota` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT '0',
  `published` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `#__sophia_aranceles`;
CREATE TABLE `#__sophia_aranceles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula_id` int(11) DEFAULT NULL,
  `anno_id` int(11) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT 'Pendiente',
  `published` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `#__sophia_asignaturas`;
CREATE TABLE `#__sophia_asignaturas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `asignatura` varchar(30) NOT NULL DEFAULT '',
  `programa` text,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `#__sophia_atrasos`;
CREATE TABLE `#__sophia_atrasos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `alumno_id` int(10) NOT NULL DEFAULT '0',
  `profesor_id` int(10) NOT NULL DEFAULT '0',
  `periodor_id` int(10) NOT NULL DEFAULT '0',
  `fecha` date DEFAULT NULL,
  `motivo` text,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS `#__sophia_calendario`;
CREATE TABLE `#__sophia_calendario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grupo` int(10) NOT NULL,
  `curso_id` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `#__sophia_ciudad`;
CREATE TABLE `#__sophia_ciudad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(50) DEFAULT NULL,
  `published` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `#__sophia_clases`;
CREATE TABLE `#__sophia_clases` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idprofesor` int(10) DEFAULT NULL,
  `curso` varchar(50) NOT NULL DEFAULT '',
  `description` text,
  `imagen` varchar(150) NOT NULL DEFAULT '',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS `#__sophia_comuna`;
CREATE TABLE `#__sophia_comuna` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `comuna` varchar(50) DEFAULT NULL,
  `published` int(11) DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS `#__sophia_curso`;
CREATE TABLE `#__sophia_curso` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `curso` varchar(50) NOT NULL DEFAULT '',
  `description` text,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS `#__sophia_curso_prof`;
CREATE TABLE `#__sophia_curso_prof` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curso_id` int(11) DEFAULT '1',
  `profesor_id` int(11) DEFAULT '1',
  `published` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `#__sophia_estudiantes`;
CREATE TABLE `#__sophia_estudiantes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `nombre` varchar(60) NOT NULL DEFAULT '',
  `sexo` varchar(10) NOT NULL DEFAULT '',
  `nacimiento` date NOT NULL,
  `ciudad_id` varchar(50) NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `comuna_id` int(11) DEFAULT NULL,
  `telefono` varchar(30) NOT NULL DEFAULT '',
  `rut` varchar(12) NOT NULL DEFAULT '',
  `foto` varchar(150) NOT NULL DEFAULT '',
  `padre` varchar(45) NOT NULL DEFAULT '',
  `madre` varchar(45) NOT NULL DEFAULT '',
  `cel_padre` varchar(30) NOT NULL DEFAULT '',
  `cel_madre` varchar(30) NOT NULL DEFAULT '',
  `email_padre` varchar(30) NOT NULL DEFAULT '',
  `email_madre` varchar(30) NOT NULL DEFAULT '',
  `direccion` varchar(200) NOT NULL DEFAULT '',
  `isapre` text NOT NULL,
  `email_alumno` varchar(100) NOT NULL DEFAULT '',
  `comentario` text NOT NULL,
  `grupo` int(1) NOT NULL DEFAULT '1',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `#__sophia_evaluacion`;
CREATE TABLE `#__sophia_evaluacion` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `materia_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL,
  `Detalle` text,
  `coeficiente` int(1) DEFAULT '1',
  `fecha` date DEFAULT NULL,
  `published` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `#__sophia_grupos`;
CREATE TABLE `#__sophia_grupos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grupo` varchar(50) NOT NULL,
  `published` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `#__sophia_grupos` VALUES (1,'Alumno',1);
INSERT INTO `#__sophia_grupos` VALUES (2,'Profesor',1);
INSERT INTO `#__sophia_grupos` VALUES (3,'Inspector',1);
INSERT INTO `#__sophia_grupos` VALUES (4,'Administrador',1);


DROP TABLE IF EXISTS `#__sophia_inasistencias`;
CREATE TABLE `#__sophia_inasistencias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `matricula_id` int(10) NOT NULL DEFAULT '0',
  `periodo_id` int(10) NOT NULL DEFAULT '0',
  `fecha` date DEFAULT NULL,
  `tipo` text,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `#__sophia_materias`;
CREATE TABLE `#__sophia_materias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `asignatura_id` varchar(30) NOT NULL,
  `profesor_id` int(10) DEFAULT NULL,
  `curso_id` int(11) NOT NULL,
  `descripcion` text,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `#__sophia_matricula`;
CREATE TABLE `#__sophia_matricula` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `alumno_id` int(10) NOT NULL,
  `anno_id` int(10) NOT NULL,
  `curso_id` int(10) NOT NULL,
  `nromatricula` varchar(15) NOT NULL,
  `published` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `#__sophia_notas`;
CREATE TABLE `#__sophia_notas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `evaluacion_id` int(10) NOT NULL DEFAULT '0',
  `matricula_id` int(10) NOT NULL DEFAULT '0',
  `fecha_creacion` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nota` int(11) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `#__sophia_parametros`;
CREATE TABLE `#__sophia_parametros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cod_grupo` int(10) NOT NULL,
  `desc_grupo` text NOT NULL,
  `cod_item1` varchar(30) DEFAULT NULL,
  `desc_item1` varchar(30) DEFAULT NULL,
  `cod_item2` varchar(30) DEFAULT NULL,
  `desc_item2` varchar(30) DEFAULT NULL,
  `published` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS `#__sophia_periodo`;
CREATE TABLE `#__sophia_periodo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `periodo` varchar(100) NOT NULL DEFAULT '',
  `inicio` date DEFAULT NULL,
  `termino` date DEFAULT NULL,
  `anno_id` int(4) NOT NULL DEFAULT '1',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `#__sophia_profesores`;
CREATE TABLE `#__sophia_profesores` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `nombre` varchar(60) NOT NULL,
  `sexo` varchar(10) NOT NULL DEFAULT '',
  `nacimiento` varchar(10) NOT NULL DEFAULT '',
  `ciudad_id` varchar(50) NOT NULL,
  `comuna_id` int(11) DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL,
  `rut` varchar(30) NOT NULL DEFAULT '',
  `foto` varchar(150) NOT NULL DEFAULT '',
  `direccion` varchar(200) NOT NULL DEFAULT '',
  `telefono` varchar(11) NOT NULL DEFAULT '',
  `celular` char(5) NOT NULL DEFAULT '',
  `isapre` text NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  `sitioweb` varchar(100) NOT NULL DEFAULT '',
  `especialidad` text NOT NULL,
  `grupo` int(1) NOT NULL DEFAULT '2',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS `#__sophia_region`;
CREATE TABLE `#__sophia_region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(50) DEFAULT NULL,
  `published` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `#__sophia_botones`;
CREATE TABLE `#__sophia_botones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(200) DEFAULT '',
  `image` varchar(100) DEFAULT NULL,
  `texto` varchar(100) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT 'Titulo',
  `descripcion` varchar(200) DEFAULT 'Descripcion',
  `menu` int(11) DEFAULT NULL,
  `published` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `#__sophia_colegio`;
CREATE TABLE `#__sophia_colegio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `establecimiento` text,
  `direccion` text,
  `telefono` text,
  `director` text,
  `published` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `#__sophia_grupos`;
CREATE TABLE `#__sophia_grupos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grupo` varchar(50) NOT NULL,
  `published` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `libros`;
CREATE TABLE  `libros` (
  `SIGNATURA` varchar(50) default NULL,
  `ISBN` varchar(15) default NULL,
  `TITULO` varchar(50) default NULL,
  `CIUDAD` varchar(30) default NULL,
  `AUTOR` varchar(50) default NULL,
  `EDITORIAL` varchar(30) default NULL,
  `ANOPUB` varchar(10) default NULL,
  `EJEMPLAR` varchar(7) default NULL,
  `TIPOEJEMPLAR` varchar(20) default NULL,
  `UBICACION` varchar(20) default NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;




INSERT INTO `#__sophia_anno` (`Id`,`anno`,`descripcion`,`published`) VALUES (1,2010,NULL,0);
INSERT INTO `#__sophia_anno` (`Id`,`anno`,`descripcion`,`published`) VALUES (2,2011,NULL,0);
INSERT INTO `#__sophia_anno` (`Id`,`anno`,`descripcion`,`published`) VALUES (3,2012,NULL,1);
INSERT INTO `#__sophia_anno` (`Id`,`anno`,`descripcion`,`published`) VALUES (4,2013,NULL,0);
INSERT INTO `#__sophia_anno` (`Id`,`anno`,`descripcion`,`published`) VALUES (5,2014,NULL,0);
INSERT INTO `#__sophia_anno` (`Id`,`anno`,`descripcion`,`published`) VALUES (6,2015,NULL,0);
INSERT INTO `#__sophia_anno` (`Id`,`anno`,`descripcion`,`published`) VALUES (7,2016,NULL,0);
INSERT INTO `#__sophia_anno` (`Id`,`anno`,`descripcion`,`published`) VALUES (8,2017,NULL,0);
INSERT INTO `#__sophia_anno` (`Id`,`anno`,`descripcion`,`published`) VALUES (9,2018,NULL,0);


INSERT INTO `#__sophia_anotaciones` (`id`,`matricula_id`,`user_id`,`periodo_id`,`fecha`,`tipo`,`anotacion`,`published`) VALUES (1,1,0,1,'2012-04-14',NULL,'Alumno trae sus materiales',1);
INSERT INTO `#__sophia_anotaciones` (`id`,`matricula_id`,`user_id`,`periodo_id`,`fecha`,`tipo`,`anotacion`,`published`) VALUES (2,1,0,1,'2012-04-16',NULL,'alumno respetuoso con sus compañeros',1);


INSERT INTO `#__sophia_ara_detalles` (`id`,`arancel_id`,`cuota`,`estado`,`published`) VALUES (1,1,3000,0,1);
INSERT INTO `#__sophia_ara_detalles` (`id`,`arancel_id`,`cuota`,`estado`,`published`) VALUES (2,1,3000,0,1);
INSERT INTO `#__sophia_ara_detalles` (`id`,`arancel_id`,`cuota`,`estado`,`published`) VALUES (3,1,3000,0,1);
INSERT INTO `#__sophia_ara_detalles` (`id`,`arancel_id`,`cuota`,`estado`,`published`) VALUES (4,1,3000,0,1);
INSERT INTO `#__sophia_ara_detalles` (`id`,`arancel_id`,`cuota`,`estado`,`published`) VALUES (5,1,3000,0,1);
INSERT INTO `#__sophia_ara_detalles` (`id`,`arancel_id`,`cuota`,`estado`,`published`) VALUES (6,1,3000,0,1);
INSERT INTO `#__sophia_ara_detalles` (`id`,`arancel_id`,`cuota`,`estado`,`published`) VALUES (7,1,3000,0,1);
INSERT INTO `#__sophia_ara_detalles` (`id`,`arancel_id`,`cuota`,`estado`,`published`) VALUES (8,1,3000,0,1);
INSERT INTO `#__sophia_ara_detalles` (`id`,`arancel_id`,`cuota`,`estado`,`published`) VALUES (9,1,3000,0,1);
INSERT INTO `#__sophia_ara_detalles` (`id`,`arancel_id`,`cuota`,`estado`,`published`) VALUES (10,1,3000,0,1);



INSERT INTO `#__sophia_aranceles` (`id`,`matricula_id`,`anno_id`,`tipo`,`published`) VALUES (1,1,3,'Pendiente',1);



INSERT INTO `#__sophia_asignaturas` (`id`,`asignatura`,`programa`,`published`) VALUES (1,'Matematicas',NULL,1);
INSERT INTO `#__sophia_asignaturas` (`id`,`asignatura`,`programa`,`published`) VALUES (2,'Ingles',NULL,1);
INSERT INTO `#__sophia_asignaturas` (`id`,`asignatura`,`programa`,`published`) VALUES (5,'Fisica',NULL,1);
INSERT INTO `#__sophia_asignaturas` (`id`,`asignatura`,`programa`,`published`) VALUES (6,'Ciencias Naturales',NULL,1);
INSERT INTO `#__sophia_asignaturas` (`id`,`asignatura`,`programa`,`published`) VALUES (7,'historia',NULL,1);


INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (1,'colegios','apps/home_48x48.png','Mi Colegio','Titulo','Descripcion',1,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (2,'alumnos','apps/alumnos_48x48.png','Mis Alumnos','Titulo','Descripcion',1,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (3,'matriculas','apps/matricula_48x48.png','Matriculas','Titulo','Descripcion',1,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (4,'profesores','apps/funcionarios_48x48.png','Profesores','Titulo','Descripcion',1,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (5,'cursos','apps/cursos_48x48.png','Cursos','Titulo','Descripcion',1,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (6,'cursosprof','apps/cursos_prof_48x48.png','Jefaturas','Titulo','Descripcion',1,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (7,'asignaturas','apps/asignatura_48x48.png','Asignatura','Titulo','Descripcion',1,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (8,'materias','apps/asigna_prof_48x48.png','Materias','Titulo','Descripcion',1,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (9,'evaluaciones','apps/evaluacion_48x48.png','Evaluaciones','Titulo','Descripcion',1,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (10,'periodos','apps/calendario_48x48.png','Periodos','Titulo','Descripcion',1,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (11,'notas','apps/notas_48x48.png','Notas','Titulo','Descripcion',1,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (12,'anotaciones','apps/anotaciones_48x48.png','Anotaciones','Titulo','Descripcion',1,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (13,'inasistencias','apps/inasistencias_48x48.png','Inasistencias','Titulo','Descripcion',1,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (14,'regiones','apps/map_48x48.png','Region','Titulo','Descripcion',2,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (15,'ciudades','apps/map_48x48.png','Ciudad','Titulo','Descripcion',2,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (16,'comunas','apps/map_48x48.png','Comuna','Titulo','Descripcion',2,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (17,'aranceles','apps/cuotas_48x48.png','Arancel','Titulo','Descripcion',3,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (18,'alumnos','icons/agregarsalumno.png','Alumnos','Titulo','Descripcion',4,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (19,'profesores','icons/profesor.png','Profesores','Titulo','Descripcion',4,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (20,'cursos','icons/curso.png','Cursos','Titulo','Descripcion',4,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (21,'cursosprof','icons/cursoprof.png','Jefaturas','Titulo','Descripcion',4,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (22,'asignaturas','icons/asignatura.png','Asignaturas','Titulo','Descripcion',4,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (23,'materias','icons/materias.png','Materias','Titulo','Descripcion',4,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (24,'periodos','icons/calendario_32.png','Semestres','Titulo','Descripcion',4,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (25,'matriculas','icons/matricula_32.png','Matriculas','Titulo','Descripcion',4,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (26,'evaluaciones','icons/evaluacion_32.png','Ingreso de Evaluaciones','Titulo','Descripcion',5,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (27,'notas','icons/notas_32.png','Ingreso de Notas','Titulo','Descripcion',5,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (28,'evaluacionesutp','icons/evaluacion_32.png','Bloquear Evaluaciones','Titulo','Descripcion',4,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (29,'informes','icons/pdf_32x32.png','Infomes','Titulo','Descripcion',4,1);
INSERT INTO `#__sophia_botones` (`id`,`link`,`image`,`texto`,`titulo`,`descripcion`,`menu`,`published`) VALUES (30,'notascursos','icons/notas_32.png','Notas por Curso','Titulo','Descripcion',5,1);


INSERT INTO `#__sophia_ciudad` (`id`,`ciudad`,`published`) VALUES (1,'Santiago',1);
INSERT INTO `#__sophia_ciudad` (`id`,`ciudad`,`published`) VALUES (2,'Providencia',1);
INSERT INTO `#__sophia_ciudad` (`id`,`ciudad`,`published`) VALUES (3,'Las Condes',1);
INSERT INTO `#__sophia_ciudad` (`id`,`ciudad`,`published`) VALUES (4,'Recoleta',1);
INSERT INTO `#__sophia_ciudad` (`id`,`ciudad`,`published`) VALUES (5,'Chiloe',1);



INSERT INTO `#__sophia_colegio` (`id`,`establecimiento`,`direccion`,`telefono`,`director`,`published`) VALUES (1,'Sophia','Av. santa Maria 1234','02- 123456','Alex olave',1);


INSERT INTO `#__sophia_comuna` (`Id`,`comuna`,`published`) VALUES (1,'Santiago',1);
INSERT INTO `#__sophia_comuna` (`Id`,`comuna`,`published`) VALUES (2,'Providencia',1);
INSERT INTO `#__sophia_comuna` (`Id`,`comuna`,`published`) VALUES (3,'Las Condes',1);
INSERT INTO `#__sophia_comuna` (`Id`,`comuna`,`published`) VALUES (4,'Recoleta',1);



INSERT INTO `#__sophia_curso` (`id`,`curso`,`description`,`published`) VALUES (2,'Kinder',NULL,1);
INSERT INTO `#__sophia_curso` (`id`,`curso`,`description`,`published`) VALUES (4,'Primero Basico',NULL,1);
INSERT INTO `#__sophia_curso` (`id`,`curso`,`description`,`published`) VALUES (6,'Segundo Basico',NULL,1);


INSERT INTO `#__sophia_curso_prof` (`id`,`curso_id`,`profesor_id`,`published`) VALUES (1,2,1,1);
INSERT INTO `#__sophia_curso_prof` (`id`,`curso_id`,`profesor_id`,`published`) VALUES (7,4,4,1);


INSERT INTO `#__sophia_estudiantes` (`id`,`user_id`,`nombre`,`sexo`,`nacimiento`,`ciudad_id`,`region_id`,`comuna_id`,`telefono`,`rut`,`foto`,`padre`,`madre`,`cel_padre`,`cel_madre`,`email_padre`,`email_madre`,`direccion`,`isapre`,`email_alumno`,`comentario`,`grupo`,`published`) VALUES (1,43,'sophia ','Femenino','2012-05-22','2',1,1,'12345678','123455-6','','','','','','','','','','alumno@sophiaos.com','',1,1);
INSERT INTO `#__sophia_estudiantes` (`id`,`user_id`,`nombre`,`sexo`,`nacimiento`,`ciudad_id`,`region_id`,`comuna_id`,`telefono`,`rut`,`foto`,`padre`,`madre`,`cel_padre`,`cel_madre`,`email_padre`,`email_madre`,`direccion`,`isapre`,`email_alumno`,`comentario`,`grupo`,`published`) VALUES (2,0,'pedro','Masculino','0000-00-00','2',2,2,'','979797','','','','','','','','','','','',1,1);
INSERT INTO `#__sophia_estudiantes` (`id`,`user_id`,`nombre`,`sexo`,`nacimiento`,`ciudad_id`,`region_id`,`comuna_id`,`telefono`,`rut`,`foto`,`padre`,`madre`,`cel_padre`,`cel_madre`,`email_padre`,`email_madre`,`direccion`,`isapre`,`email_alumno`,`comentario`,`grupo`,`published`) VALUES (15,45,'Alex','Masculino','1987-03-29','2',1,2,'89989889','123455-6','','','','','','','','','','','',1,1);



INSERT INTO `#__sophia_evaluacion` (`id`,`titulo`,`materia_id`,`periodo_id`,`Detalle`,`coeficiente`,`fecha`,`published`) VALUES (10,NULL,0,0,NULL,1,NULL,1);
INSERT INTO `#__sophia_evaluacion` (`id`,`titulo`,`materia_id`,`periodo_id`,`Detalle`,`coeficiente`,`fecha`,`published`) VALUES (11,'fisica',0,1,NULL,1,'2012-05-24',1);
INSERT INTO `#__sophia_evaluacion` (`id`,`titulo`,`materia_id`,`periodo_id`,`Detalle`,`coeficiente`,`fecha`,`published`) VALUES (13,'prueba de fisica 1',14,1,NULL,1,'2012-05-29',1);
INSERT INTO `#__sophia_evaluacion` (`id`,`titulo`,`materia_id`,`periodo_id`,`Detalle`,`coeficiente`,`fecha`,`published`) VALUES (14,'prueba de fisica 2',14,1,NULL,1,'2012-05-30',1);
INSERT INTO `#__sophia_evaluacion` (`id`,`titulo`,`materia_id`,`periodo_id`,`Detalle`,`coeficiente`,`fecha`,`published`) VALUES (15,'prueba de fisica 3',14,1,NULL,1,'2012-05-31',1);
INSERT INTO `#__sophia_evaluacion` (`id`,`titulo`,`materia_id`,`periodo_id`,`Detalle`,`coeficiente`,`fecha`,`published`) VALUES (16,'prueba de Matematicas 1',6,1,NULL,1,'2012-05-29',1);
INSERT INTO `#__sophia_evaluacion` (`id`,`titulo`,`materia_id`,`periodo_id`,`Detalle`,`coeficiente`,`fecha`,`published`) VALUES (17,'prueba de Matematicas 2',6,1,NULL,1,'2012-05-30',1);
INSERT INTO `#__sophia_evaluacion` (`id`,`titulo`,`materia_id`,`periodo_id`,`Detalle`,`coeficiente`,`fecha`,`published`) VALUES (18,'prueba de Matematicas 3',6,1,NULL,1,'2012-05-31',1);
INSERT INTO `#__sophia_evaluacion` (`id`,`titulo`,`materia_id`,`periodo_id`,`Detalle`,`coeficiente`,`fecha`,`published`) VALUES (19,'prueba de ingles 1',9,1,NULL,1,'2012-05-29',1);
INSERT INTO `#__sophia_evaluacion` (`id`,`titulo`,`materia_id`,`periodo_id`,`Detalle`,`coeficiente`,`fecha`,`published`) VALUES (20,'prueba de ingles 2',9,1,NULL,1,'2012-05-30',1);
INSERT INTO `#__sophia_evaluacion` (`id`,`titulo`,`materia_id`,`periodo_id`,`Detalle`,`coeficiente`,`fecha`,`published`) VALUES (21,'prueba de ingles 3',9,1,NULL,1,'2012-05-30',1);


INSERT INTO `#__sophia_grupos` (`id`,`grupo`,`published`) VALUES (1,'Alumno',1);
INSERT INTO `#__sophia_grupos` (`id`,`grupo`,`published`) VALUES (2,'Profesor',1);
INSERT INTO `#__sophia_grupos` (`id`,`grupo`,`published`) VALUES (3,'Inspector',1);
INSERT INTO `#__sophia_grupos` (`id`,`grupo`,`published`) VALUES (4,'Administrador',1);



INSERT INTO `#__sophia_inasistencias` (`id`,`matricula_id`,`periodo_id`,`fecha`,`tipo`,`published`) VALUES (1,1,1,'2012-04-23','Inasistencia',1);


INSERT INTO `#__sophia_materias` (`id`,`asignatura_id`,`profesor_id`,`curso_id`,`descripcion`,`published`) VALUES (6,'1',4,2,NULL,1);
INSERT INTO `#__sophia_materias` (`id`,`asignatura_id`,`profesor_id`,`curso_id`,`descripcion`,`published`) VALUES (9,'2',5,2,NULL,1);
INSERT INTO `#__sophia_materias` (`id`,`asignatura_id`,`profesor_id`,`curso_id`,`descripcion`,`published`) VALUES (14,'5',1,2,NULL,1);


INSERT INTO `#__sophia_matricula` (`id`,`alumno_id`,`anno_id`,`curso_id`,`nromatricula`,`published`) VALUES (1,1,3,2,'A122',1);



INSERT INTO `#__sophia_notas` (`id`,`evaluacion_id`,`matricula_id`,`fecha_creacion`,`nota`,`published`) VALUES (1,2,1,'2012-03-21 11:49:14',7,1);
INSERT INTO `#__sophia_notas` (`id`,`evaluacion_id`,`matricula_id`,`fecha_creacion`,`nota`,`published`) VALUES (2,3,1,'0000-00-00 00:00:00',10,1);
INSERT INTO `#__sophia_notas` (`id`,`evaluacion_id`,`matricula_id`,`fecha_creacion`,`nota`,`published`) VALUES (3,6,1,'0000-00-00 00:00:00',8,1);
INSERT INTO `#__sophia_notas` (`id`,`evaluacion_id`,`matricula_id`,`fecha_creacion`,`nota`,`published`) VALUES (4,12,1,'0000-00-00 00:00:00',70,1);
INSERT INTO `#__sophia_notas` (`id`,`evaluacion_id`,`matricula_id`,`fecha_creacion`,`nota`,`published`) VALUES (5,16,1,'0000-00-00 00:00:00',70,1);
INSERT INTO `#__sophia_notas` (`id`,`evaluacion_id`,`matricula_id`,`fecha_creacion`,`nota`,`published`) VALUES (6,17,1,'0000-00-00 00:00:00',66,1);
INSERT INTO `#__sophia_notas` (`id`,`evaluacion_id`,`matricula_id`,`fecha_creacion`,`nota`,`published`) VALUES (7,18,1,'0000-00-00 00:00:00',68,1);
INSERT INTO `#__sophia_notas` (`id`,`evaluacion_id`,`matricula_id`,`fecha_creacion`,`nota`,`published`) VALUES (8,13,1,'0000-00-00 00:00:00',50,1);
INSERT INTO `#__sophia_notas` (`id`,`evaluacion_id`,`matricula_id`,`fecha_creacion`,`nota`,`published`) VALUES (9,14,1,'0000-00-00 00:00:00',55,1);
INSERT INTO `#__sophia_notas` (`id`,`evaluacion_id`,`matricula_id`,`fecha_creacion`,`nota`,`published`) VALUES (10,15,1,'0000-00-00 00:00:00',60,1);
INSERT INTO `#__sophia_notas` (`id`,`evaluacion_id`,`matricula_id`,`fecha_creacion`,`nota`,`published`) VALUES (11,19,1,'0000-00-00 00:00:00',40,1);
INSERT INTO `#__sophia_notas` (`id`,`evaluacion_id`,`matricula_id`,`fecha_creacion`,`nota`,`published`) VALUES (12,20,1,'0000-00-00 00:00:00',50,1);
INSERT INTO `#__sophia_notas` (`id`,`evaluacion_id`,`matricula_id`,`fecha_creacion`,`nota`,`published`) VALUES (13,21,1,'0000-00-00 00:00:00',70,1);


INSERT INTO `#__sophia_periodo` (`id`,`nombre`,`periodo`,`inicio`,`termino`,`anno_id`,`published`) VALUES (1,'Primer Semestre','1','2012-05-01','2012-05-31',3,1);
INSERT INTO `#__sophia_periodo` (`id`,`nombre`,`periodo`,`inicio`,`termino`,`anno_id`,`published`) VALUES (2,'Segundo Semestre','2','2012-05-01','2012-05-31',3,1);



INSERT INTO `#__sophia_profesores` (`id`,`user_id`,`nombre`,`sexo`,`nacimiento`,`ciudad_id`,`comuna_id`,`region_id`,`rut`,`foto`,`direccion`,`telefono`,`celular`,`isapre`,`email`,`sitioweb`,`especialidad`,`grupo`,`published`) VALUES (1,45,'pedro Garrido fontova','Masculino','2012-05-24','1',2,1,'123456-6','','','12345678','','','profesor@colegio.cl','www.miweb.cl','',2,1);
INSERT INTO `#__sophia_profesores` (`id`,`user_id`,`nombre`,`sexo`,`nacimiento`,`ciudad_id`,`comuna_id`,`region_id`,`rut`,`foto`,`direccion`,`telefono`,`celular`,`isapre`,`email`,`sitioweb`,`especialidad`,`grupo`,`published`) VALUES (4,45,'profesor de matematica','Masculino','','1',1,1,'21213-2','','','123444','','','mat@colegio.cl','','',2,1);
INSERT INTO `#__sophia_profesores` (`id`,`user_id`,`nombre`,`sexo`,`nacimiento`,`ciudad_id`,`comuna_id`,`region_id`,`rut`,`foto`,`direccion`,`telefono`,`celular`,`isapre`,`email`,`sitioweb`,`especialidad`,`grupo`,`published`) VALUES (5,45,'profesor de Ingles','Masculino','','0',0,0,'','','','','','','ingles@colegio.cl','','',2,1);


INSERT INTO `#__sophia_region` (`id`,`region`,`published`) VALUES (1,'Santiago',1);
INSERT INTO `#__sophia_region` (`id`,`region`,`published`) VALUES (2,'Providencia',1);
INSERT INTO `#__sophia_region` (`id`,`region`,`published`) VALUES (3,'Las Condes',1);
INSERT INTO `#__sophia_region` (`id`,`region`,`published`) VALUES (4,'Recoleta',1);
INSERT INTO `#__sophia_region` (`id`,`region`,`published`) VALUES (5,'Temuco',1);


INSERT INTO `libros` (`SIGNATURA`, `ISBN`, `TITULO`, `CIUDAD`, `AUTOR`, `EDITORIAL`, `ANOPUB`, `EJEMPLAR`, `TIPOEJEMPLAR`, `UBICACION`) VALUES
('700 - ALMc - ', '9789568153021', 'Chile, la huella de los dioses', 'Santiago de Chile', 'Almarza, Claudio', 'Kactus', '2003', '000001R', 'Normal', ''),
('800 - VIAo - ', '9789561512955', 'El viaje de Odiseo', 'Santiago de Chile', 'Varios Autores', 'Santillana', '2007', '000003A', 'Normal', ''),
('507 - BOCg - ', '9789681867126', 'Guía completa para organizar tu proyecto para la f', 'México', 'Bochinski, Julianne Blair', 'Limusa Wiley', '2007', '000004G', 'Normal', ''),
('Cu861 - CHEa - ', '9789806437203', 'ABC', 'Caracas', 'Chenut, Jean', 'Playco', '2001', '000005M', 'Normal', ''),
('Ar863 - BOEc - ', '9789500826327', 'La curiosa Aylén visita a su futuro hermanito', 'Cuentos australianos', 'Boetto, Aldo', 'Atlántida', '2004', '000006Y', 'Normal', ''),
('425 - GRAi - ', '9789706070524', 'Gramática inglesa comunicativa', 'México', 'Varios Autores', 'Larousse', '', '000007F', 'Normal', ''),
('155 - SAFv - ', '9789562822756', '¿Valgo o no valgo? Autoestima y rendimiento escola', 'Santiago de Chile', 'Saffie R., Nubia', 'Lom', '2000', '000008P', 'Normal', ''),
('843 - LOUm - ', '9788496568068', 'Mi almohada', 'Madrid', 'Loughard, Antonin', 'Dandelión', '2006', '000009D', 'Normal', ''),
('800 - AZIu - ', '9788496473546', 'Mil y un cuentos de una línea', 'Barcelona', 'Azid, Aloe', 'Thule', '2007', '000010X', 'Normal', ''),
('863 - PRAl - ', '9788483430149', 'El laboratorio secreto', 'Barcelona', 'Prats, Lluis', 'Bambú', '2006', '000011B', 'Normal', ''),
('Ch861 - GUZa - ', '9789561315518', 'Alma no me digas nada', 'Santiago de Chile', 'Guzmán Cruchaga, Juan', 'Andrés Bello', '1998', '000012N', 'Normal', ''),
('Cu863 - ANDl - ', '9789583004742', 'El libro de Antón Pirulero', 'Bogotá', 'Andruetto María Teresa', 'Panamericana', '1998', '000013J', 'Normal', ''),
('Ar863 - BASt - ', '9789500110662', 'Todos son colmos', 'Buenos Aires', 'Bateson-Hill, Margaret', 'Estrada', '2006', '000014Z', 'Normal', ''),
('B869 - MACd - ', '9789500722216', 'Del otro lado hay secretos', 'Madrid', 'Machado, Ana María', 'Sudamericana', '2004', '000015S', 'Normal', ''),
('928 - SALc - ', '9788496249561', 'Carlomagno', 'Madrid', 'Salrach, Joseph María', 'Dastin', '2004', '000016Q', 'Normal', ''),
('398 - MORm - ', '9789568601003', 'Magia y secretos de la mujer mapuche', 'Santiago de Chile', 'Mora, Ziley', 'Uqbar', '2006', '000017V', 'Normal', ''),
('823 - SWIv - ', '9788439209126', 'Los viajes de Gulliver', 'Madrid', 'Swift, Jonathan', 'Gaviota', '2001', '000018H', 'Normal', ''),
('813 - STAh - ', '9788467521115', 'Un hermano, ¿para qué?', 'Madrid', 'Stanton, Philip', 'SM', '2000', '000019L', 'Normal', ''),
('B869 - MACm - ', '9789500722223', 'Mi reino por un caballo', 'Buenos Aires', 'Machado, Ana María', 'Sudamericana', '2002', '000020C', 'Normal', ''),
('B869 - LISv - ', '9789562824071', 'La vida íntima de Laura', 'Santiago de Chile', 'Lispector, Clarice', 'Lom', '2001', '000021K', 'Normal', ''),
('843 - KEMq - ', '9788493457068', '¿Quién puede comerse todo eso?', 'Madrid', 'Kemmeter, Philippe de', 'Dandelión', '2001', '000022E', 'Normal', ''),
('A833 - IBBc - ', '9788478888016', 'El concurso de brujas', 'Barcelona', 'Ibbotson, Eva', 'Salamandra', '2003', '000023T', 'Normal', ''),
('813 - LONc - ', '9789580480433', '¡Comer!, gritó el cerdito', 'Bogotá', 'London, Jonathan', 'Norma', '2002', '000024R', 'Normal', ''),
('Ch863 - MUÑp - ', '9789561216273', 'Aventuras del duende Melodía', 'Santiago de Chile', 'Morel, Alicia', 'Zig-Zag', '2004', '000025W', 'Normal', ''),
('791 - WIEs - ', '9789681864743', 'El súper director de cine científico', 'México', 'Wiese, Jim', 'Noriega Limusa', '2004', '000026A', 'Normal', ''),
('Br869 - ZIRj - ', '9788506036464', 'Juanito y la geografía', 'Sao Paulo', 'Ziraldo', 'Melhoramentos', '2005', '000027G', 'Normal', ''),
('U863 - LOPh - ', '9788420449364', '¡Huákala! a los miedos', 'Madrid', 'López Suárez, Sergio', 'Alfaguara Infantil y Juvenil', '2009', '000028M', 'Normal', ''),
('793 - TINa - ', '9788484182856', 'Tin Tin', 'Barcelona', 'Varios Autores', 'Zendrera Zariquiey', '2006', '000029Y', 'Normal', ''),
('B843 - MEUt - ', '9788493457082', 'Toc toc toc', 'Madrid', 'Meunier, Henri', 'Dandelión', '2005', '000030F', 'Normal', ''),
('796 - ALLj - ', '9788434222304', 'Juegos de exterior', 'Barcelona', 'Allué, Josep M.', 'Parramon', '2003', '000031P', 'Normal', ''),
('Ar863 - VEDp - ', '9789500827386', 'Paco del tomate en el barrio de inventores', 'Buenos Aires', 'Vedia, Fernando de', 'Atlántida', '2007', '000032D', 'Normal', ''),
('Ar863 - FRAc - ', '9789806437234', 'Cuentos para gatos', 'Santiago de Chile', 'Franco, Mercedes', 'Pehuén', '2002', '000033X', 'Normal', ''),
('V863 - TABc - ', '9789800110607', 'Cuentos para leer a escondidas', 'Venezuela', 'Tabuas, Mireya', 'Monte Ávila', '2007', '000034B', 'Normal', ''),
('833 - ONDb - ', '9788441416673', 'La bruja Peperina y la fiesta de los niños', 'Madrid', 'Ondracek, Claudia', 'Edaf', '2005', '000035N', 'Normal', ''),
('863 - HORi - ', '9788424659219', 'Izquierdo y Derecho', 'Barcelona', 'Hortigüela, Ferran', 'La Galera', '1999', '000036J', 'Normal', ''),
('813 - GREa - ', '9788495123619', '¿A qué sabe la Luna?', 'México', 'Grejniec, Michael', 'Kalandraka', '2003', '000037Z', 'Normal', ''),
('833 - GRIcu - ', '9789561207714', 'Cuentos de Grimm', 'Santiago de Chile', 'Grimm, Wilhelm', 'Zig-Zag', '2002', '000038S', 'Normal', ''),
('823 - MCBs - ', '9788424180201', 'Lo siento', 'León', 'McBratney, Sam', 'Everest', '2002', '000039Q', 'Normal', ''),
('R305 - DICn - ', '9782215063704', 'Diccionario por imágenes de los niños del mundo', 'París', 'Varios Autores', 'Fleurus', '1999', '000040V', 'Normal', ''),
('863 - GUSc - ', '9788420469935', '¿Cómo serán mis cuernos?', 'Barcelona', 'Gusti', 'Alfaguara Infantil y Juvenil', '1999', '000041H', 'Normal', ''),
('360 - DAVc - ', '9789682321986', 'Cultura en organizaciones latinas', 'México', 'Dávila, Anabella', 'Siglo XXI', '1999', '000042L', 'Normal', ''),
('608 - BREci - ', '9789685938426', '100 cosas que debes saber sobre inventos', 'México', 'Brewer, Duncan', 'Signo', '2005', '000043C', 'Normal', ''),
('575 - LEAf - ', '9788485800063', 'La formación de la humanidad', 'Barcelona', 'Leakey,  R.E.', 'Del Serbal', '1993', '000044K', 'Normal', ''),
('Ar863 - BASq - ', '9789580485940', '¿Qué es esto gigantesco?', 'Bogotá', 'Basch, Adela', 'Norma', '', '000045E', 'Normal', ''),
('823 - HANd - ', '9788440691620', '¿Dónde está Wally? El viaje fantástico', 'Barcelona', 'Handford, Martin', 'Ediciones B', '2007', '000046T', 'Normal', ''),
('567 - BEAd - ', '9782215063179', 'Dinosaurios y animales desaparecidos', 'París', 'Beaumont, Émilie', 'Fleurus', '1999', '000047R', 'Normal', ''),
('676 - LIMh - ', '9788437224411', 'La historia de la hoja de papel', 'Madrid', 'Limousin, Odile', 'Altea', '2006', '000048W', 'Normal', ''),
('Ar863 - SCHe - ', '9789500828239', 'El elefante y el mar', 'Buenos Aires', 'Schujer, Silvia', 'Atlántida', '2003', '000049A', 'Normal', ''),
('591 - ROSl - ', '9789800104743', 'Lo que pasa es que el rinoceronte es sordo', 'Caracas', 'Rossón, Francisco de', 'Monte Ávila', '1996', '000050G', 'Normal', ''),
('793 - RINa - ', '9789685447768', 'Ajedrecero', 'México', 'Rincón, Valentín', 'Nostra', '2007', '000051M', 'Normal', ''),
('613 - GUSp - ', '9788420469942', '¿Para qué sirven los dientes?', 'Madrid', 'Gusti', 'Alfaguara Infantil y Juvenil', '2007', '000052Y', 'Normal', ''),
('370 - PIAp - ', '9789509122017', 'Psicología y pedagogía', 'Buenos Aires', 'Piaget, Jean', 'Ariel', '1993', '000053F', 'Normal', ''),
('370 - LURp - ', '9788446022152', 'Psicología y pedagogía', 'Buenos Aires', 'Luria , Alexander', 'Akal', '2004', '000054P', 'Normal', ''),
('520 - FERp - ', '9788495642349', '¿Por qué el cielo es azul? La ciencia para todos', 'Madrid', 'Fernández Panadero, Javier', 'Páginas de Espuma', '2006', '000055D', 'Normal', ''),
('U863 - PUEr - ', '9789562392501', 'Reparto general de bienes y dones', 'Santiago de Chile', 'Puentes de Oyenard, Silvia', 'Alfaguara', '2003', '000056X', 'Normal', ''),
('823 - WADn - ', '9788488342041', '¿No duermes, Osito?', 'Madrid', 'Waddell, Martín', 'Kókinos', '2001', '000057B', 'Normal', ''),
('Ar863 - SCHs - ', '9789500828246', 'Sorpresa en el gallinero', 'Buenos Aires', 'Schreiber, Claudia', 'Atlántida', '2003', '000058N', 'Normal', ''),
('Ar863 - SIEp - ', '9789500722339', 'La polilla', 'Buenos Aires', 'Siemens, Sandra', 'Sudamericana', '2002', '000059J', 'Normal', ''),
('Ar863 - ISTh - ', '9788481314687', 'El hombre más peludo del mundo', 'Valencia', 'Istvansch', 'Tàndem', '2003', '000060Z', 'Normal', ''),
('575 - ORId - ', '9788471664167', 'El origen de las especies', 'Madrid', 'Darwin, Charles', 'Edaf', '1984', '000061S', 'Normal', ''),
('510 - BERm - ', '9789681664077', 'Las matemáticas, perejil de todas las salsas', 'México', 'Berlanga Zubiaga, Ricardo', 'Fondo de Cultura Económica', '', '000062Q', 'Normal', ''),
('Cu863 - PELp - ', '9789561508835', 'Pepito y sus libruras', 'Santiago de Chile', 'Pelayo, Pepe', 'Santillana', '2004', '000063V', 'Normal', ''),
('895 - YAGc - ', '9788493598266', 'Costras', 'Valencia', 'Yagyu, Genichiro', 'Media Vaca', '2008', '000064H', 'Normal', ''),
('500 - GUIl - ', '9789702010098', 'El libro de las excepciones', 'México', 'Guillén, Fedro Carlos', 'Castillo', '2008', '000065L', 'Normal', ''),
('M863 - FERm - ', '9789707562486', 'La manopla', 'Barcelona', 'Ferrari, Virginia', 'Edilar', '2007', '000066C', 'Normal', ''),
('843 - BATs - ', '9788488342898', 'El secreto', 'Madrid', 'Bauer, Jutta', 'Kókinos', '2005', '000067K', 'Normal', '');



