<?php

declare(strict_types=1);

namespace Daw\Tests\Magic;

use Daw\Magic\Carta;
use PHPUnit\Framework\TestCase;


class CartaPrueba extends TestCase{



    /**
    * @covers ::comprobarnombre()
    */
    public function testElNombreNoEstaFormadoCorrectamente(){
        //Given
        $carta = new Carta(1, "Soy el nombre de la carta y voy a tener una longitud que supera los 27 caracteres", "Blanco", "iconoblanco", "fondocarta", 2, 3, "imagencarta", "tipo", "subtipo", "iconoexp",
        "habilidad", "descripcion", 2, 2, "Ismael");
        //When
        $resultado = $carta->comprobarnombre();
        //Then
        $this->assertNotTrue($resultado);
    }

    /**
    * @covers ::comprobarnombre()
    */
    public function testElNombreEstaFormadoCorrectamente(){
        //Given
        $carta = new Carta(1, "Jesucristo Superstar", "Blanco", "iconoblanco", "fondocarta", 2, 3, "imagencarta", "tipo", "subtipo", "iconoexp",
        "habilidad", "descripcion", 2, 2, "Ismael");
        //When
        $resultado = $carta->comprobarnombre();
        //Then
        $this->assertTrue($resultado);
    }

    /**
    * @covers ::comprobarnombre()
    */
    public function testElElementoNoEstaFormadoCorrectamente(){
        //Given
        $carta = new Carta(1, "Ismael", "Blanco", "iconoblanco", "fondocarta", 2, 3, "imagencarta", "tipo", "subtipo", "iconoexp",
        "habilidad", "descripcion", 2, 2, "Ismael");
        //When
        $resultado = $carta->comprobarelemento();
        //Then
        $this->assertNotTrue($resultado);
    }

    /**
    * @covers ::comprobarelemento()
    */
    public function testElElementoEstaFormadoCorrectamente(){
        //Given
        $carta = new Carta(1, "Jesucristo Superstar", "Blanco", "iconoblanco", "fondocarta", 2, 3, "imagencarta", "tipo", "subtipo", "iconoexp",
        "habilidad", "descripcion", 2, 2, "Ismael");
        //When
        $resultado = $carta->comprobarnombre();
        //Then
        $this->assertTrue($resultado);
    }






    

}

