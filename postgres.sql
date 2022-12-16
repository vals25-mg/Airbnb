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
VALUES('admin@gmail.com','Orambeee!','administrateur','0383803838','Malgache',1);

INSERT INTO users (email,password,pseudo,tel,Nationalite,estAdmin)
VALUES('jean@gmail.com','1234567!','JeanCharles','0321212312','Français',0);

/*INSERTION HABITATION*/
INSERT INTO habitation (idtype,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T1',3,195.0,'Maison1.jpg','Stanford, Afrique du Sud',
'Poplar est un chalet en bois construit sur mesure, situé à côté d un ruisseau de gargouillements parmi des peupliers imposants.  Il est situé dans une petite ferme, à 22 km du village pittoresque de Stanford.',
3);
INSERT INTO habitation (idtype,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T1',1,90.0,'Maison2.jpg','Kiserian, Kenya'
,'Le château de Champagne Ridge est l escapade écologique hors réseau de Nairobi.  Profitez d une vue imprenable depuis sa position sur la falaise surplombant la vallée du Grand Rift et la campagne environnante. '
,2);
INSERT INTO habitation (idtype,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T1',3,275.0,'Maison3.jpg','Kamala, Thaïlande'
,'Une vue fascinante sur le flanc de la montagne de Kamala vous plaira pendant le séjour. La villa est située à seulement 4 minutes d une magnifique plage dans une baie paisible de la mer d Andaman. Un air frais incroyablement propre, un magnifique jardin, une zone de loisirs bien équipée avec badminton et terrains de volley-ball – tout est créé pour un repos confortable et une solitude sereine avec la nature. Cette villa est comme un petit univers qui a incarné toutes les avancées de la civilisation.'
,2);
INSERT INTO habitation (idtype,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T1',5,200.0,'Maison4.jpg','Pondichéry, Inde',
'Le Tranquil - une villa moderne primée avec une architecture contemporaine et un espace de vie merveilleusement conçu offrant une abondance de lumière naturelle et d air frais. '
,4);
INSERT INTO habitation (idtype,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T1',4,230.0,'Maison5.jpg','Plettenberg Bay, Afrique du Sud'
,'Simple and elegant, this architectural masterpiece loves letting the ocean breeze flow through its nature-inspired interiors. Just as easily, you will wander freely from inside to out, enjoying the pool deck, fire pit, pizza oven, and of course, the incredible ocean view. Spend the day hiking nearby trails, relaxing on the beach, or shooting pool at home. At night, head into Cape Town for dinner.'
,2);
INSERT INTO habitation (idtype,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T1',2,230.0,'Maison6.jpg','Tofinho, Mozambique'
,'Doté d un charmant patio parfait pour observer les baleines dans les mois froids. Conçus dans un esprit naturel, nos clients seront enchantés par le jardin et le petit coin légumes disponibles pour ceux qui recherchent un repas frais tout droit venu de la Terre nourricière. '
,2);
INSERT INTO habitation (idtype,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T1',6,230.0,'Maison7.jpg','La Canée, Grèce'
,'Bedroom 1 - Master: King size bed, Ensuite bathroom with stand-alone rain shower, Television, Safe, Terrace'
,4);
INSERT INTO habitation (idtype,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T2',2,75.0,'Appartement1.jpg','Chamonix-Mont-Blanc, France'
,'Renaissance Prestige Properties vous propose le chalet 5* Black Pearl situé à Chamonix-Mont-Blanc. Il bénéficie d’un emplacement idéal au pied des montagnes et à proximité de la télécabine La Flégère.'
,1);
INSERT INTO habitation (idtype,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T2',3,170.0,'Appartement2.jpg','Pigra, Italie'
,'Construite en 1909 sur le site d une tour de guet médiévale, cette villa de style Liberty offre une vue imprenable sur le lac. Détendez-vous au soleil sur la piscine à débordement enveloppante, jouez aux cartes au piano-bar et prenez l ascenseur jusqu au salon de billard ou à la cheminée sur la terrasse sur le toit. La vaste villa est riche en histoire, mais la décoration minimaliste donne un ton tranquille. Vous pouvez marcher 8 minutes jusqu à Pigra.'
,2);
INSERT INTO habitation (idtype,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T2',4,135.0,'Appartement3.jpg','Mengwi, Indonésie'
,'The Seseh House by Omen Residences is a Sustainable Hideaway Situé à 50 mètres de la plage dans un village balinais traditionnel de Seseh .
Une maison privée complexe, ouverte, de conception traditionnelle située dans un village calme et serein à quelques minutes d une plage isolée.
Escapade idéale pour les familles, les surfeurs et les visiteurs qui souhaitent s immerger dans un cadre balinais simple , pieds nus et authentique, mais à dix minutes des boutiques et restaurants à la mode de Canggu.'
,3);

INSERT INTO habitation (idtype,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T2',2,110.0,'Appartement4.jpg','Black river Maurice'
,'Un bel appartement moderne, B3  au deuxième étage, est une chambre entièrement indépendante en suite. Elle dispose de sa propre cuisine et d un espace de divertissement avec une piscine privée. Télévision et wifi disponibles, climatisation.  Le service de nettoyage est disponible tous les jours sauf le dimanche et les jours fériés. Les vues sont incroyables depuis notre appartement surplombant la Rivière Noire et Tamarin avec les couchers de soleil les plus exquis. Piscine commune dans les beaux jardins et à 20m de la plage.'
,1);
INSERT INTO habitation (idtype,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T3',1,80.0,'Studio1.jpg','Kaş, Turquie'
,'L enceinte des villas comprend une piscine d environ 7,6 x 3,6 mètres de dimensions, profondeur de 1,55 mètres. Il y a une table à manger extérieure, un parasol et deux chaises longues pour les invités.
Avec une superficie de seulement 25 m2, la conception des chambres varie de celles des villas plus traditionnelles. Il est situé sur un sol en mezzanine sous le toit. La hauteur du toit est limitée ici, mais les voyageurs peuvent dormir sous le ciel nocturne à travers la grande fenêtre du toit au-dessus du lit.
Le rez-de-chaussée dispose de tous les articles nécessaires pour les vacanciers, y compris un canapé, un coin cuisine avec lave-vaisselle, etc., plus une salle de bains compacte. Il y a une connexion Wi-Fi et une place de parking disponibles à côté de la propriété.'
,1);
INSERT INTO habitation (idtype,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T3',1,95.0,'Studio2.jpg','Arumeru, Tanzanie'
,'Un magnifique chalet de style chalet avec une vue imprenable sur le Mont Meru et les vallées environnantes.
Le chalet est sur 2,5 acres de terrain avec beaucoup de jeunes arbres et d herbe. Il est calme, serein, relaxant et donc parfait pour se détendre loin du chaos de la ville.
Vous pourrez également profiter de nos espaces sociaux tels que le restaurant sur place, le salon et les zones de feu de camp.
Vous pouvez également consulter nos annonces plus petites « Cabine privée et restaurant » et « Cabine privée avec vue panoramique » sur la même propriété.'
,1);
INSERT INTO habitation (idtype,nombreDeChambre,loyerparjour,image,quartier,description,nblits) 
VALUES ('T3',1,80.0,'Studio3.jpg','Amirim, Israël'
,'Détendez-vous dans ce logement calme et élégant.
Cette cabane d une chambre est située en bordure du village d Amirim, offrant une vue imprenable sur la montagne ainsi qu une grande fenêtre sur la mer de Galilée, une retraite paisible pour ceux qui recherchent une escapade tranquille en pleine nature, avec un jacuzzi extérieur sous les étoiles.'
,1);