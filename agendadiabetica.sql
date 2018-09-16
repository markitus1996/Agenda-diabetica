CREATE DATABASE IF NOT EXISTS glucosa CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci';

USE glucosa;

DROP TABLE IF EXISTS glucosa;
DROP TABLE IF EXISTS usuarios;

CREATE TABLE usuarios (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	usuario varchar (40) UNIQUE,
	contrasenia varchar(40)
)ENGINE=InnoDB;

CREATE TABLE glucosa
(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	fecha DATE not NULL,
    manyana INT NOT NULL,
    insulinam INT NOT NULL,
    comida INT NOT NULL,
    insulinac INT NOT NULL,
    merienda INT NOT NULL,
    insuliname INT NOT NULL,    
    cena INT NOT NULL,
	insulinace INT NOT NULL,
    insulinalenta INT  NOT NULL,
    dormir INT NOT NULL,
    observaciones varchar(255),
	usuario INT NOT NULL,
    FOREIGN KEY (usuario) REFERENCES usuarios(id)
		ON UPDATE CASCADE
		ON DELETE CASCADE
)ENGINE=InnoDB;