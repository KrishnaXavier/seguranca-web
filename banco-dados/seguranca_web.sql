-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 17-Jun-2018 às 13:44
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
-- Database: `seguranca_web`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `senha` varchar(240) NOT NULL,
  `imagem` varchar(240) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `imagem`) VALUES
(1, 'User 1', 'user1@email.com', 'senha', '2018.06.16-13.22.14.png'),
(2, 'User 2', 'user2@email.com', 'senha', '2018.06.16-13.22.14.png'),
(3, 'User 3', 'user3@email.com', 'senha', '2018.06.16-13.22.14.png'),
(4, 'User 4', 'user4@email.com', 'senha', '2018.06.16-13.22.14.png'),
(5, 'User 5', 'user5@email.com', 'senha', '2018.06.16-13.22.14.png'),
(18, '', '', '', '2018.06.16-13.36.45'),
(17, 'User 8', 'user8@email.com', 'senha', '2018.06.16-13.34.04.png'),
(16, 'User 7', 'user7@email.com', 'senha', '2018.06.16-13.22.14.png'),
(19, '<script type=\"text/javascript\"> alert(\"XSS\"); </script>', 'user1@email.com', 'senha', '2018.06.16-13.41.30.png'),
(20, '<script type=\"text/javascript\"> alert(\"XSS\"); </script>', 'user10@email.com', 'senha', '2018.06.16-13.42.24.png'),
(21, '<script type=\"text/javascript\"> alert(\"XSS\"); </script>', 'user11@email.com', 'senha', '2018.06.16-13.52.45.png'),
(22, 'User 12', 'user12@email.com', 'senha', '2018.06.16-13.53.39.png'),
(23, 'User 12', 'user12@email.com', 'senha', '2018.06.16-13.59.22.png'),
(24, 'User 12', 'user12@email.com', 'senha', '2018.06.16-13.59.59.png'),
(25, '<script type=\"text/javascript\"> alert(\"XSS\"); </script>', 'user13@email.com', 'senha', '2018.06.16-14.01.50.png'),
(26, ' alert(&#34;XSS&#34;); ', 'user15@email.com', 'senha', '2018.06.17-10.32.48.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
