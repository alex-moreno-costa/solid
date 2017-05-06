<?php

namespace Amc\Solid\SRP;

class QuinzeOuVinteCincoPorcento implements CalcularImpostoInterface
{
    public function calcular(Funcionario $funcionario) {

        if($funcionario->getSalario() > 2000) {
            return $funcionario->getSalario() * 0.75;
        }

        return $funcionario->getSalario() * 0.85;

    }
}