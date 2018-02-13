# SI-PHP


# 1ER ÉTAPE
mysql> CREATE SCHEMA `Smilify` 

DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;




# 2ÈME ÉTAPE

mysql> use Smilify;

mysql> CREATE TABLE Gifs (

    -> `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    
    -> PRIMARY KEY (`id`)
    
    -> );
    

# 3ÈME ÉTAPE

mysql> INSERT INTO 

    -> `Gifs`
    
    -> (`id`)
    
    -> VALUES
    
    -> (NULL)
    
    -> ;


mysql> SELECT

    -> id
    
    -> FROM
    
    -> Gifs
    
    -> ;
    
+----+

| id |

+----+

|  1 |

+----+

# 4ÈME ÉTAPE

mysql> INSERT INTO  

`Gifs` 

(`id`)

VALUES 

(NULL);

mysql> SELECT id FROM Gifs;

+----+

| id |

+----+

|  1 |

|  2 |

+----+


mysql> SHOW TABLES;

+-------------------+

| Tables_in_smilify |

+-------------------+

| Gifs              |

+-------------------+

mysql> SELECT * FROM Gifs;

+----+

| id |

+----+

|  1 |

|  2 |

+----+


mysql> ALTER TABLE Gifs

    -> ADD `Title` varchar(50) NOT NULL;
    



# 5ÈME ÉTAPE


mysql> UPDATE

    -> `Gifs`
    
    -> SET
    
    -> `Title` = 'Verre do'
    
    -> WHERE
    
    -> `id` = 1
    
    -> ;
    

mysql> SELECT * FROM Gifs;

+----+----------+

| id | Title    |

+----+----------+

|  1 | Verre do |

|  2 |          |

+----+----------+

mysql> UPDATE 

`Gifs` 

SET `Title` = 'MICKY' 

WHERE 

`id` = 2;



mysql> SELECT * FROM Gifs;

+----+----------+

| id | Title    |

+----+----------+

|  1 | Verre do |

|  2 | MICKY    |

+----+----------+



