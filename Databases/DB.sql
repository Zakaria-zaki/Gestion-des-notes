-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 31 mai 2021 à 13:49
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `DB`
--

-- --------------------------------------------------------

--
-- Structure de la table `Etudiant`
--

CREATE TABLE `Etudiant` (
  `id` int(11) NOT NULL,
  `NumEtudiant` int(12) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Adresse` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Moyenne` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Etudiant`
--

INSERT INTO `Etudiant` (`id`, `NumEtudiant`, `Nom`, `Prenom`, `Adresse`, `email`, `Moyenne`) VALUES
(1, 22154698, 'Zakaria', 'ATTAOUI', '48 rue de bargue', 'attaouizakaria98@gmail.com', 15.95),
(2, 45698789, 'ABID', 'Hocine', '66 rue bargue', 'hocine@gmail.com', 8.7);

-- --------------------------------------------------------

--
-- Structure de la table `Matiere`
--

CREATE TABLE `Matiere` (
  `id_mat` int(11) NOT NULL,
  `intituler` varchar(20) NOT NULL,
  `coef` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Matiere`
--

INSERT INTO `Matiere` (`id_mat`, `intituler`, `coef`) VALUES
(956, 'Math', 5),
(957, 'Physique', 3),
(958, 'Francais', 5),
(959, 'Anglais', 5),
(960, 'Arabe', 5),
(961, 'Histoire', 3),
(962, 'géo', 2),
(963, 'Science', 5),
(964, 'chimie', 4),
(965, 'musique', 1),
(966, 'sport', 1),
(967, 'Espagnol', 3),
(968, 'Math', 5),
(969, 'Physique', 3),
(970, 'Francais', 5),
(971, 'Anglais', 5),
(972, 'Arabe', 5),
(973, 'Histoire', 3),
(974, 'géo', 2),
(975, 'Science', 5),
(976, 'chimie', 4),
(977, 'musique', 1),
(978, 'sport', 1),
(979, 'Espagnol', 3),
(980, 'Math', 5),
(981, 'Physique', 3),
(982, 'Francais', 5),
(983, 'Anglais', 5),
(984, 'Arabe', 5),
(985, 'Histoire', 3),
(986, 'géo', 2),
(987, 'Science', 5),
(988, 'chimie', 4),
(989, 'musique', 1),
(990, 'sport', 1),
(991, 'Espagnol', 3);

-- --------------------------------------------------------

--
-- Structure de la table `Note`
--

CREATE TABLE `Note` (
  `id_note` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `valeur` int(11) NOT NULL,
  `intmatiere` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Note`
--

INSERT INTO `Note` (`id_note`, `id`, `valeur`, `intmatiere`) VALUES
(443, 2, 9, 'Math'),
(444, 2, 8, 'Physique'),
(445, 2, 9, 'Francais'),
(446, 2, 11, 'Anglais'),
(447, 2, 10, 'Arabe'),
(448, 2, 7, 'Histoire'),
(449, 2, 8, 'géo'),
(450, 2, 10, 'Science'),
(451, 2, 7, 'chimie'),
(452, 2, 10, 'musique'),
(453, 2, 7, 'sport'),
(454, 2, 5, 'Espagnol');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Etudiant`
--
ALTER TABLE `Etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Matiere`
--
ALTER TABLE `Matiere`
  ADD PRIMARY KEY (`id_mat`);

--
-- Index pour la table `Note`
--
ALTER TABLE `Note`
  ADD PRIMARY KEY (`id_note`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Etudiant`
--
ALTER TABLE `Etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Matiere`
--
ALTER TABLE `Matiere`
  MODIFY `id_mat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=992;

--
-- AUTO_INCREMENT pour la table `Note`
--
ALTER TABLE `Note`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=455;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Note`
--
ALTER TABLE `Note`
  ADD CONSTRAINT `Note_ibfk_1` FOREIGN KEY (`id`) REFERENCES `Etudiant` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;