-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2021 a las 02:02:06
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `disewebii`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `metodopago` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `tiempo` varchar(100) NOT NULL,
  `nronicho` int(11) NOT NULL,
  `ciusu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `metodopago`, `tipo`, `tiempo`, `nronicho`, `ciusu`) VALUES
(5, 'PAYPAL', 'TEMPORAL', '5 AÃ‘OS', 12345, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `ci` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `contra` varchar(50) NOT NULL,
  `rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`ci`, `nombre`, `apellidos`, `edad`, `telefono`, `direccion`, `contra`, `rol`) VALUES
(22, 'pepin', 'el malote', 12, 7452727, 'que te inporta', '444', 'user'),
(110, 'cholo', 'juanito', 12, 777777778, 'para que quieres saber', '987', 'user'),
(444, 'pepa', 'pig', 100, 411144141, 'que te inporta ', '999', 'user'),
(6166118, 'ever', 'laura suaznavar', 25, 60621846, 'alla', '234', 'admin'),
(6815786, 'christian', 'coronado', 20, 78755078, 'alla', '456', 'admin'),
(9126535, 'elian', 'espejo', 20, 75264047, 'villa san antonio', '345', 'admin'),
(11075712, 'jhimy', 'torrez', 21, 73548703, 'aqui', '123', 'admin'),
(123456789, 'juan carlos', 'ascencio', 20, 76669854, 'nose', '111', 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nicho`
--

CREATE TABLE `nicho` (
  `nronicho` int(11) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nicho`
--

INSERT INTO `nicho` (`nronicho`, `direccion`, `descripcion`) VALUES
(12345, 'alto tejar', 'un nicho pequeño'),
(23456, 'alto tejar', 'un nicho grande'),
(34567, 'alto tejar', 'un nicho mediano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `ci` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `cargo` varchar(200) NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`ci`, `nombre`, `apellidos`, `direccion`, `cargo`, `edad`, `telefono`) VALUES
(123456, 'armando', 'paredez', 'ceja', 'portero', 25, 79845126),
(234567, 'alejandro', 'aparicio', 'san antonio', 'limpieza', 32, 65678451),
(345678, 'melani', 'alvares', 'los pinos', 'inspeccion', 23, 7845124),
(3456789, 'julian', 'gonzales', 'villafatima', 'corredor', 34, 65478412),
(4567891, 'adriana', 'alvorta', 'petrolero', 'limpieza', 25, 65478512);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nronicho` (`nronicho`),
  ADD KEY `ciusu` (`ciusu`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `nicho`
--
ALTER TABLE `nicho`
  ADD PRIMARY KEY (`nronicho`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`ci`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `nicho`
--
ALTER TABLE `nicho`
  MODIFY `nronicho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34568;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`ciusu`) REFERENCES `datos` (`ci`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`nronicho`) REFERENCES `nicho` (`nronicho`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
