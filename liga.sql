-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 25-01-2024 a las 13:18:43
-- Versión del servidor: 8.2.0
-- Versión de PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `liga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenadores`
--

CREATE TABLE `entrenadores` (
  `entrenadorId` int NOT NULL,
  `nombre_entrenador` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pais` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `edad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `entrenadores`
--

INSERT INTO `entrenadores` (`entrenadorId`, `nombre_entrenador`, `pais`, `edad`) VALUES
(1, 'Carlo Ancelotti', 'Italia', '1959-06-10'),
(2, 'Ernesto Valverde', 'España', '1964-02-09'),
(3, 'Xavi Hernández', 'España', '1980-01-25'),
(4, 'Diego Pablo Simeone', 'Argentina', '1970-04-28'),
(5, 'Miguel Ángel Sánchez Muñoz', 'España', '1975-10-30'),
(6, ' Luis García Plaza', 'España', '1972-12-01'),
(7, 'Gaizka Garitano', 'España', '1975-07-09'),
(8, 'Manuel Pellegrini', 'Argentina', '1953-09-16'),
(9, 'Sergio González Soriano', 'España', '1976-11-10'),
(10, 'Rafa Benítez', 'España', '1960-04-16'),
(11, ' José Bordalás', 'España', '1964-03-05'),
(12, 'Alexander Medina', 'Uruguay', '1978-08-08'),
(13, 'Javier Aguirre', 'México', '1958-12-01'),
(14, ' Jagoba Arrasate', 'España', '1978-04-22'),
(15, 'Francisco Rodríguez Vílchez', 'España', '1979-09-27'),
(16, 'Imanol Alguacil', 'España', '1971-07-04'),
(17, 'Quique Sánchez Flores', 'España', '1965-02-05'),
(18, 'Francisco Javier García Pimienta', 'España', '1974-08-03'),
(19, 'Rubén Baraja', 'España', '1975-07-11'),
(20, 'Marcelino García Toral', 'España', '1965-08-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `equipoId` int NOT NULL,
  `nombre_equipo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fundacion` date NOT NULL,
  `abonados` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`equipoId`, `nombre_equipo`, `fundacion`, `abonados`) VALUES
(1, 'Girona FC', '2024-07-23', 9704),
(5, 'Real Madrid CF', '1902-03-06', 60707),
(6, 'Athletic Club Bilbao', '1898-06-15', 45000),
(7, 'FC Barcelona', '1899-11-29', 17064),
(8, 'Club Atlético de Madrid', '1903-04-26', 60000),
(9, 'Real Sociedad de Fútbol', '1909-09-07', 38000),
(10, 'Valencia CF', '1919-03-18', 38500),
(11, 'UD Las Palmas', '1949-08-22', 25037),
(12, 'Real Betis Balompié', '1907-09-12', 48443),
(13, 'Getafe CF', '1983-07-08', 12700),
(14, 'CA Osasuna', '1920-10-24', 20500),
(15, 'Deportivo Alavés', '1921-01-23', 9434),
(16, 'Rayo Vallecano CF', '1924-05-29', 10360),
(17, 'Villareal CF', '1923-03-10', 20000),
(18, 'RCD Mallorca', '1916-03-05', 19312),
(19, 'RC Celta', '1923-08-23', 20100),
(20, 'Sevilla FC', '1890-01-25', 39500),
(21, 'Cádiz FC', '1910-09-10', 18000),
(22, 'Granada FC', '1931-04-06', 17012),
(23, 'UD Almeria', '1989-07-26', 10300);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  ADD PRIMARY KEY (`entrenadorId`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`equipoId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  MODIFY `entrenadorId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `equipoId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entrenadores`
 

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
