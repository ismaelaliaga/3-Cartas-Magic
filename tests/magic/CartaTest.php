<?php

declare(strict_types=1);

namespace Daw\Tests\Magic;

use Daw\Magic\Carta;
use PHPUnit\Framework\TestCase;


class CartaPrueba extends TestCase{

    /**
    * @covers ::comprobarnombre()
    */

    public function testElNombreEstaFormadoCorrectamenteYSeCrea(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.png";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpg';
        $num_mana_color = 2;
        $num_mana_incoloro = 4;
        $imagen_carta = './img/criaturas/01.png';
        $tipo = "Tipo";
        $subtipo = "Subtipo";
        $icono_expansion = 1;
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobarnombre($nombre_carta);
        //Then
        $this->assertTrue($resultado);
    }

    /**
    * @covers ::comprobarnombre()
    */

    public function testElNombreNoEstaFormadoCorrectamenteYNoSeCrea(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Cartaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.png";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpg';
        $num_mana_color = 2;
        $num_mana_incoloro = 4;
        $imagen_carta = './img/criaturas/01.png';
        $tipo = "Tipo";
        $subtipo = "Subtipo";
        $icono_expansion = 1;
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobarnombre($nombre_carta);
        //Then
        $this->assertNotTrue($resultado);
    }

    /**
    * @covers ::comprobarelemento()
    */

    public function testElElementoEstaFormadoCorrectamenteYSeCrea(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.png";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpg';
        $num_mana_color = 2;
        $num_mana_incoloro = 4;
        $imagen_carta = './img/criaturas/01.png';
        $tipo = "Tipo";
        $subtipo = "Subtipo";
        $icono_expansion = 1;
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobarelemento($color_elemento);
        //Then
        $this->assertTrue($resultado);
    }

     /**
    * @covers ::comprobarelemento()
    */

    public function testElElementoNoEstaFormadoCorrectamente(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.png";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpg';
        $num_mana_color = 2;
        $num_mana_incoloro = 4;
        $imagen_carta = './img/criaturas/01.png';
        $tipo = "Tipo";
        $subtipo = "Subtipo";
        $icono_expansion = 1;
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobarelemento($color_elemento);
        //Then
        $this->assertNotTrue($resultado);
    }

     /**
    * @covers ::comprobarelemento()
    */

    public function testElIconoNoEstaFormadoCorrectamente(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.pnga";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpg';
        $num_mana_color = 2;
        $num_mana_incoloro = 4;
        $imagen_carta = './img/criaturas/01.png';
        $tipo = "Tipo";
        $subtipo = "Subtipo";
        $icono_expansion = 1;
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobariconomana($icono_mana);
        //Then
        $this->assertNotTrue($resultado);
    }

     /**
    * @covers ::comprobarelemento()
    */


    public function testElIconoEstaFormadoCorrectamenteYSeCrea(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.jpg";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpg';
        $num_mana_color = 2;
        $num_mana_incoloro = 4;
        $imagen_carta = './img/criaturas/01.png';
        $tipo = "Tipo";
        $subtipo = "Subtipo";
        $icono_expansion = 1;
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobariconomana($icono_mana);
        //Then
        $this->assertTrue($resultado);
    }

    /**
    * @covers ::comprobarelemento()
    */

    
    public function testElFondoEstaFormadoCorrectamenteYSeCrea(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.jpg";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpg';
        $num_mana_color = 2;
        $num_mana_incoloro = 4;
        $imagen_carta = './img/criaturas/01.png';
        $tipo = "Tipo";
        $subtipo = "Subtipo";
        $icono_expansion = 1;
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobarfondo($fondo_carta);
        //Then
        $this->assertTrue($resultado);
    }

    /**
    * @covers ::comprobarelemento()
    */

    
    public function testElFondoNoEstaFormadoCorrectamente(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.jpger";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpgt';
        $num_mana_color = 2;
        $num_mana_incoloro = 4;
        $imagen_carta = './img/criaturas/01.png';
        $tipo = "Tipo";
        $subtipo = "Subtipo";
        $icono_expansion = 1;
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobarfondo($fondo_carta);
        //Then
        $this->assertNotTrue($resultado);
    }

    /**
    * @covers ::comprobarelemento()
    */

    
    public function testElNumDeManaDeFondoEstaFormadoCorrectamenteYSeCrea(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.jpg";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpg';
        $num_mana_color = 2;
        $num_mana_incoloro = 4;
        $imagen_carta = './img/criaturas/01.png';
        $tipo = "Tipo";
        $subtipo = "Subtipo";
        $icono_expansion = 1;
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobarnummanacolor($num_mana_color);
        //Then
        $this->assertTrue($resultado);
    }






    

}

