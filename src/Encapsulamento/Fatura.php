<?php

namespace Amc\Solid\Encapsulamento;

class Fatura
{

    private $cliente;
    private $valor;
    private $pagamentos;
    private $pago;

    public function __construct($cliente, $valor)
    {
        $this->cliente = $cliente;
        $this->valor = $valor;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getPagamentos()
    {
        return $this->pagamentos;
    }

    public function addPagamento(Pagamento $pagamento)
    {
        $this->pagamentos[] = $pagamento;
    }

    public function isPago()
    {
        return $this->pago;
    }

    public function setPago($pago)
    {
        $this->pago = $pago;
    }
}



