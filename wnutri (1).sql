-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Fev-2020 às 18:37
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wnutri`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog`
--

CREATE TABLE `blog` (
  `IdBlog` int(11) NOT NULL,
  `titulo_bg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto_bg` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `idImagem` int(11) NOT NULL,
  `data_bg` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `blog`
--

INSERT INTO `blog` (`IdBlog`, `titulo_bg`, `texto_bg`, `idImagem`, `data_bg`) VALUES
(1, 'O Poder Das Frutas', 'Lorem ipsum rhoncus vitae vulputate a platea quisque, donec dictum aliquam sed vel et nostra, non ligula fermentum orci pellentesque fringilla. \r\n						donec at ligula libero volutpat ad ligula nulla ultricies, adipiscing nunc egestas integer vitae viverra accumsan, integer class sed ligula eleifend placerat egestas. \r\n						ultrices massa nibh suscipit ultricies sed primis class suscipit cursus, velit iaculis sapien elit lacinia varius consectetur bibendum, mollis rutrum felis vivamus fusce lectus varius luctus. \r\n						per amet tortor porttitor ultricies donec faucibus risus diam curabitur sociosqu ornare pulvinar, cras libero ullamcorper fusce per morbi accumsan ullamcorper vivamus lorem. \r\n						</p>\r\n						<p>\r\n						Nunc varius rhoncus pellentesque cursus class fusce lacinia aliquam tempus, at quam ullamcorper vitae viverra tellus venenatis vestibulum libero feugiat, ut velit aliquet at vivamus donec nam sed. \r\n						sodales feugiat rhoncus gravida velit libero proin nostra class primis semper nisi, sapien vehicula aptent auctor duis suspendisse dolor imperdiet potenti elit aliquet, eu nostra auctor cras tristique tellus arcu rhoncus hac consectetur. \r\n						etiam sem pharetra feugiat urna aliquam quisque, sociosqu ut praesent per lobortis, malesuada sodales pellentesque luctus non. \r\n						neque tellus felis interdum tellus risus auctor fermentum, netus suscipit dictum cras feugiat rutrum habitasse erat, ante elit adipiscing pellentesque phasellus netus. \r\n						</p>\r\n						<p>\r\n						Aliquam eu adipiscing donec sociosqu, a vitae. \r\n						</p></p>', 1, '0000-00-00 00:00:00'),
(13, 'Nutricionista Wilma de Carvalho', 'HÃ¡ mais de 15 anos emagrecendo valinhos e regiÃ£o. Com isso, ja foram mais de 150 pacientes extremamente satisfeitos com o trabalho recebido na Wnutri.', 0, '0000-00-00 00:00:00'),
(15, 'Nutricionista Wilma de Carvalho', 'Nutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de CarvalhoNutricionista Wilma de Carvalho', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` mediumtext COLLATE utf8mb4_unicode_ci,
  `idContato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`nome`, `email`, `texto`, `idContato`) VALUES
('Matheus', 'theodoromatheus1830@gmail.com', 'Oi MÃ£e! ', 1),
('Matheus', 'math@gmail.com', 'E ai, beleza ? Gostaria de agendar uma consulta.', 2),
('Anna Beatriz', 'biazinha.torres@gmail.com', 'Oi Wilma, tudo bem ? Gostaria de agendar uma consulta.', 3),
('Joao', 'joao@gmail.com', 'eaeeeeeeeeeee', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `idImagem` int(11) NOT NULL,
  `titulo_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caminho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobrenome` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissao` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'usuario',
  `senha` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nome`, `sobrenome`, `email`, `cpf`, `permissao`, `senha`) VALUES
(25, 'Matheus', 'Alves', 'theodoromatheus1830@gmail.com', '442120378', 'administrador', '123'),
(26, 'Anna Beatriz', 'Torres', 'biazinha.torres@gmail.com', '4421203023', 'administrador', '123'),
(28, 'Joao', 'Torres', 'joao@gmail.com', '11111111', 'administrador', '123'),
(29, 'Joao', 'Pedro', 'joao@gmail.com', '442120411-4', 'usuario', '123'),
(30, 'Joaozin', 'Alves', 'joaozin@gmail.com', '442120411-40', 'usuario', '123'),
(31, 'Joaozinho', 'Alves', 'joaozinho@gmail.com', '442120411-40', 'usuario', '123'),
(45, 'matheus', 'Torres', 'math2@gmail.com', '442120411-40', 'administrador', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`IdBlog`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idContato`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`idImagem`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `IdBlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `idImagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
