-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 déc. 2022 à 15:41
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nanard`
--

-- --------------------------------------------------------

--
-- Structure de la table `loginachat`
--

CREATE TABLE `loginachat` (
  `ID` int(11) NOT NULL,
  `mail` varchar(80) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `loginachat`
--

INSERT INTO `loginachat` (`ID`, `mail`, `pseudo`, `mdp`) VALUES
(1, 'admin@admin.eu', 'etudiant', 'SNIR2020');

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `ID_Skill` int(11) NOT NULL,
  `Nom` varchar(10) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Skills1` varchar(100) NOT NULL,
  `Skills2` varchar(100) NOT NULL,
  `Skills3` varchar(100) NOT NULL,
  `Skills4` varchar(100) NOT NULL,
  `Skills5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`ID_Skill`, `Nom`, `Prix`, `Description`, `Skills1`, `Skills2`, `Skills3`, `Skills4`, `Skills5`) VALUES
(1, 'Hugo', 1000, 'Etudiant en 1ère année de BTS SNIR précédé de 2 années de spécialité NSI, passioné d\'informatique', 'Programmation en Python, C, C++, Java et Javascript', 'Création de site en HTML, PHP et CSS', 'Compréhension des bases de la mise en réseau et du routage', 'Études de problèmes rapide et efficace', 'Compréhension des principes de fonctionnement hardware'),
(2, 'Flavien', 1100, 'Flavien 18 ans, alcoolique depuis 17 ans', 'Programmation en Python, C, C++, Java, Javascript', 'Création de site en HTML,PHP,CSS', 'Compréhension des bases de la mise en réseau et du routage', 'Études de problèmes rapide et efficace', 'Compréhension des bases hardware');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `loginachat`
--
ALTER TABLE `loginachat`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`ID_Skill`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `loginachat`
--
ALTER TABLE `loginachat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `ID_Skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
