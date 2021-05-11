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
     *
     * @return boolean Devuelve True si el dni es correcto
     * @throws DomainException Arroja un DomainException cuando el dni no tiene un formato
     * válido o cuando el DNI especificado no es valido
     */

    public function mostrarcarta(){
        $nombre = $this->nombre;
        $nombre = explode(" ", $nombre);
        echo "<div class=magic data-nombre="; printf($nombre[0]); printf(" "); echo "data-tipo="; printf($this->tipo); printf(" "); echo "data-default="; printf($this->id_carta); echo ">
                <figure class=thumbnail>
                    <img src="; printf($this->imgcriatura); echo ">
                    <figcaption>"; printf($this->nombre); echo "</figcaption>
                </figure>
                <div class=carta style=background-image:url(";printf($this->fondo);echo")>
                    <section>
                        <article>
                            <div class=header>
                                <h2 class=nombre-carta>"; printf($this->nombre); echo "</h2>
                                <div class=mana>
                                    "; if($this->manaincoloro!=0){
                                        echo "<span class=mana-incoloro>"; printf($this->manaincoloro); echo "</span>";
                                    }
                                    echo "
                                    <div class=mana-color>
                                    "; for($i=0;$i<$this->nummanacolor;$i++){
                                        echo "<img class=mana-color-img src="; printf($this->iconomana); echo ">";
                                    }
                                    echo "
                                    </div>
                                </div>
                            </div>
                            <div class=main>
                                <div class=imagen-carta style=background-image:url(";printf($this->imgcriatura);echo");></div>
                                <div class=tipo-carta>
                                    <h3>"; printf($this->tipo);printf("-"); print($this->subtipo); echo "</h3><img src="; printf($this->simboloexp); echo ">
                                </div>
                                <div class=contenido-carta>
                                    <p class=efecto-carta>
                                    "; printf($this->habilidad); echo "
                                    </p>
                                    <p class=descripcion-carta>
                                    "; printf($this->descripcion); echo "
                                    </p>
                                </div>
                            </div>
                            <div class=footer>
                                <p class=autor-carta>"; printf($this->autor); echo "</p>
                                
                                "; if($this->fuerza!=null || $this->resistencia !=null){
                                    echo "<div class=fuerzas>
                                    <i>";printf($this->fuerza); echo " / "; printf($this->resistencia); echo "</i>";
                                }
                                echo "
                                </div>
                            </div>
                        </article>
                    </section>
                </div>
            </div>";
        return true;
    }

}