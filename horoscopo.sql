-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-12-2016 a las 13:44:56
-- Versión del servidor: 5.7.16-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `horoscopo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', '0000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `signos`
--

CREATE TABLE `signos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `signos`
--

INSERT INTO `signos` (`id`, `nombre`) VALUES
(1, 'Aries'),
(2, 'Tauro'),
(3, 'Geminis'),
(4, 'Cancer'),
(5, 'Leo'),
(6, 'Virgo'),
(7, 'Libra'),
(8, 'Escorpio'),
(9, 'Sagitario'),
(10, 'Capricornio'),
(11, 'Acuario'),
(12, 'Piscis');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `topicos`
--

CREATE TABLE `topicos` (
  `id` int(11) NOT NULL,
  `amor` text COLLATE utf8_spanish_ci NOT NULL,
  `amistad` text COLLATE utf8_spanish_ci NOT NULL,
  `trabajo` text COLLATE utf8_spanish_ci NOT NULL,
  `solteros` text COLLATE utf8_spanish_ci NOT NULL,
  `dinero` text COLLATE utf8_spanish_ci NOT NULL,
  `salud` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `id_signo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `topicos`
--

INSERT INTO `topicos` (`id`, `amor`, `amistad`, `trabajo`, `solteros`, `dinero`, `salud`, `fecha`, `id_signo`) VALUES
(1, 'En el amor te encontraras con una chica color papelon y la amaras como nunca', 'Tienes un amigo sobrevalorado, siempre quiere a tu gato', 'Algun dia tendras tu paypal verificada', 'No estas solteros 1313', 'Tons of dollars hehe xd', 'Deja de comer chatarra', '06-12-2016', 12),
(2, 'Hay dolares', 'qwerty', 'qwerty', 'qwerty', 'dadasd', 'qwerty', '06-12-2016', 1),
(3, 'No Hay Dinero', 'hay dinero', 'hay dinero', 'hay dinero', 'hay dinero', 'hay dinero', '06-12-2016', 6),
(4, 'kjnbkjn', 'kjn', 'kjn', 'jkn', 'kjn', 'kjnjkn', '3-1-2016', 1),
(5, 'jklnlknm', 'lkmnlkm', 'klmkl', 'klmklm', 'lkmlkm', 'iughu', '10-12-2016', 4),
(6, 'jknhkn', 'kjnjkn', 'piojipoj', 'uihigh', 'yuvuyvu', 'asd', '07-12-2016', 1),
(7, 'asdas', 'jnjkln', 'kjnkj', 'jknjk', 'uoyhouh', '98798', '07-12-2016', 3),
(8, 'qwer|wert', 'qwer', 'werty', 'werty', 'werty', 'werty', '04-06-2016', 7),
(9, 'qwert', 'werty', 'werty', 'werty', 'werty', 'werty', '08-12-2016', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `signos`
--
ALTER TABLE `signos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `topicos`
--
ALTER TABLE `topicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `signos`
--
ALTER TABLE `signos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `topicos`
--
ALTER TABLE `topicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
