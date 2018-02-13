USE Smilify;

CREATE TABLE Gifs (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Title` VARCHAR(50) NOT NULL,
  `SRC` VARCHAR(50)NOT NULL,
   PRIMARY KEY (`id`)
);

INSERT INTO
  `Gifs`
  (`id`,`Title`,`SRC`)
  VALUES
  (NULL,'Verre Deau','gif/1.gif')
;