-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2023 a las 05:55:06
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `codigo` int(11) NOT NULL,
  `descripcion` text NOT NULL COMMENT 'Descripcion articulo',
  `precio` float(10,2) NOT NULL COMMENT 'Precio articulo',
  `categoria` text NOT NULL COMMENT 'Categoria articulo',
  `ruta_img` varchar(255) DEFAULT NULL COMMENT 'Ruta de la imagen'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`codigo`, `descripcion`, `precio`, `categoria`, `ruta_img`) VALUES
(1, 'Pienso para perros raza pequeña', 12.00, 'Perro', './images/catalogo/articulo1.jpg'),
(2, 'Pienso para perros raza grande', 18.00, 'Perro', './images/catalogo/articulo2.jpg'),
(3, 'Stick para perro. Brekkies', 4.00, 'Perro', './images/catalogo/articulo3.jpg'),
(4, 'Stick para perro. Vitakraft', 4.00, 'Perro', './images/catalogo/articulo4.jpg'),
(5, 'Pienso para Gato. Advance.', 18.00, 'Gato', './images/catalogo/articulo5.jpg'),
(6, 'Pienso para Gato Kitten. Advance.', 20.00, 'Gato', './images/catalogo/articulo6.jpg'),
(7, 'Stick para gato Brekkies', 4.00, 'Gato', './images/catalogo/articulo7.jpg'),
(8, 'Stick para gato Whiskas', 4.00, 'Gato', './images/catalogo/articulo8.jpg'),
(9, 'Comida Pajaro Cunipic', 5.00, 'Pajaro', './images/catalogo/articulo9.jpg'),
(10, 'Comida Pajaro Vinci', 5.70, 'Pajaro', './images/catalogo/articulo10.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mensaje` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `email`, `mensaje`) VALUES
(2, 'Yunset', 'yunset_petitonset@hotmail.com', 'Esto es un mensaje de prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(10) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL COMMENT 'Nombre del usuario',
  `apellido` varchar(30) NOT NULL COMMENT 'Apellido del usuario',
  `email` varchar(30) NOT NULL COMMENT 'Correo del usuario',
  `password` varchar(10) NOT NULL COMMENT 'Contraseña del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `password`) VALUES
(1, 'Maria', 'Martinez', 'maria@hotmail.com', '12345'),
(2, 'Ana', 'Rodriguez', 'ana@hotmail.com', '12345'),
(3, 'Pedro', 'Pascal', 'pedro@hotmail.com', 'qwerty'),
(4, 'Juan', 'Jorge', 'juan@gmail.com', 'qwerty'),
(19, 'pilar', 'pilar', 'pilar@pilar.com', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinario`
--

CREATE TABLE `veterinario` (
  `id` int(10) NOT NULL,
  `nombre_mascota` varchar(255) NOT NULL,
  `nombre_propietario` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time(4) NOT NULL,
  `sintomas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `veterinario`
--

INSERT INTO `veterinario` (`id`, `nombre_mascota`, `nombre_propietario`, `telefono`, `fecha`, `hora`, `sintomas`) VALUES
(12, 'Nubulet', 'Isa', '987654321', '2020-01-01', '22:20:00.0000', 'Mensaje de prueba'),
(13, 'Yun', 'Masi', '987654321', '2020-01-01', '21:21:00.0000', 'adfadsgfa'),
(14, 'Tracy', 'Isa', '123456789', '2019-01-01', '21:00:00.0000', 'Mi pastor esta enfermo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `veterinario`
--
ALTER TABLE `veterinario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `veterinario`
--
ALTER TABLE `veterinario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
