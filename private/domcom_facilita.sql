-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 25-Jan-2019 às 16:46
-- Versão do servidor: 10.2.21-MariaDB
-- versão do PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domcom_facilita`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE `conteudo` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `necessidades` mediumtext DEFAULT NULL,
  `modelo_escolhido` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `tags` mediumtext DEFAULT NULL,
  `descricao` mediumtext DEFAULT NULL,
  `cor1` varchar(255) DEFAULT NULL,
  `cor2` varchar(255) DEFAULT NULL,
  `cor3` varchar(255) DEFAULT NULL,
  `sobre` mediumtext DEFAULT NULL,
  `informacoes` mediumtext DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `subslogan` varchar(255) DEFAULT NULL,
  `slider` varchar(255) DEFAULT NULL,
  `produtos` varchar(255) DEFAULT NULL,
  `descricoes` mediumtext DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `email1` varchar(255) DEFAULT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `email3` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT 'N Possui',
  `instagram` varchar(255) DEFAULT 'N Possui',
  `twitter` varchar(255) DEFAULT 'N Possui',
  `linkedin` varchar(255) NOT NULL DEFAULT 'N Possui',
  `googleplus` varchar(255) NOT NULL DEFAULT 'N Possui',
  `youtube` varchar(255) NOT NULL DEFAULT 'N Possui'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`id`, `nome`, `cpf`, `necessidades`, `modelo_escolhido`, `titulo`, `subtitulo`, `tags`, `descricao`, `cor1`, `cor2`, `cor3`, `sobre`, `informacoes`, `slogan`, `subslogan`, `slider`, `produtos`, `descricoes`, `telefone`, `email`, `whatsapp`, `email1`, `email2`, `email3`, `facebook`, `instagram`, `twitter`, `linkedin`, `googleplus`, `youtube`) VALUES
(33, 'sadsd', '222.2', 'mapa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(34, '1111', '223', 'mapa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(35, 'Cliente da Silva', '123.123.123-12', 'sobre,servicos,contato,mapa,banner,blog', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(36, 'Cliente da Silva ', '123.123.123-12', 'sobre,servicos,contato,chat,mapa,whatsapp,blog,newsletter,redes,manutencao', 'Contabilidade 2', 'teste', 'teste', 'teste', 'teste', '#ff0000', '#0000ff', '#ffff00', 'teste', 'teste', 'teste', 'teste', '', 'teste', 'teste', '123', 'teste@teste.com', '1233', 'teste3@teste.com', '', '', 'n possui', 'teste', 'n possui', 'n possui', 'n possui', 'n possui'),
(37, 'Teste da Silva', '123.123.123-12', 'mapa,banner,video,whatsapp', 'Advogado 1', 'teste', 'teste', 'teste', 'teste', '#ff0000', '#0000ff', '#ffff00', 'teste', 'teste', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(38, 'Giordani de Oliveira', '017.290.540-05', 'sobre,servicos,contato,chat,mapa,banner,whatsapp,blog,redes', 'Carro 2', 'teste', 'teste', 'teste', 'teste', '#ff0000', '#0000ff', '#ffff00', 'teste', 'teste', 'Venha ara dom', 'asdasdasdasdas', 'ClÃ­nica 1', 'site', 'jashfduhfusdjashfduhfusdjashfduhfusdjashfduhfusdjashfduhfusdjashfduhfusdjashfduhfusdjashfduhfusdjashfduhfusdjashfduhfusdjashfduhfusdjashfduhfusdjashfduhfusdjashfduhfusdjashfduhfusdjashfduhfusdjashfduh', 'jashfduhfusd', 'jashfduhfusd@gmail.com', 'jashfduhfusd', 'jashfduhfusd@', 'jashfduhfusd@', 'jashfduhfusd@', 'jashfduhfusd', 'jashfduhfusd', '', '', '', ''),
(39, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Arquiteto 5', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 'das', '00.000.000/0000-00', 'sobre', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(45, 'dsd', '00.000.000/0000-00', 'servicos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(46, 'christiano cadona', '899.925.120-91', 'contato,mapa,video', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(47, 'vbsdfvs', '00.000.000/0000-00', 'mapa', 'Contabilidade 1', 'ffasd', 'sdadas', 'sdfsdf', '', '#c5c837', '#0000ff', '#ffff00', 'dfsdf', 'dfsdfsdf', '', '', 'ComÃ©rcio 3', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, 'fdsfsd', '00.000.000/0000-00', 'sobre', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(41, 'dasdas', '00.000.000/0000-00', 'sobre', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(42, 'fdsfsd', '00.000.000/0000-00', 'sobre', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(43, 'teste', '000.000.000-00000', 'sobre', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(48, 'sdfsdf', '000.000.000-00', 'sobre,servicos,contato,chat,mapa,banner,video,whatsapp,blog,newsletter,redes,manutencao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(49, 'sdfsdf', '000.000.000-00', 'sobre,servicos,contato,chat,mapa,banner,video,whatsapp,blog,newsletter,redes,manutencao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(50, 'aaaa', '11.111.111/1111-11', 'sobre', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(51, 'aaaaaa', '00.000.000/0000-00', 'sobre', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(52, 'aaaa', '11.111.111/1111-11', 'sobre', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(53, 'a', '111.111.111-11111', 'sobre', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(54, 'dasdas', '00.000.000/0000-00', 'sobre', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(55, 'TTT', '00.000.000/0000-00', 'mapa', 'Carro 4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(56, 'Gdoajd', '642.974.838-98', 'servicos,contato,banner,video', 'Arquiteto 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(57, 'Bdjjd', '677.788.888-89', 'servicos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(58, 'asdasd', '111.111', 'servicos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(59, 'asdsad', '213.213.231-23', 'mapa', 'Contabilidade 5', '', '', '', '', '#ff0000', '#0000ff', '#ffff00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(60, 'asdsad', '123.213', 'mapa', 'Carro 4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(61, 'asd', '123', 'sobre', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(62, 'asdasd', '222.2', 'mapa', 'ClÃ­nica 1', '', '', '', '', '#ff0000', '#0000ff', '#ffff00', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(63, 'Anderson', '017.290.540-05', 'sobre', 'Carro 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(64, 'asdasd', '123.123', 'video,whatsapp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(65, 'ssssssssssssf', '123.213', 'video,whatsapp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(66, 'asdadsssss', '123.123', 'blog', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(67, 'Tets', '00.000.000/0000-00', 'sobre', 'Carro 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(68, 'dasdas', '00.000.000/0000-00', 'mapa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui'),
(69, 'Teste da AgÃªncia DOM', '123.123.123-12', 'sobre,servicos,contato,chat,mapa,banner,video,whatsapp,blog,newsletter,redes,manutencao', 'Advogado 2', 'RequisiÃ§Ã£o de Testes', 'Testes', 'tags,sobre,sites.', 'Lorem ipsum dolor sit amet.', '#ff0000', '#0000ff', '#ffff00', 'Mais um pouco de lorem ipsum dolor sit amet. Mais um pouco de lorem ipsum dolor sit amet. Mais um pouco de lorem ipsum dolor sit amet. Mais um pouco de lorem ipsum dolor sit amet. ', 'Mais um pouco de lorem ipsum dolor sit amet. Mais um pouco de lorem ipsum dolor sit amet. Mais um pouco de lorem ipsum dolor sit amet. Mais um pouco de lorem ipsum dolor sit amet. ', 'Lorem ipsum', 'Dolor sit amet', 'Supermercado 2', 'Facilita', 'Ã‰ a maneira mais fÃ¡cil, segura e barata de ter seu prÃ³prio site.', '(99)99999-9999', 'email@email.com', '(88)88888-8888', 'email1@email.com', 'email2@email.com', 'testandorevisao@email.com', 'facebook.com', 'instagram.com', 'twitter.com', 'linkedin.com', 'googleplus.com', 'youtube.com'),
(70, 'sdasd11111', '222.222.222', 'redes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui', 'N Possui');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelos`
--

CREATE TABLE `modelos` (
  `titulo` varchar(255) NOT NULL,
  `caminho` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `modelos`
--

INSERT INTO `modelos` (`titulo`, `caminho`, `categoria`, `link`) VALUES
('Carro 1', 'Carro 1.JPG', 'carro', 'http://carro1.disite.com.br/'),
('Carro 2', 'Carro 2.JPG', 'carro', 'http://carro2.disite.com.br/'),
('Carro 3', 'Carro 3.JPG', 'carro', 'http://carro3.disite.com.br/'),
('Carro 4', 'Carro 4.JPG', 'carro', 'http://carro4.disite.com.br/'),
('Carro 5', 'Carro 5.JPG', 'carro', 'http://carro5.disite.com.br/'),
('Contabilidade 1', 'Contabilidade 1.JPG', 'con', 'http://con1.disite.com.br/'),
('Contabilidade 2', 'Contabilidade 2.JPG', 'con', 'http://con2.disite.com.br/'),
('Contabilidade 3', 'Contabilidade 3.JPG', 'con', 'http://con3.disite.com.br/'),
('Contabilidade 4', 'Contabilidade 4.JPG', 'con', 'http://con4.disite.com.br/'),
('Contabilidade 5', 'Contabilidade 5.JPG', 'con', 'http://con5.disite.com.br/'),
('Advogado 1', 'Advogado 1.JPG', 'adv', 'http://adv1.disite.com.br/'),
('Advogado 2', 'Advogado 2.JPG', 'adv', 'http://adv2.disite.com.br/'),
('Advogado 3', 'Advogado 3.JPG', 'adv', 'http://adv3.disite.com.br/'),
('Advogado 4', 'Advogado 4.JPG', 'adv', 'http://adv4.disite.com.br/'),
('Advogado 5', 'Advogado 5.JPG', 'adv', 'http://adv5.disite.com.br/'),
('Arquiteto 1', 'Arquiteto 1.JPG', 'arq', 'http://arq1.disite.com.br/'),
('Arquiteto 2', 'Arquiteto 2.JPG', 'arq', 'http://arq2.disite.com.br/'),
('Arquiteto 3', 'Arquiteto 3.JPG', 'arq', 'http://arq3.disite.com.br/'),
('ClÃ­nica 1', 'ClÃ­nica 1.JPG', 'med', 'http://med1.disite.com.br/'),
('ClÃ­nica 2', 'ClÃ­nica 2.JPG', 'med', 'http://med2.disite.com.br/'),
('ClÃ­nica 3', 'ClÃ­nica 3.JPG', 'med', 'http://med3.disite.com.br/'),
('ClÃ­nica 4', 'ClÃ­nica 4.JPG', 'med', 'http://med4.disite.com.br/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `slides`
--

CREATE TABLE `slides` (
  `titulo` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `caminho` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `slides`
--

INSERT INTO `slides` (`titulo`, `categoria`, `caminho`) VALUES
('Academia 1', 'acad', 'Academia 1.jpg'),
('Academia 2', 'acad', 'Academia 2.jpg'),
('Academia 3', 'acad', 'Academia 3.jpg'),
('Academia 4', 'acad', 'Academia 4.jpg'),
('Academia 5', 'acad', 'Academia 5.jpg'),
('Arquiteto 1', 'arq', 'Arquiteto 1.jpg'),
('Arquiteto 2', 'arq', 'Arquiteto 2.jpg'),
('Arquiteto 3', 'arq', 'Arquiteto 3.jpg'),
('Arquiteto 4', 'arq', 'Arquiteto 4.jpg'),
('Arquiteto 5', 'arq', 'Arquiteto 5.jpg'),
('AssistÃªncia 1', 'tec', 'AssistÃªncia 1.jpg'),
('AssistÃªncia 2', 'tec', 'AssistÃªncia 2.jpg'),
('AssistÃªncia 3', 'tec', 'AssistÃªncia 3.jpg'),
('AssistÃªncia 4', 'tec', 'AssistÃªncia 4.jpg'),
('AssistÃªncia 5', 'tec', 'AssistÃªncia 5.jpg'),
('MÃºsica 1', 'band', 'MÃºsica 1.jpg'),
('MÃºsica 2', 'band', 'MÃºsica 2.jpg'),
('MÃºsica 3', 'band', 'MÃºsica 3.jpg'),
('MÃºsica 4', 'band', 'MÃºsica 4.jpg'),
('MÃºsica 5', 'band', 'MÃºsica 5.jpg'),
('Business 1', 'business', 'Business 1.jpg'),
('Business 2', 'business', 'Business 2.jpg'),
('Business 3', 'business', 'Business 3.png'),
('Business 4', 'business', 'Business 4.jpg'),
('Business 5', 'business', 'Business 5.png'),
('ClÃ­nica 4', 'med', 'ClÃ­nica 4.jpg'),
('ClÃ­nica 1', 'med', 'ClÃ­nica 1.jpg'),
('ClÃ­nica 2', 'med', 'ClÃ­nica 2.jpg'),
('ClÃ­nica 3', 'med', 'ClÃ­nica 3.jpg'),
('ClÃ­nica 5', 'med', 'ClÃ­nica 5.jpg'),
('Corretora 1', 'imob', 'Corretora 1.jpg'),
('Corretora 2', 'imob', 'Corretora 2.jpg'),
('Corretora 3', 'imob', 'Corretora 3.jpg'),
('Corretora 4', 'imob', 'Corretora 4.jpg'),
('Corretora 5', 'imob', 'Corretora 5.jpg'),
('Contabilidade 1', 'con', 'Contabilidade 1.jpg'),
('Contabilidade 2', 'con', 'Contabilidade 2.jpg'),
('Contabilidade 3', 'con', 'Contabilidade 3.jpg'),
('Contabilidade 4', 'con', 'Contabilidade 4.jpg'),
('Contabilidade 5', 'con', 'Contabilidade 5.jpg'),
('Escola 1', 'escola', 'Escola 1.jpg'),
('Escola 2', 'escola', 'Escola 2.jpg'),
('Escola 3', 'escola', 'Escola 3.jpg'),
('Escola 4', 'escola', 'Escola 4.jpg'),
('Escola 5', 'escola', 'Escola 5.jpg'),
('Advodago 1', 'adv', 'Advodago 1.jpg'),
('Advodago 2', 'adv', 'Advodago 2.jpg'),
('Advodago 3', 'adv', 'Advodago 3.jpg'),
('Advodago 4', 'adv', 'Advodago 4.jpg'),
('Advodago 5', 'adv', 'Advodago 5.jpg'),
('Gastronomia 1', 'gastro', 'Gastronomia 1.jpg'),
('Gastronomia 2', 'gastro', 'Gastronomia 2.jpg'),
('Gastronomia 3', 'gastro', 'Gastronomia 3.jpg'),
('Gastronomia 4', 'gastro', 'Gastronomia 4.jpg'),
('Gastronomia 5', 'gastro', 'Gastronomia 5.jpg'),
('IndÃºstria 1', 'ind', 'IndÃºstria 1.jpg'),
('IndÃºstria 2', 'ind', 'IndÃºstria 2.jpg'),
('IndÃºstria 3', 'ind', 'IndÃºstria 3.jpg'),
('IndÃºstria 4', 'ind', 'IndÃºstria 4.jpg'),
('IndÃºstria 5', 'ind', 'IndÃºstria 5.jpg'),
('Loja de Roupas 1', 'vest', 'Loja de Roupas 1.jpg'),
('Loja de Roupas 2', 'vest', 'Loja de Roupas 2.jpg'),
('Loja de Roupas 3', 'vest', 'Loja de Roupas 3.jpg'),
('Loja de Roupas 4', 'vest', 'Loja de Roupas 4.jpg'),
('Loja de Roupas 5', 'vest', 'Loja de Roupas 5.jpg'),
('ComÃ©rcio 1', 'com', 'ComÃ©rcio 1.jpg'),
('ComÃ©rcio 2', 'com', 'ComÃ©rcio 2.jpg'),
('ComÃ©rcio 3', 'com', 'ComÃ©rcio 3.jpg'),
('ComÃ©rcio 4', 'com', 'ComÃ©rcio 4.jpg'),
('ComÃ©rcio 5', 'com', 'ComÃ©rcio 5.jpg'),
('Pet 1', 'pet', 'Pet 1.jpg'),
('Pet 2', 'pet', 'Pet 2.jpg'),
('Pet 3', 'pet', 'Pet 3.jpg'),
('Pet 4', 'pet', 'Pet 4.jpg'),
('Pet 5', 'pet', 'Pet 5.jpg'),
('Religioso 1', 'ong', 'Religioso 1.jpg'),
('Religioso 2', 'ong', 'Religioso 2.jpg'),
('Religioso 3', 'ong', 'Religioso 3.jpg'),
('Religioso 4', 'ong', 'Religioso 4.jpg'),
('Religioso 5', 'ong', 'Religioso 5.jpg'),
('Carro 1', 'carro', 'Carro 1.jpg'),
('Carro 2', 'carro', 'Carro 2.jpg'),
('Carro 3', 'carro', 'Carro 3.jpg'),
('Carro 4', 'carro', 'Carro 4.jpg'),
('Carro 5', 'carro', 'Carro 5.jpg'),
('EstÃ©tica 1', 'beleza', 'EstÃ©tica 1.jpg'),
('EstÃ©tica 2', 'beleza', 'EstÃ©tica 2.jpg'),
('EstÃ©tica 3', 'beleza', 'EstÃ©tica 3.jpg'),
('EstÃ©tica 4', 'beleza', 'EstÃ©tica 4.jpg'),
('EstÃ©tica 5', 'beleza', 'EstÃ©tica 5.jpg'),
('Supermercado 1', 'super', 'Supermercado 1.jpg'),
('Supermercado 2', 'super', 'Supermercado 2.jpg'),
('Supermercado 3', 'super', 'Supermercado 3.jpg'),
('Supermercado 4', 'super', 'Supermercado 4.jpg'),
('Supermercado 5', 'super', 'Supermercado 5.jpg'),
('Loja Online 1', 'lon', 'Loja Online 1.jpg'),
('Loja Online 2', 'lon', 'Loja Online 2.png'),
('Loja Online 3', 'lon', 'Loja Online 3.jpg'),
('Loja Online 4', 'lon', 'Loja Online 4.jpg'),
('Loja Online 5', 'lon', 'Loja Online 5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conteudo`
--
ALTER TABLE `conteudo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conteudo`
--
ALTER TABLE `conteudo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
