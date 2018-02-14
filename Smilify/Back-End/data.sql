USE Smilify;

DROP TABLE IF EXISTS Gifs;

CREATE TABLE Gifs (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(50) NOT NULL,
  `category` VARCHAR(50)NOT NULL,
  `displayable` VARCHAR(5)NOT NULL,
   PRIMARY KEY (`id`)
);

INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (1,'Dumbo','Animals','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (2,'Phone Cat','Animals','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (3,'Just Smile','Animals','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (4,'Dog Smile','Animals','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (5,'Thank You','Animals','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (6,'Dog Big Smile','Animals','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (7,'Turtle','Animals','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (8,'BG','Animals','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (9,'Yes Yes','Animals','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (10,'Rabbit','Animals','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (11,'Loutres','Animals','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (12,'Cat','Animals','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (13,'Tigger','Animals','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (14,'Flower','Animals','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (15,'Look Back','Anime','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (16,'DB','Anime','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (17,'Anime Girl','Anime','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (18,'OP','Anime','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (19,'Tom','Anime','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (20,'Anime6','Anime','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (21,'Hamster','Anime','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (22,'Hello','Anime','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (23,'OHOH','Anime','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (24,'Anime Little Girl','Anime','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (25,'ah','Creepy','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (26,'Hello Cuty','Creepy','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (27,'Creepy3','Creepy','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (28,'Little','Creepy','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (29,'Very Good','Creepy','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (30,'Werd','Creepy','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (31,'Humm','Creepy','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (32,'Trump','Trump','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (33,'Again Trump','Trump','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (34,'Again Again Trump','Trump','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (35,'Oh Trump','Trump','Yes');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (36,'This is Trump','Trump','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (37,'Trump Anime','Trump','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (38,'Trump Smile','Trump','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (39,'Again Again Again Again Trump','Trump','No');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`) VALUES (40,'Trump The Last','Trump','No');


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
