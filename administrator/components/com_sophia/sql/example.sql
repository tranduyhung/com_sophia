
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

