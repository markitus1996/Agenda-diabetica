USE qaan853;

CREATE TABLE usuarios (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	usuario varchar (40) UNIQUE,
	contrasenia varchar(40)
);

CREATE TABLE glucosa
(
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
    dormir INT  NOT NULL,
    observaciones varchar (255)
 
 
 
);

DROP TABLE glucosa;