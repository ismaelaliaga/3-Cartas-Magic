<?php

class Carta {
private int $id_carta;
private string $nombre;
private int $elemento;
private int $manaincoloro;
private int $nummanacolor;
private int $manacolor;
private string $fondo;
private string $tipo;
private string $subtipo;
private string $simboloexp;
private string $habilidad;
private string $descripcion;
private int $fuerza;
private int $resistencia;
private string $autor;

public function __construct($id_carta,$nombre,$elemento,$manaincoloro,$nummanacolor,$manacolor,$fondo,
$tipo,$subtipo,$simboloexp,$habilidad,$descripcion,$fuerza,$resistencia,$autor){
    $this->id_carta = $id_carta;
    $this->nombre = $nombre;
    $this->elemento = $elemento;
    $this->manaincoloro = $manaincoloro;
    $this->nummanacolor = $nummanacolor;
    $this->manacolor = $manacolor;
    $this->fondo = $fondo;
    $this->tipo = $tipo;
    $this->subtipo = $subtipo;
    $this->simboloexp = $simboloexp;
    $this->habilidad = $habilidad;
    $this->descripcion = $descripcion;
    $this->fuerza = $fuerza;
    $this->resistencia = $resistencia;
    $this->autor = $autor;
}

public function mostrarcarta(){

    echo "<div class=magic>
    <figure class=thumbnail>
        <img src="; printf($this->fondo); echo ">
        <figcaption>"; printf($this->nombre); echo "</figcaption>
    </figure>

    <div class=carta style=background-image: url("; printf($this->fondo); echo ");>
        <section>
            <article>
                <header>
                    <h2 class=nombre-carta>"; printf($this->nombre); echo "</h2>
                    <div class=mana>
                        <span class=mana-incoloro>"; printf($this->manaincoloro); echo "</span>
                        <div class=mana-color>
                        "; for($i=0;$i>$this->nummanacolor;$i++){
                            echo "<img class=mana-color-img src="; printf($this->manacolor); echo ">";
                        }
                        echo "
                        </div>
                    </div>
                </header>
                <main>
                    <div class=imagen-carta style=background-image: url("; printf($this->fondo); echo ");></div>
                    <div class=tipo-carta>
                        <h3>"; printf($this->tipo);printf("-"); print($this->subtipo); echo "</h3><img src="; printf($this->simboloexp); echo ">
                    </div>
                    <div class=contenido-carta>
                        <p class=efecto-carta>
                        "; printf($this->habilidades); echo "
                        </p>
                        <p class=descripcion-carta>
                        "; printf($this->descripcion); echo "
                        </p>
                    </div>
                </main>
                <footer>
                    <p class=autor-carta>"; printf($this->autor); echo "</p>
                    <div class=fuerzas>
                        <i>"; printf($this->fuerza); echo " / "; printf($this->resistencia); echo "</i>
                    </div>
                </footer>
            </article>
        </section>
    </div>
</div>";
        
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
}

}