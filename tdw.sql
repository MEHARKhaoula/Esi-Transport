-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 29 jan. 2022 à 10:53
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tdw`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`user_id`, `nom`, `prenom`, `email`, `motdepasse`, `tel`, `adresse`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 254, 'hussein dey');

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `id_annonce` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `wilaya_depart` varchar(255) NOT NULL,
  `wilaya_arrive` varchar(255) NOT NULL,
  `type_transport` varchar(255) NOT NULL,
  `tarif` int(11) DEFAULT NULL,
  `moyen_transport` varchar(255) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_transport` int(11) DEFAULT NULL,
  `etat` varchar(255) DEFAULT 'non',
  `img` varchar(100) NOT NULL,
  `fourchette_poids` varchar(100) NOT NULL,
  `fourchette_volume` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `transaction` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(20) NOT NULL DEFAULT 'garantie',
  `top` tinyint(1) NOT NULL DEFAULT '0',
  `termine` varchar(255) NOT NULL DEFAULT 'en cours',
  `archive` tinyint(1) NOT NULL DEFAULT '0',
  `note` int(11) NOT NULL DEFAULT '100',
  `supp` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_annonce`),
  KEY `id_transport` (`id_transport`),
  KEY `id_client` (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=239 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `titre`, `description`, `wilaya_depart`, `wilaya_arrive`, `type_transport`, `tarif`, `moyen_transport`, `id_client`, `id_transport`, `etat`, `img`, `fourchette_poids`, `fourchette_volume`, `date`, `transaction`, `type`, `top`, `termine`, `archive`, `note`, `supp`) VALUES
(235, 'annonce pour lettre', 'j\'ai besoin de transporter une lettre à ma grand-mère', 'Alger', 'Bechar', 'lettre', 2000, 'voiture', 129, NULL, 'oui', 'vtc.png', '0<x<100gr', '0<x<0.625m3', '2022-01-28 13:52:50', 0, 'non garantie', 1, 'en cours', 0, 100, 0),
(236, 'annonce pour meuble', 'j\'ai un meuble à transporter ', 'Adrar', 'Alger', 'colis', 9000, 'voiture', 129, NULL, 'oui', 'thumb.jpg', '0<x<100gr', '0<x<0.625m3', '2022-01-28 13:54:13', 0, 'garantie', 1, 'en cours', 0, 100, 0),
(237, 'meuble', 'je veux transporter un meuble', 'Chlef', 'Djelfa', 'demenagement', NULL, 'voiture', 129, NULL, 'non', 'diaporama-.png', '0<x<100gr', '0<x<0.625m3', '2022-01-28 13:57:09', 0, 'garantie', 1, 'en cours', 0, 100, 0),
(238, 'Annonce pour trajet loin', 'je veux me transporter avec mes affaires', 'Annaba', 'Adrar', 'colis', NULL, 'voiture', 129, NULL, 'oui', 'voiture.webp', '0<x<100gr', '0<x<0.625m3', '2022-01-28 13:57:55', 0, 'garantie', 0, 'en cours', 0, 100, 0),
(234, 'annonce pour bejaia', 'j\'habite à el bordj et je vais aller à bejaia', 'Bejaia', 'Bordj Bou Arreridj', 'electromenager', 8000, 'bus', 129, NULL, 'oui', 'thumb.jpg', 'x>10kg', '10m3<x<100m3', '2022-01-28 13:48:20', 0, 'garantie', 0, 'en cours', 0, 100, 0),
(233, 'annonce urgente', 'j\'ai besoin d\'un transporteur pour me transporter ', 'Ain Defla', 'Alger', 'electromenager', 6000, 'camion', 129, NULL, 'oui', 'voiture.webp', '5kg<x<10kg', '0<x<0.625m3', '2022-01-28 13:40:04', 0, 'garantie', 0, 'en cours', 0, 100, 0),
(232, 'annonce alger bechar', 'je veux voyager donc j\'ai besoin d\'un transporteur', 'Alger', 'Bechar', 'meuble', 3000, 'voiture', 129, 42, 'oui', 'thumb.jpg', '0<x<100gr', '10m3<x<100m3', '2022-01-28 13:37:56', 1, 'garantie', 0, 'terminee', 0, 8, 0),
(231, 'annonce pour colis', 'j\'ai un petit colis à transporter de Adrar à Alger', 'Adrar', 'Alger', 'colis léger', 4000, 'voiture', 129, 42, 'oui', 'voiture.webp', '0<x<100gr', '0<x<0.625m3', '2022-01-28 10:35:47', 1, 'non garantie', 0, 'terminee', 0, 6, 0),
(230, 'annonce pour alger', 'j\'ai un déménagement à faire de ain defla a alger j\'ai besoin d\'une voiture pour transporter mes affaires', 'Ain Defla', 'Alger', 'demenagement', 6000, 'voiture', 129, 41, 'oui', '1.jpg', 'x>10kg', '10m3<x<100m3', '2022-01-28 10:18:05', 1, 'garantie', 0, 'en cours', 0, 100, 0);

-- --------------------------------------------------------

--
-- Structure de la table `annoncetransporteurassoc`
--

DROP TABLE IF EXISTS `annoncetransporteurassoc`;
CREATE TABLE IF NOT EXISTS `annoncetransporteurassoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_transporteur` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annoncetransporteurassoc`
--

INSERT INTO `annoncetransporteurassoc` (`id`, `id_transporteur`, `id_annonce`) VALUES
(113, 41, 236),
(112, 42, 236),
(111, 43, 236),
(110, 41, 235),
(109, 42, 235),
(102, 41, 232),
(101, 42, 232),
(108, 43, 235),
(107, 41, 234),
(106, 42, 234),
(105, 41, 233),
(104, 42, 233),
(103, 43, 233),
(100, 43, 232),
(99, 41, 231),
(98, 42, 231),
(97, 43, 231),
(96, 41, 230),
(95, 42, 230),
(94, 43, 230);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telephone` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `telephone`, `mail`, `adresse`) VALUES
(1, '0559878848', 'ik_mehar@esi.dz', 'hussein dey alger');

-- --------------------------------------------------------

--
-- Structure de la table `diaporama`
--

DROP TABLE IF EXISTS `diaporama`;
CREATE TABLE IF NOT EXISTS `diaporama` (
  `id_diapo` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(100) NOT NULL,
  `id_contenu` int(11) NOT NULL,
  PRIMARY KEY (`id_diapo`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `diaporama`
--

INSERT INTO `diaporama` (`id_diapo`, `img`, `id_contenu`) VALUES
(1, '1.jpg', 6),
(2, '2.jpg', 7),
(3, 'vtc.jpg', 8);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `texte` varchar(2000) NOT NULL,
  `img` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `titre`, `texte`, `img`, `date`) VALUES
(6, 'Top 20 des voitures les plus vendues en France en 2021', 'En août dernier, constatant ses excellentes performances commerciales, nous nous demandions si la Dacia Sandero n\'allait tout simplement pas détrôner les 208 et Clio et devenir la première voiture étrangère à finir en tête des ventes en France. Eh bien non, ce n\'est pas pour cette fois-ci. Mais force est de constater qu\'elle a fait mieux que se défendre cette année avec une très belle troisième place (3 de gagnées). Surtout, contrairement à ses concurrentes françaises, c\'est la seule à progresser, et la croissance est même fulgurante : + 44,2 %, contre respectivement - 8,1 % et - 11 % pour les 208 et Clio. Les volumes sont particulièrement parlants, il s\'en est écoulé 77 054 unités en 2021 et 53 419 en 2020, c\'est 23 635 exemplaires de plus d\'une année à l\'autre. Bref, si la roumaine n\'est pas parvenue à se hisser à la 1ère place, il semble que ce ne soit que partie remise. Ne serait-ce que parce qu\'elle est encore jeune, pimpante et dynamique alors que les 208 et Clio arrivent progressivement au milieu de leur carrière, qu\'elles ne seront pas restylées avant 2023 et pourraient donc encore perdre quelques plumes au passage. Vers une victoire de la Sandero en 2022 ? C\'est possible, affaire à suivre.', 'voiture.webp', '2022-01-28'),
(7, 'Le marché de l\'automobile d\'occasion en grande forme en 2021', 'Pour la première fois de l\'histoire en France, le marché du véhicule d\'occasion a dépassé les 6 millions d\'unités. Il s\'est vendu plus de 3 occasion pour 1 véhicule neuf en 2021 ! Quel dynamisme, alors, ce marché de la voiture d\'occasion ! Nous ne comptons même plus le nombre d\'années consécutives durant lesquelles le \"VO\" est en progression. Et en 2021, bis repetita : 7,9 % de croissance et 6,070 millions d\'unités vendues. C\'est la première fois que l\'occasion dépasse les 6 millions de cessions. A titre de piqûre de rappel : le marché du neuf sur la même période, c\'est 1,659 million de ventes, et une progression... de 0,4 %. Les raisons, vous les connaissez déjà pour la plupart : des problèmes logistiques au niveau mondial, des pénuries de certains composants, mais pas que. Il faut aussi signaler la frilosité des Français à investir dans un véhicule neuf, alors que les prix ne cessent de grimper ces dernières années : + 35 % en 10 ans, et + 6 % environ en 2021, tout comme en 2020. La hausse du marché de l\'occasion suit presque celle du prix des véhicules neufs !', 'voiture1.jfif', '2022-01-28'),
(8, 'En 2021, la voiture électrique la plus vendue en Europe sera américaine', 'Si le titre lui avait échappé en 2020 au profit de la Renault Zoe, elle devrait cette fois écraser la concurrence. La Tesla Model 3 est en passe de devenir la meilleure vente électrique en Europe en 2021. 2020 semblait être l\'année idéale pour que la Tesla Model 3 s\'impose comme la voiture électrique la plus populaire sur le Vieux Continent. La marque avait en effet réussi à traverser la tempête Covid plus facilement que ses concurrents grâce à une politique d\'achats moins rigide et pas forcément appuyée sur des concessions classiques, fermées pendant des mois. Pourtant, la Model 3 n\'avait fini que \"deuxième\", en baisse de 9 % par rapport à 2019, assez loin derrière une Renault Zoe pourtant vieillissante, mais qui avait tout de même trouvé un poil moins de 100 000 acquéreurs. Clairement, 2020 était l\'année du tournant pour le marché automobile qui vécu l\'essor de la part de marché des modèles rechargeables.', 'car2.jfif', '2022-01-28');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id_annonce` int(11) NOT NULL,
  `id_transport` int(11) NOT NULL,
  `n` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id_annonce`, `id_transport`, `n`, `id`) VALUES
(232, 42, 8, 13),
(231, 42, 6, 12);

-- --------------------------------------------------------

--
-- Structure de la table `poids`
--

DROP TABLE IF EXISTS `poids`;
CREATE TABLE IF NOT EXISTS `poids` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fourchette` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `poids`
--

INSERT INTO `poids` (`id`, `fourchette`) VALUES
(1, '0<x<100gr'),
(2, '100gr<x<1kg'),
(3, '1kg<x<5kg'),
(4, '5kg<x<10kg'),
(5, 'x>10kg');

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

DROP TABLE IF EXISTS `presentation`;
CREATE TABLE IF NOT EXISTS `presentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `objectif` varchar(1000) NOT NULL,
  `img` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `fonctionne` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`id`, `objectif`, `img`, `video`, `fonctionne`) VALUES
(1, 'Commençons déjà par définir ce qu’est un VTC ! Il s’agit d’un « Véhicule de Tourisme avec Chauffeur », qu’on appelle aussi plus simplement « voiture avec chauffeur ». Les VTC offrent les mêmes services que les taxis : vous permettre d’aller d’un point A à un point B à bord d’une voiture, en vous faisant conduire.\r\n\r\nIl existe cependant quelques différences entre les taxis et les VTC. La première et la plus visible, c’est que les VTC n’ont pas de signe distinctif. On les repère donc moins bien que les taxis, qui ont un lumignon sur le toit de leur véhicule. Mais ce n’est tout ! Au niveau de leurs prix, de la façon de les commander, du confort et de bien d’autres critères, les VTC se distinguent aussi. ', 'vtc.jpg', 'VTC.mp4', 'Une culture du service implique que l’ensemble des actions aient comme objectif le développement des habitudes de service exceptionnel.\r\n\r\nLe premier pas consiste à faire du service l’élément pivot de l’entreprise. Il ne constitue pas l’un des items à cocher sur une liste. Tous les processus doivent graviter autour du concept de service. Voici des moyens, accessibles à tous, qui permettent d’ancrer des habitudes préalables à un excellent service à la clientèle.');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `transporteur_id` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texte` varchar(1000) DEFAULT NULL,
  `accepte` tinyint(1) NOT NULL,
  `id_client` int(11) NOT NULL,
  `envoye` varchar(50) NOT NULL DEFAULT 'transporteur',
  PRIMARY KEY (`id`),
  KEY `transporteur_id` (`transporteur_id`),
  KEY `id_annonce` (`id_annonce`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`transporteur_id`, `id_annonce`, `id`, `texte`, `accepte`, `id_client`, `envoye`) VALUES
(42, 236, 59, NULL, 1, 129, 'client'),
(42, 230, 58, 'je veux de transporter', 1, 129, 'transporteur');

-- --------------------------------------------------------

--
-- Structure de la table `signalement`
--

DROP TABLE IF EXISTS `signalement`;
CREATE TABLE IF NOT EXISTS `signalement` (
  `transporteur_id` int(11) NOT NULL,
  `id_clent` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `signalement`
--

INSERT INTO `signalement` (`transporteur_id`, `id_clent`, `id_annonce`, `texte`, `id`, `type`) VALUES
(42, 129, 231, 'ce transporteur est arrive en retard', 13, 'client');

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

DROP TABLE IF EXISTS `tarif`;
CREATE TABLE IF NOT EXISTS `tarif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `depart` varchar(255) NOT NULL,
  `arrive` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tarif`
--

INSERT INTO `tarif` (`id`, `depart`, `arrive`, `prix`, `type`) VALUES
(1, 'Ain Defla', 'Alger', 6000, 'garantie'),
(2, 'Adrar', 'Alger', 9000, 'garantie'),
(3, 'Bejaia', 'Bordj Bou Arreridj', 8000, 'garantie'),
(4, 'Alger', 'Bechar', 3000, 'garantie'),
(6, 'Ain Defla', 'Alger', 3000, 'non garantie'),
(7, 'Adrar', 'Alger', 4000, 'non garantie'),
(8, 'Bejaia', 'Bordj Bou Arreridj\r\n', 4000, 'non garantie'),
(10, 'Alger', 'Bechar', 2000, 'non garantie');

-- --------------------------------------------------------

--
-- Structure de la table `transporteur`
--

DROP TABLE IF EXISTS `transporteur`;
CREATE TABLE IF NOT EXISTS `transporteur` (
  `transporteur_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `certifie` varchar(30) NOT NULL,
  `statut` varchar(30) NOT NULL,
  `somme` int(11) DEFAULT '0',
  `note` int(11) DEFAULT NULL,
  `adresse` varchar(100) NOT NULL,
  `just` varchar(300) NOT NULL DEFAULT 'vide',
  `insc` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`transporteur_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `transporteur`
--

INSERT INTO `transporteur` (`transporteur_id`, `nom`, `prenom`, `email`, `motdepasse`, `tel`, `certifie`, `statut`, `somme`, `note`, `adresse`, `just`, `insc`) VALUES
(41, 'BRAHIMI', 'Rachida', 'ir_brahimi@esi.dz', 'rachida', 559878848, 'oui', 'certifie', 0, NULL, 'hussein dey', 'vide', 1),
(42, 'Oussama', 'Walid', 'walid@esi.dz', 'walid', 559878848, 'oui', 'certifie', 5800, NULL, 'hussein dey', 'vide', 1),
(43, 'Asma', 'Asma', 'asma@esi.dz', 'asma', 559878848, 'non', 'valide', 0, NULL, 'hussein dey', 'vide', 1),
(44, 'Romaissa', 'Manel', 'manel@esi.dz', 'manel', 123456, 'oui', 'certifie', 0, NULL, 'hussein dey', 'vide', 1);

-- --------------------------------------------------------

--
-- Structure de la table `travailler`
--

DROP TABLE IF EXISTS `travailler`;
CREATE TABLE IF NOT EXISTS `travailler` (
  `nom_wilaya` varchar(255) NOT NULL,
  `id_transport` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `id_wilaya` (`nom_wilaya`),
  KEY `id_transport` (`id_transport`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `travailler`
--

INSERT INTO `travailler` (`nom_wilaya`, `id_transport`, `id`) VALUES
('Bechar', 44, 91),
('Alger', 44, 90),
('Ain Defla', 44, 89),
('Adrar', 44, 88),
('Batna', 43, 87),
('Adrar', 43, 84),
('Alger', 42, 82),
('Bejaia', 42, 83),
('Ain Defla', 42, 81),
('Adrar', 42, 80),
('Bejaia', 41, 79),
('Alger', 41, 78),
('Ain Defla', 41, 77),
('Adrar', 41, 76),
('Alger', 43, 86),
('Ain Defla', 43, 85);

-- --------------------------------------------------------

--
-- Structure de la table `travailler_arrive`
--

DROP TABLE IF EXISTS `travailler_arrive`;
CREATE TABLE IF NOT EXISTS `travailler_arrive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_wilaya` varchar(255) NOT NULL,
  `id_transport` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `travailler_arrive`
--

INSERT INTO `travailler_arrive` (`id`, `nom_wilaya`, `id_transport`) VALUES
(42, 'Bejaia', 44),
(41, 'Bechar', 44),
(40, 'Batna', 44),
(37, 'Alger', 43),
(36, 'Bordj Bou Arreridj', 42),
(35, 'Bechar', 42),
(34, 'Alger', 42),
(33, 'Bordj Bou Arreridj', 41),
(32, 'Bechar', 41),
(31, 'Alger', 41),
(39, 'Bordj Bou Arreridj', 43),
(38, 'Bechar', 43);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `motdepasse` varchar(255) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `type` varchar(30) NOT NULL,
  `bloc` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`user_id`, `nom`, `prenom`, `email`, `motdepasse`, `tel`, `adresse`, `type`, `bloc`) VALUES
(134, 'Romaissa', 'Manel', 'manel@esi.dz', 'manel', 123456, 'hussein dey', 'transporteur', 0),
(131, 'BRAHIMI', 'Rachida', 'ir_brahimi@esi.dz', 'rachida', 559878848, 'hussein dey', 'transporteur', 0),
(132, 'Oussama', 'Walid', 'walid@esi.dz', 'walid', 559878848, 'hussein dey', 'transporteur', 0),
(133, 'Asma', 'Asma', 'asma@esi.dz', 'asma', 559878848, 'hussein dey', 'transporteur', 0),
(129, 'MEHAR', 'Khaoula', 'ik_mehar@esi.dz', 'oussizy', 559878848, 'hussein dey', 'client', 0),
(130, 'Hafsa', 'Romaissa', 'ir_hafsa@esi.dz', 'd', 559878848, 'hussein dey', 'client', 0),
(135, 'KARA', 'Hafsa', 'ih_kara', 'hafsa', 55987455, 'al alia', 'client', 0);

-- --------------------------------------------------------

--
-- Structure de la table `volume`
--

DROP TABLE IF EXISTS `volume`;
CREATE TABLE IF NOT EXISTS `volume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fourchette` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `volume`
--

INSERT INTO `volume` (`id`, `fourchette`) VALUES
(1, '0<x<0.625m3'),
(2, '0.625m3<x<1m3'),
(3, '1m3<x<10m3'),
(4, '10m3<x<100m3');

-- --------------------------------------------------------

--
-- Structure de la table `wilayas`
--

DROP TABLE IF EXISTS `wilayas`;
CREATE TABLE IF NOT EXISTS `wilayas` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `wilayas`
--

INSERT INTO `wilayas` (`id`, `code`, `nom`) VALUES
(1, 1, 'Adrar'),
(44, 44, 'Ain Defla'),
(46, 46, 'Ain Témouchent'),
(16, 16, 'Alger'),
(23, 23, 'Annaba'),
(5, 5, 'Batna'),
(8, 8, 'Bechar'),
(6, 6, 'Bejaia'),
(7, 7, 'Biskra'),
(9, 9, 'Blida'),
(34, 34, 'Bordj Bou Arreridj'),
(10, 10, 'Bouira'),
(35, 35, 'Boumerdès'),
(2, 2, 'Chlef'),
(25, 25, 'Constantine'),
(17, 17, 'Djelfa'),
(32, 32, 'El Bayadh'),
(39, 39, 'El Oued'),
(36, 36, 'El Tarf'),
(47, 47, 'Ghardaia'),
(24, 24, 'Guelma'),
(33, 33, 'Illizi'),
(18, 18, 'Jijel'),
(40, 40, 'Khenchela'),
(3, 3, 'Laghouat'),
(28, 28, 'M\'Sila'),
(29, 29, 'Mascara'),
(26, 26, 'Medea'),
(43, 43, 'Mila'),
(27, 27, 'Mostaganem'),
(45, 45, 'Naama'),
(31, 31, 'Oran'),
(30, 30, 'Ouargla'),
(4, 4, 'Oum El Bouaghi'),
(48, 48, 'Relizane'),
(20, 20, 'Saida'),
(19, 19, 'Setif'),
(22, 22, 'Sidi Bel Abbes'),
(21, 21, 'Skikda'),
(41, 41, 'Souk Ahras'),
(11, 11, 'Tamanrasset'),
(12, 12, 'Tebessa'),
(14, 14, 'Tiaret'),
(37, 37, 'Tindouf'),
(42, 42, 'Tipaza'),
(38, 38, 'Tissemsilt'),
(15, 15, 'Tizi Ouzou'),
(13, 13, 'Tlemcen');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
