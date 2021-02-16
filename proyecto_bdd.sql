-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2021 a las 12:04:40
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
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210216074257', '2021-02-16 09:06:16', 520),
('DoctrineMigrations\\Version20210216080723', '2021-02-16 09:07:30', 1407);

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
(1, 'organizacion_de_eventos', 0),
(2, 'representantes_musicales', 0),
(3, 'Actores', 1),
(4, 'Chefs', 1),
(7, 'Cantantes_de_beatbox', 2),
(8, 'cantantes_de_copla', 2),
(9, 'cantantes_de_jazz', 2),
(10, 'cantantes_de_rap', 2),
(11, 'cantantes_de_rock', 2),
(12, 'alquiler_de_carpas', 3),
(13, 'cortador_de_jamon', 3),
(14, 'food_truck', 3),
(15, 'paellas_gigantes', 3),
(16, 'tartas_gigantes', 3),
(17, 'payasos', 4),
(18, 'mimos', 4),
(19, 'malabaristas', 4),
(20, 'ventrilocuos', 4),
(22, 'comicos', 5),
(23, 'grupo_de_teatro', 5),
(24, 'monologistas', 5),
(25, 'imitadores', 5),
(26, 'bailarinas_de_la_danza_del_vientre', 6),
(27, 'bailarines_de_tango', 6),
(29, 'compania_de_danza', 6),
(30, 'danza_contemporania', 6),
(31, 'disc_jockey', 7),
(32, 'disco_movil', 7),
(34, 'castillos_hinchables', 8),
(35, 'maquina_de_espuma', 8),
(36, 'cine_al_aire_libre', 8),
(37, 'grupos_de_rumba', 10),
(38, 'grupos_de_flamenco', 10),
(39, 'grupos_de_sevillanas', 10),
(41, 'hipnotizadores', 12),
(42, 'magos', 12),
(43, 'mentalistas', 12),
(44, 'ilusionistas', 12),
(45, 'escapistas', 12),
(46, 'clarinetistas', 13),
(47, 'flautistas', 13),
(48, 'pianistas', 13),
(49, 'trompetistas', 13),
(50, 'animadores', 15),
(51, 'futbolin_humano', 15),
(52, 'pinta_caritas', 15),
(53, 'globoflexia', 15),
(54, 'barman', 16),
(55, 'pirotecnia', 16),
(56, 'maestro_de_ceremonias', 16),
(57, 'coches_de_boda', 16),
(59, 'sombras_chinescas', 17),
(62, 'teatro_de_marionetas', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_empresa` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Email`, `password`, `apellidos`, `telefono`, `id_empresa`) VALUES
(1, 'pepo', 'Pepo@gmail.com', '1234', 'pacp', '565432145', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

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
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
