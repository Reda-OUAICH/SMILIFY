# SI-PHP


# 1ER ÉTAPE
mysql> CREATE SCHEMA `Smilify` 

DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;




# 2ÈME ÉTAPE

mysql> use Smilify;

Database changed

mysql> CREATE TABLE Gifs (

    -> `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    
    -> PRIMARY KEY (`id`)
    
    -> );
    
Query OK, 0 rows affected (0,02 sec)

# 3ÈME ÉTAPE

mysql> INSERT INTO 
    -> `Gifs`
    -> (`id`)
    -> VALUES
    -> (NULL)
    -> ;
Query OK, 1 row affected (0,00 sec)

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
1 row in set (0,00 sec)

# 4ÈME ÉTAPE

mysql> INSERT INTO  `Gifs` (`id`) VALUES (NULL);
Query OK, 1 row affected (0,00 sec)

mysql> SELECT id FROM Gifs;
+----+
| id |
+----+
|  1 |
|  2 |
+----+
2 rows in set (0,00 sec)

mysql> SHOW TABLES;
+-------------------+
| Tables_in_smilify |
+-------------------+
| Gifs              |
+-------------------+
1 row in set (0,00 sec)

mysql> SELECT * FROM Gifs;
+----+
| id |
+----+
|  1 |
|  2 |
+----+
2 rows in set (0,00 sec)

mysql> ALTER TABLE Gifs
    -> ADD `Title` varchar(50) NOT NULL;
Query OK, 0 rows affected (0,07 sec)
Records: 0  Duplicates: 0  Warnings: 0


# 5ÈME ÉTAPE


mysql> UPDATE
    -> `Gifs`
    -> SET
    -> `Title` = 'Verre do'
    -> WHERE
    -> `id` = 1
    -> ;
Query OK, 1 row affected (0,01 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> SELECT * FROM Gifs;
+----+----------+
| id | Title    |
+----+----------+
|  1 | Verre do |
|  2 |          |
+----+----------+
2 rows in set (0,00 sec)

mysql> UPDATE `Gifs` SET `Title` = 'MICKY' WHERE `id` = 2;
Query OK, 1 row affected (0,00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> SELECT * FROM Gifs;
+----+----------+
| id | Title    |
+----+----------+
|  1 | Verre do |
|  2 | MICKY    |
+----+----------+
2 rows in set (0,00 sec)

