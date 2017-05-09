-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2017 a las 07:26:42
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
-- Estructura de tabla para la tabla `account`
--

CREATE TABLE `account` (
  `id` int(10) NOT NULL,
  `documento` varchar(11) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `fecha_payment` date DEFAULT NULL,
  `value` int(200) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `name_file` varchar(200) DEFAULT NULL,
  `state` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `account`
--

INSERT INTO `account` (`id`, `documento`, `description`, `fecha_inicio`, `fecha_fin`, `fecha_payment`, `value`, `file`, `name_file`, `state`) VALUES
(1, '830502892', 'sfsdf', '2017-04-01', '2017-04-30', '2017-04-14', 0, './Documents/Account/123/', 'Agenda.pdf', 'Pendiente'),
(2, '123', 'sfsdf', '2017-04-01', '2017-04-30', '2017-04-14', 1000000, './Documents/Account/123/', 'Agenda.pdf', 'Pendiente'),
(3, '12345678', 'Factura mes de Abril', '2017-04-01', '2017-04-30', '2017-05-01', 1000000, './Documents/Account/12345678/Agenda.pdf', 'Agenda.pdf', 'Pendiente'),
(4, '111111111-9', 'Factura mes de Abril', '2017-04-01', '2017-04-30', '2017-04-30', 500000, './Documents/Account/111111111-9/Agenda.pdf', 'Agenda.pdf', 'Pendiente'),
(5, '830502892', 'Factura mes de Abril', '2017-04-01', '2017-04-30', '2017-04-29', 1000000, './Documents/Account/830502892/AAAP16_V4.pdf', 'AAAP16_V4.pdf', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(5) NOT NULL,
  `departamento` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `departamento`) VALUES
(5, 'ANTIOQUIA\r'),
(8, 'ATLANTICO\r'),
(11, 'BOGOTA\r'),
(13, 'BOLIVAR\r'),
(15, 'BOYACA\r'),
(17, 'CALDAS\r'),
(18, 'CAQUETA\r'),
(19, 'CAUCA\r'),
(20, 'CESAR\r'),
(23, 'CORDOBA\r'),
(25, 'CUNDINAMARCA\r'),
(27, 'CHOCO\r'),
(41, 'HUILA\r'),
(44, 'LA GUAJIRA\r'),
(47, 'MAGDALENA\r'),
(50, 'META\r'),
(52, 'NARIÑO\r'),
(54, 'N. DE SANTANDER\r'),
(63, 'QUINDIO\r'),
(66, 'RISARALDA\r'),
(68, 'SANTANDER\r'),
(70, 'SUCRE\r'),
(73, 'TOLIMA\r'),
(76, 'VALLE DEL CAUCA\r'),
(81, 'ARAUCA\r'),
(85, 'CASANARE\r'),
(86, 'PUTUMAYO\r'),
(88, 'SAN ANDRES\r'),
(91, 'AMAZONAS\r'),
(94, 'GUAINIA\r'),
(95, 'GUAVIARE\r'),
(97, 'VAUPES\r'),
(99, 'VICHADA\r');

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
('121323123-9', 'Universidad De Cundinamarca', 'La Universidad de Cundinamarca, -UdeC- es una universidad p&uacute;blica, estatal y departamental Colombiana, adscrita al Sistema Universitario Estatal y con su sede principal en Fusagasug&aacute;. Fue creada mediante la Ordenanza 045 de diciembre 19, con el nombre de Instituto Universitario de Cundinamarca, y a 2015 cuenta con sedes distribuidas en ocho municipios de Cundinamarca. Es una de las principales instituciones educativas de educaci&oacute;n superior en el departamento cundinamarqu&eacute;s.', 'Educacion', 'UdeC', 'http://www.unicundi.edu.co/'),
('12345678', 'Increditos', 'Un cr&eacute;dito o contrato de cr&eacute;dito es una operaci&oacute;n financiera en la que una persona (el acreedor) realiza un pr&eacute;stamo por una cantidad determinada de dinero a otra persona (el deudor) y en la que este &uacute;ltimo, el deudor, se compromete a devolver la cantidad solicitada (adem&aacute;s del pago de los intereses devengados, seguros y costos asociados si los hubiera) en el tiempo o plazo definido de acuerdo a las condiciones establecidas para dicho pr&eacute;stamo.', 'Comercial', 'Increditos Ltda', 'www.increditos.com'),
('666-6', 'HANGAR18', '', '', '', ''),
('830502892', 'Sun Computer', 'Empresa distribuidora de Tecnolog&iacute;a en cundinamarca y la Regi&oacute;n', 'Comercial', 'Sun Network System Ltda', 'www.suncomputer.com'),
('900454659-0', 'Fulanito SAS', 'Empresa de Prueba', 'AcadÃ©mico', 'Fulanito y Asociados SAS', 'fulanitos@fulanitos.com');

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

--
-- Volcado de datos para la tabla `estudios`
--

INSERT INTO `estudios` (`id_estudio`, `title`, `departamento`, `municipio`, `documento`, `centro_educativo`, `nivel_estudio`, `estado`, `fecha_ini`, `fecha_fin`) VALUES
(4, 'Ingeniero De Sistemas', 'Cundinamarca', 'Fusagasuga', '1048850076', 'Universidad De Cundinamarca', 'Profesional', '', '2012-02-01', '2016-11-30'),
(5, 'Desarrollador De Software', 'Cundinamarca', 'Fusagasuga', '1048850076', 'SENA', 'TÃ©cnico', '', '2014-02-01', '2015-11-20'),
(6, 'Ingeniero De Sistemas', 'Cundinamarca', 'Fusagasuga', '82393121', 'SENA', 'Profesional', '', '2016-10-13', '2011-02-10'),
(7, 'Ingeniero De Sistemas', 'Cundinamarca', 'Fusagasuga', '1022348236', 'Universidad De Cundinamarca', 'Profesional', '', '2010-02-01', '2015-11-28');

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
(8, '1069753420', 'IDeartech', 'Comercial', 'Desarrollador Web', '2016-02-01', '2017-04-30', 'Desarrollador Web-Movil CEO y WebMaster'),
(9, '1069753420', 'Universidad De Cundinamarca', 'Administrativo', 'Web Master', '2016-08-14', '2017-06-30', 'web Master, manejo de Archivo.'),
(10, '1022348236', 'Pactamos', 'Comercial', 'Ingeniero De Sistemas', '2017-02-01', '2017-07-31', 'Ingeniero de sistemas y afines'),
(11, '<br /><b>No', 'Colegio PromociÃ³n Social', 'Administrativo', 'Ingeniero De Sistemas', '2010-02-01', '2017-11-28', 'Manejo de Redes y bases de datos.');

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
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_municipio` int(5) NOT NULL,
  `municipio` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipio`, `municipio`) VALUES
(1, 'MEDELLIN\r'),
(2, 'ABEJORRAL\r'),
(4, 'ABRIAQUI\r'),
(21, 'ALEJANDRIA\r'),
(30, 'AMAGA\r'),
(31, 'AMALFI\r'),
(34, 'ANDES\r'),
(36, 'ANGELOPOLIS\r'),
(38, 'ANGOSTURA\r'),
(40, 'ANORI\r'),
(42, 'SANTAFE DE ANTIOQUIA\r'),
(44, 'ANZA\r'),
(45, 'APARTADO\r'),
(51, 'ARBOLETES\r'),
(55, 'ARGELIA\r'),
(59, 'ARMENIA\r'),
(79, 'BARBOSA\r'),
(86, 'BELMIRA\r'),
(88, 'BELLO\r'),
(91, 'BETANIA\r'),
(93, 'BETULIA\r'),
(101, 'CIUDAD BOLIVAR\r'),
(107, 'BRICEÑO\r'),
(113, 'BURITICA\r'),
(120, 'CACERES\r'),
(125, 'CAICEDO\r'),
(129, 'CALDAS\r'),
(134, 'CAMPAMENTO\r'),
(138, 'CAÑASGORDAS\r'),
(142, 'CARACOLI\r'),
(145, 'CARAMANTA\r'),
(147, 'CAREPA\r'),
(148, 'EL CARMEN DE VIBORAL\r'),
(150, 'CAROLINA\r'),
(154, 'CAUCASIA\r'),
(172, 'CHIGORODO\r'),
(190, 'CISNEROS\r'),
(197, 'COCORNA\r'),
(206, 'CONCEPCION\r'),
(209, 'CONCORDIA\r'),
(212, 'COPACABANA\r'),
(234, 'DABEIBA\r'),
(237, 'DON MATIAS\r'),
(240, 'EBEJICO\r'),
(250, 'EL BAGRE\r'),
(264, 'ENTRERRIOS\r'),
(266, 'ENVIGADO\r'),
(282, 'FREDONIA\r'),
(284, 'FRONTINO\r'),
(306, 'GIRALDO\r'),
(308, 'GIRARDOTA\r'),
(310, 'GOMEZ PLATA\r'),
(313, 'GRANADA\r'),
(315, 'GUADALUPE\r'),
(318, 'GUARNE\r'),
(321, 'GUATAPE\r'),
(347, 'HELICONIA\r'),
(353, 'HISPANIA\r'),
(360, 'ITAGUI\r'),
(361, 'ITUANGO\r'),
(364, 'JARDIN\r'),
(368, 'JERICO\r'),
(376, 'LA CEJA\r'),
(380, 'LA ESTRELLA\r'),
(390, 'LA PINTADA\r'),
(400, 'LA UNION\r'),
(411, 'LIBORINA\r'),
(425, 'MACEO\r'),
(440, 'MARINILLA\r'),
(467, 'MONTEBELLO\r'),
(475, 'MURINDO\r'),
(480, 'MUTATA\r'),
(483, 'NARIÑO\r'),
(490, 'NECOCLI\r'),
(495, 'NECHI\r'),
(501, 'OLAYA\r'),
(541, 'PEÐOL\r'),
(543, 'PEQUE\r'),
(576, 'PUEBLORRICO\r'),
(579, 'PUERTO BERRIO\r'),
(585, 'PUERTO NARE\r'),
(591, 'PUERTO TRIUNFO\r'),
(604, 'REMEDIOS\r'),
(607, 'RETIRO\r'),
(615, 'RIONEGRO\r'),
(628, 'SABANALARGA\r'),
(631, 'SABANETA\r'),
(642, 'SALGAR\r'),
(647, 'SAN ANDRES DE CUERQUIA\r'),
(649, 'SAN CARLOS\r'),
(652, 'SAN FRANCISCO\r'),
(656, 'SAN JERONIMO\r'),
(658, 'SAN JOSE DE LA MONTAÑA\r'),
(659, 'SAN JUAN DE URABA\r'),
(660, 'SAN LUIS\r'),
(664, 'SAN PEDRO\r'),
(665, 'SAN PEDRO DE URABA\r'),
(667, 'SAN RAFAEL\r'),
(670, 'SAN ROQUE\r'),
(674, 'SAN VICENTE\r'),
(679, 'SANTA BARBARA\r'),
(686, 'SANTA ROSA DE OSOS\r'),
(690, 'SANTO DOMINGO\r'),
(697, 'EL SANTUARIO\r'),
(736, 'SEGOVIA\r'),
(756, 'SONSON\r'),
(761, 'SOPETRAN\r'),
(789, 'TAMESIS\r'),
(790, 'TARAZA\r'),
(792, 'TARSO\r'),
(809, 'TITIRIBI\r'),
(819, 'TOLEDO\r'),
(837, 'TURBO\r'),
(842, 'URAMITA\r'),
(847, 'URRAO\r'),
(854, 'VALDIVIA\r'),
(856, 'VALPARAISO\r'),
(858, 'VEGACHI\r'),
(861, 'VENECIA\r'),
(873, 'VIGIA DEL FUERTE\r'),
(885, 'YALI\r'),
(887, 'YARUMAL\r'),
(890, 'YOLOMBO\r'),
(893, 'YONDO\r'),
(895, 'ZARAGOZA\r'),
(1, 'BARRANQUILLA\r'),
(78, 'BARANOA\r'),
(137, 'CAMPO DE LA CRUZ\r'),
(141, 'CANDELARIA\r'),
(296, 'GALAPA\r'),
(372, 'JUAN DE ACOSTA\r'),
(421, 'LURUACO\r'),
(433, 'MALAMBO\r'),
(436, 'MANATI\r'),
(520, 'PALMAR DE VARELA\r'),
(549, 'PIOJO\r'),
(558, 'POLONUEVO\r'),
(560, 'PONEDERA\r'),
(573, 'PUERTO COLOMBIA\r'),
(606, 'REPELON\r'),
(634, 'SABANAGRANDE\r'),
(638, 'SABANALARGA\r'),
(675, 'SANTA LUCIA\r'),
(685, 'SANTO TOMAS\r'),
(758, 'SOLEDAD\r'),
(770, 'SUAN\r'),
(832, 'TUBARA\r'),
(849, 'USIACURI\r'),
(1, 'BOGOTA, D.C.\r'),
(1, 'CARTAGENA\r'),
(6, 'ACHI\r'),
(30, 'ALTOS DEL ROSARIO\r'),
(42, 'ARENAL\r'),
(52, 'ARJONA\r'),
(62, 'ARROYOHONDO\r'),
(74, 'BARRANCO DE LOBA\r'),
(140, 'CALAMAR\r'),
(160, 'CANTAGALLO\r'),
(188, 'CICUCO\r'),
(212, 'CORDOBA\r'),
(222, 'CLEMENCIA\r'),
(244, 'EL CARMEN DE BOLIVAR\r'),
(248, 'EL GUAMO\r'),
(268, 'EL PEÑON\r'),
(300, 'HATILLO DE LOBA\r'),
(430, 'MAGANGUE\r'),
(433, 'MAHATES\r'),
(440, 'MARGARITA\r'),
(442, 'MARIA LA BAJA\r'),
(458, 'MONTECRISTO\r'),
(468, 'MOMPOS\r'),
(490, 'NOROSI\r'),
(473, 'MORALES\r'),
(549, 'PINILLOS\r'),
(580, 'REGIDOR\r'),
(600, 'RIO VIEJO\r'),
(620, 'SAN CRISTOBAL\r'),
(647, 'SAN ESTANISLAO\r'),
(650, 'SAN FERNANDO\r'),
(654, 'SAN JACINTO\r'),
(655, 'SAN JACINTO DEL CAUCA\r'),
(657, 'SAN JUAN NEPOMUCENO\r'),
(667, 'SAN MARTIN DE LOBA\r'),
(670, 'SAN PABLO\r'),
(673, 'SANTA CATALINA\r'),
(683, 'SANTA ROSA\r'),
(688, 'SANTA ROSA DEL SUR\r'),
(744, 'SIMITI\r'),
(760, 'SOPLAVIENTO\r'),
(780, 'TALAIGUA NUEVO\r'),
(810, 'TIQUISIO\r'),
(836, 'TURBACO\r'),
(838, 'TURBANA\r'),
(873, 'VILLANUEVA\r'),
(894, 'ZAMBRANO\r'),
(1, 'TUNJA\r'),
(22, 'ALMEIDA\r'),
(47, 'AQUITANIA\r'),
(51, 'ARCABUCO\r'),
(87, 'BELEN\r'),
(90, 'BERBEO\r'),
(92, 'BETEITIVA\r'),
(97, 'BOAVITA\r'),
(104, 'BOYACA\r'),
(106, 'BRICEÑO\r'),
(109, 'BUENAVISTA\r'),
(114, 'BUSBANZA\r'),
(131, 'CALDAS\r'),
(135, 'CAMPOHERMOSO\r'),
(162, 'CERINZA\r'),
(172, 'CHINAVITA\r'),
(176, 'CHIQUINQUIRA\r'),
(180, 'CHISCAS\r'),
(183, 'CHITA\r'),
(185, 'CHITARAQUE\r'),
(187, 'CHIVATA\r'),
(189, 'CIENEGA\r'),
(204, 'COMBITA\r'),
(212, 'COPER\r'),
(215, 'CORRALES\r'),
(218, 'COVARACHIA\r'),
(223, 'CUBARA\r'),
(224, 'CUCAITA\r'),
(226, 'CUITIVA\r'),
(232, 'CHIQUIZA\r'),
(236, 'CHIVOR\r'),
(238, 'DUITAMA\r'),
(244, 'EL COCUY\r'),
(248, 'EL ESPINO\r'),
(272, 'FIRAVITOBA\r'),
(276, 'FLORESTA\r'),
(293, 'GACHANTIVA\r'),
(296, 'GAMEZA\r'),
(299, 'GARAGOA\r'),
(317, 'GUACAMAYAS\r'),
(322, 'GUATEQUE\r'),
(325, 'GUAYATA\r'),
(332, 'GsICAN\r'),
(362, 'IZA\r'),
(367, 'JENESANO\r'),
(368, 'JERICO\r'),
(377, 'LABRANZAGRANDE\r'),
(380, 'LA CAPILLA\r'),
(401, 'LA VICTORIA\r'),
(403, 'LA UVITA\r'),
(407, 'VILLA DE LEYVA\r'),
(425, 'MACANAL\r'),
(442, 'MARIPI\r'),
(455, 'MIRAFLORES\r'),
(464, 'MONGUA\r'),
(466, 'MONGUI\r'),
(469, 'MONIQUIRA\r'),
(476, 'MOTAVITA\r'),
(480, 'MUZO\r'),
(491, 'NOBSA\r'),
(494, 'NUEVO COLON\r'),
(500, 'OICATA\r'),
(507, 'OTANCHE\r'),
(511, 'PACHAVITA\r'),
(514, 'PAEZ\r'),
(516, 'PAIPA\r'),
(518, 'PAJARITO\r'),
(522, 'PANQUEBA\r'),
(531, 'PAUNA\r'),
(533, 'PAYA\r'),
(537, 'PAZ DE RIO\r'),
(542, 'PESCA\r'),
(550, 'PISBA\r'),
(572, 'PUERTO BOYACA\r'),
(580, 'QUIPAMA\r'),
(599, 'RAMIRIQUI\r'),
(600, 'RAQUIRA\r'),
(621, 'RONDON\r'),
(632, 'SABOYA\r'),
(638, 'SACHICA\r'),
(646, 'SAMACA\r'),
(660, 'SAN EDUARDO\r'),
(664, 'SAN JOSE DE PARE\r'),
(667, 'SAN LUIS DE GACENO\r'),
(673, 'SAN MATEO\r'),
(676, 'SAN MIGUEL DE SEMA\r'),
(681, 'SAN PABLO DE BORBUR\r'),
(686, 'SANTANA\r'),
(690, 'SANTA MARIA\r'),
(693, 'SANTA ROSA DE VITERBO\r'),
(696, 'SANTA SOFIA\r'),
(720, 'SATIVANORTE\r'),
(723, 'SATIVASUR\r'),
(740, 'SIACHOQUE\r'),
(753, 'SOATA\r'),
(755, 'SOCOTA\r'),
(757, 'SOCHA\r'),
(759, 'SOGAMOSO\r'),
(761, 'SOMONDOCO\r'),
(762, 'SORA\r'),
(763, 'SOTAQUIRA\r'),
(764, 'SORACA\r'),
(774, 'SUSACON\r'),
(776, 'SUTAMARCHAN\r'),
(778, 'SUTATENZA\r'),
(790, 'TASCO\r'),
(798, 'TENZA\r'),
(804, 'TIBANA\r'),
(806, 'TIBASOSA\r'),
(808, 'TINJACA\r'),
(810, 'TIPACOQUE\r'),
(814, 'TOCA\r'),
(816, 'TOGsI\r'),
(820, 'TOPAGA\r'),
(822, 'TOTA\r'),
(832, 'TUNUNGUA\r'),
(835, 'TURMEQUE\r'),
(837, 'TUTA\r'),
(839, 'TUTAZA\r'),
(842, 'UMBITA\r'),
(861, 'VENTAQUEMADA\r'),
(879, 'VIRACACHA\r'),
(897, 'ZETAQUIRA\r'),
(1, 'MANIZALES\r'),
(13, 'AGUADAS\r'),
(42, 'ANSERMA\r'),
(50, 'ARANZAZU\r'),
(88, 'BELALCAZAR\r'),
(174, 'CHINCHINA\r'),
(272, 'FILADELFIA\r'),
(380, 'LA DORADA\r'),
(388, 'LA MERCED\r'),
(433, 'MANZANARES\r'),
(442, 'MARMATO\r'),
(444, 'MARQUETALIA\r'),
(446, 'MARULANDA\r'),
(486, 'NEIRA\r'),
(495, 'NORCASIA\r'),
(513, 'PACORA\r'),
(524, 'PALESTINA\r'),
(541, 'PENSILVANIA\r'),
(614, 'RIOSUCIO\r'),
(616, 'RISARALDA\r'),
(653, 'SALAMINA\r'),
(662, 'SAMANA\r'),
(665, 'SAN JOSE\r'),
(777, 'SUPIA\r'),
(867, 'VICTORIA\r'),
(873, 'VILLAMARIA\r'),
(877, 'VITERBO\r'),
(1, 'FLORENCIA\r'),
(29, 'ALBANIA\r'),
(94, 'BELEN DE LOS ANDAQUIES\r'),
(150, 'CARTAGENA DEL CHAIRA\r'),
(205, 'CURILLO\r'),
(247, 'EL DONCELLO\r'),
(256, 'EL PAUJIL\r'),
(410, 'LA MONTAÑITA\r'),
(460, 'MILAN\r'),
(479, 'MORELIA\r'),
(592, 'PUERTO RICO\r'),
(610, 'SAN JOSE DEL FRAGUA\r'),
(753, 'SAN VICENTE DEL CAGUAN\r'),
(756, 'SOLANO\r'),
(785, 'SOLITA\r'),
(860, 'VALPARAISO\r'),
(1, 'POPAYAN\r'),
(22, 'ALMAGUER\r'),
(50, 'ARGELIA\r'),
(75, 'BALBOA\r'),
(100, 'BOLIVAR\r'),
(110, 'BUENOS AIRES\r'),
(130, 'CAJIBIO\r'),
(137, 'CALDONO\r'),
(142, 'CALOTO\r'),
(212, 'CORINTO\r'),
(256, 'EL TAMBO\r'),
(290, 'FLORENCIA\r'),
(300, 'GUACHENE\r'),
(318, 'GUAPI\r'),
(355, 'INZA\r'),
(364, 'JAMBALO\r'),
(392, 'LA SIERRA\r'),
(397, 'LA VEGA\r'),
(418, 'LOPEZ\r'),
(450, 'MERCADERES\r'),
(455, 'MIRANDA\r'),
(473, 'MORALES\r'),
(513, 'PADILLA\r'),
(517, 'PAEZ\r'),
(532, 'PATIA\r'),
(533, 'PIAMONTE\r'),
(548, 'PIENDAMO\r'),
(573, 'PUERTO TEJADA\r'),
(585, 'PURACE\r'),
(622, 'ROSAS\r'),
(693, 'SAN SEBASTIAN\r'),
(698, 'SANTANDER DE QUILICHAO\r'),
(701, 'SANTA ROSA\r'),
(743, 'SILVIA\r'),
(760, 'SOTARA\r'),
(780, 'SUAREZ\r'),
(785, 'SUCRE\r'),
(807, 'TIMBIO\r'),
(809, 'TIMBIQUI\r'),
(821, 'TORIBIO\r'),
(824, 'TOTORO\r'),
(845, 'VILLA RICA\r'),
(1, 'VALLEDUPAR\r'),
(11, 'AGUACHICA\r'),
(13, 'AGUSTIN CODAZZI\r'),
(32, 'ASTREA\r'),
(45, 'BECERRIL\r'),
(60, 'BOSCONIA\r'),
(175, 'CHIMICHAGUA\r'),
(178, 'CHIRIGUANA\r'),
(228, 'CURUMANI\r'),
(238, 'EL COPEY\r'),
(250, 'EL PASO\r'),
(295, 'GAMARRA\r'),
(310, 'GONZALEZ\r'),
(383, 'LA GLORIA\r'),
(400, 'LA JAGUA DE IBIRICO\r'),
(443, 'MANAURE\r'),
(517, 'PAILITAS\r'),
(550, 'PELAYA\r'),
(570, 'PUEBLO BELLO\r'),
(614, 'RIO DE ORO\r'),
(621, 'LA PAZ\r'),
(710, 'SAN ALBERTO\r'),
(750, 'SAN DIEGO\r'),
(770, 'SAN MARTIN\r'),
(787, 'TAMALAMEQUE\r'),
(1, 'MONTERIA\r'),
(68, 'AYAPEL\r'),
(79, 'BUENAVISTA\r'),
(90, 'CANALETE\r'),
(162, 'CERETE\r'),
(168, 'CHIMA\r'),
(182, 'CHINU\r'),
(189, 'CIENAGA DE ORO\r'),
(300, 'COTORRA\r'),
(350, 'LA APARTADA\r'),
(417, 'LORICA\r'),
(419, 'LOS CORDOBAS\r'),
(464, 'MOMIL\r'),
(466, 'MONTELIBANO\r'),
(500, 'MOÑITOS\r'),
(555, 'PLANETA RICA\r'),
(570, 'PUEBLO NUEVO\r'),
(574, 'PUERTO ESCONDIDO\r'),
(580, 'PUERTO LIBERTADOR\r'),
(586, 'PURISIMA\r'),
(660, 'SAHAGUN\r'),
(670, 'SAN ANDRES SOTAVENTO\r'),
(672, 'SAN ANTERO\r'),
(675, 'SAN BERNARDO DEL VIENTO\r'),
(678, 'SAN CARLOS\r'),
(686, 'SAN PELAYO\r'),
(807, 'TIERRALTA\r'),
(855, 'VALENCIA\r'),
(1, 'AGUA DE DIOS\r'),
(19, 'ALBAN\r'),
(35, 'ANAPOIMA\r'),
(40, 'ANOLAIMA\r'),
(53, 'ARBELAEZ\r'),
(86, 'BELTRAN\r'),
(95, 'BITUIMA\r'),
(99, 'BOJACA\r'),
(120, 'CABRERA\r'),
(123, 'CACHIPAY\r'),
(126, 'CAJICA\r'),
(148, 'CAPARRAPI\r'),
(151, 'CAQUEZA\r'),
(154, 'CARMEN DE CARUPA\r'),
(168, 'CHAGUANI\r'),
(175, 'CHIA\r'),
(178, 'CHIPAQUE\r'),
(181, 'CHOACHI\r'),
(183, 'CHOCONTA\r'),
(200, 'COGUA\r'),
(214, 'COTA\r'),
(224, 'CUCUNUBA\r'),
(245, 'EL COLEGIO\r'),
(258, 'EL PEÑON\r'),
(260, 'EL ROSAL\r'),
(269, 'FACATATIVA\r'),
(279, 'FOMEQUE\r'),
(281, 'FOSCA\r'),
(286, 'FUNZA\r'),
(288, 'FUQUENE\r'),
(290, 'FUSAGASUGA\r'),
(293, 'GACHALA\r'),
(295, 'GACHANCIPA\r'),
(297, 'GACHETA\r'),
(299, 'GAMA\r'),
(307, 'GIRARDOT\r'),
(312, 'GRANADA\r'),
(317, 'GUACHETA\r'),
(320, 'GUADUAS\r'),
(322, 'GUASCA\r'),
(324, 'GUATAQUI\r'),
(326, 'GUATAVITA\r'),
(328, 'GUAYABAL DE SIQUIMA\r'),
(335, 'GUAYABETAL\r'),
(339, 'GUTIERREZ\r'),
(368, 'JERUSALEN\r'),
(372, 'JUNIN\r'),
(377, 'LA CALERA\r'),
(386, 'LA MESA\r'),
(394, 'LA PALMA\r'),
(398, 'LA PEÑA\r'),
(402, 'LA VEGA\r'),
(407, 'LENGUAZAQUE\r'),
(426, 'MACHETA\r'),
(430, 'MADRID\r'),
(436, 'MANTA\r'),
(438, 'MEDINA\r'),
(473, 'MOSQUERA\r'),
(483, 'NARIÑO\r'),
(486, 'NEMOCON\r'),
(488, 'NILO\r'),
(489, 'NIMAIMA\r'),
(491, 'NOCAIMA\r'),
(506, 'VENECIA\r'),
(513, 'PACHO\r'),
(518, 'PAIME\r'),
(524, 'PANDI\r'),
(530, 'PARATEBUENO\r'),
(535, 'PASCA\r'),
(572, 'PUERTO SALGAR\r'),
(580, 'PULI\r'),
(592, 'QUEBRADANEGRA\r'),
(594, 'QUETAME\r'),
(596, 'QUIPILE\r'),
(599, 'APULO\r'),
(612, 'RICAURTE\r'),
(645, 'SAN ANTONIO DEL TEQUENDAMA\r'),
(649, 'SAN BERNARDO\r'),
(653, 'SAN CAYETANO\r'),
(658, 'SAN FRANCISCO\r'),
(662, 'SAN JUAN DE RIO SECO\r'),
(718, 'SASAIMA\r'),
(736, 'SESQUILE\r'),
(740, 'SIBATE\r'),
(743, 'SILVANIA\r'),
(745, 'SIMIJACA\r'),
(754, 'SOACHA\r'),
(758, 'SOPO\r'),
(769, 'SUBACHOQUE\r'),
(772, 'SUESCA\r'),
(777, 'SUPATA\r'),
(779, 'SUSA\r'),
(781, 'SUTATAUSA\r'),
(785, 'TABIO\r'),
(793, 'TAUSA\r'),
(797, 'TENA\r'),
(799, 'TENJO\r'),
(805, 'TIBACUY\r'),
(807, 'TIBIRITA\r'),
(815, 'TOCAIMA\r'),
(817, 'TOCANCIPA\r'),
(823, 'TOPAIPI\r'),
(839, 'UBALA\r'),
(841, 'UBAQUE\r'),
(843, 'VILLA DE SAN DIEGO DE UBATE\r'),
(845, 'UNE\r'),
(851, 'UTICA\r'),
(862, 'VERGARA\r'),
(867, 'VIANI\r'),
(871, 'VILLAGOMEZ\r'),
(873, 'VILLAPINZON\r'),
(875, 'VILLETA\r'),
(878, 'VIOTA\r'),
(885, 'YACOPI\r'),
(898, 'ZIPACON\r'),
(899, 'ZIPAQUIRA\r'),
(1, 'QUIBDO\r'),
(6, 'ACANDI\r'),
(25, 'ALTO BAUDO\r'),
(50, 'ATRATO\r'),
(73, 'BAGADO\r'),
(75, 'BAHIA SOLANO\r'),
(77, 'BAJO BAUDO\r'),
(99, 'BOJAYA\r'),
(135, 'EL CANTON DEL SAN PABLO\r'),
(150, 'CARMEN DEL DARIEN\r'),
(160, 'CERTEGUI\r'),
(205, 'CONDOTO\r'),
(245, 'EL CARMEN DE ATRATO\r'),
(250, 'EL LITORAL DEL SAN JUAN\r'),
(361, 'ISTMINA\r'),
(372, 'JURADO\r'),
(413, 'LLORO\r'),
(425, 'MEDIO ATRATO\r'),
(430, 'MEDIO BAUDO\r'),
(450, 'MEDIO SAN JUAN\r'),
(491, 'NOVITA\r'),
(495, 'NUQUI\r'),
(580, 'RIO IRO\r'),
(600, 'RIO QUITO\r'),
(615, 'RIOSUCIO\r'),
(660, 'SAN JOSE DEL PALMAR\r'),
(745, 'SIPI\r'),
(787, 'TADO\r'),
(800, 'UNGUIA\r'),
(810, 'UNION PANAMERICANA\r'),
(1, 'NEIVA\r'),
(6, 'ACEVEDO\r'),
(13, 'AGRADO\r'),
(16, 'AIPE\r'),
(20, 'ALGECIRAS\r'),
(26, 'ALTAMIRA\r'),
(78, 'BARAYA\r'),
(132, 'CAMPOALEGRE\r'),
(206, 'COLOMBIA\r'),
(244, 'ELIAS\r'),
(298, 'GARZON\r'),
(306, 'GIGANTE\r'),
(319, 'GUADALUPE\r'),
(349, 'HOBO\r'),
(357, 'IQUIRA\r'),
(359, 'ISNOS\r'),
(378, 'LA ARGENTINA\r'),
(396, 'LA PLATA\r'),
(483, 'NATAGA\r'),
(503, 'OPORAPA\r'),
(518, 'PAICOL\r'),
(524, 'PALERMO\r'),
(530, 'PALESTINA\r'),
(548, 'PITAL\r'),
(551, 'PITALITO\r'),
(615, 'RIVERA\r'),
(660, 'SALADOBLANCO\r'),
(668, 'SAN AGUSTIN\r'),
(676, 'SANTA MARIA\r'),
(770, 'SUAZA\r'),
(791, 'TARQUI\r'),
(797, 'TESALIA\r'),
(799, 'TELLO\r'),
(801, 'TERUEL\r'),
(807, 'TIMANA\r'),
(872, 'VILLAVIEJA\r'),
(885, 'YAGUARA\r'),
(1, 'RIOHACHA\r'),
(35, 'ALBANIA\r'),
(78, 'BARRANCAS\r'),
(90, 'DIBULLA\r'),
(98, 'DISTRACCION\r'),
(110, 'EL MOLINO\r'),
(279, 'FONSECA\r'),
(378, 'HATONUEVO\r'),
(420, 'LA JAGUA DEL PILAR\r'),
(430, 'MAICAO\r'),
(560, 'MANAURE\r'),
(650, 'SAN JUAN DEL CESAR\r'),
(847, 'URIBIA\r'),
(855, 'URUMITA\r'),
(874, 'VILLANUEVA\r'),
(1, 'SANTA MARTA\r'),
(30, 'ALGARROBO\r'),
(53, 'ARACATACA\r'),
(58, 'ARIGUANI\r'),
(161, 'CERRO SAN ANTONIO\r'),
(170, 'CHIBOLO\r'),
(189, 'CIENAGA\r'),
(205, 'CONCORDIA\r'),
(245, 'EL BANCO\r'),
(258, 'EL PIÑON\r'),
(268, 'EL RETEN\r'),
(288, 'FUNDACION\r'),
(318, 'GUAMAL\r'),
(460, 'NUEVA GRANADA\r'),
(541, 'PEDRAZA\r'),
(545, 'PIJIÑO DEL CARMEN\r'),
(551, 'PIVIJAY\r'),
(555, 'PLATO\r'),
(570, 'PUEBLOVIEJO\r'),
(605, 'REMOLINO\r'),
(660, 'SABANAS DE SAN ANGEL\r'),
(675, 'SALAMINA\r'),
(692, 'SAN SEBASTIAN DE BUENAVISTA\r'),
(703, 'SAN ZENON\r'),
(707, 'SANTA ANA\r'),
(720, 'SANTA BARBARA DE PINTO\r'),
(745, 'SITIONUEVO\r'),
(798, 'TENERIFE\r'),
(960, 'ZAPAYAN\r'),
(980, 'ZONA BANANERA\r'),
(1, 'VILLAVICENCIO\r'),
(6, 'ACACIAS\r'),
(110, 'BARRANCA DE UPIA\r'),
(124, 'CABUYARO\r'),
(150, 'CASTILLA LA NUEVA\r'),
(223, 'CUBARRAL\r'),
(226, 'CUMARAL\r'),
(245, 'EL CALVARIO\r'),
(251, 'EL CASTILLO\r'),
(270, 'EL DORADO\r'),
(287, 'FUENTE DE ORO\r'),
(313, 'GRANADA\r'),
(318, 'GUAMAL\r'),
(325, 'MAPIRIPAN\r'),
(330, 'MESETAS\r'),
(350, 'LA MACARENA\r'),
(370, 'URIBE\r'),
(400, 'LEJANIAS\r'),
(450, 'PUERTO CONCORDIA\r'),
(568, 'PUERTO GAITAN\r'),
(573, 'PUERTO LOPEZ\r'),
(577, 'PUERTO LLERAS\r'),
(590, 'PUERTO RICO\r'),
(606, 'RESTREPO\r'),
(680, 'SAN CARLOS DE GUAROA\r'),
(683, 'SAN JUAN DE ARAMA\r'),
(686, 'SAN JUANITO\r'),
(689, 'SAN MARTIN\r'),
(711, 'VISTAHERMOSA\r'),
(1, 'PASTO\r'),
(19, 'ALBAN\r'),
(22, 'ALDANA\r'),
(36, 'ANCUYA\r'),
(51, 'ARBOLEDA\r'),
(79, 'BARBACOAS\r'),
(83, 'BELEN\r'),
(110, 'BUESACO\r'),
(203, 'COLON\r'),
(207, 'CONSACA\r'),
(210, 'CONTADERO\r'),
(215, 'CORDOBA\r'),
(224, 'CUASPUD\r'),
(227, 'CUMBAL\r'),
(233, 'CUMBITARA\r'),
(240, 'CHACHAGsI\r'),
(250, 'EL CHARCO\r'),
(254, 'EL PEÑOL\r'),
(256, 'EL ROSARIO\r'),
(258, 'EL TABLON DE GOMEZ\r'),
(260, 'EL TAMBO\r'),
(287, 'FUNES\r'),
(317, 'GUACHUCAL\r'),
(320, 'GUAITARILLA\r'),
(323, 'GUALMATAN\r'),
(352, 'ILES\r'),
(354, 'IMUES\r'),
(356, 'IPIALES\r'),
(378, 'LA CRUZ\r'),
(381, 'LA FLORIDA\r'),
(385, 'LA LLANADA\r'),
(390, 'LA TOLA\r'),
(399, 'LA UNION\r'),
(405, 'LEIVA\r'),
(411, 'LINARES\r'),
(418, 'LOS ANDES\r'),
(427, 'MAGsI\r'),
(435, 'MALLAMA\r'),
(473, 'MOSQUERA\r'),
(480, 'NARIÑO\r'),
(490, 'OLAYA HERRERA\r'),
(506, 'OSPINA\r'),
(520, 'FRANCISCO PIZARRO\r'),
(540, 'POLICARPA\r'),
(560, 'POTOSI\r'),
(565, 'PROVIDENCIA\r'),
(573, 'PUERRES\r'),
(585, 'PUPIALES\r'),
(612, 'RICAURTE\r'),
(621, 'ROBERTO PAYAN\r'),
(678, 'SAMANIEGO\r'),
(683, 'SANDONA\r'),
(685, 'SAN BERNARDO\r'),
(687, 'SAN LORENZO\r'),
(693, 'SAN PABLO\r'),
(694, 'SAN PEDRO DE CARTAGO\r'),
(696, 'SANTA BARBARA\r'),
(699, 'SANTACRUZ\r'),
(720, 'SAPUYES\r'),
(786, 'TAMINANGO\r'),
(788, 'TANGUA\r'),
(835, 'SAN ANDRES DE TUMACO\r'),
(838, 'TUQUERRES\r'),
(885, 'YACUANQUER\r'),
(1, 'CUCUTA\r'),
(3, 'ABREGO\r'),
(51, 'ARBOLEDAS\r'),
(99, 'BOCHALEMA\r'),
(109, 'BUCARASICA\r'),
(125, 'CACOTA\r'),
(128, 'CACHIRA\r'),
(172, 'CHINACOTA\r'),
(174, 'CHITAGA\r'),
(206, 'CONVENCION\r'),
(223, 'CUCUTILLA\r'),
(239, 'DURANIA\r'),
(245, 'EL CARMEN\r'),
(250, 'EL TARRA\r'),
(261, 'EL ZULIA\r'),
(313, 'GRAMALOTE\r'),
(344, 'HACARI\r'),
(347, 'HERRAN\r'),
(377, 'LABATECA\r'),
(385, 'LA ESPERANZA\r'),
(398, 'LA PLAYA\r'),
(405, 'LOS PATIOS\r'),
(418, 'LOURDES\r'),
(480, 'MUTISCUA\r'),
(498, 'OCAÑA\r'),
(518, 'PAMPLONA\r'),
(520, 'PAMPLONITA\r'),
(553, 'PUERTO SANTANDER\r'),
(599, 'RAGONVALIA\r'),
(660, 'SALAZAR\r'),
(670, 'SAN CALIXTO\r'),
(673, 'SAN CAYETANO\r'),
(680, 'SANTIAGO\r'),
(720, 'SARDINATA\r'),
(743, 'SILOS\r'),
(800, 'TEORAMA\r'),
(810, 'TIBU\r'),
(820, 'TOLEDO\r'),
(871, 'VILLA CARO\r'),
(874, 'VILLA DEL ROSARIO\r'),
(1, 'ARMENIA\r'),
(111, 'BUENAVISTA\r'),
(130, 'CALARCA\r'),
(190, 'CIRCASIA\r'),
(212, 'CORDOBA\r'),
(272, 'FILANDIA\r'),
(302, 'GENOVA\r'),
(401, 'LA TEBAIDA\r'),
(470, 'MONTENEGRO\r'),
(548, 'PIJAO\r'),
(594, 'QUIMBAYA\r'),
(690, 'SALENTO\r'),
(1, 'PEREIRA\r'),
(45, 'APIA\r'),
(75, 'BALBOA\r'),
(88, 'BELEN DE UMBRIA\r'),
(170, 'DOSQUEBRADAS\r'),
(318, 'GUATICA\r'),
(383, 'LA CELIA\r'),
(400, 'LA VIRGINIA\r'),
(440, 'MARSELLA\r'),
(456, 'MISTRATO\r'),
(572, 'PUEBLO RICO\r'),
(594, 'QUINCHIA\r'),
(682, 'SANTA ROSA DE CABAL\r'),
(687, 'SANTUARIO\r'),
(1, 'BUCARAMANGA\r'),
(13, 'AGUADA\r'),
(20, 'ALBANIA\r'),
(51, 'ARATOCA\r'),
(77, 'BARBOSA\r'),
(79, 'BARICHARA\r'),
(81, 'BARRANCABERMEJA\r'),
(92, 'BETULIA\r'),
(101, 'BOLIVAR\r'),
(121, 'CABRERA\r'),
(132, 'CALIFORNIA\r'),
(147, 'CAPITANEJO\r'),
(152, 'CARCASI\r'),
(160, 'CEPITA\r'),
(162, 'CERRITO\r'),
(167, 'CHARALA\r'),
(169, 'CHARTA\r'),
(176, 'CHIMA\r'),
(179, 'CHIPATA\r'),
(190, 'CIMITARRA\r'),
(207, 'CONCEPCION\r'),
(209, 'CONFINES\r'),
(211, 'CONTRATACION\r'),
(217, 'COROMORO\r'),
(229, 'CURITI\r'),
(235, 'EL CARMEN DE CHUCURI\r'),
(245, 'EL GUACAMAYO\r'),
(250, 'EL PEÑON\r'),
(255, 'EL PLAYON\r'),
(264, 'ENCINO\r'),
(266, 'ENCISO\r'),
(271, 'FLORIAN\r'),
(276, 'FLORIDABLANCA\r'),
(296, 'GALAN\r'),
(298, 'GAMBITA\r'),
(307, 'GIRON\r'),
(318, 'GUACA\r'),
(320, 'GUADALUPE\r'),
(322, 'GUAPOTA\r'),
(324, 'GUAVATA\r'),
(327, 'GsEPSA\r'),
(344, 'HATO\r'),
(368, 'JESUS MARIA\r'),
(370, 'JORDAN\r'),
(377, 'LA BELLEZA\r'),
(385, 'LANDAZURI\r'),
(397, 'LA PAZ\r'),
(406, 'LEBRIJA\r'),
(418, 'LOS SANTOS\r'),
(425, 'MACARAVITA\r'),
(432, 'MALAGA\r'),
(444, 'MATANZA\r'),
(464, 'MOGOTES\r'),
(468, 'MOLAGAVITA\r'),
(498, 'OCAMONTE\r'),
(500, 'OIBA\r'),
(502, 'ONZAGA\r'),
(522, 'PALMAR\r'),
(524, 'PALMAS DEL SOCORRO\r'),
(533, 'PARAMO\r'),
(547, 'PIEDECUESTA\r'),
(549, 'PINCHOTE\r'),
(572, 'PUENTE NACIONAL\r'),
(573, 'PUERTO PARRA\r'),
(575, 'PUERTO WILCHES\r'),
(615, 'RIONEGRO\r'),
(655, 'SABANA DE TORRES\r'),
(669, 'SAN ANDRES\r'),
(673, 'SAN BENITO\r'),
(679, 'SAN GIL\r'),
(682, 'SAN JOAQUIN\r'),
(684, 'SAN JOSE DE MIRANDA\r'),
(686, 'SAN MIGUEL\r'),
(689, 'SAN VICENTE DE CHUCURI\r'),
(705, 'SANTA BARBARA\r'),
(720, 'SANTA HELENA DEL OPON\r'),
(745, 'SIMACOTA\r'),
(755, 'SOCORRO\r'),
(770, 'SUAITA\r'),
(773, 'SUCRE\r'),
(780, 'SURATA\r'),
(820, 'TONA\r'),
(855, 'VALLE DE SAN JOSE\r'),
(861, 'VELEZ\r'),
(867, 'VETAS\r'),
(872, 'VILLANUEVA\r'),
(895, 'ZAPATOCA\r'),
(1, 'SINCELEJO\r'),
(110, 'BUENAVISTA\r'),
(124, 'CAIMITO\r'),
(204, 'COLOSO\r'),
(215, 'COROZAL\r'),
(221, 'COVEÑAS\r'),
(230, 'CHALAN\r'),
(233, 'EL ROBLE\r'),
(235, 'GALERAS\r'),
(265, 'GUARANDA\r'),
(400, 'LA UNION\r'),
(418, 'LOS PALMITOS\r'),
(429, 'MAJAGUAL\r'),
(473, 'MORROA\r'),
(508, 'OVEJAS\r'),
(523, 'PALMITO\r'),
(670, 'SAMPUES\r'),
(678, 'SAN BENITO ABAD\r'),
(702, 'SAN JUAN DE BETULIA\r'),
(708, 'SAN MARCOS\r'),
(713, 'SAN ONOFRE\r'),
(717, 'SAN PEDRO\r'),
(742, 'SAN LUIS DE SINCE\r'),
(771, 'SUCRE\r'),
(820, 'SANTIAGO DE TOLU\r'),
(823, 'TOLU VIEJO\r'),
(1, 'IBAGUE\r'),
(24, 'ALPUJARRA\r'),
(26, 'ALVARADO\r'),
(30, 'AMBALEMA\r'),
(43, 'ANZOATEGUI\r'),
(55, 'ARMERO\r'),
(67, 'ATACO\r'),
(124, 'CAJAMARCA\r'),
(148, 'CARMEN DE APICALA\r'),
(152, 'CASABIANCA\r'),
(168, 'CHAPARRAL\r'),
(200, 'COELLO\r'),
(217, 'COYAIMA\r'),
(226, 'CUNDAY\r'),
(236, 'DOLORES\r'),
(268, 'ESPINAL\r'),
(270, 'FALAN\r'),
(275, 'FLANDES\r'),
(283, 'FRESNO\r'),
(319, 'GUAMO\r'),
(347, 'HERVEO\r'),
(349, 'HONDA\r'),
(352, 'ICONONZO\r'),
(408, 'LERIDA\r'),
(411, 'LIBANO\r'),
(443, 'MARIQUITA\r'),
(449, 'MELGAR\r'),
(461, 'MURILLO\r'),
(483, 'NATAGAIMA\r'),
(504, 'ORTEGA\r'),
(520, 'PALOCABILDO\r'),
(547, 'PIEDRAS\r'),
(555, 'PLANADAS\r'),
(563, 'PRADO\r'),
(585, 'PURIFICACION\r'),
(616, 'RIOBLANCO\r'),
(622, 'RONCESVALLES\r'),
(624, 'ROVIRA\r'),
(671, 'SALDAÑA\r'),
(675, 'SAN ANTONIO\r'),
(678, 'SAN LUIS\r'),
(686, 'SANTA ISABEL\r'),
(770, 'SUAREZ\r'),
(854, 'VALLE DE SAN JUAN\r'),
(861, 'VENADILLO\r'),
(870, 'VILLAHERMOSA\r'),
(873, 'VILLARRICA\r'),
(1, 'CALI\r'),
(20, 'ALCALA\r'),
(36, 'ANDALUCIA\r'),
(41, 'ANSERMANUEVO\r'),
(54, 'ARGELIA\r'),
(100, 'BOLIVAR\r'),
(109, 'BUENAVENTURA\r'),
(111, 'GUADALAJARA DE BUGA\r'),
(113, 'BUGALAGRANDE\r'),
(122, 'CAICEDONIA\r'),
(126, 'CALIMA\r'),
(130, 'CANDELARIA\r'),
(147, 'CARTAGO\r'),
(233, 'DAGUA\r'),
(243, 'EL AGUILA\r'),
(246, 'EL CAIRO\r'),
(248, 'EL CERRITO\r'),
(250, 'EL DOVIO\r'),
(275, 'FLORIDA\r'),
(306, 'GINEBRA\r'),
(318, 'GUACARI\r'),
(364, 'JAMUNDI\r'),
(377, 'LA CUMBRE\r'),
(400, 'LA UNION\r'),
(403, 'LA VICTORIA\r'),
(497, 'OBANDO\r'),
(520, 'PALMIRA\r'),
(563, 'PRADERA\r'),
(606, 'RESTREPO\r'),
(616, 'RIOFRIO\r'),
(622, 'ROLDANILLO\r'),
(670, 'SAN PEDRO\r'),
(736, 'SEVILLA\r'),
(823, 'TORO\r'),
(828, 'TRUJILLO\r'),
(834, 'TULUA\r'),
(845, 'ULLOA\r'),
(863, 'VERSALLES\r'),
(869, 'VIJES\r'),
(890, 'YOTOCO\r'),
(892, 'YUMBO\r'),
(895, 'ZARZAL\r'),
(1, 'ARAUCA\r'),
(65, 'ARAUQUITA\r'),
(220, 'CRAVO NORTE\r'),
(300, 'FORTUL\r'),
(591, 'PUERTO RONDON\r'),
(736, 'SARAVENA\r'),
(794, 'TAME\r'),
(1, 'YOPAL\r'),
(10, 'AGUAZUL\r'),
(15, 'CHAMEZA\r'),
(125, 'HATO COROZAL\r'),
(136, 'LA SALINA\r'),
(139, 'MANI\r'),
(162, 'MONTERREY\r'),
(225, 'NUNCHIA\r'),
(230, 'OROCUE\r'),
(250, 'PAZ DE ARIPORO\r'),
(263, 'PORE\r'),
(279, 'RECETOR\r'),
(300, 'SABANALARGA\r'),
(315, 'SACAMA\r'),
(325, 'SAN LUIS DE PALENQUE\r'),
(400, 'TAMARA\r'),
(410, 'TAURAMENA\r'),
(430, 'TRINIDAD\r'),
(440, 'VILLANUEVA\r'),
(1, 'MOCOA\r'),
(219, 'COLON\r'),
(320, 'ORITO\r'),
(568, 'PUERTO ASIS\r'),
(569, 'PUERTO CAICEDO\r'),
(571, 'PUERTO GUZMAN\r'),
(573, 'LEGUIZAMO\r'),
(749, 'SIBUNDOY\r'),
(755, 'SAN FRANCISCO\r'),
(757, 'SAN MIGUEL\r'),
(760, 'SANTIAGO\r'),
(865, 'VALLE DEL GUAMUEZ\r'),
(885, 'VILLAGARZON\r'),
(1, 'SAN ANDRES\r'),
(564, 'PROVIDENCIA\r'),
(1, 'LETICIA\r'),
(263, 'EL ENCANTO\r'),
(405, 'LA CHORRERA\r'),
(407, 'LA PEDRERA\r'),
(430, 'LA VICTORIA\r'),
(460, 'MIRITI - PARANA\r'),
(530, 'PUERTO ALEGRIA\r'),
(536, 'PUERTO ARICA\r'),
(540, 'PUERTO NARIÑO\r'),
(669, 'PUERTO SANTANDER\r'),
(798, 'TARAPACA\r'),
(1, 'INIRIDA\r'),
(343, 'BARRANCO MINAS\r'),
(663, 'MAPIRIPANA\r'),
(883, 'SAN FELIPE\r'),
(884, 'PUERTO COLOMBIA\r'),
(885, 'LA GUADALUPE\r'),
(886, 'CACAHUAL\r'),
(887, 'PANA PANA\r'),
(888, 'MORICHAL\r'),
(1, 'SAN JOSE DEL GUAVIARE\r'),
(15, 'CALAMAR\r'),
(25, 'EL RETORNO\r'),
(200, 'MIRAFLORES\r'),
(1, 'MITU\r'),
(161, 'CARURU\r'),
(511, 'PACOA\r'),
(666, 'TARAIRA\r'),
(777, 'PAPUNAUA\r'),
(889, 'YAVARATE\r'),
(1, 'PUERTO CARREÑO\r'),
(524, 'LA PRIMAVERA\r'),
(624, 'SANTA ROSALIA\r'),
(773, 'CUMARIBO\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nomina`
--

CREATE TABLE `nomina` (
  `id` int(5) NOT NULL,
  `documento` varchar(11) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `name_file` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nomina`
--

INSERT INTO `nomina` (`id`, `documento`, `description`, `fecha_inicio`, `fecha_fin`, `file`, `name_file`) VALUES
(1, '82392523', 'Desprendible mes de Mayo', '2017-05-01', '2017-05-30', './Documents/Nomina/82392523/F-GCN-003 DESPRENDIBLES DE NOMINA.pdf', 'F-GCN-003 DESPRENDIBLES DE NOMINA.pdf'),
(2, '1069753420', 'Desprendible mes de Mayo', '2017-05-01', '2017-05-31', './Documents/Nomina/1069753420/F-GCN-003 DESPRENDIBLES DE NOMINA.pdf', 'F-GCN-003 DESPRENDIBLES DE NOMINA.pdf');

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
  `vacantes` varchar(2) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `fecha_terminacion` date NOT NULL,
  `comercial` varchar(11) NOT NULL,
  `salario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`id_oferta`, `documento`, `area`, `vacante`, `horario`, `descripcion`, `descrip_prof`, `estado`, `tiempo`, `departamento`, `ciudad`, `vacantes`, `fecha_publicacion`, `fecha_terminacion`, `comercial`, `salario`) VALUES
(1, '121323123-9', 'Sistemas', 'Programador java', 'lunes a viernes 7am - 5pm', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 'Manejo de java,c++,php,arquitectura', 'N', 'I', 'Cundinamarca', 'Fusagasuga', '', '2016-08-02', '0000-00-00', '', ''),
(3, '121323123-9', 'sistemas', 'Programador en .net', 'lunes a viernes 7am - 5pm', 'Location: New York, NY Type: Contracted to Full Time Min. Experience: ExperiencedKrossover is looking for a Web Applicationour team of smart developers. We build web and mobile applications and games for coaches, athletes and fans. If you''re a talentedprogrammer, and like sports and sports analytics, this is the position for you.', 'Debes ser creativo, dinámico, sin miedo para asumir el reto de estudiar la carrera del futuro.\r\n\r\nIntelectualmente competente como bachiller, con conocimientos, habilidades y aptitudes básicas necesarias para iniciar estudios de pregrado.\r\n\r\nSer capaz de tomar decisiones libres, autónomas y responsables.\r\n\r\nComprometido con el proyecto de vida de tu formación integral, basado en valores y actitudes que reflejen los más altos principios de ética y moral.\r\n\r\nAbierto a una dinámica de cambios sociales, políticos, económicos y tecnológicos bajo la óptica de un enfoque humanístico.', 'P', 'Completo', 'Cundinamarca', 'Bogota', '1', '2016-08-14', '0000-00-00', '888', ''),
(11, '111111111-9', 'A', 'Contador', 'asdsd', 'sdasd', 'C++', 'F', '23', 'asdasd', 'Garagoa', '0', '2016-09-06', '2017-05-01', '888', ''),
(12, '111111111-9', 'A', 'Secretaria', 'Lunes 8-12', 'Puntual', 'Adminsitradora de Empresas', 'P', '8 horas', 'Cundinamarca', 'Fusagasuga', '1', '2016-09-21', '0000-00-00', '1234', ''),
(13, '830502892', '', 'Ingeniero de Sistemas', 'Lunes a Viernes de 8am a 5pm ', '&lt;p&gt;Empresa de servicios temporales requiere &lt;strong&gt;AUXILIAR DE CARNES&lt;/strong&gt; con m&amp;iacute;nimo 1 a&amp;ntilde;o de experiencia, con conocimientos de atenci&amp;oacute;n al cliente, manejo de carnes, cortes.&lt;/p&gt;\r\n', '&lt;p&gt;Esta es una simple prueba para ver si funciona el &lt;strong&gt;jodido&lt;/strong&gt; texto enrriquecido.&lt;/p&gt;\r\n', 'F', '', 'ANTIOQUIA', 'MEDELLIN', '0', '2017-04-15', '2017-05-01', '1234', '850000'),
(14, '830502892', '', 'Ingeniero Electr&oacute;nico', 'Lunes a Viernes de 6am a 3pm ', '&lt;p&gt;Empresa de servicios temporales requiere &lt;strong&gt;AUXILIAR DE CARNES&lt;/strong&gt; con m&amp;iacute;nimo 1 a&amp;ntilde;o de experiencia, con conocimientos de atenci&amp;oacute;n al cliente, manejo de carnes, cortes.&lt;/p&gt;\r\n', '&lt;p&gt;La&amp;nbsp;&lt;strong&gt;ingenier&amp;iacute;a&lt;/strong&gt;&amp;nbsp;es el conjunto de conocimientos cient&amp;iacute;ficos y tecnol&amp;oacute;gicos para la innovaci&amp;oacute;n, invenci&amp;oacute;n, desarrollo y mejora de t&amp;eacute;cnicas y herramientas para satisfacer las necesidades de las empresas y la sociedad.&lt;/p&gt;\r\n\r\n&lt;p&gt;El ingeniero utiliza las&amp;nbsp;&lt;a href=&quot;https://es.wikipedia.org/wiki/Matem%C3%A1ticas&quot;&gt;matem&amp;aacute;ticas&lt;/a&gt;, las&amp;nbsp;&lt;a href=&quot;https://es.wikipedia.org/wiki/Matem%C3%A1ticas_aplicadas&quot;&gt;matem&amp;aacute;ticas aplicadas&lt;/a&gt;, la&amp;nbsp;&lt;a href=&quot;https://es.wikipedia.org/wiki/F%C3%ADsica&quot;&gt;f&amp;iacute;sica&lt;/a&gt;, la&amp;nbsp;&lt;a href=&quot;https://es.wikipedia.org/wiki/Qu%C3%ADmica&quot;&gt;qu&amp;iacute;mica&lt;/a&gt;&amp;nbsp;y otras ciencias tanto para el desarrollo de tecnolog&amp;iacute;as, como para el manejo eficiente y productivo de recursos y fuerzas de la naturaleza en beneficio de la sociedad. La ingenier&amp;iacute;a es una actividad que transforma el conocimiento en algo pr&amp;aacute;ctico.&lt;/p&gt;\r\n', 'P', '', 'ANTIOQUIA', 'MEDELLIN', '2', '2017-04-15', '0000-00-00', '1234', '1000000'),
(15, '900454659-0', '', 'Mesero', 'Lunes a Viernes de 1 a ', 'Mesero Ãgil', 'Mesero', 'P', '', 'ANTIOQUIA', 'MEDELLIN', '1', '2017-04-17', '0000-00-00', '888', '850000'),
(16, '830502892', '', 'Cocinera', 'Lunes a SÃ¡bado de 6 a ', 'REstaurante profesional requiere Cocinera con experiencia', 'Que cocine', 'P', '', 'CUNDINAMARCA', 'FUSAGASUGA', '1', '2017-04-25', '0000-00-00', '1234', '700000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta_vacante`
--

CREATE TABLE `oferta_vacante` (
  `id` int(4) NOT NULL,
  `oferta` varchar(5) DEFAULT NULL,
  `vacante` varchar(30) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `salario` int(100) DEFAULT NULL,
  `cargo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `oferta_vacante`
--

INSERT INTO `oferta_vacante` (`id`, `oferta`, `vacante`, `fecha_inicio`, `fecha_fin`, `salario`, `cargo`) VALUES
(27, '11', '82392523', '2017-05-01', '2017-11-30', 850000, ''),
(28, '13', '1069753420', '2017-05-01', '2017-10-31', 5000000, 'Ingeniero de Sistemas'),
(29, '13', '1022348236', '2017-05-01', '2017-10-31', 5000000, '');

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
  `activation_code` varchar(300) DEFAULT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`documento`, `tipo_documento`, `departamento`, `ciudad`, `direccion`, `foto`, `password`, `verificado`, `rol`, `activation_code`, `telefono`, `correo`, `image`, `name_image`) VALUES
('1022348236', 'CC', 'CUNDINAMARCA', 'FUSAGASUGA', '', '', '05a83d1fc495a3575926f95c985a5c604493f7f2', 'Y', 'P', 'b2d91f65499d6666dd8e69cdb9d47dbd', '', '', './images/Person/ab-testing_icon-icons.com_53768.png', 'ab-testing_icon-icons.com_53768.png'),
('1048850076', 'CC', 'Boyaca', 'Garagoa', 'Calle 7 No 9-29', 'http//fotomania.com', 'b674a43d6710dc308bfd53404d88d0b5f46edf15', 'Y', 'P', NULL, '', '', './images/Person/person.png', 'person.png'),
('1069753420', 'CC', 'ANTIOQUIA', 'MEDELLIN', '', '', 'f72db6d4c1771e2cf0ef0e83fc4b85402363b08f', 'Y', 'P', 'cdd01d01d1d3a31fd127c758aac7164e', '', '', './images/Person/ab-testing_icon-icons.com_53768.png', 'ab-testing_icon-icons.com_53768.png'),
('111111111-9', 'NI', 'Cundinamarca', 'Bogota', 'calle 179 -8-32', 'http//asdasdad.com', 'b674a43d6710dc308bfd53404d88d0b5f46edf15', 'Y', 'E', NULL, '', '', './images/Company/empresa.png', 'empresa.png'),
('121323123-9', 'NI', 'Cundinamarca', 'Fusagasuga', 'Diagonal 24c No 64a - 33', 'ttp//asdasdad.co', '4fc36204d034036de87815eb8ff296791f50d241', 'N', 'E', NULL, '8281483', 'info@unicundi.edu.co', './images/Company/logo-universidad-de-cundinamarca.png', 'logo-universidad-de-cundinamarca.png'),
('123', 'CC', '', '', 'Diagonal 24c No 64a - 33', '', 'b674a43d6710dc308bfd53404d88d0b5f46edf15', 'Y', 'A', NULL, '', 'info@unicundi.edu.co', './images/Company/logo-universidad-de-cundinamarca.png', 'logo-universidad-de-cundinamarca.png'),
('1234', 'CC', '', '', '', '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Y', 'C', NULL, '', '', '', ''),
('12345678', 'NI', 'CUNDINAMARCA', 'FUSAGASUGA', 'Centro Comercial Centro Fusa', '', '6f15e9956df003b0a6c2904de48cc7649818a3d9', 'Y', 'E', 'fac88b217885d8a5149cdb9dd4f55b52', '8862178', 'increditos@increditos.com', './images/Company/profesor_icon.png', 'profesor_icon.png'),
('5555555555', 'CC', '', '', '', '', 'b674a43d6710dc308bfd53404d88d0b5f46edf15', 'Y', 'P', '947bb5543a06e7d41e228af0f8cf718f', '', '', './images/Person/person.png', 'person.png'),
('666', 'CC', '', '', '', '', 'b674a43d6710dc308bfd53404d88d0b5f46edf15', 'N', 'P', 'ad3969c5ae45e36744b26fa73a325616', '', '', './images/Person/person.png', 'person.png'),
('666-6', 'NI', '', '', '', '', 'b674a43d6710dc308bfd53404d88d0b5f46edf15', 'Y', 'E', '1afc9921405d0314cbc4461da095470c', '', '', '', ''),
('82392523', 'CC', 'CUNDINAMARCA', 'FUSAGASUGA', '', '', '7e2d1cef646eefde436360c2eb6adbc987634830', 'Y', 'P', 'b450bcaa5abe2796e5103e1bcf2d7482', '', '', './images/Person/Emoji_u1f4a1.svg.png', 'Emoji_u1f4a1.svg.png'),
('82393121', 'CC', 'Cundinamarca', '', 'Comuneros', '', '2c48bb44fc40f8b90f2c3fc99296a254696eed5f', 'Y', 'P', NULL, '', '', './images/Person/person.png', 'person.png'),
('830502892', 'NI', '', '', 'Girardot', '', 'f72db6d4c1771e2cf0ef0e83fc4b85402363b08f', 'Y', 'E', '88b41c664b2922dd304ff8e048bca95d', '8281483', 'info@suncomputer.com', './images/Company/Cc.logo.circle.svg.png', 'Cc.logo.circle.svg.png'),
('888', 'CC', 'cundinamarca', '', '', '', 'b674a43d6710dc308bfd53404d88d0b5f46edf15', 'Y', 'C', NULL, '', '', '', ''),
('900454659-0', 'NI', 'ANTIOQUIA', 'MEDELLIN', 'Centro', '', 'be0fe4650e71ee0ac16aa121f51e89305ae82a5c', 'Y', 'E', '68bf8df0da86503e9aecdc9bda8c60e5', '8862178', '', './images/Company/empresa.png', 'empresa.png');

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
('1022348236', 'yeison@yopmail.com'),
('1048850076', 'diego.fc.1@hotmail.com'),
('1069753420', 'nietoandres03@gmail.com'),
('5555555555', 'juanhernandez@gmail.com'),
('666', 'robledo@asdasd.com'),
('666-6', 'ASDASDAS@ASDASD.COM'),
('82392523', 'carlosguampe@gmail.com'),
('830502892', 'nietoandres03@gmail.com');

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
  `vehiculo` varchar(1) NOT NULL,
  `Profesion` varchar(100) NOT NULL,
  `Estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona_natural`
--

INSERT INTO `persona_natural` (`documento`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `estado_civil`, `licencia_conduccion`, `vehiculo`, `Profesion`, `Estado`) VALUES
('1022348236', 'Yeison', 'Andres', 'Ariza', 'Gutierrez', '', '', '', '', 'Contratado'),
('1048850076', 'Diego', 'Alejandro', 'Franco', 'Cuesta', 'S', 'B1', 'Y', '', ''),
('1069753420', 'Andres', 'Felipe', 'Nieto', 'Porras', '', '', '', 'Ingeniero de Sistemas', 'Contratado'),
('123', 'Andres', 'Felipe', 'Nieto', 'Porras', 'S', '5', 'Y', '', ''),
('1234', 'Andres', '', 'Nieto', '', '', '', '', '', ''),
('5555555555', 'juan', '', 'hernandez', '', '', '', '', '', ''),
('666', 'juan', '', 'robledo', '', '', '', '', '', ''),
('82392523', 'Carlos', 'Alberto', 'Guampe', 'PeÃ±a', '', '', '', '', 'Contratado'),
('82393121', 'Carlos', 'Andres', 'Nieto', 'Valero', '', '', '', 'Ingeniero Agronomo', ''),
('888', 'Juan', '', 'martinez', '', '', '', '', '', '');

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

--
-- Volcado de datos para la tabla `persona_natural_oferta`
--

INSERT INTO `persona_natural_oferta` (`documento`, `id_oferta`, `fecha_aplicaciom`) VALUES
('1022348236', 3, '2017-04-18'),
('1048850076', 12, '2016-11-28'),
('1069753420', 3, '2017-04-14');

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
('1022348236', '3011234567'),
('1048850076', '3013113291'),
('1048850076', '3204485630'),
('82392523', '3045317663'),
('830502892', '3043380660');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reference`
--

CREATE TABLE `reference` (
  `id` int(3) NOT NULL,
  `documento` varchar(30) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `profesion` varchar(30) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reference`
--

INSERT INTO `reference` (`id`, `documento`, `name`, `profesion`, `telefono`) VALUES
(2, '1048850076', 'Carlos Alberto Guampe', 'Administrador de Empresas', '3043380660'),
(3, '82393121', 'Carlos Alberto Guampe', 'Administrador de Empresas', '3045317663'),
(4, '82393121', 'Sandra Porras', 'Contadora', '3142942743'),
(5, '82393121', 'Felipe Nieto', 'Ing Sistemas', '3043380660');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skills`
--

CREATE TABLE `skills` (
  `id` int(3) NOT NULL,
  `documento` varchar(30) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `skills`
--

INSERT INTO `skills` (`id`, `documento`, `nombre`, `descripcion`) VALUES
(2, '1048850076', 'Expresividad', 'Tengo Buen Dominio Del PÃºblico.'),
(3, '82393121', 'Expresion', 'Soy Muy Bueno Hablando.'),
(4, '123', 'Escribir', 'Soy Muy Bueno'),
(5, '123', 'Escribir', 'Soy Muy Bueno'),
(6, '82393121', 'Escribir', 'Soy Muy Bueno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

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
-- Indices de la tabla `nomina`
--
ALTER TABLE `nomina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id_oferta`);

--
-- Indices de la tabla `oferta_vacante`
--
ALTER TABLE `oferta_vacante`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `estudios`
--
ALTER TABLE `estudios`
  MODIFY `id_estudio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `exp_laboral`
--
ALTER TABLE `exp_laboral`
  MODIFY `id_exp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id_idioma` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `nomina`
--
ALTER TABLE `nomina`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id_oferta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `oferta_vacante`
--
ALTER TABLE `oferta_vacante`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
