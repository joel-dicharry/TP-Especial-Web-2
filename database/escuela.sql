-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2019 a las 20:54:49
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actas`
--

CREATE TABLE `actas` (
  `id_comentario` int(11) NOT NULL,
  `contenido_act` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  `id_alumno_fk` int(11) NOT NULL,
  `id_user_fk` int(11) NOT NULL,
  `imagen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `actas`
--

INSERT INTO `actas` (`id_comentario`, `contenido_act`, `id_alumno_fk`, `id_user_fk`, `imagen`) VALUES
(1, '', 9, 1, 123),
(2, 'se porta mal pero lo hace bien', 18, 25, 0),
(3, 'sdfgsdg', 18, 2, 2),
(4, 'khjkhjkhjk', 18, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `dni` int(10) NOT NULL,
  `imagen` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `id_especialidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `nombre`, `apellido`, `dni`, `imagen`, `id_especialidad`) VALUES
(18, 'nerd', 'promedio', 28282883, 'imagenes/alumnos/5dcc65b41905d.jpg', 1),
(19, 'la trola', 'de tu hermana', 3423423, 'imagenes/alumnos/5dcc69de72f0a.jpg', 2),
(20, 'juan ', 'carlos', 54586996, 'imagenes/alumnos/5dcd5c3111b51.jpg', 10),
(21, 'El facha', 'Del iphone', 58977456, 'imagenes/alumnos/5ddb1511990c7.jpg', 4),
(22, 'La perra', 'promo', 4564562, 'imagenes/alumnos/5ddb153397863.jpg', 3),
(23, 'El que repitio', 'Muchas veces', 45612313, 'imagenes/alumnos/5ddb1550d439d.jpg', 10),
(24, 'El nerd', 'de tercero', 1233342, 'imagenes/alumnos/5ddb15e002c01.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id_especialidad` int(11) NOT NULL,
  `nombre_esp` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id_especialidad`, `nombre_esp`) VALUES
(1, 'Ciclo Básico'),
(2, 'Informática'),
(3, 'Electromecánica'),
(4, 'Maestro Mayor de Obras'),
(10, 'Peluquería');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `username`, `email`, `contrasenia`, `admin`) VALUES
(1, 'El benja de las pibas', 'oriozabalabenja@gmail.com', '$2a$10$xi/Z3vbiylSHv4UGet7x5eJI6BfEhm42sabYVwrAD.OdOQ.qJGnhK', 1),
(3, '', 'joeldicharry19@gmail.com', '$2a$10$.xGSJSnQXmEIfrZinOme3.yIGO5ZG8icxIik0KeU0qJCypUSPshdG', 1),
(4, 'Martita', 'jijijiji@gmail.com', '$2y$10$HW6OAWd36n7JGulpCgxDdOHVca5Mnlp39/Eyy9Xlmr3wsF8Vxc0bK', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actas`
--
ALTER TABLE `actas`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `id_especialidad` (`id_especialidad`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id_especialidad`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actas`
--
ALTER TABLE `actas`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id_especialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidad` (`id_especialidad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
