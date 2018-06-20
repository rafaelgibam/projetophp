-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Jun-2018 às 04:02
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turismo`
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
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'a', 90909, 9090, '2018-05-02', '1', 'cebtro', '90', 'timbauba', 'pe', 1, ''),
(7, 'paulo', '202cb962ac59075b964b07152d234b70', '', 0, 0, '0000-00-00', '0', '', '', '', '', 1, ''),
(12, 'alex', 'caf1a3dfb505ffed0d024130f58c5cfa', 'alexsandro', 111111, 9000, '2018-06-03', '0', 'rua andre viana', '09', 'recife', 'pn', 8989, ''),
(6, 'admin', '202cb962ac59075b964b07152d234b70', '', 0, 0, '0000-00-00', '0', '', '', '', '', 1, ''),
(9, 'paulo', '67870ec3a9e6de0a899680d59b166d94', 'Paulo Sergio Ferreira da Silva', 122222, 1299, '2018-06-04', '0', 'Rua acajutiba', '12', 'Timbauba', 'PE', 1, ''),
(11, 'paulo', '202cb962ac59075b964b07152d234b70', 'Paulo SÃ©rgio', 123333, 900, '2018-06-11', '0', 'Rua eugenio', '90', 'timbauba', 'pe', 9010, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `viagem`
--

CREATE TABLE `viagem` (
  `ID` int(11) NOT NULL,
  `DESTINO` varchar(200) NOT NULL,
  `PRECO` varchar(100) DEFAULT NULL,
  `TRANSPORTE` varchar(100) NOT NULL,
  `DIARIA` varchar(50) NOT NULL,
  `NIVEL_HOTEL` int(2) NOT NULL,
  `TRANSLADO` varchar(10) NOT NULL,
  `DESCRICAO_VIAGEM` varchar(200) NOT NULL,
  `USUARIO_VIAGEM` varchar(200) DEFAULT NULL,
  `TP_VIAGEM` varchar(2) DEFAULT NULL,
  `DATAVIAGEM` varchar(20) DEFAULT NULL,
  `HORA` varchar(20) DEFAULT NULL,
  `PAGAMENTO` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `viagem`
--

INSERT INTO `viagem` (`ID`, `DESTINO`, `PRECO`, `TRANSPORTE`, `DIARIA`, `NIVEL_HOTEL`, `TRANSLADO`, `DESCRICAO_VIAGEM`, `USUARIO_VIAGEM`, `TP_VIAGEM`, `DATAVIAGEM`, `HORA`, `PAGAMENTO`) VALUES
(6, 'timbauba', '', 'onibus', '19', 2, 'sim', 'Viagem top', '', '', '', '', ''),
(12, 'timbauba', NULL, 'onibus', '111', 3, '1', 'wwww', NULL, NULL, '2018-06-05', '11:11', 'Boleto'),
(13, 'timbauba', NULL, 'onibus', '10', 4, '1', 'aaa', NULL, NULL, '2018-06-05', '11:11', 'Boleto'),
(14, 'timbauba', NULL, 'onibus', '11', 2, '1', 'aaa', NULL, NULL, '2018-06-04', '11:11', 'Boleto'),
(15, 'timbauba', NULL, 'onibus', '10', 3, '1', 'oii', NULL, NULL, '2018-06-07', '22:22', 'Boleto'),
(16, 'timbauba', NULL, 'onibus', '-1', 3, '1', '', NULL, NULL, '2018-06-04', '11:11', 'Boleto'),
(17, 'timbauba', NULL, 'onibus', '122', 4, '1', '22', NULL, NULL, '2018-06-07', '22:22', 'Boleto'),
(18, 'timbauba', NULL, 'onibus', '12', 3, '1', 'op', NULL, NULL, '2018-06-13', '22:22', 'Boleto'),
(19, 'timbauba', NULL, 'onibus', '10', 3, '1', 'kjkj', NULL, NULL, '2018-06-20', '09:09', 'Boleto'),
(20, 'Fernando', NULL, 'onibus', '10', 1, '1', 'Fica em pernambuco', NULL, NULL, '2018-06-07', '22:22', 'Boleto'),
(21, 'timbauba', NULL, 'onibus', '4', 4, '1', 'Boa viagem', NULL, NULL, '2018-06-21', '22:22', 'Boleto'),
(22, 'timbauba', NULL, 'onibus', '10', 5, '1', 'hh', NULL, NULL, '2018-06-03', '09:09', 'Boleto'),
(23, 'timbauba', NULL, 'onibus', '9', 5, '1', 'Viagem', NULL, NULL, '2018-06-11', '23:08', 'Boleto'),
(24, 'timbauba', NULL, 'onibus', '9', 5, '1', 'Viagem', NULL, NULL, '2018-06-11', '23:08', 'Boleto'),
(25, 'timbauba', NULL, 'onibus', '10', 2, '0', 'tt', NULL, NULL, '2018-06-28', '23:00', 'CartÃ£o'),
(26, 'timbauba', NULL, 'onibus', '8', 3, '0', 'pp', NULL, NULL, '2018-06-27', '07:00', 'Boleto'),
(27, 'timbauba', NULL, 'onibus', '8', 3, '0', 'pp', NULL, NULL, '2018-06-27', '07:00', 'Boleto'),
(28, 'timbauba', NULL, 'onibus', '2', 2, '1', 'Bom passeio', NULL, NULL, '2018-06-04', '12:22', 'Boleto'),
(29, 'timbauba', NULL, 'onibus', '2', 5, '1', 'Viagem avaÃ§ada', NULL, NULL, '2018-06-01', '11:11', 'Boleto'),
(30, 'timbauba', NULL, 'onibus', '10', 2, '1', 'pp', 'Paulo SÃ©rgio', NULL, '2018-06-04', '09:09', 'Boleto'),
(31, 'Fernando', NULL, 'aviao', '90', 2, '1', 'viagem teste', 'Paulo SÃ©rgio', NULL, '2018-06-04', '07:09', 'CartÃ£o'),
(32, 'timbauba', NULL, 'aviao', '30', 5, '0', 'Viagem teste 2', 'alexsandro', NULL, '2018-06-04', '23:23', 'CartÃ£o'),
(33, 'recife', NULL, 'navio', '80', 5, '1', 'Passeio avanÃ§ado', NULL, NULL, '2018-06-25', '22:22', 'Boleto'),
(34, 'timbauba', NULL, 'onibus', '10', 3, '0', 'Testando', 'alexsandro', NULL, '2018-06-04', '22:22', 'Boleto'),
(35, 'timbauba', NULL, 'onibus', '50', 2, '1', 'Passeiando', 'alexsandro', NULL, '2018-07-19', '22:22', 'CartÃ£o'),
(36, 'Fernando', NULL, 'navio', '30', 4, '0', 'HOtel avanaÃ§ados', 'Paulo SÃ©rgio', NULL, '2018-06-04', '05:07', 'CartÃ£o'),
(37, 'recife', NULL, 'aviao', '5', 5, 'sim', 'Passeio', 'Paulo SÃ©rgio', NULL, '2018-06-20', '01:00', 'CartÃ£o'),
(38, 'timbauba', NULL, 'onibus', '23', 3, 'sim', 'Viagem', 'Paulo SÃ©rgio', NULL, '2018-06-26', '03:33', 'Boleto'),
(39, 'recife', NULL, 'aviao', '12', 2, 'sim', 'Passeio', 'Paulo SÃ©rgio', NULL, '2018-06-05', '22:22', 'Boleto'),
(40, 'recife', NULL, 'aviao', '12', 2, 'sim', 'Passeio', 'Paulo SÃ©rgio', NULL, '2018-06-05', '22:22', 'Boleto');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `viagem`
--
ALTER TABLE `viagem`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
