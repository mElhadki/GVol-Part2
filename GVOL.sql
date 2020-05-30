

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `GVOL`
--

-- --------------------------------------------------------

--
-- Structure de la table `passager`
--

CREATE TABLE `passager` (
  `Id_Passager` int(11) NOT NULL,
  `Nom` varchar(254) DEFAULT NULL,
  `Prenom` varchar(254) DEFAULT NULL,
  `Num_Passport` varchar(254) DEFAULT NULL,
  `Id_U` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_Reservation` int(11) NOT NULL,
  `Id_U` int(11) NOT NULL,
  `id_Vol` int(11) NOT NULL,
  `Date_Reservation` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déclencheurs `reservation`
--
DELIMITER $$
CREATE TRIGGER `ReservationNom` AFTER INSERT ON `reservation` FOR EACH ROW BEGIN

DECLARE SelectIdV INT; 
set SelectIdV= NEW.id_Vol;
UPDATE vol set NbPlace = NbPlace - 1 where id_Vol=SelectIdV;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `Id_U` int(11) NOT NULL,
  `UserName` varchar(254) DEFAULT NULL,
  `Passworde` varchar(254) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `statusU` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Id_U`, `UserName`, `Passworde`, `email`, `statusU`) VALUES
(1, 'Mariem', 'Admin123', 'elhadkimariem3@gmail.com', 'Admin'),


-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

CREATE TABLE `vol` (
  `id_Vol` int(11) NOT NULL,
  `LieuDepart` varchar(254) DEFAULT NULL,
  `LieuArrive` varchar(254) DEFAULT NULL,
  `DateDepart` date DEFAULT NULL,
  `DateArrive` date DEFAULT NULL,
  `NbPlace` int(11) DEFAULT NULL,
  `Prix` float DEFAULT NULL,
  `statusV` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vol`
--

INSERT INTO `vol` (`id_Vol`, `LieuDepart`, `LieuArrive`, `DateDepart`, `DateArrive`, `NbPlace`, `Prix`, `statusV`) VALUES
(1, 'Marrakech', 'Paris', '2020-05-08', '2020-05-08', 50, 5000, 'Active'),
(2, 'Marrakech', 'Paris', '2020-06-08', '2020-06-08', 50, 5000, 'Desactive'),
(3, 'Marrakech', 'Paris', '2020-12-08', '2020-12-08', 50, 5000, 'Active'),
(12, 'Marrakech', 'Lyon', '2020-05-26', '2020-05-27', 40, 10000, 'Active');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `passager`
--
ALTER TABLE `passager`
  ADD PRIMARY KEY (`Id_Passager`),
  ADD KEY `Id_U` (`Id_U`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_Reservation`),
  ADD KEY `FK_RESERVAT_ASSOCIATI_CLIENT` (`Id_U`),
  ADD KEY `FK_RESERVAT_ASSOCIATI_VOL` (`id_Vol`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_U`);

--
-- Index pour la table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`id_Vol`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `passager`
--
ALTER TABLE `passager`
  MODIFY `Id_Passager` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_Reservation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `Id_U` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `vol`
--
ALTER TABLE `vol`
  MODIFY `id_Vol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `passager`
--
ALTER TABLE `passager`
  ADD CONSTRAINT `passager_ibfk_1` FOREIGN KEY (`Id_U`) REFERENCES `users` (`Id_U`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_RESERVAT_ASSOCIATI_CLIENT` FOREIGN KEY (`Id_U`) REFERENCES `users` (`Id_U`),
  ADD CONSTRAINT `FK_RESERVAT_ASSOCIATI_VOL` FOREIGN KEY (`id_Vol`) REFERENCES `vol` (`id_Vol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
