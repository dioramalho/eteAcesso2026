-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Mar-2026 às 02:35
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acessoete26_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `Matricula` int(7) NOT NULL,
  `Nome` varchar(43) NOT NULL,
  `Data_Nasc` varchar(10) NOT NULL,
  `Sexo` varchar(1) NOT NULL,
  `Serie` varchar(7) NOT NULL,
  `Curso` varchar(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Telefone` varchar(15) NOT NULL,
  `biometria01` varchar(500) NOT NULL,
  `biometria02` varchar(500) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `coordenacao`
--

CREATE TABLE `coordenacao` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(8) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `frequencia`
--

CREATE TABLE `frequencia` (
  `id` int(11) NOT NULL,
  `idAluno2` int(11) NOT NULL,
  `acesso_registro` datetime NOT NULL,
  `acesso_data` date NOT NULL,
  `acesso_hora` time NOT NULL,
  `dia_semana` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `coordenacao`
--
ALTER TABLE `coordenacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frequencia`
--
ALTER TABLE `frequencia`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idAluno` (`idAluno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=468;

--
-- AUTO_INCREMENT for table `coordenacao`
--
ALTER TABLE `coordenacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frequencia`
--
ALTER TABLE `frequencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `frequencia`
--
ALTER TABLE `frequencia`
  ADD CONSTRAINT `fk_id_aluno` FOREIGN KEY (`idAluno2`) REFERENCES `aluno` (`id`);

--
-- Limitadores para a tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD CONSTRAINT `fk_idAluno` FOREIGN KEY (`idAluno`) REFERENCES `aluno` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
