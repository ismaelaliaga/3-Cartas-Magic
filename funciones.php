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
    echo "<h3 id=informacionh3>↓ Información del Mazo ↓</h3>
    <hr>
    <div class=informacioncarta>";
        foreach ($unidadescarta as $clave => $valor) {
            echo "<p class=ultimoselementos id=unidades>Para la carta $clave existen $valor unidad/es</p>";
        }
        echo "<h4>Número total de cartas : $num_cartas</h4>
        <hr>
    </div>";
}

function añadircarta()
{
    require_once ("conexionbd.php");
    echo "
        <form action=? method=POST enctype=multipart/form-data>
            <h2>¿Deseas añadir una carta?</h2>
            <label for=nombre>Nombre:</label><br>
            <input name=nombre id=nombre type=text></input><br>
            <label for=incoloro>Número Mana Incoloro:</label><br>
            <input name=incoloro id=incoloro type=number min=0 max=9 step=1></input><br>
            <label for=color>Elemento:</label><br>
            <select name=color id=color>
                <option value=1>Azul</option>
                <option value=2>Blanco</option>
                <option value=3>Rojo</option>
                <option value=4>Negro</option>
                <option value=5>Verde</option>
            </select><br>
            <label for=manacolor>Número Mana Color:</label><br>
            <input name=manacolor id=manacolor type=number min=0 max=3 step=1></input><br>
            <label for=archivo>Añadir imagen:</label><br>
            <input name=archivo id=archivo type=file></input><br>
            <label for=Tipo>Tipo:</label><br>
            <input name=tipo id=tipo type=text></input><br>
            <label for=subtipo>Subtipo:</label><br>
            <input name=subtipo id=subtipo type=text></input><br>
            <label for=expansion>Expansión:</label><br>
            <select name=expansion id=expansion>
                <option value=1>Throne of Eldraine</option>
                <option value=2>Commander 2019</option>
                <option value=3>Horizontes de Modern</option>
                <option value=4>La Guerra de la Chispa</option>
            </select><br><br>
            <label for=habilidad>Habilidad:</label><br>
            <textarea style=resize:none id=habilidad name=habilidad rows=4 cols=30></textarea><br>
            <label for=descripcion>Descripción:</label><br>
            <textarea style=resize:none id=descripcion name=descripcion rows=4 cols=30></textarea><br>
            <label for=fuerza>Número Fuerza:</label><br>
            <input name=fuerza id=fuerza type=text></input><br>
            <label for=resistencia>Número Resistencia:</label><br>
            <input name=resistencia id=resistencia type=text></input><br>
            <label for=autor>Autor:</label><br>
            <input name=autor id=autor type=text></input><br>
            <input type=submit id=enviar name=enviar value=Crear&#32;Carta></input><br>
        </form>
    ";

    if (isset($_POST['enviar'])) {
        include("conexionbd.php");
        //Recogemos el archivo enviado por el formulario
        $archivo = $_FILES['archivo']['name'];
        //Si el archivo contiene algo y es diferente de vacio
        if (isset($archivo) && $archivo != "") {
            //Obtenemos algunos datos necesarios sobre el archivo
            $tipo = $_FILES['archivo']['type'];
            $tamano = $_FILES['archivo']['size'];
            $temp = $_FILES['archivo']['tmp_name'];
            //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
            if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
                echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
            } else {
                //Si la imagen es correcta en tamaño y tipo
                //Se intenta subir al servidor
                if (move_uploaded_file($temp, './img/criaturas/' . $archivo)) {
                    //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
                    chmod('img/criaturas/' . $archivo, 0777);
                    //Mostramos el mensaje de que se ha subido con éxito
                    echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
                } else {
                    //Si no se ha podido subir la imagen, mostramos un mensaje de error
                    echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
                }
            }
        }

        $inscarta = $bd->prepare("INSERT INTO `cartas` (`nombre`,`id_elemento`,`mana_incoloro`,`num_mana_color`
        ,`img_criatura`,`tipo`,`subtipo`,`id_expansion`,`habilidad`,`descripcion`,`fuerza`,`resistencia`,`autor`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $inscarta->bind_param('siiisssisssss', $nombre, $id_elemento, $mana_incoloro, $num_mana_color, $img_criatura, $tipo, $subtipo, $id_expansion, $habilidad, $descripcion, $fuerza, $resistencia ,$autor);
        $nombre = $_POST["nombre"];
        $id_elemento = $_POST["color"];
        $mana_incoloro = $_POST["incoloro"];
        $num_mana_color = $_POST["manacolor"];
        $img_criatura = './img/criaturas/'.$archivo;
        $tipo = $_POST["tipo"];
        $subtipo = $_POST["subtipo"];
        $id_expansion = $_POST["expansion"];
        $habilidad = $_POST["habilidad"];
        $descripcion = $_POST["descripcion"];
        $fuerza = $_POST["fuerza"];
        $resistencia = $_POST["resistencia"];
        $autor = $_POST["autor"];
        $inscarta->execute();
        $inscarta->close();
        header("location:index.php");
        echo "LAAAAAAAAAAAAAAAAAAAAAAAS";
    }
}
