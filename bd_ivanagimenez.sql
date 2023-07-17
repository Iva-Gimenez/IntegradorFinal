-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2023 a las 23:56:55
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_ivanagimenez`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactar`
--

CREATE TABLE `contactar` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `phone` int(15) NOT NULL,
  `mensaje` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `contactar`
--

INSERT INTO `contactar` (`id`, `name`, `email`, `phone`, `mensaje`, `estado`) VALUES
(1, 'Ivana', 'ivana@gmail.com', 12332145, 'Esto es una pruebaaaa', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `provincia` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `localidad` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(15) NOT NULL,
  `baja` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `pass`, `perfil_id`, `provincia`, `localidad`, `telefono`, `baja`) VALUES
(1, 'Admin', 'Administrador', 'admin1@gmail.com', '$2y$10$mGceGmOaUKIb9kMvk/DLee5R3cvwlANNzDA6vIW31PZcEzMmtyeRO', 1, '', '', 1234566787, 0),
(2, 'Ivana', 'Gimenez', 'ivana@gmail.com', '$2y$10$208fnUo0scB3NlFGMwqq0.9tFhh6HqFOeT.8neYQdTPV9jxFCeqj.', 2, '', '', 1234456787, 0),
(3, 'German', 'Gigena', 'german@gmail.com', '$2y$10$N8mKP4LwmKfifuNR5TwOC.KSCvgcxLmZr1ymUiw/Zp5/Rwg8pXNJS', 2, '', '', 123454323, 0),
(4, 'Maria', 'Maciel', 'maria@gmail.com', '$2y$10$P39tSWAiCPrCGmeJModlAePY67ESvcXleqB1jUo2BY0R.SvGseo4q', 2, '', '', 1233214565, 1),
(5, 'Admin2', 'Administrador', 'admin2@gmail.com', '$2y$10$VS23LEBqP/Mg.8PLETrcuuyQEnRdqaFhk76LRoT5T9t9PeNzjI8nK', 1, '', '', 12345654, 0),
(6, 'Eduardo', 'Garcia', 'eduardo@gmail.com', '$2y$10$rk6MXEod10j9IEewLlLxAuvKFcK/1oLd/61YS7Oj2x0ANLUdBp2xu', 2, '', '', 12345654, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactar`
--
ALTER TABLE `contactar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perfil_id` (`perfil_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactar`
--
ALTER TABLE `contactar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
