-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2014 a las 20:55:05
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
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE IF NOT EXISTS `favoritos` (
  `usuario` varchar(30) NOT NULL,
  `id_mensaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`usuario`, `id_mensaje`) VALUES
('jelg1994@gmail.com', 1),
('jelg1994@gmail.com', 2),
('jelg1994@gmail.com', 2),
('jelg1994@gmail.com', 4),
('jelg1994@gmail.com', 4),
('jelg1994@gmail.com', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `usuario` varchar(20) NOT NULL,
  `id_mensaje` int(11) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `comentado` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`correo`, `comentario`, `fecha`, `likes`, `dislikes`, `no`, `comentado`, `id`) VALUES
('jelg1994@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2014-09-08', 17, 5, 11, 'jelg1994@gmail.com', 1),
('jelg1994@gmail.com', 'Sed at rhoncus lectus, ac luctus ex.', '2014-09-08', 2, 12, 30, 'jelg1994@gmail.com', 2),
('jose@hotmail.com', 'Proin scelerisque imperdiet nibh nec pretium. Nulla a rutrum sapien, sed porttitor massa. In rhoncus hendrerit erat, sed commodo lectus sodales ut. Aenean malesuada enim gravida rhoncus imperdiet. Pel', '2014-03-20', 0, 3, 0, 'jelg1994@gmail.com', 3),
('jelg1994@gmail.com', 'Proins hendrerit erat, sed commodo lectus sodales ut. Aenean malesuada enim gravida rhoncus imperdiet. Pellentesque faucibus sagittis lectus, eget tristique urna euismod vitae.', '2014-03-20', 0, 1, 1, 'pepito@hotmail.com', 4);

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
  `contrasena` varchar(20) NOT NULL,
  PRIMARY KEY (`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `correo`, `telefono`, `ciudad`, `nacimiento`, `foto`, `contrasena`) VALUES
('Juan esteban López', 'jelg1994@gmail.com', '301 2232705', 'Cali-Valle del cauca', '0000-00-00', 'fotos/fotojuan.jpg', '123456'),
('jose', 'jose@hotmail.com', '3312033', 'Cali-Valle del cauca', '1991-02-01', 'fotos/fotojose.jpg', 'asdf'),
('pepito', 'pepito@hotmail.com', '3312011', 'Cali-Valle del cauca', '1991-12-11', 'fotos/fotopepito.jpg', 'hola');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
