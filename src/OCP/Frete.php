<?php

namespace Amc\Solid\OCP;

class Frete implements EntregaInterface
{
    public function para($cidade)
    {
        if (strtoupper($cidade) == "SAO PAULO") {
            return 15;
        }

        return 30;
    }
}