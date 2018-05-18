-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Maio-2018 às 05:08
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaseprojeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `LOGIN` varchar(100) NOT NULL,
  `SENHA` varchar(100) NOT NULL,
  `NM_USUARIO` varchar(200) NOT NULL,
  `CPF` int(11) NOT NULL,
  `RG` int(8) NOT NULL,
  `DT_NASCIMENTO` date NOT NULL,
  `NIVEL_USER` varchar(2) NOT NULL,
  `LOGRADOURO` varchar(200) NOT NULL,
  `NR_CASA` varchar(10) NOT NULL,
  `CIDADE` varchar(200) NOT NULL,
  `UF` varchar(2) NOT NULL,
  `TELEFONE` int(11) NOT NULL,
  `EMAIL` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `LOGIN`, `SENHA`, `NM_USUARIO`, `CPF`, `RG`, `DT_NASCIMENTO`, `NIVEL_USER`, `LOGRADOURO`, `NR_CASA`, `CIDADE`, `UF`, `TELEFONE`, `EMAIL`) VALUES
(1, 'loginTeste', 'senhaTeste', 'UserTeste', 1134586443, 93214557, '2018-05-01', 'A', 'Abdias de Carvalho', '4', 'Recife', 'pe', 88888888, 'teste@gmail.com'),
(2, 'loginTeste', 'senhaTeste', 'UserTeste', 1134586443, 93214557, '2018-05-01', 'A', 'Abdias de Carvalho', '4', 'Recife', 'pe', 88888888, 'teste@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `viagem`
--

CREATE TABLE `viagem` (
  `ID` int(11) NOT NULL,
  `DESTINO` varchar(200) NOT NULL,
  `PRECO` varchar(100) NOT NULL,
  `TRANSPORTE` varchar(100) NOT NULL,
  `DIARIA` varchar(50) NOT NULL,
  `NIVEL_HOTEL` int(2) NOT NULL,
  `TRANSLADO` varchar(10) NOT NULL,
  `DESCRICAO_VIAGEM` varchar(200) NOT NULL,
  `USUARIO_VIAGEM` varchar(200) NOT NULL,
  `TP_VIAGEM` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `viagem`
--
ALTER TABLE `viagem`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_usuario` (`USUARIO_VIAGEM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `viagem`
--
ALTER TABLE `viagem`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
