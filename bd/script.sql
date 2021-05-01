DROP DATABASE IF EXISTS proyecto_102;
CREATE DATABASE proyecto_102;
USE proyecto_102;



CREATE TABLE expansiones(
    id_expansion INT UNSIGNED AUTO_INCREMENT
    ,nombre VARCHAR(255)
    ,icono_expansion VARCHAR(1000)
    ,PRIMARY KEY (id_expansion)
);

CREATE TABLE elementos(
    id_elemento INT UNSIGNED AUTO_INCREMENT
    ,nombre VARCHAR(255)
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

insert into elementos (`nombre`,`icono_mana`,`fondo_carta`) values 
('Azul','./img/elementos/mana/manaazul.png', './img/elementos/fondos/fondoazul.jpg')
,('Blanco','./img/elementos/mana/manablanco.png', './img/elementos/fondos/fondoblanco.jpg')
,('Rojo','./img/elementos/mana/manarojo.png', './img/elementos/fondos/fondorojo.jpg')
,('Negro','./img/elementos/mana/mananegro.png', './img/elementos/fondos/fondonegro.jpg')
,('Verde','./img/elementos/mana/manaverde.png', './img/elementos/fondos/fondoverde.jpg');

insert into expansiones (`nombre`,`icono_expansion`) values 
('Throne of Eldraine','./img/expansiones/throneofeldraine.png');

insert into cartas (`nombre`,`id_elemento`,`mana_incoloro`,`num_mana_color`
,`img_criatura`,`tipo`,`subtipo`,`id_expansion`,`habilidad`,`descripcion`,`fuerza`,`resistencia`,`autor`) values 
('Arconte de la Absolución',2,3,1,'./img/criaturas/01.png','Criatura','Arconte',1,'Vuela. Protección contra blanco.
(Esta criatura no puede ser bloqueada,hecha objetivo,recibirdaño,estar encantada o ser equipada por nada blanco.)'
,'Las criaturas no pueden atacarte a ti o a un planeswalker que controlas a menos que su controlador pague 1 mana 
incoloro por cada de esas criaturas','3','2','Igor Kierylek')
,('Paladín de Monteascua',3,3,1,'./img/criaturas/02.png','Criatura','Caballero humano',1,'Prisa. Tesón - Si se 
usaron al menos tres manás rojos para lanzar este hechizo,el Paladín de Monteascua entra al campo de batalla con un contador +1/+1 sobre él.'
,'"El rey moriria por su reino.Yo no dudaría en hacer lo mismo por él"','4','1','Randy Vargas')
,('Tortuga de Vadonublado',1,3,1,'./img/criaturas/03.png','Criatura','Tortuga',1,'Siempre que la Tortuga de Vadonublado ataque,otra criatura 
atacante objetivo que no sea Humano no puede ser bloqueada este turno','Las Hadas criaron a la tortuga desde que salió del huevo.Le enseñaron 
a quiénes transportar a través del rio... y a quiénes ahogar.','1','5','Mielvos Ceran')
,('Filoascua',3,4,2,'./img/criaturas/04.png','Artefacto legendario','Equipo',1,'Destello Te cuesta 1 de mana incolore lanzar 
este hechizo por cada criatura atacante que controlas. Cuando Filoascua entre al campo de batalla,anéxalo a la criatura 
objetivo que controlas. La criatura equipada obtiene +1/+1 y tiene las habilidades de dañar dos veces y arrollar. Equipar 3 de mana incoloro','','','','Joe Slucher')
,('Todo lo que reluce',2,1,1,'./img/criaturas/05.png','Encantamiento','Aura',1,'Encantar criatura. La criatura encantada obtiene +1/+1 por cada artefacto 
y/o encantamiento que controlas.','La alegría de un hada al conseguir su tesoro se desvanece rápidamente para convertirse 
en satisfacción,después aburrimiento y por último en la necesidad de robar otro poquito más.','','','Iain McCaig')
,('Contendiente aclamada',2,2,1,'./img/criaturas/06.png','Criatura','Caballero humano',1,'Cuando la Contendiente aclamada entre al campo 
de batalla,si controlas otro Caballero,mira las cinco primeras cartas de tu biblioteca.Puedes mostrar una carta de canallero,Aura,Equipo o artefacto legendario 
que se encuentre entre ellas y ponerla en tu mano,Pon el resto en el fondo de tu biblioteca en un orden aleatorio,','','3','3','David Garlet')
,('Paladín del Valle de Arden',2,3,1,'./img/criaturas/07.png','Criatura','Caballero humano',1,'Tesón - Si se usaron al menos tres manás 
blancos para lanzar este hechizo, la Paladín del Valle de Arden entra al campo de batalla con un contador +1/+1 sobre ella.','"Aun 
cuando la esperanza no es más que un candil que tilila en la noche,seguiré sirviendo al rey ausente."','2','5','Volkan Baga')
,('Chiquitín',1,0,1,'./img/criaturas/08.png','Encantamiento','Aura',1,'Destello. Encantar criatura. La criatura encantada obtiene -2/-0.Mientras su controlador tenga 
siete o más cartas en su cementerio,en vez de eso, obtiene -6/-0.','Su espada sonó como un tintineo argénteo contra el 
cristal del tarro y la duende sonrió encantada.','','','Randy Vargas')
,('Syr Elenora,la Perspicaz',1,3,2,'./img/criaturas/09.png','Criatura legendaria','Caballero humano',1,'La fuerza de Syr Elenora,la Perspicaz es igual 
a la cantidad de cartas en tu mano. Cuando Syr Elenora entre al campo de batalla,roba una carta. A tus oponentes les cuesta 2 de mana incoloro 
lanzar hechizos que hagan objetivo a Syr Elenora.','','*','4','Mila Pesec')
,('Ayara,la Primera de Nimboscuro',4,0,3,'./img/criaturas/10.png','Criatura legendaria','Noble elfo',1,'Siempre que Ayara, la Primera 
de Nimboscuro u otra criatura negra entre al campo de batalla bajo tu control,cada oponente pierde 1 vida y tú ganas 1 vida. 
Sacrificar otra criatura negra:Roba una carta.','El luto se torna en celebración en cuanto elige a su próximo pretendiente','2','3','Ryan Pancoast');