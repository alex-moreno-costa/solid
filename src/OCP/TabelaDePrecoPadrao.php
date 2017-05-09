<?php

namespace Amc\Solid\OCP;

class TabelaDePrecoPadrao implements TabelaDePrecosInterface
{
    public function descontoPara($valor)
    {
        if ($valor > 5000) return 0.03;
        if ($valor > 1000) return 0.05;
        return 0;
    }
}