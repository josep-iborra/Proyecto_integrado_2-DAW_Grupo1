-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2021 a las 20:12:22
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID`, `Nombre`) VALUES
(0, 'Agencias'),
(1, 'Artistas'),
(2, 'Cantantes'),
(3, 'Catering'),
(4, 'Circo'),
(5, 'Comedia'),
(6, 'Danza'),
(7, 'Discomovil'),
(8, 'Entretenimiento'),
(10, 'Flamenco'),
(12, 'Magia'),
(13, 'Musica clasica'),
(15, 'Para niños'),
(16, 'Servicios bodas'),
(17, 'Teatro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `localidad` varchar(255) NOT NULL,
  `codigo_postal` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `ID` int(100) NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `IDEmisor` int(100) NOT NULL,
  `IDReceptor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Precio` varchar(255) NOT NULL,
  `Multimedia` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`Multimedia`)),
  `Descripcion` varchar(255) DEFAULT NULL,
  `categoria` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`categoria`)),
  `Autor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `ID_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`ID`, `Nombre`, `ID_categoria`) VALUES
(1, 'Organizadores de eventos', 0),
(2, 'Representantes musicales', 0),
(3, 'Actores', 1),
(4, 'Chefs', 1),
(5, 'Deportistas', 1),
(6, 'Influencers', 1),
(7, 'Cantantes de beatbox', 2),
(8, 'Cantantes de copla', 2),
(9, 'Cantantes de jazz', 2),
(10, 'Cantantes de rap', 2),
(11, 'Cantantes de rock', 2),
(12, 'Alquiler de carpas', 3),
(13, 'Cortador de jamon', 3),
(14, 'Food truck', 3),
(15, 'Paellas gigantes', 3),
(16, 'Tartas gigantes', 3),
(17, 'Payasos', 4),
(18, 'Mimos', 4),
(19, 'malabaristas', 4),
(20, 'Ventrilocuos', 4),
(21, 'Zancudos', 4),
(22, 'Comicos', 5),
(23, 'Grupos de teatro', 5),
(24, 'Monologistas', 5),
(25, 'Imitadores', 5),
(26, 'Bailarinas Danza del vientre', 6),
(27, 'Bailarines de Tango', 6),
(28, 'Bailarines de Flamenco', 6),
(29, 'Compañias de danza', 6),
(30, 'Danza contemporania', 6),
(31, 'Disc Jockey', 7),
(32, 'Disco movil', 7),
(33, 'Caricaturas', 8),
(34, 'Castillos hinchables', 8),
(35, 'Maquina de espuma', 8),
(36, 'Cine al aire libre', 8),
(37, 'Baile Flamenco', 10),
(38, 'Grupos de rumba', 10),
(39, 'Grupos de flamenco', 10),
(40, 'Grupos de Sevillanas', 10),
(41, 'Escapistas', 12),
(42, 'Hipnotozadores', 12),
(43, 'Magos', 12),
(44, 'Mentalista', 12),
(45, 'Ilusionista', 12),
(46, 'Clarinetistas', 13),
(47, 'Flautistas', 13),
(48, 'Pianistas', 13),
(49, 'Trompetistas', 13),
(50, 'Animadores', 15),
(51, 'Futbolin humano', 15),
(52, 'Pinta caritas', 15),
(53, 'Globoflexia', 15),
(54, 'Barman', 16),
(55, 'Pirotecnias', 16),
(56, 'Maestro de ceremonias', 16),
(57, 'Coches de boda', 16),
(58, 'Teatro de marionetas', 17),
(59, 'Sombras chinescas', 17),
(60, 'Grupos de treato', 17),
(61, 'Actores de teatro', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `id_empresa` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
