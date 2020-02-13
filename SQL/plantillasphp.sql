-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2018 a las 19:30:26
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plantillasphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biblioteca`
--

CREATE TABLE `biblioteca` (
  `ID` int(11) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `TITULO` varchar(100) NOT NULL,
  `AUTOR` varchar(100) NOT NULL,
  `PRECIO` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `biblioteca`
--

INSERT INTO `biblioteca` (`ID`, `ISBN`, `TITULO`, `AUTOR`, `PRECIO`, `cantidad`) VALUES
(1, '0-672-31509-2', 'La llamada de Cthulhu', 'H. P. Lovecraft', 20, 3),
(2, '4584894894', 'El desajuste del mundo', 'amin ', 10, 1),
(3, '22311', 'el seÃ±or de los anillos', 'tolkien', 30, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `privilegio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`ID`, `Usuario`, `contrasena`, `privilegio`) VALUES
(8, 'admin', '123', 1),
(9, 'jose', 'franco', 2),
(12, 'dio', 'brando', 2),
(13, 'root', 'root', 2),
(14, 'stanli', 'urrss', 2),
(15, 'picachu', 'pikaaa', 2),
(20, 'root', 'root', 2),
(22, 'jojo', 'jojo', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `biblioteca`
--
ALTER TABLE `biblioteca`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
