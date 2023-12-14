CREATE TABLE Tuteur_Ecole(
   idTut INT,
   nomTut VARCHAR(50),
   prenomTut VARCHAR(50),
   numTut VARCHAR(10),
   mailTut VARCHAR(100),
   loginTut VARCHAR(40),
   mdpTut VARCHAR(50),
   roleTut VARCHAR(50),
   nbalterTut INT,
   CONSTRAINT Tuteur_Ecole_PK PRIMARY KEY(idTut)
)ENGINE = INNODB;

CREATE TABLE Entreprise(
   idEntre INT,
   nomEntre VARCHAR(50),
   codePostEntre VARCHAR(10),
   adresseEntre VARCHAR(50),
   villeEntre VARCHAR(20),
   CONSTRAINT Entreprise_PK PRIMARY KEY(idEntre)
)ENGINE = INNODB;

CREATE TABLE Maitre_entreprise(
   idMaitre INT,
   nomMaitre VARCHAR(50),
   prenomMaitre VARCHAR(50),
   telMaitre VARCHAR(50),
   mailMaitre_ VARCHAR(50),
   CONSTRAINT Maitre_entreprise_PK PRIMARY KEY(idMaitre)
)ENGINE = INNODB;

CREATE TABLE parametre_(
   idParametre INT,
   dateLimitebil1 DATE,
   dateLimitebil2 DATE,
   CONSTRAINT parametre_PK PRIMARY KEY(idParametre)
)ENGINE = INNODB;

CREATE TABLE classe(
   idClasse INT,
   nomClasse VARCHAR(50),
   CONSTRAINT classe_PK PRIMARY KEY(idClasse)
)ENGINE = INNODB;

CREATE TABLE Etudiant(
   idEtu INT,
   nomEtu VARCHAR(50),
   prenomEtu VARCHAR(50),
   mailEtu VARCHAR(50),
   telEtu VARCHAR(50),
   photoEtu VARCHAR(110),
   loginEtu VARCHAR(50),
   mdpEtu VARCHAR(50),
   speEtu VARCHAR(50),
   valideEtu BOOLEAN  default false,
   idClasse INT NOT NULL,
   idTut INT NOT NULL,
   CONSTRAINT Etudiant_PK PRIMARY KEY(idEtu),
   CONSTRAINT Etudiant_FK FOREIGN KEY(idClasse) REFERENCES classe(idClasse),
   CONSTRAINT Etudiant_TK FOREIGN KEY(idTut) REFERENCES Tuteur_Ecole(idTut)
)ENGINE = INNODB;

CREATE TABLE Bilan_2(
   idBil2 INT,
   dateBil2 DATE,
   notedosBil2 DECIMAL(20,2),
   noteoralBil2 DECIMAL(20,2),
   remarqueBil2 VARCHAR(50),
   memoirBil2 VARCHAR(500),
   idEtu INT NOT NULL,
  CONSTRAINT Bilan_2_Pk PRIMARY KEY(idBil2),
  CONSTRAINT Bilan_2_FK FOREIGN KEY(idEtu) REFERENCES Etudiant(idEtu)
)ENGINE = INNODB;

CREATE TABLE Bilan_1(
   idBil1 INT,
   datevisiteBil1 DATE,
   notedosBil1 DECIMAL(20,2),
   noteentreil1 DECIMAL(20,2),
   noteoraleBil1 DECIMAL(20,2),
   remarqueBil1 VARCHAR(115),
   idEtu INT NOT NULL,
   PRIMARY KEY(idBil1),
   FOREIGN KEY(idEtu) REFERENCES Etudiant(idEtu)
)ENGINE = INNODB;

CREATE TABLE etre(
   idEntre INT,
   idMaitre INT,
   idEtu INT,
   CONSTRAINT etre_PK PRIMARY KEY(idEntre, idMaitre, idEtu),
   CONSTRAINT etre_FK FOREIGN KEY(idEntre) REFERENCES Entreprise(idEntre),
   CONSTRAINT etre_GK FOREIGN KEY(idMaitre) REFERENCES Maitre_entreprise(idMaitre),
   CONSTRAINT etre_LK FOREIGN KEY(idEtu) REFERENCES Etudiant(idEtu)
)ENGINE = INNODB;
