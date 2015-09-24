CREATE DATABASE CNRS;

CREATE TABLE Laboratoire(
Id_Laboratoire int(5) PRIMARY KEY NOT NULL,
nom_laboratory varchar(256) NOT NULL,
Ville varchar(256),
Adresse varchar(256),
Profession varchar(256)
);


CREATE TABLE atelier(
ID_Atelier int(5) PRIMARY KEY,
theme varchar(256) NOT NULL,
type varchar(256),
Date_and_Horaires varchar(256) NOT NULL,
Remarque varchar(256),
Id_Laboratory int(5) NOT NULL,
Lieu varchar(256) NOT NULL,
Duree_Atelier varchar(256),
Capacite varchar(256),
Inscription varchar(256),
Description varchar(256),
animateur varchar(256),
partenaires varchar(256),
public varchar(256),
content varchar(256)
);

ALTER TABLE atelier ADD FOREIGN KEY (Id_Laboratory) references Laboratoire(Id_Laboratoire);