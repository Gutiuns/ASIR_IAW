-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2020 a las 13:07:02
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examenes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `idComida` tinyint(4) NOT NULL,
  `Descripcion` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Tipo` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`idComida`, `Descripcion`, `Tipo`, `Precio`) VALUES
(1, 'Rollito Thai', 'Asiática', 2.75),
(2, 'Tempura', 'Asiática', 6.75),
(3, 'Samosa', 'Asiática', 5.45),
(4, 'Yam Nua', 'Asiática', 7.65),
(5, 'Langostinos con Jengibre', 'Asiática', 11.8),
(6, 'Pollo al curry', 'Asiática', 8.75),
(7, 'Panini', 'Italiana', 5.95),
(8, 'Tagliatelle carbonara', 'Italiana', 5.95),
(9, 'Mini Calzone', 'Italiana', 3.95),
(10, 'Pan de ajo', 'Italiana', 3.95),
(11, 'Empanada criolla', 'Italiana', 4.95),
(12, 'Pizza', 'Italiana', 7.95),
(17, 'Chips con guacamole', 'Mexicana', 4.5),
(18, 'Nachos con queso', 'Mexicana', 10.9),
(19, 'Quesadilla vegana', 'Mexicana', 13.9),
(20, 'Burrito', 'Mexicana', 9.9),
(21, 'Beef Bowl', 'Mexicana', 9.95),
(22, 'Frijoles', 'Mexicana', 5.6),
(23, 'Paella', 'Mediterránea', 18),
(24, 'Salmorejo', 'Mediterránea', 9.8),
(25, 'Hamburguesa doble', 'Mediterránea', 5.8),
(26, 'Ensalada mixta', 'Mediterránea', 3.95),
(27, 'Patatas con huevo', 'Mediterránea', 16.2),
(28, 'Jamón con queso', 'Mediterránea', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturascomida`
--

CREATE TABLE `facturascomida` (
  `idFactura` tinyint(4) NOT NULL,
  `NombreCliente` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `DireccionCli` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `TipoComida` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`idComida`),
  ADD UNIQUE KEY `desc_comida` (`Descripcion`);

--
-- Indices de la tabla `facturascomida`
--
ALTER TABLE `facturascomida`
  ADD PRIMARY KEY (`idFactura`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comida`
--
ALTER TABLE `comida`
  MODIFY `idComida` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `facturascomida`
--
ALTER TABLE `facturascomida`
  MODIFY `idFactura` tinyint(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
