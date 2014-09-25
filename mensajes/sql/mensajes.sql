-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2014 a las 20:55:40
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mensajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `correo` varchar(20) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `comentado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`correo`, `comentario`, `fecha`, `likes`, `dislikes`, `no`, `comentado`) VALUES
('jelg1994@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2014-09-08', 12, 2, 8, 'jelg1994@gmail.com'),
('jelg1994@gmail.com', 'Sed at rhoncus lectus, ac luctus ex.', '2014-09-08', 1, 12, 28, 'jelg1994@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(20) NOT NULL,
  `telefono` varchar(14) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `nacimiento` date NOT NULL,
  `foto` varchar(30) NOT NULL,
  PRIMARY KEY (`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `correo`, `telefono`, `ciudad`, `nacimiento`, `foto`) VALUES
('Juan esteban López', 'jelg1994@gmail.com', '301 2232705', 'Cali-Valle del cauca', '0000-00-00', 'fotos/fotojuan.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
