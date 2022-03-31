-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2022 a las 22:03:01
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `galerim`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `ruta` text NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `titulo`, `ruta`, `fecha`) VALUES
(1, 'prueba', 'image_proxy.jpg', '2022-03-30 00:39:37'),
(2, 'ciudad', 'ciudad royulador.jpg', '2022-03-30 00:40:08'),
(3, 'micro', 'podcast-logo-diseno-simple_169533-99.jpg', '2022-03-30 00:40:19'),
(4, 'only', 'SOUND ONLY.jpg', '2022-03-30 00:40:37'),
(5, 'mundo', 'mundo.png', '2022-03-30 00:40:53'),
(6, 'dios', 'camisa.jpg', '2022-03-30 02:06:11'),
(7, 'prueba', 'cuaderno.jpg', '2022-03-30 02:12:14'),
(10, '', 'map.jpg', '2022-03-30 02:14:20'),
(11, 'prueba', 'camisa1.jpg', '2022-03-30 02:15:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `contraseña` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contraseña`) VALUES
(4, 'admin', '$2y$10$.eY.byLOOP6r0ocwE0MSn.Ra6lG.o8/V6OLKjq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_1`
--

CREATE TABLE `_1` (
  `id` int(11) NOT NULL,
  `nom_usu` varchar(20) NOT NULL,
  `coment` text DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_2`
--

CREATE TABLE `_2` (
  `id` int(11) NOT NULL,
  `nom_usu` varchar(20) NOT NULL,
  `coment` text DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_3`
--

CREATE TABLE `_3` (
  `id` int(11) NOT NULL,
  `nom_usu` varchar(20) NOT NULL,
  `coment` text DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_4`
--

CREATE TABLE `_4` (
  `id` int(11) NOT NULL,
  `nom_usu` varchar(20) NOT NULL,
  `coment` text DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_5`
--

CREATE TABLE `_5` (
  `id` int(11) NOT NULL,
  `nom_usu` varchar(20) NOT NULL,
  `coment` text DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_6`
--

CREATE TABLE `_6` (
  `id` int(11) NOT NULL,
  `nom_usu` varchar(20) NOT NULL,
  `coment` text DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_7`
--

CREATE TABLE `_7` (
  `id` int(11) NOT NULL,
  `nom_usu` varchar(20) NOT NULL,
  `coment` text DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_10`
--

CREATE TABLE `_10` (
  `id` int(11) NOT NULL,
  `nom_usu` varchar(20) NOT NULL,
  `coment` text DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_11`
--

CREATE TABLE `_11` (
  `id` int(11) NOT NULL,
  `nom_usu` varchar(20) NOT NULL,
  `coment` text DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `_1`
--
ALTER TABLE `_1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `_2`
--
ALTER TABLE `_2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `_3`
--
ALTER TABLE `_3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `_4`
--
ALTER TABLE `_4`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `_5`
--
ALTER TABLE `_5`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `_6`
--
ALTER TABLE `_6`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `_7`
--
ALTER TABLE `_7`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `_10`
--
ALTER TABLE `_10`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `_11`
--
ALTER TABLE `_11`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `_1`
--
ALTER TABLE `_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `_2`
--
ALTER TABLE `_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `_3`
--
ALTER TABLE `_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `_4`
--
ALTER TABLE `_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `_5`
--
ALTER TABLE `_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `_6`
--
ALTER TABLE `_6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `_7`
--
ALTER TABLE `_7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `_10`
--
ALTER TABLE `_10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `_11`
--
ALTER TABLE `_11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
