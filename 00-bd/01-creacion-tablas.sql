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