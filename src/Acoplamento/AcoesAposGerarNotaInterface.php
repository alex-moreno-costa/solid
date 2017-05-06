<?php

namespace Amc\Solid\Acoplamento;

interface AcoesAposGerarNotaInterface
{
    public function executa(NotaFiscal $nf);
}