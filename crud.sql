-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2020 a las 20:53:49
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha` date NOT NULL,
  `estado` enum('activo','inactivo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `fecha_creacion`, `fecha`, `estado`) VALUES
(1, 'omar moria', '2020-10-14', '2020-10-15', 'inactivo'),
(2, 'peres', '2020-10-14', '2020-10-14', 'activo'),
(3, 'marta', '2020-10-14', '0000-00-00', 'activo'),
(5, 'jesus', '2020-10-14', '0000-00-00', 'activo'),
(6, 'ana maria', '2020-10-17', '2020-10-14', 'activo'),
(7, 'peres luis', '2020-10-15', '0000-00-00', 'activo'),
(8, 'maria', '2020-10-14', '0000-00-00', 'activo'),
(9, 'luz', '2020-10-15', '0000-00-00', 'activo'),
(10, 'mario', '2020-10-17', '0000-00-00', 'activo'),
(11, 'aa', '2020-10-14', '0000-00-00', 'inactivo'),
(12, 'ssss', '2020-10-14', '0000-00-00', 'inactivo'),
(13, 'cabrera', '2020-10-15', '0000-00-00', 'activo'),
(14, 'harol', '2020-10-14', '0000-00-00', 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
