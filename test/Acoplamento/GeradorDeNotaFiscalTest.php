<?php

namespace Amc\Solid\Acoplamento;

use PHPUnit\Framework\TestCase;

class GeradorDeNotaFiscalTest extends TestCase
{
    public function testGeradorDeNotaFiscal()
    {
        $gerador = new GeradorNotaFiscal(new EnviadorDeEmail(), new NotaFiscalDao());
        $actual = $gerador->gera(new Fatura());

        $this->assertEquals($actual[0],'email enviado');
        $this->assertEquals($actual[1],'mandando pro dao');
    }
}