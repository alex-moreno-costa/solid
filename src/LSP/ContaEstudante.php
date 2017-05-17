<?php

namespace Amc\Solid\LSP;

class ContaEstudante extends ContaComum
{
    private $milhas;

    public function deposita($valor)
    {
        parent::deposita($valor);
        $this->milhas += $valor;
    }

    public function getMilhas()
    {
        return $this->milhas;
    }

    public function rende()
    {
        throw new \Exception("Conta de estudante não rende");
    }
}