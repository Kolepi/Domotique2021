-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 avr. 2021 à 19:31
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `domohome`
--

-- --------------------------------------------------------

--
-- Structure de la table `device`
--

CREATE TABLE `device` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `isenable` tinyint(4) NOT NULL,
  `heuredeb` datetime DEFAULT NULL,
  `heurefin` datetime DEFAULT NULL,
  `intensité` int(11) DEFAULT NULL,
  `color1` int(11) DEFAULT NULL,
  `color2` int(11) DEFAULT NULL,
  `color3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `device`
--

INSERT INTO `device` (`id`, `name`, `isenable`, `heuredeb`, `heurefin`, `intensité`, `color1`, `color2`, `color3`) VALUES
(2, 'sound', 0, NULL, NULL, 0, NULL, NULL, NULL),
(3, 'TV', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'light', 0, NULL, NULL, 0, 100, 100, 10),
(7, 'heating', 1, '2021-04-12 15:52:55', '2021-04-12 15:52:55', NULL, NULL, NULL, NULL),
(8, 'component', 0, '2021-04-12 15:52:55', '2021-04-12 15:52:55', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `mail` varchar(40) DEFAULT NULL,
  `adress` varchar(55) DEFAULT NULL,
  `city` varchar(55) DEFAULT NULL,
  `password` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `username`, `mail`, `adress`, `city`, `password`) VALUES
(1, 'julesh', 'julesh@gmail.com', NULL, NULL, '123456'),
(2, 'test', 'test', NULL, NULL, 'test');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `device`
--
ALTER TABLE `device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
