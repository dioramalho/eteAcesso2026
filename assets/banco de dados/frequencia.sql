-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Mar-2026 às 22:05
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
-- Database: `acesso2026`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `frequencia`
--

CREATE TABLE `frequencia` (
  `id` int(11) NOT NULL,
  `idAluno` int(11) NOT NULL,
  `acesso_registro` datetime NOT NULL,
  `acesso_data` date NOT NULL,
  `acesso_hora` time NOT NULL,
  `dia_semana` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `frequencia`
--
ALTER TABLE `frequencia`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `fk_id_aluno` (`idAluno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `frequencia`
--
ALTER TABLE `frequencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `frequencia`
--
ALTER TABLE `frequencia`
  ADD CONSTRAINT `fk_id_aluno` FOREIGN KEY (`idAluno`) REFERENCES `aluno` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
