-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2018 a las 22:31:36
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
-- Estructura de tabla para la tabla `datosdestinatario`
--

CREATE TABLE `datosdestinatario` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf32_bin NOT NULL,
  `Apellido` varchar(100) COLLATE utf32_bin NOT NULL,
  `Telefono` varchar(100) COLLATE utf32_bin NOT NULL,
  `idOrden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Volcado de datos para la tabla `datosdestinatario`
--

INSERT INTO `datosdestinatario` (`id`, `Nombre`, `Apellido`, `Telefono`, `idOrden`) VALUES
(1, 'Carlos', 'Carballo', '016221739331', 2);

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
  `total` double NOT NULL,
  `formaPago` enum('Efectivo','Tarjeta de credito') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblordenes`
--

INSERT INTO `tblordenes` (`id`, `idUsuario`, `fecha`, `direccion`, `referencias`, `total`, `formaPago`) VALUES
(2, 10, '2018-05-08 20:27:38', 'Calle 5 Ave. 6 Col. San Vicente', 'Bochito Verde', 40, 'Efectivo');

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
(1, 1, 2, 30, 3, 'Suadero'),
(2, 8, 2, 10, 1, 'Agua de jamaica');

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
(10, 'Carlos', 'Carballo', 'carloscarballod2@gmail.com', '$2y$10$olIpcnkUQOun1GOeXy0pcOc1ciBsvoHDOlIDBo9Q/qo.5Y6GgaoGe', '6221739331'),
(11, 'Carlos', 'Carballo', 'carloscarballod2@gmail.com', '$2y$10$eEVzr.w4hKGwRwtx4HDTzOUIWrHOWfly8NoUFr66lAKV.mWnlRTae', '6221739331');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosdestinatario`
--
ALTER TABLE `datosdestinatario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idOrden` (`idOrden`);

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
-- AUTO_INCREMENT de la tabla `datosdestinatario`
--
ALTER TABLE `datosdestinatario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tblordenes`
--
ALTER TABLE `tblordenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblordenesplatillos`
--
ALTER TABLE `tblordenesplatillos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbltarjetascredito`
--
ALTER TABLE `tbltarjetascredito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datosdestinatario`
--
ALTER TABLE `datosdestinatario`
  ADD CONSTRAINT `datosdestinatario_ibfk_1` FOREIGN KEY (`idOrden`) REFERENCES `tblordenes` (`id`);

--
-- Filtros para la tabla `tblordenes`
--
ALTER TABLE `tblordenes`
  ADD CONSTRAINT `fk_tblOrdenes_tblUsuarios` FOREIGN KEY (`idUsuario`) REFERENCES `tblusuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
