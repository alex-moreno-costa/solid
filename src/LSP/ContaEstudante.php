<?php

namespace Amc\Solid\LSP;

class ContaEstudante
{
    private $milhas;

    /**
     * @var ManipuladorDeSaldo
     */
    private $manipulador;

    public function __construct()
    {
        $this->manipulador = new ManipuladorDeSaldo();
    }

    public function deposita($valor)
    {
        $this->manipulador->deposita($valor);
        $this->milhas += $valor;
    }

    public function getMilhas()
    {
        return $this->milhas;
    }

    public function rende()
    {
        return null;
    }
}