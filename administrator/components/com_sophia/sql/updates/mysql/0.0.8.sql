ALTER TABLE `#__sophia_notas` MODIFY `nota` int(11) default 0;
ALTER TABLE `#__sophia_notas` CHANGE `alumno_id`  `matricula_id` int(11);
alter table `#__sophia_materias` add `anno_id` int(11) AFTER `descripcion`;

