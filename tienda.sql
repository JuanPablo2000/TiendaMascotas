-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-12-2019 a las 03:14:11
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbarticulos`
--

DROP TABLE IF EXISTS `tbarticulos`;
CREATE TABLE IF NOT EXISTS `tbarticulos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CODIGO` int(11) NOT NULL,
  `MARCA` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DESCRIPCION` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `PRECIO` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `IMAGEN` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `CODIGO` (`CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbarticulos`
--

INSERT INTO `tbarticulos` (`ID`, `CODIGO`, `MARCA`, `DESCRIPCION`, `PRECIO`, `CANTIDAD`, `IMAGEN`) VALUES
(7, 987, 'glade', 'spray antipulgas', 100, 10, 'S_allgreensprayv016525_1.jpg'),
(8, 432, 'frei', 'bolas', 100, 5, 'S_gigwiballoriginalsv019439.jpg'),
(15, 333, 'frei', 'placa', 100, 6, 'S_imarcaluminumtagbone1unsmallbkack0414.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbfactura`
--

DROP TABLE IF EXISTS `tbfactura`;
CREATE TABLE IF NOT EXISTS `tbfactura` (
  `ID_COMPRA` int(11) NOT NULL AUTO_INCREMENT,
  `CEDULA_FK` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ID_ARTICULO` int(11) NOT NULL,
  `NUMERO_FAC` int(11) NOT NULL,
  `FECHA_COM` date NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  PRIMARY KEY (`ID_COMPRA`),
  UNIQUE KEY `CEDULA_FK` (`CEDULA_FK`),
  UNIQUE KEY `ID_ARTICULO` (`ID_ARTICULO`),
  UNIQUE KEY `NUMERO_FAC` (`NUMERO_FAC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE IF NOT EXISTS `tbusuario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CEDULA` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ROL` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `APELLIDOS` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TELEFONO` int(11) NOT NULL,
  `EMAIL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `USUARIO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `CEDULA` (`CEDULA`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbusuario`
--

INSERT INTO `tbusuario` (`ID`, `CEDULA`, `ROL`, `NOMBRE`, `APELLIDOS`, `TELEFONO`, `EMAIL`, `USUARIO`, `PASSWORD`) VALUES
(1, '1234', 'Admin', 'juan', 'Brenes', 70692993, 'juanpabrenes85@gmail.com', 'jbrenes', '1234'),
(3, '11649', 'User', 'Diego', 'abarca', 70692993, 'juanpabrenes85@gmail.com', 'dabarca', '1234'),
(4, '333', 'Admin', 'Luis', 'Brenes', 70692993, 'juanpabrenes85@gmail.com', 'luis', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
