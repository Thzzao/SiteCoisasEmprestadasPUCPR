-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Tempo de geração: 29-Nov-2021 às 05:50
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetoweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dadoscadastro`
--

CREATE TABLE `dadoscadastro` (
  `Nome` varchar(100) NOT NULL,
  `Telefone` varchar(13) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Senha` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dadoscadastro`
--

INSERT INTO `dadoscadastro` (`Nome`, `Telefone`, `Email`, `Senha`, `id`) VALUES
('Thiago', '41995198070', 'Thiago@gmail.com', '123456', 1),
('José', '[4159879683]', 'Josezao@gmail.com', '523698714', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `Item` varchar(100) NOT NULL,
  `Data de Empréstimo` date NOT NULL,
  `Previsão de Devolução` date NOT NULL,
  `Quem Emprestou` varchar(100) NOT NULL,
  `Situação` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`Item`, `Data de Empréstimo`, `Previsão de Devolução`, `Quem Emprestou`, `Situação`, `id`) VALUES
('Bola', '2021-11-10', '2021-11-27', 'Gabriel', '[Emprestado]', 1),
('Tenis', '2021-11-11', '2021-11-26', 'Felipe', '[Emprestado]', 2),
('Boneca', '2015-03-25', '2015-05-21', 'Julia', '[Emprestado]', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itenscadastrados`
--

CREATE TABLE `itenscadastrados` (
  `Nome do objeto` varchar(150) NOT NULL,
  `Nome do dono` varchar(150) NOT NULL,
  `Endereço do dono` varchar(250) NOT NULL,
  `Telefone do dono` varchar(13) NOT NULL,
  `Email do dono` varchar(100) NOT NULL,
  `id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itenscadastrados`
--

INSERT INTO `itenscadastrados` (`Nome do objeto`, `Nome do dono`, `Endereço do dono`, `Telefone do dono`, `Email do dono`, `id`) VALUES
('Bicicleta', 'Davi', 'Rua josé felipe', '4152859636', 'Davi18@gmailcom', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itensemp`
--

CREATE TABLE `itensemp` (
  `Nome do Item` varchar(100) NOT NULL,
  `Nome do destinatário` varchar(150) NOT NULL,
  `Endereço` varchar(250) NOT NULL,
  `Complemento` varchar(100) NOT NULL,
  `Cidade` varchar(150) NOT NULL,
  `CEP` varchar(8) NOT NULL,
  `Telefone` varchar(13) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Data de devolução` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `loginlist`
--

CREATE TABLE `loginlist` (
  `Email` varchar(100) NOT NULL,
  `Senha` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `loginlist`
--

INSERT INTO `loginlist` (`Email`, `Senha`, `id`) VALUES
('thiago.santos1160@gmail.com', '123456', 1),
('teste@teste.com', 'teste', 2),
('', '', 3),
('', '', 4),
('', '', 5),
('', '', 6),
('', '', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Telefone` varchar(13) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nome`, `Telefone`, `Email`, `Senha`) VALUES
(1, '', '', '', ''),
(2, 'Thiago', '4195198070', 'thiago.santos1160@gmail.com', '123456'),
(3, '', '', '', ''),
(4, '', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dadoscadastro`
--
ALTER TABLE `dadoscadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `itensemp`
--
ALTER TABLE `itensemp`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `loginlist`
--
ALTER TABLE `loginlist`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dadoscadastro`
--
ALTER TABLE `dadoscadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `itensemp`
--
ALTER TABLE `itensemp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `loginlist`
--
ALTER TABLE `loginlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
