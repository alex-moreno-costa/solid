<?php

namespace Amc\Solid\SRP;

class Cargo
{
    private $regra;

    public function __construct(CalcularImpostoInterface $regra)
    {
        $this->regra = $regra;
    }

    public function getRegra()
    {
        return $this->regra;
    }
}