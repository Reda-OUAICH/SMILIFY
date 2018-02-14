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

INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (1,'Dumbo','Animals','Yes','Front-End/css/image/Animals1');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (2,'Phone Cat','Animals','Yes','Front-End/css/image/Animals2');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (3,'Just Smile','Animals','Yes','Front-End/css/image/Animals3');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (4,'Dog Smile','Animals','No','Front-End/css/image/Animals4');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (5,'Thank You','Animals','Yes','Front-End/css/image/Animals5');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (6,'Dog Big Smile','Animals','No','Front-End/css/image/Animals6');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (7,'Turtle','Animals','No','Front-End/css/image/Animals7');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (8,'BG','Animals','No','Front-End/css/image/Animals8');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (9,'Yes Yes','Animals','No','Front-End/css/image/Animals9');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (10,'Rabbit','Animals','No','Front-End/css/image/Animals10');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (11,'Loutres','Animals','No','Front-End/css/image/Animals11');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (12,'Cat','Animals','No','Front-End/css/image/Animals12');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (13,'Tigger','Animals','Yes','Front-End/css/image/Animals13');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (14,'Flower','Animals','Yes','Front-End/css/image/Animals14');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (15,'Look Back','Anime','Yes','Front-End/css/image/Anime1');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (16,'DB','Anime','Yes','Front-End/css/image/Anime2');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (17,'Anime Girl','Anime','Yes','Front-End/css/image/Anime3');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (18,'OP','Anime','Yes','Front-End/css/image/Anime4');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (19,'Tom','Anime','No','Front-End/css/image/Anime5');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (20,'Anime6','Anime','Yes','Front-End/css/image/Anime6');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (21,'Hamster','Anime','No','Front-End/css/image/Anime7');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (22,'Hello','Anime','Yes','Front-End/css/image/Anime8');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (23,'OHOH','Anime','No','Front-End/css/image/Anime9');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (24,'Anime Little Girl','Anime','Yes','Front-End/css/image/Anime10');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (25,'ah','Creepy','No','Front-End/css/image/Creepy1');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (26,'Hello Cuty','Creepy','No','Front-End/css/image/Creepy2');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (27,'Creepy3','Creepy','No','Front-End/css/image/Creepy3');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (28,'Little','Creepy','Yes','Front-End/css/image/Creepy4');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (29,'Very Good','Creepy','Yes','Front-End/css/image/Creepy5');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (30,'Werd','Creepy','No','Front-End/css/image/Creepy6');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (31,'Humm','Creepy','Yes','Front-End/css/image/Creepy7');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (32,'Trump','Trump','Yes','Front-End/css/image/Trump1');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (33,'Again Trump','Trump','No','Front-End/css/image/Trump2');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (34,'Again Again Trump','Trump','Yes','Front-End/css/image/Trump3');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (35,'Oh Trump','Trump','Yes','Front-End/css/image/Trump4');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (36,'This is Trump','Trump','No','Front-End/css/image/Trump5');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (37,'Trump Anime','Trump','No','Front-End/css/image/Trump6');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (38,'Trump Smile','Trump','No','Front-End/css/image/Trump7');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (39,'Again Again Again Again Trump','Trump','No','Front-End/css/image/Trump8');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (40,'Trump The Last','Trump','No','Front-End/css/image/Trump9');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (41,'Finger in the Nose','Trump','Yes','Front-End/css/image/Trump10');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (42,'Trump Dance','Trump','No','Front-End/css/image/Trump11');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (43,'Bullshit','Trump','No','Front-End/css/image/Trump12');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (44,'TrumpSayBullshit','Trump','Yes','Front-End/css/image/Trump13');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (45,'Cute Smile','-','Yes','Front-End/css/image/All1');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (46,'CatSpinner','-','No','Front-End/css/image/All2');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (47,'DoggyDog','-','No','Front-End/css/image/All3');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (48,'Micky','-','Yes','Front-End/css/image/All4');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (49,'Sharknado','-','Yes','Front-End/css/image/All5');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (50,'The Gringe','-','No','Front-End/css/image/All6');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (51,'Lapinooo','-','Yes','Front-End/css/image/All7');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (52,'Stranger Smile','-','No','Front-End/css/image/All8');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (53,'Gandalf','-','Yes','Front-End/css/image/All9');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (54,'Tyrion Smilister','-','Yes','Front-End/css/image/All10');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (55,'Hello There','-','No','Front-End/css/image/All11');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (56,'Cringiest Smile Ever','-','Yes','Front-End/css/image/All12');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (57,'Cringest Smile Ever','-','No','Front-End/css/image/All13');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (58,'Steve Harvey','-','Yes','Front-End/css/image/All14');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (59,'Done','-','Yes','Front-End/css/image/All15');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (60,'Christian Bale','-','Yes','Front-End/css/image/All16');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (61,'Yes Yes','-','No','Front-End/css/image/All17');




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
