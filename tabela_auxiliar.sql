-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/03/2026 às 17:56
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eventos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tabela_auxiliar`
--

CREATE TABLE `tabela_auxiliar` (
  `id` int(11) NOT NULL,
  `id_evento` int(11) DEFAULT NULL,
  `id_participante` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tabela_auxiliar`
--
ALTER TABLE `tabela_auxiliar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_evento` (`id_evento`),
  ADD KEY `id_participante` (`id_participante`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabela_auxiliar`
--
ALTER TABLE `tabela_auxiliar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tabela_auxiliar`
--
ALTER TABLE `tabela_auxiliar`
  ADD CONSTRAINT `tabela_auxiliar_ibfk_1` FOREIGN KEY (`id_evento`) REFERENCES `cadastro_eventos` (`id`),
  ADD CONSTRAINT `tabela_auxiliar_ibfk_2` FOREIGN KEY (`id_participante`) REFERENCES `cadastro_participantes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
