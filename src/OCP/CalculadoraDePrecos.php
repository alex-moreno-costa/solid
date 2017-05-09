<?php

namespace Amc\Solid\OCP;

class CalculadoraDePrecos
{
    private $_entrega;
    private $_tabela;

    public function __construct(TabelaDePrecosInterface $tabela, EntregaInterface $entrega)
    {
        $this->_entrega = $entrega;
        $this->_tabela = $tabela;
    }

    public function calcula(Compra $produto)
    {
        $desconto = $this->_tabela->descontoPara($produto->getValor());
        $frete = $this->_entrega->para($produto->getCidade());

        return $produto->getValor() * (1 - $desconto) + $frete;
    }
}