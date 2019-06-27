-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20-Jun-2019 às 07:50
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marmita`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `controle_prontuario`
--

CREATE TABLE `controle_prontuario` (
  `id_prontuario` int(11) NOT NULL,
  `prontuario` varchar(10) NOT NULL,
  `estado_marmita` int(11) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `controle_prontuario`
--

INSERT INTO `controle_prontuario` (`id_prontuario`, `prontuario`, `estado_marmita`, `last_modified`) VALUES
(1, '1810642', 0, '2019-06-20 05:15:13'),
(2, '1810511', 0, '2019-06-20 05:15:15'),
(3, '1810596', 0, '2019-06-19 21:52:44'),
(4, '1810464', 0, '2019-06-19 21:52:44'),
(5, '1810723', 0, '2019-06-19 21:52:44'),
(6, '1810553', 0, '2019-06-19 21:52:44'),
(7, '1810545', 0, '2019-06-19 21:52:44'),
(8, '181074x', 0, '2019-06-19 21:52:44'),
(9, '1810766', 0, '2019-06-19 21:52:44'),
(10, '1810413', 0, '2019-06-19 21:52:44'),
(55, '', 0, '2019-06-20 05:47:12'),
(56, '', 0, '2019-06-20 05:47:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `controle_prontuario`
--
ALTER TABLE `controle_prontuario`
  ADD PRIMARY KEY (`id_prontuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `controle_prontuario`
--
ALTER TABLE `controle_prontuario`
  MODIFY `id_prontuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
