-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 juin 2022 à 18:24
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionvoyageorganise`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_admin` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `motPass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `nom`, `prenom`, `email`, `motPass`) VALUES
(1, 'admin', 'admin', 'administrateur123@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `langage` varchar(100) NOT NULL,
  `devise` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `motPass` varchar(200) NOT NULL,
  `tel` int(11) NOT NULL,
  `moyen_paiement` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `langage`, `devise`, `email`, `motPass`, `tel`, `moyen_paiement`) VALUES
(8, 'tazi', 'hamid', '', 0, 'hamid@gmail.com', 'hamid123', 0, ''),
(10, 'jalal', 'jalila', '', 0, 'jalila@gmail.com', 'jalila123', 0, ''),
(11, 'samahi', 'samah', '', 0, 'samah@gmail.com', 'samah123', 0, ''),
(15, 'hafidi', 'hafida', '', 0, 'hafida@gmail.com', 'hafida123', 0, ''),
(16, 'khadiji', 'khadija', '', 0, 'khadija@gmail.com', 'khadija123', 0, ''),
(17, 'mariaa', 'maria', '', 0, 'maria@gmail.com', 'maria123', 0, ''),
(18, 'hafsaoui', 'hafsa', '', 0, 'hafsa@gmail.com', 'hafsa123', 0, ''),
(19, 'fatahi', 'fatah', '', 0, 'fatah@gmail.com', 'fatah123', 0, ''),
(20, 'hasnaa', 'hasna', '', 0, 'hasna@gmail.ma', 'hasna123', 0, ''),
(21, 'jon', 'smith', '', 0, 'smith@gmail.com', 'john123', 0, ''),
(22, 'SOUAIDI', 'omar', '', 0, 'omar@gmail.com', 'omar123', 0, ''),
(23, 'chi', 'haja', '', 0, 'chiHaja@gmail.com', 'chihaja123', 0, ''),
(24, 'jon', 'JON', '', 0, 'john123@gmail.com', 'john123', 0, ''),
(25, 'ait lahmidi', 'zaynab', '', 0, 'zaynab@gmail.com', 'zaynab123', 0, ''),
(26, 'saliha', 'salih', '', 0, 'saliha@gmail.com', 'saliha123', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `nom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sujet` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`nom`, `email`, `sujet`, `message`) VALUES
('laila', 'laila@gmail.com', 'reclamation', 'j\'aime beaucoup la fiabilité  de votre site'),
('SOUAIDI', 'omar@gmail.com', 'remerciement', 'Ce site est l\'un des sites dont notre communauté a besoin'),
('salma', 'salma@gmail.com', 'remerciement', 'j\'aime beaucoup la fiabilité et la sécurité de votre site');

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `id_offre` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `ville_destination` varchar(100) NOT NULL,
  `zone` varchar(100) NOT NULL,
  `periode` int(11) NOT NULL,
  `nombre_personne` int(11) NOT NULL,
  `prix_total` float NOT NULL,
  `nom_hotel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`id_offre`, `photo`, `ville_destination`, `zone`, `periode`, `nombre_personne`, `prix_total`, `nom_hotel`) VALUES
(2, 'tanger.jpg', 'Tanger', 'Nord', 3, 3, 1000, 'Summer hotel'),
(4, 'dakhla.jpeg', 'Dakhla', 'Sud', 7, 3, 700, 'Le Riad Palais Calipau'),
(5, 'dunes-de-merzouga.jpg', 'Meknes', 'Sud', 5, 3, 500, 'l\'Hotel Bab Mansour '),
(6, 'raba.jpg', 'Rabat', 'ouest', 5, 2, 100, 'L\'ONOMO Hotels'),
(8, 'kech.jpg', 'marrakech', 'sud', 3, 2, 2000, 'Hôtel Racine'),
(12, 'image1.jpg', 'Fès', 'ouest', 5, 5, 600, 'Les gorges'),
(14, 'casa.jpg', 'Casablanca', 'oust', 3, 5, 1000, 'Le Concorde'),
(15, 'banner.jpg', 'Tetouan', 'nord', 6, 4, 2000, 'l\'HOTEL MAKARIM TETOUAN'),
(16, 'twin.jpg', 'Casablanca', 'oust', 5, 5, 1000, 'Le Concorde'),
(17, 'Chefchaouen nord.jpg', 'Tetouan', 'nord', 6, 4, 2000, 'l\'HOTEL MAKARIM TETOUAN');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `id_offre` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `id_offre`, `id_client`) VALUES
(31, 4, 21),
(34, 8, 22),
(35, 4, 23),
(39, 4, 19),
(42, 2, 25),
(43, 14, 11),
(44, 16, 16),
(45, 15, 26);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id_offre`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD UNIQUE KEY `id_client` (`id_client`),
  ADD KEY `id_offre` (`id_offre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `id_offre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `id_offre` FOREIGN KEY (`id_offre`) REFERENCES `offre` (`id_offre`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
