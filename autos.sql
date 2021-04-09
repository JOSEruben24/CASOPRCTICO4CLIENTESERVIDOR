-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-04-2021 a las 14:52:32
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
-- Base de datos: `autos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automovil`
--

DROP TABLE IF EXISTS `automovil`;
CREATE TABLE IF NOT EXISTS `automovil` (
  `Codigo_Auto` int(3) NOT NULL,
  `Marca` varchar(30) DEFAULT NULL,
  `Ano` int(5) DEFAULT NULL,
  `Pais` varchar(30) DEFAULT NULL,
  `Cilindraje` int(3) DEFAULT NULL,
  PRIMARY KEY (`Codigo_Auto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `automovil`
--

INSERT INTO `automovil` (`Codigo_Auto`, `Marca`, `Ano`, `Pais`, `Cilindraje`) VALUES
(1, 'Volkswagen', 2020, 'ALEMANIA', 8),
(2, 'Nissan', 2002, 'EUROPA', 4),
(3, 'Toyota', 2004, 'JAPON', 6),
(4, 'KIA', 2015, 'COREA', 8),
(5, 'Honda', 2006, 'JAPON', 4),
(6, 'Mazda', 2016, 'JAPON', 6),
(7, 'Volvo', 2008, 'CHINA', 8),
(8, 'Hyundai', 2017, 'COREA', 4),
(9, 'Ford', 2010, 'EEUU', 6),
(10, 'Suzuki', 2019, 'JAPON', 8),
(11, 'Chevrolet', 2018, 'mexico', 7),
(13, 'Ferrary', 2021, 'Italia', 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
