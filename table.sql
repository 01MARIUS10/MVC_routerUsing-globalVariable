DROP TABLE IF EXISTS `articles`;
DROP TABLE IF EXISTS `categories`;
DROP TABLE IF EXISTS `authors`;

DROP DATABASE IF EXISTS `mvc_database`;
CREATE DATABASE `mvc_database`;

USE `mvc_database`;
CREATE TABLE IF NOT EXISTS `article`
(
    `id_article` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `article_title` VARCHAR(65) NOT NULL DEFAULT " ",
    `article_content` TEXT NOT NULL ,
    `article_date` DATETIME DEFAULT NOW(),
    `article_authorId` INT NOT NULL DEFAULT 1,
    `article_categorieId` INT NOT NULL DEFAULT 1
);
CREATE TABLE IF NOT EXISTS `categorie`
(
    `id_categorie` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `categorie_name` VARCHAR(65) NOT NULL
);
CREATE TABLE IF NOT EXISTS `member`
(
    `id_member` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `member_firstname` VARCHAR(65) NOT NULL, 
	`member_lastname` VARCHAR(65) NOT NULL, 
	`member_birthdate` DATE NOT NULL, 
	`member_tel` CHAR(10)
);
INSERT INTO `categorie`(`categorie_name`) 
VALUES ('blague'),('etude'),('meditation'),('informatif'),('opinion');

INSERT INTO `member`(`member_firstname`,`member_lastname`,`member_birthdate`,`member_tel`)
VALUES 
('John Christopher', 'DEPP II', '1963-06-09', '0606060606'),
('Cyril', 'HANOUNA', '1974-09-23', '0611220044'),
('Adrien', 'NOUGARET', '1990-03-01', '2309457112'),
('Jaoued ', 'DAOUKI', '1987-08-18', '0612345678'),
('Kenny ', 'VANDERBECKEN', '1420-10-31', '0612345678');

INSERT INTO `article`(`article_title`,`article_content`)
VALUES 
('First publish','Voici mon premier publication encore implementer dans la requete brute de mysql'),
('le buz du siecle',"aujourd'hui ,encore des personnes ont ete kidnapper puis relacher et aucun hypothese n'est formellement logique" ),
('First publish','Voici mon premier publication encore implementer dans la requete brute de mysql'),
('le buz du siecle',"aujourd'hui ,encore des personnes ont ete kidnapper puis relacher et aucun hypothese n'est formellement logique" ),
('First publish','Voici mon premier publication encore implementer dans la requete brute de mysql'),
('le buz du siecle',"aujourd'hui ,encore des personnes ont ete kidnapper puis relacher et aucun hypothese n'est formellement logique" ),
('First publish','Voici mon premier publication encore implementer dans la requete brute de mysql'),
('le buz du siecle',"aujourd'hui ,encore des personnes ont ete kidnapper puis relacher et aucun hypothese n'est formellement logique" ),
('First publish','Voici mon premier publication encore implementer dans la requete brute de mysql'),
('le buz du siecle',"aujourd'hui ,encore des personnes ont ete kidnapper puis relacher et aucun hypothese n'est formellement logique" ),
('First publish','Voici mon premier publication encore implementer dans la requete brute de mysql'),
('le buz du siecle',"aujourd'hui ,encore des personnes ont ete kidnapper puis relacher et aucun hypothese n'est formellement logique" ),
('First publish','Voici mon premier publication encore implementer dans la requete brute de mysql'),
('le buz du siecle',"aujourd'hui ,encore des personnes ont ete kidnapper puis relacher et aucun hypothese n'est formellement logique" ),
('First publish','Voici mon premier publication encore implementer dans la requete brute de mysql'),
('le buz du siecle',"aujourd'hui ,encore des personnes ont ete kidnapper puis relacher et aucun hypothese n'est formellement logique" ),
('First publish','Voici mon premier publication encore implementer dans la requete brute de mysql'),
('le buz du siecle',"aujourd'hui ,encore des personnes ont ete kidnapper puis relacher et aucun hypothese n'est formellement logique" ),
('First publish','Voici mon premier publication encore implementer dans la requete brute de mysql'),
('First publish','Voici mon premier publication encore implementer dans la requete brute de mysql'),
('le buz du siecle',"aujourd'hui ,encore des personnes ont ete kidnapper puis relacher et aucun hypothese n'est formellement logique" ),
('First publish','Voici mon premier publication encore implementer dans la requete brute de mysql'),
('le buz du siecle',"aujourd'hui ,encore des personnes ont ete kidnapper puis relacher et aucun hypothese n'est formellement logique" ),
('First publish','Voici mon premier publication encore implementer dans la requete brute de mysql'),
('le buz du siecle',"aujourd'hui ,encore des personnes ont ete kidnapper puis relacher et aucun hypothese n'est formellement logique" ),
('le buz du siecle',"aujourd'hui ,encore des personnes ont ete kidnapper puis relacher et aucun hypothese n'est formellement logique" ),
('First publish','Voici mon premier publication encore implementer dans la requete brute de mysql'),
('le buz du siecle',"aujourd'hui ,encore des personnes ont ete kidnapper puis relacher et aucun hypothese n'est formellement logique" );


