-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3310
-- Tiempo de generación: 07-11-2022 a las 19:30:27
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mds`
--
CREATE DATABASE IF NOT EXISTS `mds` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mds`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `documento` varchar(15) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `servicio` varchar(50) NOT NULL,
  `computador` varchar(50) NOT NULL,
  `observaciones` varchar(300) NOT NULL,
  `fecha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`ID`, `nombre`, `apellido`, `documento`, `telefono`, `correo`, `direccion`, `servicio`, `computador`, `observaciones`, `fecha`) VALUES
(7, 'santiago', 'carrillo', '1096538728', '3213143421', 'santi2001.07@hotmail.com', 'av 7 #5-59 la union aparto 102', 'Mantenimiento Preventivo', 'Computador de Mesa', 'zxcxz', '2022-11-06'),
(8, 'dayismar', 'rodriguez', '30303643', '3209742427', 'rdayismar@gmail.com', 'villa de rosario', 'Cambio de Piezas', 'Laptop', 'holaaaa', '2022-11-12'),
(9, 'castillo', 'fernandez', '109824953', '3213425421', 'nandes@gmail.com', 'av9 #2-23 siglo XXI', 'Mantenimiento Correctivo', 'Todo en Uno', 'nadaaaaaaaa', '2022-11-09'),
(10, 'steven', 'miliano', '27697302', '3135674356', 'steven@gmail.com', 'atalaya', 'Instalación de Sistema Operativo', 'Laptop', 'disco duro sin sistema operativo', '2022-11-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `fecharegistro` varchar(20) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `usuario`, `correo`, `contrasena`, `fecharegistro`, `rol_id`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', '4/11/2022', 1),
(4, 'saito', 'santi2001.07@gmail.com', '12345', '04/11/22', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(2) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `rol`) VALUES
(1, 'Admin'),
(2, 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rol_id` (`rol_id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `fk_rol_id` FOREIGN KEY (`rol_id`) REFERENCES `tipo_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
