<?php

namespace Amc\Solid\Acoplamento;

class GeradorNotaFiscal
{
    private $acoes;

    public function __construct()
    {
        $this->acoes = [];
    }

    public function adicionarAcaoAposGerarNota(AcoesAposGerarNotaInterface $acao)
    {
        $this->acoes[] = $acao;
    }

    public function gera(Fatura $fatura)
    {
        $valor = $fatura->getValorMensal();

        $nf = new NotaFiscal($valor, $this->impostoSobreValor($valor));

        $return = [];
        foreach ($this->acoes as $acao) {
            $return[] = $acao->executa($nf);
        }

        return $return;
    }

    private function impostoSobreValor($valor)
    {
        return $valor * 0.06;
    }
}
