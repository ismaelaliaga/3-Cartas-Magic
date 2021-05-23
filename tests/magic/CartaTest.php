<?php

declare(strict_types=1);

namespace Daw\Tests\Magic;

use Daw\Magic\Carta;
use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase{

    /**
    * @covers ::comprobarnombre()
    */

    public function testElNombreEstaFormadoCorrectamenteYSeCrea(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta camión";
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
        $color_elemento = 2;
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
    * @covers ::comprobariconomana()
    */

    public function testElIconoManaNoEstaFormadoCorrectamente(){
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
    * @covers ::comprobariconomana()
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
    * @covers ::comprobarfondo()
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
    * @covers ::comprobarfondo()
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
    * @covers ::comprobarnummanacolor()
    */

    
    public function testElNumColorManaEstaFormadoCorrectamenteYSeCrea(){
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

    /**
    * @covers ::comprobarnummanacolor()
    */

    
    public function testElNumColorManaNoEstaFormadoCorrectamente(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.jpger";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpgt';
        $num_mana_color = 22;
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
        $this->assertNotTrue($resultado);
    }

    /**
    * @covers ::comprobarnummanaincoloro()
    */

    
    public function testElNumIncoloroManaEstaFormadoCorrectamenteYSeCrea(){
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
        $resultado = $carta->comprobarnummanaincoloro($num_mana_incoloro);
        //Then
        $this->assertTrue($resultado);
    }

    /**
    * @covers ::comprobarnummanaincoloro()
    */

    
    public function testElNumIncoloroManaNoEstaFormadoCorrectamente(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.jpger";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpgt';
        $num_mana_color = 22;
        $num_mana_incoloro = 200;
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
        $resultado = $carta->comprobarnummanaincoloro($num_mana_incoloro);
        //Then
        $this->assertNotTrue($resultado);
    }

    /**
    * @covers ::comprobarimgcriatura()
    */

    
    public function testImagenCriaturaEstaFormadoCorrectamenteYSeCrea(){
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
        $resultado = $carta->comprobarimgcriatura($imagen_carta);
        //Then
        $this->assertTrue($resultado);
    }

    /**
    * @covers ::comprobarimgcriatura()
    */

    
    public function testImagenCriaturaNoEstaFormadoCorrectamente(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.jpger";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpgt';
        $num_mana_color = 22;
        $num_mana_incoloro = 200;
        $imagen_carta = './img/criaturas/01.png8';
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
        $resultado = $carta->comprobarimgcriatura($imagen_carta);
        //Then
        $this->assertNotTrue($resultado);
    }

    /**
    * @covers ::comprobartipo()
    */

    
    public function testTipoEstaFormadoCorrectamenteYSeCrea(){
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
        $resultado = $carta->comprobartipo($tipo);
        //Then
        $this->assertTrue($resultado);
    }

    /**
    * @covers ::comprobartipo()
    */

    
    public function testTipoNoEstaFormadoCorrectamente(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.jpger";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpgt';
        $num_mana_color = 22;
        $num_mana_incoloro = 200;
        $imagen_carta = './img/criaturas/01.png8';
        $tipo = "Tipooooooooooooooooooooooooooooooooooooooooooooo";
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
        $resultado = $carta->comprobartipo($tipo);
        //Then
        $this->assertNotTrue($resultado);
    }

    /**
    * @covers ::comprobarsubtipo()
    */

    
    public function testSubtipoEstaFormadoCorrectamenteYSeCrea(){
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
        $resultado = $carta->comprobarsubtipo($subtipo);
        //Then
        $this->assertTrue($resultado);
    }

    /**
    * @covers ::comprobarsubtipo()
    */

    
    public function testSubtipoNoEstaFormadoCorrectamente(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.jpger";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpgt';
        $num_mana_color = 22;
        $num_mana_incoloro = 200;
        $imagen_carta = './img/criaturas/01.png8';
        $tipo = "Tipooooooooooooooooooooooooooooooooooooooooooooo";
        $subtipo = "Subtipooooooooooooooooooooooooooooooooooooooooooooooooooooooooo";
        $icono_expansion = 1;
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobarsubtipo($subtipo);
        //Then
        $this->assertNotTrue($resultado);
    }

    /**
    * @covers ::comprobariconoexp()
    */

    
    public function testIconoExpansionEstaFormadoCorrectamenteYSeCrea(){
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
        $icono_expansion = "./img/expansiones/throneofeldraine.png";
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobariconoexp($icono_expansion);
        //Then
        $this->assertTrue($resultado);
    }

    /**
    * @covers ::comprobariconoexp()
    */

    
    public function testIconoExpansionNoEstaFormadoCorrectamente(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.jpger";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpgt';
        $num_mana_color = 22;
        $num_mana_incoloro = 200;
        $imagen_carta = './img/criaturas/01.png8';
        $tipo = "Tipooooooooooooooooooooooooooooooooooooooooooooo";
        $subtipo = "Subtipooooooooooooooooooooooooooooooooooooooooooooooooooooooooo";
        $icono_expansion = 1;
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobariconoexp($icono_expansion);
        //Then
        $this->assertNotTrue($resultado);
    }

    /**
    * @covers ::comprobarhabilidad()
    */

    
    public function testHabilidadEstaFormadoCorrectamenteYSeCrea(){
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
        $icono_expansion = "./img/expansiones/throneofeldraine.png";
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobarhabilidad($habilidad);
        //Then
        $this->assertTrue($resultado);
    }

    /**
    * @covers ::comprobarhabilidad()
    */

    
    public function testHabilidadNoEstaFormadoCorrectamente(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.jpger";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpgt';
        $num_mana_color = 22;
        $num_mana_incoloro = 200;
        $imagen_carta = './img/criaturas/01.png8';
        $tipo = "Tipooooooooooooooooooooooooooooooooooooooooooooo";
        $subtipo = "Subtipooooooooooooooooooooooooooooooooooooooooooooooooooooooooo";
        $icono_expansion = 1;
        $habilidad = "Aqui va la habilidadaaaaaaaaaaaaaaaaaaaasdasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasassssssssssssssssssssssssssssssssssssssssssssssss";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobarhabilidad($habilidad);
        //Then
        $this->assertNotTrue($resultado);
    }

    /**
    * @covers ::comprobardescripcion()
    */

    
    public function testDescripcionEstaFormadoCorrectamenteYSeCrea(){
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
        $icono_expansion = "./img/expansiones/throneofeldraine.png";
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobardescripcion($descripcion);
        //Then
        $this->assertTrue($resultado);
    }

    /**
    * @covers ::comprobardescripcion()
    */

    
    public function testDescripcionNoEstaFormadoCorrectamente(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.jpger";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpgt';
        $num_mana_color = 22;
        $num_mana_incoloro = 200;
        $imagen_carta = './img/criaturas/01.png8';
        $tipo = "Tipooooooooooooooooooooooooooooooooooooooooooooo";
        $subtipo = "Subtipooooooooooooooooooooooooooooooooooooooooooooooooooooooooo";
        $icono_expansion = 1;
        $habilidad = "Aqui va la habilidadaaaaaaaaaaaaaaaaaaaasdasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasassssssssssssssssssssssssssssssssssssssssssssssss";
        $descripcion = "Aqui va la descripcionaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobardescripcion($descripcion);
        //Then
        $this->assertNotTrue($resultado);
    }

    /**
    * @covers ::comprobarfuerza()
    */

    
    public function testFuerzaEstaFormadoCorrectamenteYSeCrea(){
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
        $icono_expansion = "./img/expansiones/throneofeldraine.png";
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobarfuerza($fuerza);
        //Then
        $this->assertTrue($resultado);
    }

    /**
    * @covers ::comprobarfuerza()
    */

    
    public function testFuerzaNoEstaFormadoCorrectamente(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.jpger";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpgt';
        $num_mana_color = 22;
        $num_mana_incoloro = 200;
        $imagen_carta = './img/criaturas/01.png8';
        $tipo = "Tipooooooooooooooooooooooooooooooooooooooooooooo";
        $subtipo = "Subtipooooooooooooooooooooooooooooooooooooooooooooooooooooooooo";
        $icono_expansion = 1;
        $habilidad = "Aqui va la habilidadaaaaaaaaaaaaaaaaaaaasdasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasassssssssssssssssssssssssssssssssssssssssssssssss";
        $descripcion = "Aqui va la descripcionaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
        $fuerza = "a";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobarfuerza($fuerza);
        //Then
        $this->assertNotTrue($resultado);
    }

    /**
    * @covers ::comprobarresistencia()
    */

    
    public function testResistenciaEstaFormadoCorrectamenteYSeCrea(){
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
        $icono_expansion = "./img/expansiones/throneofeldraine.png";
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobarresistencia($resistencia);
        //Then
        $this->assertTrue($resultado);
    }

    /**
    * @covers ::comprobarresistencia()
    */

    
    public function testResistenciaNoEstaFormadoCorrectamente(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.jpger";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpgt';
        $num_mana_color = 22;
        $num_mana_incoloro = 200;
        $imagen_carta = './img/criaturas/01.png8';
        $tipo = "Tipooooooooooooooooooooooooooooooooooooooooooooo";
        $subtipo = "Subtipooooooooooooooooooooooooooooooooooooooooooooooooooooooooo";
        $icono_expansion = 1;
        $habilidad = "Aqui va la habilidadaaaaaaaaaaaaaaaaaaaasdasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasassssssssssssssssssssssssssssssssssssssssssssssss";
        $descripcion = "Aqui va la descripcionaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
        $fuerza = "a";
        $resistencia = 28;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobarresistencia($resistencia);
        //Then
        $this->assertNotTrue($resultado);
    }

    /**
    * @covers ::comprobarautor()
    */

    
    public function testAutorEstaFormadoCorrectamenteYSeCrea(){
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
        $icono_expansion = "./img/expansiones/throneofeldraine.png";
        $habilidad = "Aqui va la habilidad";
        $descripcion = "Aqui va la descripcion";
        $fuerza = "*";
        $resistencia = 2;
        $autor = "Ismael Aliaga";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobarautor($autor);
        //Then
        $this->assertTrue($resultado);
    }

    /**
    * @covers ::comprobarautor()
    */

    
    public function testAutorNoEstaFormadoCorrectamente(){
        //Given
        $id_carta = "11";
        $nombre_carta = "Nombre Carta";
        $color_elemento = "Blanco";
        $icono_mana = "./img/elementos/mana/manablanco.jpger";
        $fondo_carta = './img/elementos/fondos/fondoblanco.jpgt';
        $num_mana_color = 22;
        $num_mana_incoloro = 200;
        $imagen_carta = './img/criaturas/01.png8';
        $tipo = "Tipooooooooooooooooooooooooooooooooooooooooooooo";
        $subtipo = "Subtipooooooooooooooooooooooooooooooooooooooooooooooooooooooooo";
        $icono_expansion = 1;
        $habilidad = "Aqui va la habilidadaaaaaaaaaaaaaaaaaaaasdasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasassssssssssssssssssssssssssssssssssssssssssssssss";
        $descripcion = "Aqui va la descripcionaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
        $fuerza = "a";
        $resistencia = 28;
        $autor = "Ismael Aliaga Santo de la Sagrada Trinidad";
        $carta = new Carta($id_carta, $nombre_carta, $color_elemento, $icono_mana, $fondo_carta, $num_mana_color, $num_mana_incoloro, $imagen_carta, $tipo, $subtipo, $icono_expansion,
        $habilidad, $descripcion, $fuerza, $resistencia, $autor);
        //When
        $resultado = $carta->comprobarautor($autor);
        //Then
        $this->assertNotTrue($resultado);
    }





    

}

