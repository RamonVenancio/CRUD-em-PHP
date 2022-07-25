-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jul-2022 às 19:18
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `desafio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(10) UNSIGNED NOT NULL,
  `eNota` int(10) UNSIGNED NOT NULL,
  `data_venda` date NOT NULL,
  `forma_pag` varchar(255) NOT NULL,
  `produto` varchar(255) NOT NULL,
  `quantidade` int(10) UNSIGNED NOT NULL,
  `descri` varchar(255) NOT NULL,
  `valor_uni` int(11) NOT NULL,
  `observ` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `eNota`, `data_venda`, `forma_pag`, `produto`, `quantidade`, `descri`, `valor_uni`, `observ`) VALUES
(4, 1, '2022-07-15', 'a vista', 'COPO', 500, 'Copo de Vidro', 1, 'Copo de Vidro Grande');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
