-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2022 a las 03:00:56
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `latitude_admin` varchar(50) NOT NULL,
  `longitude_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `name`, `latitude_admin`, `longitude_admin`) VALUES
(1, 'booscan', '123456', 'Brayan Arevalo', '', ''),
(2, 'brayan', 'Break2018*', 'Brayan Arevalo', '4.576605474513117', '-74.21431804910378');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `id_cliente`, `id_producto`, `cant`) VALUES
(16, 1, 20, 7),
(17, 1, 18, 10),
(18, 1, 16, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(9, 'Lacteos'),
(11, 'Granos'),
(12, 'Embutidos'),
(13, 'Aseo'),
(14, 'DULCES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `numero_documento` int(50) NOT NULL,
  `direccion1` varchar(50) NOT NULL,
  `direccion2` varchar(50) NOT NULL,
  `barrio` varchar(50) NOT NULL,
  `telefono` int(50) NOT NULL,
  `celular` int(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `username`, `password`, `name`, `tipo_documento`, `numero_documento`, `direccion1`, `direccion2`, `barrio`, `telefono`, `celular`, `correo`, `imagen`, `latitude`, `longitude`) VALUES
(2, 'barevas', 'Break2018*', 'Estiven Arevalo', 'cc', 1024585873, 'Carrera 1a #9-37', 'Transversal 4 # 2-12', 'Soacha', 5874411, 2147483647, 'brayan.break97@gmail.com', 'Brayan Estiven Arevalo Vasquez411.png', '', ''),
(10, 'javier1', 'Password10', 'Javier Martinez', 'cc', 5236417, 'Cr 21 #13-25', 'Carrera 85a ', 'El sol', 7875445, 2147483647, 'javier1@correo.co', 'Javier Martinez304.png', '', ''),
(11, 'ricardo1', '12345', 'lentejas', 'cc', 231241, 'Carrera 1a #9-36', 'Transversal 4 # 2-12', 'ojiojn', 2147483647, 32432423, 'dasdas@asda', '', '', ''),
(12, 'Emily', 'Password', 'Emily Galindo', 'cc', 1036112145, 'Carrera 56# 9-09', '', 'El altico', 5759064, 311223344, 'emily@correo.com', 'Emily Galindo217.png', '', ''),
(13, 'daniel', 'Password10', 'Daniel Nocua', 'cc', 1023333333, 'Carrera 85 #74-22', 'Calle 22 #12-02', 'El danubio', 45454, 311111112, 'daniel@correo.com', 'Daniel Nocua584.png', '', ''),
(14, 'br', 'Break2020*', 'br', 'cc', 12165, 'Carrera 1a #9-37', '', 'san humbero', 5759076, 2147483647, 'brayan@gmail.com', '', '5.065447734922045', '-75.48278520298065'),
(15, 'pr', 'Bogota2020', 'pr', 'cc', 5484987, 'Carrera 1a #9-37', 'asdasdas', 'san humbero', 65454987, 61613218, 'brayan8@gmail.com', '', '', ''),
(16, 'lr', 'Bogota2020', 'lr', 'cc', 6544654, 'Carrera 1a #9-37', 'Carrera 1a #9-37', 'san humbero', 6548976, 2147483647, 'brayan9@gmail.com', '', '', ''),
(17, 'dr', 'Bogota2020', 'dr', 'cc', 2147483647, 'Carrera 1a #9-37', 'carrera 14 -36', 'san humbero', 98651, 2147483647, 'brayan10@gmail.com', '', '4.734406771614146', '-74.2635509882557'),
(18, 'estiven', '1234', 'Estiven Arevalo', 'cc', 10246544, 'Carrera 1a #9-37', 'Carrera 1a #9-37', 'san humbero', 64987987, 1316561561, 'brayan11@gmail.com', '', '4.5767855573094804', '-74.21600078683969');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `monto` float NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `id_cliente`, `fecha`, `monto`, `estado`) VALUES
(60, 2, '2019-12-01 21:28:20', 14500, 3),
(61, 12, '2019-12-01 21:30:38', 22700, 3),
(62, 2, '2019-12-01 21:39:43', 18900, 3),
(63, 12, '2019-12-01 21:40:37', 25500, 3),
(64, 12, '2019-12-01 23:22:08', 13500, 3),
(65, 10, '2019-12-01 23:34:42', 54000, 3),
(66, 10, '2019-12-01 23:41:23', 37700, 3),
(67, 12, '2019-12-01 23:42:16', 59100, 3),
(68, 12, '2019-12-01 23:42:56', 33000, 3),
(69, 10, '2019-12-01 23:43:31', 40900, 3),
(70, 2, '2019-12-01 23:44:15', 18800, 3),
(71, 10, '2019-12-01 23:44:50', 42500, 3),
(72, 12, '2019-12-01 23:45:19', 9000, 3),
(73, 10, '2019-12-01 23:45:46', 35500, 3),
(74, 2, '2019-12-01 23:46:28', 13000, 0),
(75, 10, '2019-12-01 23:46:52', 40500, 0),
(76, 10, '2019-12-01 23:48:50', 18000, 0),
(77, 13, '2019-12-03 21:54:47', 36000, 3),
(78, 2, '2019-12-05 18:42:59', 15000, 3),
(79, 2, '2022-08-29 22:36:51', 41800, 3),
(80, 2, '2022-08-29 22:47:15', 11000, 3),
(81, 2, '2022-10-23 11:16:38', 18600, 0),
(82, 14, '2022-10-23 12:31:05', 37000, 0),
(83, 17, '2022-10-23 22:27:55', 66600, 2),
(84, 2, '2022-10-24 21:26:05', 26600, 0),
(85, 14, '2022-10-24 21:27:39', 22000, 0),
(86, 18, '2022-10-24 21:36:13', 22000, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domiciliario`
--

CREATE TABLE `domiciliario` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tipo_documento` varchar(100) NOT NULL,
  `numero_documento` int(11) NOT NULL,
  `direccion1` varchar(100) NOT NULL,
  `barrio` varchar(100) NOT NULL,
  `telefono` int(100) NOT NULL,
  `celular` int(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `eps` varchar(100) NOT NULL,
  `arl` varchar(100) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `domiciliario`
--

INSERT INTO `domiciliario` (`id`, `username`, `password`, `name`, `tipo_documento`, `numero_documento`, `direccion1`, `barrio`, `telefono`, `celular`, `correo`, `eps`, `arl`, `imagen`) VALUES
(6, 'barevas', 'Break2018*', 'Estiven Arevalo', 'CE', 1024585873, 'Cra 1a ', 'San humberto', 5759076, 2147483647, 'brayan.break97@gmail.com', 'Famisanar', 'Sura', 'Estiven Arevalo164.png'),
(7, 'david', 'Password10', 'David Gonzalez', 'cc', 1022131313, 'Cr 21 #13-25', 'San humberto', 2121212, 2147483647, 'david@correo.com', 'Saludtotal', 'Seguros bolivar', 'Password10608.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `cantidad` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `stock` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `name`, `marca`, `price`, `cantidad`, `imagen`, `id_categoria`, `stock`) VALUES
(26, 'GRA001', 'Arroz', 'Roa', 1700, '1000 gr', 'Arroz502.png', 0, 1),
(27, 'GRA002', 'Arroz', 'Diana', 35000, '10000 gr', 'Arroz512.png', 0, 3),
(28, 'ENL001', 'Atun', 'Van Camps', 3800, '180 gr', 'Atun249.png', 0, 5),
(29, 'ENL002', 'Sardinas', 'Dolores', 3500, '425 gr', 'Sardinas993.png', 0, 7),
(30, 'GRA003', 'Pasta Spaghetti', 'Doria', 1500, '10000 gr', 'Pasta Spaghetti325.png', 0, 1),
(31, 'GRA004', 'Pasta letras', 'Doria', 2000, '250 gr', 'Pasta letras971.png', 0, 15),
(32, 'EMB001', 'Salchicha perro', 'Zenu', 9000, '18 und', 'Salchicha perro957.png', 0, 1),
(33, 'EMB002', 'Salchicha tradicional', 'Ranchera', 4500, '8 und', 'Salchicha tradicional345.png', 0, 2),
(34, 'PAQ001', 'Papas', 'Margarita', 7500, '24 und', 'Papas242.png', 0, 14),
(35, 'LAC001', 'Yogur', 'Alpina', 6000, '5 und', 'Yogur535.png', 0, 24),
(36, 'LAC002', 'Leche', 'algarra', 11000, '7 und', 'Leche839.png', 0, 14),
(37, 'GRA005', 'Frijoles', 'pelon', 4500, '951 gr', 'Frijoles925.png', 0, 0),
(38, 'EMB004', 'Mortadela', 'Zenu', 5800, '500 gr', 'Mortadela12.png', 0, 0),
(39, '39', 'Galletas de crema', 'Oreo', 6200, '452', 'Galletas de crema302.png', 0, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_compra`
--

CREATE TABLE `productos_compra` (
  `id` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `monto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos_compra`
--

INSERT INTO `productos_compra` (`id`, `id_compra`, `id_producto`, `cantidad`, `monto`) VALUES
(152, 60, 31, 2, 2000),
(153, 60, 29, 3, 3500),
(154, 61, 26, 1, 1700),
(155, 61, 35, 2, 6000),
(156, 61, 32, 1, 9000),
(157, 62, 28, 2, 3800),
(158, 62, 30, 3, 1500),
(159, 62, 26, 4, 1700),
(160, 63, 35, 1, 6000),
(161, 63, 34, 2, 7500),
(162, 63, 33, 1, 4500),
(163, 64, 32, 1, 9000),
(164, 64, 30, 3, 1500),
(165, 65, 35, 2, 6000),
(166, 65, 27, 1, 35000),
(167, 65, 29, 2, 3500),
(168, 66, 29, 2, 3500),
(169, 66, 32, 2, 9000),
(170, 66, 26, 3, 1700),
(171, 66, 28, 2, 3800),
(172, 67, 36, 3, 11000),
(173, 67, 35, 2, 6000),
(174, 67, 26, 3, 1700),
(175, 67, 33, 2, 4500),
(176, 68, 35, 3, 6000),
(177, 68, 34, 2, 7500),
(178, 69, 32, 3, 9000),
(179, 69, 29, 3, 3500),
(180, 69, 26, 2, 1700),
(181, 70, 35, 2, 6000),
(182, 70, 28, 1, 3800),
(183, 70, 30, 2, 1500),
(184, 71, 31, 3, 2000),
(185, 71, 30, 1, 1500),
(186, 71, 27, 1, 35000),
(187, 72, 32, 1, 9000),
(188, 73, 36, 2, 11000),
(189, 73, 30, 3, 1500),
(190, 73, 33, 2, 4500),
(191, 74, 31, 3, 2000),
(192, 74, 29, 2, 3500),
(193, 75, 34, 3, 7500),
(194, 75, 35, 3, 6000),
(195, 76, 32, 2, 9000),
(196, 77, 36, 3, 11000),
(197, 77, 30, 2, 1500),
(198, 78, 34, 2, 7500),
(199, 79, 39, 2, 6200),
(200, 79, 32, 2, 9000),
(201, 79, 28, 3, 3800),
(202, 80, 36, 1, 11000),
(203, 81, 39, 3, 6200),
(204, 82, 36, 2, 11000),
(205, 82, 34, 2, 7500),
(206, 83, 39, 3, 6200),
(207, 83, 35, 5, 6000),
(208, 83, 32, 2, 9000),
(209, 84, 39, 3, 6200),
(210, 84, 31, 4, 2000),
(211, 85, 36, 2, 11000),
(212, 86, 36, 2, 11000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `domiciliario`
--
ALTER TABLE `domiciliario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_compra`
--
ALTER TABLE `productos_compra`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `domiciliario`
--
ALTER TABLE `domiciliario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `productos_compra`
--
ALTER TABLE `productos_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
