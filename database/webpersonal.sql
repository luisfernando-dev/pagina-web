-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: u3r5w4ayhxzdrw87.cbetxkdyhwsb.us-east-1.rds.amazonaws.com
-- Tiempo de generación: 07-06-2021 a las 02:30:30
-- Versión del servidor: 10.4.13-MariaDB-log
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `szhgszu23qht9hfb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `webpersonal`
--

CREATE TABLE `webpersonal` (
  `id_user` int(11) NOT NULL,
  `cedula` int(10) NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `webpersonal`
--

INSERT INTO `webpersonal` (`id_user`, `cedula`, `nombre`, `apellido`, `email`, `sexo`, `user`, `pass`, `telefono`, `direccion`) VALUES
(1, 1234, 'admin', 'istrador', 'admin@gmail.com', 'm', 'admin', 'admin', 1234, 56789),
(2, 23423, 'luis', 'fernando', 'lf@gmail.com', 'm', 'luis', '1', 1234567, 2314);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `webpersonal`
--
ALTER TABLE `webpersonal`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `webpersonal`
--
ALTER TABLE `webpersonal`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
