-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 17 avr. 2020 à 14:50
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Pokemon`
--

-- --------------------------------------------------------

--
-- Structure de la table `Pokemon`
--

CREATE TABLE `Pokemon` (
  `idPokemon` mediumint(9) NOT NULL,
  `NumeroPokemon` mediumint(9) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Version` varchar(10) NOT NULL,
  `Nom` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Pokemon`
--

INSERT INTO `Pokemon` (`idPokemon`, `NumeroPokemon`, `Image`, `Type`, `Version`, `Nom`) VALUES
(1, 23, 'https://www.pokebip.com/pages/icones/poke/1G/23.png', 'poison', 'rouge', 'Abo'),
(2, 24, 'https://www.pokebip.com/pages/icones/poke/1G/24.png', 'poison', 'rouge', 'Arbok'),
(3, 43, 'https://www.pokebip.com/pages/icones/poke/1G/43.png', 'plante', 'rouge', 'Mystherbe'),
(4, 44, 'https://www.pokebip.com/pages/icones/poke/1G/44.png', 'plante', 'rouge', 'Ortide'),
(5, 45, 'https://www.pokebip.com/pages/icones/poke/1G/45.png', 'plante', 'rouge', 'Rafflesia'),
(6, 56, 'https://www.pokebip.com/pages/icones/poke/1G/56.png', 'combat', 'rouge', 'Ferosinge'),
(7, 57, 'https://www.pokebip.com/pages/icones/poke/1G/57.png', 'combat', 'rouge', 'Colossinge'),
(8, 58, 'https://www.pokebip.com/pages/icones/poke/1G/58.png', 'feu', 'rouge', 'Caninos'),
(9, 59, 'https://www.pokebip.com/pages/icones/poke/1G/59.png', 'feu', 'rouge', 'Arcanin'),
(10, 123, 'https://www.pokebip.com/pages/icones/poke/1G/123.png', 'insecte', 'rouge', 'Insecateur'),
(11, 125, 'https://www.pokebip.com/pages/icones/poke/1G/125.png', 'electrik', 'rouge', 'Elektek'),
(12, 27, 'https://www.pokebip.com/pages/icones/poke/1G/27.png', 'sol', 'bleue', 'Sabelette'),
(13, 28, 'https://www.pokebip.com/pages/icones/poke/1G/28.png', 'sol', 'bleue', 'Sablaireau'),
(14, 37, 'https://www.pokebip.com/pages/icones/poke/1G/37.png', 'feu', 'bleue', 'Goupix'),
(15, 38, 'https://www.pokebip.com/pages/icones/poke/1G/38.png', 'feu', 'bleue', 'Feunard'),
(16, 52, 'https://www.pokebip.com/pages/icones/poke/1G/52.png', 'normal', 'bleue', 'Miaous'),
(17, 53, 'https://www.pokebip.com/pages/icones/poke/1G/53.png', 'normal', 'bleue', 'Persian'),
(18, 69, 'https://www.pokebip.com/pages/icones/poke/1G/69.png', 'plante', 'bleue', 'Chétiflor'),
(19, 70, 'https://www.pokebip.com/pages/icones/poke/1G/70.png', 'plante', 'bleue', 'Boustiflor'),
(20, 71, 'https://www.pokebip.com/pages/icones/poke/1G/71.png', 'plante', 'bleue', 'Empiflor'),
(21, 126, 'https://www.pokebip.com/pages/icones/poke/1G/126.png', 'feu', 'bleue', 'Magmar'),
(22, 127, 'https://www.pokebip.com/pages/icones/poke/1G/127.png', 'insecte', 'bleue', 'Scarabrute');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Pokemon`
--
ALTER TABLE `Pokemon`
  ADD PRIMARY KEY (`idPokemon`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Pokemon`
--
ALTER TABLE `Pokemon`
  MODIFY `idPokemon` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
