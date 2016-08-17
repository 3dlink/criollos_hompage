-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2016 a las 20:39:03
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `criollos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client_vs`
--

CREATE TABLE `client_vs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `originalImgName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `client_vs`
--

INSERT INTO `client_vs` (`id`, `name`, `image`, `originalImgName`, `created_at`, `updated_at`) VALUES
(2, 'femmex', 'img1471276661GWY.png', 'c1.png', '2016-08-15 19:57:41', '2016-08-15 19:57:41'),
(3, 'teragrip', 'img14712766772Z2.png', 'c2.png', '2016-08-15 19:57:57', '2016-08-15 19:57:57'),
(4, 'viajanet', 'img147127669069F.png', 'c3.png', '2016-08-15 19:58:10', '2016-08-15 19:58:10'),
(5, 'panasonic', 'img1471276704CSD.png', 'c4.png', '2016-08-15 19:58:24', '2016-08-15 19:58:24'),
(6, '3m', 'img147127672358X.png', 'c5.png', '2016-08-15 19:58:43', '2016-08-15 19:58:43'),
(7, 'Kimberly-Clark', 'img1471276754MZO.png', 'c6.png', '2016-08-15 19:59:14', '2016-08-15 19:59:14'),
(8, 'alpura', 'img14712767656Q9.png', 'c7.png', '2016-08-15 19:59:25', '2016-08-15 19:59:25'),
(9, 'rinaris', 'img14712767775LX.png', 'c8.png', '2016-08-15 19:59:37', '2016-08-15 19:59:37'),
(10, 'la sante', 'img1471276789ULT.png', 'c9.png', '2016-08-15 19:59:49', '2016-08-15 19:59:49'),
(11, 'seguros caracas', 'img1471276801W3J.png', 'c10.png', '2016-08-15 20:00:01', '2016-08-15 20:00:01'),
(12, 'VR', 'img1471276815XWT.png', 'c11.png', '2016-08-15 20:00:15', '2016-08-15 20:00:15'),
(13, 'fundafarmacia', 'img1471276829WHM.png', 'c12.png', '2016-08-15 20:00:29', '2016-08-15 20:00:29'),
(14, 'cadena capriles', 'img1471276848XGZ.png', 'c13.png', '2016-08-15 20:00:48', '2016-08-15 20:00:48'),
(15, 'rhyn dance', 'img1471276859E85.png', 'c14.png', '2016-08-15 20:00:59', '2016-08-15 20:00:59'),
(16, 'ims', 'img14712768715VR.png', 'c15.png', '2016-08-15 20:01:11', '2016-08-15 20:01:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `client_vs`
--
ALTER TABLE `client_vs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `client_vs`
--
ALTER TABLE `client_vs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
