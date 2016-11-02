-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2016 a las 22:32:17
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('luis.ramirez.lfrs@hotmail.com', '115d3bbf7472a42c22294e281b405c080570cff56c0365e4f89e952eb6b72bf2', '2016-10-26 07:10:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', '2016-10-31 05:13:48', '0000-00-00 00:00:00'),
(2, 'Invitado', '2016-10-31 05:13:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipoUsuario` int(11) DEFAULT NULL,
  `imagen` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `tipoUsuario`, `imagen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'luis', 'luis.ramirez.lfrs@hotmail.com', '$2y$10$r8xoGqRoI.nWRw9W7bMvzuQuiBpnsRbS0YTFGrQQ6ROC5wu9sMWKy', NULL, NULL, 'O43daDSclH2CTmYGmCqJVpd8C4p6EQWaqmTtPyR73FZ5YJBTNatu7ShWVTSf', '2016-10-26 07:06:39', '2016-10-26 12:20:08'),
(2, 'Luis', 'luis@gmail.com', '$2y$10$WWW0Cdd6.EdDIbG.TY7tcui/CIVL5BxRehUXOCMn153Nsx5tyGsjS', NULL, NULL, 'FW703bOcwNbd0fI7s8S2SrcSf6En7KCb0ECBZpZOt5R20vB02rMovwAFodBb', '2016-10-26 07:28:17', '2016-10-26 07:28:20'),
(3, 'luis2', 'luis2@gmail.com', '$2y$10$tIEt36LQSzN4UhY.n6abde6o1nNyHkENTnHm41TZFIjZohe3CO8qa', NULL, NULL, 'UYSiPUcE9gXaUa1sxXy61ZD3iVxDId9uNnqWgJXVy2jMSacyTAmUKoAPHAzg', '2016-10-26 10:26:47', '2016-10-26 10:26:50'),
(4, 'luis', 'luis3@gmail.com', '$2y$10$5TImFEyd1DuYBvExbU8SounKCTl5kOXiuzkywcWDhZJ0OUVy9SyGu', 2, NULL, 'stZj4FTAMVz0inQIa9ORArRDPNQESprOOBKNvCFGpaTMozQyA6ytPQnSFxH8', '2016-10-31 01:06:32', '2016-11-03 03:54:38'),
(5, 'luis', 'luis4@gmail.com', '$2y$10$NsIT04uDvMkMPPmCjlfTl.FqcegeLturDH2.LfWTs0w.GG236iYC6', 1, NULL, '3NzWkFSl7q5intirDlmzffbr1Li9qcfDxEOPVN6VfssIxbTe7RU9iTzWnl6I', '2016-10-31 05:13:09', '2016-11-03 03:54:02'),
(6, 'Luis Fernando Ramirez Salazar', 'luisramirez@gmail.com', '$2y$10$0CCirJ4JSRa7tQQpTx2yWOG5AzlHhAJMpaDKeuDhLD0s1LR.ZTeHq', NULL, NULL, 'MKUqOqi25QVfRRn5apvvK0xZ0RvzoEHqduArde4khyOtgs60193RGcyfKuNu', '2016-10-31 11:32:19', '2016-10-31 12:58:17'),
(7, 'Luis Ramirez', 'luis1@gmail.com', '$2y$10$XpQsZZprrXZw2nqvGN9ptuqG1WzifQlbL0zc2llFSWDA5qOVoKiGO', NULL, NULL, 'wL5YPNByXtLn9IiDbzHEUp0u4x1wTlIUz2JoCyJ3pZ49MwMQGEIwL4lwBX6A', '2016-10-31 13:14:41', '2016-10-31 13:26:09'),
(8, 'luis', 'luis1@1.com', '$2y$10$pLLfX60fHmQFnzaBQpRK8.mdfT2/gaDx9jEEnXVwPqL7Ri3fRCVc2', NULL, NULL, NULL, '2016-10-31 13:26:30', '2016-10-31 13:26:30'),
(9, 'luis', 'luis5@gmail.com', '$2y$10$54jbBjFTplkmlR6IzaWvCOPZN3p2Zmc0M3ox7g7fRDqnO/FGgOdJO', NULL, NULL, 'VmlVyxJruLECdQcKtPdECuCpTY1PTdgExIekjaicYkjb8a7BMgetlyzMkMyf', '2016-11-01 07:36:02', '2016-11-03 04:02:40'),
(10, 'luis', 'luis6@gmail.com', '$2y$10$u02czNTTL2rYZ0424tnj2u4Lp6ZXdwlRjSBp0xKwY2jdLt8Z9CbR6', NULL, NULL, '32HS2MWnHPFguGDPEUxOF4XDUU6ZTrAG1DV2qCaom4ycMGYGTc546QbCQIsU', '2016-11-01 07:36:36', '2016-11-03 03:54:48'),
(11, 'luis', 'luis7@gmail.com', '$2y$10$yu8V6yLnVTVvu43ugDHNheD5t6rTVeHniL5VRi1NzJCGj5s3QcA7O', NULL, NULL, 'oIdXrvbnR0k8x9lypzsCwP18ULfbV7y5GATQosBOZZhIp21TfrrGIJC8CzU0', '2016-11-01 08:48:23', '2016-11-01 09:29:54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
