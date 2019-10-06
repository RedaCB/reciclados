-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2019 a las 13:24:00
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `saveworld`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `containers`
--

CREATE TABLE `containers` (
  `id_container` int(11) NOT NULL,
  `numberContainer` int(11) NOT NULL,
  `nameContainer` varchar(65) CHARACTER SET latin1 NOT NULL,
  `acronymContainer` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `idMaterial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `containers`
--

INSERT INTO `containers` (`id_container`, `numberContainer`, `nameContainer`, `acronymContainer`, `idMaterial`) VALUES
(1, 1, 'Tereftalato de Polietileno', 'PET', 1),
(2, 2, 'Polietileno de Alta Densidad', 'HDPE', 1),
(3, 3, 'Cloruro de Polivinilo', 'PVC', 1),
(4, 4, 'Polietileno de Baja Densidad', 'PELD', 1),
(5, 5, 'Polipropileno', 'PP', 1),
(6, 6, 'Poliestireno', 'PS', 1),
(7, 7, 'Otros', '(OTHER)', 1),
(8, 8, 'Pila de Plomo-Ãcido', 'Lead', 2),
(9, 9, 'Acrilonitrilo Butadieno Estireno', 'ABS', 1),
(10, 10, 'BaterÃ­a de NÃ­quel-Cadmio', 'NiCD', 2),
(11, 11, 'BaterÃ­a de NÃ­quel-Metal Hidruro', 'NiMH', 2),
(12, 12, 'BaterÃ­a de Litio', 'Li', 2),
(13, 13, 'BaterÃ­a de Plata-Ã“xido', 'SO(Z)', 2),
(14, 14, 'BaterÃ­a de Zinc-CarbÃ³n', 'CZ', 2),
(19, 19, 'BaterÃ­a Alcalina', 'Alkaline', 2),
(20, 20, 'CartÃ³n Ondulado', 'PAP', 3),
(21, 21, 'CartÃ³n Ondulado( de papel)', 'PAP', 3),
(22, 22, 'Papel', 'PAP', 3),
(40, 40, 'Acero', 'FE', 4),
(41, 41, 'Aluminio', 'ALU', 4),
(50, 50, 'Madera', 'FOR', 5),
(51, 51, 'Corcho', 'FOR', 5),
(60, 60, 'AlgodÃ³n', 'COT', 5),
(61, 61, 'Fibra', 'TEX', 5),
(70, 70, 'Mezcla de cristales', 'GLS', 6),
(71, 71, 'Vidrio Claro', 'GLS', 6),
(72, 72, 'Vidrio Verde', 'GLS', 6),
(73, 73, 'Vidrio Oscuro', 'GLS', 6),
(74, 74, 'Vidrio', 'GLS', 6),
(75, 75, 'Vidrio', 'GLS', 6),
(76, 76, 'Vidrio', 'GLS', 6),
(77, 77, 'Vidrio con Bronze', 'GLS', 6),
(78, 78, 'Vidrio con Plata', 'GLS', 6),
(79, 79, 'Vidrio Dorado', 'GLS', 6),
(81, 81, 'papel mÃ¡s plÃ¡stico', 'PapPet', 7),
(82, 82, 'Papel y Fibra / Aluminio', 'ALU/PAP', 7),
(83, 83, 'Lata', 'PAP (fibra', 7),
(84, 84, 'PlÃ¡stico / Aluminio', 'C/PAP (o P', 7),
(85, 85, 'PlÃ¡stico / Aluminio / Hojalata', 'ALU/PL', 7),
(87, 87, 'PlÃ¡stico Biodegradable', '#87 Card-s', 7),
(90, 90, 'PlÃ¡stico', '#90', 7),
(91, 91, 'PlÃ¡stico / Aluminio', '#91', 7),
(92, 92, 'PlÃ¡stico / Metales', '#92', 7),
(95, 95, 'Vidrio / PlÃ¡stico', '#95', 7),
(96, 96, 'Cristal / Aluminio', '#96', 7),
(97, 97, 'Cristal / Hojalata', '#97', 7),
(98, 98, 'Cristal / Metales', '#98', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materials`
--

CREATE TABLE `materials` (
  `id_material` int(11) NOT NULL,
  `nameMaterial` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materials`
--

INSERT INTO `materials` (`id_material`, `nameMaterial`) VALUES
(1, 'Plástico'),
(2, 'Pilas'),
(3, 'Papel'),
(4, 'Metal'),
(5, 'Residuos Biodegradables'),
(6, 'Vidrio'),
(7, 'Material Compuesto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material_products`
--

CREATE TABLE `material_products` (
  `id_matProducts` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `idContainer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `material_products`
--

INSERT INTO `material_products` (`id_matProducts`, `idProduct`, `idContainer`) VALUES
(1, 1, 41),
(2, 6, 1),
(3, 5, 1),
(4, 11, 1),
(5, 3, 1),
(6, 4, 1),
(7, 33, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id_Product` int(11) NOT NULL,
  `nameProduct` varchar(256) NOT NULL,
  `barCodeEAN` varchar(13) NOT NULL,
  `imgProduct` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_Product`, `nameProduct`, `barCodeEAN`, `imgProduct`) VALUES
(1, 'Rockstar Original Energy Drink 250ml', '8410409016502', 'p1.jpg'),
(2, 'Lays Gourmet Crema de Queso y Cebolla Caramelizada 150gr', '8410199017901', 'p2.jpg'),
(3, 'Agua Mineral Natural Sant Aniol 1.5L', '8424372021500', 'p3.jpg'),
(4, 'Agua Natural Font Vella 50cL', '8410055050011', 'p4.jpg'),
(5, 'Agua Mineral Font Agudes 1.5L', '8413334015169', 'p5.jpg'),
(6, 'Agua Mineral Natural Viladrau 50cL', '8411002101800', 'p6.jpg'),
(7, 'Fanta Limón 33cL', '5449000006004', 'p7.jpg'),
(8, 'Coca-Cola 33cL', '5449000000996', 'p8.jpg'),
(9, 'Fanta Naranja 33cL', '5449000011527', 'p9.jpg'),
(10, 'Coca-Cola Zero Azúcares 33cL', '5449000131805', 'p10.jpg'),
(11, 'Agua Mineral Natural Aguadoy 1.5L', '8437003011504', 'p11.jpg'),
(12, 'Chocolate extrafino con leche Hacendado pack 2u 150gr', '8480000121080', 'p12.jpg'),
(13, 'Fanta Naranja Zero Azúcares 33cL', '5449000120960', 'p13.jpg'),
(14, 'Fanta Limón Zero Azúcares 33cL', '5449000120991', 'p14.jpg'),
(15, 'Salsa Mostaza Leo Boeck 250mL', '8436569666012', 'p15.jpg'),
(16, 'Salsa Ketchup Leo Boeck 250mL', '8436569666005', 'p16.jpg'),
(17, 'Doritos Tex Mex 280gr', '8410199980755', 'p17.jpg'),
(33, 'Liposan Original Protector Labial', '4005900196439', 'p18.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `containers`
--
ALTER TABLE `containers`
  ADD PRIMARY KEY (`id_container`),
  ADD UNIQUE KEY `numberContainer` (`numberContainer`),
  ADD KEY `typeContainer` (`idMaterial`);

--
-- Indices de la tabla `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id_material`);

--
-- Indices de la tabla `material_products`
--
ALTER TABLE `material_products`
  ADD PRIMARY KEY (`id_matProducts`),
  ADD KEY `idProduct` (`idProduct`),
  ADD KEY `idContainer` (`idContainer`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_Product`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `containers`
--
ALTER TABLE `containers`
  MODIFY `id_container` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT de la tabla `materials`
--
ALTER TABLE `materials`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `material_products`
--
ALTER TABLE `material_products`
  MODIFY `id_matProducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id_Product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `containers`
--
ALTER TABLE `containers`
  ADD CONSTRAINT `containers_ibfk_1` FOREIGN KEY (`idMaterial`) REFERENCES `materials` (`id_material`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `material_products`
--
ALTER TABLE `material_products`
  ADD CONSTRAINT `material_products_ibfk_1` FOREIGN KEY (`idProduct`) REFERENCES `products` (`id_Product`) ON UPDATE CASCADE,
  ADD CONSTRAINT `material_products_ibfk_2` FOREIGN KEY (`idContainer`) REFERENCES `containers` (`id_container`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
