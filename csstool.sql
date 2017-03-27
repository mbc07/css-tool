-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Mar-2017 às 23:08
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csstool`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE 'usuario' (
  'id' int(11) NOT NULL,
  'nome' varchar(100) NOT NULL,
  'email' varchar(100) NOT NULL,
  'senha' varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO usuario ('id', 'nome', 'email', 'senha') VALUES
(0, 'Valdemiro Souza', 'souza@gmail.com', 'd6b0ab7f1c8ab8f514db9a6d85de160a'),
(1, 'Joao Neto', 'neto@gmail.com', 'e19d5cd5af0378da05f63f891c7467af'),
(2, 'Lucas Amado', 'amado@gmail.com', '297ff4a97fcda4bc0ecf0bb18168034a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE 'usuario'
  ADD PRIMARY KEY ('id');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
