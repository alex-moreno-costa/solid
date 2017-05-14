<?php

namespace Amc\Solid\Encapsulamento;

class ProcessadorDeBoletos
{

    public function processa($boletos, Fatura $fatura)
    {

        $total = 0;

        foreach ($boletos as $boleto) {

            $pagamento = new Pagamento($boleto->getValor(), MeioPagamento::Boleto);

            $fatura->addPagamento($pagamento);

            $total += $boleto->getValor();

        }

        if ($total >= $fatura->getValor()) {
            $fatura->setPago(true);
            return true;
        }

        return false;

    }

}