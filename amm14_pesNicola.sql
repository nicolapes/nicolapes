-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2015 alle 07:50
-- Versione del server: 5.5.41-0ubuntu0.14.10.1
-- PHP Version: 5.5.12-2ubuntu4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amm14_pesNicola`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `amministratore`
--

CREATE TABLE IF NOT EXISTS `amministratore` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `amministratore`
--

INSERT INTO `amministratore` (`Username`, `Password`, `Email`) VALUES
('FormaggiPes', 'pettanu93', 'pes.salvatore@tiscali.it');

-- --------------------------------------------------------

--
-- Struttura della tabella `formaggio`
--

CREATE TABLE IF NOT EXISTS `formaggio` (
  `nome` varchar(200) NOT NULL,
  `peso` varchar(200) NOT NULL,
  `prezzo` varchar(200) NOT NULL,
  `caratteristiche` varchar(600) NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `Titolo` varchar(50) NOT NULL,
  `Contenuto` varchar(1000) NOT NULL,
  `Autore` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `indirizzo` varchar(100) NOT NULL,
  `citta` varchar(100) NOT NULL,
  `cap` varchar(10) NOT NULL,
  `cellulare` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nome`, `cognome`, `indirizzo`, `citta`, `cap`, `cellulare`) VALUES
(1, 'nicpes', 'amM2014', 'Nicola', 'Pes', 'Via Maria Ausiliatrice, 37', 'Sedilo', '09076', '3457975203');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amministratore`
--
ALTER TABLE `amministratore`
 ADD PRIMARY KEY (`Username`,`Password`), ADD UNIQUE KEY `Username` (`Username`,`Password`), ADD UNIQUE KEY `Email` (`Email`), ADD UNIQUE KEY `Username_2` (`Username`,`Password`);

--
-- Indexes for table `formaggio`
--
ALTER TABLE `formaggio`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formaggio`
--
ALTER TABLE `formaggio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
