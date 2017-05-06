<?php

namespace Amc\Solid\Acoplamento;

class NotaFiscalDao implements AcoesAposGerarNotaInterface
{
    public function executa(NotaFiscal $nf)
    {
        return "mandando pro dao";
    }
}