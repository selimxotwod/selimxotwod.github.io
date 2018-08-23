-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 12 Novembre 2015 à 18:24
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `s_intensive`
--

CREATE TABLE `s_intensive` (
  `id` int(11) NOT NULL,
  `marque` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_edition` date DEFAULT NULL,
  `date_creation` date NOT NULL,
  `prix` int(11) NOT NULL,
  `genre` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `s_intensive`
--

INSERT INTO `s_intensive` (`id`, `marque`, `nom`, `description`, `image`, `date_edition`, `date_creation`, `prix`, `genre`) VALUES
(16, 'YEEZY Season 1', 'Bottes noires YEEZY 950', 'Bottines mi-mollet en caoutchouc noir ''pirate'' à tige en tissu tissé gris charbon. Bout rond. Laçage ton sur ton et garniture en suède aux œillets. Écusson en suède avec logo gravé à la languette Tirant au col avec coutures contrastées rouge. Doublure matelassée à la cheville. Semelle dentelée en caoutchouc noir. Coutures ton sur ton. ', 'yeezi.jpg', NULL, '2015-11-12', 705, 'homme'),
(17, 'Balmain', 'Baskets à enfiler noires et dorées en poil de veau ', 'Baskets à enfiler en poil de veau noires. Bout rond. Goussets élastiques dissimulés sous la garniture en cuir sur les côtés. Semelle dorée en caoutchouc. Coutures ton sur ton.   Veuillez noter que cet item peut être expédié au Canada exclusivement. Upper: leather, calf-hair. Sole: rubber. Lieu de fabrication : Italie.', 'balmain.jpg', '2015-11-12', '0000-00-00', 950, 'femme'),
(19, 'Fendi', 'Chaussures à enfiler noires et bleues en peau retournée ', 'Chaussures basses en cuir noires. Bout rond. Panneaux en cuir grainé au quartier et au talon. Panneau en cuir poli sur le bout. Goussets élastiques sur les côtés de la languette. Panneau et tirant rouges au talon. Garniture en peau retournée bleu royal au col. Semelle blanche et noire en caoutchouc', 'fendi.jpg', NULL, '2015-11-12', 520, 'femme'),
(23, 'Y-3', 'Baskets noires Retro Boost édition Adidas ', 'Baskets structurées noires. Bout rond avec couche en caoutchouc et empiècement en cuir. Laçage en tissu superposé à un laçage élastique. Tirant en forme de bride au contrefort du talon. Semelle intercalaire emblématique Boost. Semelle en caoutchouc blanc.', 'yoji.jpg', NULL, '2015-11-12', 435, 'femme'),
(25, 'Raf Simons', 'Baskets noires adidas by RAF SIMONS Response Trail ', 'Baskets basses en tissu et cuir noir. Texture variée alternée avec pièce de caoutchouc à facette en caoutchouc sur l''ensemble. Bout rond. Laçage ton sur ton. Logo à la languette matelassée. Lanière à charnières en plastique noir au talon. Couche extérieure enveloppante avec passepoil contrasté. Semelle épaisse en caoutchouc. Lanière de plastique bordeaux et bleue comprise. Coutures ton sur ton.', 'raf.jpg', NULL, '2015-11-12', 440, 'homme'),
(27, 'Rick Owens', 'Baskets noires et blanches Island Sole adidas par Rick Owens ', 'Baskets basses en suède noir. Bout rond en cuir noir. Laçage ton sur ton. Languette prolongée en cuir noir. Col coussiné. Semelle façon îlot en caoutchouc blanc. ', 'owens.jpg', NULL, '2015-11-12', 575, 'homme'),
(28, 'YEEZY Season 1', 'Bottes crème Yeezy 950 ', 'Bottines mi-mollet en caoutchouc crème ''turtle dove'' à tige en tissu tissé. Bout rond. Laçage ton sur ton et garniture en suède aux œillets. Écusson en suède avec logo gravé à la languette à soufflets. Tirant au col avec coutures contrastées rouge. Doublure matelassée à la cheville. ', 'yeezy_1.jpg', '2015-11-12', '2015-11-12', 705, 'femme'),
(29, 'Robert Clergerie', 'Bottines chelsea noires en caoutchouc et en cuir Give ', 'Bottines chelsea en cuir noires. Panneaux en caoutchouc mat sur le bout et au contrefort du talon. Goussets élastiques sur les côtés du col. Tirant au col du talon. Semelle et coutures ton sur ton.', 'robert.jpg', NULL, '2015-11-12', 550, 'homme'),
(30, 'Giuseppe Zanotti', 'Baskets à boucles en velours noir', 'Baskets montantes en cuir et en velours noir. Bout rond avec empiècement en cuir métallisé doré. Ornements dorés. Deux plaque de métal et bandes à Velcro au laçage ton sur ton. Logo plaqué or à la languette à soufflets matelassée. Lanière matelassée en cuir au col du talon. Empiècement en cuir noir sur le côté. Plaque du logo et couture blanche contrastée à la semelle.', 'zano.jpg', NULL, '2015-11-12', 845, 'homme'),
(31, 'Lanvin', 'Derbys noirs et blancs en cuir', 'Derbys en cuir de veau poli noirs. Bout rond. Laçage enduit noir. Garniture en cuir blanc au col du talon. Talon bloc et semelle intercalaire en cuir noir. Semelle crantée en caoutchouc blanc. Coutures ton sur ton.', 'lanvin_1.jpg', NULL, '2015-11-12', 650, 'homme'),
(32, 'Calvin Klein Collection', 'Bottes noires en cuir et en tissu Gomma', 'Bottines à enfiler en cuir brossé noires. Bout rond. Panneau en tissu élastique ton sur ton à la cheville avec écusson du logo en cuir à l''avant. Tirant au col du talon. Ferrures gris acier avec gravure du logo au contrefort du talon. Semelle creeper en caoutchouc noir. Coutures ton sur ton. Talon d''environ 3,8 cm de hauteur et plateforme d''environ 2,5 cm de hauteur. ', 'calvin.jpg', NULL, '2015-11-12', 430, 'homme'),
(33, 'Maison Margiela', 'Bottes noires contrastées en cuir et en suède ', 'Bottines en cuir verni noire avec panneau en suède grainé ton sur ton sur le côté intérieur. Bout en amande. Fermeture à glissière sur l''intérieur de la cheville. Talon bloc en cuir. Semelle en cuir brun clair. Coutures ton sur ton.', 'margiela.jpg', NULL, '2015-11-12', 640, 'homme'),
(34, 'Maison Kitsuné', 'Baskets classiques beiges en toile ', 'Baskets basses en toile beiges. Bout rond. Laçage blanc de style oxford. Semelle blanche en caoutchouc avec logo noir à l''arrière du talon. Coutures ton sur ton. ', 'kitsune.jpg', NULL, '2015-11-12', 290, 'homme'),
(35, 'Valentino', 'Baskets noires en suède et en cuir Rockstud ', 'Baskets basses en cuir poli noires. Garniture en suède ton sur ton sur l''ensemble. Bout rond. Laçage ton sur ton. Écusson du logo sur la languette. Clous pyramidaux en caoutchouc aux quartiers et au contrefort du talon. Semelle intercalaire en caoutchouc beige. Semelle extérieure crantée en caoutchouc noir. ', 'valentino.jpg', NULL, '2015-11-12', 640, 'homme'),
(36, 'Kenzo', 'Baskets basses blanches et bleues Sonic', 'Baskets basses blanches et bleues. Panneaux mat, en caoutchouc poli et en tissu en alternance sur l''ensemble. Bout rond. Laçage ton sur ton avec effet superposé aux œillets. Panneau en tissu bleu et blanc avec revêtement en filet bleu sur l''ensemble. Appliqué du logo en caoutchouc sur la languette. Logo au contrefort du talon. Semelle et coutures ton sur ton. Plateforme dissimulée d''environ 4 cm de hauteur. ', 'kenzo.jpg', NULL, '2015-11-12', 0, 'homme'),
(37, 'Kenzo', 'Baskets de course à imprimés variés', 'Baskets basses en néoprène bleues, rouges, orange et jaunes. Garniture en cuir sur l''ensemble. Imprimés graphiques variés sur l''ensemble. Bout rond. Laçage noir. Plaque du logo en caoutchouc noir et blanc sur la languette. Col coussiné. Garniture caoutchouteuse avec estampe du logo au contrefort du talon. Semelle intercalaire légère en caoutchouc mousse. Coutures ton sur ton. ', 'kenzo2.jpg', NULL, '2015-11-12', 265, 'homme'),
(38, 'adidas x Kolor', 'Baskets blanches Ultra Boost ', 'Baskets basses en maille "Primeknit" blanches. Garniture vert fluo au bout rond et à la doublure. Laçage ton sur ton. Écusson du logo sur la languette à soufflets. Tirant au col du talon coussiné. Logo argenté sur le côté extérieur de la cheville. Semelle intercalaire texturée en caoutchouc blanc. ', 'adidas.jpg', NULL, '2015-11-12', 285, 'homme'),
(39, 'Raf Simons', 'Basket silver adidas by RAF SIMONS Response Trail Robot', 'Basket basse en tissu et cuir argenté. Texture variée alternée en cuir brossé et panneau en filet. Oeillets surdimensionnés rouge et bleus avec lacets blanc cassé. Bout rond. Logo en caoutchouc translucide à la languette matelassée. Col matelassé. Semelle intercalaire argentée texturée.', 'raf2.jpg', NULL, '2015-11-12', 525, 'homme'),
(41, 'Versace', 'Baskets montantes noires en cuir Runway', 'Baskets basses en cuir poli noires. Bout rond. Panneaux multiples sur l''ensemble. Laçage en cuir noir. Bride Velcro à l''empeigne et au talon. Tête de Méduse emblématique embossée sur la languette. Fermeture à glissière sur un des côtés des œillets. Col en angle. Effet de panneaux en cuir aux parois de la semelle.', 'vercace.jpg', NULL, '2015-11-12', 950, 'homme'),
(42, 'Maison Margiela', 'Derbys noirs en cuir et en suède', 'Derbys en cuir poli noirs avec panneaux en suède grainé noir clair. Bout en amande. Laçage ton sur ton. Semelle en cuir. Coutures ton sur ton. Upper: leather. Sole: leather. Lieu de fabrication : Italie.', 'margiela2.jpg', NULL, '2015-11-12', 530, 'homme'),
(43, 'Loewe', 'Baskets basses noires et bleu marine en suède ', 'Baskets basses en suède contrastées noires et bleu marine. Bout rond. Laçage enduit bleu marine. Perforations sur les côtés. Logo gravé sur le côté extérieur de la cheville. Semelle texturée en gomme de caoutchouc. Coutures ton sur ton. Upper: leather. Sole: rubber. Lieu de fabrication : Italie.', 'lowe.jpg', NULL, '2015-11-12', 450, 'homme'),
(44, 'Visvim', 'Baskets bleu marine Foley Folk ', 'Baskets basses en suède bleu marine foncé. Bout rond. Laçage ton sur ton. Garniture en cuir blanc et étiquette du logo sur la languette. Panneau en cuir blanc au col du talon. Col coussiné. Semelle blanche en caoutchouc. Coutures ton sur ton. Leather. Importé.', 'visvim.jpg', NULL, '2015-11-12', 890, 'homme'),
(45, 'Fendi', 'Bottes noires en cuir Selleria ', ' Fendi  Bottes noires en cuir Selleria  52693M000031 Bottines en cuir poli noires avec garniture brune sur l''ensemble. Bout rond. Laçage modifié et fermeture à glissière à l''empeigne. Logo embossé sur la languette. Tirant au col du talon. Garniture en relief à la trépointe. Semelle en caoutchouc texturée. Coutures ton sur ton. Upper: leather. Sole: rubber. Lieu de fabrication : Italie.', 'fendi4.jpg', NULL, '2015-11-12', 890, 'homme'),
(46, 'Raf Simons', 'Baskets montantes bleu marine à Velcro', 'Baskets montantes en cuir poli bleu marine. Garniture en tissu nervuré ton sur ton sur l''ensemble. Bout rond. Bandes Velcro avec logo embossé à l''empeigne. Tirant au col du talon nervuré. Semelle en caoutchouc de marque Vibram. Coutures ton sur ton. Upper: leather. Sole: rubber Lieu de fabrication : Italie.', 'raf4.jpg', NULL, '2015-11-12', 750, 'homme'),
(47, 'AD Ann Demeulemeester', 'Baskets à enfiler noires et blanches Wingtip ', 'Baskets basses en suède noir et blanc cassé. Bout rond wingtip. Tirant au col du talon. Bande en suède à la trépointe. Semelle noire en caoutchouc. Coutures ton sur ton. Leather. Lieu de fabrication : Italie.', 'ann.jpg', NULL, '2015-11-12', 305, 'homme'),
(48, 'A.P.C.', 'Bottines noires à boucle Pyrenees ', 'Bottes mi-montantes en cuir noires. Bout rond. Laçage à l''empeigne avec crochets et languette extérieure. Bride à boucle à ardillon réglable à l''empeigne. Tirant au col du talon coussiné. Semelle étagée en caoutchouc et en liège. Coutures ton sur ton. Leather. Lieu de fabrication : Portugal.', 'apc.jpg', NULL, '2015-11-12', 410, 'homme'),
(49, 'Kenzo', 'askets à enfiler bleues et orange à tigres', 'Baskets basses à enfiler en toile mauve prune. Bout rond. Bande de renfort blanche au talon. Imprimé graphique de tigres emblématiques sur l''ensemble. Garniture en cuir ton sur ton sur la languette et au col du talon. Goussets élastiques sur les côtés de la languette. Col coussiné. Logo noir au talon. Semelle blanche en caoutchouc. Coutures ton sur ton. Tige: tissu. Semelle: synthétique.', 'kenzo3.jpg', NULL, '2015-11-12', 170, 'homme'),
(50, 'Givenchy', 'Sandales noires et bleues à boucles cloutées ', 'Sandales en cuir poli noires. Bout rond ouvert. Brides à boucles à ardillon réglables. Clous ronds argentés et cabochons en verre taillé bleus sur l''ensemble. Semelle intérieure moulée. Coutures ton sur ton. Leather. Lieu de fabrication : Italie.', 'given.jpg', NULL, '2015-11-12', 890, 'homme'),
(51, 'Off-White', 'Bottes de randonnée en suède à crampons à glace', 'Bottines de randonnée en suède noir. Bout rond renforcé. Anneaux en D et crochets argentés au laçage jaune. Garniture en cuir aux œillets. Tirants en tissu à la languette et au col du talon. Logo embossé sur le côté extérieur. Couture blanche contrastante à la trépointe. Semelle crantée épaisse en caoutchouc noir. Crampons à glace en métal rétractables à la semelle. Coutures ton sur ton.', 'off.jpg', NULL, '2015-11-12', 595, 'homme'),
(52, 'Comme des Garçons Play', 'Baskets montantes noires à cœur édition Converse ', 'Baskets montantes en toile noires. Bout rond renforcé en caoutchouc lustré blanc cassé. Laçage blanc. Cœur emblématique imprimé rouge sur le côté extérieur. Logo "All Star" emblématique imprimé sur le côté intérieur. Garniture en tissu blanc au talon. Semelle en caoutchouc blanc cassé. Coutures blanches contrastantes.', 'garcon.jpg', NULL, '2015-11-12', 145, 'homme'),
(53, 'Comme des Garçons Play', 'Baskets montantes blanches à coeur édition Converse ', 'Baskets montantes en toile noire. Laçage ton sur ton. Cœur emblématique imprimé rouge sur le côté extérieur. Deux œillets d''aération et logo "All Star" emblématique imprimé sur le côté intérieur. Garniture en tissu noir au talon. Bout rond renforcé et semelle en caoutchouc blanc cassé lustré. Coutures ton sur ton. ', 'garcon1.jpg', NULL, '2015-11-12', 145, 'homme'),
(54, 'Y-3', 'Baskets noires et blanches QR Knit ', 'Baskets en tissu et en cuir extensible noires et blanches. Textures variées avec panneau en maille au bout et à l''empeigne. Bout rond. Laçage ton sur ton. Col matelassé. Semelle en caoutchouc blanc cassé. Coutures ton sur ton. Tige: tissu, cuir. Semelle: caoutchouc. Importé.', 'y31.jpg', NULL, '2015-11-12', 435, 'homme'),
(55, 'Giuseppe Zanotti', 'Sandales à talons hauts argentées en cuir Coline', 'Sandales à talons hauts en cuir verni argentées ''shooting argento''. Bout en amande ouvert. Trois brides. Fermeture à glissière dissimulée au talon. Semelle en cuir brun clair. Coutures ton sur ton. Talon d''environ 12,5 cm de hauteur. Leather. Lieu de fabrication : Italie.', 'zanof.jpg', NULL, '2015-11-12', 595, 'femme'),
(56, 'Valentino', 'Bottines en cuir noires Rockstud', 'Bottines en cuir poli noires. Bout pointu. Brides à boucle à ardillon ornées de clous emblématiques à la cheville et au talon. Fermeture à glissière sur l''intérieur de la cheville. Talon bloc en cuir noir. Semelle en cuir brun clair. Ferrures argentées. Coutures ton sur ton. Talon d''environ 7,5 cm de hauteur. Tige: cuir. Semelle: cuir. Lieu de fabrication : Italie.', 'valenf.jpg', NULL, '2015-11-12', 1405, 'femme'),
(57, 'Versace', 'Baskets à enfiler rouges à Méduse', 'Baskets à enfiler en cuir verni rouges. Bout rond. Méduse lustrée noire en 3D à l''empeigne. Goussets élastiques sur les côtés. Col coussiné au talon. Semelle blanche en caoutchouc. Coutures ton sur ton. Tige: cuir. Semelle: caoutchouc. Lieu de fabrication : Italie.', 'versacef.jpg', NULL, '2015-11-12', 720, 'femme'),
(58, 'Haider Ackermann', 'Bottillons en cuir à talons aiguilles Bronson ', 'Bottillons en cuir brossé noirs. Bout rond. Fermeture à glissière à l''arrière. Talon aiguille cylindrique. Coutures ton sur ton. Talon d''environ 7 cm de hauteur. Leather. Lieu de fabrication : Italie.', 'haider.jpg', NULL, '2015-11-12', 1200, 'femme'),
(59, 'Saint Laurent', 'Bottes militaires lacées en cuir noires ', 'Bottines militaires en cuir verni noires. Bout rond. Laçage ton sur ton. Brides à boucles à ardillon cloutées à la cheville. Tirant en gros grain au col du talon. Semelle intercalaire texturée. Semelle crantée en caoutchouc noir. Coutures ton sur ton. Tige: cuir. Semelle: caoutchouc. Lieu de fabrication : Italie.', 'saint.jpg', NULL, '2015-11-12', 995, 'femme'),
(60, 'Helmut Lang', 'Escarpins noirs en suède à effet usé ', 'Escarpins en suède noirs. Effet usé sur l''ensemble. Bout en amande. Talon enduit de suède. Semelle en cuir brun clair. Coutures ton sur ton. Talon d''environ 9 cm de hauteur. Upper: leather. Sole: leather. Lieu de fabrication : Italie.', 'helmut.jpg', NULL, '2015-11-12', 635, 'femme'),
(61, 'Thom Browne', 'Chaussures oxford bleu marine en cuir Kiltie ', 'Chaussures en cuir de veau brossé bleu marine. Bout rond. Panneau amovible et réglable en cuir verni noir à franges à l''avant. Laçage oxford enduit noir. Tirant en gros grain tricolore emblématique au col du talon. Talon et semelle en cuir étagé. Garniture en métal à l''avant de la semelle', 'thom.jpg', NULL, '2015-11-12', 1170, 'femme'),
(62, 'Chloé', 'Bottes à plateformes rouges en cuir à boucle ', 'Bottines en cuir poli rouge. Bout rond. Bride à boucle à ardillon réglable à l''empeigne. Panneaux élastiques bruns sur les côtés. Tirant en cuir au col. Semelle intercalaire texturée en caoutchouc brun clair. Ferrures dorées. Coutures ton sur ton. Talon d''environ 10 cm de hauteur. Upper: leather. Sole: rubber. Lieu de fabrication : Italie.', 'chloe.jpg', NULL, '2015-11-12', 750, 'femme'),
(63, 'Chloé', 'Chaussures Mary Jane en suède rouge', 'Chaussures à talons hauts de style Mary Jane en suède mauve "bordeaux wine". Bout en amande. Bride à boucle à ardillon réglable à la cheville. Semelle en cuir brun clair. Coutures ton sur ton. Talon d''environ 5 cm de hauteur. Upper: leather. Sole: leather. Lieu de fabrication : Italie.', 'chloe1.jpg', NULL, '2015-11-12', 475, 'femme'),
(64, 'Giuseppe Zanotti', 'Sandales noir à boucles dorées Zak ', 'Sandales plates en cuir poli noir. Ornement en métal doré. Bout rond ouvert avec bride à l''orteil. Bride à l''empeigne avec fermoir fonctionnet avec logo gravé. Bride arrière à boucle à ardillon. Semelle et coutures ton sur ton. Leather. Lieu de fabrication : Italie.', 'zanoff.jpg', NULL, '2015-11-12', 665, 'femme'),
(65, 'Maison Margiela', 'Bottillons noirs scintillants', 'Bottillons mi-mollets en tissu et en cuir noirs. Effet scintillant sur l''ensemble. Bout carré. Fermeture à glissière sur le côté intérieur. Talon noir à effet bois avec empiècement superposé en acrylique transparent. Semelle en cuir brun clair. Coutures ton sur ton. Talon d''environ 8,9 cm de hauteur. Upper: textile. Sole: leather. Lieu de fabrication : Italie.', 'margielaf.jpg', NULL, '2015-11-12', 1395, 'femme'),
(66, 'Kenzo', 'Baskets à plateformes noires en suède', 'Baskets à enfiler en suède noires. Bout rond. Logo embossé ton sur ton à l''empeigne. Panneau en cuir et logo noir au col du talon coussiné. Plateforme texturée en caoutchouc blanc. Coutures ton sur ton. Plateforme d''environ 4,5 cm de hauteur. Upper: leather. Sole: rubber. Lieu de fabrication : Italie.', 'kenf.jpg', NULL, '2015-11-12', 280, 'femme'),
(67, 'A.P.C.', 'Baskets de tennis en cuir blanc Steffi', 'Baskets basses en cuir poli blanc cassé. Bout rond. Laçage blanc. Col matelassé. Oeillets latéraux perforés. Semelle en caoutchouc. Coutures ton sur ton. Tige: cuir. Semelle: caoutchouc. Lieu de fabrication : Portugal.', 'apcf.jpg', NULL, '2015-11-12', 265, 'femme'),
(68, 'Acne Studios', 'Escarpins roses Andrea Nappa ', 'Escarpins à talon haut en cuir poli vieux rose. Bout pointu. Accent 3D métallisé avec effet feuille d''or argenté au bout. Talon d''environ 8 cm de hauteur avec logo gravé à la base. Talon en cuir poli. Coutures ton sur ton. Leather. Lieu de fabrication : Italie.', 'acne.jpg', NULL, '2015-11-12', 450, 'femme'),
(69, 'Comme des Garçons Play', 'Chaussures à talons hauts blanches ', 'Chaussures basses à talons hauts en cuir poli blanches. Bout rond. Coutures ton sur ton. Semelle en caoutchouc mousse. Talon d''environ 5 cm de hauteur. Tige: cuir. Semelle: synthétique. Lieu de fabrication : Japon.', 'comme.jpg', NULL, '2015-11-12', 615, 'femme'),
(70, 'Marc by Marc Jacobs', 'Baskets blanches à plateforme et découpes Ninja', 'Baskets montantes blanches. Panneaux perforé avec couche supérieure en filet sur l''ensemble. Garniture en cuir et plastique sur l''ensemble. Bout rond. Laçage ton sur ton avec bande à oeillets crantés. Écusson du logo caoutchouté à la languette matelassé. Tirant au col oblique. ', 'marc.jpg', NULL, '2015-11-12', 505, 'femme'),
(71, 'Vetements', 'Bottines en cuir noir à talon plaqué doré', 'Bottines en cur poli noires. Bout pointu. Fermeture à glissière sur la face avant. Talon plaqué doré avec bout blanc contrasté. Semelle contrastée brun clair. Coutures ton sur ton. Talon d''environ 5 cm. Tige: cuir. Semelle: cuir. Lieu de fabrication : Italie.', 'vete.jpg', NULL, '2015-11-12', 835, 'femme'),
(72, 'Jimmy Choo', 'Escarpins rose en peau de serpent Anouk', 'Escarpins en peau de serpent rose pâle et gris. Bout pointu. Semelle en cuir brun clair. Coutures ton sur ton. Talon d''environ 12 cm.  Tige: cuir d''elaphe. Semelle: cuir. Lieu de fabrication : Italie.', 'jimy.jpg', NULL, '2015-11-12', 535, 'femme'),
(73, 'Rick Owens', 'Sandales cage noires en cuir ornementées', 'Sandales montantes à brides multiples de style cage en cuir brossé noires. Bout rond ouvert. Ferrures ternies à l''avant et à l''empeigne. Deux brides réglables avec boutons-bossette à la cheville. Fermeture à glissière au talon. Talon bloc et semelle en cuir avec découpe au talon. Panneau en caoutchouc ton sur ton à la semelle. Ferrures argentées. Coutures ton sur ton. Talon d''environ 5 cm de hauteur. Upper: leather. Sole: leather. Lieu de fabrication : Italie.', 'rickf.jpg', NULL, '2015-11-12', 1095, 'femme'),
(74, 'Pierre Hardy', 'Baskets noires et blanches à imprimé animal', 'Baskets basses en poil de veau brun et brun clair. Imprimé animal sur l''ensemble. Garniture noire lustrée et garniture poli blanche sur l''ensemble. Bout rond. Laçage noir. Bande Velcro ornée de fourrure à l''empeigne. Semelle en caoutchouc contrastante. Coutures ton sur ton. Upper: leather. Sole: rubber. Lieu de fabrication : Portuga', 'pierre.jpg', NULL, '2015-11-12', 850, 'femme'),
(75, 'Burberry London', 'Bottines noires en cuir Bamburgh', 'Bottines à talons hauts en cuir poli noir. Bout pointu. Fermeture à glissière sur le côté intérieur. Talon bottier en cuir. Motif à carreaux en métal doré en relief sur le côté intérieur du talon. Semelle en cuir. Coutures ton sur ton. Leather. Lieu de fabrication : Italie.', 'bube.jpg', NULL, '2015-11-12', 795, 'femme'),
(76, 'McQ Alexander Mcqueen', 'Derbys scintillantes gris acier ', 'Derbys en cuir couvertes de paillettes de couleur gris acier. Laçage enduit noir. Passepoil en cuir noir. Trépointe contrastée noire, marron, et blanche. Semelle en caoutchouc et semelle bottière noire. Coutures ton sur ton. Tige: cuir. Semelle: caoutchouc. Lieu de fabrication : Italie.', 'mcq.jpg', NULL, '2015-11-12', 410, 'femme');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `s_intensive`
--
ALTER TABLE `s_intensive`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `s_intensive`
--
ALTER TABLE `s_intensive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;