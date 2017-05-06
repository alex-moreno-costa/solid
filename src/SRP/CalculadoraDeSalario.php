<?php

namespace Amc\Solid\SRP;

class CalculadoraDeSalario {

    public function calcula(Funcionario $funcionario) {

        return $funcionario->calcularSalario();

    }
}