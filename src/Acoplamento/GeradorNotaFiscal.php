<?php

namespace Amc\Solid\Acoplamento;

class GeradorNotaFiscal {

    private $enviadorEmail;
    private $notaFiscalDao;

    public function __construct(EnviadorDeEmail $enviador,notaFiscalDao $nfDao) {
        $this->enviadorEmail = $enviador;
        $this->notaFiscalDao = $nfDao;
    }

    public function gera(Fatura $fatura) {

        $valor = $fatura->getValorMensal();

        $nf = new NotaFiscal($valor,$this->impostoSobreValor($valor));

        $return[] = $this->enviadorEmail->enviaEmail($nf);
        $return[] = $this->notaFiscalDao->persiste($nf);

        return $return;
    }

    private function impostoSobreValor($valor) {
        return $valor * 0.06;
    }
}
