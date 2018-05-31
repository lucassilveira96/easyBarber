-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 26-Maio-2018 às 02:17
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabalho_lpw`
--
CREATE DATABASE IF NOT EXISTS `trabalho_lpw` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `trabalho_lpw`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `usuarios_id` int(11) NOT NULL,
  `servicos_id` int(11) NOT NULL,
  `horarios_id` int(11) NOT NULL,
  `data_serviço` date NOT NULL,
  `barbearias_id` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  KEY `fk_usuarios_has_servicos_servicos1_idx` (`servicos_id`),
  KEY `fk_usuarios_has_servicos_usuarios_idx` (`usuarios_id`),
  KEY `fk_usuarios_has_servicos_horarios1_idx` (`horarios_id`),
  KEY `fk_agenda_barbearias1_idx` (`barbearias_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `barbearias`
--

DROP TABLE IF EXISTS `barbearias`;
CREATE TABLE IF NOT EXISTS `barbearias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `senha antiga` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

DROP TABLE IF EXISTS `horarios`;
CREATE TABLE IF NOT EXISTS `horarios` (
  `id` int(11) NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissionais`
--

DROP TABLE IF EXISTS `profissionais`;
CREATE TABLE IF NOT EXISTS `profissionais` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissionais_por_barbearia`
--

DROP TABLE IF EXISTS `profissionais_por_barbearia`;
CREATE TABLE IF NOT EXISTS `profissionais_por_barbearia` (
  `barbearias_id` int(11) NOT NULL,
  `profissionais_id` int(11) NOT NULL,
  PRIMARY KEY (`barbearias_id`,`profissionais_id`),
  KEY `fk_barbearias_has_profissionais_profissionais1_idx` (`profissionais_id`),
  KEY `fk_barbearias_has_profissionais_barbearias1_idx` (`barbearias_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(12,2) NOT NULL,
  `status` varchar(45) NOT NULL,
  `tipo_serviços_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_servicos_tipo_serviços1_idx` (`tipo_serviços_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos_por_barbearia`
--

DROP TABLE IF EXISTS `servicos_por_barbearia`;
CREATE TABLE IF NOT EXISTS `servicos_por_barbearia` (
  `barbearias_id` int(11) NOT NULL,
  `servicos_id` int(11) NOT NULL,
  PRIMARY KEY (`barbearias_id`,`servicos_id`),
  KEY `fk_barbearias_has_servicos_servicos1_idx` (`servicos_id`),
  KEY `fk_barbearias_has_servicos_barbearias1_idx` (`barbearias_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos_por_profissionais`
--

DROP TABLE IF EXISTS `servicos_por_profissionais`;
CREATE TABLE IF NOT EXISTS `servicos_por_profissionais` (
  `profissionais_id` int(11) NOT NULL,
  `servicos_id` int(11) NOT NULL,
  PRIMARY KEY (`profissionais_id`),
  KEY `fk_servicos_has_profissionais_profissionais1_idx` (`profissionais_id`),
  KEY `fk_servicos_por_profissionais_servicos1_idx` (`servicos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_serviços`
--

DROP TABLE IF EXISTS `tipo_serviços`;
CREATE TABLE IF NOT EXISTS `tipo_serviços` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `email` varchar(150) NOT NULL DEFAULT 'select "email ja cadastrado" as message;''',
  `senha` varchar(15) NOT NULL,
  `senha antiga` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_por_barbearia`
--

DROP TABLE IF EXISTS `usuarios_por_barbearia`;
CREATE TABLE IF NOT EXISTS `usuarios_por_barbearia` (
  `usuarios_id` int(11) NOT NULL,
  `barbearias_id` int(11) NOT NULL,
  PRIMARY KEY (`usuarios_id`,`barbearias_id`),
  KEY `fk_usuarios_has_barbearias_barbearias1_idx` (`barbearias_id`),
  KEY `fk_usuarios_has_barbearias_usuarios1_idx` (`usuarios_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `fk_agenda_barbearias1` FOREIGN KEY (`barbearias_id`) REFERENCES `barbearias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_has_servicos_horarios1` FOREIGN KEY (`horarios_id`) REFERENCES `horarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_has_servicos_servicos1` FOREIGN KEY (`servicos_id`) REFERENCES `servicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_has_servicos_usuarios` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `profissionais_por_barbearia`
--
ALTER TABLE `profissionais_por_barbearia`
  ADD CONSTRAINT `fk_barbearias_has_profissionais_barbearias1` FOREIGN KEY (`barbearias_id`) REFERENCES `barbearias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barbearias_has_profissionais_profissionais1` FOREIGN KEY (`profissionais_id`) REFERENCES `profissionais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `fk_servicos_tipo_serviços1` FOREIGN KEY (`tipo_serviços_id`) REFERENCES `tipo_serviços` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `servicos_por_barbearia`
--
ALTER TABLE `servicos_por_barbearia`
  ADD CONSTRAINT `fk_barbearias_has_servicos_barbearias1` FOREIGN KEY (`barbearias_id`) REFERENCES `barbearias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barbearias_has_servicos_servicos1` FOREIGN KEY (`servicos_id`) REFERENCES `servicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `servicos_por_profissionais`
--
ALTER TABLE `servicos_por_profissionais`
  ADD CONSTRAINT `fk_servicos_has_profissionais_profissionais1` FOREIGN KEY (`profissionais_id`) REFERENCES `profissionais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_servicos_por_profissionais_servicos1` FOREIGN KEY (`servicos_id`) REFERENCES `servicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuarios_por_barbearia`
--
ALTER TABLE `usuarios_por_barbearia`
  ADD CONSTRAINT `fk_usuarios_has_barbearias_barbearias1` FOREIGN KEY (`barbearias_id`) REFERENCES `barbearias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_has_barbearias_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
