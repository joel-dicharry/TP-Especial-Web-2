-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2019 a las 05:15:59
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
  `puntaje` int(1) NOT NULL,
  `id_alumno_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `actas`
--

INSERT INTO `actas` (`id_comentario`, `contenido_act`, `puntaje`, `id_alumno_fk`) VALUES
(16, 'LLego tarde a Clases', 2, 26),
(17, 'Usa el celular en clase', 4, 27),
(18, 'Molesta a compañeros', 3, 27),
(19, 'No hizo los deberes', 3, 28),
(20, 'Comer en clase', 2, 29),
(21, 'llega tarde siempre', 2, 30),
(22, 'Habla mucho e interrumpe', 3, 31),
(23, 'fdssdf', 1, 26);

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
(26, 'Aurora', 'Dominguez', 45982761, 'imagenes/alumnos/5dddef64ace31.jpg', 10),
(27, 'Alejandro', 'Williams', 25789357, 'imagenes/alumnos/5dddefe8d208a.jpg', 3),
(28, 'Agustin', 'Rodriguez', 49683279, 'imagenes/alumnos/5dddf0023b0d0.jpg', 1),
(29, 'Leon', 'Diaz', 38461957, 'imagenes/alumnos/5dddf03e70b73.jpg', 3),
(30, 'Florencia', 'Lobos', 52489662, 'imagenes/alumnos/5dddf07387de1.jpg', 1),
(31, 'Magali', 'Bauer', 43251269, 'imagenes/alumnos/5dddf0ae469a0.jpg', 2);

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
  `rta_question` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `username`, `email`, `contrasenia`, `rta_question`, `admin`) VALUES
(1, 'El benja de las pibas', 'oriozabalabenja@gmail.com', '$2a$10$xi/Z3vbiylSHv4UGet7x5eJI6BfEhm42sabYVwrAD.OdOQ.qJGnhK', '', 1),
(3, 'fsdfsdf', 'joeldicharry19@gmail.com', '$2y$10$HW6OAWd36n7JGulpCgxDdOHVca5Mnlp39/Eyy9Xlmr3wsF8Vxc0bK', 'miksa', 1),
(4, 'Martita', 'jijijiji@gmail.com', '$2y$10$HW6OAWd36n7JGulpCgxDdOHVca5Mnlp39/Eyy9Xlmr3wsF8Vxc0bK', '', 0);

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
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
