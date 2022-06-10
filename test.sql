
DROP TABLE IF EXISTS `message`;


USE `mvc_database`;

CREATE TABLE IF NOT EXISTS `message`
(
    `id_message` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `message_content` VARCHAR(65) NOT NULL, 
    `message_date` DATETIME DEFAULT NOW(),
	`id_from` INT  NOT NULL 
);

INSERT INTO `message`(`message_content`,`id_from`)
VALUES 
('kaiza2 dahol prom',1),
('kaiza2 less',2),
('de aona hono',3),
('zao manandrakandrana zao eh',1),
('enganie mba ande ty ',1),
('ambony fona less ny moral dady eh',3),
('merci prom',1);