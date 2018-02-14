USE Smilify;

DROP TABLE IF EXISTS Gifs;

CREATE TABLE Gifs (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(50) NOT NULL,
  `category` VARCHAR(50)NOT NULL,
  `displayable` VARCHAR(5)NOT NULL,
  `src` VARCHAR(50)NOT NULL,
   PRIMARY KEY (`id`)
);

INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (1,'Dumbo','Animals','Yes','css/image/Animals');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (2,'Phone Cat','Animals','Yes','css/image/Animals');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (3,'Just Smile','Animals','Yes','css/image/Animals');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (4,'Dog Smile','Animals','No','css/image/Animals');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (5,'Thank You','Animals','Yes','css/image/Animals');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (6,'Dog Big Smile','Animals','No','css/image/Animals');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (7,'Turtle','Animals','No','css/image/Animals');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (8,'BG','Animals','No','css/image/Animals');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (9,'Yes Yes','Animals','No','css/image/Animals');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (10,'Rabbit','Animals','No','css/image/Animals');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (11,'Loutres','Animals','No','css/image/Animals');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (12,'Cat','Animals','No','css/image/Animals');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (13,'Tigger','Animals','Yes','css/image/Animals');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (14,'Flower','Animals','Yes','css/image/Animals');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (15,'Look Back','Anime','Yes','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (16,'DB','Anime','Yes','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (17,'Anime Girl','Anime','Yes','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (18,'OP','Anime','Yes','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (19,'Tom','Anime','No','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (20,'Anime6','Anime','Yes','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (21,'Hamster','Anime','No','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (22,'Hello','Anime','Yes','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (23,'OHOH','Anime','No','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (24,'Anime Little Girl','Anime','Yes','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (25,'ah','Creepy','No','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (26,'Hello Cuty','Creepy','No','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (27,'Creepy3','Creepy','No','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (28,'Little','Creepy','Yes','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (29,'Very Good','Creepy','Yes','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (30,'Werd','Creepy','No','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (31,'Humm','Creepy','Yes','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (32,'Trump','Trump','Yes','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (33,'Again Trump','Trump','No','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (34,'Again Again Trump','Trump','Yes','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (35,'Oh Trump','Trump','Yes','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (36,'This is Trump','Trump','No','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (37,'Trump Anime','Trump','No','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (38,'Trump Smile','Trump','No','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (39,'Again Again Again Again Trump','Trump','No','css/image/ ');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (40,'Trump The Last','Trump','No','css/image/ ');


DROP TABLE IF EXISTS Admin;

CREATE TABLE Admin (
  `password` VARCHAR(10) NOT NULL,
   PRIMARY KEY (`password`)
);

INSERT INTO
  `Admin`
  (`password`)
  VALUES
  ('bonbon')
;
