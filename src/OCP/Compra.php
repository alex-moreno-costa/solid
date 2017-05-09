<?php

namespace Amc\Solid\OCP;

class Compra
{
    private $_valor;
    private $_cidade;

    public function __construct(float $valor, string $cidade)
    {
        $this->_cidade = $cidade;
        $this->_valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->_valor;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->_cidade;
    }
}