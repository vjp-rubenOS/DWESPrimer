-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2024 a las 13:58:33
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
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociados`
--

CREATE TABLE `asociados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asociados`
--

INSERT INTO `asociados` (`id`, `nombre`, `logo`, `descripcion`) VALUES
(3, 'Compañia Netsle', 'nestleLogo.jpg', 'Compañia encargada de los dulces'),
(4, 'Compañia Gato', 'gato.jpg', 'Compañia que se encarga de los gatos'),
(5, 'Compañia Puma', 'pumaLogo.jpg', 'Compañia encargada de ropa'),
(6, 'Compañia Purina', 'logoPurina.jpg', 'Se encarga comida de animales'),
(7, 'Compañia Nike', 'nikeLogo.jpg', 'Se encarga de ropa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `numImagenes` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `numImagenes`) VALUES
(1, 'categoria 1', 8),
(2, 'categoria 2', 9),
(3, 'categoria 3', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `numVisualizaciones` int(11) DEFAULT 0,
  `numLikes` int(11) DEFAULT 0,
  `numDownloads` int(11) DEFAULT 0,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `nombre`, `descripcion`, `numVisualizaciones`, `numLikes`, `numDownloads`, `categoria`) VALUES
(30, 'paisajeA_1.jpg', 'paisaje A', 0, 0, 0, 1),
(31, 'paisajeB_1.jpg', 'paisaje A', 0, 0, 0, 2),
(32, 'paisajeC.jpg', 'paisaje C', 0, 0, 0, 3),
(33, 'paisajeD_1.jpg', 'paisaje D', 0, 0, 0, 1),
(34, 'paisajeE.jpg', 'paisaje E', 0, 0, 0, 2),
(35, 'paisajeF_1.jpg', 'paisaje F', 0, 0, 0, 3),
(36, 'paisajeG_1.jpg', 'paisaje G', 0, 0, 0, 3),
(37, 'paisajeH.jpg', 'paisaje H', 0, 0, 0, 2),
(38, 'paisajeI_1.jpg', 'paisaje I', 0, 0, 0, 1),
(39, 'paisajeJ_1.jpg', 'paisaje J', 0, 0, 0, 2),
(40, 'paisajeK_1.jpg', 'paisaje K', 0, 0, 0, 2),
(41, 'paisajeL.jpg', 'paisaje L', 0, 0, 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `asunto` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `texto` text DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id`, `nombre`, `apellidos`, `asunto`, `email`, `texto`, `fecha`) VALUES
(7, 'Sin apellido', '', 'ruben.o.s@hotmail.com', 'prueba sin apellido y mensaje', '', '2024-11-24 00:00:00'),
(8, 'nombre', 'apellido', 'ruben.o.s@hotmail.com', 'prueba', 'esto es una prueba', '2024-11-24 00:00:00'),
(9, 'Pepe', 'fuentes', 'prueba25', 'ruben.o.s@hotmail.com', 'prueba25', '2024-11-24 00:00:00'),
(11, 'Pepe', '', '', '', '', '2024-11-24 00:00:00'),
(12, 'Pepe', 'pepito', 'ruben.o.s@hotmail.com', 'asd', 'esto es un mensaje', '2024-11-24 00:00:00'),
(13, 'Pepe', 'pepito', 'ruben.o.s@hotmail.com', 'asd', NULL, '2024-11-24 00:00:00'),
(14, 'Pepe', 'pepito', 'ruben.o.s@hotmail.com', 'asd', NULL, '2024-11-24 00:00:00'),
(16, 'faltan cosas', '', '', '', '', '2024-11-24 00:00:00'),
(17, 'Rodolfo', 'fuentes', 'ruben.o.s@hotmail.com', 'ahora si funciona', 'parece que ahora si funciona', '2024-11-24 00:00:00'),
(18, 'a', 'b', 'ruben.o.s@hotmail.com', 'c', 'd', '2024-11-24 00:00:00'),
(19, 'a', 'b', 'ruben.o.s@hotmail.com', 'c', 'dd', '2024-11-24 00:00:00'),
(20, 'A', 'B', 'ruben.o.s@hotmail.com', 'C', 'D', '2024-11-24 00:00:00'),
(21, 'gfd', 'dfgfd', 'ruben.o.s@hotmail.com', 'dsfsd', 'fsdsdf', '2024-11-24 00:00:00'),
(22, 'Pepe', 'ala', 'rortegas04@informatica.iesvalledeljerteplasencia.es', 'ejemplo', 'Esto es un ejemplo para ver si funciona', '2024-11-25 00:00:00'),
(23, 'alga', '', 'ruben.o.s@hotmail.com', 'otro ejemplo sin apellido', '', '2024-11-25 00:00:00'),
(24, 'probando campos que se guarden', 'fuentes', 'ruben.o.s@hotmail.com', 'ds', 'sdf', '2024-11-25 00:00:00'),
(25, 'segunda prueba campos no vaciados ', 'apellido', 'ruben.o.s@hotmail.com', 'subject', '', '2024-11-25 00:00:00'),
(26, 'Pepe', 'fuentes', 'ruben.o.s@hotmail.com', 'sdf', 'sdf', '2024-11-25 00:00:00'),
(27, 'pepe2', 'pepe2', 'ruben.o.s@hotmail.com', 'asfd', 'asdf', '2024-11-25 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asociados`
--
ALTER TABLE `asociados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cat` (`categoria`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asociados`
--
ALTER TABLE `asociados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `fk_cat` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
