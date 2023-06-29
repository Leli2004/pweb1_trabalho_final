-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_aula
CREATE DATABASE IF NOT EXISTS `db_aula` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_aula`;

-- Copiando estrutura para tabela db_aula.consulta
CREATE TABLE IF NOT EXISTS `consulta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data_con` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `hora_con` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `paciente_con` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0x30',
  `atend_con` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `tipo_con` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `area_con` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_aula.consulta: ~13 rows (aproximadamente)
INSERT INTO `consulta` (`id`, `data_con`, `hora_con`, `paciente_con`, `atend_con`, `tipo_con`, `area_con`) VALUES
	(6, '2023-07-05', '13:45', '111.111.111-11', 'Exame', 'Coleta de dados', 'Urologia'),
	(7, '2023-07-06', '11:00', '222.222.222-22', 'Exame', 'Coleta de dados', 'Pediatria'),
	(8, '2023-07-06', '13:45', '333.333.333-33', 'Consulta', 'Geral', 'Clínico Geral'),
	(9, '2023-07-11', '08:30', '356.356.356-35', 'Exame', 'Teste de visão', 'Oftalmologia'),
	(10, '2023-07-07', '12:00', '222.222.222-22', 'Consulta', 'Coleta de dados', 'Cardiologia'),
	(11, '2023-07-09', '15:00', '444.444.444-44', 'Consulta', 'Geral', 'Clínico Geral'),
	(12, '2023-07-10', '16:45', '333.333.333-33', 'Exame', 'Acompanhamento', 'Ultrassom'),
	(13, '2023-07-12', '15:40', '777.777.777-77', 'Exame', 'Acompanhamento', 'Fisioterapia'),
	(14, '2023-07-12', '16:30', '111.111.111-11', 'Consulta', 'Geral', 'Clínico Geral'),
	(15, '2023-07-13', '08:00', '666.666.666-66	', 'Consulta', 'Coleta de dados', 'Fisioterapia'),
	(16, '2023-07-13', '09:30', '888.888.888-88', 'Consulta', 'Mostra de exames', 'Oncologia'),
	(17, '2023-07-13', '10:30', '489.589.625-45', 'Consulta', 'Mostra de exames', 'Dermatologia'),
	(18, '2023-07-14', '13:30', '222.222.222-22', 'Exame', 'Coleta de dados', 'Clínico Geral');

-- Copiando estrutura para tabela db_aula.func
CREATE TABLE IF NOT EXISTS `func` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_func` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `cpf_func` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `numCracha_func` int DEFAULT NULL,
  `cargo_func` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `setor_func` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `dataInicio_func` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_aula.func: ~14 rows (aproximadamente)
INSERT INTO `func` (`id`, `nome_func`, `cpf_func`, `numCracha_func`, `cargo_func`, `setor_func`, `dataInicio_func`) VALUES
	(9, 'Daniela N Dalla Vecchia', '139.139.139-39', 12, 'Neurologista', 'Operacional', '2015-08-08'),
	(10, 'Danieli Dalla vecchia', '963.852.854-78', 13, 'Secretário', 'Logistica', '2023-06-25'),
	(11, 'Camila Fank Kist', '555.555.555-55', 14, 'Gerente', 'Logística', '2018-07-30'),
	(12, 'Krastally Kasper', '777.777.777-77', 15, 'Designer', 'Marketing', '2019-12-12'),
	(13, 'Ravi Silva', '655.894.258-56', 16, 'Pediatra', 'Operacional', '2012-05-23'),
	(14, 'Mariana Matoso', '545.578.587-89', 17, 'Fisioterapeuta', 'Operacional', '2020-09-16'),
	(15, 'Xena N D Vecchia', '321.131.321-32', 1, 'Sócia', 'Executivo', '2015-08-05'),
	(16, 'Dora Dorinha', '455.455.455-55', 2, 'Sócia', 'Executivo', '2010-01-01'),
	(17, 'Lola Lolinha', '369.369.369-36', 3, 'Sócia', 'Executivo', '2010-01-01'),
	(18, 'Morticia Morticia', '159.847.295-98', 4, 'Sócia', 'Executivo', '2010-01-01'),
	(19, 'Theo Teozinho', '158.782.575-89', 5, 'Sócio', 'Executivo', '2010-01-01'),
	(20, 'Manteiga Manteiguinha', '587.564.467-01', 6, 'Sócio', 'Executivo', '2010-01-01'),
	(22, 'Santo Dalla Vecchia', '489.469.464-12', 26, 'Psicólogo', 'Operacional', '2008-09-25'),
	(23, 'Daiane N dalla Vecchia', '123.789.445-66', 27, 'Gerente', 'Financeiro', '2021-07-05');

-- Copiando estrutura para tabela db_aula.paciente
CREATE TABLE IF NOT EXISTS `paciente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_paciente` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `cpf_paciente` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `dataNasc_paciente` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `telefone_paciente` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `endereco_paciente` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf_paciente` (`cpf_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_aula.paciente: ~11 rows (aproximadamente)
INSERT INTO `paciente` (`id`, `nome_paciente`, `cpf_paciente`, `dataNasc_paciente`, `telefone_paciente`, `endereco_paciente`) VALUES
	(6, 'Ana Maria', '111.111.111-11', '2000-06-05', '11 1111-1111', 'Bairro Parque das Palmeiras'),
	(7, 'Pedro Lucas', '222.222.222-22', '1986-08-25', '22 2222-2222', 'Bairro Belvedere'),
	(8, 'Miguel Jose', '333.333.333-33', '2003-11-03', '0000000', 'Bairro Seminário'),
	(9, 'Fernanda gabriela', '444.444.444-44', '1989-01-14', '44 4444-4444', 'Bairro Passo dos Fortes'),
	(10, 'Joana Flor', '555.555.555-55', '2013-02-04', '55 5555-5555', 'Bairro Efapi'),
	(11, 'Victor Hugo', '666.666.666-66', '2003-06-23', '45 95896-5487', 'Bairro Santa Maria'),
	(12, 'Maria Alice', '777.777.777-77', '2005-08-12', '49 95689-9865', 'Bairro Bela Vista'),
	(13, 'Pedro Henrique', '888.888.888-88', '2009-09-09', '49 94587-9845', 'Bairro Vederti'),
	(14, 'Luisa Helena', '999.999.999-99', '2001-08-07', '49 99910-9910', 'Bairro São Pedro'),
	(15, 'Ana Sophia', '101.101.101-10', '1993-05-12', '49 99845-8702', 'Bairro Universitário'),
	(19, 'teste dois', '123', '2010-01-01', '123', 'hdhdh');

-- Copiando estrutura para tabela db_aula.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `telefone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `login` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `senha` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_aula.usuario: ~8 rows (aproximadamente)
INSERT INTO `usuario` (`id`, `nome`, `telefone`, `email`, `login`, `senha`) VALUES
	(17, 'Marli padilha do nascimento', '49 99814-2520', 'marlipadilhadonascimento3101@gmail.com', '444', '444'),
	(18, 'Santo Dalla Vecchia', '49 98860-1779', 'santodallavecchia@gmail.com', '56', '56'),
	(19, 'Daiane Nascimento Dalla Vecchia', '49 99910-9910', 'dayanne34@gmail.com', '7', '7'),
	(22, 'Marcelo Borges', '49 99963-6658', 'borges894@gmail.com', '2', '2'),
	(23, 'Danieli Dalla vecchia', '49 99136-0963', 'danielidondallavecchia@gmail.com', '4', '4'),
	(26, 'xeninha', '12345', 'xeninha@xeninha.com', 'xeninha', '$2y$10$HY29p4/3KrinZs5j2Tr/YOuWcQshW6iHZnquxR7yP0RO/P31ZeeLG'),
	(32, 'oi', '87', 'oi@oi', 'oi', '$2y$10$.0heZA2PD9ctgm9wTuBuCunyNORfTArZEs02UU8NEVG8V5ZBRHWK.'),
	(34, 'dani', '123', 'dani@gmail.com', 'dani', '$2y$10$luPWJtmfgpxbnWGB41.lqOVCCwcMtRyNc18bd66Hqj7zsWXeW2.k2');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
