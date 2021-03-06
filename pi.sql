-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2021 a las 21:15:34
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.13

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
  `Nombre` varchar(255) NOT NULL,
  `nombre_visible` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID`, `Nombre`, `nombre_visible`) VALUES
(0, 'Agencias', 'Agencias'),
(1, 'Artistas', 'Artistas'),
(2, 'Cantantes', 'Cantantes'),
(3, 'Catering', 'Catering'),
(4, 'Circo', 'Circo'),
(5, 'Comedia', 'Comedia'),
(6, 'Danza', 'Danza'),
(7, 'Discomovil', 'Discomóvil'),
(8, 'Entretenimiento', 'Entretenimiento'),
(10, 'Flamenco', 'Flamenco'),
(12, 'Magia', 'Magia'),
(13, 'Musica clasica', 'Música clásica'),
(15, 'Para niños', 'Para niños'),
(16, 'Servicios bodas', 'Servicios para bodas'),
(17, 'Teatro', 'Teatro');

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
('DoctrineMigrations\\Version20210216080723', '2021-02-16 09:07:30', 1407),
('DoctrineMigrations\\Version20210217073953', '2021-02-17 08:59:33', 225),
('DoctrineMigrations\\Version20210217075242', '2021-02-17 08:53:20', 1651);

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
  `descripcion` varchar(255) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `subcategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`ID`, `Nombre`, `categoria`, `localidad`, `codigo_postal`, `descripcion`, `id_usuario`, `subcategoria`) VALUES
(1, 'test', 2, 'pingoland', '46910', 'A', 2, 7),
(2, 'David', 3, 'Valencia', '46001', '', 2, 9),
(3, 'Luis', 2, 'Valencia', '46009', '', 2, 2),
(5, 'Miguel', 2, 'Valencia', '46008', '', 2, 6);

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

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`ID`, `asunto`, `mensaje`, `fecha`, `IDEmisor`, `IDReceptor`) VALUES
(1, '1234', 'Hola esto es una prueba', '2021-02-23 00:00:00', 3, 3);

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
-- Estructura de tabla para la tabla `resena`
--

CREATE TABLE `resena` (
  `ID` int(11) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `ID_categoria` int(11) NOT NULL,
  `nombre_visible` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`ID`, `Nombre`, `ID_categoria`, `nombre_visible`) VALUES
(1, 'organizadorDeEventos', 0, 'Organizador de eventos'),
(2, 'representantesMusicales', 0, 'Representantes musicales'),
(3, 'actores', 1, 'Actores'),
(4, 'chefs', 1, 'Chefs'),
(7, 'cantantesDeBeatbox', 2, 'Cantantes de beatbox'),
(8, 'cantantesDeCopla', 2, 'Cantantes de copla'),
(9, 'cantantesDeJazz', 2, 'Cantantes de jazz'),
(10, 'cantantesDeRap', 2, 'Cantantes de rap'),
(11, 'cantantesDeRock', 2, 'Cantantes de rock'),
(12, 'alquilerDeCarpas', 3, 'Alquiler de carpas'),
(13, 'cortadorDeJamon', 3, 'Cortador de jamón'),
(14, 'foodTruck', 3, 'Food truck'),
(15, 'paellasGigantes', 3, 'Paellas gigantes'),
(16, 'tartasGigantes', 3, 'Tartas gigantes'),
(17, 'payasos', 4, 'Payasos'),
(18, 'mimos', 4, 'Mimos'),
(19, 'malabaristas', 4, 'Malabaristas'),
(20, 'ventrilocuos', 4, 'Ventrílocuos'),
(22, 'comicos', 5, 'Comicos'),
(23, 'grupoDeTeatro', 5, 'Grupos de teatro'),
(24, 'monologuistas', 5, 'Monologuistas'),
(25, 'imitadores', 5, 'Imitadores'),
(26, 'bailarinasDanzaDelVientre', 6, 'Bailarinas de danza del vientre'),
(27, 'bailarinesDeTango', 6, 'Bailarinas de tango'),
(29, 'compañiasDeDanza', 6, 'Compañías de danza'),
(30, 'danzaContemporanea', 6, 'Danza contemporánea'),
(31, 'discJockey', 7, 'Disc Jockeys'),
(32, 'discoMovil', 7, 'Disco Móvil'),
(34, 'castillosHinchables', 8, 'Castillos hinchables'),
(36, 'cineAlAireLibre', 8, 'Cine al aire libre'),
(37, 'gruposDeRumba', 10, 'Grupos de rumba'),
(38, 'gruposDeFlamenco', 10, 'Grupos de flamenco'),
(39, 'gruposDeSevillanas', 10, 'Grupos de sevillanas'),
(41, 'escapistas', 12, 'Escapistas'),
(42, 'hipnotizadores', 12, 'Hipnotizadores'),
(43, 'magos', 12, 'Magos'),
(44, 'mentalistas', 12, 'Mentalistas'),
(45, 'ilusionistas', 12, 'Ilusionistas'),
(46, 'clarinetistas', 13, 'Clarinetistas'),
(47, 'flautistas', 13, 'Flautistas'),
(48, 'pianistas', 13, 'Pianistas'),
(49, 'trompetistas', 13, 'Trompetistas'),
(50, 'animadores', 15, 'Animadores'),
(51, 'futbolinHumano', 15, 'Futbolín humano'),
(53, 'globoFlexia', 15, 'Globoflexia'),
(54, 'barman', 16, 'Barman'),
(55, 'pirotecnia', 16, 'Pirotecnia'),
(56, 'maestroDeCeremonias', 16, 'Maestro de ceremonias'),
(57, 'cochesDeBoda', 16, 'Coches de boda'),
(59, 'teatroDeMarionetas', 17, 'Teatro de marionetas'),
(62, 'sombrasChinescas', 17, 'Sombras chinescas');

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
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `apellidos`, `telefono`, `id_empresa`, `api_token`, `nombre`) VALUES
(1, 'peop@gmail.com', '[]', '$2y$10$0loUoyCLNuWJguxmzrjLROr0w5NRp8HUAwLw/rpZ0rKfEbDyISLwO', 'poep', '6546546545', NULL, NULL, 'peop'),
(2, 'a@a.a', '[]', '$2y$10$TjbuuCvMNmCTBeQ0zcbqyuGwDKdcU8rKNyt8x15iMHgcAxjlBgzUy', 'TL', '123456789', NULL, NULL, 'Borja'),
(3, 'pnicolas@gmail.com', '[]', '$2y$10$snXIUKYoTZYx1nvpStYxyevwyIBEJ4OhHb0.FeHl2zfDgJBW7vnkW', 'Nicolas', '963 21 75 82', NULL, NULL, 'Pau');

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
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_usuario` (`id_usuario`);

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
-- Indices de la tabla `resena`
--
ALTER TABLE `resena`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_vendedor` (`id_vendedor`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `resena`
--
ALTER TABLE `resena`
  ADD CONSTRAINT `resena_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `resena_ibfk_2` FOREIGN KEY (`id_vendedor`) REFERENCES `empresa` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
