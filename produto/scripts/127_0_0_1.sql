-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Maio-2016 às 04:46
-- Versão do servidor: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2013school`
--
CREATE DATABASE IF NOT EXISTS `2013school` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `2013school`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `actividad`
--

CREATE TABLE `actividad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `actividad`
--

INSERT INTO `actividad` (`id`, `nombre`, `estado`) VALUES
(1, 'Actividad 1', 's'),
(2, 'Actividad 2', 's'),
(3, 'Actividad 3', 's');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `grado` varchar(255) NOT NULL,
  `salon` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `doc` varchar(255) NOT NULL,
  `rh` varchar(255) NOT NULL,
  `eps` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `padre` varchar(255) NOT NULL,
  `madre` varchar(255) NOT NULL,
  `p_ocupacion` varchar(255) NOT NULL,
  `m_ocupacion` varchar(255) NOT NULL,
  `acudiente` varchar(255) NOT NULL,
  `emergencia` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `matricula` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `grado`, `salon`, `tipo`, `fecha`, `doc`, `rh`, `eps`, `direccion`, `telefono`, `padre`, `madre`, `p_ocupacion`, `m_ocupacion`, `acudiente`, `emergencia`, `estado`, `matricula`) VALUES
(6, 'DIEGO RODRIGO JIMENEZ', '1', '1', 'a', '2010-04-04', '123885780', '0+', 'SEGURO SOCIAL FAMILIAR', 'CARACOLES', '6744777', 'VARGAS', 'MARI SOL', 'ING. DE SISTEMAS', 'AMA DE CASA', 'HECTOR ', '6748787', 's', '2013-11-27'),
(7, 'MARIA GUTIERREZ', '1', '1', 'n', '1987-07-02', '12393999', '', '', 'SANTA MARTA', '6679138', '', '', '', '', '', '', 's', '2013-11-30'),
(8, 'nelson', '1', '1', 'a', '1911-11-09', '1', '', '', '1', '1', '', '', '', '', '', '', 's', '2015-11-09'),
(9, 'nelson', '1', '1', 'a', '1911-11-09', '1', '', '', '1', '1', '', '', '', '', '', '', 's', '2015-11-09'),
(10, '2', '1', '3', 'n', '2015-11-09', '2', '', '', '2', '2', '', '', '', '', '', '', 's', '2015-11-09'),
(11, '3', '1', '1', 'n', '2015-11-09', '3', '', '', '3', '3', '', '', '', '', '', '', 's', '2015-11-09'),
(12, '4', '1', '1', 'n', '2015-11-02', '4', '', '', '4', '4', '', '', '', '', '', '', 's', '2015-11-03'),
(13, '4', '1', '1', 'n', '2015-11-02', '4', '', '', '4', '4', '', '', '', '', '', '', 's', '2015-11-03'),
(14, '5', '1', '3', 'n', '2015-11-09', '5', '', '', '5', '5', '', '', '', '', '', '', 's', '2015-11-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `calificar`
--

CREATE TABLE `calificar` (
  `id` int(11) NOT NULL,
  `alumno` varchar(255) NOT NULL,
  `materia` varchar(255) NOT NULL,
  `periodo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `calificar`
--

INSERT INTO `calificar` (`id`, `alumno`, `materia`, `periodo`) VALUES
(1, '12393999', '1', '1'),
(2, '12393999', '2', '1'),
(3, '12393999', '3', '1'),
(4, '12393999', '1', '2'),
(5, '12393999', '1', '3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(255) NOT NULL,
  `empresa` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `web` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `moneda` varchar(22) COLLATE utf8_spanish_ci NOT NULL,
  `minima` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `maxima` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `empresa`, `nit`, `direccion`, `pais`, `ciudad`, `tel`, `fax`, `web`, `correo`, `fecha`, `moneda`, `minima`, `maxima`) VALUES
(1, 'Colegio SOFT UNICORN', '12222', 'Centro Edificio Comodoro Oficina 404', 'Colombia', 'Cartagena', '6686532', '6736478', 'www.softunicorn.net', 'softunicorn2013@gmail.com', '2014-05-17', '$', '1', '10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grado`
--

CREATE TABLE `grado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `grado`
--

INSERT INTO `grado` (`id`, `nombre`, `estado`) VALUES
(1, 'PRIMERO', 's'),
(2, 'SEGUNDO', 's'),
(3, 'TERCERO', 's'),
(4, 'CUARTO', 's'),
(5, 'QUINTO', 's'),
(6, 'SEXTO', 's');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE `materia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `materia`
--

INSERT INTO `materia` (`id`, `nombre`, `estado`) VALUES
(1, 'MATEMATICAS', 's'),
(2, 'SISTEMAS', 's'),
(3, 'RELIGION', 's'),
(4, 'GEOMETRIA', 's');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `materia` varchar(255) NOT NULL,
  `alumno` varchar(255) NOT NULL,
  `actividad` varchar(255) NOT NULL,
  `valor` varchar(255) NOT NULL,
  `periodo` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `notas`
--

INSERT INTO `notas` (`id`, `materia`, `alumno`, `actividad`, `valor`, `periodo`, `fecha`) VALUES
(1, '1', '12393999', '1', '7', '1', '2014-01-03'),
(3, '1', '12393999', '3', '7', '1', '2014-01-03'),
(6, '1', '12393999', '1', '6', '2', '2014-01-03'),
(7, '2', '12393999', '1', '5', '1', '2014-01-03'),
(8, '1', '12393999', '2', '4', '1', '2014-01-03'),
(9, '2', '12393999', '2', '8', '2', '2014-05-08'),
(10, '2', '12393999', '2', '7', '1', '2014-05-08'),
(11, '1', '12393999', '2', '7', '2', '2014-05-17'),
(12, '2', '12393999', '3', '8', '1', '2014-05-17'),
(13, '2', '12393999', '1', '9', '2', '2014-05-17'),
(14, '1', '3', '1', '2', '1', '2015-11-09'),
(15, '2', '3', '2', '3', '1', '2015-11-09'),
(16, '1', '1', '1', '1', '1', '2015-11-09'),
(17, '2', '1', '1', '2', '1', '2015-11-09'),
(18, '3', '1', '1', '3', '1', '2015-11-09'),
(19, '1', '2', '1', '1', '1', '2015-11-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `periodo`
--

CREATE TABLE `periodo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `periodo`
--

INSERT INTO `periodo` (`id`, `nombre`, `estado`) VALUES
(1, 'PRIMERO', 's'),
(2, 'SEGUNDO', 's'),
(3, 'TERCERO', 's'),
(4, 'CUARTO', 's');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profesor`
--

CREATE TABLE `profesor` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `ape` varchar(255) NOT NULL,
  `doc` varchar(255) NOT NULL,
  `con` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `dir` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `cel` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `profesor`
--

INSERT INTO `profesor` (`id`, `nom`, `ape`, `doc`, `con`, `fecha`, `dir`, `tel`, `cel`, `correo`, `especialidad`, `estado`, `tipo`) VALUES
(3, 'DIEGO', 'MARTINEZ', '54321', '54321', '2013-12-08', 'CARACOLES', '755858', '8585858', 'DIEGOM@GMAIL.COM', 'MATEMATICAS, GEOMETRIA', 's', 'p'),
(4, 'JORGE LUIS', 'VASQUEZ JULIO', '12345', '12345', '1988-04-05', 'Administrador', '6679159', '3156856245', 'JLVASQUEZ@HOTMAIL.COM', 'SISTEMAS, MATEMATICAS', 's', 'a'),
(5, '1', '1', '1', '1', '2015-11-09', '1', '1', '1', '1@1.com', '1', 's', 'p');

-- --------------------------------------------------------

--
-- Estrutura da tabela `salon`
--

CREATE TABLE `salon` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `grado` varchar(255) NOT NULL,
  `profesor` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `salon`
--

INSERT INTO `salon` (`id`, `nombre`, `grado`, `profesor`, `estado`) VALUES
(1, 'PRIMERO A', '1', '12345', 's'),
(2, 'SEGUNDO A', '2', '12345', 's'),
(3, 'PRIMERO B', '1', '12345', 's'),
(4, 'SEGUNDO B', '2', '54321', 's'),
(5, 'SEGUNDO C', '2', '54321', 's'),
(6, '1', '1', '1', 's');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calificar`
--
ALTER TABLE `calificar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `calificar`
--
ALTER TABLE `calificar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `grado`
--
ALTER TABLE `grado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `salon`
--
ALTER TABLE `salon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;--
-- Database: `angularcode_customer`
--
CREATE DATABASE IF NOT EXISTS `angularcode_customer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `angularcode_customer`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `angularcode_customers`
--

CREATE TABLE `angularcode_customers` (
  `customerNumber` int(11) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) DEFAULT NULL,
  `postalCode` varchar(15) DEFAULT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `angularcode_customers`
--

INSERT INTO `angularcode_customers` (`customerNumber`, `customerName`, `email`, `address`, `city`, `state`, `postalCode`, `country`) VALUES
(103, 'Atelier graphique', 'Nantes@gmail.com', '54, rue Royale', 'Nantes', NULL, '44000', 'France'),
(112, 'Signal Gift Stores', 'LasVegas@gmail.com', '8489 Strong St.', 'Las Vegas', 'NV', '83030', 'USA'),
(114, 'Australian Collectors, Co.', 'Melbourne@gmail.com', '636 St Kilda Road', 'Melbourne', 'Victoria', '3004', 'Australia'),
(119, 'La Rochelle Gifts', 'Nantes@gmail.com', '67, rue des Cinquante Otages', 'Nantes', NULL, '44000', 'France'),
(121, 'Baane Mini Imports', 'Stavern@gmail.com', 'Erling Skakkes gate 78', 'Stavern', NULL, '4110', 'Norway'),
(124, 'Mini Gifts Distributors Ltd.', 'SanRafael@gmail.com', '5677 Strong St.', 'San Rafael', 'CA', '97562', 'USA'),
(125, 'Havel & Zbyszek Co', 'Warszawa@gmail.com', 'ul. Filtrowa 68', 'Warszawa', NULL, '01-012', 'Poland'),
(128, 'Blauer See Auto, Co.', 'Frankfurt@gmail.com', 'Lyonerstr. 34', 'Frankfurt', NULL, '60528', 'Germany'),
(129, 'Mini Wheels Co.', 'SanFrancisco@gmail.com', '5557 North Pendale Street', 'San Francisco', 'CA', '94217', 'USA'),
(131, 'Land of Toys Inc.', 'NYC@gmail.com', '897 Long Airport Avenue', 'NYC', 'NY', '10022', 'USA'),
(141, 'Euro+ Shopping Channel', 'Madrid@gmail.com', 'C/ Moralzarzal, 86', 'Madrid', NULL, '28034', 'Spain'),
(145, 'Danish Wholesale Imports', 'Kobenhavn@gmail.com', 'Vinbltet 34', 'Kobenhavn', NULL, '1734', 'Denmark'),
(146, 'Saveley & Henriot, Co.', 'Lyon@gmail.com', '2, rue du Commerce', 'Lyon', NULL, '69004', 'France'),
(148, 'Dragon Souveniers, Ltd.', 'Singapore@gmail.com', 'Bronz Sok.', 'Singapore', NULL, '079903', 'Singapore'),
(151, 'Muscle Machine Inc', 'NYC@gmail.com', '4092 Furth Circle', 'NYC', 'NY', '10022', 'USA'),
(157, 'Diecast Classics Inc.', 'Allentown@gmail.com', '7586 Pompton St.', 'Allentown', 'PA', '70267', 'USA'),
(161, 'Technics Stores Inc.', 'Burlingame@gmail.com', '9408 Furth Circle', 'Burlingame', 'CA', '94217', 'USA'),
(166, 'Handji Gifts& Co', 'Singapore@gmail.com', '106 Linden Road Sandown', 'Singapore', NULL, '069045', 'Singapore'),
(167, 'Herkku Gifts', 'Bergen@gmail.com', 'Brehmen St. 121', 'Bergen', NULL, 'N 5804', 'Norway  '),
(168, 'American Souvenirs Inc', 'NewHaven@gmail.com', '149 Spinnaker Dr.', 'New Haven', 'CT', '97823', 'USA'),
(169, 'a', 'caioc@ymail.com', '100', '100', NULL, NULL, '100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angularcode_customers`
--
ALTER TABLE `angularcode_customers`
  ADD PRIMARY KEY (`customerNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angularcode_customers`
--
ALTER TABLE `angularcode_customers`
  MODIFY `customerNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;--
-- Database: `bdejemplos_radiobutton`
--
CREATE DATABASE IF NOT EXISTS `bdejemplos_radiobutton` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdejemplos_radiobutton`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lenguajes`
--

CREATE TABLE `lenguajes` (
  `idlenguaje` int(10) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lenguajes`
--

INSERT INTO `lenguajes` (`idlenguaje`, `descripcion`) VALUES
(1, 'Java'),
(2, 'PHP'),
(3, 'Javascript'),
(4, 'Visual Basic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lenguajes`
--
ALTER TABLE `lenguajes`
  ADD PRIMARY KEY (`idlenguaje`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lenguajes`
--
ALTER TABLE `lenguajes`
  MODIFY `idlenguaje` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;--
-- Database: `bibli`
--
CREATE DATABASE IF NOT EXISTS `bibli` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bibli`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `IdCurso` int(11) NOT NULL,
  `NomeCurso` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`IdCurso`, `NomeCurso`) VALUES
(1, 'Sistema de Informação'),
(2, 'Direito');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursounidade`
--

CREATE TABLE `cursounidade` (
  `IdCurso` int(11) NOT NULL,
  `IdUnidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursounidade`
--

INSERT INTO `cursounidade` (`IdCurso`, `IdUnidade`) VALUES
(1, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `documento`
--

CREATE TABLE `documento` (
  `IdDocumento` int(11) NOT NULL,
  `Titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `IdUnidade` int(11) NOT NULL,
  `IdCurso` int(11) NOT NULL,
  `Orientador` int(11) NOT NULL,
  `Coorientador` int(11) NOT NULL,
  `Ano` int(4) NOT NULL,
  `Pagina` int(5) NOT NULL,
  `resumo` varchar(2000) DEFAULT NULL,
  `Abstract` varchar(1000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Arquivo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Status` varchar(1) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `palavradocumento`
--

CREATE TABLE `palavradocumento` (
  `IdPalavra` int(11) NOT NULL,
  `IdDocumento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `palavraschaves`
--

CREATE TABLE `palavraschaves` (
  `IdPalavra` int(11) NOT NULL,
  `NomePalavra` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `IdPerfil` int(11) NOT NULL,
  `NomePerfil` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`IdPerfil`, `NomePerfil`) VALUES
(1, 'Administrador'),
(2, 'Professor'),
(3, 'Aluno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `IdPessoa` int(11) NOT NULL,
  `NomePessoa` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Sobrenome` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Usuario` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Senha` varchar(255) NOT NULL,
  `IdPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoadocumento`
--

CREATE TABLE `pessoadocumento` (
  `IdPessoa` int(11) NOT NULL,
  `IdDocumento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade`
--

CREATE TABLE `unidade` (
  `Idunidade` int(11) NOT NULL,
  `NomeUnidade` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `unidade`
--

INSERT INTO `unidade` (`Idunidade`, `NomeUnidade`) VALUES
(6, 'Barreiro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`IdCurso`);

--
-- Indexes for table `cursounidade`
--
ALTER TABLE `cursounidade`
  ADD PRIMARY KEY (`IdCurso`,`IdUnidade`),
  ADD KEY `IdUnidade` (`IdUnidade`);

--
-- Indexes for table `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`IdDocumento`);

--
-- Indexes for table `palavradocumento`
--
ALTER TABLE `palavradocumento`
  ADD PRIMARY KEY (`IdPalavra`,`IdDocumento`),
  ADD KEY `IdDocumento` (`IdDocumento`);

--
-- Indexes for table `palavraschaves`
--
ALTER TABLE `palavraschaves`
  ADD PRIMARY KEY (`IdPalavra`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`IdPerfil`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`IdPessoa`);

--
-- Indexes for table `pessoadocumento`
--
ALTER TABLE `pessoadocumento`
  ADD PRIMARY KEY (`IdPessoa`,`IdDocumento`),
  ADD KEY `IdDocumento` (`IdDocumento`);

--
-- Indexes for table `unidade`
--
ALTER TABLE `unidade`
  ADD PRIMARY KEY (`Idunidade`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `IdCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `documento`
--
ALTER TABLE `documento`
  MODIFY `IdDocumento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `palavraschaves`
--
ALTER TABLE `palavraschaves`
  MODIFY `IdPalavra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `IdPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `IdPessoa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `unidade`
--
ALTER TABLE `unidade`
  MODIFY `Idunidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cursounidade`
--
ALTER TABLE `cursounidade`
  ADD CONSTRAINT `cursounidade_ibfk_1` FOREIGN KEY (`IdCurso`) REFERENCES `curso` (`IdCurso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cursounidade_ibfk_2` FOREIGN KEY (`IdUnidade`) REFERENCES `unidade` (`Idunidade`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `palavradocumento`
--
ALTER TABLE `palavradocumento`
  ADD CONSTRAINT `palavradocumento_ibfk_1` FOREIGN KEY (`IdPalavra`) REFERENCES `palavraschaves` (`IdPalavra`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `palavradocumento_ibfk_2` FOREIGN KEY (`IdDocumento`) REFERENCES `documento` (`IdDocumento`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Database: `biodata`
--
CREATE DATABASE IF NOT EXISTS `biodata` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `biodata`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `personal`
--

INSERT INTO `personal` (`id_personal`, `name`, `gender`, `telp`, `address`) VALUES
(1, 'a', 'Male', '111111', 'asasa'),
(2, 'zz', 'Male', '2222', 'assa'),
(3, 'aa', 'Male', '3133334444', 'aa'),
(4, 'ola', 'Male', '1111', 'aq'),
(5, 'aasd', 'Male', '31231', 'dkas\r\n'),
(6, 'asda', 'Male', '1231', 'dasda'),
(7, 'sdad', 'Male', '23123', 'dasd'),
(8, 'fdfg', 'Male', '12354', 'dfsdf'),
(9, 'fasdasd', 'Male', '234343', 'fsdfsdf'),
(10, 'fsdfsd', 'Male', '435', '4ghfg'),
(11, 'gfhfghf', 'Male', '435', 'gdfgr5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;--
-- Database: `cdcol`
--
CREATE DATABASE IF NOT EXISTS `cdcol` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `cdcol`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cds`
--

CREATE TABLE `cds` (
  `titel` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `interpret` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `jahr` int(11) DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `cds`
--

INSERT INTO `cds` (`titel`, `interpret`, `jahr`, `id`) VALUES
('Beauty', 'Ryuichi Sakamoto', 1990, 1),
('Goodbye Country (Hello Nightclub)', 'Groove Armada', 2001, 4),
('Glee', 'Bran Van 3000', 1997, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cds`
--
ALTER TABLE `cds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cds`
--
ALTER TABLE `cds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;--
-- Database: `musica`
--
CREATE DATABASE IF NOT EXISTS `musica` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `musica`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE `atividade` (
  `IdAtividade` int(11) NOT NULL,
  `NomeAtividade` varchar(50) COLLATE utf8_bin NOT NULL,
  `ValorAtividade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`IdAtividade`, `NomeAtividade`, `ValorAtividade`) VALUES
(1, 'Atividade 1', 5),
(2, 'Prova 1', 20),
(3, 'Prova 2', 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cuidado`
--

CREATE TABLE `cuidado` (
  `IdCuidado` int(11) NOT NULL,
  `NomeCuidado` varchar(255) COLLATE utf8_bin NOT NULL,
  `statu` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cuidado`
--

INSERT INTO `cuidado` (`IdCuidado`, `NomeCuidado`, `statu`) VALUES
(1, 'Sempre limpar o instrumento após o uso com um pano de algodão, (nunca usar produtos de limpeza no instrumento).', 'Ativo'),
(2, 'Guardar o instrumento no estojo com suas devidas amarrações.', 'Ativo'),
(3, 'Carregar o instrumento sempre pelas alças fazendo com ele que fique firme e sem turbulências.', 'Ativo'),
(4, 'Conservar o instrumento sempre no estojo, em local seco, sem contato com o chão.', 'Ativo'),
(5, 'Os instrumentos devem viajar junto ao dono nunca em porta-malas ou em locais onde haja risco de deslocamento.', 'Ativo'),
(6, 'Para qualquer acidente com o instrumento leve-o a um luthier especializado.', 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `IdEmprestimo` int(11) NOT NULL,
  `IdPessoa` int(11) NOT NULL,
  `IdPatrimonio` int(11) NOT NULL,
  `IdInstrumento` int(11) NOT NULL,
  `DataEmp` date NOT NULL,
  `IdMarca` int(11) NOT NULL,
  `emp` varchar(20) NOT NULL,
  `DataDev` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`IdEmprestimo`, `IdPessoa`, `IdPatrimonio`, `IdInstrumento`, `DataEmp`, `IdMarca`, `emp`, `DataDev`) VALUES
(1, 1, 1, 2, '2015-09-16', 1, 'Devolvido', '2015-11-24'),
(2, 1, 1, 6, '2015-11-09', 1, 'Emprestar', '0000-00-00'),
(3, 4, 1, 3, '2015-11-23', 1, 'Emprestar', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ensaio`
--

CREATE TABLE `ensaio` (
  `ID` int(11) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_bin NOT NULL,
  `IdOrquestra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `frequencia`
--

CREATE TABLE `frequencia` (
  `IdTurma` int(11) NOT NULL,
  `IdPessoa` int(11) NOT NULL,
  `Frequencia` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `frequencia`
--

INSERT INTO `frequencia` (`IdTurma`, `IdPessoa`, `Frequencia`) VALUES
(1, 1, 's;s;');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instrumento`
--

CREATE TABLE `instrumento` (
  `IdInstrumento` int(4) NOT NULL,
  `NomeInstrumento` varchar(30) COLLATE utf8_bin NOT NULL,
  `Patrimonio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `instrumento`
--

INSERT INTO `instrumento` (`IdInstrumento`, `NomeInstrumento`, `Patrimonio`) VALUES
(1, 'Violino', 1),
(2, 'Viola', 2),
(3, 'Arco', 3),
(4, 'estojo', 4),
(5, 'espalheira', 5),
(6, 'Contrabaixo', 6),
(7, 'Flauta', 7),
(8, 'Clarinete', 8),
(9, 'Oboe', 9),
(10, 'cinto', 10),
(11, 'Fagote', 11),
(12, 'Trompete', 12),
(13, 'Trompa', 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `instrutor`
--

CREATE TABLE `instrutor` (
  `IdInstrutor` int(11) NOT NULL,
  `NomeInstrutor` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `instrutor`
--

INSERT INTO `instrutor` (`IdInstrutor`, `NomeInstrutor`) VALUES
(1, 'lucas'),
(2, 'Joao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inventario`
--

CREATE TABLE `inventario` (
  `IdInventario` int(11) NOT NULL,
  `IdLocal` int(11) NOT NULL,
  `IdInstrumento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `local`
--

CREATE TABLE `local` (
  `IdLocal` int(11) NOT NULL,
  `NomeLocal` varchar(40) COLLATE utf8_bin NOT NULL,
  `endereco` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `local`
--

INSERT INTO `local` (`IdLocal`, `NomeLocal`, `endereco`) VALUES
(1, 'a', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `IdLogin` int(11) NOT NULL,
  `Usuario` varchar(255) COLLATE utf8_bin NOT NULL,
  `Senha` varchar(255) COLLATE utf8_bin NOT NULL,
  `IdPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`IdLogin`, `Usuario`, `Senha`, `IdPerfil`) VALUES
(1, 'nelson', 'nelson', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `IdMarca` int(11) NOT NULL,
  `NomeMarca` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`IdMarca`, `NomeMarca`) VALUES
(1, 'teste'),
(2, 'ola');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidade`
--

CREATE TABLE `modalidade` (
  `IdModalidade` int(11) NOT NULL,
  `NomeModalidade` varchar(20) COLLATE utf8_bin NOT NULL,
  `IdEnsaio` int(11) NOT NULL,
  `IdInstrumento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `modalidade`
--

INSERT INTO `modalidade` (`IdModalidade`, `NomeModalidade`, `IdEnsaio`, `IdInstrumento`) VALUES
(1, 'teoria', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notaaluno`
--

CREATE TABLE `notaaluno` (
  `IDna` int(11) NOT NULL,
  `IdAluno` int(11) NOT NULL,
  `IdAtividade` int(11) NOT NULL,
  `IdTurma` int(11) NOT NULL,
  `NotaObt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `notaaluno`
--

INSERT INTO `notaaluno` (`IDna`, `IdAluno`, `IdAtividade`, `IdTurma`, `NotaObt`) VALUES
(1, 1, 1, 1, 3.5),
(2, 1, 2, 1, 10),
(3, 4, 1, 1, 5),
(4, 4, 2, 1, 12.2),
(5, 5, 1, 2, 4),
(6, 5, 3, 2, 30),
(7, 6, 2, 3, 13),
(8, 6, 3, 3, 20.1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `orquestra`
--

CREATE TABLE `orquestra` (
  `ID` int(11) NOT NULL,
  `nome` int(11) NOT NULL,
  `IdLocal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orquestrapessoa`
--

CREATE TABLE `orquestrapessoa` (
  `IdOrquestra` int(11) NOT NULL,
  `IdPessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `patrimonio`
--

CREATE TABLE `patrimonio` (
  `IdPatrimonio` int(11) NOT NULL,
  `NumPatri` varchar(50) COLLATE utf8_bin NOT NULL,
  `Tamanho` varchar(10) COLLATE utf8_bin NOT NULL,
  `IdMarca` int(11) NOT NULL,
  `IdInstrumento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `patrimonio`
--

INSERT INTO `patrimonio` (`IdPatrimonio`, `NumPatri`, `Tamanho`, `IdMarca`, `IdInstrumento`) VALUES
(1, '111', '10 cm', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `IdPerfil` int(11) NOT NULL,
  `NomePerfil` varchar(30) COLLATE utf8_bin NOT NULL,
  `status` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`IdPerfil`, `NomePerfil`, `status`) VALUES
(1, 'admin', 'Ativo'),
(2, 'teste21', 'Ativo'),
(3, 'teste3', 'Ativo'),
(4, 'aa', 'Active'),
(5, 'ola', 'Active'),
(6, 'ola1', 'Active'),
(7, 'ola2', 'Active'),
(8, 'ola3', 'Active'),
(9, 'ola4', 'Active'),
(10, 'ola5', 'Active'),
(11, 'ola6', 'Active'),
(12, 'ola7', 'Active'),
(13, 'b', 'Active'),
(14, 'c', 'Active'),
(15, 'cc', 'Active'),
(16, 'zz', 'Active'),
(17, 'ss', 'Active');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `IdPessoa` int(11) NOT NULL,
  `NomePessoa` varchar(50) COLLATE utf8_bin NOT NULL,
  `data_nasc` date NOT NULL,
  `Sexo` varchar(10) COLLATE utf8_bin NOT NULL,
  `CidadeNasc` varchar(20) COLLATE utf8_bin NOT NULL,
  `CertNas` varchar(50) COLLATE utf8_bin NOT NULL,
  `CartIdent` varchar(50) COLLATE utf8_bin NOT NULL,
  `CpfAlun` varchar(50) COLLATE utf8_bin NOT NULL,
  `Passaporte` varchar(50) COLLATE utf8_bin NOT NULL,
  `Endereco` varchar(50) COLLATE utf8_bin NOT NULL,
  `Cep` varchar(50) COLLATE utf8_bin NOT NULL,
  `Cidade` varchar(50) COLLATE utf8_bin NOT NULL,
  `TelRes` varchar(50) COLLATE utf8_bin NOT NULL,
  `NomeMae` varchar(50) COLLATE utf8_bin NOT NULL,
  `CpfMae` varchar(50) COLLATE utf8_bin NOT NULL,
  `IdentMae` varchar(50) COLLATE utf8_bin NOT NULL,
  `TelMae` varchar(50) COLLATE utf8_bin NOT NULL,
  `EmailMae` varchar(50) COLLATE utf8_bin NOT NULL,
  `NomePai` varchar(50) COLLATE utf8_bin NOT NULL,
  `CpfPai` varchar(50) COLLATE utf8_bin NOT NULL,
  `IdentPai` varchar(50) COLLATE utf8_bin NOT NULL,
  `TelPai` varchar(50) COLLATE utf8_bin NOT NULL,
  `EmailPai` varchar(50) COLLATE utf8_bin NOT NULL,
  `Serie` int(11) NOT NULL,
  `IdInstrumento` int(11) NOT NULL,
  `Telefone` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`IdPessoa`, `NomePessoa`, `data_nasc`, `Sexo`, `CidadeNasc`, `CertNas`, `CartIdent`, `CpfAlun`, `Passaporte`, `Endereco`, `Cep`, `Cidade`, `TelRes`, `NomeMae`, `CpfMae`, `IdentMae`, `TelMae`, `EmailMae`, `NomePai`, `CpfPai`, `IdentPai`, `TelPai`, `EmailPai`, `Serie`, `IdInstrumento`, `Telefone`, `email`) VALUES
(1, 'nelson', '2015-09-08', 'Masculino', 'Belo Horizonte', '', 'mg-11.111.111', '000.000.000-00', '', 'Rua Y', '00.000-000', 'Contagem', '3333-3333', 'mae', '00.000-000', '11.111.111', '3333-3333', 'a@a.com', 'Pai', '00.000-000', '11.111.111', '3333-3333', 'a@a.com', 1, 1, '22 2222-2222', 'a@a.com'),
(4, 'Aluno xx', '2015-09-16', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, 1, '23 3341-1245', 'a@a'),
(5, 'Aluno z', '2015-11-10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, 0, '33333333', ''),
(6, 'Aluno 3', '2015-11-02', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 12, '11 1111-1111', 'nome@email.com'),
(7, 'admin', '2015-11-04', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 11, '1212', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `IdTurma` int(11) NOT NULL,
  `NomeTurma` varchar(50) COLLATE utf8_bin NOT NULL,
  `IdInstrutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`IdTurma`, `NomeTurma`, `IdInstrutor`) VALUES
(1, 'Turma A', 1),
(2, 'Turma B', 1),
(3, 'Turma C', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmapessoa`
--

CREATE TABLE `turmapessoa` (
  `Idtual` int(11) NOT NULL,
  `IdTurma` int(11) NOT NULL,
  `IdPessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `turmapessoa`
--

INSERT INTO `turmapessoa` (`Idtual`, `IdTurma`, `IdPessoa`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 2, 5),
(4, 3, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`IdAtividade`);

--
-- Indexes for table `cuidado`
--
ALTER TABLE `cuidado`
  ADD PRIMARY KEY (`IdCuidado`);

--
-- Indexes for table `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`IdEmprestimo`);

--
-- Indexes for table `ensaio`
--
ALTER TABLE `ensaio`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `instrumento`
--
ALTER TABLE `instrumento`
  ADD PRIMARY KEY (`IdInstrumento`);

--
-- Indexes for table `instrutor`
--
ALTER TABLE `instrutor`
  ADD PRIMARY KEY (`IdInstrutor`);

--
-- Indexes for table `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`IdInventario`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`IdLocal`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IdLogin`);

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`IdMarca`);

--
-- Indexes for table `modalidade`
--
ALTER TABLE `modalidade`
  ADD PRIMARY KEY (`IdModalidade`);

--
-- Indexes for table `notaaluno`
--
ALTER TABLE `notaaluno`
  ADD PRIMARY KEY (`IDna`);

--
-- Indexes for table `orquestra`
--
ALTER TABLE `orquestra`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patrimonio`
--
ALTER TABLE `patrimonio`
  ADD PRIMARY KEY (`IdPatrimonio`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`IdPerfil`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`IdPessoa`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`IdTurma`);

--
-- Indexes for table `turmapessoa`
--
ALTER TABLE `turmapessoa`
  ADD PRIMARY KEY (`Idtual`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atividade`
--
ALTER TABLE `atividade`
  MODIFY `IdAtividade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cuidado`
--
ALTER TABLE `cuidado`
  MODIFY `IdCuidado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `IdEmprestimo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ensaio`
--
ALTER TABLE `ensaio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `instrumento`
--
ALTER TABLE `instrumento`
  MODIFY `IdInstrumento` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `instrutor`
--
ALTER TABLE `instrutor`
  MODIFY `IdInstrutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `inventario`
--
ALTER TABLE `inventario`
  MODIFY `IdInventario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `local`
--
ALTER TABLE `local`
  MODIFY `IdLocal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `IdLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `IdMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `modalidade`
--
ALTER TABLE `modalidade`
  MODIFY `IdModalidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notaaluno`
--
ALTER TABLE `notaaluno`
  MODIFY `IDna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orquestra`
--
ALTER TABLE `orquestra`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patrimonio`
--
ALTER TABLE `patrimonio`
  MODIFY `IdPatrimonio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `IdPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `IdPessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `IdTurma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `turmapessoa`
--
ALTER TABLE `turmapessoa`
  MODIFY `Idtual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_bookmark`
--

CREATE TABLE `pma_bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_column_info`
--

CREATE TABLE `pma_column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_designer_coords`
--

CREATE TABLE `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_history`
--

CREATE TABLE `pma_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_navigationhiding`
--

CREATE TABLE `pma_navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_pdf_pages`
--

CREATE TABLE `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

--
-- Extraindo dados da tabela `pma_pdf_pages`
--

INSERT INTO `pma_pdf_pages` (`db_name`, `page_nr`, `page_descr`) VALUES
('musica', 1, 'musica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_recent`
--

CREATE TABLE `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Extraindo dados da tabela `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '[{"db":"bibli","table":"cursounidade"},{"db":"bibli","table":"pessoadocumento"},{"db":"bibli","table":"unidade"},{"db":"bibli","table":"pessoa"},{"db":"bibli","table":"curso"},{"db":"bibli","table":"perfil"},{"db":"bibli","table":"palavraschaves"},{"db":"bibli","table":"palavradocumento"},{"db":"bibli","table":"documento"},{"db":"teste","table":"login"}]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_relation`
--

CREATE TABLE `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

--
-- Extraindo dados da tabela `pma_relation`
--

INSERT INTO `pma_relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('musica', 'emprestimo', 'IdPessoa', 'musica', 'pessoa', 'IdPessoa'),
('musica', 'emprestimo', 'IdInstrumento', 'musica', 'instrumento', 'IdInstrumento'),
('musica', 'frequencia', 'IdPessoa', 'musica', 'pessoa', 'IdPessoa'),
('musica', 'emprestimo', 'IdMarca', 'musica', 'marca', 'IdMarca'),
('musica', 'patrimonio', 'IdMarca', 'musica', 'marca', 'IdMarca'),
('musica', 'patrimonio', 'IdInstrumento', 'musica', 'instrumento', 'IdInstrumento'),
('musica', 'emprestimo', 'IdPatrimonio', 'musica', 'patrimonio', 'IdPatrimonio'),
('musica', 'NotaAluno', 'IdAluno', 'musica', 'pessoa', 'IdPessoa'),
('musica', 'notaaluno', 'IdAluno', 'musica', 'pessoa', 'IdPessoa'),
('musica', 'notaaluno', 'IdAtividade', 'musica', 'atividade', 'IdAtividade'),
('musica', 'turmapessoa', 'IdTurma', 'musica', 'turma', 'IdTurma'),
('musica', 'turmapessoa', 'IdPessoa', 'musica', 'pessoa', 'IdPessoa'),
('musica', 'turma', 'IdInstrutor', 'musica', 'instrutor', 'IdInstrutor'),
('musica', 'login', 'IdPerfil', 'musica', 'perfil', 'IdPerfil'),
('musica', 'notaaluno', 'IdTurma', 'musica', 'turma', 'IdTurma');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_savedsearches`
--

CREATE TABLE `pma_savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_table_coords`
--

CREATE TABLE `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

--
-- Extraindo dados da tabela `pma_table_coords`
--

INSERT INTO `pma_table_coords` (`db_name`, `table_name`, `pdf_page_number`, `x`, `y`) VALUES
('musica', 'turma', 1, 709, 36),
('musica', 'pessoa', 1, 70, 170),
('musica', 'perfil', 1, 810, 530),
('musica', 'orquestrapessoa', 1, 1031, 476),
('musica', 'patrimonio', 1, 726, 169),
('musica', 'orquestra', 1, 1070, 250),
('musica', 'notaaluno', 1, 309, 556),
('musica', 'modalidade', 1, 1022, 615),
('musica', 'marca', 1, 680, 400),
('musica', 'login', 1, 590, 530),
('musica', 'local', 1, 788, 655),
('musica', 'inventario', 1, 902, 769),
('musica', 'instrumento', 1, 310, 130),
('musica', 'instrutor', 1, 982, 63),
('musica', 'frequencia', 1, 70, 400),
('musica', 'ensaio', 1, 476, 731),
('musica', 'emprestimo', 1, 340, 300),
('musica', 'cuidado', 1, 664, 778),
('musica', 'atividade', 1, 229, 807),
('musica', 'turmapessoa', 1, 120, 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_table_info`
--

CREATE TABLE `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_table_uiprefs`
--

CREATE TABLE `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Extraindo dados da tabela `pma_table_uiprefs`
--

INSERT INTO `pma_table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'musica', 'cuidado', '{"sorted_col":"`cuidado`.`IdCuidado` ASC"}', '2015-11-23 18:51:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_tracking`
--

CREATE TABLE `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin' ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_userconfig`
--

CREATE TABLE `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Extraindo dados da tabela `pma_userconfig`
--

INSERT INTO `pma_userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2016-03-06 18:28:43', '{"lang":"pt","collation_connection":"utf8mb4_unicode_ci"}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_usergroups`
--

CREATE TABLE `pma_usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_users`
--

CREATE TABLE `pma_users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma_column_info`
--
ALTER TABLE `pma_column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma_designer_coords`
--
ALTER TABLE `pma_designer_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma_history`
--
ALTER TABLE `pma_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma_navigationhiding`
--
ALTER TABLE `pma_navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma_recent`
--
ALTER TABLE `pma_recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma_relation`
--
ALTER TABLE `pma_relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma_table_coords`
--
ALTER TABLE `pma_table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma_table_info`
--
ALTER TABLE `pma_table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma_table_uiprefs`
--
ALTER TABLE `pma_table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma_tracking`
--
ALTER TABLE `pma_tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma_userconfig`
--
ALTER TABLE `pma_userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma_usergroups`
--
ALTER TABLE `pma_usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma_users`
--
ALTER TABLE `pma_users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma_column_info`
--
ALTER TABLE `pma_column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma_history`
--
ALTER TABLE `pma_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `teste`
--
CREATE DATABASE IF NOT EXISTS `teste` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `teste`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;--
-- Database: `webauth`
--
CREATE DATABASE IF NOT EXISTS `webauth` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `webauth`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_pwd`
--

CREATE TABLE `user_pwd` (
  `name` char(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` char(32) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `user_pwd`
--

INSERT INTO `user_pwd` (`name`, `pass`) VALUES
('xampp', 'wampp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_pwd`
--
ALTER TABLE `user_pwd`
  ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
