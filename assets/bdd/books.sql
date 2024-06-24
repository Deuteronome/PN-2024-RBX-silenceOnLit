/* se connecter en root*/

sudo mysql

/* sortir */

exit

/* liste des bdd*/

SHOW DATABASES;

/*Créer une base de données */

CREATE DATABASE books;

/*Utiliser la base de données */

USE books

/*Créer utilisateur et lui donner les droit sur la base de données books, à faire quand on est connecté en root*/

CREATE USER 'book_admin'@'localhost' IDENTIFIED BY 'Hm723Hq4MShm289PfFhm';
GRANT ALL PRIVILEGES ON books.* TO 'book_admin'@'localhost';

/*se connecter en tant qu'utilisateur */

mysql -h localhost -u book_admin -p 

/*commandes diverses */

SHOW TABLES;
DESCRIBE Users;


/*créer le tableau utilisateur*/



CREATE TABLE IF NOT EXISTS Users (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    date_of_birth DATETIME NOT NULL,
    site_E2C VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)ENGINE=InnoDB;

/* Insérer des données dans un tableau */

INSERT INTO Users (email, password, firstname, lastname, date_of_birth, site_E2C)
    VALUES ('o.burcker@e2c-grandlille.fr', 'motdepasse', 'Olivier', 'Burcker', '1976-06-21', 'Multisite');

INSERT INTO Users (email, password, firstname, lastname, date_of_birth, site_E2C)
    VALUES ('n.derebreu@gmail.com', 'motdepasse', 'Nell', 'Derebreu', '2004-09-24', 'Roubaix'),
            ('k.nempon', 'bidule', 'Kevin', 'Nempon', '2004-09-24', 'Roubaix'),
            ('m.hermant', 'cestmoi', 'Maxence', 'Hermant', '2003-11-01', 'Saint-Omer');

/* Comment on affiche les données d'un tableau */

SELECT * FROM Users;
SELECT site_E2C, firstname, lastname FROM Users;

SELECT password FROM Users WHERE email = "k.nempon";

SELECT * FROM Users WHERE site_E2C = "roubaix" OR site_E2C="multisite";

/*Modifie un tableau*/

ALTER TABLE Users
ADD COLUMN is_admin BOOLEAN NOT NULL DEFAULT FALSE;

ALTER TABLE Users
DROP COLUMN email;

ALTER TABLE Users
MODIFY COLUMN id INT UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE Users
CHANGE COLUMN surname lastname VARCHAR(255) NOT NULL;

/*Site*/

CREATE TABLE IF NOT EXISTS Sites (
    id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    city VARCHAR(255) NOT NULL
)ENGINE=InnoDB;

INSERT INTO Sites (city)
    VALUES ('Multisite'),
            ('Armentières'),
            ('Lille'),
            ('Roubaix'),
            ('Saint-Omer');

ALTER TABLE Sites 
MODIFY COLUMN city VARCHAR(255) NOT NULL UNIQUE;




