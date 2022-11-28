-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2022 a las 02:08:18
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `textileria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `consulta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id`, `nombre`, `email`, `consulta`) VALUES
(65, 'Piero Bayona Monsalve', 'Piero@mailinator.com', 'Necesito comprar algunas telas por mayor'),
(66, 'Piero', 'piero@gmail.com', 'Necesito que comprar una tela'),
(67, 'Piero', 'piero@gmail.com', 'Necesito que comprar una tela'),
(68, 'Piero', 'piero@gmail.com', 'asdasd'),
(69, 'Daniel', 'daniel@gmail.com', 'Necesito tela gente '),
(70, 'Piero', 'admin@admin.com', 'asdsadasdsad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `titulo`, `descripcion`, `imagen`) VALUES
(33, 'Calidad y Confianza', 'Te asesorasmos con la compra de la tela, los colores, la elaboración de los moldes y los diseños par', '6417bfea94a20e9c43cf4965d5dd9196.png'),
(34, 'TELAS REACTIVAS', 'Trabajamos con telas reactivas que no destiñen para darle al cliente una mejor   calidad de la prend', '8d63c2295bee30d6c46a160c95ee4ad2.jpg'),
(35, 'Buenos Acabados', ' Nos aseguramos de que tu mercadería tenga el mejor acabado, revisamos  cuidadosamente cada prenda a', 'b2a0656e04940984c493cea0bea099c5.jpg'),
(36, 'Mascarillas de tela', 'Confeccionamos mascarillas personalizadas para empresas o negocios emprendedores, consúltanos hoy.', 'd28836b46c8ce134ef60c159e426bb60.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', '$2y$10$HISOIcmt9HjMfRZminbe5OvyVbHhyfc6Z/NGUUh369TfUiR09eEXm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
