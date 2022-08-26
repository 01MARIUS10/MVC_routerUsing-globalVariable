-- DROP TABLE IF EXISTS `articles`;
-- DROP TABLE IF EXISTS `categories`;
-- DROP TABLE IF EXISTS `member`;
-- DROP TABLE IF EXISTS `message`;

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
	`member_pseudo` VARCHAR(20) NOT NULL,
    `member_birthdate` DATE NOT NULL, 
	`member_tel` CHAR(10),
    `member_password` CHAR(255) NOT NULL,
    `member_img` CHAR(255) DEFAULT '../assets/DB-img/profil/default.jpg'
);
CREATE TABLE IF NOT EXISTS `message`
(
    `id_message` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `message_content` VARCHAR(65) NOT NULL, 
    `message_date` DATETIME DEFAULT NOW(),
	`id_from` INT  NOT NULL 
);



INSERT INTO `categorie`(`categorie_name`) 
VALUES ('blague'),('etude'),('meditation'),('informatif'),('opinion');

INSERT INTO `article`(`article_title`,`article_content`,`article_authorId`,`article_categorieId`)
VALUES 
('First publish','Voici mon premier publication categorie 3 encore implementer dans la requete brute de mysql',2,3),
('second publish','Voici une autre publication categorie 3 encore implementer dans la requete brute de mysql',3,3),
('third publish','Voici une je mexerce categorie 4 encore implementer dans la requete brute de mysql',4,4),
('fourt publish','Voici mon premier publication categorie 3 encore implementer dans la requete brute de mysql',2,3),
('five publish','Voici une autre publication categorie 3 encore implementer dans la requete brute de mysql',3,3),
('six publish','Voici une je mexerce categorie 4 encore implementer dans la requete brute de mysql',4,4),
('seven publish','Voici mon premier publication categorie 3 encore implementer dans la requete brute de mysql',2,3),
('eight publish','Voici une autre publication categorie 3 encore implementer dans la requete brute de mysql',3,3),
('nine publish','Voici une je mexerce categorie 4 encore implementer dans la requete brute de mysql',4,4),
('ten publish','Voici mon premier publication categorie 3 encore implementer dans la requete brute de mysql',2,3),
('elevensecond publish','Voici une autre publication categorie 3 encore implementer dans la requete brute de mysql',3,3);

INSERT INTO `message`(`message_content`,`id_from`)
VALUES 
('message1',1);


INSERT INTO `member`(`member_firstname`,`member_lastname`,`member_pseudo`,`member_birthdate`,`member_tel`,`member_password`)
VALUES 
('John Christopher', 'DEPP II','Cox', '1963-06-09', '0606060606','cox'),
('Cyril', 'HANOUNA','Tirilira', '1974-09-23', '0611220044','Tirilira'),
('Adrien', 'NOUGARET','Melvin', '1990-03-01', '2309457112','Melvin'),
('Jaoued ', 'DAOUKI','Mangala devant' ,'1987-08-18', '0612345678','Mangala devant'),
('Kenny ', 'VANDERBECKEN','Prezidant', '1420-10-31', '0612345678','Presidant');
