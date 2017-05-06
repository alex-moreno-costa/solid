<?php

namespace Amc\Solid\SRP;

class CalculadoraDeSalario {

    public function calcula(Funcionario $funcionario) {

        if($funcionario->getCargo() instanceof Desenvolvedor) {
            $imposto = new DezOuVintePorcento();
            return $imposto->calcular($funcionario);
        }
        else if($funcionario->getCargo() instanceof Tester || $funcionario->getCargo() instanceof Dba) {
            $imposto = new QuinzeOuVinteCincoPorcento();
            return $imposto->calcular($funcionario);
        }

    }
}