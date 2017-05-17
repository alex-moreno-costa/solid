<?php

namespace Amc\Solid\LSP;

use PHPUnit\Framework\TestCase;

class ProcessadorDeInvestimentosTest extends TestCase
{
    public function testProcessarInvestimentos()
    {
        $processador = new ProcessadorDeInvestimentos();
        $processador->processa();
    }
}