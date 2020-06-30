-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2019 a las 01:55:13
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `expresarte`
--

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `carrito`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `carrito` (
`Id Venta` int(11)
,`Id Usuario` int(11)
,`Nombre` varchar(60)
,`Apellido` varchar(60)
,`Prenda` varchar(500)
,`Tela` varchar(500)
,`Total` double
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `factura`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `factura` (
`cod_prendas` varchar(16)
,`prenda` varchar(60)
,`imagen_prenda` varchar(500)
,`precio` double
,`metros_elaboracion` int(11)
,`cod_telas` varchar(16)
,`tela` varchar(60)
,`imagen_tela` varchar(500)
,`precio_metros` double
,`TotalF` double
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prenda`
--

CREATE TABLE `prenda` (
  `cod_prendas` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_prenda` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  `metros_elaboracion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `prenda`
--

INSERT INTO `prenda` (`cod_prendas`, `nombre`, `imagen_prenda`, `descripcion`, `precio`, `metros_elaboracion`) VALUES
('BLU-01', 'Blusa casual', 'blu_casual.jpg', 'Blusa casual', 150, 2),
('BLU-02', 'Blusa manga larga globo', 'blu_globo.jpg', 'Blusa manga larga', 200, 2),
('BLU-03', 'Blusa de vestir', 'blu_vestir.jpg', 'Blusa de vestir', 200, 2),
('CAM-01', 'Camisa básica', 'cam_basica.jpg', 'Camisa básica', 200, 2),
('CAM-02', 'Camisa cuello mao', 'mao.jpg', 'Camisa cuello maoo', 200, 2),
('CAM-03', 'Camisa manga 3/4', 'tres.jpg', 'Camisa manga 3/4', 200, 2),
('CHA-01', 'Chamarra cazadora', 'caz.png', 'Chamarra cazadora', 400, 4),
('CHA-02', 'Chamarra bomber', 'bomber.jpg', 'Chamarra bomber', 350, 3),
('CHA-03', 'Suéter cuello V', 'cuellov.jpg', 'Suéter cuello V', 200, 2),
('PAN-01', 'Jeans de moda', 'p_moda.jpg', 'Jeans de moda', 200, 2),
('PAN-02', 'Pantalón de vestir', 'p_vestir.jpg', 'Pantalón de vestir', 200, 2),
('PAN-03', 'Pantalón corto', 'p_corto.jpg', 'Pantalón corto', 150, 1),
('PANH-01', 'Pantalón de vestir', 'vestir.jpg', 'Pantalón de vestir', 200, 2),
('PANH-02', 'Pantalón jogger', 'jogger.jpg', 'Pantalón jogger', 200, 2),
('PANH-03', 'Pantalón básico', 'basic.jpg', 'Pantalón básico', 200, 2),
('VES-01', 'Vestido Princesa', 'princesa.jpg', 'Vestido corte princesa', 700, 4),
('ves-02', 'Vestido casual', 'casual.jpg', 'Vestido corto elegante', 350, 2),
('VES-03', 'Vestido playa', 'playa.jpg', 'Vestido chic de playa', 350, 2);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `prenda_caballero`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `prenda_caballero` (
`cod_prendas` varchar(16)
,`nombre` varchar(60)
,`imagen_prenda` varchar(500)
,`descripcion` varchar(100)
,`precio` double
,`metros_elaboracion` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `prenda_dama`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `prenda_dama` (
`cod_prendas` varchar(16)
,`nombre` varchar(60)
,`imagen_prenda` varchar(500)
,`descripcion` varchar(100)
,`precio` double
,`metros_elaboracion` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

CREATE TABLE `talla` (
  `cod_tallas` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `talla` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `talla`
--

INSERT INTO `talla` (`cod_tallas`, `talla`) VALUES
('1', 'XS (Extra Chica)'),
('2', 'S (Chica)'),
('3', 'M (Mediana)'),
('4', 'L (Grande)'),
('5', 'XL (Extra Grande)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldetalleventa`
--

CREATE TABLE `tbldetalleventa` (
  `ID` int(11) NOT NULL,
  `IDVENTA` int(11) NOT NULL,
  `IDPRODUCTO` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PRECIO_U` decimal(20,2) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `DESCARGADO` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbldetalleventa`
--

INSERT INTO `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIO_U`, `CANTIDAD`, `DESCARGADO`) VALUES
(1, 1, 'BLU-01', '456.00', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbllventas`
--

CREATE TABLE `tbllventas` (
  `ID` int(11) NOT NULL,
  `ClaveTransaccion` varchar(250) COLLATE utf8mb4_spanish_ci NOT NULL,
  `PaypalDatos` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(5000) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Total` decimal(60,2) NOT NULL,
  `Status` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbllventas`
--

INSERT INTO `tbllventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `Status`) VALUES
(1, '1234567890', '-', '2019-11-20 05:00:00', 'ilse09@hotmail.com', '660.00', 'pendiente-'),
(2, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 00:47:28', 'juan@gmail.com', '150.00', 'Pendiente'),
(3, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 00:48:03', 'juan@gmail.com', '150.00', 'Pendiente'),
(4, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 00:48:45', 'juan@gmail.com', '150.00', 'Pendiente'),
(5, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:14:20', 'juan@gmail.com', '150.00', 'Pendiente'),
(6, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:15:23', 'juan@gmail.com', '150.00', 'Pendiente'),
(7, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:19:19', 'juan@gmail.com', '150.00', 'Pendiente'),
(8, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:19:48', 'juan@gmail.com', '150.00', 'Pendiente'),
(9, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:22:22', 'juan@gmail.com', '150.00', 'Pendiente'),
(10, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:23:33', 'juan@gmail.com', '150.00', 'Pendiente'),
(11, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:24:57', 'juan@gmail.com', '150.00', 'Pendiente'),
(12, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:25:16', 'juan@gmail.com', '150.00', 'Pendiente'),
(13, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:25:47', 'juan@gmail.com', '150.00', 'Pendiente'),
(14, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:27:20', 'juan@gmail.com', '150.00', 'Pendiente'),
(15, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:27:51', 'juan@gmail.com', '150.00', 'Pendiente'),
(16, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:28:57', 'juan@gmail.com', '150.00', 'Pendiente'),
(17, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:30:44', 'juan@gmail.com', '150.00', 'Pendiente'),
(18, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:31:48', 'juan@gmail.com', '150.00', 'Pendiente'),
(19, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:34:12', 'juan@gmail.com', '150.00', 'Pendiente'),
(20, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:35:18', 'juan@gmail.com', '150.00', 'Pendiente'),
(21, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:57:14', 'juan@gmail.com', '150.00', 'Pendiente'),
(22, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:58:32', 'juan@gmail.com', '150.00', 'Pendiente'),
(23, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:59:13', 'juan@gmail.com', '150.00', 'Pendiente'),
(24, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 01:59:52', 'juan@gmail.com', '150.00', 'Pendiente'),
(25, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 02:02:31', 'juan@gmail.com', '150.00', 'Pendiente'),
(26, 'lm8b65rk0ammqojnrsb8s3b1cl', '', '2019-11-07 02:34:52', 'ilse@gmail.com', '150.00', 'Pendiente'),
(27, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 15:01:25', 'juan@gmail.com', '500.00', 'Pendiente'),
(28, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 15:08:22', 'juan@gmail.com', '500.00', 'Pendiente'),
(29, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 15:18:07', 'juan@gmail.com', '16140.00', 'Pendiente'),
(30, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 15:18:40', 'juan@gmail.com', '16140.00', 'Pendiente'),
(31, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 15:20:08', 'juan@gmail.com', '16140.00', 'Pendiente'),
(32, 'eecgbm7oblrq6buvuh9pmfqb4f', '', '2019-11-07 15:23:12', 'juan@gmail.com', '400.00', 'Pendiente'),
(33, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 15:26:10', 'juan@gmail.com', '16140.00', 'Pendiente'),
(34, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 15:33:38', 'juan@gmail.com', '16140.00', 'Pendiente'),
(35, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 16:54:50', 'juan@gmail.com', '16140.00', 'Pendiente'),
(36, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 16:58:23', 'juan@gmail.com', '350.00', 'Pendiente'),
(37, 'itmeoocv3f0ine290v75co35gq', '', '2019-11-07 16:59:35', 'ilse@gmail.com', '500.00', 'Pendiente'),
(38, 'itmeoocv3f0ine290v75co35gq', '', '2019-11-07 18:06:00', 'ilse@gmail.com', '200.00', 'Pendiente'),
(39, 'itmeoocv3f0ine290v75co35gq', '', '2019-11-07 18:09:52', 'ilse@gmail.com', '200.00', 'Pendiente'),
(40, 'itmeoocv3f0ine290v75co35gq', '', '2019-11-07 18:11:05', 'ilse@gmail.com', '200.00', 'Pendiente'),
(41, 'itmeoocv3f0ine290v75co35gq', '', '2019-11-07 18:11:33', 'ilse@gmail.com', '200.00', 'Pendiente'),
(42, 'itmeoocv3f0ine290v75co35gq', '', '2019-11-07 18:11:56', 'ilse@gmail.com', '200.00', 'Pendiente'),
(43, 'itmeoocv3f0ine290v75co35gq', '', '2019-11-07 18:12:16', 'ilse@gmail.com', '200.00', 'Pendiente'),
(44, 'itmeoocv3f0ine290v75co35gq', '', '2019-11-07 18:12:47', 'ilse@gmail.com', '200.00', 'Pendiente'),
(45, 'itmeoocv3f0ine290v75co35gq', '', '2019-11-07 18:13:21', 'ilse@gmail.com', '200.00', 'Pendiente'),
(46, 'itmeoocv3f0ine290v75co35gq', '', '2019-11-07 18:13:43', 'ilse@gmail.com', '200.00', 'Pendiente'),
(47, 'itmeoocv3f0ine290v75co35gq', '', '2019-11-07 18:14:48', 'ilse@gmail.com', '200.00', 'Pendiente'),
(48, 'itmeoocv3f0ine290v75co35gq', '', '2019-11-07 18:25:05', 'ilse@gmail.com', '200.00', 'Pendiente'),
(49, 'itmeoocv3f0ine290v75co35gq', '', '2019-11-07 18:26:34', 'ilse@gmail.com', '200.00', 'Pendiente'),
(50, 'itmeoocv3f0ine290v75co35gq', '', '2019-11-07 18:27:01', 'ilse@gmail.com', '200.00', 'Pendiente'),
(51, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 18:27:13', 'juan@gmail.com', '350.00', 'Pendiente'),
(52, 'kfvn7s4l414br4reriefd141or', '', '2019-11-07 18:32:30', 'juan@gmail.com', '350.00', 'Pendiente'),
(53, 'itmeoocv3f0ine290v75co35gq', '', '2019-11-07 18:32:58', 'ilse@gmail.com', '200.00', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tela`
--

CREATE TABLE `tela` (
  `cod_telas` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_tela` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `metros_disp` int(11) NOT NULL,
  `precio_metros` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tela`
--

INSERT INTO `tela` (`cod_telas`, `nombre`, `imagen_tela`, `descripcion`, `metros_disp`, `precio_metros`) VALUES
('T1-AZUL', 'Poliéster azul con figuras', '1.png', 'Poliéster azul con flores', 300, 25),
('T10-BLA', 'Algodón rosa claro', '2.png', 'Algodón rosa', 300, 12),
('T12-AMA', 'Poliéster naranja', '4.png', 'Poliéster naranja con flores', 300, 17),
('T13-MOR', 'Algodón gris con líneas', '5.png', 'Tela de alodón gris con líneas', 300, 18),
('T14-AZU', 'Algodón con cuadros', '6.png', 'Tela de algodón con cuadros', 300, 17),
('T15-NEG', 'Algodón verde oscuro', '7.png', 'Tela de algodón color verde oscuro', 300, 18),
('T16-ROO', 'Poliéster azul marino', '8.png', 'Tela de poliéster color azul marino con figuras', 300, 25),
('T2-RED', 'Algodón rojo con líneas', '9.png', 'Tela de algodón color roja, líneas blancas', 300, 20),
('T3-AZUL', 'Algodón azul claro', '10.png', 'Tela de algodón color azul con cuadro chico', 300, 18),
('T4-VINO', 'Poliéster vino con flores', '11.png', 'Tela poliéster color vino con flores', 300, 23),
('T5-AMA', 'Algodón amarilla', '12.png', 'Tela de algodón color amarilla', 300, 18),
('T6-GRS', 'Algodón gris con flores', '13.png', 'Tela de algodón color gris con flores rosas', 300, 15),
('T7-PLA', 'Algodón color plata ', '14.png', 'Tela color plata', 300, 25),
('T8-MIL', 'Algodón colores militar', '15.png', 'Tela color militar', 300, 15),
('T9-AZUL', 'Poliéster azul cuadros', '16.png', 'Tela de poliéster color azul con cuadros', 300, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena1` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `c_p` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `calle_numero` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `correo`, `contrasena1`, `telefono`, `c_p`, `calle_numero`) VALUES
(1, 'juan jesus ', 'ortiz perez', 'juan@gmail.com', 'android', '2147483647', '55070', 'av.ignacio allende'),
(4, 'fernando', 'trejo cruz', 'fernando@hotmail.com', '4a244e0414c226e7', '2147483647', '55214', 'ayagy'),
(5, 'gustavo', 'panivino', 'gus_pan@gmail.com', '4c882dcb24bcb1bc', '9111108111', '54680', 'naranja 120'),
(12, 'Santiago', 'Del Ãngel', 'jazmin111@hotmail.com', '1234567890', '2131231221', '2342', 'q34'),
(13, 'JazmÃ­n', 'Del Ãngel', 'jazmin@hotmail.com', 'CONTRASEÃ‘A', '8888999909', '09876', 'JSAHX'),
(14, 'JazmÃ­n', 'q', 'santiago@hotmail.com', 'CONTRASEÃ‘A', '8887776665', '67678', 'CALLE'),
(17, 'ilse', 'santiago', 'ilse1@hotmail.com', 'contraseÃ±a1', '997888', '9889', 'zvhs'),
(18, 'nombre', 'Del Ãngel', 'jazmin1@hotmail.com', 'jsdhfsjk', '77879009', '9898', 'IUJIOUI'),
(19, 'ILSE', 'SANTIAGO', 'ILSE@GMAIL.COM', 'CONTRASEÃ‘A', '6767676767', '67678', 'JHK'),
(20, 'Ilse', 'Santiago', 'ilse123@hotmail.com', 'contraseÃ±a', '6767676767', '78909', 'calle');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `cod_prendas` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `cod_telas` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `cod_prendas`, `cod_telas`, `id_usuario`, `fecha`) VALUES
(1, 'BLU-03', 'T3-AZUL', 4, '2019-10-08 05:45:00'),
(2, 'PANH-02', 'T10-BLA', 4, '2019-10-23 12:11:36'),
(3, 'BLU-02', 'T15-NEG', 12, '2019-10-08 00:00:00'),
(4, 'CHA-02', 'T9-AZUL', 12, '2019-10-08 00:00:00'),
(5, 'BLU-03', 'T14-AZU', 1, '2019-10-01 00:00:00'),
(6, 'ves-02', 'T6-GRS', 19, '2019-10-08 00:00:00');

-- --------------------------------------------------------

--
-- Estructura para la vista `carrito`
--
DROP TABLE IF EXISTS `carrito`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `carrito`  AS  select `v`.`id_venta` AS `Id Venta`,`u`.`id_usuario` AS `Id Usuario`,`u`.`nombre` AS `Nombre`,`u`.`apellido` AS `Apellido`,`p`.`imagen_prenda` AS `Prenda`,`t`.`imagen_tela` AS `Tela`,`t`.`precio_metros` * `p`.`metros_elaboracion` + `p`.`precio` AS `Total` from (((`venta` `v` join `prenda` `p` on(`p`.`cod_prendas` = `v`.`cod_prendas`)) join `tela` `t` on(`t`.`cod_telas` = `v`.`cod_telas`)) join `usuario` `u` on(`u`.`id_usuario` = `v`.`id_usuario`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `factura`
--
DROP TABLE IF EXISTS `factura`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `factura`  AS  select `v`.`cod_prendas` AS `cod_prendas`,`p`.`nombre` AS `prenda`,`p`.`imagen_prenda` AS `imagen_prenda`,`p`.`precio` AS `precio`,`p`.`metros_elaboracion` AS `metros_elaboracion`,`v`.`cod_telas` AS `cod_telas`,`t`.`nombre` AS `tela`,`t`.`imagen_tela` AS `imagen_tela`,`t`.`precio_metros` AS `precio_metros`,`t`.`precio_metros` * `p`.`metros_elaboracion` + `p`.`precio` AS `TotalF` from ((`venta` `v` join `prenda` `p` on(`p`.`cod_prendas` = `v`.`cod_prendas`)) join `tela` `t` on(`t`.`cod_telas` = `v`.`cod_telas`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `prenda_caballero`
--
DROP TABLE IF EXISTS `prenda_caballero`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `prenda_caballero`  AS  select `prenda`.`cod_prendas` AS `cod_prendas`,`prenda`.`nombre` AS `nombre`,`prenda`.`imagen_prenda` AS `imagen_prenda`,`prenda`.`descripcion` AS `descripcion`,`prenda`.`precio` AS `precio`,`prenda`.`metros_elaboracion` AS `metros_elaboracion` from `prenda` where `prenda`.`cod_prendas` like 'CAM-%' or `prenda`.`cod_prendas` like 'CHA-%' or `prenda`.`cod_prendas` like 'PANH-%' ;

-- --------------------------------------------------------

--
-- Estructura para la vista `prenda_dama`
--
DROP TABLE IF EXISTS `prenda_dama`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `prenda_dama`  AS  select `prenda`.`cod_prendas` AS `cod_prendas`,`prenda`.`nombre` AS `nombre`,`prenda`.`imagen_prenda` AS `imagen_prenda`,`prenda`.`descripcion` AS `descripcion`,`prenda`.`precio` AS `precio`,`prenda`.`metros_elaboracion` AS `metros_elaboracion` from `prenda` where `prenda`.`cod_prendas` like 'BLU-%' or `prenda`.`cod_prendas` like 'VES-%' or `prenda`.`cod_prendas` like 'PAN-%' ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `prenda`
--
ALTER TABLE `prenda`
  ADD PRIMARY KEY (`cod_prendas`);

--
-- Indices de la tabla `talla`
--
ALTER TABLE `talla`
  ADD PRIMARY KEY (`cod_tallas`);

--
-- Indices de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDVENTA` (`IDVENTA`),
  ADD KEY `IDPRODUCTO` (`IDPRODUCTO`);

--
-- Indices de la tabla `tbllventas`
--
ALTER TABLE `tbllventas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tela`
--
ALTER TABLE `tela`
  ADD PRIMARY KEY (`cod_telas`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `cod_prendas` (`cod_prendas`),
  ADD KEY `cod_telas` (`cod_telas`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tbllventas`
--
ALTER TABLE `tbllventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD CONSTRAINT `tbldetalleventa_ibfk_1` FOREIGN KEY (`IDVENTA`) REFERENCES `tbllventas` (`ID`),
  ADD CONSTRAINT `tbldetalleventa_ibfk_2` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `prenda` (`cod_prendas`),
  ADD CONSTRAINT `tbldetalleventa_ibfk_3` FOREIGN KEY (`IDVENTA`) REFERENCES `tbllventas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbldetalleventa_ibfk_4` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `prenda` (`cod_prendas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`cod_prendas`) REFERENCES `prenda` (`cod_prendas`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`cod_telas`) REFERENCES `tela` (`cod_telas`),
  ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
