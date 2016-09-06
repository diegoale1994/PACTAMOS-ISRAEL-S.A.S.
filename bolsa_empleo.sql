-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2016 a las 22:35:40
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bolsa_empleo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `documento` varchar(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `sector` varchar(50) NOT NULL,
  `razon` text NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`documento`, `nombre`, `descripcion`, `sector`, `razon`, `website`) VALUES
('111111111-9', 'Solutionsforyou', 'asdasdasdasdasdasdasdasdasdasdasdqsdqdwdqwdqsdqwdqwdqwdqwdqwdqwdqwdqwdqwd', 'dasdasdasda', 'qwdqwdqwdqwdqwdqwdqwdqwd', 'adasdasdasdasdasdad.com'),
('121323123-9', 'Universidad De Cundinamarca', 'asdasdasdasdasdasdasdqwdqdqweqweqweqweqwedqsdasdasdqsdqeqweqwqd', 'Educacion', 'sadasdasdasdasdasdasdasdasdasdasdasd', 'http://www.unicundi.edu.co/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios`
--

CREATE TABLE `estudios` (
  `id_estudio` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `documento` varchar(11) NOT NULL,
  `centro_educativo` varchar(100) NOT NULL,
  `nivel_estudio` varchar(50) NOT NULL,
  `estado` varchar(1) NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exp_laboral`
--

CREATE TABLE `exp_laboral` (
  `id_exp` int(11) NOT NULL,
  `documento` varchar(11) NOT NULL,
  `nombre_empresa` varchar(50) NOT NULL,
  `sector_empresa` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `logros` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `exp_laboral`
--

INSERT INTO `exp_laboral` (`id_exp`, `documento`, `nombre_empresa`, `sector_empresa`, `cargo`, `fecha_ini`, `fecha_fin`, `logros`) VALUES
(7, '1048850076', 'IDeartech', 'C', 'Secretario', '2016-09-01', '2016-09-06', 'Perfecto.'),
(8, '1048850076', 'Pactamos', 'S', 'Secretario', '1111-11-11', '1111-11-11', 'asdasdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `id_idioma` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE `oferta` (
  `id_oferta` int(11) NOT NULL,
  `documento` varchar(11) NOT NULL,
  `area` varchar(20) NOT NULL,
  `vacante` varchar(100) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `descrip_prof` text NOT NULL,
  `estado` varchar(1) NOT NULL,
  `tiempo` varchar(10) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `ciudad` varchar(75) NOT NULL,
  `fecha_publicacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`id_oferta`, `documento`, `area`, `vacante`, `horario`, `descripcion`, `descrip_prof`, `estado`, `tiempo`, `departamento`, `ciudad`, `fecha_publicacion`) VALUES
(1, '121323123-9', 'Sistemas', 'Programador java', 'lunes a viernes 7am - 5pm', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 'Manejo de java,c++,php,arquitectura', 'A', 'I', 'Cundinamarca', 'Fusagasuga', '2016-08-02'),
(2, '111111111-9', 'marketing', 'Programador phyton', 'lunea a viernes 8 a 8', 'asdasdasdasdsadasdasasdasdasdasdsadasdasasdasdasdasdsadasdasasdasdasdasdsadasdasasdasdasdasdsadasdasasdasdasdasdsadasdasasdasdasdasdsadasdasasdasdasdasdsadasdasasdasdasdasdsadasdasasdasdasdasdsadasdasasdasdasdasdsadasdasasdasdasdasdsadasdas', 'asdasdasdasdsadasdasasdasdasdasdsadasdasasdasdasdasdsadasdasasdasdasdasdsadasdasasdasdasdasdsadasdasasdasdasdasdsadasdasasdasdasdasdsadasdasasdasdasdasdsadasdas', 'A', 'I', 'Cundinamarca', 'Fusagasuga', '2016-08-22'),
(3, '121323123-9', 'sistemas', 'Programador en .net', 'sadasddfafasdfasdfadfadf', 'sadasddfafasdfasdfadfadfsadasddfafasdfasdfadfadfsadasddfafasdfasdfadfadfsadasddfafasdfasdfadfadfsadasddfafasdfasdfadfadfsadasddfafasdfasdfadfadfsadasddfafasdfasdfadfadfsadasddfafasdfasdfadfadfv', 'sadasddfafasdfasdfadfadfsadasddfafasdfasdfadfadfsadasddfafasdfasdfadfadfsadasddfafasdfasdfadfadfsadasddfafasdfasdfadfadfsadasddfafasdfasdfadfadfsadasddfafasdfasdfadfadf', 'A', 'DSFSDFSDF', 'Cundinamarca', 'Bogota', '2016-08-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `documento` varchar(11) NOT NULL,
  `tipo_documento` varchar(2) NOT NULL,
  `departamento` varchar(20) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `direccion` varchar(75) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `verificado` varchar(1) NOT NULL,
  `rol` varchar(1) NOT NULL,
  `activation_code` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`documento`, `tipo_documento`, `departamento`, `ciudad`, `direccion`, `foto`, `password`, `verificado`, `rol`, `activation_code`) VALUES
('1048850076', 'CC', 'Boyaca', 'Garagoa', 'Calle 7 No 9-29', 'http//fotomania.com', 'b674a43d6710dc308bfd53404d88d0b5f46edf15', 'Y', 'P', NULL),
('1069753420', 'CC', '', '', '', '', 'f72db6d4c1771e2cf0ef0e83fc4b85402363b08f', 'N', 'P', 'cdd01d01d1d3a31fd127c758aac7164e'),
('111111111-9', 'NI', 'Cundinamarca', 'Bogota', 'calle 179 -8-32', 'http//asdasdad.com', 'b674a43d6710dc308bfd53404d88d0b5f46edf15', 'Y', 'E', NULL),
('121323123-9', 'NI', 'Cundinamarca', 'Fusagasuga', 'Diagonal 24c No 64a - 33', 'ttp//asdasdad.co', '4fc36204d034036de87815eb8ff296791f50d241', 'Y', 'E', NULL),
('5555555555', 'CC', '', '', '', '', 'b674a43d6710dc308bfd53404d88d0b5f46edf15', 'Y', 'P', '947bb5543a06e7d41e228af0f8cf718f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_correo`
--

CREATE TABLE `persona_correo` (
  `documento` varchar(11) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona_correo`
--

INSERT INTO `persona_correo` (`documento`, `correo`) VALUES
('1048850076', 'diego.fc.1@hotmail.com'),
('1069753420', 'nietoandres03@gmail.com'),
('5555555555', 'juanhernandez@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_natural`
--

CREATE TABLE `persona_natural` (
  `documento` varchar(11) NOT NULL,
  `nombre1` varchar(25) NOT NULL,
  `nombre2` varchar(25) NOT NULL,
  `apellido1` varchar(25) NOT NULL,
  `apellido2` varchar(25) NOT NULL,
  `estado_civil` varchar(1) NOT NULL,
  `licencia_conduccion` varchar(2) NOT NULL,
  `vehiculo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona_natural`
--

INSERT INTO `persona_natural` (`documento`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `estado_civil`, `licencia_conduccion`, `vehiculo`) VALUES
('1048850076', 'diego', 'alejandro', 'franco', 'cuesta', 'S', 'B1', 'Y'),
('1069753420', 'Andres', '', 'Nieto', '', '', '', ''),
('5555555555', 'juan', '', 'hernandez', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_natural_idioma`
--

CREATE TABLE `persona_natural_idioma` (
  `id_idioma` int(11) NOT NULL,
  `documento` int(11) NOT NULL,
  `nivel` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_natural_oferta`
--

CREATE TABLE `persona_natural_oferta` (
  `documento` varchar(11) NOT NULL,
  `id_oferta` int(11) NOT NULL,
  `fecha_aplicaciom` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_telefono`
--

CREATE TABLE `persona_telefono` (
  `documento` varchar(11) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona_telefono`
--

INSERT INTO `persona_telefono` (`documento`, `telefono`) VALUES
('1048850076', '3013113291'),
('1048850076', '3204485630');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `estudios`
--
ALTER TABLE `estudios`
  ADD PRIMARY KEY (`id_estudio`);

--
-- Indices de la tabla `exp_laboral`
--
ALTER TABLE `exp_laboral`
  ADD PRIMARY KEY (`id_exp`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id_idioma`);

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id_oferta`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`documento`),
  ADD UNIQUE KEY `activation_code` (`activation_code`);

--
-- Indices de la tabla `persona_correo`
--
ALTER TABLE `persona_correo`
  ADD PRIMARY KEY (`documento`,`correo`);

--
-- Indices de la tabla `persona_natural`
--
ALTER TABLE `persona_natural`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `persona_natural_idioma`
--
ALTER TABLE `persona_natural_idioma`
  ADD PRIMARY KEY (`id_idioma`,`documento`);

--
-- Indices de la tabla `persona_natural_oferta`
--
ALTER TABLE `persona_natural_oferta`
  ADD PRIMARY KEY (`documento`,`id_oferta`),
  ADD KEY `id_oferta` (`id_oferta`);

--
-- Indices de la tabla `persona_telefono`
--
ALTER TABLE `persona_telefono`
  ADD PRIMARY KEY (`documento`,`telefono`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudios`
--
ALTER TABLE `estudios`
  MODIFY `id_estudio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `exp_laboral`
--
ALTER TABLE `exp_laboral`
  MODIFY `id_exp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id_idioma` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id_oferta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `persona` (`documento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona_correo`
--
ALTER TABLE `persona_correo`
  ADD CONSTRAINT `persona_correo_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `persona` (`documento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona_natural`
--
ALTER TABLE `persona_natural`
  ADD CONSTRAINT `persona_natural_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `persona` (`documento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona_natural_oferta`
--
ALTER TABLE `persona_natural_oferta`
  ADD CONSTRAINT `persona_natural_oferta_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `persona_natural` (`documento`),
  ADD CONSTRAINT `persona_natural_oferta_ibfk_2` FOREIGN KEY (`id_oferta`) REFERENCES `oferta` (`id_oferta`);

--
-- Filtros para la tabla `persona_telefono`
--
ALTER TABLE `persona_telefono`
  ADD CONSTRAINT `persona_telefono_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `persona` (`documento`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
