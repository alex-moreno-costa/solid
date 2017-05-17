<?php

namespace Amc\Solid\LSP;

class ContaComum
{
    /**
     * @var ManipuladorDeSaldo
     */
    protected $manipulador;

    public function __construct()
    {
        $this->manipulador = new ManipuladorDeSaldo();
    }

    public function saca($valor)
    {
        $this->manipulador->saca($valor);
    }

    public function deposita($valor)
    {
        $this->manipulador->deposita($valor);
    }

    public function getSaldo()
    {
        return $this->manipulador->getSaldo();
    }

    public function rende()
    {
        $this->manipulador->rende(1.1);
    }
}