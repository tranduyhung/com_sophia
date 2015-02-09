INSERT INTO `#__sophia_botones` VALUES (28,'evaluacionesutp','icons/evaluacion_32.png','Bloquear Evaluaciones','Titulo','Descripcion',4,1);
INSERT INTO `#__sophia_botones` VALUES (29,'informes','icons/pdf_32x32.png','Infomes','Titulo','Descripcion',4,1);
INSERT INTO `#__sophia_botones` VALUES (30,'notascursos','icons/notas_32.png','Notas por Curso','Titulo','Descripcion',5,1);

ALTER TABLE `#__sophia_ara_detalle` MODIFY `estado` tinyint(1) default '0';