-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 09:01 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dawii`
--

-- --------------------------------------------------------

--
-- Table structure for table `bairro`
--

CREATE TABLE `bairro` (
  `id` int(11) NOT NULL,
  `bairro` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cidade`
--

CREATE TABLE `cidade` (
  `id` int(11) NOT NULL,
  `estado` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `estado` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `imagens`
--

CREATE TABLE `imagens` (
  `id` int(11) NOT NULL,
  `src` varchar(200) NOT NULL,
  `id_imovel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `imovel`
--

CREATE TABLE `imovel` (
  `id` int(11) NOT NULL,
  `rua` text NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` text NOT NULL,
  `cep` int(11) NOT NULL,
  `dormitorios` int(11) NOT NULL,
  `garagem` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `id_bairro` int(11) NOT NULL,
  `id_cidade` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_user`, `nome`, `login`, `senha`, `email`) VALUES
(1, 'Admin', 'Admin', '202cb962ac59075b964b07152d234b70', 'admin@admin.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bairro`
--
ALTER TABLE `bairro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bairro` (`bairro`);

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`,`id_imovel`);

--
-- Indexes for table `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtipo` (`id_tipo`),
  ADD KEY `idbairro` (`id_bairro`),
  ADD KEY `idcidade` (`id_cidade`),
  ADD KEY `idestado` (`id_estado`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bairro`
--
ALTER TABLE `bairro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `imovel`
--
ALTER TABLE `imovel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `imovel`
--
ALTER TABLE `imovel`
  ADD CONSTRAINT `idbairro` FOREIGN KEY (`id_bairro`) REFERENCES `bairro` (`id`),
  ADD CONSTRAINT `idcidade` FOREIGN KEY (`id_cidade`) REFERENCES `cidade` (`id`),
  ADD CONSTRAINT `idestado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id`),
  ADD CONSTRAINT `idtipo` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
