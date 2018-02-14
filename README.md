# Semaine Intensive PHP groupe 23

## Basic commands mySQL:


### How to connect at MYSQL in the terminal:

mysql -h localhost -u root -p

or

mysql -u root -p


### Commands for create a database :

CREATE SCHEMA "data_name";

USE "data_name";


### Commands for create a table :

CREATE table "table_name";

### Commands for change password:

mysqladmin -u root -p password 'password'


## Database mySQL via mySQL Workbench :

### Copy this on mySQL workbench (START database):


DROP CREATE SCHEMA IF EXISTS Smilify;

USE Smilify;

DROP TABLE IF EXISTS Gifs;

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

  (NULL,'Animals1','Animals','Yes')  
;

INSERT INTO

  `Gifs`

  (`id`,`title`,`category`,`displayable`)

  VALUES

  (NULL,'Animals2','Animals','Yes')

;

INSERT INTO

  `Gifs`

  (`id`,`title`,`category`,`displayable`)

  VALUES

  (NULL,'Animals3','Animals','No')

;

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



### END
