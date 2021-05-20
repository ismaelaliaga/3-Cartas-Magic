<?php
namespace Daw\Magic;

// Crea carta y thumbnails y lleva la cuenta de cuantas cartas se ha creado

function consultacartas(&$num_cartas){

    require_once ("conexionbd.php");
    require_once ("carta.php");
    $unidadescarta =[];

    $consulta = $bd->prepare("SELECT * FROM vista_mostrar_cartas");
    $consulta->bind_result($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
                          $habilidad, $descripcion, $fuerza, $resistencia, $autor);
    $consulta->execute();

    while ($consulta->fetch()) {
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
                                    $habilidad, $descripcion, $fuerza, $resistencia, $autor);  
        echo $carta->mostrarcarta($carta);
        $num_cartas++;
        $unidadescarta[] .= $nombre_carta;
    }
    $consulta->close();
    $unidadescarta = array_count_values($unidadescarta);
    return $unidadescarta;

    

};

// Muestra los botones de ordenar

function botonesordenar(){
    echo "<h3>Ordenar cartas</h3>
    <div class=ultimoselementos id=botones>
        <button id=nombreasc class=botonord type=button>Nombre ASC</button>
        <button id=nombredesc class=botonord type=button>Nombre DESC</button>
        <button id=tipoasc class=botonord type=button>Tipo ASC</button>
        <button id=tipodesc class=botonord type=button>Tipo DESC</button>
        <button id=defaultasc class=botonord type=button>Por defecto ASC</button>
        <button id=defaultdesc class=botonord type=button>Por defecto DESC</button>
    </div>";
}

// Muestra el la información del mazo

function informacioncartas($unidadescarta,$num_cartas){
    echo "<h3 id=informacionh3>↓ Información del Mazo ↓</h3>
    <hr>
    <div class=informacioncarta>";
        foreach ($unidadescarta as $clave => $valor) {
            echo "<p class=ultimoselementos id=unidades>$clave: <b>$valor</b> unidad/es</p>";
        }
        echo "<h4>Número total de cartas : $num_cartas</h4>
        <hr>
    </div>";
}

// Muestra el menú principal de navegación

function nav(){
    echo "<input type=checkbox id=btn_menu>
    <label for=btn_menu><img src=img/icono_menu.png width=100% height=100%></label>
    <nav class=menu>
    <a href=./index.php><img src=./img/logo.png height= 90vh></a>
        <ul>
            <li><a href=./index.php>Galería</a></li>
            <li><a href=./form.php>Añadir Carta</a></li>
        </ul>
    </nav>";
}

//Muestra el formulario para añadir carta

function añadircarta(){
    require_once ("conexionbd.php");
    echo "
        <form action=? method=POST enctype=multipart/form-data>
            <h2>¿Deseas añadir una carta?</h2>
            <label for=nombre>Nombre:</label><br>
            <input name=nombre id=nombre type=text minlength=1 maxlength=27></input><br>
            <label for=incoloro>Número Mana Incoloro:</label><br>
            <select name=incoloro id=incoloro>
                <option value=0>0</option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
                <option value=6>6</option>
                <option value=7>7</option>
                <option value=8>8</option>
                <option value=9>9</option>
            </select><br>
            <label for=color>Elemento:</label><br>
            <select name=color id=color>
                <option value=1>Azul</option>
                <option value=2>Blanco</option>
                <option value=3>Rojo</option>
                <option value=4>Negro</option>
                <option value=5>Verde</option>
            </select><br>
            <label for=manacolor>Número Mana Color:</label><br>
            <select name=manacolor id=manacolor>
                <option value=0>0</option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
            </select><br>
            <label for=archivo>Añadir imagen:</label><br>
            <input name=archivo id=archivo type=file></input><br>
            <label for=Tipo>Tipo:</label><br>
            <input name=tipo id=tipo type=text minlength=1 maxlength=15></input><br>
            <label for=subtipo>Subtipo:</label><br>
            <input name=subtipo id=subtipo type=text minlength=1 maxlength=15></input><br>
            <label for=expansion>Expansión:</label><br>
            <select name=expansion id=expansion>
                <option value=1>Throne of Eldraine</option>
                <option value=2>Commander 2019</option>
                <option value=3>Horizontes de Modern</option>
                <option value=4>La Guerra de la Chispa</option>
            </select><br><br>
            <label for=habilidad>Habilidad:</label><br>
            <textarea style=resize:none id=habilidad name=habilidad rows=4 cols=30 minlength=1 maxlength=100></textarea><br>
            <label for=descripcion>Descripción:</label><br>
            <textarea style=resize:none id=descripcion name=descripcion rows=4 cols=30 minlength=1 maxlength=100></textarea><br>
            <label for=fuerza>Número Fuerza:</label><br>
            <select name=fuerza id=fuerza>
                <option value=*>*</option>
                <option value=0>0</option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
                <option value=6>6</option>
                <option value=7>7</option>
                <option value=8>8</option>
                <option value=9>9</option>
            </select><br>
            <label for=resistencia>Número Resistencia:</label><br>
            <select name=resistencia id=resistencia>
                <option value=*>*</option>
                <option value=0>0</option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
                <option value=6>6</option>
                <option value=7>7</option>
                <option value=8>8</option>
                <option value=9>9</option>
            </select><br>
            <label for=autor>Autor:</label><br>
            <input name=autor id=autor type=text minlength=1 maxlength=25></input><br>
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
        - Se permiten archivos .gif, .jpg, .png. y de 2 mb como máximo.</b></div>';
            } else {
                //Si la imagen es correcta en tamaño y tipo
                //Se intenta subir al servidor
                $existe = file_exists('./img/criaturas/'.$archivo);
                if($existe){
                    echo '<div><b>Error (Nombre del fichero repetido, por favor cambie el nombre del fichero).</b></div>';
                    return true;
                } elseif (move_uploaded_file($temp, './img/criaturas/' . $archivo)) {
                     //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
                    chmod('img/criaturas/' . $archivo, 0777);
                    //Mostramos el mensaje de que se ha subido con éxito
                } else {
                    //Si no se ha podido subir la imagen, mostramos un mensaje de error
                    echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
                }
            }
        }

        $inscarta = $bd->prepare("INSERT INTO `cartas` (`nombre`,`id_elemento`,`mana_incoloro`,`num_mana_color`
        ,`img_criatura`,`tipo`,`subtipo`,`id_expansion`,`habilidad`,`descripcion`,`fuerza`,`resistencia`,`autor`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $inscarta->bind_param('siiisssisssss', $nombre, $id_elemento, $mana_incoloro, $num_mana_color, $img_criatura, $tipo, $subtipo, $id_expansion, $habilidad, $descripcion, $fuerza, $resistencia ,$autor);
        $nombre = ucfirst($_POST["nombre"]);
        $nombre = trim($nombre);
        $formato_nombre = preg_match("/^[[:ascii:]áéíóúÁÉÍÓÚñÑ]{1,27}$/", $nombre);
        $id_elemento = $_POST["color"];
        $formato_id_elemento = preg_match("/^[1-5]{1}$/", $id_elemento);
        $mana_incoloro = $_POST["incoloro"];
        $formato_mana_incoloro = preg_match("/^[0-9]{1}$/", $mana_incoloro);
        $num_mana_color = $_POST["manacolor"];
        $formato_num_mana_color = preg_match("/^[0-3]{1}$/", $num_mana_color);
        $img_criatura = './img/criaturas/'.$archivo;
        $tipo = ucfirst($_POST["tipo"]);
        $tipo = trim($tipo);
        $formato_tipo = preg_match("/^[[:ascii:]áéíóúÁÉÍÓÚñÑ]{1,15}$/", $tipo);
        $subtipo = ucfirst($_POST["subtipo"]);
        $subtipo = trim($subtipo);
        $formato_subtipo = preg_match("/^[[:ascii:]áéíóúÁÉÍÓÚñÑ]{1,15}$/", $subtipo);
        $id_expansion = $_POST["expansion"];
        $formato_id_expansion = preg_match("/^[1-4]{1}$/", $id_expansion);
        $habilidad = ucfirst($_POST["habilidad"]);
        $habilidad = trim($habilidad);
        $formato_habilidad = preg_match("/^[[:ascii:]áéíóúÁÉÍÓÚñÑ]{1,100}$/", $habilidad);
        $descripcion = ucfirst($_POST["descripcion"]);
        $descripcion = trim($descripcion);
        $formato_descripcion = preg_match("/^[[:ascii:]áéíóúÁÉÍÓÚñÑ]{1,100}$/", $descripcion);
        $fuerza = $_POST["fuerza"];
        $formato_fuerza = preg_match("/^[0-9*]{1}$/", $fuerza);
        $resistencia = $_POST["resistencia"];
        $formato_resistencia = preg_match("/^[0-9*]{1}$/", $resistencia);
        $autor = ucfirst($_POST["autor"]);
        $autor = trim($autor);
        $formato_autor = preg_match("/^[[:ascii:]áéíóúÁÉÍÓÚñÑ]{1,25}$/", $autor);

        if(!$formato_nombre){
            echo "<span class=mensajeform>La carta no se ha podido añadir correctamente, por favor introduce correctamente el nombre</span>";
            return false;
        }elseif(!$formato_id_elemento){
            echo "<span class=mensajeform>La carta no se ha podido añadir correctamente, por favor introduce correctamente el elemento</span>";
            return false;
        }elseif(!$formato_mana_incoloro){
            echo "<span class=mensajeform>La carta no se ha podido añadir correctamente, por favor introduce correctamente el número correcto de mana incoloro</span>";
            return false;
        }elseif(!$formato_num_mana_color){
            echo "<span class=mensajeform>La carta no se ha podido añadir correctamente, por favor introduce correctamente el número de color de manas</span>";
            return false;
        }elseif(!$formato_tipo){
            echo "<span class=mensajeform>La carta no se ha podido añadir correctamente, por favor introduce correctamente el tipo</span>";
            return false;
        }elseif(!$formato_subtipo){
            echo "<span class=mensajeform>La carta no se ha podido añadir correctamente, por favor introduce correctamente el subtipo</span>";
            return false;
        }elseif(!$formato_id_expansion){
            echo "<span class=mensajeform>La carta no se ha podido añadir correctamente, por favor introduce correctamente la expansión</span>";
            return false;
        }elseif(!$formato_habilidad){
            echo "<span class=mensajeform>La carta no se ha podido añadir correctamente, por favor introduce correctamente la habilidad</span>";
            return false;
        }elseif(!$formato_descripcion){
            echo "<span class=mensajeform>La carta no se ha podido añadir correctamente, por favor introduce correctamente la descripción</span>";
            return false;
        }elseif(!$formato_fuerza){
            echo "<span class=mensajeform>La carta no se ha podido añadir correctamente, por favor introduce correctamente la fuerza</span>";
            return false;
        }elseif(!$formato_resistencia){
            echo "<span class=mensajeform>La carta no se ha podido añadir correctamente, por favor introduce correctamente la resistencia</span>";
            return false;
        }elseif(!$formato_autor){
            echo "<span class=mensajeform>La carta no se ha podido añadir correctamente, por favor introduce correctamente el autor</span>";
            return false;
        }else{
            $inscarta->execute();
            $inscarta->close();
            echo "<span class=mensajeform>Se ha añadido correctamente la carta</span>";
        }
    }
}
