-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-07-2019 a las 01:47:57
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `baseforo`
--
CREATE DATABASE IF NOT EXISTS `baseforo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `baseforo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `loginU` varchar(20) NOT NULL,
  `claveU` varchar(20) NOT NULL,
  `nombreU` varchar(50) NOT NULL,
  `apellidoU` varchar(50) NOT NULL,
  `tipoU` varchar(1) NOT NULL,
  `imagenU` varchar(50) NOT NULL,
  `nacionalidadU` varchar(50) NOT NULL,
  PRIMARY KEY (`loginU`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Estructura de tabla para la tabla `foro`
--

DROP TABLE IF EXISTS `foro`;
CREATE TABLE IF NOT EXISTS `foro` (
  `idF` int (5) NOT NULL AUTO_INCREMENT,
  `nombreF` varchar (20) NOT NULL,
  `fechaF` date NOT NULL,
  `mensajeF` varchar (200) NOT NULL,
  PRIMARY KEY (`idF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`loginU`, `claveU`, `nombreU`, `apellidoU`, `tipoU`, `imagenU`, `nacionalidadU`) VALUES
('esado', 'esado1234','Elba', 'Sado', 'U', 'imagen1.jpg', 'Estados Unidos'),
('barredondo', 'barredondo123', 'Bastian', 'Arredondo', 'A', 'imagen2.jpg', 'Chile');
COMMIT;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`idF`, `nombreF`, `fechaF`, `mensajeF`) VALUES 
('01', 'esado', 'sysdate', 'Este es un ejemplo de texto') ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
