<?php

namespace Amc\Solid\Encapsulamento;

class Fatura
{

    private $cliente;
    private $valor;
    private $pagamentos;
    private $pago = false;

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
        $this->verificarSeAFaturaFoiQuitada();
    }

    private function verificarSeAFaturaFoiQuitada()
    {
        $total = 0;

        foreach ($this->pagamentos as $pagamento) {
            $total += $pagamento->getValor();
        }

        if ($total >= $this->valor) {
            $this->pago = true;
        }
    }

    public function isPago()
    {
        return $this->pago;
    }
}



