CREATE DATABASE  immobilier;
\c immobilier

CREATE TABLE type(
  id varchar(2) PRIMARY KEY,
  valeur VARCHAR(20)
);

CREATE TABLE habitation(
  id SERIAL primary key,
  idtype VARCHAR(20),
  nombreDeChambre INTEGER,
  loyerparjour DOUBLE PRECISION,
  image VARCHAR(100),
  quartier VARCHAR(50),
  description TEXT,
  nblits INTEGER,
  foreign key (idtype) references type (id)
);

CREATE TABLE users(
  id SERIAL primary key,
  email VARCHAR(50),
  password VARCHAR(50),
  pseudo VARCHAR(30),
  tel VARCHAR(30),
  Nationalite VARCHAR(50),
  estAdmin INTEGER
);

CREATE TABLE reservation(
  id SERIAL primary key,
  idMaison INTEGER,
  idUser INTEGER,
  dateentree DATE,
  datesortie DATE,
  service DOUBLE PRECISION,
  prixtotal DOUBLE PRECISION,
  foreign key (idMaison) references habitation (id),
  foreign key (idUser) references habitation (id)
);

/*INSERTION TYPES*/
INSERT INTO TYPE VALUES ('T1','Maison');
INSERT INTO TYPE VALUES ('T2','Appartement');
INSERT INTO TYPE VALUES ('T3','Studio');


/*INSERTION USERS*/
INSERT INTO users (email,password,pseudo,tel,Nationalite,estAdmin)
VALUES('admin@gmail.com','Orambeee!','administrateur','0383803838','Malgache','1');

INSERT INTO users (email,password,pseudo,tel,Nationalite,estAdmin)
VALUES('jean@gmail.com','1234567!','JeanCharles','0321212312','Français','0');

/*INSERTION HABITATION*/
INSERT INTO habitation (type,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T1',3,195.0,,,,'',,3);
INSERT INTO habitation (type,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T1',1,90.0,,,,,,2);
INSERT INTO habitation (type,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T1',3,275.0,,,,,,);
INSERT INTO habitation (type,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T1',3,200.0,,,,,,);
INSERT INTO habitation (type,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T1',3,230.0,,,,,,);
INSERT INTO habitation (type,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T2',3,75.0,,,,,,);
INSERT INTO habitation (type,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T2',3,170.0,,,,,,);
INSERT INTO habitation (type,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T2',3,135.0,,,,,,);
INSERT INTO habitation (type,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T2',3,150.0,,,,,,);
INSERT INTO habitation (type,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T2',3,110.0,,'Black river, Maurice',,
,'Un bel appartement moderne, B3  au deuxième étage, est une chambre entièrement indépendante en suite.  Elle dispose de sa propre cuisine et d'un espace de divertissement avec une piscine privée. Télévision et wifi disponibles, climatisation.  Le service de nettoyage est disponible tous les jours sauf le dimanche et les jours fériés. Les vues sont incroyables depuis notre appartement surplombant la Rivière Noire et Tamarin avec les couchers de soleil les plus exquis. Piscine commune dans les beaux jardins et à 20m de la plage.'
,);
INSERT INTO habitation (type,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T3',3,95.0,,,,,,);
INSERT INTO habitation (type,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T3',3,80.0,,,,,,);