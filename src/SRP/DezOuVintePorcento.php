<?php

namespace Amc\Solid\SRP;

class DezOuVintePorcento implements CalcularImpostoInterface
{
    public function calcular(Funcionario $funcionario) {

        if($funcionario->getSalario() > 3000) {
            return $funcionario->getSalario() * 0.8;
        }

        return $funcionario->getSalario() * 0.9;
    }
}