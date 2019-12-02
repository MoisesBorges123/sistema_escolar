-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Dez-2019 às 11:34
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escola2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `curso` ()  BEGIN
	SELECT * FROM cursos;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrar`
--

CREATE TABLE `administrar` (
  `id_usuario` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `online` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrar`
--

INSERT INTO `administrar` (`id_usuario`, `login`, `senha`, `nome_usuario`, `token`, `foto`, `online`) VALUES
(1, 'moises', 'f6156109e67299301940393bc93025f0', 'Moisés Alves Borges', '0000-0000-1', '', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(100) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome_aluno`, `telefone`, `ativo`) VALUES
(1, 'Moisés alves borges', '(33) 98735-6018', 1),
(2, 'Moisés Alves Borges Teste', '(33) 2343-4434', 1),
(3, 'Teste', '(34) 2343-2242', 1),
(4, 'Testes', '(23) 4343-4342', 1),
(5, 'Nayara Seiffert', '(33) 4343-4343', 1),
(6, 'Geison', '(33) 98783-2823', 1),
(7, 'Moisés', '(21) 2121-2121', 1),
(8, 'Sabrina CHAVES', '(34) 3243-2432', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `area_de_atuacao`
--

CREATE TABLE `area_de_atuacao` (
  `id_area_de_atuacao` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `area_de_atuacao`
--

INSERT INTO `area_de_atuacao` (`id_area_de_atuacao`, `nome`) VALUES
(1, 'Tecnologia'),
(2, 'Agricultura'),
(3, 'Pecuaria'),
(4, 'Saúde');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nome_curso` varchar(30) NOT NULL,
  `sigla_curso` varchar(8) NOT NULL,
  `duracao` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nome_curso`, `sigla_curso`, `duracao`, `area`, `ativo`) VALUES
(1, 'Sistemas de informação', 'Si', 10, 1, 1),
(2, 'Telecomunicação 3', 'TEL', 10, 1, 1),
(4, 'Administração', 'ADM', 10, 2, 1),
(5, 'Medicina', 'Me', 20, 4, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id_disciplina` int(11) NOT NULL,
  `nome_disciplina` varchar(255) NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id_disciplina`, `nome_disciplina`, `ativo`) VALUES
(9, 'Matemática', 1),
(10, 'Matemática', 1),
(11, 'Português', 1),
(12, 'Geografia', 1),
(13, 'Inglês', 1),
(14, 'Psicologia', 1),
(15, 'Espanhol', 1),
(16, 'Gestão empresarial', 1),
(17, 'Gestão empresarial ii', 1),
(18, 'Contabilidade', 1),
(19, 'Logistica', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `id_matricula` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `aluno` int(11) NOT NULL,
  `turma` int(11) DEFAULT NULL,
  `situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `matricula`
--

INSERT INTO `matricula` (`id_matricula`, `numero`, `aluno`, `turma`, `situacao`) VALUES
(1, 587493026, 1, 17, 1),
(2, 887250510, 1, 11, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `matriz`
--

CREATE TABLE `matriz` (
  `id_matriz` int(11) NOT NULL,
  `nome_matriz` varchar(255) NOT NULL,
  `periodo_referente` int(11) NOT NULL,
  `curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `matriz`
--

INSERT INTO `matriz` (`id_matriz`, `nome_matriz`, `periodo_referente`, `curso`) VALUES
(3, 'Ementa do curso de administração do periodo 1', 1, 4),
(4, 'Ementa do curso de administração do periodo 2', 2, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `matriz_disciplina`
--

CREATE TABLE `matriz_disciplina` (
  `id_matrizDisciplina` int(11) NOT NULL,
  `observacao` varchar(255) DEFAULT NULL,
  `disciplina` int(11) NOT NULL,
  `matriz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `matriz_disciplina`
--

INSERT INTO `matriz_disciplina` (`id_matrizDisciplina`, `observacao`, `disciplina`, `matriz`) VALUES
(1, NULL, 19, 3),
(2, NULL, 1, 3),
(3, NULL, 1, 3),
(4, NULL, 17, 3),
(5, NULL, 14, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacoes`
--

CREATE TABLE `situacoes` (
  `id_situacao` int(11) NOT NULL,
  `nome_situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `situacoes`
--

INSERT INTO `situacoes` (`id_situacao`, `nome_situacao`) VALUES
(1, 0),
(2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `id_turma` int(11) NOT NULL,
  `curso` int(11) NOT NULL,
  `nome_turma` varchar(255) NOT NULL,
  `dataConclusao` date DEFAULT NULL,
  `dataAbertura` date NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id_turma`, `curso`, `nome_turma`, `dataConclusao`, `dataAbertura`, `ativo`) VALUES
(5, 2, 'Teste', NULL, '2019-11-18', 0),
(6, 1, 'Turma Moisés ', '2019-11-21', '2019-11-19', 0),
(7, 1, 'Testes', NULL, '2019-11-07', 0),
(8, 5, 'Turma teste', NULL, '2019-11-21', 0),
(9, 4, 'Turma 3', NULL, '2019-11-21', 0),
(10, 1, 'Teste', NULL, '2019-11-25', 0),
(11, 1, 'Minha turma', NULL, '2019-11-25', 1),
(12, 1, 'Teste1', NULL, '2019-11-26', 0),
(13, 1, 'Teste2', NULL, '2019-11-26', 0),
(14, 4, 'Teste', NULL, '2019-11-26', 1),
(15, 4, 'Asfd', NULL, '2019-11-02', 1),
(16, 1, 'Turma 2', NULL, '2019-11-27', 1),
(17, 2, 'Asasd', NULL, '2019-11-27', 1),
(18, 2, 'Teste23', NULL, '2019-11-27', 1),
(19, 1, 'Sfsfasdf', NULL, '2019-11-27', 1),
(20, 2, 'Asfdsadfsd', NULL, '2019-11-27', 1),
(21, 2, 'Tsete', NULL, '2019-11-27', 1),
(22, 2, 'Dafasdf', NULL, '2019-11-27', 1),
(23, 4, 'Tesrw', NULL, '2019-11-27', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_periodos`
--

CREATE TABLE `turma_periodos` (
  `turma` int(11) NOT NULL,
  `periodo` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `obs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turma_periodos`
--

INSERT INTO `turma_periodos` (`turma`, `periodo`, `semestre`, `ano`, `obs`) VALUES
(23, 9, 2, 2019, '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrar`
--
ALTER TABLE `administrar`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`),
  ADD KEY `fk_situacoes__aluno` (`ativo`);

--
-- Indexes for table `area_de_atuacao`
--
ALTER TABLE `area_de_atuacao`
  ADD PRIMARY KEY (`id_area_de_atuacao`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `fk_atuacao_cursos` (`area`),
  ADD KEY `fk_situacoes__cursos` (`ativo`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_disciplina`),
  ADD KEY `fk_situacoes__disciplina` (`ativo`);

--
-- Indexes for table `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id_matricula`),
  ADD KEY `fk_aluno__matricula` (`aluno`),
  ADD KEY `fk_turma__matricula` (`turma`);

--
-- Indexes for table `matriz`
--
ALTER TABLE `matriz`
  ADD PRIMARY KEY (`id_matriz`),
  ADD KEY `fk_curso__matriz` (`curso`);

--
-- Indexes for table `matriz_disciplina`
--
ALTER TABLE `matriz_disciplina`
  ADD PRIMARY KEY (`id_matrizDisciplina`);

--
-- Indexes for table `situacoes`
--
ALTER TABLE `situacoes`
  ADD PRIMARY KEY (`id_situacao`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id_turma`),
  ADD KEY `fk_curso__tumas` (`curso`);

--
-- Indexes for table `turma_periodos`
--
ALTER TABLE `turma_periodos`
  ADD KEY `fk_turmas__turma_periodos` (`turma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrar`
--
ALTER TABLE `administrar`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `area_de_atuacao`
--
ALTER TABLE `area_de_atuacao`
  MODIFY `id_area_de_atuacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id_disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id_matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `matriz`
--
ALTER TABLE `matriz`
  MODIFY `id_matriz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `matriz_disciplina`
--
ALTER TABLE `matriz_disciplina`
  MODIFY `id_matrizDisciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `situacoes`
--
ALTER TABLE `situacoes`
  MODIFY `id_situacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id_turma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `fk_situacoes__aluno` FOREIGN KEY (`ativo`) REFERENCES `situacoes` (`id_situacao`);

--
-- Limitadores para a tabela `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `fk_atuacao_cursos` FOREIGN KEY (`area`) REFERENCES `area_de_atuacao` (`id_area_de_atuacao`),
  ADD CONSTRAINT `fk_situacoes__cursos` FOREIGN KEY (`ativo`) REFERENCES `situacoes` (`id_situacao`);

--
-- Limitadores para a tabela `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `fk_aluno__matricula` FOREIGN KEY (`aluno`) REFERENCES `aluno` (`id_aluno`),
  ADD CONSTRAINT `fk_turma__matricula` FOREIGN KEY (`turma`) REFERENCES `turmas` (`id_turma`);

--
-- Limitadores para a tabela `matriz`
--
ALTER TABLE `matriz`
  ADD CONSTRAINT `fk_curso__matriz` FOREIGN KEY (`curso`) REFERENCES `cursos` (`id_curso`);

--
-- Limitadores para a tabela `turmas`
--
ALTER TABLE `turmas`
  ADD CONSTRAINT `fk_curso__tumas` FOREIGN KEY (`curso`) REFERENCES `cursos` (`id_curso`);

--
-- Limitadores para a tabela `turma_periodos`
--
ALTER TABLE `turma_periodos`
  ADD CONSTRAINT `fk_turmas__turma_periodos` FOREIGN KEY (`turma`) REFERENCES `turmas` (`id_turma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
