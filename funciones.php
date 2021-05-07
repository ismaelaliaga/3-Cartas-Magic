<?php

function consultacartas(&$num_cartas){

    require_once ("conexionbd.php");
    require_once ("carta.class.php");
    $unidadescarta =[];

    $consulta = $bd->prepare("SELECT ca.`id_carta`, ca.`nombre`, el.`nombre`, el.`icono_mana`, el.`fondo_carta`, ca.`num_mana_color`, ca.`mana_incoloro`, ca.`img_criatura`, ca.`tipo`,
    ca.`subtipo`, ex.`icono_expansion`, ca.`habilidad`, ca.`descripcion`, ca.`fuerza`, ca.`resistencia`, ca.`autor`
    FROM `cartas` ca LEFT JOIN `elementos` el ON ca.`id_elemento` = el.`id_elemento`
    LEFT JOIN `expansiones` ex ON ca.`id_expansion` = ex.`id_expansion`");
    $consulta->bind_result($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
                          $habilidad, $descripcion, $fuerza, $resistencia, $autor);
    $consulta->execute();

    while ($consulta->fetch()) {
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
                                    $habilidad, $descripcion, $fuerza, $resistencia, $autor);  
        $carta->mostrarcarta($carta);
        $num_cartas++;
        $unidadescarta[] .= $nombre_carta;
    }
    $consulta->close();
    $unidadescarta = array_count_values($unidadescarta);
    return $unidadescarta;

    

};

function botonesordenar(){
    echo "<h3>Ordenar cartas</h3>
    <div class=ultimoselementos id=botones>
        <button id=nombreasc type=button>Nombre ASC</button>
        <button id=nombredesc type=button>Nombre DESC</button>
        <button id=tipoasc type=button>Tipo ASC</button>
        <button id=tipodesc type=button>Tipo DESC</button>
        <button id=defaultasc type=button>Por defecto ASC</button>
        <button id=defaultdesc type=button>Por defecto DESC</button>
    </div>";
}

function informacioncartas($unidadescarta,$num_cartas){
    echo "<h3 id=informacionh3>Información del Mazo</h3>
    <hr>
    <div class=informacioncarta>";
        foreach ($unidadescarta as $clave => $valor) {
            echo "<p class=ultimoselementos id=unidades>Para la carta $clave existen $valor unidad/es</p>";
        }
        echo "<h4>Número total de cartas : $num_cartas</h4>
        <hr>
    </div>";
}