-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 09:10 PM
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

--
-- Dumping data for table `bairro`
--

INSERT INTO `bairro` (`id`, `bairro`) VALUES
(7, 'Centro'),
(8, 'gv');

-- --------------------------------------------------------

--
-- Table structure for table `cidade`
--

CREATE TABLE `cidade` (
  `id` int(11) NOT NULL,
  `cidade` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cidade`
--

INSERT INTO `cidade` (`id`, `cidade`) VALUES
(1, 'Santana do Livramento');

-- --------------------------------------------------------

--
-- Table structure for table `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `estado` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `estado`
--

INSERT INTO `estado` (`id`, `estado`) VALUES
(1, 'RS');

-- --------------------------------------------------------

--
-- Table structure for table `imagens`
--

CREATE TABLE `imagens` (
  `id` int(11) NOT NULL,
  `src` varchar(200) NOT NULL,
  `id_imovel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imagens`
--

INSERT INTO `imagens` (`id`, `src`, `id_imovel`) VALUES
(1, '1.jpg', 5),
(2, '2.jpg', 5),
(3, '', 5),
(4, '', 5),
(5, '', 5),
(6, 'android-clean-clouds-colors-flying-1366x768-wallpaper.jpg', 5),
(7, 'android-clean-clouds-colors-flying-1366x768-wallpaper.jpg', 5),
(8, 'android-clean-clouds-colors-flying-1366x768-wallpaper - Copia.jpg', 5),
(9, 'favicon.ico', 5),
(10, 'favicon.ico', 5),
(11, 'favicon.ico', 3),
(12, 'favicon.ico', 3),
(13, 'favicon.ico', 3),
(14, 'applications.html', 3),
(15, 'texto-em.html', 3),
(16, 'texto-em.html', 3),
(17, 'texto-em.html', 3);

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

--
-- Dumping data for table `imovel`
--

INSERT INTO `imovel` (`id`, `rua`, `numero`, `complemento`, `cep`, `dormitorios`, `garagem`, `valor`, `area`, `descricao`, `id_tipo`, `id_bairro`, `id_cidade`, `id_estado`) VALUES
(3, '1', 1, '1', 1, 1, 1, 1, 1, 'Teste1', 1, 7, 1, 1),
(5, ':rua', 1, ':complemento', 123, 1, 1, 1, 1, 'Teste2', 1, 7, 1, 1),
(10, 'demo', 1, 'demo', 1, 1, 1, 1, 1, 'Teste3', 14, 7, 1, 1),
(11, 'demo 1', 1, 'demo', 1, 1, 1, 1, 1, 'Teste4', 2, 7, 1, 1),
(12, 'demo', 1, 'demo', 1, 1, 1, 1, 1, 'Teste5', 14, 7, 1, 1),
(13, 'demo 1', 1, 'demo', 1, 1, 1, 1, 1, 'Teste6', 2, 7, 1, 1),
(14, 'demo 1', 1, 'demo', 1, 1, 1, 1, 1, 'Teste7', 2, 7, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipo`
--

INSERT INTO `tipo` (`id`, `tipo`) VALUES
(1, 'Casa'),
(2, 'Teste'),
(10, 'dasdas'),
(11, 'Sei la '),
(12, 'Si la'),
(13, 'Sei la'),
(14, 'Sei la'),
(15, 'Sei la');

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
(1, 'Admin', 'Admin', '202cb962ac59075b964b07152d234b70', 'admin@admin.com'),
(2, 'rafa', 'rafa', '202cb962ac59075b964b07152d234b70', 'rafa@rafa.com.br');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `imovel`
--
ALTER TABLE `imovel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
