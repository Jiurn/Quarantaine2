-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 17 jan. 2021 à 04:20
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site_web_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `id` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `Endroit` varchar(200) NOT NULL,
  `Social` varchar(200) NOT NULL,
  `Categorie` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `activites`
--

INSERT INTO `activites` (`id`, `nom`, `Endroit`, `Social`, `Categorie`) VALUES
('ahora_mexicain_restaurant', 'Ahora Mexicain Restaurant', 'Ottawa', 'Seul, Famille, Couple, Amis', 'Restaurant'),
('altitude_gym', 'Altitude Gym', 'Gatineau', 'Seul, Famille, Couple, Amis', 'Activite_sportive'),
('antonyme', 'Restaurant Antonyme', 'Aylmer', 'Seul, Famille, Couple, Amis', 'Restaurant, Bar'),
('au_vieux_duluth', 'Au Vieux Duluth', 'Gatineau', 'Famille, Couple, Amis', 'Restaurant'),
('aylmer_bbq', 'Aylmer BBQ', 'Aylmer', 'Seul, Famille, Couple, Amis', 'Restaurant, Bar'),
('barburrito', 'barBURRITO', 'Hull', 'Seul, Famille, Couple, Amis', 'Restaurant'),
('baton_rouge', 'Bâton Rouge', 'Hull', 'Famille, Couple, Amis', 'Restaurant'),
('bibliotheque_aylmer', 'Bibliothèque Aylmer', 'Aylmer', 'Seul, Famille, Couple, Amis', 'Chill'),
('bistro_coqlicorne', 'Bistro Coqlicorne', 'Hull', 'Seul, Famille, Couple, Amis', 'Restaurant, Bar'),
('bistro_lautre_oeil', 'Bistro L\'Autre Oeil', 'Aylmer', 'Seul, Famille, Couple, Amis', 'Restaurant, Bar'),
('bistro_le_forain', 'Bistro Le Forain', 'Hull', 'Seul, Famille, Couple, Amis', 'Restaurant, Bar'),
('bistro_mexicana', 'Bistro Mexicana', 'Aylmer', 'Famille, Couple, Amis', 'Restaurant'),
('british', 'The British Hotel, Restaurant and Pub', 'Aylmer', 'Seul, Famille, Couple, Amis', 'Restaurant, Chill'),
('burrito_borracho', 'Burrito Borracho', 'Ottawa', 'Famille, Couple, Amis', 'Restaurant'),
('cafe_british', 'Café British', 'Aylmer', 'Seul, Famille, Couple, Amis', 'Chill'),
('cafe_mulligan', 'Café Mulligan', 'Aylmer', 'Seul, Famille, Couple, Amis', 'Chill'),
('cage_aux_sports', 'La Cage Aux Sports', 'Gatineau, Hull', 'Famille, Couple, Amis', 'Restaurant, Bar'),
('calypso', 'Calypso', 'Gatineau', 'Famille, Couple, Amis', 'Chill'),
('canal_rideau', 'Canal Rideau', 'Ottawa', 'Seul, Famille, Couple, Amis', 'Chill'),
('casa_grecque', 'Casa Grecque', 'Aylmer', 'Famille, Couple, Amis', 'Restaurant'),
('casino_lac_leamy', 'Casino Lac Leamy', 'Hull', 'Seul, Famille, Couple, Amis', 'Bar, Chill'),
('centre_sportif', 'Centre Sportif', 'Gatineau', 'Seul, Famille, Couple, Amis', 'Activite_sportive'),
('chelseas_pub', 'Chelsea Pub', 'Gatineau', 'Famille, Couple, Amis', 'Restaurant, Bar'),
('chez_fatima', 'Chez Fatima', 'Hull', 'Famille, Couple, Amis', 'Restaurant'),
('chocolats_favoris', 'Chocolats Favoris', 'Gatineau, Aylmer', 'Seul, Famille, Couple, Amis', 'Chill'),
('cigale', 'La Cigale', 'Gatineau', 'Seul, Famille, Couple, Amis', 'Chill'),
('club_alea', 'Club Aléa', 'Hull', 'Seul, Famille, Couple, Amis', 'Bar'),
('club_le_forum', 'Le Forum', 'Gatineau', 'Seul, Famille, Couple, Amis', 'Bar'),
('club_pigale', 'Club Pigale', 'Gatineau', 'Seul, Famille, Couple, Amis', 'Bar'),
('corazon_de_maiz', 'Corazon de maiz', 'Ottawa', 'Seul, Famille, Couple, Amis', 'Restaurant'),
('dairy_queen', 'Dairy Queen', 'Hull, Aylmer', 'Seul, Famille, Couple, Amis', 'Chill'),
('dintys', 'Dintys', 'Aylmer', 'Famille, Couple, Amis', 'Restaurant'),
('east_side_marios', 'East Side Mario\'s', 'Hull', 'Famille, Couple, Amis', 'Restaurant'),
('foubrac', 'Le Foubrac', 'Hull', 'Seul, Famille, Couple, Amis', 'Restaurant, Bar'),
('galaxie_bowling', 'Galaxie Bowling', 'Aylmer', 'Famille, Couple, Amis', 'Chill'),
('galeries_aylmer', 'Les Galeries Aylmer', 'Aylmer', 'Seul, Famille, Couple, Amis', 'Fast-food, Chill, Magasinage'),
('galeries_de_hull', 'Les Galeries de Hull', 'Hull', 'Seul, Famille, Couple, Amis', 'Fast-food, Chill, Magasinage'),
('gladstone', 'Glastone', 'Ottawa', 'Famille, Couple, Amis', 'Chill'),
('la_belle_et_la_boeuf', 'La Belle & La Boeuf', 'Gatineau', 'Famille, Couple, Amis', 'Restaurant, Bar'),
('la_buena', 'La Buena', 'Gatineau', 'Famille, Couple, Amis', 'Restaurant'),
('la_station', 'La Station', 'Hull', 'Famille, Couple, Amis', 'Restaurant'),
('lac_beauchamp', 'Lac Beauchamp', 'Gatineau', 'Seul, Famille, Couple, Amis', 'Chill'),
('laubergiste', 'L\'Aubergiste Resto Bistro', 'Aylmer', 'Famille, Couple, Amis', 'Restaurant, Bar'),
('le_cellier', 'Le Cellier', 'Hull', 'Famille, Couple, Amis', 'Restaurant'),
('mardi_gras', 'Mardi Gras', 'Hull', 'Seul, Famille, Couple, Amis', 'Bar'),
('marina', 'Marina d\'Aylmer', 'Aylmer', 'Seul, Famille, Couple, Amis', 'Chill'),
('minotaure', 'Le Minotaure', 'Aylmer', 'Famille, Couple, Amis', 'Bar'),
('musee_histoire_canadien', 'Musée canadien de l\'histoire', 'Hull', 'Seul, Famille, Couple, Amis', 'Chill'),
('noche_maya', 'Noche Maya', 'Gatineau', 'Famille, Couple, Amis', 'Gatineau'),
('nordik_spa_nature', 'Nordik Spa-Nature', 'Gatineau', 'Seul, Famille, Couple, Amis', 'Chill'),
('pacini', 'Restaurant Pacini', 'Hull', 'Famille, Couple, Amis', 'Restaurant'),
('parc_de_la_gatineau', 'Parc de la Gatineau', 'Gatineau', 'Seul, Famille, Couple, Amis', 'Chill, Activite_sportive'),
('parc_moussette', 'Parc Moussette', 'Aylmer', 'Seul, Famille, Couple, Amis', 'Chill'),
('piscine_municipale_aylmer', 'Piscine Municipale d\'Aylmer', 'Aylmer', 'Seul, Famille, Couple, Amis', 'Chill, Activite_sportive'),
('portugalos', 'Restaurant Portgalos', 'Gatineau', 'Famille, Couple, Amis', 'Restaurant'),
('promenades', 'Les Promenades Gatineau', 'Gatineau', 'Seul, Famille, Couple, Amis', 'Chill, Fast-Food, Magasinage'),
('putting_edge', 'Nepean Putting Edge', 'Ottawa', 'Famille, Couple, Amis', 'Chill'),
('restaurant_lacademie', 'Restaurant L\'Académie', 'Gatineau', 'Famille, Couple, Amis', 'Restaurant'),
('rideau', 'CF Rideau Centre', 'Ottawa', 'Seul, Famille, Couple, Amis', 'Chill, Fast-food, Magasinage'),
('roulas', 'Roulas', 'Gatineau', 'Seul, Famille, Couple, Amis', 'Restaurant'),
('serenite_bubble_tea', 'Sérénité Bubble Tea', 'Aylmer', 'Seul, Famille, Couple, Amis', 'Chill'),
('shaker', 'Shaker', 'Gatineau', 'Famille, Couple, Amis', 'Restaurant, Bar'),
('st_hubert', 'St-Hubert', 'Aylmer', 'Seul, Famille, Couple, Amis', 'Restaurant'),
('starcite', 'Cinéma Starcité', 'Gatineau', 'Seul, Famille, Couple, Amis', 'Chill'),
('sterling', 'Sterling', 'Gatineau', 'Famille, Couple, Amis', 'Restaurant'),
('terminus', 'Le Terminus', 'Hull', 'Seul, Famille, Couple, Amis', 'Bar'),
('warehouse', 'El Furniture Warehouse', 'Ottawa', 'Seul, Famille, Couple, Amis', 'Restaurant, Bar'),
('waterfront_gastropub', 'The Waterfront Gastropub', 'Ottawa', 'Seul, Famille, Couple, Amis', 'Restaurant, Bar'),
('zaks', 'Zak\'s Diner', 'Ottawa', 'Famille, Couple, Amis', 'Restaurant');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
