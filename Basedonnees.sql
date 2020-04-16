
CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
);

--
-- Déchargement des données de la table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Soupe', 'sp', 'img/food/soupe.jpg', 15.00),
(2, 'Spagui', 'spa', 'img/food/spagui.jpg', 34.00),
(3, 'Meat', 'mea', 'img/food/meat.jpg', 74.00),
(4, 'Passtilla', 'pas', 'img/food/passtilla.jpg', 45.00),
(5, 'Poisson', 'poi', 'img/food/poisson.jpg', 55.00),
(6, 'Salade', 'sal', 'img/food/salade.jpg', 12.00),
(7, 'Lasagne', 'lasa', 'img/food/lasagne.jpg', 30.00),
(8, 'Grattain', 'gra', 'img/food/grattain.jpg', 40.00);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `zip` int(225) NOT NULL
);

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `city`, `zip`) VALUES
(1, 'Ouiam El', 'ouiam@email.com', 'ouiam123', '230 Bat.3', 'Agadir', 1000),
(2, 'Hassnae', 'Hassnae@email.com', 'hassnae123', 'RABAT35', 'Rabat', 10200);

--
-- Structure de la table `panier`
--


CREATE TABLE `panier`(
 `id` INT NOT NULL AUTO_INCREMENT,
  `id_client` INT NOT NULL,
  `id_produit` INT NOT NULL,
  `quantite` INT(20) NOT NULL,
  `prix_total` DOUBLE NOT NULL
);


--
-- Déchargement des données de la table `panier`
--
INSERT INTO `panier` (`id`, `id_client`, `id_produit`, `quantite`, `prix_total`) VALUES
(1, 1, 7, 2, 24.00),
(2, 2, 3, 1, 74.00);



--
-- Index pour les tables déchargées
--


--
-- Index pour la table `panier`
--

ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);
  

--
-- Constraints for table `panier`
--
ALTER TABLE `panier`
 ADD CONSTRAINT `panier_user_FK` FOREIGN KEY (`id_client`) REFERENCES `users` (`id_client`);
ALTER TABLE `panier`
 ADD CONSTRAINT `panier_Produit_FK` FOREIGN KEY (`id_produit`) REFERENCES `tblproduct` (`id_produit`);


--
-- Index pour la table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
