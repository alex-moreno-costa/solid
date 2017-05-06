<?php

namespace Amc\Solid\Acoplamento;

class EnviadorDeEmail implements AcoesAposGerarNotaInterface
{

    public function executa(NotaFiscal $nf)
    {
        return "email enviado";
    }
}