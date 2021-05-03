<?php

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
                            <header>
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
                            </header>
                            <main>
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
                            </main>
                            <footer>
                                <p class=autor-carta>"; printf($this->autor); echo "</p>
                                
                                "; if($this->fuerza!=null || $this->resistencia !=null){
                                    echo "<div class=fuerzas>
                                    <i>";printf($this->fuerza); echo " / "; printf($this->resistencia); echo "</i>";
                                }
                                echo "
                                    
                                </div>
                            </footer>
                        </article>
                    </section>
                </div>
            </div>";
        
    }

}





// echo "<div class=modal activa>
    //         <section class=seccarta>
    //             <article>
    //                 <header>
    //                     <h2 class=nombre-carta>"; printf($this->nombre); echo "</h2>
    //                     <div class=mana>
    //                         <span class=mana-incoloro>"; printf($this->manaincoloro); echo "</span>
    //                         <div class=mana-color>
    //                             <img class=mana-color-img src="; printf($this->manacolor); echo ">
    //                             <img class=mana-color-img src="; printf($this->manacolor); echo ">
    //                             <img class=mana-color-img src="; printf($this->manacolor); echo ">
    //                         </div>
                            
    //                     </div>
                        
    //                 </header>
        
    //                 <main>
    //                     <div class=imagen-carta style=background-image:url(";printf($this->fondo);echo")>
    //                     </div>
    //                     <div class=tipo-carta>
    //                         <h3>"; printf($this->tipo);printf($this->subtipo); echo"</h3><img src="; printf($this1->simboloexp); echo">
                            
    //                     </div>
    //                     <div class=contenido-carta>
    //                         <p class=efecto-carta>"; printf($this->habilidad); echo"</p>
    //                         <p class=descripcion-carta>"; printf($this->descripcion); echo"</p>
    //                     </div>
    //                 </main>
                    
                    
    //             </article>
    //             <footer>
    //                 <p class=autor-carta>"; printf($this->autor);echo"</p>
    //                 <div class=fuerzas>
    //                     <i>"; printf($this->fuerza."/".$this->resistencia); echo "</i>
    //                 </div>
    //             </footer>
    //         </section>
    //     </div>";