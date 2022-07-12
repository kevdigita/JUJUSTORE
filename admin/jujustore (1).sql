-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 01 fév. 2022 à 21:36
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jujustore`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `article` int(11) NOT NULL,
  `quantiter` int(11) NOT NULL,
  `statut` varchar(20) NOT NULL DEFAULT 'non regler',
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `username`, `article`, `quantiter`, `statut`, `time`) VALUES
(1, 'KEVINOS', 1, 6, 'non regler', '2021-11-29 11:47:35'),
(2, 'KEVINOS', 1, 6, 'non regler', '2021-11-29 11:50:38'),
(3, 'KEVINOS', 1, 5, 'non regler', '2021-11-29 11:51:52'),
(4, 'KEVINOS', 1, 5, 'non regler', '2021-11-29 11:53:33'),
(5, 'KEVINOS', 1, 5, 'non regler', '2021-11-29 11:54:39'),
(6, 'KEVINOS', 2, 7, 'non regler', '2021-11-29 13:38:25'),
(7, 'KEVINOS', 2, 5, 'non regler', '2021-11-29 13:42:22'),
(8, 'KEVINOS', 3, 3, 'non regler', '2021-11-29 22:59:31');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `composant` varchar(255) DEFAULT 'neant',
  `categorie` varchar(255) NOT NULL,
  `specification` varchar(255) DEFAULT 'neant',
  `description` varchar(255) NOT NULL,
  `quantiter` varchar(20) NOT NULL DEFAULT 'neant',
  `stock` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `photo`, `nom`, `composant`, `categorie`, `specification`, `description`, `quantiter`, `stock`, `prix`, `time`) VALUES
(1, 'fenjal.jpg', 'fenjal', '', 'Lait Corps', '', 'CHOCO', '', 0, 1500, '2021-11-29 09:24:45'),
(2, 'Fa-petit.jpg', 'FA', '', 'Deodorant', 'KIL', 'sans tache ni viole', '10ML', 0, 5000, '2021-11-29 13:36:44'),
(3, 'lavera.jpg', 'LAVERA', '', 'Parfum', '', 'parfum pour homme concu a base de feuille de cacao pure', '10ML', 52, 5000, '2021-11-29 13:44:50');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `adresse` varchar(25) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`username`, `email`, `tel`, `nom`, `prenom`, `adresse`, `password`, `time`) VALUES
('DOMINATRIX', 'OTENIA@gmail.com', '66434456', 'otenia', 'juliana', NULL, 'eed8cdc400dfd4ec85dff70a170066b7', '2021-11-28 21:23:06'),
('KEVINOS', 'dalmeidakevin@gmail.com', '90553557', 'almeida', 'kevin', NULL, 'f59b7efafd800e27b47a488d30615c73', '2021-11-28 19:52:49');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `article` (`article`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`article`) REFERENCES `produit` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
