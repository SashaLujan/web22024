-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2024 a las 00:01:54
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `noticias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `developers`
--

CREATE TABLE `developers` (
  `id_developer` int(25) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `developers`
--

INSERT INTO `developers` (`id_developer`, `nombre`, `email`, `rol`) VALUES
(1, 'sasha', '1234@gmail.com', 'developer'),
(2, 'juan', '655@gmail.com', 'developer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int(25) NOT NULL,
  `titulo` char(50) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `titulo`, `contenido`, `imagen`) VALUES
(1, 'La NASA denunció que China planea poner un superme', 'Según la agencia espacial norteamericana, en las últimas semanas se interceptaron 3 cohetes chinos con mercadería y un cuarto, tripulado por personas de origen peruano entrenados para hacer reabastesimiento de mercadería en gravedad 0.', 'https://www.nasa.gov/wp-content/uploads/2023/03/jsc2013e087950.jpg'),
(2, 'Crean software para detectar gente pelotudeando en', 'El Software, promete disparar la productividad de empresas y comercios, al eliminar tiempos muertos de empleados asignándoles diferentes roles. Varios sindicatos ya se declararon en contra del uso de esta tecnología.', 'https://1.bp.blogspot.com/-f1w3f4ePS3s/W1jVAAlT6RI/AAAAAAAAGuE/jAD5isAy2Ws5MNlrbViteOkzs3TTAr5nACLcBGAs/s640/SW_DRONE.jpg'),
(3, 'Quien es Tito Musk, el primo argentino de Elon Mus', 'Tito Musk vive en Bernal y desde chico se destacó por inventar pelotudeces. En 1986 intentó mandar un conejo a la Luna pero reventó como el Challenger. También dice que habla seguido con su primo, Elon.', 'https://files.merca20.com/uploads/2022/05/Elon-Musk-tatuaje-e1651875137289.jpeg'),
(4, 'Starbucks se va del país y hay preocupación entre', 'Según el comunicado oficial \'debido a la crisis global que vive el sector, y la cantidad de pelotudos que ocupan mesas durante 8 horas con un café y dos medialunas solamente para darse corte que tienen una MacBook, se hace inviables la continuidad de las operaciones en Argentina.', 'https://1.bp.blogspot.com/-HiD_vBlSbg0/X2PjR8udR5I/AAAAAAAAIvw/E3EWAortz7A3ZHIdTrOGHa7YGsf17ZUiQCLcBGAsYHQ/w640-h444/starbucks.jpg'),
(5, 'Nueva noticia', 'Ut nec faucibus neque. Praesent dignissim ac ligula laoreet sollicitudin. Aliquam congue justo quis ligula porttitor pulvinar. Curabitur vel laoreet lectus. Maecenas egestas suscipit sem id ornare.', 'https://1.bp.blogspot.com/-HiD_vBlSbg0/X2PjR8udR5I/AAAAAAAAIvw/E3EWAortz7A3ZHIdTrOGHa7YGsf17ZUiQCLcBGAsYHQ/w640-h444/starbucks.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
