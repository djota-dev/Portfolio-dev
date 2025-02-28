-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 15/07/2023 às 20:17
-- Versão do servidor: 10.4.27-MariaDB
-- Versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `codo_final`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `inscriptos`
--

CREATE TABLE `inscriptos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellido` varchar(150) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` int(30) NOT NULL,
  `cant_entradas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `inscriptos`
--

INSERT INTO `inscriptos` (`id`, `nombre`, `apellido`, `email`, `telefono`, `cant_entradas`) VALUES
(1, 'Ana', 'Vale', 'anavale@email.com', 1162199999, 2),
(2, 'djota', 'Silva', 'djotadeveloper@gmail.com', 11558822, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `oradores`
--

CREATE TABLE `oradores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dni` int(8) NOT NULL,
  `tema` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `oradores`
--

INSERT INTO `oradores` (`id`, `nombre`, `apellido`, `dni`, `tema`) VALUES
(1, 'Aylu', 'uwu', 999999, 'manifestación'),
(2, 'aaS', 'SSS', 555555, 'AAA'),
(3, 'AYLU', 'UWU', 42293030, 'QUIERO DAR MI OPINION. SOY EXPERTA. LLAMENMEN\r\n');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`) VALUES
(1, 'djota0202@email.com', 'admin123'),
(2, 'admin@email.com', 'Admin123456'),
(3, 'admin02@email.com', 'Admin123456'),
(4, 'jpaerez@gmail.com', 'jperez123'),
(5, 'jpaerez@gmail.com', 'admin123'),
(6, 'prueba02@gmail.com', '909090');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `inscriptos`
--
ALTER TABLE `inscriptos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `oradores`
--
ALTER TABLE `oradores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `inscriptos`
--
ALTER TABLE `inscriptos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `oradores`
--
ALTER TABLE `oradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
