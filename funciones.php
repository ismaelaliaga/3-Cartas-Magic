<?php

function consultacartas(&$num_cartas){

    require_once ("conexionbd.php");
    require_once ("carta.class.php");

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
    }

    $consulta->close();
    return $num_cartas;
};

function numtotalcartas($num_cartas) {
    echo "El número total de cartas es $num_cartas";
}

function botonesordenar(){
    echo "<button name=nombrasc id=nombrasc type=button>Nombre ASC</button>";
}

    