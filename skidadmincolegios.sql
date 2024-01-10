-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2024 a las 17:36:26
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `skidadmincolegios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `Mail` varchar(128) NOT NULL,
  `Contra` varchar(16) NOT NULL,
  `Cargo` varchar(32) NOT NULL,
  `Nombreyapellido` varchar(128) NOT NULL,
  `1roTM` bit(1) NOT NULL,
  `1roTT` bit(1) NOT NULL,
  `1roTN` bit(1) NOT NULL,
  `2doTM` bit(1) NOT NULL,
  `2doTT` bit(1) NOT NULL,
  `2doTN` bit(1) NOT NULL,
  `3roTM` bit(1) NOT NULL,
  `3roTT` bit(1) NOT NULL,
  `3roTN` bit(1) NOT NULL,
  `4toTM` bit(1) NOT NULL,
  `4toTT` bit(1) NOT NULL,
  `4toTN` bit(1) NOT NULL,
  `5toTM` bit(1) NOT NULL,
  `5toTT` bit(1) NOT NULL,
  `5toTN` bit(1) NOT NULL,
  `6toTM` bit(1) NOT NULL,
  `6toTT` bit(1) NOT NULL,
  `6toTN` bit(1) NOT NULL,
  `7moTM` bit(1) NOT NULL,
  `7moTT` bit(1) NOT NULL,
  `7moTN` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID`, `Mail`, `Contra`, `Cargo`, `Nombreyapellido`, `1roTM`, `1roTT`, `1roTN`, `2doTM`, `2doTT`, `2doTN`, `3roTM`, `3roTT`, `3roTN`, `4toTM`, `4toTT`, `4toTN`, `5toTM`, `5toTT`, `5toTN`, `6toTM`, `6toTT`, `6toTN`, `7moTM`, `7moTT`, `7moTN`) VALUES
(1, 'Director@colegio.edu.ar', 'director123', 'Director', 'Carlos Gorosito', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1'),
(2, 'Secretaria@colegio.edu.ar', 'secretaria123', 'Secretaria', 'Maria Garcia', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1'),
(3, 'JefePreceptores@colegio.edu.ar', 'jefep123', 'Jefe de Preceptores', 'Emanuel Garrido', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
