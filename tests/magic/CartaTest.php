<?php

declare(strict_types=1);

namespace Daw\Tests\Magic;

use Daw\Magic\Carta;
use PHPUnit\Framework\TestCase;
use DomainException;


class CartaPrueba extends TestCase{

    /**
    * @covers ::IsDniCorrecto
    */
    public function testIsDniCorrectoSiElFormatoNoEsCorrectoDevuelveDomainException(){
        $this->expectException(DomainException::class);
        //Given
        $dni = new Carta("8881988M");
        //When
        $resultado = $dni->IsDniCorrecto(); 
    }

    /**
    * @covers ::IsDniCorrecto
    */
    public function testIsDniCorrectoSiElDniIntroducidoTiene9CaracteresDevuelveTrue(){
        //Given
        $dni = new UtilDni("38881988M");
        //When
        $resultado = $dni->IsDniCorrecto();
        //Then
        $this->assertTrue($resultado);  
    }

    /**
    * @covers ::IsDniCorrecto
    */
    public function testIsDniCorrectoSiElDniIntroducidoNoEsCorrectoDevuelveDomainException(){
        $this->expectException(DomainException::class);
        //Given
        $dni = new UtilDni("38881988Q");
        //When
        $resultado = $dni->IsDniCorrecto();
    }

    /**
    * @covers ::IsDniCorrecto
    */
    public function testIsDniCorrectoSiElDniIntroducidoEsCorrectoDevuelveTrue(){
        //Given
        $dni = new UtilDni("38881988M");
        //When
        $resultado = $dni->IsDniCorrecto();
        //Then
        $this->assertTrue($resultado);
    }

    /**
    * @covers ::IsDniCorrecto
    */
    public function testIsDniCorrectoSiElDniIntroducidoConLetraEsCorrectoDevuelveTrue(){
        //Given
        $dni = new UtilDni("X0523821L");
        //When
        $resultado = $dni->IsDniCorrecto();
        //Then
        $this->assertTrue($resultado);
    }

    /**
    * @covers ::IsDniCorrecto
    */
    public function testIsDniCorrectoSiElDniIntroducidoConLetraEsIncorrectoDevuelveDomainException(){
        $this->expectException(DomainException::class);
        //Given
        $dni = new UtilDni("X0523821J");
        //When
        $resultado = $dni->IsDniCorrecto();

    }

}

