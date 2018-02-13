USE Smilify;

CREATE TABLE Gifs (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(50) NOT NULL,
  `category` VARCHAR(50)NOT NULL,
  `displayable` VARCHAR(5)NOT NULL,
   PRIMARY KEY (`id`)
);

INSERT INTO
  `Gifs`
  (`id`,`title`,`category`,`displayable`)
  VALUES
  (NULL,'Verre Deau','All','Yes')
;