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

INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Dumbo','Animals','Yes','css/image/Animals1');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Phone Cat','Animals','Yes','css/image/Animals2');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Just Smile','Animals','Yes','css/image/Animals3');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Dog Smile','Animals','Yes','css/image/Animals4');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Thank You','Animals','Yes','css/image/Animals5');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Dog Big Smile','Animals','Yes','css/image/Animals6');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Turtle','Animals','Yes','css/image/Animals7');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'BG','Animals','Yes','css/image/Animals8');
-- INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Yes Yes','Animals','Yes','css/image/Animals9');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Rabbit','Animals','Yes','css/image/Animals10');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Loutres','Animals','Yes','css/image/Animals11');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Cat','Animals','Yes','css/image/Animals12');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Tigger','Animals','Yes','css/image/Animals13');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Flower','Animals','Yes','css/image/Animals14');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Look Back','Anime','Yes','css/image/Anime1');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'DB','Anime','Yes','css/image/Anime2');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Anime Girl','Anime','Yes','css/image/Anime3');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'OP','Anime','Yes','css/image/Anime4');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Tom','Anime','Yes','css/image/Anime5');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Anime6','Anime','Yes','css/image/Anime6');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Hamster','Anime','Yes','css/image/Anime7');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Hello','Anime','Yes','css/image/Anime8');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'OHOH','Anime','Yes','css/image/Anime9');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Anime Little Girl','Anime','Yes','css/image/Anime10');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'ah','Creepy','Yes','css/image/Creepy1');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Hello Cuty','Creepy','Yes','css/image/Creepy2');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Creepy3','Creepy','Yes','css/image/Creepy3');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Little','Creepy','Yes','css/image/Creepy4');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Very Good','Creepy','Yes','css/image/Creepy5');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Werd','Creepy','Yes','css/image/Creepy6');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Humm','Creepy','Yes','css/image/Creepy7');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Trump','Trump','Yes','css/image/Trump1');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Again Trump','Trump','Yes','css/image/Trump2');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Again Again Trump','Trump','Yes','css/image/Trump3');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Oh Trump','Trump','Yes','css/image/Trump4');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'This is Trump','Trump','Yes','css/image/Trump5');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Trump Anime','Trump','Yes','css/image/Trump6');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Trump Smile','Trump','Yes','css/image/Trump7');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Again Again Again Again Trump','Trump','Yes','css/image/Trump8');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Trump The Last','Trump','Yes','css/image/Trump9');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Finger in the Yesse','Trump','Yes','css/image/Trump10');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Trump Dance','Trump','Yes','css/image/Trump11');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Bullshit','Trump','Yes','css/image/Trump12');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'TrumpSayBullshit','Trump','Yes','css/image/Trump13');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Cute Smile','-','Yes','css/image/All1');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'CatSpinner','-','Yes','css/image/All2');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'DoggyDog','-','Yes','css/image/All3');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Micky','-','Yes','css/image/All4');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Sharknado','-','Yes','css/image/All5');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'The Gringe','-','Yes','css/image/All6');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Lapinooo','-','Yes','css/image/All7');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Stranger Smile','-','Yes','css/image/All8');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Gandalf','-','Yes','css/image/All9');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Tyrion Smilister','-','Yes','css/image/All10');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Hello There','-','Yes','css/image/All11');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Cringiest Smile Ever','-','Yes','css/image/All12');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Cringest Smile Ever','-','Yes','css/image/All13');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Steve Harvey','-','Yes','css/image/All14');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Done','-','Yes','css/image/All15');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Christian Bale','-','Yes','css/image/All16');
INSERT INTO `Gifs` (`id`,`title`,`category`,`displayable`,`src`) VALUES (NULL,'Yes Yes','-','Yes','css/image/All17');




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
