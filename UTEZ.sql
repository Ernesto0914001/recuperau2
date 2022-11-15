CREATE SCHEMA IF NOT EXISTS `UTEZ` DEFAULT CHARACTER SET utf8 ;
USE `UTEZ`;
CREATE TABLE `Materias` (
  `calificaion`BIGINT
  )ENGINE = InnoDB;
CREATE TABLE `DOCENTES` (
  `id` BIGINT,
  `nombre` VARCHAR(45),
  `apellidos` VARCHAR(45),
  `FchdN` DATE,
  `curp` VARCHAR(45),
  `num_empleado` VARCHAR(45)
  )ENGINE = InnoDB;
  
  CREATE TABLE `Alumnos` (
  `id`BIGINT,
  `nombre` VARCHAR(45),
  `apellidos` VARCHAR(45),
  `FchdN` DATE ,
  `curp` VARCHAR(45),
  `matricula` VARCHAR(45),
  `calificaion`BIGINT
  )ENGINE = InnoDB;
