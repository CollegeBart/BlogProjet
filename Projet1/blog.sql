-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 22 Mars 2017 à 00:56
-- Version du serveur :  5.5.42
-- Version de PHP :  5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `contenu` text NOT NULL,
  `date` date NOT NULL,
  `proprietaire` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `date`, `proprietaire`) VALUES
(3, 'Lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pulvinar purus lacus, sit amet sagittis neque tincidunt at. Donec eleifend tortor nulla, in tincidunt enim pulvinar vel. Curabitur pellentesque fermentum mi, vel hendrerit erat imperdiet eu. Vestibulum vel vulputate velit, vulputate consequat risus. Nam vehicula leo quis neque semper, at faucibus nunc bibendum. Phasellus facilisis, dolor vel posuere sollicitudin, nisl ipsum vulputate eros, eget gravida libero nunc quis tortor. Phasellus hendrerit lorem ut interdum pharetra. Aenean tincidunt volutpat molestie. Quisque efficitur pharetra finibus. Nam suscipit, purus sit amet rutrum maximus, nunc augue lacinia orci, id blandit justo sem tincidunt elit. Vestibulum tellus diam, mollis eu feugiat nec, egestas nec dolor. Duis dictum non tellus eget commodo. Aliquam id risus ullamcorper, ultricies nunc ac, varius ante. Vivamus consectetur et arcu sit amet malesuada.\r\n\r\nNulla vehicula ut arcu viverra lacinia. Cras imperdiet mauris orci, vitae convallis tellus finibus at. Ut nec nulla placerat, lacinia diam quis, efficitur massa. Vestibulum posuere quis nulla nec hendrerit. Phasellus sapien tellus, mattis in dapibus sit amet, lobortis ut mi. Proin a rutrum enim. Nulla vel metus consequat, blandit ex in, posuere turpis. Proin id est orci.\r\n\r\nCras tortor augue, placerat vitae nisi vel, gravida hendrerit turpis. Nam mattis maximus viverra. Morbi tempor nulla nisi, at commodo ligula convallis vel. Ut non neque vel dolor commodo tempus quis in nunc. Sed rutrum tristique ante ut semper. Maecenas elementum aliquam tristique. Aenean sit amet semper justo.\r\n\r\nNulla facilisi. Duis sodales lorem orci, bibendum tincidunt quam cursus sed. Nulla facilisi. Praesent vitae eros tincidunt, varius erat ac, sagittis libero. Sed semper mi est, in tempus eros sodales sed. Nunc vitae mi at ipsum tincidunt blandit. Aenean facilisis massa orci, sed feugiat justo hendrerit in. Duis ac nisi in nunc aliquet viverra eget ac dolor. Nunc ac odio condimentum, ultrices nibh sed, ultricies nibh. In faucibus eget elit vel fermentum. Sed posuere nibh ut arcu placerat, vitae accumsan elit viverra.\r\n\r\nMaecenas dictum blandit justo non molestie. Quisque eu sapien nisl. Cras vulputate ac leo hendrerit placerat. Sed ullamcorper turpis justo, eget luctus lacus eleifend at. Etiam vitae sollicitudin sapien. Proin cursus, odio id consequat cursus, nibh urna tristique urna, vitae tincidunt lectus dolor a mauris. Nam semper erat id porta facilisis. Duis non tincidunt est.', '0000-00-00', 1),
(4, 'Article', 'MyArticle', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL,
  `nomdutilisateur` text NOT NULL,
  `motdepasse` text NOT NULL,
  `prenom` text NOT NULL,
  `nom` text NOT NULL,
  `role` text NOT NULL,
  `biographie` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nomdutilisateur`, `motdepasse`, `prenom`, `nom`, `role`, `biographie`) VALUES
(1, 'admin', 'admin', 'Administrateur', 'Admin', 'Admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pulvinar purus lacus, sit amet sagittis neque tincidunt at. Donec eleifend tortor nulla, in tincidunt enim pulvinar vel. Curabitur pellentesque fermentum mi, vel hendrerit erat imperdiet eu. Vestibulum vel vulputate velit, vulputate consequat risus. Nam vehicula leo quis neque semper, at faucibus nunc bibendum. Phasellus facilisis, dolor vel posuere sollicitudin, nisl ipsum vulputate eros, eget gravida libero nunc quis tortor. Phasellus hendrerit lorem ut interdum pharetra. Aenean tincidunt volutpat molestie. Quisque efficitur pharetra finibus. Nam suscipit, purus sit amet rutrum maximus, nunc augue lacinia orci, id blandit justo sem tincidunt elit. Vestibulum tellus diam, mollis eu feugiat nec, egestas nec dolor. Duis dictum non tellus eget commodo. Aliquam id risus ullamcorper, ultricies nunc ac, varius ante. Vivamus consectetur et arcu sit amet malesuada.\r\n\r\nNulla vehicula ut arcu viverra lacinia. Cras imperdiet mauris orci, vitae convallis tellus finibus at. Ut nec nulla placerat, lacinia diam quis, efficitur massa. Vestibulum posuere quis nulla nec hendrerit. Phasellus sapien tellus, mattis in dapibus sit amet, lobortis ut mi. Proin a rutrum enim. Nulla vel metus consequat, blandit ex in, posuere turpis. Proin id est orci.\r\n\r\nCras tortor augue, placerat vitae nisi vel, gravida hendrerit turpis. Nam mattis maximus viverra. Morbi tempor nulla nisi, at commodo ligula convallis vel. Ut non neque vel dolor commodo tempus quis in nunc. Sed rutrum tristique ante ut semper. Maecenas elementum aliquam tristique. Aenean sit amet semper justo.\r\n\r\nNulla facilisi. Duis sodales lorem orci, bibendum tincidunt quam cursus sed. Nulla facilisi. Praesent vitae eros tincidunt, varius erat ac, sagittis libero. Sed semper mi est, in tempus eros sodales sed. Nunc vitae mi at ipsum tincidunt blandit. Aenean facilisis massa orci, sed feugiat justo hendrerit in. Duis ac nisi in nunc aliquet viverra eget ac dolor. Nunc ac odio condimentum, ultrices nibh sed, ultricies nibh. In faucibus eget elit vel fermentum. Sed posuere nibh ut arcu placerat, vitae accumsan elit viverra.\r\n\r\nMaecenas dictum blandit justo non molestie. Quisque eu sapien nisl. Cras vulputate ac leo hendrerit placerat. Sed ullamcorper turpis justo, eget luctus lacus eleifend at. Etiam vitae sollicitudin sapien. Proin cursus, odio id consequat cursus, nibh urna tristique urna, vitae tincidunt lectus dolor a mauris. Nam semper erat id porta facilisis. Duis non tincidunt est.');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
