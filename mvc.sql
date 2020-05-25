-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2020 a las 21:20:38
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `fecha` datetime NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `title`, `id_usuario`, `fecha`, `imagen`) VALUES
(1, 'Chloe', 0, '2020-04-23 08:28:42', '0-44496.jpg'),
(3, 'Fate', 0, '2020-04-23 08:39:24', '0-62071.jpg'),
(4, '', 0, '2020-04-23 08:39:53', '0-35419.jpg'),
(5, '', 0, '2020-04-23 08:42:16', '0-98858.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` datetime NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `id_usuario`, `titulo`, `mensaje`, `fecha`, `imagen`) VALUES
(8, 0, 'Hola', 'Mundo con PHP', '2020-04-21 06:35:22', '0-40453.jpg'),
(9, 0, 'Late', 'Bienvenido al Late Amiguitos', '2020-04-21 06:53:55', '0-25950.jpg'),
(10, 0, 'bcbb', 'bcxcvbxc', '2020-04-23 07:16:27', '0-55029.jpg'),
(11, 0, 'cdsc', '', '2020-04-23 09:41:32', '0-61399.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `name_empresa` varchar(50) NOT NULL,
  `tel` int(8) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cantidad_personas` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hospedaje` int(3) NOT NULL,
  `hrs_entrada` time NOT NULL,
  `hrs_salida` time NOT NULL,
  `dia` int(2) NOT NULL,
  `mes` varchar(15) NOT NULL,
  `anio` int(4) NOT NULL,
  `tipo_evento` varchar(50) NOT NULL,
  `id_usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id_reserva`, `name_empresa`, `tel`, `nombre`, `apellido`, `cantidad_personas`, `email`, `hospedaje`, `hrs_entrada`, `hrs_salida`, `dia`, `mes`, `anio`, `tipo_evento`, `id_usuario`) VALUES
(1, 'Advance', 41136516, 'Axel', 'Lopez', 5, 'axel.aatl@gmail.com', 5, '02:30:00', '18:30:00', 23, 'Abril', 2020, 'VideoJuegos', 0),
(2, 'SEGA', 78913254, 'Cecilia', 'LÃ³pez', 2, 'chechilia.lopez@gmail.com', 3, '11:00:00', '05:30:00', 20, 'Abril', 2020, 'Normal', 0),
(3, 'Anfora', 45165847, 'Betsabe', 'Palacios', 6, 'mancy@gmail.com', 6, '18:00:00', '11:00:00', 5, 'Abril', 2020, 'ConviviÃ³', 0),
(6, 'Sercoma', 55465364, 'Aquiles', 'Ortega', 3, 'orteg@gmail.com', 3, '15:40:00', '15:02:00', 3, 'Abril', 2021, 'Arquitectura', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `pass`) VALUES
(0, 'axel', 'axel.aatl@gmail.com', '$2y$10$Hnw5/s253w8MNES5Rmx/E.4kjclV8gVzFt/dxSQIHoHGCOUUUEjoy');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
