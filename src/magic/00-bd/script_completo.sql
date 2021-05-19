DROP DATABASE IF EXISTS proyecto_102;
CREATE DATABASE proyecto_102;
USE proyecto_102;



CREATE TABLE expansiones(
    id_expansion INT UNSIGNED AUTO_INCREMENT
    ,nombre_expansion VARCHAR(255)
    ,icono_expansion VARCHAR(1000)
    ,PRIMARY KEY (id_expansion)
);

CREATE TABLE elementos(
    id_elemento INT UNSIGNED AUTO_INCREMENT
    ,nombre_elemento VARCHAR(255)
    ,icono_mana VARCHAR(1000) 
    ,fondo_carta VARCHAR(1000)
    ,PRIMARY KEY (id_elemento)
);

CREATE TABLE cartas(
    id_carta INT UNSIGNED AUTO_INCREMENT
    ,nombre VARCHAR(255)
    ,id_elemento INT UNSIGNED
    ,num_mana_color TINYINT UNSIGNED
    ,mana_incoloro TINYINT UNSIGNED DEFAULT 0
    ,img_criatura VARCHAR(1000)
    ,tipo VARCHAR(255)
    ,subtipo VARCHAR(255)
    ,id_expansion INT UNSIGNED
    ,habilidad VARCHAR(500)
    ,descripcion VARCHAR(500)
    ,fuerza VARCHAR(10)
    ,resistencia VARCHAR(10)
    ,autor VARCHAR(255)
    ,PRIMARY KEY (id_carta)
    ,FOREIGN KEY (id_expansion) REFERENCES expansiones(id_expansion)
    ,FOREIGN KEY (id_elemento) REFERENCES elementos(id_elemento)
);

insert into elementos (`nombre_elemento`,`icono_mana`,`fondo_carta`) values 
('Azul','./img/elementos/mana/manaazul.png', './img/elementos/fondos/fondoazul.jpg')
,('Blanco','./img/elementos/mana/manablanco.png', './img/elementos/fondos/fondoblanco.jpg')
,('Rojo','./img/elementos/mana/manarojo.png', './img/elementos/fondos/fondorojo.jpg')
,('Negro','./img/elementos/mana/mananegro.png', './img/elementos/fondos/fondonegro.jpg')
,('Verde','./img/elementos/mana/manaverde.png', './img/elementos/fondos/fondoverde.jpg');

insert into expansiones (`nombre_expansion`,`icono_expansion`) values 
('Throne of Eldraine','./img/expansiones/throneofeldraine.png'),
('Commander 2019','./img/expansiones/commander.png'),
('Horizontes de Modern','./img/expansiones/modernhorizons.png'),
('La Guerra de la Chispa','./img/expansiones/warofspark.png');;

insert into cartas (`nombre`,`id_elemento`,`mana_incoloro`,`num_mana_color`
,`img_criatura`,`tipo`,`subtipo`,`id_expansion`,`habilidad`,`descripcion`,`fuerza`,`resistencia`,`autor`) values 
('Arconte de la Absolución',2,3,1,'./img/criaturas/01.png','Criatura','Arconte',1,'Vuela. Protección contra blanco.
no puede ser bloqueada','Las criaturas no pueden atacarte a ti o a un planeswalker','3','2','Igor Kierylek')
,('Paladín de Monteascua',3,3,1,'./img/criaturas/02.png','Criatura','Caballero',1,'El Paladín de Monteascua entra al campo de batalla con un contador +1/+1 sobre el'
,'El rey moriría por su reino yo no dudaria en hacer lo mismo por el','4','1','Randy Vargas')
,('Tortuga de Vadonublado',1,3,1,'./img/criaturas/03.png','Criatura','Tortuga',1,'Siempre que la Tortuga de Vadonublado ataque a otra criatura 
atacante objetivo +1/+1','Las Hadas criaron a la tortuga desde que salió del huevo','1','5','Mielvos Ceran')
,('Filoascua',3,4,2,'./img/criaturas/04.png','Artefacto','Equipo',1,'Te cuesta 1 de maná incoloro lanzar 
este hechizo por cada criatura atacante','Sin descripción','0','0','Joe Slucher')
,('Todo lo que reluce',2,1,1,'./img/criaturas/05.png','Encantamiento','Aura',1,'La criatura encantada obtiene +1/+1 por cada artefacto 
y/o encantamiento que controlas','La alegría de un hada al conseguir su tesoro se desvanece rapidamente','0','0','Iain McCaig')
,('Contendiente aclamada',2,2,1,'./img/criaturas/06.png','Criatura','Caballero',1,'Si controlas otro Caballero mira las cinco primeras cartas de tu biblioteca','Sin descripcion','3','3','David Garlet')
,('Paladin Valle de Arden',2,3,1,'./img/criaturas/07.png','Criatura','Caballero',1,'Entra al campo de batalla con un contador +1/+1 sobre ella','Aún 
cuando la esperanza no es mas que un candil que tilila en la noche','2','5','Volkan Baga')
,('Chiquitin',1,0,1,'./img/criaturas/08.png','Encantamiento','Aura',1,'La criatura encantada obtiene -2/-2','Su espada sono como un tintineo argenteo contra el 
cristal del tarro y la duende sonrió encantada','0','0','Randy Vargas')
,('Syr Elenora la Perspicaz',1,3,2,'./img/criaturas/09.png','Criatura','Caballero',1,'Cuando Syr Elenora entre al campo de batalla roba una carta','Sin descripción','*','4','Mila Pesec')
,('Ayara de Nimboscuro',4,0,3,'./img/criaturas/10.png','Criatura','Noble elfo',1,'Cada oponente pierde 1 vida y tú ganas 1 vida.
','El luto se torna en celebracion en cuanto elige a su próximo pretendiente','2','3','Ryan Pancoast');

CREATE OR REPLACE VIEW vista_mostrar_cartas AS 
SELECT ca.`id_carta`, ca.`nombre`, el.`nombre_elemento`, el.`icono_mana`, el.`fondo_carta`, ca.`num_mana_color`, ca.`mana_incoloro`, ca.`img_criatura`, ca.`tipo`,
    ca.`subtipo`, ex .`icono_expansion`, ca.`habilidad`, ca.`descripcion`, ca.`fuerza`, ca.`resistencia`, ca.`autor`
    FROM `cartas` ca LEFT JOIN `elementos` el ON ca.`id_elemento` = el.`id_elemento`
    LEFT JOIN `expansiones` ex ON ca.`id_expansion` = ex.`id_expansion`;