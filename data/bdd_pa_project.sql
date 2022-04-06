-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-11-2021 a las 00:33:20
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdd_pa_project`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clases`
--

DROP TABLE IF EXISTS `tbl_clases`;
CREATE TABLE IF NOT EXISTS `tbl_clases` (
  `clas_id` int(11) NOT NULL AUTO_INCREMENT,
  `clas_nombre` varchar(20) NOT NULL,
  `clas_descripcion` varchar(50) NOT NULL,
  `clas_estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`clas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_clases`
--

INSERT INTO `tbl_clases` (`clas_id`, `clas_nombre`, `clas_descripcion`, `clas_estado`) VALUES
(1, 'Matemáticas', 'Algebra', 1),
(2, 'Física', 'Vectorial', 1),
(3, 'Programación', 'Avanzada', 0),
(4, 'GIS', 'Sistemas de Información Geográfica', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estudiantes`
--

DROP TABLE IF EXISTS `tbl_estudiantes`;
CREATE TABLE IF NOT EXISTS `tbl_estudiantes` (
  `est_id` int(11) NOT NULL AUTO_INCREMENT,
  `est_cedula` varchar(15) NOT NULL,
  `est_nombres` varchar(50) NOT NULL,
  `est_apellidos` varchar(50) NOT NULL,
  `est_direccion` varchar(50) NOT NULL,
  `est_telefono` varchar(15) NOT NULL,
  `est_estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`est_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_estudiantes`
--

INSERT INTO `tbl_estudiantes` (`est_id`, `est_cedula`, `est_nombres`, `est_apellidos`, `est_direccion`, `est_telefono`, `est_estado`) VALUES
(1, '1323546870', 'Juan', 'Robles', 'Ibarra', '123456789', 1),
(2, '1321564687', 'Julian', 'Jalisco', 'Otavalo', '0999999999', 1),
(3, '4852471399', 'Eris', 'Reed', 'Ibarra', '0888888888', 1),
(4, '0401838926', 'Byron', 'Ramirez', 'Ibarra', '0981848073', 1),
(5, '1003033022', 'Maria', 'Meneses', 'Otavalo', '0999995468', 1),
(6, '170548796', 'Paul', 'Ramoz', 'Quito', '099548663', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_jornada`
--

DROP TABLE IF EXISTS `tbl_jornada`;
CREATE TABLE IF NOT EXISTS `tbl_jornada` (
  `jor_id` int(11) NOT NULL AUTO_INCREMENT,
  `jor_tipo` varchar(20) NOT NULL,
  `jor_estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`jor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_jornada`
--

INSERT INTO `tbl_jornada` (`jor_id`, `jor_tipo`, `jor_estado`) VALUES
(1, 'Matutina', 1),
(2, 'Vespertina', 1),
(3, 'Nocturna', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_matricula`
--

DROP TABLE IF EXISTS `tbl_matricula`;
CREATE TABLE IF NOT EXISTS `tbl_matricula` (
  `mat_id` int(11) NOT NULL AUTO_INCREMENT,
  `est_id` int(11) NOT NULL,
  `clas_id` int(11) NOT NULL,
  `jor_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`mat_id`),
  KEY `est_id` (`est_id`),
  KEY `clas_id` (`clas_id`),
  KEY `jor_id` (`jor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_matricula`
--

INSERT INTO `tbl_matricula` (`mat_id`, `est_id`, `clas_id`, `jor_id`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1),
(3, 1, 2, 2),
(4, 2, 2, 2),
(5, 3, 1, 1),
(6, 3, 2, 2),
(7, 4, 4, 1),
(8, 4, 1, 1),
(9, 5, 3, 2),
(10, 5, 2, 2),
(11, 5, 4, 2),
(12, 6, 4, 3),
(13, 6, 1, 3);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_matricula`
--
ALTER TABLE `tbl_matricula`
  ADD CONSTRAINT `tbl_matricula_ibfk_1` FOREIGN KEY (`est_id`) REFERENCES `tbl_estudiantes` (`est_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_matricula_ibfk_2` FOREIGN KEY (`clas_id`) REFERENCES `tbl_clases` (`clas_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_matricula_ibfk_3` FOREIGN KEY (`jor_id`) REFERENCES `tbl_jornada` (`jor_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
