<?php

namespace Amc\Solid\Encapsulamento;

use PHPUnit\Framework\TestCase;

class ProcessadorDeBoletosTest extends TestCase
{
    public function testDeveRetornarFalsoPoisAFaturaNaoFoiQuitada()
    {
        $boletos = [];

        $fatura = new Fatura('Cliente 01', 605);
        $boletos[] = new Boleto(150);
        $boletos[] = new Boleto(300);
        $boletos[] = new Boleto(50);

        $processador = new ProcessadorDeBoletos();
        $processador->processa($boletos, $fatura);

        $this->assertFalse($fatura->isPago());
    }

    public function testDeveRetornarVerdadeiroPoisAFaturaFoiQuitada()
    {
        $boletos = [];

        $fatura = new Fatura('Cliente 01', 605);
        $boletos[] = new Boleto(150);
        $boletos[] = new Boleto(300);
        $boletos[] = new Boleto(50);
        $boletos[] = new Boleto(105);

        $processador = new ProcessadorDeBoletos();
        $processador->processa($boletos, $fatura);

        $this->assertTrue($fatura->isPago());
    }
}