-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2019 a las 14:57:47
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `albergue`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `esterilizar`
--

CREATE TABLE `esterilizar` (
  `id` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `mascota` varchar(150) NOT NULL,
  `telefono` int(11) NOT NULL,
  `descripciones` text NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `esterilizar`
--

INSERT INTO `esterilizar` (`id`, `nombres`, `apellidos`, `mascota`, `telefono`, `descripciones`, `edad`, `sexo`) VALUES
(3, 'Pedro', 'Torres', 'Pipo', 987654321, 'Es de raza pequeña', 2, ''),
(4, 'firulais', 'ss', '', 1231, 'aasdasd', 12, ''),
(5, 'dasdasda', 'dasdsa', 'asd', 23432, 'dasda', 23, 'F'),
(6, 'aaaaaaaaaaa', 'bbbbbbb', '111111111', 0, 'qweqweqw', 2, 'F'),
(7, '', '', '', 0, '', 0, ''),
(8, 'dasda', 'eqeqw', 'eqqw', 0, 'qeqwe', 12, 'F'),
(9, 'dasda', 'eqeqw', 'eqqw', 0, 'qeqwe', 12, 'F'),
(10, 'qqqq', 'qqqeqe', '31231', 0, 'ggfddf', 23, 'F'),
(11, 'qqqq', 'qqqeqe', '31231', 0, 'ggfddf', 23, 'F'),
(12, 'firulais', 'asdasdasda', '111111111', 0, 'dasdas', 2, 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `descripcion` text NOT NULL,
  `lugar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `descripcion`, `lugar`) VALUES
(7, 'Firulais', 'Lindo perro de edad avanzada', 'Surco'),
(8, 'Pipo', 'Lindo perro de edad avanzada', 'La Molina'),
(9, 'Oso', 'Lindo perro de edad avanzada', 'San Borja'),
(11, '', '', ''),
(12, 'fenix', 'abcdefg', '2'),
(13, 'pipo', 'oso', '1'),
(14, 'romano', 'gato hermoso', 'Magdalena'),
(15, 'aaaaaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaa'),
(16, 'sadasdaasd', 'asdasdas', ''),
(17, 'aaaaaaaa', 'aaaaaaaxxxxxxx', ''),
(18, 'qqwe', 'adadas', ''),
(19, 'dfdsf', 'sdfsf', 'fsdfsd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntarios`
--

CREATE TABLE `voluntarios` (
  `id` int(11) NOT NULL,
  `nombres1` varchar(200) NOT NULL,
  `apellidos1` varchar(200) NOT NULL,
  `telefono1` int(11) NOT NULL,
  `distrito1` varchar(200) NOT NULL,
  `descripciones1` text NOT NULL,
  `edad1` int(11) NOT NULL,
  `sexo1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `voluntarios`
--

INSERT INTO `voluntarios` (`id`, `nombres1`, `apellidos1`, `telefono1`, `distrito1`, `descripciones1`, `edad1`, `sexo1`) VALUES
(1, '', '', 0, '', '', 0, ''),
(2, '', '', 0, '', '', 0, ''),
(3, 'adsad', 'asdad', 23424, 'A', 'adsad', 12, 'F'),
(4, 'Arnaldo', 'Torres', 93123912, 'JM', 'deseo apoyar', 18, 'M'),
(5, 'Arnaldo', 'Torres', 31231, 'Chaclacayo', 'dasda', 15, 'M'),
(6, 'Arnaldo', 'Torres', 654645, 'Miraflores', 'gfqqeqweqw', 19, 'M'),
(7, '', '', 0, '', '', 0, ''),
(8, '', '', 0, '', '', 0, ''),
(9, 'tytyt', 'ytyty', 0, 'Barranco', 'qeqwewq', 12, 'M'),
(10, 'bvbvb', 'bvbvb', 5, '', '', 0, ''),
(11, 'bvbvb', 'bvbvb', 5, '', '', 0, ''),
(12, 'bvbvb', 'bvbvb', 54545487, 'Independencia', 'hfgdfg', 25, 'M'),
(13, 'bvbvb', 'bvbvb', 54545487, 'Independencia', 'hfgdfg', 25, 'M'),
(14, 'Arnaldo', 'ytyty', 983128312, 'Jesus Maria', 'dsadasda', 19, 'M');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `esterilizar`
--
ALTER TABLE `esterilizar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `voluntarios`
--
ALTER TABLE `voluntarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `esterilizar`
--
ALTER TABLE `esterilizar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `voluntarios`
--
ALTER TABLE `voluntarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
