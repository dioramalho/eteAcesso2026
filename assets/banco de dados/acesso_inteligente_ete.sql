-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/04/2024 às 02:28
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
-- Banco de dados: `acesso_inteligente_ete`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
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
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `aluno`
--

INSERT INTO `aluno` (`id`, `Matricula`, `Nome`, `Data_Nasc`, `Sexo`, `Serie`, `Curso`, `email`, `Telefone`, `biometria01`, `biometria02`, `imagem`) VALUES
(1, 3430617, 'ALLYSON MATHEUS DE SOUZA SANTOS', '10/11/2007', 'M', '1 Ano A', 'LOG', '', '', 'AQAAABQAAAAEAQAAAQASAAEAZAAAAAAA*AAAAE1hKXW*UgjKeWj0YU9AMvLh7OIX3NBpCnOAT0o0Ma3ULBj8oUK4pn939Y20vNB04obvrLhlHlip2nLcdklPApme8EjRW/McLmTgYDQED*mOgOO7nUrXNnHs8DNtorxmgEX5z/fxvIAz7zu1bOeNqBsnMbDkdroUWQfK2IKRnTnug/XZkoNSdygIrc1PNhZ*ldqt*LTNyX03ujsWR*/wBRIFmGdz3Ov5GHUYRdnX3cHih5gSMpfnnp3rJBoaVcbsLp2byipVmSgSbSp*7iM/37SP6AmJRtdPq8VNfP0UAyMZar24w5bMYIHr81e7sFSkZgoq48Gjm6Wx0g9hyFmsNXA', 'AQAAABQAAABUAQAAAQASAAEAZAAAAAAAUAEAAC843dOg9nz*n*rzqI4ucTB*UqtXp039mMgxluLkOXBeNkR3gWL9**HztS*vWLcFVaNJPRmI7mtTlCPu4ikzFGocfSLrnPkfd6HUMUHCwL3JqXT4NozntRFTKn9e3biNZu9rW8*gEH7TzLecfYd/wORFV1i88ocZIyUPEAjNE5biqiS/sEgaJbNR0pIxlchr4gH12Lr8b8N21Fag*tV5LHdolkKujYaLqfPwygJZEWO12hHVV9GdyN7Dg2CjkPm9JHVT1ntAWzye7msJAjmdeh1lf110L8Pn7jVFSRPygiiczzA0V3NP8RFf/omkutx/*IllUbpKxgY0hxNReboHW8PJAcoxxU/4v6TKe9ylI4fdsaPupjIxVw87WCoGjcUcMjpqCI0LCkgECE1etDhVAJLyyx0HcC1Dk8rQNC053jAYIuFCfxyPGOZkkae56Xbe/Q', NULL),
(2, 3436827, 'ANTONIO HENRIQUE DE SOUZA NASCIMENTO', '01/11/2007', 'M', '1 Ano A', 'LOG', '', '', '', '', NULL),
(3, 3436909, 'BRUNA MAIARA NASCIMENTO OLIVEIRA', '27/09/2004', 'F', '1 Ano A', 'LOG', '', '', '', '', ''),
(4, 3428391, 'DANUBIA DE SANTANA BARROS', '06/05/2007', 'F', '1 Ano A', 'LOG', '', '', '', '', ''),
(5, 3429632, 'ELLEN CRISTINA DA SILVA', '28/10/2006', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(6, 3427147, 'FABIANO DA SILVA GILO FILHO', '06/09/2007', 'M', '1 Ano A', 'LOG', '', '', '', '', NULL),
(7, 3430911, 'GABRIELLY CLAUDINO VIEIRA', '20/03/2008', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(8, 3436885, 'GLEYCIANNY DOS SANTOS PAULA', '24/01/2008', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(9, 3430987, 'JOSE CLEYTON FRANCA SILVA', '01/12/2007', 'M', '1 Ano A', 'LOG', '', '', '', '', NULL),
(10, 3436793, 'JOSE VINICIUS CARVALHO DA SILVA', '23/07/2006', 'M', '1 Ano A', 'LOG', '', '', '', '', NULL),
(11, 3430710, 'JOYCE MARIA PESSOA DE SOUZA', '03/11/2007', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(12, 3429275, 'KETTLYN VICTORIA NASCIMENTO DA SILVA', '24/07/2007', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(13, 3427161, 'LAISA MARIA SILVA DOS SANTOS', '16/01/2008', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(14, 3436874, 'LAURA VITORIA DOS SANTOS', '18/07/2008', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(15, 3436867, 'LAVINIA GABRIELLE DA SILVA LIMA', '01/03/2008', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(16, 3427933, 'LAYS RAQUELLE ALMEIDA DE ANDRADE', '20/09/2007', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(17, 3427208, 'MARIA BEATRIZ DO NASCIMENTO SILVA', '06/06/2007', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(18, 3427461, 'MARIA BIANKA DA SILVA BARROS', '07/03/2008', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(19, 3429850, 'MARIA CLARA MELO DOS SANTOS', '13/10/2007', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(20, 3427185, 'MARIA EDUARDA BARBOSA GUIMARAES CORREIA', '23/11/2007', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(21, 3429157, 'MARIA EDUARDA DOS SANTOS SILVA', '01/05/2005', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(22, 3436803, 'MARIA LAYANNA DA SILVA CUNHA', '18/09/2007', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(23, 3427148, 'MARIA VITORIA GOMES BEZERRA', '15/07/2007', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(24, 3427982, 'MATHEUS VINICIUS DIAS AMORIM', '21/04/2008', 'M', '1 Ano A', 'LOG', '', '', '', '', NULL),
(25, 3427986, 'MAURICIO BERNARDINO DO NASCIMENTO NETO', '05/09/2006', 'M', '1 Ano A', 'LOG', '', '', '', '', NULL),
(26, 3427145, 'MICHELE BIANCA BATISTA BEZERRA', '17/07/2007', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(27, 3431308, 'PABLO DIERRY FRUTUOSO BRANCO', '27/07/2007', 'M', '1 Ano A', 'LOG', '', '', '', '', NULL),
(28, 3436841, 'RAIANY MARIA BATISTA DA SILVA', '07/09/2007', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(29, 3436900, 'RAYANE VITORIA DE MELO RODRIGUES', '03/05/2007', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(30, 3427947, 'RHAQUELY ARIELLE ALMEIDA DA SILVA', '01/07/2008', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(31, 3430312, 'RUANNA GABRIELLE CARDOSO DE MELO', '06/02/2007', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(32, 3429061, 'SAMUEL DE BARROS ALVES', '28/02/2008', 'M', '1 Ano A', 'LOG', '', '', '', '', NULL),
(33, 3348238, 'SILMARA KELLY DA SILVA SANTANA', '10/01/2008', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(34, 3427143, 'THAMYRES MYRELLA SILVA DE PAULA', '28/06/2007', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(35, 3146351, 'THIFANNY SANTOS DE SOUSA', '11/12/2005', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(36, 3436842, 'VANESSA LIMA DOS SANTOS', '07/04/2005', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(37, 3360863, 'WILSON SANTOS ANTAO', '17/05/2007', 'M', '1 Ano A', 'LOG', '', '', '', '', NULL),
(38, 3427151, 'YAHSMIN KATYLLE CAVALCANTI DA SILVA', '23/05/2007', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(39, 3522561, 'ARTHUR GABRIEL DA SILVA OLIVEIRA', '13/04/2006', 'M', '1 Ano A', 'LOG', '', '', '', '', NULL),
(40, 3500499, 'FAGNER ESTEVAO DA SILVA SEVERINO', '25/10/2007', 'M', '1 Ano A', 'LOG', '', '', '', '', NULL),
(41, 3412025, 'GABRIEL SANTOS GOMES DA SILVA', '05/03/2007', 'M', '1 Ano A', 'LOG', '', '', '', '', NULL),
(42, 3356380, 'JOAO ARTHUR LIMA SILVA', '19/06/2008', 'M', '1 Ano A', 'LOG', '', '', '', '', NULL),
(43, 3422390, 'KEVINY RUAN DO NASCIMENTO DOMINGOS', '19/06/2007', 'M', '1 Ano A', 'LOG', '', '', '', '', NULL),
(44, 3393905, 'MARIA CLARA NASCIMENTO SILVA', '22/05/2007', 'F', '1 Ano A', 'LOG', '', '', '', '', NULL),
(45, 3412639, 'DIOGO VINICIUS MARQUES DE SOUZA', '13/07/2005', 'M', '1 Ano A', 'LOG', '', '', '', '', NULL),
(46, 3431095, 'ALIVANI LUANE BARBOSA DE LIMA', '05/05/2008', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(47, 3431689, 'ANA JULIA SILVA CALAÇA', '26/01/2008', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(48, 3436830, 'ANNA CLAUDIA DOS SANTOS FRANCISCO', '25/01/2008', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(49, 3427237, 'BEATRIZ SWAN RODRIGUES SANTOS', '02/12/2007', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(50, 3431082, 'BRUNA GABRIELA DA SILVA ALVES', '07/02/2008', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(51, 3428265, 'CAMILE VITORIA SANTOS DE OLIVEIRA', '26/08/2007', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(52, 3429261, 'DAVI NUNES BERNARDO', '06/03/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(53, 3429722, 'DOUGLAS SAMUEL DA SILVA', '16/03/2006', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(54, 3436897, 'EDUARDO PEREIRA DA SILVA', '03/11/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(55, 3436862, 'EMILLY LOPES ALVES', '07/04/2008', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(56, 3432215, 'ERICK RAFAEL DE ALMEIDA SANTOS', '08/01/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(57, 3430541, 'ESTEFANNY RAIANE VITALINO DOS SANTOS', '27/02/2008', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(58, 3436825, 'EVERTON GABRIEL DA SILVA LIMA', '04/01/2008', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(59, 3428118, 'FABRICIO FERNANDES ALVES DA SILVA', '06/12/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(60, 3429155, 'GABRIEL ALMEIDA DE LIMA', '17/12/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(61, 3436808, 'GABRIEL DOS SANTOS SILVA', '25/01/2008', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(62, 3427159, 'GUILHERME HENRIQUE DA SILVA MOURA', '28/09/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(63, 3428493, 'JAMERSON KLEBER FRANÇA DA SILVA', '19/11/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(64, 3428116, 'JAMYLLE VITORIA DOS SANTOS', '22/06/2006', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(65, 3428380, 'JOAO PEDRO DA SILVA LUIZ', '13/03/2008', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(66, 3428079, 'JOAO VITOR DOS SANTOS FRANCA', '02/11/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(67, 3432217, 'KELVYN ROMUALDO DE JESUS RODRIGUES', '13/05/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(68, 3436898, 'KETILLY LAYLA DA SILVA BARBOSA', '07/05/2007', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(69, 3436768, 'LIVIA RAFAELY AMORIM SILVA', '12/08/2007', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(70, 3436816, 'LUCAS DA SILVA LIMA', '25/05/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(71, 3436820, 'LUCAS GABRIEL GOMES PAULINO', '14/08/2005', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(72, 3427252, 'LUIS HENRIQUE MONTEIRO DA SILVA', '14/04/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(73, 3436849, 'MARCOS GABRIEL LIMA RODOVAL', '30/05/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(74, 3436860, 'MARIA CECILIA VASCONCELOS DO NASCIMENTO', '03/10/2007', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(75, 3428131, 'MARIA GABRIELA DA SILVA MELO', '01/01/2008', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(76, 3430509, 'MARIA JULIA DOS SANTOS NASCIMENTO', '14/10/2007', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(77, 3432222, 'MARIA VITORIA GONCALVES DA SILVA', '06/04/2004', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(78, 3427598, 'MARIA VIVIANE DE SANTANA SANTOS', '25/07/2007', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(79, 3431658, 'MATHEUS DE BARROS FELIX', '15/11/2006', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(80, 3430331, 'MATHEUS HENRIQUE ALVES SILVA', '15/07/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(81, 3431859, 'MIKAELLY ADILA DOS SANTOS MELO', '14/09/2007', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(82, 3436787, 'NEEMYAS THAUA DA SILVA RIBEIRO', '31/08/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(83, 3436873, 'PAULO GABRIELL CARVALHO DOS SANTOS', '11/01/2008', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(84, 3431180, 'SABRINA MYLLENA DE OLIVEIRA ESTEVAO', '22/09/2007', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(85, 3436855, 'TAYLANE VITORIA REIS RODRIGUES', '14/09/2005', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(86, 3436776, 'THALYTA TAVARES DE SOUZA', '04/05/2007', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(87, 3427175, 'YURHY SAMARONI DA SILVA SOUSA', '08/08/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(88, 3522549, 'ARTHUR FILIPE DE OLIVEIRA CAVALCANTE', '18/06/2008', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(89, 3400834, 'ARTHUR SIMOES DOS SANTOS', '04/07/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(90, 3522556, 'ERICA GABRIELLY DA SILVA', '11/07/2006', 'F', '1 Ano A', 'TDS', '', '', '', '', NULL),
(91, 3359647, 'MATHEUS HENRIQUE LORENA VIEIRA', '28/12/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(92, 3436804, 'DANILLO THIAGO CRUZ DO NASCIMENTO', '29/11/2007', 'M', '1 Ano A', 'TDS', '', '', '', '', NULL),
(93, 3436910, 'ADRIELLY DE LIMA SILVA', '04/04/2008', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(94, 3430438, 'ANDRE LUIZ DE LIMA SANTANA', '26/08/2007', 'M', '1 Ano B', 'LOG', '', '', '', '', NULL),
(95, 3436819, 'AYNOA GABRIELY DUARTE DE LIMA', '30/08/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(96, 3436847, 'BIANCA GABRIELE CONCEICAO ANDRADE', '10/07/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(97, 3440425, 'BRENDHA CAMILY DA A FARIAS', '05/02/2005', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(98, 3436884, 'CLARA DANIELLY AGUIAR DA MACENA', '12/11/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(99, 3427150, 'CLEYBER ALLAN DA SILVA DO NASCIMENTO', '17/09/2007', 'M', '1 Ano B', 'LOG', '', '', '', '', NULL),
(100, 3427242, 'DAVI MEDEIROS DA SILVA', '12/07/2007', 'M', '1 Ano B', 'LOG', '', '', '', '', NULL),
(101, 3436806, 'EMILLY RAFAELLY DA CONCEICAO SILVA', '21/01/2008', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(102, 3432233, 'EVELLYN MANUELE DUARTE DOS SANTOS', '06/04/2008', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(103, 3436907, 'FERNANDA EMILLY ALVES DE LIMA', '17/01/2008', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(104, 3432228, 'FERNANDA SABRINA DAS NEVES SILVA', '10/03/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(105, 3432149, 'GISELE ALVES DO NASCIMENTO', '30/05/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(106, 3436850, 'HORTENCIA BEATRIZ SILVA DE SOUZA', '08/03/2008', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(107, 3436919, 'JARDENISE SAIONARA VITORIA PEREIRA DA SILVA', '20/01/2006', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(108, 3431933, 'JOSE GLEUSON RIBEIRO DE LIMA', '13/04/2005', 'M', '1 Ano B', 'LOG', '', '', '', '', NULL),
(109, 3436831, 'KAUA VINICIUS SILVA NASCIMENTO', '05/10/2006', 'M', '1 Ano B', 'LOG', '', '', '', '', NULL),
(110, 3430979, 'KAUANN VINICIUS DA SILVA FARIAS', '14/01/2008', 'M', '1 Ano B', 'LOG', '', '', '', '', NULL),
(111, 3436887, 'LAIS DOS SANTOS SANTIAGO', '28/03/2008', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(112, 3428047, 'LARISSA GABRIELLY MOTA DE LIRA', '21/10/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(113, 3427931, 'LIVIA EMANUELLY DIONISIO DA CRUZ', '06/02/2008', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(114, 3436889, 'MANUELA DE MOURA SANTOS', '05/02/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(115, 3427227, 'MARIA CLARA SANTOS FERREIRA DO CARMO', '23/11/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(116, 3427176, 'MARIA EDUARDA SILVA PEREIRA', '28/07/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(117, 3436801, 'MARIA EDUARDA SOARES CLEMENTINO', '02/11/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(118, 3436809, 'MARIA HELOISA SANTOS DO NASCIMENTO', '06/04/2008', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(119, 3436785, 'MARIA MARIANA MELO ELIAS DA SILVA', '20/09/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(120, 3431672, 'MATHEUS VINICIUS TRAJANO DA SILVA', '03/11/2007', 'M', '1 Ano B', 'LOG', '', '', '', '', NULL),
(121, 3436794, 'MAYARA MARTINS BEZERRA DAVID', '13/03/2008', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(122, 3436795, 'MICHELSON LUCAS SANTANA SOUZA', '22/10/2007', 'M', '1 Ano B', 'LOG', '', '', '', '', NULL),
(123, 3436864, 'MYKAELLE DE OLIVEIRA SANTOS', '23/08/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(124, 3436846, 'NAYARA CRISTIANE DE MOURA BEZERRA', '25/11/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(125, 3429180, 'RAYSSA GABRIELLY ALVES DE MOURA', '30/04/2008', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(126, 3427410, 'RENATA ADRIELLY SIMPLICIO EMILIANO', '25/01/2008', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(127, 3427203, 'RUBYA ALESSANDRA LIRA DO NASCIMENTO', '24/07/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(128, 3436814, 'SAMARA EVELYN SILVA DO CARMO', '13/05/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(129, 3429526, 'SARAH GABRIELY DA SILVA SOUSA', '23/08/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(130, 3436853, 'SUELEM YASMIM ARAUJO E SILVA', '06/12/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(131, 3436902, 'TAMYRES VITORIA SANTOS DE SANTANA', '28/06/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(132, 3436783, 'THAINARA DOS SANTOS BARROS', '07/12/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(133, 3427157, 'THAYS AMANDA ALMEIDA DIAS', '06/08/2007', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(134, 3436836, 'THIAGO JOSE DOS SANTOS', '10/03/2007', 'M', '1 Ano B', 'LOG', '', '', '', '', NULL),
(135, 3522538, 'CINTIA WILYANNE VITAL SANTOS DA SILVA', '13/03/2008', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(136, 3466134, 'ERICK KAWAN CORREIA LIRA', '17/03/2007', 'M', '1 Ano B', 'LOG', '', '', '', '', NULL),
(137, 3465837, 'ANNA VITORIA SOUZA FERREIRA DOS SANTOS', '29/03/2008', 'F', '1 Ano B', 'LOG', '', '', '', '', NULL),
(138, 3436888, 'ANNA KAROLYNE MENDES ALMEIDA', '13/04/2007', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(139, 3427206, 'ANNY BEATRIZ SIQUEIRA DO MONTE SANTOS', '29/03/2008', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(140, 3430355, 'ARTHUR DE ALMEIDA BORGES', '25/09/2008', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(141, 3436837, 'BEATRIZ VITORIA SILVA DE ARAUJO', '17/11/2007', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(142, 3436761, 'CLARA ANIELLY SILVA DOS SANTOS', '05/11/2007', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(143, 3436804, 'DANILLO THIAGO CRUZ DO NASCIMENTO', '29/11/2007', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(144, 3429096, 'DANYELE MARIA GOMES BARBOSA', '30/03/2008', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(145, 3436824, 'ERICK WESLEY DA SILVA ALBUQUERQUE', '12/05/2007', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(146, 3431660, 'EWERTTOM AMOS DA SILVA SANTOS', '31/01/2007', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(147, 3429840, 'GABRIEL DE LIMA MOREIRA', '16/03/2008', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(148, 3436894, 'GREIDISON CAVALCANTI DO NASCIMENTO FILHO', '26/06/2007', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(149, 3431440, 'HEYTTOR CESAR DE ANDRADE SILVA', '07/12/2007', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(150, 3436765, 'JEFFERSON RIKELMY DA SILVA', '30/11/2008', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(151, 3436762, 'JEREMIAS LUCAS DE SOUZA QUIRINO', '10/09/2007', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(152, 3427471, 'JOANA GABRIELLY NASCIMENTO DA SILVA', '21/01/2008', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(153, 3436832, 'JOAO VICTOR DOS SANTOS SILVA', '17/09/2007', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(154, 3429917, 'JOSILENY CAROLYNE FERREIRA GOMES', '29/01/2008', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(155, 3508617, 'KALLYNE GABRIELLY RODRIGUES DA SILVA', '19/03/2008', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(156, 3436866, 'KETYLLEN VITORIA NICOLAU DOS SANTOS', '11/04/2008', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(157, 3431978, 'KLEBERSON MATHEUS DE SANTANA SANTOS', '20/01/2009', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(158, 3428585, 'LETICIA GABRIELLY DE OLIVEIRA ARAUJO', '08/05/2008', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(159, 3431232, 'LUCAS EVERTON ANDRADE DE CARVALHO', '01/08/2006', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(160, 3430727, 'LUCAS RAFAEL DE MORAIS SANTOS', '14/06/2006', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(161, 3432225, 'LUCAS VIRGINIO DA SILVA', '10/11/2007', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(162, 3436828, 'LUYS FELLYPE SILVA DE ALMEIDA', '10/07/2007', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(163, 3431652, 'MARIANNY KAROLINY CRISPIM DA SILVA', '22/03/2008', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(164, 3436782, 'MATHEUS ADRIEL REIS DA SILVA', '24/07/2007', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(165, 3427156, 'MILLENA EDUARDA DE LIMA NORONHA', '15/01/2006', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(166, 3436912, 'PAULA MANUELA DE LIMA SILVA', '14/09/2007', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(167, 3429619, 'PRISCILA DA SILVA SANTOS', '18/10/2007', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(168, 3436857, 'RAFAEL MARTINS FIRMINO JUNIOR', '13/03/2008', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(169, 3432181, 'SABRINA DA SILVA NEVES', '20/04/2006', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(170, 3427373, 'SAMUEL GUIMARAES DA SILVA', '24/10/2006', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(171, 3436756, 'SANDRO DA SILVA GOMES', '12/09/2007', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(172, 3428013, 'SUELYTON JOSE MATIAS DA CUNHA', '10/04/2007', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(173, 3436906, 'TAYNARA TAVARES GOMES DE LIMA', '30/06/2008', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(174, 2534668, 'THAYS XAVIER DA SILVA', '20/03/2008', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(175, 3436822, 'VITORIA KAUANNY DA SILVA FERREIRA', '04/06/2007', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(176, 3436839, 'YURI SILVA BISPO', '16/05/2008', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(177, 3477384, 'ABILIO MESSIAS DE MEDEIROS NETO', '28/07/2004', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(178, 3522547, 'ANNA VITORIA ARAUJO MARTINS', '11/08/2007', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(179, 3467297, 'GABRIEL FERREIRA DA SILVA', '16/06/2006', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(180, 3522544, 'GEOVANNY LUCAS DE OLIVEIRA SANTOS MELO', '22/08/2006', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(181, 3408233, 'JULIA SOARES DANTAS DO NASCIMENTO', '09/10/2007', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(182, 3425604, 'ANDREW GABRIEL MENDES SIMPLICIO', '05/02/2008', 'M', '1 Ano B', 'TDS', '', '', '', '', NULL),
(183, 3430541, 'ESTEFANNY RAIANE VITALINO DOS SANTOS', '27/02/2008', 'F', '1 Ano B', 'TDS', '', '', '', '', NULL),
(184, 3200256, 'ADRIELLY DE LIMA MENDES', '09/09/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(185, 3200186, 'ADRYAN MATHEUS DE ARRUDA MELO', '28/12/2006', 'M', '2 Ano A', 'LOG', '', '', '', '', NULL),
(186, 3200188, 'ALEX EUGENIO SILVA', '05/01/2007', 'M', '2 Ano A', 'LOG', '', '', '', '', NULL),
(187, 3226233, 'ANA BEATRIZ MELO ELIAS DA SILVA', '05/08/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(188, 3200194, 'BIANKA DANTAS DA SILVA', '20/11/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(189, 3226258, 'CAYLLANE VITORIA SILVA DO NASCIMENTO', '25/06/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(190, 3200197, 'DIEGO MATEUS SANTOS SILVA', '15/02/2007', 'M', '2 Ano A', 'LOG', '', '', '', '', NULL),
(191, 3200180, 'ELIZABETHE SILVA LIMA', '20/05/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(192, 3200170, 'EMANUELA DA SILVA GERMANO', '09/08/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(193, 3200239, 'INGRYDI NICAELLE DOS SANTOS', '24/04/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(194, 3226252, 'JOAO PAULO DOS SANTOS ARAUJO', '04/01/2007', 'M', '2 Ano A', 'LOG', '', '', '', '', NULL),
(195, 3200201, 'JULIA LINS DE ARRUDA COSTA', '16/01/2007', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(196, 3226236, 'KAUA FILIPE DA SILVA SANTANA', '24/10/2006', 'M', '2 Ano A', 'LOG', '', '', '', '', NULL),
(197, 3200172, 'KAUANE RAFAELA ALVES DOS SANTOS', '27/07/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(198, 3226221, 'LARYSSA KEYTY DOS SANTOS SILVA', '16/06/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(199, 3200128, 'LETICIA GABRIELLA FERREIRA DOS SANTOS', '06/07/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(200, 3200202, 'LORENZO HARTAN BARBOSA ALMEIDA', '15/02/2007', 'M', '2 Ano A', 'LOG', '', '', '', '', NULL),
(201, 3200179, 'MAISSA SILVA SANTOS', '11/08/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(202, 3200176, 'MARCOS GABRIEL ROBERTO SOTERO', '10/10/2006', 'M', '2 Ano A', 'LOG', '', '', '', '', NULL),
(203, 3200177, 'MARIA CLARA DE FREITAS OLIVEIRA', '02/09/2007', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(204, 3126493, 'MARIA CLARA NUNES DOS SANTOS', '24/04/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(205, 3226267, 'MARIA EDUARDA DA CONCEICAO PENHA', '21/12/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(206, 3200244, 'MARIA ELOYSA DE LIMA', '01/08/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(207, 3200205, 'MARIA HELENA VIEIRA DOS SANTOS', '21/05/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(208, 3200178, 'MARIANA SILVA DE SANTANA GONCALVES', '15/10/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(209, 3226244, 'MURILO MEDEIROS LIMA', '29/07/2005', 'M', '2 Ano A', 'LOG', '', '', '', '', NULL),
(210, 3200182, 'PAULA RENATA SANTOS DE SOUZA', '06/01/2007', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(211, 3264792, 'PEDRO HENRIQUE DE OLIVEIRA SANTOS', '25/02/2007', 'M', '2 Ano A', 'LOG', '', '', '', '', NULL),
(212, 3200212, 'RAISSA SANTANA DE ANDRADE', '10/07/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(213, 3200217, 'THAISSA MARIA SILVA DE ALBUQUERQUE', '17/03/2007', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(214, 3200215, 'STHEFANY RAYANE MATIAS DE MELO', '24/12/2006', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(215, 3200214, 'STHEFANNY RAYANNE DA SILVA', '28/05/2005', 'F', '2 Ano A', 'LOG', '', '', '', '', NULL),
(216, 3226251, 'ALLERRANDRO BENJAMIN MONTEIRO DA SILVA', '07/12/2006', 'M', '3 Ano A', 'TDS', 'rosilenetec3@gmail.com', '81971063355', '', '', 'upload/Alerrandro Benjamin.jpg'),
(217, 3200193, 'ALLYSON CAVALCANTE CHAVES', '13/11/2006', 'M', '3 Ano A', 'TDS', 'allyson83639300@gmail.com', '81983639300', '', '', 'upload/Allyson Cavalcante.jpg'),
(218, 3258931, 'ARTHUR JOSE FERREIRA DA SILVA', '13/07/2006', 'M', '3 Ano A', 'TDS', 'arthurewanda@gmail.com', '81983950104', '', '', 'upload/Arthur José.jpg'),
(219, 3200206, 'CARLA SANDRELI FERNANDES DO CARMO SILVA', '29/04/2006', 'F', '3 Ano A', 'TDS', 'carlasandreli16@gmail.com', '81987478040', '', '', NULL),
(220, 3200207, 'CIRIA NATHIELLY ALMEIDA CAVALCANTI DA SILVA', '22/05/2007', 'F', '3 Ano A', 'TDS', 'cirianathielly@gmail.com ', '81986751729', '', '', 'upload/Ciria Nathielly.jpg'),
(221, 3226263, 'DAVID TAVARES GOMES DE LIMA', '26/07/2007', 'M', '3 Ano A', 'TDS', 'mobilevideos442@gmail.com', '81993801977', '', '', 'upload/David Tavares.jpg'),
(222, 3200132, 'DEBORAH SUZANA GOMES DA SILVA', '03/10/2006', 'F', '3 Ano A', 'TDS', '', '', '', '', NULL),
(223, 3226246, 'EDUARDO DE SOUZA FERREIRA', '07/11/2006', 'M', '3 Ano A', 'TDS', 'edukfdjkg2006@gmail.com', '81985835838', '', '', 'upload/Eduardo de Souza.jpg'),
(224, 3200134, 'ELIAS FRANCISCO DA SILVA NETO', '24/05/2007', 'M', '3 Ano A', 'TDS', 'eliasneto776@gmail.com', '81985153813', '', '', 'upload/Elias Francisco.jpg'),
(225, 3200146, 'EVERTON DE SANTANA SIMOES', '22/02/2007', 'M', '3 Ano A', 'TDS', 'evertondesantanaff@gmail.com', '81987712656', '', '', NULL),
(226, 3200141, 'FERNANDA BEZERRA DA SILVA', '19/07/2006', 'F', '3 Ano A', 'TDS', 'htknandax@gmail.com', '81993288496', '', '', 'upload/Fernanda Bezerra.jpg'),
(227, 2961293, 'GABRIEL FELIPE DA SILVA', '09/12/2005', 'M', '3 Ano A', 'TDS', 'gabrieelamf66@gmail.com', '81983396793', 'AQAAABQAAAAkAQAAAQASAAEAZAAAAAAAIAEAAOufJJUph8ltLWJC2IsKtOdzzd7eOuWAFUzIGx7m5H35YTd8WwA4Tl5LEl7U9qO21fEiWShiYHH7r0pj/mLribGaHsYs0tZF2KCJBGL4q5sbt/xDUYkyDh1qhH19DglYYU5VRM8VRezj2DogFfBBkv6fB2d7l8WVTv9aUNIVteviA27aEkfkYxQdbnhyxbQHdZVNLvd6o80rnHPEjnxDWprYslRnvsDNYWQECdwkHDFxqCdgfxU7yAFVnaZAWFxkVdMRr3lhgxLlQgDe2ni5JX5Au8ggDputlq57WNwmKlsJOiCe3cSvyf1NxjGUJQJlcCuVNaWweazn9cvXacsh4h0Um0c3AfagjFlMkvjTRosa9o8ds4xg1ZiWStlAcUmnhw', '', 'upload/Gabriel Felipe.jpg'),
(228, 3200147, 'GABRIEL BELO MONTEIRO', '05/09/2002', 'M', '3 Ano A', 'TDS', 'gabriel.estudosete@gmail.com', '81983003956', '', '', 'upload/Gabriel Belo.jpg'),
(229, 3200149, 'GRASIELLY DOMINGAS DE LIMA', '04/02/2005', 'F', '3 Ano A', 'TDS', '', '', '', '', NULL),
(230, 3200254, 'ISABELLA KAYLANE NASCIMENTO DA LUZ', '28/03/2007', 'F', '3 Ano A', 'TDS', 'isabellakailaneluz@gmail.com', '81985998176', '', '', 'upload/Isabella Kaylane.jpg'),
(231, 3200150, 'JOSE GABRIEL SANTANA DA PENHA', '22/07/2005', 'M', '3 Ano A', 'TDS', '', '', '', '', NULL),
(232, 3200135, 'JUAN PABLO DE OLIVEIRA SANTOS', '14/12/2006', 'M', '3 Ano A', 'TDS', 'juanpablo47450@gmail.com', '81985899860', '', '', 'upload/Juan Pablo.jpg'),
(233, 3200233, 'KAMYLLY MAYARA SANTOS TAVARES', '11/05/2006', 'F', '3 Ano A', 'TDS', 'kamyllymayara628@gmail.com', '81973113397', '', '', 'upload/Kamylly Mayara.jpg'),
(234, 3200151, 'KAUA VINICIUS RAMOS DE LIMA', '16/02/2007', 'M', '3 Ano A', 'TDS', 'kauavinicius762@gmail.com', '81985771087', '', '', 'upload/Kauã Vinícius.jpg'),
(235, 3226269, 'KAYLLANY KETLLY LINO DE SOUZA', '23/10/2006', 'F', '3 Ano A', 'TDS', 'kayllanyketlly23@gmail.com', '81985901123', '', '', 'upload/Kayllany Ketlly.jpg'),
(236, 2394793, 'KLEBER VINICIUS DIAS DA SILVA', '15/02/2007', 'M', '3 Ano A', 'TDS', 'soprodezey.tfm@gmail.com', '81988111418', '', '', NULL),
(237, 3200152, 'LARA FABIAN DOS SANTOS SANTANA', '18/08/2006', 'F', '3 Ano A', 'TDS', 'larafabiangnt@gmail.com', '81984354634', '', '', 'upload/Lara Fabian.jpg'),
(238, 3200220, 'LAYS MYLLENA FERREIRA DE SOUZA', '25/12/2004', 'F', '3 Ano A', 'TDS', 'laysmlln@gmail.com', '81985751516', '', '', 'upload/Lays Myllena.jpg'),
(239, 3226225, 'LUANA NASCIMENTO DE CARVALHO', '13/02/2007', 'F', '3 Ano A', 'TDS', 'luanst3535@gmail.com', '81994021474', '', '', 'upload/Luana Nascimento.jpg'),
(240, 3200221, 'LUCAS MIGUEL ROCHA SILVA', '25/04/2007', 'M', '3 Ano A', 'TDS', 'lucasmaeepai@gmail.com', '81997506956', '', '', 'upload/Lucas Miguel.jpg'),
(241, 3200157, 'LUIZ GUSTAVO DE SANTANA SILVA', '06/04/2006', 'M', '3 Ano A', 'TDS', 'luizgustavo2006lucasluan@gmail.com', '81995055024', '', '', 'upload/Luiz Gustavo.jpg'),
(242, 3226265, 'MARCUS VINICIUS DE FRANCA SILVA', '13/08/2006', 'M', '3 Ano A', 'TDS', '', '', '', '', 'upload/Marcus Vinícius.jpg'),
(243, 3200241, 'MARIA ELISA SOARES DA SILVA', '29/11/2006', 'F', '3 Ano A', 'TDS', 'elisasoares81@gmail.com', '81988235823', '', '', NULL),
(244, 3200137, 'MARIA JULIA GOMES DE LIMA', '15/07/2006', 'M', '3 Ano A', 'TDS', 'mariajuliagomes580@gmail.com', '81982991899', '', '', 'upload/Maria Julia.jpg'),
(245, 3200240, 'MELISSA DA SILVA SILVESTRE', '16/06/2006', 'F', '3 Ano A', 'TDS', 'meelissasilvestre@gmail.com', '81982996341', '', '', 'upload/Melissa da Silva.jpg'),
(246, 3200223, 'NICODEMOS VIEIRA DE SOUZA NETO', '21/07/2005', 'M', '3 Ano A', 'TDS', 'nicodemos120@gmail.com', '81993767276', '', '', 'upload/Nicodemos Vieira.jpg'),
(247, 3200159, 'PABLO HENRIQUE DOS SANTOS SILVA', '20/11/2006', 'M', '3 Ano A', 'TDS', 'pablophs1326@gmail.com', '81998812387', '', '', 'upload/Pablo Henrique.jpg'),
(248, 3200160, 'PALOMA BEZERRA DA SILVA', '12/03/2007', 'F', '3 Ano A', 'TDS', 'palomacabral196@gmail.com', '81987668213', '', '', 'upload/Paloma Bezerra.jpg'),
(249, 3226228, 'PEDRO FELIPE DE LIMA LEITE', '22/06/2005', 'M', '3 Ano A', 'TDS', 'pedrolimaleite15207@gmail.com', '81996880502', '', '', 'upload/Pedro Felipe.jpg'),
(250, 3226247, 'PEDRO GABRIEL DOS SANTOS FIRMINO', '06/05/2006', 'M', '3 Ano A', 'TDS', '860376pg@gmail.com', '81982654989', '', '', 'upload/Pedro Gabriel.jpg'),
(251, 3129508, 'PEDRO RAFAEL DA SILVA ARRUDA', '15/04/2006', 'M', '3 Ano A', 'TDS', '', '', '', '', NULL),
(252, 3226270, 'RAMON ARDELINO DE SOUZA SILVA', '12/08/2006', 'M', '3 Ano A', 'TDS', 'ramon2221161@gmail.com', '81989403472', '', '', 'upload/Ramon Ardelino.jpg'),
(253, 3226227, 'SUELLEN MARIA DE MORAIS SERAFIM', '19/10/2006', 'F', '3 Ano A', 'TDS', 'suellen06.morais@gmail.com', '81984277324', '', '', 'upload/Suellen Maria.jpg'),
(255, 3200259, 'BRENDA THAYZA LOPES DE AZEVEDO', '28/07/2006', 'F', '3 Ano A', 'TDS', '', '', '', '', NULL),
(256, 3226239, 'ALINE RAQUEL DO CARMO COSTA', '23/02/2007', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(257, 3200251, 'ALYSON RODRIGUES DIAS', '20/02/2007', 'M', '2 Ano B', 'LOG', '', '', '', '', NULL),
(258, 3200191, 'ANA LAIS DA SILVA SOUZA', '21/02/2007', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(259, 3200167, 'ANDERSON GABRIEL DE OLIVEIRA ANDRADE', '26/10/2006', 'M', '2 Ano B', 'LOG', '', '', '', '', NULL),
(260, 3200165, 'ANNA SOPHIA LIMA DE SIQUEIRA', '28/09/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(261, 3200166, 'AYSLANE CLARICE FERREIRA DE OLIVEIRA SILVA', '24/03/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(262, 3200168, 'CAUA VICTOR DO NASCIMENTO', '27/01/2007', 'M', '2 Ano B', 'LOG', '', '', '', '', NULL),
(263, 3200171, 'EMILLY DE OLIVEIRA SILVA', '15/08/2007', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(264, 3200198, 'ERICA DA PAZ DA SILVA', '27/04/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(265, 3200185, 'HIAGO VICTOR DA SILVA OLIVEIRA', '30/09/2006', 'M', '2 Ano B', 'LOG', '', '', '', '', NULL),
(266, 3200200, 'JOSE PEDRO HENRIQUE LIMA DO NASCIMENTO', '31/08/2006', 'M', '2 Ano B', 'LOG', '', '', '', '', NULL),
(267, 3200230, 'JULIANA SANTOS BEZERRA', '14/11/2007', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(268, 3226235, 'KAIRIS DANIELY DO NASCIMENTO SILVA', '18/05/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(269, 3200238, 'KAUA SANTANA DE ALMEIDA', '10/12/2006', 'M', '2 Ano B', 'LOG', '', '', '', '', NULL),
(270, 3200203, 'LAIS KELLY DA SILVA GERMANO', '02/08/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(271, 3226253, 'LAURA LEYDIANE DA SILVA ALVES', '26/07/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(272, 3200231, 'LETICIA LUELLY DA SILVA', '13/04/2007', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(273, 3200173, 'LETICIA MIKAELY FERREIRA DE SANTANA', '03/12/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(274, 3200204, 'MARCELLY DE LIMA SILVA', '15/09/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(275, 3200253, 'MARCOS VINICIUS DE SOUZA SILVA', '05/09/2004', 'M', '2 Ano B', 'LOG', '', '', '', '', NULL),
(276, 3200175, 'MARIA ALYNE SANTOS DA PENHA', '07/07/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(277, 3200258, 'MARIA CLARA SANTOS DE LIMA', '31/03/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(278, 3226241, 'MARIA EDUARDA DA SILVA', '22/01/2005', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(279, 3200131, 'MARIA HELOISA DOS SANTOS SILVA', '03/07/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(280, 3200234, 'MARIA NARA SANTOS DA PAZ', '09/06/2005', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(281, 3226242, 'MARIA VITORIA LIMA DO NASCIMENTO', '17/05/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(282, 3200236, 'MARIANA ESTEFANNY SILVA DO NASCIMENTO', '08/05/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(283, 3226262, 'MARYLLIA SILVA VIEIRA', '07/02/2007', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(284, 3226259, 'MATHEUS HENRIQUE MARTINS', '10/02/2006', 'M', '2 Ano B', 'LOG', '', '', '', '', NULL),
(285, 3226237, 'NOEMI SOARES DE SOUZA', '30/01/2007', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(286, 3200255, 'PRISCILA MACIELLE DA CONCEICAO SILVA', '16/10/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(287, 3200183, 'RAYANY VITORIA DOS SANTOS SOUZA', '20/04/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(288, 3200213, 'RAYSSA KEREEN SIMPLICIO DOS SANTOS', '04/09/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(289, 3200247, 'RIVALDO DE MELO ARRUDA JUNIOR', '28/05/2006', 'M', '2 Ano B', 'LOG', '', '', '', '', NULL),
(290, 3226240, 'ROBERTA ROSCELI MELO DA CRUZ', '02/03/2007', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(291, 3200214, 'STHEFANNY RAYANNE DA SILVA', '28/05/2005', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(292, 3200215, 'STHEFANY RAYANE MATIAS DE MELO', '24/12/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(293, 3200218, 'THAWANY IZABEL DOS SANTOS SILVA', '18/03/2007', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(294, 3200243, 'THAYNA CORREIA FERREIRA', '19/09/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(295, 3200216, 'THAYS EMANUELLY DOS SANTOS FARIAS', '24/03/2007', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(296, 3226238, 'VITORIA STEFANY MENDONCA DOS SANTOS', '20/03/2007', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(297, 3200184, 'WILLYANNE MAYARA ARAUJO CARVALHO', '25/09/2006', 'F', '2 Ano B', 'LOG', '', '', '', '', NULL),
(298, 3200195, 'ALLYSON DOS SANTOS NASCIMENTO', '21/07/2006', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(299, 3200245, 'ANNIELY SHAILAYNE ARAUJO PADILHA DA SILVA', '28/11/2006', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(300, 3200196, 'BIANKA LAURY FERREIRA GOMES', '06/09/2006', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(301, 3200259, 'BRENDA THAYZA LOPES DE AZEVEDO', '28/07/2006', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(302, 3200142, 'DAVI LUCAS SANTOS OLIVEIRA', '30/07/2006', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(303, 3200208, 'DEBORA SEVERO DO NASCIMENTO', '18/09/2006', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(304, 3200148, 'GABRIEL VINNICIUS RAMOS BATISTA', '21/12/2006', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(305, 3226254, 'IANN VITOR BARRETO DA SILVA', '19/05/2006', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(306, 3200219, 'IZABEL SANTOS SILVA', '23/08/2006', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(307, 3191326, 'JOANA GOMES DA SILVA', '23/12/2006', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(308, 3200249, 'JOSE THAUAN DOS SANTOS', '13/05/2006', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(309, 3300592, 'JUAN EMANUEL LACERDA NUNES', '18/07/2006', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(310, 3226223, 'KELVYS CARLOS DA CONCEICAO', '06/01/2007', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(311, 3200154, 'LETICIA PENHA DE SOUZA', '08/03/2007', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(312, 3226256, 'LIVIA DA SILVA BEZERRA', '24/05/2006', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(313, 3200156, 'LUCAS KAUA ALVES DA SILVA', '11/05/2006', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(314, 3200222, 'LUCAS THIAGO BATISTA DA SILVA', '20/04/2006', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(315, 3200260, 'MARIA ISABEL DE SOUZA BEZERRA', '08/02/2007', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(316, 3200246, 'MARIA JULIA SILVA DO NASCIMENTO', '29/06/2006', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(317, 3200158, 'MARTINS MICHELSON DA SILVA MENDES', '07/03/2007', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(318, 3200138, 'MICHELLI GABRIELLI DE ALMEIDA SILVA', '29/04/2006', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(319, 3200144, 'MILENA JULIA DA SILVA ALVES', '13/10/2006', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(320, 3259099, 'MYQUEIAS SANTOS DA PAIXAO', '16/06/2006', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(321, 3226232, 'NATALIA OLIVEIRA LIMA SILVA', '16/12/2006', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(322, 3200143, 'PAMELA ISABELY MEDEIROS DA SILVA', '21/12/2007', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(323, 3200140, 'PEDRO HERNRIQUE BORGES DE ALBUQUERQUE', '23/11/2006', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(324, 3226250, 'RAYSSA MICAELLY DA SILVA SOUZA', '12/05/2006', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(325, 3226222, 'RAYSSA VITORIA SANTANA DA SILVA', '19/03/2007', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(326, 3200189, 'ROSSANA BARBARA RODRIGUES DA SILVA', '15/07/2006', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(327, 3200139, 'RUAN FRANCISCO DIAS DA SILVA', '23/11/2006', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(328, 3200145, 'RUAN FREITAS PEIXOTO', '09/05/2006', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(329, 3200257, 'SAMUEL SERAFIM DE LIMA', '04/09/2005', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(330, 3200161, 'THAIS DE FRANÇA SILVA', '10/07/2007', 'F', '2 Ano B', 'TDS', '', '', '', '', NULL),
(331, 3226257, 'ULISSES GABRIEL BARBOSA MARTINS', '22/05/2004', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(332, 3200164, 'WEVANY DE ANDRADE FREITAS', '15/05/2006', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(333, 3200162, 'YTALLO MIGUEL DE SANTANA CORREIA', '19/07/2006', 'M', '2 Ano B', 'TDS', '', '', '', '', NULL),
(335, 3015299, 'ALESSANDRA AZEVEDO DA SILVA', '17/07/2005', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(336, 3015310, 'ALINE VITORIA DA SILVA SOUZA', '06/08/2005', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(337, 2984949, 'ANA JULIA PEREIRA DE LIMA', '21/06/2004', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(338, 2984859, 'CAMILLY RAFAELLY SANTANA DE MELO', '11/11/2005', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(339, 2984919, 'CARLOS WERICK SABINO DA SILVA', '27/10/2004', 'M', '3 Ano A', 'LOG', '', '', '', '', NULL),
(340, 2984852, 'EMANUELLY RODRIGUES DA SILVA', '06/07/2005', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(341, 2984905, 'GRAZIELLY GUERRA NEVES DA SILVA', '25/06/2005', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(342, 2949101, 'GUSTAVO HENRY HONORIO DE LIMA', '07/03/2006', 'M', '3 Ano A', 'LOG', '', '', '', '', NULL),
(343, 2998297, 'HELOISA VITORIA ALBUQUERQUE RAMOS', '31/12/2005', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(344, 2160984, 'HELOIZA GABRIELY DOS SANTOS SILVA', '17/12/2005', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(345, 2984935, 'IRIS CAMILA DE ALMEIDA LIMA', '01/06/2006', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(346, 2984908, 'JOALISSON SANTANA NASCIMENTO', '20/10/2004', 'M', '3 Ano A', 'LOG', '', '', '', '', NULL),
(347, 2984910, 'KAUAN VINICIUS DA SILVA', '05/10/2003', 'M', '3 Ano A', 'LOG', '', '', '', '', NULL),
(348, 2984928, 'KEEVIN GABRYEL DE SOUZA SILVA', '03/03/2004', 'M', '3 Ano A', 'LOG', '', '', '', '', NULL),
(349, 3083674, 'LUCAS EMANUEL DE LYRA MONTEIRO', '04/03/2004', 'M', '3 Ano A', 'LOG', '', '', '', '', NULL),
(350, 3015322, 'MARIA APARECIDA DE LIMA SILVA', '18/02/2006', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(351, 2984863, 'MARIA BRENDA VICTORIA FERREIRA DA SILVA', '15/12/2005', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(352, 2984914, 'MARIA BYANCA GONCALVES SILVA', '23/11/2005', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(353, 2211835, 'MARIA CLARA DE SOUZA SILVA', '28/11/2004', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(354, 2176021, 'MARIA LETICIA BATISTA DA SILVA', '03/06/2006', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(355, 2984888, 'MARIA NATHALIA DE FREITAS OLIVEIRA', '12/08/2005', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(356, 2984856, 'MATHEUS VINICIUS DA SILVA LIMA', '10/09/2004', 'M', '3 Ano A', 'LOG', '', '', '', '', NULL),
(357, 2984864, 'MYRELLA GABRIELLY DO CARMO NASCIMENTO', '06/12/2005', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(358, 3015297, 'PEDRO BATISTA DOS SANTOS', '05/12/2005', 'M', '3 Ano A', 'LOG', '', '', '', '', NULL),
(359, 3015321, 'RAINARA CAUANE NASCIMENTO DE ARRUDA', '26/03/2006', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(360, 2984893, 'RAYSSA GABRIELLY DOS SANTOS SILVA', '21/11/2005', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(361, 2984874, 'REBECA VITORIA DE CARVALHO SANTANA', '02/05/2005', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(362, 3015291, 'RENATA ELLEN DA SILVA FARIAS', '06/02/2006', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(363, 2984911, 'ROBSON JUNIOR DE SOUZA SILVA FILHO', '14/07/2005', 'M', '3 Ano A', 'LOG', '', '', '', '', NULL),
(364, 3015294, 'SUELLEN MARIA DE LIMA SILVA', '06/04/2006', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(365, 2479833, 'VITORIA LOURENA NOGUEIRA LEANDRO', '07/03/2006', 'F', '3 Ano A', 'LOG', '', '', '', '', NULL),
(366, 2984890, 'WERLLEN JONATHAN PEREIRA DA SILVA', '26/05/2004', 'M', '3 Ano A', 'LOG', '', '', '', '', NULL),
(367, 2984956, 'DALTON DO NASCIMENTO SILVA', '23/06/2004', 'M', '3 Ano A', 'LOG', '', '', '', '', NULL),
(400, 2984889, 'ADRIA CARLA DO NASCIMENTO MENDONCA', '06/10/2006', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(401, 2984884, 'ALANA CUNHA DE SANTANA', '02/09/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(402, 2984836, 'AYRLA CRISTINA MARIA DE AMORIM SILVA', '27/12/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(403, 2984847, 'BEATRIZ VITORIA ALBINO DA SILVA', '21/11/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(404, 3015313, 'BEATRIZ VITORIA DA CONCEIÇAO ANDRADE', '16/01/2006', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(405, 3015326, 'CINTHYA DAIANE PEREIRA DA COSTA', '01/05/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(406, 3015302, 'DANIEL VINICIUS LIMA DA SILVA', '25/02/2003', 'M', '3 Ano B', 'LOG', '', '', '', '', NULL),
(407, 3015324, 'EVELLYN THAYS FIDELIS COSTA', '05/05/2006', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(408, 2984945, 'EWERLLY NAYARA PEREIRA DA SILVA', '07/02/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(409, 2984904, 'FABIOLA LAHAYNE DOS SANTOS SILVA', '10/02/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(410, 2984924, 'GABRIEL VICTOR FRANCISCO DA SILVA', '03/02/2006', 'M', '3 Ano B', 'LOG', '', '', '', '', NULL),
(411, 2984872, 'ISABELLY DO CARMO SILVA', '08/04/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(412, 2984839, 'JERFFESON FERREIRA DE SOUZA', '27/07/2005', 'M', '3 Ano B', 'LOG', '', '', '', '', NULL),
(413, 3015331, 'JESSYLLA FELIX DOS SANTOS LAURINDO', '06/10/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(414, 2984868, 'JONAS AUGUSTO SILVA MORAES', '24/11/2004', 'M', '3 Ano B', 'LOG', '', '', '', '', NULL),
(415, 2984846, 'JOSE FELIPE SILVA DE ALMEIDA', '14/09/2004', 'M', '3 Ano B', 'LOG', '', '', '', '', NULL),
(416, 2984879, 'JOSEFA ANA DOS SANTOS NETA', '01/06/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(417, 3015304, 'JULIA GRAZIELY DA SILVA', '19/08/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(418, 2984837, 'KAMYLA VITORIA BEZERRA BARBOSA', '18/08/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(419, 3015286, 'KAMYLLE VITORIA DE OLIVEIRA PEREIRA', '10/01/2006', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(420, 3083671, 'KAUA MUNIZ QUEIROZ DE OLIVEIRA', '27/11/2004', 'M', '3 Ano B', 'LOG', '', '', '', '', NULL),
(421, 2984892, 'LUAN KELVYN BARROS DA SILVA', '01/02/2006', 'M', '3 Ano B', 'LOG', '', '', '', '', NULL),
(422, 3083672, 'LUCAS GABRIEL DOS SANTOS COSTA', '04/03/2006', 'M', '3 Ano B', 'LOG', '', '', '', '', NULL),
(423, 2984942, 'MARCELA SANTOS SILVA', '02/11/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(424, 2984943, 'MARIA CLARA NASCIMENTO DA SILVA', '18/03/2006', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(425, 2984843, 'MARIA EDUARDA OLIVEIRA SILVA', '07/03/2006', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(426, 3015288, 'MARIA KAROLAYNI SILVA SANTOS', '16/11/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(427, 3015312, 'MARIA THALYTA SILVA DA CUNHA', '07/01/2004', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(428, 2984953, 'MILENA KARLA BATISTA DE LIMA CARMO', '14/09/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(429, 2984840, 'QUESYA VITORIA BATISTA PEREIRA DA LUZ', '04/04/2006', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(430, 2984912, 'RAYSSA THAYNA DA SILVA OLIVEIRA', '20/06/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(431, 2984897, 'REBECA NUNES BERNARDO', '01/01/2006', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(432, 2984885, 'RODRIGO DOS SANTOS SILVA', '30/03/2006', 'M', '3 Ano B', 'LOG', '', '', '', '', NULL),
(433, 3015328, 'SANDRIELLY ROBERTA DA SILVA', '21/09/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(434, 2984845, 'TAIS RODRIGUES DE LUNA', '17/06/2005', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(435, 3015311, 'WENDELL CAUET BARBOSA DA SILVA', '16/02/2006', 'M', '3 Ano B', 'LOG', '', '', '', '', NULL),
(436, 2984886, 'WISLLEY VITORIA DOS SANTOS PAIXAO', '29/09/2004', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(437, 3015332, 'MANOELLA FERREIRA GOMES', '10/05/2003', 'F', '3 Ano B', 'LOG', '', '', '', '', NULL),
(438, 3015285, 'ANDRE RICARDO ALVES DO NASCIMENTO', '07/09/2005', 'M', '3 Ano B', 'TDS', '', '', '', '', NULL),
(439, 2984881, 'ARTHUR VINICIUS DA SILVA SOUZA', '23/04/2004', 'M', '3 Ano B', 'TDS', '', '', '', '', NULL),
(440, 2984848, 'CLIVIA VITORIA DA SILVA BEZERRA', '21/03/2006', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(441, 3015282, 'DOUGLAS WILLAMYS ESTEVAM BISPO', '10/02/2006', 'M', '3 Ano B', 'TDS', '', '', '', '', NULL),
(442, 2984944, 'ELISANGELA REGINA DA SILVA SOARES', '12/12/2005', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(443, 2984842, 'ERIK GUIMARAES DE SOUZA', '17/03/2006', 'M', '3 Ano B', 'TDS', '', '', '', '', NULL),
(444, 3015317, 'EVELYN KEULY DE LIMA E SILVA', '07/01/2006', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(445, 2984844, 'FERNANDO CAVALCANTE SILVA', '07/01/2006', 'M', '3 Ano B', 'TDS', '', '', '', '', NULL),
(446, 2984883, 'HEITOR FRANCISCO DE MELO BISNETO', '03/10/2003', 'M', '3 Ano B', 'TDS', '', '', '', '', NULL),
(447, 2984851, 'JOSE GUILHERME ARAUJO DO NASCIMENTO', '12/09/2005', 'M', '3 Ano B', 'TDS', '', '', '', '', NULL),
(448, 3015320, 'JOSE JEFFERSON DOS SANTOS MONTEIRO SILVA', '20/12/2005', 'M', '3 Ano B', 'TDS', '', '', '', '', NULL),
(449, 2984930, 'JULIA GABRIELLY FRANCISCO DA SILVA', '25/06/2004', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(450, 2984894, 'KAYSE SANTOS SIMOES DA SILVA', '14/07/2005', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(451, 2904090, 'KENNEDY ANDRE DOS SANTOS SILVA', '26/04/2005', 'M', '3 Ano B', 'TDS', '', '', '', '', NULL),
(452, 3015284, 'LETICIA GABRIELLA DOS SANTOS NASCIMENTO', '26/04/2005', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(453, 3015289, 'LETICIA RAYANE DE LIMA GOMES', '06/06/2006', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(454, 2984850, 'LUCAS GABRIEL ALVES SILVA', '23/02/2006', 'M', '3 Ano B', 'TDS', '', '', '', '', NULL),
(455, 2984849, 'MARIA CAROLINA LANE DA SILVA FONTES', '02/03/2006', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(456, 2984835, 'MARIA LAURA DOS SANTOS SILVA', '26/05/2006', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(457, 3015305, 'MARIA RENATA FREIRE DA SILVA', '05/11/2005', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(458, 2984869, 'MARIA VITORIA DE MELO SILVA', '10/06/2005', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(459, 2984902, 'MARIA VITORIA MACHADO DA SILVA', '30/03/2004', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(460, 2984841, 'MARILIA GABRIELA LUCENA DA SILVA', '20/08/2005', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(461, 2984838, 'MAYARA VITORIA FERNANDES DO NASCIMENTO', '02/02/2005', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(462, 2984948, 'PEDRO HENRIQUE BARBOSA DE ALMEIDA', '15/06/2005', 'M', '3 Ano B', 'TDS', '', '', '', '', NULL),
(463, 2984915, 'PEDRO LUCAS DO NASCIMENTO', '08/07/2005', 'M', '3 Ano B', 'TDS', '', '', '', '', NULL),
(464, 3015306, 'RAYANE EMANUELLY DE LIMA SOUZA', '02/10/2005', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(465, 2984938, 'REBECA VITORIA SANTOS DE PAULA', '30/08/2005', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(466, 2984834, 'VICTOR ANDREY LINO DE FARIAS', '12/10/2004', 'M', '3 Ano B', 'TDS', '', '', '', '', NULL),
(467, 2984906, 'AMANDA MARIA DO PRADO SILVA', '16/06/2005', 'F', '3 Ano B', 'TDS', '', '', '', '', NULL),
(500, 1, 'HELIO MIRANDA', '1996-06-22', 'M', '2 Ano A', 'TDS', 'helio@gmail.com', '81988888888', 'AQAAABQAAAAUAQAAAQASAAEAZAAAAAAAEAEAAK7OnSqZ6RcMzHsEklZQ2SSolRFlSFeAePZYILgXSxh9Rj4X*wg*9oVkHhB2aq0xriFc76mlXb*SzuMLY1gZfY8GC2E0OxXqVYhdRuFdR3t6P07qOqY5s6ai*7oplb4s03LFuVthKszOGf1h14ySzT/J5bZtfefau3tuqbr7VT6Rc/Y5AbWw4uTJqmMmvAKCfgYxhVWTYH7In2DhUW/qCYK3zVaGxtKYRS7EJ0khphQFWJvA6SgBtt/iWO6cFuYPFUIst5zHOv*jjLVxo/T0XKXvVRZEHHrO6BjOAqchzfxKhlUyW5fnErFSVBOShY8*EiFk2ru65D*d1JMBZuH2v9MaQepiAaUL2R8F2xuQleaw', '', NULL);
INSERT INTO `aluno` (`id`, `Matricula`, `Nome`, `Data_Nasc`, `Sexo`, `Serie`, `Curso`, `email`, `Telefone`, `biometria01`, `biometria02`, `imagem`) VALUES
(501, 2, 'EWERTON VANDERLEY', '2005-04-12', 'M', '2 Ano A', 'TDS', 'ewerton@gmail.com', '81988888888', 'AQAAABQAAADUAAAAAQASAAEAYgAAAAAAzAAAACU4xvfArBYAE5rE/Y9rR12UkpvrVn8nfRz0MSoob4tnUMj2pGKkYxFU1tYbqhqCf7hpoMU960ofsc5VuLX2SBm*uqrsB8h*1M5aa7cDZgZh*kLgGYBbwa/buIn7Lx/6RsJfMLKTmk*IWWCITkOLiT8Scz8dPSj1CH/krNgDyMDXgnSSQUnAM87G0R9pNOOENexfIh8iY9p0VV/*EFSHORTkQezHMDTNWoK*SWX*FNXG8r532mjb6cSBOwTLeZoM*uYIbL0uEr4XiwcJI88y5og', '', NULL),
(502, 3, 'ALESSANDRO JUNIOR', '2003-06-03', 'M', '2 Ano A', 'TDS', 'alessandro@gmail.com', '81988888888', 'AQAAABQAAAA0AQAAAQASAAEAZAAAAAAAJAEAAOkyMQjztFKpNBfjUxGpMeiZb7FIsI2RA7ziHLq6OhuHbgko0aR0S6kuNLdXc2KyIY*M*iQ4wKr4Ki*Nyhtr*C9JVu6hz*mBuZcKzz8WbBUTRyj47wDBWfQ/LzniwAfcxmtpxVLV5xMTXd0GIQSftsScVARjUc668AFX1IH8BTHDX7TsDR/QtxSveeFp3i5x7dl*8/9EZTKTm/L1VgTZ7GKrkaOOofLO5bJQRaNGhcvb6JE1E5YLZbVvDvYsEsg1a4g2fqKiVNmXZD*Rit7bJr55XF9CgwenHGpBNN0GXjwQq3EWT/j*/1SRTymtsUC9Dj2YXID9tlGNfSROwep1urqWA8JLz5YKNm0qzXnWJzQIi1dyJcYHJ4*7YSWIYC2Dfpz9rBz*wV70aA*jsOsLsQc', '', NULL),
(503, 4, 'JOÃO VITOR', '2004-06-22', 'M', '2 Ano A', 'TDS', 'joao@gmail.com', '81988888888', 'AQAAABQAAAAUAQAAAQASAAEAYQAAAAAABAEAAJaxV1LLZpWir7otlgEEO3U4ufB/CNYLKCmnV6XJI53*8REfYBrpTxEvNG9Dhe76PVjKgsXHX3pvz0nfXXkyRLXXFIU0fI/buCA5i6WN7EP*oOqJT6XWLxRUmsaDJ6IsJqmfoF7tet8AYHq/0x0LO3f9Odhw6prJoA3AMd*61UKyDK6iXsNluOV17Rimuw1zS22O*Gyg5bHF2bfyWBWxwetzHLqx/OVpkQ/wCq/qsT7pJXqvTtE**CgIyv8Gky*44XSVI8XccJZCj/ZFzy8UdbtByyFH3h9MhRwaH*iOD32XQIhRMCsnfXTnQ4eApnhLWwPbxqcfehpE5InRGTJO6egj*XzDWxQ6bP1RXNoTUQ4/', '', NULL),
(504, 5, 'GABRIEL DIAS', '2002-05-10', 'M', '2 Ano A', 'TDS', 'gabriel@gmail.com', '81988888888', 'AQAAABQAAAA0AQAAAQASAAEAZAAAAAAAKAEAAF5tjTd5riDSiaHo64Rf1yvGbCqf8Py*q8EA/y1wZgpICtR/XMpyCPVvxE*OZahVRpwKLElw4uBWKL4cGNeIYe8D9T4MaFv4BB1y2sY4Zm1N2hwuHT5nn8wjS9BsLP3TIu4h8D/1IzrIzIoyjpqv400CuiwsDXZ2OIRj*x5aov81xewp6cqoEzFzM0RMqJ/LzE6T9rqBkoLHanN3zvefVJi2l73a8xp7cF1FVpe0KPBPk0A4XFGpH7x17InzvrV08LvMtXD3xoYGRT0sdcAiPKPuSIdsdGVw6JI3KP2HyX2aly/brwx2MMd4re1uGKfuICu3GtjRlRBHNZE3WqUPQ3/njFPX**GR2uU2E*zM3Bj0tKnHWGXtKb02/kI*7CjjjBijzg3qjJrWPljVaAAuvco', '', NULL),
(505, 6, 'ISMAEL PEDRO', '2003-06-28', 'M', '2 Ano A', 'TDS', 'ismael@gmail.com', '81988888888', 'AQAAABQAAAAkAQAAAQASAAEAZAAAAAAAFAEAAP4PTLl4kZTkPC0yLM*SbXPGUKxlf4iXROhhXTSq4rHYezRSdhc97vxBpiCRDypKCiUzhK9o6fxlbOSABG828Rpjirjc2jGqPV9jSbcts/uhF8iePBgz6NmmwpHgBASrBWWAjKMyP1i*i8mfsADn5IiUhKVQ9tKPivDh4e*satQEFopiS/Jn19h7uQJCyLFLhZa0K90oHpSaLmrWsge65UWI3J2T4aYFwlrd6lTyTG62GkRCfDUubkGKDmDBhJ5*7/ia5xRVBVbg0dQPoVNLA*tmMb77q7gU684Ss1pHelCkN9uLt/OGAqlLDeld7VF45vL/B*nfkjn4SxhR9m2SLNlIsUV/lOE*MfHjzNHeWpZZuvEmPt8UnWJx57heQrcbCw', '', NULL),
(506, 6, 'JOSE RODRIGO', '2001-03-23', 'M', '2 Ano A', 'TDS', 'rodrigao@gmail.com', '81988888888', 'AQAAABQAAADkAAAAAQASAAEAZAAAAAAA1AAAAA8my0jkxfaz4zA940L72U3Kxn3HjhpMu1NY/*W0ggJxj60dXh/llphCuLgG2YRSyoFiZErfpoxcdLv1*tBgEWQhCJZM/yUJDzaLvgkWoBxXeyfoR8w9FO6JP3wFu42lqmr7dZWXjS1bPqVpiGHf7xecoJ2uH5IZTB90sdUyocd9yFfQtfJGIui5HWDBvOB5NQCkfx0LS0TdKefkudJZEV4R4b6XqtPjxAsuAmII/loHBkebaN5oaNqiWghpFJ*qpIWC8JmqE/QBYyOe6tPBEdzhV5jwz3H2QQuoJhropkaF', '', NULL),
(507, 7, 'RENATO FERREIRA', '1958-06-12', 'M', '2 Ano A', 'TDS', 'renato@gmail.com', '81988888888', 'AQAAABQAAABEAQAAAQASAAEAZAAAAAAANAEAAIQSO6XjdtOd6q7jsdixQ4BAozshN4QxkuVWD7nW/13SaK4b/CWqiIi40apwFWrw4RIra5BkxQBRdxBK6rme/kwNTdh**vIttx6O2kUFcVDGiXBa/uQ0MxNkvoejjo3kvdZCy2oQZ5sfsiUFEswoLJB5jAtZqsS1I/bVIesx1jg/N*QMK7zFkrHIgVn1ToPE8e8XW2fJ3zIDaVR9fgL7OI49yri2WA0wJHB/RVLS*cHo839T7lr2W6AOCNpYqdkKH0iq0PuGr3byMQBB8HMzQYApPjQzutcD3oUt7vSqEfzsC88FjhkilkYAS/jDjMEk2xAxNWCebBoCSss/wkvIZNVqZmkDvGfTHmhLG2dj9iw/8ze9XlM3Y/MrSPn8PiZQdbMfTN6ejf9O9csnae*tuc*fGA*UHdVSqMfw247TuvOb', '', NULL),
(508, 8, 'RONALD FELIPE', '2002-07-15', 'M', '2 Ano A', 'TDS', 'ronald@gmai.com', '81988888888', 'AQAAABQAAACEAQAAAQASAAEAZAAAAAAAeAEAAPVyRl6kgnWaKJ9oDS1/GSNNt9Rmd4eR3XOg6yTIBrx9oAWHQWwr9LwHdBY3ygFtsEMQ19mVuZhasujHDVmIsvWuki1cjE1CxzGGQ78ZjMTGztBEubFTzYvj2grZqulgtDApOOvSanjCbQ6SFHm3CObE2WXjV73xVXa2QnILB326itifpKhC02EVB0YKQoMTtv0hvH/Z/MNAZCN3Z6/qDfjYa3*9xf5crmJaD9W*K0V2nZIR97jO4118m2aRkiK7fq2cuQYNuYYhYUfJn8HEyM7k23kJAvPZETpXcHG4LW9yPvw4/IVBIuV747RTduVcbv05E5lE4m1EogJIkDGz2c0rEa85AVXkLemNsQaDoQ7yirUH77hjxotHm*aO7UStCNXys5zdK6Ck53hsMaQaHe89E39CIRaY2NjLYivuRdg0aSWVQHjC5N6WJDFSAicXhBaqufe6Tl73m5MJ', '', NULL),
(509, 9, 'WESLEY FELIX', '2003-09-30', 'M', '2 Ano A', 'TDS', 'wesley@gmail.com', '81988888888', 'AQAAABQAAAAkAQAAAQASAAEAZAAAAAAAFAEAAD*FPzk9ImVoOEfvKWpIPcvW8DkuHTxAsIGAaxkksuypQmgeHinTQVT298kzJceqgpPJp5OsnBtHWTuticKNG4gJ9Qk1DTZPGNaAxh14yz/f5jDiL5cPuOV8V9hYeXWvNvsk89TiTTnBbQYj/ttXe1QBi94oNe36hEMEDKnGYlANyuNiKe3*P8wbVybStoDa8GKGKSe57tUmMM50VE6CzYLAM6kkKPgEbir5OwKH2/ba9qPa2Hf3rdxWRfa6f/mO0ZDGq0Qro7eITUtSNXEO14otoS8HBnabr5CS9E*GiCD*p7kqJXqpm96g/2vDs3a0S8cRDANmURe9ACateaD/4pJLiLCkFF9GJRRg6CTzLQooDOxRgzxMy/cz4L3U9WuNnQ', '', NULL),
(510, 10, 'RAFAEL AUGUSTO', '1998-05-02', 'M', '2 Ano A', 'TDS', 'rafael@gmail.com', '81988888888', 'AQAAABQAAABEAQAAAQASAAEAZAAAAAAANAEAAAImcdYYUG9ZhNv3*cRoy5Ih19Ng*vSd3Zv4x9agX*VxAqbjII*FWuyNf2z9k5Itxlz03axJQ4HcOdcwGqSVnIUGFYfpB7bwHc0qIXwe7l8I3MKS/RXVqaD6xArSmG6ffvd1a9UQtETZO8j5THRN5cM45zz1kKVP6txrG4PKf48m*vRYhHaGqmE9X7bqF0TSiV0rYs0qMU8V2goKZhJlOCvzMuHt*rID12mtNVSjhP64veqGGFSWM7xDOPZWYcG3Uvbyabaj29sK3Ji3GQTHDRzbmXau/IXA7Yr8rnu2Zjm8vi6HDoT*GLphitwxfdpynH298zzYNZ9I5xVRrQD2FZtclffIu3xMPFGNdsY7PwAMfE6vbwIlSqZxkwOzMX1U9vIwLLfneNftGmhT1PJl*WLROoswmD7Ql9hzdM/CbMGA', '', NULL),
(511, 11, 'LEANDRO LIRA', '1992-01-17', 'M', '2 Ano A', 'TDS', 'leandro@gmail.com', '81988888888', '', '', NULL),
(512, 12, 'LUAN CARLOS', '2005-02-24', 'M', '2 Ano A', 'TDS', 'luan@gmail.com', '81988888888', 'AQAAABQAAAAUAQAAAQASAAEAZAAAAAAACAEAAPy1zm3fr4W1QRswfEpkA8ztanljIouX9gQG604H7C5DnYvnRSpWkzRSQv/Y*8rN*LqCSTrcBPbdgsMbwTKUBl9qVPhdVj9BLATxX6*v6FHOZ/MCTzeVoLyUQw2JDPhe2FCsmkF67zqyC2x1LrYj0b5OVUtRn9ZTVQ7hKB6gTWuQGhOtxw8aSRZ03AhFmBbRyDmHBqeU8SNCZS8siSp*BxitQzOG0dZVsxUL7kUeqlTDPQ1np27VVaNx8toyxxKkyCo0bBwBZD4BQq7IG8539GjnAW3KPZAIxvhf6yClg4iZbJzJBb4lt13Jmo*I9tFwGE9beqAdPuNs/DzmvO9rd*GcOnGeNx1pRBbMQ2amNrfz', '', NULL),
(513, 13, 'THIAGO VINICIUS', '2005-06-02', 'M', '2 Ano A', 'TDS', 'tiago@gmail.com', '81988888888', 'AQAAABQAAAAUAQAAAQASAAEAZAAAAAAADAEAAPD/gcjhP8C7EJ/o69tI/XTq0XzBPMz*Jnlz/3vX/xhLhMPMGifX5VxrR5d*FbxcGlAKe5vr6VyJcUPrP8XYJgUHrVVigoxRBU/UUCtGCFmhMPOGDdC4GWcFSVLrxk0bHenw0sxIH4*MElI*79gTBQLjo74J0G7TQyMnwJxDrG/OdS7AgY9TAkDjnaBau9MuW3EgTguJiBi*cE*EfRbFM8t2M5n3T1gzz61KxvmBTUmuLJTy91APRP8X0lhRpX5ND4qZr*G55ucJSTGBOl0p/XAirrWgYTaV2DCjdTkGb7JNu7wnRR4dQpFywpPquK9tWV9vAXptC53hzY2X1lM1wW4x83LIUX43Bj05rNWrRUxV', '', NULL),
(514, 14, 'JOSÉ TIAGO', '2004-01-10', 'M', '2 Ano A', 'TDS', 'jose-tiago@gmail.com', '81988888888', '', '', NULL),
(515, 15, 'LUCAS MATHEUS', '2002-02-15', 'M', '2 Ano A', 'TDS', 'lucas@gmail.com', '81988888888', 'AQAAABQAAAAEAQAAAQASAAEAZAAAAAAAAAEAAHtKW/IoIoEcnoIN*cE3a4WIlos5nRRu9ZbY3cp41Bl3K8vxGdGUkPFcfENGRNxzfscKAh8uweg*DSznKKA4kEvO6aU0fLTQgRmg3OyrGVjvjrYo1kwsxZjEhRWI9jMNtBAAcphd8Pg8wZvETPwkpTMgWVQ8kTFaDkFsNDPrWbFyUMTbd/14HCWJqluBDU4NjvM/5mKZiX/ZXNzRB24x3s5NLcCg0ChdofPEwme6j2RBfRMlRcCruqLTWWlK5Ziwy0gaCKhqAjesatBFMvFOSpPYug/tWS25qd6sWldsF3JABz6Ou9d3T6F7RoUUAWgG2gU*uw3dCQxSHtEljB2wMjQ', '', NULL),
(516, 16, 'MARIA EDUARDA', '2001-10-08', 'F', '2 Ano A', 'TDS', 'maria@gmail.com', '81988888888', 'AQAAABQAAAAEAQAAAQASAAEAZAAAAAAAAAEAAAXGBnPlzNsY8w3l71C2zMk8L5Ap5IiluvzfhgbXD0NhqvAFhfcz6ZVWwe*1M59QsmIzaMedUGMyRvmtZrkHpcOh9H4t/o5aWk2KF4GgJ7NISsnNoz*nw6gf1afhbUWalmRtHc5by59USKh3TnoMfTWo3IxpE0vTJ06ESCAQ47K0ifwGVDZO7kjmvqixRcfUWkbUeFWw51ycLQreKVCKPWZ6g4DWcLgiX4hSe2qh6hYmn8sjrhKTMyVxIM1CBSWuaR9SQlzNZhBFmGTRGbdMJE3I6mtBWA/6C/YmefITxclpaald*BwINXl3O1tHIHHt00/O32kxEzAvUJDApWTrMKU', 'AQAAABQAAAAUAQAAAQASAAEAZAAAAAAAEAEAAD438qX2K5u0c7xd2zHLmJVuLvMkoTxJhN6MV/0BUi6ZinRqXx5YIrzOcqmhdpin2ZsLgs423Oq7dl8FIHwdBqmJslagFnl6tGiT9t9ubGSeqCfRTbi034qzqTrIUOD*YfE7vTpciDB0zy0n0yK6hKVmGBeVBbyKoV9y0VHQOeeTz1togLMhYt/CeXbYCX6SQKTchWDfDNuU*K2vDYteajoPaJFmOKuU3zq8hQFwLsYIRJafDNzr7*dpjvmM2/5JZ1E2iDk6Ozs4bGIlvkUwgeZUgKB/3x6D*YT5w/KcaiIibPk2WV6hhFBDwKsDWPplBFRmQ9wYQo1zAmSUSrU8uSQAMF77EOE9J1fjtxtKDbPG', NULL),
(517, 17, 'ALICE THAYS', '1993-01-27', 'F', '2 Ano A', 'TDS', 'alice@gmail.com', '81988888888', 'AQAAABQAAAAEAQAAAQASAAEAMwAAAAAAAAEAAAqOvOu*JywT0l6QbiQBafQWCQGYXpo64Itj1NX8S7ahGoAOe2OsN6ckmmAqSGvJI5AJh4onTEAOz8gauGEA/B8IhI/yB/zKoggGL2ykQCc/m4sl7vk*pK7asZPfuGbiQrnOdRwM1wi/Vp0pHZxBbnyzzAb/Q5akYkrwr0dqN/asWaUIx6zvBlENZwfbdojxgvkrqjdFwTPMvGp88pG7LMOfT2yzI85zKAeMaMLrxsdR6Mi4u6QaqojoihJplsG/umUzZqhd3yl6r4*RsO24TeD9H7duHDvmmlyK3*FR8v/dSkQWzKWbJGR9/WWR3ffM3lAUtDe60vUWO39*hf1ZSqw', '', NULL),
(518, 18, 'THAYS DOS SANTOS', '2003-06-09', 'F', '2 Ano A', 'TDS', 'thays@gmail.com', '81988888888', '', '', NULL),
(519, 19, 'PLÍNIO BRASIL', '1986-10-08', 'M', '2 Ano A', 'TDS', 'plinio@gmail.com', '81988888888', 'AQAAABQAAAAUAQAAAQASAAEAZAAAAAAAEAEAAGasvHMZE7YlIzihLWZfyx5ApWjDvTWtPQ83aM5ZmNrUTCLN5g1FvW7Nns*Izgwq*UESWEGxrIfZk7wuY*XwvOIvKPGQkN6Rl3obDRy5uwDRy1R8Q88qaQcaFODxSP0ZatCTYNY42gMSa8AktJvWhnSUthdFadZS4Ty8DvVtoG4YTnhBSLzHNVwFi9CUMx9606q4b4osxzEMWu5K8QBpQGAzHwfTa/zUn6RGRJPzQ9V3MCz2DRZz6hs3dcRKVL7nCWB1gZl5vTZOxJZF1JIXlJmSryieHnmwyBX/lAcjwh428wt*MUaXz1XA6pmQWExCEHMCtxJHOv*QE07lFHIQAFqatZ5yarnQok8nh7sTFkU5', '', NULL),
(520, 20, 'JOÃO CARLOS', '2006-02-21', 'M', '2 Ano A', 'TDS', 'joao-carlos@gmail.com', '81988888888', 'AQAAABQAAADkAAAAAQASAAEAVQAAAAAA1AAAAB2xTdm3tvxgABhwk5o*pGopZTtZVH10usjUfVckQPXZLShb7cXJWBNKr7PkKcKUIZx3vxtN1iIlKoKgmIXQH1kKJ8m9cuWFFPDw*B5J7MZ*Bob17xO4RTJOv6yvST4B1MRVoI*EQbwH/r7TdksAo4u9ye*w*A0zBM0XDfoHajRePbdm4juHU6voLJYHgBbZQgpxafPA62LXYcasB4q2aHmUOFZdyOQ0OAWUy2pilNLVrqF9i05zPVEPuAPkL1ojgOR5dlLj5gE7W5bOv3FkRMLgymEmNUAFfFdkihnZY283', '', NULL),
(521, 21, 'KAUÃ VICTOR', '2005-05-29', 'M', '2 Ano A', 'TDS', 'kaua@gmail.com', '81988888888', 'AQAAABQAAAAEAQAAAQASAAEAZAAAAAAAAAEAAGA3iZY3ky2zeafIrpseK2nT8S*MCJEdA2thd8bR4f*lxq9MBffC3KSxd8lpNQLZ7vbXBve1Z*JEZmob3PeSn6154rE4X3fYhg*CctVcNALwvkkFsO22KWyG1xZ9SppB656TDPS/hsiCUsaW/iew/8nNCbrd40NszIpk/qSmk6MNnUa9Pi8RQGSTesLWeNgQNgypOu1fAZImS*EwKUU490OeBPHtxQ5MIQ0aCMEGswO*R1DuwCNmB1O6QxMavhjC/xTfXRccDy5DTgX4UKgwbkkPGWCU8VK81uXu8NrLOFCxtA58HuFIkEeWSLvoRiG9e21fO3Axvo9iibCPCiC6VeM', '', NULL),
(522, 22, 'JULIANA VITORIA', '2005-05-12', 'F', '2 Ano A', 'TDS', 'juliana@gmail.com', '81988888888', 'AQAAABQAAAA0AQAAAQASAAEAYwAAAAAAJAEAAFJwsMSM0bvLvSV5jGMAreomr8aux*2qR9ju8YyA9Ky5hrTNvg2wtAihCNy0M2MN6P*we56MTwci6U4L5g/lIrKvdV/*mmseVdNceqVhWjTHBpY36VAhL8okze1UK3UI1wZksjW6QBBlGz5cFKX3q53oWb/U8UlFkzas9SVtE6NrFejWz0d52Z*WPe8wfQzHD*X6FuOnkIRI3CJxKYKt2FqroS7RIG*H4oabkQRc8V5/YNZ8YPVNlBjdL7n3mO3bUkvTZDUELbj2g2d*N8PbUvm0Ay3kXDN7bxgTBUDBuqWio/r/1BMpIz*zSxTg*7DRgjPzoru57bsYYCalwnx7Ii4qvxap*SB*r4ETjJ/5KY25ysdpPj4Ubh64sg0ROv4xcYIdzk/H0pt2ehYmOGb/nvc', '', NULL),
(523, 23, 'AMANDA TAVARES', '2000-07-11', 'F', '2 Ano A', 'TDS', 'amanda@gmail.com', '81988888888', 'AQAAABQAAABEAQAAAQASAAEAZAAAAAAAQAEAAFRIUnRiobWvrSapRTJYowuwnE75bUDEdXua2Cr/q5LZ*l0wd7gQ679kTomgoD/2CWo/7u31rjuMdDjHQBCrgI*NTNypZfXSHUuEevLgPeOVmAqIvvP8LPetRAyYT*Yxbcffjw83gq3uUz8lvQOIEw5Jkz1Adf3iwiXYo98dsa51lKgrTz*e8NKKwg6Oq4*Rw4CVnPLS6Fr/ZTXFKqZeoo99cUhLGbvzpEqL8yN9eQ14MLLf2MQOiY2K*i2W7iSg8QmRTOyH7oLOUoJ4cFVgXSeSs2MxMtef70Tbin4T8Sb21pjF3IeMU9BSA79V66RcoJHJUFAPJ1cSTXeQyimWNqODdJbw5WU782gBUFnyH*YCBSZt6zVXKIOiy4DeFImb9qlosWN2bWppKborsdNAfFRK7kugS0oHCqEE/Gmf57Zw', '', NULL),
(524, 24, 'THALLYSSON ALVES', '2000-07-11', 'M', '2 Ano A', 'TDS', 'thallysson@gmail.com', '81988888888', 'AQAAABQAAAAkAQAAAQASAAEAZAAAAAAAIAEAADusReqpPcFgvUudqbfk*cvlqAan7BqIYphezRoA0DcOydwQ9JkrwR5L24QP9x1afY68andI2XkklsaMc5LKsZckYpw*P0EuVTTdXnKgZiRXwkTHsxPcraoLAc9UX*YbqjfHXCTiEtTRqO4/JCn13VKrqx6joot2EK5by0ehZF1xEGV3s63EQ9BKD6m*uopvIYSARNRLew4mMAb/xdwH0c8JmOsjdOXvZpGPZ6JttA*0yc09BDlihG3hsPtnEw3ADUP80IN8OQgELUMMvB/CRiBjhnAxxRYXaB6u9jdvkwPVENYl0QnmhLXeldmRlVIPMHAPo0xK63BMbyLwKXsiW7Sg1gKTN/kbWrsgp42iIXk82f1IfbxDmFtyYKwNZDig6Q', '', NULL),
(525, 25, 'WILLIAM FELIPE', '2005-02-19', 'M', '2 Ano A', 'TDS', 'will@gmail.com', '81988888888', 'AQAAABQAAAA0AQAAAQASAAEAZAAAAAAAJAEAADFXQpNO5*2uZuUodpTUHmtNzMqloxkZfaIndhlQhHmIH0CRn1DDxVrcSP0ci6jW0w0pzgdYSM67h3VY5ZUIJioNb3qT4JWRFrxMrxsvt9aBEf0R7EOASwa7T7P1VoxpIi8FlLiCYOJ9zWqByWD3TsUR6JxKWEhRE5/RVcMjP9atGpjdGNT6nBFpj3v3jQpkKfwVq39iN/KevquASD3u02tABIQSwlSdrGNBSg1u6UCKFmWclcfwaIDl9tfMTld0d6aZ87qNkayD4mbygcYfyp4DSyeW3U/urv3sduRAjc/ATrHMLoIpx8HAxTgoaruJiN3nujPYiSWk/UIgiwD*8RVqUQBBmZegCt7G0MiBsNKaxkgW9Xow2/mZz4lnFpOQ39VwYeFF/HWr4nm5RgAep8Y', '', NULL),
(526, 26, 'THYAGO VICTOR', '2005-05-10', 'M', '2 Ano A', 'TDS', 'thyago@gmail.com', '81988888888', 'AQAAABQAAAD0AAAAAQASAAEAZAAAAAAA7AAAACw5idj*WLenlxnmjzgzNA9SDdlcR*laqVemPBAsO3dQUF0f7kovDP3X9GfM*3i6/7MCDCh7ROnOcfrrZ6i4OMfueVn0wxASE2wwUF/QHPFVFx5GBjI7XXEB8zGdp0gtL3gMdIk5Ax5iOj5HfE8Sp/QND*tlF2A1Q1g5lyMgAC31gP1qFPhW9CAkgcBW9eOgyUt5T9JRzFLbkA6oeDKpPp0Ln3wM1NiF/HGZTEb*uVkMr0USOHFUviODEfsogu2T7qzCixjOubBffKBnNXi1*g7i8kQpI1/TrXVJhamxjhlJnY5PxWdIAX8VOCB4YmHXgg', '', NULL),
(527, 27, 'JUAN CARLOS', '2000-08-21', 'M', '2 Ano A', 'TDS', 'juan@gmail.com', '81988888888', 'AQAAABQAAABUAQAAAQASAAEAZAAAAAAARAEAAJske3FUf7y7uCz6PLnBTMcs3P1dWIvpBiRDOfodcqic5LFGvJ0zH8iG6tKBmtUyGUzsp128jMrIOaKskQsBBJTUcFKTxFMQ4LN0kAlfYdQJNs0uZPdlUXb3GkMEVZrGIvz2b55NpsZQ1hnVD4p7ntbftLD6ALKex9/opvx6hQ4SGiT*evImLyNXaPkzkgaqZg*Mm6XMqOHTWjbtE9UbCiWjtBA1QdUvzIKaZKLhH2DkyOXLbrQWl2cNDs9cYaeyIk6SnO4TJvpr7gpor3N3*5Th3fhb58F8x7so1sKB32gi7dWJS7*XL7v6hNvKpYoHUGUqwz5CzZUQrEcaK5joIRLm54ja8tx32CIDQ6ANCbzUK0zBAzaMTLC*L6WKfnZScBvYrfwiJX9r*U1j5GPq0rODZQbzqNNJXZxepXjvoOZXezm3MTaYI9Q*9iL*K8gL0g', '', NULL),
(528, 28, 'GABRIEL SANTOS', '2004-05-17', 'M', '2 Ano A', 'TDS', 'gabriel-santos@gmail.com', '81988888888', 'AQAAABQAAAAEAQAAAQASAAEAZAAAAAAA/AAAAGy8*YViGMSuODIxeVXMcYQSo6uleYu9Im2zRXygxvk96mlKgBciN5x1IfB/tWAm*LRckwUlVeRTrlDzKNU*ft/XmPWYpXP687*Oy9FlwtZM3H3s8C2cOMMuNm8EyFxFyAJSB93/ve5c02EbaHvJK1U2FGpSLszkA/JGLUZjFPmyCCKBxzG6BapFP3wTV8R/pTwzD2PG1IEhT0TA1Pi2*0vWCdFlfMxw*HLEDLnKPjf72mpUzR*bBQW9fAEYzUvcjSSAR9kwuvKWscOB*ittk5Yy7g3CcD01VdUHc0KZbdT152mC*oe0plm7GHJfZS/tbKqczUPWumKRa9ZDndzIsJs', '', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `coordenacao`
--

CREATE TABLE `coordenacao` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `coordenacao`
--

INSERT INTO `coordenacao` (`id`, `nome`, `email`, `senha`) VALUES
(5, 'Coordenação', 'coordenacao', '!@ete@!');

-- --------------------------------------------------------

--
-- Estrutura para tabela `frequencia`
--

CREATE TABLE `frequencia` (
  `id` int(11) NOT NULL,
  `idAluno` int(11) NOT NULL,
  `acesso_registro` datetime NOT NULL,
  `acesso_data` date NOT NULL,
  `acesso_hora` time NOT NULL,
  `dia_semana` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `frequencia`
--

INSERT INTO `frequencia` (`id`, `idAluno`, `acesso_registro`, `acesso_data`, `acesso_hora`, `dia_semana`) VALUES
(130, 227, '0000-00-00 00:00:00', '2024-04-02', '07:33:16', 'Terça-feira'),
(133, 500, '0000-00-00 00:00:00', '2024-04-12', '08:11:22', 'Sexta-feira');

-- --------------------------------------------------------

--
-- Estrutura para tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `responsavel`
--

INSERT INTO `responsavel` (`id`, `nome`, `email`, `telefone`, `senha`, `idAluno`) VALUES
(1, 'Adelaide Maria do Nascimento Silva Gomes ', 'ninahhsilva2023@gmail.com', '81986812672', '09122005', 227),
(2, 'Ana Paula Elza dos Santos Firmino ', 'anapaula8603765@gmail.com', '81986403014', '06052006', 250),
(3, 'Liliane maria de santana silva ', 'Lili.luizlucas@gmail.com', '81987144812', '06042006', 241),
(4, 'Hélio Rogério da luz ', 'luzhelio2@gmail.com ', '81986799752', '28032007', 230),
(5, 'Maria Ivanice dd Morais Serafim', 'Ivanice.Morais211@gmail.com', '81981734086', '19102006', 253),
(6, 'Juliana Gomes do Nascimento ', 'josetavares6602@gmail.com', '81991272279', '26072007', 221),
(7, 'Maria José de Lima Leite', 'marialima60895@gmail.com', '81997022541', '22062005', 249),
(8, 'Walquíria Santana de Oliveira silva', 'walquiriasantana345@gmail.com', '81987732605', '14122006', 232),
(9, 'Alexandra Souza Cavalcante de Melo', 'palama15@hotmail.com', '81992941415', '13112006', 217),
(10, 'Braz Vicente Silvestre', 'brazvicente6@gmail.com ', '81992681466', '16062006', 245),
(11, 'Edivânia maria Oliveira de souza ferreira ', 'edukfdjkg2006@gmail.com', '81983046934', '07112006', 223),
(12, 'Angela Maria dos Santos Silva ', 'angelasilva352@hotmail.com', '81988968233', '24052007', 224),
(13, 'Rosilda Soares da Silva ', 'rosildass78@gmail.com', '81982325096', '07122006', 216),
(14, 'Alexsandra dos santos nascimento ', 'alexsandran8922@gmail.com', '81973234218', '13022007', 239),
(15, 'TAIS Bezerra da Silva ', 'taisbezerracabral2016@gmail.com', '81984476747', '12032007', 248),
(16, 'Lídia Ferreira Soares Silva ', 'lidiafsoares@hotmail.com', '81985391567', '29112006', 243),
(17, 'Ana Claudia de Souza ', 'ana4441117@gmail.com ', '81983624997', '12082006', 252),
(18, 'Sandra Maria Do Carmo Silva', 'carlasandreli16@gmail.com ', '81983047501', '29042006', 219),
(19, 'Valdilene Maria Lino ', 'Valllinnovaldelene12231302@gmail.com ', '81982522019', '23102006', 235),
(20, 'Maria das Graças dos Santos', 'mariasdasgracassantos45@gmail.com', '81992815496', '11052006', 233),
(21, 'Jaciara severina gomes', 'jacylopes166@gmail.com', '81998723368', '15072006', 244),
(22, 'Josefa Bezerra da Silva', 'nevessbezerraa@gmail.com', '81989873693', '19072006', 226),
(23, 'Maria José Ramos de França', 'domallivrainos@gmail.com', '81993770857', '13082006', 242),
(24, 'Luciana Maria Santos de Santana', 'Lucianaeedson2@gmail.com', '81984480973', '22022007', 225),
(25, 'Cristina Maria Ramos', 'Cristinarramoz@gmail.com', '81985430680', '16022007', 234),
(26, 'Ana Cláudia da silva Dimas', 'Anaerafa2020@hotmail.com ', '81985576788', '21072005', 246),
(27, 'Silvaneide Ferreira Da Silva', 'As2512990@gmail.com', '81986576036', '13072006', 218),
(28, 'Paulo Henrique da Silva', 'paulosilva1326@gmail.com', '81999660050', '20112006', 247),
(29, 'Maria de Barros Monteiro Silva', 'mariamonteiro.mdms@gmail.com', '81983572029', '05092002', 228),
(30, 'Joana Darc Ferreira Ramos', 'claudianosantos603@gmail.com', '81987976823', '25122004', 238),
(31, 'Marcileide Antônio dos Santos Santana', 'Laraester2013@hotmail.com', '81973343616', '18082006', 237);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Índices de tabela `coordenacao`
--
ALTER TABLE `coordenacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `frequencia`
--
ALTER TABLE `frequencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_aluno` (`idAluno`);

--
-- Índices de tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idAluno` (`idAluno`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=529;

--
-- AUTO_INCREMENT de tabela `coordenacao`
--
ALTER TABLE `coordenacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `frequencia`
--
ALTER TABLE `frequencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT de tabela `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `frequencia`
--
ALTER TABLE `frequencia`
  ADD CONSTRAINT `fk_id_aluno` FOREIGN KEY (`idAluno`) REFERENCES `aluno` (`id`);

--
-- Restrições para tabelas `responsavel`
--
ALTER TABLE `responsavel`
  ADD CONSTRAINT `fk_idAluno` FOREIGN KEY (`idAluno`) REFERENCES `aluno` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
