-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2022 at 04:36 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `fecha` datetime NOT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `id_usuario`, `titulo`, `fecha`, `imagen`) VALUES
(2, 1, 'Ciudadela', '2020-06-01 01:58:40', '1-73305.jpg'),
(3, 1, 'Elise', '2020-06-01 02:04:05', '1-60388.png'),
(4, 1, '', '2020-06-01 02:15:05', '1-26869.jpg'),
(7, 1, '', '2020-06-01 02:17:53', '1-10431.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `comentario` text NOT NULL,
  `id_usr` int(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `comentario`, `id_usr`, `fecha`) VALUES
(1, 'Ropa', 'Compra lo mejor en ropa.', 1, '2020-06-01'),
(2, 'Electronica', 'Compra tus componentes de electronica.', 1, '2020-06-01'),
(3, 'Videojuegos', '', 1, '2020-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `linea_pedidos`
--

CREATE TABLE `linea_pedidos` (
  `id` int(255) NOT NULL,
  `pedido_id` int(255) NOT NULL,
  `producto_id` int(255) NOT NULL,
  `unidades` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linea_pedidos`
--

INSERT INTO `linea_pedidos` (`id`, `pedido_id`, `producto_id`, `unidades`) VALUES
(1, 4, 6, 1),
(2, 5, 6, 1),
(3, 5, 9, 1),
(4, 6, 6, 2),
(5, 6, 9, 1),
(6, 6, 11, 1),
(7, 6, 13, 1),
(8, 7, 3, 1),
(9, 7, 9, 1),
(10, 8, 3, 1),
(11, 8, 9, 1),
(12, 8, 7, 1),
(13, 8, 8, 1),
(14, 9, 3, 4),
(15, 9, 7, 4),
(16, 10, 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(10) NOT NULL,
  `usuario_id` int(255) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `coste` float(200,2) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`id`, `usuario_id`, `provincia`, `localidad`, `direccion`, `coste`, `estado`, `fecha`, `hora`) VALUES
(4, 2, 'guatemala', 'mixco', '8av. 12-85', 150.00, 'ready', '2020-06-04', '20:42:24'),
(5, 2, 'Guatemala', 'Mixco', '8av. 12-85', 300.00, 'confirm', '2020-06-04', '21:26:37'),
(6, 2, 'Guatemala', 'Mixco', '8av. 12-85', 0.00, 'confirm', '2020-06-05', '00:38:28'),
(7, 2, 'Guatemala', 'Mixco', '8av- 12-85', 0.00, 'confirm', '2020-06-05', '00:40:55'),
(8, 2, 'Guatemala', 'Mixco', '8av. 12-85', 600.00, 'confirm', '2020-06-05', '00:44:26'),
(9, 2, 'Guatemala', 'Mixco', '8av', 1200.00, 'confirm', '2020-06-05', '03:03:11'),
(10, 2, 'casdc', 'csdac', 'casdc', 600.00, 'confirm', '2020-06-05', '03:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `categoria_id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` float(100,2) NOT NULL,
  `stock` int(255) NOT NULL,
  `oferta` varchar(2) DEFAULT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `categoria_id`, `nombre`, `descripcion`, `precio`, `stock`, `oferta`, `fecha`, `imagen`) VALUES
(3, 1, 'Vestido', 'Un vestido muy chulo y guay.', 150.00, 25, NULL, '2020-06-01', '1-52106.jpg'),
(5, 1, 'Playera', 'playera con cara', 100.00, 1000, NULL, '2020-06-01', '1-40614.jpg'),
(6, 2, 'Arduino VR3', 'Arduino Uno', 150.00, 50, NULL, '2020-06-01', '1-2417.png'),
(7, 1, 'Vestido 2', '', 150.00, 50, NULL, '2020-06-03', '1-7036.jpg'),
(8, 1, 'Vestido 3', '', 150.00, 50, NULL, '2020-06-03', '1-24848.jpg'),
(9, 1, 'Vesido 4', '', 150.00, 50, NULL, '2020-06-03', '1-11521.jpg'),
(10, 1, 'Vestido 5', '', 150.00, 50, NULL, '2020-06-03', '1-54562.jpg'),
(11, 1, 'Vestido 6', '', 150.00, 100, NULL, '2020-06-03', '1-57709.jpg'),
(12, 1, 'Vestido 7', '', 150.00, 75, NULL, '2020-06-03', '1-65770.jpg'),
(13, 1, 'KIT 1', 'Pantalon y Blusa', 200.00, 10, NULL, '2020-06-03', '1-28041.jpg'),
(14, 1, 'KIT 2', 'Pantalon y Blusa', 150.00, 20, NULL, '2020-06-03', '1-20638.jpg'),
(15, 1, 'KIT 3', 'Pantalon y Blusa', 150.00, 40, NULL, '2020-06-03', '1-26753.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `mensaje` text DEFAULT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `id_usuario`, `titulo`, `mensaje`, `fecha`, `imagen`) VALUES
(1, 1, 'Morena', 'Nuevas animaciones', '2020-06-01', '1-42214.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reserva`
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

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(2) NOT NULL,
  `name_rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_rol`, `name_rol`) VALUES
(1, 'Administrador'),
(2, 'Estandar'),
(3, 'Editor'),
(4, 'Moderador'),
(5, 'Anunciante'),
(6, 'Analista');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `rol` int(2) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `pass`, `rol`, `imagen`) VALUES
(1, 'axe', 'ax@gmail.com', '$2y$10$ddhGo6gcIHUEyBSHevK1M.59pu5EZTUpiUxsVlE1U6pep5nYZ1mBy', 1, ''),
(2, 'joss', 'joss@gmail.com', '$2y$10$ddhGo6gcIHUEyBSHevK1M.59pu5EZTUpiUxsVlE1U6pep5nYZ1mBy', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idusrcarou` (`id_usuario`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linea_pedidos`
--
ALTER TABLE `linea_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_linea_pedido` (`pedido_id`),
  ADD KEY `fk_linea_producto` (`producto_id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pedido_usuario` (`usuario_id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categoria` (`categoria_id`);

--
-- Indexes for table `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idusrpubli` (`id_usuario`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `fk_idusrreserv` (`id_usuario`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`correo`),
  ADD KEY `fk_rol` (`rol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `linea_pedidos`
--
ALTER TABLE `linea_pedidos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carousel`
--
ALTER TABLE `carousel`
  ADD CONSTRAINT `fk_idusrcarou` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `linea_pedidos`
--
ALTER TABLE `linea_pedidos`
  ADD CONSTRAINT `fk_linea_pedido` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`),
  ADD CONSTRAINT `fk_linea_producto` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Constraints for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_pedido_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

--
-- Constraints for table `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `fk_idusrpubli` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `fk_idusrreserv` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_rol` FOREIGN KEY (`rol`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
