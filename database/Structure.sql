/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  max
 * Created: 30 nov. 2017
 */

CREATE DATABASE IF NOT EXISTS leboncoin
CHARSET utf8mb4 
DEFAULT COLLATE utf8mb4_general_ci;


CREATE TABLE IF NOT EXISTS leboncoin.utilisateur
(
    id_utilisateur INT unsigned NOT NULL AUTO_INCREMENT,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(150) NOT NULL DEFAULT '',
    nom VARCHAR(50) NOT NULL DEFAULT '',
    prenom VARCHAR(50) NOT NULL DEFAULT '',
    date_create DATETIME NOT NULL DEFAULT NOW(),
    date_update DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
    active BOOLEAN DEFAULT TRUE,
    deleted BOOLEAN DEFAULT FALSE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE utf8mb4_general_ci AUTO_INCREMENT=1;



CREATE TABLE IF NOT EXISTS leboncoin.categorie
(
    id_categorie INT unsigned NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL DEFAULT '',
    date_create DATETIME NOT NULL DEFAULT NOW(),
    date_update DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
    active BOOLEAN DEFAULT TRUE,
    deleted BOOLEAN DEFAULT FALSE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE utf8mb4_general_ci AUTO_INCREMENT=1;




CREATE TABLE IF NOT EXISTS leboncoin.annonce
(
    id_annonce INT unsigned NOT NULL AUTO_INCREMENT,
    id_utilisateur INT unsigned NOT NULL,
    id_categorie INT unsigned NOT NULL
    titre VARCHAR(100) NOT NULL DEFAULT '',
    contenu TEXT NOT NULL DEFAULT '',
    prix FLOAT(5,2) NOT NULL DEFAULT '0.00',
    date_create DATETIME NOT NULL DEFAULT NOW(),
    date_update DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
    active BOOLEAN DEFAULT TRUE,
    deleted BOOLEAN DEFAULT FALSE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE utf8mb4_general_ci AUTO_INCREMENT=1;

ALTER TABLE leboncoin.annonce
ADD CONSTRAINT fk_annonce_utilisateur FOREIGN KEY (id_utilisateur)
REFERENCES leboncoin.utilisateur(id_utilisateur);

ALTER TABLE leboncoin.annonce
ADD CONSTRAINT fk_annonce_categorie FOREIGN KEY (id_categorie)
REFERENCES leboncoin.categorie(id_categorie);