<?php
namespace Daw\Magic;

    /**
    * @author Ismael Aliaga Molina <ismaelaliagamolina@gmail.com>
    * @version 1.0.0
    * @param int $id_carta
    * @param string $nombre
    * @param string $elemento
    * @param string $iconomana
    * @param string $fondo
    * @param int $nummanacolor
    * @param int $manaincoloro
    * @param string $imgcriatura
    * @param string $tipo
    * @param string $subtipo
    * @param string $simboloexp
    * @param string $habilidad
    * @param string $descripcion
    * @param int|string $fuerza
    * @param int|string $resistencia
    * @param string $autor;
    */

class Carta {
    
    private int $id_carta;
    private string $nombre;
    private string $elemento;
    private string $iconomana;
    private string $fondo;
    private int $nummanacolor;
    private int $manaincoloro;
    private string $imgcriatura;
    private string $tipo;
    private string $subtipo;
    private string $simboloexp;
    private string $habilidad;
    private string $descripcion;
    private int|string $fuerza;
    private int|string $resistencia;
    private string $autor;

    /**
    * Construct
    * @param int $id_carta número identificativo de la carta en la bd
    * @param string $nombre nombre de la criatura/artefacto
    * @param string $elemento elemento de la criatura/artefacto
    * @param string $iconomana icono mana de color (blanco,rojo,verde,negro,azul)
    * @param string $fondo background de la carta
    * @param int $nummanacolor número de iconos de mana de color de la carta
    * @param int $manaincoloro número de mana incoloro
    * @param string $imgcriatura imágen de la criatura/artefacto
    * @param string $tipo tipo de la criatura/artefacto
    * @param string $subtipo subtipo de la criatura/artefacto
    * @param string $simboloexp simbolo de expansión que pertenece la criatura/artefacto
    * @param string $habilidad habilidad de la criatura/artefacto
    * @param string $descripcion descripción de la criatura/artefacto
    * @param int|string $fuerza fuerza de la criatura/artefacto
    * @param int|string $resistencia resistencia de la criatura/artefacto
    * @param string $autor autor de la criatura/artefacto
    */
      
    public function __construct($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
    $habilidad, $descripcion, $fuerza, $resistencia, $autor){

        $this->id_carta = $id_carta;
        if($this->comprobarnombre($nombre_carta)== true){
            $this->nombre = $nombre_carta;
        }
        if($this->comprobarelemento($color_elemento)== true){
            $this->elemento = $color_elemento;
        }
        if($this->comprobariconomana($icono_mana)== true){
            $this->iconomana = $icono_mana;
        }
        if($this->comprobarfondo($fondo_carta)== true){
            $this->fondo = $fondo_carta;
        }
        if($this->comprobarnummanacolor($num_mana_color)== true){
            $this->nummanacolor = $num_mana_color;
        }
        if($this->comprobarnummanaincoloro($num_mana_incoloro)== true){
            $this->manaincoloro = $num_mana_incoloro;
        }
        if($this->comprobarimgcriatura($imagen_carta)== true){
            $this->imgcriatura = $imagen_carta;
        }
        if($this->comprobartipo($tipo)== true){
            $this->tipo = $tipo;
        }
        if($this->comprobarsubtipo($subtipo)== true){
            $this->subtipo = $subtipo;
        }
        if($this->comprobariconoexp($icono_expansion)== true){
            $this->simboloexp = $icono_expansion;
        }
        if($this->comprobarhabilidad($habilidad)== true){
            $this->habilidad = $habilidad;
        }
        if($this->comprobardescripcion($descripcion)== true){
            $this->descripcion = $descripcion;
        }
        if($this->comprobarfuerza($fuerza)== true){
            $this->fuerza = $fuerza;
        }
        if($this->comprobarresistencia($resistencia)== true){
            $this->resistencia = $resistencia;
        }
        if($this->comprobarautor($autor)== true){
            $this->autor = $autor;
        }

        
    }

    

    /**
     * Se imprime la carta y thumbnail
     * Se muestra el conjunto que tiene la carta magic, thumbnail con foto y nombre 
     * y la carta en ventana modal con el contenido original de la carta
     */

    public function mostrarcarta(){
        $nombre = $this->nombre;
        $nombre = explode(" ", $nombre);
        echo "<div class=magic data-nombre="; echo $nombre[0]; echo(" "); echo "data-tipo="; echo $this->tipo; echo " "; echo "data-default="; echo $this->id_carta; echo ">
                <figure class=thumbnail>
                    <img src="; echo $this->imgcriatura; echo ">
                    <figcaption>"; echo $this->nombre; echo "</figcaption>
                </figure>
                <section class=carta style=background-image:url("; echo $this->fondo;echo")>
                        <img class=btncerrar src=./img/cerrar.png>
                        <article class=header>
                            <h2 class=nombre-carta>"; echo $this->nombre ; echo "</h2>
                            <div class=mana>
                                "; if($this->manaincoloro!=0){
                                    echo "<span class=mana-incoloro>"; echo $this->manaincoloro; echo "</span>";
                                }
                                echo "
                                <div class=mana-color>
                                "; switch($this->nummanacolor){
                                    case 0:
                                    break;
                                    case 1:
                                        echo "<img class=mana-color-img src="; printf($this->iconomana); echo ">";
                                    break;
                                    case 2:
                                        echo "<img class=mana-color-img src="; printf($this->iconomana); echo ">";
                                        echo "<img class=mana-color-img src="; printf($this->iconomana); echo ">";
                                    break;
                                    case 3:
                                        echo "<img class=mana-color-img src="; printf($this->iconomana); echo ">";
                                        echo "<img class=mana-color-img src="; printf($this->iconomana); echo ">";
                                        echo "<img class=mana-color-img src="; printf($this->iconomana); echo ">";
                                    break;
                                }
                                echo "
                                </div>
                            </div>
                        </article>
                        <article class=main>
                            <div class=imagen-carta style=background-image:url(";echo $this->imgcriatura;echo");></div>
                            <div class=tipo-carta>
                                <h3>"; echo $this->tipo;echo(" - "); print($this->subtipo); echo "</h3><img src="; echo $this->simboloexp; echo ">
                            </div>
                            <div class=contenido-carta>
                                <p class=efecto-carta>
                                "; echo $this->habilidad; echo "
                                </p>
                                <p class=descripcion-carta>
                                "; echo $this->descripcion; echo "
                                </p>
                            </div>
                        </article>
                        <article class=footer>
                            <p class=autor-carta>"; printf($this->autor); echo "</p>
                            
                            "; if($this->fuerza!=0 || $this->resistencia !=0){
                                echo "<div class=fuerzas>
                                <i>";echo $this->fuerza; echo " / "; echo $this->resistencia; echo "</i>";
                            }
                            echo "
                            </div>
                        </article>
                </section>
            </div>";
    }



    /**
     * Comprueba si el nombre es válido y se crea correctamente
     * @return true Devuelve true si se ha creado correctamente y era válido
     * @return false Devuelve false  es válido
     */

    public function comprobarnombre($nombre_carta){
        if(preg_match("/^[[:ascii:]áéíóúÁÉÍÓÚñÑ]{1,27}$/", $nombre_carta)){
            return true;
        }
        return false;
    }

    /**
     * Comprueba si el elemento es válido y se crea correctamente
     * @return true Devuelve true si se ha creado correctamente y era válido
     * @return false Devuelve false  es válido
     */

    public function comprobarelemento($color_elemento){
        if(preg_match("/^[[:alpha:]áéíóúÁÉÍÓÚñÑ]{1,15}$/", $color_elemento)){
            $this->elemento = $color_elemento;
            return true;
        }
        return false;
    }

    /**
     * Comprueba si el icono de maná es válido y se crea correctamente
     * @return true Devuelve true si se ha creado correctamente y era válido
     * @return false Devuelve false  es válido
     */

    public function comprobariconomana($icono_mana){
        if(preg_match("/(jpe?g|png|gif|bmp)$/", $icono_mana)){
            $this->iconomana = $icono_mana;
            return true;
        }
        return false;
    }

    /**
     * Comprueba si el fondo es válido y se crea correctamente
     * @return true Devuelve true si se ha creado correctamente y era válido
     * @return false Devuelve false  es válido
     */

    public function comprobarfondo($fondo_carta){
        if(preg_match("/(jpe?g|png|gif|bmp)$/", $fondo_carta)){
            return true;
        }
        return false;
    }

    /**
     * Comprueba si el número de color de maná es válido y se crea correctamente
     * @return true Devuelve true si se ha creado correctamente y era válido
     * @return false Devuelve false  es válido
     */

    public function comprobarnummanacolor($num_mana_color){
        if(preg_match("/^[0-3]{1}$/", $num_mana_color)){
            return true;
        }
        return false;
    }

    /**
     * Comprueba si el número de maná incoloro es válido y se crea correctamente
     * @return true Devuelve true si se ha creado correctamente y era válido
     * @return false Devuelve false  es válido
     */

    public function comprobarnummanaincoloro($num_mana_incoloro){
        if(preg_match("/^[0-9]{1}$/", $num_mana_incoloro)){
            return true;
        }
        return false;
    }

    /**
     * Comprueba si la imagen de la criatura es válida y se crea correctamente
     * @return true Devuelve true si se ha creado correctamente y era válido
     * @return false Devuelve false  es válido
     */

    public function comprobarimgcriatura($imagen_carta){
        if(preg_match("/(jpe?g|png|gif|bmp)$/", $imagen_carta)){
            return true;
        }
        return false;
    }

    /**
     * Comprueba si el tipo es válido y se crea correctamente
     * @return true Devuelve true si se ha creado correctamente y era válido
     * @return false Devuelve false  es válido
     */

    public function comprobartipo($tipo){
        if(preg_match("/^[[:ascii:]áéíóúÁÉÍÓÚ]{1,15}$/", $tipo)){
            return true;
        }
        return false;
    }

    /**
     * Comprueba si el subtipo es válido y se crea correctamente
     * @return true Devuelve true si se ha creado correctamente y era válido
     * @return false Devuelve false  es válido
     */

    public function comprobarsubtipo($subtipo){
        if(preg_match("/^[[:ascii:]áéíóúÁÉÍÓÚ]{1,15}$/", $subtipo)){
            return true;
        }
        return false;
    }

    /**
     * Comprueba si el icono de expansión es válido y se crea correctamente
     * @return true Devuelve true si se ha creado correctamente y era válido
     * @return false Devuelve false  es válido
     */

    public function comprobariconoexp($icono_expansion){
        if(preg_match("/(jpe?g|png|gif|bmp)$/", $icono_expansion)){
            return true;
        }
        return false;
    }

    /**
     * Comprueba si la habilidad es válida y se crea correctamente
     * @return true Devuelve true si se ha creado correctamente y era válido
     * @return false Devuelve false  es válido
     */

    public function comprobarhabilidad($habilidad){
        if(preg_match("/^[[:ascii:]áéíóúÁÉÍÓÚ]{1,100}$/", $habilidad)){
            return true;
        }
        return false;
    }

    /**
     * Comprueba si la descripción es válida y se crea correctamente
     * @return true Devuelve true si se ha creado correctamente y era válido
     * @return false Devuelve false  es válido
     */

    public function comprobardescripcion($descripcion){
        if(preg_match("/^[[:ascii:]áéíóúÁÉÍÓÚ]{1,100}$/", $descripcion)){
            return true;
        }
        return false;
    }

    /**
     * Comprueba si la fuerza es válida y se crea correctamente
     * @return true Devuelve true si se ha creado correctamente y era válido
     * @return false Devuelve false  es válido
     */

    public function comprobarfuerza($fuerza){
        if(preg_match("/^[0-9*]{1}$/", $fuerza)){
            return true;
        }
        return false;
    }

    /**
     * Comprueba si la resistencia es válida y se crea correctamente
     * @return true Devuelve true si se ha creado correctamente y era válido
     * @return false Devuelve false  es válido
     */

    public function comprobarresistencia($resistencia){
        if(preg_match("/^[0-9*]{1}$/", $resistencia)){
            return true;
        }
        return false;
    }

    /**
     * Comprueba si el autor es válido y se crea correctamente
     * @return true Devuelve true si se ha creado correctamente y era válido
     * @return false Devuelve false  es válido
     */

    public function comprobarautor($autor){
        if(preg_match("/^[[:ascii:]áéíóúÁÉÍÓÚ]{1,25}$/", $autor)){
            return true;
        }
        return false;
    }

    /**
     * Destructor del objeto
     */

    function __destruct() {
    }
    

}