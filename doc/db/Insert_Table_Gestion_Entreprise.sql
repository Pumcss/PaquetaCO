-- Insertion dans la table Tuteur_Ecole
INSERT INTO Tuteur_Ecole (idTut, nomTut, prenomTut, numTut, mailTut, loginTut, mdpTut, roleTut, nbalterTut)
VALUES (1, 'Goudet', 'Magali', '1234567890', 'tuteur@email.com', 'Mgoudet', '1234', 'Admin', 3);
INSERT INTO Tuteur_Ecole (idTut, nomTut, prenomTut, numTut, mailTut, loginTut, mdpTut, roleTut, nbalterTut)
VALUES (2, 'Echarpe', 'Charle', '1234567890', 'tuteur@gmail.com', 'Echarle', '56789', 'Tuteur', 3);
INSERT INTO Tuteur_Ecole (idTut, nomTut, prenomTut, numTut, mailTut, loginTut, mdpTut, roleTut, nbalterTut)
VALUES (3, 'Satta', 'Med', '1234567890', 'tuteur@gmail.com', 'Smedhi', '56789', 'Tuteur', 4);
INSERT INTO Tuteur_Ecole (idTut, nomTut, prenomTut, numTut, mailTut, loginTut, mdpTut, roleTut, nbalterTut)
VALUES (4, 'Balais', 'Pat', '1234567890', 'tuteur@gmail.com', 'Pbalais', '56789', 'Tuteur', 6);
INSERT INTO Tuteur_Ecole (idTut, nomTut, prenomTut, numTut, mailTut, loginTut, mdpTut, roleTut, nbalterTut)
VALUES (5, 'Rahaimi', 'Wal', '1234567890', 'tuteur@gmail.com', 'Smedhi', '56789', 'Tuteur', 5);
INSERT INTO Tuteur_Ecole (idTut, nomTut, prenomTut, numTut, mailTut, loginTut, mdpTut, roleTut, nbalterTut)
VALUES (6, 'Dupont', 'Ad', '1234567890', 'tuteur@gmail.com', 'Adupont', '56789', 'Tuteur', 5);
INSERT INTO Tuteur_Ecole (idTut, nomTut, prenomTut, numTut, mailTut, loginTut, mdpTut, roleTut, nbalterTut)
VALUES (7, 'Thouverez', 'Bap', '1234567890', 'tuteur@gmail.com', 'Bthouverez', '56789', 'Tuteur', 5);

-- Insertion dans la table Entreprise
INSERT INTO Entreprise (idEntre, nomEntre, codePostEntre, adresseEntre, villeEntre)
VALUES (1, 'C3RB INFORMATIQUE', '69003', '3 Pl.Pierre Renaudel', 'Lyon');
INSERT INTO Entreprise (idEntre, nomEntre, codePostEntre, adresseEntre, villeEntre)
VALUES (2, 'N-DATASAVE ', '69008', '55 Bd des États-Unis', 'Lyon');
INSERT INTO Entreprise (idEntre, nomEntre, codePostEntre, adresseEntre, villeEntre)
VALUES (3, 'Passman ', '69100', '4 rue Edouard Aynard ', 'Villeurbanne');
INSERT INTO Entreprise (idEntre, nomEntre, codePostEntre, adresseEntre, villeEntre)
VALUES (4, '69pixl ', '69003', '6 Cr Lafayette', 'Lyon');
INSERT INTO Entreprise (idEntre, nomEntre, codePostEntre, adresseEntre, villeEntre)
VALUES (5, 'Paqueta&co ', '69008', '33 Rue Marius Berliet', 'Lyon');

-- Insertion dans la table Maitre_entreprise
INSERT INTO Maitre_entreprise (idMaitre, nomMaitre, prenomMaitre, telMaitre, mailMaitre_)
VALUES (1, 'Bernier', 'Marie', '0123456789', 'maitre@email.com');
INSERT INTO Maitre_entreprise (idMaitre, nomMaitre, prenomMaitre, telMaitre, mailMaitre_)
VALUES (2, 'Berangaria', 'Thibault', '0123456789', 'maitre@email.com');
INSERT INTO Maitre_entreprise (idMaitre, nomMaitre, prenomMaitre, telMaitre, mailMaitre_)
VALUES (3, 'Rochefort', 'Fitz', '0123456789', 'maitre@email.com');
INSERT INTO Maitre_entreprise (idMaitre, nomMaitre, prenomMaitre, telMaitre, mailMaitre_)
VALUES (4, 'Lanctot', 'Jessamine', '0123456789', 'maitre@email.com');
INSERT INTO Maitre_entreprise (idMaitre, nomMaitre, prenomMaitre, telMaitre, mailMaitre_)
VALUES (5, 'Kaci', 'Branis', '0123456789', 'maitre@email.com');

-- Insertion dans la table parametre_
INSERT INTO parametre_ (idParametre, dateLimitebil1, dateLimitebil2)
VALUES (1, '2024-05-01', '2024-07-25');

-- Insertion dans la table classe
INSERT INTO classe (idClasse, nomClasse)
VALUES (1, '2_Bts_Sio_Slam');
INSERT INTO classe (idClasse, nomClasse)
VALUES (2, '1_Bts_Sio_Slam');

-- Insertion dans la table Etudiant
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (1, 'Kaci', 'Branis', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Bkaci', '1234', 'Slam',TRUE, 1, 3);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (2, 'Larbi', 'Ilias', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Ilarbi', '1234', 'Slam',TRUE, 1, 3);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (3, 'Fromage', 'Anthony', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Afromage', '1234', 'Slam',TRUE, 1, 3);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (4, 'Mhrizer', 'Jessim', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Jmhrizer', '1234', 'Slam',TRUE, 1, 3);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (5, 'Baudoy', 'Romain', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Rbaudoy', '1234', 'Slam',TRUE, 1, 1);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (6, 'Kebriti', 'Eddy', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Ekebriti', '1234', 'Slam',TRUE, 1, 1);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu, valideEtu ,idClasse, idTut)
VALUES (7, 'Berns', 'Benjamin', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Bberns', '1234', 'Slam',TRUE, 1, 1);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (8, 'Pichon', 'Lucas', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Lpichon', '1234', 'Slam',TRUE, 1, 2);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu, valideEtu ,idClasse, idTut)
VALUES (9, 'Nekkour', 'Ayoub', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Anekkour', '1234', 'Slam',TRUE, 1, 2);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (10, 'Nidam', 'Mamoune', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Mnidam', '1234', 'Slam',TRUE, 1, 2);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (11, 'Bach', 'Loris', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Lbach', '1234', 'Slam',TRUE, 1, 4);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (12, 'Boissie', 'Angel', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Abossie', '1234', 'Slam',TRUE, 1, 4);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu, idClasse, idTut)
VALUES (13, 'Tran', 'Quangh_hieu', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Qtran', '1234', 'Slam',TRUE, 1, 5);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (14, 'Meunier', 'Anthony', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Ameunier', '1234', 'Slam',TRUE, 1, 6);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (15, 'Yazbek', 'Rachel', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Ryazbek', '1234', 'Slam',TRUE, 1, 7);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu, valideEtu ,idClasse, idTut)
VALUES (16, 'Lamy', 'Florence', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Lflorence', '1234', 'Slam',TRUE, 2, 7);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (17, 'Hiver', 'Eulalie ', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Heulalie', '1234', 'Slam',TRUE, 2, 7);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (18, 'Lamy', 'Florence', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Lflorence', '1234', 'Slam',TRUE, 2, 7);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu, valideEtu ,idClasse, idTut)
VALUES (19, 'Lebel', 'Soren ', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Lsoren', '1234', 'Slam',TRUE, 2, 7);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu, valideEtu ,idClasse, idTut)
VALUES (20, 'Bérard', 'Dixie', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Bdixie', '1234', 'Slam', TRUE,2, 6);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (21, 'Sansouci', 'Talbot', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Stalbot', '1234', 'Slam',TRUE, 2, 6);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (22, 'Rancourt', 'Fitz', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Rfitz', '1234', 'Slam',TRUE, 2, 6);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (23, 'Barrette', 'Antoinette', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Bantoinette', '1234', 'Slam', TRUE,2, 6);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (24, 'Norbert', 'Pauline', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Npauline', '1234', 'Slam',TRUE, 2, 5);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (25, 'Archambault', 'Genevre', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Agenevre ', '1234', 'Slam',TRUE, 2, 5);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (26, 'Sung', 'You', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Syou ', '1234', 'Slam',TRUE, 2, 5);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (27, 'Blondlot', 'Astolpho', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Bastolpho ', '1234', 'Slam', TRUE,2, 5);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (28, 'Moïse', 'Robert', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Bastolpho ', '1234', 'Slam',TRUE, 2, 4);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (29, 'Poissonnier', 'Merlin', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'PMerlin ', '1234', 'Slam',TRUE, 2, 4);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (30, 'Brisette', 'Lirienne ', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Blirienne ', '1234', 'Slam',TRUE, 2, 4);
INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu, mailEtu, telEtu, photoEtu, loginEtu, mdpEtu, speEtu,valideEtu , idClasse, idTut)
VALUES (31, 'Belisle', 'Amber', 'etudiant@email.com', '0123456789', 'lien_vers_photo.jpg', 'Bamber ', '1234', 'Slam',TRUE, 2, 4);
-- Insertion dans la table Bilan_2
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (1, '2023-11-24', 18.5, 18.2, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 1);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (2, '2023-11-24', 17.5, 18.5, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 2);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (3, '2023-11-24', 17.5, 17.2, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 3);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (4, '2023-11-24', 17.5, 19.2, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 4);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (5, '2023-11-24', 20, 20, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 5);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (6, '2023-11-24', 20, 20, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 6);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (7, '2023-11-24', 19, 19.2, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 7);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (8, '2023-11-24', 17.5, 18.5, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 8);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (9, '2023-11-24', 17.5, 17.2, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 9);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (10, '2023-11-24', 17.5, 19.2, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 10);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (11, '2023-11-24', 17.5, 18.5, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 11);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (12, '2023-11-24', 17.5, 18.5, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 12);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (13, '2023-11-24', 17.5, 17.2, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 13);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (14, '2023-11-24', 17.5, 19.2, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 14);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (15, '2023-11-24', 17.5, 18.5, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 15);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (16, '2023-11-24', 17.5, 18.5, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 16);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (17, '2023-11-24', 17.5, 18.5, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 17);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (18, '2023-11-24', 17.5, 18.5, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 18);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (19, '2023-11-24', 17.5, 18.5, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 19);
INSERT INTO Bilan_2 (idBil2, dateBil2, notedosBil2, noteoralBil2, remarqueBil2, memoirBil2, idEtu)
VALUES (20, '2023-11-24', 17.5, 18.5, 'Remarque sur le Bilan 2', 'Contenu du mémoire', 20);

-- Insertion dans la table Bilan_1
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (1, '2023-11-23', 18.8, 17.7, 15.1, 'Remarque sur le Bilan 1', 1);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (2, '2023-11-23', 16.8, 16.7, 15.1, 'Remarque sur le Bilan 1', 2);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (3, '2023-11-23', 16.8, 18.7, 15.1, 'Remarque sur le Bilan 1', 3);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (4, '2023-11-23', 17.8, 19.7, 15.1, 'Remarque sur le Bilan 1', 4);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (5, '2023-11-23', 20, 20, 20, 'Remarque sur le Bilan 1', 5);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (6, '2023-11-23', 20, 19.5, 20, 'Remarque sur le Bilan 1', 6);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (7, '2023-11-23', 17.2, 16.2, 15.1, 'Remarque sur le Bilan 1', 7);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (8, '2023-11-23', 18.8, 17.7, 15.1, 'Remarque sur le Bilan 1', 8);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (9, '2023-11-23', 16.8, 16.7, 15.1, 'Remarque sur le Bilan 1', 9);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (10, '2023-11-23', 16.8, 18.7, 15.1, 'Remarque sur le Bilan 1', 10);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (11, '2023-11-23', 17.8, 19.7, 15.1, 'Remarque sur le Bilan 1', 11);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (12, '2023-11-23', 18.8, 17.7, 15.1, 'Remarque sur le Bilan 1', 12);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (13, '2023-11-23', 16.8, 16.7, 15.1, 'Remarque sur le Bilan 1', 13);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (14, '2023-11-23', 16.8, 18.7, 15.1, 'Remarque sur le Bilan 1', 14);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (15, '2023-11-23', 17.8, 19.7, 15.1, 'Remarque sur le Bilan 1', 15);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (16, '2023-11-23', 17.8, 19.7, 15.1, 'Remarque sur le Bilan 1', 16);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (17, '2023-11-23', 17.8, 19.7, 15.1, 'Remarque sur le Bilan 1', 17);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (18, '2023-11-23', 17.8, 19.7, 15.1, 'Remarque sur le Bilan 1', 18);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (19, '2023-11-23', 17.8, 19.7, 15.1, 'Remarque sur le Bilan 1', 19);
INSERT INTO Bilan_1 (idBil1, datevisiteBil1, notedosBil1, noteentreil1, noteoraleBil1, remarqueBil1, idEtu)
VALUES (20, '2023-11-23', 17.8, 19.7, 15.1, 'Remarque sur le Bilan 1', 20);

:
-- Insertion dans la table etre42 
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (5, 5, 1);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (5, 5, 2);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (5, 5, 3);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (5, 5, 4);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (1, 1, 5);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (1, 1, 6);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (1, 1, 7);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (2, 2, 8);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (2, 2, 9);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (2, 2, 10);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (3, 3, 11);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (3, 3, 12);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (3, 3, 13);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (4, 4, 14);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (4, 4, 15);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (4, 4, 16);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (4, 4, 17);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (3, 3, 18);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (3, 3, 19);
INSERT INTO etre (idEntre, idMaitre, idEtu)VALUES (2, 2, 20);

