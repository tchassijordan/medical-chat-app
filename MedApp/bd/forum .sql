-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 19 jan. 2022 à 16:54
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'genycologue'),
(2, 'generaliste');

-- --------------------------------------------------------

--
-- Structure de la table `convo_list`
--

DROP TABLE IF EXISTS `convo_list`;
CREATE TABLE IF NOT EXISTS `convo_list` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `from_user` int(30) NOT NULL,
  `to_user` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

DROP TABLE IF EXISTS `medecin`;
CREATE TABLE IF NOT EXISTS `medecin` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `noms` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `sexe` char(1) NOT NULL,
  `ville` varchar(55) NOT NULL,
  `quatier` varchar(55) NOT NULL,
  `centre_hospi` varchar(55) NOT NULL,
  `telephone` int(9) NOT NULL,
  `password` char(16) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`m_id`, `noms`, `email`, `sexe`, `ville`, `quatier`, `centre_hospi`, `telephone`, `password`) VALUES
(1, 'dr brice', 'brice@gmail.com', 'm', 'yaounde', 'cite-verte', 'centre pasteur', 65244555, 'bonjour'),
(3, 'dr Doyen', 'Doyen@gmail.com', 'm', 'yaounde', 'cite-verte', 'centre pasteur', 65244555, 'bonjour');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(21) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mdp` varchar(21) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `email`, `mdp`) VALUES
(1, 'kamta21', 'kamta@gmail.com', 'bonjour'),
(2, 'cedrick23', 'cedrictouopi@gmail.com', 'cedric123'),
(3, 'bruno98', 'brunoalex831@gmail.com', 'bonjour'),
(4, 'broce90', 'brunoalex831@gmail.com', 'bonjour');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `from_user` int(30) NOT NULL,
  `to_user` int(30) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = text , 2 = photos,3 = videos, 4 = documents',
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `popped` tinyint(1) NOT NULL DEFAULT '0',
  `delete_flag` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `from_user`, `to_user`, `type`, `message`, `status`, `popped`, `delete_flag`, `date_created`, `date_updated`) VALUES
(1, 1, 2, 1, 'test', 1, 1, 0, '2021-10-16 11:45:21', '2021-10-17 19:36:34'),
(2, 1, 2, 1, '1', 1, 1, 0, '2021-10-16 11:45:25', '2021-10-17 19:36:34'),
(3, 1, 2, 1, '2', 1, 1, 0, '2021-10-16 11:45:26', '2021-10-17 19:36:34'),
(4, 1, 2, 1, '3', 1, 1, 0, '2021-10-16 11:45:28', '2021-10-17 19:36:34'),
(5, 1, 2, 1, '4', 1, 1, 0, '2021-10-16 11:45:30', '2021-10-17 19:36:34'),
(6, 1, 2, 1, '5', 1, 1, 0, '2021-10-16 11:45:31', '2021-10-17 19:36:34'),
(7, 1, 2, 1, '6', 1, 1, 0, '2021-10-16 11:45:32', '2021-10-17 19:36:34'),
(8, 1, 2, 1, '7', 1, 1, 0, '2021-10-16 11:45:34', '2021-10-17 19:36:34'),
(9, 1, 2, 1, '8', 1, 1, 0, '2021-10-16 11:45:35', '2021-10-17 19:36:34'),
(10, 1, 2, 1, '9', 1, 1, 0, '2021-10-16 11:45:37', '2021-10-17 19:36:34'),
(11, 1, 2, 1, '10', 1, 1, 0, '2021-10-16 11:45:42', '2021-10-17 19:36:34'),
(12, 1, 2, 1, '11', 1, 1, 0, '2021-10-16 11:45:44', '2021-10-17 19:36:34'),
(13, 1, 2, 1, '12', 1, 1, 0, '2021-10-16 11:45:47', '2021-10-17 19:36:34'),
(14, 1, 2, 1, '13', 1, 1, 0, '2021-10-16 11:45:51', '2021-10-17 19:36:34'),
(15, 1, 2, 1, '14', 1, 1, 0, '2021-10-16 11:45:54', '2021-10-17 19:36:34'),
(16, 1, 2, 1, '15', 1, 1, 0, '2021-10-16 11:45:57', '2021-10-17 19:36:34'),
(17, 2, 1, 1, '16', 1, 1, 0, '2021-10-16 11:52:45', '2021-10-17 19:37:00'),
(18, 2, 1, 1, '17', 1, 1, 0, '2021-10-16 11:52:49', '2021-10-17 19:37:00'),
(19, 2, 1, 1, '18', 1, 1, 0, '2021-10-16 11:52:54', '2021-10-17 19:37:00'),
(20, 2, 1, 1, '19', 1, 1, 0, '2021-10-16 11:52:57', '2021-10-17 19:37:00'),
(21, 2, 1, 1, '20', 1, 1, 0, '2021-10-16 11:53:06', '2021-10-17 19:37:00'),
(22, 2, 1, 1, '21', 1, 1, 0, '2021-10-16 11:58:48', '2021-10-17 19:37:00'),
(23, 2, 1, 1, 'test', 1, 1, 0, '2021-10-16 12:03:40', '2021-10-17 19:37:00'),
(24, 2, 1, 1, 'test', 1, 1, 0, '2021-10-16 12:04:48', '2021-10-17 19:37:00'),
(25, 1, 2, 1, 're', 1, 1, 0, '2021-10-16 12:05:03', '2021-10-17 19:36:34'),
(26, 1, 2, 1, 'wew', 1, 1, 0, '2021-10-16 12:05:19', '2021-10-17 19:36:34'),
(27, 2, 1, 1, 'hey John', 1, 1, 0, '2021-10-17 18:43:58', '2021-10-17 19:37:00'),
(28, 1, 3, 1, 'Hi Sam', 1, 1, 0, '2021-10-17 18:50:20', '2021-10-17 19:42:15'),
(29, 1, 2, 1, 'claire', 1, 1, 0, '2021-10-17 18:50:37', '2021-10-17 19:36:34'),
(30, 3, 1, 1, 'hey john', 1, 1, 0, '2021-10-17 19:42:31', '2021-10-17 19:43:18'),
(31, 1, 2, 1, 'test', 1, 0, 0, '2021-10-17 19:42:43', '2021-10-17 19:42:44'),
(32, 3, 1, 1, 'yow', 1, 1, 0, '2021-10-17 19:43:22', '2021-10-17 19:43:49'),
(33, 1, 2, 1, 'claire', 1, 0, 1, '2021-10-17 19:43:57', '2021-10-18 00:01:46'),
(34, 3, 1, 1, 'john??', 1, 1, 0, '2021-10-17 19:44:30', '2021-10-17 19:46:01'),
(35, 3, 1, 1, 'test', 1, 1, 0, '2021-10-17 19:45:42', '2021-10-17 19:46:01'),
(36, 3, 1, 1, 'hey', 1, 1, 0, '2021-10-17 19:46:12', '2021-10-17 19:46:26'),
(37, 3, 1, 1, 'psst', 1, 1, 0, '2021-10-17 19:46:33', '2021-10-17 19:47:47'),
(38, 3, 1, 1, 'John??', 1, 1, 0, '2021-10-17 19:47:00', '2021-10-17 19:47:47'),
(39, 3, 1, 1, 'hey you', 1, 1, 0, '2021-10-17 19:47:27', '2021-10-17 19:47:47'),
(40, 3, 1, 1, 'test', 1, 1, 0, '2021-10-17 19:47:54', '2021-10-17 19:50:50'),
(41, 1, 2, 1, '123', 1, 0, 0, '2021-10-17 19:49:08', '2021-10-17 19:49:09'),
(42, 3, 1, 1, '1234', 1, 1, 0, '2021-10-17 19:49:17', '2021-10-17 19:50:50'),
(43, 3, 1, 1, 'test', 1, 1, 0, '2021-10-17 19:50:04', '2021-10-17 19:50:50'),
(44, 3, 1, 1, 'qweqwe', 1, 1, 0, '2021-10-17 19:50:42', '2021-10-17 19:50:50'),
(45, 3, 1, 1, 'aaa', 1, 1, 0, '2021-10-17 19:50:57', '2021-10-17 19:52:52'),
(46, 3, 1, 1, 'John??', 1, 1, 0, '2021-10-17 19:51:38', '2021-10-17 19:52:52'),
(47, 1, 2, 1, 'calire??', 1, 0, 0, '2021-10-17 19:51:50', '2021-10-17 19:51:51'),
(48, 3, 1, 1, 'hey', 1, 1, 0, '2021-10-17 19:52:02', '2021-10-17 19:52:52'),
(49, 3, 1, 1, 'yes ?', 1, 1, 0, '2021-10-17 19:52:58', '2021-10-17 19:53:09'),
(59, 4, 1, 1, 'dude', 1, 1, 0, '2021-10-17 20:15:38', '2021-10-17 20:15:43'),
(60, 1, 4, 1, 'hey', 1, 1, 0, '2021-10-17 20:15:50', '2021-10-17 20:16:04'),
(61, 4, 1, 1, 'men', 1, 1, 0, '2021-10-17 21:28:39', '2021-10-17 21:39:08'),
(62, 4, 1, 1, 'test', 1, 1, 0, '2021-10-17 21:32:31', '2021-10-17 21:39:08'),
(63, 1, 3, 1, 'test', 1, 1, 0, '2021-10-17 21:32:53', '2021-10-18 00:02:20'),
(64, 4, 1, 1, 'test', 1, 1, 0, '2021-10-17 21:33:00', '2021-10-17 21:39:08'),
(65, 4, 1, 1, 'dude', 1, 1, 0, '2021-10-17 21:33:27', '2021-10-17 21:39:08'),
(66, 4, 1, 1, 'yow', 1, 1, 0, '2021-10-17 21:35:24', '2021-10-17 21:39:08'),
(67, 4, 1, 1, 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test ', 1, 1, 0, '2021-10-17 21:38:07', '2021-10-17 21:42:42'),
(68, 4, 1, 1, 'teest', 1, 1, 0, '2021-10-17 21:49:16', '2021-10-17 21:49:18'),
(69, 4, 1, 1, 'dude??', 1, 1, 0, '2021-10-17 21:52:38', '2021-10-17 21:52:41'),
(70, 4, 1, 1, 'sup', 1, 1, 0, '2021-10-17 21:52:48', '2021-10-17 21:54:47'),
(71, 1, 4, 1, 'hey', 1, 1, 0, '2021-10-17 21:53:02', '2021-10-17 21:54:13'),
(72, 1, 4, 1, 'What ??', 1, 1, 0, '2021-10-17 21:54:54', '2021-10-17 21:55:15'),
(73, 1, 4, 1, 'How can I help you ?', 1, 1, 0, '2021-10-17 21:55:29', '2021-10-17 21:56:46'),
(74, 4, 1, 1, 'test only', 1, 1, 0, '2021-10-17 21:56:51', '2021-10-17 22:19:00'),
(75, 4, 1, 1, 'test', 1, 1, 0, '2021-10-17 21:57:08', '2021-10-17 22:19:00'),
(76, 4, 1, 1, 'a', 1, 1, 0, '2021-10-17 21:57:14', '2021-10-17 22:19:00'),
(77, 4, 1, 1, '123', 1, 1, 0, '2021-10-17 21:58:26', '2021-10-17 22:19:00'),
(78, 4, 1, 1, '123', 1, 1, 0, '2021-10-17 21:58:31', '2021-10-17 22:19:00'),
(79, 4, 1, 1, '2221\r\n25', 1, 1, 0, '2021-10-17 21:58:38', '2021-10-17 22:19:00'),
(80, 1, 4, 1, 'yes?\r\n22', 1, 1, 0, '2021-10-17 21:59:39', '2021-10-17 21:59:43'),
(81, 4, 1, 1, 'hey', 1, 1, 0, '2021-10-17 22:01:22', '2021-10-17 22:19:00'),
(82, 4, 1, 1, 'what\r\n??', 1, 1, 0, '2021-10-17 22:01:58', '2021-10-17 22:19:00'),
(83, 4, 1, 1, 'test\r\n', 1, 1, 0, '2021-10-17 22:15:43', '2021-10-17 22:19:00'),
(84, 4, 1, 1, 'test\r\n', 1, 1, 0, '2021-10-17 22:16:01', '2021-10-17 23:07:20'),
(85, 4, 1, 1, 'yow\r\n\r\nsup', 1, 1, 0, '2021-10-17 22:16:11', '2021-10-17 23:07:20'),
(86, 4, 1, 1, 'wew\r\ntest', 1, 1, 0, '2021-10-17 22:18:30', '2021-10-17 23:07:20'),
(87, 1, 4, 1, 'test', 1, 1, 0, '2021-10-17 22:19:08', '2021-10-17 22:29:46'),
(88, 1, 4, 1, 'test\r\ntest', 1, 1, 0, '2021-10-17 22:19:14', '2021-10-17 22:29:46'),
(89, 1, 4, 1, 'test\r\ntest', 1, 1, 0, '2021-10-17 22:21:13', '2021-10-17 22:29:46'),
(90, 1, 4, 1, 'dude\r\nCan I Ask ?', 1, 1, 1, '2021-10-17 22:30:01', '2021-10-17 23:36:55'),
(91, 4, 1, 1, 'What?\r\nIs it about something?', 1, 1, 1, '2021-10-17 22:30:32', '2021-10-17 23:37:56'),
(92, 1, 4, 1, 'Remeber test 101\r\nCan you check the bug ?', 1, 1, 1, '2021-10-17 22:31:09', '2021-10-17 23:36:01'),
(93, 4, 1, 1, 'test', 1, 1, 1, '2021-10-17 22:42:23', '2021-10-17 23:38:02'),
(94, 4, 1, 1, 'test', 1, 1, 1, '2021-10-17 22:43:28', '2021-10-17 23:07:29'),
(95, 4, 1, 1, 'test', 1, 1, 1, '2021-10-17 23:21:14', '2021-10-17 23:35:50'),
(96, 4, 1, 1, 'hey dude', 1, 1, 0, '2021-10-17 23:44:45', '2021-10-17 23:46:14'),
(97, 4, 1, 1, 'yow', 1, 1, 0, '2021-10-17 23:46:04', '2021-10-17 23:46:14'),
(98, 4, 1, 1, 'fs', 1, 1, 0, '2021-10-17 23:48:34', '2021-10-17 23:55:38'),
(99, 4, 1, 1, 'test', 1, 1, 0, '2021-10-17 23:49:12', '2021-10-17 23:55:38'),
(100, 1, 4, 1, 'what?', 1, 1, 0, '2021-10-17 23:49:22', '2021-10-17 23:51:07'),
(101, 1, 4, 1, 'yow', 1, 1, 0, '2021-10-17 23:55:42', '2021-10-18 00:01:56'),
(102, 3, 1, 1, 'JOhn?', 0, 1, 0, '2021-10-18 00:02:29', '2021-10-18 00:02:30'),
(103, 3, 1, 1, 'Hey John', 0, 1, 0, '2021-10-18 00:02:33', '2021-10-18 00:03:13'),
(104, 3, 1, 1, 'John', 0, 1, 0, '2021-10-18 00:02:49', '2021-10-18 00:03:13'),
(105, 3, 1, 1, 'test', 0, 1, 0, '2021-10-18 00:03:21', '2021-10-18 00:03:21'),
(106, 3, 1, 1, 'john', 0, 1, 0, '2021-10-18 00:03:26', '2021-10-18 00:03:42'),
(107, 3, 1, 1, 'hey', 0, 1, 0, '2021-10-18 00:03:58', '2021-10-18 00:03:58'),
(108, 3, 1, 1, 'hey', 0, 1, 0, '2021-10-18 00:04:06', '2021-10-18 00:07:16'),
(109, 3, 1, 1, 'test', 0, 1, 0, '2021-10-18 00:07:23', '2021-10-18 00:07:23'),
(110, 3, 1, 1, 'test', 0, 1, 0, '2021-10-18 00:07:56', '2021-10-18 00:07:56'),
(111, 3, 1, 1, 'test', 0, 1, 0, '2021-10-18 00:07:59', '2021-10-18 00:08:00'),
(112, 5, 6, 1, 'bonjour ', 0, 0, 0, '2022-01-19 09:49:28', NULL),
(113, 9, 5, 1, 'brice', 1, 1, 0, '2022-01-19 09:49:54', '2022-01-19 09:50:13'),
(114, 5, 9, 1, 'yo', 1, 1, 0, '2022-01-19 09:50:20', '2022-01-19 09:50:21'),
(115, 9, 5, 1, 'ok', 1, 1, 1, '2022-01-19 09:50:42', '2022-01-19 10:05:25'),
(116, 5, 9, 1, 'hiii', 0, 0, 0, '2022-01-19 10:07:01', NULL),
(117, 5, 9, 1, 'ekieu', 0, 0, 1, '2022-01-19 11:27:41', '2022-01-19 11:27:47');

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `p_id` int(55) NOT NULL AUTO_INCREMENT,
  `noms` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `sexe` char(1) NOT NULL,
  `ville` varchar(55) NOT NULL,
  `quartier` varchar(55) NOT NULL,
  `telephone` int(9) NOT NULL,
  `password` char(16) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `postsujet`
--

DROP TABLE IF EXISTS `postsujet`;
CREATE TABLE IF NOT EXISTS `postsujet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propri` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `date` datetime NOT NULL,
  `sujet` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `postsujet`
--

INSERT INTO `postsujet` (`id`, `propri`, `contenu`, `date`, `sujet`) VALUES
(1, 1, 'que pensez vous de cher docteur', '2022-01-12 20:42:34', 'Mal de tÃªte'),
(2, 2, 'comment maintenir sa santÃ©', '2022-01-12 21:12:26', 'santÃ©'),
(3, 2, 'mange equilibrÃ© mon petit', '2022-01-12 21:13:06', 'santÃ©'),
(4, 4, 'bonjour l\'homme\r\n', '2022-01-17 08:59:08', 'Mal de tÃªte'),
(5, 4, 'savoir sa glicenie', '2022-01-17 09:23:28', 'glycemie'),
(6, 4, 'savoir sa glycemie', '2022-01-17 09:23:44', 'glycemie'),
(7, 3, 'bbb', '2022-01-18 11:17:02', 'Mal de tÃªte'),
(8, 3, 'nn', '2022-01-18 11:17:15', 'glycemie'),
(9, 3, 'nn', '2022-01-18 11:17:31', 'santÃ©'),
(10, 3, 'cccvvvv\r\n#', '2022-01-18 11:59:48', 'Mal de tÃªte');

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

DROP TABLE IF EXISTS `sujet`;
CREATE TABLE IF NOT EXISTS `sujet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(21) NOT NULL,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sujet`
--

INSERT INTO `sujet` (`id`, `categorie`, `name`) VALUES
(1, 'genycologue', 'Mal de tÃªte'),
(2, 'generaliste', 'santÃ©'),
(3, 'genycologue', 'glycemie');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `contact`, `gender`, `dob`, `email`, `password`, `date_created`, `date_updated`) VALUES
(5, 'nono', '', 'brice', '651454468', 'Male', '2022-01-30', 'brunoalex831@gmail.com', '808594c078cad4d663e26b1d2be2a03d', '2022-01-19 09:36:36', NULL),
(9, 'doyen', '', 'ledoyen', '8766777', 'Male', '2022-01-28', 'doyen831@gmail.com', 'e000bc443ea53c2660ddeda118bb34e0', '2022-01-19 09:45:59', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
