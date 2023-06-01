-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2023 at 12:38 PM
-- Server version: 10.3.37-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `piedraspatagonia_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `piedras_admin`
--

CREATE TABLE `piedras_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_user` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `piedras_admin`
--

INSERT INTO `piedras_admin` (`admin_id`, `admin_user`, `admin_pass`) VALUES
(2, 'info@piedraspatagonia.com.ar', 'murete1242');

-- --------------------------------------------------------

--
-- Table structure for table `piedras_categorias`
--

CREATE TABLE `piedras_categorias` (
  `categoria_id` int(2) NOT NULL,
  `categoria_nombre` varchar(150) NOT NULL,
  `categoria_linea` varchar(200) DEFAULT NULL,
  `categoria_imagen` varchar(200) DEFAULT NULL,
  `categoria_orden` int(11) DEFAULT 99
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `piedras_categorias`
--

INSERT INTO `piedras_categorias` (`categoria_id`, `categoria_nombre`, `categoria_linea`, `categoria_imagen`, `categoria_orden`) VALUES
(13, 'Piedras Lajas', '', '890cWEBM-LAJASANJUAN1.jpg', 4),
(14, 'Muretes', '', '9e2fWEBM-MURETESANJUAN3.jpg', 2),
(15, 'Piedras de Jardin', '', '0a75WEBM-PIEDRASDERIO2.jpg', 5),
(16, 'Placas Encastrables', '', '6846WEBM-PIEDRAOXIDO1.jpg', 3),
(18, 'Pórfidos', '', '9af8WEBM-PORFIDO10X101.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `piedras_imagenes`
--

CREATE TABLE `piedras_imagenes` (
  `imagenes_id` int(2) NOT NULL,
  `imagenes_nombre` varchar(150) NOT NULL,
  `producto_id` int(2) NOT NULL,
  `imagenes_estado` int(1) DEFAULT 1,
  `img_order` int(11) DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `piedras_imagenes`
--

INSERT INTO `piedras_imagenes` (`imagenes_id`, `imagenes_nombre`, `producto_id`, `imagenes_estado`, `img_order`) VALUES
(45, '2b8fportada-piedras-lajas.jpg', 39, 1, 10),
(46, '2b8fportada-placas-encastrables.jpg', 39, 1, 10),
(47, '2b8fportada-profidos.jpg', 39, 1, 10),
(48, 'efbeportada-muretes.jpg', 39, 1, 10),
(49, '9c75portada-muretes.jpg', 40, 1, 10),
(50, '24f8portada-piedras-jardin.jpg', 40, 1, 10),
(51, '1b9cM-MURETE SAN JUAN 2.jpg', 42, 1, 10),
(52, 'b28aWEBM-PORFIDO10X102.jpg', 47, 1, 10),
(53, '2332WEBM-PORFIDO10X103.jpg', 47, 1, 10),
(54, '2332WEBM-PORFIDO10X104.jpg', 47, 1, 10),
(55, '80efWEBM-PORFIDO10X105.jpg', 47, 1, 10),
(56, '80efWEBM-PORFIDO10X106.jpg', 47, 1, 10),
(57, 'd09bWEBM-PORFIDOPRENSA1.jpg', 48, 1, 10),
(58, 'd09bWEBM-PORFIDOPRENSA2.jpg', 48, 1, 10),
(59, 'd09bWEBM-PORFIDOPRENSA3.jpg', 48, 1, 10),
(60, '9ba6WEBM-PORFIDOPRENSA4.jpg', 48, 1, 10),
(61, '9ba6WEBM-PORFIDOPRENSA5.jpg', 48, 1, 10),
(62, '6a0dWEBM-PORFIDOPRENSA1.jpg', 66, 1, 10),
(63, '6a0dWEBM-PORFIDOPRENSA2.jpg', 66, 1, 10),
(64, '6a0dWEBM-PORFIDOPRENSA3.jpg', 66, 1, 10),
(65, '2417WEBM-PORFIDOPRENSA4.jpg', 66, 1, 10),
(66, '2417WEBM-PORFIDOPRENSA5.jpg', 66, 1, 10),
(67, 'bf5dWEBM-PORFIDO10X101.jpg', 67, 1, 10),
(68, 'bf5dWEBM-PORFIDO10X102.jpg', 67, 1, 10),
(69, 'bf5dWEBM-PORFIDO10X103.jpg', 67, 1, 10),
(70, 'bf5dWEBM-PORFIDO10X104.jpg', 67, 1, 10),
(71, 'cd6fWEBM-PORFIDO10X105.jpg', 67, 1, 10),
(72, 'cd6fWEBM-PORFIDO10X106.jpg', 67, 1, 10),
(73, 'fbe9WEBM-PORFIDO10X102.jpg', 67, 1, 10),
(74, 'fbe9WEBM-PORFIDO10X103.jpg', 67, 1, 10),
(75, 'fbe9WEBM-PORFIDO10X104.jpg', 67, 1, 10),
(76, 'fbe9WEBM-PORFIDO10X105.jpg', 67, 1, 10),
(77, 'fbe9WEBM-PORFIDO10X106.jpg', 67, 1, 10),
(78, 'b2cfWEBM-PORFIDO10X102.jpg', 68, 1, 1),
(79, 'c10bWEBM-PORFIDO10X103.jpg', 68, 1, 3),
(80, 'c10bWEBM-PORFIDO10X104.jpg', 68, 1, 4),
(82, 'c10bWEBM-PORFIDO10X106.jpg', 68, 1, 5),
(83, '259bWEBM-PORFIDOPRENSA1.jpg', 69, 1, 10),
(84, '3ea2WEBM-PORFIDOPRENSA3.jpg', 69, 1, 10),
(85, '3ea2WEBM-PORFIDOPRENSA4.jpg', 69, 1, 10),
(86, '3ea2WEBM-PORFIDOPRENSA5.jpg', 69, 1, 10),
(87, '0d82WEBM-PORFIDODISCO2.jpg', 70, 1, 10),
(88, '0d82WEBM-PORFIDODISCO3.jpg', 70, 1, 10),
(89, '0d82WEBM-PORFIDODISCO4.jpg', 70, 1, 10),
(90, '699bWEBM-PORFIDODISCO1.jpg', 71, 1, 10),
(92, '699bWEBM-PORFIDODISCO4.jpg', 71, 1, 10),
(93, 'f57dWEBM-PORFIDOIRREGULAR2.jpg', 50, 1, 10),
(94, 'f57dWEBM-PORFIDOIRREGULAR3.jpg', 50, 1, 10),
(95, '8921WEBM-MURETEPORFIDO2.jpg', 72, 1, 10),
(96, 'a7d0WEBM-MURETEPORFIDO3.jpg', 72, 1, 10),
(97, 'ff37WEBM-GRANZA1.jpg', 73, 1, 2),
(98, '9414WEBM-GRANZA3.jpg', 73, 1, 4),
(99, '3aa6WEBM-GRANZA2.jpg', 73, 1, 1),
(100, 'bff7WEBM-GRANZA4.jpg', 73, 1, 3),
(101, 'e238WEBM-PIEDRASDERIO2.jpg', 74, 1, 10),
(102, '9434WEBM-PIEDRADERIO1.jpg', 74, 1, 10),
(103, '9434WEBM-PIEDRADERIO2.jpg', 74, 1, 10),
(105, '1e3fWEBM-PIEDRADERIO1.jpg', 75, 1, 10),
(106, '1e3fWEBM-PIEDRADERIO2.jpg', 75, 1, 10),
(113, '10c4WEBM-SANJUANCORTADA2.jpg', 100, 0, 3),
(114, 'd7e5WEBM-SANJUANCORTADA5.jpg', 100, 0, 5),
(115, '88a7WEBM-SANJUANCORTADA4.jpg', 100, 0, 2),
(116, 'b564WEBM-SANJUANCORTADA3.jpg', 100, 0, 4),
(119, 'd61fWEBM-MURETEBARILOCHE2.jpg', 77, 0, 1),
(120, '6b0bWEBM-MURETEBARILOCHE3.jpg', 77, 0, 2),
(121, 'a5f4WEBM-MURETEBARILOCHE4.jpg', 77, 0, 3),
(122, 'ee26WEBM-MURETEBARILOCHE5.jpg', 77, 0, 4),
(123, '5fa1WEBM-MURETEBARILOCHE6.jpg', 77, 0, 5),
(124, '9ff7WEBM-MURETESANLUIS2.jpg', 90, 0, 1),
(125, 'e308WEBM-MURETESANLUIS3.jpg', 90, 0, 2),
(126, '05bdWEBM-MURETESANLUIS4.jpg', 90, 0, 3),
(128, 'd994WEBM-MURETESANLUIS6.jpg', 90, 0, 5),
(129, 'e098WEBM-MURETESANJUAN3.jpg', 76, 0, 1),
(130, '2affWEBM-MURETESANJUAN4.jpg', 76, 0, 2),
(132, 'b88dWEBM-MURETESANJUAN1.jpg', 76, 0, 4),
(133, 'e4b9WEBM-MURETESANJUAN6.jpg', 76, 0, 5),
(134, '3f92WEBM-MURETEBRASIL6.jpg', 78, 0, 1),
(135, '1f72WEBM-MURETEBRASIL2.jpg', 78, 0, 2),
(138, '42e5WEBM-ANDESCREMAOXIDADA.jpg', 101, 0, 1),
(139, '16eeWEBM-ANDESCREMAOXIDADA2.jpg', 101, 0, 2),
(140, 'efacWEBM-SERRANACOBRIZA2.jpg', 83, 0, 1),
(141, 'c7a4WEBM-SERRANACOBRIZA3.jpg', 83, 0, 2),
(142, 'f042WEBM-SERRANAOXIDO2.jpg', 82, 0, 1),
(143, '9b22WEBM-LAJASANJUAN2.jpg', 91, 0, 2),
(144, 'c0aaWEBM-LAJASANJUAN3.jpg', 91, 0, 1),
(145, 'f342WEBM-LAJASANJUAN4.jpg', 91, 0, 3),
(147, 'e8a8WEBM-BARILOCHECORTADA2.jpg', 93, 0, 1),
(148, 'd3e1WEBM-BARILOCHECORTADA3.jpg', 93, 0, 2),
(149, '2c09WEBM-BARILOCHECORTADA4.jpg', 93, 0, 3),
(150, '6b80WEBM-BARILOCHECORTADA5.jpg', 93, 0, 4),
(151, '0b0cWEBM-BARILOCHECORTADA6.jpg', 93, 0, 5),
(152, 'a27bWEBM-SANTOTOME2.jpg', 95, 0, 1),
(153, '0565WEBM-SANTOTOME3.jpg', 95, 0, 2),
(154, 'ae4fWEBM-MIRACEMA3.jpg', 96, 0, 1),
(155, '9dffWEBM-MIRACEMA2.jpg', 96, 0, 2),
(156, '5947WEBM-ARDOSIA4.jpg', 97, 0, 2),
(157, 'fb30WEBM-ARDOSIA5.jpg', 97, 0, 1),
(158, '9f25WEBM-ARDOSIA3.jpg', 97, 0, 3),
(159, '2a28WEBM-ARDOSIA1.jpg', 97, 0, 4),
(160, 'b49aWEBM-MORISCA4.jpg', 98, 0, 1),
(161, '4804WEBM-MORISCA1.jpg', 98, 0, 2),
(162, 'a339WEBM-MORISCA2.jpg', 98, 0, 3),
(163, '6c79WEBM-MORISCA5.jpg', 98, 0, 4),
(164, '196bWEBM-PIEDRAFLEXIBLE2.jpg', 99, 0, 1),
(165, 'ae81WEBM-PIEDRAFLEXIBLE3.jpg', 99, 0, 2),
(166, '8800WEBM-PIEDRAFLEXIBLE4.jpg', 99, 0, 3),
(167, 'fbb9WEBM-PIEDRAFLEXIBLE5.jpg', 99, 0, 4),
(168, '88f7WEBM-PIEDRAFLEXIBLE6.jpg', 99, 0, 5),
(169, '3857WEBM-PIEDRASAHARA7.jpg', 99, 0, 6),
(170, '9862WEBM-PIEDRAOXIDO2.jpg', 86, 0, 1),
(171, 'f38bWEBM-PIEDRAOXIDO3.jpg', 86, 0, 2),
(172, '7997WEBM-PIEDRAOXIDO1.jpg', 79, 0, 1),
(173, '626aWEBM-PIEDRAOXIDO3.jpg', 79, 0, 2),
(174, '2721WEBM-PIEDRABLANCA2.jpg', 87, 0, 1),
(175, '1c3cWEBM-PIEDRABLANCA3.jpg', 87, 0, 2),
(176, 'f55cWEBM-PIEDRABLANCA5.jpg', 87, 0, 3),
(177, '9c8cWEBM-PIEDRASBLANCA4.jpg', 87, 0, 4),
(178, 'fd65WEBM-PORFIDOIRREGULAR2.jpg', 88, 0, 1),
(179, '1aebWEBM-PORFIDOIRREGULAR3.jpg', 88, 0, 2),
(180, '5fe1WEBM-PORFIDO10X105.jpg', 68, 0, 2),
(181, 'c1a9WEBM-SERRANAMARFIL2.jpg', 80, 0, 1),
(182, '81ddWEBM-SERRANAMARFIL3.jpg', 80, 0, 2),
(183, 'ac1aWEBM-SERRANAMARFIL4.jpg', 80, 0, 3),
(184, '0094WEBM-SERRANAMEDITERRANEA2.jpg', 81, 0, 1),
(185, '682eWEBM-MURETEPORFIDO3.jpg', 89, 0, 1),
(186, '3532WEBM-MURETEPORFIDO1.jpg', 89, 0, 2),
(187, '82d7WEBM-PORFIDODISCO2.jpg', 71, 0, 11),
(188, 'c14aWEBM-MURETESANJUAN5.jpg', 76, 0, 6),
(189, '713fWEBM-MURETESANLUIS5.jpg', 90, 0, 6),
(190, '7abfWENM-MURETEBRASIL3.jpg', 78, 0, 3),
(191, 'ab01WEBM-LAJASANLUIS1.jpg', 92, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `piedras_productos`
--

CREATE TABLE `piedras_productos` (
  `producto_id` int(3) NOT NULL,
  `producto_nombre` varchar(150) NOT NULL,
  `producto_subtitulo` varchar(500) DEFAULT NULL,
  `producto_descripcion` text NOT NULL,
  `producto_imagen` varchar(200) NOT NULL DEFAULT '',
  `producto_destacado` int(1) NOT NULL,
  `producto_categoria` int(11) NOT NULL,
  `producto_subcategoria` int(11) NOT NULL,
  `producto_orden` int(2) NOT NULL,
  `producto_estado` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `piedras_productos`
--

INSERT INTO `piedras_productos` (`producto_id`, `producto_nombre`, `producto_subtitulo`, `producto_descripcion`, `producto_imagen`, `producto_destacado`, `producto_categoria`, `producto_subcategoria`, `producto_orden`, `producto_estado`) VALUES
(68, 'Pórfido 10x10', 'Adoquines de Pórfido Patagónico para colocación en abanico o recto.', '<p>Pórfido Patagónico 10x10 utilizado para revestimiento de piso y pared.</p><p>Colocación en forma de abanico o recta.</p><p>Tamaño 10x10 espesor variable de 2 a 4 cm.</p><p>Colores mixtos gris/oxido/rojizo.</p>', 'b94eWEBM-PORFIDO10X101.jpg', 0, 18, -1, 21, '1'),
(69, 'Pórfidos corte a prensa', 'Baldosones de Pórfido Patagónico con bordes rustico.', '<p>Baldosones de Pórfido Patagónico cortado a prensa, utilizado para revestimiento de piso y pared.</p><p>Colocación: no requiere de mano de obra especializada.</p><p>Medidas disponibles</p><p>&nbsp; &nbsp; Baldosa de 10 cm. de alto y largos varios.</p><p>&nbsp; &nbsp; Baldosa de 15 cm. de alto y largos varios.</p><p>&nbsp; &nbsp; Baldosa de 20 cm. de alto y largos varios.</p><p>&nbsp; &nbsp; Baldosa de 25 cm. de alto y largos varios.</p><p>&nbsp; &nbsp; Baldosa de 30 cm. de alto y largos varios.</p><p>Bordes rústicos cortados a prensa.</p><p>Espesor variable de 3 a 6 cm.</p><p>Colores mixtos gris/oxido/rojizo.</p>', 'ea07WEBM-PORFIDOPRENSA2.jpg', 0, 18, -1, 22, '1'),
(71, 'Pórfidos corte a disco', 'Baldosones de Pórfido Patagónico con bordes lisos. ', '&lt;p&gt;Baldosones de P&oacute;rfido Patag&oacute;nico cortado a disco, utilizado para revestimiento de piso y pared.&lt;/p&gt;&lt;p&gt;Colocaci&oacute;n: no requiere de mano de obra especializada.&lt;/p&gt;&lt;p&gt;Medidas disponibles&lt;/p&gt;&lt;p&gt;&nbsp; &nbsp; &nbsp; Baldosa de 10 cm. de alto y largos varios.&lt;/p&gt;&lt;p&gt;&nbsp; &nbsp; &nbsp; Baldosa de 15 cm. de alto y largos varios.&lt;/p&gt;&lt;p&gt;&nbsp; &nbsp; &nbsp; Baldosa de 20 cm. de alto y largos varios.&lt;/p&gt;&lt;p&gt;&nbsp; &nbsp; &nbsp; Baldosa de 25 cm. de alto y largos varios.&lt;/p&gt;&lt;p&gt;&nbsp; &nbsp; &nbsp; Baldosa de 30 cm. de alto y largos varios.&lt;/p&gt;&lt;p&gt;Bordes lisos cortados a disco.&lt;/p&gt;&lt;p&gt;Espesor variable de 2 a 5 cm.&lt;/p&gt;&lt;p&gt;Colores mixtos gris/oxido/rojizo.&lt;/p&gt;', '2293WEBM-PORFIDODISCO3.jpg', 0, 18, -1, 23, '1'),
(72, 'Murete de Pórfido', 'Piedra natural para revestimiento de pared interior y exterior. En tono gris/morado.', '<p>Piedra natural para revestimiento de pared interior y exterior.</p><p>Espesor variable de 6 a 10 cm.</p><p>Largos y alto variable</p><p>Colores variados gris/morado.</p>', '0a46WEBM-MURETEPORFIDO1.jpg', 0, 14, -1, 29, '1'),
(73, 'Granza Mar Del Plata', 'Piedra partida Mar Del Plata, ideal para decoración de canteros y entradas de autos.', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Piedra partida Mar Del Plata, ideal para decoraci&oacute;n de canteros y entradas de autos.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Colores mixtos: Blanco/beige/arena.&lt;/p&gt;&lt;p&gt;Tama&ntilde;o de la piedra de 1 a 4 cm.&lt;/p&gt;&lt;p&gt;Presentaci&oacute;n: bolsas de 30 kg&lt;/p&gt;&lt;p&gt;Con 2 bolsas se cubre 1 m2 con un espesor de 2 a 3 cm.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;br&gt;&lt;/p&gt;', 'ea84WEBM-GRANZA1.jpg', 0, 15, -1, 19, '1'),
(75, 'Piedras de rio', 'Piedra de rio - Piedra plato', '<p>Piedra de rio/plato, ideal para decoración de jardines y canteros.</p><p><br></p><p>Colores mixtos: grises/morados/blancos.</p><p>Tamaño de la piedra de 4 a 20 cm.</p><p>Presentación:&nbsp;</p><p> Bolsas de 25 kg.</p><p>Bolsones 1000 kg.</p>', '0834WEBM-PIEDRASDERIO2.jpg', 0, 15, -1, 20, '1'),
(76, 'Murete San Juan', 'Piedra natural para revestimiento de pared interior y exterior. En tonos óxidos/cobrizos.', '&lt;p&gt;Piedra natural para revestimiento de pared interior y exterior.&lt;/p&gt;&lt;p&gt;Espesor variable de 6 a 10 cm.&lt;/p&gt;&lt;p&gt;Largos y alto variable&lt;/p&gt;&lt;p&gt;Colores variados oxido/cobrizos.&lt;/p&gt;', '80afWEBM-MURETESANJUAN2.jpg', 0, 14, -1, 26, '1'),
(77, 'Murete Bariloche', 'Piedra natural para revestimientos de interior y exterior. En tonos Beige/crema/morado.', '<p>Piedra natural para revestimiento de pared interior y exterior.</p><p>Espesor variable de 6 a 10 cm.</p><p>Largos y alto variable</p><p>Colores variados Beige/crema/morado.</p>', '31feWEBM-MURETEBARILOCHE1.jpg', 0, 14, -1, 28, '1'),
(78, 'Murete Brasil', 'Piedra natural para revestimiento de pared interior y exterior. En tono marfil/dorado.', '&lt;p&gt;Piedra natural para revestimiento de pared interior y exterior.&lt;/p&gt;&lt;p&gt;Espesor variable de 3 a 6 cm.&lt;/p&gt;&lt;p&gt;Largos y alto variable&lt;/p&gt;&lt;p&gt;Colores variados marfil/dorado.&lt;/p&gt;', '1520WEBM-MURETEBRASIL1.jpg', 0, 14, -1, 31, '1'),
(79, 'Piedra Oxido en Placas', 'Piedra natural en placas, para revestimiento interior y exterior. En tonos óxido/negro.', '<p>Piedra natural en placas, para revestimiento de pared interior y exterior.</p><p>Fácil colocación, no se genera desperdicio.</p><p>Placas de 15x60 cm.</p><p>Espesor de 1 a 2 cm.</p><p>colores variados oxido/negro.</p><p><br></p><p><br></p>', '715aWEBM-PIEDRAOXIDO2.jpg', 0, 14, -1, 30, '1'),
(80, 'Serrana Marfil', 'Revestimiento en placas símil piedra Ecostone.', '<p>Revestimiento de pared símil piedra en placas, para uso en interior y exterior.</p><p>Fácil colocación, no se genera desperdicio.&nbsp;</p><p>Medidas de la placa 14 x 37 cm.</p><p>Espesor 2 a 3 cm.</p><p>Presentación: paquetes de 5 placas (0.26 m2)</p>', 'b3feWEBM-SERRANAMARFIL1.jpg', 0, 16, -1, 12, '1'),
(81, 'Serrana Mediterranea', 'Revestimiento en placas símil piedra Ecostone.', '<p>Revestimiento de pared símil piedra en placas, para uso en interior y exterior.</p><p>Fácil colocación, no se genera desperdicio.&nbsp;</p><p>Medidas de la placa 14 x 37 cm.</p><p>Espesor 2 a 3 cm.</p><p>Presentación: paquetes de 5 placas (0.26 m2)</p>', '5ef5WEBM-SERRANAMEDITERRANEA1.jpg', 0, 16, -1, 15, '1'),
(82, 'Serrana Oxido', 'Revestimiento en placas símil piedra Ecostone.', '<p>Revestimiento de pared símil piedra en placas, para uso en interior y exterior.</p><p>Fácil colocación, no se genera desperdicio.&nbsp;</p><p>Medidas de la placa 14 x 37 cm.</p><p>Espesor 2 a 3 cm.</p><p>Presentación: paquetes de 5 placas (0.26 m2)</p>', 'e9c6WEBM-SERRANAOXIDO.jpg', 0, 16, -1, 14, '1'),
(83, 'Serrana Cobriza', 'Revestimiento en placas símil piedra Ecostone.', '<p>Revestimiento de pared símil piedra en placas, para uso en interior y exterior.</p><p>Fácil colocación, no se genera desperdicio.&nbsp;</p><p>Medidas de la placa 14 x 37 cm.</p><p>Espesor 2 a 3 cm.</p><p>Presentación: paquetes de 5 placas (0.26 m2)</p>', 'a6a5WEBM-SERRANACOBRIZA1.jpg', 0, 16, -1, 13, '1'),
(84, 'Caliza Cobriza', 'Revestimiento en placas símil piedra Ecostone.', '<p>Revestimiento de pared símil piedra en placas, para uso en interior y exterior.</p><p>Fácil colocación, no se genera desperdicio.&nbsp;</p><p>Medidas de la placa 14 x 37 cm.</p><p>Espesor 2 a 3 cm.</p><p>Presentación: paquetes de 5 placas (0.26 m2)</p>', '8ed8WEBM-CALIZACOBRIZA.jpg', 0, 16, -1, 16, '1'),
(85, 'Caliza Crema', 'Revestimiento en placas símil piedra Ecostone.', '<p>Revestimiento de pared símil piedra en placas, para uso en interior y exterior.</p><p>Fácil colocación, no se genera desperdicio.&nbsp;</p><p>Medidas de la placa 14 x 37 cm.</p><p>Espesor 2 a 3 cm.</p><p>Presentación: paquetes de 5 placas (0.26 m2)</p>', 'c1dcWEBM-CALIZACREMA_3404.jpg', 0, 16, -1, 17, '1'),
(86, 'Piedra Oxido', 'Piedra oxido natural en placas de 15x60.', '<p>Piedra natural en placas, para revestimiento de pared interior y exterior.</p><p>Fácil colocación, no se genera desperdicio.</p><p>Placas de 15x60 cm.</p><p>Espesor de 1 a 2 cm.</p><p>colores variados oxido/negro.</p>', '65e4WEBM-PIEDRAOXIDO1.jpg', 0, 16, -1, 11, '1'),
(87, 'Piedras Blancas', 'Piedras de mármol blanco redondeadas.', '&lt;p&gt;Piedra blanca redondeada de m&aacute;rmol, ideal para decoraci&oacute;n de canteros, jardines, entradas de autos.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Presentaci&oacute;n: bolsas de 25 kg&lt;/p&gt;&lt;p&gt;Tama&ntilde;os disponibles:&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Chicas 2 a 4 cm.&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Medianas 4 a 8 cm.&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Grandes 6 a 12 cm&lt;/p&gt;&lt;p&gt;Con 3 bolsas se cubre 1 m2 con un espesor de 2 a 3 cm.&lt;/p&gt;', 'b521WEBM-PIEDRABLANCA1.jpg', 0, 15, -1, 18, '1'),
(88, 'Pórfido Irregular', 'Laja de Pórfido irregular para revestimientos de piso y pared', '&lt;p&gt;Laja irregular de P&oacute;rfido Patag&oacute;nico, utilizada para revestimiento de piso y pared, tanto en interior como en exterior.&lt;/p&gt;&lt;p&gt;Tama&ntilde;os irregulares de bordes r&uacute;sticos.&lt;/p&gt;&lt;p&gt;Espesor variable de 2 a 4 cm.&lt;/p&gt;&lt;p&gt;Colores mixtos gris/rojizo.&amp;nbsp;&lt;/p&gt;', '077bWEBM-PORFIDOIRREGULAR1.jpg', 0, 18, -1, 24, '1'),
(89, 'Murete de Pórfido', 'Piedra natural para revestimiento de pared interior y exterior. En tonos gris/morado.', '<p>Piedra natural para revestimiento de pared interior y exterior.</p><p>Espesor variable de 6 a 10 cm.</p><p>Largos y alto variable</p><p>Colores variados gris/morado.</p>', '985fWEBM-MURETEPORFIDO2.jpg', 0, 18, -1, 25, '1'),
(90, 'Murete San luis', 'Piedra natural para revestimientos de interior y exterior. En tonos Grises/negros/óxidos.', '&lt;p&gt;Piedra natural para revestimiento de pared interior y exterior.&lt;/p&gt;&lt;p&gt;Espesor variable de 6 a 10 cm.&lt;/p&gt;&lt;p&gt;Largos y alto variable&lt;/p&gt;&lt;p&gt;Colores variados negro/gris/&oacute;xido.&nbsp;&lt;/p&gt;', '67b5WEBM-MURETESANLUIS1.jpg', 0, 14, -1, 27, '1'),
(91, 'Laja San Juan Irregular', 'Laja irregular para revestimientos de piso y pared, en colores óxido/bronceado/verdoso', '&lt;p&gt;Piedra irregular San juan de bordes rusticos.\r\n\r\nPuede ser utilizada para revestimiento de piso y de pared, tanto en interior como en exterior.&lt;/p&gt;&lt;p&gt;Su espesor es variable de 2 a 4 cm.&amp;nbsp; &lt;/p&gt;&lt;p&gt;Colores mixtos &oacute;xido/bronceado/verdoso.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'cd21WEBM-LAJASANJUAN1.jpg', 0, 13, -1, 1, '1'),
(92, 'Laja San Luis Irregular', 'Laja irregular para revestimiento de piso y pared, color negro.', '&lt;p&gt;Piedra irregular San luis de bordes r&uacute;sticos.&lt;/p&gt;&lt;p&gt;Puede ser utilizada para revestimientos de piso y pared,tanto en interior como en exterior.&lt;/p&gt;&lt;p&gt;Espesores variables de 1 a 3 cm.&lt;/p&gt;&lt;p&gt;Color negro.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'e5e0WEBM-LAJASANLUIS2.jpg', 0, 13, -1, 2, '1'),
(93, 'Bariloche Cortada', 'Piedra natural para revestimiento de pared\r\n', '&lt;p&gt;Piedra natural para revestimiento de pared interior y exterior.&lt;/p&gt;&lt;p&gt;De f&aacute;cil colocaci&oacute;n, no requiere de mano de obra especializada.&lt;/p&gt;&lt;p&gt;Bordes lisos cortados a disco.&lt;/p&gt;&lt;p&gt;Medidas disponibles:&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;10 cm. de alto y largo libre.&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;20 cm. de alto y largo libre.&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;30 cm. de alto y largo libre.&lt;/p&gt;&lt;p&gt;Su espesor es variable de 2 a 4 cm.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Colores mixtos Beige/morado/verdoso.&amp;nbsp;&lt;/p&gt;', '0b63WEBM-BARILOCHECORTADA1.jpg', 0, 13, -1, 3, '1'),
(95, 'Cuarzita Santo Tome', 'Piedra natural beige para revestimiento de pared', '&lt;p&gt;Piedra natural originaria de Brasil. Utilizada para revestimiento de pared interior y exterior.&lt;/p&gt;&lt;p&gt;De f&aacute;cil colocaci&oacute;n, no requiere de mano de obra especializada.&lt;/p&gt;&lt;p&gt;Bordes lisos cortados a disco.&lt;/p&gt;&lt;p&gt;Medida de la placa 18 x 37 cm&lt;/p&gt;&lt;p&gt;Su espesor es de 1 cm. aprox.&lt;br&gt;&lt;/p&gt;&lt;p&gt;Colores mixtos Beige/morado.&amp;nbsp;&lt;/p&gt;', 'd151WEBM-SANTOTOME1.jpg', 0, 13, -1, 4, '1'),
(96, 'Miracema', 'Piedra Natural para revestimiento de piso y pared.', '&lt;p&gt;Piedra natural originaria de Brasil, utilizada para revestimiento de piso y pared, tanto en interior y exterior.&lt;/p&gt;&lt;p&gt;De f&aacute;cil colocaci&oacute;n, no requiere de mano de obra especializada.&lt;/p&gt;&lt;p&gt;Bordes lisos cortados a disco.&lt;/p&gt;&lt;p&gt;Medidas disponibles:&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;11,5 cm. x 11,5 cm&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;11,5 cm. x 23 cm&lt;/p&gt;&lt;p&gt;Su espesor es variable de 1 a 2 cm.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Colores mixtos en la gama de los grises.&amp;nbsp;&lt;/p&gt;', '8ac5WEBM-MIRACEMA1.jpg', 0, 13, -1, 6, '1'),
(97, 'Ardosia', 'Piedra natural para revestimiento de piso y pared.', '&lt;p&gt;Piedra natural originaria de Brasil, utilizada para revestimiento de piso y pared tanto en interior como en exterior.&lt;/p&gt;&lt;p&gt;De f&aacute;cil colocaci&oacute;n, no requiere de mano de obra especializada.&lt;/p&gt;&lt;p&gt;Bordes lisos cortados a disco.&lt;/p&gt;&lt;p&gt;Medidas disponibles:&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;20 x 40 cm.&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;30 x 60 cm.&lt;/p&gt;&lt;p&gt;Su espesor es variable de 1 a 1,5 cm.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Colores mixtos gris con salpicaduras de &oacute;xido.&amp;nbsp;&lt;/p&gt;', '373fWEBM-ARDOSIA2.jpg', 0, 13, -1, 7, '1'),
(98, 'Morisca', 'Piedra natural para revestimiento de pared, color dorado', '&lt;p&gt;Piedra natural originaria de Brasil, utilizada para revestimiento de pared interior y exterior.&lt;/p&gt;&lt;p&gt;De f&aacute;cil colocaci&oacute;n, no requiere de mano de obra especializada.&lt;/p&gt;&lt;p&gt;Bordes lisos cortados a disco.&lt;/p&gt;&lt;p&gt;Medidas disponibles:&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;20 x 40 cm.&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;40 x 60 cm.&lt;/p&gt;&lt;p&gt;Su espesor es variable de 2 a 3 cm.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Color Dorado/oro.&amp;nbsp;&lt;/p&gt;', '5a46WEBM-MORISCA3.jpg', 0, 13, -1, 8, '1'),
(99, 'Piedra Flexible', 'Lamina de piedra natural flexible', '&lt;p&gt;Novedosa lamina de piedra natural en espesor de 2 mm, lo que permite que sea flexible, se puede utilizar tanto para revestimientos en interior como en exterior.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Placas de 61 cm x 122 cm.&lt;/p&gt;&lt;p&gt;Se las puede colocar con pegamento de contacto.&amp;nbsp;&lt;/p&gt;', '0562WEBM-PIEDRAFLEXIBLE1.jpg', 0, 13, -1, 9, '1'),
(100, 'San Juan Cortada', 'Piedra natural cortada para revestimiento de pared, en color bronceado.', '&lt;p&gt;Piedra natural para revestimiento de pared interior y exterior.&lt;/p&gt;&lt;p&gt;De f&aacute;cil colocaci&oacute;n, no requiere de mano de obra especializada.&lt;/p&gt;&lt;p&gt;Bordes lisos cortados a disco.&lt;/p&gt;&lt;p&gt;Medidas disponibles:&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;10 cm. de alto y largo libre.&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;15 cm. de alto y largo libre.&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;20 cm. de alto y largo libre.&lt;/p&gt;&lt;p&gt;Su espesor es variable de 1 a 3 cm.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Colores mixtos &oacute;xido/bronceado/verdoso.&amp;nbsp;&lt;/p&gt;', 'b394WEBM-SANJUANCORTADA1.jpg', 0, 13, -1, 5, '1'),
(101, 'Andes Crema Oxidada', 'Revestimiento en placas símil piedra Ecostone.', '<p>Revestimiento de pared símil piedra en placas, para uso en interior y exterior.</p><p>Fácil colocación, no se genera desperdicio.&nbsp;</p><p>Medidas de la placa 10x50 cm. / 10x30 cm. / 10x20 cm.</p><p>Espesor 2 a 3 cm.</p><p>Presentación: Cajas de 0.5 m2</p>', '82edWEBM-ANDESCREMAOXIDADA1.jpg', 0, 16, -1, 10, '1');

-- --------------------------------------------------------

--
-- Table structure for table `piedras_slider`
--

CREATE TABLE `piedras_slider` (
  `slider_id` int(2) NOT NULL,
  `slider_titulo` varchar(150) NOT NULL,
  `slider_subtitulo` varchar(200) NOT NULL,
  `slider_link` varchar(100) NOT NULL,
  `slider_imagen` varchar(150) NOT NULL,
  `slider_online` varchar(200) NOT NULL,
  `slider_estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `piedras_slider`
--

INSERT INTO `piedras_slider` (`slider_id`, `slider_titulo`, `slider_subtitulo`, `slider_link`, `slider_imagen`, `slider_online`, `slider_estado`) VALUES
(22, '', '', 'http://www.piedraspatagonia.com.ar/productos/categoria/18-porfidos', 'b7fdsliderok1 - copia.jpg', 'Publicado', '1'),
(23, '', '', 'http://www.piedraspatagonia.com.ar/productos/categoria/16-placas-encastrables', '44e7sliderok - copia.jpg', 'Publicado', '1'),
(24, '', '', 'http://www.piedraspatagonia.com.ar/producto/68-porfido-10x10', '0eefsliderok2 - copia.jpg', 'Publicado', '1'),
(25, '', '', 'https://www.piedraspatagonia.com.ar/productos/categoria/14-muretes', 'ff6fad37WEBSLIDER5.jpg', 'No Publicado', '1'),
(26, '', '', 'https://www.piedraspatagonia.com.ar/producto/79-piedra-oxido-en-placas', 'e165sliderok3 - copia.jpg', 'No Publicado', '1'),
(27, '', '', 'https://www.piedraspatagonia.com.ar/producto/76-murete-san-juan', 'd9cdsliderok4 - copia.jpg', 'No Publicado', '1');

-- --------------------------------------------------------

--
-- Table structure for table `piedras_subcategorias`
--

CREATE TABLE `piedras_subcategorias` (
  `subcategoria_id` int(2) NOT NULL,
  `subcategoria_nombre` varchar(150) NOT NULL,
  `categoria_id` int(2) NOT NULL,
  `subcategoria_imagen` varchar(200) DEFAULT NULL,
  `subcategoria_orden` int(11) DEFAULT 99
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `piedras_admin`
--
ALTER TABLE `piedras_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `piedras_categorias`
--
ALTER TABLE `piedras_categorias`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indexes for table `piedras_imagenes`
--
ALTER TABLE `piedras_imagenes`
  ADD PRIMARY KEY (`imagenes_id`);

--
-- Indexes for table `piedras_productos`
--
ALTER TABLE `piedras_productos`
  ADD PRIMARY KEY (`producto_id`);

--
-- Indexes for table `piedras_slider`
--
ALTER TABLE `piedras_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `piedras_subcategorias`
--
ALTER TABLE `piedras_subcategorias`
  ADD PRIMARY KEY (`subcategoria_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `piedras_admin`
--
ALTER TABLE `piedras_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `piedras_categorias`
--
ALTER TABLE `piedras_categorias`
  MODIFY `categoria_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `piedras_imagenes`
--
ALTER TABLE `piedras_imagenes`
  MODIFY `imagenes_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `piedras_productos`
--
ALTER TABLE `piedras_productos`
  MODIFY `producto_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `piedras_slider`
--
ALTER TABLE `piedras_slider`
  MODIFY `slider_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `piedras_subcategorias`
--
ALTER TABLE `piedras_subcategorias`
  MODIFY `subcategoria_id` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
