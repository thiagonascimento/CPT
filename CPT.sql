-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 13/12/2021 às 10:03
-- Versão do servidor: 10.4.22-MariaDB
-- Versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `CPT`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Formulario`
--

CREATE TABLE `Formulario` (
  `idCliente` int(255) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Telefone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pais` text NOT NULL,
  `Assunto` text NOT NULL,
  `Mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Formulario`
--
ALTER TABLE `Formulario`
  ADD PRIMARY KEY (`idCliente`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Formulario`
--
ALTER TABLE `Formulario`
  MODIFY `idCliente` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
