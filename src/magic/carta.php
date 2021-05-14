<?php
namespace Daw\Magic;

    /**
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
    * Constructor
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
        $this->nombre = $nombre_carta;
        $this->elemento = $color_elemento;
        $this->iconomana = $icono_mana;
        $this->fondo = $fondo_carta;
        $this->nummanacolor = $num_mana_color;
        $this->manaincoloro = $num_mana_incoloro;
        $this->imgcriatura = $imagen_carta;
        $this->tipo = $tipo;
        $this->subtipo = $subtipo;
        $this->simboloexp = $icono_expansion;
        $this->habilidad = $habilidad;
        $this->descripcion = $descripcion;
        $this->fuerza = $fuerza;
        $this->resistencia = $resistencia;
        $this->autor = $autor;
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
                        <article class=header>
                            <h2 class=nombre-carta>"; echo $this->nombre ; echo "</h2>
                            <div class=mana>
                                "; if($this->manaincoloro!=0){
                                    echo "<span class=mana-incoloro>"; echo $this->manaincoloro; echo "</span>";
                                }
                                echo "
                                <div class=mana-color>
                                "; for($i=0;$i<$this->nummanacolor;$i++){
                                    echo "<img class=mana-color-img src="; echo $this->iconomana; echo ">";
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
     * Comprobar con TDD si el nombre es de dato correcto
     * @return $this->autor Devuelve el dato que contiene el autor
     */

    public function comprobarnombre(){
        if(preg_match("/^[a-zA-Z0-9\s]{1,27}$/", $this->nombre)){
            return true;
        }
        return false;
    }

    /**
     * Comprobar con TDD si el autor es de dato correcto
     * @return $this->autor Devuelve el dato que contiene el autor
     */

    public function comprobarelemento(){
        if(preg_match("/^[1-5]{1}$/", $this->elemento)){
            return true;
        }
        return false;
    }

    

}