-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: 28-Jan-2020 às 14:11
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crsc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(256) NOT NULL,
  `token` varchar(256) NOT NULL,
  `created_at` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ficha`
--

DROP TABLE IF EXISTS `tb_ficha`;
CREATE TABLE IF NOT EXISTS `tb_ficha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_maquina` int(11) NOT NULL,
  `regiao` varchar(256) NOT NULL,
  `unidade` varchar(256) NOT NULL,
  `patrimonio` varchar(256) NOT NULL,
  `ip` varchar(256) NOT NULL,
  `mascara` varchar(256) NOT NULL,
  `gateway` varchar(256) NOT NULL,
  `tecnicio` varchar(256) NOT NULL,
  `liberado_em` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_maquina`
--

DROP TABLE IF EXISTS `tb_maquina`;
CREATE TABLE IF NOT EXISTS `tb_maquina` (
  `id_maquina` int(11) NOT NULL AUTO_INCREMENT,
  `regiao` varchar(256) NOT NULL,
  `unidade` varchar(256) NOT NULL,
  `marca` varchar(256) NOT NULL,
  `patrimonio` varchar(256) NOT NULL,
  `ip` varchar(256) NOT NULL,
  `mascara` varchar(256) NOT NULL,
  `gateway` varchar(256) NOT NULL,
  `data_chegada` varchar(256) NOT NULL,
  `situacao` varchar(256) DEFAULT NULL,
  `problema` varchar(256) NOT NULL,
  `tecnico` varchar(256) NOT NULL,
  `liberado_em` varchar(256) NOT NULL,
  `enviado_em` varchar(256) NOT NULL,
  `condicao` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_maquina`),
  KEY `situacao_fk` (`situacao`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_maquina`
--

INSERT INTO `tb_maquina` (`id_maquina`, `regiao`, `unidade`, `marca`, `patrimonio`, `ip`, `mascara`, `gateway`, `data_chegada`, `situacao`, `problema`, `tecnico`, `liberado_em`, `enviado_em`, `condicao`) VALUES
(1, 'CENTRAL', 'CAEF CAMPINAS', 'DATEN', '684', 'Não informado', '', '', '2017-02-06', 'OK', 'Windows não liga', 'Eduardo', '2017-02-13', '2017-02-13', 0),
(2, 'CENTRAL', 'CAEF CAMPINAS', 'POSITIVO', '1187', 'Não informado', '', '', '2017-02-06', 'OK', 'Máquina liga mas desliga em seguida', 'Eduardo', '2017-02-13', '2017-02-13', 1),
(3, 'CENTRAL', 'CAEF CAMPINAS', 'POSITIVO', '1379', 'Não informado', '', '', '2017-02-06', 'OK', 'Reiniciando na tela de logon', 'Eduardo', '2017-02-10', '2017-02-10', 1),
(4, 'CENTRAL', 'CPMA CAMPINAS', 'ORO', '6097', 'Não informado', '', '', '2017-02-06', 'OK', 'Não está ligando', 'Eduardo', '2017-02-13', '2017-02-13', 1),
(5, 'CENTRAL', 'CPMA RIO CLARO', 'DELL', '3376', '10.14.50.116', '', '', '2017-02-06', 'OK', 'Não loga com nenhum usuário', 'Eduardo', '2017-03-08', '2017-03-08', 1),
(6, 'CENTRAL', 'CPMA RIO CLARO', 'POSITIVO', '4941', 'Não informado', '', '', '2017-02-06', 'OK', 'Não informado', 'Eduardo', '2017-02-13', '2017-02-13', 1),
(7, 'CENTRAL', 'CPMA TIETÊ', 'POSITIVO', '1454', '10.14.97.110', '', '', '2016-02-13', 'OK', 'problema no botão de ligar, desligando sozinho e fazendo barulho de curto', 'Eduardo', '2017-02-20', '2017-02-20', 1),
(8, 'CENTRAL', 'CRSC - DPMA - CENTRAL', 'ORO', '434', 'Não Informado', '', '', '2016-02-13', 'OK', 'Problema no botão ligar, desligando sozinho e barulho de curto', 'Eduardo', '2017-02-15', '2017-02-20', 1),
(9, 'CENTRAL', 'CPMA VOTORANTIM', 'POSITIVO', '1246', 'Não Informado', '', '', '2016-02-13', 'OK', 'manutenção periódica', 'Eduardo', '2017-02-14', '2017-02-20', 1),
(10, 'CENTRAL', 'CRSC - DPMA - CENTRAL', 'POSITIVO', '1237', 'Não Informado', '', '', '0216-02-13', 'OK', 'Manutenção peródica', 'Eduardo', '2017-02-15', '2017-02-20', 1),
(11, 'CENTRAL', 'CRSC - DPMA - CENTRAL', 'POSITIVO', '1232', 'Não informado', '', '', '2016-02-13', 'OK', 'Manutenção periódica', 'Eduardo', '2017-02-15', '2017-02-20', 1),
(18, 'CENTRAL', 'CRSC - DPMA - CENTRAL', 'MTEK', '7313', '10.14.76.137', '', '', '2016-02-13', 'OK', 'Manutenção periódica', 'Eduardo', '2017-02-20', '2017-02-20', 0),
(19, 'CENTRAL', 'CRSC - DPMA - CENTRAL', 'INTELLIGENCY', '1205', '10.14.76.131', '', '', '2016-02-13', 'OK', 'Manutenção periódica', 'Eduardo', '2017-02-20', '2017-02-20', 1),
(20, 'CENTRAL', 'CAEF ASSIS', 'ITAUTEC', '5758', '10.14.98.25', '', '', '2017-02-23', 'OK', 'Máquina não liga', 'Eduardo', '2017-02-23', '2017-03-16', 1),
(21, 'OESTE', 'CAEF ASSIS', 'POSITIVO', '6291', '10.14.97.28', '', '', '2018-12-20', 'OK', 'Computador não inicia', 'Eduardo', '2018-12-27', '2020-01-03', 1),
(22, 'Eduardo', 'CPMA RIO CLARO', 'ZCXZC', 'ZXXCCZ', 'XZCZC', '', '', '2019-12-10', 'ZXCXZC', 'ZXCZCZ', 'ZXCXZCZ', '2019-12-18', '2020-01-03', 1),
(23, 'yjjfjj', 'CAEF CAMPINAS', 'jftjftj', 'fjftjftjft', 'fjfjjfj', '', '', '2019-12-17', 'ftjftftjftj', 'ftjftjftj', 'Bruna', '2019-12-17', '2019-12-17', 1),
(24, 'Eduardo', 'CPMA VOTORANTIM', 'werwrwer', 'werwrwer', '101015202', '', '', '2019-12-12', 'werewrwe', 'ewrwrwe', 'wrewrewer', '2019-12-17', '2019-12-09', 1),
(25, 'rsrsesfsef', 'sfefsfef', 'sefsfefsef', 'sefsefefsef', '33/33/3333', '', '', '2020-01-10', 'sefsffefesf', 'sfefseffsef', 'sfsefefsef', '2020-01-10', '2020-01-10', 1),
(26, 'fsfsefsefsefse', 'CAEF CAMPINAS', 'sefsfsefsef', 'sefsefsefse', '10.14.50.159', '', '', '2020-01-10', 'sefsefsefsef', 'sfesefsefsef', 'sefsefsefsef', '2020-01-10', '2020-01-10', 1),
(27, 'CENTRAL', 'CPMA VOTORANTIM', 'POSITIVO', '1246', '10.14.50.198', '', '', '02/01/2020', 'OK', 'Windows não inicia', 'Eduardo', '10/01/2020', '10/01/2020', 1),
(28, 'OESTE', 'CPMA ARAÇATUBA', 'INTELLIGENCY', '6050', '10.14.98.141', '', '', '17/02/2019', 'OK', 'Não informado', 'Eduardo', '24/02/2017', '16/03/2017', 1),
(29, 'OESTE', 'CAEF PRESIDENTE PRUDENTE', 'ORO', '3056', '10.14.98.165', '255.255.255.0', '10.14.50.1', '17/02/2017', 'OK', 'Máquina raramente liga', 'Eduardo', '24/03/2017', '24/03/2017', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_marca`
--

DROP TABLE IF EXISTS `tb_marca`;
CREATE TABLE IF NOT EXISTS `tb_marca` (
  `id_marca` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(256) NOT NULL,
  PRIMARY KEY (`id_marca`),
  KEY `marca_fk` (`marca`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_marca`
--

INSERT INTO `tb_marca` (`id_marca`, `marca`) VALUES
(1, 'DATEN'),
(2, 'DELL'),
(3, 'HP'),
(4, 'INTELLIGENCY'),
(5, 'ITAUTEC'),
(6, 'LENOVO'),
(7, 'LG'),
(8, 'MTEK'),
(9, 'NÃO IDENTIFICADO'),
(10, 'ORO'),
(11, 'POSITIVO'),
(12, 'SEM MARCA'),
(13, 'SEMP TOSHIBA'),
(14, 'VAIP'),
(15, 'XTA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_rede`
--

DROP TABLE IF EXISTS `tb_rede`;
CREATE TABLE IF NOT EXISTS `tb_rede` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` int(11) NOT NULL,
  `mascara` int(11) NOT NULL,
  `gateway` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_regiao`
--

DROP TABLE IF EXISTS `tb_regiao`;
CREATE TABLE IF NOT EXISTS `tb_regiao` (
  `id_regiao` int(11) NOT NULL AUTO_INCREMENT,
  `regiao` varchar(256) NOT NULL,
  PRIMARY KEY (`id_regiao`),
  KEY `regiao_fk` (`regiao`),
  KEY `id_regiao_fk` (`id_regiao`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_regiao`
--

INSERT INTO `tb_regiao` (`id_regiao`, `regiao`) VALUES
(1, 'CAPITAL'),
(2, 'CENTRAL'),
(3, 'NOROESTE'),
(4, 'OESTE'),
(5, 'VALE E LITORAL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_situacao`
--

DROP TABLE IF EXISTS `tb_situacao`;
CREATE TABLE IF NOT EXISTS `tb_situacao` (
  `id_situacao` int(11) NOT NULL AUTO_INCREMENT,
  `situacao` varchar(256) NOT NULL,
  PRIMARY KEY (`id_situacao`),
  KEY `situacao_fk` (`situacao`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_situacao`
--

INSERT INTO `tb_situacao` (`id_situacao`, `situacao`) VALUES
(3, 'AGUARDANDO REPARO'),
(2, 'EM REPARO'),
(4, 'NAO INFORMADO'),
(1, 'OK');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tecnico`
--

DROP TABLE IF EXISTS `tb_tecnico`;
CREATE TABLE IF NOT EXISTS `tb_tecnico` (
  `id_tecnico` int(11) NOT NULL AUTO_INCREMENT,
  `tecnico` varchar(256) NOT NULL,
  PRIMARY KEY (`id_tecnico`),
  KEY `tecnico_fk` (`tecnico`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_tecnico`
--

INSERT INTO `tb_tecnico` (`id_tecnico`, `tecnico`) VALUES
(1, 'Bruna'),
(2, 'Carlos'),
(3, 'Eduardo'),
(4, 'Rafael');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_unidade`
--

DROP TABLE IF EXISTS `tb_unidade`;
CREATE TABLE IF NOT EXISTS `tb_unidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unidade` varchar(256) NOT NULL,
  `id_regiao` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_regiao_fk` (`id_regiao`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_unidade`
--

INSERT INTO `tb_unidade` (`id`, `unidade`, `id_regiao`) VALUES
(1, 'CPMA CARAPICUÍBA', 1),
(2, 'CPMA CEAPIS', 1),
(3, 'CPMA DIADEMA', 1),
(4, 'CPMA FEDERAL', 1),
(5, 'CPMA FERRAZ DE VASCONCELOS', 1),
(6, 'CPMA ITAPEVI', 1),
(7, 'CPMA RIBEIRAO PIRES', 1),
(8, 'CPMA SANTO ANDRE', 1),
(9, 'CAEF SANTO ANDRE', 1),
(10, 'CPMA SÃO BERNARDO DO CAMPO', 1),
(11, 'SÃO PAULO - BARRA FUNDA', 1),
(12, 'SÃO PAULO - MULHER', 1),
(13, 'CPMA ATIBAIA', 2),
(14, 'CPMA BRAGANÇA PAULISTA', 2),
(15, 'CPMA CAMPINAS', 2),
(16, 'CAEF CAMPINAS', 2),
(17, 'CPMA CAPIVARI', 2),
(18, 'CPMA HORTOLÂNDIA', 2),
(19, 'CAEF HORTOLÂNDIA', 2),
(20, 'CPMA INDAIATUBA', 2),
(21, 'CAEF INDAIATUBA', 2),
(22, 'CPMA ITAPETININGA', 2),
(23, 'CAF ITAPETININGA', 2),
(24, 'CPMA LEME', 2),
(25, 'CAEF LEME', 2),
(26, 'CPMA LIMEIRA', 2),
(27, 'CAEF LIMEIRA', 2),
(28, 'CPMA PIRACICABA', 2),
(29, 'CAEF PIRACICABA', 2),
(30, 'CPMA RIO CLARO', 2),
(31, 'CAEF RIO CLARO', 2),
(32, 'CPMA SÃO JOÃO DA BOA VISTA', 2),
(33, 'CPMA SOROCABA', 2),
(34, 'CAEF SOROCABA', 2),
(35, 'CPMA SUMARÉ', 2),
(36, 'CAEF SUMARÉ', 2),
(37, 'CPMA TATUÍ', 2),
(38, 'CPMA TIETÊ', 2),
(39, 'CPMA VOTORANTIM', 2),
(40, 'CAF VOTORANTIM', 2),
(41, 'CPMA AMÉRICO BRASILIENSE', 3),
(42, 'CPMA ARARAQUARA', 3),
(43, 'CAEF ARARAQUARA', 3),
(44, 'CPMA AVARÉ', 3),
(45, 'CAEF AVARÉ', 3),
(46, 'CPMA BARRA BONITA', 3),
(47, 'CPMA BARRETOS', 3),
(48, 'CAEF BARRETOS', 3),
(49, 'CPMA BAURU', 3),
(50, 'CAEF BAURU', 3),
(51, 'CPMA BOTUCATU', 3),
(52, 'CAEF BOTUCATU', 3),
(53, 'CPMA CATANDUVA', 3),
(54, 'CPMA FRANCA', 3),
(55, 'CPMA JAÚ', 3),
(56, 'CPMA LENÇÓIS PAULISTA', 3),
(57, 'CPMA LINS', 3),
(58, 'CPMA MATÃO', 3),
(59, 'CAEF MATÃO', 3),
(60, 'CPMA MIRASSOL', 3),
(61, 'CPMA MONTE ALTO', 3),
(62, 'CPMA NOVO HORIZONTE', 3),
(63, 'CPMA OLÍMPIA', 3),
(64, 'CPMA ORLÂNDIA', 3),
(65, 'CPMA PIRAJUÍ', 3),
(66, 'CAEF PIRAJUÍ', 3),
(67, 'CPMA RIBEIRÃO PRETO', 3),
(68, 'CAEF RIBEIRÃO PRETO', 3),
(69, 'CPMA SÃO CARLOS', 3),
(70, 'CAEF SÃO CARLOS', 3),
(71, 'CPMA SÃO JOSÉ DO RIO PRETO', 3),
(72, 'CAEF SÃO JOSÉ DO RIO PRETO', 3),
(73, 'CPMA TAQUARITINGA', 3),
(74, 'CPMA VOTUPORANGA', 3),
(75, 'CAEF VOTUPORANGA', 3),
(76, 'CPMA ADAMANTINA', 4),
(77, 'CAEF ADAMANTINA', 4),
(78, 'CPMA ARAÇATUBA', 4),
(79, 'CAEF ARAÇATUBA', 4),
(80, 'CPMA ASSIS', 4),
(81, 'CAEF ASSIS', 4),
(82, 'CPMA BIRIGUI', 4),
(83, 'CAEF BIRIGUI', 4),
(84, 'CPMA CANDIDO MOTA', 4),
(85, 'CAF CANDIDO MOTA', 4),
(86, 'CPMA CHAVANTES', 4),
(87, 'CPMA DRACENA', 4),
(88, 'CPMA FERNANDÓPOLIS', 4),
(89, 'CAEF FERNANDÓPOLIS', 4),
(90, 'CPMA IPAUSSÚ', 4),
(91, 'CPMA JALES', 4),
(92, 'CAEF JALES', 4),
(93, 'CPMA MARÍLIA', 4),
(94, 'CAEF MARÍLIA', 4),
(95, 'CPMA OSVALDO CRUZ', 4),
(96, 'CAEF OSVALDO CRUZ', 4),
(97, 'CPMA OURINHOS', 4),
(98, 'CAEF OURINHOS', 4),
(99, 'CPMA PEREIRA BARRETO', 4),
(100, 'CAEF PEREIRA BARRETO', 4),
(101, 'CPMA PRESIDENTE PRUDENTE', 4),
(102, 'CAEF PRESIDENTE PRUDENTE', 4),
(103, 'CPMA PRESIDENTE VENCESLAU', 4),
(104, 'CAEF PRESIDENTE VENCESLAU', 4),
(105, 'CPMA SANTA CRUZ DO RIO PARDO', 4),
(106, 'CPMA TUPÃ', 4),
(107, 'CAEF TUPÃ', 4),
(108, 'CPMA CARAGUATATUBA', 5),
(109, 'CAEF CARAGUATATUBA', 5),
(110, 'CPMA GUARUJÁ', 5),
(111, 'CAEF GUARUJÁ', 5),
(112, 'CPMA JACAREÍ', 5),
(113, 'CPMA LORENA', 5),
(114, 'CAEF LORENA', 5),
(115, 'CPMA MOGI DAS CRUZES', 5),
(116, 'CPMA SANTOS', 5),
(117, 'CAEF SANTOS', 5),
(118, 'CPMA SÃO JOSÉ DOS CAMPOS', 5),
(119, 'CAEF SÃO JOSÉ DOS CAMPOS', 5),
(120, 'CPMA SÃO VICENTE', 5),
(121, 'CAEF SÃO VICENTE', 5),
(122, 'CPMA TAUBATÉ', 5),
(123, 'CAEF TAUBATÉ', 5),
(124, 'CRSC - DPMA - CENTRAL', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eduardo Alves do Nascimento', 'eduardo_ean@outlook.com', NULL, '$2y$10$FHgEKBgXjPxWJVGM0otMLecMZddzsA8AXTUYLcIv7sSHwEqjZ5mfa', 'pLa3aoLH4VudK0UoWB1FN3gpcfM2C8aBvqdJ88UW7E8zP9Ayp6xUUOrbrZlk', '2020-01-08 17:12:45', '2020-01-27 17:57:48'),
(2, 'Ana Caroline Gomes Silva', 'carol_libenter@hotmail.com', NULL, '$2y$10$1Idy9OrtMlji9R8d5oDGI.HK8af9mIe/HX3xcBqQdQOskZVrUR7mO', NULL, '2020-01-08 18:21:10', '2020-01-08 18:21:10'),
(4, 'Buddy', 'buddy@gmail.com', NULL, '$2y$10$IESBUVwsdDEf4FMhzmTnNOHUr3y8UE.udZ0JRxaoSM0XubDpinTtK', NULL, '2020-01-16 19:06:33', '2020-01-16 19:06:33');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_unidade`
--
ALTER TABLE `tb_unidade`
  ADD CONSTRAINT `tb_unidade_ibfk_1` FOREIGN KEY (`id_regiao`) REFERENCES `tb_regiao` (`id_regiao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
