<?php

namespace Amc\Solid\OCP;

use PHPUnit\Framework\TestCase;

class CalculadoraDePrecosTest extends TestCase
{
    public function testValorMaiorQueCincoMil()
    {
        $tabela = new TabelaDePrecoPadrao();
        $entrega = new Frete();
        $produto = new Compra(10000,'sao paulo');
        $calculadora = new CalculadoraDePrecos($tabela, $entrega);
        $actual = $calculadora->calcula($produto);

        $this->assertEquals(9715,$actual);
    }
}