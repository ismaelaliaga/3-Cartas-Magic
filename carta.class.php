<?php

class Carta {

private string $nombre;
private int $manaincoloro;
private int $manacolor;
private string $tipo;
private string $subtipo;
private int $simboloexp;
private string $habilidades;
private string $descripcion;
private int $poder;
private int $resistencia;
private string $autor;

public function __construct($nombre,$manaincoloro,$manacolor,$tipo,$subtipo,$simboloexp,$habilidades,$descripcion,$poder,$resistencia,$autor){
    $this->nombre = $nombre;
    $this->manaincoloro = $manaincoloro;
    $this->manacolor = $manacolor;
    $this->tipo = $tipo;
    $this->subtipo = $subtipo;
    $this->simboloexp = $simboloexp;
    $this->habilidades = $habilidades;
    $this->descripcion = $descripcion;
    $this->poder = $poder;
    $this->resistencia = $resistencia;
    $this->author = $autor;
}

}