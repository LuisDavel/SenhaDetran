-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Set-2020 às 23:06
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cristiane`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_guiche`
--

CREATE TABLE `cadastro_guiche` (
  `nome` int(11) NOT NULL,
  `senha` int(11) NOT NULL,
  `id_guiche` int(11) NOT NULL,
  `nome_atendente` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro_guiche`
--

INSERT INTO `cadastro_guiche` (`nome`, `senha`, `id_guiche`, `nome_atendente`) VALUES
(7, 7, 20, 'pablo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `nome_cliente` varchar(150) NOT NULL,
  `tipo_servico` varchar(50) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `valida` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`nome_cliente`, `tipo_servico`, `id_cliente`, `valida`) VALUES
('Jailton', 'Licenciamento', 46, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `guiche_cliente`
--

CREATE TABLE `guiche_cliente` (
  `nome_guixe` int(11) NOT NULL,
  `nome_cliente` varchar(150) NOT NULL,
  `data` varchar(20) NOT NULL,
  `hora` time NOT NULL,
  `id_chamados` int(11) NOT NULL,
  `tipo_servicos` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `guiche_cliente`
--

INSERT INTO `guiche_cliente` (`nome_guixe`, `nome_cliente`, `data`, `hora`, `id_chamados`, `tipo_servicos`) VALUES
(0, 'Ricardinho', '03/09', '17:22:00', 55, 'Retirada'),
(7, 'Rafael', '03/09', '17:27:00', 56, 'CNH');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `nome` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`nome`, `senha`, `id`) VALUES
('luis', '123', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_servicos`
--

CREATE TABLE `tipo_servicos` (
  `tipo` varchar(50) NOT NULL,
  `id_servico` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_servicos`
--

INSERT INTO `tipo_servicos` (`tipo`, `id_servico`) VALUES
('Licenciamento', 11),
('Negativa', 10),
('Retirada', 9),
('CNH', 8);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro_guiche`
--
ALTER TABLE `cadastro_guiche`
  ADD PRIMARY KEY (`id_guiche`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `guiche_cliente`
--
ALTER TABLE `guiche_cliente`
  ADD PRIMARY KEY (`id_chamados`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipo_servicos`
--
ALTER TABLE `tipo_servicos`
  ADD PRIMARY KEY (`id_servico`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_guiche`
--
ALTER TABLE `cadastro_guiche`
  MODIFY `id_guiche` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de tabela `guiche_cliente`
--
ALTER TABLE `guiche_cliente`
  MODIFY `id_chamados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tipo_servicos`
--
ALTER TABLE `tipo_servicos`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
