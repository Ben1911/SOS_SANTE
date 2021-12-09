-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 09 déc. 2021 à 18:35
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sos_sante`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertionAir` (IN `designation` VARCHAR(50))  NO SQL
BEGIN

   INSERT INTO `airdesante`(`Designation`) VALUES(designation);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertionPreconsultation` (IN `id_` INT(50), IN `Temperation_` VARCHAR(50), IN `Tension_` VARCHAR(50), IN `FrequenceCardiaque_` VARCHAR(50), IN `FrequenceRespiration_` VARCHAR(50), IN `SaturationEnOxygene_` VARCHAR(50), IN `IdMalade_` INT(50), IN `IdMedecin_` INT(50))  NO SQL
BEGIN

 if NOT EXISTS (select Id from preconsultation WHERE Id=id_) THEN 
  INSERT INTO `preconsultation`(`Temperation`, `Tension`, `FrequenceCardiaque`, `FrequenceRespiration`, `SaturationEnOxygene`, `IdMalade`, `IdMedecin`) VALUES (Temperation_, Tension_, FrequenceCardiaque_, FrequenceRespiration_, SaturationEnOxygene_, IdMalade_, IdMedecin_);
  
  ELSE 
  
  UPDATE preconsultation SET Temperation=Temperation_, Tension= Tension_, FrequenceCardiaque=FrequenceCardiaque_, FrequenceRespiration=FrequenceRespiration_, SaturationEnOxygene=SaturationEnOxygene_, IdMalade=IdMalade_, IdMedecin=IdMedecin_    WHERE Id=id_;
  end IF;
  
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertionQualite` (IN `id_` INT(50), IN `designation__` VARCHAR(50))  NO SQL
BEGIN 

if NOT EXISTS(SELECT Id FROM qualite WHERE Id=id_) THEN
INSERT INTO `qualite`(`Designation`) VALUES(designation__);
ELSE
UPDATE qualite SET Designation=designation__ WHERE Id=id_;
end if;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertionZone` (IN `designation_` VARCHAR(50), IN `airDeSante` INT)  NO SQL
BEGIN

	INSERT INTO `zonedesante`( `Designation_`, `IdAir`) VALUES 
    (designation_,airdesante);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertMalade` (IN `nomComplet_` VARCHAR(50), IN `sexe_` VARCHAR(10), IN `phone_` VARCHAR(50), IN `adresse_` VARCHAR(50), IN `nationalite_` VARCHAR(50), IN `province_` VARCHAR(50), IN `id_` INT(50))  NO SQL
BEGIN

if not EXISTS (SELECT id from malade WHERE id=id_) THEN 

    INSERT INTO `malade` (`Id`, `nomComplet`, `sexe`, `Phone`, `Adresse`, `nationalite`, `province`, `dateadd`) VALUES (null,nomComplet_,sexe_ ,phone_,adresse_,nationalite_,province_,CURRENT_DATE);
    ELSE 
    UPDATE malade SET nomComplet=nomComplet_, sexe=sexe_,Phone=Phone_,Adresse=adresse_,nationalite=nationalite_,province=province_ WHERE Id=id_;
   END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertMedecin` (IN `nomComplet_` VARCHAR(50), IN `sexe_` VARCHAR(20), IN `phone_` VARCHAR(50), IN `email_` VARCHAR(50), IN `adresse_` VARCHAR(50), IN `profil_` TEXT, IN `id_` INT(50), IN `pswd_` VARCHAR(50))  NO SQL
BEGIN

if not EXISTS (SELECT id from medecin WHERE id=id_) THEN 

	INSERT INTO `medecin` (`id`, `nomComplet`, `sexe`, `idqualite`, `phone`, 	`email`, `adresse`, `pswd`, `profil`, `dateadd`) VALUES (NULL, 			nomComplet_, sexe_, '1', phone_, email_,adresse_,pswd_, profil_, CURRENT_DATE);
    
    ELSE
    UPDATE medecin SET nomComplet=nomComplet_,sexe=sexe_,phone=phone_,email=email_,adresse=adresse_, pswd=pswd_ WHERE id=id_;
end if;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertUser` (IN `id_` INT, IN `nomuser_` VARCHAR(50), IN `pswd_` VARCHAR(50), IN `niveau_` INT, IN `idMedecin_` INT, IN `Etat_` INT)  NO SQL
BEGIN

if not EXISTS(SELECT id FROM administrateur WHERE id=id_) THEN

INSERT INTO `administrateur`(`nomuser`, `pswd`, `niveau`, `idMedecin`, `Etat`) VALUES (nomuser_, md5(pswd_), niveau_, idMedecin_, Etat_);
ELSE
  UPDATE administrateur SET nomuser = nomuser_, pswd= md5(pswd_), niveau=niveau_,     idMedecin=idMedecin_, Etat=Etat_  WHERE id=id_;
 end if;
 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `testAdmin` (IN `nom_` VARCHAR(50), IN `pass_` VARCHAR(50))  NO SQL
SELECT * FROM administrateur WHERE nomuser=nom_ AND pswd=pass_ OR pswd=md5(pass_)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL,
  `nomuser` varchar(50) DEFAULT NULL,
  `pswd` varchar(50) DEFAULT NULL,
  `niveau` int(11) NOT NULL,
  `idMedecin` int(11) NOT NULL,
  `Etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nomuser`, `pswd`, `niveau`, `idMedecin`, `Etat`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `affectation`
--

CREATE TABLE `affectation` (
  `Id` int(11) DEFAULT NULL,
  `DateAffectation` date DEFAULT NULL,
  `Motif` varchar(100) DEFAULT NULL,
  `IdResultat` int(11) DEFAULT NULL,
  `IdMedecin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `airdesante`
--

CREATE TABLE `airdesante` (
  `Id` int(11) NOT NULL,
  `Designation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `airdesante`
--

INSERT INTO `airdesante` (`Id`, `Designation`) VALUES
(1, 'Karisimbi'),
(3, 'BUJOVU'),
(4, 'Albert Bartel'),
(5, 'Kasika'),
(6, 'Amani'),
(7, 'Katoyi');

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `Id` int(11) NOT NULL,
  `DateConsultation` date NOT NULL DEFAULT current_timestamp(),
  `Detail` varchar(100) DEFAULT NULL,
  `IdPreConsultation` int(11) DEFAULT NULL,
  `IdMedecin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `examin`
--

CREATE TABLE `examin` (
  `Id` int(11) NOT NULL,
  `DateExamin` date DEFAULT NULL,
  `Designation` varchar(100) DEFAULT NULL,
  `IdTypeExamin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `malade`
--

CREATE TABLE `malade` (
  `Id` int(11) NOT NULL,
  `NomComplet` varchar(100) DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Adresse` varchar(100) DEFAULT NULL,
  `nationalite` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `dateadd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `malade`
--

INSERT INTO `malade` (`Id`, `NomComplet`, `sexe`, `Phone`, `Adresse`, `nationalite`, `province`, `dateadd`) VALUES
(10, 'molo', 'MASCULIN', '0987653', 'mabanga-sud', 'congolaise', 'nord-kivu', '2021-12-06'),
(11, 'molo molo', 'MASCULIN', '0987653', 'mabanga-sud', 'congolaise', 'nord-kivu', '2021-12-06'),
(12, 'molo pacifique', 'FEMININ', '0987653', 'mabanga-sud', 'congolaise', 'nord-kivu', '2021-12-06'),
(13, 'ekya ben bav', 'MASCULIN', '0987653', 'mabanga-sud', 'congolaise', 'nord-kivu', '2021-12-06'),
(14, 'molo', 'MASCULIN', '0978765330', 'Q. ndosho', 'Congolaise', 'Nord-kivu', '2021-12-06'),
(15, 'willson ss', 'MASCULIN', '0987653', 'mabanga-sud', 'congolaise', 'nord-kivu', '2021-12-06');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `id` int(11) NOT NULL,
  `nomComplet` varchar(100) DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `idqualite` int(11) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `pswd` varchar(50) DEFAULT NULL,
  `profil` text DEFAULT NULL,
  `dateadd` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`id`, `nomComplet`, `sexe`, `idqualite`, `phone`, `email`, `adresse`, `pswd`, `profil`, `dateadd`) VALUES
(2, 'SALAS SALAS', 'MASCULIN', 1, '0987653', 'molo@gmail.com', 'Katoyi', 'manager', '1638940017_IMG_3827.jpg', '2021-12-08'),
(3, 'molo molo', 'MASCULIN', 1, '0987653', 'molo@gmail.com', 'Q. Mabanga sud', 'molo', '1638940455_IMG_3827.jpg', '2021-12-08'),
(4, 'ben ben', 'MASCULIN', 1, '0987653', 'molo@gmail.com', 'Q. Murara', 'ben', 'ben ben1638940651_IMG_4035.jpg', '2021-12-08'),
(5, 'MANAGER', 'FEMININ', 1, '0987653', 'molo@gmail.com', 'Himbi 1', 'manager', 'MANAGER1638941773_IMG_3828.jpg', '2021-12-08');

-- --------------------------------------------------------

--
-- Structure de la table `preconsultation`
--

CREATE TABLE `preconsultation` (
  `Id` int(11) NOT NULL,
  `DatePrecons` date NOT NULL DEFAULT current_timestamp(),
  `Temperation` varchar(50) DEFAULT NULL,
  `Tension` varchar(50) DEFAULT NULL,
  `FrequenceCardiaque` varchar(50) DEFAULT NULL,
  `FrequenceRespiration` varchar(50) DEFAULT NULL,
  `SaturationEnOxygene` varchar(50) DEFAULT NULL,
  `IdMalade` int(11) DEFAULT NULL,
  `IdMedecin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `qualite`
--

CREATE TABLE `qualite` (
  `Id` int(11) NOT NULL,
  `Designation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `qualite`
--

INSERT INTO `qualite` (`Id`, `Designation`) VALUES
(1, 'Chef de division'),
(2, 'Chef d\'equipe'),
(3, 'Coordonateur');

-- --------------------------------------------------------

--
-- Structure de la table `traitement`
--

CREATE TABLE `traitement` (
  `Id` int(11) NOT NULL,
  `Designation` varchar(100) DEFAULT NULL,
  `IdAffectation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `typeexamin`
--

CREATE TABLE `typeexamin` (
  `Id` int(11) NOT NULL,
  `Designation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_listeconsultation`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_listeconsultation` (
`Id` int(11)
,`DateC` date
,`Malade` varchar(100)
,`Temperation` varchar(50)
,`Tension` varchar(50)
,`FrequenceCardiaque` varchar(50)
,`FrequenceRespiration` varchar(50)
,`SaturationEnOxygene` varchar(50)
,`Detail` varchar(100)
,`Docteur` varchar(100)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_listemedecin`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_listemedecin` (
`id` int(11)
,`nomComplet` varchar(100)
,`sexe` varchar(10)
,`idqualite` varchar(50)
,`phone` varchar(20)
,`email` varchar(50)
,`pswd` varchar(50)
,`adresse` varchar(100)
,`profil` text
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_listezone`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_listezone` (
`Id` int(11)
,`ZoneDeSante` varchar(50)
,`airDeSante` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure de la table `zonedesante`
--

CREATE TABLE `zonedesante` (
  `Id` int(11) NOT NULL,
  `Designation_` varchar(50) DEFAULT NULL,
  `IdAir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `zonedesante`
--

INSERT INTO `zonedesante` (`Id`, `Designation_`, `IdAir`) VALUES
(6, 'Goma', 3),
(7, 'Karisimbi', 7),
(8, 'Goma', 6);

-- --------------------------------------------------------

--
-- Structure de la vue `v_listeconsultation`
--
DROP TABLE IF EXISTS `v_listeconsultation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_listeconsultation`  AS  select `pre`.`Id` AS `Id`,`pre`.`DatePrecons` AS `DateC`,`m`.`NomComplet` AS `Malade`,`pre`.`Temperation` AS `Temperation`,`pre`.`Tension` AS `Tension`,`pre`.`FrequenceCardiaque` AS `FrequenceCardiaque`,`pre`.`FrequenceRespiration` AS `FrequenceRespiration`,`pre`.`SaturationEnOxygene` AS `SaturationEnOxygene`,`c`.`Detail` AS `Detail`,`med`.`nomComplet` AS `Docteur` from (((`malade` `m` join `preconsultation` `pre` on(`m`.`Id` = `pre`.`IdMalade`)) join `medecin` `med` on(`med`.`id` = `pre`.`IdMedecin`)) join `consultation` `c` on(`pre`.`Id` = `c`.`IdPreConsultation`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `v_listemedecin`
--
DROP TABLE IF EXISTS `v_listemedecin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_listemedecin`  AS  select `m`.`id` AS `id`,`m`.`nomComplet` AS `nomComplet`,`m`.`sexe` AS `sexe`,`q`.`Designation` AS `idqualite`,`m`.`phone` AS `phone`,`m`.`email` AS `email`,`m`.`pswd` AS `pswd`,`m`.`adresse` AS `adresse`,`m`.`profil` AS `profil` from (`medecin` `m` join `qualite` `q` on(`q`.`Id` = `m`.`idqualite`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `v_listezone`
--
DROP TABLE IF EXISTS `v_listezone`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_listezone`  AS  select `z`.`Id` AS `Id`,`z`.`Designation_` AS `ZoneDeSante`,`ar`.`Designation` AS `airDeSante` from (`airdesante` `ar` join `zonedesante` `z` on(`ar`.`Id` = `z`.`IdAir`)) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkIdMedecinAdmin` (`idMedecin`);

--
-- Index pour la table `airdesante`
--
ALTER TABLE `airdesante`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fkpreconsultation` (`IdPreConsultation`),
  ADD KEY `fkMedecin1` (`IdMedecin`);

--
-- Index pour la table `examin`
--
ALTER TABLE `examin`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fkTypeExamin` (`IdTypeExamin`);

--
-- Index pour la table `malade`
--
ALTER TABLE `malade`
  ADD PRIMARY KEY (`Id`) USING BTREE;

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IdQualite` (`idqualite`);

--
-- Index pour la table `preconsultation`
--
ALTER TABLE `preconsultation`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fkmalade` (`IdMalade`),
  ADD KEY `fkmedecin` (`IdMedecin`);

--
-- Index pour la table `qualite`
--
ALTER TABLE `qualite`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `traitement`
--
ALTER TABLE `traitement`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fkAffectation` (`IdAffectation`);

--
-- Index pour la table `typeexamin`
--
ALTER TABLE `typeexamin`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `zonedesante`
--
ALTER TABLE `zonedesante`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fkAir` (`IdAir`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `airdesante`
--
ALTER TABLE `airdesante`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `examin`
--
ALTER TABLE `examin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `malade`
--
ALTER TABLE `malade`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `qualite`
--
ALTER TABLE `qualite`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `traitement`
--
ALTER TABLE `traitement`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `typeexamin`
--
ALTER TABLE `typeexamin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `zonedesante`
--
ALTER TABLE `zonedesante`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD CONSTRAINT `fkIdMedecinAdmin` FOREIGN KEY (`idMedecin`) REFERENCES `medecin` (`id`);

--
-- Contraintes pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `fkMedecin1` FOREIGN KEY (`IdMedecin`) REFERENCES `medecin` (`id`),
  ADD CONSTRAINT `fkpreconsultation` FOREIGN KEY (`IdPreConsultation`) REFERENCES `preconsultation` (`Id`);

--
-- Contraintes pour la table `examin`
--
ALTER TABLE `examin`
  ADD CONSTRAINT `fkTypeExamin` FOREIGN KEY (`IdTypeExamin`) REFERENCES `typeexamin` (`Id`);

--
-- Contraintes pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `medecin_ibfk_1` FOREIGN KEY (`idqualite`) REFERENCES `qualite` (`Id`);

--
-- Contraintes pour la table `preconsultation`
--
ALTER TABLE `preconsultation`
  ADD CONSTRAINT `fkmalade` FOREIGN KEY (`IdMalade`) REFERENCES `malade` (`Id`),
  ADD CONSTRAINT `fkmedecin` FOREIGN KEY (`IdMedecin`) REFERENCES `medecin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
