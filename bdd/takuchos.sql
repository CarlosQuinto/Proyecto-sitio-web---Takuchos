-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2018 a las 03:16:49
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `takuchos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblordenes`
--

CREATE TABLE `tblordenes` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `referencias` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `total` double(11,11) NOT NULL,
  `formaPago` enum('Efectivo','Tarjeta de credito') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblordenesplatillos`
--

CREATE TABLE `tblordenesplatillos` (
  `Id` int(11) NOT NULL,
  `IdPlatillo` int(11) NOT NULL,
  `IdOrden` int(11) NOT NULL,
  `total` double NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf32_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Volcado de datos para la tabla `tblordenesplatillos`
--

INSERT INTO `tblordenesplatillos` (`Id`, `IdPlatillo`, `IdOrden`, `total`, `cantidad`, `descripcion`) VALUES
(1, 12, 75, 15, 1, 'Coca Cola 600 ml'),
(2, 12, 75, 30, 2, 'Coca Cola 600 ml'),
(3, 12, 75, 60, 4, 'Coca Cola 600 ml'),
(4, 12, 75, 15, 1, 'Coca Cola 600 ml');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblplatillos`
--

CREATE TABLE `tblplatillos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) COLLATE utf32_bin NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(100) COLLATE utf32_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Volcado de datos para la tabla `tblplatillos`
--

INSERT INTO `tblplatillos` (`id`, `nombre`, `precio`, `descripcion`) VALUES
(1, 'Suadero', 10, 'Taco de suadero'),
(2, 'Adobada', 12.5, 'Taco de adobada'),
(3, 'Mixto', 12, 'Taco mixto'),
(4, 'Longaniza', 12.5, 'Taco de longaniza'),
(5, 'ChicharronSV', 15, 'Taco de chicharron en salsa verde'),
(6, 'ChicharronSR', 15, 'Taco de chicharron en salsa roja'),
(7, 'Agua de horchata', 10, 'Agua de horchata de 600 ml'),
(8, 'Agua de jamaica', 10, 'Agua de jamaica 600 ml'),
(9, 'Agua de melon', 10, 'Agua de melon 600ml'),
(10, 'Te de limon', 10, 'Te de limon 600ml'),
(11, 'Coca Cola 500 ml', 10, 'Coca Cola de vidrio 500 ml'),
(12, 'Coca Cola 600 ml', 15, 'Coca Cola de vidrio 600 ml');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltarjetascredito`
--

CREATE TABLE `tbltarjetascredito` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `Numero` int(16) NOT NULL,
  `nombreCompleto` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fechaExpiracion` varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `codigoSeguridad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuarios`
--

CREATE TABLE `tblusuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Volcado de datos para la tabla `tblusuarios`
--

INSERT INTO `tblusuarios` (`id`, `nombre`, `apellido`, `email`, `contrasena`, `telefono`) VALUES
(4, 'Carlos', 'Carballo', 'carloscarballod2@gmail.com', '$2y$10$i5/Tt5B7DIENAppfeITymee2OVApfmkUqGccDGIwrilfo61aZBKWO', '6221739331'),
(5, 'Erik', 'Gonzales', 'ErikPack@gmail.com', '$2y$10$XX.eCMmYHfpwd/G8VQFVDOgk4h0EVn8FeDwxlYTb.WevQ1g8K4dOW', '6221236487'),
(6, 'Juan Carlos', 'Almanza', 'jalmanza@gmail.com', '$2y$10$6GQdZO9NCV2RzHs3wQ/RH.NdO/TtXWmOUqZuQlw8Zi3KaYchzmoKi', '6221749302'),
(7, 'Jorge', 'De la Cruz', 'jorgewarro@gmail.com', '$2y$10$3n23sCSHjhVkwBPso0MfNOoO/CRjBahTfBnARwjkYwCc5.tAHjXZO', '6221859648');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblordenes`
--
ALTER TABLE `tblordenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tblOrdenes_tblUsuarios` (`idUsuario`);

--
-- Indices de la tabla `tblordenesplatillos`
--
ALTER TABLE `tblordenesplatillos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tblplatillos`
--
ALTER TABLE `tblplatillos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbltarjetascredito`
--
ALTER TABLE `tbltarjetascredito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbltarjetasCredito_tblUsuarios` (`idUsuario`);

--
-- Indices de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblordenes`
--
ALTER TABLE `tblordenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblordenesplatillos`
--
ALTER TABLE `tblordenesplatillos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbltarjetascredito`
--
ALTER TABLE `tbltarjetascredito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblordenes`
--
ALTER TABLE `tblordenes`
  ADD CONSTRAINT `fk_tblOrdenes_tblUsuarios` FOREIGN KEY (`idUsuario`) REFERENCES `tblusuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
