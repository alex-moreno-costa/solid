<?php

namespace Amc\Solid\Encapsulamento;


class Boleto
{
    private $valor;

    public function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }
}