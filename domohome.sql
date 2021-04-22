-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 22 avr. 2021 à 16:39
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

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
  `intensite` int(11) DEFAULT NULL,
  `color1` int(11) DEFAULT NULL,
  `color2` int(11) DEFAULT NULL,
  `color3` int(11) DEFAULT NULL,
  `idutilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `device`
--

INSERT INTO `device` (`id`, `name`, `isenable`, `intensite`, `color1`, `color2`, `color3`, `idutilisateur`) VALUES
(2, 'sound', 1, 58, NULL, NULL, NULL, 2),
(3, 'TV', 0, 77, NULL, NULL, NULL, 2),
(4, 'light', 0, 41, 71, 218, 162, 2),
(7, 'heating', 0, 46, NULL, NULL, NULL, 2),
(8, 'component', 1, NULL, NULL, NULL, NULL, 2),
(9, 'component', 1, NULL, NULL, NULL, NULL, 1),
(10, 'sound', 1, 50, NULL, NULL, NULL, 1),
(11, 'TV', 1, 88, NULL, NULL, NULL, 1),
(12, 'TV', 1, 62, NULL, NULL, NULL, 5),
(13, 'sound', 1, 30, NULL, NULL, NULL, 5),
(14, 'light', 0, 65, 45, 230, 207, 5);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `mail` varchar(40) DEFAULT NULL,
  `password` varchar(55) DEFAULT NULL,
  `secret` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `username`, `mail`, `password`, `secret`) VALUES
(1, 'julesh', 'julesh@gmail.com', '123456', 'jules'),
(2, 'test', 'test@live.fr', 'test', 'test'),
(5, 'ilyasb', 'ilyasb@hotmail.fr', 'ilyasb', 'ilyas'),
(18, 'a', 'a', 'a', 'a'),
(38, 'victor', 'victor@gmail.com', '123', 'victor'),
(41, 'coco', 'coco', 'cocococo', 'coco');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_idutilisateur` (`idutilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `device`
--
ALTER TABLE `device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `device`
--
ALTER TABLE `device`
  ADD CONSTRAINT `FK_idutilisateur` FOREIGN KEY (`idutilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
